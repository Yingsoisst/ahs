<?php require_once("inc/func.php"); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ขอประเมินผลการสอนและเอกสารประกอบการสอน (สำหรับ ผู้ช่วยศาสตราจารย์)</title>
  <?php require("inc/css_inc.php"); ?>
<body>
<?php require("inc/topbar.php"); ?>

<main class="container-lg mt-2">
  <div class="bg-light p-4 rounded">
  <div class="row text-center mb-3">
    <div>
      <img src="image/logo.png" class="img-thumbnail" style="width:100px;"> <br>
      <span class="h3">ขอประเมินผลการสอนและเอกสารประกอบการสอน (สำหรับ ผู้ช่วยศาสตราจารย์)</span><br>
      <span class="h3">บันทึกข้อความ</span>
    </div>
  </div> 

  <form action="evaluation1_pdf.php" method="post" id="fmadd" name="fmadd">
          

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
          <input type="number" class="form-control" name="num" required>    
        </div>						  
      </div>
    </div>

    <div class="row">
     <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">ที่</span>
          <span class="input-group-text">อว.</span>
          <input type="text" class="form-control" name="to"  required>
        </div>						  
      </div>
     <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text"> ลงวันที่ </span>
          <input type="date" class="form-control" name="date"  required>
        </div>						  
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">เรื่อง</span>
          <span class="input-group-text">ขอประเมินผลการสอนและเอกสารประกอบการสอน</span>
          <span class="input-group-text">เรียน</span>
          <span class="input-group-text">คณบดีคณะสหเวชศาสตร์</span>
        </div>						  
      </div>
    </div>
    <div class="d-flex">
  <div class="btn-group" role="group" style="height: 30px; width: 500px;" aria-label="Basic radio toggle button group">
    <span class="input-group-text">ด้วย</span>
    <input type="radio" class="btn-check" name="btnradio1" id="btnradio1_1" value="1" autocomplete="off" >
    <label class="btn btn-outline-primary" for="btnradio1_1">กระผม</label>
    <input type="radio" class="btn-check" name="btnradio1" id="btnradio1_2" value="2" autocomplete="off">
    <label class="btn btn-outline-primary" for="btnradio1_2">ดิฉัน</label>
  </div>
      <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <input type="text" class="form-control" name="name" placeholder="ชื่อ-นามสกุล" required>
          <span class="input-group-text">พนักงานมหาวิทยาลัย</span>
        </div>						  
      </div>
      <div class="col-md-4">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">ตำแหน่ง</span>
          <input type="text" class="form-control" name="position" required>    
        </div>						  
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">สังกัดภาควิชา</span>
          <input type="text" class="form-control" name="affiliation" placeholder="" required>
          <span class="input-group-text">คณะสหเวชศาสตร์</span>
          มีความประสงค์ขอประเมินการสอนและเอกสารประกอบการสอน  โดยประเมินการสอนแบบสอนจริง 
        </div>						  
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">เพื่อประกอบการขอกำหนดตำแหน่งทางวิชาการ</span>
          <span class="input-group-text">ระดับ</span>
          <input type="text" class="form-control" name="level" placeholder="" required>
          <span class="input-group-text">นั้น</span>
        </div>						  
      </div>
    </div>

    ในการนี้ จึงมีความประสงค์ขอประเมินการสอนแบบสอนจริง 
    <div class="row">
      <div class="col-md-8">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">รายวิชา</span>
          <input type="text" class="form-control" name="subject" placeholder="" required>
        </div>						  
      </div>
      <div class="col-md-4">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">รหัสวิชา</span>
          <input type="text" class="form-control" name="id" placeholder="" required>
        </div>						  
      </div>
    </div>

    <div class="row">
      <div class="col-md-4">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">ซึ่งจะทำการสอนในวันที่</span>
          <input type="date" class="form-control" name="date1" placeholder="" required>
        </div>						  
      </div>
      <div class="col-md-4">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">เวลา</span>
          <input type="time" class="form-control" name="time" placeholder="" required>
        </div>						  
      </div>
      <div class="col-md-4">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">ณ ห้อง</span>
          <input type="text" class="form-control" name="room" placeholder="" required>
        </div>						  
      </div>
    </div>
  
  <hr class="mt-1">
  <div class="row">
    <div class="col-md-12">
        <input type="hidden" name="title_head" value="ขอประเมินผลการสอนและเอกสารประกอบการสอน (สำหรับ ผู้ช่วยศาสตราจารย์)"  />
        <input type="hidden" name="MM_insert" value="fmadd" />
    <input name="submit" type="submit" id="submit" value=" พิมพ์แบบฟอร์ม " class="btn btn-primary mt-2">
    </div>
  </div>	
    
  </form>
	  

  </div>
</main>
<?php require("inc/js_inc.php"); ?>	
</body>

</html>
