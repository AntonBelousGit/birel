<?php


namespace App\Service;


use App\Repositories\RoleRepository;
use App\Repositories\UserRepository;
use App\Repositories\UserTypeRepository;
use Illuminate\Database\Eloquent\Collection;

class UserService
{

    protected $userRepository;
    protected $roleRepository;
    protected $userTypeRepository;

    public function __construct(UserRepository $userRepository, RoleRepository $roleRepository, UserTypeRepository $userTypeRepository)
    {
        $this->userRepository = $userRepository;
        $this->roleRepository = $roleRepository;
        $this->userTypeRepository = $userTypeRepository;
    }


    public function getUsersWithRole(): Collection
    {
        return $this->userRepository->getUsersWithRole();
    }
    public function getUsersWithRoleByID(int $id)
    {
        return $this->userRepository->getUsersWithRoleByID($id);
    }

    public function getAllRoles()
    {
        return $this->roleRepository->getAllRoles();
    }

    public function gatAllUserTypes()
    {
        return $this->userRepository->getAllUserTypes();
    }

}
