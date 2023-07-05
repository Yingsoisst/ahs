<?php
if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "fmadd")) {
require_once("inc/func.php");
$date1 = stripslashes($_POST["datenow1"]);
list($day, $month, $year) = Day_show_list($date1);
$name = ($_POST["name"]);
$major = ($_POST["major"]);
$project = $_POST["project"];
$project1 = ($_POST["project1"]);
$account_number = ($_POST["account_number"]);
$name1 = ($_POST["name1"]);


$line_space=6;

require('vendor/fpdf184/fpdf.php');
$pdf = new FPDF('P','mm','A4');
$pdf->SetMargins(9,6);
$pdf->SetAutoPageBreak(10);
$pdf->AddPage();
$pdf->AddFont('THSarabun','B','THSarabun Bold.php');//ธรรมดา
$pdf->AddFont('THSarabun','','THSarabun.php');//ธรรมดา

//ด้านบน
$pdf->Image('image/logo.png',95,4,23,23);
$pdf->SetFont('THSarabun','',14);

$pdf->setfont('THSarabun','','16');
$pdf->Cell(78);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",''),0,1);

$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(6);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'ที่ อว.๐๖๐๓.๑๓/'),0,0);

$pdf->setfont('THSarabun','','14');
$pdf->cell(80);
$pdf->Cell(55,$line_space,iconv("UTF-8", "TIS-620",'คณะสหเวชศาสตร์'),0,1);
$pdf->cell(141);
$pdf->Cell(55,$line_space,iconv("UTF-8", "TIS-620",'มหาวิทยาลัยนเรศวร'),0,1);
$pdf->cell(141);
$pdf->Cell(55,$line_space,iconv("UTF-8", "TIS-620",'ตำบลท่าโพธิ์ อำเภอเมือง'),0,1);

$pdf->cell(141);
$pdf->Cell(55,$line_space,iconv("UTF-8", "TIS-620",'จังหวัดพิษณุโลก ๖๕๐๐๐'),0,1);

$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->cell(131);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'เดือน...............................พ.ศ....................'),0,1);

$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",''),0,1);

$pdf->setfont('THSarabun','','16');
$pdf->Cell(6);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'เรื่อง     ขอความอนุเคราะห์ปิดบัญชีออมทรัพย์โครงการ'),0,1);

$pdf->Cell(55,$line_space-3,iconv("UTF-8", "TIS-620",''),0,1);

$pdf->Cell(6);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'เรียน     ผู้จัดการธนาคารกรุงไทย จำกัด (มหาชน) สาขามหาวิทยาลัยนเรศวร'),0,1);

$pdf->Cell(55,$line_space-3,iconv("UTF-8", "TIS-620",''),0,1);

$pdf->Cell(25);
$pdf->Cell(7,$line_space+2,iconv("UTF-8", "TIS-620",'เนื่องจาก  .....................................................  สังกัดภาควิชา ........................................คณะสหเวชศาสตร์'),0,1);

$pdf->setfont('THSarabun','','16');
$pdf->Cell(6);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'ได้รับคัดเลือกให้เป็นผู้รับทุนวิจัย .......................................................................................................................................'),0,1);

$pdf->Cell(6);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",' และบัดนี้โครงการวิจัยดังกล่าวได้ดำเนินการเสร็จสิ้นเป็นที่เรียบร้อยแล้ว นั้น '),0,1);


$pdf->Cell(25);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'ในการนี้ คณะสหเวชศาสตร์   จึงขอความอนุเคราะห์ธนาคารกรุงไทย   จำกัดมหาชน  สาขามหาวิทยาลัย'),0,1);

$pdf->Cell(6);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'นเรศวร ดำเนินการปิดบัญชีออมทรัพย์  ..........................................................................................................................'),0,1);

$pdf->Cell(6);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'............................................................................................................................................................................................  '),0,1);

$pdf->Cell(6);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'เลขที่บัญชี .................................................................................... โดยอำนาจการเบิกจ่ายเป็นของหัวหน้าโครงการวิจัย '),0,1);

$pdf->Cell(6);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'คือ ....................................................................เพื่อให้การดำเนินการดังกล่าวเป็นไปตามวัตถุประสงค์ของโครงการวิจัย'),0,1);

$pdf->Cell(6);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'ที่ได้รับอนุมัติ คณะสหเวชศาสตร์ มหาวิทยาลัยนเรศวร  จึงขอความอนุเคราะห์ปิดบัญชีธนาคารดังกล่าว'),0,1);

$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",''),0,1);

$pdf->Cell(20);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'จึงเรียนมาเพื่อโปรดพิจารณาให้ความอนุเคราะห์'),0,1);

$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",''),0,1);

$pdf->Cell(100);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'ขอแสดงความนับถือ'),0,1);

$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",''),0,1);

$pdf->Cell(86);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'(รองศาสตราจารย์ ดร.ศุภวิทู   สุขเพ็ง)'),0,1);

$pdf->Cell(76);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'  คณบดีคณะสหเวชศาสตร์  มหาวิทยาลัยนเรศวร'),0,1);

$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",''),0,1);

$pdf->setfont('','','14');
$pdf->Cell(6);
$pdf->Cell(55,$line_space-1,iconv("UTF-8", "TIS-620",'  สำนักงานเลขานุการ'),0,1);

$pdf->Cell(6);
$pdf->Cell(55,$line_space-1,iconv("UTF-8", "TIS-620",'  งานวิจัยและห้องปฏิบัติการ โทร.0-5596-622๗'),0,1);

$pdf->Cell(6);
$pdf->Cell(55,$line_space-1,iconv("UTF-8", "TIS-620",'  โทรสาร. 0-5596-6234'),0,1);



$pdf->SetFont('THSarabun','',14);

$pdf->setxy(150,54);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$month),0,0);

$pdf->setxy(179,54);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$year),0,0);

$pdf->SetFont('THSarabun','',16);
$pdf->setxy(50,92);
$pdf->Cell(40,$line_space,iconv("UTF-8", "TIS-620",$name),0,0,'C');

$pdf->setxy(120,92);
$pdf->Cell(40,$line_space,iconv("UTF-8", "TIS-620",$major),0,0,'C');

$pdf->SetFont('THSarabun','',15);
$pdf->setxy(108,100);
$pdf->Cell(40,$line_space,iconv("UTF-8", "TIS-620",$project),0,0,'C');

$pdf->SetFont('THSarabun','B',15);


$max_chars_per_line = 65;

$becuase_tis620 = iconv('UTF-8', 'TIS-620', $project1);

$lines = str_split($becuase_tis620, $max_chars_per_line);

$pdf->setXY(74, 127); // กำหนดตำแหน่งแนวนอน X เป็น 20 และตำแหน่งแนวตั้ง Y เป็น 40

foreach ($lines as $key => $line) {
    if ($key === 0) {
        $pdf->Cell(0, 0, $line, 0, 1);
    } else {
        $pdf->setXY(16, $pdf->GetY() + $line_space+2);
        $pdf->MultiCell(0, 0, $line, 0, 'L');
    }
}


$pdf->SetFont('THSarabun','',16);
$pdf->setxy(33,140);
$pdf->Cell(40,$line_space,iconv("UTF-8", "TIS-620",$account_number),0,0,'C');

$pdf->setxy(22,148);
$pdf->Cell(40,$line_space,iconv("UTF-8", "TIS-620",$name1),0,0,'C');



$pdf->Output();
}else{ echo('ไม่มีข้อมูล');}

?>
