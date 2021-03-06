@extends('templates.main')
@section('title'){{''}}@endsection
@section('content')
@include('templates.partials.header')
@include('templates.partials.navig')
<div class="row-fluid">
  <div class="container">
    <div class="col-md-8">
      <div class="" align="center">
        @foreach($serie as $s)
        <h2>{{$s->Name}}</h2>
        <img src="/storage/{{$s->Photo}}" alt="{{$s->Name}}" class="imagenWidth img-responsive img-thumbnail"/>
        @endforeach
      </div>
    </div>
    <div class="col-md-4">
      @if (!empty($characters))
      <div class="" align="center">
          <h3>Characters</h3>
          <br>
      </div>
      <div class="" align="center">
        @foreach($characters as $character)
        <div class="muestra_cuadrada">
          <a href="/character/{{$character->slug}}"><img src="/storage/{{$character->Photo}}" alt="{{$character->Name}}" class="imagenWidth img-responsive img-thumbnail"/></a>
        </div>
        @endforeach
      </div>
      @endif
    </div>
  </div>
  <div class="container">
    <div class="col-md-8">
        <hr>
        @if (!empty($seasons))
        <div class="" align="center">
          <?php $cont = 1;?>
          @foreach ($seasons as $x)
                @if(!empty($x->Name))
                      <a href="/serie/{{$s->slug}}/{{$x->Season}}" class="bot btn btn-default">Season {{$x->Season}}</a>
                @else
                      <a href="#" class="bot btn btn-default disabled">Season {{$x->Season}}</a>
                @endif
                    @if(($cont%6) == 0)
                    <br>
                    <br>
                    @endif
          <?php $cont++; ?>
          @endforeach
              @if(($cont%6) != 0)
              <br>
              <br>
              @endif
          </div>
          <hr>
          @endif
          <div class="" align="center">
              <p>{{$s->Description}}</p>
          </div>
    </div>
    <div class="col-md-4">
        <div class="" align="center">
          @if (!empty($characters))
          <div align="center">
            <hr>
            <br>
            <a href="/characters/{{$s->slug}}" class=" btn btn-default btn-sm">Wanna see more Characters?</a>
          </div>
          @endif
        </div>
          <br>
          <br>
          <div class="" align="center">
            <table class="table table-striped table-hover ">
              <thead>
                <div class="" align="center">
                  <th class="text-center">
                    {{$s->Name}}
                  </th>
                </div>
              </thead>
              <tbody>
                  <tr class="active">
                    <td><label for="">Name: </label>   {{$s->Name}}</td>
                  </tr>
                  <tr class="active">
                    <td><label for="">Genre: </label>   {{$s->Genre}}</td>
                  </tr>
                  <tr class="active">
                    <td><label for="">Start: </label>   {{$s->Start}}</td>
                  </tr>
                  <tr class="active">
                    <td><label for="">Finish: </label>   {{$s->Finish}}</td>
                  </tr>
              </tbody>
          </table>
    </div>
  </div>
</div>
@endsection
@section('footer')
@include('templates.partials.footer')
@stop
