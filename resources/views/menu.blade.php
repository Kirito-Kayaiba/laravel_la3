<?php
  $loaitin_arr = \DB::table('loaitin1')->select('id','ten') -> orderby('thutu','asc') -> where('anhien','=','1') -> limit(5) -> get();
?>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        @foreach($loaitin_arr as $lt)
        <li class="nav-item">
          <a class="nav-link" href="{{url('/tintrongloai/'.$lt->id)}}">{{$lt->ten}}</a>
        </li>
        @endforeach
          <a class="nav-link" href="#">Pricing</a>
          <a class="nav-link "  href="#">Disabled</a>
      </ul>
    </div>
  </div>
</nav>