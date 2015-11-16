<div class="content">
  <div class="row contact-form">
      <form class="col s12">
        <div class="row">
          <div class="input-field col s6">
            <input placeholder="Placeholder" id="first_name" type="text" class="validate">
            <label for="first_name">First Name</label>
          </div>
          <div class="input-field col s6">
            <input id="last_name" type="text" class="validate">
            <label for="last_name">Last Name</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <input disabled value="I am not editable" id="disabled" type="text" class="validate">
            <label for="disabled">Disabled</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <input id="email" type="email" class="validate">
            <label for="email">Email</label>
          </div>
        </div>
        <div class="row">
        <div class="input-field col s12">
            <select multiple id="select">
              <option value="" disabled selected>Choose your option</option>
              <option value="1">Option 1</option>
              <option value="2">Option 2</option>
              <option value="3">Option 3</option>
            </select>
            <label>Materialize Multiple Select</label>
        </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <button type="submit" class="btn">Send</button>
          </div>
        </div>
      </form>
  </div>
</div>
@section('javascript')
  <script type="text/javascript">
  $(document).ready(function() {
    $('#select').material_select();
  });
  </script>
@stop