@extends('layouts.app')
@section('content')
<div class="max-w-3xl mx-auto mt-10">
    <h2 class="text-2xl font-bold">{{ $doctor->user->name }}</h2>
    <p class="text-gray-700">{{ $doctor->specialty }}</p>
    <p>{{ $doctor->about }}</p>

    <h3 class="text-lg font-semibold mt-6 mb-2">Available Slots</h3>
    <form method="POST" action="{{ route('patient.book', $doctor) }}">
        @csrf
        <label>Select Date:</label>
        <input type="date" name="date" class="border p-2 rounded w-full mb-3" required>

        <label>Select Time:</label>
        <select name="time" class="border p-2 rounded w-full mb-3" required>
            @foreach($schedules as $schedule)
                <optgroup label="{{ ucfirst($schedule->day_of_week) }}">
                    @php
                        $start = \Carbon\Carbon::parse($schedule->start_time);
                        $end = \Carbon\Carbon::parse($schedule->end_time);
                        $duration = $schedule->slot_duration;
                    @endphp
                    @while($start->lt($end))
                        <option value="{{ $start->format('H:i') }}">{{ $start->format('h:i A') }}</option>
                        @php $start->addMinutes($duration); @endphp
                    @endwhile
                </optgroup>
            @endforeach
        </select>
        <button class="bg-green-600 text-white px-4 py-2 rounded">Book Appointment</button>
    </form>
</div>
@endsection
