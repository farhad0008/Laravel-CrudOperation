<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;


class EmployeeController extends Controller
{
    //
    function openRegister(){
        return view("register");
    }

    function store(Request $req){
        $result=$req->all();
        $result["hobby"]=implode(",",$result["hobby"]);
        Employee::create($result);
        return redirect()->route("display");
    }

    function display(){
        $employee=Employee::get();
    return view("display",["employee"=>$employee]);
}
function delete($id){
Employee::where("eid","=",$id)->delete();
return redirect()->route("display");
}
function editData($id){
$employee=Employee::where("eid","=",$id)->first();
return view("update",["employee"=>$employee]);
}

function update(Request $req){
    Employee::where("eid","=",$req->eid)->update([
        'name'=>$req->name,
        'email'=>$req->email,
        'gender'=>$req->gender,
        'hobby'=>implode(",",$req->hobby),
        'city'=>$req->city,
        'dob'=>$req->dob
    ]);
    return redirect()->route("display");
}

// file upload
function upload(Request $req){
    echo $req->file("file")->store("upload","public");
}

// login session
function loginView(){
    return view("login");
}

function login(Request $req){
    $result=$req->all();
    print_r($result);
    $email = Employee::where('gender', $req['gender'])->first();
     echo $email;

        if ($email) {
            // $pass = Employee::where('password', $req['password'])->first();
            session(['email' => $email->email]);
            return redirect('/display');
            echo $email;
            // if ($pass) {
                // }
            }else{
            return redirect('/login')->with('success', "Invalid Email Id and Pass");
            echo $email;
        }

}
}
