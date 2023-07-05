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
$faculty = $_POST["faculty"];
$Major = $_POST["Major"];
$num = $_POST["num"];
$mail = $_POST["mail"];
$when = $_POST["when"];
$when1 = $_POST["when1"];
$report = $_POST["report"];
$text2 = $_POST["text2"];




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
$pdf->Cell(5,$line_space-4,iconv("UTF-8", "TIS-620",'NU19'),0,1,'c');

$pdf->SetFont('THSarabun','',12);
$pdf->SetXY(175,9);
$pdf->Cell(10,$line_space-4,iconv("UTF-8", "TIS-620",'ปรับปรุงครั้งที่ 1-2013'),0,1,'c');

$pdf->SetFont('THSarabun','B',18);
$pdf->Cell(78);
$pdf->Cell(55,$line_space+1,iconv("UTF-8", "TIS-620",'มหาวิทยาลัยนเรศวร'),0,1,'c');

$pdf->Cell(71);
$pdf->Cell(55,$line_space+1,iconv("UTF-8", "TIS-620",'คำร้องขอลาออกจากการศึกษา'),0,0);

$pdf->SetFont('THSarabun','',12);
$pdf->Cell(20);
$pdf->Cell(55,$line_space+1,iconv("UTF-8", "TIS-620",'วันที่............ เดือน.....................พ.ศ..............'),0,1,'c');

$pdf->Cell(69);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'ภาคการศึกษา.................... ปีการศึกษา....................'),0,0);
$pdf->Cell(10);
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

$pdf->SetXY(167,30);
$pdf->Cell(5,5,'',1,0);
$pdf->Cell(5,5,'',1,0);
$pdf->Cell(5,5,'',1,0);
$pdf->Cell(5,5,'',1,0);
$pdf->Cell(5,5,'',1,0);
$pdf->Cell(5,5,'',1,0);
$pdf->Cell(5,5,'',1,0);
$pdf->Cell(5,5,'',1,0);
$pdf->ln(5);


$pdf->Cell(4);
$pdf->Cell(50,$line_space+1,iconv("UTF-8", "TIS-620",'เรียน     อธิการบดี'),0,1);
$pdf->Cell(17);
$pdf->Cell(50,$line_space+1,iconv("UTF-8", "TIS-620",'1.       ข้าพเจ้า  (นาย/นางสาว/นาง)......................................................................................................................................................................................................'),0,1);
$pdf->Cell(4);
$pdf->Cell(50,$line_space+1,iconv("UTF-8", "TIS-620",'คณะ....................................................สาขาวิชา................................................................................โทร...........................................E-mail.............................................................'),0,1);
$pdf->Cell(4);
$pdf->Cell(50,$line_space+1,iconv("UTF-8", "TIS-620",'มีความประสงค์จะออกจากการศึกษา    ตั้งแต่ภาคเรียน...........................................................ปีการศึกษา...........................................'),0,1);
$pdf->SetXY(40,66);
$pdf->Cell(3,3,'',1,0);
$pdf->SetXY(44,64);
$pdf->Cell(50,$line_space,iconv("UTF-8", "TIS-620",'เอกสารประกอบ (ถ้ามี)..............................................................................................................................'),0,1);

$pdf->Cell(4);
$pdf->Cell(50,$line_space+1,iconv("UTF-8", "TIS-620",'เนื่องจาก.....................................................................................................................................................................................................................................................................'),0,1);
$pdf->Cell(4);
$pdf->Cell(50,$line_space+1,iconv("UTF-8", "TIS-620",'....................................................................................................................................................................................................................................................................................'),0,1);

$pdf->Cell(25);
$pdf->Cell(50,$line_space,iconv("UTF-8", "TIS-620",'จึงเรียนมาเพื่อโปรดพิจารณาอนุมัติ'),0,1);
$pdf->Cell(50,$line_space-3,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(120);
$pdf->Cell(50,$line_space,iconv("UTF-8", "TIS-620",'นิสิตลงนาม................................................'),0,1);
$pdf->Cell(130);
$pdf->Cell(50,$line_space+1,iconv("UTF-8", "TIS-620",'............/......................../............'),0,1);

$pdf->Cell(4);
$pdf->SetFont('THSarabun','B',16);
$pdf->Cell(50,$line_space+1,iconv("UTF-8", "TIS-620",'- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - '),0,1);

$pdf->Cell(95);
$pdf->SetFont('THSarabun','BU',12);
$pdf->Cell(50,$line_space-3,iconv("UTF-8", "TIS-620",'คำยินยอมจากผู้ปกครอง'),0,1);

$pdf->Cell(25);
$pdf->SetFont('THSarabun','',12);
$pdf->Cell(50,$line_space+1,iconv("UTF-8", "TIS-620",'ข้าพเจ้า................................................................................................................................................................ในฐานะผู้ปกครอง  ยินยอมและเห็นควรให้'),0,1);

$pdf->Cell(4);
$pdf->Cell(50,$line_space+1,iconv("UTF-8", "TIS-620",'(นาย/นางสาว/นาง)............................................................................................................................................................................(ลาออกจากการศึกษา)'),0,1);
$pdf->Cell(50,$line_space,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(120);
$pdf->Cell(50,$line_space,iconv("UTF-8", "TIS-620",'ลงชื่อ..............................................ผู้ปกครอง'),0,1);
$pdf->Cell(125);
$pdf->Cell(50,$line_space+1,iconv("UTF-8", "TIS-620",'................/..................../............'),0,1);
$pdf->Cell(50,$line_space-2,iconv("UTF-8", "TIS-620",''),0,1);

//เส้นกรอบ
$pdf->SetLineWidth(0.2);
$pdf->Rect(9,153,95,132);

$pdf->SetLineWidth(0.2);
$pdf->Rect(9,153,190,85);

//ช้อมูลในกรอบ
$pdf->Cell(95,$line_space,iconv("UTF-8", "TIS-620",'2.  ความเห็นของอาจารย์ที่ปรึกษา'),'R',0);
$pdf->Cell(95,$line_space,iconv("UTF-8", "TIS-620",'4.  ความเห็นของงานทะเบียน'),'R',1);
$pdf->Cell(95,$line_space+1,iconv("UTF-8", "TIS-620",'.......................................................................................................................................'),'R',0);
$pdf->Cell(95,$line_space+1,iconv("UTF-8", "TIS-620",'.......................................................................................................................................'),'',1);
$pdf->Cell(95,$line_space+1,iconv("UTF-8", "TIS-620",'.......................................................................................................................................'),'R',0);
$pdf->Cell(95,$line_space+1,iconv("UTF-8", "TIS-620",'.......................................................................................................................................'),'',1);

$pdf->Cell(95,$line_space,iconv("UTF-8", "TIS-620",''),'R',1);
$pdf->Cell(45);
$pdf->Cell(50,$line_space,iconv("UTF-8", "TIS-620",'ลงนาม.........................................................'),'R',0);
$pdf->Cell(35);
$pdf->Cell(30,$line_space,iconv("UTF-8", "TIS-620",'(นางวาสนา   พาใจดี)'),'',1);
$pdf->Cell(53);
$pdf->Cell(42,$line_space,iconv("UTF-8", "TIS-620",'(..................................................)'),'R',0);
$pdf->Cell(25);
$pdf->Cell(30,$line_space,iconv("UTF-8", "TIS-620",'หัวหน้างานทะเบียนนิสิตและประมวลผล'),'',1);
$pdf->Cell(53);
$pdf->Cell(50,$line_space+1,iconv("UTF-8", "TIS-620",'................/..................../............'),0,1);

$pdf->Cell(95,$line_space,iconv("UTF-8", "TIS-620",'3.  ความเห็นของคณบดีที่นิสิตสังกัด'),'TR',0);
$pdf->Cell(95,$line_space,iconv("UTF-8", "TIS-620",'5.  ความเห็นของงานทะเบียน'),'TR',1);

$pdf->SetXY(14,204);
$pdf->Cell(3,3,'',1,0);
$pdf->SetXY(19,202);
$pdf->Cell(42,$line_space,iconv("UTF-8", "TIS-620",'อนุญาต'),'',0);
$pdf->SetXY(109,204);
$pdf->Cell(3,3,'',1,0);
$pdf->SetXY(114,202);
$pdf->Cell(42,$line_space,iconv("UTF-8", "TIS-620",'อนุญาต'),'',1);

$pdf->SetXY(14,209);
$pdf->Cell(3,3,'',1,0);
$pdf->SetXY(19,207);
$pdf->Cell(42,$line_space,iconv("UTF-8", "TIS-620",'ไม่อนุญาต   เนื่องจาก..................................................'),'',0);
$pdf->SetXY(109,209);
$pdf->Cell(3,3,'',1,0);
$pdf->SetXY(114,207);
$pdf->Cell(42,$line_space,iconv("UTF-8", "TIS-620",'ไม่อนุญาต   เนื่องจาก....................................................'),'',1);
$pdf->Cell(42,$line_space,iconv("UTF-8", "TIS-620",''),'',1);


$pdf->Cell(42);
$pdf->Cell(42,$line_space,iconv("UTF-8", "TIS-620",'ลงนาม..............................................'),'',0);
$pdf->Cell(41);
$pdf->Cell(42,$line_space,iconv("UTF-8", "TIS-620",'(นางสาวจรวยพร   สุดสวาสดิ์)'),'',1);

$pdf->Cell(50);
$pdf->Cell(42,$line_space,iconv("UTF-8", "TIS-620",'(.........................................)'),'',0);
$pdf->Cell(20);
$pdf->Cell(42,$line_space,iconv("UTF-8", "TIS-620",'ผู้อำนายการกองบริการการศึกษา  ปฏิบัติราชการแทน'),'',1);

$pdf->Cell(48);
$pdf->Cell(42,$line_space,iconv("UTF-8", "TIS-620",'............./................./................'),'',0);
$pdf->Cell(35);
$pdf->Cell(42,$line_space,iconv("UTF-8", "TIS-620",'อธิการบดีมหาวิทยาลับนเรศวร'),'',1);

$pdf->Cell(42,$line_space-3,iconv("UTF-8", "TIS-620",''),'',1);
$pdf->Cell(95,$line_space,iconv("UTF-8", "TIS-620",'6.  สำหรับเจ้าหน้าที่งานทะเบียนฯ (กบศ.)'),'',0);

$pdf->SetXY(14,246);
$pdf->Cell(3,3,'',1,0);
$pdf->SetXY(19,244);
$pdf->Cell(42,$line_space,iconv("UTF-8", "TIS-620",'เพื่อโปรดทราบ'),'',0);

$pdf->SetXY(14,251);
$pdf->Cell(3,3,'',1,0);
$pdf->SetXY(19,249);
$pdf->Cell(42,$line_space,iconv("UTF-8", "TIS-620",'เพื่อโปรดดำเนินการต่อไป'),'',0);

$pdf->SetXY(14,256);
$pdf->Cell(3,3,'',1,0);
$pdf->SetXY(19,254);
$pdf->Cell(42,$line_space,iconv("UTF-8", "TIS-620",'เพื่อเก็บไว้เป็นหลักฐาน'),'',0);

$pdf->SetXY(14,261);
$pdf->Cell(3,3,'',1,0);
$pdf->SetXY(19,259);
$pdf->Cell(42,$line_space,iconv("UTF-8", "TIS-620",'อื่น ๆ...................................................'),'',1);
$pdf->Cell(42,$line_space,iconv("UTF-8", "TIS-620",''),'',1);

$pdf->Cell(42);
$pdf->Cell(42,$line_space,iconv("UTF-8", "TIS-620",'ลงนาม..............................................'),'',1);

$pdf->Cell(48);
$pdf->Cell(42,$line_space,iconv("UTF-8", "TIS-620",'............./................./................'),'',1);




$pdf->SetFont('THSarabun','',12);
//วันที่
$pdf->setxy(162,18);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$day),0,0);

$pdf->setxy(176,18);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$month),0,0);

$pdf->setxy(195,18);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$year1),0,0);

//ภาคการศึกษา
$pdf->setxy(98,25);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$term),0,0);

$pdf->setxy(124,25);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$year),0,0);

//รหัสนิสิต
$pdf->SetFont('THSarabun','',14);
$pdf->setxy(168,29);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$id1),0,0);
$pdf->setxy(173,29);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$id2),0,0);
$pdf->setxy(178,29);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$id3),0,0);
$pdf->setxy(183,29);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$id4),0,0);
$pdf->setxy(188,29);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$id5),0,0);
$pdf->setxy(193,29);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$id6),0,0);
$pdf->setxy(198,29);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$id7),0,0);
$pdf->setxy(203,29);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$id8),0,0);

$pdf->SetFont('THSarabun','',12);
$pdf->setxy(70,41);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$name),0,0);

$pdf->setxy(22,48);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$faculty),0,0);

$pdf->setxy(72,48);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$Major),0,0);

$pdf->setxy(129,48);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$num),0,0);

$pdf->setxy(165,48);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$mail),0,0);

$pdf->setxy(89,56);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$when),0,0);

$pdf->setxy(130,56);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$when1),0,0);

$pdf->setxy(72,63);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$text2),0,0);

$line_space = 7;
$max_chars_per_line = 130;

$becuase_tis620 = iconv('UTF-8', 'TIS-620', $report);

$lines = str_split($becuase_tis620, $max_chars_per_line);

$pdf->setXY(27, 72); // กำหนดตำแหน่งแนวนอน X เป็น 20 และตำแหน่งแนวตั้ง Y เป็น 40

foreach ($lines as $key => $line) {
    if ($key === 0) {
        $pdf->Cell(0, 0, $line, 0, 1);
    } else {
        $pdf->setXY(15, $pdf->GetY() + $line_space);
        $pdf->MultiCell(0, 0, $line, 0, 'L');
    }
}

$pdf->SetFont('THSarabun','',12);
//วันที่
$pdf->setxy(142,98);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$day),0,0);

$pdf->setxy(150,98);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$month),0,0);

$pdf->setxy(167,98);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$year1),0,0);

$pdf->Output();
}else{ echo('ไม่มีข้อมูล');}

?>
