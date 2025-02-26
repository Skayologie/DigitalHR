<?php

namespace App\Http\Controllers;

use App\Http\Requests\PermissionRequest;
use Dotenv\Validator;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionController extends Controller
{
    // This method will show permission page
    public function index(){
        return view("permissionAndRoles.permissions",[
            "permissionsList"=>Permission::orderby("created_at","DESC")->paginate("5"),

        ]);

    }
    // This method will show create permission page
    public function create(){
        return view("permissions.create");
    }
    // This method will insert permission to database
    public function store(PermissionRequest $request){
        $validator = $request->validated();
        if ($validator){
            Permission::create(["name"=>$validator['name']]);
            return redirect()->route("permissions.index")->with("message","Permission Added Successfully");
        }else{
            return redirect()->route("permissions.create")->withInput()->withErrors($validator);
        }

    }
    // This method will edit permission page
    public function edit(){

    }
    // This method will update permission in database
    public function update(){

    }
    // This method will delete permission in database
    public function destroy(){

    }
}
