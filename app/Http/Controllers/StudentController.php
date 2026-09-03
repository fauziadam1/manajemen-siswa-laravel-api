<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function all()
    {
        $student = Student::all();

        return response()->json([
            'status' => 'succses',
            'message' => 'get all student succsesfuly',
            'data' => $student
        ], 200);
    }

    public function byId(int $id)
    {
        $student = Student::where("id", $id)->first();

        return response()->json([
            'status' => 'succses',
            'message' => 'get student by id succsesfuly',
            'data' => $student
        ], 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nis' => 'required|string',
            'name' => 'required|string',
            'class' => 'required|string',
            'major' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string'
        ]);

        $student = Student::create([
            'nis' => $request->nis,
            'name' => $request->name,
            'class' => $request->class,
            'major' => $request->major,
            'email' => $request->email,
            'phone' => $request->phone,
        ]);

        return response()->json([
            'status' => "success",
            "message" => "add student successfuly",
            "data" => $student
        ], 201);
    }

    public function update(Request $request, int $id) {
        $request->validate([
            ''
        ]);
    }
}
