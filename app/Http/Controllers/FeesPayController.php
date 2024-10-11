<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Semester;
use App\Models\SemesterFees;
use App\Models\User;
use App\Models\FeesPay;

class FeesPayController extends Controller
{
    public function FeesDashboard()
    {
        return view('feesPay.index');
    }

    public function FeesIndex()
    {
        $courses = Course::select('id', 'name')->get();
        $semesters = Semester::select('id', 'name')->get();
        $students = User::where('role', 'student')->select('id', 'name')->get();
        $fees = SemesterFees::select('course_id', 'semester_id', 'Fees_Amount')->get();

        return response()->json([
            'courses' => $courses,
            'semesters' => $semesters,
            'students' => $students,
            'fees' => $fees,
        ]);
    }

    public function UserFeesStore(Request $request)
    {

        $validate = $request->validate([
            'course_id' => 'required',
            'semester_id' => 'required',
            'student_id' => 'required',
            'total_fees' => 'required|numeric',
            'paid_fees' => 'required|numeric',
        ], [
            'course_id.required' => 'Course is required',
            'semester_id.required' => 'Semester is required',
            'student_id.required' => 'Student is required',
            'total_fees.required' => 'Total fees is required',
            'paid_fees.required' => 'Paid fees is required',
        ]);


        $checkFeesPaidAlready = FeesPay::where('course_id', $request->course_id)
            ->where('semester_id', $request->semester_id)
            ->where('student_id', $request->student_id)->exists();

        if ($checkFeesPaidAlready) {
            return response()->json([
                'success' => false,
                'message' => 'Fees is already paid',
            ]);
        }

        if ($request->paid_fees > $request->total_fees) {
            return response()->json([
                'success' => false,
                'message' => 'Paid fees cannot be greater than total fees',
            ]);
        } elseif ($request->paid_fees < $request->total_fees) {
            return response()->json([
                'success' => false,
                'message' => 'Paid feesfees cannot be less than total fees',
            ]);
        } else {
            $feesPay = new FeesPay();
            $feesPay->course_id = $request->course_id;
            $feesPay->semester_id = $request->semester_id;
            $feesPay->student_id = $request->student_id;
            $feesPay->total_fees  = $request->total_fees;
            $feesPay->fees_pay = $request->paid_fees;

            if ($feesPay->save()) {
                return response()->json([
                    'success' => true,
                    'message' => 'Fees paid successfully',
                ]);
            } else {
                return response()->json([
                    'errors' => true,
                    'message' => 'Something went wrong',
                ]);
            }
        }
    }


    public function FeesDataShow(Request $request)
    {
        $courses = Course::select('id', 'name')->get();
        $semesters = Semester::select('id', 'name')->get();
        $feesData = FeesPay::with('student')->get();

        //dd($feesData);
        return response()->json([
            'success' => true,
            'courses' => $courses,
            'semesters' => $semesters,
            'feesData' => $feesData
        ]);
    }
}
