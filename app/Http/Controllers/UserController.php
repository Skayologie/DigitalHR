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
//        $data = $request->validated();
        $data = $request->validate([
            "name" => "required|string|max:255",
            "email" => "required|email|unique:users,email",
            "userImage" => "nullable|image|mimes:jpeg,png,jpg,gif|max:2048",
            "department_id" => "required|exists:departments,id",
            "role" => "required|string|exists:roles,name",
            "gender" => "required|in:male,female,other",
            "salary" => "required|numeric|min:0",
            "national_id" => "required|string|unique:users,national_id|max:20",
            "phone_number" => "required|string|max:15",
            "birth_date" => "required|date|before:today",
            "start_work_at" => "required|date|before:today",
            "address" => "required|string|max:255",
        ]);
        dd($data["start_work_at"]);
        $password = "Login@1234";
        $data["password"] = $password;
        if ($request->hasFile('userImage')) {
            $imagePath = $request->file('userImage')->store('profiles', 'public');
            $data["userImage"] = $imagePath;
        }
//        dd($data);
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
                "departments"=>$department
            ]
        );
    }
    public function update(UserRequest $request, User $user) {
        $data = $request->input();

        if ($request->hasFile('userImage')) {
            $imagePath = $request->file('userImage')->store('profiles', 'public');
            $data["userImage"] = $imagePath;
        }
//        dd($data);

        $user->update($data);

        if ($request->has('role')) {
            $user->syncRoles([$request->role]);
        }


        return redirect()->route("users.index")->with('success', 'User Has Been Updated Successfully');
    }

}
