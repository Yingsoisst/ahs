<?php
if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "fmadd")) {
require_once("inc/func.php");
$date = Day_show($_POST["date"]);
$name = stripslashes($_POST["name"]);
$position = stripslashes($_POST["position"]);
$affiliation = stripslashes($_POST["affiliation"]);
$wish1 = stripslashes($_POST["wish1"]);
$wish2 = stripslashes($_POST["wish2"]);
$wish3 = stripslashes($_POST["wish3"]);
$wish4 = stripslashes($_POST["wish4"]);
$wish5 = stripslashes($_POST["wish5"]);
$objective = stripslashes($_POST["objective"]);
$many = stripslashes($_POST["many"]);
$date1 = Day_show($_POST["date1"]);
$time = time_show($_POST["time"]);
$place = stripslashes($_POST["place"]);

$line_space = 6;

require('vendor/fpdf184/fpdf.php');
$pdf = new FPDF('P','mm','A4');
$pdf->SetMargins(9,6);
$pdf->SetAutoPageBreak(10);
$pdf->AddPage();
$pdf->AddFont('THSarabun','B','THSarabun Bold.php');//ธรรมดา
$pdf->AddFont('THSarabun','','THSarabun.php');//ธรรมดา

//ด้านบน
$pdf->setfont('THSarabun','B','16');
$pdf->Cell(50);
$pdf->Cell(55,$line_space+15,iconv("UTF-8", "TIS-620",'แบบฟอร์มขอความอนุเคราะห์นิสิตจิตอาสา คณะสหเวชศาสตร์'),0,1);

$pdf->setfont('THSarabun','','16');
$pdf->Cell(55,$line_space-3,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(120);
$pdf->Cell(55,$line_space,iconv("UTF-8", "TIS-620",'วันที่.......................................................'),0,1);

$pdf->Cell(55,$line_space,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(25);
$pdf->Cell(7,$line_space+3,iconv("UTF-8", "TIS-620",'ชื่อ-นามสกุล........................................................................................ตำแหน่ง............................................'),0,1);

$pdf->Cell(6);
$pdf->Cell(7,$line_space+3,iconv("UTF-8", "TIS-620",'สังกัด.................................................................................................................................................................................'),0,1);

$pdf->Cell(6);
$pdf->Cell(7,$line_space+3,iconv("UTF-8", "TIS-620",'มีความประสงค์ขอความอนุเคราะห์นิสิตจิตอาสาทำงาน..................................................................................................'),0,1);
$pdf->Cell(6);
$pdf->Cell(7,$line_space+3,iconv("UTF-8", "TIS-620",'..........................................................................................................................................................................................'),0,1);
$pdf->Cell(6);
$pdf->Cell(7,$line_space+3,iconv("UTF-8", "TIS-620",'..........................................................................................................................................................................................'),0,1);
$pdf->Cell(6);
$pdf->Cell(7,$line_space+3,iconv("UTF-8", "TIS-620",'..........................................................................................................................................................................................'),0,1);
$pdf->Cell(6);
$pdf->Cell(7,$line_space+3,iconv("UTF-8", "TIS-620",'..........................................................................................................................................................................................'),0,1);

$pdf->Cell(6);
$pdf->Cell(7,$line_space+3,iconv("UTF-8", "TIS-620",'วัตถุประสงค์...............................................................................................................................จำนวน......................คน'),0,1);

$pdf->Cell(6);
$pdf->Cell(7,$line_space+3,iconv("UTF-8", "TIS-620",'วันที่...................................................................................................เวลา.......................................................................'),0,1);

$pdf->Cell(6);
$pdf->Cell(7,$line_space+3,iconv("UTF-8", "TIS-620",'สถานที่.............................................................................................................................................................................'),0,1);

$pdf->Cell(7,$line_space+3,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(6);
$pdf->Cell(7,$line_space+3,iconv("UTF-8", "TIS-620",'** แนบกำหนดการ'),0,1);


$pdf->Cell(7,$line_space,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(100);
$pdf->Cell(7,$line_space+3,iconv("UTF-8", "TIS-620",'ลงชื่อ........................................................'),0,1);
$pdf->Cell(100);
$pdf->Cell(7,$line_space+3,iconv("UTF-8", "TIS-620",'(..................................................................)'),0,1);

$pdf->setfont('THSarabun','B','16');
$pdf->Cell(10);
$pdf->Cell(7,$line_space,iconv("UTF-8", "TIS-620",'ความเห็นของรองคณบดีฝ่ายพัฒนานิสิตฯ'),0,1);

$pdf->setfont('THSarabun','','16');
$pdf->Cell(16);
$pdf->Cell(7,$line_space,iconv("UTF-8", "TIS-620",'อนุมัติ                 ไม่อนุมัติ'),0,1);

$pdf->Cell(10);
$pdf->Cell(7,$line_space,iconv("UTF-8", "TIS-620",'.....................................................................'),0,1);
$pdf->Cell(10);
$pdf->Cell(7,$line_space,iconv("UTF-8", "TIS-620",'.....................................................................'),0,1);
$pdf->Cell(10);
$pdf->Cell(7,$line_space,iconv("UTF-8", "TIS-620",'.....................................................................'),0,1);

$pdf->Cell(29);
$pdf->Cell(7,$line_space,iconv("UTF-8", "TIS-620",'(ดร.นพดล จำรูญ)'),0,1);
$pdf->Cell(4);
$pdf->Cell(7,$line_space,iconv("UTF-8", "TIS-620",'รองคณบดีฝ่ายพัฒนานิสิต และกิจกรรมเพื่อสังคม'),0,1);

$pdf->Cell(7,$line_space,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(7,$line_space,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(7,$line_space,iconv("UTF-8", "TIS-620",''),0,1);

$pdf->setfont('THSarabun','B','16');
$pdf->Cell(4);
$pdf->Cell(7,$line_space,iconv("UTF-8", "TIS-620",'หมายเหตุ'),0,1);

$pdf->setfont('THSarabun','','16');
$pdf->Cell(10);
$pdf->Cell(7,$line_space,iconv("UTF-8", "TIS-620",'1. จะต้องไม่เป็น กิจกรรม/วิจัย/บริการวิชาการ ส่วนบุคคล'),0,1);

$pdf->setfont('THSarabun','','16');
$pdf->Cell(10);
$pdf->Cell(7,$line_space,iconv("UTF-8", "TIS-620",'2. จะต้องไม่ได้ค่าตอบแทน'),0,1);




//checkbox
$pdf->SetFont('THSarabun','',34);
$pdf->SetXY(20,181);
$pdf->Cell(4,4,'',1,0);
$pdf->SetXY(50,181);
$pdf->Cell(4,4,'',1,0);





$pdf->SetFont('THSarabun','',16);
$pdf->setxy(140,29);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$date),0,0);

$pdf->setxy(55,42);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$name),0,0);

$pdf->setxy(148,42);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$position),0,0);

$pdf->setxy(30,51);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$affiliation),0,0);

$pdf->setxy(100,60);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",'1.  '.$wish1),0,0);

$pdf->setxy(18,69);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",'2.  '.$wish2),0,0);

$pdf->setxy(18,78);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",'3.  '.$wish3),0,0);

$pdf->setxy(18,87);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",'4.  '.$wish4),0,0);

$pdf->setxy(18,96);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",'5.  '.$wish5),0,0);

$pdf->setxy(36,105);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$objective),0,0);

$pdf->setxy(169,105);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$many),0,0);

$pdf->setxy(50,114);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$date1),0,0);

$pdf->setxy(140,114);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$time.'   น.'),0,0);

$pdf->setxy(35,123);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$place),0,0);

$pdf->setxy(115,165);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$name),0,0);

$pdf->Output();
}else{ echo('ไม่มีข้อมูล');}

?>
