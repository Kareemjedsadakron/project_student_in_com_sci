@extends('layouts.dash')

@section('content')


<center>

<div class="p-3 mb-2 bg-dark text-white"><h3> <i class="fas fa-grin-hearts"></i> กระดานสนทนา</h3></div>
</center>
<div class="container-fluid">
<br>
	<div class="col-lg-5">
	
        <a href="{{ url('/') }}/board/create"> 
        <button type="button" class="btn btn-success "class="text-white">
		<i class="fas fa-plus"></i>  เพิ่มกระดาน
    </button>
    </a>
	</div><br>


	<div class="row">
    <div class="col-lg-12">


  
@foreach($board as $board)
    <div class="container-fluid">
<div class="row" >
<div class="col-sm-7" style="font-size:18px;">


<td ><a href="{{ url('/board/' . $board->id) }}"class="text-dark">
<h4 class="text-primary">
    <i class="fas fa-grin-hearts"></i>&nbsp;{{$board->title}}
</h4>
{{$board->personnel}}&nbsp;&nbsp;{{$board->date}}</a><br>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    @if( Auth::user()->status == "admin")
            <a href="{{ url('/') }}/board/{{ $board->id }}/edit"class="text-white">
            <button type="submit"class="btn btn-warning">
            <i class="fas fa-pen-alt"></i>&nbsp;แก้ไข
            </button>
            </a> 
        
            <form
                    action="{{ url('/') }}/board/{{ $board->id }}"
                    method="POST"
                    onsubmit="validate();"
                    style="display:inline" >

                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                <button type="submit" class="btn btn-danger">
				<i class="far fa-trash-alt"></i>	ลบ</button>
			
            </form>
    @elseif(Auth::user()->name == "$board->personnel")
            <a href="{{ url('/') }}/board/{{ $board->id }}/edit"class="text-white">
            <button type="submit"class="btn btn-warning">
            <i class="fas fa-pen-alt"></i>&nbsp;แก้ไข
            </button>
            </a> 
        
            <form
                    action="{{ url('/') }}/board/{{ $board->id }}"
                    method="POST"
                    onsubmit="validate();"
                    style="display:inline" >

                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                <button type="submit" class="btn btn-danger">
				<i class="far fa-trash-alt"></i>	ลบ</button>
			
		</form>
    @endif
</td>
<br>

<hr>
<!-- -->
</div>
</div>
</div>



@endforeach

 

</div>
<link href="../css/bootstrap.min.css" rel="stylesheet" />

<link rel="stylesheet" href="../cssmenu/menustyles.css">
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script src="../cssmenu/menuscript.js"></script>
 <link href="css/custom.css" rel="stylesheet" />

<style type="text/css">
.modalDialog {
 position: fixed;
 top: 0;
 right: 0;
 bottom: 0;
 left: 0; 
 background:#aaa;
 z-index: 99999;
 opacity:0;
 -webkit-transition: opacity 400ms ease-in;
 -moz-transition: opacity 400ms ease-in;
 transition: opacity 400ms ease-in;
 pointer-events: none;
}
.modalDialog:target {
 opacity:1;
 pointer-events: auto;
 
}

.modalDialog > div {
 width: 40%;
 position: relative;
 margin: 10% auto;
 padding: 10px 0 20px 10px;
 border-radius: 10px;
 background: #fff;
 
}
.close {
 line-height: 16px;
 position: absolute;
 right: 5px;
 text-align: center;
 top: 5px;
 width: 20px;
 text-decoration: none;
}

</style>

</div>

		<script>
            function validate(){
                //SUBMIT
                var wantToDelete= confirm('คุณแน่ใจที่จะลบรายการนี้?');
                if(wantToDelete){
                    this.submit();
                }
            }
		</script>
		</div><!--
<div class="table">
        <table class="table table-bordered table-hover">
          <tr style="font-weight:bold">
            <td width="40%">{{$board->title}}</td><br>
            <td width="20%">{{$board->personnel}}</td>
			<td width="30%" align="center">{{$board->date}}</td>
			<td >		
            <a href="{{ url('/board/' . $board->id) }}" title="board">
                <button class="btn btn-info btn-sm">
                    <i class="fa fa-eye" aria-hidden="true"></i>&nbsp;ดู
                </button>
            </a>
            </td>
            <td >
            <a href="{{ url('/') }}/board/{{ $board->id }}/edit"class="text-white">
            <button type="submit"class="btn btn-warning">
            <i class="fas fa-pen-alt"></i>&nbsp;แก้ไข
            </button>
            </a> 
            </td>
            <td>
            <form
                    action="{{ url('/') }}/board/{{ $board->id }}"
                    method="POST"
                    onsubmit="validate();"
                    style="display:inline" >

                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                <button type="submit" class="btn btn-danger">
				<i class="far fa-trash-alt"></i>	ลบ</button>
			
			</form>
        </td>
          </tr>
        </table>
</div>
-->
@endsection


