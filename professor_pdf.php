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
if(!empty($_POST["btnradio15"])) {
    $btnradio15 = $_POST["btnradio15"];
}else{
    $btnradio15 = "" ;
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

$line_space=8;
$line_space1=6;

require('vendor/fpdf184/fpdf.php');
$pdf = new FPDF('P','mm','A4');
$pdf->SetMargins(9,6);
$pdf->SetAutoPageBreak(10);
$pdf->AddPage();
$pdf->AddFont('THSarabun','B','THSarabun Bold.php');//ธรรมดา
$pdf->AddFont('THSarabun','','THSarabun.php');//ธรรมดา

//ด้านบน
$pdf->setfont('THSarabun','B','18');
$pdf->Cell(65);
$pdf->Cell(200,$line_space+13,iconv("UTF-8", "TIS-620",'Academic Work Contribution Form'),0,1);
$pdf->Cell(32);
$pdf->Cell(55,$line_space-7,iconv("UTF-8", "TIS-620",'in accordance with the Rules and Procedures for Appointing to be '),0,1);
$pdf->Cell(36);
$pdf->Cell(55,$line_space+13,iconv("UTF-8", "TIS-620",'an Assistant Professor Associate Professor, and Professor, 2022'),0,1);

$pdf->Cell(55,$line_space-9,iconv("UTF-8", "TIS-620",''),0,1);

$pdf->setfont('THSarabun','B','16');
$pdf->Cell(10);
$pdf->Cell(10,$line_space+2,iconv("UTF-8", "TIS-620",'A.   Title of academic work...........................................................................................................................'),0,1);
$pdf->Cell(58);
$pdf->Cell(10,$line_space,iconv("UTF-8", "TIS-620",'............................................................................................................................'),0,1);

$pdf->Cell(10,$line_space-4,iconv("UTF-8", "TIS-620",''),0,1);

$pdf->Cell(10);
$pdf->Cell(10,$line_space,iconv("UTF-8", "TIS-620",'B.   Status of Applicant in above academic work'),0,1);

$pdf->setfont('THSarabun','','16');
$pdf->Cell(25);
$pdf->Cell(10,$line_space,iconv("UTF-8", "TIS-620",'First author'),0,1);

$pdf->Cell(25);
$pdf->Cell(10,$line_space,iconv("UTF-8", "TIS-620",'Essentially intellectual contributor'),0,1);

$pdf->Cell(25);
$pdf->Cell(10,$line_space,iconv("UTF-8", "TIS-620",'Corresponding author'),0,1);

$pdf->Cell(10,$line_space-4,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->setfont('THSarabun','B','16');
$pdf->Cell(10);
$pdf->Cell(10,$line_space+2,iconv("UTF-8", "TIS-620",'C.   Type of academic work'),0,1);

$pdf->setfont('THSarabun','','16');
$pdf->Cell(25);
$pdf->Cell(10,$line_space,iconv("UTF-8", "TIS-620",'Type 1       Research article'),0,1);

$pdf->Cell(25);
$pdf->Cell(10,$line_space,iconv("UTF-8", "TIS-620",'Type 2 Others academic work'),0,1);

$pdf->Cell(45);
$pdf->Cell(10,$line_space,iconv("UTF-8", "TIS-620",'Academic work for industry'),0,1);

$pdf->Cell(45);
$pdf->Cell(10,$line_space,iconv("UTF-8", "TIS-620",'Case study'),0,1);

$pdf->Cell(45);
$pdf->Cell(10,$line_space,iconv("UTF-8", "TIS-620",'Academic work for teaching and learning development '),0,1);

$pdf->Cell(45);
$pdf->Cell(10,$line_space,iconv("UTF-8", "TIS-620",'Translation'),0,1);

$pdf->Cell(45);
$pdf->Cell(10,$line_space,iconv("UTF-8", "TIS-620",'Academic work for public policy development'),0,1);

$pdf->Cell(45);
$pdf->Cell(10,$line_space,iconv("UTF-8", "TIS-620",'Patent'),0,1);

$pdf->Cell(45);
$pdf->Cell(10,$line_space,iconv("UTF-8", "TIS-620",'Creative work in science and technology'),0,1);

$pdf->Cell(45);
$pdf->Cell(10,$line_space,iconv("UTF-8", "TIS-620",'Software'),0,1);

$pdf->Cell(45);
$pdf->Cell(10,$line_space,iconv("UTF-8", "TIS-620",'Dictionary, encyclopedia, nomenclature dictionary, or similar academic work'),0,1);

$pdf->Cell(45);
$pdf->Cell(10,$line_space,iconv("UTF-8", "TIS-620",'Academic work of creativity in aesthetics or arts'),0,1);

$pdf->Cell(25);
$pdf->Cell(10,$line_space,iconv("UTF-8", "TIS-620",'Type 3       Community-based academic work '),0,1);

$pdf->Cell(25);
$pdf->Cell(10,$line_space,iconv("UTF-8", "TIS-620",'Type 4       Textbook'),0,1);

$pdf->Cell(45);
$pdf->Cell(10,$line_space,iconv("UTF-8", "TIS-620",'Book'),0,1);

$pdf->Cell(45);
$pdf->Cell(10,$line_space,iconv("UTF-8", "TIS-620",'Academic Article'),0,1);

$pdf->setfont('THSarabun','B','16');
$pdf->Cell(10);
$pdf->Cell(10,$line_space,iconv("UTF-8", "TIS-620",'Part 1 Details of Responsibility'),0,1);

$pdf->setfont('THSarabun','','16');
$pdf->Cell(20);
$pdf->Cell(10,$line_space,iconv("UTF-8", "TIS-620",'The applicant for the academic position must ensure all details on this form are completely '),0,1);

$pdf->Cell(10);
$pdf->Cell(10,$line_space,iconv("UTF-8", "TIS-620",'filled. (As a consequence of unacknowledged contribution to academic work, the roles and '),0,1);

$pdf->Cell(10);
$pdf->Cell(10,$line_space,iconv("UTF-8", "TIS-620",'responsibilities specified by the applicant will affect the consideration of academic '),0,1);

$pdf->Cell(10);
$pdf->Cell(10,$line_space,iconv("UTF-8", "TIS-620",'accomplishments.)'),0,1);

$pdf->SetXY(27,80);
$pdf->Cell(4,4,'',1,0);

$pdf->SetXY(27,88);
$pdf->Cell(4,4,'',1,0);

$pdf->SetXY(27,96);
$pdf->Cell(4,4,'',1,0);

$pdf->SetXY(50,118);
$pdf->Cell(4,4,'',1,0);

$pdf->SetXY(50,134);
$pdf->Cell(4,4,'',1,0);

$pdf->SetXY(50,142);
$pdf->Cell(4,4,'',1,0);

$pdf->SetXY(50,150);
$pdf->Cell(4,4,'',1,0);

$pdf->SetXY(50,158);
$pdf->Cell(4,4,'',1,0);

$pdf->SetXY(50,166);
$pdf->Cell(4,4,'',1,0);

$pdf->SetXY(50,174);
$pdf->Cell(4,4,'',1,0);

$pdf->SetXY(50,182);
$pdf->Cell(4,4,'',1,0);

$pdf->SetXY(50,190);
$pdf->Cell(4,4,'',1,0);

$pdf->SetXY(50,198);
$pdf->Cell(4,4,'',1,0);

$pdf->SetXY(50,206);
$pdf->Cell(4,4,'',1,0);

$pdf->SetXY(50,214);
$pdf->Cell(4,4,'',1,0);

$pdf->SetXY(50,222);
$pdf->Cell(4,4,'',1,0);

$pdf->SetXY(50,230);
$pdf->Cell(4,4,'',1,0);

$pdf->SetXY(50,238);
$pdf->Cell(4,4,'',1,0);

$pdf->setfont('THSarabun','','16');
$pdf->setxy(70,47);
$pdf->Multicell(117,$line_space+1,iconv("UTF-8", "TIS-620",$Title),0,1);



if($status==1){
    $pdf->Image('image/check.png',27,79,5,6);
}elseif($status==2){
    $pdf->Image('image/check.png',27,86.5,5,6);
}else{
    $pdf->Image('image/check.png',27,95,5,6);
}


if($btnradio1==1){
    $pdf->Image('image/check.png',50,117,5,6);
}else{}


if($btnradio2==2){
    $pdf->Image('image/check.png',50,132.5,5,6);
}else{}

if($btnradio3==3){
    $pdf->Image('image/check.png',50,140,5,6);
}else{}

if($btnradio4==4){
    $pdf->Image('image/check.png',50,148,5,6);
}else{}

if($btnradio5==5){
    $pdf->Image('image/check.png',50,156,5,6);
}else{}

if($btnradio6==6){
    $pdf->Image('image/check.png',50,165,5,6);
}else{}
if($btnradio7==7){
    $pdf->Image('image/check.png',50,173,5,6);
}else{}
if($btnradio8==8){
    $pdf->Image('image/check.png',50,181,5,6);
}else{}
if($btnradio9==9){
    $pdf->Image('image/check.png',50,189,5,6);
}else{}
if($btnradio10==10){
    $pdf->Image('image/check.png',50,197,5,6);
}else{}
if($btnradio15==15){
    $pdf->Image('image/check.png',50,204.5,5,6);
}else{}

if($btnradio14==1){
    $pdf->Image('image/check.png',50,213,5,6);
}else{}

if($btnradio13==1){
    $pdf->Image('image/check.png',50,221,5,6);
}elseif($btnradio13==2){
    $pdf->Image('image/check.png',50,229,5,6);
}else{
    $pdf->Image('image/check.png',50,237,5,6);
}


//page2
$pdf->AddPage();
$pdf->AddFont('THSarabun','B','THSarabun Bold.php');//ธรรมดา
$pdf->AddFont('THSarabun','','THSarabun.php');//ธรรมดา

//เส้นกรอบ
$pdf->SetLineWidth(0.2);
$pdf->Rect(10,15,190,180);

//แกน Y
$pdf->SetLineWidth(0.2);
$pdf->Rect(105,15,0,180);

//เส้นแรก
$pdf->SetLineWidth(0.2);
$pdf->Rect(10,28,190,0);

$pdf->SetLineWidth(0.2);
$pdf->Rect(10,54,190,0);

$pdf->SetLineWidth(0.2);
$pdf->Rect(10,79,190,0);

$pdf->SetLineWidth(0.2);
$pdf->Rect(10,102,190,0);

$pdf->SetLineWidth(0.2);
$pdf->Rect(10,127,190,0);

$pdf->SetLineWidth(0.2);
$pdf->Rect(10,151,190,0);

$pdf->SetLineWidth(0.2);
$pdf->Rect(10,174.5,190,0);



$pdf->setfont('THSarabun','','16');
$pdf->Cell(10,$line_space-5,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(10,$line_space,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(28);
$pdf->Cell(10,$line_space,iconv("UTF-8", "TIS-620",'Detail of Contribution                                                Role and Responsibility'),0,1);

$pdf->Cell(10,$line_space-5,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(5);
$pdf->Cell(10,$line_space,iconv("UTF-8", "TIS-620",'A. Initiation of ideas and Hypothesis.'),0,1);
$pdf->Cell(10,$line_space1,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(10,$line_space1,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(10,$line_space1,iconv("UTF-8", "TIS-620",''),0,1);

$pdf->Cell(5);
$pdf->Cell(10,$line_space1,iconv("UTF-8", "TIS-620",'B. Research practice, Participation in designing, '),0,1);

$pdf->Cell(5);
$pdf->Cell(10,$line_space1,iconv("UTF-8", "TIS-620",'Experiment, Testing, Measuring instruments, '),0,1);

$pdf->Cell(5);
$pdf->Cell(10,$line_space1,iconv("UTF-8", "TIS-620",'Data collection, Methods, and Criteria.'),0,1);

$pdf->Cell(10,$line_space1,iconv("UTF-8", "TIS-620",''),0,1);

$pdf->Cell(5);
$pdf->Cell(10,$line_space1,iconv("UTF-8", "TIS-620",'C. Data collection, Data analysis, and Data '),0,1);

$pdf->Cell(5);
$pdf->Cell(10,$line_space1,iconv("UTF-8", "TIS-620",'interpretation.'),0,1);

$pdf->Cell(10,$line_space1,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(10,$line_space1,iconv("UTF-8", "TIS-620",''),0,1);

$pdf->Cell(5);
$pdf->Cell(10,$line_space1,iconv("UTF-8", "TIS-620",'D. Criticism of results and discussion, '),0,1);

$pdf->Cell(5);
$pdf->Cell(10,$line_space1,iconv("UTF-8", "TIS-620",'Evaluation of the original theories, body of '),0,1);

$pdf->Cell(5);
$pdf->Cell(10,$line_space1,iconv("UTF-8", "TIS-620",'knowledge, or conclusions.'),0,1);

$pdf->Cell(10,$line_space1,iconv("UTF-8", "TIS-620",''),0,1);

$pdf->Cell(5);
$pdf->Cell(10,$line_space1,iconv("UTF-8", "TIS-620",'E. Participation in Manuscript writing of'),0,1);

$pdf->Cell(5);
$pdf->Cell(10,$line_space1,iconv("UTF-8", "TIS-620",'creative works, Innovations, Inventions, or '),0,1);

$pdf->Cell(5);
$pdf->Cell(10,$line_space1,iconv("UTF-8", "TIS-620",'related academic work.'),0,1);

$pdf->Cell(10,$line_space1,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(5);
$pdf->Cell(10,$line_space1,iconv("UTF-8", "TIS-620",'F. Stimulation of specimens, Study cohort, '),0,1);

$pdf->Cell(5);
$pdf->Cell(10,$line_space1,iconv("UTF-8", "TIS-620",'Logistics, Research grants (please specify '),0,1);

$pdf->Cell(5);
$pdf->Cell(10,$line_space1,iconv("UTF-8", "TIS-620",'source, funding and year received) Tools, '),0,1);

$pdf->Cell(5);
$pdf->Cell(10,$line_space1,iconv("UTF-8", "TIS-620",'Laboratories, or equipment.'),0,1);

$pdf->Cell(5);
$pdf->Cell(10,$line_space1,iconv("UTF-8", "TIS-620",'G. Other'),0,1);

$pdf->Cell(5);
$pdf->Cell(10,$line_space1,iconv("UTF-8", "TIS-620",''),0,1);

$pdf->Cell(5);
$pdf->Cell(10,$line_space1,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(10,$line_space1,iconv("UTF-8", "TIS-620",''),0,1);

$pdf->setfont('THSarabun','B','16');
$pdf->Cell(3);
$pdf->Cell(10,$line_space1,iconv("UTF-8", "TIS-620",'Part 2 Presentation details of the academic work, technology transfer, or knowledge transfer. '),0,1);

$pdf->Cell(3);
$pdf->Cell(10,$line_space1,iconv("UTF-8", "TIS-620",'The evidence must be attached for consideration.'),0,1);

$pdf->setfont('THSarabun','','16');
$pdf->Cell(25);
$pdf->Cell(10,$line_space1,iconv("UTF-8", "TIS-620",'A. Journal publication, please specify journal impact factor, number of citations '),0,1);

$pdf->Cell(30);
$pdf->Cell(10,$line_space1,iconv("UTF-8", "TIS-620",'and database.  '),0,1);
$pdf->Cell(10,$line_space1,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(10,$line_space1,iconv("UTF-8", "TIS-620",''),0,1);

$pdf->Cell(25);
$pdf->Cell(10,$line_space1,iconv("UTF-8", "TIS-620",'B. Patent, please specify type, registered year, and covering the country.'),0,1);
$pdf->Cell(10,$line_space1,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(10,$line_space1,iconv("UTF-8", "TIS-620",''),0,1);

$pdf->Cell(25);
$pdf->Cell(10,$line_space1,iconv("UTF-8", "TIS-620",'C. Technical report or research report, please specify who utilizes the report.'),0,1);
$pdf->Cell(10,$line_space1,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(10,$line_space1,iconv("UTF-8", "TIS-620",''),0,1);

$pdf->setfont('THSarabun','','16');
$pdf->setxy(108,30);
$pdf->multicell(90,$line_space1,iconv("UTF-8", "TIS-620",$A1),0,0);

$pdf->setxy(108,55);
$pdf->multicell(90,$line_space1,iconv("UTF-8", "TIS-620",$A2),0,0);

$pdf->setxy(108,79);
$pdf->multicell(90,$line_space1,iconv("UTF-8", "TIS-620",$A3),0,0);

$pdf->setxy(108,103);
$pdf->multicell(90,$line_space1,iconv("UTF-8", "TIS-620",$A4),0,0);

$pdf->setxy(108,127);
$pdf->multicell(90,$line_space1,iconv("UTF-8", "TIS-620",$A5),0,0);

$pdf->setxy(108,151);
$pdf->multicell(90,$line_space1,iconv("UTF-8", "TIS-620",$A6),0,0);

$pdf->setxy(108,176);
$pdf->multicell(90,$line_space1,iconv("UTF-8", "TIS-620",$A7),0,0);


$pdf->setxy(35,223);
$pdf->Cell(10,$line_space1,iconv("UTF-8", "TIS-620",'- '.$journal),0,1);

$pdf->setxy(35,242);
$pdf->Cell(10,$line_space1,iconv("UTF-8", "TIS-620",'- '.$patent),0,1);

$pdf->setxy(35,262);
$pdf->Cell(10,$line_space1,iconv("UTF-8", "TIS-620",'- '.$technical),0,1);


//page3
$pdf->AddPage();
$pdf->AddFont('THSarabun','B','THSarabun Bold.php');//ธรรมดา
$pdf->AddFont('THSarabun','','THSarabun.php');//ธรรมดา

$pdf->setfont('THSarabun','','16');
$pdf->Cell(25);
$pdf->Cell(10,$line_space1,iconv("UTF-8", "TIS-620",'D. Research publications that have been presented in a media form such as posters or '),0,1);

$pdf->Cell(10);
$pdf->Cell(10,$line_space1,iconv("UTF-8", "TIS-620",'oral presentations (please specify sessions such as plenary, symposium, or oral sessions); or '),0,1);

$pdf->Cell(10);
$pdf->Cell(10,$line_space1,iconv("UTF-8", "TIS-620",'certificates of meetings, displays, or exhibitions (name, venue of meeting, exhibition, and country); or'),0,1);

$pdf->Cell(10);
$pdf->Cell(10,$line_space1,iconv("UTF-8", "TIS-620",'in the case of a book (please specify publisher name and year of publication).'),0,1);
$pdf->Cell(10,$line_space1,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(10,$line_space1,iconv("UTF-8", "TIS-620",''),0,1);

$pdf->Cell(25);
$pdf->Cell(10,$line_space1,iconv("UTF-8", "TIS-620",'E. A record of funded research projects related to this work.  '),0,1);
$pdf->Cell(10,$line_space1,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(10,$line_space1,iconv("UTF-8", "TIS-620",''),0,1);

$pdf->Cell(25);
$pdf->Cell(10,$line_space1,iconv("UTF-8", "TIS-620",'F. If the research has been transferred technology, please specify the amount of the '),0,1);

$pdf->Cell(10);
$pdf->Cell(10,$line_space1,iconv("UTF-8", "TIS-620",'remuneration (Evidence of contract should accompany this document)'),0,1);
$pdf->Cell(10,$line_space1,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(10,$line_space1,iconv("UTF-8", "TIS-620",''),0,1);

$pdf->Cell(10,$line_space1,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(10,$line_space1,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(10,$line_space1,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(10,$line_space1,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(10,$line_space1,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(10,$line_space1,iconv("UTF-8", "TIS-620",''),0,1);

$pdf->Cell(120);
$pdf->Cell(10,$line_space1,iconv("UTF-8", "TIS-620",'Signature.........................................................'),0,1);

$pdf->Cell(120);
$pdf->Cell(10,$line_space1,iconv("UTF-8", "TIS-620",'    (....................................................................)'),0,1);

$pdf->Cell(150);
$pdf->Cell(10,$line_space1,iconv("UTF-8", "TIS-620",'Applicant'),0,1);

$pdf->Cell(10,$line_space1,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(10,$line_space1,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(10,$line_space1,iconv("UTF-8", "TIS-620",''),0,1);

$pdf->Cell(120);
$pdf->Cell(10,$line_space1,iconv("UTF-8", "TIS-620",'Signature.........................................................'),0,1);

$pdf->Cell(120);
$pdf->Cell(10,$line_space1,iconv("UTF-8", "TIS-620",'    (....................................................................)'),0,1);

$pdf->Cell(150);
$pdf->Cell(10,$line_space1,iconv("UTF-8", "TIS-620",'First author'),0,1);

$pdf->Cell(10,$line_space1,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(10,$line_space1,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(10,$line_space1,iconv("UTF-8", "TIS-620",''),0,1);


$pdf->Cell(120);
$pdf->Cell(10,$line_space1,iconv("UTF-8", "TIS-620",'Signature.........................................................'),0,1);

$pdf->Cell(120);
$pdf->Cell(10,$line_space1,iconv("UTF-8", "TIS-620",'    (....................................................................)'),0,1);

$pdf->Cell(140);
$pdf->Cell(10,$line_space1,iconv("UTF-8", "TIS-620",'Corresponding author'),0,1);


$pdf->setxy(35,33);
$pdf->Cell(10,$line_space1,iconv("UTF-8", "TIS-620",'- '.$Oral),0,1);

$pdf->setxy(35,33);
$pdf->Cell(10,$line_space1,iconv("UTF-8", "TIS-620",'- '.$program),0,1);

$pdf->setxy(35,33);
$pdf->Cell(10,$line_space1,iconv("UTF-8", "TIS-620",'- '.$book),0,1);

$pdf->setxy(35,50);
$pdf->Cell(10,$line_space1,iconv("UTF-8", "TIS-620",'- '.$history),0,1);

$pdf->setxy(35,73);
$pdf->Cell(10,$line_space1,iconv("UTF-8", "TIS-620",$Licesing),0,1);

$pdf->setxy(136,125);
$pdf->Cell(10,$line_space1,iconv("UTF-8", "TIS-620",$name),0,1);







$pdf->Output();
}else{ echo('ไม่มีข้อมูล');}

?>
