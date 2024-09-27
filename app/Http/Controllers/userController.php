<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Crypt;

class UserController extends Controller
{

    public function dashboardshow()
    {
        return view('index');
    }


    // Show the login form
    public function showLoginForm()
    {
        return view('login');
    }

    // Handle user login
    public function Userlogin(Request $request)
    {
        // Validate email and password fields
        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // Check if the email exists in the database
        $user = User::where('email', $request->email)->first();

        if ($user) {
            // If email exists, check if the password is correct
            if (Auth::attempt($request->only('email', 'password'))) {
                // Password correct, redirect to dashboard
                return redirect()->route('dashboard.show');
            } else {
                // Password incorrect, show the error message
                return redirect()->back()->withErrors(['password' => 'Incorrect password'])->withInput();
            }
        } else {
            // Email doesn't exist, show the error message
            return redirect()->back()->withErrors(['email' => 'Email not found'])->withInput();
        }
    }







    public function loginCheck()
    {
        if (Auth::check()) {
            return route('dashboard.show');
        } else {
            return redirect()->route('login.form');
        }
    }






    public function admindashboard()
    {

        return view('student_form');
    }


    public function StudentDataStore(Request $request)
    {

        $request->validate([
            'name' => 'required|string',
            'father_name' => 'required|string',
            'address' => 'required|string',
            'phon_number' => 'required|digits_between:10,12',
            'dob' => 'required|date',
            'gender' => 'required|string|in:Male,Female,Other',
            'email' => 'required|email|unique:users,email,' . $request->id,
            'password' => 'nullable|string|min:6',
            'role' => 'required|string|in:admin,teacher,student',
            'course_id' => 'required|exists:courses,id',
        ]);

        if (empty($request->id)) {
            // Create new user
            $user = new User();
            $user->password = bcrypt($request->input('password')); // Hash the password

        } else {


            $user = User::findOrFail($request->id);
            if ($request->filled('password')) {
                $user->password = bcrypt($request->input('password'));

                $user->name = $request->input('name');
                $user->father_name = $request->input('father_name');
                $user->address = $request->input('address');
                $user->phon_number = $request->input('phon_number');
                $user->dob = $request->input('dob');
                $user->gender = $request->input('gender');
                $user->email = $request->input('email');
                $user->role = $request->input('role');
                $user->course_id = $request->input('course_id');
                $user->update();
            }
        }

        $user->name = $request->input('name');
        $user->father_name = $request->input('father_name');
        $user->address = $request->input('address');
        $user->phon_number = $request->input('phon_number');
        $user->dob = $request->input('dob');
        $user->gender = $request->input('gender');
        $user->email = $request->input('email');
        $user->password = Crypt::encryptString($request->input('password'));
        $user->role = $request->input('role');
        $user->course_id = $request->input('course_id');
        $user->save();

        return response()->json([
            'status' => 'success',
            'message' => empty($request->id) ? 'User created successfully' : 'User updated successfully',
        ]);
    }






    public function StudentDataShow()
    {
        $students = User::with('courses')->get();
        $courses = Course::all();
        return response()->json(['status' => true, 'data' => $students, 'courses' => $courses]);
    }




    public function StudentDataEdit($id)
    {
        $student = User::findOrFail($id);
        return response()->json([
            'data' => $student

        ]);
    }





    // Handle user logout
    public function logout()
    {
        Auth::logout();  // Log the user out
        return redirect()->route('login.form');
    }






    public function StudentDataDestroy($id)
    {

        $student = User::findOrFail($id);
        $student->delete();

        return response()->json([
            'status' => 'success',
            'message' => 'User deleted successfully',
        ]);
    }



    public function getUserData(Request $request)
    {
        $user = User::where('id', $request->id)->with('courses')->first();
        return response()->json(["status" => true, "data" => $user]);
    }
}
