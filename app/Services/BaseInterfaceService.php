<?php

namespace App\Services;

interface BaseInterfaceService
{
    public function all();
    
    public function get($id);

    public function store(array $data);

    public function delete($id);
}