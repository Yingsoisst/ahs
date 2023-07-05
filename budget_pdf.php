<?php
if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "fmadd")) {
require_once("inc/func.php");
$research_unit = ($_POST["research_unit"]);	
$Thai = ($_POST["Thai"]);
$English = ($_POST["English"]);
$about = ($_POST["about"]);

$name1 = $_POST["name1"];
$position1 = ($_POST["position1"]);
$affiliation1 = ($_POST["affiliation1"]);

$name2 = $_POST["name2"];
$position2 = ($_POST["position2"]);
$affiliation2 = ($_POST["affiliation2"]);

$name3 = $_POST["name3"];
$position3 = ($_POST["position3"]);
$affiliation3 = ($_POST["affiliation3"]);

$name4 = $_POST["name4"];
$position4 = ($_POST["position4"]);
$affiliation4 = ($_POST["affiliation4"]);

$name5 = $_POST["name5"];
$position5 = ($_POST["position5"]);
$affiliation5 = ($_POST["affiliation5"]);

$No = ($_POST["No"]);
$published = ($_POST["published"]);
$details = ($_POST["details"]);
$Publication = ($_POST["Publication"]);
$data = ($_POST["data"]);
$No1 = $_POST["No1"];
$request = $_POST["request"];
$type = $_POST["type"];
$invention = $_POST["invention"];
$Quartile = $_POST["Quartile"];
$registration = $_POST["registration"];

$No2 = $_POST["No2"];
$name6 = $_POST["name6"];
$course = ($_POST["course"]);
$advisor = ($_POST["advisor"]);
$No3 = ($_POST["No3"]);
$Project = ($_POST["Project"]);
$budget = ($_POST["budget"]);
$funding = ($_POST["funding"]);
$period = ($_POST["period"]);
$outside = ($_POST["outside"]);
$sum = ($_POST["sum"]);

$this_year1 = $_POST["this_year1"];
$Conclusion1 = $_POST["Conclusion1"];
$next_year1 = $_POST["next_year1"];
$this_year2 = $_POST["this_year2"];
$Conclusion2 = $_POST["Conclusion2"];
$next_year2 = $_POST["next_year2"];
$this_year3 = $_POST["this_year3"];
$Conclusion3 = $_POST["Conclusion3"];
$next_year3 = $_POST["next_year3"];
$this_year4 = $_POST["this_year4"];
$Conclusion4 = $_POST["Conclusion4"];
$next_year4 = $_POST["next_year4"];
$this_year5 = $_POST["this_year5"];
$Conclusion5 = $_POST["Conclusion5"];
$next_year5 = $_POST["next_year5"];
$this_year6 = $_POST["this_year6"];
$Conclusion6 = $_POST["Conclusion6"];
$next_year6 = $_POST["next_year6"];
$this_year7 = $_POST["this_year7"];
$Conclusion7 = $_POST["Conclusion7"];
$next_year7 = $_POST["next_year7"];

$project_nature = $_POST["project_nature"];

$date1 = stripslashes($_POST["datenow1"]);
list($day, $month, $year) = Day_show_list($date1);




$line_space=6;

require('vendor/fpdf184/fpdf.php');
$pdf = new FPDF('P','mm','A4');
$pdf->SetMargins(9,6);
$pdf->SetAutoPageBreak(10);

$pdf->AddPage();
$pdf->AddFont('THSarabun','B','THSarabun Bold.php');//ธรรมดา
$pdf->AddFont('THSarabun','','THSarabun.php');//ธรรมดา

//ด้านบน
$pdf->Image('image/ahs-logo.png',80,30,60,60);
$pdf->SetFont('THSarabun','',14);

$pdf->setfont('','B','30');
$pdf->setXY(72,90);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'รายงานผลการดำเนินงาน '),0,1);
$pdf->setXY(74,100);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'(รอบตามปีงบประมาณ) '),0,1);
$pdf->setXY(35,140);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'หน่วยวิจัยด้าน...............................................'),0,1);

$pdf->setXY(40,250);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'คณะสหเวชศาสตร์  มหาวิทยาลัยนเรศวร'),0,1);

$pdf->SetFont('THSarabun','B',30);
$pdf->SetY(63);
$pdf->MultiCell(195,$line_space,iconv("UTF-8", "TIS-620",''),0,'L');

$pdf->setxy(80,139);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$research_unit),0,0,'c');

//หน้า 2
$pdf->AddPage();
$pdf->AddFont('THSarabun','B','THSarabun Bold.php');//ธรรมดา
$pdf->AddFont('THSarabun','','THSarabun.php');//ธรรมดา
//ด้านบน
$pdf->SetFont('THSarabun','B',20);
$pdf->Cell(62);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'คณะสหเวชศาสตร์ มหาวิทยาลัยนเรศวร'),0,1);

$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",''),0,1);

$pdf->SetFont('THSarabun','B',16);
$pdf->Cell(15);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'1.   ชื่อโครงการ'),0,1);

$pdf->SetFont('THSarabun','',16);
$pdf->Cell(22);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'   ภาษาไทย : หน่วยวิจัยด้าน............................................................'),0,1);

$pdf->Cell(22);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'   ภาษาอังกฤษ  :  .........................................................................................'),0,1);

$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",''),0,1);

$pdf->SetFont('THSarabun','B',16);
$pdf->Cell(15);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'2.  ลักษณะโครงการ :  '),0,1);

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
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'3.  หัวหน้าหน่วยวิจัย  :  (ให้ระบุชื่อ - สกุล  ตำแหน่ง  สังกัด)'),0,1);

$pdf->SetFont('THSarabun','',16);
$pdf->Cell(15);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'......................................................................................................................................................................'),0,1);

$pdf->SetFont('THSarabun','B',16);
$pdf->Cell(15);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'4.  สมาชิกหน่วยวิจัย :  (ให้ระบุชื่อ - สกุล  ตำแหน่ง  สังกัด)'),0,1);

$pdf->SetFont('THSarabun','',16);
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
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'5.  แผนการดำเนินงาน '),0,1);

$pdf->Cell(22);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'5.1  ผลการดำเนินงานด้านการวิจัย '),0,1);

//เส้นกรอบ
$pdf->SetLineWidth(0.2);
$pdf->Rect(27,176,150,45);

//แกน X
$pdf->SetLineWidth(0.2);
$pdf->Rect(27,196,150,0);

//แกน Y
$pdf->SetLineWidth(0.2);
$pdf->Rect(42,176,0,45);

//แกน Y
$pdf->SetLineWidth(0.2);
$pdf->Rect(92,176,0,45);

//แกน Y
$pdf->SetLineWidth(0.2);
$pdf->Rect(120,176,0,45);

//แกน Y
$pdf->SetLineWidth(0.2);
$pdf->Rect(149,176,0,45);

$pdf->setfont('','B','14');
$pdf->Cell(145);
$pdf->Cell(55,$line_space+4,iconv("UTF-8", "TIS-620",'ฐานข้อมูล/'),0,1);
$pdf->Cell(21);
$pdf->Cell(55,$line_space-2,iconv("UTF-8", "TIS-620",'ลำดับ               ผลงานตีพิมพ์                 รายละเอียดวารสาร         ประเภท          Impact factor/'),0,1);

$pdf->Cell(145);
$pdf->Cell(55,$line_space,iconv("UTF-8", "TIS-620",'Quartile'),0,1);

//เส้นกรอบ
$pdf->SetLineWidth(0.2);
$pdf->Rect(27,235,150,45);

//แกน X
$pdf->SetLineWidth(0.2);
$pdf->Rect(27,250,150,0);

//แกน Y
$pdf->SetLineWidth(0.2);
$pdf->Rect(39,235,0,45);

//แกน Y
$pdf->SetLineWidth(0.2);
$pdf->Rect(60,235,0,45);

//แกน Y
$pdf->SetLineWidth(0.2);
$pdf->Rect(95,235,0,45);

//แกน Y
$pdf->SetLineWidth(0.2);
$pdf->Rect(130,235,0,45);

//แกน Y
$pdf->SetLineWidth(0.2);
$pdf->Rect(155,235,0,45);

$pdf->Cell(55,$line_space-2,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(55,$line_space-2,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(55,$line_space-2,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(55,$line_space-2,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(55,$line_space-2,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(55,$line_space-2,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(55,$line_space-2,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(55,$line_space-2,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(55,$line_space-2,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(55,$line_space-2,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(55,$line_space-2,iconv("UTF-8", "TIS-620",''),0,1);

$pdf->Cell(19);
$pdf->Cell(55,$line_space-2,iconv("UTF-8", "TIS-620",'ลำดับ     เลขที่คำขอ       ประเภท                  ชื่อสิ่งประดิษฐ์                ชื่อนักประดิษฐ์    วันที่ได้รับจด'),0,1);

$pdf->Cell(127);
$pdf->Cell(55,$line_space,iconv("UTF-8", "TIS-620",'/นักวิจัย           ทะเบียน'),0,1);


$pdf->SetFont('THSarabun','',16);
$pdf->setxy(75,30);
$pdf->MultiCell(195,$line_space,iconv("UTF-8", "TIS-620",$Thai),0,'L');

$pdf->setxy(61,38);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$English),0,0,'c');

$pdf->setxy(26,61);
$pdf->MultiCell(150,$line_space+2,iconv("UTF-8", "TIS-620", $about),0,'L');

$pdf->setxy(25,110);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$name1),0,0);

$pdf->setxy(95,110);
$pdf->Cell(10,$line_space,iconv("UTF-8", "TIS-620",$position1),0,0);

$pdf->setxy(145,110);
$pdf->Cell(10,$line_space,iconv("UTF-8", "TIS-620",$affiliation1),0,0);

$pdf->setxy(25,126);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$name2),0,0);

$pdf->setxy(95,126);
$pdf->Cell(10,$line_space,iconv("UTF-8", "TIS-620",$position2),0,0);

$pdf->setxy(145,126);
$pdf->Cell(10,$line_space,iconv("UTF-8", "TIS-620",$affiliation2),0,0);

$pdf->setxy(25,134);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$name3),0,0);

$pdf->setxy(95,134);
$pdf->Cell(10,$line_space,iconv("UTF-8", "TIS-620",$position3),0,0);

$pdf->setxy(145,134);
$pdf->Cell(10,$line_space,iconv("UTF-8", "TIS-620",$affiliation3),0,0);

$pdf->setxy(25,142);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$name4),0,0);

$pdf->setxy(95,142);
$pdf->Cell(10,$line_space,iconv("UTF-8", "TIS-620",$position4),0,0);

$pdf->setxy(145,142);
$pdf->Cell(10,$line_space,iconv("UTF-8", "TIS-620",$affiliation4),0,0);

$pdf->setxy(25,150);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$name5),0,0);

$pdf->setxy(95,150);
$pdf->Cell(10,$line_space,iconv("UTF-8", "TIS-620",$position5),0,0);

$pdf->setxy(145,150);
$pdf->Cell(10,$line_space,iconv("UTF-8", "TIS-620",$affiliation5),0,0);

$pdf->SetFont('THSarabun','',14);


$pdf->setxy(33,200);
$pdf->Cell(10,$line_space,iconv("UTF-8", "TIS-620",$No),0,0,'c');
$pdf->MultiCell(49,$line_space,iconv("UTF-8", "TIS-620",$published),0,'L');

$pdf->setxy(92,200);
$pdf->MultiCell(28,$line_space,iconv("UTF-8", "TIS-620",$details),0,'L');

$pdf->setxy(120,200);
$pdf->MultiCell(28,$line_space,iconv("UTF-8", "TIS-620",$Publication),0,'L');

$pdf->setxy(149,200);
$pdf->MultiCell(28,$line_space,iconv("UTF-8", "TIS-620",$data),0,'L');

$pdf->setxy(31,253);
$pdf->Cell(8,$line_space,iconv("UTF-8", "TIS-620",$No1),0,0,'c');
$pdf->MultiCell(21,$line_space,iconv("UTF-8", "TIS-620",$request),0,'L');

$pdf->setxy(60,253);
$pdf->MultiCell(35,$line_space,iconv("UTF-8", "TIS-620",$type),0,'L');

$pdf->setxy(95,253);
$pdf->MultiCell(34,$line_space,iconv("UTF-8", "TIS-620",$invention),0,'L');

$pdf->setxy(130,253);
$pdf->MultiCell(26,$line_space,iconv("UTF-8", "TIS-620",$Quartile),0,'L');

$pdf->setxy(155,253);
$pdf->MultiCell(24,$line_space,iconv("UTF-8", "TIS-620",$registration),0,'L');

//หน้า3
$pdf->AddPage();
$pdf->AddFont('THSarabun','B','THSarabun Bold.php');//ธรรมดา
$pdf->AddFont('THSarabun','','THSarabun.php');//ธรรมดา


$pdf->SetFont('THSarabun','B',16);
$pdf->Cell(25);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'5.2  ผลการดำเนินงานด้านการผลิตนิสิตระดับบัณฑิตศึกษา'),0,1);


//เส้นกรอบ
$pdf->SetLineWidth(0.2);
$pdf->Rect(27,18,150,40);

//แกน X
$pdf->SetLineWidth(0.2);
$pdf->Rect(27,28,150,0);

//แกน Y
$pdf->SetLineWidth(0.2);
$pdf->Rect(40,18,0,40);

//แกน Y
$pdf->SetLineWidth(0.2);
$pdf->Rect(88,18,0,40);

//แกน Y
$pdf->SetLineWidth(0.2);
$pdf->Rect(133,18,0,40);


$pdf->Cell(55,$line_space,iconv("UTF-8", "TIS-620",''),0,1);

$pdf->setfont('','B','14');
$pdf->Cell(21);
$pdf->Cell(55,$line_space-2,iconv("UTF-8", "TIS-620",'ลำดับ             ชื่อ-นามสกุลนิสิต            ระดับการศึกษา/หลักสูตร/คณะ           อาจารย์ที่ปรึกษา'),0,1);


$pdf->Cell(55,$line_space,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(55,$line_space,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(55,$line_space,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(55,$line_space,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(55,$line_space,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(55,$line_space,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(55,$line_space,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(25);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'5.3  ผลการดำเนินงานด้านแสวงหาแหล่งทุนสนับสนุนการวิจัยจากภายนอก'),0,1);

//เส้นกรอบ
$pdf->SetLineWidth(0.2);
$pdf->Rect(27,76,150,60);

//แกน X
$pdf->SetLineWidth(0.2);
$pdf->Rect(27,90,150,0);

$pdf->SetLineWidth(0.2);
$pdf->Rect(27,126,150,0);

//แกน Y
$pdf->SetLineWidth(0.2);
$pdf->Rect(42,76,0,50);

//แกน Y
$pdf->SetLineWidth(0.2);
$pdf->Rect(98,76,0,60);

//แกน Y
$pdf->SetLineWidth(0.2);
$pdf->Rect(120,76,0,50);

//แกน Y
$pdf->SetLineWidth(0.2);
$pdf->Rect(149,76,0,50);

$pdf->Cell(55,$line_space-2,iconv("UTF-8", "TIS-620",''),0,1);

$pdf->setfont('','B','14');
$pdf->Cell(21);
$pdf->Cell(55,$line_space-2,iconv("UTF-8", "TIS-620",'ลำดับ                      โครงการ                       งบประมาณ      แหล่งทุนภายนอก       ระยะเวลา'),0,1);
$pdf->Cell(145);
$pdf->Cell(55,$line_space+4,iconv("UTF-8", "TIS-620",'โครงการ'),0,1);

$pdf->Cell(55,$line_space-2,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(55,$line_space-2,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(55,$line_space-2,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(55,$line_space-2,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(55,$line_space-2,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(55,$line_space-2,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(55,$line_space-2,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(55,$line_space-2,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(55,$line_space,iconv("UTF-8", "TIS-620",''),0,1);

$pdf->Cell(21);
$pdf->Cell(55,$line_space-2,iconv("UTF-8", "TIS-620",'รวมงบประมาณที่ได้รับจากแหล่งทุนภายนอก                           ....................................บาท'),0,1);


$pdf->Cell(55,$line_space,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(25);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'5.4  ผลการดำเนินงานด้านความร่วมมือทางวิชาการกับองค์กรภายนอก'),0,1);

$pdf->Cell(16);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'..................................................................................................................................................................................'),0,1);
$pdf->Cell(16);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'..................................................................................................................................................................................'),0,1);
$pdf->Cell(16);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'..................................................................................................................................................................................'),0,1);
$pdf->Cell(16);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'..................................................................................................................................................................................'),0,1);
$pdf->Cell(16);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'..................................................................................................................................................................................'),0,1);

$pdf->SetFont('THSarabun','',14);

$pdf->setxy(32,29);
$pdf->Cell(9,$line_space,iconv("UTF-8", "TIS-620",$No2),0,0,'c');
$pdf->MultiCell(48,$line_space,iconv("UTF-8", "TIS-620",$name6),0,'L');

$pdf->setxy(89,29);
$pdf->MultiCell(44,$line_space,iconv("UTF-8", "TIS-620",$course),0,'L');

$pdf->setxy(134,29);
$pdf->MultiCell(43,$line_space,iconv("UTF-8", "TIS-620",$advisor),0,'L');


$pdf->setxy(33,90);
$pdf->Cell(10,$line_space,iconv("UTF-8", "TIS-620",$No3),0,0,'c');
$pdf->MultiCell(54,$line_space,iconv("UTF-8", "TIS-620",$Project),0,'L');

$pdf->setxy(98,90);
$pdf->MultiCell(21,$line_space,iconv("UTF-8", "TIS-620",$budget),0,'L');

$pdf->setxy(120,90);
$pdf->MultiCell(30,$line_space,iconv("UTF-8", "TIS-620",$funding),0,'L');

$pdf->setxy(160,90);
$pdf->MultiCell(29,$line_space,iconv("UTF-8", "TIS-620",$period),0,'L');

$pdf->setxy(125,128);
$pdf->MultiCell(29,$line_space,iconv("UTF-8", "TIS-620",$sum),0,'L');

$pdf->SetFont('THSarabun','',16);

$pdf->setxy(26,146);
$pdf->MultiCell(153,$line_space+2,iconv("UTF-8", "TIS-620",$outside),0,'L');




//หน้า 4
$pdf->AddPage();
$pdf->AddFont('THSarabun','B','THSarabun Bold.php');//ธรรมดา
$pdf->AddFont('THSarabun','','THSarabun.php');//ธรรมดา

$pdf->SetFont('THSarabun','B',16);
$pdf->Cell(25);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'6. สรุปผลการดำเนินงานตามตัวชี้วัดเพื่อการประเมินผลสำเร็จของโครงการ'),0,1);


//เส้นกรอบ
$pdf->SetLineWidth(0.2);
$pdf->Rect(10,18,190,122);

//แกน X
$pdf->SetLineWidth(0.2);
$pdf->Rect(10,38,190,0);

//แกน X
$pdf->SetLineWidth(0.2);
$pdf->Rect(133,26,67,0);

//แกน Y
$pdf->SetLineWidth(0.2);
$pdf->Rect(30,18,0,122);

//แกน Y
$pdf->SetLineWidth(0.2);
$pdf->Rect(133,18,0,122);

//แกน Y
$pdf->SetLineWidth(0.2);
$pdf->Rect(155,26,0,114);

//แกน Y
$pdf->SetLineWidth(0.2);
$pdf->Rect(180,26,0,114);




$pdf->Cell(55,$line_space,iconv("UTF-8", "TIS-620",''),0,1);

$pdf->setfont('','B','14');
$pdf->Cell(2);
$pdf->Cell(55,$line_space,iconv("UTF-8", "TIS-620",'ระดับผลงาน                          ประเภทของผลงาน (จำนวน)                                                      ปีงบประมาณ'),0,1);
$pdf->Cell(125);
$pdf->Cell(55,$line_space,iconv("UTF-8", "TIS-620",'เป้าหมายปีนี้   ผลการดำเนินงาน   เป้าหมายปี '),0,1);

$pdf->Cell(176);
$pdf->Cell(55,$line_space,iconv("UTF-8", "TIS-620",'ถัดไป'),0,1);

//แกน X
$pdf->SetLineWidth(0.2);
$pdf->Rect(30,52,170,0);

//แกน X
$pdf->SetLineWidth(0.2);
$pdf->Rect(30,65,170,0);

//แกน X
$pdf->SetLineWidth(0.2);
$pdf->Rect(10,80,190,0);

$pdf->setfont('','','14');
$pdf->Cell(21);
$pdf->Cell(55,$line_space,iconv("UTF-8", "TIS-620",'1.มีผลงานตีพิมพ์เต็มรูปแบบระดับนานาชาติซึ่งอยู่ในฐาน ISI และ Scopus ใน'),0,1);
$pdf->Cell(21);
$pdf->Cell(55,$line_space,iconv("UTF-8", "TIS-620",'ฐานะผู้วิจัยชื่อแรก หรือผู้รับผิดชอบบทความวิจัย'),0,1);

$pdf->Cell(55,$line_space-3,iconv("UTF-8", "TIS-620",''),0,1);

$pdf->Cell(21);
$pdf->Cell(55,$line_space,iconv("UTF-8", "TIS-620",'2.มีผลงานในรูปแบบอื่น เช่น ผลงานวิจัยตีพิมพ์  อนุสิทธิบัตร สิทธิบัตร ใน'),0,1);

$pdf->Cell(21);
$pdf->Cell(55,$line_space,iconv("UTF-8", "TIS-620",'ฐานะผู้วิจัยชื่อแรก หรือผู้รับผิดชอบบทความวิจัย หรือเจ้าของผลงานหลัก '),0,1);

$pdf->Cell(55,$line_space-5,iconv("UTF-8", "TIS-620",''),0,1);

$pdf->Cell(21);
$pdf->Cell(55,$line_space,iconv("UTF-8", "TIS-620",'3.ได้รับทุนสนับสนุนการวิจัยทุกปี (ทุน คปก./ สกอ. เป็นต้น)'),0,1);

//แกน X
$pdf->SetLineWidth(0.2);
$pdf->Rect(30,95,170,0);

//แกน X
$pdf->SetLineWidth(0.2);
$pdf->Rect(30,110,170,0);

//แกน X
$pdf->SetLineWidth(0.2);
$pdf->Rect(30,125,170,0);

$pdf->Cell(55,$line_space,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(55,$line_space-4,iconv("UTF-8", "TIS-620",''),0,1);

$pdf->Cell(21);
$pdf->Cell(55,$line_space,iconv("UTF-8", "TIS-620",'1. ตีพิมพ์ในวารสารระดับนานาชาติ (ไม่มีค่า Impact Factor) หรือ'),0,1);

$pdf->Cell(55,$line_space,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(55,$line_space-3,iconv("UTF-8", "TIS-620",''),0,1);

$pdf->Cell(21);
$pdf->Cell(55,$line_space,iconv("UTF-8", "TIS-620",'2. ตีพิมพ์ในวารสารระดับชาติ  หรือ'),0,1);

$pdf->Cell(55,$line_space,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(55,$line_space-3,iconv("UTF-8", "TIS-620",''),0,1);

$pdf->Cell(21);
$pdf->Cell(55,$line_space,iconv("UTF-8", "TIS-620",'3. นำเสนอในการประชุมวิชาการ ที่มีการตีพิมพ์บทความบน Proceedings หรือ'),0,1);

$pdf->Cell(55,$line_space,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(55,$line_space-3,iconv("UTF-8", "TIS-620",''),0,1);

$pdf->Cell(21);
$pdf->Cell(55,$line_space,iconv("UTF-8", "TIS-620",'4. ได้สิ่งประดิษฐ์ อุปกรณ์ เครื่องมือ หรืออื่นๆ เช่น ฐานข้อมูล Software    '),0,1);

$pdf->Cell(21);
$pdf->Cell(55,$line_space,iconv("UTF-8", "TIS-620",'ที่สามารถนำไปใช้ประโยชน์ได้ต่อไป  หรือ'),0,1);

$pdf->Cell(55,$line_space,iconv("UTF-8", "TIS-620",''),0,1);

$pdf->SetFont('THSarabun','B',16);
$pdf->Cell(25);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'7. ผลการดำเนินงานอื่นๆ'),0,1);

$pdf->SetFont('THSarabun','',16);
$pdf->Cell(15);
$pdf->Cell(55,$line_space+3,iconv("UTF-8", "TIS-620",'......................................................................................................................................................................'),0,1);
$pdf->Cell(15);
$pdf->Cell(55,$line_space+3,iconv("UTF-8", "TIS-620",'......................................................................................................................................................................'),0,1);
$pdf->Cell(15);
$pdf->Cell(55,$line_space+3,iconv("UTF-8", "TIS-620",'......................................................................................................................................................................'),0,1);
$pdf->Cell(15);
$pdf->Cell(55,$line_space+3,iconv("UTF-8", "TIS-620",'......................................................................................................................................................................'),0,1);

$pdf->Cell(55,$line_space+3,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(55,$line_space+3,iconv("UTF-8", "TIS-620",''),0,1);

$pdf->Cell(100);
$pdf->Cell(55,$line_space+3,iconv("UTF-8", "TIS-620",'ลงชื่อ..........................................................'),0,1);

$pdf->Cell(105);
$pdf->Cell(55,$line_space+3,iconv("UTF-8", "TIS-620",'(.........................................................)'),0,1);

$pdf->Cell(110);
$pdf->Cell(55,$line_space+3,iconv("UTF-8", "TIS-620",'      หัวหน้าหน่วยวิจัย'),0,1);

$pdf->Cell(105);
$pdf->Cell(55,$line_space+3,iconv("UTF-8", "TIS-620",'วันที่ ................................................'),0,1);

$pdf->SetFont('THSarabun','',14);

$pdf->setxy(137,40);
$pdf->MultiCell(15,$line_space,iconv("UTF-8", "TIS-620",$this_year1),0,'c');

$pdf->setxy(160,40);
$pdf->MultiCell(17,$line_space,iconv("UTF-8", "TIS-620",$Conclusion1),0,'L');

$pdf->setxy(183,40);
$pdf->MultiCell(15,$line_space,iconv("UTF-8", "TIS-620",$next_year1),0,'c');

$pdf->setxy(137,52);
$pdf->MultiCell(15,$line_space,iconv("UTF-8", "TIS-620",$this_year2),0,'c');

$pdf->setxy(160,52);
$pdf->MultiCell(15,$line_space,iconv("UTF-8", "TIS-620",$Conclusion2),0,'c');

$pdf->setxy(183,52);
$pdf->MultiCell(15,$line_space,iconv("UTF-8", "TIS-620",$next_year2),0,'c');

$pdf->setxy(137,65);
$pdf->MultiCell(15,$line_space,iconv("UTF-8", "TIS-620",$this_year3),0,'c');

$pdf->setxy(160,65);
$pdf->MultiCell(15,$line_space,iconv("UTF-8", "TIS-620",$Conclusion3),0,'c');

$pdf->setxy(183,65);
$pdf->MultiCell(15,$line_space,iconv("UTF-8", "TIS-620",$next_year3),0,'c');

$pdf->setxy(137,80);
$pdf->MultiCell(15,$line_space,iconv("UTF-8", "TIS-620",$this_year4),0,'c');

$pdf->setxy(160,80);
$pdf->MultiCell(15,$line_space,iconv("UTF-8", "TIS-620",$Conclusion4),0,'c');

$pdf->setxy(183,80);
$pdf->MultiCell(15,$line_space,iconv("UTF-8", "TIS-620",$next_year4),0,'c');

$pdf->setxy(137,95);
$pdf->MultiCell(15,$line_space,iconv("UTF-8", "TIS-620",$this_year5),0,'c');

$pdf->setxy(160,95);
$pdf->MultiCell(15,$line_space,iconv("UTF-8", "TIS-620",$Conclusion5),0,'c');

$pdf->setxy(183,95);
$pdf->MultiCell(15,$line_space,iconv("UTF-8", "TIS-620",$next_year5),0,'c');

$pdf->setxy(137,110);
$pdf->MultiCell(15,$line_space,iconv("UTF-8", "TIS-620",$this_year6),0,'c');

$pdf->setxy(160,110);
$pdf->MultiCell(15,$line_space,iconv("UTF-8", "TIS-620",$Conclusion6),0,'c');

$pdf->setxy(183,110);
$pdf->MultiCell(15,$line_space,iconv("UTF-8", "TIS-620",$next_year6),0,'c');

$pdf->setxy(137,125);
$pdf->MultiCell(15,$line_space,iconv("UTF-8", "TIS-620",$this_year7),0,'c');

$pdf->setxy(160,125);
$pdf->MultiCell(15,$line_space,iconv("UTF-8", "TIS-620",$Conclusion7),0,'c');

$pdf->setxy(183,125);
$pdf->MultiCell(15,$line_space,iconv("UTF-8", "TIS-620",$next_year7),0,'c');

$pdf->SetFont('THSarabun','',16);
$pdf->setxy(26,150);
$pdf->MultiCell(155,$line_space+3,iconv("UTF-8", "TIS-620",$project_nature),0,0);

$pdf->SetFont('THSarabun','',16);
$pdf->setxy(118,214);
$pdf->MultiCell(50,$line_space,iconv("UTF-8", "TIS-620",$name1),0,'c');

$pdf->setxy(123,232);
$pdf->MultiCell(50,$line_space,iconv("UTF-8", "TIS-620",$day),0,'c');

$pdf->setxy(130,232);
$pdf->MultiCell(50,$line_space,iconv("UTF-8", "TIS-620",$month),0,'c');

$pdf->setxy(150,232);
$pdf->MultiCell(50,$line_space,iconv("UTF-8", "TIS-620",$year),0,'c');


$pdf->Output();
}else{ echo('ไม่มีข้อมูล');}

?>
