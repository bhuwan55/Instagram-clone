@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 pt-4">
            <img src="{{$user->profile->profileImage() }}" class ="rounded-circle w-75">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <div class="d-flex align-items-center pb-3">
                    <h1>{{$user-> username}}</h1>

<follow-button user-id="{{$user->id}}" follows="{{$follows}}"></follow-button>
</div>

<div class="ml-5 pl-5 ">
@can('update', $user->profile)
<a href="/p/create" >Add New Post</a>
@endcan
</div>

</div>

@can('update', $user->profile)
<a href="/profile/{{$user->id}}/edit">Edit Profile</a>

@endcan

<div class="d-flex">
<div class="pr-4"><strong>{{$postCount}} posts</strong></div>
<div class="pr-4"><strong>{{$followersCount}} following</strong></div>
<div class="pr-4"><strong>{{$followingCount}} followers<br></strong></div>
</div>


<div class="pt-4 font-weight-bold">{{$user->profile->title}}</div>
<div>{{$user->profile->description}}</div>
<div><a href="www.bhuwan.com.np">{{$user->profile->url}} </a></div>
</div>


<div class="row pt-5">

@foreach($user->posts as $post)
<div class="col-4 d-flex align-center pb-5 pl-5 ">
<a href="/p/{{$post->id}}">
<img src="/storage/{{ $post->image}}" class="w-120">
</a>
</div>
@endforeach
<script src="{{ asset('js/app.js') }}" defer></script>
</div>
</div>
@endsection
