<?php require_once("inc/func.php"); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>แบบสรุปผลการเข้าร่วมประชุมวิชาการ อบรม สัมมนา ดูงาน</title>
  <?php require("inc/css_inc.php"); ?>
<body>
<?php require("inc/topbar.php"); ?>

<main class="container-lg mt-2">
  <div class="bg-light p-4 rounded">
  <div class="row text-center mb-3">
    <div>
      <span class="h3">แบบสรุปผลการเข้าร่วมประชุมวิชาการ อบรม สัมมนา ดูงาน</span><br>
      <span class="h4">บุคลากรสายสนับสนุน</span><br>
      <span class="h4">คณะสหเวชศาสตร์ มหาวิทยาลัยนเรศวร</span>
    </div>
  </div> 

  <form action="result_pdf.php" method="post" id="fmadd" name="fmadd">     
    <div class="row">
    <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">ชื่อ-นามสกุล</span>
          <input type="text" class="form-control" name="name" placeholder="(นาย/นาง/นางสาว) ชื่อ-สกุล" required>    
        </div>						  
      </div>
      <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">สังกัด</span>
          <input type="text" class="form-control" placeholder="สำนักงานเลขานุการ/ภาควิชา" name="affiliation"  required>
        </div>						  
      </div>
    </div>
    
    <div class="row">
    <div class="col-md-12">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">ชื่อการประชุมวิชาการ/อบรม/สัมมนา/ดูงาน</span>
          <input type="text" class="form-control" placeholder="" name="meeting_name" required>    
        </div>						  
      </div>
    </div>

      <div class="row">
      <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">วัน/เดือน/ปี </span>
          <input type="date" class="form-control" name="date" placeholder="ระบุประเภทงานที่ทำเป็นข้อ" required>
        </div>						  
      </div>
      <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">จำนวนวันทั้งหมดที่เข้าร่วม </span>
          <input type="number" class="form-control" name="day_join" placeholder="" required>
          <span class="input-group-text">วัน</span>
        </div>						  
      </div>
    </div>
    
    <div class="row">
    <div class="col-md-12">
      <div class="input-group input-group-sm mb-3">
        <span class="input-group-text">ชื่อสถานที่ดำเนินการประชุมวิชาการ/อบรม/สัมมนา/ดูงาน</span>
        <input type="text" class="form-control" name="place1" placeholder="สถานที่" required>
        <input type="text" class="form-control" name="place2" placeholder="เมือง/จังหวัด " required>
        <input type="text" class="form-control" name="place3" placeholder="ประเทศ" required>
      </div>						  
    </div>
  </div>

    <div class="row">
    <div class="col-md-12">
      <div class="input-group input-group-sm mb-3">
        <span class="input-group-text">งบประมาณที่ใช้จริง</span>
        <input type="text" class="form-control" name="wish1" placeholder="1. งบประมาณแผ่นดิน" required>
        <input type="text" class="form-control" name="wish2" placeholder="2. งบประมาณรายได้ (ภาควิชา/ สำนักงาน)" required>
        <input type="text" class="form-control" name="wish3" placeholder="3. จากแหล่งอื่น (ระบุ) ........................  " required>
      </div>						  
    </div>
  </div>
ความสอดคล้องกับแผนยุทธศาสตร์คณะ
  <div class="d-flex">
  <div class="btn-group" role="group" style="height: 30px; width: 1200px;" aria-label="Basic radio toggle button group">
    <span class="input-group-text">แผนยุทธศาสตร์ที่</span>
    <input type="radio" class="btn-check" name="btnradio1" id="btnradio1_1" value="1" autocomplete="off" >
    <label class="btn btn-outline-primary" for="btnradio1_1">แผนยุทธศาสตร์ที่ 5 งานได้ผลคนเป็นสุข</label>
    <input type="radio" class="btn-check" name="btnradio1" id="btnradio1_2" value="2" autocomplete="off">
    <label class="btn btn-outline-primary" for="btnradio1_2">อื่นๆ</label>
  </div>
      <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <input type="text" class="form-control" name="othor2" placeholder="อื่นๆ โปรดระบุ" required>

        </div>						  
      </div>
    </div>

การถ่ายทอดความรู้ที่ได้จากการประชุมวิชาการ/อบรม/สัมมนา ดูงาน
<div class="d-flex">
  <div class="btn-group" role="group" style="height: 30px; width: 1000px;" aria-label="Basic radio toggle button group">

    <input type="radio" class="btn-check" name="btnradio2" id="btnradio2_1" value="1" autocomplete="off" >
    <label class="btn btn-outline-primary" for="btnradio2_1">ถ่ายทอดความรู้แล้ว</label>
  </div>
  <div class="col-md-6">
    <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">ในการประชุม</span>
          <input type="text" class="form-control" name="meeting" placeholder="" >

        </div>						  
      </div>
  <div class="col-md-4">
    <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">เมื่อวันที่</span>
          <input type="date" class="form-control" name="date1" placeholder="" >
        </div>						  
      </div>
    </div>
<div class="d-flex">
  <div class="btn-group" role="group" style="height: 30px; width: 1000px;" aria-label="Basic radio toggle button group">

    <input type="radio" class="btn-check" name="btnradio2" id="btnradio2_2" value="2" autocomplete="off" >
    <label class="btn btn-outline-primary" for="btnradio2_2">ยังไม่ได้ถ่ายทอด</label>
</div>
<div class="col-md-6">
    <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">โดยจะดำเนินการถ่ายทอดความรู้ในการประชุม</span>
          <input type="text" class="form-control" name="meeting_name1" placeholder="" >
        </div>						  
      </div>
  <div class="col-md-4">
    <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">วันที่</span>
          <input type="date" class="form-control" name="date2" placeholder="" >
        </div>						  
      </div>
    </div>

<div class="d-flex">
  <div class="btn-group" role="group" style="height: 30px; width: 1000px;" aria-label="Basic radio toggle button group">

    <input type="radio" class="btn-check" name="btnradio2" id="btnradio2_3" value="3" autocomplete="off" >
    <label class="btn btn-outline-primary" for="btnradio2_3">อื่นๆ</label>
  </div>
  <div class="col-md-10">
    <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">โปรดระบุ</span>
          <input type="text" class="form-control" name="other1" placeholder="" >
        </div>						  
      </div>
    </div>
    
  <div class="row">
    <div class="col-md-6">
      <div class="input-group input-group-sm mb-3">
            <span class="input-group-text">วันที่รายงาน</span>
            <input type="date" class="form-control" name="date3" placeholder="" required>
          </div>						  
        </div>
      </div>

    <div class="row">
      <div class="col-md-12">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">เนื้อหาการถ่ายทอดองค์ความรู้</span>
          <input type="text" class="form-control" name="objective" placeholder="" required>
        </div>						  
      </div>
    </div>
    
  <div class="row">
    <div class="col-md-12">
      <div class="input-group input-group-sm mb-3">
        <span class="input-group-text">ข้อเสนอแนะของการนำองค์ความรู้ไปใช้ประโยชน์</span>
        <input type="text" class="form-control" name="suggestion" placeholder="" required>
      </div>						  
    </div>
  </div>

<div class="d-flex">
  <div class="btn-group" role="group" style="height: 30px; width: 1200px;" aria-label="Basic radio toggle button group">
    <span class="input-group-text">การเผยแพร่เอกสาร</span>
    <input type="radio" class="btn-check" name="btnradio5" id="btnradio5_1" value="1" autocomplete="off" >
    <label class="btn btn-outline-primary" for="btnradio5_1">ประสงค์เผยแพร่เอกสาร และขอรับรองว่าไม่ละเมิดลิขสิทธิ์ด้านเอกสารหรือรูปภาพ</label>
    <input type="radio" class="btn-check" name="btnradio5" id="btnradio5_2" value="2" autocomplete="off">
    <label class="btn btn-outline-primary" for="btnradio5_2">ไม่ประสงค์เผยแพร่</label>
  </div>
</div>
  
    
  
  <hr class="mt-1">
  <div class="row">
    <div class="col-md-12">
        <input type="hidden" name="title_head" value="แบบสรุปผลการเข้าร่วมประชุมวิชาการ อบรม สัมมนา ดูงาน" />
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
