<?php require_once("inc/func.php"); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>อนุมัติให้ผู้ช่วยวิจัยเข้ามาปฏิบัติงาน</title>
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

  <form action="assistant_pdf.php" method="post" id="fmadd" name="fmadd">
          
    <div class="row">
      <div class="col-md-12">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">ส่วนราชการ</span>
          <span class="input-group-text">ภาควิชา</span>
          <input type="text" class="form-control" name="Major" placeholder="" required>
          <span class="input-group-text">คณะสหเวชศาสตร์</span>
          <span class="input-group-text">โทร</span>
          <input type="number"  oninput="maxLengthCheck(this)" min="0" maxlength="9" class="form-control" name="num" placeholder="" required>
        </div>						  
      </div>
    </div>

    <div class="row">
      <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">ที่</span>
          <span class="input-group-text">อว. 0603.13</span>
          <input type="text" class="form-control" name="A1" placeholder="" required>
          <span class="input-group-text">/</span>
          <input type="text" class="form-control" name="A2" placeholder="" required>
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
      <div class="col-md-12">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">เรื่อง</span>
          <span class="input-group-text">ขออนุมัติให้ผู้ช่วยวิจัยเข้ามาปฎิบัติงาน</span>
          <input type="text" class="form-control" name="about" placeholder="" required>
          <span class="input-group-text">เรียน</span>
          <span class="input-group-text">คณบดีคณะสหเวชศาสตร์</span>
        </div>						  
      </div>
    </div>
	  
	  <div class="row">
      <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">ข้าพเจ้า</span>
          <input type="text" class="form-control" name="name" placeholder="ชื่อ-นามสกุล" required>
        </div>						  
      </div>
      <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">ตำแหน่ง</span>
          <input type="text" class="form-control" name="position" required>    
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
          <span class="input-group-text">มีความประสงค์จะขออนุมัติผู้ช่วยวิจัย</span>
          <input type="text" class="form-control" name="wish" placeholder="ชื่อ-นามสกุล ผู้รับจ้าง"required>    
        </div>						  
      </div>
    </div>
  
	  <div class="row">
      <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">อยู่ที่</span>
          <input type="text" class="form-control" name="address" placeholder="" required>
        </div>						  
      </div>
      <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">ซึ่งเป็นผู้ช่วยวิจัยในโครงการวิจัย</span>
          <span class="input-group-text">เรื่อง</span>
          <input type="text" class="form-control" name="project" placeholder=""required>    
        </div>						  
      </div>
    </div>
    
  <div class="col-lg-6">
  เข้ามาปฏิบัติงานในคณะสหเวชศาสตร์
  </div>
	  <div class="row">
      <div class="col-md-12">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">ห้องปฎิบัติการวิจัยกลาง</span>
          <span class="input-group-text">หมายเลขห้อง</span>
          <input type="text" class="form-control" name="central_lab" placeholder="" >
          <span class="input-group-text">เครื่องมือ</span>
          <input type="text" class="form-control" name="tool1" placeholder="" >
        </div>						  
      </div>
    </div>

	  <div class="row">
      <div class="col-md-12">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">ห้องปฎิบัติการวิจัยภาควิชา</span>
          <input type="text" class="form-control" name="department_room" placeholder="" >
          <span class="input-group-text">หมายเลขห้อง</span>
          <input type="text" class="form-control" name="num_room2" placeholder="" >
          <span class="input-group-text">เครื่องมือ</span>
          <input type="text" class="form-control" name="tool2" placeholder="" >
        </div>						  
      </div>
    </div>

	  <div class="row">
      <div class="col-md-12">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">หน่วยวิจัย</span>
          <input type="text" class="form-control" name="research_unit" placeholder="" >
          <span class="input-group-text">หมายเลขห้อง</span>
          <input type="text" class="form-control" name="num_room" placeholder="" >
          <span class="input-group-text">เครื่องมือ</span>
          <input type="text" class="form-control" name="tool3" placeholder="" >
        </div>						  
      </div>
    </div>
    
	  <div class="row">
      <div class="col-md-12">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">อื่นๆ(โปรดระบุ)</span>
          <input type="text" class="form-control" name="other" placeholder="" >
        </div>						  
      </div>
    </div>

	  <div class="row">
      <div class="col-md-4">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">มีกำหนดระยะเวลา</span>
          <input type="text" class="form-control" oninput="maxLengthCheck(this)" min="0" maxlength="2" name="period" placeholder="" required>
          <span class="input-group-text">เดือน</span>
        </div>						  
      </div>
      <div class="col-md-8">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">ตั้งแต่วันที่</span>
          <input type="date" class="form-control" name="start" placeholder="ชื่อ-นามสกุล ผู้รับจ้าง"required>    
          <span class="input-group-text">ถึงวันที่</span>
          <input type="date" class="form-control" name="end" placeholder="ชื่อ-นามสกุล ผู้รับจ้าง"required>    
        </div>						  
      </div>
    </div>

	  <div class="row">
    จึงเรียนมาเพื่อโปรดอนุมัติ
      <div class="col-md-5">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">ลงชื่อ</span>
          <input type="text" class="form-control" name="name1" placeholder="(นาย/นาง/นางสาว)ชื่อ-นามสกุล" required>
        </div>						  
      </div>
      <div class="col-md-5">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">ตำแหน่ง</span>
          <input type="text" class="form-control" name="position1" placeholder=""required>    
        </div>						  
      </div>
    </div>


  <hr class="mt-1">
  <div class="row">
    <div class="col-md-12">
        <input type="hidden" name="title_head" value="อนุมัติให้ผู้ช่วยวิจัยเข้ามาปฏิบัติงาน" />
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
