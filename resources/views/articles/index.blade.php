@extends('layouts.practices')

@section('content')

    <div class="row left-align">
        <div class="col s12 m12">
            <a href="/practices/3" class="btn-floating btn-large waves-effect waves-light orange">Back to Practices</a>
        </div>
    </div>

    <div class="row center-align">
      <div class="col s12">
        <h4 class="truncate">Articles</h4>
      </div>
    </div>
    <div class="row ">

    @foreach ($articles as $article)

       <div class="col s12 m6 l4 small-screen-margin-top ">
              <a href="/articles/[[ $article->id ]]" ><h5>[[ $article->title ]]</h5></a>
              <p>[[ str_limit($article->body, $limit = 200, $end = '...') ]]</p>
              <a href="/articles/[[ $article->id ]]" class="right-align"><p>See more</p></a>
        </div>

    @endforeach

    </div>
@stop