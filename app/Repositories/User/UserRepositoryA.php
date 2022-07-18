<?php 

namespace App\Repositories\User;

use App\Models\User;
use App\Repositories\BaseRepository;

class UserRepositoryA extends BaseRepository implements UserInterfaceRepository
{
    public function __construct(User $user)
    {
        parent::__construct($user);
    }

    public function all()
    {
        return $this->model->latest()->get();
    }
}