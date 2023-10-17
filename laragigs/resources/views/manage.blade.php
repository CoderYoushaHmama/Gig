@extends('layouts.main_layout')
@section('content')

<section class="manage-section">
    @if(Session::has('success'))
        <div id="success_message" class="success">{{Session::get('success')}}</div>
    @endif
    <h1 class="title">MANAGE GIGS</h1>
    <hr>
    @foreach($user->gigs as $gig)
        <div class="gigs">
            <div class="gig-title">{{$gig->job_title}}</div>
            <div class="edit-delete">
                <div class="edit">
                    <a href="{{route('listing.edit.gig',$gig->id)}}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="13.936" height="11" viewBox="0 0 13.936 11">
                                <path id="_" data-name="" d="M1271.937,28.25h-.437V27.5h-.75v-.437l.906-.906,1.188,1.187Zm3.438-5.625a.184.184,0,0,1-.008.258l-2.734,2.734a.177.177,0,1,1-.25-.25l2.734-2.734A.184.184,0,0,1,1275.375,22.625Zm.625,4.64a.245.245,0,0,0-.156-.226.241.241,0,0,0-.273.055l-.5.5a.242.242,0,0,0-.07.172v.984a1.254,1.254,0,0,1-1.25,1.25h-6.5a1.254,1.254,0,0,1-1.25-1.25v-6.5a1.254,1.254,0,0,1,1.25-1.25h6.5a1.361,1.361,0,0,1,.351.047.235.235,0,0,0,.25-.062l.383-.383a.245.245,0,0,0,.07-.227.254.254,0,0,0-.141-.18,2.186,2.186,0,0,0-.914-.2h-6.5a2.251,2.251,0,0,0-2.25,2.25v6.5a2.251,2.251,0,0,0,2.25,2.25h6.5a2.251,2.251,0,0,0,2.25-2.25Zm-.75-5.765L1270,26.75V29h2.25l5.25-5.25Zm3.469,1.031a.759.759,0,0,0,0-1.062l-1.187-1.188a.759.759,0,0,0-1.062,0l-.719.719,2.25,2.25Z" transform="translate(-1265 -20)" fill="#fff"/>
                            </svg>
                            <div>Edit</div>
                    </a>
                </div>
                <div class="delete">
                    <form method="POST" action="{{route('delete',$gig->id)}}">
                        @method('DELETE')
                        @csrf
                        <button type="submit">
                            <svg xmlns="http://www.w3.org/2000/svg" width="800px" height="800px" viewBox="0 0 24 24" fill="none">
                                <path d="M6 7V18C6 19.1046 6.89543 20 8 20H16C17.1046 20 18 19.1046 18 18V7M6 7H5M6 7H8M18 7H19M18 7H16M10 11V16M14 11V16M8 7V5C8 3.89543 8.89543 3 10 3H14C15.1046 3 16 3.89543 16 5V7M8 7H16" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <div>Delete</div>
                        </button>
                    </form>
                </div>
            </div>
        </div>
        <hr>
    @endforeach
</section>
<script src="{{asset('JS/message.js')}}"></script>
@endsection

@section('title')

Manage

@endsection
