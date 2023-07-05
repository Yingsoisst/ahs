<?php
if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "fmadd")) {
require_once("inc/func.php");
//หน้าแรก
$research_unit= ($_POST["research_unit"]);	
//หน้า2
$Thai = ($_POST["Thai"]);
$English = ($_POST["English"]);
$nature = ($_POST["nature"]);
$name1 = $_POST["name1"];
$position1 = ($_POST["position1"]);
$affiliation1 = ($_POST["affiliation1"]);
$major = ($_POST["major"]);
$research_results1 = ($_POST["research_results1"]);
$fiscal_year1 = ($_POST["fiscal_year1"]);
$project1 = ($_POST["project1"]);
$funding1 = ($_POST["funding1"]);
$fiscal_year2 = $_POST["fiscal_year2"];
$project2 = $_POST["project2"];
$funding2 = $_POST["funding2"];
$fiscal_year3 = $_POST["fiscal_year3"];
$project3 = $_POST["project3"];
$funding3 = $_POST["funding3"];
$year1 = $_POST["year1"];
$name2 = $_POST["name2"];
$course1 = $_POST["course1"];
$status1 = $_POST["status1"];
$year2 = $_POST["year2"];
$name3 = $_POST["name3"];
$course2 = $_POST["course2"];
$status2 = $_POST["status2"];
//หน้า3
$year3 = stripslashes($_POST["year3"]);	
$name4 = stripslashes($_POST["name4"]);
$course3 = stripslashes($_POST["course3"]);
$status3 = stripslashes($_POST["status3"]);
$year4 = stripslashes($_POST["year4"]);	
$name5 = stripslashes($_POST["name5"]);
$course4 = stripslashes($_POST["course4"]);
$status4 = stripslashes($_POST["status4"]);
$name6 = $_POST["name6"];
$position2 = stripslashes($_POST["position2"]);
$affiliation2 = stripslashes($_POST["affiliation2"]);
$major2 = stripslashes($_POST["major2"]);
$research_results2 = stripslashes($_POST["research_results2"]);
$year5 = stripslashes($_POST["year5"]);
$name7 = stripslashes($_POST["name7"]);
$course5 = stripslashes($_POST["course5"]);
$status5 = $_POST["status5"];
$year6 = $_POST["year6"];
$name8 = $_POST["name8"];
$course6 = $_POST["course6"];
$status6 = $_POST["status6"];
$year7 = $_POST["year7"];
$name9 = $_POST["name9"];
$major3 = $_POST["major3"];
$status7 = $_POST["status7"];
$year8 = $_POST["year8"];
$name10 = $_POST["name10"];
$major4 = $_POST["major4"];
$status8 = $_POST["status8"];
$name11 = $_POST["name11"];
$position3 = $_POST["position3"];
$major5 = $_POST["major5"];
$affiliation3 = $_POST["affiliation3"];
$reasons = $_POST["reasons"];
//หน้า4
$objective = stripslashes($_POST["objective"]);
$Control = stripslashes($_POST["Control"]);
$describe = stripslashes($_POST["describe"]);
$target1 = $_POST["target1"];
$product1 = stripslashes($_POST["product1"]);
$target2 = stripslashes($_POST["target2"]);
$product2 = stripslashes($_POST["product2"]);
$target3 = stripslashes($_POST["target3"]);
$product3 = stripslashes($_POST["product3"]);
//หน้า5
$early_stage = stripslashes($_POST["early_stage"]);
$activity1 = stripslashes($_POST["activity1"]);
$activity2 = stripslashes($_POST["activity2"]);
$activity3 = $_POST["activity3"];
$activity4 = stripslashes($_POST["activity4"]);
$activity5 = stripslashes($_POST["activity5"]);
$target4 = stripslashes($_POST["target4"]);
$product4 = stripslashes($_POST["product4"]);
$target5 = stripslashes($_POST["target5"]);
$product5 = stripslashes($_POST["product5"]);
$target6 = stripslashes($_POST["target6"]);
$product6 = stripslashes($_POST["product6"]);
$inside1 = $_POST["inside1"];
$inside2 = $_POST["inside2"];
$outside1 = $_POST["outside1"];
$outside2 = $_POST["outside2"];
//หน้า6
$A1 = stripslashes($_POST["A1"]);
$A2 = stripslashes($_POST["A2"]);
$A3 = stripslashes($_POST["A3"]);
$A4 = stripslashes($_POST["A4"]);
$A5 = stripslashes($_POST["A5"]);

$A11 = stripslashes($_POST["A11"]);
$A12 = stripslashes($_POST["A12"]);
$A13 = stripslashes($_POST["A13"]);
$A14 = stripslashes($_POST["A14"]);
$A15 = stripslashes($_POST["A15"]);

$A21 = stripslashes($_POST["A21"]);
$A22 = stripslashes($_POST["A22"]);
$A23 = stripslashes($_POST["A23"]);
$A24 = stripslashes($_POST["A24"]);
$A25 = stripslashes($_POST["A25"]);

$A31 = stripslashes($_POST["A31"]);
$A32 = stripslashes($_POST["A32"]);
$A33 = stripslashes($_POST["A33"]);
$A34 = stripslashes($_POST["A34"]);
$A35 = stripslashes($_POST["A35"]);

$A41 = stripslashes($_POST["A41"]);
$A42 = stripslashes($_POST["A42"]);
$A43 = stripslashes($_POST["A43"]);
$A44 = stripslashes($_POST["A44"]);
$A45 = stripslashes($_POST["A45"]);

$A51 = stripslashes($_POST["A51"]);
$A52 = stripslashes($_POST["A52"]);
$A53 = stripslashes($_POST["A53"]);
$A54 = stripslashes($_POST["A54"]);
$A55 = stripslashes($_POST["A55"]);

$A61 = stripslashes($_POST["A61"]);
$A62 = stripslashes($_POST["A62"]);
$A63 = stripslashes($_POST["A63"]);
$A64 = stripslashes($_POST["A64"]);
$A65 = stripslashes($_POST["A65"]);

$A71 = stripslashes($_POST["A71"]);
$A72 = stripslashes($_POST["A72"]);
$A73 = stripslashes($_POST["A73"]);
$A74 = stripslashes($_POST["A74"]);
$A75 = stripslashes($_POST["A75"]);

$B1 = stripslashes($_POST["B1"]);
$B2 = stripslashes($_POST["B2"]);
$B3 = stripslashes($_POST["B3"]);
$B4 = stripslashes($_POST["B4"]);
$B5 = stripslashes($_POST["B5"]);

$B11 = stripslashes($_POST["B11"]);
$B12 = stripslashes($_POST["B12"]);
$B13 = stripslashes($_POST["B13"]);
$B14 = stripslashes($_POST["B14"]);
$B15 = stripslashes($_POST["B15"]);

$B21 = stripslashes($_POST["B21"]);
$B22 = stripslashes($_POST["B22"]);
$B23 = stripslashes($_POST["B23"]);
$B24 = stripslashes($_POST["B24"]);
$B25 = stripslashes($_POST["B25"]);
//หน้า7
$capital1 = stripslashes($_POST["capital1"]);
$capital2 = stripslashes($_POST["capital2"]);
$report = stripslashes($_POST["report"]);
$name14 = $_POST["name14"];

$date1 = Day_show($_POST["datenow1"]);



//หน้า8
$name15 = stripslashes($_POST["name15"]);
$position4 = stripslashes($_POST["position4"]);
$qualification1 = stripslashes($_POST["qualification1"]);
$major7 = $_POST["major7"];
$graduate1 = stripslashes($_POST["graduate1"]);
$add1 = stripslashes($_POST["add1"]);
$add2 = stripslashes($_POST["add2"]);
$add3 = stripslashes($_POST["add3"]);
$add4 = stripslashes($_POST["add4"]);
$add5 = stripslashes($_POST["add5"]);
$add6 = stripslashes($_POST["add6"]);
$add7 = stripslashes($_POST["add7"]);
$add8 = stripslashes($_POST["add8"]);
$add9 = stripslashes($_POST["add9"]);
$email = stripslashes($_POST["email"]);
$place = stripslashes($_POST["place"]);
$add12 = stripslashes($_POST["add12"]);
$add22 = stripslashes($_POST["add22"]);
$add32 = stripslashes($_POST["add32"]);
$add42 = stripslashes($_POST["add42"]);
$add52 = stripslashes($_POST["add52"]);
$add62 = stripslashes($_POST["add62"]);
$add72 = stripslashes($_POST["add72"]);
$add82 = stripslashes($_POST["add82"]);
$add92 = stripslashes($_POST["add92"]);
//หน้า9
$name16 = stripslashes($_POST["name16"]);
$position6 = stripslashes($_POST["position6"]);
$qualification2 = stripslashes($_POST["qualification2"]);
$major8 = $_POST["major8"];
$graduate2 = stripslashes($_POST["graduate2"]);
$add13 = stripslashes($_POST["add13"]);
$add23 = stripslashes($_POST["add23"]);
$add33 = stripslashes($_POST["add33"]);
$add43 = stripslashes($_POST["add43"]);
$add53 = stripslashes($_POST["add53"]);
$add63 = stripslashes($_POST["add63"]);
$add73 = stripslashes($_POST["add73"]);
$add83 = stripslashes($_POST["add83"]);
$add93 = stripslashes($_POST["add93"]);
$email2 = stripslashes($_POST["email2"]);
$place2 = stripslashes($_POST["place2"]);
$add14 = stripslashes($_POST["add14"]);
$add24 = stripslashes($_POST["add24"]);
$add34 = stripslashes($_POST["add34"]);
$add44 = stripslashes($_POST["add44"]);
$add54 = stripslashes($_POST["add54"]);
$add64 = stripslashes($_POST["add64"]);
$add74 = stripslashes($_POST["add74"]);
$add84 = stripslashes($_POST["add84"]);
$add94 = stripslashes($_POST["add94"]);

$date2 = stripslashes($_POST["datenow2"]);
list($d, $m, $y) = Day_show_list($date2);

$line_space=6;

require('vendor/fpdf184/fpdf.php');
$pdf = new FPDF('P','mm','A4');
$pdf->SetMargins(9,6);
$pdf->SetAutoPageBreak(10);

//หน้า 1
$pdf->AddPage();
$pdf->AddFont('THSarabun','B','THSarabun Bold.php');//ธรรมดา
$pdf->AddFont('THSarabun','','THSarabun.php');//ธรรมดา

//ด้านบน
$pdf->Image('image/ahs-logo.png',80,30,60,60);
$pdf->SetFont('THSarabun','',14);

$pdf->setfont('','B','30');
$pdf->setXY(85,90);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'โครงการจัดตั้ง'),0,1);
$pdf->setXY(35,110);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'หน่วยวิจัยด้าน...............................................'),0,1);

$pdf->setXY(40,250);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'คณะสหเวชศาสตร์  มหาวิทยาลัยนเรศวร'),0,1);

$pdf->SetFont('THSarabun','B',30);

$pdf->setxy(80,109);
$pdf->Cell(15,$line_space,iconv("UTF-8", "TIS-620",$research_unit),0,'c');

// หน้า 2
$pdf->AddPage();
$pdf->AddFont('THSarabun','B','THSarabun Bold.php');//ธรรมดา
$pdf->AddFont('THSarabun','','THSarabun.php');//ธรรมดา

//ด้านบน
$pdf->SetFont('THSarabun','B',18);
$pdf->Cell(44);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'โครงการจัดตั้งหน่วยวิจัยด้าน...................................................'),0,1);

$pdf->Cell(62);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'คณะสหเวชศาสตร์ มหาวิทยาลัยนเรศวร'),0,1);

$pdf->Cell(55,$line_space,iconv("UTF-8", "TIS-620",''),0,1);

$pdf->SetFont('THSarabun','B',16);
$pdf->Cell(15);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'1.   ชื่อโครงการ'),0,1);

$pdf->SetFont('THSarabun','',16);
$pdf->Cell(22);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'   ภาษาไทย : หน่วยวิจัยด้าน.........................................................................................'),0,1);

$pdf->Cell(22);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'   ภาษาอังกฤษ  :  ........................................................................................................'),0,1);

$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",''),0,1);

$pdf->SetFont('THSarabun','B',16);
$pdf->Cell(15);
$pdf->Cell(55,$line_space,iconv("UTF-8", "TIS-620",'2.  ลักษณะโครงการ :  (ให้ชี้แจงลักษณะโครงการมาพอสังเขป)'),0,1);

$pdf->SetFont('THSarabun','',16);
$pdf->Cell(15);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'......................................................................................................................................................................'),0,1);
$pdf->Cell(15);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'......................................................................................................................................................................'),0,1);
$pdf->Cell(15);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'......................................................................................................................................................................'),0,1);
$pdf->Cell(15);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'......................................................................................................................................................................'),0,1);
$pdf->Cell(15);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'......................................................................................................................................................................'),0,1);

$pdf->SetFont('THSarabun','B',16);
$pdf->Cell(15);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'3.  หัวหน้าหน่วยวิจัย  :  '),0,1);

$pdf->SetFont('THSarabun','',16);
$pdf->Cell(20);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'ชื่อ-นามสกุล  :  .....................................................................................................................................'),0,1);

$pdf->Cell(20);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'ตำแหน่งทางวิชาการ   :  .......................................................................................................................'),0,1);

$pdf->Cell(20);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'สังกัด   :  ...............................................................................................................................................'),0,1);

$pdf->Cell(20);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'สาขาที่มีความเชี่ยวชาญ   :  ..................................................................................................................'),0,1);

$pdf->Cell(20);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'ผลงานวิจัยที่ผ่านมา................................................................................................................................'),0,1);

// $pdf->Cell(20);
// $pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'ผลงานวิจัยที่ผ่านมา (เขียนอ้างอิง แบบ Vancouver style โดยให้ใช้ตัวเข้มที่ชื่อของนักวิจัย)'),0,1);

$pdf->SetFont('THSarabun','B',16);
$pdf->Cell(20);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'ทุนสนับสนุนการวิจัย (ในฐานะหัวหน้าโครงการวิจัย)'),0,1);


//เส้นกรอบ
$pdf->SetLineWidth(0.2);
$pdf->Rect(20,163,170,40);

//เส้นแกน X
$pdf->SetLineWidth(0.2);
$pdf->Rect(20,173,170,0);

//เส้นแกน X
$pdf->SetLineWidth(0.2);
$pdf->Rect(20,183,170,0);

//เส้นแกน X
$pdf->SetLineWidth(0.2);
$pdf->Rect(20,193,170,0);

//เส้นแกน Y
$pdf->SetLineWidth(0.2);
$pdf->Rect(33,163,0,40);

//เส้นแกน Y
$pdf->SetLineWidth(0.2);
$pdf->Rect(56,163,0,40);

//เส้นแกน Y
$pdf->SetLineWidth(0.2);
$pdf->Rect(145,163,0,40);

$pdf->Cell(12);
$pdf->Cell(55,$line_space+4,iconv("UTF-8", "TIS-620",'ลำดับ   ปีงบประมาณ                              โครงการ                                           แหล่งทุน'),0,1);

$pdf->Cell(55,$line_space-5,iconv("UTF-8", "TIS-620",''),0,1);

$pdf->Cell(15);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'1'),0,1);

$pdf->Cell(55,$line_space-3,iconv("UTF-8", "TIS-620",''),0,1);

$pdf->Cell(15);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'2'),0,1);

$pdf->Cell(55,$line_space-4,iconv("UTF-8", "TIS-620",''),0,1);

$pdf->Cell(15);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'3'),0,1);

$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(20);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'ประสบการณ์การเป็นอาจารย์ที่ปรึกษาวิทยานิพนธ์หลักของนิสิตระดับบัณฑิตศึกษา'),0,1);

$pdf->Cell(20);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'ระดับปริญญาโท'),0,1);

//เส้นกรอบ
$pdf->SetLineWidth(0.2);
$pdf->Rect(20,225,170,30);

//เส้นแกน X
$pdf->SetLineWidth(0.2);
$pdf->Rect(20,235,170,0);

//เส้นแกน X
$pdf->SetLineWidth(0.2);
$pdf->Rect(20,245,170,0);



//เส้นแกน Y
$pdf->SetLineWidth(0.2);
$pdf->Rect(33,225,0,30);

//เส้นแกน Y
$pdf->SetLineWidth(0.2);
$pdf->Rect(60,225,0,30);

$pdf->SetLineWidth(0.2);
$pdf->Rect(120,225,0,30);

$pdf->SetLineWidth(0.2);
$pdf->Rect(160,225,0,30);


$pdf->Cell(12);
$pdf->Cell(55,$line_space+4,iconv("UTF-8", "TIS-620",'ลำดับ    ปีการศึกษา                     ชื่อ-นามสกุลนิสิต               หลักสูตร/สาขาวิชา      สถานะภาพนิสิต'),0,1);

$pdf->Cell(14);
$pdf->Cell(55,$line_space+4,iconv("UTF-8", "TIS-620",'1'),0,1);

$pdf->Cell(14);
$pdf->Cell(55,$line_space+4,iconv("UTF-8", "TIS-620",'2'),0,1);

$pdf->SetFont('THSarabun','B',18);

$pdf->setxy(105,6);
$pdf->Cell(15,$line_space,iconv("UTF-8", "TIS-620",$research_unit),0,'c');

$pdf->SetFont('THSarabun','',16);
$pdf->setxy(75,36);
$pdf->Cell(17,$line_space,iconv("UTF-8", "TIS-620",$Thai),0,'L');

$pdf->setxy(63,44);
$pdf->Cell(17,$line_space,iconv("UTF-8", "TIS-620",$English),0,'L');


$pdf->setxy(26,65);
$pdf->MultiCell(153,$line_space+2,iconv("UTF-8", "TIS-620",$nature),0,'c');

$pdf->setxy(55,114);
$pdf->Cell(17,$line_space,iconv("UTF-8", "TIS-620",$name1),0,'L');

$pdf->setxy(65,122);
$pdf->Cell(17,$line_space,iconv("UTF-8", "TIS-620",$position1),0,'L');

$pdf->setxy(50,130);
$pdf->Cell(17,$line_space,iconv("UTF-8", "TIS-620",$affiliation1),0,'L');

$pdf->setxy(75,138);
$pdf->Cell(17,$line_space,iconv("UTF-8", "TIS-620",$major),0,'L');

$pdf->setxy(63,146);
$pdf->Cell(17,$line_space,iconv("UTF-8", "TIS-620",$research_results1),0,'L');

$pdf->setxy(39,175);
$pdf->Cell(17,$line_space,iconv("UTF-8", "TIS-620",$fiscal_year1),0,'L');

$pdf->setxy(39,185);
$pdf->Cell(17,$line_space,iconv("UTF-8", "TIS-620",$fiscal_year2),0,'L');

$pdf->setxy(39,195);
$pdf->Cell(17,$line_space,iconv("UTF-8", "TIS-620",$fiscal_year3),0,'L');

$pdf->SetFont('THSarabun','',14);
$pdf->setxy(58,172);
$pdf->MultiCell(86,$line_space,iconv("UTF-8", "TIS-620",$project1),0,'L');

$pdf->setxy(145,172);
$pdf->MultiCell(44,$line_space,iconv("UTF-8", "TIS-620",$funding1),0,'L');

$pdf->setxy(58,182);
$pdf->MultiCell(86,$line_space,iconv("UTF-8", "TIS-620",$project2),0,'L');

$pdf->setxy(145,182);
$pdf->MultiCell(44,$line_space,iconv("UTF-8", "TIS-620",$funding2),0,'L');

$pdf->setxy(58,192);
$pdf->MultiCell(86,$line_space,iconv("UTF-8", "TIS-620",$project3),0,'L');

$pdf->setxy(145,192);
$pdf->MultiCell(44,$line_space,iconv("UTF-8", "TIS-620",$funding3),0,'L');

$pdf->SetFont('THSarabun','',14);
$pdf->setxy(40,237);
$pdf->Cell(20,$line_space,iconv("UTF-8", "TIS-620",$year1),0,'L');

$pdf->setxy(60,237);
$pdf->Cell(17,$line_space,iconv("UTF-8", "TIS-620",$name2),0,'L');

$pdf->setxy(120,237);
$pdf->Cell(20,$line_space,iconv("UTF-8", "TIS-620",$course1),0,'L');

$pdf->setxy(160,237);
$pdf->Cell(17,$line_space,iconv("UTF-8", "TIS-620",$status1),0,'L');

$pdf->setxy(40,247);
$pdf->Cell(20,$line_space,iconv("UTF-8", "TIS-620",$year2),0,'L');

$pdf->setxy(60,247);
$pdf->Cell(17,$line_space,iconv("UTF-8", "TIS-620",$name3),0,'L');

$pdf->setxy(120,247);
$pdf->Cell(20,$line_space,iconv("UTF-8", "TIS-620",$course2),0,'L');

$pdf->setxy(160,247);
$pdf->Cell(17,$line_space,iconv("UTF-8", "TIS-620",$status2),0,'L');


// หน้า 3
$pdf->AddPage();
$pdf->AddFont('THSarabun','B','THSarabun Bold.php');//ธรรมดา
$pdf->AddFont('THSarabun','','THSarabun.php');//ธรรมดา


$pdf->setfont('THSarabun','B','16');
$pdf->Cell(20);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'ระดับปริญญาเอก'),0,1);

//เส้นกรอบ
$pdf->SetLineWidth(0.2);
$pdf->Rect(20,15,170,30);

//เส้นแกน X
$pdf->SetLineWidth(0.2);
$pdf->Rect(20,25,170,0);

//เส้นแกน X
$pdf->SetLineWidth(0.2);
$pdf->Rect(20,35,170,0);

//เส้นแกน Y
$pdf->SetLineWidth(0.2);
$pdf->Rect(33,15,0,30);

//เส้นแกน Y
$pdf->SetLineWidth(0.2);
$pdf->Rect(60,15,0,30);

$pdf->SetLineWidth(0.2);
$pdf->Rect(120,15,0,30);

$pdf->SetLineWidth(0.2);
$pdf->Rect(160,15,0,30);

$pdf->Cell(12);
$pdf->Cell(55,$line_space+4,iconv("UTF-8", "TIS-620",'ลำดับ   ปีการศึกษา                     ชื่อ-นามสกุลนิสิต               หลักสูตร/สาขาวิชา       สถานะภาพนิสิต'),0,1);

$pdf->Cell(14);
$pdf->Cell(55,$line_space+4,iconv("UTF-8", "TIS-620",'1'),0,1);

$pdf->Cell(14);
$pdf->Cell(55,$line_space+4,iconv("UTF-8", "TIS-620",'2'),0,1);

$pdf->Cell(55,$line_space,iconv("UTF-8", "TIS-620",''),0,1);

$pdf->Cell(15);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'4.  นักวิจัยของหน่วยวิจัย   :  '),0,1);
$pdf->SetFont('THSarabun','',16);
$pdf->Cell(20);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'ชื่อ-นามสกุล  :  .................................................................................................................................................'),0,1);

$pdf->Cell(20);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'ตำแหน่งทางวิชาการ   :  ...................................................................................................................................'),0,1);

$pdf->Cell(20);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'สังกัด   :  ..........................................................................................................................................................'),0,1);

$pdf->Cell(20);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'สาขาที่มีความเชี่ยวชาญ   :  .............................................................................................................................'),0,1);

$pdf->Cell(20);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'ผลงานวิจัยที่ผ่านมา............................................................................................................................................'),0,1);

$pdf->Cell(20);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'ประสบการณ์การเป็นอาจารย์ที่ปรึกษาวิทยานิพนธ์หลักหรือร่วมของนิสิตระดับบัณฑิตศึกษา '),0,1);
$pdf->SetFont('THSarabun','B',16);
$pdf->Cell(20);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'ระดับปริญญาโท'),0,1);

//เส้นกรอบ
$pdf->SetLineWidth(0.2);
$pdf->Rect(20,115,170,30);

//เส้นแกน X
$pdf->SetLineWidth(0.2);
$pdf->Rect(20,125,170,0);

//เส้นแกน X
$pdf->SetLineWidth(0.2);
$pdf->Rect(20,135,170,0);

//เส้นแกน Y
$pdf->SetLineWidth(0.2);
$pdf->Rect(33,115,0,30);

//เส้นแกน Y
$pdf->SetLineWidth(0.2);
$pdf->Rect(60,115,0,30);

$pdf->SetLineWidth(0.2);
$pdf->Rect(120,115,0,30);

$pdf->SetLineWidth(0.2);
$pdf->Rect(160,115,0,30);

$pdf->Cell(12);
$pdf->Cell(55,$line_space+4,iconv("UTF-8", "TIS-620",'ลำดับ     ปีการศึกษา                   ชื่อ-นามสกุลนิสิต               หลักสูตร/สาขาวิชา       สถานะภาพนิสิต'),0,1);

$pdf->Cell(14);
$pdf->Cell(55,$line_space+4,iconv("UTF-8", "TIS-620",'1'),0,1);

$pdf->Cell(14);
$pdf->Cell(55,$line_space+4,iconv("UTF-8", "TIS-620",'2'),0,1);

$pdf->Cell(55,$line_space+4,iconv("UTF-8", "TIS-620",''),0,1);

$pdf->SetFont('THSarabun','B',16);
$pdf->Cell(20);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'ระดับปริญญาเอก'),0,1);

//เส้นกรอบ
$pdf->SetLineWidth(0.2);
$pdf->Rect(20,163,170,30);

//เส้นแกน X
$pdf->SetLineWidth(0.2);
$pdf->Rect(20,173,170,0);

//เส้นแกน X
$pdf->SetLineWidth(0.2);
$pdf->Rect(20,183,170,0);

//เส้นแกน Y
$pdf->SetLineWidth(0.2);
$pdf->Rect(33,163,0,30);

//เส้นแกน Y
$pdf->SetLineWidth(0.2);
$pdf->Rect(60,163,0,30);

$pdf->SetLineWidth(0.2);
$pdf->Rect(120,163,0,30);

$pdf->SetLineWidth(0.2);
$pdf->Rect(160,163,0,30);

$pdf->Cell(12);
$pdf->Cell(55,$line_space+4,iconv("UTF-8", "TIS-620",'ลำดับ     ปีที่ปรึกษา                   ชื่อ-นามสกุลนิสิต               หลักสูตร/สาขาวิชา       สถานะภาพนิสิต'),0,1);

$pdf->Cell(14);
$pdf->Cell(55,$line_space+4,iconv("UTF-8", "TIS-620",'1'),0,1);

$pdf->Cell(14);
$pdf->Cell(55,$line_space+4,iconv("UTF-8", "TIS-620",'2'),0,1);

$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(15);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'5.  นักวิจัยที่ปรึกษา    :  '),0,1);

$pdf->SetFont('THSarabun','',16);
$pdf->Cell(20);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'ชื่อ-นามสกุล  :  .................................................................................................................................................'),0,1);

$pdf->Cell(20);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'ตำแหน่งทางวิชาการ   :  ...................................................................................................................................'),0,1);

$pdf->Cell(20);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'สังกัด   :  ..........................................................................................................................................................'),0,1);

$pdf->Cell(20);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'สาขาที่มีความเชี่ยวชาญ   :  .............................................................................................................................'),0,1);

$pdf->SetFont('THSarabun','B',16);
$pdf->Cell(15);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'6. หลักการและเหตุผล '),0,1);

$pdf->SetFont('THSarabun','',16);
$pdf->Cell(20);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'...........................................................................................................................................................................'),0,1);
$pdf->Cell(20);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'...........................................................................................................................................................................'),0,1);
$pdf->Cell(20);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'...........................................................................................................................................................................'),0,1);
$pdf->Cell(20);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'...........................................................................................................................................................................'),0,1);
$pdf->Cell(20);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'...........................................................................................................................................................................'),0,1);

//ระดับปริญญาเอก
$pdf->SetFont('THSarabun','',14);
$pdf->setxy(40,27);
$pdf->Cell(20,$line_space,iconv("UTF-8", "TIS-620",$year3),0,'L');

$pdf->setxy(60,27);
$pdf->Cell(17,$line_space,iconv("UTF-8", "TIS-620",$name4),0,'L');

$pdf->setxy(120,27);
$pdf->Cell(20,$line_space,iconv("UTF-8", "TIS-620",$course3),0,'L');

$pdf->setxy(160,27);
$pdf->Cell(17,$line_space,iconv("UTF-8", "TIS-620",$status3),0,'L');

$pdf->setxy(40,37);
$pdf->Cell(20,$line_space,iconv("UTF-8", "TIS-620",$year4),0,'L');

//4.นักวิจัยของหน่วยวิจัย
$pdf->setxy(60,37);
$pdf->Cell(17,$line_space,iconv("UTF-8", "TIS-620",$name5),0,'L');

$pdf->setxy(120,37);
$pdf->Cell(20,$line_space,iconv("UTF-8", "TIS-620",$course4),0,'L');

$pdf->setxy(160,37);
$pdf->Cell(17,$line_space,iconv("UTF-8", "TIS-620",$status4),0,'L');

$pdf->SetFont('THSarabun','',16);
$pdf->setxy(55,58);
$pdf->Cell(17,$line_space,iconv("UTF-8", "TIS-620",$name6),0,'L');

$pdf->setxy(65,66);
$pdf->Cell(17,$line_space,iconv("UTF-8", "TIS-620",$position2),0,'L');

$pdf->setxy(50,74);
$pdf->Cell(17,$line_space,iconv("UTF-8", "TIS-620",$affiliation2),0,'L');

$pdf->setxy(75,82);
$pdf->Cell(17,$line_space,iconv("UTF-8", "TIS-620",$major2),0,'L');

$pdf->setxy(62,90);
$pdf->Cell(17,$line_space,iconv("UTF-8", "TIS-620",$research_results2),0,'L');

//ปริญญาโท
$pdf->SetFont('THSarabun','',14);
$pdf->setxy(40,127);
$pdf->Cell(20,$line_space,iconv("UTF-8", "TIS-620",$year5),0,'L');

$pdf->setxy(60,127);
$pdf->Cell(17,$line_space,iconv("UTF-8", "TIS-620",$name7),0,'L');

$pdf->setxy(120,127);
$pdf->Cell(20,$line_space,iconv("UTF-8", "TIS-620",$course5),0,'L');

$pdf->setxy(160,127);
$pdf->Cell(17,$line_space,iconv("UTF-8", "TIS-620",$status5),0,'L');

$pdf->setxy(40,137);
$pdf->Cell(20,$line_space,iconv("UTF-8", "TIS-620",$year6),0,'L');

$pdf->setxy(60,137);
$pdf->Cell(17,$line_space,iconv("UTF-8", "TIS-620",$name8),0,'L');

$pdf->setxy(120,137);
$pdf->Cell(20,$line_space,iconv("UTF-8", "TIS-620",$course6),0,'L');

$pdf->setxy(160,137);
$pdf->Cell(17,$line_space,iconv("UTF-8", "TIS-620",$status6),0,'L');


//ปริญญาเอก
$pdf->setxy(40,175);
$pdf->Cell(20,$line_space,iconv("UTF-8", "TIS-620",$year7),0,'L');

$pdf->setxy(60,175);
$pdf->Cell(17,$line_space,iconv("UTF-8", "TIS-620",$name9),0,'L');

$pdf->setxy(120,175);
$pdf->Cell(20,$line_space,iconv("UTF-8", "TIS-620",$major3),0,'L');

$pdf->setxy(160,175);
$pdf->Cell(17,$line_space,iconv("UTF-8", "TIS-620",$status7),0,'L');


$pdf->setxy(40,185);
$pdf->Cell(20,$line_space,iconv("UTF-8", "TIS-620",$year8),0,'L');

$pdf->setxy(60,185);
$pdf->Cell(17,$line_space,iconv("UTF-8", "TIS-620",$name10),0,'L');

$pdf->setxy(120,185);
$pdf->Cell(20,$line_space,iconv("UTF-8", "TIS-620",$major4),0,'L');

$pdf->setxy(160,185);
$pdf->Cell(17,$line_space,iconv("UTF-8", "TIS-620",$status8),0,'L');

//5. นักวิจัยที่ปรึกษา
$pdf->SetFont('THSarabun','',16);
$pdf->setxy(55,208);
$pdf->Cell(17,$line_space,iconv("UTF-8", "TIS-620",$name11),0,'L');

$pdf->setxy(65,216);
$pdf->Cell(17,$line_space,iconv("UTF-8", "TIS-620",$position3),0,'L');

$pdf->setxy(50,224);
$pdf->Cell(17,$line_space,iconv("UTF-8", "TIS-620",$affiliation3),0,'L');

$pdf->setxy(75,232);
$pdf->Cell(17,$line_space,iconv("UTF-8", "TIS-620",$major2),0,'L');


$pdf->setxy(30,247);
$pdf->MultiCell(150,$line_space+2,iconv("UTF-8", "TIS-620",$reasons),0,'L');

// หน้า 4
$pdf->AddPage();
$pdf->AddFont('THSarabun','B','THSarabun Bold.php');//ธรรมดา
$pdf->AddFont('THSarabun','','THSarabun.php');//ธรรมดา

$pdf->setfont('THSarabun','B','16');
$pdf->Cell(15);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'7.  วัตถุประสงค์ '),0,1);

$pdf->SetFont('THSarabun','',16);
$pdf->Cell(20);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'......................................................................................................................................................................'),0,1);
$pdf->Cell(20);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'......................................................................................................................................................................'),0,1);
$pdf->Cell(20);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'......................................................................................................................................................................'),0,1);
$pdf->Cell(20);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'......................................................................................................................................................................'),0,1);

$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",''),0,1);

$pdf->SetFont('THSarabun','B',16);
$pdf->Cell(15);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'8. พันธกิจ'),0,1);

$pdf->setfont('THSarabun','','16');
$pdf->Cell(20);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'8.1 พันธกิจด้านการวิจัย'),0,1);

$pdf->Cell(20);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'8.2 พันธกิจด้านการควบคุมวิทยานิพนธ์ระดับบัณฑิตศึกษา '),0,1);
$pdf->SetFont('THSarabun','',16);
$pdf->Cell(20);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'......................................................................................................................................................................'),0,1);



$pdf->setfont('THSarabun','B','16');
$pdf->Cell(15);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'9.  แผนการจัดการหน่วยวิจัย'),0,1);

$pdf->Cell(20);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'9.1  โครงสร้างหน่วยวิจัย'),0,1);

$pdf->SetFont('THSarabun','',16);
$pdf->Cell(20);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'......................................................................................................................................................................'),0,1);
$pdf->Cell(20);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'......................................................................................................................................................................'),0,1);
$pdf->Cell(20);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'......................................................................................................................................................................'),0,1);

$pdf->SetFont('THSarabun','B',16);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(15);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'10. เป้าหมาย (ให้กำหนดเป้าหมายในระยะ 5 ปี)'),0,1);

//เส้นกรอบ
$pdf->SetLineWidth(0.2);
$pdf->Rect(20,145,170,70);

//เส้นแกน X
$pdf->SetLineWidth(0.2);
$pdf->Rect(20,155,170,0);

//เส้นแกน X
$pdf->SetLineWidth(0.2);
$pdf->Rect(20,175,170,0);

//เส้นแกน X
$pdf->SetLineWidth(0.2);
$pdf->Rect(20,195,170,0);

//เส้นแกน Y
$pdf->SetLineWidth(0.2);
$pdf->Rect(33,145,0,70);

//เส้นแกน Y
$pdf->SetLineWidth(0.2);
$pdf->Rect(145,145,0,70);

$pdf->Cell(55,$line_space-2,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(15);
$pdf->Cell(55,$line_space,iconv("UTF-8", "TIS-620",'ปีที่                                        เป้าหมาย                                                    ผลผลิต '),0,1);

$pdf->Cell(55,$line_space,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(15);
$pdf->Cell(55,$line_space,iconv("UTF-8", "TIS-620",'1'),0,1);

$pdf->Cell(55,$line_space,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(55,$line_space,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(15);
$pdf->Cell(55,$line_space,iconv("UTF-8", "TIS-620",'2-3'),0,1);

$pdf->Cell(55,$line_space,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(55,$line_space,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(15);
$pdf->Cell(55,$line_space,iconv("UTF-8", "TIS-620",'4-5'),0,1);


//เพิ่มข้อมูล
$pdf->SetFont('THSarabun','',16);
$pdf->setxy(30,13);
$pdf->MultiCell(150,$line_space+2,iconv("UTF-8", "TIS-620",$objective),0,'L');

$pdf->setxy(30,78);
$pdf->Cell(20,$line_space,iconv("UTF-8", "TIS-620",$Control),0,'L');

$pdf->setxy(30,101);
$pdf->MultiCell(150,$line_space+2,iconv("UTF-8", "TIS-620",$describe),0,'L');

$pdf->SetFont('THSarabun','',14);
$pdf->setxy(34,155);
$pdf->MultiCell(110,$line_space+1,iconv("UTF-8", "TIS-620",$target1),0,'L');

$pdf->setxy(145,155);
$pdf->MultiCell(43,$line_space+1,iconv("UTF-8", "TIS-620",$product1),0,'L');

$pdf->setxy(34,175);
$pdf->MultiCell(110,$line_space+1,iconv("UTF-8", "TIS-620",$target2),0,'L');

$pdf->setxy(145,175);
$pdf->MultiCell(43,$line_space+1,iconv("UTF-8", "TIS-620",$product2),0,'L');

$pdf->setxy(34,195);
$pdf->MultiCell(110,$line_space+1,iconv("UTF-8", "TIS-620",$target3),0,'L');

$pdf->setxy(145,195);
$pdf->MultiCell(43,$line_space+1,iconv("UTF-8", "TIS-620",$product3),0,'L');

// หน้า 5
$pdf->AddPage();
$pdf->AddFont('THSarabun','B','THSarabun Bold.php');//ธรรมดา
$pdf->AddFont('THSarabun','','THSarabun.php');//ธรรมดา

$pdf->setfont('THSarabun','B','16');
$pdf->Cell(15);
$pdf->Cell(55,$line_space,iconv("UTF-8", "TIS-620",'11. แผนการดำเนินงาน'),0,1);

$pdf->setfont('THSarabun','','16');
$pdf->Cell(20);
$pdf->Cell(55,$line_space,iconv("UTF-8", "TIS-620",' แผนด้านการวิจัย / แผนด้านการควบคุมวิทยานิพนธ์ภายใต้การดำเนินงานของหน่วยวิจัย / แผนการสร้าง'),0,1);

$pdf->Cell(20);
$pdf->Cell(55,$line_space,iconv("UTF-8", "TIS-620",' เครือข่ายความร่วมมือทางวิชาการทั้งในและต่างประเทศ'),0,1);

$pdf->setfont('THSarabun','','16');
$pdf->Cell(20);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'11.1 แผนการดำเนินงานระยะสั้น (ระยะเริ่มต้น ปีงบประมาณ         )'),0,1);

//เส้นกรอบ
$pdf->SetLineWidth(0.2);
$pdf->Rect(20,32,170,72);

//เส้นแกน X
$pdf->SetLineWidth(0.2);
$pdf->Rect(112,42,78,0);

//เส้นแกน X
$pdf->SetLineWidth(0.2);
$pdf->Rect(20,55,170,0);

//เส้นแกน X
$pdf->SetLineWidth(0.2);
$pdf->Rect(20,65,170,0);

//เส้นแกน X
$pdf->SetLineWidth(0.2);
$pdf->Rect(20,75,170,0);

//เส้นแกน X
$pdf->SetLineWidth(0.2);
$pdf->Rect(20,85,170,0);

//เส้นแกน X
$pdf->SetLineWidth(0.2);
$pdf->Rect(20,95,170,0);

//เส้นแกน Y
$pdf->SetLineWidth(0.2);
$pdf->Rect(33,32,0,72);

//เส้นแกน Y
$pdf->SetLineWidth(0.2);
$pdf->Rect(112,32,0,72);
//เส้นแกน Y
$pdf->SetLineWidth(0.2);
$pdf->Rect(125,42,0,62);
//เส้นแกน Y
$pdf->SetLineWidth(0.2);
$pdf->Rect(138,42,0,62);
//เส้นแกน Y
$pdf->SetLineWidth(0.2);
$pdf->Rect(151,42,0,62);
//เส้นแกน Y
$pdf->SetLineWidth(0.2);
$pdf->Rect(164,42,0,62);
//เส้นแกน Y
$pdf->SetLineWidth(0.2);
$pdf->Rect(177,42,0,62);

$pdf->setfont('THSarabun','B','16');
$pdf->Cell(11);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'ลำดับที่                           กิจกรรม                                        เดือน (ปีงบประมาณ         )'),0,1);

$pdf->Cell(55,$line_space-3,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(105);
$pdf->Cell(55,$line_space-2,iconv("UTF-8", "TIS-620",'ต.ค.-     ธ.ค.-   ก.พ.-   เม.ย.-    มิ.ย.-    ส.ค.-'),0,1);

$pdf->Cell(105);
$pdf->Cell(55,$line_space,iconv("UTF-8", "TIS-620",'พ.ค.-     ม.ค.-   มี.ค.-   พ.ค.-    ก.ค.-    ก.ย.-'),0,1);

$pdf->Cell(11);
$pdf->Cell(55,$line_space+4,iconv("UTF-8", "TIS-620",'1'),0,1);

$pdf->Cell(11);
$pdf->Cell(55,$line_space+4,iconv("UTF-8", "TIS-620",'2'),0,1);

$pdf->Cell(11);
$pdf->Cell(55,$line_space+4,iconv("UTF-8", "TIS-620",'3'),0,1);

$pdf->Cell(11);
$pdf->Cell(55,$line_space+4,iconv("UTF-8", "TIS-620",'4'),0,1);

$pdf->Cell(11);
$pdf->Cell(55,$line_space+4,iconv("UTF-8", "TIS-620",'5'),0,1);
$pdf->Cell(55,$line_space,iconv("UTF-8", "TIS-620",''),0,1);

$pdf->setfont('THSarabun','B','16');
$pdf->Cell(20);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'11.2 แผนการดำเนินงานระยะยาว (5 ปี: ปีงบประมาณ         -         )'),0,1);


//เส้นกรอบ
$pdf->SetLineWidth(0.2);
$pdf->Rect(20,120,170,70);

//เส้นแกน X
$pdf->SetLineWidth(0.2);
$pdf->Rect(20,130,170,0);

//เส้นแกน X
$pdf->SetLineWidth(0.2);
$pdf->Rect(20,150,170,0);

//เส้นแกน X
$pdf->SetLineWidth(0.2);
$pdf->Rect(20,170,170,0);

//เส้นแกน Y
$pdf->SetLineWidth(0.2);
$pdf->Rect(33,120,0,70);

//เส้นแกน Y
$pdf->SetLineWidth(0.2);
$pdf->Rect(145,120,0,70);

$pdf->Cell(55,$line_space-2,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(15);
$pdf->Cell(55,$line_space,iconv("UTF-8", "TIS-620",'ปีที่                                        เป้าหมาย                                                    ผลผลิต '),0,1);

$pdf->Cell(55,$line_space,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(15);
$pdf->Cell(55,$line_space,iconv("UTF-8", "TIS-620",'1'),0,1);

$pdf->Cell(55,$line_space,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(55,$line_space,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(15);
$pdf->Cell(55,$line_space,iconv("UTF-8", "TIS-620",'2-3'),0,1);

$pdf->Cell(55,$line_space,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(55,$line_space,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(15);
$pdf->Cell(55,$line_space,iconv("UTF-8", "TIS-620",'4-5'),0,1);

$pdf->Cell(55,$line_space,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(55,$line_space,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(55,$line_space,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(55,$line_space,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(15);
$pdf->Cell(55,$line_space,iconv("UTF-8", "TIS-620",'12. ความร่วมมือ'),0,1);

$pdf->setfont('','','16');
$pdf->Cell(20);
$pdf->Cell(55,$line_space,iconv("UTF-8", "TIS-620",'12.1 หน่วยงานภายในมหาวิทยาลัยนเรศวร  '),0,1);

$pdf->setfont('','','18');
$pdf->Cell(25);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'-'),0,1);
$pdf->Cell(25);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'-'),0,1);

$pdf->Cell(20);
$pdf->Cell(55,$line_space,iconv("UTF-8", "TIS-620",'12.2 หน่วยงานภายนอกมหาวิทยาลัยนเรศวร ในประเ'),0,1);

$pdf->Cell(25);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'-'),0,1);
$pdf->Cell(25);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'-'),0,1);

//เพิ่มข้อมูล
//ปีงบประมาณในตารางแรก
$pdf->SetFont('THSarabun','B',16);
$pdf->setxy(162,33);
$pdf->Cell(20,$line_space,iconv("UTF-8", "TIS-620",$early_stage),0,'L');
//ปีงบประมาณหัวตาราง2
$pdf->setxy(114,110);
$pdf->Cell(20,$line_space,iconv("UTF-8", "TIS-620",$early_stage),0,'L');
$pdf->setxy(127,110);
$pdf->Cell(20,$line_space,iconv("UTF-8", "TIS-620",$early_stage+4),0,'L');


$pdf->SetFont('THSarabun','',16);
$pdf->setxy(120,25);
$pdf->Cell(20,$line_space,iconv("UTF-8", "TIS-620",$early_stage),0,'L');

$pdf->SetFont('THSarabun','',14);
$pdf->setxy(33,54);
$pdf->MultiCell(77,$line_space,iconv("UTF-8", "TIS-620",$activity1),0,'L');

$pdf->setxy(33,64);
$pdf->MultiCell(77,$line_space,iconv("UTF-8", "TIS-620",$activity2),0,'L');

$pdf->setxy(33,74);
$pdf->MultiCell(77,$line_space,iconv("UTF-8", "TIS-620",$activity3),0,'L');

$pdf->setxy(33,84);
$pdf->MultiCell(77,$line_space,iconv("UTF-8", "TIS-620",$activity4),0,'L');

$pdf->setxy(33,94);
$pdf->MultiCell(77,$line_space,iconv("UTF-8", "TIS-620",$activity5),0,'L');

//ตาราง11.2
$pdf->setxy(34,130);
$pdf->MultiCell(110,$line_space,iconv("UTF-8", "TIS-620",$target4),0,'L');

$pdf->setxy(145,130);
$pdf->MultiCell(45,$line_space,iconv("UTF-8", "TIS-620",$product4),0,'L');

$pdf->setxy(34,150);
$pdf->MultiCell(110,$line_space,iconv("UTF-8", "TIS-620",$target5),0,'L');

$pdf->setxy(145,150);
$pdf->MultiCell(45,$line_space,iconv("UTF-8", "TIS-620",$product5),0,'L');

$pdf->setxy(34,170);
$pdf->MultiCell(110,$line_space,iconv("UTF-8", "TIS-620",$target6),0,'L');

$pdf->setxy(145,170);
$pdf->MultiCell(45,$line_space,iconv("UTF-8", "TIS-620",$product6),0,'L');

$pdf->setfont('','','16');
$pdf->setxy(38,212);
$pdf->Cell(45,$line_space,iconv("UTF-8", "TIS-620",$inside1),0,'L');

$pdf->setxy(38,220);
$pdf->Cell(45,$line_space,iconv("UTF-8", "TIS-620",$inside2),0,'L');

$pdf->setxy(38,234);
$pdf->Cell(45,$line_space,iconv("UTF-8", "TIS-620",$outside1),0,'L');

$pdf->setxy(38,242);
$pdf->Cell(45,$line_space,iconv("UTF-8", "TIS-620",$outside2),0,'L');

// หน้า 6
$pdf->AddPage();
$pdf->AddFont('THSarabun','B','THSarabun Bold.php');//ธรรมดา
$pdf->AddFont('THSarabun','','THSarabun.php');//ธรรมดา

$pdf->setfont('THSarabun','B','16');
$pdf->Cell(15);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'13. ตัวชี้วัดเพื่อการประเมินผลสำเร็จของโครงการ* (แยกเป็น KPI รายปี ติดต่อกัน  5 ปี)'),0,1);

$pdf->setfont('THSarabun','','16');
$pdf->Cell(20);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'13.1 จำนวนผลงานวิจัย (ที่มีการระบุชื่อหน่วยวิจัย ในที่อยู่ของผู้วิจัย) '),0,1);
$pdf->Cell(55,$line_space-4,iconv("UTF-8", "TIS-620",' '),0,1);

//เส้นกรอบ
$pdf->SetLineWidth(0.2);
$pdf->Rect(15,25,180,125);

//เส้นแกน X
$pdf->SetLineWidth(0.2);
$pdf->Rect(15,45,180,0);

//เส้นแกน X
$pdf->SetLineWidth(0.2);
$pdf->Rect(28,60,167,0);

//เส้นแกน X
$pdf->SetLineWidth(0.2);
$pdf->Rect(28,75,167,0);

//เส้นแกน X
$pdf->SetLineWidth(0.2);
$pdf->Rect(15,90,180,0);

//เส้นแกน X
$pdf->SetLineWidth(0.2);
$pdf->Rect(28,120,167,0);

//เส้นแกน X
$pdf->SetLineWidth(0.2);
$pdf->Rect(28,105,167,0);

//เส้นแกน X
$pdf->SetLineWidth(0.2);
$pdf->Rect(28,135,167,0);

//เส้นแกน X
$pdf->SetLineWidth(0.2);
$pdf->Rect(125,35,70,0);

//เส้นแกน Y
$pdf->SetLineWidth(0.2);
$pdf->Rect(28,25,0,125);

//เส้นแกน Y
$pdf->SetLineWidth(0.2);
$pdf->Rect(125,25,0,125);
//เส้นแกน Y
$pdf->SetLineWidth(0.2);
$pdf->Rect(139,35,0,115);
//เส้นแกน Y
$pdf->SetLineWidth(0.2);
$pdf->Rect(154,35,0,115);
//เส้นแกน Y
$pdf->SetLineWidth(0.2);
$pdf->Rect(168,35,0,115);
//เส้นแกน Y
$pdf->SetLineWidth(0.2);
$pdf->Rect(182,35,0,115);

$pdf->setfont('THSarabun','B','16');
$pdf->Cell(7);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'ระดับ                ประเภทของผลงาน (จำนวน)                                                 ปีงบประมาณ'),0,1);

$pdf->setXY(19,63);
$pdf->Cell(55,$line_space+4,iconv("UTF-8", "TIS-620",'A'),0,1);

$pdf->setXY(19,110);
$pdf->Cell(55,$line_space+4,iconv("UTF-8", "TIS-620",'B'),0,1);

$pdf->setfont('','','14');
$pdf->setXY(28,43);
$pdf->Cell(55,$line_space+4,iconv("UTF-8", "TIS-620",'1.มีผลงานตีพิมพ์เต็มรูปแบบระดับนานาชาติซึ่งอยู่ในฐาน ISI และ '),0,1);

$pdf->setXY(28,49);
$pdf->Cell(55,$line_space+4,iconv("UTF-8", "TIS-620",' Scopus ในฐานะผู้วิจัยชื่อแรก หรือผู้รับผิดชอบบทความวิจัย'),0,1);

$pdf->setfont('','','14');
$pdf->setXY(28,58);
$pdf->Cell(55,$line_space+4,iconv("UTF-8", "TIS-620",'2.มีผลงานในรูปแบบอื่น เช่น ผลงานวิจัยตีพิมพ์  อนุสิทธิบัตร สิทธิบัตร '),0,1);

$pdf->setXY(28,63);
$pdf->Cell(55,$line_space+4,iconv("UTF-8", "TIS-620",'ในฐานะผู้วิจัยชื่อแรก หรือผู้รับผิดชอบบทความวิจัย หรือเจ้าของผลงาน'),0,1);

$pdf->setXY(28,68);
$pdf->Cell(55,$line_space+4,iconv("UTF-8", "TIS-620",'หลัก'),0,1);

$pdf->setXY(28,74);
$pdf->Cell(55,$line_space+4,iconv("UTF-8", "TIS-620",'3.ได้รับทุนสนับสนุนการวิจัยทุกปี (ทุน คปก./ สกอ. เป็นต้น)'),0,1);

$pdf->setXY(28,89);
$pdf->Cell(55,$line_space+4,iconv("UTF-8", "TIS-620",'1. ตีพิมพ์ในวารสารระดับนานาชาติ (ไม่มีค่า Impact Factor)  หรือ'),0,1);

$pdf->setXY(28,104);
$pdf->Cell(55,$line_space+4,iconv("UTF-8", "TIS-620",'2. ตีพิมพ์ในวารสารระดับชาติ  หรือ'),0,1);

$pdf->setXY(28,118);
$pdf->Cell(55,$line_space+4,iconv("UTF-8", "TIS-620",'3. นำเสนอในการประชุมวิชาการ ที่มีการตีพิมพ์บทความบน '),0,1);

$pdf->setXY(28,125);
$pdf->Cell(55,$line_space+4,iconv("UTF-8", "TIS-620",'Proceedings  หรือ'),0,1);

$pdf->setXY(28,134);
$pdf->Cell(55,$line_space+4,iconv("UTF-8", "TIS-620",'4. ได้สิ่งประดิษฐ์ อุปกรณ์ เครื่องมือ หรืออื่นๆ เช่น ฐานข้อมูล Software    '),0,1);

$pdf->setXY(28,139);
$pdf->Cell(55,$line_space+4,iconv("UTF-8", "TIS-620",'ที่สามารถนำไปใช้ประโยชน์ได้ต่อไป  หรือ'),0,1);


$pdf->setfont('','','12');
$pdf->Cell(55,$line_space,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->cell(28);
$pdf->Cell(55,$line_space,iconv("UTF-8", "TIS-620",'*หมายเหตุ: เกณฑ์การติดตามและประเมินผลหน่วยวิจัยให้เป็นไปตามกฎเกณฑ์ตามประกาศคณะสหเวชศาสตร์ เรื่อง การจัดตั้ง'),0,1);

$pdf->cell(28);
$pdf->Cell(55,$line_space,iconv("UTF-8", "TIS-620",'และการสนับสนุนหน่วยวิจัย (Research Unit) คณะสหเวชศาสตร์ มหาวิทยาลัยนเรศวร ลงวันที่ 7 มิถุนายน 2562'),0,1);

$pdf->setfont('','','16');
$pdf->Cell(55,$line_space,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->cell(15);
$pdf->Cell(55,$line_space,iconv("UTF-8", "TIS-620",'13.2 จำนวนนิสิตระดับบัณฑิตศึกษาที่ทำวิทยานิพนธ์ภายใต้การดำเนินงานของหน่วยวิจัย'),0,1);

//เส้นกรอบ
$pdf->SetLineWidth(0.2);
$pdf->Rect(15,180,180,40);

//เส้นแกน X
$pdf->SetLineWidth(0.2);
$pdf->Rect(15,190,180,0);

//เส้นแกน X
$pdf->SetLineWidth(0.2);
$pdf->Rect(15,205,180,0);

//เส้นแกน Y
$pdf->SetLineWidth(0.2);
$pdf->Rect(95,180,0,40);

//เส้นแกน Y
$pdf->SetLineWidth(0.2);
$pdf->Rect(115,180,0,40);

//เส้นแกน Y
$pdf->SetLineWidth(0.2);
$pdf->Rect(135,180,0,40);

//เส้นแกน Y
$pdf->SetLineWidth(0.2);
$pdf->Rect(155,180,0,40);

//เส้นแกน Y
$pdf->SetLineWidth(0.2);
$pdf->Rect(175,180,0,40);

$pdf->setfont('','B','14');
$pdf->Cell(55,$line_space-4,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->cell(35);
$pdf->Cell(55,$line_space,iconv("UTF-8", "TIS-620",'ปีการศึกษา'),0,1);

$pdf->Cell(55,$line_space-4,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(55,$line_space-2,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->cell(6);
$pdf->Cell(55,$line_space,iconv("UTF-8", "TIS-620",'ปีการศึกษาจำนวนนิสิตทำวิทยานิพนธ์ระดับปริญญาโท'),0,1);

$pdf->Cell(55,$line_space-4,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(55,$line_space-2,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(55,$line_space-2,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->cell(6);
$pdf->Cell(55,$line_space,iconv("UTF-8", "TIS-620",'ปีการศึกษาจำนวนนิสิตทำวิทยานิพนธ์ระดับปริญญาเอก'),0,1);

$pdf->setfont('','','15');
$pdf->Cell(55,$line_space,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->cell(15);
$pdf->Cell(55,$line_space,iconv("UTF-8", "TIS-620",'หมายเหตุ: นับจำนวนนิสิตทั้งหมดในแต่ละปีการศึกษา'),0,1);

//เพิ่มข้อมูล
$pdf->SetFont('THSarabun','B',16);
$pdf->setxy(127,37);
$pdf->Cell(20,$line_space,iconv("UTF-8", "TIS-620",$A1),0,'C');
$pdf->setxy(141,37);
$pdf->Cell(20,$line_space,iconv("UTF-8", "TIS-620",$A2),0,'C');
$pdf->setxy(156,37);
$pdf->Cell(20,$line_space,iconv("UTF-8", "TIS-620",$A3),0,'C');
$pdf->setxy(170,37);
$pdf->Cell(20,$line_space,iconv("UTF-8", "TIS-620",$A4),0,'C');
$pdf->setxy(183,37);
$pdf->Cell(20,$line_space,iconv("UTF-8", "TIS-620",$A5),0,'C');

$pdf->setxy(130,49);
$pdf->Cell(20,$line_space,iconv("UTF-8", "TIS-620",$A11),0,'C');
$pdf->setxy(143,49);
$pdf->Cell(20,$line_space,iconv("UTF-8", "TIS-620",$A12),0,'C');
$pdf->setxy(157,49);
$pdf->Cell(20,$line_space,iconv("UTF-8", "TIS-620",$A13),0,'C');
$pdf->setxy(169,49);
$pdf->Cell(20,$line_space,iconv("UTF-8", "TIS-620",$A14),0,'C');
$pdf->setxy(182,49);
$pdf->Cell(20,$line_space,iconv("UTF-8", "TIS-620",$A15),0,'C');

$pdf->setxy(130,64);
$pdf->Cell(20,$line_space,iconv("UTF-8", "TIS-620",$A21),0,'C');
$pdf->setxy(143,64);
$pdf->Cell(20,$line_space,iconv("UTF-8", "TIS-620",$A22),0,'C');
$pdf->setxy(156,64);
$pdf->Cell(20,$line_space,iconv("UTF-8", "TIS-620",$A23),0,'C');
$pdf->setxy(169,64);
$pdf->Cell(20,$line_space,iconv("UTF-8", "TIS-620",$A24),0,'C');
$pdf->setxy(182,64);
$pdf->Cell(20,$line_space,iconv("UTF-8", "TIS-620",$A25),0,'C');

$pdf->setxy(130,79);
$pdf->Cell(20,$line_space,iconv("UTF-8", "TIS-620",$A31),0,'C');
$pdf->setxy(143,79);
$pdf->Cell(20,$line_space,iconv("UTF-8", "TIS-620",$A32),0,'C');
$pdf->setxy(156,79);
$pdf->Cell(20,$line_space,iconv("UTF-8", "TIS-620",$A33),0,'C');
$pdf->setxy(169,79);
$pdf->Cell(20,$line_space,iconv("UTF-8", "TIS-620",$A34),0,'C');
$pdf->setxy(182,79);
$pdf->Cell(20,$line_space,iconv("UTF-8", "TIS-620",$A35),0,'C');

$pdf->setxy(130,94);
$pdf->Cell(20,$line_space,iconv("UTF-8", "TIS-620",$A41),0,'C');
$pdf->setxy(143,94);
$pdf->Cell(20,$line_space,iconv("UTF-8", "TIS-620",$A42),0,'C');
$pdf->setxy(156,94);
$pdf->Cell(20,$line_space,iconv("UTF-8", "TIS-620",$A43),0,'C');
$pdf->setxy(169,94);
$pdf->Cell(20,$line_space,iconv("UTF-8", "TIS-620",$A44),0,'C');
$pdf->setxy(182,94);
$pdf->Cell(20,$line_space,iconv("UTF-8", "TIS-620",$A45),0,'C');

$pdf->setxy(130,109);
$pdf->Cell(20,$line_space,iconv("UTF-8", "TIS-620",$A51),0,'C');
$pdf->setxy(143,109);
$pdf->Cell(20,$line_space,iconv("UTF-8", "TIS-620",$A52),0,'C');
$pdf->setxy(156,109);
$pdf->Cell(20,$line_space,iconv("UTF-8", "TIS-620",$A53),0,'C');
$pdf->setxy(169,109);
$pdf->Cell(20,$line_space,iconv("UTF-8", "TIS-620",$A54),0,'C');
$pdf->setxy(182,109);
$pdf->Cell(20,$line_space,iconv("UTF-8", "TIS-620",$A55),0,'C');

$pdf->setxy(130,124);
$pdf->Cell(20,$line_space,iconv("UTF-8", "TIS-620",$A61),0,'C');
$pdf->setxy(143,124);
$pdf->Cell(20,$line_space,iconv("UTF-8", "TIS-620",$A62),0,'C');
$pdf->setxy(156,124);
$pdf->Cell(20,$line_space,iconv("UTF-8", "TIS-620",$A63),0,'C');
$pdf->setxy(169,124);
$pdf->Cell(20,$line_space,iconv("UTF-8", "TIS-620",$A64),0,'C');
$pdf->setxy(182,124);
$pdf->Cell(20,$line_space,iconv("UTF-8", "TIS-620",$A65),0,'C');

$pdf->setxy(130,139);
$pdf->Cell(20,$line_space,iconv("UTF-8", "TIS-620",$A71),0,'C');
$pdf->setxy(143,139);
$pdf->Cell(20,$line_space,iconv("UTF-8", "TIS-620",$A72),0,'C');
$pdf->setxy(156,139);
$pdf->Cell(20,$line_space,iconv("UTF-8", "TIS-620",$A73),0,'C');
$pdf->setxy(169,139);
$pdf->Cell(20,$line_space,iconv("UTF-8", "TIS-620",$A74),0,'C');
$pdf->setxy(182,139);
$pdf->Cell(20,$line_space,iconv("UTF-8", "TIS-620",$A75),0,'C');


//ตาราง 13.2
$pdf->setxy(100,182);
$pdf->Cell(20,$line_space,iconv("UTF-8", "TIS-620",$B1),0,'C');
$pdf->setxy(120,182);
$pdf->Cell(20,$line_space,iconv("UTF-8", "TIS-620",$B2),0,'C');
$pdf->setxy(140,182);
$pdf->Cell(20,$line_space,iconv("UTF-8", "TIS-620",$B3),0,'C');
$pdf->setxy(160,182);
$pdf->Cell(20,$line_space,iconv("UTF-8", "TIS-620",$B4),0,'C');
$pdf->setxy(180,182);
$pdf->Cell(20,$line_space,iconv("UTF-8", "TIS-620",$B5),0,'C');

$pdf->setxy(100,194);
$pdf->Cell(20,$line_space,iconv("UTF-8", "TIS-620",$B11),0,'C');
$pdf->setxy(120,194);
$pdf->Cell(20,$line_space,iconv("UTF-8", "TIS-620",$B12),0,'C');
$pdf->setxy(140,194);
$pdf->Cell(20,$line_space,iconv("UTF-8", "TIS-620",$B13),0,'C');
$pdf->setxy(160,194);
$pdf->Cell(20,$line_space,iconv("UTF-8", "TIS-620",$B14),0,'C');
$pdf->setxy(180,194);
$pdf->Cell(20,$line_space,iconv("UTF-8", "TIS-620",$B15),0,'C');

$pdf->setxy(100,209);
$pdf->Cell(20,$line_space,iconv("UTF-8", "TIS-620",$B21),0,'C');
$pdf->setxy(120,209);
$pdf->Cell(20,$line_space,iconv("UTF-8", "TIS-620",$B22),0,'C');
$pdf->setxy(140,209);
$pdf->Cell(20,$line_space,iconv("UTF-8", "TIS-620",$B23),0,'C');
$pdf->setxy(160,209);
$pdf->Cell(20,$line_space,iconv("UTF-8", "TIS-620",$B24),0,'C');
$pdf->setxy(180,209);
$pdf->Cell(20,$line_space,iconv("UTF-8", "TIS-620",$B25),0,'C');

// หน้า 7
$pdf->AddPage();
$pdf->AddFont('THSarabun','B','THSarabun Bold.php');//ธรรมดา
$pdf->AddFont('THSarabun','','THSarabun.php');//ธรรมดา

$pdf->setfont('THSarabun','B','16');
$pdf->Cell(15);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'14. งบประมาณ '),0,1);

$pdf->setfont('THSarabun','','16');
$pdf->Cell(20);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'14.1 แหล่งงบประมาณ'),0,1);

$pdf->Cell(30);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'1. งบประมาณสำหรับการบริหารจัดการ : '),0,1);

$pdf->Cell(40);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'-   งบประมาณสนับสนุนจากเงินรายได้ คณะสหเวชศาสตร์ มหาวิทยาลัยนเรศวร'),0,1);

$pdf->Cell(30);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'2. งบประมาณสนับสนุนการวิจัย : '),0,1);

$pdf->Cell(40);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'-   ทุนวิจัยจาก'),0,1);
$pdf->Cell(40);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'-   ทุนวิจัยจาก'),0,1);

$pdf->Cell(40);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",''),0,1);

$pdf->Cell(20);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'14.2 แผนการหางบประมาณจากแหล่งทุนภายนอก'),0,1);

//เส้นกรอบ
$pdf->SetLineWidth(0.2);
$pdf->Rect(30,80,130,30);

//เส้นแกน X
$pdf->SetLineWidth(0.2);
$pdf->Rect(30,95,130,0);

//เส้นแกน X
$pdf->SetLineWidth(0.2);
$pdf->Rect(110,88,50,0);

//เส้นแกน Y
$pdf->SetLineWidth(0.2);
$pdf->Rect(110,80,0,30);

//เส้นแกน Y
$pdf->SetLineWidth(0.2);
$pdf->Rect(120,88,0,22);

//เส้นแกน Y
$pdf->SetLineWidth(0.2);
$pdf->Rect(130,88,0,22);

//เส้นแกน Y
$pdf->SetLineWidth(0.2);
$pdf->Rect(140,88,0,22);

//เส้นแกน Y
$pdf->SetLineWidth(0.2);
$pdf->Rect(150,88,0,22);

$pdf->setfont('THSarabun','','14');
$pdf->Cell(30);
$pdf->Cell(55,$line_space+4,iconv("UTF-8", "TIS-620",'รายการงบประมาณจากแหล่งทุนภายนอก                               ปีงบประมาณ'),0,1);

$pdf->Cell(55,$line_space,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(22);
$pdf->Cell(55,$line_space+4,iconv("UTF-8", "TIS-620",''),0,1);

$pdf->Cell(55,$line_space,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(55,$line_space,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(55,$line_space,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(55,$line_space,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(55,$line_space,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->setfont('THSarabun','','16');
$pdf->Cell(110);
$pdf->Cell(55,$line_space,iconv("UTF-8", "TIS-620",'ลงชื่อ..........................................................'),0,1);
$pdf->Cell(55,$line_space,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(110);
$pdf->Cell(55,$line_space,iconv("UTF-8", "TIS-620",'    (.............................................................)'),0,1);

$pdf->Cell(130);
$pdf->Cell(55,$line_space,iconv("UTF-8", "TIS-620",'หัวหน้าหน่วยวิจัย'),0,1);

$pdf->Cell(120);
$pdf->Cell(55,$line_space,iconv("UTF-8", "TIS-620",'วันที่ ......................................'),0,1);

//เพิ่มข้อมูล
$pdf->SetFont('THSarabun','',16);
$pdf->setxy(73,47);
$pdf->Cell(20,$line_space,iconv("UTF-8", "TIS-620",$capital1),0,'L');

$pdf->setxy(73,55);
$pdf->Cell(20,$line_space,iconv("UTF-8", "TIS-620",$capital2),0,'L');

$pdf->SetFont('THSarabun','',14);
$pdf->setxy(32,95);
$pdf->MultiCell(80,$line_space,iconv("UTF-8", "TIS-620",$report),0,'L');

$pdf->SetFont('THSarabun','B',14);
$pdf->setxy(110,89);
$pdf->MultiCell(80,$line_space,iconv("UTF-8", "TIS-620",$early_stage),0,'L');

$pdf->setxy(120,89);
$pdf->MultiCell(80,$line_space,iconv("UTF-8", "TIS-620",$early_stage+1),0,'L');

$pdf->setxy(130,89);
$pdf->MultiCell(80,$line_space,iconv("UTF-8", "TIS-620",$early_stage+2),0,'L');

$pdf->setxy(140,89);
$pdf->MultiCell(80,$line_space,iconv("UTF-8", "TIS-620",$early_stage+3),0,'L');

$pdf->setxy(150,89);
$pdf->MultiCell(80,$line_space,iconv("UTF-8", "TIS-620",$early_stage+4),0,'L');

$pdf->SetFont('THSarabun','',16);
$pdf->setxy(135,145);
$pdf->Cell(90,$line_space,iconv("UTF-8", "TIS-620",$name14),0,'C');

$pdf->setxy(137,157);
$pdf->Cell(90,$line_space,iconv("UTF-8", "TIS-620",$date1),0,'C');



//หน้า 8
$pdf->AddPage();
$pdf->AddFont('THSarabun','B','THSarabun Bold.php');//ธรรมดา
$pdf->AddFont('THSarabun','','THSarabun.php');//ธรรมดา
//ด้านบน
$pdf->Image('image/ahs-logo.png',90,10,45,45);
$pdf->SetFont('THSarabun','',14);

$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->setfont('','B','16');
$pdf->cell(70);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'แบบฟอร์มตอบรับเป็นนักวิจัยที่ปรึกษา'),0,1);

$pdf->Cell(6);
$pdf->Cell(5,$line_space+2,iconv("UTF-8", "TIS-620",'เรียน   คณบดีคณะสหเวชศาสตร์'),0,1);

$pdf->setfont('','','16');
$pdf->cell(18);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'ข้าพเจ้า ...........................................................................................................................................................'),0,1);

$pdf->cell(6);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'ตำแหน่งทางวิชาการ...................................................................คุณวุฒิสูงสุด..............................................................'),0,1);

$pdf->cell(6);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'สาขาวิชา..............................................................สำเร็จการศึกษาระดับสูงสุดจาก......................................................'),0,1);

$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->cell(18);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'ที่อยู่ปัจจุบัน เลขที่...........................................ถนน ...........................................ตรอก/ซอย..........................'),0,1);

$pdf->cell(6);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'แขวง/ตำบล...................................................อำเภอ ...........................................จังหวัด ...........................................'),0,1);

$pdf->cell(6);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'รหัสไปรษณีย์ ....................................โทรศัพท์................................................โทรสาร................................................'),0,1);

$pdf->cell(6);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'E-mail ........................................................................................................................................................................'),0,1);




$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",''),0,1);

$pdf->cell(18);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'สถานที่ทำงาน ................................................................................................................................................'),0,1);

$pdf->cell(6);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'เลขที่....................................................ถนน ......................................................ตรอก/ซอย........................................'),0,1);

$pdf->cell(6);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'แขวง/ตำบล...................................................อำเภอ ...........................................จังหวัด ...........................................'),0,1);

$pdf->cell(6);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'รหัสไปรษณีย์ ....................................โทรศัพท์................................................โทรสาร................................................'),0,1);

$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",''),0,1);

$pdf->cell(18);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'ตามที่ หน่วยวิจัย...................................................................................................... คณะสหเวชศาสตร์ '),0,1);

$pdf->cell(6);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'มหาวิทยาลัยนเรศวรได้เรียนเชิญข้าพเจ้า เป็นนักวิจัยที่ปรึกษาของหน่วยวิจัยฯ เพื่อให้คำปรึกษา และแนวทางใน'),0,1);

$pdf->cell(6);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'การดำเนินงานวิจัย อีกทั้งสร้างความร่วมมือในระดับสถาบัน ในที่นี้ ข้าพเจ้า'),0,1);

$pdf->cell(18);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'ยินดี และสามารถเป็นนักวิจัยร่วมของหน่วยวิจัยฯได้ '),0,1);

$pdf->cell(18);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'ไม่สามารถเป็นนักวิจัยร่วมของหน่วยวิจัยฯได้ '),0,1);

$pdf->cell(18);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'พร้อมกันนี้ข้าพเจ้าได้แนบเอกสารประวัตินักวิจัย (Curriculum Vitae) มาพร้อมแบบตอบรับเป็น'),0,1);

$pdf->cell(6);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'นักวิจัยที่ปรึกษานี้'),0,1);

$pdf->cell(18);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'จึงเรียนมาเพื่อโปรดทราบ'),0,1);

$pdf->Cell(55,$line_space,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(55,$line_space,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->setfont('THSarabun','','14');
$pdf->Cell(110);
$pdf->Cell(55,$line_space,iconv("UTF-8", "TIS-620",'ลงชื่อ..........................................................'),0,1);

$pdf->Cell(110);
$pdf->Cell(55,$line_space,iconv("UTF-8", "TIS-620",'    (.............................................................)'),0,1);

$pdf->Cell(110);
$pdf->Cell(55,$line_space,iconv("UTF-8", "TIS-620",'วันที่ .........เดือน........................พ.ศ.............'),0,1);

$pdf->SetFont('THSarabun','',34);
$pdf->SetXY(20,208);
$pdf->Cell(4,4,'',1,0);

$pdf->SetXY(20,216);
$pdf->Cell(4,4,'',1,0);

//เพิ่มข้อมูล
$pdf->SetFont('THSarabun','',16);
$pdf->setxy(50,70);
$pdf->Cell(80,$line_space,iconv("UTF-8", "TIS-620",$name15),0,'L');

$pdf->setxy(50,78);
$pdf->Cell(80,$line_space,iconv("UTF-8", "TIS-620",$position4),0,'L');

$pdf->setxy(130,78);
$pdf->Cell(80,$line_space,iconv("UTF-8", "TIS-620",$qualification1),0,'L');

$pdf->setxy(32,86);
$pdf->Cell(80,$line_space,iconv("UTF-8", "TIS-620",$major7),0,'L');

$pdf->setxy(135,86);
$pdf->Cell(80,$line_space,iconv("UTF-8", "TIS-620",$graduate1),0,'L');

$pdf->setxy(65,102);
$pdf->Cell(80,$line_space,iconv("UTF-8", "TIS-620",$add1),0,'L');
$pdf->setxy(115,102);
$pdf->Cell(80,$line_space,iconv("UTF-8", "TIS-620",$add2),0,'L');
$pdf->setxy(165,102);
$pdf->Cell(80,$line_space,iconv("UTF-8", "TIS-620",$add3),0,'L');

$pdf->setxy(40,110);
$pdf->Cell(80,$line_space,iconv("UTF-8", "TIS-620",$add4),0,'L');
$pdf->setxy(95,110);
$pdf->Cell(80,$line_space,iconv("UTF-8", "TIS-620",$add5),0,'L');
$pdf->setxy(145,110);
$pdf->Cell(80,$line_space,iconv("UTF-8", "TIS-620",$add6),0,'L');

$pdf->setxy(40,118);
$pdf->Cell(80,$line_space,iconv("UTF-8", "TIS-620",$add7),0,'L');
$pdf->setxy(90,118);
$pdf->Cell(80,$line_space,iconv("UTF-8", "TIS-620",$add8),0,'L');
$pdf->setxy(143,118);
$pdf->Cell(80,$line_space,iconv("UTF-8", "TIS-620",$add9),0,'L');

$pdf->setxy(40,126);
$pdf->Cell(80,$line_space,iconv("UTF-8", "TIS-620",$email),0,'L');

$pdf->setxy(50,142);
$pdf->Cell(80,$line_space,iconv("UTF-8", "TIS-620",$place),0,'L');

$pdf->setxy(40,150);
$pdf->Cell(80,$line_space,iconv("UTF-8", "TIS-620",$add12),0,'L');
$pdf->setxy(90,150);
$pdf->Cell(80,$line_space,iconv("UTF-8", "TIS-620",$add22),0,'L');
$pdf->setxy(155,150);
$pdf->Cell(80,$line_space,iconv("UTF-8", "TIS-620",$add32),0,'L');

$pdf->setxy(40,158);
$pdf->Cell(80,$line_space,iconv("UTF-8", "TIS-620",$add42),0,'L');
$pdf->setxy(92,158);
$pdf->Cell(80,$line_space,iconv("UTF-8", "TIS-620",$add52),0,'L');
$pdf->setxy(145,158);
$pdf->Cell(80,$line_space,iconv("UTF-8", "TIS-620",$add62),0,'L');

$pdf->setxy(40,166);
$pdf->Cell(80,$line_space,iconv("UTF-8", "TIS-620",$add72),0,'L');
$pdf->setxy(90,166);
$pdf->Cell(80,$line_space,iconv("UTF-8", "TIS-620",$add82),0,'L');
$pdf->setxy(145,166);
$pdf->Cell(80,$line_space,iconv("UTF-8", "TIS-620",$add92),0,'L');

$pdf->setxy(57,182);
$pdf->Cell(80,$line_space,iconv("UTF-8", "TIS-620",$research_unit),0,'L');

$pdf->SetFont('THSarabun','',14);
$pdf->setxy(127,263);
$pdf->Cell(80,$line_space,iconv("UTF-8", "TIS-620",$name15),0,'L');

$pdf->setxy(127,269);
$pdf->Cell(80,$line_space,iconv("UTF-8", "TIS-620",$d),0,'L');

$pdf->setxy(141,269);
$pdf->Cell(80,$line_space,iconv("UTF-8", "TIS-620",$m),0,'L');

$pdf->setxy(165,269);
$pdf->Cell(80,$line_space,iconv("UTF-8", "TIS-620",$y),0,'L');

//หน้า 9
$pdf->AddPage();
$pdf->AddFont('THSarabun','B','THSarabun Bold.php');//ธรรมดา
$pdf->AddFont('THSarabun','','THSarabun.php');//ธรรมดา

//ด้านบน
$pdf->Image('image/ahs-logo.png',90,10,45,45);
$pdf->SetFont('THSarabun','',14);

$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->setfont('','B','16');
$pdf->cell(75);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'แบบฟอร์มตอบรับเป็นนักวิจัยร่วม'),0,1);

$pdf->Cell(6);
$pdf->Cell(5,$line_space+2,iconv("UTF-8", "TIS-620",'เรียน   คณบดีคณะสหเวชศาสตร์'),0,1);

$pdf->setfont('','','16');
$pdf->cell(18);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'ข้าพเจ้า ...........................................................................................................................................................'),0,1);

$pdf->cell(6);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'ตำแหน่งทางวิชาการ...................................................................คุณวุฒิสูงสุด..............................................................'),0,1);

$pdf->cell(6);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'สาขาวิชา..............................................................สำเร็จการศึกษาระดับสูงสุดจาก......................................................'),0,1);

$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->cell(18);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'ที่อยู่ปัจจุบัน เลขที่...........................................ถนน ...........................................ตรอก/ซอย..........................'),0,1);

$pdf->cell(6);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'แขวง/ตำบล...................................................อำเภอ ...........................................จังหวัด ...........................................'),0,1);

$pdf->cell(6);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'รหัสไปรษณีย์ ....................................โทรศัพท์................................................โทรสาร................................................'),0,1);

$pdf->cell(6);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'E-mail ........................................................................................................................................................................'),0,1);

$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",''),0,1);

$pdf->cell(18);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'สถานที่ทำงาน ................................................................................................................................................'),0,1);

$pdf->cell(6);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'เลขที่....................................................ถนน ......................................................ตรอก/ซอย........................................'),0,1);

$pdf->cell(6);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'แขวง/ตำบล...................................................อำเภอ ...........................................จังหวัด ...........................................'),0,1);

$pdf->cell(6);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'รหัสไปรษณีย์ ....................................โทรศัพท์................................................โทรสาร................................................'),0,1);

$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",''),0,1);

$pdf->cell(18);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'ตามที่ หน่วยวิจัย...................................................................................................... คณะสหเวชศาสตร์ '),0,1);

$pdf->cell(6);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'มหาวิทยาลัยนเรศวรได้เรียนเชิญข้าพเจ้า เป็นนักวิจัยที่ปรึกษาของหน่วยวิจัยฯ เพื่อให้คำปรึกษา และแนวทางใน'),0,1);

$pdf->cell(6);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'การดำเนินงานวิจัย อีกทั้งสร้างความร่วมมือในระดับสถาบัน ในที่นี้ ข้าพเจ้า'),0,1);

$pdf->cell(18);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'ยินดี และสามารถเป็นนักวิจัยร่วมของหน่วยวิจัยฯได้ '),0,1);

$pdf->cell(18);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'ไม่สามารถเป็นนักวิจัยร่วมของหน่วยวิจัยฯได้ '),0,1);

$pdf->cell(18);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'พร้อมกันนี้ข้าพเจ้าได้แนบเอกสารประวัตินักวิจัย (Curriculum Vitae) มาพร้อมแบบตอบรับเป็น'),0,1);

$pdf->cell(6);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'นักวิจัยที่ปรึกษานี้'),0,1);

$pdf->cell(18);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'จึงเรียนมาเพื่อโปรดทราบ'),0,1);

$pdf->Cell(55,$line_space,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(55,$line_space,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->setfont('THSarabun','','14');
$pdf->Cell(110);
$pdf->Cell(55,$line_space,iconv("UTF-8", "TIS-620",'ลงชื่อ..........................................................'),0,1);

$pdf->Cell(110);
$pdf->Cell(55,$line_space,iconv("UTF-8", "TIS-620",'    (.............................................................)'),0,1);

$pdf->Cell(110);
$pdf->Cell(55,$line_space,iconv("UTF-8", "TIS-620",'วันที่ .........เดือน........................พ.ศ.............'),0,1);

$pdf->SetFont('THSarabun','',34);
$pdf->SetXY(20,208);
$pdf->Cell(4,4,'',1,0);

$pdf->SetXY(20,216);
$pdf->Cell(4,4,'',1,0);

//เพิ่มข้อมูล
$pdf->SetFont('THSarabun','',16);
$pdf->setxy(50,70);
$pdf->Cell(80,$line_space,iconv("UTF-8", "TIS-620",$name16),0,'L');

$pdf->setxy(50,78);
$pdf->Cell(80,$line_space,iconv("UTF-8", "TIS-620",$position6),0,'L');

$pdf->setxy(130,78);
$pdf->Cell(80,$line_space,iconv("UTF-8", "TIS-620",$qualification2),0,'L');

$pdf->setxy(32,86);
$pdf->Cell(80,$line_space,iconv("UTF-8", "TIS-620",$major8),0,'L');

$pdf->setxy(135,86);
$pdf->Cell(80,$line_space,iconv("UTF-8", "TIS-620",$graduate2),0,'L');

$pdf->setxy(65,102);
$pdf->Cell(80,$line_space,iconv("UTF-8", "TIS-620",$add13),0,'L');
$pdf->setxy(115,102);
$pdf->Cell(80,$line_space,iconv("UTF-8", "TIS-620",$add23),0,'L');
$pdf->setxy(165,102);
$pdf->Cell(80,$line_space,iconv("UTF-8", "TIS-620",$add33),0,'L');

$pdf->setxy(40,110);
$pdf->Cell(80,$line_space,iconv("UTF-8", "TIS-620",$add43),0,'L');
$pdf->setxy(95,110);
$pdf->Cell(80,$line_space,iconv("UTF-8", "TIS-620",$add53),0,'L');
$pdf->setxy(145,110);
$pdf->Cell(80,$line_space,iconv("UTF-8", "TIS-620",$add63),0,'L');

$pdf->setxy(40,118);
$pdf->Cell(80,$line_space,iconv("UTF-8", "TIS-620",$add73),0,'L');
$pdf->setxy(90,118);
$pdf->Cell(80,$line_space,iconv("UTF-8", "TIS-620",$add83),0,'L');
$pdf->setxy(143,118);
$pdf->Cell(80,$line_space,iconv("UTF-8", "TIS-620",$add93),0,'L');

$pdf->setxy(40,126);
$pdf->Cell(80,$line_space,iconv("UTF-8", "TIS-620",$email2),0,'L');

$pdf->setxy(53,142);
$pdf->Cell(80,$line_space,iconv("UTF-8", "TIS-620",$place2),0,'L');

$pdf->setxy(40,150);
$pdf->Cell(80,$line_space,iconv("UTF-8", "TIS-620",$add14),0,'L');
$pdf->setxy(90,150);
$pdf->Cell(80,$line_space,iconv("UTF-8", "TIS-620",$add24),0,'L');
$pdf->setxy(155,150);
$pdf->Cell(80,$line_space,iconv("UTF-8", "TIS-620",$add34),0,'L');

$pdf->setxy(40,158);
$pdf->Cell(80,$line_space,iconv("UTF-8", "TIS-620",$add44),0,'L');
$pdf->setxy(92,158);
$pdf->Cell(80,$line_space,iconv("UTF-8", "TIS-620",$add54),0,'L');
$pdf->setxy(145,158);
$pdf->Cell(80,$line_space,iconv("UTF-8", "TIS-620",$add64),0,'L');

$pdf->setxy(40,166);
$pdf->Cell(80,$line_space,iconv("UTF-8", "TIS-620",$add74),0,'L');
$pdf->setxy(90,166);
$pdf->Cell(80,$line_space,iconv("UTF-8", "TIS-620",$add84),0,'L');
$pdf->setxy(145,166);
$pdf->Cell(80,$line_space,iconv("UTF-8", "TIS-620",$add94),0,'L');

$pdf->setxy(57,182);
$pdf->Cell(80,$line_space,iconv("UTF-8", "TIS-620",$research_unit),0,'L');

$pdf->SetFont('THSarabun','',14);
$pdf->setxy(127,263);
$pdf->Cell(80,$line_space,iconv("UTF-8", "TIS-620",$name16),0,'L');

$pdf->setxy(127,269);
$pdf->Cell(80,$line_space,iconv("UTF-8", "TIS-620",$d),0,'L');

$pdf->setxy(141,269);
$pdf->Cell(80,$line_space,iconv("UTF-8", "TIS-620",$m),0,'L');

$pdf->setxy(165,269);
$pdf->Cell(80,$line_space,iconv("UTF-8", "TIS-620",$y),0,'L');
$pdf->Output();
}else{ echo('ไม่มีข้อมูล');}

?>
