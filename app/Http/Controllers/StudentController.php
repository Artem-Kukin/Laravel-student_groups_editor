<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Group;
use App\Models\Student;
use Illuminate\Http\Request;



class StudentController extends Controller
{
    public function index(Group $group)
    {
        // $students = $group->students();
        // dd($students);

        $students = Student::all();
        return view('student.index', [
            'students' => $students,
            'group' => $group,
        ]);
    }

    public function create(Group $group)
    {
        return view('student.create', [
            'group' => $group
        ]);
    }
    public function store(Group $group)
    {
        $data = request()->validate([
            'group_id' => 'integer',
            'surname' => 'string',
            'name' => 'string',
        ]);

        // dd($data);
        Student::create($data);

        return redirect()->route('students.index', $group->id);
    }

    public function show($group_id, $student_id)
    {
        $student = Student::find($student_id);
        $group = Group::find($group_id);

        return view('student.show', [
            'group' => $group,
            'student' => $student,
        ]);
    }
}
