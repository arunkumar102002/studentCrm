<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Semester;
use App\Models\SemesterFees;
use Illuminate\Http\Request;

class feesController extends Controller
{

    public function feesdatashow(Request $request)
    {
        $courses = Course::all();
        $semester = Semester::all();

        $courseFees = SemesterFees::with(['course', 'semester'])
            ->get()
            ->groupBy(function ($item) {
                return $item->course_id . '_' . $item->semester_id;
            });
        //dd($courseFees);
        return view('fees.index', compact('courses', 'semester', 'courseFees'));
    }


    public function saveAmount(Request $request)
    {
        //dd($request->all());
        $request->validate([            
            'Fees_Amount' => 'integer', // Add other validation rules as needed
            'course_id' => 'integer|nullable',
            'semester_id' => 'integer|nullable',
        ]);

        $fees = SemesterFees::updateOrCreate(
            [
                'course_id' => $request->course_id,
                'semester_id' => $request->semester_id
            ],
            ['Fees_Amount' => $request->Fees_Amount]
        );


        $fees->save();
        return response()->json(['success' => true, 'message' => 'Amount saved successfully!']);
    }
}
