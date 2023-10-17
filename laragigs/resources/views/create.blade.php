@extends('layouts.main_layout')
@section('content')

<section class="create-section">
    <h1 class="title">CREATE A GIG</h1>
    <div class="subtitle">Post a gig to find a developer</div>
    <form action="{{route('create')}}" class="form" method="POST" enctype="multipart/form-data">
        @csrf
        <div>Company Name</div>
        @error('company_name')
        <div class="error">{{$message}}</div>
        @enderror
        <input type="text" name="company_name" value="{{old('company_name')}}">
        <div>Job Title</div>
        @error('job_title')
        <div class="error">{{$message}}</div>
        @enderror
        <input type="text" name="job_title" value="{{old('job_title')}}">
        <div>Job Location</div>
        @error('job_location')
        <div class="error">{{$message}}</div>
        @enderror
        <input type="text" name="job_location" value="{{old('job_location')}}">
        <div>Contact Email</div>
        @error('contact_email')
        <div class="error">{{$message}}</div>
        @enderror
        <input type="email" name="contact_email" value="{{old('contact_email')}}">
        <div>Website/Application URL</div>
        @error('website')
        <div class="error">{{$message}}</div>
        @enderror
        <input type="text" name="website" value="{{old('website')}}">
        <div>Tags (Comma Separated)</div>
        @error('tags')
        <div class="error">{{$message}}</div>
        @enderror
        <input type="text" name="tags" value="{{old('tags')}}">
        <div>Company Logo</div>
        @error('logo')
        <div class="error">{{$message}}</div>
        @enderror
        <input type="file" name="logo" accept="image/*" value="{{old('logo')}}">
        <div>Job Description</div>
        @error('description')
        <div class="error">{{$message}}</div>
        @enderror
        <pre>
            <textarea type="text" name="description">{{old('description')}}</textarea>
        </pre>
        <div class="btn">
            <button type="submit" class="create">Create Gig</button>
            <a href="{{route('listing')}}"><button class="back">back</button></a>
        </div>
    </form>
</section>

@endsection

@section('title')

    Create Gig

@endsection
