@extends('layouts.main-layout')

@section('content')
    
    <h1>CONTENT</h1>
    <div class="card-body">
        <h1>I miei progetti</h1>
        <ul>
            @foreach ($projects as $project)

                <li>{{$project -> name}}</li>
                <li>{{$project -> description}}</li>
                <li>{{$project -> main_image}}</li>
                <li>{{$project -> release_date}}</li>
                <li>{{$project -> repo_link}}</li>
                
            @endforeach
        </ul>
    </div>
@endsection