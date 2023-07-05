<?php
if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "fmadd")) {
require_once("inc/func.php");
$name = stripslashes($_POST["name"]);	
$depart = stripslashes($_POST["depart"]);

$date = stripslashes($_POST["datenow"]);
list($day, $month, $year) = Day_show_list($date);

$term = $_POST["term"];
$year1 = $_POST["year"];
$id1 = $_POST["id1"];
$id2 = $_POST["id2"];
$id3 = $_POST["id3"];
$id4 = $_POST["id4"];
$id5 = $_POST["id5"];
$id6 = $_POST["id6"];
$id7 = $_POST["id7"];
$id8 = $_POST["id8"];
$faculty = $_POST["faculty"];
$faculty_old = $_POST["faculty_old"];
$Major = $_POST["Major"];
$Major_old = $_POST["Major_old"];
$num = $_POST["num"];
$mail = $_POST["mail"];
$university = $_POST["university"];

//ลำดับ 1

$id_old1 = $_POST["id_old"];
$id_new = $_POST["id_new"];
$Credit1_old = $_POST["Credit1_old"];
$Credit2_old = $_POST["Credit2_old"];
$Credit3_old = $_POST["Credit3_old"];
// $Credit4_old = $_POST["Credit4_old"];
$grade_old = $_POST["grade_old"];
$Credit1 = $_POST["Credit1"];
$Credit2 = $_POST["Credit2"];
$Credit3 = $_POST["Credit3"];
// $Credit4 = $_POST["Credit4"];
$grade = $_POST["grade"];

//ลำดับ2
$id_old2 = $_POST["2id_old"];
$id_new2 = $_POST["2id_new"];
$Credit1_old2 = $_POST["2Credit1_old"];
$Credit2_old2 = $_POST["2Credit2_old"];
$Credit3_old2 = $_POST["2Credit3_old"];
// $Credit4_old2 = $_POST["2Credit4_old"];
$grade_old2 = $_POST["2grade_old"];
$Credit12 = $_POST["2Credit1"];
$Credit22 = $_POST["2Credit2"];
$Credit32 = $_POST["2Credit3"];
// $Credit42 = $_POST["2Credit4"];
$grade2 = $_POST["2grade"];

//ลำดับ3
$id_old3 = $_POST["3id_old"];
$id_new3 = $_POST["3id_new"];
$Credit1_old3 = $_POST["3Credit1_old"];
$Credit2_old3 = $_POST["3Credit2_old"];
$Credit3_old3 = $_POST["3Credit3_old"];
// $Credit4_old3 = $_POST["3Credit4_old"];
$grade_old3 = $_POST["3grade_old"];
$Credit13 = $_POST["3Credit1"];
$Credit23 = $_POST["3Credit2"];
$Credit33 = $_POST["3Credit3"];
// $Credit43 = $_POST["3Credit4"];
$grade3 = $_POST["3grade"];

//ลำดับ4
$id_old4 = $_POST["4id_old"];
$id_new4 = $_POST["4id_new"];
$Credit1_old4 = $_POST["4Credit1_old"];
$Credit2_old4 = $_POST["4Credit2_old"];
$Credit3_old4 = $_POST["4Credit3_old"];
// $Credit4_old4 = $_POST["4Credit4_old"];
$grade_old4 = $_POST["4grade_old"];
$Credit14 = $_POST["4Credit1"];
$Credit24 = $_POST["4Credit2"];
$Credit34 = $_POST["4Credit3"];
// $Credit44 = $_POST["4Credit4"];
$grade4 = $_POST["4grade"];

//ลำดับ5
$id_old5 = $_POST["5id_old"];
$id_new5 = $_POST["5id_new"];
$Credit1_old5 = $_POST["5Credit1_old"];
$Credit2_old5 = $_POST["5Credit2_old"];
$Credit3_old5 = $_POST["5Credit3_old"];
// $Credit4_old5 = $_POST["5Credit4_old"];
$grade_old5 = $_POST["5grade_old"];
$Credit15 = $_POST["5Credit1"];
$Credit25 = $_POST["5Credit2"];
$Credit35 = $_POST["5Credit3"];
// $Credit45 = $_POST["5Credit4"];
$grade5 = $_POST["5grade"];

//ลำดับ6
$id_old6 = $_POST["6id_old"];
$id_new6 = $_POST["6id_new"];
$Credit1_old6 = $_POST["6Credit1_old"];
$Credit2_old6 = $_POST["6Credit2_old"];
$Credit3_old6 = $_POST["6Credit3_old"];
// $Credit4_old6 = $_POST["6Credit4_old"];
$grade_old6 = $_POST["6grade_old"];
$Credit16 = $_POST["6Credit1"];
$Credit26 = $_POST["6Credit2"];
$Credit36 = $_POST["6Credit3"];
// $Credit46 = $_POST["6Credit4"];
$grade6 = $_POST["6grade"];

//ลำดับ7
$id_old7 = $_POST["7id_old"];
$id_new7 = $_POST["7id_new"];
$Credit1_old7 = $_POST["7Credit1_old"];
$Credit2_old7 = $_POST["7Credit2_old"];
$Credit3_old7 = $_POST["7Credit3_old"];
// $Credit4_old7 = $_POST["7Credit4_old"];
$grade_old7 = $_POST["7grade_old"];
$Credit17 = $_POST["7Credit1"];
$Credit27 = $_POST["7Credit2"];
$Credit37 = $_POST["7Credit3"];
// $Credit47 = $_POST["7Credit4"];
$grade7 = $_POST["7grade"];



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
$pdf->Cell(5,$line_space-4,iconv("UTF-8", "TIS-620",'NU14'),0,1,'c');

$pdf->SetFont('THSarabun','',12);
$pdf->SetXY(175,9);
$pdf->Cell(10,$line_space-4,iconv("UTF-8", "TIS-620",'ปรับปรุงครั้งที่ 1-2013'),0,1,'c');

$pdf->SetFont('THSarabun','B',18);
$pdf->Cell(78);
$pdf->Cell(55,$line_space,iconv("UTF-8", "TIS-620",'มหาวิทยาลัยนเรศวร'),0,1,'c');

$pdf->Cell(71);
$pdf->Cell(55,$line_space,iconv("UTF-8", "TIS-620",'คำร้องขอเทียบโอนรายวิชา'),0,0);

$pdf->SetFont('THSarabun','',12);
$pdf->Cell(20);
$pdf->Cell(55,$line_space,iconv("UTF-8", "TIS-620",'วันที่......... เดือน.....................พ.ศ.................'),0,1,'c');

$pdf->Cell(65);
$pdf->Cell(60,$line_space+2,iconv("UTF-8", "TIS-620",'ภาคการศึกษา.................... ปีการศึกษา....................'),0,0);
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
$pdf->Cell(50,$line_space,iconv("UTF-8", "TIS-620",'รหัสประจำตัวนิสิต'),0,0);

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

$pdf->setfont('','B','12');
$pdf->Cell(4);
$pdf->Cell(50,$line_space,iconv("UTF-8", "TIS-620",'เรียน     อธิการบดี'),0,1);

$pdf->setfont('','','12');
$pdf->Cell(17);
$pdf->Cell(50,$line_space,iconv("UTF-8", "TIS-620",'1.       ข้าพเจ้า(นาย/นาง/นางสาว)......................................................................................................................................................................................................................................'),0,1);
$pdf->Cell(4);
$pdf->Cell(50,$line_space,iconv("UTF-8", "TIS-620",'คณะ.........................................................................สาขาวิชา...........................................................โทร...........................................E-mail.............................................................'),0,1);
$pdf->Cell(4);
$pdf->Cell(50,$line_space,iconv("UTF-8", "TIS-620",'เคยศึกษาระดับ.................................... คณะ...........................................................................................................สาขาวิชา....................................................................................'),0,1);

$pdf->Cell(4);
$pdf->Cell(50,$line_space,iconv("UTF-8", "TIS-620",'มหาวิทยาลัย/สถาบัน....................................................................................................มีความประสงค์จะขอเทียบโอนรายวิชา ดังรายละเอียดต่อไปนี้'),0,1);

//เส้นกรอบรายระเอียดเทียบโอนรายวิชา
//('เซ้นซ้ายสุด','เส้นบนสุด','เส้นหลังสุด','ความห่างของเส้นบนสุดและล่างสุด')
$pdf->SetLineWidth(0.1);
$pdf->Rect(14,65,185,65);

//เส้นแบ่งลำดับที่/รหัสวิชา
$pdf->SetLineWidth(0.1);
$pdf->Rect(25,65,0,65);

//เส้นแบ่งรหัสวิชา / หน่วยกิต
$pdf->SetLineWidth(0.1);
$pdf->Rect(85,65,0,65);

//เส้นแบ่งหน่วยกิต/เกรด
$pdf->SetLineWidth(0.1);
$pdf->Rect(97,65,0,65);

//เส้นแบ่งเกรด/รหัสวิชา หลัง 
$pdf->SetLineWidth(0.1);
$pdf->Rect(110,65,0,65);

//เส้นแบ่งรหัสวิชา หลัง /หน่วยกิต หลัง
$pdf->SetLineWidth(0.1);
$pdf->Rect(170,65,0,65);

//เส้นแบ่งหน่วยกิต หลัง /เกรด หลัง
$pdf->SetLineWidth(0.1);
$pdf->Rect(184,65,0,65);

//เส้นแกน x เส้น 2
$pdf->SetLineWidth(0.1);
$pdf->Rect(14,65,185,0);

//เส้นแกน x เส้น 3
$pdf->SetLineWidth(0.1);
$pdf->Rect(14,74,185,0);

//เส้นแกน x เส้น 4
$pdf->SetLineWidth(0.1);
$pdf->Rect(14,82,185,0);

//เส้นแกน x เส้น 5
$pdf->SetLineWidth(0.1);
$pdf->Rect(14,90,185,0);

//เส้นแกน x เส้น 6
$pdf->SetLineWidth(0.1);
$pdf->Rect(14,98,185,0);

//เส้นแกน x เส้น 7
$pdf->SetLineWidth(0.1);
$pdf->Rect(14,106,185,0);

//เส้นแกน x เส้น 8
$pdf->SetLineWidth(0.1);
$pdf->Rect(14,114,185,0);

//เส้นแกน x เส้น 9
$pdf->SetLineWidth(0.1);
$pdf->Rect(14,122,185,0);

$pdf->setfont('','B','12');
$pdf->Cell(4);
$pdf->Cell(50,$line_space-1,iconv("UTF-8", "TIS-620",' ลำดับที่   รหัสวิชา/ชื่อวิชาที่เคยศึกษามาแล้ว (ภาษาอังกฤษ)  หน่วยกิต  เกรดที่ได้              รหัสวิชา/ชื่อวิชาที่ขอเทียบโอน               หน่วยกิต    เกรดที่ได้'),0,1);

$pdf->setfont('','','12');
$pdf->Cell(4);
$pdf->Cell(50,$line_space-2,iconv("UTF-8", "TIS-620",'     -       001103 Thai Language Skills (ตัวอย่าง)                3(3-0)         B       001103 Thai Language Skills (ตัวอย่าง)                 3(3-0)           B'),0,1);

$pdf->Cell(50,$line_space-2,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(50,$line_space-2,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(50,$line_space-2,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(50,$line_space-2,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(50,$line_space-2,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(50,$line_space-2,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(50,$line_space-2,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(50,$line_space-2,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(50,$line_space-2,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(50,$line_space-2,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(50,$line_space-2,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(50,$line_space-2,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(50,$line_space-2,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(50,$line_space-2,iconv("UTF-8", "TIS-620",''),0,1);

$pdf->setfont('','BU','12');
$pdf->cell(5);
$pdf->Cell(10,$line_space,iconv("UTF-8", "TIS-620",'พร้อมนี้ได้แนบ'),0,0);

$pdf->setfont('','','12');
$pdf->cell(10);
$pdf->Cell(10,$line_space,iconv("UTF-8", "TIS-620",'1. ใบแสดงผลการเรียน แสดงรายวิชาที่ประสงค์จะขอเทียบโอน'),0,1);

$pdf->cell(25);
$pdf->Cell(10,$line_space,iconv("UTF-8", "TIS-620",'2. คำอธิบายรายวิชาที่ประสงค์จะขอเทียบโอน (เฉพาะนิสิตที่เคยศึกษาระดับปริญญาตรีจากมหาลัย/สถาบันอื่น)'),0,1);

$pdf->Cell(50,$line_space-2,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(50,$line_space-2,iconv("UTF-8", "TIS-620",''),0,1);

$pdf->Cell(112);
$pdf->Cell(50,$line_space,iconv("UTF-8", "TIS-620",'นิสิตลงนาม........................................................'),0,1);
$pdf->Cell(125);
$pdf->Cell(50,$line_space-3,iconv("UTF-8", "TIS-620",'.........../............................../...........'),0,1);
$pdf->Cell(50,$line_space-2,iconv("UTF-8", "TIS-620",''),0,1);

//เส้นกรอบ
$pdf->SetLineWidth(0.2);
$pdf->Rect(9,160,190,132);

//เส้นแกน x 
$pdf->SetLineWidth(0.1);
$pdf->Rect(9,198,190,0);

//เส้นแกน x 
$pdf->SetLineWidth(0.1);
$pdf->Rect(9,240,190,0);

//เส้นแกน Y
$pdf->SetLineWidth(0.1);
$pdf->Rect(104,160,0,132);

//ช้อมูลในกรอบ
$pdf->setfont('','B','12');
$pdf->Cell(95,$line_space-3,iconv("UTF-8", "TIS-620",'2.  ความเห็นของอาจารย์ที่ปรึกษา'),'',0);
$pdf->Cell(95,$line_space-3,iconv("UTF-8", "TIS-620",'4.  ความเห็นของคณบดีเจ้าของสาขาวิชาหรือหลักสูตร'),'',1);

$pdf->setfont('','','12');
$pdf->Cell(95,$line_space+1,iconv("UTF-8", "TIS-620",'.......................................................................................................................................'),'',0);
$pdf->Cell(95,$line_space+1,iconv("UTF-8", "TIS-620",'.......................................................................................................................................'),'',1);
$pdf->Cell(95,$line_space+1,iconv("UTF-8", "TIS-620",'.......................................................................................................................................'),'',0);
$pdf->Cell(95,$line_space+1,iconv("UTF-8", "TIS-620",'.......................................................................................................................................'),'',1);

$pdf->Cell(95,$line_space,iconv("UTF-8", "TIS-620",''),'',1);
$pdf->Cell(45);
$pdf->Cell(50,$line_space,iconv("UTF-8", "TIS-620",'ลงนาม.........................................................'),'',0);

$pdf->cell(40);
$pdf->Cell(50,$line_space,iconv("UTF-8", "TIS-620",'ลงนาม.........................................................'),'',0);
$pdf->Cell(53);
$pdf->Cell(42,$line_space,iconv("UTF-8", "TIS-620",'(..................................................)'),'',1);
$pdf->Cell(55);
$pdf->Cell(10,$line_space,iconv("UTF-8", "TIS-620",'................/..................../............'),'0',0);
$pdf->Cell(80);
$pdf->Cell(10,$line_space+1,iconv("UTF-8", "TIS-620",'................/..................../............'),0,1);


$pdf->setfont('','B','12');
$pdf->Cell(95,$line_space,iconv("UTF-8", "TIS-620",'3.  ความเห็นของคณบดีที่นิสิตสังกัด'),'',0);
$pdf->Cell(95,$line_space,iconv("UTF-8", "TIS-620",'5.  ความเห็นของงานทะเบียนฯ'),'',1);

$pdf->setfont('','','12');
$pdf->Cell(95,$line_space+1,iconv("UTF-8", "TIS-620",'.......................................................................................................................................'),'',0);
$pdf->Cell(95,$line_space+1,iconv("UTF-8", "TIS-620",'.......................................................................................................................................'),'',1);
$pdf->Cell(95,$line_space+1,iconv("UTF-8", "TIS-620",'.......................................................................................................................................'),'',0);
$pdf->Cell(95,$line_space+1,iconv("UTF-8", "TIS-620",'.......................................................................................................................................'),'',1);


$pdf->Cell(42);
$pdf->Cell(42,$line_space,iconv("UTF-8", "TIS-620",'ลงนาม..............................................'),'',0);
$pdf->Cell(45);
$pdf->Cell(42,$line_space,iconv("UTF-8", "TIS-620",'(นางวาสนา   พาใจดี)'),'',1);

$pdf->Cell(55);
$pdf->Cell(42,$line_space,iconv("UTF-8", "TIS-620",'(.........................................)'),'',0);
$pdf->Cell(22);
$pdf->Cell(42,$line_space,iconv("UTF-8", "TIS-620",'หัวหน้างานทะเบียนนิสิตและประมวลผล'),'',1);

$pdf->Cell(48);
$pdf->Cell(42,$line_space,iconv("UTF-8", "TIS-620",'............./................./................'),'',0);
$pdf->Cell(35);
$pdf->Cell(42,$line_space,iconv("UTF-8", "TIS-620",''),'',1);

$pdf->Cell(42,$line_space-3,iconv("UTF-8", "TIS-620",''),'',1);

$pdf->setfont('','B','12');
$pdf->Cell(95,$line_space,iconv("UTF-8", "TIS-620",'6. คำสั่งมหาวิทยาลัยนเรศวร'),'',0);

$pdf->Cell(95,$line_space,iconv("UTF-8", "TIS-620",'7. สำหรับเจ้าหน้าที่งานทะเบียนฯ (กบศ.)'),'',0);

$pdf->setfont('','','12');
$pdf->SetXY(14,246);
$pdf->Cell(3,3,'',1,0);
$pdf->SetXY(19,244);
$pdf->Cell(42,$line_space,iconv("UTF-8", "TIS-620",'อนุมัติ'),'',0);


$pdf->SetXY(14,251);
$pdf->Cell(3,3,'',1,0);
$pdf->SetXY(19,249);
$pdf->Cell(42,$line_space,iconv("UTF-8", "TIS-620",'ไม่อนุมัติ   เนื่องจาก..................................................'),'',1);

$pdf->SetXY(110,246);
$pdf->Cell(3,3,'',1,0);
$pdf->SetXY(113,244);
$pdf->Cell(42,$line_space,iconv("UTF-8", "TIS-620",'เพื่อโปรดทราบ'),'',0);

$pdf->SetXY(110,251);
$pdf->Cell(3,3,'',1,0);
$pdf->SetXY(113,249);
$pdf->Cell(42,$line_space,iconv("UTF-8", "TIS-620",'เพื่อโปรดดำเนินการต่อไป'),'',0);

$pdf->SetXY(110,256);
$pdf->Cell(3,3,'',1,0);
$pdf->SetXY(113,254);
$pdf->Cell(42,$line_space,iconv("UTF-8", "TIS-620",'เพื่อเก็บไว้เป็นหลักฐาน'),'',0);

$pdf->SetXY(110,261);
$pdf->Cell(3,3,'',1,0);
$pdf->SetXY(113,259);
$pdf->Cell(42,$line_space,iconv("UTF-8", "TIS-620",'อื่น ๆ...................................................'),'',1);
$pdf->Cell(42,$line_space,iconv("UTF-8", "TIS-620",''),'',1);

$pdf->Cell(30);
$pdf->Cell(42,$line_space,iconv("UTF-8", "TIS-620",'(นางสาวจรวยพร   สุดสวาสดิ์)'),'',1);

$pdf->Cell(17);
$pdf->Cell(42,$line_space,iconv("UTF-8", "TIS-620",'ผู้อำนวยการกองบริการการศึกษา   ปฏิบัติราชการแทน'),'',0);

$pdf->Cell(80);
$pdf->Cell(42,$line_space,iconv("UTF-8", "TIS-620",'ลงนาม..............................................'),'',1);

$pdf->Cell(30);
$pdf->Cell(42,$line_space,iconv("UTF-8", "TIS-620",'อธิการบดีมหาวิทยาลัยนเรศวร'),'',0);

$pdf->Cell(73);
$pdf->Cell(42,$line_space,iconv("UTF-8", "TIS-620",'............./................./................'),'',1);


$pdf->SetFont('THSarabun','',12);
$pdf->SetY(63);
$pdf->MultiCell(195,$line_space,iconv("UTF-8", "TIS-620",''),0,'L');




// วันที่
$pdf->setxy(118,16.5);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$day),0,0,'C');

$pdf->setxy(134,16.5);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$month),0,0,'C');

$pdf->setxy(152,16.5);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$year),0,0,'C');

// $pdf->setxy(137,16.5);
// $pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$datenow),0,0,'C');

//ภาคการศึกษา
$pdf->setxy(50,23.5);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$term),0,0,'C');

$pdf->setxy(78,23.5);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$year1),0,0,'C');

//รหัสนิสิต
$pdf->SetFont('THSarabun','',14);
$pdf->setxy(123,29);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$id1),0,0,'C');
$pdf->setxy(128,29);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$id2),0,0,'C');
$pdf->setxy(133,29);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$id3),0,0,'C');
$pdf->setxy(139,29);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$id4),0,0,'C');
$pdf->setxy(144,29);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$id5),0,0,'C');
$pdf->setxy(149,29);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$id6),0,0,'C');
$pdf->setxy(154,29);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$id7),0,0,'C');
$pdf->setxy(159,29);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$id8),0,0,'C');

$pdf->SetFont('THSarabun','',12);
$pdf->setxy(38,40);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$name),0,0,'C');

$pdf->setxy(20,46);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$faculty),0,0);

$pdf->setxy(80,46);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$Major),0,0);

$pdf->setxy(125,46);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$num),0,0);

$pdf->setxy(163,46);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$mail),0,0);

$pdf->setxy(32,52);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$depart),0,0);

$pdf->setxy(65,52);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$faculty_old),0,0);

$pdf->setxy(147,52);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$Major_old),0,0);

$pdf->setxy(42,58);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$university),0,0);

//ลำดับที่1
$pdf->setxy(25,75);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$id_old1),0,0);

$pdf->setxy(102,75);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$grade_old),0,0);

$pdf->setxy(109.5,75);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$id_new),0,0);

$pdf->setxy(189,75);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$grade),0,0);

//หน่วยกิต
$pdf->setxy(85,75);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$Credit1_old ),0,0);

$pdf->setxy(88,75);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$Credit2_old ),0,0);

$pdf->setxy(91,75);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$Credit3_old ),0,0);

$pdf->setxy(170,75);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$Credit1),0,0);

$pdf->setxy(174,75);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$Credit2),0,0);

$pdf->setxy(178,75);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$Credit3),0,0);





//ลำดับที่2
$pdf->setxy(25,83);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$id_old2),0,0);

$pdf->setxy(102,83);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$grade_old2),0,0);

$pdf->setxy(109.5,83);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$id_new2),0,0);

$pdf->setxy(189,83);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$grade2),0,0);

//หน่วยกิต
$pdf->setxy(85,83);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$Credit1_old2 ),0,0);

$pdf->setxy(88,83);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$Credit2_old2 ),0,0);

$pdf->setxy(91,83);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$Credit3_old2 ),0,0);

$pdf->setxy(170,83);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$Credit12),0,0);

$pdf->setxy(174,83);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$Credit22),0,0);

$pdf->setxy(178,83);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$Credit32),0,0);


//ลำดับที่3
$pdf->setxy(25,91);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$id_old3),0,0);

$pdf->setxy(102,91);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$grade_old3),0,0);

$pdf->setxy(109.5,91);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$id_new3),0,0);

$pdf->setxy(189,91);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$grade3),0,0);

//หน่วยกิต
$pdf->setxy(85,91);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$Credit1_old3 ),0,0);

$pdf->setxy(88,91);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$Credit2_old3 ),0,0);

$pdf->setxy(91,91);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$Credit3_old3 ),0,0);

$pdf->setxy(170,91);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$Credit13),0,0);

$pdf->setxy(174,91);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$Credit23),0,0);

$pdf->setxy(178,91);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$Credit33),0,0);


//ลำดับที่4
$pdf->setxy(25,99);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$id_old4),0,0);

$pdf->setxy(102,99);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$grade_old4),0,0);

$pdf->setxy(109.5,99);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$id_new4),0,0);

$pdf->setxy(189,99);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$grade4),0,0);

//หน่วยกิต
$pdf->setxy(85,99);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$Credit1_old4 ),0,0);

$pdf->setxy(88,99);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$Credit2_old4 ),0,0);

$pdf->setxy(91,99);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$Credit3_old4 ),0,0);

$pdf->setxy(170,99);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$Credit14),0,0);

$pdf->setxy(174,99);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$Credit24),0,0);

$pdf->setxy(178,99);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$Credit34),0,0);


//ลำดับที่5
$pdf->setxy(25,107);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$id_old5),0,0);

$pdf->setxy(102,107);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$grade_old5),0,0);

$pdf->setxy(109.5,107);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$id_new5),0,0);

$pdf->setxy(189,107);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$grade5),0,0);

//หน่วยกิต
$pdf->setxy(85,107);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$Credit1_old5 ),0,0);

$pdf->setxy(88,107);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$Credit2_old5 ),0,0);

$pdf->setxy(91,107);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$Credit3_old5),0,0);

$pdf->setxy(170,107);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$Credit15),0,0);

$pdf->setxy(174,107);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$Credit25),0,0);

$pdf->setxy(178,107);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$Credit35),0,0);



//ลำดับที่6
$pdf->setxy(25,115);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$id_old6),0,0);

$pdf->setxy(102,115);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$grade_old6),0,0);

$pdf->setxy(109.5,115);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$id_new6),0,0);

$pdf->setxy(189,115);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$grade6),0,0);

//หน่วยกิต
$pdf->setxy(85,115);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$Credit1_old6 ),0,0);

$pdf->setxy(88,115);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$Credit2_old6 ),0,0);

$pdf->setxy(91,115);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$Credit3_old6 ),0,0);

$pdf->setxy(170,115);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$Credit16),0,0);

$pdf->setxy(174,115);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$Credit26),0,0);

$pdf->setxy(178,115);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$Credit36),0,0);


//ลำดับที่7
$pdf->setxy(25,123);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$id_old7),0,0);

$pdf->setxy(102,123);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$grade_old7),0,0);

$pdf->setxy(109.5,123);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$id_new7),0,0);

$pdf->setxy(189,123);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$grade7),0,0);

//หน่วยกิต
$pdf->setxy(85,123);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$Credit1_old7 ),0,0);

$pdf->setxy(88,123);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$Credit2_old7 ),0,0);

$pdf->setxy(91,123);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$Credit3_old7),0,0);

$pdf->setxy(170,123);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$Credit17),0,0);

$pdf->setxy(174,123);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$Credit27),0,0);

$pdf->setxy(178,123);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$Credit37),0,0);


//เลขลำดับที่
$pdf->setxy(17,75);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",'1' ),0,0);
$pdf->setxy(17,83);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",'2' ),0,0);
$pdf->setxy(17,91);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",'3' ),0,0);
$pdf->setxy(17,99);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",'4' ),0,0);
$pdf->setxy(17,107);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",'5' ),0,0);
$pdf->setxy(17,115);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",'6' ),0,0);
$pdf->setxy(17,123);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",'7' ),0,0);

// $pdf->setxy(110,153);
// $pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$datenow),0,0,'C');

$pdf->setxy(93,154);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$day),0,0,'C');

$pdf->setxy(105,154);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$month),0,0,'C');

$pdf->setxy(123,154);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$year),0,0,'C');

$pdf->Output();
}else{ echo('ไม่มีข้อมูล');}

?>
