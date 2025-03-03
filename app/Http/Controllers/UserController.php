<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Mail\sendWelcomePass;
use App\Models\department;
use App\Models\role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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
        $user = User::create($data);
        $user->assignRole($request->role);
        $email = $data["email"];
        $password = $data["password"];
        $name = $data["name"];

        Mail::to("jawadboulmal@gmail.com")->send(new sendWelcomePass($email,$password,$name));
//        dd($request->role);


        return redirect()->route("users.index")->with('success', 'User Has Been Created Successfully');
    }

    public function edit(User $user)
    {
        //
        $users = User::orderByDesc("id")->paginate(8);
        $department = Department::all();
        $roles = Role::all();
        return view("users.update",[
                "user"=>$user,
                "users"=>$users,
                "Roles"=>$roles,
                "departments"=>$department]
        );
    }
    public function update(UserRequest $request, User $user) {
        $data = $request->validated();

        if ($request->hasFile('userImage')) {
            $imagePath = $request->file('userImage')->store('profiles', 'public'); // Saves to storage/app/public
            $data["userImage"] = $imagePath;
        }

        // Update the specific user instance
        $user->update($data);

        // Assign role (make sure role exists)
        if ($request->has('role')) {
            $user->syncRoles([$request->role]);
        }

        return redirect()->route("users.index")->with('success', 'User Has Been Updated Successfully');
    }

}
