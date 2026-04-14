<?php

namespace App\Http\Controllers;

use App\DTOs\UserCreateDto;
use App\Services\UserService;
use App\Http\Requests\UserStoreRequest;
use App\Http\Resources\UserStoreResource;
use Symfony\Component\HttpFoundation\Response;

class UserController extends Controller
{

    public function __construct(public UserService $userService) 
    {}

    public function show($id) {
        
        $user =  $this->userService->get($id);

        return new UserStoreResource($user);

    }

    public function store(UserStoreRequest $request) {
        
        $dto = UserCreateDto::fromRequest($request->validated());

        $this->userService->create($dto, 'user');

        return response()->json(['message' => 'User created successfully'], Response::HTTP_CREATED);

    }

    public function clear() {
        
        $this->userService->clear();

    }
}
