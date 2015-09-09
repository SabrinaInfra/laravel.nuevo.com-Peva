@extends('templates.main')
@section('content')
@include('templates.partials.header')
@include('templates.partials.navig')
<section>
<div class="row-fluid">
    <div class="container">
        <div class="col-md-2"></div>
        <div class="col-md-8">
          <div class="" align="center">
              <h1>Adding a new Serie</h1>
          </div>
            {!! Form::open (['url' => '/insert/serie'])!!}
            <fieldset>
              <legend align="center"></legend>
              <input type="text" name="Name" placeholder="Name" class="form-control">
              <br>
              <textarea name="Description" id="editor" cols="20" rows="10" class="form-control">
                    You have to delete this in order to put another description
              </textarea>
              <br>
              {!! Form::select('Genre', [ '5' =>'Select a Genre'] + Config::get('enums.series_types'),null, ['class' => 'form-control'])  !!}
              <br>
              <input type="text" name="Start" placeholder="Start"  class="form-control">
              <br>
              <input type="text" name="Finish" placeholder="Finish"  class="form-control">
              <br>
              <input type="text" name="Seasons" placeholder="Seasons"  id="seasonsData" class="form-control">
              <br>
              <button type="button" class="btn btn-default" id="Seasons" >Add Season</button> <button type="button" class="hide btn btn-default" id="Close"> Close</button>
              <br>
              <div class="hide" id="SeasonForm">
                @include('insertSeason')
              </div>
              <br>
              <input type="text" name="Photo" placeholder="Put here your favourite picture"  class="form-control">
              <br>
              <input type="submit" value="Update" id="Seasons" class="btn btn-block btn-primary">
            </fieldset>
            {!! Form::close() !!}
        </div>
        <div class="col-md-2"></div>
    </div>
  </div>
  <br>
  <br>
</section>
@section('js')
@endsection
@include('templates.partials.footer')
@stop
