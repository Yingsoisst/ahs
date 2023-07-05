<?php require_once("inc/func.php"); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>NU15</title>
  <?php require("inc/css_inc.php"); ?>
<body>
<?php require("inc/topbar.php"); ?>

<main class="container-lg mt-2">
  <div class="bg-light p-4 rounded">
  <div class="row text-center mb-3">
    <div>
      <img src="image/nu-logo.png" class="img-thumbnail" style="width:100px;"> <br>
      <span class="h3">คําร้องขอใบแสดงผลการเรียน (TRANSCRIPT)</span>
    </div>
  </div> 

  <form action="form_nu15_pdf.php" method="post" id="fmadd" name="fmadd"required>
  <div class="row">
  <div class="col-md-4">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text"> ลงวันที่ </span>
          <input type="date" class="form-control" name="datenow"  required>
        </div>						  
      </div>
      </div>  

    <div class="row">
      <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text"> ข้าพเจ้า </span>
          <input type="text" class="form-control" name="name" placeholder="ชื่อ-สกุล" required>
        </div>						  
      </div>
      <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">รหัสนิสิต</span>
          <input type="number" class="form-control" oninput="maxLengthCheck(this)" min="0" maxlength="8" name="ids" required>    
        </div>						  
      </div>
    </div>

    <div class="row">
      <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">ชื่อ-สกุล(ภาษาอังกฤษ)</span>
          <input type="text" class="form-control" name="name_eng" placeholder="ชื่อ-สกุล ภาษาอังกฤษ (MR./MRS./MISS) ตัวพิมพ์ใหญ" required>
        </div>						  
      </div>
      <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">เบอร์โทร</span>
          <input type="number" class="form-control" name="num" oninput="maxLengthCheck(this)" min="0" maxlength="10"  placeholder="เบอร์โทรศัพท์ที่สามารถติดต่อได้" required>    
        </div>						  
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">คณะ</span>
          <input type="text" class="form-control" name="faculty" placeholder="" required>
        </div>						  
      </div>
      <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">สาขาวิชา</span>
          <input type="text" class="form-control" name="Major" placeholder="" required>    
        </div>						  
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">ปีที่เข้าศึกษา</span>
          <input type="number" class="form-control" name="year"  oninput="maxLengthCheck(this)" min="0" maxlength="4" placeholder="" required>
        </div>						  
      </div>
      <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">ปีที่จบการศึกษา</span>
          <input type="number" class="form-control" name="last_year" oninput="maxLengthCheck(this)" min="0" maxlength="4"  placeholder="" required>    
        </div>						  
      </div>
    </div>


    <!-- <?php 
  $t_department = array(
    '',
    'ปริญญาตรี',
    'ปริญญาโท',
    'ปริญญาเอก'
  );
  ?>
<div class="row">
<div class="col-lg-6">
    <div class="input-group input-group-sm mb-3">
      <span class="input-group-text"> สำหรับระดับ </span>
      <select class="form-select mb-0.8" name="depart" id="depart"  onchange="showOptions()">
        <option value="" selected> กรุณาเลือกระดับปริญญา </option>
        <?php for ($i=1; $i < count($t_department); $i++ ){ ?>
        <option value="<?php echo($i);?>"><?php echo($t_department[$i]);?></option>
        <?php }?>
					  
      </select>
    </div>
  </div>
  <div class="col-lg-6" id="optionRow" style="display:none;">
  <option value="">ตามที่กำหนดไว้ในคู่มือลงทะเบียนเรียนประจำภาคเรียน</option>
    <div class="input-group input-group-sm mb-3">
      <span class="input-group-text"> ภาคเรียน </span>
      <select class="form-select mb-0.8" name="option" id="option">
        <option value=""> กรุณาเลือกภาคเรียน </option>
      </select>
    </div>
    
  </div> 
  

  <script>
function showOptions() {
  var depart = document.getElementById("depart").value;
  var optionRow = document.getElementById("optionRow");
  var optionSelect = document.getElementById("option");
  if (depart == 1) { // ปริญญาตรี
    optionRow.style.display = "block";
<div class="col-md-6"><div class="input-group input-group-sm mb-3"><span class="input-group-text">ปีที่จบการศึกษา</span><input type="text" class="form-control" name="last_year" placeholder="" ></div></div>;
  } else if (depart == 2) { // ปริญญาโท
<div class="col-md-6"><div class="input-group input-group-sm mb-3">
<span class="input-group-text">ปีที่จบการศึกษา</span><input type="text" class="form-control" name="last_year" placeholder="" ></div></div>';
  } else { // ปริญญาเอก
    optionRow.style.display = "none";
    optionSelect.innerHTML = "";
  }
}
</script> -->







<!-- สําหรับปริญญาตรี -->
<br>
<div class="col-lg-6">
สําหรับปริญญาตรี
</div>
<div class="row">

  <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text"> ลงวันที่ </span>
          <input type="date" class="form-control" name="datenow1"  required>
        </div>						  
      </div>
      <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text"> สัญชาติ </span>
          <input type="text" class="form-control" name="nationality1" placeholder="สัญชาติ" >
        </div>						  
      </div>
</div>  

<div class="row">
    <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text"> ศาสนา </span>
          <input type="text" class="form-control" name="religion1" placeholder="" >
        </div>						  
      </div>
      <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text"> จังหวัดที่เกิด </span>
          <input type="text" class="form-control" name="province1" placeholder="" >
        </div>						  
      </div>
</div>  

<div class="row">
    <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text"> วุฒิการศึกษาสูงสุด(ตัวย่อภาษาอังกฤษ) </span>
          <input type="text" class="form-control" name="educational1" placeholder="" >
        </div>						  
      </div>
      <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text"> สถาบันที่สำเร็จการศึกษา </span>
          <input type="text" class="form-control" name="Graduation1" placeholder="" >
        </div>						  
      </div>
</div>  

<!-- หลักสูตรคู่ขนาน -->
<br>
<div class="col-lg-6">
หลักสูตรคู่ขนาน
</div>
<div class="row">

    <div class="col-md-12">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text"> ระบุสาขาที่ต้องการ </span>
          <input type="text" class="form-control" name="Major1" placeholder="หลักสูตร วิทยาศาสตร์การแพทย์คู่ขนาน นิติศาสตร์ ต้องการคือ วิทยาศาสตร์การแพทย์" >
        </div>						  
      </div>
</div>  

<!-- สําหรับปริญญาโท -->
<br>
<div class="col-lg-6">
สําหรับปริญญาโท
</div>
<div class="row">
<div class="row">
    <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text"> วุฒิการศึกษาสูงสุดระดับปริญญาตรี (ตัวย่อภาษาอังกฤษ) </span>
          <input type="text" class="form-control" name="educational2" placeholder="" >
        </div>						  
      </div>
      <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text"> สถาบันที่สำเร็จการศึกษา </span>
          <input type="text" class="form-control" name="Graduation2" placeholder="" >
        </div>						  
      </div>
</div> 

  <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text"> ลงวันที่ </span>
          <input type="date" class="form-control" name="datenow2"  required>
        </div>						  
      </div>
      <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text"> สัญชาติ </span>
          <input type="text" class="form-control" name="nationality2" placeholder="สัญชาติ" >
        </div>						  
      </div>
</div>  

<div class="row">
    <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text"> ศาสนา </span>
          <input type="text" class="form-control" name="religion2" placeholder="" >
        </div>						  
      </div>
      <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text"> จังหวัดที่เกิด </span>
          <input type="text" class="form-control" name="province2" placeholder="" >
        </div>						  
      </div>
</div>  
 
<!-- สําหรับปริญญาเอก -->
<br>
<div class="col-lg-6">
สําหรับปริญญาเอก
</div>
<div class="row">
<div class="row">
    <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text"> วุฒิการศึกษาสูงสุดระดับปริญญาตรี (ตัวย่อภาษาอังกฤษ) </span>
          <input type="text" class="form-control" name="educational3" placeholder="" >
        </div>						  
      </div>
      <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text"> สถาบันที่สำเร็จการศึกษา </span>
          <input type="text" class="form-control" name="Graduation3" placeholder="" >
        </div>						  
      </div>
</div> 

  <div class="col-md-6">
  <div class="input-group input-group-sm mb-3">
          <span class="input-group-text"> ลงวันที่ </span>
          <input type="date" class="form-control" name="datenow3"  required>
        </div>						  
      </div>
      <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text"> สัญชาติ </span>
          <input type="text" class="form-control" name="nationality3" placeholder="สัญชาติ" >
        </div>						  
      </div>
</div>  

<div class="row">
    <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text"> ศาสนา </span>
          <input type="text" class="form-control" name="religion3" placeholder="" >
        </div>						  
      </div>
      <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text"> จังหวัดที่เกิด </span>
          <input type="text" class="form-control" name="province3" placeholder="" >
        </div>						  
      </div>
</div>  
<br>
มีความประสงค์จะขอ
<div class="row">
    <div class="col-md-4">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">ใบแปลรายวิชาฉบับภาษาไทย</span>
          <input type="text" class="form-control" name="wish1" placeholder="จำนวน" >
          <span class="input-group-text">ฉบับ</span>
        </div>						  
      </div>
      <div class="col-md-4">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text"> ใบ TRANSCRIPT ก่อนสําเร็จการศึกษา</span>
          <input type="text" class="form-control" name="wish2" placeholder="จำนวน" >
          <span class="input-group-text">ฉบับ</span>
        </div>						  
      </div>
      <div class="col-md-4">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">ใบ TRANSCRIPT หลังสําเร็จการศึกษา</span>
          <input type="text" class="form-control" name="wish3" placeholder="จำนวน" >
          <span class="input-group-text">ฉบับ</span>
        </div>						  
      </div>
</div>  


<!-- สำหรับจัดส่ง -->
<br>
<div class="col-lg-6">
สําหรับจัดส่ง
</div>
<div class="row">
    <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text"> ชื่อ-นามสกุล </span>
          <input type="text" class="form-control" name="name1" placeholder="" >
        </div>						  
      </div>
      <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text"> ที่อยู่ </span>
          <input type="text" class="form-control" name="address" placeholder="" >
        </div>						  
      </div>
</div> 


  

  <hr class="mt-1">
  <div class="row">
    <div class="col-md-12">
        <input type="hidden" name="title_head" value="NU15" />
        <input type="hidden" name="MM_insert" value="fmadd" />
    <input name="submit" type="submit" id="submit" value=" พิมพ์แบบฟอร์ม " class="btn btn-primary mt-2">
    </div>
  </div>	
    
  </form>
	  

  </div>
</main>
<?php require("inc/js_inc.php"); ?>	
</body>
<script language="javascript">
  function maxLengthCheck(object)
  {
    if (object.value.length > object.maxLength)
      object.value = object.value.slice(0, object.maxLength)
  }
</script>
</html>
