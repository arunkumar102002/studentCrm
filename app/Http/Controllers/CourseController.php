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
        $courses = Course::with('subjects')->get();
        $subjects = Subject::all();
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

        $validatedata = Validator::make(request()->all(), [
            'name' => 'required|unique:courses,name'
        ]);
        if ($validatedata->fails()) {
            return back()->withErrors($validatedata)->withInput();
        } else {
            if ($request->subject == null) {
                return redirect()->route('course.index')->with('error', ' coures select minmum one subject');
            }
            $courses = new Course;
            $courses->name = $request->name;
            $courses->save();

            foreach ($request->subject as $value) {
                $courseSubject = new CourseSubject();
                $courseSubject->course_id = $courses->id;
                $courseSubject->subject_id = $value;
                $courseSubject->save();
            }
        }
        return redirect()->route('course.index')->with('success', ' coures create successfully');
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
