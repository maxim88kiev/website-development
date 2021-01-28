<?php

use Phinx\Migration\AbstractMigration;

class AddCities1 extends AbstractMigration
{
    public function up()
    {
        $data = [
            [
                'form_1' => 'Великий Новгород',
                'form_2' => 'Великого Новгорода',
                'form_3' => 'Великому Новгороду',
                'form_4' => 'Великий Новгород',
                'form_5' => 'Великим Новгородом',
                'form_6' => 'Великом Новгороде',
            ],[
                'form_1' => 'Евпатория',
                'form_2' => 'Евпатории',
                'form_3' => 'Евпатории',
                'form_4' => 'Евпаторию',
                'form_5' => 'Евпаторией',
                'form_6' => 'Евпатории',
            ],[
                'form_1' => 'Керчь',
                'form_2' => 'Керчи',
                'form_3' => 'Керчи',
                'form_4' => 'Керчь',
                'form_5' => 'Керчью',
                'form_6' => 'Керчи',
            ],[
                'form_1' => 'Севастополь',
                'form_2' => 'Севастополя',
                'form_3' => 'Севастополю',
                'form_4' => 'Севастополь',
                'form_5' => 'Севастополем',
                'form_6' => 'Севастополе',
            ],[
                'form_1' => 'Симферополь',
                'form_2' => 'Симферополя',
                'form_3' => 'Симферополю',
                'form_4' => 'Симферополь',
                'form_5' => 'Симферополем',
                'form_6' => 'Симферополе',
            ]
        ];

        $cities = $this->table('ambase_podelu_cities');
        $cities->insert($data)
            ->saveData();
    }

    public function down()
    {
        $builder = $this->getQueryBuilder();

        $builder
            ->delete()
            ->from('ambase_podelu_cities')
            ->where(function ($exp) {
                return $exp->in('form_1', [
                    'Великий Новгород',
                    'Евпатория',
                    'Керчь',
                    'Севастополь',
                    'Симферополь',
                ]);
            })->execute();

    }
}
