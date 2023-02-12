@extends('layouts.main-layout')

@section('content')
    
<div class="ms_container">

    <h1>Create a new project</h1>

    {{-- form --}}
    <form method="POST" action="{{ route('store')}}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">Enter your project name</label>
            <input type="text" class="form-control" name="name">
        </div>
        <div class="form-group">
            <label for="description">Enter a description</label>
            <input type="text" class="form-control" name="description">
        </div>
        
        <div class="form-group">
            <label for="main_image">Upload the image of your repo</label>
            <input type="file" class="form-control" name="main_image">
        </div>
        
        <div class="form-group">
            <label for="release_date">Enter the release date</label>
            <input type="date" class="form-control" name="release_date">
        </div>
        
        <div class="form-group">
            <label for="repo_link">Enter the link of your repo</label>
            <input type="text" class="form-control" name="repo_link">
        </div>
        
        <input type="submit" value="Create new project">
    </form>
</div>
@endsection
