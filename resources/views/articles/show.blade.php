@extends('layouts.articles')

@section('content')

<div class="content">
  <div class="row left-align">
          <div class="col s12 m12">
              <a href="/articles" class="btn-floating btn-large waves-effect waves-light orange"><i class="material-icons">replay</i></a>
          </div>
  </div>
</div>
<div class="content">
  <div class="row">
         <div class="col s12 m12 l12 small-screen-margin-top center-align">
                <h4>[[ $article->title ]]</h4>
          </div>
          <div class="col s12 m12 l12 small-screen-margin-top article-body ">
                <p class="flow-text">[[ $article->body ]]</p>
          </div>
          <div class="col s12 m12 l12 small-screen-margin-top right-align">
                <p>[[ $article->user->name ]] [[ $article->published_at ]]</p>
          </div>
           <div class="fixed-action-btn" style="top: 75px; right: 24px;">
            <a href="/articles/[[ $article->id ]]/edit" class="btn-floating btn-large red">
              <i class="large material-icons">mode_edit</i>
            </a>
          </div>
  </div>
  @unless ($article->tags->isEmpty())
    <div class="row">
       <div class="col s12 m12 l12 small-screen-margin-top center-align">
              <h4>Tags:</h4>
        </div>
        <div class="col s12 m12 l12 small-screen-margin-top article-body ">
              @foreach ($article->tags as $tag)
                <p class="flow-text">[[ $tag->name ]]</p>
              @endforeach
        </div>
    </div>
  @endunless
</div>
@stop