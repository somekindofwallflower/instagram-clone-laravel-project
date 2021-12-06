@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-3 p-5">
                <img src="/storage/{{$user->profile->image}}" alt="Profile picture" class="rounded-circle img-fluid">
            </div>
            <div class="col-9 mt-5">
                <div class="d-flex justify-content-between align-items-baseline">
                    <h1>{{ $user->username}}</h1>
                    @can('update', $user->profile)
                    <a href="/p/create"> Add new Post</a>
                    @endcan
                    @can('update', $user->profile)
                    <a href="{{$user->id}}/edit">Edit profile</a>
                    @endcan
                </div>
                <div class="d-flex">
                    <div class="mr-5"><strong>{{ $user->posts->count() }} </strong>posts</div>
                    <div class="mr-5"><strong>23k </strong>followers</div>
                    <div class="mr-5"><strong>212 </strong>following</div>
                </div>
                <div class="pt-4 font-weight-bold">
                    <a href="https://github.com/somekindofwallflower/instagramClone">{{ $user->profile->title }}</a>
                </div>
                <div>
                    <p>{{ $user->profile->description }}</p>
                </div>
                <div>
                    <a HREF="#">{{ $user->profile->url }}</a>
                </div>
            </div>
        </div>
        <div class="row pt-2">
            @foreach($user->posts as $post)
                <div class="col-4 pb-4">
                    <a href="/p/{{$post->id}}">
                        <img src="/storage/{{$post -> image}}" alt="{{$post -> caption}}" class="w-100">
                </div>
            @endforeach
        </div>
    </div>
@endsection
