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
$many = $_POST["many"];
$when = $_POST["when"];
$many1 = $_POST["many1"];
$when1 = $_POST["when1"];
$datenow = Day_show1($_POST["datenow"]);
$report = $_POST["report"];
$text1 = $_POST["text1"];
$text2 = $_POST["text2"];
$drop = $_POST["drop"];




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
$pdf->Cell(10,$line_space-4,iconv("UTF-8", "TIS-620",'อ้างอิง'),0,0);

$pdf->SetFont('THSarabun','B',18);
$pdf->Cell(5,$line_space-4,iconv("UTF-8", "TIS-620",'NU17'),0,1);

$pdf->SetFont('THSarabun','',12);
$pdf->SetXY(175,9);
$pdf->Cell(10,$line_space-4,iconv("UTF-8", "TIS-620",'ปรับปรุงครั้งที่ 1-2017'),0,1);

$pdf->SetFont('THSarabun','B',18);
$pdf->Cell(67);
$pdf->Cell(55,$line_space+1,iconv("UTF-8", "TIS-620",'มหาวิทยาลัยนเรศวร'),0,1);

$pdf->Cell(63);
$pdf->Cell(55,$line_space+1,iconv("UTF-8", "TIS-620",'คำร้องขอลาพักการศึกษา'),0,0);

$pdf->SetFont('THSarabun','',12);
$pdf->Cell(20);
$pdf->Cell(55,$line_space+1,iconv("UTF-8", "TIS-620",'วันที่............ เดือน............................พ.ศ...............'),0,1);

$pdf->SetFont('THSarabun','',14);
$pdf->Cell(50);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'ภาคการศึกษาที่.................... ปีการศึกษา....................'),0,0);

$pdf->SetFont('THSarabun','',12);
$pdf->Cell(30);
$pdf->Cell(55,$line_space-3,iconv("UTF-8", "TIS-620",'ระดับ'),0,0);

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
$pdf->SetFont('THSarabun','B',14);
$pdf->Cell(4);
$pdf->Cell(10,$line_space+1,iconv("UTF-8", "TIS-620",'เรียน'),0,0);
$pdf->SetFont('THSarabun','',14);
$pdf->Cell(50,$line_space+1,iconv("UTF-8", "TIS-620",'อธิการบดี'),0,1);
$pdf->Cell(20);
$pdf->Cell(50,$line_space+1,iconv("UTF-8", "TIS-620",'1.    ข้าพเจ้า  (นาย/นางสาว/นาง)..................................................................................................................................................................'),0,1);
$pdf->Cell(4);
$pdf->Cell(50,$line_space+1,iconv("UTF-8", "TIS-620",'คณะ.......................................สาขาวิชา...........................................................................โทร..................................E-mail.................................................'),0,1);
$pdf->Cell(4);
$pdf->Cell(50,$line_space+1,iconv("UTF-8", "TIS-620",'มีความประสงค์ขอลาพักการศึกษา  จำนวน............ภาคเรียน ตั้งแต่ภาคเรียน...........ปีการศึกษา................ถึง ภาคเรียน............... ปีการศึกษา...............'),0,1);
$pdf->Cell(4);
$pdf->Cell(50,$line_space+1,iconv("UTF-8", "TIS-620",'พร้อมได้แนบหลักฐาน              ใบรับรองแพทย์จากสถานพยาบาลชื่อ.......................................................................................ลงวันที่.........................'),0,1);

$pdf->Cell(47);
$pdf->Cell(50,$line_space+1,iconv("UTF-8", "TIS-620",'เอกสารประกอบ (ถ้ามี).....................................................................................'),0,1);
$pdf->Cell(4);
$pdf->Cell(50,$line_space+1,iconv("UTF-8", "TIS-620",'เนื่องจาก..............................................................................................................................................................................................................................'),0,1);
$pdf->Cell(4);
$pdf->Cell(50,$line_space+1,iconv("UTF-8", "TIS-620",'..............................................................................................................................................................................................................................................'),0,1);

$pdf->Cell(25);
$pdf->Cell(50,$line_space,iconv("UTF-8", "TIS-620",'เมื่อครบกําหนดการขอลาพักการศึกษาแล้ว ข้าพเจ้าจะลงทะเบียนเรียนในภาคการศึกษาถัดไป'),0,0);

$pdf->SetFont('THSarabun','U',14);
$pdf->Cell(71);
$pdf->Cell(50,$line_space,iconv("UTF-8", "TIS-620",'หากข้าพเจ้าขอลาพักการศึกษา'),0,1);

$pdf->Cell(4);
$pdf->Cell(50,$line_space,iconv("UTF-8", "TIS-620",'มากกว่า 1 ภาคการศึกษา ข้าพเจ้าจะรักษาสภาพในระบบทะเบียนออนไลน์ ตามปฏิทินการศึกษาของมหาวิทยาลัยกําหนดต่อไป'),0,1);
$pdf->Cell(50,$line_space-3,iconv("UTF-8", "TIS-620",''),0,1);

$pdf->SetFont('THSarabun','',14);
$pdf->Cell(25);
$pdf->Cell(50,$line_space,iconv("UTF-8", "TIS-620",'จึงเรียนมาเพื่อโปรดพิจารณาอนุมัติ'),0,1);

$pdf->Cell(50,$line_space-3,iconv("UTF-8", "TIS-620",''),0,1);

$pdf->Cell(120);
$pdf->Cell(50,$line_space,iconv("UTF-8", "TIS-620",'นิสิตลงนาม................................................'),0,1);
$pdf->Cell(134);
$pdf->Cell(50,$line_space+1,iconv("UTF-8", "TIS-620",'............/........................../..........'),0,1);
$pdf->Cell(50,$line_space,iconv("UTF-8", "TIS-620",''),0,1);

$pdf->SetLineWidth(0.2);
$pdf->Rect(14,135,190,0);

$pdf->Cell(25);
$pdf->Cell(50,$line_space,iconv("UTF-8", "TIS-620",'ข้าพเจ้า................................................................................................................................................................ในฐานะผู้ปกครอง'),0,1);

$pdf->Cell(4);
$pdf->Cell(50,$line_space,iconv("UTF-8", "TIS-620",'ยินยอมและเห็นควรให้ (นาย/นางสาว)...........................................................................................................................................(ลาพักการศึกษา)'),0,1);

$pdf->SetFont('THSarabun','',6);
$pdf->Cell(95,$line_space-4,iconv("UTF-8", "TIS-620",''),'',1);
//เส้นกรอบ
$pdf->SetLineWidth(0.2);
$pdf->Rect(9,155,90,140);

$pdf->SetLineWidth(0.2);
$pdf->Rect(9,155,190,90);

//ช้อมูลในกรอบ
$pdf->SetFont('THSarabun','',12);
$pdf->Cell(95,$line_space,iconv("UTF-8", "TIS-620",'2.  ความเห็นของอาจารย์ที่ปรึกษา'),'',0);
$pdf->Cell(95,$line_space,iconv("UTF-8", "TIS-620",'4.  ความเห็นของงานทะเบียนนิสิตและประมวลผลการศึกษา'),'',1);
$pdf->Cell(95,$line_space+1,iconv("UTF-8", "TIS-620",'...................................................................................................................................'),'',0);
$pdf->Cell(95,$line_space+1,iconv("UTF-8", "TIS-620",'...................................................................................................................................'),'',1);
$pdf->Cell(95,$line_space+1,iconv("UTF-8", "TIS-620",'...................................................................................................................................'),'',0);
$pdf->Cell(95,$line_space+1,iconv("UTF-8", "TIS-620",'...................................................................................................................................'),'',1);

$pdf->Cell(95,$line_space,iconv("UTF-8", "TIS-620",''),'',1);

$pdf->Cell(20);
$pdf->Cell(50,$line_space,iconv("UTF-8", "TIS-620",'ลงนาม..................................................'),'',0);
$pdf->Cell(59);
$pdf->Cell(30,$line_space,iconv("UTF-8", "TIS-620",'(นางสาววาสนา     พาใจดี)'),'',1);

$pdf->Cell(28);
$pdf->Cell(42,$line_space,iconv("UTF-8", "TIS-620",'(..................................................)'),'',0);
$pdf->Cell(50);
$pdf->Cell(30,$line_space,iconv("UTF-8", "TIS-620",'หัวหน้างานทะเบียนนิสิตและประมวลผล)'),'',1);

$pdf->Cell(27);
$pdf->Cell(50,$line_space+1,iconv("UTF-8", "TIS-620",'................/..................../...............'),0,1);



$pdf->Cell(95,$line_space,iconv("UTF-8", "TIS-620",'3.  ความเห็นของคณบดีที่นิสิตสังกัด'),'T',0);
$pdf->Cell(95,$line_space,iconv("UTF-8", "TIS-620",'5.  คำสั่งมหาวิทยาลัยนเรศวร'),'T',1);

$pdf->Cell(95,$line_space+1,iconv("UTF-8", "TIS-620",'................................................................................................................'),'',1);
$pdf->Cell(95,$line_space+1,iconv("UTF-8", "TIS-620",'................................................................................................................'),'',0);
$pdf->Cell(42,$line_space,iconv("UTF-8", "TIS-620",''),'',1);
$pdf->Cell(95,$line_space+1,iconv("UTF-8", "TIS-620",''),'',1);

$pdf->Cell(42);
$pdf->Cell(42,$line_space,iconv("UTF-8", "TIS-620",'ลงนาม..............................................'),'',0);
$pdf->Cell(40);
$pdf->Cell(42,$line_space,iconv("UTF-8", "TIS-620",'(นางสาวจรวยพร    สุดสวาสดิ์)'),'',1);

$pdf->Cell(50);
$pdf->Cell(42,$line_space,iconv("UTF-8", "TIS-620",'(.........................................)'),'',0);
$pdf->Cell(20);
$pdf->Cell(42,$line_space,iconv("UTF-8", "TIS-620",'ผู้อำนวยการกองบริการการศึกษา ปฏิบัติราชการแทน'),'',1);

$pdf->Cell(48);
$pdf->Cell(42,$line_space,iconv("UTF-8", "TIS-620",'............./................./................'),'',0);
$pdf->Cell(35);
$pdf->Cell(42,$line_space,iconv("UTF-8", "TIS-620",'อธิการบดีมหาวิทยาลับนเรศวร'),'',1);

$pdf->SetFont('THSarabun','',12);
$pdf->Cell(42,$line_space-3,iconv("UTF-8", "TIS-620",''),'',1);
$pdf->Cell(95,$line_space,iconv("UTF-8", "TIS-620",'6.   สำหรับเจ้าหน้าที่งานทะเบียนฯ (กบศ.)'),'',0);

$pdf->SetXY(19,252);
$pdf->Cell(42,$line_space+2,iconv("UTF-8", "TIS-620",'เพื่อโปรดทราบ'),'',0);

$pdf->SetXY(19,258);
$pdf->Cell(42,$line_space+2,iconv("UTF-8", "TIS-620",'เพื่อโปรดดำเนินการต่อไป'),'',0);

$pdf->SetXY(19,265);
$pdf->Cell(42,$line_space+2,iconv("UTF-8", "TIS-620",'เพื่อเก็บไว้เป็นหลักฐาน'),'',0);

$pdf->SetXY(19,272);
$pdf->Cell(42,$line_space,iconv("UTF-8", "TIS-620",'อื่น ๆ...................................................'),'',1);

$pdf->SetFont('THSarabun','',12);
$pdf->Cell(42,$line_space,iconv("UTF-8", "TIS-620",''),'',1);

$pdf->Cell(40);
$pdf->Cell(42,$line_space,iconv("UTF-8", "TIS-620",'ลงนาม..............................................'),'',1);

$pdf->Cell(46);
$pdf->Cell(42,$line_space,iconv("UTF-8", "TIS-620",'............./................./................'),'',1);



$pdf->SetFont('THSarabun','',34);

$pdf->SetXY(109,205);
$pdf->Cell(145,$line_space,iconv("UTF-8", "TIS-620",'o'),0,1,'');

$pdf->SetXY(109,211);
$pdf->Cell(145,$line_space,iconv("UTF-8", "TIS-620",'o'),0,1,'');

$pdf->SetFont('THSarabun','',12);
$pdf->SetXY(115,206);
$pdf->Cell(145,$line_space,iconv("UTF-8", "TIS-620",'เห็นชอบและดำเนินการต่อไป'),0,1,'');
$pdf->SetXY(116,213);
$pdf->Cell(145,$line_space,iconv("UTF-8", "TIS-620",'ไม่เห็นชอบ เนื่องจาก........................................................'),0,1,'');

$pdf->SetFont('THSarabun','',34);
$pdf->SetXY(12,252);
$pdf->Cell(145,$line_space,iconv("UTF-8", "TIS-620",'o'),0,1,'');

$pdf->SetXY(12,258);
$pdf->Cell(145,$line_space,iconv("UTF-8", "TIS-620",'o'),0,1,'');

$pdf->SetXY(12,264);
$pdf->Cell(145,$line_space,iconv("UTF-8", "TIS-620",'o'),0,1,'');

$pdf->SetXY(12,270);
$pdf->Cell(145,$line_space,iconv("UTF-8", "TIS-620",'o'),0,1,'');

//เอกสาร
$pdf->SetXY(50,71);
$pdf->Cell(5,5,'',1,0);
$pdf->SetXY(50,78);
$pdf->Cell(5,5,'',1,0);






$pdf->SetFont('THSarabun','',12);

//วันที่
$pdf->setxy(155,18);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$day),0,0);

$pdf->setxy(169,18);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$month),0,0);

$pdf->setxy(192,18);
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
$pdf->setxy(80,48);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$name),0,0);

$pdf->setxy(22,55);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$faculty),0,0);

$pdf->setxy(65,55);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$Major),0,0);

$pdf->setxy(129,55);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$num),0,0);

$pdf->setxy(165,55);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$mail),0,0);

$pdf->setxy(70,62);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$drop),0,0);

$pdf->setxy(113,62);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$many),0,0);

$pdf->setxy(136,62);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$when),0,0);

$pdf->setxy(168,62);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$many1),0,0);

$pdf->setxy(193,62);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$when1),0,0);

$pdf->setxy(105,69);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$text1),0,0);

$pdf->setxy(90,76);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$text2),0,0);

$pdf->setxy(184,69);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$datenow),0,0);


$line_space = 7;

$max_chars_per_line = 115;

$becuase_tis620 = iconv('UTF-8', 'TIS-620', $report);

$lines = str_split($becuase_tis620, $max_chars_per_line);

$pdf->setXY(27, 86); // กำหนดตำแหน่งแนวนอน X เป็น 20 และตำแหน่งแนวตั้ง Y เป็น 40

foreach ($lines as $key => $line) {
    if ($key === 0) {
        $pdf->Cell(0, 0, $line, 0, 1);
    } else {
        $pdf->setXY(15, $pdf->GetY() + $line_space);
        $pdf->MultiCell(0, 0, $line, 0, 'L');
    }
}

$pdf->SetFont('THSarabun','',14);

//วันที่
$pdf->setxy(145,127);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$day),0,0);

$pdf->setxy(156,127);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$month),0,0);

$pdf->setxy(177,127);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$year1),0,0);


$pdf->Output();
}else{ echo('ไม่มีข้อมูล');}

?>
