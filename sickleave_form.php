<?php require_once("inc/func.php"); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>แบบใบลาป่วย ลาคลอดบุตร ลากิจส่วนตัว</title>
  <?php require("inc/css_inc.php"); ?>
<body>
<?php require("inc/topbar.php"); ?>

<main class="container-lg mt-2">
  <div class="bg-light p-4 rounded">
  <div class="row text-center mb-3">
    <div>
      <img src="image/nu-logo.png" class="img-thumbnail" style="width:100px;"> <br>
      <span class="h3">แบบใบลาป่วย ลาคลอดบุตร ลากิจส่วนตัว</span>
    </div>
  </div> 

  <form action="sickleave_pdf.php" method="post" id="fmadd" name="fmadd">
  <div class="row">
  <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">เขียนที่</span>
          <input type="text" class="form-control" name="at" placeholder="สถานที่ที่เขียน" required>
        </div>						  
      </div>
  <div class="col-md-6">
  <div class="input-group input-group-sm mb-3">
          <span class="input-group-text"> ลงวันที่ </span>
          <input type="date" class="form-control" name="datenow1"  required>
        </div>					  
      </div>
      </div>  

    <div class="row">
      <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">เรื่อง</span>
          <span class="input-group-text">ขอลา</span>
          <input type="text" class="form-control" name="leave" placeholder="" required>
        </div>						  
      </div>
      <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">เรียน</span>
          <input type="text" class="form-control" name="to" required>    
        </div>						  
      </div>
    </div>
    
    <div class="row">
      <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">ข้าพเจ้า</span>
          <input type="text" class="form-control" name="name" placeholder="" required>
        </div>						  
      </div>
      <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text"> ตำแหน่ง </span>
          <input type="text" class="form-control" name="own_position" required>    
        </div>						  
      </div>
    </div>

    <div class="row">
      <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">สังกัด</span>
          <input type="text" class="form-control" name="affiliation" placeholder="" required>
        </div>						  
      </div>
      <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">คณะสหเวชศาสตร์  มหาวิทยาลัยนเรศวร</span>       
        </div>						  
      </div>
    </div>
    
    <div class="row">
    <div class="col-md-12">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">ตั้งแต่วันที่</span>
          <input type="date" class="form-control" name="datenow2"  required>
          <span class="input-group-text">ถึง วันที่</span>
          <input type="date" class="form-control" name="datenow3"  required>
          <span class="input-group-text">มีกำหนด</span>
          <input type="number" class="form-control"  oninput="maxLengthCheck(this)" min="0" maxlength="3" name="many" placeholder="ระบุจำนวนวันที่ต้องการลา" required>
          <span class="input-group-text">วัน</span>
        </div>						  
      </div>
    </div>
	  
    <div class="row">
    <div class="col-md-12">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">ข้าพเจ้าได้ลา ครั้งสุดท้าย</span>
          <span class="input-group-text">ตั้งแต่วันที่</span>
          <input type="date" class="form-control" name="datenow4"  required>
          <span class="input-group-text">ถึง วันที่</span>
          <input type="date" class="form-control" name="datenow5"  required>
          <span class="input-group-text">มีกำหนด</span>
          <input type="number" class="form-control"  oninput="maxLengthCheck(this)" min="0" maxlength="3" name="many1" placeholder="ระบุจำนวนวันที่ต้องการลา" required>
          <span class="input-group-text">วัน</span>
        </div>						  
      </div>
    </div>
  
    <div class="row">
      <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">ในระหว่างลาจะติดต่อข้าพเจ้าได้ที่</span>
          <input type="text" class="form-control" name="connect" placeholder="" required>
        </div>						  
      </div>
      <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">ขอแสดงความนับถือ</span>
          <span class="input-group-text">ลงชื่อ</span>
          <input type="text" class="form-control" name="name2" placeholder="(นาย/นาง/นางสาว) ชื่อ-นามสกุล" required>
        </div>						  
      </div>
    </div>



  <hr class="mt-1">
  <div class="row">
    <div class="col-md-12">
        <input type="hidden" name="title_head" value="แบบใบลาป่วย ลาคลอดบุตร ลากิจส่วนตัว" />
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
