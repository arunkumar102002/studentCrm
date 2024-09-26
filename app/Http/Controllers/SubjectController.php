<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $subjects = Subject::all();
        return view('subjects.index', compact('subjects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() {}

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validateData = Validator::make($request->all(), [
            'name' => 'required|unique:subjects,name',
        ]);

        if ($validateData->fails()) {
            return back()->withErrors($validateData)->withInput();
        } else {
            $subject = new Subject();
            $subject->name = $request->name;
            $subject->save();
            return redirect()->route('subject.index')->with('success', 'Subject created successfully.');
        }
    }






    /**
     * Display the specified resource.
     */
    public function show(Subject $subject)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Subject $subject)
    {
        return view('subjects.edit', compact('subject'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Subject $subject)
    {

        $validate = Validator::make($request->all(), [
            "name" =>  "required"
        ]);

        if ($validate->fails()) {
            return back()->withErrors($validate)->withInput();
        } else {
            $subject = Subject::find($request->id);
            $subject->name = $request->name;
            $subject->update();
            return redirect()->route('subject.index')->with('success', 'Subject updated successfully.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Subject $subject)
    {
        $subject->delete();
        return redirect()->route('subject.index')->with('error', 'Subject deleted successfully.');
    }
}
