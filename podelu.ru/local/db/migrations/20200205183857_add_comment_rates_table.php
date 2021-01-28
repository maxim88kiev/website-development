<?php

use Phinx\Migration\AbstractMigration;

class AddCommentRatesTable extends AbstractMigration
{
    public function change()
    {
        $table = $this->table('ambase_podelu_comment_rates');
        $table->addColumn('comment_id', 'integer', ['signed' => true,])
            ->addColumn('value', 'boolean')
            ->addColumn('user_id', 'integer', ['signed' => true, 'null' => true])
            ->addColumn('ip', 'string', ['length' => 15, 'null' => true])
            ->addColumn('user_agent', 'string', ['null' => true])
            ->addTimestamps()
            ->create();
    }
}
