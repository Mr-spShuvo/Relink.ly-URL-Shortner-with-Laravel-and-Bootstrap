<script>
  new ClipboardJS('.copybtn');
  function change() // no ';' here
  {
      var elem = document.getElementById("copybutton");
      elem.innerHTML= "Copied";
  }

</script>


@if(!empty($errors))
  @if($errors->any())
  <div class="alert alert-danger" role="alert">
    <h4 class="alert-heading">Please Fix this Errors!</h4> <hr>
    @foreach($errors->all() as $error)
      <li>{!! $error !!}</li>
    @endforeach
  </div>
  @endif
@endif

@if (session('old_url'))
  <div class="alert alert-danger" role="alert" style="font-size: 20px;">
      The Link has already been existed in our database.
      <p>Link:
        <a  id="copy-target" class="text-primary" href="http://localhost:8000/{{ session('old_url') }}" target="_blank">
        relink.ly/{{ session('old_url') }}
      </a>
      
      <button onclick="change()" class="copybtn btn btn-outline-danger copy-button ml-3" 
      data-clipboard-action="copy"  id="copybutton"
      data-clipboard-target="#copy-target">
          Copy
      </button>
      </p>

  </div>
@endif

@if (session('new_url'))
  <div class="alert alert-success" role="alert" style="font-size: 20px;">
    New Link has been successfully created.
    <p>Link:
      <a class="text-primary" id="copy-target" href="http://localhost:8000/{{ session('new_url') }}" 
      target="_blank">
        relink.ly/{{ session('new_url') }}
      </a>
      <button onclick="change()" class="copybtn btn btn-outline-success copy-button ml-3" 
      data-clipboard-action="copy"  id="copybutton"
      data-clipboard-target="#copy-target">
          Copy
      </button>
    </p>
  </div>
@endif

