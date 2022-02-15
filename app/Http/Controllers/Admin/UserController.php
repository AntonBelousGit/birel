<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserCreateRequest;
use App\Http\Requests\UserDependencyRequest;
use App\Models\User;
use App\Service\UserService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Throwable;

class UserController extends Controller
{
    protected $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $users = $this->userService->getUsersWithRoleAndType();
        return view('admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        $roles = $this->userService->getAllRoles();
        $userTypes = $this->userService->gatAllUserTypes();
        return view('admin.users.create', compact('roles', 'userTypes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(UserCreateRequest $data)
    {
        try {
            if (!$data['password']) unset($data['password']);
            $user = User::create($data->toArray());
            $user->role()->attach($data['role_id']);
            $user->user_type()->attach($data['user_type_id']);
        } catch (Throwable $e) {
            report($e);
            abort(500);
        }
        return redirect()->route('users.index');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\User $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     */
    public function edit($id)
    {
        try {
            $user = $this->userService->getUsersWithRoleAndTypeByID($id);
            $roles = $this->userService->getAllRoles();
            $userTypes = $this->userService->gatAllUserTypes();
        }
        catch (Throwable $e)
        {
            report($e);
            abort(404);
        }
        return view('admin.users.edit',compact('user','roles','userTypes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Models\User $user
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UserDependencyRequest $data,User $user)
    {
        $user->role()->sync($data['role_id']);
        $user->user_type()->sync($data['user_type_id']);
        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\User $user
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index');
    }
}
