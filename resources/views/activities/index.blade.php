@extends('layouts.dash')

@section('content')

<center>

<div class="p-3 mb-2 bg-dark text-white"><h3> <i class="far fa-calendar-alt"></i> ปฎิทินกิจกรรม</h3></div>
</center>

<div class="container-fluid">
@if( Auth::user()->status == "admin" )
<div class="col-lg-5">
	</div><br>
@endif

<center>
	<div class="row">
    <div class="col-lg-10">


<table class="table">
  <thead>
    <tr>
     
	</tr>
	@foreach($activities as $activities)
  </thead>
  <tbody>
    <tr>
      <th scope="row">{{ $activities->title }}</th>
      <td>{{ $activities->title }}</td>
      <td>{{ $activities->data }}</td>
	  <td>{{ $activities->date }}</td>
	  
	  <td>
		<button type="submit"class="btn btn-info">
			<i class="far fa-eye"></i>
			<a href="{{ url('/') }}/activities/{{ $activities->id }}">ดู</a></button>
    	@if( Auth::user()->status == "admin" )
      &nbsp; &nbsp; 
		
		<button type="submit"class="btn btn-warning">
			<i class="fas fa-pen-alt"></i>
			<a href="{{ url('/') }}/activities/{{ $activities->id }}/edit">แก้ไข</a></button>
		&nbsp; &nbsp;
			<form
					
                    action="{{ url('/') }}/activities/{{ $activities->id }}"
                    method="POST"
                    onsubmit="validate();"
                    style="display:inline" >

                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                <button type="submit"class="btn btn-danger">
				<i class="far fa-trash-alt"></i>	
				ลบ</button> 
            </form>
            @endif
		</td>
    </tr>
    @endforeach
  
    <iframe src="https://calendar.google.com/calendar/embed?height=600&amp;wkst=1&amp;bgcolor=%238E24AA&amp;
ctz=Asia%2FBangkok&amp;src=a2FyZWVtMTUyNjhAZ21haWwuY29t&amp;
src=YWRkcmVzc2Jvb2sjY29udGFjdHNAZ3JvdXAudi5jYWxlbmRhci5nb29nbGUuY29t&amp;
src=dGgudGgjaG9saWRheUBncm91cC52LmNhbGVuZGFyLmdvb2dsZS5jb20&amp;
color=%23039BE5&amp;color=%237986CB&amp;color=%237986CB" 
style="border-width:0" width="1200" height="800" frameborder="0" scrolling="no"></iframe>

  </tbody>
</table>

</div></div>
</center>
		<script>
            function validate(){
                //SUBMIT
                var wantToDelete= confirm('คุณแน่ใจที่จะลบรายการนี้?');
                if(wantToDelete){
                    this.submit();
                }
            }
        </script>
</div>

@endsection



