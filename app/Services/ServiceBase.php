<?php

namespace App\Services;

use App\DTOs\DTO;
use App\Repositories\RepositoryBase;

class ServiceBase extends RepositoryBase{

    public function __construct(
        protected RepositoryBase $repository
    ) {}

    public function getById(DTO $dto) {
        $this->repository->get($dto);
    }

    public function store(DTO $dto, string $entity) {
        $this->repository->create($dto, $entity);
    }

    public function clearDB() {
        $this->repository->clear();
    }

}