<?php

namespace App\DTOs;

abstract class DTO {

    abstract static function fromRequest(array $request): self;

    function toArray(): array
    {
        return get_object_vars($this);
    }

}