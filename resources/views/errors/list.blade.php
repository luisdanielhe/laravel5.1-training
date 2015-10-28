@if ($errors->any())
    <div class="content">
        <div class="row errors">
            <div class="col s12 center-align">
                <div class="card-panel red lighten-4">
                    <ul class="">
                        <li><h6 class="Black">ERRORS</h6></li>
                        @foreach ($errors->all() as $error)
                            <li><p class="condensed light">[[ $error ]]</p></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endif