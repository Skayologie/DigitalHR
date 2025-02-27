<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\department;
use App\Models\role;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index()
    {
        //
        $users = User::orderByDesc("id")->paginate(8);
        $department = Department::all();
        $roles = Role::all();
        return view("users.index",
        [
            "users"=>$users,
            "Roles"=>$roles,
            "departments"=>$department
        ]
        );
    }

    public function store(UserRequest $request){
        $data = $request->validated();
        $password = "Login@1234";
        $data["password"] = $password;
        if ($request->hasFile('userImage')) {
            $imagePath = $request->file('userImage')->store('profiles', 'public'); // Saves to storage/app/public/uploads
            $data["userImage"] = $imagePath;
        }

        User::create($data);
        return redirect()->route("users.index")->with('success', 'User Has Been Created Successfully');
    }

}
