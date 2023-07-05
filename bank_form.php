<?php require_once("inc/func.php"); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>แบบฟอร์มบันทึกขอความอนุเคราะห์เปิดบัญชีธนาคาร</title>
  <?php require("inc/css_inc.php"); ?>
<body>
<?php require("inc/topbar.php"); ?>

<main class="container-lg mt-2">
  <div class="bg-light p-4 rounded">
  <div class="row text-center mb-3">
    <div>
      <img src="image/logo.png" class="img-thumbnail" style="width:100px;"> <br>
      <span class="h3">แบบฟอร์มบันทึกขอความอนุเคราะห์เปิดบัญชีธนาคาร</span>
    </div>
  </div> 

  <form action="bank_pdf.php" method="post" id="fmadd" name="fmadd">
          
    <div class="row">
    <div class="col-md-6">
    <div class="input-group input-group-sm mb-3">
          <span class="input-group-text"> ลงวันที่ </span>
          <input type="date" class="form-control" name="datenow1"  required>
        </div>						  
      </div>
    </div>
    เรื่อง   ขอความอนุเคราะห์เปิดบัญชีธนาคาร <br>
    เรียน   ผู้จัดการธนาคารกรุงไทย จำกัด (มหาชน) สาขามหาวิทยาลัยนเรศวร<br><br>
    ตามที่ คณะสหเวชศาสตร์ มหาวิทยาลัยนเรศวร อนุมัติให้ทุนอุดหนุนการวิจัยนักวิจัยรุ่นใหม่ และนักวิจัยทั่วไป สำหรับบุคลากรสายวิชาการ ประจำปีงบประมาณ พ.ศ. 2566 
    
    <div class="row">
      <div class="col-md-12">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">ให้แก่โครงการวิจัยเรื่อง “</span>
          <input type="text" class="form-control" name="about_th" placeholder="ชื่อโครงการวิจัย ภาษาไทย" required>
          <input type="text" class="form-control" name="about_en" placeholder="ชื่อโครงการวิจัย ภาษาอังกฤษ" required>
        </div>						  
      </div>
    </div>

    <div class="row">
      <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">โดยมี</span>
          <input type="text" class="form-control" name="name" placeholder="ชื่อนักวิจัย" required>
        </div>						  
      </div>
      <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">สังกัดภาควิชา</span>
          <input type="text" class="form-control" name="affiliation" required>    
          <span class="input-group-text">คณะสหเวชศาสตร์  เป็นหัวหน้า</span>
        </div>						  
      </div>
    </div>

    <div class="row">
    โครงการวิจัย นั้น และกำหนดเงื่อนไขให้ผู้รับทุนเป็นผู้เปิดบัญชีธนาคารกรุงไทย จำกัด (มหาชน) 
      <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">ชื่อบัญชี</span>
          <input type="text" class="form-control" name="about1" placeholder="ชื่อโครงการวิจัย" required>
        </div>						  
      </div>
      <div class="col-md-7">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">โดยอำนาจการเบิกจ่ายเป็นของหัวหน้าโครงการวิจัย </span>
          <span class="input-group-text">คือ</span>
          <input type="text" class="form-control" name="name1" placeholder="ชื่อนักวิจัย"required>    
        </div>						  
      </div>
    </div>
	  
  
  <hr class="mt-1">
  <div class="row">
    <div class="col-md-12">
        <input type="hidden" name="title_head" value="แบบฟอร์มบันทึกขอความอนุเคราะห์เปิดบัญชีธนาคาร" />
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
