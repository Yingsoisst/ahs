<?php require_once("inc/func.php"); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>แบบฟอร์มขอความอนุเคราะห์นิสิตจิตอาสา คณะสหเวชศาสตร์</title>
  <?php require("inc/css_inc.php"); ?>
<body>
<?php require("inc/topbar.php"); ?>

<main class="container-lg mt-2">
  <div class="bg-light p-4 rounded">
  <div class="row text-center mb-3">
    <div>
      <span class="h3">แบบฟอร์มขอความอนุเคราะห์นิสิตจิตอาสา คณะสหเวชศาสตร์</span>
    </div>
  </div> 

  <form action="volunteer_pdf.php" method="post" id="fmadd" name="fmadd">
    <div class="row">
      <div class="col-md-6">
      <div class="input-group input-group-sm mb-3">
          <span class="input-group-text"> วันที่ </span>
          <input type="date" class="form-control" name="date"  required>
        </div>						  
      </div>
    </div>
	            
    <div class="row">
    <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">ชื่อ-นามสกุล</span>
          <input type="text" class="form-control" name="name" placeholder="(นาย/นาง/นางสาว) ชื่อ-สกุล" required>    
        </div>						  
      </div>
      <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">ตำแหน่ง</span>
          <input type="text" class="form-control" name="position"  required>
        </div>						  
      </div>
    </div>
    
    <div class="row">
    <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">สังกัด</span>
          <input type="text" class="form-control" placeholder="สำนักงานเลขานุการ/ภาควิชา" name="affiliation" required>    
        </div>						  
      </div>
    </div>

      <div class="row">
      <div class="col-md-12">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">มีความประสงค์ขอความอนุเคราะห์นิสิตจิตอาสาทำงาน</span>
          <span class="input-group-text">ข้อ 1.</span>
          <input type="text" class="form-control" name="wish1" placeholder="ระบุประเภทงานที่ทำเป็นข้อ" required>
        </div>						  
      </div>
    </div>
    
    <div class="row">
    <div class="col-md-6">
      <div class="input-group input-group-sm mb-3">
        <span class="input-group-text">ข้อ 2.</span>
        <input type="text" class="form-control" name="wish2" placeholder="ระบุประเภทงานที่ทำเป็นข้อ" required>
      </div>						  
    </div>
    <div class="col-md-6">
      <div class="input-group input-group-sm mb-3">
        <span class="input-group-text">ข้อ 3.</span>
        <input type="text" class="form-control" name="wish3" placeholder="ระบุประเภทงานที่ทำเป็นข้อ" required>
      </div>						  
    </div>
  </div>

    <div class="row">
    <div class="col-md-6">
      <div class="input-group input-group-sm mb-3">
        <span class="input-group-text">ข้อ 4.</span>
        <input type="text" class="form-control" name="wish4" placeholder="ระบุประเภทงานที่ทำเป็นข้อ" required>
      </div>						  
    </div>
    <div class="col-md-6">
      <div class="input-group input-group-sm mb-3">
        <span class="input-group-text">ข้อ 5.</span>
        <input type="text" class="form-control" name="wish5" placeholder="ระบุประเภทงานที่ทำเป็นข้อ" required>
      </div>						  
    </div>
  </div>

      <div class="row">
      <div class="col-md-8">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">วัตถุประสงค์</span>
          <input type="text" class="form-control" name="objective" placeholder="ระบุวัตถุประสงค์ โครงการ/กิจกรรม โดยย่อ" required>
        </div>						  
      </div>
      <div class="col-md-4">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">จำนวน</span>
          <input type="text" class="form-control" name="many" placeholder="" required>
          <span class="input-group-text">คน</span>
        </div>						  
      </div>
    </div>
    
    <div class="row">
    <div class="col-md-3">
      <div class="input-group input-group-sm mb-3">
        <span class="input-group-text">วันที่</span>
        <input type="date" class="form-control" name="date1" placeholder="" required>
      </div>						  
    </div>
    <div class="col-md-3">
      <div class="input-group input-group-sm mb-3">
        <span class="input-group-text">เวลา</span>
        <input type="time" class="form-control" name="time" placeholder="" required>
      </div>						  
    </div>
    <div class="col-md-6">
      <div class="input-group input-group-sm mb-3">
        <span class="input-group-text">สถานที่</span>
        <input type="text" class="form-control" name="place" placeholder="" required>
        <span class="input-group-text">คน</span>
      </div>						  
    </div>
  </div>

  
  <hr class="mt-1">
  <div class="row">
    <div class="col-md-12">
        <input type="hidden" name="title_head" value="แบบฟอร์มขอความอนุเคราะห์นิสิตจิตอาสา คณะสหเวชศาสตร์" />
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
