<center>
<div class="form-row">
  <strong class=" col-form-label">&nbsp;รหัสนักศึกษา :</strong>
  <div class="col-7">
      <input ype="text" name="student_id" value="{{ isset($addstudent->student_id) ? $addstudent->student_id : '' }}" 
      class="form-control"      placeholder="รหัสนักศึกษา" required>
  </div>
</div><br>

<div class="form-row">
  <strong class=" col-form-label">
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ชื่อ :</strong>
  <div class="col-7">
      <input type="text"name="name"value="{{ isset($addstudent->name) ?  $addstudent->name : '' }}"
      class="form-control"     placeholder="ชื่อ" required />
  </div>
</div><br>
<div class="form-row">
  <strong class=" col-form-label">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;นามสกุล :</strong>
  <div class="col-7">
      <input type="text" name="lastname" value="{{ isset($addstudent->lastname) ? $addstudent->lastname : '' }}" 
      class="form-control"      placeholder="นามสกุล" required />
  </div>
</div><br>
<br><br><br><br>
</center>

