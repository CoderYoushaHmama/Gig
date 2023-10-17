@extends('layouts.main_layout')
@section('content')

    <section class="listing-section">
        <div class="laragigs">
            <img src="{{asset('images/laravel-logo.png')}}" alt="">
            <div class="title">LARA<span>GIGS</span></div>
            <div class="subtitle">Find or post Laravel jobs & projects</div>
            <div class="signup-btn">
                <a href="{{route('listing.create.gig')}}">
                    <button>LIST A GIG</button>
                </a>
            </div>
        </div>
        <div class="search">
            <form action="{{route('search')}}" action="GET">
                @csrf
                <input type="text" name="search" placeholder="Search Laravel Gigs...">
                <button type="submit">Search</button>
            </form>
        </div>
        <div class="posts">
            @if(!Session::has('search_result'))
                @foreach($gigs as $gig)
                    <div class="post-container">
                        <img src="{{asset('gigs_images')}}/{{$gig->logo}}" alt="">
                        <div class="post-information">
                            <div class="title"><a href="{{route('information',$gig->id)}}">{{$gig->job_title}}</a></div>
                            <div class="subtitle">{{$gig->company_name}}</div>
                            <div class="tags-container">
                                @foreach(explode(",",$gig->tags) as $tag)
                                    <div class="tag"><a href="{{route('search_tag',$tag)}}">{{$tag}}</a></div>
                                @endforeach
                            </div>
                            <div class="location">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M384 476.1L192 421.2V35.93L384 90.79V476.1zM416 88.37L543.1 37.53C558.9 31.23 576 42.84 576 59.82V394.6C576 404.4 570 413.2 560.9 416.9L416 474.8V88.37zM15.09 95.13L160 37.17V423.6L32.91 474.5C17.15 480.8 0 469.2 0 452.2V117.4C0 107.6 5.975 98.78 15.09 95.13V95.13z"/></svg>
                                <div>{{$gig->job_location}}</div>
                            </div>
                        </div>
                    </div>
                @endforeach
                @else

                @foreach(Session::get('search_result') as $gig)
                        <div class="post-container">
                            <img src="{{asset('gigs_images')}}/{{$gig->logo}}" alt="">
                            <div class="post-information">
                                <div class="title"><a href="{{route('information',$gig->id)}}">{{$gig->job_title}}</a></div>
                                <div class="subtitle">{{$gig->company_name}}</div>
                                <div class="tags-container">
                                    @foreach(explode(",",$gig->tags) as $tag)
                                        <div class="tag"><a href="{{route('search_tag',$tag)}}">{{$tag}}</a></div>
                                    @endforeach
                                </div>
                                <div class="location">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M384 476.1L192 421.2V35.93L384 90.79V476.1zM416 88.37L543.1 37.53C558.9 31.23 576 42.84 576 59.82V394.6C576 404.4 570 413.2 560.9 416.9L416 474.8V88.37zM15.09 95.13L160 37.17V423.6L32.91 474.5C17.15 480.8 0 469.2 0 452.2V117.4C0 107.6 5.975 98.78 15.09 95.13V95.13z"/></svg>
                                    <div>{{$gig->job_location}}</div>
                                </div>
                            </div>
                        </div>
                @endforeach

            @endif
        </div>
    </section>

@endsection

@section('title')

    Listings

@endsection
