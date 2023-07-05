<?php
if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "fmadd")) {
require_once("inc/func.php");
$service = stripslashes($_POST["service"]);	
$num = stripslashes($_POST["num"]);
$A1 = stripslashes($_POST["A1"]);
$A2 = stripslashes($_POST["A2"]);
$date1 = Day_show($_POST["datenow1"]);

$about = stripslashes($_POST["about"]);
$to = stripslashes($_POST["to"]);
$name = stripslashes($_POST["name"]);
$position = stripslashes($_POST["position"]);
$department = stripslashes($_POST["department"]);
$certificate = stripslashes($_POST["certificate"]);
$certificate1 = $_POST["certificate1"];
$many = $_POST["many"];
$one = $_POST["one"];
$two = Day_show($_POST["two"]);
$three = $_POST["three"];
$salary = $_POST["salary"];
$extra_salary = $_POST["extra_salary"];
// $Total = $_POST["Total"];
$name3 = stripslashes($_POST["name3"]);
$name4 = stripslashes($_POST["name4"]);

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

$pdf->setfont('THSarabun','B','30');
$pdf->Cell(83);
$pdf->Cell(55,$line_space+3,iconv("UTF-8", "TIS-620",'บันทึกข้อความ'),0,1);

$pdf->Cell(55,$line_space+3,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(55,$line_space+3,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(55,$line_space+3,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(55,$line_space+3,iconv("UTF-8", "TIS-620",''),0,1);

$pdf->setfont('THSarabun','B','18');
$pdf->Cell(6);
$pdf->Cell(10,$line_space+3,iconv("UTF-8", "TIS-620",'ส่วนราชการ'),0,0);

$pdf->setfont('THSarabun','','18');
$pdf->Cell(10);
$pdf->Cell(55,$line_space+3,iconv("UTF-8", "TIS-620",'........................................................................................................โทร..............................................'),0,1);

$pdf->setfont('THSarabun','B','18');
$pdf->Cell(6);
$pdf->Cell(1,$line_space+3,iconv("UTF-8", "TIS-620",'ที่ อว'),0,0);

$pdf->setfont('THSarabun','','18');
$pdf->Cell(1);
$pdf->Cell(55,$line_space+3,iconv("UTF-8", "TIS-620",'........................................../......................................'),0,0);

$pdf->setfont('THSarabun','B','18');
$pdf->Cell(28);
$pdf->Cell(1,$line_space+3,iconv("UTF-8", "TIS-620",'วันที่'),0,0);

$pdf->setfont('THSarabun','','18');
$pdf->Cell(3);
$pdf->Cell(55,$line_space+3,iconv("UTF-8", "TIS-620",'.........................................................................................'),0,1);

$pdf->setfont('THSarabun','B','18');
$pdf->Cell(6);
$pdf->Cell(7,$line_space+3,iconv("UTF-8", "TIS-620",'เรื่อง'),0,0);

$pdf->setfont('THSarabun','','18');
$pdf->Cell(1);
$pdf->Cell(55,$line_space+3,iconv("UTF-8", "TIS-620",'........................................................................................................................................................................'),0,1);

$pdf->SetXY(24,68);
$pdf->Cell(55,$line_space+3,iconv("UTF-8", "TIS-620",''),0,1);

$pdf->setfont('THSarabun','','18');
$pdf->Cell(6);
$pdf->Cell(7,$line_space+3,iconv("UTF-8", "TIS-620",'เรียน   คณบดีคณะสหเวชศาสตร์ (ผ่านหัวหน้าภาควิชา...............................................................)'),0,1);

$pdf->Cell(25);
$pdf->Cell(7,$line_space+3,iconv("UTF-8", "TIS-620",'ด้วย ดิฉัน/กระผม............................................................................................ พนักงานมหาวิทยาลัย'),0,1);

$pdf->Cell(6);
$pdf->Cell(7,$line_space+3,iconv("UTF-8", "TIS-620",'ตำแหน่ง......................................................... สังกัดภาควิชา................................................. คณะสหเวชศาสตร์'),0,1);

$pdf->Cell(6);
$pdf->Cell(7,$line_space+3,iconv("UTF-8", "TIS-620",'ความประสงค์จะขอหนังสือรับรอง เพื่อใช้ในการ....................................................................... นั้น'),0,1);

$pdf->Cell(25);
$pdf->Cell(7,$line_space+3,iconv("UTF-8", "TIS-620",'ในการนี้   ดิฉัน/กระผม จึงขอความอนุเคราะห์หนังสือรับรอง...........................................................'),0,1);


$pdf->Setfont('','',18);
$pdf->Cell(6);
$pdf->Cell(7,$line_space+3,iconv("UTF-8", "TIS-620",'จำนวน.............................ฉบับ โดยมีรายละเอียดดังนี้'),0,1);

$pdf->Cell(25);
$pdf->Cell(7,$line_space+3,iconv("UTF-8", "TIS-620",'1. เป็นเอกสารฉบับ        ภาษาไทย           ภาษาอังกฤษ (........................................................)'),0,1);

$pdf->Cell(25);
$pdf->Cell(7,$line_space+3,iconv("UTF-8", "TIS-620",'2. บรรจุ/เริ่มปฏิบัตงิานเมื่อวันที่....................................'),0,1);

$pdf->Cell(25);
$pdf->Cell(7,$line_space+3,iconv("UTF-8", "TIS-620",'3. อัตราเงินเดือนปัจจุบัน...................บาท พร้อมเงินประจำตำแหน่งทางวิชาการ......................บาท '),0,1);

$pdf->Cell(30);
$pdf->Cell(7,$line_space+3,iconv("UTF-8", "TIS-620",'และเงินเพิ่มพิเศษ พตส. ..........................บาท รวมเป็นเงินทั้งสิ้น..................................บาท'),0,1);

$pdf->Cell(25);
$pdf->Cell(7,$line_space+3,iconv("UTF-8", "TIS-620",'จึงเรียนมาเพื่อโปรดพิจารณาอนุมัติ'),0,1);

$pdf->Cell(7,$line_space+3,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(7,$line_space+3,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(7,$line_space+3,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(80);
$pdf->Cell(7,$line_space+3,iconv("UTF-8", "TIS-620",'(.....................................................)'),0,1);
$pdf->Cell(80);
$pdf->Cell(7,$line_space+3,iconv("UTF-8", "TIS-620",'.....................................................'),0,1);

$pdf->SetFont('THSarabun','',34);
$pdf->SetXY(72,134);
$pdf->Cell(4,4,'',1,0);
$pdf->SetXY(104,134);
$pdf->Cell(4,4,'',1,0);


$pdf->SetFont('THSarabun','',18);
$pdf->SetY(63);
$pdf->MultiCell(195,$line_space,iconv("UTF-8", "TIS-620",''),0,'L');

$pdf->setxy(40,51);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$service),0,0);

$pdf->setxy(158,51);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$num),0,0);

$pdf->setxy(20,60);
$pdf->Cell(40,$line_space,iconv("UTF-8", "TIS-620",$A1),0,0,'C');

$pdf->setxy(60,60);
$pdf->Cell(40,$line_space,iconv("UTF-8", "TIS-620",$A2),0,0,'C');

$pdf->setxy(140,60);
$pdf->Cell(3,$line_space,iconv("UTF-8", "TIS-620",$date1),0,0,'C');

$pdf->setxy(18,69);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",'ขอความอนุเคราะห์หนังสือรับรอง'.$about),0,0,'C');

$pdf->setxy(89,77);
$pdf->Cell(95,$line_space,iconv("UTF-8", "TIS-620",$to),0,0,'C');

$pdf->setxy(60,86);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$name),0,0,'C');

$pdf->setxy(30,95);
$pdf->Cell(50,$line_space,iconv("UTF-8", "TIS-620",$position),0,0,'C');

$pdf->setxy(113,95);
$pdf->Cell(50,$line_space,iconv("UTF-8", "TIS-620",$department),0,0,'C');

$pdf->setxy(100,104);
$pdf->Cell(50,$line_space,iconv("UTF-8", "TIS-620",$certificate),0,0);

$pdf->setxy(140,113);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$certificate1),0,0);

$pdf->setxy(40,122);
$pdf->Cell(50,$line_space,iconv("UTF-8", "TIS-620",$many),0,0);

$pdf->setxy(137,131);
$pdf->Cell(50,$line_space,iconv("UTF-8", "TIS-620",$one),0,0,'C');

$pdf->setxy(89,140);
$pdf->Cell(30,$line_space,iconv("UTF-8", "TIS-620",$two),0,0);

$pdf->setxy(77,149);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$three),0,0);

$pdf->setxy(167,149);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$salary),0,0);

$pdf->setxy(84,158);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$extra_salary),0,0);

$pdf->setxy(156,158);
$pdf->Cell(10,$line_space,iconv("UTF-8", "TIS-620",$three+$salary+$extra_salary),0,0,'C');

$pdf->setxy(98,203);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$name3),0,0);

$pdf->setxy(110,212);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$name4),0,0);

$pdf->Output();
}else{ echo('ไม่มีข้อมูล');}

?>
