<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>
        {{ config('blog.site') }}-
        @if (empty($id))
            {{ config('blog.title') }}
        @else
            {{ $cat[$id] }}
        @endif
    </title>

    <!-- Bootstrap Core CSS -->
    <link href="/css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/css/clean-blog.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-default navbar-custom navbar-fixed-top">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/blog">{{ config('blog.site') }}</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="/blog">首页</a>
                </li>
                @foreach ($categories as $category)
                    <li>
                        <a href="/category/{{ $category->id }}">{{$category->name}}</a>
                    </li>
                @endforeach
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>

<!-- Page Header -->
<!-- Set your background image for this header on the line below. -->
<header class="intro-header" style="background-image: url('/images/home-bg.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="site-heading">

                    @if (empty($id))
                        <h1>{{ config('blog.title') }}</h1>
                    @else
                        <h1>{{ $cat[$id] }}</h1>
                    @endif

                    <hr class="small">
                    <span class="subheading">{{ config('blog.study') }}</span>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Main Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">

            @foreach ($posts as $post)
                <div class="post-preview">
                    <a href="post.html">
                        <h2 class="post-title">
                            <a href="/blog/{{ $post->slug }}">{{ $post->title }}</a>
                        </h2>
                        <h3 class="post-subtitle">
                            {{ str_limit($post->content) }}
                        </h3>
                    </a>
                    <p class="post-meta"><em>({{ $post->published_at }})</em></p>
                </div>
                <hr>
            @endforeach

            <!-- Pager -->
            <ul class="pager">
                {{--<li class="next">
                    <a href="#">Older Posts &rarr;</a>
                </li>--}}
                {{ $posts->links() }}
            </ul>
        </div>
    </div>
</div>

<hr>

@include('blog._footer')

<!-- jQuery -->
<script src="/js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="/js/bootstrap.js"></script>

<!-- Custom Theme JavaScript -->
<script src="/js/clean-blog.js"></script>

</body>

</html>