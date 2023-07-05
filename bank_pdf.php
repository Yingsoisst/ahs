<?php
if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "fmadd")) {
require_once("inc/func.php");
$date1 = stripslashes($_POST["datenow1"]);
list($day, $month, $year) = Day_show_list($date1);

$about_th = stripslashes($_POST["about_th"]);
$about_en = stripslashes($_POST["about_en"]);
$name = $_POST["name"];
$affiliation = stripslashes($_POST["affiliation"]);
$about1 = stripslashes($_POST["about1"]);
$name1 = stripslashes($_POST["name1"]);
 

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
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'เดือน.............................พ.ศ......................'),0,1);

$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",''),0,1);

$pdf->setfont('THSarabun','','16');
$pdf->Cell(6);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'เรื่อง     ขอความอนุเคราะห์เปิดบัญชีธนาคาร'),0,1);

$pdf->Cell(55,$line_space-3,iconv("UTF-8", "TIS-620",''),0,1);

$pdf->Cell(6);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'เรียน     ผู้จัดการธนาคารกรุงไทย จำกัด (มหาชน) สาขามหาวิทยาลัยนเรศวร'),0,1);

$pdf->Cell(55,$line_space-3,iconv("UTF-8", "TIS-620",''),0,1);

$pdf->Cell(25);
$pdf->Cell(7,$line_space+2,iconv("UTF-8", "TIS-620",'ตามที่คณะสหเวชศาสตร์มหาวิทยาลัยนเรศวร อนุมัติให้ทุนอุดหนุนการวิจัยนักวิจัยรุ่นใหม่ สำหรับบุคลากร'),0,1);

$pdf->setfont('THSarabun','','16');
$pdf->Cell(6);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'สายวิชาการ ประจำปีงบประมาณ พ.ศ. 2566 ให้แก่โครงการวิจัย เรื่อง "........................................................................'),0,1);

$pdf->Cell(6);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'................................................................................................................." ในวงเงิน 100,000 บาท  (หนึ่งแสนบาทถ้วน) '),0,1);


$pdf->Cell(6);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'โดยมี.....................................................  สังกัดภาควิชา ...................................................................  คณะสหเวชศาสตร์ '),0,1);

$pdf->Cell(6);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'เป็นหัวหน้าโครงการวิจัย นั้น และกำหนดเงื่อนไขให้ผู้รับทุนเป็นผู้เปิดบัญชีธนาคารกรุงไทย จำกัด (มหาชน) '),0,1);

$pdf->Cell(6);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'ชื่อบัญชี ........................................................................................................................  โดยอำนาจการเบิกจ่ายเป็นของ '),0,1);

$pdf->Cell(6);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'หัวหน้าโครงการวิจัย คือ.....................................................  เพื่อให้การดำเนินการดังกล่าวเป็นไปตามวัตถุประสงค์ของ'),0,1);

$pdf->Cell(6);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'โครงการวิจัยที่ได้รับอนุมัติคณะสหเวชศาสตร์ มหาวิทยาลัยนเรศวร จึงขอความอนุเคราะห์เปิดบัญชีธนาคารดังกล่าว'),0,1);

$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",''),0,1);

$pdf->Cell(20);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'จึงเรียนมาเพื่อโปรดพิจารณาให้ความอนุเคราห์'),0,1);

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
$pdf->Cell(55,$line_space-1,iconv("UTF-8", "TIS-620",'  คณบดีคณะสหเวชศาสตร์  มหาวิทยาลัยนเรศวร'),0,1);

$pdf->Cell(6);
$pdf->Cell(55,$line_space-1,iconv("UTF-8", "TIS-620",'  งานวิจัยและห้องปฏิบัติการ โทร.0-5596-622๗'),0,1);

$pdf->Cell(6);
$pdf->Cell(55,$line_space-1,iconv("UTF-8", "TIS-620",'  โทรสาร. 0-5596-6234'),0,1);


$pdf->SetFont('THSarabun','',14);
$pdf->SetY(63);
$pdf->MultiCell(195,$line_space,iconv("UTF-8", "TIS-620",''),0,'L');

$pdf->setxy(150,54);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$month),0,0,'c');

$pdf->setxy(178,54);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$year),0,0,'c');


$pdf->SetFont('THSarabun','',16);
$line_space = 8;
$max_chars_per_line = 45;

$becuase_tis620 = iconv('UTF-8', 'TIS-620', $about_th);

$lines = str_split($becuase_tis620, $max_chars_per_line);

$pdf->setXY(122, 103); // กำหนดตำแหน่งแนวนอน X เป็น 20 และตำแหน่งแนวตั้ง Y เป็น 40

foreach ($lines as $key => $line) {
    if ($key === 0) {
        $pdf->Cell(0, 0, $line, 0, 1);
    } else {
        $pdf->setXY(15, $pdf->GetY() + $line_space);
        $pdf->MultiCell(0, 0, $line.'('.$about_en.')', 0, 'L');
    }
}

// $pdf->setxy(67,107);
// $pdf->Cell(50,$line_space,iconv("UTF-8", "TIS-620",'('.$about_en.')'),0,0,'c');

$pdf->setxy(27,116);
$pdf->Cell(92,$line_space-2,iconv("UTF-8", "TIS-620",$name),0,0,'c');

$pdf->setxy(97,116);
$pdf->Cell(92,$line_space-2,iconv("UTF-8", "TIS-620",$affiliation),0,0);


$pdf->setxy(29,132);
$pdf->Cell(50,$line_space-2,iconv("UTF-8", "TIS-620",$about1),0,0,'c');

$pdf->setxy(52,140);
$pdf->Cell(92,$line_space-2,iconv("UTF-8", "TIS-620",$name1),0,0);



$pdf->Output();
}else{ echo('ไม่มีข้อมูล');}

?>
