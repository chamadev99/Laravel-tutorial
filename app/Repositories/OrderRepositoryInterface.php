<?php

namespace App\Repositories;

interface OrderRepositoryInterface
{
    public function all();
    public function test();
    //public function newMethod();
    public function find($id);
    public function create(array $data);
    public function update($id, array $data);
    public function delete($id);
}
