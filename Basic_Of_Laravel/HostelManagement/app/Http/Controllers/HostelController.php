<?php

namespace App\Http\Controllers;

class HostelController extends Controller
{
 public function addData()
{
    $hostel = \App\Models\Hostel::create([
        'hostel_name' => 'Boys Hostel',
        'location' => 'Ahmedabad'
    ]);

    $hostel->rooms()->create([
        'room_number' => '101',
        'capacity' => 4
    ]);

    $hostel->rooms()->create([
        'room_number' => '102',
        'capacity' => 3
    ]);

    return "Data Inserted";
}


public function showData()
{
    $hostels = \App\Models\Hostel::with('rooms')->get();

    return view('hostels', compact('hostels'));
}
}