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


    public function getUsersWithRoleAndType(): Collection
    {
        return $this->userRepository->getUsersWithRoleAndType();
    }
    public function getUsersWithRoleAndTypeByID(int $id)
    {
        return $this->userRepository->getUsersWithRoleAndTypeByID($id);
    }

    public function getAllRoles()
    {
        return $this->roleRepository->getAllRoles();
    }

    public function gatAllUserTypes()
    {
        return $this->userTypeRepository->getAllUserTypes();
    }

}
