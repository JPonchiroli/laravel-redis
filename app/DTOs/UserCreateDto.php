<?php

namespace App\DTOs;

class UserCreateDto extends DTO{

    public function __construct(
        public string $name,
        public int $age
    ){
    }

    public static function fromRequest(array $request): self
    {

        return new self(
            $request['name'],
            $request['age']
        );

    }

}