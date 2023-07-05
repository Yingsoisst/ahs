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
	  
<table class="table table-striped table-hover caption-top table-success" id="dataTable">	
  <caption> งานบุคคล </caption>	
  <thead class="text-center">
    <tr>
      <th scope="col" width="10">ลำดับ</th>
      <th>ชื่อฟอร์ม</th>
      <th width="120">&nbsp;</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    /*
    $objOpen = opendir("1");
    while (($file = readdir($objOpen)) !== false)
    {
      echo "filename: " . $file . "<br />";
    }
*/
    $t_show = array(
      '',
      'ขอส่งแบบคำขอรับการพิจารณากำหนดตำแหน่งทางวิชาการ (แบบ กพอ.๐๓) และผลงานทางวิชาการ',
      'Academic Work Contribution Form',
      'ขอเสนอรายชื่อผู้ทรงคุณวุฒิเพื่อประเมินการสอนและเอกสารประกอบการสอน/เอกสารคำสอน',
      'แบบแสดงหลักฐานการมีส่วนร่วมในผลงานทางวิชาการทั่วไป',
      'แบบคำขอรับการพิจารณากำหนดตำแหน่งทางวิชาการทั่วไป',
      'แบบสรุปผลการเข้าร่วมประชุมวิชาการ อบรม สัมมนา ดูงาน',
      'ชี้แจงการใช้ลายเซ็นอิเล็กทรอนิกส์',
      'ขอความอนุเคราะห์ประเมินค่างานเพื่อขอกำหนดตำแหน่งเป็นระดับชำนาญการ',
      'ขอประเมินผลการสอนและเอกสารประกอบการสอน สำหรับผู้ช่วยศาสตราจารย์',
      'ขอประเมินผลการสอนและเอกสารประกอบการสอน สำหรับรองศาสตราจารย์',
      'ขออนุมัติบันทึกการสอนลงในแผ่นบันทึกข้อมูล'
    );

    $t_link = array(
      '',
      'academic_form.php',
      'professor_form.php',
      'nominate_form.php',
      'participation_form.php',
      'consideration_form.php',
      'result_form.php',
      'signature_form.php',
      'appraisal_form.php',
      'evaluation1_form.php',
      'evaluation2_form.php',
      'teaching_form.php'
    );

    
    
    for($i = 1; $i < count($t_show); $i++) {
      echo '<tr>';
      echo "<th scope='row'>{$i}</th>";
      echo "<td>{$t_show[$i]}</td>";
      echo "<td><a href='{$t_link[$i]}' class='btn btn-success btn-sm'> กรอกฟอร์ม </a></td>";
      echo '</tr>';
    }
    ?>
	  
  </tbody>
</table>	
	  	  
  </div>
</main>
	
</body>
<?php require("inc/js_inc.php"); ?>	
</html>
