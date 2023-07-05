<?php
if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "fmadd")) {
require_once("inc/func.php");
$at = stripslashes($_POST["at"]);	

$date1 = stripslashes($_POST["datenow1"]);
list($day1, $month1, $year1) = Day_show_list($date1);


$date2 = stripslashes($_POST["datenow2"]);
list($day2, $month2, $year2) = Day_show_list($date2);


$date3 = stripslashes($_POST["datenow3"]);
list($day3, $month3, $year3) = Day_show_list($date3);


$datenow14 = stripslashes($_POST["datenow14"]);
$datenow24 = stripslashes($_POST["datenow24"]);
$datenow34 = stripslashes($_POST["datenow34"]);

$date4 = stripslashes($_POST["datenow4"]);
list($day4, $month4, $year4) = Day_show_list($date4);


$date5 = stripslashes($_POST["datenow5"]);
list($day5, $month5, $year5) = Day_show_list($date5);


$datenow17 = stripslashes($_POST["datenow17"]);
$datenow27 = stripslashes($_POST["datenow27"]);
$datenow37 = stripslashes($_POST["datenow37"]);


$date6 = stripslashes($_POST["datenow6"]);
list($day6, $month6, $year6) = Day_show_list($date6);





$name = $_POST["name"];
$age = stripslashes($_POST["age"]);
$own_position = stripslashes($_POST["own_position"]);
$level = stripslashes($_POST["level"]);
$affiliation = stripslashes($_POST["affiliation"]);
$wish = stripslashes($_POST["wish"]);
$country = stripslashes($_POST["country"]);
$last_left = stripslashes($_POST["last_left"]);
$last_country = $_POST["last_country"];
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
$pdf->Cell(70);
$pdf->Cell(55,$line_space+30,iconv("UTF-8", "TIS-620",'แบบใบลาไปต่างประเทศ'),0,1,'c');

$pdf->Cell(73);
$pdf->Cell(55,$line_space,iconv("UTF-8", "TIS-620",' '),0,0);

$pdf->SetFont('THSarabun','',12);
$pdf->Cell(20);
$pdf->Cell(55,$line_space-18,iconv("UTF-8", "TIS-620",'เขียนที่....................................................'),0,1,'c');
$pdf->Cell(130);
$pdf->Cell(55,$line_space+20,iconv("UTF-8", "TIS-620",'วันที่................... เดือน.........................พ.ศ.........................'),0,1,'c');
$pdf->Cell(55,$line_space-20,iconv("UTF-8", "TIS-620",''),0,1,'c');

$pdf->SetFont('THSarabun','',16);
$pdf->Cell(50,$line_space+3,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(4);
$pdf->Cell(50,$line_space+3,iconv("UTF-8", "TIS-620",'เรื่อง   ขอลาไปต่างประเทศ'),0,1);
$pdf->Cell(4);
$pdf->Cell(50,$line_space+3,iconv("UTF-8", "TIS-620",'เรียน   อธิการบดี (ผ่านคณบดีคณะสหเวชศาสตร์)'),0,1);
$pdf->Cell(50,$line_space+3,iconv("UTF-8", "TIS-620",''),0,1);


$pdf->Cell(20);
$pdf->Cell(50,$line_space+3,iconv("UTF-8", "TIS-620",'ข้าพเจ้า......................................................................................................................................อายุ............................ปี'),0,1);

$pdf->Cell(4);
$pdf->Cell(50,$line_space+3,iconv("UTF-8", "TIS-620",'บรรจุเมื่อวันที่.............เดือน..........................................พ.ศ........................ ตำแหน่ง......................................................................'),0,1);

$pdf->Cell(4);
$pdf->Cell(50,$line_space+3,iconv("UTF-8", "TIS-620",'ระดับ.......................................... สังกัด.......................................................................... คณะสหเวชศาสตร์ มหาวิทยาลัยนเรศวร'),0,1);

$pdf->Cell(4);
$pdf->Cell(50,$line_space+3,iconv("UTF-8", "TIS-620",'มีความประสงค์จะลา.............................................. ไปต่างประเทศ ณ ประเทศ.............................................................................'),0,1);

$pdf->Cell(4);
$pdf->Cell(50,$line_space+3,iconv("UTF-8", "TIS-620",'มีกำหนด................ปี..................เดือน..................วัน ตั้งแต่วันที่................เดือน...........................................พ.ศ...........................'),0,1);

$pdf->Cell(4);
$pdf->Cell(50,$line_space+3,iconv("UTF-8", "TIS-620",'ถึงวันที่................เดือน......................................พ.ศ.....................'),0,1);

$pdf->Cell(50,$line_space+3,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(20);
$pdf->Cell(50,$line_space+3,iconv("UTF-8", "TIS-620",'ครั้งสุดท้ายข้าพเจ้าได้ลา.........................................ไปต่างประเทศ ณ ประเทศ............................................................'),0,1);

$pdf->Cell(4);
$pdf->Cell(50,$line_space+3,iconv("UTF-8", "TIS-620",'เป็นเวลา................ปี..................เดือน..................วัน เมื่อวันที่................เดือน.................................................พ.ศ.......................'),0,1);

$pdf->Cell(4);
$pdf->Cell(50,$line_space+3,iconv("UTF-8", "TIS-620",'ถึงวันที่................เดือน.............................................พ.ศ.....................'),0,1);


$pdf->Cell(50,$line_space+3,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(50,$line_space+3,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(50,$line_space+3,iconv("UTF-8", "TIS-620",''),0,1);

$pdf->Cell(145);
$pdf->Cell(50,$line_space+3,iconv("UTF-8", "TIS-620",'ขอแสดงความนับถือ'),0,1);

$pdf->Cell(50,$line_space+3,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(50,$line_space+3,iconv("UTF-8", "TIS-620",''),0,1);

$pdf->Cell(120);
$pdf->Cell(50,$line_space+3,iconv("UTF-8", "TIS-620",'ลงชื่อ.......................................................................'),0,1);

$pdf->Cell(126);
$pdf->Cell(50,$line_space+3,iconv("UTF-8", "TIS-620",'(........................................................................)'),0,1);






$pdf->SetFont('THSarabun','',12);
$pdf->SetY(63);
$pdf->MultiCell(195,$line_space,iconv("UTF-8", "TIS-620",''),0,'L');

$pdf->setxy(166,32);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$at),0,0);

// วันที่
$pdf->setxy(150,39);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$day1),0,0);

$pdf->setxy(165,39);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$month1),0,0);

$pdf->setxy(188,39);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$year1),0,0);

//บรรจุ
$pdf->SetFont('THSarabun','',16);
$pdf->setxy(37,87);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$day2),0,0);

$pdf->setxy(57,87);
$pdf->Cell(30,$line_space,iconv("UTF-8", "TIS-620",$month2),0,0,'C');

$pdf->setxy(105,87);
$pdf->Cell(5,$line_space,iconv("UTF-8", "TIS-620",$year2),0,0,'C');

//กำหนด 1
$pdf->setxy(32,114);
$pdf->Cell(5,$line_space,iconv("UTF-8", "TIS-620",$datenow14),0,0);

$pdf->setxy(52,114);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$datenow24),0,0);

$pdf->setxy(72,114);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$datenow34),0,0);

$pdf->setxy(112,114);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$day3),0,0);

$pdf->setxy(122,114);
$pdf->Cell(50,$line_space,iconv("UTF-8", "TIS-620",$month3),0,0,'C');

$pdf->setxy(178,114);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$year3),0,0);

//ลาสุดท้าย
$pdf->setxy(30,123);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$day4),0,0);


$pdf->setxy(40,123);
$pdf->Cell(50,$line_space,iconv("UTF-8", "TIS-620",$month4),0,0,'C');

$pdf->setxy(90,123);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$year4),0,0);

$pdf->setxy(33,150);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$datenow17),0,0);

$pdf->setxy(50,150);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$datenow27),0,0);

$pdf->setxy(73,150);
$pdf->Cell(5,$line_space,iconv("UTF-8", "TIS-620",$datenow37),0,0,'C');

$pdf->setxy(106,150);
$pdf->Cell(5,$line_space,iconv("UTF-8", "TIS-620",$day5),0,0,'C');

$pdf->setxy(120,150);
$pdf->Cell(50,$line_space,iconv("UTF-8", "TIS-620",$month5),0,0,'C');

$pdf->setxy(180,150);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$year5),0,0);

$pdf->setxy(30,159);
$pdf->Cell(5,$line_space,iconv("UTF-8", "TIS-620",$day6),0,0,'C');

$pdf->setxy(40,159);
$pdf->Cell(50,$line_space,iconv("UTF-8", "TIS-620",$month6),0,0,'C');

$pdf->setxy(97,159);
$pdf->Cell(10,$line_space,iconv("UTF-8", "TIS-620",$year6),0,0);


$pdf->setxy(30,78);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$name),0,0,'C');

$pdf->setxy(180,78);
$pdf->Cell(5,$line_space,iconv("UTF-8", "TIS-620",$age),0,0,'C');

$pdf->setxy(130,87);
$pdf->Cell(50,$line_space,iconv("UTF-8", "TIS-620",$own_position),0,0,'C');

$pdf->setxy(15,96);
$pdf->Cell(50,$line_space,iconv("UTF-8", "TIS-620",$level),0,0,'C');

$pdf->setxy(57,96);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$affiliation),0,0,'C');

$pdf->setxy(46,105);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$wish),0,0);

$pdf->setxy(115,105);
$pdf->Cell(90,$line_space,iconv("UTF-8", "TIS-620",$country),0,0,'C');

$pdf->setxy(65,141);
$pdf->Cell(50,$line_space,iconv("UTF-8", "TIS-620",$last_left),0,0);

$pdf->setxy(128,141);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$last_country),0,0,'C');


$pdf->setxy(125,231);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$name2),0,0,'C');

$pdf->Output();
}else{ echo('ไม่มีข้อมูล');}

?>
