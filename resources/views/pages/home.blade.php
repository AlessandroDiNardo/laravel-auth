@extends('layouts.main-layout')

@section('content')
    
    <div class="ms_container">
        <h1>I miei progetti</h1>
        <ul class="ms_card_container">
            @foreach ($projects as $project)
                <li class="card">
                    <a href="{{ route('pages.project.show', $project) }}">
                        <img src="{{$project -> main_image}}" alt="">
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
