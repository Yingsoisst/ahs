<?php
if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "fmadd")) {
require_once("inc/func.php");
$faculty = stripslashes($_POST["faculty"]);	
$field = stripslashes($_POST["field"]);
// $depart = stripslashes($_POST["depart"]);
$year = $_POST["year"];
$id = $_POST["id"];
$Credit1 = $_POST["Credit1"];
$Credit2 = $_POST["Credit2"];
$Credit3 = $_POST["Credit3"];
$Credit4 = $_POST["Credit4"];
$thai = $_POST["thai"];
$english = $_POST["english"];
$section = $_POST["section"];
$many = $_POST["many"];
$idt = $_POST["idt"];
$becuase = $_POST["becuase"];
$num = $_POST["num"];

$line_space=6;

require('vendor/fpdf184/fpdf.php');
$pdf = new FPDF('P','mm','A4');
$pdf->SetMargins(9,6);
$pdf->SetAutoPageBreak(10);
$pdf->AddPage();
$pdf->AddFont('THSarabun','B','THSarabun Bold.php');//ธรรมดา

//เส้นกรอบ
$pdf->SetLineWidth(0.2);
$pdf->Rect(9,28,195,254);
$pdf->AddFont('THSarabun','','THSarabun.php');//ธรรมดา

//มุมขวาบน


//ด้านบน
$pdf->Image('image/nu-logo.png',10,2,25,25);
$pdf->SetFont('THSarabun','',16);
$pdf->SetXY(177,4);
$pdf->Cell(10,$line_space-4,iconv("UTF-8", "TIS-620",'อ้างอิง'),0,0,);

$pdf->SetFont('THSarabun','B',20);
$pdf->Cell(5,$line_space-4,iconv("UTF-8", "TIS-620",'NU5'),0,1,);

$pdf->SetFont('THSarabun','',12);
$pdf->SetXY(175,9);
$pdf->Cell(10,$line_space-4,iconv("UTF-8", "TIS-620",'ปรับปรุงครั้งที่ 2-2018'),0,1,);

$pdf->SetFont('THSarabun','B',18);
$pdf->Cell(80);
$pdf->Cell(55,$line_space+2,iconv("UTF-8", "TIS-620",'มหาวิทยาลัยนเรศวร'),0,1,);
$pdf->Cell(75);
$pdf->Cell(55,$line_space,iconv("UTF-8", "TIS-620",'แบบขอปิดรายวิชา/หมู่เรียน'),0,1);

//ข้อมูลในกรอบ1
$pdf->SetFont('THSarabun','',14);
$pdf->Ln(5);
$pdf->Cell(138,$line_space,iconv("UTF-8", "TIS-620",'1. เรียน คณบดีคณะ....................................................................................................ด้วยภาควิชา/สาขาวิชา......................................................................'),0,1);
$pdf->Cell(80,$line_space,iconv("UTF-8", "TIS-620",'มีความประสงค์ขอปิดรายวิชา/หมู่เรียน สำหรับระดับ'),0,1);
$pdf->SetXY(15,44);
$pdf->Cell(100,$line_space,iconv("UTF-8", "TIS-620",' ปริญญาตรี ตามที่กำหนดไว้ในคู่มือลงทะเบียนเรียนประจำภาคเรียน'),0,1);
$pdf->SetXY(15,50);
$pdf->Cell(100,$line_space,iconv("UTF-8", "TIS-620",' ปริญญาโท'),0,1);
$pdf->SetXY(15,56);
$pdf->Cell(90,$line_space,iconv("UTF-8", "TIS-620",' ปริญญาเอก'),0,1);

//radioหน้า
$pdf->SetFont('THSarabun','',34);
$pdf->SetXY(11,45);
$pdf->Cell(4,4,'',1,0);
$pdf->SetXY(11,51);
$pdf->Cell(4,4,'',1,0);
$pdf->SetXY(11,57);
$pdf->Cell(4,4,'',1,0);

//radio หลัง1
$pdf->SetFont('THSarabun','',34);
$pdf->SetXY(106,45);
$pdf->Cell(4,4,'',1,0); //สี่เหลี่ยม
$pdf->SetXY(106,51);
$pdf->Cell(4,4,'',1,0);
$pdf->SetFont('THSarabun','',14);
$pdf->SetXY(109,44);
$pdf->Cell(100,$line_space,iconv("UTF-8", "TIS-620",' ต้น'),0,1);
$pdf->SetXY(109,50);
$pdf->Cell(100,$line_space,iconv("UTF-8", "TIS-620",' 1'),0,1);

//radio หลัง2
$pdf->SetFont('THSarabun','',34);
$pdf->SetXY(122,45);
$pdf->Cell(4,4,'',1,0);
$pdf->SetXY(122,51);
$pdf->Cell(4,4,'',1,0);
$pdf->SetFont('THSarabun','',14);
$pdf->SetXY(125,44);
$pdf->Cell(100,$line_space,iconv("UTF-8", "TIS-620",' ปลาย'),0,1);
$pdf->SetXY(125,50);
$pdf->Cell(100,$line_space,iconv("UTF-8", "TIS-620",' 2'),0,1);

//radio หลัง3
$pdf->SetFont('THSarabun','',34);
$pdf->SetXY(138,45);
$pdf->Cell(4,4,'',1,0);
$pdf->SetXY(138,51);
$pdf->Cell(4,4,'',1,0);
$pdf->SetFont('THSarabun','',14);
$pdf->SetXY(141,44);
$pdf->Cell(100,$line_space,iconv("UTF-8", "TIS-620",' ฤดูร้อน'),0,1);
$pdf->SetXY(141,50);
$pdf->Cell(100,$line_space,iconv("UTF-8", "TIS-620",' 3'),0,1);
//สุดท้าย
$pdf->SetFont('THSarabun','',14);
$pdf->SetXY(153,44);
$pdf->Cell(100,$line_space,iconv("UTF-8", "TIS-620",'(สำหรับภาคปกติ)  ปีการศึกษา............'),0,1);
$pdf->SetXY(153,50);
$pdf->Cell(100,$line_space,iconv("UTF-8", "TIS-620",'(สำหรับภาคพิเศษ) ปีการศึกษา............'),0,1);
$pdf->Ln(7);
$pdf->SetFont('THSarabun','',14);
$pdf->Cell(195,$line_space,iconv("UTF-8", "TIS-620",'      โดยมีรายละเอียดดังนี้'),0,1);

$pdf->Cell(110,$line_space+2,iconv("UTF-8", "TIS-620",'1.1 รหัสวิชา...................................................................................................................'),'TR',0);
$pdf->Cell(85,$line_space+2,iconv("UTF-8", "TIS-620",'3. บันทึกของหน่วยสนับสนุนการเรียนการสอน'),'T',1);

$pdf->Cell(110,$line_space+2,iconv("UTF-8", "TIS-620",'     จำนวนหน่วยกิจ.....................(...............-................-..............)'),'R',0);
$pdf->Cell(85,$line_space+2,iconv("UTF-8", "TIS-620",'    3.1 ครั้งที่ 1 (  ) มีนิสิตลงทะเบียนอยู่...............คน '),'0',1);

$pdf->Cell(110,$line_space+2,iconv("UTF-8", "TIS-620",'1.2 ชื่อวิชา(Thai)...........................................................................................................'),'R',0);
$pdf->Cell(85,$line_space+2,iconv("UTF-8", "TIS-620",'                    (  ) ไม่มีนิสิตลงทะเบียนแล้ว'),'0',1);

$pdf->Cell(110,$line_space+2,iconv("UTF-8", "TIS-620",'         (English)............................................................................................................'),'R',0);
$pdf->Cell(85,$line_space+2,iconv("UTF-8", "TIS-620",'                        ........................-............../............../..............'),'0',1);

$pdf->Cell(110,$line_space,iconv("UTF-8", "TIS-620",'1.3 หมู่เรียน ที่....................................................'),'R',0);
$pdf->Cell(85,$line_space,iconv("UTF-8", "TIS-620",'    3.2 ครั้งที่ 2 (  ) มีนิสิตลงทะเบียนอยู่...............คน'),'0',1);

$pdf->Cell(110,$line_space,iconv("UTF-8", "TIS-620",'1.4 จำนวนนิสิตในหมู่เรียน..........................คน'),'R',0);
$pdf->Cell(85,$line_space,iconv("UTF-8", "TIS-620",'                    (  ) ไม่มีนิสิตลงทะเบียนแล้ว'),'0',1);

$pdf->Cell(110,$line_space,iconv("UTF-8", "TIS-620",'1.5 รหัสผู้สอน................................................................................................................'),'R',0);
$pdf->Cell(85,$line_space,iconv("UTF-8", "TIS-620",'                        ........................-............../............../..............'),'0',1);

$pdf->Cell(110,$line_space+3,iconv("UTF-8", "TIS-620",'1.6 เหตุผล เพราะ '),'R',0);
$pdf->Cell(85,$line_space+3,iconv("UTF-8", "TIS-620",'ความเห็นเพิ่มเติม...........................................................................'),'0',1);

$pdf->Cell(110,$line_space+3,iconv("UTF-8", "TIS-620",'........................................................................................................................................'),'R',0);
$pdf->Cell(85,$line_space+3,iconv("UTF-8", "TIS-620",'.......................................................................................................'),'0',1);

$pdf->Cell(110,$line_space+3,iconv("UTF-8", "TIS-620",'........................................................................................................................................'),'R',0);
$pdf->Cell(85,$line_space+3,iconv("UTF-8", "TIS-620",'.......................................................................................................'),'0',1);

$pdf->Cell(110,$line_space,iconv("UTF-8", "TIS-620",'ลงนาม....................................................   ลงนาม.........................................................'),'R',0);
$pdf->Cell(85,$line_space,iconv("UTF-8", "TIS-620",'                               ลงนาม............................................'),'0',1);

$pdf->Cell(110,$line_space,iconv("UTF-8", "TIS-620",'                        ผู้สอน                                      หัวหน้าภาควิชา'),'R',0);
$pdf->Cell(85,$line_space,iconv("UTF-8", "TIS-620",'                                        ............./............../.............'),'B',1);

$pdf->Cell(110,$line_space+2,iconv("UTF-8", "TIS-620",'           ............./............../.............                 ............./............../.............'),'R',0);
$pdf->Cell(110,$line_space,iconv("UTF-8", "TIS-620",'4. คำสั่งรองอธิการบดี'),'R',1);

$pdf->Cell(110,$line_space+2,iconv("UTF-8", "TIS-620",'*เบอร์โทรศัพท์ที่ติดต่อผู้สอน.........................................................................................'),'R',0);
$pdf->Cell(85,$line_space+2,iconv("UTF-8", "TIS-620",'                 (    ) อนุมัติ'),'0',1);

$pdf->Cell(110,$line_space+2,iconv("UTF-8", "TIS-620",''),'TR',0);
$pdf->Cell(85,$line_space+2,iconv("UTF-8", "TIS-620",'                 (    ) ไม่อนุมัติ'),'0',1);

$pdf->Cell(110,$line_space,iconv("UTF-8", "TIS-620",'2. เรียน รองอธิการบดี'),'R',0);
$pdf->Cell(85,$line_space,iconv("UTF-8", "TIS-620",'                 (    ) คำสั่งอื่นๆ......................................................'),'0',1);

$pdf->Cell(110,$line_space,iconv("UTF-8", "TIS-620",'          เพื่อโปรดพิจรณา'),'R',0);
$pdf->Cell(85,$line_space,iconv("UTF-8", "TIS-620",'     ...............................................................................................'),'0',1);

$pdf->Cell(110,$line_space,iconv("UTF-8", "TIS-620",'    .................................................................................................................................'),'R',0);
$pdf->Cell(85,$line_space,iconv("UTF-8", "TIS-620",'     ...............................................................................................'),'0',1);

$pdf->Cell(110,$line_space,iconv("UTF-8", "TIS-620",'    .................................................................................................................................'),'R',1);

$pdf->Cell(110,$line_space,iconv("UTF-8", "TIS-620",''),'R',0);
$pdf->Cell(85,$line_space,iconv("UTF-8", "TIS-620",'                               ลงนาม............................................'),'0',1);

$pdf->Cell(110,$line_space,iconv("UTF-8", "TIS-620",''),'R',0);
$pdf->Cell(85,$line_space,iconv("UTF-8", "TIS-620",'                                                รองอธิการบดี'),'0',1);

$pdf->Cell(110,$line_space,iconv("UTF-8", "TIS-620",'                                                       ลงนาม.................................................'),'R',0);
$pdf->Cell(85,$line_space,iconv("UTF-8", "TIS-620",'                                        ............./............../.............'),'B',1);

$pdf->Cell(110,$line_space,iconv("UTF-8", "TIS-620",'                                                                            คณบดี'),'R',1);

$pdf->Cell(110,$line_space,iconv("UTF-8", "TIS-620",'                                                                ............./............../.............'),'R',0);

$pdf->SetFont('THSarabun','BU',14);
$pdf->Cell(15);
$pdf->Cell(85,$line_space,iconv("UTF-8", "TIS-620",'บันทึกของหน่วยสนับสนุนการเรียนการสอน'),'0',1);
$pdf->Cell(110,$line_space,iconv("UTF-8", "TIS-620",''),'R',1);

$pdf->SetFont('THSarabun','',14);
$pdf->Cell(110,$line_space,iconv("UTF-8", "TIS-620",''),'R',0);
$pdf->Cell(85,$line_space,iconv("UTF-8", "TIS-620",'           (   ) ดำเนินการเปิดรายวิชาแล้ว                    '),'0',1);

$pdf->Cell(110,$line_space,iconv("UTF-8", "TIS-620",''),'R',0);
$pdf->Cell(85,$line_space,iconv("UTF-8", "TIS-620",'           (   ) อื่นๆ....................................................................'),'0',1);

$pdf->Cell(110,$line_space,iconv("UTF-8", "TIS-620",''),'R',0);
$pdf->Cell(85,$line_space,iconv("UTF-8", "TIS-620",'   .............................................................................................'),'0',1);

$pdf->Cell(110,$line_space,iconv("UTF-8", "TIS-620",''),'R',1);

$pdf->Cell(110,$line_space,iconv("UTF-8", "TIS-620",''),'R',1);

$pdf->Cell(110,$line_space,iconv("UTF-8", "TIS-620",''),'R',0);
$pdf->Cell(85,$line_space,iconv("UTF-8", "TIS-620",'                                             .....................................'),'0',1);

$pdf->Cell(110,$line_space,iconv("UTF-8", "TIS-620",''),'R',0);
$pdf->Cell(85,$line_space,iconv("UTF-8", "TIS-620",'                                           ............./................/...........'),'0',1);

$pdf->SetFont('THSarabun','U',14);
$pdf->Cell(15,$line_space,iconv("UTF-8", "TIS-620",'หมายเหตุ'),'0',0);

$pdf->SetFont('THSarabun','',14);
$pdf->Cell(110,$line_space,iconv("UTF-8", "TIS-620",'แบบขอปิดรายวิชา/หมู่เรียน ใช้สำหรับการขอปิดรายวิชา/หมู่เรียน เพียงรายวิชาเดียวเท่านั้น'),'0',1);




$pdf->SetFont('THSarabun','',14);
$pdf->SetY(63);
$pdf->MultiCell(195,$line_space,iconv("UTF-8", "TIS-620",''),0,'L');

$pdf->SetXY(39,29);
$pdf->Cell(92,$line_space,iconv("UTF-8", "TIS-620",$faculty),0,0,);
$pdf->Cell(18);
$pdf->Cell(69,$line_space,iconv("UTF-8", "TIS-620",$field),0,1,);

// $pdf->Cell(50);
// $pdf->Cell(60,$line_space,iconv("UTF-8", "TIS-620",$depart),0,1,);

$pdf->setXY(193,43);
$pdf->Cell(69,$line_space,iconv("UTF-8", "TIS-620",$year),0,1,);

$pdf->setXY(193,49);
$pdf->Cell(69,$line_space,iconv("UTF-8", "TIS-620",$year),0,1,);

$pdf->setXY(30,69);
$pdf->Cell(69,$line_space,iconv("UTF-8", "TIS-620",$id),0,1,);

$pdf->setXY(42,77);
$pdf->Cell(69,$line_space,iconv("UTF-8", "TIS-620",$Credit1),0,1,);

$pdf->setXY(57,77);
$pdf->Cell(69,$line_space,iconv("UTF-8", "TIS-620",$Credit2),0,1,);

$pdf->setXY(72,77);
$pdf->Cell(69,$line_space,iconv("UTF-8", "TIS-620",$Credit3),0,1,);

$pdf->setXY(85,77);
$pdf->Cell(69,$line_space,iconv("UTF-8", "TIS-620",$Credit4),0,1,);

$pdf->setXY(36,85);
$pdf->Cell(69,$line_space,iconv("UTF-8", "TIS-620",$thai),0,1,);

$pdf->setXY(36,93);
$pdf->Cell(69,$line_space,iconv("UTF-8", "TIS-620",$english),0,1,);

$pdf->setXY(36,100);
$pdf->Cell(69,$line_space,iconv("UTF-8", "TIS-620",$section),0,1,);

$pdf->setXY(45,106);
$pdf->Cell(20,$line_space,iconv("UTF-8", "TIS-620",$many),0,1,'C');

$pdf->setXY(30,112);
$pdf->Cell(20,$line_space,iconv("UTF-8", "TIS-620",$idt),0,1);

$pdf->setxy(10,127);
$pdf->MultiCell(110,$line_space+3,iconv("UTF-8", "TIS-620",$becuase),0,'c');

$pdf->setXY(49,164);
$pdf->Cell(20,$line_space,iconv("UTF-8", "TIS-620",$num),0,1);

$pdf->Output();
}else{ echo('ไม่มีข้อมูล');}

?>
