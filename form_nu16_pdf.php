<?php
if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "fmadd")) {
require_once("inc/func.php");
$date = stripslashes($_POST["datenow"]);
list($day, $month, $year1) = Day_show_list($date);

$name = stripslashes($_POST["name"]);
$ids = stripslashes($_POST["ids"]);
$year = stripslashes($_POST["year"]);
$faculty = stripslashes($_POST["faculty"]);
$Major = $_POST["Major"];
$address = $_POST["address"];
$name_old = $_POST["name_old"];
$name_new = $_POST["name_new"];
$name_newE = $_POST["name_newE"];


$line_space=6;

require('vendor/fpdf184/fpdf.php');
$pdf = new FPDF('P','mm','A4');
$pdf->SetMargins(9,6);
$pdf->SetAutoPageBreak(10);
$pdf->AddPage();
$pdf->AddFont('THSarabun','B','THSarabun Bold.php');//ธรรมดา
$pdf->AddFont('THSarabun','','THSarabun.php');//ธรรมดา

//ด้านบน
$pdf->Image('image/nu-logo.png',10,2,25,25);
$pdf->SetFont('THSarabun','',14);

$pdf->Cell(178);
$pdf->SetFont('THSarabun','B',24);
$pdf->Cell(5,$line_space-4,iconv("UTF-8", "TIS-620",'NU16'),0,1,'c');


$pdf->SetFont('THSarabun','B',20);
$pdf->Cell(78);
$pdf->Cell(55,$line_space+1,iconv("UTF-8", "TIS-620",'มหาวิทยาลัยนเรศวร'),0,1,'c');

$pdf->Cell(55,$line_space-3,iconv("UTF-8", "TIS-620",''),0,1,'c');
$pdf->SetFont('THSarabun','B',18);
$pdf->Cell(71);
$pdf->Cell(55,$line_space+1,iconv("UTF-8", "TIS-620",'ขอเปลี่ยนชื่อ  ชื่อสกุล  และยศ'),0,0);

$pdf->SetFont('THSarabun','',12);
$pdf->Cell(16);
$pdf->Cell(55,$line_space+1,iconv("UTF-8", "TIS-620",'วันที่.......... เดือน...........................พ.ศ.................'),0,1,'c');

$pdf->Cell(55,$line_space+1,iconv("UTF-8", "TIS-620",''),0,1,'c');$pdf->Cell(55,$line_space+1,iconv("UTF-8", "TIS-620",''),0,1,'c');

$pdf->SetFont('THSarabun','',16);
$pdf->Cell(4);
$pdf->Cell(50,$line_space+1,iconv("UTF-8", "TIS-620",'เรื่อง     (  ) ขอเปลี่ยนชื่อ     (  ) ขอเปลี่ยนชื่อสกุล     (  ) ขอเปลี่ยนยศ     (  ) ขอเปลี่ยนคำนำหน้าชื่อ(จากพระ เป็น นาย)'),0,1);

$pdf->Cell(4);
$pdf->Cell(50,$line_space+1,iconv("UTF-8", "TIS-620",'เรียน    รองอธิการบดีฝ่ายวิชาการ'),0,1);
$pdf->Cell(50,$line_space+1,iconv("UTF-8", "TIS-620",''),0,1);

$pdf->Cell(30);
$pdf->Cell(50,$line_space+1,iconv("UTF-8", "TIS-620",'ข้าพเจ้า นาย/นาง/นางสาว..........................................................................................รหัส........................................'),0,1);

$pdf->Cell(4);
$pdf->Cell(1,$line_space+1,iconv("UTF-8", "TIS-620",'นิสิตปริญญาตรี'),0,0);
$pdf->Cell(26);
$pdf->Cell(50,$line_space+1,iconv("UTF-8", "TIS-620",'(   ) ภาคปกติ     (   ) ภาคพิเศษในจังหวัดพิษณุโลก      (   ) วิทยาเขตจังหวัดพะเยา     (   ) ศูนย์ กทม.'),0,1);

$pdf->Cell(4);
$pdf->Cell(1,$line_space+1,iconv("UTF-8", "TIS-620",'นิสิตปริญญาโท'),0,0);
$pdf->Cell(26);
$pdf->Cell(50,$line_space+1,iconv("UTF-8", "TIS-620",'(   ) ภาคปกติ     (   ) ภาคพิเศษหน่วยสอนจังหวัด (โปรดระบุ)..............................................................................'),0,1);

$pdf->Cell(31);
$pdf->Cell(50,$line_space+1,iconv("UTF-8", "TIS-620",'(   ) ในโครงการพัฒนาครู  อาจารย์  ประจำการ           (   ) M.B.A'),0,1);

$pdf->Cell(4);
$pdf->Cell(1,$line_space+1,iconv("UTF-8", "TIS-620",'นิสิตปริญญาเอก'),0,0);
$pdf->Cell(26);
$pdf->Cell(50,$line_space+1,iconv("UTF-8", "TIS-620",'(   ) ภาคปกติ     (   ) ภาคพิเศษหน่วยสอนจังหวัด (โปรดระบุ)...............................................................................'),0,1);

$pdf->Cell(1,$line_space+1,iconv("UTF-8", "TIS-620",' '),0,1);
$pdf->Cell(4);
$pdf->Cell(1,$line_space+1,iconv("UTF-8", "TIS-620",'พร้อมเอกสารแนบ'),0,0);
$pdf->Cell(40);
$pdf->Cell(50,$line_space+1,iconv("UTF-8", "TIS-620",'สำเนาหลักฐานการขอเปลี่ยนชื่อ  นามสกุล  หรือ ยศ    จำนวน  1  ฉบับ'),0,1);

$pdf->Cell(45);
$pdf->Cell(50,$line_space+1,iconv("UTF-8", "TIS-620",'สำเนาใบลาสิขาบท    จำนวน  1  ฉบับ'),0,1);

$pdf->Cell(4);
$pdf->Cell(50,$line_space+1,iconv("UTF-8", "TIS-620",'ชั้นปี...............คณะ.................................................................................................สาขาวิชา..................................................................'),0,1);

$pdf->Cell(4);
$pdf->Cell(50,$line_space+1,iconv("UTF-8", "TIS-620",'ที่อยู่ที่สามารถติดต่อได้สะดวก................................................................................................................................................................'),0,1);

$pdf->Cell(4);
$pdf->Cell(50,$line_space+1,iconv("UTF-8", "TIS-620",'................................................................................................................................................................................................................'),0,1);

$pdf->Cell(4);
$pdf->Cell(50,$line_space+1,iconv("UTF-8", "TIS-620",'ขอเปลี่ยนจากเดิม.....................................................................................................เป็น........................................................................'),0,1);

$pdf->Cell(4);
$pdf->Cell(50,$line_space+1,iconv("UTF-8", "TIS-620",'ชื่อ,สกุล,ยศ ที่ขอเปลี่ยนใหม่เป็นภาษาอังกฤษตัวพิมพ์ใหญ่....................................................................................................................'),0,1);

$pdf->Cell(50,$line_space+1,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(31);
$pdf->Cell(50,$line_space+1,iconv("UTF-8", "TIS-620",'จึงเรียนมาเพื่อโปรดพิจารณาอนุมัติ'),0,1);

$pdf->Cell(50,$line_space+1,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(135);
$pdf->Cell(50,$line_space+1,iconv("UTF-8", "TIS-620",'ขอแสดงความนับถือ'),0,1);

$pdf->Cell(50,$line_space+1,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(50,$line_space+1,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(110);
$pdf->Cell(50,$line_space+1,iconv("UTF-8", "TIS-620",'นิสิตลงนาม................................................................'),0,1);
$pdf->Cell(128);
$pdf->Cell(50,$line_space+1,iconv("UTF-8", "TIS-620",'.........../.........................../..................'),0,1);

$pdf->SetLineWidth(1);
$pdf->Rect(14,210,190,0);

$pdf->Cell(50,$line_space+1,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->SetFont('THSarabun','BU',16);
$pdf->Cell(4);
$pdf->Cell(35,$line_space+1,iconv("UTF-8", "TIS-620",'อาจารย์ที่ปรึกษาเห็นชอบ'),0,0);

$pdf->SetFont('THSarabun','',16);
$pdf->Cell(5);
$pdf->Cell(50,$line_space+2,iconv("UTF-8", "TIS-620",'.....................................................................................................................................................................'),0,1);

$pdf->Cell(4);
$pdf->Cell(35,$line_space+1,iconv("UTF-8", "TIS-620",'.................................................................................................................................................................................................................'),0,1);

$pdf->SetFont('THSarabun','BU',16);
$pdf->Cell(4);
$pdf->Cell(13,$line_space+1,iconv("UTF-8", "TIS-620",'**หมายเหตุ'),0,0);

$pdf->SetFont('THSarabun','',16);
$pdf->Cell(7);
$pdf->Cell(50,$line_space+2,iconv("UTF-8", "TIS-620",'หากนิสิตยื่นสำเร็จการศึกษาแล้ว หรือ สำเร็จการศึกษาไปเรียบร้อยแล้ว'),0,0);

$pdf->SetFont('THSarabun','BU',16);
$pdf->Cell(55);
$pdf->Cell(50,$line_space+2,iconv("UTF-8", "TIS-620",'(ไม่สามารถขอเปลี่ยนแปลงใดๆ ได้อีก)'),0,1);

$pdf->SetFont('THSarabun','',14);
$pdf->SetXY(158,17);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$day),0,0);

$pdf->SetXY(172,17);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$month),0,0);

$pdf->SetXY(194,17);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$year1),0,0);

$pdf->SetFont('THSarabun','',16);
$pdf->SetXY(83,59);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$name),0,0);

$pdf->SetXY(170,59);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$ids),0,0);

$pdf->SetXY(23,115);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$year),0,0);

$pdf->SetXY(50,115);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$faculty),0,0);

$pdf->SetXY(150,115);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$Major),0,0);

$pdf->SetXY(60,122);
$pdf->MultiCell(142,$line_space+1,iconv("UTF-8", "TIS-620",$address),0,0);

$pdf->SetXY(50,136);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$name_old),0,0);

$pdf->SetXY(145,136);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$name_new),0,0);

$pdf->SetXY(102,143);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$name_newE),0,0);

$pdf->SetFont('THSarabun','',14);
$pdf->SetXY(141,199);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$day),0,0);

$pdf->SetXY(151,199);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$month),0,0);

$pdf->SetXY(178,199);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$year1),0,0);


$pdf->Output();
}else{ echo('ไม่มีข้อมูล');}

?>
