<?php

namespace App\Http\Controllers;

use App\Models\appointment;
use Illuminate\Http\Request;
use App\Http\Requests\AppointmentFormRequest;

class CTRLAppointment extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $appointments = appointment::all();
        return view('appointment.appointment-list', compact('appointments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('appointment.add-appointment');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AppointmentFormRequest $request)
    {
        $data = $request->validated();

        $appointment = appointment::create($data);
        return redirect('add-appointment')->with('message', 'Your Appointment is added.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($appointment_id)
    {
        $appointment = appointment::find($appointment_id);
        return view('appointment.edit-appointment', compact('appointment'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AppointmentFormRequest $request, $appointment_id)
    {
        $data = $request->validated();

        $appointment = appointment::where('id', $appointment_id)->update([
            'name' => $data['name'],
            'email' => $data['email'],
            'address' => $data['address'],
            'appointment' => $data['appointment']
        ]);

        return redirect('/appointment-list')->with('message', 'Apppointment Changed');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
