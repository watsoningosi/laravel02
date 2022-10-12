@extends('layout')
@section('content')
    <div id="wrapper" class="col-md-9">
        <div id="page">
            <h1>Update Article </h1>

            <form method="post" action="/articles">
                @csrf

                <div class="form-group">
                    <label class="control-label" for="">Title</label>
                    <input class="form-control" type="text" name="title" value="{{ $article->title }}" id="title">
                </div>

                <div class="form-group">
                    <label class="control-label" for="">Excerpt</label>
                    <input class="form-control" type="text" name="exerpt" id="exerpt" value="{{ $article->exerpt }}">
                </div>

                <div class="form-group">
                    <label class="control-label">Body </label>
                    <textarea name="body" cols="19" rows="6" class="form-control">{{ $article->body }}</textarea>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>
    </div>
@endsection
