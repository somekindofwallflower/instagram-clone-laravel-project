@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="/p" enctype="multipart/form-data" method="post">
            @csrf
            <div class="row">
                <div class="col-8 offset-2">
                    <div class="row">
                        <h3>Add New Post</h3>
                    </div>
                    {{--Caption--}}
                    <div class="form-group row">
                        <label for="caption" class="col-md-4 col-form-label">{{ __('Post Caption') }}</label>
                        <input id="captions"
                               type="text"
                               class="form-control @error('caption') is-invalid @enderror"
                               name="caption"
                               value="{{ old('caption') }}"
                               autocomplete="name"
                               autofocus>

                        @error('caption')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    {{--Image--}}
                    <div class="row">
                        <label for="image" class="col-md-4 col-form-label">{{ __('Post Image') }}</label>

                        <input type="file" class="form-control-file" id="image" name="image">

                        @error('image')
                        <span role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="row pt-4">
                        <button class="btn btn-primary"> Add new post</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
