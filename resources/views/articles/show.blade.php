@extends('layouts.practices')

@section('content')
<div class="row left-align">
        <div class="col s12 m12">
            <a href="/articles" class="btn-floating btn-large waves-effect waves-light orange"><i class="material-icons">replay</i></a>
        </div>
</div>
<div class="row center-align">
    <h4>Show artcle Selected</h4>
       <div class="col s12 m12 l12 small-screen-margin-top ">
              <a href="/articles/[[ $article->id ]]" ><h4>[[ $article->title ]]</h4></a>

              <p>[[ $article->body ]]</p>
        </div>

</div>
@stop