<?php 

namespace App\Services\Test;

use App\Services\BaseService;
use App\Repositories\Test\TestInterfaceRepository;

class TestService extends BaseService implements TestInterfaceService
{
    public function __construct(TestInterfaceRepository $testRepository)
    {
        parent::__construct($testRepository);
    }
}