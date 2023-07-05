<?php require_once("inc/func.php"); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>แบบฟอร์มออกหนังสือรับรอง</title>
  <?php require("inc/css_inc.php"); ?>
<body>
<?php require("inc/topbar.php"); ?>

<main class="container-lg mt-2">
  <div class="bg-light p-4 rounded">
  <div class="row text-center mb-3">
    <div>
      <img src="image/logo.png" class="img-thumbnail" style="width:100px;"> <br>
      <span class="h3">บันทึกข้อความ</span>
    </div>
  </div> 

  <form action="ensure_pdf.php" method="post" id="fmadd" name="fmadd">
          
    <div class="row">
      <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">ส่วนราชการ</span>
          <input type="text" class="form-control" name="service" placeholder="" required>
        </div>						  
      </div>
      <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">โทร</span>
          <input type="text"  oninput="maxLengthCheck(this)" min="0" maxlength="10" class="form-control" name="num" required>    
        </div>						  
      </div>
    </div>
    
    <div class="row">
      <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">ที่</span>
          <span class="input-group-text">อว</span>
          <input type="text" class="form-control" name="A1" placeholder="" required>
          <span class="input-group-text">/</span>
          <input type="text" class="form-control" name="A2" placeholder="" required>
        </div>						  
      </div>
      <div class="col-md-6">
      <div class="input-group input-group-sm mb-3">
          <span class="input-group-text"> วันที่ </span>
          <input type="date" class="form-control" name="datenow1"  required>
        </div>						  
      </div>
    </div>

    <div class="row">
    <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">เรื่อง</span>
          <span class="input-group-text">ขอความอนุเคราะห์หนังสือรับรอง</span>
          <input type="text" class="form-control" name="about" placeholder="" required>    
        </div>						  
      </div>
      <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">เรียน</span>
          <span class="input-group-text">คณบดีคณะสหเวชศาสตร์</span>
          <span class="input-group-text">ผ่านหัวหน้าภาควิชา</span>
          <input type="text" class="form-control" name="to" placeholder="" required>
        </div>						  
      </div>
    </div>
	  
	            
    <div class="row">
    <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">ด้วย ดิฉัน/กระผม</span>
          <input type="text" class="form-control" name="name" placeholder="(นาย/นาง/นางสาว) ชื่อ-สกุล" required>    
        </div>						  
      </div>
      <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">พนักงานมหาวิทยาลัย</span>
          <span class="input-group-text">ตำแหน่ง</span>
          <input type="text" class="form-control" name="position" placeholder="" required>
        </div>						  
      </div>
    </div>
    
    <div class="row">
    <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">สังกัดภาควิชา</span>
          <input type="text" class="form-control" name="department" required>    
          <span class="input-group-text">คณะสหเวชศาสตร์ </span>
        </div>						  
      </div>
      <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">มีความประสงค์จะขอหนังสือรับรอง</span>
          <span class="input-group-text">เพื่อใช้ในการ</span>
          <input type="text" class="form-control" name="certificate" placeholder="" required>
          <span class="input-group-text">นั้น</span>
        </div>						  
      </div>
    </div>

    <div class="row">
    <div class="col-md-7">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">ในการนี้</span>
          <span class="input-group-text">ดิฉัน/กระผม จึงขอความอนุเคราะห์หนังสือรับรอง</span>
          <input type="text" class="form-control" name="certificate1" placeholder="ระบุว่ารับรองการปฏิบัติงานหรือรับรองเงินเดือน" required>
        </div>						  
      </div>
      <div class="col-md-5">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">จำนวน</span>
          <input type="number" class="form-control"  oninput="maxLengthCheck(this)" min="0" maxlength="2" name="many" placeholder="" required>
          <span class="input-group-text">ฉบับ</span>
        </div>						  
      </div>
      </div>
<div class="col-lg-6">
โดยมีรายละเอียด ดังนี้
</div>
      <div class="row">
      <div class="col-md-8">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">1. หากเป็นเอกสารฉบับภาษาอังกฤษ</span>
          <input type="text" class="form-control" name="one" placeholder="หากเป็นฉบับภาษาอังกฤษโปรดระบุชื่อ" >
          <span class="input-group-text">หากเป็นเอกสารภาษาไทย ข้ามไปได้เลย</span>
        </div>						  
      </div>
      <div class="col-md-4">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">2.บรรจุ/เริ่มปฏิบัติงานเมื่อวันที่ </span>
          <input type="date" class="form-control" name="two" placeholder="ระบุวันที่บรรจุหรือเริ่มปฏิบัติงาน" required>
        </div>						  
      </div>
    </div>
    
    <div class="row">
    <div class="col-md-6">
      <div class="input-group input-group-sm mb-3">
        <span class="input-group-text">3. อัตราเงินเดือนปัจจุบัน</span>
        <input type="number" class="form-control" name="three" oninput="maxLengthCheck(this)" min="0" maxlength="7"  placeholder="" required>
        <span class="input-group-text">บาท</span>
      </div>						  
    </div>
    <div class="col-md-6">
      <div class="input-group input-group-sm mb-3">
        <span class="input-group-text">พร้อมมเงินประจำตำแหน่งทางวิชาการ</span>
        <input type="number" class="form-control" oninput="maxLengthCheck(this)" min="0" maxlength="7" name="salary" placeholder="" required>
        <span class="input-group-text">บาท</span>
      </div>						  
    </div>
  </div>
  
  <div class="row">
  <div class="col-md-6">
    <div class="input-group input-group-sm mb-3">
      <span class="input-group-text">และ</span>
      <span class="input-group-text">เงินเพิ่มพิเศษ พตส. </span>
      <input type="number" class="form-control"  oninput="maxLengthCheck(this)" min="0" maxlength="7" name="extra_salary" placeholder="" required>
      <span class="input-group-text">บาท</span>
    </div>						  
  </div>
  <!-- <div class="col-md-6">
    <div class="input-group input-group-sm mb-3">
      <span class="input-group-text">รวมเป็นเงินทั้งสิ้น</span>
      <input type="text" class="form-control" name="Total" placeholder="" required>
      <span class="input-group-text">บาท</span>
    </div>						  
  </div> -->
</div>

<div class="row">
      <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">ลงชื่อ</span>
          <input type="text" class="form-control" name="name3" placeholder="นาย/นาง/นางสาว ชื่อ-นามสกุล"  required>
        </div>						  
      </div>
      <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">ตำแหน่ง</span>
          <input type="text" class="form-control" name="name4" placeholder=""  required>
        </div>						  
      </div>
    </div>

  
  <hr class="mt-1">
  <div class="row">
    <div class="col-md-12">
        <input type="hidden" name="title_head" value="แบบฟอร์มออกหนังสือรับรอง" />
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
