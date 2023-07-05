<?php
if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "fmadd")) {
require_once("inc/func.php");
$date = stripslashes($_POST["date"]);
list($day1, $month1, $year1) = Day_show_list($date);

$name = stripslashes($_POST["name"]);
$major = stripslashes($_POST["major"]);
$year = stripslashes($_POST["year"]);
$id = stripslashes($_POST["id"]);
$to = stripslashes($_POST["to"]);
$num = stripslashes($_POST["num"]);

$line_space = 6;

require('vendor/fpdf184/fpdf.php');
$pdf = new FPDF('P','mm','A4');
$pdf->SetMargins(9,6);
$pdf->SetAutoPageBreak(10);
$pdf->AddPage();
$pdf->AddFont('THSarabun','B','THSarabun Bold.php');//ธรรมดา
$pdf->AddFont('THSarabun','','THSarabun.php');//ธรรมดา

//ด้านบน
$pdf->Image('image/ahs-logo.png',95,10,28,25);
$pdf->SetFont('THSarabun','',14);

$pdf->setfont('THSarabun','B','20');
$pdf->Cell(60);
$pdf->Cell(55,$line_space+65,iconv("UTF-8", "TIS-620",'ใบคำร้องขอหนังสือรับรองความประพฤติ'),0,1);
$pdf->Cell(80);
$pdf->Cell(55,$line_space-65,iconv("UTF-8", "TIS-620",'คณะสหเวชศาสตร์'),0,1);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(55,$line_space,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(55,$line_space,iconv("UTF-8", "TIS-620",''),0,1);

$pdf->setfont('THSarabun','','14');
$pdf->Cell(155);
$pdf->Cell(55,$line_space-3,iconv("UTF-8", "TIS-620",'คณะสหเวชศาสตร์'),0,1);
$pdf->Cell(155);
$pdf->Cell(55,$line_space+3,iconv("UTF-8", "TIS-620",'มหาวิทยาลัยนเรศวร'),0,1);

$pdf->Cell(55,$line_space-3,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(120);
$pdf->Cell(55,$line_space,iconv("UTF-8", "TIS-620",'วันที่............เดือน.............................พ.ศ..............'),0,1);

$pdf->Cell(55,$line_space-3,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(6);
$pdf->Cell(7,$line_space,iconv("UTF-8", "TIS-620",'เรื่อง'),0,0);

$pdf->Cell(3);
$pdf->Cell(55,$line_space,iconv("UTF-8", "TIS-620",'ขอหนังสือรับรองความประพฤติ'),0,1);


$pdf->Cell(6);
$pdf->Cell(7,$line_space,iconv("UTF-8", "TIS-620",'เรียน   คณบดีคณะสหเวชศาสตร์'),0,1);

$pdf->Cell(25);
$pdf->Cell(7,$line_space+3,iconv("UTF-8", "TIS-620",'ข้าพเจ้า............................................................................................................................................... นิสิตคณะสหเวชศาสตร์'),0,1);

$pdf->Cell(6);
$pdf->Cell(7,$line_space+3,iconv("UTF-8", "TIS-620",'สาขาวิชา........................................................................................ ชั้นปีที่.................. รหัสประจำตัวนิสิต......................................................'),0,1);

$pdf->Cell(6);
$pdf->Cell(7,$line_space+3,iconv("UTF-8", "TIS-620",'มีความประสงค์ขอหนังสือรับรองความประพฤติเพื่อ ......................................................................................................................................'),0,1);
$pdf->Cell(6);
$pdf->Cell(7,$line_space+3,iconv("UTF-8", "TIS-620",'.........................................................................................................................................................................................................................'),0,1);
$pdf->Cell(6);
$pdf->Cell(7,$line_space+3,iconv("UTF-8", "TIS-620",'.........................................................................................................................................................................................................................'),0,1);

$pdf->Cell(6);
$pdf->Cell(7,$line_space+3,iconv("UTF-8", "TIS-620",'พร้อมกันนี้ ข้าพเจ้าได้แนบรูปถ่าย ขนาด 3 x 4  ซ.ม. (1 นิ้ว)  จำนวน 1 รูป  มาพร้อมนี้'),0,1);

$pdf->Cell(7,$line_space+3,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(100);
$pdf->Cell(7,$line_space+3,iconv("UTF-8", "TIS-620",'ลงชื่อ........................................................ผู้ขอหนังสือรับรอง'),0,1);
$pdf->Cell(100);
$pdf->Cell(7,$line_space+3,iconv("UTF-8", "TIS-620",'(..................................................................)'),0,1);
$pdf->Cell(100);
$pdf->Cell(7,$line_space+3,iconv("UTF-8", "TIS-620",'เบอร์โทรศัพท์.....................................................'),0,1);


//เส้นกรอบ
$pdf->SetLineWidth(0.2);
$pdf->Rect(15,180,173,65);

//แกนy
$pdf->SetLineWidth(0.2);
$pdf->Rect(100,180,0,65);

$pdf->setfont('THSarabun','U','14');
$pdf->setxy(20,180);
$pdf->Cell(7,$line_space+3,iconv("UTF-8", "TIS-620",'ความเห็นของอาจารย์ที่ปรึกษา/รองคณบดีฝ่ายพัฒนานิสิต'),0,1);
$pdf->setxy(43,188);
$pdf->Cell(7,$line_space+3,iconv("UTF-8", "TIS-620",'และกิจกรรมเพื่อสังคม'),0,1);

$pdf->setxy(135,180);
$pdf->Cell(7,$line_space+3,iconv("UTF-8", "TIS-620",'ความเห็นของคณบดี'),0,1);

//ในตารางฝั่งซ้าย
$pdf->setfont('THSarabun','','14');
$pdf->setxy(18,195);
$pdf->Cell(7,$line_space+3,iconv("UTF-8", "TIS-620",'..................................................................................................'),0,1);

$pdf->setxy(18,202);
$pdf->Cell(7,$line_space+3,iconv("UTF-8", "TIS-620",'..................................................................................................'),0,1);

$pdf->setxy(18,209);
$pdf->Cell(7,$line_space+3,iconv("UTF-8", "TIS-620",'..................................................................................................'),0,1);

$pdf->setxy(18,222);
$pdf->Cell(7,$line_space+3,iconv("UTF-8", "TIS-620",'(ลงชื่อ)......................................................................................'),0,1);
$pdf->setxy(25,231);
$pdf->Cell(7,$line_space+3,iconv("UTF-8", "TIS-620",'(......................................................................................)'),0,1);

//ใบตารางฝั่งขวา
$pdf->setxy(102,188);
$pdf->Cell(7,$line_space+3,iconv("UTF-8", "TIS-620",'.......................................................................................................'),0,1);

$pdf->setxy(102,195);
$pdf->Cell(7,$line_space+3,iconv("UTF-8", "TIS-620",'.......................................................................................................'),0,1);

$pdf->setxy(102,202);
$pdf->Cell(7,$line_space+3,iconv("UTF-8", "TIS-620",'.......................................................................................................'),0,1);

$pdf->setxy(102,209);
$pdf->Cell(7,$line_space+3,iconv("UTF-8", "TIS-620",'.......................................................................................................'),0,1);

$pdf->setxy(102,216);
$pdf->Cell(7,$line_space+3,iconv("UTF-8", "TIS-620",'.......................................................................................................'),0,1);

$pdf->setxy(102,223);
$pdf->Cell(7,$line_space+3,iconv("UTF-8", "TIS-620",'.......................................................................................................'),0,1);

$pdf->setxy(102,230);
$pdf->Cell(7,$line_space+3,iconv("UTF-8", "TIS-620",'.......................................................................................................'),0,1);

$pdf->setxy(85,260);
$pdf->Cell(7,$line_space+3,iconv("UTF-8", "TIS-620",'รับหนังสือรับรองความประพฤติแล้ว เมื่อวันที่.......................................................'),0,1);

$pdf->setxy(85,267);
$pdf->Cell(7,$line_space+3,iconv("UTF-8", "TIS-620",'ลงชื่อนิสิต..............................................................................................................'),0,1);

$pdf->SetFont('THSarabun','',14);
$pdf->setxy(138,68);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$day1),0,0);

$pdf->setxy(153,68);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$month1),0,0);

$pdf->setxy(180,68);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$year1),0,0);


$pdf->setxy(50,91);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$name),0,0);

$pdf->setxy(35,99);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$major),0,0);

$pdf->setxy(114,99);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$year),0,0);

$pdf->setxy(160,99);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$id),0,0);


$max_chars_per_line = array(
    30 , 50 , 50 );
 
 $becuase_tis620 = iconv('UTF-8', 'TIS-620', $to);
 
 $lines = array();
 foreach ($max_chars_per_line as $max_chars) {
     $lines[] = mb_substr($becuase_tis620, 0, $max_chars);
     $becuase_tis620 = mb_substr($becuase_tis620, $max_chars, null);
 }
 $pdf->setXY(90, 111); 
 foreach ($lines as $key => $line) {
     $pdf->MultiCell(0, 0, $line, 0, 'L');
     if ($key < count($lines) - 1) {
         $pdf->setXY(16, $pdf->GetY() + $line_space+3);
     }
 }

 $pdf->setxy(120,162);
 $pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$name),0,0);
 
 $pdf->setxy(135,171);
 $pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$num),0,0);

$pdf->Output();
}else{ echo('ไม่มีข้อมูล');}

?>
