<?php

namespace App\Repositories;

interface BaseRepositoryInterface
{
    public function find($id);

    public function index($subject = null, $options = []);

    public function lists($filter = [], $columns = []);

    public function store($input);

    public function update($input, $id);

    public function delete($ids);
}
