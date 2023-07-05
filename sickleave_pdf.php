<?php
if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "fmadd")) {
require_once("inc/func.php");
$name = stripslashes($_POST["name"]);	
$at = stripslashes($_POST["at"]);	

$date = stripslashes($_POST["datenow1"]);
list($day1, $month1, $year1) = Day_show_list($date);

$leave = stripslashes($_POST["leave"]);
$to = stripslashes($_POST["to"]);
$own_position = stripslashes($_POST["own_position"]);
$affiliation = $_POST["affiliation"];
$date2 = Day_show($_POST["datenow2"]);
$date3 = Day_show($_POST["datenow3"]);
$many = $_POST["many"];
$date4 = Day_show($_POST["datenow4"]);
$date5 = Day_show($_POST["datenow5"]);
$many1= $_POST["many1"];
$connect = $_POST["connect"];
$name2 = $_POST["name2"];


$line_space=6;

require('vendor/fpdf184/fpdf.php');
$pdf = new FPDF('P','mm','A4');
$pdf->SetMargins(9,6);
$pdf->SetAutoPageBreak(10);
$pdf->AddPage();
$pdf->AddFont('THSarabun','B','THSarabun Bold.php');//ธรรมดา
$pdf->AddFont('THSarabun','','THSarabun.php');//ธรรมดา

//ด้านบน
$pdf->SetFont('THSarabun','B',20);
$pdf->Cell(50);
$pdf->Cell(55,$line_space+30,iconv("UTF-8", "TIS-620",'แบบใบลาป่วย ลาคลอดบุตร ลากิจส่วนตัว'),0,1,'c');

$pdf->Cell(73);
$pdf->Cell(55,$line_space,iconv("UTF-8", "TIS-620",' '),0,0);

$pdf->SetFont('THSarabun','',12);
$pdf->Cell(20);
$pdf->Cell(55,$line_space-18,iconv("UTF-8", "TIS-620",'เขียนที่....................................................'),0,1,'c');
$pdf->Cell(130);
$pdf->Cell(55,$line_space+20,iconv("UTF-8", "TIS-620",'วันที่................... เดือน.........................พ.ศ.........................'),0,1,'c');
$pdf->Cell(55,$line_space-20,iconv("UTF-8", "TIS-620",''),0,1,'c');

$pdf->SetFont('THSarabun','',16);
$pdf->Cell(50,$line_space+1,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(4);
$pdf->Cell(50,$line_space+1,iconv("UTF-8", "TIS-620",'เรื่อง   ขอลา.....................................................................................................'),0,1);
$pdf->Cell(4);
$pdf->Cell(50,$line_space+1,iconv("UTF-8", "TIS-620",'เรียน   .............................................................................................................'),0,1);
$pdf->Cell(50,$line_space+1,iconv("UTF-8", "TIS-620",''),0,1);


$pdf->Cell(20);
$pdf->Cell(50,$line_space+1,iconv("UTF-8", "TIS-620",'ข้าพเจ้า................................................................................................ตำแหน่ง.....................................................................'),0,1);
$pdf->Cell(4);
$pdf->Cell(50,$line_space+1,iconv("UTF-8", "TIS-620",'สังกัด......................................................................................................................................คณะสหเวชศาสตร์ มหาวิทยาลัย นเรศวร'),0,1);
$pdf->Cell(4);
$pdf->Cell(50,$line_space+1,iconv("UTF-8", "TIS-620",'ขอลา             ป่วย'),0,1);

$pdf->Cell(28);
$pdf->Cell(50,$line_space+1,iconv("UTF-8", "TIS-620",'กิจส่วนตัว   เนื่องจาก.............................................................................................'),0,1);

$pdf->Cell(28);
$pdf->Cell(50,$line_space+1,iconv("UTF-8", "TIS-620",'คลอดบุตร'),0,1);

$pdf->SetXY(30,86);
$pdf->Cell(5,5,'',1,0);

$pdf->SetXY(30,93);
$pdf->Cell(5,5,'',1,0);

$pdf->SetXY(30,100);
$pdf->Cell(5,5,'',1,1);

$pdf->Cell(50,$line_space+1,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(4);
$pdf->Cell(50,$line_space+1,iconv("UTF-8", "TIS-620",'กิจส่วนตัว   ตั้งแต่วันที่..........................................................ถึงวันที่...........................................................มีกำหนด......................วัน'),0,1);

$pdf->Cell(4);
$pdf->Cell(50,$line_space+1,iconv("UTF-8", "TIS-620",'ข้าพเจ้าได้ลา            ป่วย            กิจส่วนตัว            คลอดบุตร            ครั้งสุดท้าย ตั้งแต่วันที่..............................................'),0,1);

$pdf->SetXY(41,120);
$pdf->Cell(5,5,'',1,0);

$pdf->SetXY(62,120);
$pdf->Cell(5,5,'',1,0);

$pdf->SetXY(91,120);
$pdf->Cell(5,5,'',1,0);

$pdf->SetXY(121,120);
$pdf->Cell(5,5,'',1,1);

$pdf->Cell(4);
$pdf->Cell(50,$line_space+3,iconv("UTF-8", "TIS-620",'ถึงวันที่....................................................มีกำหนด.........................วัน ในระหว่างลาจะติดต่อข้าพเจ้าได้ที่...........................................'),0,1);

$pdf->Cell(4);
$pdf->Cell(50,$line_space+1,iconv("UTF-8", "TIS-620",'..............................................................................................................................................................................................................'),0,1);

$pdf->Cell(135);
$pdf->Cell(50,$line_space+1,iconv("UTF-8", "TIS-620",'ขอแสดงความนับถือ'),0,1);
$pdf->Cell(50,$line_space+1,iconv("UTF-8", "TIS-620",''),0,1);

$pdf->Cell(125);
$pdf->Cell(50,$line_space+1,iconv("UTF-8", "TIS-620",'ลงชื่อ..............................................'),0,1);

$pdf->Cell(130);
$pdf->Cell(50,$line_space+1,iconv("UTF-8", "TIS-620",'(...................................................)'),0,1);

$pdf->Cell(135);
$pdf->Cell(50,$line_space+1,iconv("UTF-8", "TIS-620",'ความเห็นผู้บังคับบัญชา'),0,1);

$pdf->Cell(127);
$pdf->Cell(50,$line_space+1,iconv("UTF-8", "TIS-620",'........................................................'),0,1);

$pdf->Cell(127);
$pdf->Cell(50,$line_space+1,iconv("UTF-8", "TIS-620",'........................................................'),0,1);

$pdf->Cell(50,$line_space+1,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(125);
$pdf->Cell(50,$line_space+1,iconv("UTF-8", "TIS-620",'ลงชื่อ..............................................'),0,1);

$pdf->Cell(130);
$pdf->Cell(50,$line_space+1,iconv("UTF-8", "TIS-620",'(...................................................)'),0,1);

$pdf->Cell(125);
$pdf->Cell(50,$line_space+1,iconv("UTF-8", "TIS-620",'ตำแหน่ง..............................................'),0,1);

$pdf->Cell(130);
$pdf->Cell(50,$line_space+1,iconv("UTF-8", "TIS-620",'วันที่...............................................'),0,1);

$pdf->Cell(50,$line_space+1,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->SetFont('THSarabun','BU',16);
$pdf->Cell(125);
$pdf->Cell(18,$line_space+1,iconv("UTF-8", "TIS-620",'คำสั่ง'),0,0);

$pdf->SetFont('THSarabun','',16);
$pdf->Cell(1);
$pdf->Cell(50,$line_space+1,iconv("UTF-8", "TIS-620",'อนุญาต           ไม่อนุญาต'),0,0);

$pdf->Cell(127);
$pdf->Cell(50,$line_space+1,iconv("UTF-8", "TIS-620",'........................................................'),0,1);

$pdf->Cell(127);
$pdf->Cell(50,$line_space+1,iconv("UTF-8", "TIS-620",'........................................................'),0,1);

$pdf->Cell(50,$line_space+1,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(125);
$pdf->Cell(50,$line_space+1,iconv("UTF-8", "TIS-620",'ลงชื่อ..............................................'),0,1);

$pdf->Cell(130);
$pdf->Cell(50,$line_space+1,iconv("UTF-8", "TIS-620",'(...................................................)'),0,1);

$pdf->Cell(125);
$pdf->Cell(50,$line_space+1,iconv("UTF-8", "TIS-620",'ตำแหน่ง..............................................'),0,1);

$pdf->Cell(130);
$pdf->Cell(50,$line_space+1,iconv("UTF-8", "TIS-620",'วันที่...............................................'),0,0);

$pdf->SetXY(146,233);
$pdf->Cell(5,5,'',1,0);

$pdf->SetXY(171,233);
$pdf->Cell(5,5,'',1,0);

//เส้นกรอบ
$pdf->SetLineWidth(0.2);
$pdf->Rect(9,170,85,40);

//แกนx
$pdf->SetLineWidth(0.2);
$pdf->Rect(9,180,85,0);
//แกนx
$pdf->SetLineWidth(0.2);
$pdf->Rect(9,190,85,0);
//แกนx
$pdf->SetLineWidth(0.2);
$pdf->Rect(9,200,85,0);

//แกนY
$pdf->SetLineWidth(0.2);
$pdf->Rect(30.5,170,0,40);

//แกนY
$pdf->SetLineWidth(0.2);
$pdf->Rect(52,170,0,40);

//แกนY
$pdf->SetLineWidth(0.2);
$pdf->Rect(73.5,170,0,40);

$pdf->SetFont('THSarabun','BU',16);
$pdf->SetXY(9,162);
$pdf->Cell(50,$line_space+1,iconv("UTF-8", "TIS-620",'สถิติการลาในปีงบประมาณนี้'),0,0);


//หัวตาราง
$pdf->SetFont('THSarabun','',14);
$pdf->SetXY(9,172);
$pdf->Cell(50,$line_space+1,iconv("UTF-8", "TIS-620",'ประเภทการลา'),0,0);

$pdf->SetXY(33,172);
$pdf->Cell(50,$line_space+1,iconv("UTF-8", "TIS-620",'ลามาแล้ว'),0,0);

$pdf->SetXY(55,172);
$pdf->Cell(50,$line_space+1,iconv("UTF-8", "TIS-620",'ลาครั้งนี้'),0,0);

$pdf->SetXY(77,172);
$pdf->Cell(50,$line_space+1,iconv("UTF-8", "TIS-620",'ลาครั้งนี้'),0,0);

//หัวตาราง / แถว
$pdf->SetXY(9,182);
$pdf->Cell(50,$line_space+1,iconv("UTF-8", "TIS-620",'ป่วย'),0,0);

$pdf->SetXY(9,192);
$pdf->Cell(50,$line_space+1,iconv("UTF-8", "TIS-620",'กิจส่วนตัว'),0,0);

$pdf->SetXY(9,202);
$pdf->Cell(50,$line_space+1,iconv("UTF-8", "TIS-620",'คลอดบุตร'),0,0);

$pdf->SetFont('THSarabun','',16);
$pdf->SetXY(8,220);
$pdf->Cell(50,$line_space+1,iconv("UTF-8", "TIS-620",'(ลงชื่อ).............................................................ผู้ตรวจสอบ'),0,0);

$pdf->SetXY(23,230);
$pdf->Cell(50,$line_space+1,iconv("UTF-8", "TIS-620",'(นางสาวอัจจิมา     เอี่ยมสว่าง)'),0,0);

$pdf->SetXY(21,240);
$pdf->Cell(50,$line_space+1,iconv("UTF-8", "TIS-620",'ตำแหน่ง เจ้าหน้าที่บริหารงานทั่วไป'),0,0);

$pdf->SetXY(21,250);
$pdf->Cell(50,$line_space+1,iconv("UTF-8", "TIS-620",'วันที่..................................................'),0,0);



$pdf->SetFont('THSarabun','',12);
$pdf->SetY(63);
$pdf->MultiCell(195,$line_space,iconv("UTF-8", "TIS-620",''),0,'L');

$pdf->setxy(166,32);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$at),0,0);
//วันที่
$pdf->setxy(150,39);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$day1),0,0);

$pdf->setxy(165,39);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$month1),0,0);

$pdf->setxy(188,39);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$year1),0,0);

$pdf->SetFont('THSarabun','',16);


$pdf->setxy(35,48);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$leave),0,0);

$pdf->setxy(26,55);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$to),0,0);

$pdf->setxy(40,69);
$pdf->Cell(90,$line_space,iconv("UTF-8", "TIS-620",$name),0,0,'C');

$pdf->setxy(130,69);
$pdf->Cell(90,$line_space,iconv("UTF-8", "TIS-620",$own_position),0,0,'C');

$pdf->setxy(30,76);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$affiliation),0,0);

$pdf->setxy(53,111);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$date2),0,0);

$pdf->setxy(117,111);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$date3),0,0);

$pdf->setxy(185,111);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$many),0,0);

$pdf->setxy(165,118);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$date4),0,0);

$pdf->setxy(29,125);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$date5),0,0);

$pdf->setxy(95,125);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$many1),0,0);

$pdf->SetXY(15,133);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$connect),0,0);


$pdf->setfont('','','14');
$pdf->SetXY(120,161);
$pdf->Cell(90,$line_space,iconv("UTF-8", "TIS-620",$name2),0,0,'C');


$pdf->Output();
}else{ echo('ไม่มีข้อมูล');}

?>
