<?php
if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "fmadd")) {
require_once("inc/func.php");
$name = stripslashes($_POST["name"]);

$date = stripslashes($_POST["datenow"]);
list($day, $month, $year1) = Day_show_list($date);

$faculty = $_POST["faculty"];
$Major = $_POST["Major"];
$ids = $_POST["ids"];
$name_eng = $_POST["name_eng"];
$num = $_POST["num"];
$year = $_POST["year"];
$last_year = $_POST["last_year"];
$date1 = stripslashes($_POST["datenow1"]);
list($day1, $month1, $year11) = Day_show_list($date1);
$nationality1 = $_POST["nationality1"];
$religion1 = $_POST["religion1"];
$province1 = $_POST["province1"];
$educational1 = $_POST["educational1"];
$Graduation1 = $_POST["Graduation1"];
$Major1 = $_POST["Major1"];

$educational2 = $_POST["educational2"];
$Graduation2 = $_POST["Graduation2"];
$date2 = stripslashes($_POST["datenow2"]);
list($day2, $month2, $year2) = Day_show_list($date2);
$nationality2 = $_POST["nationality2"];
$religion2 = $_POST["religion2"];
$province2 = $_POST["province2"];

$educational3 = $_POST["educational3"];
$Graduation3 = $_POST["Graduation3"];
$date3 = stripslashes($_POST["datenow3"]);
list($day3, $month3, $year3) = Day_show_list($date);
$nationality3 = $_POST["nationality3"];
$religion3 = $_POST["religion3"];
$province3 = $_POST["province3"];

$wish1 = $_POST["wish1"];
$wish2 = $_POST["wish2"];
$wish3 = $_POST["wish3"];


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
$pdf->Cell(10,$line_space-4,iconv("UTF-8", "TIS-620",'อ้างอิง'),0,0);

$pdf->SetFont('THSarabun','B',18);
$pdf->Cell(5,$line_space-4,iconv("UTF-8", "TIS-620",'NU15'),0,1);

$pdf->SetFont('THSarabun','',14);
$pdf->SetXY(175,9);
$pdf->Cell(10,$line_space-4,iconv("UTF-8", "TIS-620",'ปรับปรุงครั้งที่ 1-2018'),0,1);

$pdf->SetFont('THSarabun','B',20);
$pdf->Cell(67);
$pdf->Cell(55,$line_space+1,iconv("UTF-8", "TIS-620",'มหาวิทยาลัยนเรศวร'),0,1);

$pdf->Cell(55,$line_space+1,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(40);
$pdf->Cell(55,$line_space+1,iconv("UTF-8", "TIS-620",'คำร้องขอใบแสดงผลการเรียน (TRANSCRIPT)'),0,0);

$pdf->SetFont('THSarabun','',12);
$pdf->Cell(48);
$pdf->Cell(55,$line_space+1,iconv("UTF-8", "TIS-620",'วันที่.......... เดือน.........................พ.ศ..............'),0,1);

$pdf->SetFont('THSarabun','',14);
$pdf->Cell(4);
$pdf->Cell(50,$line_space+1,iconv("UTF-8", "TIS-620",'เรียน     รองอธิการบดี'),0,1);

$pdf->Cell(15);
$pdf->Cell(50,$line_space+1,iconv("UTF-8", "TIS-620",'ข้าพเจ้า  (นาย/นางสาว/นาง)...............................................................................................................รหัสนิสิต..................................................'),0,1);

$pdf->Cell(4);
$pdf->Cell(50,$line_space+1,iconv("UTF-8", "TIS-620",'ชื่อ-นามสกุลภาษาอังกฤษ (MR./MRS./Miss) ตัวพิมพ์ใหญ่................................................................................โทร.........................................................'),0,1);

$pdf->Cell(4);
$pdf->Cell(50,$line_space+1,iconv("UTF-8", "TIS-620",'คณะ...............................................................สาขาวิชา.............................................................ปีที่เข้าศึกษา...................ปีที่สำเร็จการศึกษา..................'),0,1);

//เส้นกรอบใหญ่
$pdf->SetLineWidth(0.1);
$pdf->Rect(10,60,95,87);

$pdf->SetLineWidth(0.1);
$pdf->Rect(10,60,190,87);

//ข้อมูลในตาราง
$pdf->SetFont('THSarabun','BU',14);
$pdf->Cell(33);
$pdf->Cell(50,$line_space+3,iconv("UTF-8", "TIS-620",'สำหรับปริญญาตรี'),0,0);
$pdf->Cell(35);
$pdf->Cell(23,$line_space+3,iconv("UTF-8", "TIS-620",'สำหรับปริญญาโท'),0,0);
$pdf->SetFont('THSarabun','U',12);
$pdf->Cell(2);
$pdf->Cell(10,$line_space+3,iconv("UTF-8", "TIS-620",'(กรอกข้อมูลก่อนเข้าศึกษา)'),0,1);

$pdf->SetFont('THSarabun','',11);
$pdf->Cell(2);
$pdf->Cell(10,$line_space-2,iconv("UTF-8", "TIS-620",'(  ) ภาคปกติ หลักสูตร..................ปี          (  ) ภาคพิเศษ หลักสูตร..................ปี'),0,);

$pdf->SetFont('THSarabun','BU',12);
$pdf->Cell(100);
$pdf->Cell(50,$line_space-2,iconv("UTF-8", "TIS-620",'กรอกข้อมูลการสำเร็จการศึกษาระดับปริญญาตรี ของท่าน'),0,1);

$pdf->SetFont('THSarabun','BU',12);
$pdf->Cell(10);
$pdf->Cell(50,$line_space-2,iconv("UTF-8", "TIS-620",'สำหรับคณะสาธารณสุขฯ, ป.บัณฑิตฯ, ประกาศนียบัตรฯ, พยาบาล'),0,0);

$pdf->SetFont('THSarabun','',11);
$pdf->Cell(38);
$pdf->Cell(50,$line_space-2,iconv("UTF-8", "TIS-620",'**วุฒิการศึกษาสูงสุดระดับปริญญาตรี (ตัวย่อภาษาอังกฤษ)'),0,1);

$pdf->SetFont('THSarabun','BU',12);
$pdf->Cell(7);
$pdf->Cell(50,$line_space-2,iconv("UTF-8", "TIS-620",'กรอกข้อมูลการสำเร็จการศึกษาระดับปริญญาตรี / อนุปริญญา ของท่าน'),0,0);

$pdf->SetFont('THSarabun','',11);
$pdf->Cell(40);
$pdf->Cell(50,$line_space-2,iconv("UTF-8", "TIS-620",'...............................................................................................................................................'),0,1);

$pdf->SetFont('THSarabun','',11);
$pdf->Cell(8);
$pdf->Cell(50,$line_space+3,iconv("UTF-8", "TIS-620",'**เป็นนิสิต    (   ) ปริญญาตรีพยาบาล  วพ. ..............................................................'),0,0);

$pdf->Cell(40);
$pdf->Cell(50,$line_space,iconv("UTF-8", "TIS-620",'**สถาบันที่สำเร็จการศึกษา..................................................................................................'),0,1);

$pdf->Cell(22);
$pdf->Cell(50,$line_space-1,iconv("UTF-8", "TIS-620",'(   ) คณะสาธารณสุขศาสตร์ต่อเนื่อง 2 ปี'),0,0);

$pdf->Cell(25);
$pdf->Cell(50,$line_space-2,iconv("UTF-8", "TIS-620",'(   ) ภาคปกติ     (   ) ภาคพิเศษ ในจังหวัดพิษณุโลก/ (   ) นอกศูนย์วิทยบริการ...............'),0,1);

$pdf->Cell(22);
$pdf->Cell(50,$line_space-1,iconv("UTF-8", "TIS-620",'(   ) ป.บัณฑิตทางการสอน              (   ) แพทย์แนวใหม่ 5 ปี'),0,0);

$pdf->Cell(25);
$pdf->Cell(50,$line_space-2,iconv("UTF-8", "TIS-620",'(   ) โครงการ ครูอาจารย์ประจำการ'),0,1);

$pdf->Cell(22);
$pdf->Cell(50,$line_space-1,iconv("UTF-8", "TIS-620",'(   ) ประกาศนียบัตรฯ ต่างๆ โปรดระบุ....................................................'),0,0);

$pdf->Cell(25);
$pdf->Cell(10,$line_space,iconv("UTF-8", "TIS-620",'**เกิดวันที่.....................................เดือน...................................................ปี พ.ศ......................'),0,1);

$pdf->SetFont('THSarabun','',11);
$pdf->Cell(2);
$pdf->Cell(10,$line_space,iconv("UTF-8", "TIS-620",'**เกิดวันที่.....................................เดือน...................................................ปี พ.ศ......................'),0,0);

$pdf->Cell(85);
$pdf->Cell(10,$line_space,iconv("UTF-8", "TIS-620",'สัญชาติ............................ศาสนา.............................จังหวัดที่เกิด.............................................'),0,1);

$pdf->Cell(2);
$pdf->Cell(10,$line_space-2,iconv("UTF-8", "TIS-620",'สัญชาติ............................ศาสนา................................จังหวัดที่เกิด..........................................'),0,0);

$pdf->SetFont('THSarabun','BU',14);
$pdf->Cell(100);
$pdf->Cell(10,$line_space-2,iconv("UTF-8", "TIS-620",'สำหรับปริญญาเอก'),0,0);

$pdf->SetFont('THSarabun','U',12);
$pdf->Cell(16);
$pdf->Cell(10,$line_space-2,iconv("UTF-8", "TIS-620",'(กรอกข้อมูลก่อนเข้าศึกษา)'),0,1);

$pdf->SetFont('THSarabun','',11);
$pdf->Cell(2);
$pdf->Cell(10,$line_space,iconv("UTF-8", "TIS-620",'**วุฒิการศึกษาสูงสุด(ตัวย่อภาษาอังกฤษ)................................................................................'),0,0);

$pdf->SetFont('THSarabun','BU',12);
$pdf->Cell(95);
$pdf->Cell(50,$line_space-2,iconv("UTF-8", "TIS-620",'กรอกข้อมูลการสำเร็จการศึกษาระดับปริญญาโท ของท่าน'),0,1);

$pdf->SetFont('THSarabun','',11);
$pdf->Cell(2);
$pdf->Cell(10,$line_space,iconv("UTF-8", "TIS-620",'**สถาบันที่สำเร็จการศึกษา......................................................................................................'),0,0);

$pdf->Cell(85);
$pdf->Cell(50,$line_space,iconv("UTF-8", "TIS-620",'**วุฒิการศึกษาสูงสุดระดับปริญญาโท (ตัวย่อภาษาอังกฤษ)...................................................'),0,1);

$pdf->Setfont('THSarabun','BU',14);
$pdf->Cell(30);
$pdf->Cell(50,$line_space+3,iconv("UTF-8", "TIS-620",'สำหรับ หลักสูตรคู่ขนาน'),0,0);

$pdf->SetFont('THSarabun','',11);
$pdf->Cell(17);
$pdf->Cell(10,$line_space,iconv("UTF-8", "TIS-620",'**สถาบันที่สำเร็จการศึกษา......................................................................................................'),0,1);

$pdf->Setfont('THSarabun','',11);
$pdf->Cell(2);
$pdf->Cell(10,$line_space,iconv("UTF-8", "TIS-620",'ระบุสาขาที่ต้องการ......................................................................................................'),0,0);

$pdf->SetFont('THSarabun','',11);
$pdf->Cell(85);
$pdf->Cell(10,$line_space-2,iconv("UTF-8", "TIS-620",'**เกิดวันที่.....................................เดือน...................................................ปี พ.ศ......................'),0,1);

$pdf->Setfont('THSarabun','',10);
$pdf->Cell(2);
$pdf->Cell(10,$line_space+2,iconv("UTF-8", "TIS-620",'เช่น หลักสูตร '),0,0);

$pdf->Setfont('THSarabun','B',10);
$pdf->Cell(6);
$pdf->Cell(50,$line_space+2,iconv("UTF-8", "TIS-620",'วิทยาศาสตร์การแพทย์ คู่ขนาน นิติศาสตร์ ต้องการคือ '),0,0);

$pdf->Setfont('THSarabun','Bu',10);
$pdf->Cell(2);
$pdf->Cell(10,$line_space+2,iconv("UTF-8", "TIS-620",'วิทยาศาสตร์การแพทย์'),0,0);

$pdf->Setfont('THSarabun','',11);
$pdf->Cell(17);
$pdf->Cell(10,$line_space+2,iconv("UTF-8", "TIS-620",'สัญชาติ............................ศาสนา................................จังหวัดที่เกิด..........................................'),0,1);

$pdf->Setfont('THSarabun','B',14);
$pdf->Cell(103);
$pdf->Cell(10,$line_space+2,iconv("UTF-8", "TIS-620",'**(กรุณากรอกข้อมูลให้ครบถ้วน เพื่อประโยชน์ของท่านเอง)'),0,1);

$pdf->Setfont('THSarabun','BU',14);
$pdf->Cell(2);
$pdf->Cell(10,$line_space+2,iconv("UTF-8", "TIS-620",'มีความประสงค์จะขอ'),0,1);

$pdf->Setfont('THSarabun','',14);
$pdf->Cell(2);
$pdf->Cell(10,$line_space,iconv("UTF-8", "TIS-620",'(  ) ใบแปลรายวิชาฉบับภาษาไทย                    จำนวน........................ฉบับ  ไม่ใช้รูปถ่าย (ดำเนินการให้ได้เฉพาะนิสิตรหัส 43 เป็นต้นไปเท่านั้น)'),0,1);


$pdf->Cell(2);
$pdf->Cell(30,$line_space,iconv("UTF-8", "TIS-620",'(  ) ใบ TRANSCRIPT '),0,0);

$pdf->Setfont('THSarabun','B',14);
$pdf->Cell(34,$line_space,iconv("UTF-8", "TIS-620",'ก่อนสำเร็จการศึกษา '),0,0);

$pdf->Setfont('THSarabun','',14);
$pdf->Cell(37,$line_space,iconv("UTF-8", "TIS-620",'จำนวน........................ฉบับ'),0,0);

$pdf->Setfont('THSarabun','B',14);
$pdf->Cell(34,$line_space,iconv("UTF-8", "TIS-620",'(ใช้รูปถ่ายแต่งกายสุภาพ / สวมชุดนิสิต (เท่านั้น))'),0,1);

$pdf->Setfont('THSarabun','',14);
$pdf->Cell(2);
$pdf->Cell(30,$line_space,iconv("UTF-8", "TIS-620",'(  ) ใบ TRANSCRIPT '),0,0);

$pdf->Setfont('THSarabun','B',14);
$pdf->Cell(34,$line_space,iconv("UTF-8", "TIS-620",'หลังสำเร็จการศึกษา '),0,0);

$pdf->Setfont('THSarabun','',14);
$pdf->Cell(37,$line_space,iconv("UTF-8", "TIS-620",'จำนวน........................ฉบับ'),0,0);

$pdf->Setfont('THSarabun','B',14);
$pdf->Cell(34,$line_space,iconv("UTF-8", "TIS-620",'(ใช้รูปถ่ายสวมชุดครุย / ชุดนิสิต /ชุดสุภาพ)'),0,1);

//เส้นใต้ชุดครุย
$pdf->SetLineWidth(0.1);
$pdf->Rect(133,172,10,0);


$pdf->Setfont('THSarabun','BU',14);
$pdf->Cell(2);
$pdf->Cell(13,$line_space+2,iconv("UTF-8", "TIS-620",'หมายเหตุ'),0,0);

$pdf->Setfont('THSarabun','B',14);
$pdf->Cell(2);
$pdf->Cell(10,$line_space+2,iconv("UTF-8", "TIS-620",'ใช้รูปถ่าย 1 นิ้ว (เท่านั้น) จำนวน 2 รูป/ 1 ฉบับ พร้อมเขียน ชื่อ-สกุล รหัสประจำตัวนิสิต และสาขา หลังรูปทุกใบ'),0,1);

//เส้นใต้ 2 รูป
$pdf->SetLineWidth(0.1);
$pdf->Rect(62,179,30,0);

$pdf->Cell(17);
$pdf->Cell(10,$line_space,iconv("UTF-8", "TIS-620",'**กรณีที่ขอ TRANSCRIPT ก่อนและหลังสำเร็จพร้อมกัน กรุณาแยกคำร้องขอคนละใบ ก่อนสำเร็จ 1 ใบ และ หลังสำเร็จ 1 ใบ**'),0,1);

$pdf->setfont('','B',14);
$pdf->Cell(2);
$pdf->Cell(10,$line_space,iconv("UTF-8", "TIS-620",'(   ) (นำใบนัดมาขอรับเอกสารด้วยทุกครั้ง)          (   ) ฝากส่งทางไปรษณีย์  กรอกข้อมูลในช่องด้านล่าง'),0,1);

//เส้นกรอบ
$pdf->SetLineWidth(0.1);
$pdf->Rect(9,195,95,50);
//กรอบเล็ก
$pdf->SetLineWidth(0.08);
$pdf->Rect(10,196,45,11);
//เส้นกรอบเล็ก Y
$pdf->SetLineWidth(0.08);
$pdf->Rect(10,196,22.5,11);
//เส้นกรอบเล็ก X
$pdf->SetLineWidth(0.08);
$pdf->Rect(10,196,45,6);

//ข้อมูลในกรอบเล็ก
$pdf->SetFont('THSarabun','B',12);
$pdf->SetXY(10,195);
$pdf->Cell(158,$line_space+1,iconv("UTF-8", "TIS-620",'แบบลงทะเบียน'),0,1);

$pdf->SetXY(10,201);
$pdf->Cell(158,$line_space+1,iconv("UTF-8", "TIS-620",'แบบ EMS'),0,1);

$pdf->SetXY(40,195);
$pdf->Cell(158,$line_space+1,iconv("UTF-8", "TIS-620",'50.-/ครั้ง'),0,1);

$pdf->SetXY(40,201);
$pdf->Cell(158,$line_space+1,iconv("UTF-8", "TIS-620",'80.-/ครั้ง'),0,1);

$pdf->SetFont('THSarabun','',20);
$pdf->SetXY(35,195);
$pdf->Cell(145,$line_space,iconv("UTF-8", "TIS-620",'o'),0,1,'');

$pdf->SetXY(35,201);
$pdf->Cell(145,$line_space,iconv("UTF-8", "TIS-620",'o'),0,1,'');

$pdf->SetFont('THSarabun','BU',12);
$pdf->SetXY(15,210);
$pdf->Cell(145,$line_space,iconv("UTF-8", "TIS-620",'กรณีขอทางไปรษณีย์  โปรดระบุ ชื่อ-นามสกุล  ที่อยู่ ให้ชัดเจน '),0,0);

$pdf->SetFont('THSarabun','',12);
$pdf->SetXY(14,219);
$pdf->Cell(145,$line_space,iconv("UTF-8", "TIS-620",'ชื่อ-สกุล................................................................................................'),0,1,'');

$pdf->SetXY(14,224);
$pdf->Cell(145,$line_space,iconv("UTF-8", "TIS-620",'ที่อยู่.....................................................................................................'),0,0);

$pdf->SetXY(14,232);
$pdf->Cell(145,$line_space,iconv("UTF-8", "TIS-620",'.............................................................................................................'),0,0);

$pdf->SetXY(14,238);
$pdf->Cell(50,$line_space,iconv("UTF-8", "TIS-620",'.............................................................................................................'),0,0,'');

$pdf->SetFont('','','12');
$pdf->SetXY(140,224);
$pdf->Cell(50,$line_space,iconv("UTF-8", "TIS-620",'ลงชื่อ..........................................................ลงชื่อผู้ขอ'),0,0);

//กรอบล่างสุด
$pdf->SetLineWidth(0.1);
$pdf->Rect(15,250,180,45);
//เส้นแบ่งหัวข้อ
$pdf->SetLineWidth(0.08);
$pdf->Rect(15,260,180,0);
//เส้นกรอบ Y
$pdf->SetLineWidth(0.08);
$pdf->Rect(15,250,90,45);

//หัวข้อตาราง
$pdf->SetFont('THSarabun','BU',11);
$pdf->SetXY(40,253);
$pdf->Cell(145,$line_space,iconv("UTF-8", "TIS-620",'สำหรับเจ้าหน้าที่งานทะเบียน'),0,1,'');

$pdf->SetXY(135,253);
$pdf->Cell(145,$line_space,iconv("UTF-8", "TIS-620",'ขั้นตอนการขอเอกสาร'),0,1,'');

//ข้อมูลตารางซ้าย
$pdf->SetFont('THSarabun','',11);
$pdf->SetXY(17,265);
$pdf->Cell(145,$line_space,iconv("UTF-8", "TIS-620",'ได้รับเงินค่าธรรมเนียม เป็นจำนวนเงิน....................................บาท'),0,1,'');

$pdf->SetXY(50,280);
$pdf->Cell(145,$line_space,iconv("UTF-8", "TIS-620",'ลงชื่อ........................................ผู้รับเงิน'),0,1,'');

//ข้อมูลตารางขวา
$pdf->SetFont('THSarabun','',11);
$pdf->SetXY(107,262);
$pdf->Cell(145,$line_space,iconv("UTF-8", "TIS-620",'1. กรอกข้อมูลให้ครบถ้วน พร้อมชำระค่าธรรมเนียม ฉบับละ 100 บาท'),0,1,'');

$pdf->SetFont('THSarabun','BU',11);
$pdf->SetXY(110,268);
$pdf->Cell(145,$line_space,iconv("UTF-8", "TIS-620",'กรณีเร่งด่วน ฉบับละ 200 บาท ขอได้ที่หน้าเคาท์เตอร์เท่านั้น'),0,1,'');

$pdf->SetFont('THSarabun','',11);
$pdf->SetXY(107,274);
$pdf->Cell(145,$line_space,iconv("UTF-8", "TIS-620",'2. ขอทางไปรษณีย์ โปรดสั่งจ่ายค่าธรรมเนียมเป็นธนาณัติ เท่านั้น'),0,1,'');

$pdf->SetXY(110,280);
$pdf->Cell(145,$line_space,iconv("UTF-8", "TIS-620",'ค่าธรรมเนียม ฉบับละ 100 บาท + ค่าฝากส่งตามตัวเลือกด้านล่าง'),0,1,'');

//กรอบเล็ก
$pdf->SetLineWidth(0.08);
$pdf->Rect(107,286,45,9);
// //เส้นกรอบเล็ก Y
$pdf->SetLineWidth(0.08);
$pdf->Rect(107,286,22.5,9);
// //เส้นกรอบเล็ก X
$pdf->SetLineWidth(0.08);
$pdf->Rect(107,286,45,4.5);

$pdf->SetFont('THSarabun','B',11);
$pdf->SetXY(108,285);
$pdf->Cell(158,$line_space+1,iconv("UTF-8", "TIS-620",'แบบลงทะเบียน'),0,1);

$pdf->SetXY(108,289);
$pdf->Cell(158,$line_space+1,iconv("UTF-8", "TIS-620",'แบบ EMS'),0,1);

$pdf->SetXY(135,285);
$pdf->Cell(158,$line_space+1,iconv("UTF-8", "TIS-620",'50.-/ครั้ง'),0,1);

$pdf->SetXY(135,289);
$pdf->Cell(158,$line_space+1,iconv("UTF-8", "TIS-620",'80.-/ครั้ง'),0,1);

$pdf->SetFont('THSarabun','',20);
$pdf->SetXY(130,285);
$pdf->Cell(145,$line_space,iconv("UTF-8", "TIS-620",'o'),0,1,'');

$pdf->SetXY(130,289);
$pdf->Cell(145,$line_space,iconv("UTF-8", "TIS-620",'o'),0,1,'');



$pdf->SetFont('THSarabun','',12);
$pdf->SetXY(63,10);
$pdf->MultiCell(195,$line_space,iconv("UTF-8", "TIS-620",''),0,'L');

$pdf->SetXY(159,24);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$day),0,0);

$pdf->SetXY(173,24);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$month),0,0);

$pdf->SetXY(194,24);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$year1),0,0);

$pdf->SetFont('THSarabun','',14);

$pdf->SetXY(69,38);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$name),0,0);

$pdf->SetXY(165,38);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$ids),0,0);

$pdf->SetXY(90,45);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$name_eng),0,0);

$pdf->SetXY(160,45);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$num),0,0);

$pdf->SetXY(25,52);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$faculty),0,0);

$pdf->SetXY(85,52);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$Major),0,0);

$pdf->SetXY(150,52);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$year),0,0);

$pdf->SetXY(189,52);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$last_year),0,0);


$pdf->SetFont('THSarabun','',11);

//ปริญญาตรี
$pdf->SetXY(30,100);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$day1),0,0);

$pdf->SetXY(58,100);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$month1),0,0);

$pdf->SetXY(92,100);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$year11),0,0);

$pdf->SetXY(23,105);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$nationality1),0,0);

$pdf->SetXY(51,105);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$religion1),0,0);

$pdf->SetXY(78,105);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$province1),0,0);

$pdf->SetXY(58,110);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$educational1),0,0);

$pdf->SetXY(45,114);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$Graduation1),0,0);


//หลักสูตรคู่ขนาน
$pdf->SetXY(34,126);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$Major1),0,0);



//หลักสูตรปริญญาโท
$pdf->SetXY(110,75);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$educational2),0,0);

$pdf->SetXY(140,80);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$Graduation2),0,0);

$pdf->SetXY(126,94);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$day2),0,0);

$pdf->SetXY(153,94);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$month2),0,0);

$pdf->SetXY(187,94);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$year2),0,0);

$pdf->SetXY(118,100);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$nationality2),0,0);

$pdf->SetXY(142,100);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$religion2),0,0);

$pdf->SetXY(173,100);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$province2),0,0);


//หลักสูตรปริญญาเอก
$pdf->SetXY(175,114);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$educational3),0,0);

$pdf->SetXY(140,120);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$Graduation3),0,0);

$pdf->SetXY(126,125);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$day3),0,0);

$pdf->SetXY(153,125);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$month3),0,0);

$pdf->SetXY(187,125);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$year3),0,0);

$pdf->SetXY(118,131);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$nationality3),0,0);

$pdf->SetXY(140,131);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$religion3),0,0);

$pdf->SetXY(175,131);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$province3),0,0);

$pdf->SetFont('THSarabun','',14);
$pdf->SetXY(93,154);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$wish1),0,0);

$pdf->SetXY(93,160);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$wish2),0,0);

$pdf->SetXY(93,166);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$wish3),0,0);

//การจัดส่ง
$pdf->SetFont('THSarabun','',12);
$pdf->SetXY(30,218);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$name1),0,0);

// $pdf->SetXY(25,223);
// $pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$address1),0,0);

$line_space = 8;
$max_chars_per_line = 53;

$becuase_tis620 = iconv('UTF-8', 'TIS-620', $address1);

$lines = str_split($becuase_tis620, $max_chars_per_line);

$pdf->setXY(23, 226); // กำหนดตำแหน่งแนวนอน X เป็น 20 และตำแหน่งแนวตั้ง Y เป็น 40

foreach ($lines as $key => $line) {
    if ($key === 0) {
        $pdf->Cell(0, 0, $line, 0, 1);
    } else {
        $pdf->setXY(18, $pdf->GetY() + $line_space);
        $pdf->MultiCell(0, 0, $line, 0, 'L');
    }
}



$pdf->Output();
}else{ echo('ไม่มีข้อมูล');}

?>
