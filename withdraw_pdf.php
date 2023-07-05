<?php
if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "fmadd")) {
require_once("inc/func.php");
$major = stripslashes($_POST["major"]);	
$num = stripslashes($_POST["num"]);
$A1 = stripslashes($_POST["A1"]);
$A2 = stripslashes($_POST["A2"]);
$date1 = Day_show($_POST["datenow1"]);
$yearly = stripslashes($_POST["yearly"]);
$about = stripslashes($_POST["about"]);
$name = stripslashes($_POST["name"]);
$position = stripslashes($_POST["position"]);
$date2 = stripslashes($_POST["datenow2"]);
list($day2, $month2, $year2) = Day_show_list($date2);

$name1 = stripslashes($_POST["name1"]);
$address = stripslashes($_POST["address"]);
$year= stripslashes($_POST["year"]);
$the_time = stripslashes($_POST["the_time"]);
$many= stripslashes($_POST["many"]);
$unit = stripslashes($_POST["unit"]);
$money = stripslashes($_POST["money"]);
$money1 = ReadNumber($_POST["money"]);


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

$pdf->setfont('THSarabun','B','24');
$pdf->Cell(78);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'บันทึกข้อความ'),0,1);

$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",''),0,1);


$pdf->setfont('THSarabun','B','16');
$pdf->Cell(6);
$pdf->Cell(10,$line_space+2,iconv("UTF-8", "TIS-620",'ส่วนราชการ'),0,0);

$pdf->setfont('THSarabun','','16');
$pdf->Cell(10);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'คณะสหเวชศาสตร์  ภาควิชา....................................................................................  โทร.............................'),0,1);

$pdf->setfont('THSarabun','B','16');
$pdf->Cell(6);
$pdf->Cell(1,$line_space+2,iconv("UTF-8", "TIS-620",'ที่ '),0,0);

$pdf->setfont('THSarabun','','16');
$pdf->Cell(5);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'อว. 0603.13............../..............................'),0,0);

$pdf->setfont('THSarabun','B','16');
$pdf->Cell(15);
$pdf->Cell(1,$line_space+2,iconv("UTF-8", "TIS-620",'วันที่'),0,0);

$pdf->setfont('THSarabun','','16');
$pdf->Cell(3);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'......................................................................................................'),0,1);

$pdf->setfont('THSarabun','B','16');
$pdf->Cell(6);
$pdf->Cell(7,$line_space+2,iconv("UTF-8", "TIS-620",'เรื่อง'),0,0);

$pdf->setfont('THSarabun','','16');
$pdf->Cell(4);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'ขออนุมัติดำเนินโครงการวิจัยที่ได้รับทุนอุดหนุนการวิจัยนักวิจัยรุ่นใหม่  และนักวิจัยทั่วไป  สำหรับบุคลากรสาย'),0,1);
$pdf->Cell(17);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'วิชาการ ประจำปีงบประมาณ พ.ศ........................และขออนุมัติเบิกเงินงวดที่ 1'),0,1);

$pdf->setfont('THSarabun','B','16');
$pdf->Cell(6);
$pdf->Cell(5,$line_space+2,iconv("UTF-8", "TIS-620",'เรียน  '),0,0);

$pdf->setfont('THSarabun','','16');
$pdf->Cell(4);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'  คณบดีคณะสหเวชศาสตร์'),0,1);

$pdf->Cell(25);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'ตามที่  คณะสหเวชศาสตร์อนุมัติให้ทุนอุดหนุนการวิจัยนักวิจัยรุ่นใหม่ และนักวิจัยทั่วไป สำหรับบุคลากร'),0,1);

$pdf->Cell(6);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'สายวิชาการ ประจำปีงบประมาณ พ.ศ. 2566 ให้แก่โครงการวิจัยชื่อเรื่อง ......................................................................'),0,1);
$pdf->Cell(6);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'..........................................ในวงเงิน 100,000 บาท (หนึ่งแสนบาทถ้วน)   โดยมี..............................................................'),0,1);

$pdf->Cell(6);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'สังกัดภาควิชา.................................................................. คณะสหเวชศาสตร์  เป็นหัวหน้าโครงการวิจัย นั้น '),0,1);

$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",''),0,1);

$pdf->Cell(25);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'สหเวชศาสตร์ เรื่อง การจัดตั้งและการสนับสนุนหน่วยวิจัย (Research unit) ตามความทราบแล้วนั้น'),0,1);



$pdf->Cell(6);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'ในการนี้  เพื่อให้การดำเนินโครงการวิจัยเป็นไปด้วยความเรียบร้อย  จึงขออนุมัติเบิกเงินทุนอุดหนุนโครงการวิจัย'),0,1);

$pdf->Cell(6);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'งวดที่ 1 จำนวนเงิน 40,000 บาท (สี่หมื่นบาทถ้วน) โดยเบิกจ่ายจากเงินงบประมาณรายได้ ประจำปีงบประมาณ  '),0,1);

$pdf->Cell(6);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'พ.ศ....................... กองทุนวิจัย  แผนงานวิจัย งานวิจัย พัฒนาและถ่ายทอดเทคโนโลยี สำนักงานเลขานุการคณะ '),0,1);

$pdf->Cell(6);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'คณะสหเวชศาสตร์ หมวดเงินอุดหนุน โครงการส่งเสริมงานวิจัยและพัฒนานวัตกรรม'),0,1);


$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",''),0,1);

$pdf->Cell(20);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'จึงเรียนมาเพื่อโปรดพิจารณาอนุมัติ'),0,1);


$pdf-> setfont('','','14');
$pdf->setXY(10,170);
$pdf->Cell(55,$line_space+4,iconv("UTF-8", "TIS-620",'ความเห็นรองคณบดีฝ่ายวิจัยฯ'),0,1);

$pdf->setXY(10,176);
$pdf->Cell(55,$line_space+4,iconv("UTF-8", "TIS-620",'.................................................................................................'),0,1);

$pdf->setXY(10,182);
$pdf->Cell(55,$line_space+4,iconv("UTF-8", "TIS-620",'.................................................................................................'),0,1);

$pdf->setXY(20,192);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'ลงนาม.............................................................'),0,1);

$pdf->setXY(29,199);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'(ผู้ช่วยศาสตราจารย์.ดร.พาชื่น โพทัพ)'),0,1);

$pdf->setXY(29,204);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'รองคณบดีฝ่ายวิจัยและบัณฑิตศึกษา'),0,1);

$pdf->setXY(130,192);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'(.............................................................)'),0,1);

$pdf->setXY(142,197);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'หัวหน้าโครงการวิจัย'),0,1);

$pdf-> setfont('','','14');
$pdf->setXY(10,220);
$pdf->Cell(55,$line_space+4,iconv("UTF-8", "TIS-620",'ความเห็นรองคณบดีฝ่ายวิจัยฯ'),0,1);

$pdf->setXY(25,230);
$pdf->Cell(55,$line_space+4,iconv("UTF-8", "TIS-620",'อนุมัติตามที่เสนอ'),0,1);

$pdf->setXY(20,250);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'ลงนาม.............................................................'),0,1);

$pdf->setXY(29,255);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'(รองศาสตราจารย์ ดร.ศุภวิทู  สุขเพ็ง)'),0,1);

$pdf->setXY(35,260);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'คณบดีคณะสหเวชศาสตร์'),0,1);

$pdf->SetFont('THSarabun','',24);
$pdf->SetXY(20,231);
$pdf->Cell(145,$line_space,iconv("UTF-8", "TIS-620",'o'),0,1,'');

$pdf->SetFont('THSarabun','',16);
$pdf->SetY(63);
$pdf->MultiCell(195,$line_space,iconv("UTF-8", "TIS-620",''),0,'L');

$pdf->setxy(70,30);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$major),0,0,'C');

$pdf->setxy(170,30);
$pdf->Cell(10,$line_space,iconv("UTF-8", "TIS-620",$num),0,0,'C');

$pdf->setxy(43,38);
$pdf->Cell(10,$line_space,iconv("UTF-8", "TIS-620",$A1),0,0,'C');

$pdf->setxy(59,38);
$pdf->Cell(20,$line_space,iconv("UTF-8", "TIS-620",$A2),0,0,'C');

$pdf->setxy(110,38);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$date1),0,0,'c');

$pdf->setxy(81,54);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$yearly),0,0,'c');

$max_chars_per_line = 38;

$becuase_tis620 = iconv('UTF-8', 'TIS-620', $about);

$lines = str_split($becuase_tis620, $max_chars_per_line);

$pdf->setXY(122, 80); // กำหนดตำแหน่งแนวนอน X เป็น 20 และตำแหน่งแนวตั้ง Y เป็น 40

foreach ($lines as $key => $line) {
    if ($key === 0) {
        $pdf->Cell(0, 0, $line, 0, 1);
    } else {
        $pdf->setXY(15, $pdf->GetY() + $line_space+3);
        $pdf->MultiCell(0, 0, $line, 0, 'L');
    }
}


$pdf->SetFont('THSarabun','',16);
$pdf->setxy(125,86);
$pdf->Cell(60,$line_space,iconv("UTF-8", "TIS-620",$name),0,0,'C');

$pdf->setxy(40,94);
$pdf->Cell(50,$line_space,iconv("UTF-8", "TIS-620",$position),0,0,'C');

$pdf->setxy(27,134);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$yearly),0,0,'c');

$pdf->setxy(133,192);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$name),0,0,'c');


//page2
$pdf->AddPage();
$pdf->AddFont('THSarabun','B','THSarabun Bold.php');//ธรรมดา
$pdf->AddFont('THSarabun','','THSarabun.php');//ธรรมดา

$pdf->setFont('THSarabun','B','18');
$pdf->SetXY(90,25);
$pdf->Cell(158,$line_space+1,iconv("UTF-8", "TIS-620",'ใบสำคัญรับเงิน'),0,1);

$pdf->setFont('THSarabun','','14');
$pdf->Cell(138);
$pdf->Cell(158,$line_space+1,iconv("UTF-8", "TIS-620",'คณะสหเวชศาสตร์ มหาวิทยาลัยนเรศวร'),0,1);

$pdf->Cell(130);
$pdf->Cell(158,$line_space+1,iconv("UTF-8", "TIS-620",'วันที่...........เดือน..........................พ.ศ................'),0,1);
$pdf->Cell(158,$line_space+1,iconv("UTF-8", "TIS-620",''),0,1);

$pdf->setFont('THSarabun','','16');
$pdf->Cell(6);
$pdf->Cell(158,$line_space+1,iconv("UTF-8", "TIS-620",'ข้าพเจ้า  ......................................................... ที่อยู่  ภาควิชา.......................................................................คณะสหเวชศาสตร์  '),0,1);

$pdf->Cell(6);
$pdf->Cell(158,$line_space+1,iconv("UTF-8", "TIS-620",'มหาวิทยาลัยนเรศวร  ได้รับเงินจากคณะสหเวชศาสตร์ มหาวิทยาลัยนเรศวร ดังรายการต่อไปนี้'),0,1);

//เส้นกรอบ
$pdf->SetLineWidth(0.2);
$pdf->Rect(15,70,185,120);

//เส้นแกน X
$pdf->SetLineWidth(0.2);
$pdf->Rect(15,80,185,0);

//เส้นแกน Y
$pdf->SetLineWidth(0.2);
$pdf->Rect(30,70,0,110);

//เส้นแกน Y
$pdf->SetLineWidth(0.2);
$pdf->Rect(110,70,0,110);

//เส้นแกน Y
$pdf->SetLineWidth(0.2);
$pdf->Rect(140,70,0,110);

//เส้นแกน Y
$pdf->SetLineWidth(0.2);
$pdf->Rect(170,70,0,120);

//เส้นแกน X
$pdf->SetLineWidth(0.2);
$pdf->Rect(15,180,185,0);

$pdf->Cell(158,$line_space-1,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(6);
$pdf->Cell(158,$line_space,iconv("UTF-8", "TIS-620",'   ที่                                  รายการ                                     จำนวน               หน่วยละ             จำนวนเงิน'),0,1);

$pdf->Cell(6);
$pdf->Cell(158,$line_space+4,iconv("UTF-8", "TIS-620",'   1        เบิกเงินทุนอุดหนุนการวิจัยนักวิจัยรุ่นใหม่ และนักวิจัย          ......              .....................       ...........................'),0,1);

$pdf->Cell(6);
$pdf->Cell(158,$line_space-3,iconv("UTF-8", "TIS-620",'            ทั่วไป สำหรับบุคลากรสายวิชาการ ประจำปีงบประ'),0,1);

$pdf->Cell(6);
$pdf->Cell(158,$line_space+4,iconv("UTF-8", "TIS-620",'            งบประมาณ พ.ศ.................... จากเงินงบประมาณราย'),0,1);

$pdf->Cell(6);
$pdf->Cell(158,$line_space-2,iconv("UTF-8", "TIS-620",'            ได้คณะสหเวชศาสตร์ งวดที่ ........'),0,1);

$pdf->Cell(6);
$pdf->Cell(158,$line_space+2,iconv("UTF-8", "TIS-620",'            โครงการวิจัย เรื่อง  ..............................................  '),0,1);
$pdf->Cell(20);
$pdf->Cell(158,$line_space+2,iconv("UTF-8", "TIS-620",' ..................................................................................  '),0,1);

$pdf->Cell(6);
$pdf->Cell(158,$line_space,iconv("UTF-8", "TIS-620",'            หัวหน้าโครงการวิจัย :  ........................................   '),0,1);

//เส้นกรอบ
$pdf->SetLineWidth(0.2);
$pdf->Rect(35,130,70,36);

$pdf->setfont('','','12');
$pdf->setXY(65,130);
$pdf->Cell(158,$line_space,iconv("UTF-8", "TIS-620",'จ่ายแล้ว'),0,1);

$pdf->setXY(50,135);
$pdf->Cell(158,$line_space,iconv("UTF-8", "TIS-620",'ขอรับรองว่าได้จ่ายเงินตามใบสำคัญนี้'),0,1);

$pdf->setXY(50,150);
$pdf->Cell(158,$line_space,iconv("UTF-8", "TIS-620",'............................................................'),0,1);

$pdf->setXY(58,155);
$pdf->Cell(158,$line_space,iconv("UTF-8", "TIS-620",'(คุณกมลพร เซี่ยงว่อง)'),0,1);

$pdf->setXY(57,160);
$pdf->Cell(158,$line_space,iconv("UTF-8", "TIS-620",'นักวิชาการเงินและบัญชี'),0,1);

$pdf->setfont('','','16');
$pdf->setXY(95,182);
$pdf->Cell(158,$line_space,iconv("UTF-8", "TIS-620",'รวม'),0,1);

$pdf->setXY(180,182);
$pdf->Cell(158,$line_space,iconv("UTF-8", "TIS-620",''),0,1);

$pdf->setXY(15,195);
$pdf->Cell(158,$line_space,iconv("UTF-8", "TIS-620",'จำนวนเงิน.................................................'),0,1);

$pdf->setXY(120,210);
$pdf->Cell(158,$line_space,iconv("UTF-8", "TIS-620",'ลงชื่อ....................................................ผู้รับเงิน'),0,1);

$pdf->setXY(125,218);
$pdf->Cell(158,$line_space,iconv("UTF-8", "TIS-620",'(......................................................)'),0,1);

$pdf->setXY(120,240);
$pdf->Cell(158,$line_space,iconv("UTF-8", "TIS-620",'ลงชื่อ....................................................ผู้จ่ายเงิน'),0,1);

$pdf->setXY(135,248);
$pdf->Cell(158,$line_space,iconv("UTF-8", "TIS-620",'(คุณกมลพร เซี่ยงว่อง)'),0,1);

$pdf->setXY(133,254);
$pdf->Cell(158,$line_space,iconv("UTF-8", "TIS-620",'นักวิชาการเงินและบัญชี'),0,1);

$pdf->SetFont('THSarabun','',14);
$pdf->setxy(148,39);
$pdf->Cell(10,$line_space,iconv("UTF-8", "TIS-620",$day2),0,0,'c');

$pdf->setxy(163,39);
$pdf->Cell(90,$line_space,iconv("UTF-8", "TIS-620",$month2),0,0,'c');

$pdf->setxy(189,39);
$pdf->Cell(90,$line_space,iconv("UTF-8", "TIS-620",$year2),0,0,'c');

$pdf->SetFont('THSarabun','',16);
$pdf->setxy(25,52);
$pdf->Cell(60,$line_space,iconv("UTF-8", "TIS-620",$name1),0,0,'C');

$pdf->setxy(108,52);
$pdf->Cell(60,$line_space,iconv("UTF-8", "TIS-620",$address),0,0,'C');

$pdf->setxy(59,92);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$year),0,0,'c');

$pdf->setxy(73,99);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$the_time),0,0,'c');

$max_chars_per_line = 30;

$becuase_tis620 = iconv('UTF-8', 'TIS-620', $about);

$lines = str_split($becuase_tis620, $max_chars_per_line);

$pdf->setXY(60, 108); // กำหนดตำแหน่งแนวนอน X เป็น 20 และตำแหน่งแนวตั้ง Y เป็น 40

foreach ($lines as $key => $line) {
    if ($key === 0) {
        $pdf->Cell(0, 0, $line, 0, 1);
    } else {
        $pdf->setXY(31, $pdf->GetY() + $line_space+2);
        $pdf->MultiCell(0, 0, $line, 0, 'L');
    }
}

$pdf->setxy(65,120);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$name),0,0);


$pdf->setxy(122,79);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$many),0,0,'c');

$pdf->setxy(148,79);
$pdf->Cell(10,$line_space,iconv("UTF-8", "TIS-620",$unit),0,0,'c');

$pdf->setxy(178,79);
$pdf->Cell(10,$line_space,iconv("UTF-8", "TIS-620",$money),0,0,'c');

$pdf->setxy(178,182);
$pdf->Cell(30,$line_space,iconv("UTF-8", "TIS-620",$money),0,0,'c');

$pdf->setxy(35,194);
$pdf->Cell(30,$line_space,iconv("UTF-8", "TIS-620",$money1.'บาทถ้วน'),0,0,'c');

$pdf->setxy(132,217);
$pdf->Cell(90,$line_space,iconv("UTF-8", "TIS-620",$name1),0,0,'c');



$pdf->Output();
}else{ echo('ไม่มีข้อมูล');}

?>
