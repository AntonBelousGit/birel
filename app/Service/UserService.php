<?php


namespace App\Service;


use App\Repositories\UserRepository;
use Illuminate\Database\Eloquent\Collection;

class UserService
{

    protected $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }


    public function getUsersWithRoleAndType(): Collection
    {
      return  $this->userRepository->getUsersWithRoleAndType();
    }
}