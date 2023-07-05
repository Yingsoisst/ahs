<?php require_once("inc/func.php"); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>แบบใบลาไปต่างประเทศ</title>
  <?php require("inc/css_inc.php"); ?>
<body>
<?php require("inc/topbar.php"); ?>

<main class="container-lg mt-2">
  <div class="bg-light p-4 rounded">
  <div class="row text-center mb-3">
    <div>
      <img src="image/nu-logo.png" class="img-thumbnail" style="width:100px;"> <br>
      <span class="h3">แบบใบลาไปต่างประเทศ</span>
    </div>
  </div> 

  <form action="abroad_pdf.php" method="post" id="fmadd" name="fmadd">
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
          <span class="input-group-text"> ข้าพเจ้า </span>
          <input type="text" class="form-control" name="name" placeholder="ชื่อ-สกุล" required>
        </div>						  
      </div>
      <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">อายุ</span>
          <input type="number"  oninput="maxLengthCheck(this)" min="0" maxlength="2" class="form-control" name="age" required>    
        </div>						  
      </div>
    </div>
    
    <!-- บรรจุเมื่อ -->
    <div class="row">
    <div class="col-md-6">
    <div class="input-group input-group-sm mb-3">
          <span class="input-group-text"> บรรจุเมื่อวันที่ </span>
          <input type="date" class="form-control" name="datenow2"  required>
        </div>							  
      </div>
      <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">ตำแหน่ง</span>
          <input type="text" class="form-control" name="own_position" required>    
        </div>						  
      </div>
    </div>

    <div class="row">
      <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">ระดับ</span>
          <input type="text" class="form-control" name="level" placeholder="" required>
        </div>						  
      </div>
      <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">สังกัด</span>
          <input type="text" class="form-control" name="affiliation" required>    
          <span class="input-group-text">คณะสหเวชศาสตร์  มหาวิทยาลัยนเรศวร</span>
        </div>						  
      </div>
    </div>

    <div class="row">
      <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">มีความประสงค์จะลา</span>
          <input type="text" class="form-control" name="wish" placeholder="" required>
        </div>						  
      </div>
      <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">ไปต่างประเทศ  ณ ประเทศ</span>
          <input type="text" class="form-control" name="country" required>    
        </div>						  
      </div>
    </div>
	  
    <div class="row">
    <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">มีกำหนด</span>
          <input type="number"  oninput="maxLengthCheck(this)" min="0" maxlength="2" class="form-control" name="datenow14" placeholder="ระบุจำนวนปีที่ต้องการลา" required>
          <input type="number"  oninput="maxLengthCheck(this)" min="0" maxlength="2" class="form-control" name="datenow24" placeholder="ระบุจำนวนเดือนที่ต้องการลา" required>
          <input type="number"  oninput="maxLengthCheck(this)" min="0" maxlength="2" class="form-control" name="datenow34" placeholder="ระบุจำนวนวันที่ต้องการลา" required>
          </div>						  
      </div>
          <div class="col-md-6">
            
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">ตั้งแต่วันที่</span>
          <input type="date" class="form-control" name="datenow3"  required>
          <span class="input-group-text">ถึง วันที่</span>
          <input type="date" class="form-control" name="datenow4"  required>
        </div>						  
      </div>
    </div>

    <div class="row">
      <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">ครั้งสุดท้ายข้าพเจ้าได้ลา</span>
          <input type="text" class="form-control" name="last_left" placeholder="" required>
        </div>						  
      </div>
      <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">ไปต่างประเทศ  ณ ประเทศ</span>
          <input type="text" class="form-control" name="last_country" required>    
        </div>						  
      </div>
    </div>

    <div class="row">
    <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">เป็นเวลา</span>
          <input type="number" class="form-control"  oninput="maxLengthCheck(this)" min="0" maxlength="2" name="datenow17" placeholder="ระบุจำนวนปีที่ลา" required>
          <input type="number" class="form-control"  oninput="maxLengthCheck(this)" min="0" maxlength="2" name="datenow27" placeholder="ระบุจำนวนเดือนที่ลา" required>
          <input type="number" class="form-control"  oninput="maxLengthCheck(this)" min="0" maxlength="2" name="datenow37" placeholder="ระบุจำนวนวันที่ลา" required>
          </div>						  
      </div>
          <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">เมื่อวันที่</span>
          <input type="date" class="form-control" name="datenow5"  required>
          <span class="input-group-text">ถึง วันที่</span>
          <input type="date" class="form-control" name="datenow6"  required>
        </div>						  
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
        <input type="hidden" name="title_head" value="แบบใบลาไปต่างประเทศ" />
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
