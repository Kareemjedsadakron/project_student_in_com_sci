@extends('layouts.dash')

@section('content')
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
 
  <div class="container-fluid">
  <img src="{{ asset('admin/img/logo5.png')}}" class="d-block w-"  width="1330" height="400" alt="..." >
  </div><br><br>
  <div class="container">
  <div class="row">
  <div class="col-sm-10">

  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{ asset('admin/img/pro.png')}}" class="d-block w-100" alt="..." >
    </div>
    <div class="carousel-item">
      <img src="{{ asset('admin/img/3.jpg')}}" class="d-block w-100" alt="..." >
    </div>
    <div class="carousel-item">
      <img src="{{ asset('admin/img/bas.png')}}" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
<div class="col-sm-2">
<iframe src="https://calendar.google.com/calendar/embed?height=600&amp;wkst=1&amp;bgcolor=%238E24AA&amp;
                    ctz=Asia%2FBangkok&amp;src=a2FyZWVtMTUyNjhAZ21haWwuY29t&amp;
                    src=YWRkcmVzc2Jvb2sjY29udGFjdHNAZ3JvdXAudi5jYWxlbmRhci5nb29nbGUuY29t&amp;
                    src=dGgudGgjaG9saWRheUBncm91cC52LmNhbGVuZGFyLmdvb2dsZS5jb20&amp;
                    color=%23039BE5&amp;color=%237986CB&amp;color=%237986CB" 
        style="border-width:0" width="250" height="350" frameborder="0" scrolling="no">
</iframe><br><br>
      <a href="https://www.facebook.com/profile.php?id=100008113098809&amp;fref=ts">
      <img src="{{ asset('admin/img/facebook.jpg')}}" width="250"height="70" ></a><br>
      
      <img src="{{ asset('admin/img/reem.jpg')}}" width="250"height="270" ><br><br>
      
    
      </div>
      
    <!-- แยกส่วนข่าว กับปฎิทิน -->
      <div class="row">
  <div class="col-sm-6">
  <br><br>
      <table class="table">
      <thead class="table-secondary">
        <tr>
          <th scope="col">ข่าวประชาสัมพัธ์</th>
        </tr>
      </thead>
      <tbody>
        <tr >
      @foreach($publicrelations as $publicrelations)
         
 
          <td>
            <a href="{{ url('/') }}/publicrelations/{{ $publicrelations->id }}" class="text-dark">
              {{ $publicrelations->title }}&nbsp;&nbsp;{{ $publicrelations->date }}
            </a>
          </td>

        </tr>
        @endforeach
        
      </tbody>
    </table>
    </div>
    
        <div class="col-sm-6">
        <!--กระดานสนทนา -->
        <table class="table">
        <thead class="table-secondary">
        <th class="table-secondary">กระดานสนทนา</th>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        </thead>
        </table>
      @foreach($board as $board)
      
      <td ><a href="{{ url('/board/' . $board->id) }}"class="text-dark">
      <h6 class="text-primary">
          <i class="fas fa-grin-hearts"></i>&nbsp;{{$board->title}}
      </h6>
      {{$board->personnel}}&nbsp;&nbsp;{{$board->date}}</a>
      </td>
      <hr>
      @endforeach
       
        </div>
      
      
    </div>
    
  




</div>

    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
@endsection