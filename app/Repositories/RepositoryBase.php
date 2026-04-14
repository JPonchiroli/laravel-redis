<?php

namespace App\Repositories;

use Illuminate\Support\Facades\Redis;

class RepositoryBase {

    public function get($id) {

        return Redis::hgetall($id);

    }

    public function create($dto, $entity) {

        $entity = $entity . '_id';
        $id = Redis::incr($entity);
        $entityId = "$entity:$id";

        foreach ($dto as $key => $value) {

            Redis::hset($entityId, $key, $value);

        }

    }

    public function clear() {
        
        Redis::flushdb();

    }

}