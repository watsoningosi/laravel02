@extends('layout')
@section('content')
    <div class="col-lg-12">
        <div class="container">
            <div class="row">
                <!-- blog section start -->
                <div class="col-lg-8 col-sm-12 mb-5">
                    @foreach ($article as $article)
                        <div class="about_section layout_padding">
                            <div class="container">
                                <div class="row">
                                    <div class="">
                                        <div class="about_img"><img src="images/img-8.png"></div>

                                        <p class="post_text">Posted On :{{ $article->created_at }}</p>
                                        <h2 class="most_text"><a
                                                href="/articles/{{ $article->id }}">{{ $article->title }}</a></h2>
                                        <p class="lorem_text">
                                            {{ $article->exerpt }}
                                        </p>

                                    </div>

                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>

                <div class="col-lg-4 col-sm-12">
                    <div class="newsletter_main">
                        <h1 class="recent_taital">Recent post</h1>
                        @foreach ($articles as $article)
                            <div class="recent_box">
                                <div class="recent_left">
                                    <div class="image_6"><img src="images/img-7.png"></div>
                                </div>
                                <div class="recent_right">
                                    <h3 class="consectetur_text">
                                        <a href="/articles/{{ $article->id }}">{{ $article->title }}</a>
                                    </h3>
                                    <p class="dolor_text">{{ $article->exerpt }} </p>
                                </div>
                            </div>
                        @endforeach

                    </div>

                </div>
                <!-- recent section end -->
            </div>
        </div>
    </div>
@endsection
