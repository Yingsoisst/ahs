<?php require_once("inc/func.php"); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>เพิ่มสมาชิกหน่วยวิจัย</title>
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

  <form action="unit_member_pdf.php" method="post" id="fmadd" name="fmadd">
          

    ส่วนราชการ  คณะสหเวชศาสตร์  สำนักงานเลขานุการ  งานวิจัยและห้องปฏิบัติการ   โทร.6224
    <div class="row">
      <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">ที่</span>
          <span class="input-group-text">อว. 0603.13.0(5)</span>
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
      <div class="col-md-11">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">เรื่อง</span>
          <span class="input-group-text">การขออนุมัติเพิ่มสมาชิกหน่วยวิจัย</span>
          <input type="text" class="form-control" name="about" placeholder="" required>
              เรียน   คณบดีคณะสหเวชศาสตร์  (ผ่านรองคณบดีฝ่ายวิจัยและบัณฑิตศึกษา)
        </div>						  
      </div>
    </div>
	  
	  <div class="row">
      <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">ด้วย ข้าพเจ้า</span>
          <input type="text" class="form-control" name="name" placeholder="ชื่อ-นามสกุล" required>
        </div>						  
      </div>
      <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">หัวหน้าหน่วยวิจัย</span>
          <input type="text" class="form-control" name="head" required>    
        </div>						  
      </div>
    </div>
    
	  <div class="row">
      <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">ได้รับอนุมัติให้จัดตั้งหน่วยวิจัย</span>
          <input type="text" class="form-control" name="Approval" placeholder="" required>
        </div>						  
      </div>
      <div class="col-md-6">
      <div class="input-group input-group-sm mb-3">
          <span class="input-group-text"> เมื่อวันที่ </span>
          <input type="date" class="form-control" name="datenow2"  required>
        </div>						  
      </div>
      ซึ่งได้รับอนุมัติให้มีการต่ออายุหน่วยวิจัยในทุกๆ 5 ปี  โดยมีผลการดำเนินงานของหน่วยวิจัยฯ เป็นไปตามประกาศคณะสหเวชศาสตร์ เรื่อง การจัดตั้งและการสนับสนุนหน่วยวิจัย (Research unit) ตามความทราบแล้วนั้น
    </div><br><br>
  
	  <div class="row">
      <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">ในการนี้</span>
          <span class="input-group-text">เพื่อให้การดำเนินงานของหน่วยวิจัย</span>
          <input type="text" class="form-control" name="to" placeholder="" required>
        </div>						  
      </div>
      เป็นไปอย่างมีประสิทธิภาพ และเพิ่มศักยภาพในการทำงานวิจัย ทางหน่วยวิจัยฯ 
    </div>
    
	  <div class="row">
      <div class="col-md-12">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">จึงมีความประสงค์ขอเพิ่ม</span>
          <input type="text" class="form-control" name="wish" placeholder="" >
          <span class="input-group-text">ตำแหน่ง</span>
          <input type="text" class="form-control" name="position" placeholder="" >
          <span class="input-group-text">สังกัด</span>
          <input type="text" class="form-control" name="position1" placeholder="" >
        </div>						  
      </div>
    </div>


	  <div class="row">
      <div class="col-md-5">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">ลงชื่อ</span>
          <input type="text" class="form-control" name="name1" placeholder="(นาย/นาง/นางสาว)ชื่อ-นามสกุล" required>
        </div>						  
      </div>
      <div class="col-md-5">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">หัวหน้าหน่วยวิจัย</span>
          <input type="text" class="form-control" name="head1" placeholder=""required>    
        </div>						  
      </div>
    </div>


  <hr class="mt-1">
  <div class="row">
    <div class="col-md-12">
        <input type="hidden" name="title_head" value="เพิ่มสมาชิกหน่วยวิจัย" />
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
