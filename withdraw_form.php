<?php require_once("inc/func.php"); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>แบบฟอร์มบันทึกขออนุมัติดำเนินโครงการวิจัยและขออนุมัติเบิกเงินงวดที่ 1</title>
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

  <form action="withdraw_pdf.php" method="post" id="fmadd" name="fmadd">
          
    <div class="row">
      <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">ภาควิชา</span>
          <input type="text" class="form-control" name="major" placeholder="" required>
        </div>						  
      </div>
      <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">โทร</span>
          <input type="number" class="form-control"  oninput="maxLengthCheck(this)" min="0" maxlength="10" name="num" required>    
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
          <span class="input-group-text">วันที่</span>
          <input type="date" class="form-control" name="datenow1"  required> 
        </div>						  
      </div>
    </div>

    <div class="row">
      เรื่อง ขออนุมัติดำเนินโครงการวิจัยที่ได้รับทุนอุดหนุนการวิจัยนักวิจัยรุ่นใหม่ และนักวิจัยทั่วไป สำหรับบุคลากรสายวิชาการ
      <div class="col-md-4">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">ประจำปีงบประมาณ พ.ศ. </span>
          <input type="text" class="form-control" name="yearly" placeholder="" required>
        </div>						  
      </div>
    </div>
	  
    <div class="row">
    ตามที่  คณะสหเวชศาสตร์อนุมัติให้ทุนอุดหนุนการวิจัยนักวิจัยรุ่นใหม่ และนักวิจัยทั่วไป สำหรับบุคลากรสายวิชาการ ประจำปีงบประมาณ พ.ศ. 2566 ให้แก่โครงการวิจัย
      <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">ชื่อเรื่อง</span>
          <input type="text" class="form-control" name="about" placeholder="" required>
          <span class="input-group-text">ในวงเงิน 100,000 บาท </span>
        </div>						  
      </div>
      <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">โดยมี</span>
          <input type="text" class="form-control" name="name" placeholder="ชื่อ-สกุล นักวิจัย"required>    
        </div>						  
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">สังกัดภาควิชา</span>
          <input type="text" class="form-control" name="position" placeholder=""required>    
          <span class="input-group-text">คณะสหเวชศาสตร์  เป็นหัวหน้าโครงการวิจัย</span>
        </div>						  
      </div>
    </div>
  
    <!-- หน้า 2 -->

    <div class="row text-center mb-3">
    <div><br>
      <span class="h3">ใบสำคัญรับเงิน</span>
    </div>
  </div> 
  
  <div class="row">
    <div class="col-md-6">
      <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">วันที่</span>
          <input type="date" class="form-control" name="datenow2"  required> 
        </div>						  
      </div>
      <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">ข้าพเจ้า</span>
          <input type="text" class="form-control" name="name1" placeholder="" required>
        </div>						  
      </div>
    </div>
    
    <div class="row">
    <div class="col-md-12">
      <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">อยู่ที่</span>
          <span class="input-group-text">ภาควิชา</span>
          <input type="text" class="form-control" name="address"  required> 
          <span class="input-group-text">คณะสหเวชศาสตร์ มหาวิทยาลัยนเรศวร</span>
        </div>						  
      </div>
    </div>
ได้รับเงินจากคณะสหเวชศาสตร์ มหาวิทยาลัยนเรศวร ดังรายการต่อไปนี้<br><br>
1. เบิกเงินทุนอุดหนุนการวิจัยนักวิจัยรุ่นใหม่ และนักวิจัยทั่วไป สำหรับบุคลากรสายวิชาการ 
    <div class="row">
    <div class="col-md-12">
      <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">ประจำปีงบประมาณ พ.ศ.</span>
          <input type="text" class="form-control"  oninput="maxLengthCheck(this)" min="0" maxlength="4" name="year"  required> 
          <span class="input-group-text">จากเงินงบประมาณรายได้ คณะสหเวชศาสตร์</span>
          <span class="input-group-text">งวดที่</span>
          <input type="text" class="form-control" oninput="maxLengthCheck(this)" min="0" maxlength="3" name="the_time"  required> 
        </div>						  
      </div>
    </div>

    <div class="row">
    <div class="col-md-12">
      <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">จำนวน</span>
          <input type="number" class="form-control" oninput="maxLengthCheck(this)" min="0" maxlength="10" name="many"  required> 
          <span class="input-group-text">หน่วยละ</span>
          <input type="number" class="form-control" oninput="maxLengthCheck(this)" min="0" maxlength="10" name="unit"  required> 
          <span class="input-group-text">จำนวนเงิน</span>
          <input type="number" class="form-control" oninput="maxLengthCheck(this)" min="0" maxlength="10" name="money"  required> 
        </div>						  
      </div>
    </div>

  <hr class="mt-1">
  <div class="row">
    <div class="col-md-12">
        <input type="hidden" name="title_head" value="แบบฟอร์มบันทึกขออนุมัติดำเนินโครงการวิจัยและขออนุมัติเบิกเงินงวดที่ 1" />
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
