@extends('layouts.main-layout')

@section('content')
    
    <div class="ms_container">
        <h1>I miei progetti</h1>
        <ul class="ms_card_container">
            @foreach ($projects as $project)

                <li class="card">
                    <a href="{{ route('pages.project.show', $project) }}">
                    <img src="{{$project -> main_image}}" alt="">
                        <h3>
                            {{$project -> name}}
                        </h3>
                        <p>
                            {{$project -> description}}
                        </p>
                        <div>
                            {{$project -> release_date}}
                        </div>
                        <a href="#">
                            {{$project -> repo_link}}
                        </a>
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
