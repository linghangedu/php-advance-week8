@extends('_layouts.default')

@section('content')

  <div id="content">
    <div class="row">
    <div class="col-md-9 col-sm-12">
            <ul>
              @foreach ($articles as $article)
              <li style="margin: 50px 0;">
                <div class="title">
                  <a href="{{ URL('articles/'.$article->id) }}">
                    <h4>{{ $article->title }}</h4>
                  </a>
                </div>
                <div class="body">
                  <p>{{ $article->body }}</p>
                </div>
              </li>
              @endforeach
            </ul>
            </div>
    </div>
  </div>
  @endsection
