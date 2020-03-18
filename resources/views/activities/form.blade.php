
<center>
<div class="row">
		<div class="col-11">
      <div>
        <strong>ผู้โฟส : </strong>
        <input 
              type="student_id" name="student_id" value="{{ isset($activities->student_id) ? $activities->student_id : '' }}" 
              placeholder="student_id here..." />
      </div>
      </div>
</div><br><br>

<div class="row">
    <div class="col-11">
      <div>
        <strong>หัวข้อ : </strong>
        <input
            type="text"name="title"value="{{ isset($activities->title) ?  $activities->title : '' }}"
            placeholder="title here..."/>
      </div>
      </div>
      </div><br><br>

      <div class="row">
    <div class="col-11">
      <div>
        <strong>รายละเอียด : </strong>
        <input 
              type="text" name="data" value="{{ isset($activities->data) ? $activities->data : '' }}" 
              placeholder="data here..." />
      </div>
      </div>
      </div><br><br>

      <div class="row">
    <div class="col-11">
<div>
  <strong>วันที่ : </strong>
  <input 
        type="date" name="date" value="{{ isset($activities->date) ? $activities->date : '' }}" 
        placeholder="date here..." />
</div>
</div>
</div><br><br>
</center>


