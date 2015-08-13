<!doctype html>
<html>
  <head>
    <title>Create a Car</title>
    <!— Bootstrap CSS —>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  </head>
  <body>
    <div class="container">

      <div class="page-header">
          <h1>Create a Car</h1>
      </div>

      @if (session('message'))
      <div class="alert alert-success">
        {{ session('message') }}
      </div>
      @endif

      @if (count(session('errors')) > 0)
      <div class="alert alert-danger">
        @foreach (session('errors')->all() as $error)
          {{ $error }}<br>
        @endforeach
      </div>
      @endif

      {!! Form::model($car, array('route' => 'cars.store')) !!}

        <div class="form-group">
          {!! Form::label('make', 'Make') !!}
          {!! Form::text('make', '', ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
          {!! Form::label('model', 'Model') !!}
          {!! Form::text('model', '', ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
          {!! Form::label('produced_on', 'Production Date (YYYY-MM-DD)') !!}
          <div class="row">
            <div class="col-sm-2">
              {!! Form::text('produced_on', '', ['class' => 'form-control']) !!}
            </div>
          </div>
        </div>

        <button class="btn btn-success" type="submit">Add the Car!</button>

      {!! Form::close() !!}

    </div><!-- end .container -->

    <!— Bootstrap JavaScript —>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </body>
</html>