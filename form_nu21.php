<?php require_once("inc/func.php"); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>NU21</title>
  <?php require("inc/css_inc.php"); ?>
<body>
<?php require("inc/topbar.php"); ?>

<main class="container-lg mt-2">
  <div class="bg-light p-4 rounded">
  <div class="row text-center mb-3">
    <div>
      <img src="image/nu-logo.png" class="img-thumbnail" style="width:100px;"> <br>
      <span class="h3">คําร้องขอใบรับรอง</span>
    </div>
  </div> 

  <form action="form_nu21_pdf.php" method="post" id="fmadd" name="fmadd">
  <div class="row mt-3">
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
          <input type="number" class="form-control" oninput="maxLengthCheck(this)" min="0" maxlength="8"  name="ids" required>    
        </div>						  
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">ชื่อ-สกุล(ภาษาอังกฤษ) </span>
          <input type="text" class="form-control" name="name_E" placeholder="MR./MRS./MISS....." required>
        </div>						  
      </div>
      <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">โทร</span>
          <input type="text" class="form-control" name="num" required>    
        </div>						  
      </div>
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
          <span class="input-group-text">ชั้นปีที่</span>
          <input type="number" class="form-control"  oninput="maxLengthCheck(this)" min="0" maxlength="1" name="year" placeholder="" required>    
        </div>						  
      </div>
      <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">หลักสูตร</span>
          <input type="text" class="form-control" name="course" placeholder="" required>    
        </div>						  
      </div>

      <div class="row">
      <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">สําเร็จการศึกษาเมื่อ</span>
          <span class="input-group-text">พ.ศ.</span>
          <input type="number" class="form-control"  oninput="maxLengthCheck(this)" min="0" maxlength="4" name="graduated" placeholder="" required>
        </div>						  
      </div>
      <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">GPA</span>
          <input type="text" class="form-control" name="GPA" placeholder="" required>    
        </div>						  
      </div>
    </div>
    มีความประสงค์จะขอ
<div class="row">
    <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text"> ใบรับรองผลการสอบคัดเลือกเข้าเป็นนิสิตใหม่</span>
          <input type="number" class="form-control" oninput="maxLengthCheck(this)" min="0" maxlength="1"  name="wish1" placeholder="จำนวน" >
          <span class="input-group-text">ฉบับ</span>
        </div>						  
      </div></div>
      <div class="row">
      <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text"> ใบรับรองการเป็นนิสิต</span>
          <input type="number" class="form-control" oninput="maxLengthCheck(this)" min="0" maxlength="1"  name="wish2" placeholder="จำนวน" >
          <span class="input-group-text">ฉบับ</span>
        </div>						  
      </div>
      <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">ใบรับรองการเป็นนิสิตแบบฟอร์มของนิสิตเอง</span>
          <input type="number" class="form-control"  oninput="maxLengthCheck(this)" min="0" maxlength="1" name="wish3" placeholder="จำนวน" >
          <span class="input-group-text">ฉบับ</span>
        </div>						  
      </div>
</div>  
      <div class="row">
      <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text"> ใบรับรองกำลังเรียนอยู่ภาคเรียนสุดท้าย </span>
          <input type="number" class="form-control"  oninput="maxLengthCheck(this)" min="0" maxlength="1" name="wish4" placeholder="จำนวน" >
          <span class="input-group-text">ฉบับ</span>
        </div>						  
      </div>
      <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text"> ใบรับรองเรียนครบหลักสูตรและกำลังรอฟังผลภาคเรียนสุดท้าย</span>
          <input type="number" class="form-control"  oninput="maxLengthCheck(this)" min="0" maxlength="1" name="wish5" placeholder="จำนวน" >
          <span class="input-group-text">ฉบับ</span>
        </div>						  
      </div>
</div>  
      <div class="row">
      <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">ใบรับรองอื่นๆ</span>
          <input type="text" class="form-control" name="wish61" placeholder="ระบุชื่อใบรับรอง" >
          <input type="number" class="form-control"  oninput="maxLengthCheck(this)" min="0" maxlength="1" name="wish62" placeholder="จำนวน" >
          <span class="input-group-text">ฉบับ</span>
        </div>						  
      </div>
      <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text"> ใบแปลปริญญาบัตร </span>
          <input type="number" class="form-control"  oninput="maxLengthCheck(this)" min="0" maxlength="1" name="wish7" placeholder="จำนวน" >
          <span class="input-group-text">ฉบับ</span>
        </div>						  
      </div>
</div>  
      <div class="row">
      <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">ใบแปลใบรับรองคุณวุฒิ</span>
          <input type="number" class="form-control" name="wish8"  oninput="maxLengthCheck(this)" min="0" maxlength="1" placeholder="จำนวน" >
          <span class="input-group-text">ฉบับ</span>
        </div>						  
      </div>
      <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">ใบแทนใบรับรองคุณวุฒิ</span>
          <input type="number" class="form-control" name="wish9"  oninput="maxLengthCheck(this)" min="0" maxlength="1" placeholder="จำนวน" >
          <span class="input-group-text">ฉบับ</span>
        </div>						  
      </div>
</div>  

<!-- สำหรับจัดส่ง -->
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
        <input type="hidden" name="title_head" value="NU21" />
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
