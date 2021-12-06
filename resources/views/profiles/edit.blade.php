@extends('layouts.app')

@section('content')
    <div class="container">  <form action="/profiles/{{$user->id}}" enctype="multipart/form-data" method="POST">
            @csrf
            @method('PATCH')
            <div class="row">
            </div>
            <div class="row">
                <div class="col-8 offset-2">
                    <div class="row">
                        <h3>Edit profile</h3>
                    </div>
                    {{--title--}}
                    <div class="form-group row">
                        <label for="title" class="col-md-4 col-form-label">{{ __('Post title') }}</label>
                        <input id="titles"
                               type="text"
                               class="form-control @error('title') is-invalid @enderror"
                               name="title"
                               value="{{ old('title') ? old('title') : $user->profile->title }}"
                               autocomplete="name"
                               autofocus>

                        @error('title')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    {{--description--}}
                    <div class="form-group row">
                        <label for="description" class="col-md-4 col-form-label">{{ __('Description') }}</label>
                        <input id="description"
                               type="text"
                               class="form-control @error('description') is-invalid @enderror"
                               name="description"
                               value="{{ old('description') ? old('description') : $user->profile->description }}"
                               autocomplete="name"
                               autofocus>

                        @error('title')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    {{--url--}}
                    <div class="form-group row">
                        <label for="urls" class="col-md-4 col-form-label">{{ __('URL') }}</label>
                        <input id="url"
                               type="text"
                               class="form-control @error('description') is-invalid @enderror"
                               name="url"
                               value="{{ old('url') ? old('url') : $user->profile->url }}"
                               autocomplete="name"
                               autofocus>

                        @error('url')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    {{--Image--}}
                    <div class="row">
                        <label for="image" class="col-md-4 col-form-label">{{ __('Profile Image') }}</label>

                        <input type="file" class="form-control-file" id="image" name="image">

                        @error('image')
                        <span role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="row pt-4">
                        <button class="btn btn-primary"> Save Profile</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
