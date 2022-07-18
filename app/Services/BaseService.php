<?php

namespace App\Services;

use App\Repositories\BaseInterfaceRepository;

class BaseService implements BaseInterfaceService
{
    protected $repository;
    public function __construct(BaseInterfaceRepository $repository)
    {
        $this->repository = $repository;
    }

    public function all()
    {
        return $this->repository->all();
    }

    public function get($id) {
        return $this->repository->get($id);
    }

    public function store(array $data) 
    {
        return $this->repository->store($data);
    }

    public function delete($id)
    {
        return  $this->repository->delete($id);
    }
}