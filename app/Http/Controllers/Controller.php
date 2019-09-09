<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function studentList(){
        $students =  Student::where("active",1)
            ->paginate(20);
        return view("list",compact('students'));
    }

    public function addStudent()
    {
        return view("form-add");
    }

    public function saveStudent(Request $request)
    {
        $rules = [
            "name" => "required|string|max:255",
            "age" => "required|numeric",
            "address" => "required|string|max:200",
            "telephone" => "required|string|max:20",
        ];
        $this->validate($request, $rules);
        try {
            Student::create([
                "name" => $request->get("name"),
                "age" => $request->get("age"),
                "address" => $request->get("address"),
                "telephone" => $request->get("telephone")
            ])->save();
        } catch (\Exception $e) {
            die($e->getMessage());
        }
        return redirect("/view-student");
    }
}
