<div class="content">
  <div class="row center-align">
      @foreach ($practices as $practice)

         <div class="col s12 m6 l4 small-screen-margin-top ">
            <div class="card hoverable">
              <div class="card-image waves-effect waves-block waves-light">
                <img class="activator" src="[[[ asset('assets/images/'.$practice->title.'.jpg') ]]]">
              </div>
              <div class="card-content">
                <span class="card-title activator grey-text text-darken-4">[[ $practice->title ]]<i class="material-icons right">more_vert</i></span>
              </div>
              <div class="card-reveal">
                <span class="card-title grey-text text-darken-4">Details of this practice<i class="material-icons right">close</i></span>
                <p>[[ $practice->description ]]</p>
              </div>
              <div class="card-action left-align">
                  <a href="/practices/[[ $practice->id ]]">look it</a>
                </div>
            </div>
          </div>

      @endforeach
  </div>
</div>