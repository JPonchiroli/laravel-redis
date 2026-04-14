<?php

namespace App\Http\Controllers;

use App\Services\ServiceBase;
use Illuminate\Routing\Controller as ControllerBase;

abstract class Controller extends ControllerBase
{
    public function __construct(protected ServiceBase $service)
    {
        parent::__construct($service);
    }
}
