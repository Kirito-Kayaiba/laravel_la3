@extends('layout')
@section('tieudetrang')
  {{$idLT}}
@endsection
@section('noidung')
  <h1>tin trong loai {{$idLT}}</h1>
  @foreach($listtin as $t)
    <div class="tin">
      <a href="{{url('/chitiet/'.$t->id)}}"><h2>{{$t->tieude}}</h2></a>
      <h3>{{$t->tomtat}}</h3>
    </div>
    @endforeach
@endsection