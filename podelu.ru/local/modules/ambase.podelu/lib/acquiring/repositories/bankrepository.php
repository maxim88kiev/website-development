<?php

namespace AMBase\Podelu\Acquiring\Repositories;

class BankRepository
{
    private $connection;
    private $banks = [];

    public function __construct($connection)
    {
        $this->connection = $connection;
    }

    public function find()
    {
        $sql = 'select * from acquiring_banks';
        $recordset = $this->connection->query($sql);

        while ($record = $recordset->fetch()) {
            $this->banks[$record['id']] = $record;
        }

        return $this->banks;
    }

    public function getById($id)
    {
        if (!empty($this->banks[$id])) {
            return $this->banks[$id];
        }

        $sql = "select * from acquiring_banks where id = $id";
        $recordset = $this->connection->query($sql);

        while ($record = $recordset->fetch()) {
            $this->banks[$record['id']] = $record;
        }
    }
}