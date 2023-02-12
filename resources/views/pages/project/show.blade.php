@extends('layouts.main-layout')

@section('content')

    <section class="ms_container_show">

        <h1>{{ $project -> name }}</h1>

        <img src="{{$project -> main_image}}" alt="">

        <p>
            {{ 
                $project -> description
                ? $project -> description
                : '- no description available -' 
            }}
        </p>

        <h5>
            Released on: 
            {{ $project -> release_date }}
        </h5>

        <h6>
            follow the link to find out more:
            <a href="">
                {{ $project -> repo_link}}
            </a>
        </h6>
    </section>
    
@endsection