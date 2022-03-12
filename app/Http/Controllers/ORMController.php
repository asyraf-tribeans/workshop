<?php

namespace App\Http\Controllers;

use App\Models\Exam;
use App\Models\Student;
use App\Models\Subject;
use Illuminate\Http\Request;

class ORMController extends Controller
{
    public function welcome()
    {
        return response()->json('welcome');
    }

    public function students()
    {
        $students = Student::latest()->get();
        return response()->json($students);

        // $student = Student::find(3);
        // return response()->json($student->subjects);
    }

    public function subjects()
    {
        $subjects = Subject::latest()->get();
        return response()->json($subjects);

        // $subject = Subject::find(5);
        // return response()->json($subject->exam);

        // $subject = Subject::find(3);
        // return response()->json($subject->students);
    }

    public function studentDetails(Student $student, Subject $subject)
    {
        $arr = [];
        $arr['student_name'] = $student->name;
        $arr['subject_name'] = $subject->name;
        $arr['code_subject'] = $subject->code_subject;
        $arr['exam_name'] = $subject->exam->name;
        foreach ($subject->exam->teachers as $teacher) {
            $arr['teachers'][] = ['teacher_name' => $teacher->name];
        }
        return response()->json($arr);
    }

    public function subjectStudent(Student $student)
    {
        return response()->json($student->subjects);
    }
}
