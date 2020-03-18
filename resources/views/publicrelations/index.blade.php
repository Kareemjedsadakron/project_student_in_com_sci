@extends('layouts.dash')

@section('content')

<center>

<div class="p-3 mb-2 bg-dark text-white"><h3> <i class="far fa-file"></i> ประชาสัมพันธ์</h3></div>
</center>
<div class="container-fluid">
<br>

	@if( Auth::user()->status == "admin" )
<div class="col-lg-5">
	
    <a href="{{ url('/') }}/publicrelations	/create"class="text-white">
    <button type="button" class="btn btn-success ">
    <i class="fas fa-plus"></i> เพิ่ม 
  </button>
</a>
	
</div><br>
@endif
<center>
	<div class="row">
    <div class="col-lg-12">


<table class="table">
  <thead>
    <tr class="table-primary">
      <th scope="col">ลำดับ</th>
      <th scope="col">หัวข้อ</th>
      <th scope="col">รหัส</th>
	  <th scope="col">วันที่</th>
	  <th scope="col">action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
	@foreach($publicrelations as $publicrelation)
      <th scope="row">{{ $loop->iteration }}</th>
      <td>{{ $publicrelation->title }}</td>
      <td>{{ $publicrelation->number_id }}</th>
      <td>{{ $publicrelation->date }}</td>
   
    <td>
			
      <a href="{{ url('/') }}/publicrelations/{{ $publicrelation->id }}"class="text-white">
      <button type="submit" class="btn btn-info">
      <i class="far fa-eye"></i>&nbsp; ดู
    </button>
      </a>

			@if( Auth::user()->status == "admin" )
			&nbsp; &nbsp; 
      <a href="{{ url('/') }}/publicrelations/{{ $publicrelation->id }}/edit"class="text-white">
      <button type="submit"class="btn btn-warning">
      <i class="fas fa-pen-alt"></i>&nbsp;แก้ไข
    </button>
  </a>
			&nbsp; &nbsp; 


      
			<form
                    action="{{ url('/') }}/publicrelations/{{ $publicrelation->id }}"
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
		</tr>
		@endforeach
  </tbody>
</table>
{{ $publicrelations->links() }}


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



