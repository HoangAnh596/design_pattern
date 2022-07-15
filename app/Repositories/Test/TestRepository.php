<?php 

namespace App\Repositories\Test;

use App\Models\Test;
use App\Repositories\BaseRepository;

class TestRepository extends BaseRepository implements TestInterfaceRepository
{
    public function __construct(Test $test)
    {
        parent::__construct($test);
    }
}