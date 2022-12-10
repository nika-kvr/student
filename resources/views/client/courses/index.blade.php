@extends('layouts.client_app')

@section('content')

<div class="main-container" style = "display: flex;">

    <div class="list-group" style = "display: flex; flex-direction: column; margin-left: 40px;">
        <h5>პირადი ინფორმაცია</h5>
        <a href="{{ url('student/courses') }}" style = "display: flex; width: 263px; justify-content: flex-start;" href="#" class="list-group-item list-group-item-action">ჩემი კურსები</a>

    </div>

    <div style="margin-left: 100px;">
        <h5>კურსები</h5>
        <ul class="list-group">
            @foreach ($courses as $items)
                <li class="list-group-item"> {{ $items->course_name }} </li>
            @endforeach
        </ul>

    </div>
    
</div>



@endsection