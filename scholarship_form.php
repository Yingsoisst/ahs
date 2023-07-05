<?php require_once("inc/func.php"); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ใบสมัครขอรับทุนอุดหนุนการวิจัยในการทำวิทยานิพนธ์สำหรับนิสิตระดับบัณฑิตศึกษา</title>
  <?php require("inc/css_inc.php"); ?>
<body>
<?php require("inc/topbar.php"); ?>

<main class="container-lg mt-2">
  <div class="bg-light p-4 rounded">
  <div class="row text-center mb-3">
    <div>
      <img src="image/nu-logo.png" class="img-thumbnail" style="width:100px;"> <br>
      <span class="h2">ใบสมัครขอรับทุนอุดหนุนการวิจัยในการทำวิทยานิพนธ์สำหรับนิสิตระดับบัณฑิตศึกษา</span><br>
      <span class="h2">คณะสหเวชศาสตร์  มหาวิทยาลัยนเรศวร</span>
    </div>
  </div> 

  <form action="scholarship_pdf.php" method="post" id="fmadd" name="fmadd">
  <div class="col-lg-6">
  (โปรดกรอกใบสมัครด้วยตัวบรรจง)
</div>
<div class="col-lg-6">
 1.
</div>
    <div class="row">
      <div class="col-md-8">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text"> ข้าพเจ้า </span>
          <input type="text" class="form-control" name="name" placeholder="(นาย, นาง, นางสาว)ชื่อ-สกุล" required>
        </div>						  
      </div>
      <div class="col-md-4">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">อายุ</span>
          <input type="number" class="form-control"oninput="maxLengthCheck(this)" min="0" maxlength="2"  name="age" required>    
        </div>						  
      </div>
    </div>
    <div class="col-lg-6">
  2.
</div>
    <div class="row">
      <div class="col-md-3">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">ที่อยู่ปัจจุบันเลขที่ </span>
          <input type="text" class="form-control" name="num_home" placeholder="" required>
        </div>						  
      </div>
      <div class="col-md-3">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">ซอย</span>
          <input type="text" class="form-control" name="Soi" required>    
        </div>						  
      </div>
      <div class="col-md-3">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">ถนน</span>
          <input type="text" class="form-control" name="road" placeholder="" required>
        </div>						  
      </div>
      <div class="col-md-3">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">ตำบล</span>
          <input type="text" class="form-control" name="Tambon" required>    
        </div>						  
      </div>
    </div>
    
    <div class="row">
      <div class="col-md-4">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">อำเภอ</span>
          <input type="text" class="form-control" name="Amphoe" placeholder="" required>
        </div>						  
      </div>
      <div class="col-md-4">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">จังหวัด</span>
          <input type="text" class="form-control" name="province" required>    
        </div>						  
      </div>
      <div class="col-md-4">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">รหัสไปรษณีย์</span>
          <input type="number" class="form-control" oninput="maxLengthCheck(this)" min="0" maxlength="5" name="postcode" placeholder="" required>
        </div>						  
      </div>
    </div>
    
    <div class="row">
      <div class="col-md-5">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">เบอร์โทรศัพท์</span>
          <input type="number" class="form-control" name="num" oninput="maxLengthCheck(this)" min="0" maxlength="10"  placeholder="เบอร์โทรศัพท์ที่สามารถติดต่อได้สะดวก" required>
        </div>						  
      </div>
      <div class="col-md-7">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">email</span>
          <input type="text" class="form-control" name="email" required>    
        </div>						  
      </div>
    </div>
    <div class="col-lg-6">
  3.
</div>
    <div class="row">
      <div class="col-md-5">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">ปัจจุบันศึกษาอยู่ระดับ</span>
          <input type="text" class="form-control" name="Currently" placeholder="" required>
        </div>						  
      </div>
      <div class="col-md-7">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">หลักสูตร</span>
          <input type="text" class="form-control" name="course" required>    
        </div>						  
      </div>
    </div>
    <div class="col-lg-6">
  4.
</div>
    <div class="row">
      <div class="col-md-12">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">ได้ผลคะแนนการทดสอบภาษาอังกฤษ ซึ่งผ่านเกณฑ์ตามประกาศของมหาวิทยาลัย </span>
          <span class="input-group-text">คือ</span>
          <input type="number" class="form-control"  name="point" step="0.01" required>
          <span class="input-group-text">คะแนน</span>
        </div>						  
      </div>
    </div>
    <div class="col-lg-6">
  6.
</div>
    <div class="row">
      <div class="col-md-12">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">วิทยานิพนธ์</span>
          <span class="input-group-text">เรื่อง</span>
          <input type="text" class="form-control" name="thesis" placeholder="" required>
        </div>						  
      </div>
    </div>

    <div class="row">
      <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">อาจารย์ที่ปรึกษา</span>
          <input type="text" class="form-control" name="advisor" placeholder="" required>
        </div>						  
      </div>
      <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">อาจารย์ที่ปรึกษาร่วม</span>
          <input type="text" class="form-control" name="advisor1" required>    
        </div>						  
      </div>
    </div>
    <div class="col-lg-6">
  7.
</div>
    <div class="row">
      <div class="col-md-12">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">สรุปโครงร่างวิทยานิพนธ์ (Summary of Thesis proposal) ไม่เกิน 205 คำ  </span>
          <input type="text" class="form-control" name="about" placeholder="" maxlength="1000" required>
        </div>						  
      </div>
    </div>

    <div class="row">
      <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">ลงชื่อผู้สมัคร</span>
          <input type="text" class="form-control" name="name1" placeholder="นาย/นาง/นางสาว ชื่อ-นามสกุล"  required>
        </div>						  
      </div>
      <div class="col-md-6">
      <div class="input-group input-group-sm mb-3">
          <span class="input-group-text"> ลงวันที่ </span>
          <input type="date" class="form-control" name="datenow1"  required>
        </div>						  
      </div>
    </div>


  
  <hr class="mt-1">
  <div class="row">
    <div class="col-md-12">
        <input type="hidden" name="title_head" value="ใบสมัครขอรับทุนอุดหนุนการวิจัยในการทำวิทยานิพนธ์สำหรับนิสิตระดับบัณฑิตศึกษา" />
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
