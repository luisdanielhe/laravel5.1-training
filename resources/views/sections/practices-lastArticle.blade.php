<div class="content">
  <div class="row">
         <div class="col s12 m12 l12 small-screen-margin-top center-align">
              <h4>[[ $latest->title ]]</h4>
          </div>
          <div class="col s12 m12 l12 small-screen-margin-top article-body ">
                <p class="flow-text">[[ $latest->body ]]...<a href="/articles/[[ $latest->id ]]">Read more</a></p>

          </div>
          <div class="col s12 m12 l12 small-screen-margin-top right-align">
                <p>[[ $latest->user->name ]] [[ $latest->published_at->format('d-m-Y') ]]</p>
          </div>
           <div class="fixed-action-btn" style="top: 75px; right: 24px;">
            <a href="/articles/[[ $latest->id ]]/edit" class="btn-floating btn-large red">
              <i class="large material-icons">mode_edit</i>
            </a>
          </div>
  </div>
</div>