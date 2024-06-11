<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Appointment;


class AdminController extends Controller
{
    //
    public function index(){
        return view('admin.adminhome');
    }
    public function addview()
    {
        return view('admin.add_doctor');
    }

    public function upload(Request $request)
    {
        $doctor=new doctor;
        $image=$request->file;
        $imagename=time().'.'.$image->getClientOriginalExtension();

        // $imagename=time().'.'.$image->getClientoriginalExtension();
        $request->file->move('doctorimage',$imagename);
        $doctor->image=$imagename;
        $doctor->name=$request->name;
        $doctor->phone=$request->number;
        $doctor->room=$request->room;
        $doctor->speciality=$request->speciality;
        $doctor->save();
        return redirect()->back()->with('message','Doctor Added Successfully');
        // return view('admin.upload_doctor');
    }
  

   public function appointment()
    {
        $appointments = Appointment::all();
        return view('admin.appointmentshow', compact('appointments'));
    }

    public function approve($id)
    {
        $appointment = Appointment::find($id);
        if ($appointment) {
            $appointment->status = 'approved';
            $appointment->save();
            return redirect()->back()->with('message', 'Appointment approved successfully');
        } else {
            return redirect()->back()->with('error', 'Appointment not found');
        }
    }

    public function cancel($id)
    {
        $appointment = Appointment::find($id);
        if ($appointment) {
            $appointment->status = 'cancelled';
            $appointment->save();
            return redirect()->back()->with('message', 'Appointment cancelled successfully');
        } else {
            return redirect()->back()->with('error', 'Appointment not found');
        }
    }
}



