
  <div class="form-row">
    <div class="col">
    <strong>รหัสนักศึกษา : </strong>
      <input  type="number"name="student_id"value="{{ isset($member->student_id) ? $member->student_id : '' }}"
      class="form-control" >
    </div>

    <div class="col">
    <strong>เลขบัตรประชาชน : </strong>
      <input type="number" name="iden_number" value="{{ isset($member->iden_number) ? $member->iden_number : '' }}" class="form-control" placeholder="เลขบัตรประชาชน">
    </div>
  </div>
<br>


  <div class="form-row">
    <div class="col">
    <strong>ชื่อ : </strong>
      <input type="text" name="name"value="{{ isset($member->name) ? $member->name : '' }}" class="form-control" placeholder="First name"></strong>
    </div>

    <div class="col">
    <strong>นามสกุล : </strong>
      <input type="text" name="lastname"value="{{ isset($member->lastname) ? $member->lastname : '' }}"  class="form-control" placeholder="Last name">
    </div>

    <div class="col">
    <strong>ชื่อเล่น : </strong>
      <input type="text"  name="nickname" value="{{ isset($member->nickname) ? $member->nickname : '' }}"  class="form-control" placeholder="ชื่อเล่น">
    </div>
  </div>
<br>


  <div class="form-row">
    <div class="col">
    <strong>ที่อยู่ : </strong>
      <input  type="text" name="address" value="{{  isset($member->address) ?  $member->address : '' }}"  class="form-control" placeholder="ที่อยู่">
    </div>
  </div>
<br>


  <div class="form-row">
    <div class="col">
    <strong>จบจากโรงเรียน : </strong>
      <input type="text" name="school" value="{{ isset($member->school) ?  $member->school : '' }}" class="form-control" placeholder="จบจากโรงเรียน">
    </div>
    <div class="col">
    <strong>โทรศัพท์ : </strong>
      <input type="number"name="phone"value="{{ isset($member->phone) ?  $member->phone : '' }}" class="form-control" placeholder="โทรศัพท์">
    </div>
  </div>
<br>


  <div class="form-row">
    <div class="col">
    <strong>E-mail : </strong>
      <input type="text" name="email" value="{{ isset($member->email) ? $member->email : '' }}" class="form-control" placeholder="E-mail">
    </div>
    <div class="col">
    <strong>facebook : </strong>
      <input type="text"name="facebook"value="{{ isset($member->facebook) ?  $member->facebook : '' }}" class="form-control" placeholder="facebook">
    </div>
  </div>
<br>

<div class="form-group {{ $errors->has('file') ? 'has-error' : ''}}"> <?//Change DB:$Picture to $file for easily use?>
    <label for="file" class="control-label">{{ 'Picture : ' }}</label>
    <input class="form-control" name="file" type="file" id="file" value="" >
    {!! $errors->first('file', '<p class="help-block">:message</p>') !!}
</div>


<div class="p-3 mb-2 bg-warning text-dark"><h4><center>สถานที่ทำงาน</center></h4></div><br>


  <div class="form-row">
    <div class="col">
    <strong>บริษัท : </strong>
      <input  type="text" name="company" value="{{ isset($member->company) ? $member->company : '' }}"  class="form-control" placeholder="บริษัท">
    </div>
  </div>
<br>


  <div class="form-row">
    <div class="col">
    <strong>ที่อยู่บริษัท : </strong>
      <input  type="text" name="com_address" value="{{ isset($member->com_address) ? $member->com_address : '' }}"   class="form-control" placeholder="ที่อยู่บริษัท">
    </div>
  </div>

<br>







