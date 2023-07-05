<?php require_once("inc/func.php"); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>แบบฟอร์มบันทึกขอความอนุเคราะห์ปิดบัญชีธนาคาร</title>
  <?php require("inc/css_inc.php"); ?>
<body>
<?php require("inc/topbar.php"); ?>

<main class="container-lg mt-2">
  <div class="bg-light p-4 rounded">
  <div class="row text-center mb-3">
    <div>
      <img src="image/logo.png" class="img-thumbnail" style="width:100px;"> <br>
      <span class="h3">แบบฟอร์มบันทึกขอความอนุเคราะห์ปิดบัญชีธนาคาร</span>
    </div>
  </div> 

  <form action="closebank_pdf.php" method="post" id="fmadd" name="fmadd">
          
    <div class="row">
    <div class="col-md-6">
    <div class="input-group input-group-sm mb-3">
          <span class="input-group-text"> ลงวันที่ </span>
          <input type="date" class="form-control" name="datenow1"  required>
        </div>						  
      </div>
    </div>
    เรื่อง   ขอความอนุเคราะห์ปิดบัญชีธนาคาร <br>
    เรียน   ผู้จัดการธนาคารกรุงไทย จำกัด (มหาชน) สาขามหาวิทยาลัยนเรศวร<br><br>
    
    <div class="row">
      <div class="col-md-12">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">เนื่องจาก</span>
          <input type="text" class="form-control" name="name" placeholder="ชื่อนักวิจัย" required>
          <input type="text" class="form-control" name="major" placeholder="สังกัดภาควิชา" required>
          <span class="input-group-text">คณะสหเวชศาสตร์ </span>
        </div>						  
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">ได้รับคัดเลือกให้เป็นผู้รับทุนวิจัย</span>
          <input type="text" class="form-control" name="project" placeholder="โครงการวิจัย" required>
          <span class="input-group-text">และบัดนี้ โครงการวิจัยดังกล่าวได้ดำเนินการเสร็จสิ้นเป็นที่เรียบร้อยแล้ว นั้น </span>

        </div>						  
      </div>
    </div>
    ในการนี้ คณะสหเวชศาสตร์  จึงขอความอนุเคราะห์ธนาคารกรุงไทย จำกัดมหาชน สาขามหาวิทยาลัยนเรศวร

    <div class="row">
      <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">ดำเนินการปิดบัญชีออมทรัพย์ </span>
          <input type="text" class="form-control" name="project1" placeholder="ชื่อโครงการวิจัย" required>
        </div>						  
      </div>
      <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">เลขที่บัญชี</span>
          <input type="text" class="form-control" name="account_number" required>    
        </div>						  
      </div>
    </div>

    <div class="row">
      <div class="col-md-10">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">โดยอำนาจการเบิกจ่ายเป็นของหัวหน้าโครงการวิจัย </span>
          <span class="input-group-text">คือ  </span>
          <input type="text" class="form-control" name="name1" placeholder="ชื่อนักวิจัย" required>
        </div>						  
      </div>
    </div>
    เพื่อให้การดำเนินการดังกล่าวเป็นไปตามวัตถุประสงค์ของโครงการวิจัยที่ได้รับอนุมัติ คณะสหเวชศาสตร์ มหาวิทยาลัยนเรศวร จึงขอความอนุเคราะห์ปิดบัญชีธนาคารดังกล่าว
	  
  
  <hr class="mt-1">
  <div class="row">
    <div class="col-md-12">
        <input type="hidden" name="title_head" value="แบบฟอร์มบันทึกขอความอนุเคราะห์ปิดบัญชีธนาคาร" />
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
