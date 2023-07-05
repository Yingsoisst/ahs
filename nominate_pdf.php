<?php
if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "fmadd")) {
require_once("inc/func.php");
$service = ($_POST["service"]);
$num = ($_POST["num"]);
$to = $_POST["to"];
$date = Day_show($_POST["date"]);
$name = ($_POST["name"]);
$position = ($_POST["position"]);
$affiliation = ($_POST["affiliation"]);
$subject = ($_POST["subject"]);
$id = ($_POST["id"]);
$level = ($_POST["level"]);
$btnradio1 = ($_POST["btnradio1"]);
$name1 = ($_POST["name1"]);
$major = ($_POST["major"]);
$A1 = ($_POST["A1"]);
$A2 = ($_POST["A2"]);
$A3 = ($_POST["A3"]);
$A4 = ($_POST["A4"]);
$B1 = ($_POST["B1"]);
$B2 = ($_POST["B2"]);
$B3 = ($_POST["B3"]);
$B4 = ($_POST["B4"]);
$C1 = ($_POST["C1"]);
$C2 = ($_POST["C2"]);
$C3 = ($_POST["C3"]);
$C4 = ($_POST["C4"]);


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
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(10);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'เรียน  คณบดีคณะสหเวชศาสตร์'),0,1);


$pdf->Cell(25);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'ตามที่................................................................................................................................พนักงานมหาวิทยาลัย '),0,1);

$pdf->Cell(10);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'ตำแหน่ง..........................................................สังกัดภาควิชา.................................................................คณะสหเวชศาสตร์'),0,1);

$pdf->Cell(10);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'ขอประเมินผลการสอนและเอกสารประกอบการสอน/เอกสารคำสอน  ในรายวิชา............................................................'),0,1);

$pdf->Cell(10);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'...............................................................................................................เพื่อประกอบการขอกำหนดตำแหน่งทางวิชาการ'),0,1);

$pdf->Cell(10);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'ระดับ.......................................................... นั้น'),0,1);

$pdf->Cell(55,$line_space,iconv("UTF-8", "TIS-620",''),0,1);

$pdf->Cell(25);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'ในการนี้ ..............................................................................................................................................................'),0,1);

$pdf->Cell(10);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'หัวหน้าภาควิชา......................................................................................ขอเสนอรายชื่อผู้ทรงคุณวุฒิเพื่อประเมินการสอน'),0,1);
$pdf->Cell(10);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'และเอกสารประกอบการสอน/เอกสารคำสอน ของ............................................................................................................'),0,1);
$pdf->Cell(10);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'จำนวน ๓ ท่าน ดังมีรายนามต่อไปนี้'),0,1);

//เส้นกรอบ
$pdf->SetLineWidth(0.2);
$pdf->Rect(20,145,172,55);

//เส้นแกน X
$pdf->SetLineWidth(0.2);
$pdf->Rect(20,155,172,0);

//เส้นแกน X
$pdf->SetLineWidth(0.2);
$pdf->Rect(20,170,172,0);

//เส้นแกน X
$pdf->SetLineWidth(0.2);
$pdf->Rect(20,185,172,0);

//เส้นแกน X
$pdf->SetLineWidth(0.2);
$pdf->Rect(20,170,172,0);

$pdf->setxy(20,146);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'ลำดับที่'),0,1);
$pdf->setxy(24,158);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'1'),0,1);
$pdf->setxy(24,173);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'2'),0,1);
$pdf->setxy(24,188);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'3'),0,1);

//เส้นแกน Y ชื่อ
$pdf->SetLineWidth(0.2);
$pdf->Rect(33,145,0,55);
$pdf->setxy(57,146);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'ชื่อ-สกุล'),0,1);

//เส้นแกน Y//ภาค
$pdf->SetLineWidth(0.2);
$pdf->Rect(99,145,0,55);
$pdf->setxy(104,146);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'ปัจจุบันสังกัดภาควิชา'),0,1);

//เส้นแกน Y เบอร์
$pdf->SetLineWidth(0.2);
$pdf->Rect(144,145,0,55);
$pdf->setxy(143.5,146);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'หมายเลขติดต่อ'),0,1);

//เส้นแกน Y //หมายเหตุ
$pdf->SetLineWidth(0.2);
$pdf->Rect(168,145,0,55);
$pdf->setxy(172,146);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'หมายเหตุ'),0,1);

$pdf->Cell(55,$line_space+45,iconv("UTF-8", "TIS-620",''),0,1);


$pdf->Cell(20);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'จึงเรียนมาเพื่อโปรดพิจารณา'),0,1);

$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",''),0,1);

$pdf->Cell(93);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'(...............................................................)'),0,1);

$pdf->Cell(80);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'หัวหน้าภาควิชา.................................................................'),0,1);



$pdf->SetFont('THSarabun','',16);
$pdf->setxy(45,28);
$pdf->Cell(40,$line_space,iconv("UTF-8", "TIS-620",$service),0,0);

$pdf->setxy(155,28);
$pdf->Cell(40,$line_space,iconv("UTF-8", "TIS-620",$num),0,0);

$pdf->setxy(30,36);
$pdf->Cell(40,$line_space,iconv("UTF-8", "TIS-620",'อว.'.$to),0,0);

$pdf->setxy(125,36);
$pdf->Cell(40,$line_space,iconv("UTF-8", "TIS-620",$date),0,0);

$pdf->setxy(30,45);
$pdf->Cell(40,$line_space,iconv("UTF-8", "TIS-620",'ขอเสนอรายชื่อผู้ทรงคุณวุฒิเพื่อประเมินการสอนและเอกสารประกอบการสอน/เอกสารคำสอน'),0,0);

$pdf->setxy(50,60);
$pdf->Cell(40,$line_space,iconv("UTF-8", "TIS-620",$name),0,0);



$pdf->setxy(35,68);
$pdf->Cell(40,$line_space,iconv("UTF-8", "TIS-620",$position),0,0);

$pdf->setxy(107,68);
$pdf->Cell(40,$line_space,iconv("UTF-8", "TIS-620",$affiliation),0,0);


$max_chars_per_line = array(
    25 , 50 , 0
);

$becuase_tis620 = iconv('UTF-8', 'TIS-620', $subject);

$lines = array();
foreach ($max_chars_per_line as $max_chars) {
    $lines[] = mb_substr($becuase_tis620, 0, $max_chars);
    $becuase_tis620 = mb_substr($becuase_tis620, $max_chars, null);
}

$pdf->setXY(137, 79); 

foreach ($lines as $key => $line) {
    $pdf->MultiCell(0, 0, $line, 0, 'L');
    if ($key < count($lines) - 1) {
        $pdf->setXY(20, $pdf->GetY() + $line_space+2);
    }
}

$pdf->setxy(35,92);
$pdf->Cell(40,$line_space,iconv("UTF-8", "TIS-620",$level),0,0);

if($btnradio1==1){
    $pdf->setxy(55,106);
    $pdf->Cell(40,$line_space,iconv("UTF-8", "TIS-620",'กระผม '.$name1),0,0);
} else{
    $pdf->setxy(55,106);
    $pdf->Cell(40,$line_space,iconv("UTF-8", "TIS-620",'ดิฉัน '.$name1),0,0);
}

 $pdf->setxy(52,114);
 $pdf->Cell(100,$line_space,iconv("UTF-8", "TIS-620",$major),0,0,'c');
 
 $pdf->setxy(100,122);
 $pdf->Cell(100,$line_space,iconv("UTF-8", "TIS-620",$name),0,0,'c');

 //ชื่อ 1
 $max_chars_per_line = array(
    20 , 20 , 0
);

$becuase_tis620 = iconv('UTF-8', 'TIS-620', $A1);

$lines = array();
foreach ($max_chars_per_line as $max_chars) {
    $lines[] = mb_substr($becuase_tis620, 0, $max_chars);
    $becuase_tis620 = mb_substr($becuase_tis620, $max_chars, null);
}

$pdf->setXY(35, 159); 

foreach ($lines as $key => $line) {
    $pdf->MultiCell(0, 0, $line, 0, 'L');
    if ($key < count($lines) - 1) {
        $pdf->setXY(35, $pdf->GetY() + $line_space+2);
    }
}

//สังกัด 1 
$pdf->setxy(99,160);
$pdf->Cell(100,$line_space,iconv("UTF-8", "TIS-620",$A2),0,0,'c');

// เบอร์ 1 
$pdf->setxy(144,160);
$pdf->Cell(100,$line_space,iconv("UTF-8", "TIS-620",$A3),0,0,'c');

//หมายเหตุ 1 
$max_chars_per_line = array(
    5 , 5 , 0
);

$becuase_tis620 = iconv('UTF-8', 'TIS-620', $A4);

$lines = array();
foreach ($max_chars_per_line as $max_chars) {
    $lines[] = mb_substr($becuase_tis620, 0, $max_chars);
    $becuase_tis620 = mb_substr($becuase_tis620, $max_chars, null);
}

$pdf->setXY(168, 159); 

foreach ($lines as $key => $line) {
    $pdf->MultiCell(0, 0, $line, 0, 'L');
    if ($key < count($lines) - 1) {
        $pdf->setXY(168, $pdf->GetY() + $line_space+1);
    }
}


//ชื่อ 2
$max_chars_per_line = array(
   20 , 20 , 0
);

$becuase_tis620 = iconv('UTF-8', 'TIS-620', $B1);

$lines = array();
foreach ($max_chars_per_line as $max_chars) {
   $lines[] = mb_substr($becuase_tis620, 0, $max_chars);
   $becuase_tis620 = mb_substr($becuase_tis620, $max_chars, null);
}

$pdf->setXY(35, 174); 

foreach ($lines as $key => $line) {
   $pdf->MultiCell(0, 0, $line, 0, 'L');
   if ($key < count($lines) - 1) {
       $pdf->setXY(35, $pdf->GetY() + $line_space+2);
   }
}

//สังกัด 2 
$pdf->setxy(99,174);
$pdf->Cell(100,$line_space,iconv("UTF-8", "TIS-620",$B2),0,0,'c');

// เบอร์ 2 
$pdf->setxy(144,174);
$pdf->Cell(100,$line_space,iconv("UTF-8", "TIS-620",$B3),0,0,'c');

//หมายเหตุ 2 
$max_chars_per_line = array(
    5 , 5 , 0
);

$becuase_tis620 = iconv('UTF-8', 'TIS-620', $B4);

$lines = array();
foreach ($max_chars_per_line as $max_chars) {
    $lines[] = mb_substr($becuase_tis620, 0, $max_chars);
    $becuase_tis620 = mb_substr($becuase_tis620, $max_chars, null);
}

$pdf->setXY(168, 174); 

foreach ($lines as $key => $line) {
    $pdf->MultiCell(0, 0, $line, 0, 'L');
    if ($key < count($lines) - 1) {
        $pdf->setXY(168, $pdf->GetY() + $line_space+1);
    }
}


//ชื่อ 3
$max_chars_per_line = array(
   20 , 20 , 0
);

$becuase_tis620 = iconv('UTF-8', 'TIS-620', $C1);

$lines = array();
foreach ($max_chars_per_line as $max_chars) {
   $lines[] = mb_substr($becuase_tis620, 0, $max_chars);
   $becuase_tis620 = mb_substr($becuase_tis620, $max_chars, null);
}

$pdf->setXY(35, 189); 

foreach ($lines as $key => $line) {
   $pdf->MultiCell(0, 0, $line, 0, 'L');
   if ($key < count($lines) - 1) {
       $pdf->setXY(35, $pdf->GetY() + $line_space+2);
   }
}

//สังกัด 3
$pdf->setxy(99,189);
$pdf->Cell(100,$line_space,iconv("UTF-8", "TIS-620",$A2),0,0,'c');

// เบอร์ 3 
$pdf->setxy(144,189);
$pdf->Cell(100,$line_space,iconv("UTF-8", "TIS-620",$A3),0,0,'c');

//หมายเหตุ 3 
$max_chars_per_line = array(
    5 , 5 , 0
);

$becuase_tis620 = iconv('UTF-8', 'TIS-620', $A4);

$lines = array();
foreach ($max_chars_per_line as $max_chars) {
    $lines[] = mb_substr($becuase_tis620, 0, $max_chars);
    $becuase_tis620 = mb_substr($becuase_tis620, $max_chars, null);
}

$pdf->setXY(168, 189); 

foreach ($lines as $key => $line) {
    $pdf->MultiCell(0, 0, $line, 0, 'L');
    if ($key < count($lines) - 1) {
        $pdf->setXY(168, $pdf->GetY() + $line_space+1);
    }
}








 $pdf->setxy(105,229);
 $pdf->Cell(100,$line_space,iconv("UTF-8", "TIS-620",$name1),0,0,'c');

 $pdf->setxy(120,237);
 $pdf->Cell(100,$line_space,iconv("UTF-8", "TIS-620",$major),0,0,'c');



$pdf->Output();
}else{ echo('ไม่มีข้อมูล');}

?>
