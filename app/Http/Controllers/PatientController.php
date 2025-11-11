<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Appointment;
use App\Models\Schedule;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class PatientController extends Controller
{
    public function dashboard()
    {
        $appointments = Appointment::where('patient_id', Auth::id())->latest()->take(5)->get();
        return view('patient.dashboard', compact('appointments'));
    }

    public function doctors(Request $request)
    {
        $query = Doctor::query()->where('status', 'approved');

        if ($request->filled('specialty')) {
            $query->where('specialty', 'like', "%{$request->specialty}%");
        }

        $doctors = $query->paginate(10);
        return view('patient.doctors.index', compact('doctors'));
    }

    public function showDoctor(Doctor $doctor)
    {
        $schedules = $doctor->schedules;
        return view('patient.doctors.show', compact('doctor', 'schedules'));
    }

    public function bookAppointment(Request $request, Doctor $doctor)
    {
        $request->validate([
            'date' => 'required|date',
            'time' => 'required',
        ]);

        Appointment::create([
            'doctor_id' => $doctor->id,
            'patient_id' => Auth::id(),
            'appointment_date' => $request->date,
            'appointment_time' => $request->time,
            'status' => 'pending',
        ]);

        // Optionally send dashboard notification later

        return back()->with('success', 'Appointment booked successfully!');
    }

    public function myAppointments()
    {
        $appointments = Appointment::where('patient_id', Auth::id())->latest()->get();
        return view('patient.appointments', compact('appointments'));
    }
}
