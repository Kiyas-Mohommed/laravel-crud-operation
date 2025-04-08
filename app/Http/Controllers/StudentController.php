<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStudentRequest;
use App\Models\User;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        $data = ['students' => $students];
        return view('students.index')->with($data);
    }

    public function create()
    {
        return view('students.create');
    }

    public function store(StoreStudentRequest $request)
    {
        $allData = $request->validated();
        $allData['password'] = Hash::make($allData['password']);

        $imageName = uniqid() . $request->file('images')->getClientOriginalName();
        $imagePath = $request->file('images')->storeAs('UPLOAD-IMAGES', $imageName, 'public');
        $allData['images'] = '/storage/' . $imagePath;

        Student::create($allData);
        return redirect()->to('/students');
    }

    public function edit($id)
    {
        $student = Student::find($id);
        return view('students.edit')->with('student', $student);
    }

    public function update(Request $request, $id)
    {
        $student = Student::find($id);
        $input = $request->all();
        $student->update($input);
        return redirect()->to('/students');
    }

    public function destroy($id)
    {
        Student::find($id)->delete();
        return redirect('/students');
    }
}