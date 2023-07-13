@extends('layout')
@section('tieudetrang')
  {{$tin->tieude}}
@endsection
@section('noidung')
<h2>{{$tin->tieude}}</h2>
<h3>{{$tin->tomtat}}</h3>
<div id="noidung">
  {!! $tin->noidung !!}
</div>
@endsection
