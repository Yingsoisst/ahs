<?php //require_once("chksession_eform.php"); ?>
<?php require_once("inc/func.php"); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>AHS</title>
  <?php require("inc/css_inc.php"); ?>
	
</head>
<body>
<?php require("inc/topbar.php"); ?>

<main class="container">
  <div class="bg-light p-5 rounded">
    <h3> เลือกหน่วยงาน </h3>
	  
<table class="table table-striped table-hover caption-top table-success">	
  <caption> เลือกฟอร์มที่ต้องการ </caption>	
  <thead class="text-center">
    <tr>
      <th scope="col" width="10">ลำดับ</th>
      <th scope="col">ชื่อฟอร์ม</th>
      <th scope="col" width="120">&nbsp;</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>แบบขอเปิดรายวิชา/หมู่เรียน(เพิ่ม)</td>
      <td><a href="formNu4.php" target="_blank"><button type="button" class="btn btn-success btn-sm"> กรอกฟอร์ม </button></a></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>แบบขอเปลี่ยนแปลงการสอนรายวิชา</td>
      <td><a href="formNu6.php" target="_blank"><button type="button" class="btn btn-success btn-sm"> กรอกฟอร์ม </button></a></td>
    </tr>
      <th scope="row">3</th>
      <td>คำร้องขอคืนสภาพการเป็นนิสิต</td>
      <td><a href="formNu7.php" target="_blank"><button type="button" class="btn btn-success btn-sm"> กรอกฟอร์ม </button></a></td>
    </tr>
      <th scope="row">4</th>
      <td>คำร้องขอเพิ่มรายวิชาหลังกำหนด</td>
      <td><a href="formNu8.php" target="_blank"><button type="button" class="btn btn-success btn-sm"> กรอกฟอร์ม </button></a></td>
    </tr>
      <th scope="row">5</th>
      <td>คำร้องขอยื่นาำเร็จการศึกษาล่าช้ากว่ากำหนด</td>
      <td><a href="formNu9.php" target="_blank"><button type="button" class="btn btn-success btn-sm"> กรอกฟอร์ม </button></a></td>
    </tr>
      <th scope="row">6</th>
      <td>แบบขอถอนรายวิชาลงทะเบียน</td>
      <td><a href="formNu11.php" target="_blank"><button type="button" class="btn btn-success btn-sm"> กรอกฟอร์ม </button></a></td>
    </tr>
      <th scope="row">7</th>
      <td>คำร้องขอย้ายคณะ/ขอย้ายสาขาวิชาเรียน</td>
      <td><a href="formNu13.php" target="_blank"><button type="button" class="btn btn-success btn-sm"> กรอกฟอร์ม </button></a></td>
    </tr>
      <th scope="row">8</th>
      <td>ใบมอบฉันฑะ</td>
      <td><a href="formNu24.php" target="_blank"><button type="button" class="btn btn-success btn-sm"> กรอกฟอร์ม </button></a></td>
    </tr>

	  
  </tbody>
</table>	
	  
<?php //print_r($_SESSION);?>	  
	  
  </div>
</main>
	
</body>
    <script src="../vendor/bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js"></script>
</html>
