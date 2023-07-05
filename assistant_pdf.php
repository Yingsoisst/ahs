<?php
if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "fmadd")) {
require_once("inc/func.php");
$Major = stripslashes($_POST["Major"]);	
$num = stripslashes($_POST["num"]);
$A1 = stripslashes($_POST["A1"]);
$A2 = stripslashes($_POST["A2"]);
$date1 = stripslashes($_POST["datenow1"]);
list($day, $month, $year) = Day_show_list($date1);

$about = stripslashes($_POST["about"]);
$name = stripslashes($_POST["name"]);
$position = stripslashes($_POST["position"]);
$affiliation = stripslashes($_POST["affiliation"]);
$wish = stripslashes($_POST["wish"]);
$address = stripslashes($_POST["address"]);
$project = stripslashes($_POST["project"]);
$central_lab = $_POST["central_lab"];
$tool1 = $_POST["tool1"];
$department_room = $_POST["department_room"];
$num_room2 = $_POST["num_room2"];
$tool2 = $_POST["tool2"];
$research_unit = $_POST["research_unit"];
$num_room = $_POST["num_room"];
$tool3 = $_POST["tool3"];
$other = $_POST["other"];
$period = $_POST["period"];
$start = Day_show($_POST["start"]);
$end = Day_show($_POST["end"]);
$name1 = $_POST["name1"];
$position1 = $_POST["position1"];


$line_space=6;

require('vendor/fpdf184/fpdf.php');
$pdf = new FPDF('P','mm','A4');
$pdf->SetMargins(9,6);
$pdf->SetAutoPageBreak(10);
$pdf->AddPage();
$pdf->AddFont('THSarabun','B','THSarabun Bold.php');//ธรรมดา
$pdf->AddFont('THSarabun','','THSarabun.php');//ธรรมดา

//ด้านบน
$pdf->Image('image/logo.png',10,4,23,23);
$pdf->SetFont('THSarabun','',14);

$pdf->setfont('THSarabun','B','20');
$pdf->Cell(83);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'บันทึกข้อความ'),0,1);

$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",''),0,1);


$pdf->setfont('THSarabun','B','16');
$pdf->Cell(6);
$pdf->Cell(10,$line_space+2,iconv("UTF-8", "TIS-620",'ส่วนราชการ'),0,0);

$pdf->setfont('THSarabun','','16');
$pdf->Cell(10);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'. ภาควิชา.........................................................................คณะสหเวชศาสตร์ โทร............................................'),0,1);

$pdf->setfont('THSarabun','B','16');
$pdf->Cell(6);
$pdf->Cell(1,$line_space+2,iconv("UTF-8", "TIS-620",'ที่ '),0,0);

$pdf->setfont('THSarabun','','16');
$pdf->Cell(5);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'0603.13................./......................................'),0,0);

$pdf->setfont('THSarabun','B','16');
$pdf->Cell(15);
$pdf->Cell(1,$line_space+2,iconv("UTF-8", "TIS-620",'วันที่'),0,0);

$pdf->setfont('THSarabun','','16');
$pdf->Cell(3);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'........................................................................................................'),0,1);

$pdf->setfont('THSarabun','B','16');
$pdf->Cell(6);
$pdf->Cell(7,$line_space+2,iconv("UTF-8", "TIS-620",'เรื่อง'),0,0);

$pdf->setfont('THSarabun','','16');
$pdf->Cell(4);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'ขออนุมัติให้ผู้ช่วยวิจัยเข้ามาปฎิบัติงาน......................................................................................................................'),0,1);
$pdf->Cell(6);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'เรียน  คณบดีคณะสหเวชศาสตร'),0,1);


$pdf->Cell(25);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'ข้าพเจ้า......................................................................................ตำแหน่ง..........................................................'),0,1);

$pdf->Cell(6);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'สังกัด...................................................................................................มีความประสงค์จะขออนุมัติผู้ช่วยวิจัย (ผู้รับจ้าง)  '),0,1);

$pdf->Cell(6);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'คือ.........................................................ที่อยู่..........................................................................................................................'),0,1);

$pdf->Cell(6);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'ซึ่งเป็นผู้ช่วยวิจัยในโครงการวิจัย เรื่อง ..................................................................................................................................'),0,1);

$pdf->Cell(6);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'เข้ามาปฏิบัติงานในคณะสหเวชศาสตร'),0,1);

$pdf->Cell(20);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'ห้องปฎิบัติการวิจัยกลาง หมายเลขห้อง..................................................................................................................'),0,1);

$pdf->Cell(20);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'เครื่องมือ.................................................................................................................................................................'),0,1);

$pdf->Cell(20);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'ห้องปฎิบัติการวิจัยภาควิชา.............................................................................หมายเลขห้อง.................................'),0,1);

$pdf->Cell(20);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'เครื่องมือ.................................................................................................................................................................'),0,1);

$pdf->Cell(20);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'หน่วยวิจัย................................................................................................หมายเลขห้อง.........................................'),0,1);

$pdf->Cell(20);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'เครื่องมือ.................................................................................................................................................................'),0,1);

$pdf->Cell(20);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'อื่นๆ (โปรดระบุ).....................................................................................................................................................'),0,1);

$pdf->Cell(6);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'กำหนดระยะเวลา...........................เดือน ตั้งแต่วันที่.................................................ถึงวันที่.................................................'),0,1);

$pdf->Cell(6);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'โดยปฏิบัติการ        ในเวลาราชการ         นอกเวลาราชการ ในระหว่างปฏิบัติงานหาก...................................................'),0,1);

$pdf->Cell(6);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'ก่อใหเ้กิดความเสียหายแก่ทรัพย์สินของคณะสหเวชศาสตร์ ข้าพเจ้าจะยินยอมรับผิดชอบในความเสียหายที่เกิดขึ้นทั้งหมด'),0,1);

$pdf->Cell(40);
$pdf->Cell(55,$line_space+4,iconv("UTF-8", "TIS-620",'จึงเรียนมาเพื่อนโปรดอนุมัติ'),0,1);

$pdf-> setfont('','','14');
$pdf->setXY(10,200);
$pdf->Cell(55,$line_space+4,iconv("UTF-8", "TIS-620",'ความเห็นของภาควิชา'),0,1);

$pdf->setXY(10,206);
$pdf->Cell(55,$line_space+4,iconv("UTF-8", "TIS-620",'.................................................................................................'),0,1);

$pdf->setXY(10,212);
$pdf->Cell(55,$line_space+4,iconv("UTF-8", "TIS-620",'.................................................................................................'),0,1);

$pdf->setXY(20,222);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'ลงนาม.............................................................'),0,1);

$pdf->setXY(29,229);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'(..........................................................)'),0,1);

$pdf->setXY(43,234);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'หัวหน้าภาควิชา'),0,1);


$pdf->setXY(120,206);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'.................................................................................................'),0,1);

$pdf->setXY(120,212);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'(...............................................................................................)'),0,1);

$pdf->setXY(130,222);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'ตำแหน่ง.............................................................'),0,1);



$pdf-> setfont('','','14');
$pdf->setXY(10,245);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'ความเห็นรองคณบดีฝ่ายวิจัยฯ'),0,1);

$pdf->setXY(10,253);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'.................................................................................................'),0,1);

$pdf->setXY(10,260);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'.................................................................................................'),0,1);

$pdf->setXY(20,270);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'ลงนาม.............................................................'),0,1);

$pdf->setXY(37,278);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'(ผศ.ดร.พาชื่น   โพทัพ)'),0,1);

$pdf->setXY(30,285);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'รองคณะบดีฝ่ายวิจัยและบัณฑิตศึกษา'),0,1);



$pdf-> setfont('','','14');
$pdf->setXY(125,245);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'ความเห็นคณบดี'),0,1);

$pdf->setXY(125,253);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'.................................................................................................'),0,1);

$pdf->setXY(125,260);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'.................................................................................................'),0,1);

$pdf->setXY(135,270);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'ลงนาม.............................................................'),0,1);

$pdf->setXY(150,278);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'(รศ.ดร.ศุภวิทู   สุขเพ็ง)'),0,1);

$pdf->setXY(149,285);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'คณบดีคณะสหเวชศาสตร์'),0,1);

$pdf->SetXY(23,103);
$pdf->Cell(5,5,'',1,0);
$pdf->SetXY(23,112);
$pdf->Cell(5,5,'',1,0);
$pdf->SetXY(23,120);
$pdf->Cell(5,5,'',1,0);
$pdf->SetXY(23,128);
$pdf->Cell(5,5,'',1,0);
$pdf->SetXY(23,136);
$pdf->Cell(5,5,'',1,0);
$pdf->SetXY(23,144);
$pdf->Cell(5,5,'',1,0);
$pdf->SetXY(23,151);
$pdf->Cell(5,5,'',1,0);

$pdf->SetXY(41,168);
$pdf->Cell(4,4,'',1,0);
$pdf->SetXY(75,168);
$pdf->Cell(4,4,'',1,0);




$pdf->SetFont('THSarabun','',16);
$pdf->SetY(63);
$pdf->MultiCell(195,$line_space,iconv("UTF-8", "TIS-620",''),0,'L');

$pdf->setxy(52,30);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$Major),0,0,'c');

$pdf->setxy(154,30);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$num),0,0);

$pdf->setxy(36,38);
$pdf->Cell(10,$line_space,iconv("UTF-8", "TIS-620",$A1),0,0);

$pdf->setxy(60,38);
$pdf->Cell(10,$line_space,iconv("UTF-8", "TIS-620",$A2),0,0);

$pdf->setxy(110,38);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$day),0,0,'c');

$pdf->setxy(120,38);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$month),0,0,'c');

$pdf->setxy(140,38);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$year),0,0,'c');

$pdf->setxy(90,46);
$pdf->Cell(50,$line_space,iconv("UTF-8", "TIS-620",$about),0,0,'c');

$pdf->setxy(60,62);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$name),0,0,'c');

$pdf->setxy(140,62);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$position),0,0);

$pdf->setxy(27,70);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$affiliation),0,0);

$pdf->setxy(23,78);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$wish),0,0);

$pdf->setxy(80,78);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$address),0,0);

$pdf->setxy(72,86);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$project),0,0);

$pdf->setxy(90,101);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$central_lab),0,0);

$pdf->setxy(50,110);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$tool1),0,0);

$pdf->setxy(70,118);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$department_room),0,0);

$pdf->setxy(165,118);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$num_room2),0,0);

$pdf->setxy(50,125);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$tool2),0,0);

$pdf->setxy(50,134);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$research_unit),0,0);

$pdf->setxy(165,134);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$num_room),0,0);

$pdf->setxy(50,142);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$tool3),0,0);

$pdf->setxy(60,150);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$other),0,0);

$pdf->SetXY(50,158);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$period),0,0);

$pdf->SetXY(66,158);
$pdf->Cell(90,$line_space,iconv("UTF-8", "TIS-620",$start),0,0,'C');

$pdf->SetXY(120,158);
$pdf->Cell(90,$line_space,iconv("UTF-8", "TIS-620",$end),0,0,'C');

$pdf->SetXY(122,166);
$pdf->Cell(90,$line_space,iconv("UTF-8", "TIS-620",$wish),0,0,'C');

$pdf->SetFont('THSarabun','',14);
$pdf->SetXY(115,212);
$pdf->Cell(90,$line_space,iconv("UTF-8", "TIS-620",$name1),0,0,'C');

$pdf->SetXY(120,222);
$pdf->Cell(90,$line_space,iconv("UTF-8", "TIS-620",$position1),0,0,'C');


$pdf->Output();
}else{ echo('ไม่มีข้อมูล');}

?>
