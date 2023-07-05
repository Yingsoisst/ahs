<?php require_once("inc/func.php"); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>การใช้ลายเซ็นอิเล็กทรอนิกส์</title>
  <?php require("inc/css_inc.php"); ?>
<body>
<?php require("inc/topbar.php"); ?>

<main class="container-lg mt-2">
  <div class="bg-light p-4 rounded">
  <div class="row text-center mb-3">
    <div>
      <img src="image/logo.png" class="img-thumbnail" style="width:100px;"> <br>
      <span class="h3">การใช้ลายเซ็นอิเล็กทรอนิกส์</span><br>
      <span class="h3">บันทึกข้อความ</span>
    </div>
  </div> 

  <form action="signature_pdf.php" method="post" id="fmadd" name="fmadd">
          

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
          <span class="input-group-text">ขอชี้แจงการใช้ลายเซ็นอิเล็กทรอนิกส์ในแบบแสดงหลักฐานการมีส่วนร่วมในผลงานทางวิชาการ</span>
          <span class="input-group-text">เรียน</span>
          <span class="input-group-text">คณะกรรมการพิจารณาตำแหน่งทางวิชาการ</span>
        </div>						  
      </div>
    </div>
    <div class="d-flex">
  <div class="btn-group" role="group" style="height: 30px; width: 500px;" aria-label="Basic radio toggle button group">
    <span class="input-group-text">ตามที่</span>
    <input type="radio" class="btn-check" name="btnradio1" id="btnradio1_1" value="1" autocomplete="off" >
    <label class="btn btn-outline-primary" for="btnradio1_1">กระผม</label>
    <input type="radio" class="btn-check" name="btnradio1" id="btnradio1_2" value="2" autocomplete="off">
    <label class="btn btn-outline-primary" for="btnradio1_2">ดิฉัน</label>
  </div>
      <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">ตามที่ </span>
          <input type="text" class="form-control" name="name" placeholder="(นาย/นาง/นางสาว) ชื่อ-นามสกุล" required>
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
          <span class="input-group-text">ส่งแบบคำขอรับการพิจารณากำหนดตำแหน่งทางวิชาการ (แบบ ก.พ.อ. ๐๓)  และผลงานทางวิชาการ </span>
        </div>						  
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">เพื่อขอกำหนดตำแหน่งทางวิชาการ </span>
          <span class="input-group-text">ระดับ</span>
          <input type="text" class="form-control" name="level" placeholder="" required>
          <span class="input-group-text">ซึ่งได้มีการใช้ลายเซ็นอิเล็กทรอนิกส์ในแบบแสดงหลักฐานการมีส่วนร่วมในผลงานทางวิชาการ</span>
        </div>						  
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">เรื่อง</span>
          <input type="text" class="form-control" name="about" placeholder="" required>
        </div>						  
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">เนื่องจาก</span>
          <input type="text" class="form-control" name="because" placeholder="" required>
        </div>						  
      </div>
    </div>

  
  <hr class="mt-1">
  <div class="row">
    <div class="col-md-12">
        <input type="hidden" name="title_head" value="การใช้ลายเซ็นอิเล็กทรอนิกส์" />
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
