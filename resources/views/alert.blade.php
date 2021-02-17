@if ($message = Session::get('success'))
<div class="alert alert-success">
    <a class="btn btn-small text-success close"><i class="fas fa-times"></i></a>
    <p>{{ $message }}</p>
</div>
@endif

@if ($message = Session::get('danger'))
<div class="alert alert-danger">
    <a class="btn btn-small text-danger close"><i class="fas fa-times"></i></a>
    <p>{{ $message }}</p>
</div>
@endif


@if ($errors->any())
  <div class="alert alert-danger">
      <a class="btn btn-small text-danger close"><i class="fas fa-times"></i></a>
      <ul>
          @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
      </ul>
  </div>
@endif