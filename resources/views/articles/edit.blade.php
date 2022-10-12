</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>BLOGGER LARAVEL</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="/css/responsive.css">

</head>

<body>
    <!-- header section start -->
    <div class="header_section">
        <div class="container-fluid header_main">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a style="text-decoration:none" class="logo" href="/">
                    <h1 style="color: white">BLOGGER</h1>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="{{ Request::path() === './' ? 'active' : '' }} nav-link" href="/">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="{{ Request::path() === '/single' ? 'active' : '' }} nav-link"
                                href="/single">Blog</a>
                        </li>

                        <li class="nav-item">
                            <a class="{{ Request::path() === '/contact' ? 'active' : '' }} nav-link"
                                href="/contact">Contact Us</a>
                        </li>

                    </ul>
                </div>
            </nav>
        </div>

        <body>

            <div class="col-md-12">
                <div class="container">
                    <div class="row">


                        <div id="wrapper" class="col-md-9">
                            <div id="page">
                                <h1>Update Article </h1>

                                <form method="post" action="/articles">
                                    @csrf

                                    <div class="form-group">
                                        <label class="control-label" for="">Title</label>
                                        <input class="form-control" type="text" name="title"
                                            value="{{ $article->title }}" id="title">
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label" for="">Excerpt</label>
                                        <input class="form-control" type="text" name="exerpt" id="exerpt"
                                            value="{{ $article->exerpt }}">
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label">Body </label>
                                        <textarea name="body" cols="19" rows="6" class="form-control">{{ $article->body }}</textarea>
                                    </div>

                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </body>
