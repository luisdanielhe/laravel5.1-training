@extends('layouts.articles')

@section('content')

<div class="content">
    <div class="row left-align">
        <div class="col s12 m12">
            <a href="/practices/3" class="btn-floating btn-large waves-effect waves-light orange">Back to Practices</a>
        </div>
    </div>
</div>

<div class="content">
    <div class="row">
      <div class="col s6">
        <h4 class="truncate">Articles </h4>
      </div>
      <div class="fixed-action-btn" style="top: 75px; right: 24px;">
            <a href="/articles/create" class="btn-floating btn-large green">
              <i class="large material-icons">add</i>
            </a>
      </div>
    </div>
</div>
<div class="content">
  <ul class="row ">
    @foreach ($articles as $article)

       <li class="col s12 m6 l4 small-screen-margin-top ">

              <div class="card hoverable">
                [[-- <div class="card-image">
                  <img src="images/sample-1.jpg">
                  <span class="card-title"><a href="/articles/[[ $article->id ]]" >[[ $article->title ]]</a></span>
                </div> --]]
                <div class="card-content card-article">
                <span class="card-title"><a href="/articles/[[ $article->id ]]" >[[ $article->title ]]</a></span>
                  <p>[[ str_limit($article->body, $limit = 200, $end = '...') ]]</p>
                </div>
                <div class="card-action">
                  <a href="/articles/[[ $article->id ]]" class="right-align">See more</a>
                </div>
              </div>

        </li>

    @endforeach
  </ul>
</div>

@stop