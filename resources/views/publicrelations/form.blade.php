
    <div class="col d-none">
      <strong>รหัสผู้โฟส : </strong>
      <input
          type="number"name="number_id"value="{{ isset($publicrelations->number_id) ?  $publicrelations->number_id : '1234'}}"
          placeholder=""/>
    </div>
    

    <div class="form-row">
  <strong class=" col-form-label">&nbsp;หัวข้อ :</strong>
  <div class="col-5">
      <input type="text" name="title" value="{{ isset($publicrelations->title) ?  $publicrelations->title : '' }}"
          class="form-control" placeholder="หัวข้อ" required>
  </div>

  <strong class=" col-form-label">&nbsp;&nbsp;วันที่ :</strong>
  <div class="col">
      <input type="date" name="date" value="{{ isset($publicrelations->date) ? $publicrelations->date : '' }}" 
      class="form-control" placeholder=""required />
  </div>
</div><br>

<div class="form-row">
  <strong class=" col-form-label">&nbsp;รายละอียด :</strong>
  <div class="col-11">
      <textarea input type="text" name="data" value="{{ isset($publicrelations->data) ?  $publicrelations->data : '' }}"
          class="form-control" placeholder="รายละอียด" required></textarea>
  </div>
</div><br><br>
<!--
<div class="row">

    <div class="form-row">
  <strong class=" col-form-label">หัวข้อ :</strong>
  <div class="col">
      
      <input
          type="text" name="title" value="{{ isset($public_relations->title) ?  $public_relations->title : '' }}" class="form-control"
          placeholder="title here..."/>
    </div>
  </div>
</div><br><br>
<div class="col">
<div>
  <strong>วันที่ : </strong>
  <input 
        type="date" name="date" value="{{ isset($public_relations->date) ? $public_relations->date : '' }}" 
        placeholder="" />
</div>
</div><br><br>
<div class="col">
<div>
  <strong>รายละอียด : </strong>
  <input
      type="text"name="data"value="{{ isset($public_relations->data) ?  $public_relations->data : '' }}"
      placeholder="รายละอียด"/>
</div>
</div>
-->






