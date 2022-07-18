<?php 

namespace App\Services\User;

use App\Repositories\User\UserInterfaceRepository;
use App\Services\BaseService;

class UserService extends BaseService implements UserInterfaceService
{
    // protected $userRepository;
    public function __construct(UserInterfaceRepository $userRepository)
    {
        // $this->userRepository = $userRepository;
        parent::__construct($userRepository);
    }

    // public function all()
    // {
    //     return $this->userRepository->all();
    // }
}