@extends('layouts.client_app')

@section('content')

<div class="main-container">

    <div class="list-group" style = "display: flex; flex-direction: column; margin-left: 40px;">
        <h5>პირადი ინფორმაცია</h5>
        <a href="{{ url('student/courses') }}" style = "display: flex; width: 263px; justify-content: flex-start;" href="#" class="list-group-item list-group-item-action">ჩემი კურსები</a>

    </div>
    
</div>




@endsection