<?php

namespace HasanAliOz\OzturkDB;
abstract class BaseDatabaseAbstract
{
    /**
     * @param string $table
     * @param array $data
     * @return mixed
     */
    abstract public function create(string $table, array $data);
    abstract public function read();
    abstract public function update();
    abstract public function delete();

}