<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserCreateRequest;
use App\Http\Requests\UserDependencyRequest;
use App\Models\User;
use App\Service\UserService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
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
     * @return Application|Factory|View
     */
    public function index()
    {
        $users = $this->userService->getUsersWithRole();
        return view('admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        $roles = $this->userService->getAllRoles();
        return view('admin.users.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return RedirectResponse
     */
    public function store(UserCreateRequest $data)
    {
        try {
            if (!$data['password']) unset($data['password']);
            $user = User::create($data->toArray());
            $user->role()->attach($data['role_id']);
        } catch (Throwable $e) {
            report($e);
            abort(500);
        }
        return redirect()->route('users.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     */
    public function edit($id)
    {
        try {
            $user = $this->userService->getUsersWithRoleByID($id);
            $roles = $this->userService->getAllRoles();
        }
        catch (Throwable $e)
        {
            report($e);
            abort(404);
        }
        return view('admin.users.edit',compact('user','roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param User $user
     * @return RedirectResponse
     */
    public function update(UserDependencyRequest $request,User $user)
    {
        $data = [
            'type' => $request->input('type')
        ];
        $user->update($data);
        $user->role()->sync($request['role_id']);
        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param User $user
     * @return RedirectResponse
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index');
    }
}
