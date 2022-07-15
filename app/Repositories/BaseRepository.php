<?php 

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;

class BaseRepository implements BaseInterfaceRepository
{
    protected $model;
    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function all() 
    { 
        return $this->model->get();
    }

    public function get($id) {

    }

    public function store(array $data) 
    {
        return $this->model->create($data);

    }

    public function update($id, array $data) {

    }

    public function delete($id) {

    }
}