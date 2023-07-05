<?php
if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "fmadd")) {
require_once("inc/func.php");


$Title = ($_POST["Title"]);
$status = ($_POST["status"]);

if(!empty($_POST["btnradio1"])) {
    $btnradio1 = $_POST["btnradio1"];
}else{
    $btnradio1 = "" ;
}
if(!empty($_POST["btnradio2"])) {
    $btnradio2 = $_POST["btnradio2"];
}else{
    $btnradio2 = "" ;
}
if(!empty($_POST["btnradio3"])) {
    $btnradio3 = $_POST["btnradio3"];
}else{
    $btnradio3 = "" ;
}
if(!empty($_POST["btnradio4"])) {
    $btnradio4 = $_POST["btnradio4"];
}else{
    $btnradio4 = "" ;
}
if(!empty($_POST["btnradio5"])) {
    $btnradio5 = $_POST["btnradio5"];
}else{
    $btnradio5 = "" ;
}
if(!empty($_POST["btnradio6"])) {
    $btnradio6 = $_POST["btnradio6"];
}else{
    $btnradio6 = "" ;
}
if(!empty($_POST["btnradio7"])) {
    $btnradio7 = $_POST["btnradio7"];
}else{
    $btnradio7 = "" ;
}
if(!empty($_POST["btnradio8"])) {
    $btnradio8 = $_POST["btnradio8"];
}else{
    $btnradio8 = "" ;
}
if(!empty($_POST["btnradio9"])) {
    $btnradio9 = $_POST["btnradio9"];
}else{
    $btnradio9 = "" ;
}
if(!empty($_POST["btnradio10"])) {
    $btnradio10 = $_POST["btnradio10"];
}else{
    $btnradio10 = "" ;
}
if(!empty($_POST["btnradio11"])) {
    $btnradio11 = $_POST["btnradio11"];
}else{
    $btnradio11 = "" ;
}
if(!empty($_POST["btnradio12"])) {
    $btnradio12 = $_POST["btnradio12"];
}else{
    $btnradio12 = "" ;
}
if(!empty($_POST["btnradio13"])) {
    $btnradio13 = $_POST["btnradio13"];
}else{
    $btnradio13 = "" ;
}
if(!empty($_POST["btnradio14"])) {
    $btnradio14 = $_POST["btnradio14"];
}else{
    $btnradio14 = "" ;
}











//page 2
$A1 = $_POST["A1"];
$A2 = $_POST["A2"];
$A3 = $_POST["A3"];
$A4 = $_POST["A4"];
$A5 = $_POST["A5"];
$A6 = $_POST["A6"];
$A7 = $_POST["A7"];

$journal = $_POST["journal"];
$patent = $_POST["patent"];
$technical = $_POST["technical"];
$Oral= $_POST["Oral"];
$program = $_POST["program"];
$book = $_POST["book"];
$history = $_POST["history"];
$Licesing = $_POST["Licesing"];
$name = $_POST["name"];


$line_space=9;
$line_space1=6;

require('vendor/fpdf184/fpdf.php');
$pdf = new FPDF('P','mm','A4');
$pdf->SetMargins(9,6);
$pdf->SetAutoPageBreak(10);
$pdf->AddPage();
$pdf->AddFont('THSarabun','B','THSarabun Bold.php');//ธรรมดา
$pdf->AddFont('THSarabun','','THSarabun.php');//ธรรมดา

//ด้านบน
$pdf->Cell(55,$line_space,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->setfont('THSarabun','BU','18');
$pdf->Cell(50);
$pdf->Cell(200,$line_space+13,iconv("UTF-8", "TIS-620",'แบบแสดงหลักฐานการมีส่วนร่วมในผลงานทางวิชาการทั่วไป'),0,1);

$pdf->Cell(55,$line_space-9,iconv("UTF-8", "TIS-620",''),0,1);

$pdf->setfont('THSarabun','','16');
$pdf->Cell(10);
$pdf->Cell(10,$line_space+2,iconv("UTF-8", "TIS-620",'ก. ชื่อผลงาน....................................................................................................................................................................... '),0,1);
$pdf->Cell(10);
$pdf->Cell(10,$line_space,iconv("UTF-8", "TIS-620",'ข. สถานะผู้ขอในผลงาน.....................................................................................................................................................'),0,1);

$pdf->Cell(25);
$pdf->Cell(10,$line_space,iconv("UTF-8", "TIS-620",'ผู้ประพันธ์อันดับแรก (First author)'),0,1);

$pdf->Cell(25);
$pdf->Cell(10,$line_space,iconv("UTF-8", "TIS-620",'ผู้มีส่วนสำคัญทางปัญญา (Essentially intellectual contributor)'),0,1);

$pdf->Cell(25);
$pdf->Cell(10,$line_space,iconv("UTF-8", "TIS-620",'ผู้ประพันธ์บรรณกิจ (Corresponding author)'),0,1);


$pdf->Cell(10);
$pdf->Cell(10,$line_space+2,iconv("UTF-8", "TIS-620",'ค. ประเภทของผลงาน '),0,1);

$pdf->setfont('THSarabun','','16');
$pdf->Cell(25);
$pdf->Cell(10,$line_space,iconv("UTF-8", "TIS-620",'กลุ่มที่  1         งานวิจัย'),0,1);

$pdf->Cell(25);
$pdf->Cell(10,$line_space,iconv("UTF-8", "TIS-620",'กลุ่มที่ 2 ผลงานทางวิชาการในลักษณะอื่น'),0,1);

$pdf->Cell(50);
$pdf->Cell(10,$line_space,iconv("UTF-8", "TIS-620",'ผลงานวิชาการเพื่ออุตสาหกรรม'),0,1);

$pdf->Cell(50);
$pdf->Cell(10,$line_space,iconv("UTF-8", "TIS-620",'ผลงานวิชาการเพื่อพัฒนาการเรียนการสอนและการเรียนรู้    '),0,1);

$pdf->Cell(50);
$pdf->Cell(10,$line_space,iconv("UTF-8", "TIS-620",'ผลงานวิชาการเพื่อพัฒนานโยบายสาธารณะ   '),0,1);

$pdf->Cell(50);
$pdf->Cell(10,$line_space,iconv("UTF-8", "TIS-620",'ผลงานสร้างสรรค์ด้านวิทยาศาสตร์และเทคโนโลยี  '),0,1);

$pdf->Cell(50);
$pdf->Cell(10,$line_space,iconv("UTF-8", "TIS-620",'พจนานุกรม สารานุกรม นามานุกรม และงานวิชาการในลักษณะเดียวกัน'),0,1);

$pdf->Cell(50);
$pdf->Cell(10,$line_space,iconv("UTF-8", "TIS-620",'ผลงานสร้างสรรค์ด้านสุนทรียะ ศิลปะ             '),0,1);

$pdf->Cell(50);
$pdf->Cell(10,$line_space,iconv("UTF-8", "TIS-620",'ผลงานรับใช้ท้องถิ่นและสังคม'),0,1);

$pdf->Cell(50);
$pdf->Cell(10,$line_space,iconv("UTF-8", "TIS-620",'กรณีศึกษา (Case Study)'),0,1);

$pdf->Cell(50);
$pdf->Cell(10,$line_space,iconv("UTF-8", "TIS-620",'งานแปล'),0,1);

$pdf->Cell(50);
$pdf->Cell(10,$line_space,iconv("UTF-8", "TIS-620",'สิทธิบัตร'),0,1);

$pdf->Cell(50);
$pdf->Cell(10,$line_space,iconv("UTF-8", "TIS-620",'ซอฟแวร์'),0,1);

$pdf->Cell(50);
$pdf->Cell(10,$line_space,iconv("UTF-8", "TIS-620",'ผลงานนวัตกรรม'),0,1);

$pdf->Cell(25);
$pdf->Cell(10,$line_space,iconv("UTF-8", "TIS-620",'กลุ่มที่  3         ตำรา'),0,1);

$pdf->Cell(50);
$pdf->Cell(10,$line_space,iconv("UTF-8", "TIS-620",'หนังสือ'),0,1);

$pdf->Cell(50);
$pdf->Cell(10,$line_space,iconv("UTF-8", "TIS-620",'บทความทางวิชาการ'),0,1);

$pdf->SetXY(27,60);
$pdf->Cell(4,4,'',1,0);

$pdf->SetXY(27,69);
$pdf->Cell(4,4,'',1,0);

$pdf->SetXY(27,78);
$pdf->Cell(4,4,'',1,0);

$pdf->SetXY(52,98);
$pdf->Cell(4,4,'',1,0);

$pdf->SetXY(52,116);
$pdf->Cell(4,4,'',1,0);

$pdf->SetXY(52,125);
$pdf->Cell(4,4,'',1,0);

$pdf->SetXY(52,134);
$pdf->Cell(4,4,'',1,0);

$pdf->SetXY(52,142);
$pdf->Cell(4,4,'',1,0);

$pdf->SetXY(52,151);
$pdf->Cell(4,4,'',1,0);

$pdf->SetXY(52,160);
$pdf->Cell(4,4,'',1,0);

$pdf->SetXY(52,169);
$pdf->Cell(4,4,'',1,0);

$pdf->SetXY(52,178);
$pdf->Cell(4,4,'',1,0);

$pdf->SetXY(52,187);
$pdf->Cell(4,4,'',1,0);

$pdf->SetXY(52,196);
$pdf->Cell(4,4,'',1,0);

$pdf->SetXY(52,205);
$pdf->Cell(4,4,'',1,0);

$pdf->SetXY(52,214);
$pdf->Cell(4,4,'',1,0);

$pdf->SetXY(52,223);
$pdf->Cell(4,4,'',1,0);

$pdf->SetXY(52,232);
$pdf->Cell(4,4,'',1,0);

$pdf->SetXY(52,241);
$pdf->Cell(4,4,'',1,0);


$pdf->setfont('THSarabun','','16');
$pdf->setxy(40,37);
$pdf->Cell(10,$line_space,iconv("UTF-8", "TIS-620",$Title),0,1);

$pdf->setxy(60,47);
$pdf->Cell(10,$line_space,iconv("UTF-8", "TIS-620",$Title),0,1);


if($status==1){
    $pdf->Image('image/check.png',27,59,5,6);
}elseif($status==2){
    $pdf->Image('image/check.png',27,68,5,6);
}else{
    $pdf->Image('image/check.png',27,77,5,6);
}


if($btnradio1==1){
    $pdf->Image('image/check.png',52,97,5,6);
}else{}


if($btnradio2==2){
    $pdf->Image('image/check.png',52,115,5,6);
}else{}

if($btnradio3==3){
    $pdf->Image('image/check.png',52,124,5,6);
}else{}

if($btnradio4==4){
    $pdf->Image('image/check.png',52,133,5,6);
}else{}

if($btnradio5==5){
    $pdf->Image('image/check.png',52,141,5,6);
}else{}

if($btnradio6==6){
    $pdf->Image('image/check.png',52,150,5,6);
}else{}
if($btnradio7==7){
    $pdf->Image('image/check.png',52,159,5,6);
}else{}
if($btnradio8==8){
    $pdf->Image('image/check.png',52,168,5,6);
}else{}
if($btnradio9==9){
    $pdf->Image('image/check.png',52,177,5,6);
}else{}
if($btnradio10==10){
    $pdf->Image('image/check.png',52,186,5,6);
}else{}
if($btnradio11==11){
    $pdf->Image('image/check.png',52,195,5,6);
}else{}
if($btnradio12==12){
    $pdf->Image('image/check.png',52,204,5,6);
}else{}
if($btnradio13==13){
    $pdf->Image('image/check.png',52,213,5,6);
}else{}

if($btnradio14==1){
    $pdf->Image('image/check.png',52,222,5,6);
}elseif($btnradio14==2){
    $pdf->Image('image/check.png',52,231,5,6);
}else{
    $pdf->Image('image/check.png',52,240,5,6);
}




//page2
$pdf->AddPage();
$pdf->AddFont('THSarabun','B','THSarabun Bold.php');//ธรรมดา
$pdf->AddFont('THSarabun','','THSarabun.php');//ธรรมดา

$pdf->setfont('THSarabun','BU','16');

$pdf->Cell(10,$line_space,iconv("UTF-8", "TIS-620",''),0,1);

$pdf->Cell(10);
$pdf->Cell(10,$line_space,iconv("UTF-8", "TIS-620",'ส่วนที่ 1'),0,0);

$pdf->setfont('THSarabun','','16');
$pdf->Cell(5);
$pdf->Cell(10,$line_space,iconv("UTF-8", "TIS-620",'รายละเอียดของการมีส่วนร่วม'),0,1);

$pdf->Cell(25);
$pdf->Cell(10,$line_space,iconv("UTF-8", "TIS-620",'ผู้ขอกำหนดตำแหน่งต้องกรอกรายละเอียดให้ครบถ้วน (เนื่องจากไม่มีการแบ่งส่วนร่วมในผลงาน'),0,1);

$pdf->Cell(10);
$pdf->Cell(10,$line_space,iconv("UTF-8", "TIS-620",'ทางวิชาการ ดังนั้นบทบาทหน้าที่ความรับผิดชอบตามที่ผู้ขอระบุจะมีผลต่อการพิจารณาผลงานทางวิชาการ)'),0,1);


//เส้นกรอบ
$pdf->SetLineWidth(0.2);
$pdf->Rect(10,45,190,180);

//แกน Y
$pdf->SetLineWidth(0.2);
$pdf->Rect(105,45,0,180);

//เส้นแรก
$pdf->SetLineWidth(0.2);
$pdf->Rect(10,58,190,0);

$pdf->SetLineWidth(0.2);
$pdf->Rect(10,84,190,0);

$pdf->SetLineWidth(0.2);
$pdf->Rect(10,109,190,0);

$pdf->SetLineWidth(0.2);
$pdf->Rect(10,132,190,0);

$pdf->SetLineWidth(0.2);
$pdf->Rect(10,157,190,0);

$pdf->SetLineWidth(0.2);
$pdf->Rect(10,181,190,0);

$pdf->SetLineWidth(0.2);
$pdf->Rect(10,204.5,190,0);



$pdf->setfont('THSarabun','','16');

$pdf->Cell(10,$line_space-3,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(28);
$pdf->Cell(10,$line_space,iconv("UTF-8", "TIS-620",'รายละเอียดการมีส่วนร่วม                                            บทบาทและหน้าที่ความรับผิดชอบ'),0,1);

$pdf->Cell(2);
$pdf->Cell(10,$line_space,iconv("UTF-8", "TIS-620",'ก. ความคิดริเริ่ม (Idea) และสมมุติฐาน'),0,1);
$pdf->Cell(10,$line_space1,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(10,$line_space1,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(10,$line_space1,iconv("UTF-8", "TIS-620",''),0,1);

$pdf->Cell(2);
$pdf->Cell(10,$line_space1,iconv("UTF-8", "TIS-620",'ข. การปฏิบัติการวิจัย การมีส่วนร่วมในการออกแบบ '),0,1);

$pdf->Cell(2);
$pdf->Cell(10,$line_space1,iconv("UTF-8", "TIS-620",'การทดลอง การทดสอบ เครื่องมือวัดวิธีการเก็บ'),0,1);

$pdf->Cell(2);
$pdf->Cell(10,$line_space1,iconv("UTF-8", "TIS-620",'ข้อมูล และ Criteria'),0,1);

$pdf->Cell(10,$line_space1,iconv("UTF-8", "TIS-620",''),0,1);

$pdf->Cell(2);
$pdf->Cell(10,$line_space,iconv("UTF-8", "TIS-620",'ค. การจัดเก็บข้อมูล การวิเคราะห์ข้อมูล การแปรผล'),0,1);

$pdf->Cell(2);
$pdf->Cell(10,$line_space1,iconv("UTF-8", "TIS-620",''),0,1);

$pdf->Cell(10,$line_space1,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(10,$line_space1-2,iconv("UTF-8", "TIS-620",''),0,1);

$pdf->Cell(2);
$pdf->Cell(10,$line_space-4,iconv("UTF-8", "TIS-620",'ง. การวิพากษ์วิจารณ์ผล การแสดงการเปรียบเทียบ'),0,1);

$pdf->Cell(2);
$pdf->Cell(10,$line_space1,iconv("UTF-8", "TIS-620",'กับข้อสรุปหรือองค์ความรู้หรือทฤษฎีเดิม'),0,1);

$pdf->Cell(2);
$pdf->Cell(10,$line_space1,iconv("UTF-8", "TIS-620",''),0,1);

$pdf->Cell(10,$line_space,iconv("UTF-8", "TIS-620",''),0,1);

$pdf->Cell(2);
$pdf->Cell(10,$line_space1,iconv("UTF-8", "TIS-620",'จ. การมีส่วนร่วมในการเขียน manuscript ผลงาน'),0,1);

$pdf->Cell(2);
$pdf->Cell(10,$line_space1,iconv("UTF-8", "TIS-620",'สร้างสรรค์ นวัตกรรม สิ่งประดิษฐ์ เป็นต้น'),0,1);

$pdf->Cell(2);
$pdf->Cell(10,$line_space1,iconv("UTF-8", "TIS-620",''),0,1);

$pdf->Cell(10,$line_space1,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(2);
$pdf->Cell(10,$line_space1,iconv("UTF-8", "TIS-620",'ฉ. การให้การสนับสนุน specimens, study '),0,1);

$pdf->Cell(2);
$pdf->Cell(10,$line_space1,iconv("UTF-8", "TIS-620",'cohort, โลจิสติกส์ ทุนวิจัย (โปรดระบุแหล่งทุน เงินทุน'),0,1);

$pdf->Cell(2);
$pdf->Cell(10,$line_space1,iconv("UTF-8", "TIS-620",'และปีที่ได้รับ) เครื่องมือ ห้องปฏิบัติการ ครุภัณฑ์'),0,1);

$pdf->Cell(2);
$pdf->Cell(10,$line_space1,iconv("UTF-8", "TIS-620",''),0,1);

$pdf->Cell(2);
$pdf->Cell(10,$line_space1,iconv("UTF-8", "TIS-620",'ช. อื่นๆ'),0,1);

$pdf->setfont('THSarabun','','16');
$pdf->setxy(108,58);
$pdf->multicell(90,$line_space1,iconv("UTF-8", "TIS-620",$A1),0,0);

$pdf->setxy(108,85);
$pdf->multicell(90,$line_space1,iconv("UTF-8", "TIS-620",$A2),0,0);

$pdf->setxy(108,110);
$pdf->multicell(90,$line_space1,iconv("UTF-8", "TIS-620",$A3),0,0);

$pdf->setxy(108,135);
$pdf->multicell(90,$line_space1,iconv("UTF-8", "TIS-620",$A4),0,0);

$pdf->setxy(108,157);
$pdf->multicell(90,$line_space1,iconv("UTF-8", "TIS-620",$A5),0,0);

$pdf->setxy(108,185);
$pdf->multicell(90,$line_space1,iconv("UTF-8", "TIS-620",$A6),0,0);

$pdf->setxy(108,205);
$pdf->multicell(90,$line_space1,iconv("UTF-8", "TIS-620",$A7),0,0);

//page3
$pdf->AddPage();
$pdf->AddFont('THSarabun','B','THSarabun Bold.php');//ธรรมดา
$pdf->AddFont('THSarabun','','THSarabun.php');//ธรรมดา

$pdf->setfont('THSarabun','BU','16');

$pdf->Cell(10,$line_space,iconv("UTF-8", "TIS-620",''),0,1);

$pdf->Cell(10);
$pdf->Cell(10,$line_space,iconv("UTF-8", "TIS-620",'ส่วนที่ 2'),0,0);

$pdf->setfont('THSarabun','','16');
$pdf->Cell(5);
$pdf->Cell(10,$line_space,iconv("UTF-8", "TIS-620",'รายละเอียดของการนำผลงานไปแสดง การถ่ายทอดเทคโนโลยี หรือการถ่ายทอดองค์ความรู้ '),0,1);

$pdf->Cell(10);
$pdf->Cell(10,$line_space,iconv("UTF-8", "TIS-620",'ต้องแนบเอกสารหลักฐานเพื่อประกอบการพิจารณา'),0,1);

$pdf->setfont('THSarabun','','16');
$pdf->Cell(25);
$pdf->Cell(10,$line_space1,iconv("UTF-8", "TIS-620",'ก. ตีพิมพ์ในวารสาร journal impact factor จำนวนครั้งของการอ้างอิง (ฐานข้อมูล)'),0,1);

$pdf->Cell(10,$line_space,iconv("UTF-8", "TIS-620",''),0,1);

$pdf->Cell(25);
$pdf->Cell(10,$line_space1,iconv("UTF-8", "TIS-620",'ข. สิทธิบัตร ประเภท ปีที่ได้รับการจด จดแบบ ครอบคลุมประเทศ '),0,1);

$pdf->Cell(10,$line_space,iconv("UTF-8", "TIS-620",''),0,1);


$pdf->Cell(25);
$pdf->Cell(10,$line_space1,iconv("UTF-8", "TIS-620",'ค. ถ้าเป็น technical report หรือ รายงานวิจัย ผู้ใช้งานคือใคร'),0,1);

$pdf->Cell(10,$line_space,iconv("UTF-8", "TIS-620",''),0,1);

$pdf->Cell(25);
$pdf->Cell(10,$line_space1,iconv("UTF-8", "TIS-620",'ง. การเผยแพร่งานวิจัยได้รับการนำเสนอแบบโปสเตอร์ หรือ Oral Presentation (โปรดระบุ '),0,1);

$pdf->Cell(10);
$pdf->Cell(10,$line_space1,iconv("UTF-8", "TIS-620",'session เช่น Plenary, Symposium หรือ oral session) หรือสูจิบัตร ในการประชุมหรือการจัดแสดง '),0,1);

$pdf->Cell(10);
$pdf->Cell(10,$line_space1,iconv("UTF-8", "TIS-620",'หรือจัดนิทรรศการ (ชื่อ สถานที่จัดประชุม หรือจัดแสดง หรือจัดนิทรรศการ และประเทศ) หรือ ในกรณีที่ '),0,1);

$pdf->Cell(10);
$pdf->Cell(10,$line_space1,iconv("UTF-8", "TIS-620",'เป็นหนังสือ (โปรดระบุ ชื่อสำนักพิมพ์ ปีที่ตีพิมพ์) '),0,1);

$pdf->Cell(10,$line_space,iconv("UTF-8", "TIS-620",''),0,1);

$pdf->Cell(25);
$pdf->Cell(10,$line_space1,iconv("UTF-8", "TIS-620",'จ. ประวัติการได้รับทุนวิจัยโครงการที่เกี่ยวข้องกับผลงานชิ้นนี้'),0,1);

$pdf->Cell(10,$line_space,iconv("UTF-8", "TIS-620",''),0,1);

$pdf->Cell(25);
$pdf->Cell(10,$line_space1,iconv("UTF-8", "TIS-620",'ฉ. หากงานวิจัย ได้รับการถ่ายทอดเทคโนโลยี ผู้วิจัยได้รับค่าธรรมเนียมใบอนุญาต (Licesing Fees) '),0,1);
$pdf->Cell(10);
$pdf->Cell(10,$line_space1,iconv("UTF-8", "TIS-620",'รวมเท่าใด (โปรดแสดงหลักฐานสัญญา)'),0,1);

$pdf->Cell(10,$line_space,iconv("UTF-8", "TIS-620",''),0,1);


$pdf->Cell(10,$line_space1,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(10,$line_space1,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(10,$line_space1,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(10,$line_space1,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(10,$line_space1,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(10,$line_space1,iconv("UTF-8", "TIS-620",''),0,1);

$pdf->Cell(120);
$pdf->Cell(10,$line_space1,iconv("UTF-8", "TIS-620",'ลงชื่อ................................................................'),0,1);

$pdf->Cell(120);
$pdf->Cell(10,$line_space1,iconv("UTF-8", "TIS-620",'    (....................................................................)'),0,1);

$pdf->Cell(140);
$pdf->Cell(10,$line_space1,iconv("UTF-8", "TIS-620",'ผู้ขอกำหนดตำแหน่ง'),0,1);

$pdf->Cell(10,$line_space1,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(10,$line_space1,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(10,$line_space1,iconv("UTF-8", "TIS-620",''),0,1);

$pdf->Cell(120);
$pdf->Cell(10,$line_space1,iconv("UTF-8", "TIS-620",'ลงชื่อ................................................................'),0,1);

$pdf->Cell(120);
$pdf->Cell(10,$line_space1,iconv("UTF-8", "TIS-620",'    (....................................................................)'),0,1);

$pdf->Cell(130);
$pdf->Cell(10,$line_space1,iconv("UTF-8", "TIS-620",'ผู้ประพันธ์อันดับแรก (First author)'),0,1);

$pdf->Cell(10,$line_space1,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(10,$line_space1,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(10,$line_space1,iconv("UTF-8", "TIS-620",''),0,1);


$pdf->Cell(120);
$pdf->Cell(10,$line_space1,iconv("UTF-8", "TIS-620",'ลงชื่อ................................................................'),0,1);

$pdf->Cell(120);
$pdf->Cell(10,$line_space1,iconv("UTF-8", "TIS-620",'    (....................................................................)'),0,1);

$pdf->Cell(122
);
$pdf->Cell(10,$line_space1,iconv("UTF-8", "TIS-620",'ผู้ประพันธ์บรรณกิจ (Corresponding author)'),0,1);


$pdf->setfont('THSarabun','','16');
$pdf->setxy(35,40);
$pdf->Cell(10,$line_space1,iconv("UTF-8", "TIS-620",$journal),0,1);

$pdf->setxy(35,54);
$pdf->Cell(10,$line_space1,iconv("UTF-8", "TIS-620",$patent),0,1);

$pdf->setxy(35,68);
$pdf->Cell(10,$line_space1,iconv("UTF-8", "TIS-620",$technical),0,1);

$pdf->setxy(35,102);
$pdf->Cell(10,$line_space1,iconv("UTF-8", "TIS-620",$Oral),0,1);

$pdf->setxy(35,102);
$pdf->Cell(10,$line_space1,iconv("UTF-8", "TIS-620",$program),0,1);

$pdf->setxy(35,102);
$pdf->Cell(10,$line_space1,iconv("UTF-8", "TIS-620",$book),0,1);

$pdf->setxy(35,117);
$pdf->Cell(10,$line_space1,iconv("UTF-8", "TIS-620",$history),0,1);

$pdf->setxy(35,138);
$pdf->Cell(10,$line_space1,iconv("UTF-8", "TIS-620",$Licesing),0,1);

$pdf->setxy(136,188);
$pdf->Cell(10,$line_space1,iconv("UTF-8", "TIS-620",$name),0,1);



$pdf->Output();
}else{ echo('ไม่มีข้อมูล');}

?>
