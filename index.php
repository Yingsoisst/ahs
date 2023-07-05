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

<main class="container-lg">
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
      <td> งานกิจการนิสิต </td>
      <td><a href="index1.php" class="btn btn-success btn-sm"> link </a></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td> งานบุคคล </td>
      <td><a href="index2.php" class="btn btn-success btn-sm"> link </a></td>
    </tr>
	  
  </tbody>
</table>	
	  
<?php //print_r($_SESSION);?>	  
	  
  </div>
</main>
	
</body>
    <?php require("inc/js_inc.php"); ?>	
    <script src="../vendor/bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js"></script>
</html>
