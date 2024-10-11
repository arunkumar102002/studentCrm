<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use App\Models\Course;
use App\Models\CourseSubject;
use App\Models\Subject;
use Illuminate\Http\Request;

class CourseController extends Controller
{


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courses = Course::with(['subjects', 'fees'])->get();
        $subjects = Subject::all();

        //dd($courses->toArray());
        return view('courses.index', compact(['courses', 'subjects']));
    }



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validation for course name and subject
        $validatedData = Validator::make($request->all(), [
            'name' => 'required|unique:courses,name', // Ensures unique course name
            'subjects' => 'required|array|min:1', // Ensures at least one subject is selected
            'subjects.*' => 'exists:subjects,id'  // Ensures that the subjects exist in the database
        ]);

        // Check if validation fails
        if ($validatedData->fails()) {
            return back()->withErrors($validatedData)->withInput();
        }

        // Create the course
        $course = new Course;
        $course->name = $request->name;
        $course->save();

        // Attach subjects to the course using pivot table
        foreach ($request->subjects as $subjectId) {
            $courseSubject = new CourseSubject();
            $courseSubject->course_id = $course->id;
            $courseSubject->subject_id = $subjectId;
            $courseSubject->save();
        }

        // Redirect back with success message
        return redirect()->route('course.index')->with('success', 'Course created successfully');
    }


    /**
     * Display the specified resource.
     */
    public function show(Course $course)
    {
        //
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Course $course)
    {

        $course = Course::where('id', $course->id)->with('subjects')->first();
        $subjects = Subject::all();
        return view('courses.edit', compact(['course', 'subjects']));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Course $course)
    {

        $validatedata = validator::make(request()->all(), [
            'name' => 'required',
            'subject' => 'required|array',
            'subject.*' => 'exists:subjects,id',
        ]);


        if ($validatedata->fails()) {
            return back()->withErrorInputs($validatedata)->withenput();
        } else {
            $course = Course::find($request->id);
            $course->name = $request->name;
            $course->update();
            $course->subjects()->sync($request->subject);


            return redirect()->route('course.index')->with('success', 'update successfully');
        }
    }

    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        $course->delete();
        return redirect()->route('course.index')->with('error', 'course deleted successfully');
    }
}
