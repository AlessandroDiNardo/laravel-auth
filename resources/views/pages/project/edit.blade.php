@extends('layouts.main-layout')

@section('content')
<div class="ms-wrapper">
    <h1 class="myFormTitle">Update your project</h1>

    <form method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">Enter your project name</label>
            <input type="text" class="form-control" name="name" value="{{$project -> name}}">
        </div>
        
        <div class="form-group">
            <label for="description">Enter a description</label>
            <input type="text" class="form-control" name="description" value="{{$project -> description}}">
        </div>
        
        <div class="form-group">
            <label for="main_image">Enter the link of the main image</label>
            <input type="file" class="form-control" name="main_image" value="{{$project -> main_image}}">
        </div>
        
        <div class="form-group">
            <label for="release_date">Enter the release date</label>
            <input type="date" class="form-control" name="release_date" value="{{$project -> release_date }}">
        </div>
        
        <div class="form-group">
            <label for="repo_link">Enter the link of your repo</label>
            <input type="text" class="form-control" name="repo_link" value="{{$project-> repo_link}}">
        </div>
        
        <input type="submit" value="Update project">
    </form>
</div>

@endsection
