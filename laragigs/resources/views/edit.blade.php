@extends('layouts.main_layout')
@section('content')

<section class="edit-section">
    <h1 class="title">EDIT GIG</h1>
    <div class="subtitle">Edit: {{$gig->job_title}}</div>
    <form class="form" method="POST" action="{{route('edit',$gig->id)}}" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div>Company Name</div>
        @error('company_name')
        <div class="error">{{$message}}</div>
        @enderror
        <input type="text" name="company_name" value="{{$gig->company_name}}">
        <div>Job Title</div>
        @error('job_title')
        <div class="error">{{$message}}</div>
        @enderror
        <input type="text" name="job_title" value="{{$gig->job_title}}">
        <div>Job Location</div>
        @error('job_location')
        <div class="error">{{$message}}</div>
        @enderror
        <input type="text" name="job_location" value="{{$gig->job_location}}">
        <div>Contact Email</div>
        @error('contact_email')
        <div class="error">{{$message}}</div>
        @enderror
        <input type="email" name="contact_email" value="{{$gig->contact_email}}">
        <div>Website/Application URL</div>
        @error('website')
        <div class="error">{{$message}}</div>
        @enderror
        <input type="text" name="website" value="{{$gig->website}}">
        <div>Tags (Comma Separated)</div>
        @error('tags')
        <div class="error">{{$message}}</div>
        @enderror
        <input type="text" name="tags" value="{{$gig->tags}}">
        <div>Company Logo</div>
        <input type="file" name="logo" accept="image/*">
        <div>Job Description</div>
        @error('description')
        <div class="error">{{$message}}</div>
        @enderror
        <pre>
        <textarea type="text" name="description">{{$gig->description}}</textarea>
        </pre>
        <div class="btn">
            <button class="edit" type="submit">Save</button>
            <a href="{{route('listing.manage.gig')}}"><button class="back">back</button></a>
        </div>
    </form>
</section>

@endsection

@section('title')

    Edit Gig

@endsection
