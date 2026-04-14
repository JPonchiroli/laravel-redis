<?php

namespace App\Services;

use App\Repositories\RepositoryBase;
use App\Repositories\UserRepository;

class UserService extends ServiceBase {

    protected RepositoryBase $repository;
    
    public function __construct(UserRepository $repository){
        $this->repository = $repository;
    }

}