<?php require_once("inc/func.php"); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>NU5</title>
  <?php require("inc/css_inc.php"); ?>
<body>
<?php require("inc/topbar.php"); ?>

<main class="container-lg mt-2">
  <div class="bg-light p-4 rounded">
  <div class="row text-center mb-3">
    <div>
      <img src="image/nu-logo.png" class="img-thumbnail" style="width:100px;"> <br>
      <span class="h3"> แบบขอปิดรายวิชา/หมู่เรียน </span>
    </div>
  </div> 

  <form action="form_nu5_pdf.php" method="post" id="fmadd" name="fmadd">     
    <div class="row">
      <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">เรียน  คณบดีคณะ</span>
          <input type="text" class="form-control" name="faculty" placeholder="คณะ" required>
        </div>						  
      </div>
      <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">ด้วยภาควิชา/สาขาวิชา</span>
          <input type="text" class="form-control" name="field" placeholder="สาขา"required>    
        </div>						  
      </div>
    </div>
    <div class="row">
 <div class="col-lg-6">
    มีความประสงค์ขอปิดรายวิชา/หมู่เรียน 
  </div>
  <?php 
  $t_department = array(
    '',
    'ปริญญาตรี',
    'ปริญญาโท',
    'ปริญญาเอก'
  );
  ?>
<div class="row">
  <!-- <div class="col-lg-6">
    <div class="input-group input-group-sm mb-3">
      <span class="input-group-text"> สำหรับระดับ </span>
      <select class="form-select mb-0.8" name="depart" id="depart" required onchange="showOptions()">
        <option value="" selected> กรุณาเลือกระดับปริญญา </option>
        <?php for ($i=1; $i < count($t_department); $i++ ){ ?>
        <option value="<?php echo($i);?>"><?php echo($t_department[$i]);?></option>
        <?php }?>
					  
      </select>
    </div> -->
    <!--  
    <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">ปีการศึกษา</span>
          <input type="text" class="form-control" name="year" placeholder="ปีการศึกษา" required>
        </div>	
  </div>
  <div class="col-lg-6" id="optionRow" style="display:none;">
  <option value="">ตามที่กำหนดไว้ในคู่มือลงทะเบียนเรียนประจำภาคเรียน</option>
    <div class="input-group input-group-sm mb-3">
      <span class="input-group-text"> ภาคเรียน </span>
      <select class="form-select mb-0.8" name="option" id="option">
        <option value=""> กรุณาเลือกภาคเรียน </option>
      </select>
    </div>
    
  </div> -->
  

<!-- <script>
function showOptions() {
  var depart = document.getElementById("depart").value;
  var optionRow = document.getElementById("optionRow");
  var optionSelect = document.getElementById("option");
  if (depart == 1) { // ปริญญาตรี
    optionRow.style.display = "block";
    optionSelect.innerHTML = `
      <option value="">กรุณาเลือกภาคเรียน</option>
      <option value="ตอนต้น">ตอนต้น</option>
      <option value="ตอนปลาย">ตอนปลาย</option>
      <option value="ฤดูร้อน">ฤดูร้อน</option>
    `;
  } else if (depart == 2) { // ปริญญาโท
    optionRow.style.display = "block";
    optionSelect.innerHTML = `
      <option value="">กรุณาเลือกภาคเรียน</option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
    `;
  } else { // ปริญญาเอก
    optionRow.style.display = "none";
    optionSelect.innerHTML = "";
  }
}
</script> -->
</div>
      <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">ปีการศึกษา</span>
          <input type="number" class="form-control" name="year" oninput="maxLengthCheck(this)" min="0" maxlength="4"   placeholder="ปีการศึกษา" required/>    
        </div>						  
      </div>
    </div>
    <div class="row">
<div class="row">
 <div class="col-lg-6">
    โดยมีรายละเอียดดังนี้  
</div>
  <div class="row">
      <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">รหัสวิชา</span>
          <input type="number" class="form-control" name="id" placeholder="รหัสวิชา" required>
        </div>						  
      </div>
      <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">จำนวนหน่วยกิจ</span>
          <input type="number" class="form-control" oninput="maxLengthCheck(this)" min="0" maxlength="1"  name="Credit1" placeholder="จำนวนหน่วยกิจ" required>    
          <input type="number" class="form-control" oninput="maxLengthCheck(this)" min="0" maxlength="1" name="Credit2" placeholder=""required>    
          <input type="number" class="form-control" oninput="maxLengthCheck(this)" min="0" maxlength="1" name="Credit3" placeholder=""required>    
          <input type="number" class="form-control" oninput="maxLengthCheck(this)" min="0" maxlength="1" name="Credit4" placeholder=""required>    
        </div>						  
      </div>
    </div>
	  
    <div class="row">
        <div class="col-md-6">
          <div class="input-group input-group-sm mb-3">
            <span class="input-group-text">ชื่อวิชาภาษาไทย</span>
            <input type="text" class="form-control" name="thai" placeholder="ชื่อวิชาภาษาไทย" required>
          </div>						  
        </div>
        <div class="col-md-6">
          <div class="input-group input-group-sm mb-3">
            <span class="input-group-text">ชื่อวิชาภาษาอังกฤษ</span>
            <input type="text" class="form-control" name="english" placeholder="ชื่อวิชาภาษาอังกฤษ"required>      
          </div>						  
        </div>
      </div>
    </div>
    <div class="row">
        <div class="col-md-3">
          <div class="input-group input-group-sm mb-3">
            <span class="input-group-text">หมู่เรียน</span>
            <input type="number" class="form-control" name="section" placeholder="หมู่เรียนที่" required>
          </div>						  
        </div>
        <div class="col-md-3">
          <div class="input-group input-group-sm mb-3">
            <span class="input-group-text">จำนวนนิสิตในหมู่เรียน</span>
            <input type="number" class="form-control" name="many" placeholder="จำนวนนิสิตในหมู่เรียน"required>      
          </div>						  
        </div>
        <div class="col-md-5">
          <div class="input-group input-group-sm mb-3">
            <span class="input-group-text">รหัสผู้สอน</span>
            <input type="number" class="form-control" name="idt" placeholder="รหัสผู้สอน"required>      
          </div>						  
        </div>
      </div>

 <div class="col-lg-6">
    เหตุผลที่ขอปิดรายวิชา เพราะ  
</div>
  <div class="row">
      <div class="col-md-12">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">เหตุผล เพราะ</span>
          <input type="text" class="form-control" name="becuase" placeholder="เหตุผลที่ขอปิดรายวิชาะ" required>
        </div>						  
      </div>
    </div>
    <div class="row">
        <div class="col-md-12">
          <div class="input-group input-group-sm mb-3">
            <span class="input-group-text">เบอร์โทรศัพท์ที่ติดต่อผู้สอน</span>
            <input type="tel" class="form-control" name="num" oninput="maxLengthCheck(this)" min="0" maxlength="10"  pattern="[0-9]{10}" placeholder="xxx-xxx-xxxx" required>
          </div>						  
        </div>
      </div>
  <hr class="mt-1">
  <div class="row">
    <div class="col-md-12">
        <input type="hidden" name="title_head" value="NU5" />
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
