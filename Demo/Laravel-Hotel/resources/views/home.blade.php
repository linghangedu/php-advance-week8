@extends('_layouts.default')
@section('content')
<div class="intro-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="intro-message">
                    <h1>Laravel Hotel</h1>
                    <h3>A demo laravel website by yj</h3>
                    <ul class="list-inline intro-social-buttons">
                        <li>
                            <!-- <a href="" class="btn btn-default btn-lg"><span class="network-name">Book A Room</span></a> -->
                            <a class="waves-effect waves-light btn btn-default modal-trigger" href="#booking">Book A Room</a>
                        </li>
                    </ul>
                    <!-- Modal Structure -->
                    <div id="booking" class="modal">
                        <div class="modal-content">
                           <iframe src="/booking/index.html#/book" frameborder="0" style="overflow:hidden;height:100%;width:100%;padding:20px;min-height:700px;" height="100%" width="100%"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="content">
    @foreach ($articles as $key=>$article)
    @if($key % 2 == 1)
    <div class="content-section-a">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-sm-6">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">{{ $article->title }}</h2>
                    <p class="lead">{{ $article->body }}</p>
                </div>
                <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                    <img class="img-responsive" src="{{ $article->image }}" alt="">
                </div>
            </div>
        </div>
    </div>
    @else
    <div class="content-section-b">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-lg-offset-1 col-sm-push-6  col-sm-6">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">{{ $article->title }}</h2>
                    <p class="lead">{{ $article->body }}</p>
                </div>
                <div class="col-lg-5 col-sm-pull-6  col-sm-6">
                    <img class="img-responsive" src="{{ $article->image }}" alt="">
                </div>
            </div>
        </div>
    </div>
    @endif
    @endforeach
</div>
@endsection