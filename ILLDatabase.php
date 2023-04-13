<?php
namespace HasanAliOz\OzturkDB;
use Illuminate\Database\Capsule\Manager as Capsule;
class ILLDatabase extends BaseDatabaseAbstract
{

    public function create(string $table, array $data)
    {
        $create = Capsule::table($table)->insert($data);
    }

    public function read()
    {
        // TODO: Implement read() method.
    }

    public function update()
    {
        // TODO: Implement update() method.
    }

    public function delete()
    {
        // TODO: Implement delete() method.
    }
}