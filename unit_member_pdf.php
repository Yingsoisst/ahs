<?php
if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "fmadd")) {
require_once("inc/func.php");
$A2 = stripslashes($_POST["A2"]);
$date1 = Day_show($_POST["datenow1"]);
$about = stripslashes($_POST["about"]);
$name = stripslashes($_POST["name"]);
$head = stripslashes($_POST["head"]);
$Approval = stripslashes($_POST["Approval"]);
$date2 = Day_show($_POST["datenow2"]);
$to = stripslashes($_POST["to"]);
$wish = stripslashes($_POST["wish"]);
$position = stripslashes($_POST["position"]);
$position1 = stripslashes($_POST["position1"]);
$name1 = $_POST["name1"];
$head1 = $_POST["head1"];


$line_space=6;

require('vendor/fpdf184/fpdf.php');
$pdf = new FPDF('P','mm','A4');
$pdf->SetMargins(9,6);
$pdf->SetAutoPageBreak(10);
$pdf->AddPage();
$pdf->AddFont('THSarabun','B','THSarabun Bold.php');//ธรรมดา
$pdf->AddFont('THSarabun','','THSarabun.php');//ธรรมดา

//ด้านบน
$pdf->Image('image/logo.png',10,4,23,23);
$pdf->SetFont('THSarabun','',14);

$pdf->setfont('THSarabun','B','24');
$pdf->Cell(78);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'บันทึกข้อความ'),0,1);

$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",''),0,1);


$pdf->setfont('THSarabun','B','16');
$pdf->Cell(6);
$pdf->Cell(10,$line_space+2,iconv("UTF-8", "TIS-620",'ส่วนราชการ'),0,0);

$pdf->setfont('THSarabun','','16');
$pdf->Cell(10);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'คณะสหเวชศาสตร์  สำนักงานเลขานุการ  งานวิจัยและห้องปฏิบัติการ   โทร.6224'),0,1);

$pdf->setfont('THSarabun','B','16');
$pdf->Cell(6);
$pdf->Cell(1,$line_space+2,iconv("UTF-8", "TIS-620",'ที่ '),0,0);

$pdf->setfont('THSarabun','','16');
$pdf->Cell(5);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'อว. 0603.13.01(5)/......................................'),0,0);

$pdf->setfont('THSarabun','B','16');
$pdf->Cell(15);
$pdf->Cell(1,$line_space+2,iconv("UTF-8", "TIS-620",'วันที่'),0,0);

$pdf->setfont('THSarabun','','16');
$pdf->Cell(3);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'......................................................................................................'),0,1);

$pdf->setfont('THSarabun','B','16');
$pdf->Cell(6);
$pdf->Cell(7,$line_space+2,iconv("UTF-8", "TIS-620",'เรื่อง'),0,0);

$pdf->setfont('THSarabun','','16');
$pdf->Cell(4);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'การขออนุมัติเพิ่มสมาชิกหน่วยวิจัย..........................................................................................................................'),0,1);
$pdf->Cell(6);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'เรียน  คณบดีคณะสหเวชศาสตร์ (ผ่านรองคณบดีฝ่ายวิจัยและบัณฑิตศึกษา)'),0,1);


$pdf->Cell(25);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'ข้าพเจ้า.......................................................หัวหน้าหน่วยวิจัย.........................................................................'),0,1);

$pdf->Cell(6);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'ได้รับอนุมัติให้จัดตั้งหน่วยวิจัย...............................................................................เมื่อวันที่ ................................................'),0,1);

$pdf->Cell(6);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'ซึ่งได้รับอนุมัติให้มีการต่ออายุหน่วยวิจัยในทุกๆ 5 ปี โดยมีผลการดำเนินงานของหน่วยวิจัยฯ เป็นไปตามประกาศคณะ'),0,1);

$pdf->Cell(6);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'สหเวชศาสตร์ เรื่อง การจัดตั้งและการสนับสนุนหน่วยวิจัย (Research unit) ตามความทราบแล้วนั้น'),0,1);

$pdf->Cell(20);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'ในการนี้เพื่อใหก้ารดำเนินงานของหน่วยวิจัย......................................................................................................'),0,1);

$pdf->Cell(6);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'เป็นไปอย่างมีประสิทธิภาพ และเพิ่มศักยภาพในการทำงานวิจัย ทางหน่วยวิจัยฯ จึงมีความประสงค์'),0,1);

$pdf->Cell(6);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'ขอเพิ่ม....................................................... ตำแหน่ง...............................................สังกัด.................................................. '),0,1);

$pdf->Cell(6);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'เป็นสมาชิกของหน่วยวิจัยฯ พร้อมแนบประวัติส่วนตัว (รายละเอียดดังเอกสารแนบ) เพื่อประกอบการพิจารณา'),0,1);

$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",''),0,1);

$pdf->Cell(20);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'จึงเรียนมาเพื่อโปรดพิจารณา'),0,1);

$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(93);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'(...............................................................)'),0,1);

$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(80);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'หัวหน้าหน่วยวิจัย...............................................................................'),0,1);




$pdf->SetFont('THSarabun','',16);
$pdf->SetY(63);
$pdf->MultiCell(195,$line_space,iconv("UTF-8", "TIS-620",''),0,'L');

$pdf->setxy(60,38);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$A2),0,0);

$pdf->setxy(110,38);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$date1),0,0,'c');

$pdf->setxy(80,46);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$about),0,0);

$pdf->setxy(50,62);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$name),0,0,'c');

$pdf->setxy(125,62);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$head),0,0);

$pdf->setxy(65,70);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$Approval),0,0,'c');

$pdf->setxy(148,70);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$date2),0,0,'c');

$pdf->setxy(98,94);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$to),0,0);

$pdf->setxy(31,110);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$wish),0,0);

$pdf->setxy(90,110);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$position),0,0,'c');

$pdf->setxy(145,110);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$position1),0,0,'c');

$pdf->setxy(113,174);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$name1),0,0,'c');

$pdf->setxy(120,190);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$head1),0,0,'c');

$pdf->Output();
}else{ echo('ไม่มีข้อมูล');}

?>
