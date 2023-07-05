<?php
if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "fmadd")) {
require_once("inc/func.php");
$name = stripslashes($_POST["name"]);	
$date = stripslashes($_POST["datenow"]);
list($day, $month, $year1) = Day_show_list($date);

$ids = stripslashes($_POST["ids"]);
$name_E = stripslashes($_POST["name_E"]);
$num = stripslashes($_POST["num"]);

$date2 = stripslashes($_POST["datenow1"]);
list($day2, $month2, $year2) = Day_show_list($date2);

$nationality1 = stripslashes($_POST["nationality1"]);
$religion1 = stripslashes($_POST["religion1"]);
$province1 = stripslashes($_POST["province1"]);

$faculty = $_POST["faculty"];
$Major = $_POST["Major"];
$year = $_POST["year"];
$course = $_POST["course"];
$graduated = $_POST["graduated"];
$GPA = $_POST["GPA"];

$wish1 = $_POST["wish1"];
$wish2 = $_POST["wish2"];
$wish3 = $_POST["wish3"];
$wish4 = $_POST["wish4"];
$wish5 = $_POST["wish5"];
$wish61 = $_POST["wish61"];
$wish62 = $_POST["wish62"];
$wish7 = $_POST["wish7"];
$wish8 = $_POST["wish8"];
$wish9 = $_POST["wish9"];

$name1 = $_POST["name1"];
$address1 = $_POST["address"];


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
$pdf->Cell(5,$line_space-4,iconv("UTF-8", "TIS-620",'NU21'),0,1,'c');

$pdf->SetFont('THSarabun','',12);
$pdf->SetXY(175,9);
$pdf->Cell(10,$line_space-4,iconv("UTF-8", "TIS-620",'ปรับปรุงครั้งที่ 1-2018'),0,1,'c');

$pdf->SetFont('THSarabun','B',20);
$pdf->Cell(67);
$pdf->Cell(55,$line_space+1,iconv("UTF-8", "TIS-620",'มหาวิทยาลัยนเรศวร'),0,1,'c');

$pdf->Cell(55,$line_space+1,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(68);
$pdf->Cell(55,$line_space+1,iconv("UTF-8", "TIS-620",'คำร้องขอใบรับรอง'),0,0);

$pdf->SetFont('THSarabun','',12);
$pdf->Cell(22);
$pdf->Cell(55,$line_space+1,iconv("UTF-8", "TIS-620",'วันที่............ เดือน.......................พ.ศ............'),0,1,'c');

$pdf->Cell(55,$line_space+1,iconv("UTF-8", "TIS-620",''),0,1,'c');$pdf->Cell(55,$line_space+1,iconv("UTF-8", "TIS-620",''),0,1,'c');

$pdf->SetFont('THSarabun','',16);
$pdf->Cell(4);
$pdf->Cell(50,$line_space+1,iconv("UTF-8", "TIS-620",'เรียน     นายทะเบียนมหาวิทยาลัยนเรศวร'),0,1);

$pdf->Cell(35);
$pdf->Cell(50,$line_space+1,iconv("UTF-8", "TIS-620",'ข้าพเจ้า  (นาย/นางสาว/นาง).......................................................................................รหัสนิสิต............................'),0,1);

$pdf->Cell(4);
$pdf->Cell(50,$line_space+1,iconv("UTF-8", "TIS-620",'ชื่อ-นามสกุล(ภาษาอังกฤษ) MR./MRS./Miss...............................................................................โทร.....................................................'),0,1);

$pdf->Cell(4);
$pdf->Cell(50,$line_space+1,iconv("UTF-8", "TIS-620",'เกิดวันที่.....................เดือน........................พ.ศ....................สัญชาติ...................ศาสนา...................จังหวัดที่เกิด...................................'),0,1);

$pdf->Cell(20);
$pdf->Cell(30,$line_space+4,iconv("UTF-8", "TIS-620",'ปริญญาตรี'),0,0);

$pdf->Cell(2);
$pdf->Cell(30,$line_space+4,iconv("UTF-8", "TIS-620",'ปริญญาโท'),0,0);

$pdf->Cell(2);
$pdf->Cell(60,$line_space+4,iconv("UTF-8", "TIS-620",'ประกาศนียบัตร..........................'),0,0);

$pdf->Cell(2);
$pdf->Cell(30,$line_space+4,iconv("UTF-8", "TIS-620",'ปริญญาเอก'),0,1);

$pdf->Cell(4);
$pdf->Cell(50,$line_space+1,iconv("UTF-8", "TIS-620",'คณะ.................................................................................สาขาวิชา...............................................................................ชั้นปี...................'),0,1);

$pdf->Cell(4);
$pdf->Cell(50,$line_space+1,iconv("UTF-8", "TIS-620",'หลักสูตร.............................................................................................สำเร็จการศึกษาเมื่อ พ.ศ.....................................GPA..................'),0,1);

//ข้อ 1
$pdf->Cell(4);
$pdf->Cell(73,$line_space+1,iconv("UTF-8", "TIS-620",'1. ใบรับรองผลการสอบคัดเลือกเข้าเป็นนิสิตใหม่'),0,);

$pdf->SetFont('THSarabun','BU',16);
$pdf->Cell(85,$line_space+1,iconv("UTF-8", "TIS-620",'(ออกให้เฉพาะปี 1 เท่านั้น)'),0,0);

$pdf->SetFont('THSarabun','',16);
$pdf->Cell(50,$line_space+1,iconv("UTF-8", "TIS-620",'จำนวน.................ฉบับ'),0,1);

//ข้อ 2 
$pdf->Cell(4);
$pdf->Cell(158,$line_space+1,iconv("UTF-8", "TIS-620",'2. ใบรับรองการเป็นนิสิต           (  ) แบบภาษาไทย           (  ) แบบภาษาอังกฤษ'),0,);
$pdf->Cell(50,$line_space+1,iconv("UTF-8", "TIS-620",'จำนวน.................ฉบับ'),0,1);

//ข้อ  3
$pdf->Cell(4);
$pdf->Cell(73,$line_space+1,iconv("UTF-8", "TIS-620",'3. ใบรับรองการเป็นนิสิตแบบฟอร์มของนิสิตเอง'),0,);

$pdf->SetFont('THSarabun','BU',16);
$pdf->Cell(85,$line_space+1,iconv("UTF-8", "TIS-620",'*(ตรวจสอบกับเจ้าหน้าที่ก่อนทุกครั้ง)*'),0,0);

$pdf->SetFont('THSarabun','',16);
$pdf->Cell(50,$line_space+1,iconv("UTF-8", "TIS-620",'จำนวน.................ฉบับ'),0,1);

//ข้อ 4
$pdf->Cell(4);
$pdf->Cell(158,$line_space+1,iconv("UTF-8", "TIS-620",'4. ใบรับรองกำลังเรียนอยู่ภาคเรียนสุดท้าย'),0,);
$pdf->Cell(50,$line_space+1,iconv("UTF-8", "TIS-620",'จำนวน.................ฉบับ'),0,1);

//ข้อ 5
$pdf->Cell(4);
$pdf->Cell(158,$line_space+1,iconv("UTF-8", "TIS-620",'5. ใบรับรองเรียนครบหลักสูตรและกำลังรอฟังผลภาคเรียนสุดท้าย'),0,);
$pdf->Cell(50,$line_space+1,iconv("UTF-8", "TIS-620",'จำนวน.................ฉบับ'),0,1);

//ข้อ 6
$pdf->Cell(4);
$pdf->Cell(90,$line_space+1,iconv("UTF-8", "TIS-620",'6. ใบรับรองอื่นๆ ......................................................................'),0,);

$pdf->SetFont('THSarabun','BU',16);
$pdf->Cell(68,$line_space+1,iconv("UTF-8", "TIS-620",'*(ตรวจสอบกับเจ้าหน้าที่ก่อนทุกครั้ง)*'),0,0);

$pdf->SetFont('THSarabun','',16);
$pdf->Cell(50,$line_space+1,iconv("UTF-8", "TIS-620",'จำนวน.................ฉบับ'),0,1);

//ข้อ 7 
$pdf->Cell(4);
$pdf->Cell(158,$line_space+1,iconv("UTF-8", "TIS-620",'7. ใบแปลปริญญาบัตร                       *(ต้องแนบสำเนาใบปริญญาบัตร ฉบับภาษาไทย)*'),0,);
$pdf->Cell(50,$line_space+1,iconv("UTF-8", "TIS-620",'จำนวน.................ฉบับ'),0,1);

//ข้อ 8
$pdf->Cell(4);
$pdf->Cell(158,$line_space+1,iconv("UTF-8", "TIS-620",'8. ใบแปลใบรับรองคุณวุฒิ                  *(ต้องแนบสำเนาใบรับรองคุณวุฒิ ฉบับภาษาไทย)*'),0,);
$pdf->Cell(50,$line_space+1,iconv("UTF-8", "TIS-620",'จำนวน.................ฉบับ'),0,1);

// ข้อ 9
$pdf->Cell(4);
$pdf->Cell(90,$line_space+1,iconv("UTF-8", "TIS-620",'9. ใบแทนใบรับรองคุณวุฒิ (กรณีฉบับจริงสูญหายหรือชำรุด)'),0,);

$pdf->SetFont('THSarabun','BU',16);
$pdf->Cell(50,$line_space+1,iconv("UTF-8", "TIS-620",'ขอได้จำนวน  1  ฉบับเท่านั้น'),0,0);

$pdf->SetFont('THSarabun','',16);
$pdf->Cell(50,$line_space+1,iconv("UTF-8", "TIS-620",'โดยแนบหลักฐานดังนี้'),0,1);

$pdf->Cell(15);
$pdf->Cell(158,$line_space+1,iconv("UTF-8", "TIS-620",'-   ให้แนบใบแจ้งความกรณีสูญหาย หรือ แนบเอกสารฉบับเดิมที่ชำรุด'),0,1);

$pdf->Cell(15);
$pdf->Cell(88,$line_space+1,iconv("UTF-8", "TIS-620",'-   แนบรูปถ่ายสวมชุดครุยของมหาวิทยาลัย จำนวน 2 รูป'),0,);

$pdf->SetFont('THSarabun','U',16);
$pdf->Cell(50,$line_space+1,iconv("UTF-8", "TIS-620",'ขนาด   2  นิ้วเท่านั้น'),0,1);

$pdf->SetFont('THSarabun','',16);
$pdf->Cell(4);
$pdf->Cell(158,$line_space+1,iconv("UTF-8", "TIS-620",'(  ) นำใบนัดมาขอรับเอกสารทุกครั้ง                 (  ) ฝากส่งทางไปรษณีย์'),0,1);

//เส้นกรอบ
$pdf->SetLineWidth(0.1);
$pdf->Rect(9,185,95,50);
//กรอบเล็ก
$pdf->SetLineWidth(0.08);
$pdf->Rect(10,186,45,11);
//เส้นกรอบเล็ก Y
$pdf->SetLineWidth(0.08);
$pdf->Rect(10,186,22.5,11);
//เส้นกรอบเล็ก X
$pdf->SetLineWidth(0.08);
$pdf->Rect(10,186,45,6);

//ข้อมูลในกรอบเล็ก
$pdf->SetFont('THSarabun','B',12);
$pdf->SetXY(10,185);
$pdf->Cell(158,$line_space+1,iconv("UTF-8", "TIS-620",'แบบลงทะเบียน'),0,1);

$pdf->SetXY(10,191);
$pdf->Cell(158,$line_space+1,iconv("UTF-8", "TIS-620",'แบบ EMS'),0,1);

$pdf->SetXY(40,185);
$pdf->Cell(158,$line_space+1,iconv("UTF-8", "TIS-620",'50.-/ครั้ง'),0,1);

$pdf->SetXY(40,191);
$pdf->Cell(158,$line_space+1,iconv("UTF-8", "TIS-620",'80.-/ครั้ง'),0,1);

$pdf->SetFont('THSarabun','',20);
$pdf->SetXY(35,185);
$pdf->Cell(145,$line_space,iconv("UTF-8", "TIS-620",'o'),0,1,'');

$pdf->SetXY(35,191);
$pdf->Cell(145,$line_space,iconv("UTF-8", "TIS-620",'o'),0,1,'');

$pdf->SetFont('THSarabun','BU',14);
$pdf->SetXY(15,200);
$pdf->Cell(145,$line_space,iconv("UTF-8", "TIS-620",'กรณีขอทางไปรษณีย์  โปรดระบุ ชื่อ-นามสกุล  ที่อยู่ ให้ชัดเจน '),0,0);

$pdf->SetFont('THSarabun','',14);
$pdf->SetXY(12,209);
$pdf->Cell(145,$line_space,iconv("UTF-8", "TIS-620",'ชื่อ-สกุล................................................................................................'),0,1,'');

$pdf->SetXY(12,216);
$pdf->Cell(145,$line_space,iconv("UTF-8", "TIS-620",'ที่อยู่.....................................................................................................'),0,0);

$pdf->SetXY(12,222);
$pdf->Cell(145,$line_space,iconv("UTF-8", "TIS-620",'.............................................................................................................'),0,0);

$pdf->SetXY(12,228);
$pdf->Cell(50,$line_space,iconv("UTF-8", "TIS-620",'.............................................................................................................'),0,0,'');

$pdf->SetFont('','','16');
$pdf->SetXY(120,212);
$pdf->Cell(50,$line_space,iconv("UTF-8", "TIS-620",'ลงชื่อ..........................................................ลงชื่อผู้ขอ'),0,0);

//กรอบล่างสุด
$pdf->SetLineWidth(0.1);
$pdf->Rect(15,240,180,50);
//เส้นแบ่งหัวข้อ
$pdf->SetLineWidth(0.08);
$pdf->Rect(15,250,180,0);
//เส้นกรอบ Y
$pdf->SetLineWidth(0.08);
$pdf->Rect(15,240,90,50);

//หัวข้อตาราง
$pdf->SetFont('THSarabun','BU',14);
$pdf->SetXY(40,243);
$pdf->Cell(145,$line_space,iconv("UTF-8", "TIS-620",'สำหรับเจ้าหน้าที่งานทะเบียน'),0,1,'');

$pdf->SetXY(135,243);
$pdf->Cell(145,$line_space,iconv("UTF-8", "TIS-620",'ขั้นตอนการขอเอกสาร'),0,1,'');

//ข้อมูลตารางซ้าย
$pdf->SetFont('THSarabun','',14);
$pdf->SetXY(17,255);
$pdf->Cell(145,$line_space,iconv("UTF-8", "TIS-620",'ได้รับเงินค่าธรรมเนียม เป็นจำนวนเงิน....................................บาท'),0,1,'');

$pdf->SetXY(50,270);
$pdf->Cell(145,$line_space,iconv("UTF-8", "TIS-620",'ลงชื่อ........................................ผู้รับเงิน'),0,1,'');

//ข้อมูลตารางขวา
$pdf->SetFont('THSarabun','',12);
$pdf->SetXY(107,252);
$pdf->Cell(145,$line_space,iconv("UTF-8", "TIS-620",'1. กรอกข้อมูลให้ครบถ้วน พร้อมชำระค่าธรรมเนียม ฉบับละ 100 บาท'),0,1,'');

$pdf->SetFont('THSarabun','BU',12);
$pdf->SetXY(110,258);
$pdf->Cell(145,$line_space,iconv("UTF-8", "TIS-620",'กรณีเร่งด่วน ฉบับละ 200 บาท ขอได้ที่หน้าเคาท์เตอร์เท่านั้น'),0,1,'');

$pdf->SetFont('THSarabun','',12);
$pdf->SetXY(107,264);
$pdf->Cell(145,$line_space,iconv("UTF-8", "TIS-620",'2. ขอทางไปรษณีย์ โปรดสั่งจ่ายค่าธรรมเนียมเป็นธนาณัติ เท่านั้น'),0,1,'');

$pdf->SetXY(110,270);
$pdf->Cell(145,$line_space,iconv("UTF-8", "TIS-620",'ค่าธรรมเนียม ฉบับละ 100 บาท + ค่าฝากส่งตามตัวเลือกด้านล่าง'),0,1,'');

//กรอบเล็ก
$pdf->SetLineWidth(0.08);
$pdf->Rect(107,278,45,11);
//เส้นกรอบเล็ก Y
$pdf->SetLineWidth(0.08);
$pdf->Rect(107,278,22.5,11);
//เส้นกรอบเล็ก X
$pdf->SetLineWidth(0.08);
$pdf->Rect(107,284,45,0);

$pdf->SetFont('THSarabun','B',12);
$pdf->SetXY(108,277);
$pdf->Cell(158,$line_space+1,iconv("UTF-8", "TIS-620",'แบบลงทะเบียน'),0,1);

$pdf->SetXY(108,283);
$pdf->Cell(158,$line_space+1,iconv("UTF-8", "TIS-620",'แบบ EMS'),0,1);

$pdf->SetXY(135,277);
$pdf->Cell(158,$line_space+1,iconv("UTF-8", "TIS-620",'50.-/ครั้ง'),0,1);

$pdf->SetXY(135,283);
$pdf->Cell(158,$line_space+1,iconv("UTF-8", "TIS-620",'80.-/ครั้ง'),0,1);

$pdf->SetFont('THSarabun','',20);
$pdf->SetXY(130,277);
$pdf->Cell(145,$line_space,iconv("UTF-8", "TIS-620",'o'),0,1,'');

$pdf->SetXY(130,283);
$pdf->Cell(145,$line_space,iconv("UTF-8", "TIS-620",'o'),0,1,'');

//ช่อง 4 เหลี่ยม
$pdf->SetXY(25,77);
$pdf->Cell(4,4,'',1,0);

$pdf->SetXY(57,77);
$pdf->Cell(4,4,'',1,0);

$pdf->SetXY(89,77);
$pdf->Cell(4,4,'',1,0);

$pdf->SetXY(151,77);
$pdf->Cell(4,4,'',1,0);

$pdf->SetFont('THSarabun','',12);
$pdf->SetY(63);
$pdf->MultiCell(195,$line_space,iconv("UTF-8", "TIS-620",''),0,'L');

//วันที่
$pdf->setxy(162,25);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$day),0,0);

$pdf->setxy(175,25);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$month),0,0);

$pdf->setxy(195,25);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$year1),0,0);

$pdf->SetFont('THSarabun','',16);

$pdf->setxy(90,52);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$name),0,0);

$pdf->setxy(185,52);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$ids),0,0);

$pdf->setxy(87,59);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$name_E),0,0);

$pdf->setxy(165,59);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$num),0,0);

$pdf->setxy(30,66);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$day2),0,0);

$pdf->setxy(55,66);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$month2),0,0);

$pdf->setxy(84,66);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$year2),0,0);

$pdf->setxy(112,66);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$nationality1),0,0);

$pdf->setxy(138,66);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$religion1),0,0);

$pdf->setxy(174,66);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$province1),0,0);

$pdf->setxy(28,83);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$faculty),0,0);

$pdf->setxy(112,83);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$Major),0,0);

$pdf->setxy(190,83);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$year),0,0);

$pdf->setxy(29,90);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$course),0,0);

$pdf->setxy(150,90);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$graduated),0,0);

$pdf->setxy(193,90);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$GPA),0,0);

$pdf->setxy(189,97);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$wish1),0,0);
$pdf->setxy(189,104);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$wish2),0,0);
$pdf->setxy(189,111);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$wish3),0,0);
$pdf->setxy(189,118);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$wish4),0,0);
$pdf->setxy(189,125);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$wish5),0,0);
$pdf->setxy(43,132);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$wish61),0,0);
$pdf->setxy(189,132);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$wish62),0,0);
$pdf->setxy(189,139);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$wish7),0,0);
$pdf->setxy(189,146);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$wish8),0,0);


//การจัดส่ง
$pdf->SetFont('THSarabun','',14);
$pdf->SetXY(30,208);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$name1),0,0);

$line_space = 6;
$max_chars_per_line = 45;

$becuase_tis620 = iconv('UTF-8', 'TIS-620', $address1);

$lines = str_split($becuase_tis620, $max_chars_per_line);

$pdf->setXY(25, 218); // กำหนดตำแหน่งแนวนอน X เป็น 20 และตำแหน่งแนวตั้ง Y เป็น 40

foreach ($lines as $key => $line) {
    if ($key === 0) {
        $pdf->Cell(0, 0, $line, 0, 1);
    } else {
        $pdf->setXY(15, $pdf->GetY() + $line_space);
        $pdf->MultiCell(0, 0, $line, 0, 'L');
    }
}

// $pdf->SetXY(25,215);
// $pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$address1),0,0);

$pdf->AddPage();
$pdf->AddFont('THSarabun','B','THSarabun Bold.php');//ธรรมดา
$pdf->AddFont('THSarabun','','THSarabun.php');//ธรรมดา

$pdf->setFont('THSarabun','BU','30');
$pdf->SetXY(70,30);
$pdf->Cell(158,$line_space+1,iconv("UTF-8", "TIS-620",'ขั้นตอนการยื่นขอเอกสาร'),0,1);

$pdf->setFont('THSarabun','BU','24');
$pdf->SetXY(20,50);
$pdf->Cell(158,$line_space+1,iconv("UTF-8", "TIS-620",'1. ยื่นเอกสารด้วยตนเอง หรือ ให้ผู้อื่นยื่นแทน'),0,1);

$pdf->setFont('THSarabun','','20');
$pdf->SetXY(40,60);
$pdf->Cell(158,$line_space+1,iconv("UTF-8", "TIS-620",'ดาวน์โหลดแบบฟอร์มคําร้องได้ที่ www.reg.nu.ac.th (NU 21 ใบรับรอง),'),0,1);

$pdf->SetXY(20,70);
$pdf->Cell(158,$line_space+1,iconv("UTF-8", "TIS-620",'(NU 15 ใบแสดงผลการเรียน) กรอกคําร้องให้ครบถวน้ และยื่นได้ที่กองบริการการศึกษา ,'),0,1);

$pdf->SetXY(20,80);
$pdf->Cell(158,$line_space+1,iconv("UTF-8", "TIS-620",'ตึก QS งานทะเบียนนิสิตและประมวลผล ได้ตั้งแต่เวลา 08.30 - 16.30 น. ในวันและเวลาราชการ,'),0,1);

$pdf->setFont('THSarabun','BU','24');
$pdf->SetXY(20,90);
$pdf->Cell(158,$line_space+1,iconv("UTF-8", "TIS-620",'2. ยื่นเอกสารทางไปรษณีย์ ** ไม่สามารถขอแบบเร่งด่วนได้**'),0,1);

$pdf->setFont('THSarabun','','20');
$pdf->SetXY(40,100);
$pdf->Cell(158,$line_space+1,iconv("UTF-8", "TIS-620",'โปรดแจ้งที่อยู่ในการจัดส่งเอกสารกลับคืน พร้อมเบอร์โทรศัพท์'),0,1);

$pdf->setFont('THSarabun','BU','20');
$pdf->SetXY(20,108);
$pdf->Cell(158,$line_space+1,iconv("UTF-8", "TIS-620",'ในช่องที่ให้กรอกข้อมูลจัดส่งในแบบฟอร์ม ,'),0,1);

$pdf->setFont('THSarabun','','20');
$pdf->SetXY(40,116);
$pdf->Cell(158,$line_space+1,iconv("UTF-8", "TIS-620",'ค่าธรรมเนียม   ฉบับละ 100 บาท  +  ค่าฝากส่งกลับคืน'),0,1);

$pdf->SetXY(40,124);
$pdf->Cell(158,$line_space+1,iconv("UTF-8", "TIS-620",'ส่งคืนแบบลงทะเบียน    50  บาท'),0,1);

$pdf->SetXY(40,132);
$pdf->Cell(158,$line_space+1,iconv("UTF-8", "TIS-620",'ส่งคืนEMS                 80  บาท'),0,1);

$pdf->SetXY(30,140);
$pdf->Cell(158,$line_space+1,iconv("UTF-8", "TIS-620",'**ตัวอย่างเช่น  ขอเอกสาร 1 ฉบับ พร้อมเลือกฝากส่งแบบลงทะเบียน  =  150  บาท**'),0,1);

$pdf->setFont('THSarabun','B','20');
$pdf->SetXY(35,148);
$pdf->Cell(158,$line_space+1,iconv("UTF-8", "TIS-620",'สั่งจ่ายธนาณัติในนามที่ระบุด้านล่างนี้เท่านั้น'),0,1);

$pdf->setFont('THSarabun','BU','20');
$pdf->SetXY(40,156);
$pdf->Cell(158,$line_space+1,iconv("UTF-8", "TIS-620",'ผู้อำนวยการกองบริการการศึกษา เพื่อรับเงิน ณ ที่ทำการไปรษณีย์'),0,1);

$pdf->SetXY(40,164);
$pdf->Cell(158,$line_space+1,iconv("UTF-8", "TIS-620",'"เคาน์เตอร์หมาวิทยาลัยนเรศวร 00036"'),0,1);

$pdf->setFont('THSarabun','','20');
$pdf->SetXY(30,182);
$pdf->Cell(158,$line_space+1,iconv("UTF-8", "TIS-620",'ส่งเอกสารมาที่'),0,1);

$pdf->SetXY(40,190);
$pdf->Cell(158,$line_space+1,iconv("UTF-8", "TIS-620",'มหาวิทยาลัยนเรศวร'),0,1);

$pdf->SetXY(40,198);
$pdf->Cell(158,$line_space+1,iconv("UTF-8", "TIS-620",'กองบริการการศึกษา ตึก QS'),0,1);

$pdf->SetXY(40,206);
$pdf->Cell(158,$line_space+1,iconv("UTF-8", "TIS-620",'งานทะเบียนนิสิตและประมวลผล (ขอใบรับรอง) หรือ (ขอใบทรานสคริป)'),0,1);

$pdf->SetXY(40,214);
$pdf->Cell(158,$line_space+1,iconv("UTF-8", "TIS-620",'เลขที่ 99 หมู่ 9 ตำบลท่าโพธิ์'),0,1);

$pdf->SetXY(40,222);
$pdf->Cell(158,$line_space+1,iconv("UTF-8", "TIS-620",'อำเภอเมือง จังหวัดพิษณุโลก   65000'),0,1);




$pdf->Output();
}else{ echo('ไม่มีข้อมูล');}


?>
