<?php
if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "fmadd")) {
require_once("inc/func.php");
$service = ($_POST["service"]);
$num = ($_POST["num"]);
$to = $_POST["to"];
$date = Day_show($_POST["date"]);
$btnradio1 = ($_POST["btnradio1"]);
$name = ($_POST["name"]);
$position = ($_POST["position"]);
$affiliation = ($_POST["affiliation"]);
$level = ($_POST["level"]);
$btnradio2 = ($_POST["btnradio2"]);


$line_space=6;

require('vendor/fpdf184/fpdf.php');
$pdf = new FPDF('P','mm','A4');
$pdf->SetMargins(9,6);
$pdf->SetAutoPageBreak(10);
$pdf->AddPage();
$pdf->AddFont('THSarabun','B','THSarabun Bold.php');//ธรรมดา
$pdf->AddFont('THSarabun','','THSarabun.php');//ธรรมดา

//ด้านบน
$pdf->Image('image/logo.png',20,10,15,15);
$pdf->SetFont('THSarabun','',14);

$pdf->setfont('THSarabun','B','24');
$pdf->Cell(78);
$pdf->Cell(55,$line_space+15,iconv("UTF-8", "TIS-620",'บันทึกข้อความ'),0,1);

$pdf->Cell(55,$line_space-5,iconv("UTF-8", "TIS-620",''),0,1);

$pdf->setfont('THSarabun','B','16');
$pdf->Cell(10);
$pdf->Cell(10,$line_space+2,iconv("UTF-8", "TIS-620",'ส่วนราชการ'),0,0);

$pdf->setfont('THSarabun','','16');
$pdf->Cell(10);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'.......................................................................................................โทร...........................................................'),0,1);

$pdf->setfont('THSarabun','B','16');
$pdf->Cell(10);
$pdf->Cell(1,$line_space+2,iconv("UTF-8", "TIS-620",'ที่ '),0,0);

$pdf->setfont('THSarabun','','16');
$pdf->Cell(5);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'..............................................................................'),0,0);

$pdf->setfont('THSarabun','B','16');
$pdf->Cell(15);
$pdf->Cell(1,$line_space+2,iconv("UTF-8", "TIS-620",'วันที่'),0,0);

$pdf->setfont('THSarabun','','16');
$pdf->Cell(3);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'......................................................................................................'),0,1);

$pdf->setfont('THSarabun','B','16');
$pdf->Cell(10);
$pdf->Cell(7,$line_space+2,iconv("UTF-8", "TIS-620",'เรื่อง'),0,0);

$pdf->setfont('THSarabun','','16');
$pdf->Cell(4);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'.................................................................................................................................................................................'),0,1);
$pdf->Cell(10);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'เรียน  คณบดีคณะสหเวชศาสตร์'),0,1);


$pdf->Cell(25);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'ด้วย...................................................................................................................................พนักงานมหาวิทยาลัย '),0,1);

$pdf->Cell(10);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'ตำแหน่ง..........................................................สังกัดภาควิชา.................................................................คณะสหเวชศาสตร์ '),0,1);

$pdf->Cell(10);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'มีความประสงค์จะขอกำหนดตำแหน่งทางวิชาการระดับ.................................................................นั้น'),0,1);

$pdf->Cell(10);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'ขอกำหนดตำแหน่งทางวิชาการ ระดับ.........................................................................................นั้น'),0,1);


$pdf->Cell(25);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'ในการนี้             จึงมีความประสงค์ขอส่งแบบคำขอรับการพิจารณากำหนดตำแหน่งทางวิชาการและผลงาน'),0,1);

$pdf->Cell(10);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'ทางวิชาการ เพื่อประกอบการขอกำหนดตำแหน่งทางวิชาการ ระดับ.....................................................................'),0,1);
$pdf->Cell(10);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'พร้อมนี้ได้แนบผลประเมินการสอนและผลประเมินเอกสาร'),0,1);


$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",''),0,1);

$pdf->Cell(25);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'จึงเรียนมาเพื่อโปรดพิจารณา'),0,1);

$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(93);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'(...............................................................)'),0,1);

$pdf->Cell(80);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'............................................................................................'),0,1);



$pdf->SetFont('THSarabun','',16);
$pdf->setxy(45,28);
$pdf->Cell(40,$line_space,iconv("UTF-8", "TIS-620",$service),0,0);

$pdf->setxy(155,28);
$pdf->Cell(40,$line_space,iconv("UTF-8", "TIS-620",$num),0,0);

$pdf->setxy(30,36);
$pdf->Cell(40,$line_space,iconv("UTF-8", "TIS-620",'อว.'.$to),0,0);

$pdf->setxy(125,36);
$pdf->Cell(40,$line_space,iconv("UTF-8", "TIS-620",$date),0,0);

$pdf->setxy(30,44);
$pdf->Cell(40,$line_space,iconv("UTF-8", "TIS-620",'ขอส่งแบบคำขอรับการพิจารณากำหนดตำแหน่งทางวิชาการ (แบบ กพอ.๐๓) และผลงานทางวิชาการ'),0,0);

if($btnradio1==1){
    $pdf->setxy(50,60);
    $pdf->Cell(40,$line_space,iconv("UTF-8", "TIS-620",'กระผม '.$name),0,0);
    $pdf->setxy(51.3,93);
    $pdf->Cell(40,$line_space,iconv("UTF-8", "TIS-620",'กระผม '),0,0);
} else{
    $pdf->setxy(50,60);
    $pdf->Cell(40,$line_space,iconv("UTF-8", "TIS-620",'ดิฉัน '.$name),0,0);
    $pdf->setxy(55,93);
    $pdf->Cell(40,$line_space,iconv("UTF-8", "TIS-620",'ดิฉัน '),0,0);
}

$pdf->setxy(35,68);
$pdf->Cell(40,$line_space,iconv("UTF-8", "TIS-620",$position),0,0);

$pdf->setxy(107,68);
$pdf->Cell(40,$line_space,iconv("UTF-8", "TIS-620",$affiliation),0,0);

$pdf->setxy(78,84);
$pdf->Cell(40,$line_space,iconv("UTF-8", "TIS-620",$level),0,0);

$pdf->setxy(135,100);
$pdf->Cell(40,$line_space,iconv("UTF-8", "TIS-620",$level),0,0);

if($btnradio2==1){
    $pdf->setxy(103.5,109);
    $pdf->Cell(40,$line_space,iconv("UTF-8", "TIS-620",'ประกอบการสอนมาด้วยแล้ว  '),0,0);
} else{
    $pdf->setxy(103.5,109);
    $pdf->Cell(40,$line_space,iconv("UTF-8", "TIS-620",'คำสอนมาด้วยแล้ว  '),0,0);
}


$pdf->setxy(105,164);
$pdf->Cell(100,$line_space,iconv("UTF-8", "TIS-620",$name),0,0,'c');

$pdf->setxy(105,172);
$pdf->Cell(100,$line_space,iconv("UTF-8", "TIS-620",$position),0,0,'c');

$pdf->Output();
}else{ echo('ไม่มีข้อมูล');}

?>
