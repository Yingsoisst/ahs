<?php
if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "fmadd")) {
require_once("inc/func.php");
$name = stripslashes($_POST["name"]);	

$date = stripslashes($_POST["datenow"]);
list($day, $month, $year1) = Day_show_list($date);

$term = $_POST["term"];
$year = $_POST["year"];
$id1 = $_POST["id1"];
$id2 = $_POST["id2"];
$id3 = $_POST["id3"];
$id4 = $_POST["id4"];
$id5 = $_POST["id5"];
$id6 = $_POST["id6"];
$id7 = $_POST["id7"];
$id8 = $_POST["id8"];
$about = $_POST["about"];
$faculty = $_POST["faculty"];
$Major = $_POST["Major"];
$num = $_POST["num"];
$mail = $_POST["mail"];
$report = $_POST["report"];




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
$pdf->SetXY(177,4);
$pdf->Cell(10,$line_space-4,iconv("UTF-8", "TIS-620",'อ้างอิง'),0,0,'c');

$pdf->SetFont('THSarabun','B',18);
$pdf->Cell(5,$line_space-4,iconv("UTF-8", "TIS-620",'NU18'),0,1,'c');

$pdf->SetFont('THSarabun','',12);
$pdf->SetXY(175,9);
$pdf->Cell(10,$line_space-4,iconv("UTF-8", "TIS-620",'ปรับปรุงครั้งที่ 1-2021'),0,1,'c');

$pdf->SetFont('THSarabun','B',18);
$pdf->Cell(67);
$pdf->Cell(55,$line_space+1,iconv("UTF-8", "TIS-620",'มหาวิทยาลัยนเรศวร'),0,1,'c');

$pdf->Cell(73);
$pdf->Cell(55,$line_space+1,iconv("UTF-8", "TIS-620",'คำร้องทั่วไป'),0,0);

$pdf->SetFont('THSarabun','',12);
$pdf->Cell(20);
$pdf->Cell(55,$line_space+1,iconv("UTF-8", "TIS-620",'วันที่............ เดือน....................พ.ศ...............'),0,1,'c');

$pdf->SetFont('THSarabun','',14);
$pdf->Cell(50);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'ภาคการศึกษาที่.................... ปีการศึกษา....................'),0,0);

$pdf->SetFont('THSarabun','',12);
$pdf->Cell(30);
$pdf->Cell(55,$line_space-3,iconv("UTF-8", "TIS-620",'ระดับ'),0,0,'c');

$pdf->Cell(-46);
$pdf->Cell(3,3,'',1,0);
$pdf->Cell(0.5);
$pdf->Cell(55,$line_space-3,iconv("UTF-8", "TIS-620",'ปริญญาตรี'),0,0);

$pdf->Cell(-40);
$pdf->Cell(3,3,'',1,0);
$pdf->Cell(0.5);
$pdf->Cell(55,$line_space-3,iconv("UTF-8", "TIS-620",'ปริญญาโท'),0,0);

$pdf->Cell(-40);
$pdf->Cell(3,3,'',1,0);
$pdf->Cell(0.5);
$pdf->Cell(50,$line_space-2,iconv("UTF-8", "TIS-620",'ปริญญาเอก'),0,1);
$pdf->Cell(135);
$pdf->Cell(50,$line_space+1,iconv("UTF-8", "TIS-620",'รหัสประจำตัวนิสิต'),0,0);

$pdf->SetXY(168,30);
$pdf->Cell(5,5,'',1,0);
$pdf->Cell(5,5,'',1,0);
$pdf->Cell(5,5,'',1,0);
$pdf->Cell(5,5,'',1,0);
$pdf->Cell(5,5,'',1,0);
$pdf->Cell(5,5,'',1,0);
$pdf->Cell(5,5,'',1,0);
$pdf->Cell(5,5,'',1,0);
$pdf->ln(5);

$pdf->SetFont('THSarabun','B',14);
$pdf->Cell(50,$line_space+1,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(4);
$pdf->Cell(50,$line_space+1,iconv("UTF-8", "TIS-620",'เรื่อง   ................................................................................................................'),0,1);

$pdf->SetFont('THSarabun','B',14);
$pdf->Cell(4);
$pdf->Cell(10,$line_space+1,iconv("UTF-8", "TIS-620",'เรียน'),0,0);
$pdf->SetFont('THSarabun','',14);
$pdf->Cell(50,$line_space+1,iconv("UTF-8", "TIS-620",'อธิการบดี'),0,1);
$pdf->Cell(25);
$pdf->Cell(50,$line_space+1,iconv("UTF-8", "TIS-620",'ข้าพเจ้า  (นาย/นางสาว/นาง).....................................................................................................................................................................'),0,1);
$pdf->Cell(4);
$pdf->Cell(50,$line_space+1,iconv("UTF-8", "TIS-620",'คณะ.................................................................................................................สาขาวิชา......................................................................................................'),0,1);
$pdf->Cell(4);
$pdf->Cell(50,$line_space+1,iconv("UTF-8", "TIS-620",'โทร..............................................................................................E-mail..............................................................................................................................'),0,1);

// $pdf->Cell(25);
// $pdf->Cell(50,$line_space+1,iconv("UTF-8", "TIS-620",'มีความประสงค์..........................................................................................................................................................................................'),0,1);

$pdf->Cell(6);
$pdf->Cell(50,$line_space+1,iconv("UTF-8", "TIS-620",'มีความประสงค์'),0,1);

$pdf->Cell(4);
$pdf->Cell(50,$line_space+1,iconv("UTF-8", "TIS-620",'..............................................................................................................................................................................................................................................'),0,1);
$pdf->Cell(4);
$pdf->Cell(50,$line_space+1,iconv("UTF-8", "TIS-620",'..............................................................................................................................................................................................................................................'),0,1);

$pdf->Cell(25);
$pdf->Cell(50,$line_space,iconv("UTF-8", "TIS-620",'จึงเรียนมาเพื่อโปรดพิจารณาอนุมัติ'),0,1);
$pdf->Cell(50,$line_space-3,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(50,$line_space-3,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(50,$line_space-3,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(120);
$pdf->Cell(50,$line_space,iconv("UTF-8", "TIS-620",'นิสิตลงนาม................................................'),0,1);
$pdf->Cell(130);
$pdf->Cell(50,$line_space+1,iconv("UTF-8", "TIS-620",'.........../........................./............'),0,1);
$pdf->Cell(50,$line_space+1,iconv("UTF-8", "TIS-620",''),0,1);


//เส้นกรอบ
$pdf->SetLineWidth(0.2);
$pdf->Rect(9,131,95,157);

$pdf->SetLineWidth(0.2);
$pdf->Rect(9,131,190,100);

//ช้อมูลในกรอบ
$pdf->Cell(95,$line_space,iconv("UTF-8", "TIS-620",'  ความเห็นของอาจารย์ที่ปรึกษา'),'',0);
$pdf->Cell(95,$line_space,iconv("UTF-8", "TIS-620",'  ความเห็นของงานทะเบียน'),'',1);
$pdf->Cell(95,$line_space+1,iconv("UTF-8", "TIS-620",'................................................................................................................'),'',0);
$pdf->Cell(95,$line_space+1,iconv("UTF-8", "TIS-620",'................................................................................................................'),'',1);
$pdf->Cell(95,$line_space+1,iconv("UTF-8", "TIS-620",'................................................................................................................'),'',0);
$pdf->Cell(95,$line_space+1,iconv("UTF-8", "TIS-620",'................................................................................................................'),'',1);
$pdf->Cell(95,$line_space+1,iconv("UTF-8", "TIS-620",'................................................................................................................'),'',0);
$pdf->Cell(95,$line_space+1,iconv("UTF-8", "TIS-620",'................................................................................................................'),'',1);

$pdf->Cell(95,$line_space,iconv("UTF-8", "TIS-620",''),'',1);

$pdf->Cell(20);
$pdf->Cell(50,$line_space,iconv("UTF-8", "TIS-620",'ลงนาม..................................................'),'',0);
$pdf->Cell(50);
$pdf->Cell(30,$line_space,iconv("UTF-8", "TIS-620",'ลงนาม..................................................)'),'',1);

$pdf->Cell(28);
$pdf->Cell(42,$line_space,iconv("UTF-8", "TIS-620",'(..................................................)'),'',0);
$pdf->Cell(57);
$pdf->Cell(30,$line_space,iconv("UTF-8", "TIS-620",'(..................................................)'),'',1);

$pdf->Cell(27);
$pdf->Cell(50,$line_space+1,iconv("UTF-8", "TIS-620",'................/..................../...............'),0,0);
$pdf->Cell(50);
$pdf->Cell(50,$line_space+1,iconv("UTF-8", "TIS-620",'................/..................../...............'),0,1);


$pdf->Cell(95,$line_space,iconv("UTF-8", "TIS-620",'  ความเห็นของคณบดีที่นิสิตสังกัด'),'T',0);
$pdf->Cell(95,$line_space,iconv("UTF-8", "TIS-620",'      คำสั่งมหาวิทยาลัยนเรศวร'),'T',1);

$pdf->Cell(95,$line_space+1,iconv("UTF-8", "TIS-620",'................................................................................................................'),'R',1);
$pdf->Cell(95,$line_space+1,iconv("UTF-8", "TIS-620",'................................................................................................................'),'R',0);
$pdf->Cell(42,$line_space,iconv("UTF-8", "TIS-620",''),'',1);
$pdf->Cell(95,$line_space+1,iconv("UTF-8", "TIS-620",''),'R',1);

$pdf->Cell(42);
$pdf->Cell(42,$line_space,iconv("UTF-8", "TIS-620",'ลงนาม..............................................'),'',0);
$pdf->Cell(33);
$pdf->Cell(42,$line_space,iconv("UTF-8", "TIS-620",'(รองศาสตราจารย์ ดร.วารีรัตน์   แก้วอุไร)'),'',1);

$pdf->Cell(50);
$pdf->Cell(42,$line_space,iconv("UTF-8", "TIS-620",'(.........................................)'),'',0);
$pdf->Cell(30);
$pdf->Cell(42,$line_space,iconv("UTF-8", "TIS-620",'รองอธิการบดี ปฏิบัติราชการแทน'),'',1);

$pdf->Cell(48);
$pdf->Cell(42,$line_space,iconv("UTF-8", "TIS-620",'............./................./................'),'',0);
$pdf->Cell(33);
$pdf->Cell(42,$line_space,iconv("UTF-8", "TIS-620",'อธิการบดีมหาวิทยาลับนเรศวร'),'',1);

$pdf->SetFont('THSarabun','',14);
$pdf->Cell(42,$line_space-3,iconv("UTF-8", "TIS-620",''),'',1);
$pdf->Cell(95,$line_space,iconv("UTF-8", "TIS-620",'      สำหรับเจ้าหน้าที่งานทะเบียนฯ (กบศ.)'),'',0);

$pdf->SetXY(19,239);
$pdf->Cell(42,$line_space+2,iconv("UTF-8", "TIS-620",'เพื่อโปรดทราบ'),'',0);

$pdf->SetXY(19,246);
$pdf->Cell(42,$line_space+2,iconv("UTF-8", "TIS-620",'เพื่อโปรดดำเนินการต่อไป'),'',0);

$pdf->SetXY(19,254);
$pdf->Cell(42,$line_space+2,iconv("UTF-8", "TIS-620",'เพื่อเก็บไว้เป็นหลักฐาน'),'',0);

$pdf->SetXY(19,262);
$pdf->Cell(42,$line_space,iconv("UTF-8", "TIS-620",'อื่น ๆ...................................................'),'',1);

$pdf->SetFont('THSarabun','',14);
$pdf->Cell(42,$line_space,iconv("UTF-8", "TIS-620",''),'',1);

$pdf->Cell(40);
$pdf->Cell(42,$line_space,iconv("UTF-8", "TIS-620",'ลงนาม..............................................'),'',1);

$pdf->Cell(46);
$pdf->Cell(42,$line_space,iconv("UTF-8", "TIS-620",'............./................./................'),'',1);



$pdf->SetFont('THSarabun','',36);
$pdf->SetXY(104,185);
$pdf->Cell(145,$line_space,iconv("UTF-8", "TIS-620",'o'),0,1,'');

$pdf->SetXY(109,190);
$pdf->Cell(145,$line_space,iconv("UTF-8", "TIS-620",'o'),0,1,'');

$pdf->SetXY(109,196);
$pdf->Cell(145,$line_space,iconv("UTF-8", "TIS-620",'o'),0,1,'');

$pdf->SetFont('THSarabun','',14);
$pdf->SetXY(115,191);
$pdf->Cell(145,$line_space,iconv("UTF-8", "TIS-620",'อนุมัติ'),0,1,'');
$pdf->SetXY(116,197);
$pdf->Cell(145,$line_space,iconv("UTF-8", "TIS-620",'ไม่อนุมัติ เนื่องจาก........................................................'),0,1,'');

$pdf->SetFont('THSarabun','',36);
$pdf->SetXY(12,239);
$pdf->Cell(145,$line_space,iconv("UTF-8", "TIS-620",'o'),0,1,'');

$pdf->SetXY(12,246);
$pdf->Cell(145,$line_space,iconv("UTF-8", "TIS-620",'o'),0,1,'');

$pdf->SetXY(12,253);
$pdf->Cell(145,$line_space,iconv("UTF-8", "TIS-620",'o'),0,1,'');

$pdf->SetXY(12,260);
$pdf->Cell(145,$line_space,iconv("UTF-8", "TIS-620",'o'),0,1,'');


$pdf->SetFont('THSarabun','',12);
$pdf->SetY(63);
$pdf->MultiCell(195,$line_space,iconv("UTF-8", "TIS-620",''),0,'L');

//วันที่
$pdf->setxy(164,18);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$day),0,0);

$pdf->setxy(178,18);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$month),0,0);

$pdf->setxy(196,18);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$year1),0,0);

//ภาคการศึกษา
$pdf->setxy(85,25);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$term),0,0);

$pdf->setxy(115,25);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$year),0,0);

//รหัสนิสิต
$pdf->SetFont('THSarabun','',14);
$pdf->setxy(169,29);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$id1),0,0);
$pdf->setxy(174,29);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$id2),0,0);
$pdf->setxy(179,29);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$id3),0,0);
$pdf->setxy(184,29);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$id4),0,0);
$pdf->setxy(189,29);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$id5),0,0);
$pdf->setxy(194,29);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$id6),0,0);
$pdf->setxy(199,29);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$id7),0,0);
$pdf->setxy(204,29);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$id8),0,0);

$pdf->SetFont('THSarabun','',14);
$pdf->setxy(80,55);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$name),0,0);

$pdf->setxy(22,62);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$faculty),0,0);

$pdf->setxy(130,62);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$Major),0,0);

$pdf->setxy(22,69);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$num),0,0);

$pdf->setxy(110,69);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$mail),0,0);

$pdf->setxy(24,41);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$about),0,0);

// $line_space = 7;
// $max_chars_per_line = 95;

// $becuase_tis620 = iconv('UTF-8', 'TIS-620', $report);

// $lines = str_split($becuase_tis620, $max_chars_per_line);

// $pdf->setXY(59, 79); // กำหนดตำแหน่งแนวนอน X เป็น 20 และตำแหน่งแนวตั้ง Y เป็น 40

// foreach ($lines as $key => $line) {
//     if ($key === 0) {
//         $pdf->Cell(0, 0, $line, 0, 1);
//     } else {
//         $pdf->setXY(15, $pdf->GetY() + $line_space);
//         $pdf->MultiCell(0, 0, $line, 0, 'L');
//     }
// }

$pdf->setxy(15,83);
$pdf->MultiCell(185,$line_space+1,iconv("UTF-8", "TIS-620",$report),0,0);


$pdf->SetFont('THSarabun','',12);
$pdf->SetY(63);
$pdf->MultiCell(195,$line_space,iconv("UTF-8", "TIS-620",''),0,'L');

//วันที่
$pdf->setxy(142,118);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$day),0,0);

$pdf->setxy(152,118);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$month),0,0);

$pdf->setxy(172,118);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$year1),0,0);


$pdf->Output();
}else{ echo('ไม่มีข้อมูล');}

?>
