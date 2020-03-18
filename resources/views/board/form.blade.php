
    <div class="form-row">
  <strong class=" col-form-label">&nbsp;หัวข้อ :</strong>
  <div class="col-5">
      <input type="text" name="title" value="{{ isset($board->title) ?  $board->title : '' }}"
          class="form-control" placeholder="หัวข้อ" required>
  </div>

  <strong class=" col-form-label">&nbsp;&nbsp;วันที่ :</strong>
  <div class="col">
      <input type="date" name="date" value="{{ isset($board->date) ? $board->date : '' }}" 
      class="form-control" placeholder=""required />
  </div>
</div><br>

<div class="form-row">
  <strong class=" col-form-label">&nbsp;รายละอียด :</strong>
  <div class="col-11">
      <textarea input type="text" name="data" value="{{ isset($board->data) ? $board->data : '' }}"
          class="form-control" placeholder="รายละอียด" required></textarea>
  </div>
</div><br><br>

<div class="row d-none">
		<div class="col-11">
      <div>
        <strong>รหัสผู้โฟส : </strong>
        <input 
              type="number" name="number" value="{{ Auth::user()->codename }}" 
              placeholder="number here..." />
      </div>
      </div>
  

   
<div class="col-11">
    <div>
      <strong>ชื่อผู้โฟส : </strong>
      <input 
            type="text" name="personnel" value="{{ Auth::user()->name }}" 
            placeholder="personnel here..." />
    </div>
</div>
</div><br><br>
<!--


<div class="row">
<div class="col-11">
    <div>
      <strong>หัวข้อ : </strong>
      <input
          type="text" name="title" value="{{ isset($board->title) ?  $board->title : '' }}"
          placeholder="title here..."/>
    </div>
    </div>
</div><br><br>

<div class="row">
<div class="col-11">
      <div>
        <strong>รายละอียด : </strong>
        <input 
              type="text" name="data" value="{{ isset($board->data) ? $board->data : '' }}" 
              placeholder="data here..." />
      </div>
</div>
</div><br><br>

<div class="row">
<div class="col-11">
    <div>
      <strong>วันที่ : </strong>
      <input 
            type="date" name="date" value="{{ isset($board->date) ? $board->date : '' }}" 
            placeholder="date here..." />
    </div>  
</div>
</div>
<br><br>
-->


