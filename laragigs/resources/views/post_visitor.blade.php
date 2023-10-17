@extends('layouts.login_register_layout')
@section('content')

    <section class="post-section">
        <div class="image">
            <img src="{{asset('gigs_images')}}/{{$gig->logo}}" alt="">
        </div>
        <h1 class="title">{{$gig->job_title}}</h1>
        <div class="author">{{$gig->company_name}}</div>
        <div class="tags-container">
            @foreach(explode(',',$gig->tags) as $tag)
                <div class="tag"><a href="{{route('tag',$tag)}}">{{$tag}}</a></div>
            @endforeach
        </div>
        <div class="location">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M384 476.1L192 421.2V35.93L384 90.79V476.1zM416 88.37L543.1 37.53C558.9 31.23 576 42.84 576 59.82V394.6C576 404.4 570 413.2 560.9 416.9L416 474.8V88.37zM15.09 95.13L160 37.17V423.6L32.91 474.5C17.15 480.8 0 469.2 0 452.2V117.4C0 107.6 5.975 98.78 15.09 95.13V95.13z"/></svg>
            <div>{{$gig->job_location}}</div>
        </div>
        <hr>
        <div class="jop-description-title">Jop Description</div>
        <pre class="description">{{$gig->description}}</pre>
        <a class="btn" href="mailto:{{$gig->contact_email}}">
            <button class="contact">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M464 64C490.5 64 512 85.49 512 112C512 127.1 504.9 141.3 492.8 150.4L275.2 313.6C263.8 322.1 248.2 322.1 236.8 313.6L19.2 150.4C7.113 141.3 0 127.1 0 112C0 85.49 21.49 64 48 64H464zM217.6 339.2C240.4 356.3 271.6 356.3 294.4 339.2L512 176V384C512 419.3 483.3 448 448 448H64C28.65 448 0 419.3 0 384V176L217.6 339.2z"/></svg>
                <div>Contact Employer</div>
            </button>
        </a>
        <a class="btn" href="{{$gig->website}}">
            <button class="website">
                <svg xmlns="http://www.w3.org/2000/svg" width="13.939" height="13.939" viewBox="0 0 13.939 13.939">
                    <path id="google" d="M438.374,29.405c0,1.466-1.391,1.969-2.639,1.969-1.34,0-3.15-.62-3.15-2.228,0-1.743,2.044-2.178,3.418-2.178a3.472,3.472,0,0,1,.419.017C437.277,27.579,438.374,28.232,438.374,29.405Zm-1.005-7.221c0,1.022-.394,1.851-1.541,1.851-1.491,0-2.329-1.994-2.329-3.267a1.747,1.747,0,0,1,1.634-1.96C436.682,18.808,437.369,20.911,437.369,22.184Zm-1.1-3.979a7.525,7.525,0,0,0-1.567.168,3.471,3.471,0,0,0-2.756,3.284,2.932,2.932,0,0,0,3.033,2.882,4.739,4.739,0,0,0,.586-.042,2.176,2.176,0,0,0-.184.72,2.128,2.128,0,0,0,.536,1.248c-1.5.042-3.828.427-4.574,1.935a2.571,2.571,0,0,0-.31,1.131c0,1.944,2.262,2.614,3.828,2.614a5.345,5.345,0,0,0,3.518-1.1,3.082,3.082,0,0,0,1.173-2.362c0-2.346-2.513-2.773-2.513-3.854,0-1.106,1.876-1.273,1.876-3.493a2.924,2.924,0,0,0-1.248-2.471H438.8l1.131-.662Zm8.7,2.145h-2.145V18.2h-1.072V20.35h-2.145v1.072h2.145v2.145h1.072V21.422h2.145Z" transform="translate(-431.036 -18.205)" fill="#fff"/>
                </svg>
                <div>Visit Website</div>
            </button>
        </a>
    </section>

@endsection

@section('title')

    Gig Information

@endsection
