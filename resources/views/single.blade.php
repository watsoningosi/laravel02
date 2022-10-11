@extends('layout')
@section('content')
    @foreach ($articles as $article)
        <div class="container">
            <div class="col-md-12">
                <div class="container">
                    <div class="row">
                        <div class="mt-10"> </div>
                        <div class="col-lg-8 col-sm-12 mt-3">
                            <div class="about_img"><img src="/images/img-8.png"></div>

                            <p class="lorem_text">Posted On: {{ $article->created_at }}
                            </p>
                            <h2 class="most_text"><a href="/articles/{{ $article->id }}">{{ $article->title }}</a></h2>
                            <p class="lorem_text">{{ $article->exerpt }}</p>

                            <div class="social_icon_main mt-5 mb-3">

                                <div class="btn btn-info"><a href="/articles/{{ $article->id }}">Read More</a></div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
