<?php
if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "fmadd")) {
require_once("inc/func.php");
//หน้า 1
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
$A2 = ($_POST["A2"]);
$A3 = ($_POST["A3"]);
$A4 = ($_POST["A4"]);
$A5 = ($_POST["A5"]);
$A6 = ($_POST["A6"]);
$A7 = ($_POST["A7"]);
$A8 = ($_POST["A8"]);
$date = stripslashes($_POST["BD"]);
list($day1, $month1, $year1) = Day_show_list($date);


$A9 = ($_POST["A9"]);
$A10 = ($_POST["A10"]);
$A11 = ($_POST["A11"]);
$A12 = ($_POST["A12"]);
$A13 = ($_POST["A13"]);
$A14 = ($_POST["A14"]);
$A15 = ($_POST["A15"]);
$A16 = ($_POST["A16"]);
$A17 = ($_POST["A17"]);
$A18 = ($_POST["A18"]);
$A19 = ($_POST["A19"]);
$A20 = ($_POST["A20"]);
$A21 = ($_POST["A21"]);
$A22 = ($_POST["A22"]);
$A23 = ($_POST["A23"]);
$A24 = ($_POST["A24"]);
$A25 = ($_POST["A25"]);
$A26 = ($_POST["A26"]);
$A27 = ($_POST["A27"]);
$A28 = ($_POST["A28"]);

//หน้าที่ 2
if(!empty($_POST["btnradio4"])) {
    $btnradio4 = $_POST["btnradio4"];
}else{
    $btnradio4 = "" ;
}
if(!empty($_POST["B1"])) {
    $B1 = number_format($_POST["B1"]);
}else{
    $B1 = "" ;
}

if(!empty($_POST["btnradio500"])) {
    $btnradio500 = $_POST["btnradio500"];
}else{
    $btnradio500 = "" ;
}
if(!empty($_POST["btnradio7"])) {
    $btnradio7 = $_POST["btnradio7"];
}else{
    $btnradio7 = "" ;
}

$date4 = stripslashes($_POST["date4"]);
list($day4, $month4, $year4) = Day_show_list($date4);

$BB = ($_POST["B"]);
$date3 = stripslashes($_POST["date3"]);
list($day3, $month3, $year3) = Day_show_list($date3);

$B2 = ($_POST["B2"]);
$date2 = stripslashes($_POST["date2"]);
list($day2, $month2, $year2) = Day_show_list($date2);

$B3 = ($_POST["B3"]);
$B4 = ($_POST["B4"]);
$B8 = ($_POST["B8"]);
$B9 = ($_POST["B9"]);
$B10 = ($_POST["B10"]);
$B11 = ($_POST["B11"]);
$B12 = ($_POST["B12"]);

$B13 = ($_POST["B13"]);
$B14 = ($_POST["B14"]);
$B15 = ($_POST["B15"]);
$B16 = ($_POST["B16"]);
$B17 = ($_POST["B17"]);

$B18 = ($_POST["B18"]);
$B19 = ($_POST["B19"]);
$B20 = ($_POST["B20"]);
$B21 = ($_POST["B21"]);

$B111 = ($_POST["B111"]);
$B112 = ($_POST["B112"]);
$B113 = ($_POST["B113"]);
$B114 = ($_POST["B114"]);

$B115 = ($_POST["B115"]);
$B116 = ($_POST["B116"]);
$B117 = ($_POST["B117"]);
$B118 = ($_POST["B118"]);




//page 3
$C1 = ($_POST["C1"]);
$C2 = ($_POST["C2"]);
$C3 = ($_POST["C3"]);
$C4 = ($_POST["C4"]);
$C5 = ($_POST["C5"]);
$C7 = ($_POST["C7"]);
$C8 = ($_POST["C8"]);
$C10 = ($_POST["C10"]);
$C11 = ($_POST["C11"]);
//4.1.1
$C12 = ($_POST["C12"]);
$C13 = ($_POST["C13"]);
$C14 = ($_POST["C14"]);

if(!empty($_POST["btnradio8"])) {
    $btnradio8 = $_POST["btnradio8"];
}else{
    $btnradio8 = "" ;
}

$C6 = ($_POST["C6"]);
$C9 = ($_POST["C9"]);
if(!empty($_POST["btnradio9"])) {
    $btnradio9 = $_POST["btnradio9"];
}else{
    $btnradio9 = "" ;
}
$C15 = ($_POST["C15"]);
$C16 = ($_POST["C16"]);

//4.1.2
$op412 = ($_POST["op412"]);
$C17 = ($_POST["C17"]);
$C18 = ($_POST["C18"]);
$C19 = ($_POST["C19"]);
if(!empty($_POST["btnradio10"])) {
    $btnradio10 = $_POST["btnradio10"];
}else{
    $btnradio10 = "" ;
}
$C20 = ($_POST["C20"]);
$C21 = ($_POST["C21"]);
if(!empty($_POST["btnradio78"])) {
    $btnradio78 = $_POST["btnradio78"];
}else{
    $btnradio78 = "" ;
}
$C22 = ($_POST["C22"]);
$C23 = ($_POST["C23"]);


//page 4
//4.1.3
$C24 = ($_POST["C24"]);
$C25 = ($_POST["C25"]);
$C26 = ($_POST["C26"]);
if(!empty($_POST["btnradio11"])) {
    $btnradio11 = $_POST["btnradio11"];
}else{
    $btnradio11 = "" ;
}
$C27 = ($_POST["C27"]);
$C28 = ($_POST["C28"]);
if(!empty($_POST["btnradio12"])) {
    $btnradio12 = $_POST["btnradio12"];
}else{
    $btnradio12 = "" ;
}
$C29 = ($_POST["C29"]);
$C30 = ($_POST["C30"]);

//4.1.2.1
$D1 = ($_POST["D1"]);
$D2 = ($_POST["D2"]);
$D3 = ($_POST["D3"]);
if(!empty($_POST["btnradio13"])) {
    $btnradio13 = $_POST["btnradio13"];
}else{
    $btnradio13 = "" ;
}
$D4 = ($_POST["D4"]);
$D5 = ($_POST["D5"]);
if(!empty($_POST["btnradio14"])) {
    $btnradio14 = $_POST["btnradio14"];
}else{
    $btnradio14 = "" ;
}
$D6 = ($_POST["D6"]);
$D7 = ($_POST["D7"]);

//4.1.2.2
$D8 = ($_POST["D8"]);
$D9 = ($_POST["D9"]);
$D10 = ($_POST["D10"]);
if(!empty($_POST["btnradio15"])) {
    $btnradio15 = $_POST["btnradio15"];
}else{
    $btnradio15 = "" ;
}
$D11 = ($_POST["D11"]);
$D12 = ($_POST["D12"]);
if(!empty($_POST["btnradio16"])) {
    $btnradio16 = $_POST["btnradio16"];
}else{
    $btnradio16 = "" ;
}
$D13 = ($_POST["D13"]);
$D14 = ($_POST["D14"]);


//4.1.2.3
$D15 = ($_POST["D15"]);
$D17 = ($_POST["D17"]);
$D18 = ($_POST["D18"]);
if(!empty($_POST["btnradio17"])) {
    $btnradio17 = $_POST["btnradio17"];
}else{
    $btnradio17 = "" ;
}
$D19 = ($_POST["D19"]);
$D20 = ($_POST["D20"]);


//page 5
if(!empty($_POST["btnradio19"])) {
    $btnradio19 = $_POST["btnradio19"];
}else{
    $btnradio19 = "" ;
}
$D21 = ($_POST["D21"]);
$D22 = ($_POST["D22"]);

//4.1.3.1
$D30 = ($_POST["D30"]);
$D31 = ($_POST["D31"]);
$D32 = ($_POST["D32"]);
if(!empty($_POST["btnradio81"])) {
    $btnradio81 = $_POST["btnradio81"];
}else{
    $btnradio81 = "" ;
}
$D33 = ($_POST["D33"]);
$D34 = ($_POST["D34"]);
if(!empty($_POST["btnradio22"])) {
    $btnradio22 = $_POST["btnradio22"];
}else{
    $btnradio22 = "" ;
}
$D35 = ($_POST["D35"]);
$D36 = ($_POST["D36"]);

//4.1.3.2
$D37 = ($_POST["D37"]);
$D38 = ($_POST["D38"]);
$D39 = ($_POST["D39"]);
if(!empty($_POST["btnradio23"])) {
    $btnradio23 = $_POST["btnradio23"];
}else{
    $btnradio23 = "" ;
}
$D40 = ($_POST["D40"]);
$D41 = ($_POST["D41"]);
if(!empty($_POST["btnradio24"])) {
    $btnradio24 = $_POST["btnradio24"];
}else{
    $btnradio24 = "" ;
}
$D42 = ($_POST["D42"]);
$D43 = ($_POST["D43"]);

//4.1.3.3
$E1 = ($_POST["E1"]);
$E2 = ($_POST["E2"]);
$E3 = ($_POST["E3"]);
if(!empty($_POST["btnradio25"])) {
    $btnradio25 = $_POST["btnradio25"];
}else{
    $btnradio25 = "" ;
}
$E4 = ($_POST["E4"]);
$E5 = ($_POST["E5"]);
if(!empty($_POST["btnradio26"])) {
    $btnradio26 = $_POST["btnradio26"];
}else{
    $btnradio26 = "" ;
}
$E6 = ($_POST["E6"]);
$E7 = ($_POST["E7"]);

//page 6
//4.2.1.1
$E15 = ($_POST["E15"]);
$E16 = ($_POST["E16"]);
$E17 = ($_POST["E17"]);
if(!empty($_POST["btnradio29"])) {
    $btnradio29 = $_POST["btnradio29"];
}else{
    $btnradio29 = "" ;
}
$E18 = ($_POST["E18"]);
$E19 = ($_POST["E19"]);
if(!empty($_POST["btnradio30"])) {
    $btnradio30 = $_POST["btnradio30"];
}else{
    $btnradio30 = "" ;
}
$E20 = ($_POST["E20"]);
$E21 = ($_POST["E21"]);

//4.2.1.2
$E22 = ($_POST["E22"]);
$E23 = ($_POST["E23"]);
$E24 = ($_POST["E24"]);
if(!empty($_POST["btnradio31"])) {
    $btnradio31 = $_POST["btnradio31"];
}else{
    $btnradio31 = "" ;
}
$E25 = ($_POST["E25"]);
$E26 = ($_POST["E26"]);
if(!empty($_POST["btnradio32"])) {
    $btnradio32 = $_POST["btnradio32"];
}else{
    $btnradio32 = "" ;
}
$E27 = ($_POST["E27"]);
$E28 = ($_POST["E28"]);

//4.2.1.3
$E29 = ($_POST["E29"]);
$E30 = ($_POST["E30"]);
$E31 = ($_POST["E31"]);
if(!empty($_POST["btnradio33"])) {
    $btnradio33 = $_POST["btnradio33"];
}else{
    $btnradio33 = "" ;
}
$E32 = ($_POST["E32"]);
$E33 = ($_POST["E33"]);
if(!empty($_POST["btnradio34"])) {
    $btnradio34 = $_POST["btnradio34"];
}else{
    $btnradio34 = "" ;
}
$E34 = ($_POST["E34"]);
$E35 = ($_POST["E35"]);

//page 7
//4.2.2.1
$op422 = ($_POST["op422"]);
$F1 = ($_POST["F1"]);
$F2 = ($_POST["F2"]);
$F3 = ($_POST["F3"]);
if(!empty($_POST["btnradio35"])) {
    $btnradio35 = $_POST["btnradio35"];
}else{
    $btnradio35 = "" ;
}
$F4 = ($_POST["F4"]);
$F5 = ($_POST["F5"]);
if(!empty($_POST["btnradio36"])) {
    $btnradio36 = $_POST["btnradio36"];
}else{
    $btnradio36 = "" ;
}
$F6 = ($_POST["F6"]);
$F7 = ($_POST["F7"]);

//4.2.2.2
$F8 = ($_POST["F8"]);
$F9 = ($_POST["F9"]);
$F10 = ($_POST["F10"]);
if(!empty($_POST["btnradio37"])) {
    $btnradio37 = $_POST["btnradio37"];
}else{
    $btnradio37 = "" ;
}
$F11 = ($_POST["F11"]);
$F19 = ($_POST["F19"]);
if(!empty($_POST["btnradio38"])) {
    $btnradio38 = $_POST["btnradio38"];
}else{
    $btnradio38 = "" ;
}
$F22 = ($_POST["F22"]);
$F23 = ($_POST["F23"]);

//4.2.2.3
$F24 = ($_POST["F24"]);
$F25 = ($_POST["F25"]);
$F26 = ($_POST["F26"]);
if(!empty($_POST["btnradio39"])) {
    $btnradio39 = $_POST["btnradio39"];
}else{
    $btnradio39 = "" ;
}
$F27 = ($_POST["F27"]);
$F28 = ($_POST["F28"]);
if(!empty($_POST["btnradio40"])) {
    $btnradio40 = $_POST["btnradio40"];
}else{
    $btnradio40 = "" ;
}
$F29 = ($_POST["F29"]);
$F30 = ($_POST["F30"]);

//page 8
//4.2.3.1
$F31 = ($_POST["F31"]);
$F32 = ($_POST["F32"]);
$F33 = ($_POST["F33"]);
if(!empty($_POST["btnradio41"])) {
    $btnradio41 = $_POST["btnradio41"];
}else{
    $btnradio41 = "" ;
}
$F34 = ($_POST["F34"]);
$F35 = ($_POST["F35"]);
if(!empty($_POST["btnradio42"])) {
    $btnradio42 = $_POST["btnradio42"];
}else{
    $btnradio42 = "" ;
}
$F36 = ($_POST["F36"]);
$F37 = ($_POST["F37"]);

//4.2.3.2
$F38 = ($_POST["F38"]);
$F39 = ($_POST["F39"]);
$F40 = ($_POST["F40"]);
if(!empty($_POST["btnradio43"])) {
    $btnradio43 = $_POST["btnradio43"];
}else{
    $btnradio43 = "" ;
}
$F41 = ($_POST["F41"]);
$F42 = ($_POST["F42"]);
if(!empty($_POST["btnradio44"])) {
    $btnradio44 = $_POST["btnradio44"];
}else{
    $btnradio44 = "" ;
}
$F43 = ($_POST["F43"]);
$F44 = ($_POST["F44"]);

//4.2.3.3
$G1 = ($_POST["G1"]);
$G2 = ($_POST["G2"]);
$G3 = ($_POST["G3"]);
if(!empty($_POST["btnradio45"])) {
    $btnradio45 = $_POST["btnradio45"];
}else{
    $btnradio45 = "" ;
}
$G4 = ($_POST["G4"]);
$G5 = ($_POST["G5"]);
if(!empty($_POST["btnradio46"])) {
    $btnradio46 = $_POST["btnradio46"];
}else{
    $btnradio46 = "" ;
}
$G6 = ($_POST["G6"]);
$G7 = ($_POST["G7"]);

//4.2.4.1/1
$G8 = ($_POST["G8"]);
if(!empty($_POST["btnradio47"])) {
    $btnradio47 = $_POST["btnradio47"];
}else{
    $btnradio47 = "" ;
}
if(!empty($_POST["btnradio48"])) {
    $btnradio48 = $_POST["btnradio48"];
}else{
    $btnradio48 = "" ;
}

//page 9
//4.2.4.1/2
$G9 = ($_POST["G9"]);
if(!empty($_POST["btnradio49"])) {
    $btnradio49 = $_POST["btnradio49"];
}else{
    $btnradio49 = "" ;
}
if(!empty($_POST["btnradio50"])) {
    $btnradio50 = $_POST["btnradio50"];
}else{
    $btnradio50 = "" ;
}
//4.2.4.1/3
$G10 = ($_POST["G10"]);
if(!empty($_POST["btnradio51"])) {
    $btnradio51 = $_POST["btnradio51"];
}else{
    $btnradio51 = "" ;
}
if(!empty($_POST["btnradio52"])) {
    $btnradio52 = $_POST["btnradio52"];
}else{
    $btnradio52 = "" ;
}

//4.2.4.2
$G12 = ($_POST["G12"]);
$G13 = ($_POST["G13"]);
$G14 = ($_POST["G14"]);
$G15 = ($_POST["G15"]);
$G16 = ($_POST["G16"]);
$G17 = ($_POST["G17"]);
$G18 = ($_POST["G18"]);
$G19 = ($_POST["G19"]);
$G20 = ($_POST["G20"]);


//page 10
//4.3.1.1
$H1 = ($_POST["H1"]);
$H2 = ($_POST["H2"]);
$H3 = ($_POST["H3"]);
if(!empty($_POST["btnradio53"])) {
    $btnradio53 = $_POST["btnradio53"];
}else{
    $btnradio53 = "" ;
}
$H4 = ($_POST["H4"]);
$H5 = ($_POST["H5"]);
if(!empty($_POST["btnradio54"])) {
    $btnradio54 = $_POST["btnradio54"];
}else{
    $btnradio54 = "" ;
}
$H6 = ($_POST["H6"]);
$H7 = ($_POST["H7"]);

//4.3.1.2
$H8 = ($_POST["H8"]);
$H9 = ($_POST["H9"]);
$H10 = ($_POST["H10"]);
if(!empty($_POST["btnradio56"])) {
    $btnradio56 = $_POST["btnradio56"];
}else{
    $btnradio56 = "" ;
}
$H11 = ($_POST["H11"]);
$H12 = ($_POST["H12"]);
if(!empty($_POST["btnradio57"])) {
    $btnradio57 = $_POST["btnradio57"];
}else{
    $btnradio57 = "" ;
}
$H13 = ($_POST["H13"]);
$H14 = ($_POST["H14"]);

//4.3.1.3
$H15 = ($_POST["H15"]);
$H16 = ($_POST["H16"]);
$H29 = ($_POST["H29"]);
if(!empty($_POST["btnradio58"])) {
    $btnradio58 = $_POST["btnradio58"];
}else{
    $btnradio58 = "" ;
}
$H17 = ($_POST["H17"]);
$H18 = ($_POST["H18"]);
if(!empty($_POST["btnradio59"])) {
    $btnradio59 = $_POST["btnradio59"];
}else{
    $btnradio59 = "" ;
}
$H19 = ($_POST["H19"]);
$H20 = ($_POST["H20"]);

//page 11
//4.3.2.1
$op432 = ($_POST["op432"]);
$I1 = ($_POST["I1"]);
$I2 = ($_POST["I2"]);
$I3 = ($_POST["I3"]);
if(!empty($_POST["btnradio60"])) {
    $btnradio60 = $_POST["btnradio60"];
}else{
    $btnradio60 = "" ;
}
$I4 = ($_POST["I4"]);
$I5 = ($_POST["I5"]);
if(!empty($_POST["btnradio61"])) {
    $btnradio61 = $_POST["btnradio61"];
}else{
    $btnradio61 = "" ;
}
$I6 = ($_POST["I6"]);
$I7 = ($_POST["I7"]);

//4.3.2.2
$I8 = ($_POST["I8"]);
$I9 = ($_POST["I9"]);
$I10 = ($_POST["I10"]);
if(!empty($_POST["btnradio62"])) {
    $btnradio62 = $_POST["btnradio62"];
}else{
    $btnradio62 = "" ;
}
$I11 = ($_POST["I11"]);
$I12 = ($_POST["I12"]);
if(!empty($_POST["btnradio63"])) {
    $btnradio63 = $_POST["btnradio63"];
}else{
    $btnradio63 = "" ;
}
$I13 = ($_POST["I13"]);
$I14 = ($_POST["I14"]);

//4.3.2.3
$I15 = ($_POST["I15"]);
$I16 = ($_POST["I16"]);
$I29 = ($_POST["I29"]);
if(!empty($_POST["btnradio64"])) {
    $btnradio64 = $_POST["btnradio64"];
}else{
    $btnradio64 = "" ;
}
$I17 = ($_POST["I17"]);
$I18 = ($_POST["I18"]);
if(!empty($_POST["btnradio65"])) {
    $btnradio65 = $_POST["btnradio65"];
}else{
    $btnradio65 = "" ;
}
$I19 = ($_POST["I19"]);
$I20 = ($_POST["I20"]);

//page 12
//4.3.3.1
$I21 = ($_POST["I21"]);
$I22 = ($_POST["I22"]);
$I23 = ($_POST["I23"]);
if(!empty($_POST["btnradio66"])) {
    $btnradio66 = $_POST["btnradio66"];
}else{
    $btnradio66 = "" ;
}
$I24 = ($_POST["I24"]);
$I25 = ($_POST["I25"]);
if(!empty($_POST["btnradio67"])) {
    $btnradio67 = $_POST["btnradio67"];
}else{
    $btnradio67 = "" ;
}
$I26 = ($_POST["I26"]);
$I27 = ($_POST["I27"]);

//4.3.3.2
$I28 = ($_POST["I28"]);
$I29 = ($_POST["I29"]);
$I30 = ($_POST["I30"]);
if(!empty($_POST["btnradio68"])) {
    $btnradio68 = $_POST["btnradio68"];
}else{
    $btnradio68 = "" ;
}
$I31 = ($_POST["I31"]);
$I32 = ($_POST["I32"]);
if(!empty($_POST["btnradio69"])) {
    $btnradio69 = $_POST["btnradio69"];
}else{
    $btnradio69 = "" ;
}
$I33 = ($_POST["I33"]);
$I34 = ($_POST["I34"]);

//4.3.3.3
$J1 = ($_POST["J1"]);
$J2 = ($_POST["J2"]);
$J3 = ($_POST["J3"]);
if(!empty($_POST["btnradio70"])) {
    $btnradio70 = $_POST["btnradio70"];
}else{
    $btnradio70 = "" ;
}
$J4 = ($_POST["J4"]);
$J5 = ($_POST["J5"]);
if(!empty($_POST["btnradio71"])) {
    $btnradio71 = $_POST["btnradio71"];
}else{
    $btnradio71 = "" ;
}
$J6 = ($_POST["J6"]);
$J7 = ($_POST["J7"]);


//page 13
//4.3.4.1/1
$J8 = ($_POST["J8"]);
if(!empty($_POST["btnradio72"])) {
    $btnradio72 = $_POST["btnradio72"];
}else{
    $btnradio72 = "" ;
}
if(!empty($_POST["btnradio73"])) {
    $btnradio73 = $_POST["btnradio73"];
}else{
    $btnradio73 = "" ;
}

//4.3.4.1/2
$J9 = ($_POST["J9"]);
if(!empty($_POST["btnradio74"])) {
    $btnradio74 = $_POST["btnradio74"];
}else{
    $btnradio74 = "" ;
}
if(!empty($_POST["btnradio84"])) {
    $btnradio84 = $_POST["btnradio84"];
}else{
    $btnradio84 = "" ;
}

//4.3.4.1/3
$J10 = ($_POST["J10"]);
if(!empty($_POST["btnradio75"])) {
    $btnradio75 = $_POST["btnradio75"];
}else{
    $btnradio75 = "" ;
}
if(!empty($_POST["btnradio76"])) {
    $btnradio76 = $_POST["btnradio76"];
}else{
    $btnradio76 = "" ;
}

//4.3.4.2
$J12 = ($_POST["J12"]);
$J13 = ($_POST["J13"]);
$J14 = ($_POST["J14"]);
$J15 = ($_POST["J15"]);
$J16 = ($_POST["J16"]);



//page 14
$J17 = ($_POST["J17"]);
$J18 = ($_POST["J18"]);

$K1 = ($_POST["K1"]);
$K2 = ($_POST["K2"]);
$K3 = ($_POST["K3"]);
$K4 = ($_POST["K4"]);
$date5 = stripslashes($_POST["K5"]);
list($day10, $month10, $year10) = Day_show_list($date);



$line_space=9;
$line_space1=6;
$line_space2=8;
$line_space3=7;

require('vendor/fpdf184/fpdf.php');
$pdf = new FPDF('P','mm','A4');
$pdf->SetMargins(9,6);
$pdf->SetAutoPageBreak(10);
$pdf->AddPage();
$pdf->AddFont('THSarabun','B','THSarabun Bold.php');//ธรรมดา
$pdf->AddFont('THSarabun','','THSarabun.php');//ธรรมดา

//ด้านบน
$pdf->Cell(55,$line_space,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->setfont('THSarabun','B','14');

$pdf->setxy(168,5);
$pdf->Cell(200,$line_space,iconv("UTF-8", "TIS-620",'ก.พ.อ.03'),0,1);

$pdf->Cell(50);
$pdf->Cell(200,$line_space,iconv("UTF-8", "TIS-620",'แบบคำขอรับการพิจารณากำหนดตำแหน่งทางวิชาการทั่วไป'),0,1);

$pdf->setfont('THSarabun','','14');
$pdf->Cell(35);
$pdf->Cell(200,$line_space,iconv("UTF-8", "TIS-620",'ตามหลักเกณฑ์และวิธีการพิจารณาแต่งตั้งบุคคลให้ดำรงตำแหน่ง ผู้ช่วยศาสตราจารย์'),0,1);

$pdf->Cell(58);
$pdf->Cell(200,$line_space,iconv("UTF-8", "TIS-620",'รองศาสตราจารย์ และศาสตราจารย์ พ.ศ.2564'),0,1);

$pdf->Cell(55,$line_space-5,iconv("UTF-8", "TIS-620",''),0,1);

$pdf->setfont('THSarabun','B','14');
$pdf->Cell(10);
$pdf->Cell(10,$line_space+2,iconv("UTF-8", "TIS-620",'ส่วนที่ 1     แบบประวัติส่วนตัวและผลงานทางวิชาการ'),0,1);

$pdf->setfont('THSarabun','','14');
$pdf->Cell(60);
$pdf->Cell(10,$line_space,iconv("UTF-8", "TIS-620",'แบบประวัติส่วนตัวและผลงานทางวิชาการ'),0,1);

$pdf->Cell(50);
$pdf->Cell(10,$line_space,iconv("UTF-8", "TIS-620",'เพื่อขอกำหนดตำแหน่ง........................................................ '),0,1);

$pdf->Cell(75);
$pdf->Cell(10,$line_space,iconv("UTF-8", "TIS-620",'โดยวิธี.............................'),0,1);

$pdf->Cell(55);
$pdf->Cell(10,$line_space,iconv("UTF-8", "TIS-620",'ในสาขาวิชา.................................................................... (.............)'),0,1);

$pdf->Cell(55);
$pdf->Cell(10,$line_space,iconv("UTF-8", "TIS-620",'อนุสาขาวิชา....................................................................(..................)'),0,1);

$pdf->Cell(65);
$pdf->Cell(10,$line_space,iconv("UTF-8", "TIS-620",'ของ .........................................................................'),0,1);

$pdf->Cell(55);
$pdf->Cell(10,$line_space,iconv("UTF-8", "TIS-620",'สังกัดภาควิชา..............................................................................'),0,1);

$pdf->Cell(55);
$pdf->Cell(10,$line_space,iconv("UTF-8", "TIS-620",'คณะ............................................................................ มหาวิทยาลัยนเรศวร'),0,1);


$pdf->setfont('THSarabun','B','14');
$pdf->Cell(10);
$pdf->Cell(10,$line_space+2,iconv("UTF-8", "TIS-620",'1.  ประวัติส่วนตัว'),0,1);

$pdf->setfont('THSarabun','','14');
$pdf->Cell(10);
$pdf->Cell(10,$line_space,iconv("UTF-8", "TIS-620",'     1.1  เกิดวันที่..................... เดือน.........................................................ปีเกิด...........................'),0,1);

$pdf->Cell(10);
$pdf->Cell(10,$line_space,iconv("UTF-8", "TIS-620",'     1.2  อายุ.............. ปี'),0,1);

$pdf->Cell(10);
$pdf->Cell(10,$line_space,iconv("UTF-8", "TIS-620",'     1.3  การศึกษาระดับอุดมศึกษา '),0,1);

$pdf->Cell(35);
$pdf->Cell(10,$line_space,iconv("UTF-8", "TIS-620",' คุณวุฒิ                                ปี พ.ศ. ที่จบ                            ชื่อสถานศึกษาและประเทศ'),0,1);

$pdf->Cell(15);
$pdf->Cell(10,$line_space,iconv("UTF-8", "TIS-620",' 1.3.1'),0,1);

$pdf->Cell(15);
$pdf->Cell(10,$line_space,iconv("UTF-8", "TIS-620",' 1.3.2'),0,1);

$pdf->Cell(15);
$pdf->Cell(10,$line_space,iconv("UTF-8", "TIS-620",' 1.3.3'),0,1);

$pdf->Cell(15);
$pdf->Cell(10,$line_space,iconv("UTF-8", "TIS-620",' 1.3.4'),0,1);

$pdf->Cell(15);
$pdf->Cell(10,$line_space,iconv("UTF-8", "TIS-620",' 1.3.5'),0,1);

$pdf->Cell(25);
$pdf->Cell(10,$line_space+2,iconv("UTF-8", "TIS-620",'วิทยานิพนธ์ระดับปริญญาเอก'),0,1);

$pdf->Cell(25);
$pdf->Cell(10,$line_space-1,iconv("UTF-8", "TIS-620",'...........................................................................................................................................................................'),0,1);

$pdf->Cell(25);
$pdf->Cell(10,$line_space,iconv("UTF-8", "TIS-620",'วิทยานิพนธ์ระดับปริญญาโท '),0,1);

$pdf->Cell(25);
$pdf->Cell(10,$line_space-1,iconv("UTF-8", "TIS-620",'...........................................................................................................................................................................'),0,1);


$pdf->Cell(25);
$pdf->Cell(10,$line_space,iconv("UTF-8", "TIS-620",'ผลงานตีพิมพ์ที่ใช้สำเร็จการศึกษาระดับปริญญาเอก'),0,1);

$pdf->setfont('THSarabun','','14');
$pdf->Cell(25);
$pdf->Cell(10,$line_space,iconv("UTF-8", "TIS-620",'...........................................................................................................................................................................'),0,1);

$pdf->Cell(25);
$pdf->Cell(10,$line_space,iconv("UTF-8", "TIS-620",'ผลงานตีพิมพ์ที่ใช้สำเร็จการศึกษาระดับปริญญาโท'),0,1);

$pdf->Cell(25);
$pdf->Cell(10,$line_space,iconv("UTF-8", "TIS-620",'...........................................................................................................................................................................'),0,1);


if($btnradio2==1){
    $pdf->setxy(95,64);
    $pdf->Cell(40,$line_space,iconv("UTF-8", "TIS-620",'ผู้ช่วยศาสตราจารย์ '),0,0);
} elseif($btnradio2==2){
    $pdf->setxy(95,64);
    $pdf->Cell(40,$line_space,iconv("UTF-8", "TIS-620",'รองศาสตราจารย์ '),0,0);
} else{
    $pdf->setxy(95,64);
    $pdf->Cell(40,$line_space,iconv("UTF-8", "TIS-620",'ศาสตราจารย์'),0,0);
}

if($btnradio3==1){
    $pdf->setxy(99,73);
    $pdf->Cell(40,$line_space,iconv("UTF-8", "TIS-620",'ปกติ '),0,0);
} else{
    $pdf->setxy(99,73);
    $pdf->Cell(40,$line_space,iconv("UTF-8", "TIS-620",'พิเศษ'),0,0);
}

$pdf->setxy(83,82);
$pdf->Cell(40,$line_space,iconv("UTF-8", "TIS-620",$A2),0,0);

$pdf->setxy(137,82);
$pdf->Cell(40,$line_space,iconv("UTF-8", "TIS-620",$A3),0,0);

$pdf->setxy(83,91);
$pdf->Cell(40,$line_space,iconv("UTF-8", "TIS-620",$A4),0,0);

$pdf->setxy(136,91);
$pdf->Cell(40,$line_space,iconv("UTF-8", "TIS-620",$A5),0,0);

$pdf->setxy(83,100);
$pdf->Cell(40,$line_space,iconv("UTF-8", "TIS-620",$A6),0,0);

$pdf->setxy(87,109);
$pdf->Cell(40,$line_space,iconv("UTF-8", "TIS-620",$A7),0,0);

$pdf->setxy(77,118);
$pdf->Cell(40,$line_space,iconv("UTF-8", "TIS-620",$A8),0,0);

if($date!=null){
$pdf->setxy(48,138);
$pdf->Cell(40,$line_space,iconv("UTF-8", "TIS-620",$day1),0,0);

$pdf->setxy(82,138);
$pdf->Cell(40,$line_space,iconv("UTF-8", "TIS-620",$month1),0,0);

$pdf->setxy(125,138);
$pdf->Cell(40,$line_space,iconv("UTF-8", "TIS-620",$year1),0,0);
}

$pdf->setxy(40,147);
$pdf->Cell(40,$line_space,iconv("UTF-8", "TIS-620",$A9),0,0);

//1.3
$pdf->setxy(36,175);
$pdf->Cell(40,$line_space,iconv("UTF-8", "TIS-620",$A10),0,0);

$pdf->setxy(91,175);
$pdf->Cell(40,$line_space,iconv("UTF-8", "TIS-620",$A11),0,0);

$pdf->setxy(125,175);
$pdf->Cell(40,$line_space,iconv("UTF-8", "TIS-620",$A12),0,0);

$pdf->setxy(36,184);
$pdf->Cell(40,$line_space,iconv("UTF-8", "TIS-620",$A13),0,0);

$pdf->setxy(91,184);
$pdf->Cell(40,$line_space,iconv("UTF-8", "TIS-620",$A14),0,0);

$pdf->setxy(125,184);
$pdf->Cell(40,$line_space,iconv("UTF-8", "TIS-620",$A15),0,0);

$pdf->setxy(36,193);
$pdf->Cell(40,$line_space,iconv("UTF-8", "TIS-620",$A16),0,0);

$pdf->setxy(91,193);
$pdf->Cell(40,$line_space,iconv("UTF-8", "TIS-620",$A17),0,0);

$pdf->setxy(125,193);
$pdf->Cell(40,$line_space,iconv("UTF-8", "TIS-620",$A18),0,0);

$pdf->setxy(36,202);
$pdf->Cell(40,$line_space,iconv("UTF-8", "TIS-620",$A19),0,0);

$pdf->setxy(91,202);
$pdf->Cell(40,$line_space,iconv("UTF-8", "TIS-620",$A20),0,0);

$pdf->setxy(125,202);
$pdf->Cell(40,$line_space,iconv("UTF-8", "TIS-620",$A21),0,0);

$pdf->setxy(36,210);
$pdf->Cell(40,$line_space,iconv("UTF-8", "TIS-620",$A22),0,0);

$pdf->setxy(91,210);
$pdf->Cell(40,$line_space,iconv("UTF-8", "TIS-620",$A23),0,0);

$pdf->setxy(125,210);
$pdf->Cell(40,$line_space,iconv("UTF-8", "TIS-620",$A24),0,0);

$pdf->setxy(35,229);
$pdf->Cell(40,$line_space,iconv("UTF-8", "TIS-620",$A25),0,0);

$pdf->setxy(35,246);
$pdf->Cell(40,$line_space,iconv("UTF-8", "TIS-620",$A26),0,0);

$pdf->setxy(35,263);
$pdf->Cell(40,$line_space,iconv("UTF-8", "TIS-620",$A27),0,0);

$pdf->setxy(35,281);
$pdf->Cell(40,$line_space,iconv("UTF-8", "TIS-620",$A28),0,0);



//page 2
$pdf->AddPage();
$pdf->AddFont('THSarabun','B','THSarabun Bold.php');//ธรรมดา
$pdf->AddFont('THSarabun','','THSarabun.php');//ธรรมดา

//ด้านบน
$pdf->Cell(55,$line_space,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->setfont('THSarabun','','14');

$pdf->setxy(95,5);
$pdf->Cell(200,$line_space,iconv("UTF-8", "TIS-620",'- 2 -'),0,1);

$pdf->setfont('THSarabun','B','14');
$pdf->Cell(10);
$pdf->Cell(200,$line_space,iconv("UTF-8", "TIS-620",'2.  ประวัติการรับราชการ'),0,1);

$pdf->setfont('THSarabun','','14');
$pdf->Cell(15);
$pdf->Cell(200,$line_space,iconv("UTF-8", "TIS-620",'2.1  ปัจจุบันดำรงตำแหน่ง .............................................................รับเงินเดือน ..................................... บาท'),0,1);

$pdf->Cell(15);
$pdf->Cell(200,$line_space,iconv("UTF-8", "TIS-620",'2.2  ได้รับแต่งตั้งให้ดำรงตำแหน่ง อาจารย์ เมื่อวันที่................เดือน....................................พ.ศ. ..............'),0,1);

$pdf->Cell(15);
$pdf->Cell(10,$line_space+2,iconv("UTF-8", "TIS-620",'2.3  ได้รับแต่งตั้งให้ดำรงตำแหน่ง ผู้ช่วยศาสตราจารย์                 ในสาขาวิชา............................................................'),0,1);

$pdf->Cell(20);
$pdf->Cell(10,$line_space,iconv("UTF-8", "TIS-620",'      เมื่อวันที่..............เดือน......................................พ.ศ. .................'),0,1);

$pdf->Cell(15);
$pdf->Cell(10,$line_space,iconv("UTF-8", "TIS-620",'2.4  ได้รับแต่งตั้งให้ดำรงตำแหน่ง รองศาสตราจารย์                 ในสาขาวิชา............................................................'),0,1);

$pdf->Cell(20);
$pdf->Cell(10,$line_space,iconv("UTF-8", "TIS-620",'      เมื่อวันที่..............เดือน......................................พ.ศ. ..................'),0,1);

$pdf->Cell(20);
$pdf->Cell(10,$line_space,iconv("UTF-8", "TIS-620",'      อายุราชการ ......................... ปี ....................... เดือน'),0,1);

$pdf->Cell(15);
$pdf->Cell(10,$line_space,iconv("UTF-8", "TIS-620",'2.5 ตำแหน่งอื่นๆ'),0,1);

$pdf->Cell(20);
$pdf->Cell(10,$line_space,iconv("UTF-8", "TIS-620",'2.5.1'),0,1);

$pdf->Cell(20);
$pdf->Cell(10,$line_space,iconv("UTF-8", "TIS-620",'2.5.2'),0,1);

$pdf->Cell(20);
$pdf->Cell(10,$line_space,iconv("UTF-8", "TIS-620",'2.5.3'),0,1);

$pdf->Cell(20);
$pdf->Cell(10,$line_space,iconv("UTF-8", "TIS-620",'2.5.4'),0,1);

$pdf->Cell(20);
$pdf->Cell(10,$line_space,iconv("UTF-8", "TIS-620",'2.5.5'),0,1);

$pdf->Cell(15);
$pdf->Cell(10,$line_space,iconv("UTF-8", "TIS-620",'2.6 การได้รับเชิญเป็นวิทยากรในที่ประชุมวิชาการระดับนานาชาติ และการได้รับการยกย่องระดับนานาชาติอื่นๆ'),0,1);

$pdf->Cell(20);
$pdf->Cell(10,$line_space,iconv("UTF-8", "TIS-620",'2.6.1'),0,1);

$pdf->Cell(20);
$pdf->Cell(10,$line_space,iconv("UTF-8", "TIS-620",'2.6.2'),0,1);

$pdf->Cell(20);
$pdf->Cell(10,$line_space,iconv("UTF-8", "TIS-620",'2.6.3'),0,1);

$pdf->Cell(20);
$pdf->Cell(10,$line_space,iconv("UTF-8", "TIS-620",'2.6.4'),0,1);

$pdf->Cell(20);
$pdf->Cell(10,$line_space,iconv("UTF-8", "TIS-620",'2.6.5'),0,1);

$pdf->Cell(15);
$pdf->Cell(10,$line_space,iconv("UTF-8", "TIS-620",''),0,1);

$pdf->setfont('THSarabun','B','14');
$pdf->Cell(10);
$pdf->Cell(30,$line_space,iconv("UTF-8", "TIS-620",'3.  ภาระงานย้อนหลัง 3 ปี '),0,0);

$pdf->setfont('THSarabun','','14');
$pdf->Cell(15);
$pdf->Cell(2,$line_space,iconv("UTF-8", "TIS-620",'(เป็นภาระงานที่ทำโดยความเห็นชอบจากเจ้าสังกัด)'),0,1);

$pdf->Cell(15);
$pdf->Cell(2,$line_space,iconv("UTF-8", "TIS-620",'3.1  งานสอน'),0,1);

$pdf->Cell(15);
$pdf->Cell(2,$line_space,iconv("UTF-8", "TIS-620",'   ระดับ                               รายวิชาที่สอน                      ช.ม./สัปดาห์           เปิดสอนภาค/ปีการศึกษา'),0,1);

$pdf->Cell(14);
$pdf->Cell(2,$line_space,iconv("UTF-8", "TIS-620",'.....................     .....................................................................         ..................              ...................................'),0,1);

$pdf->Cell(14);
$pdf->Cell(2,$line_space,iconv("UTF-8", "TIS-620",'.....................     .....................................................................         ..................              ...................................'),0,1);

$pdf->Cell(14);
$pdf->Cell(2,$line_space,iconv("UTF-8", "TIS-620",'.....................     .....................................................................         ..................              ...................................'),0,1);

if($btnradio4!=null){
if($btnradio4==1) {
    $pdf->setxy(67,22);
$pdf->Cell(40,$line_space,iconv("UTF-8", "TIS-620",'อาจารย์'),0,0);
} elseif($btnradio4==2){
    $pdf->setxy(67,22);
    $pdf->Cell(40,$line_space,iconv("UTF-8", "TIS-620",'ผู้ช่วยศาสตราจารย์'),0,0);
 } else{
    $pdf->setxy(67,22);
    $pdf->Cell(40,$line_space,iconv("UTF-8", "TIS-620",'รองศาสตราจารย์'),0,0);
}
}

$pdf->setxy(130,22);
$pdf->Cell(40,$line_space,iconv("UTF-8", "TIS-620",$B1),0,0);

if($date4!=Null){
$pdf->setxy(94,31);
$pdf->Cell(40,$line_space,iconv("UTF-8", "TIS-620",$day4),0,0);

$pdf->setxy(115,31);
$pdf->Cell(40,$line_space,iconv("UTF-8", "TIS-620",$month4),0,0);

$pdf->setxy(147,31);
$pdf->Cell(40,$line_space,iconv("UTF-8", "TIS-620",$year4),0,0);
}

if($btnradio500==1) {
    $pdf->setxy(93,42);
$pdf->Cell(40,$line_space,iconv("UTF-8", "TIS-620",'(โดยวิธีปกติ)'),0,0);
} else{
    $pdf->setxy(93,42);
    $pdf->Cell(40,$line_space,iconv("UTF-8", "TIS-620",'(โดยวิธีพิเศษ)'),0,0);
}

$pdf->setxy(130,41);
$pdf->Cell(40,$line_space,iconv("UTF-8", "TIS-620",$BB),0,0);

if($date3!=null){
$pdf->setxy(50,51);
$pdf->Cell(40,$line_space,iconv("UTF-8", "TIS-620",$day3),0,0);

$pdf->setxy(73,51);
$pdf->Cell(40,$line_space,iconv("UTF-8", "TIS-620",$month3),0,0);

$pdf->setxy(103,51);
$pdf->Cell(40,$line_space,iconv("UTF-8", "TIS-620",$year3),0,0);
}
//2.4
if($btnradio7==1) {
    $pdf->setxy(90,61);
$pdf->Cell(40,$line_space,iconv("UTF-8", "TIS-620",'(โดยวิธีปกติ)'),0,0);
} else{
    $pdf->setxy(90,61);
    $pdf->Cell(40,$line_space,iconv("UTF-8", "TIS-620",'(โดยวิธีพิเศษ)'),0,0);
}

$pdf->setxy(130,60);
$pdf->Cell(40,$line_space,iconv("UTF-8", "TIS-620",$B2),0,0);

if($date2!=null){
$pdf->setxy(50,69);
$pdf->Cell(40,$line_space,iconv("UTF-8", "TIS-620",$day2),0,0);

$pdf->setxy(73,69);
$pdf->Cell(40,$line_space,iconv("UTF-8", "TIS-620",$month2),0,0);

$pdf->setxy(103,69);
$pdf->Cell(40,$line_space,iconv("UTF-8", "TIS-620",$year2),0,0);
}

$pdf->setxy(60,78);
$pdf->Cell(40,$line_space,iconv("UTF-8", "TIS-620",$B3),0,0);

$pdf->setxy(82,78);
$pdf->Cell(40,$line_space,iconv("UTF-8", "TIS-620",$B4),0,0);
//2.5
$pdf->setxy(45,97);
$pdf->Cell(40,$line_space,iconv("UTF-8", "TIS-620",$B8),0,0);

$pdf->setxy(45,106);
$pdf->Cell(40,$line_space,iconv("UTF-8", "TIS-620",$B9),0,0);

$pdf->setxy(45,115);
$pdf->Cell(40,$line_space,iconv("UTF-8", "TIS-620",$B10),0,0);

$pdf->setxy(45,124);
$pdf->Cell(40,$line_space,iconv("UTF-8", "TIS-620",$B11),0,0);

$pdf->setxy(45,133);
$pdf->Cell(40,$line_space,iconv("UTF-8", "TIS-620",$B12),0,0);
//2.6
$pdf->setxy(45,151);
$pdf->Cell(40,$line_space,iconv("UTF-8", "TIS-620",$B13),0,0);

$pdf->setxy(45,160);
$pdf->Cell(40,$line_space,iconv("UTF-8", "TIS-620",$B14),0,0);

$pdf->setxy(45,169);
$pdf->Cell(40,$line_space,iconv("UTF-8", "TIS-620",$B15),0,0);

$pdf->setxy(45,178);
$pdf->Cell(40,$line_space,iconv("UTF-8", "TIS-620",$B16),0,0);

$pdf->setxy(45,187);
$pdf->Cell(40,$line_space,iconv("UTF-8", "TIS-620",$B17),0,0);

//3.1
$pdf->setxy(23,231);
$pdf->Cell(40,$line_space,iconv("UTF-8", "TIS-620",$B18),0,0);

$pdf->setxy(49,231);
$pdf->Cell(40,$line_space,iconv("UTF-8", "TIS-620",$B19),0,0);

$pdf->setxy(115,231);
$pdf->Cell(40,$line_space,iconv("UTF-8", "TIS-620",$B20),0,0);

$pdf->setxy(148,231);
$pdf->Cell(40,$line_space,iconv("UTF-8", "TIS-620",$B21),0,0);


$pdf->setxy(23,240);
$pdf->Cell(40,$line_space,iconv("UTF-8", "TIS-620",$B111),0,0);

$pdf->setxy(49,240);
$pdf->Cell(40,$line_space,iconv("UTF-8", "TIS-620",$B112),0,0);

$pdf->setxy(115,240);
$pdf->Cell(40,$line_space,iconv("UTF-8", "TIS-620",$B113),0,0);

$pdf->setxy(148,240);
$pdf->Cell(40,$line_space,iconv("UTF-8", "TIS-620",$B114),0,0);


$pdf->setxy(23,249);
$pdf->Cell(40,$line_space,iconv("UTF-8", "TIS-620",$B115),0,0);

$pdf->setxy(49,249);
$pdf->Cell(40,$line_space,iconv("UTF-8", "TIS-620",$B116),0,0);

$pdf->setxy(115,249);
$pdf->Cell(40,$line_space,iconv("UTF-8", "TIS-620",$B117),0,0);

$pdf->setxy(148,249);
$pdf->Cell(40,$line_space,iconv("UTF-8", "TIS-620",$B118),0,0);



//page 3
$pdf->AddPage();
$pdf->AddFont('THSarabun','B','THSarabun Bold.php');//ธรรมดา
$pdf->AddFont('THSarabun','','THSarabun.php');//ธรรมดา

//ด้านบน
$pdf->Cell(55,$line_space,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->setfont('THSarabun','','14');

$pdf->setxy(95,5);
$pdf->Cell(200,$line_space,iconv("UTF-8", "TIS-620",'- 3 -'),0,1);

$pdf->setfont('THSarabun','','14');
$pdf->Cell(15);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'3.2  งานวิจัย '),0,1);

$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",' '),0,1);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",' '),0,1);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",' '),0,1);

$pdf->Cell(15);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'3.3  งานบริการทางวิชาการ'),0,1);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",' '),0,1);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",' '),0,1);

$pdf->Cell(15);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'3.4  งานบริหาร'),0,1);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",' '),0,1);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",' '),0,1);

$pdf->Cell(15);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'3.5  งานอื่นๆ ที่เกี่ยวข้อง '),0,1);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",' '),0,1);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",' '),0,1);

$pdf->setfont('THSarabun','B','14');
$pdf->Cell(10);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'4.  ผลงานทางวิชาการ'),0,1);

$pdf->setfont('THSarabun','','14');
$pdf->Cell(15);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'4.1  ผลงานทางวิชาการที่เสนอเพื่อประกอบการพิจารณาตำแหน่ง ผู้ช่วยศาสตราจารย์'),0,1);

//4.1.1
if($btnradio2 == 1 | $btnradio2 == 2 | $btnradio2 == 3) {
$pdf->Cell(20);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'4.1.1.1   ผลงานวิจัย....................................................................................................................................................'),0,1);

$pdf->Cell(44);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'....................................................................................................................................................'),0,1);
$pdf->Cell(44);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'....................................................................................................................................................'),0,1);
$pdf->Cell(44);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'....................................................................................................................................................'),0,1);
$pdf->Cell(44);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'....................................................................................................................................................'),0,1);

$pdf->Cell(25);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'ผลงานวิจัยนี้เคยใช้สำหรับการพิจารณาขอกำหนดตำแหน่งผู้ช่วยศาสตราจารย์มาแล้วหรือไม่'),0,1);

$pdf->Cell(30);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'ไม่เคยใช้'),0,1);

$pdf->Cell(30);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'เคยใช้ '),0,1);
$pdf->Cell(10,$line_space2-4,iconv("UTF-8", "TIS-620",''),0,1);

//4.1.2
$pdf->Cell(20);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'4.1.1.2   ผลงานวิจัย....................................................................................................................................................'),0,1);

$pdf->Cell(44);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'....................................................................................................................................................'),0,1);
$pdf->Cell(44);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'....................................................................................................................................................'),0,1);
$pdf->Cell(44);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'....................................................................................................................................................'),0,1);
$pdf->Cell(44);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'....................................................................................................................................................'),0,1);

$pdf->Cell(25);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'ผลงานวิจัยนี้เคยใช้สำหรับการพิจารณาขอกำหนดตำแหน่งผู้ช่วยศาสตราจารย์มาแล้วหรือไม่'),0,1);

$pdf->Cell(30);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'ไม่เคยใช้'),0,1);

$pdf->Cell(30);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'เคยใช้'),0,1);


$pdf->SetXY(34,184);
$pdf->Cell(4,4,'',1,0);

$pdf->SetXY(34,192);
$pdf->Cell(4,4,'',1,0);

$pdf->SetXY(34,252);
$pdf->Cell(4,4,'',1,0);

$pdf->SetXY(34,260);
$pdf->Cell(4,4,'',1,0);


$pdf->setxy(34,22);
$pdf->Cell(40,$line_space,iconv("UTF-8", "TIS-620",'-  '.$C1),0,0);

$pdf->setxy(34,29);
$pdf->Cell(40,$line_space,iconv("UTF-8", "TIS-620",'-  '.$C2),0,0);

$pdf->setxy(34,36);
$pdf->Cell(40,$line_space,iconv("UTF-8", "TIS-620",'-  '.$C3),0,0);

if($C4!= Null || $C5!=Null) {
$pdf->setxy(34,53);
$pdf->MultiCell(145,$line_space,iconv("UTF-8", "TIS-620",'เป็นกิจกรรมประเภท'.$C4.' และ'.$C5),0,0);
}

if($C7!= Null || $C8!=Null) {
$pdf->setxy(34,77);
$pdf->MultiCell(145,$line_space,iconv("UTF-8", "TIS-620",'งานบริหารที่มีส่วนรับผิดชอบโดยตรง คือ '.$C7.' และปริมาณเวลาที่ใช้ต่อสัปดาห์ คือ '.$C8),0,0);
}

if($C10!= Null || $C11!=Null) {
$pdf->setxy(34,100);
$pdf->MultiCell(145,$line_space,iconv("UTF-8", "TIS-620",'เป็นงานประเภท '.$C10.' และเวลาที่ใช้ต่อสัปดาห์ คือ '.$C11),0,0);
}

//4.1.1.1 
if($C12!= Null ) {
$pdf->setxy(57,133);
$pdf->MultiCell(115,$line_space-1,iconv("UTF-8", "TIS-620",$C12.' '.$C13.' อยู่ในฐานข้อมูล '.$C14 .' โดยมีบทบาทหน้าที่เป็น '.$btnradio8.' และถูกอ้างอิง (Citation) จำนวน '.$C6.' ครั้ง  Journal impact factor '.$C9),0,0);
}

if($btnradio9==1){
    $pdf->Image('image/check.png',34,183,5,6);
}elseif($btnradio9==2) {
    $pdf->Image('image/check.png',34,191,5,6);
    $pdf->setxy(48,189.5);
    $pdf->Cell(40,$line_space,iconv("UTF-8", "TIS-620",'(เมื่อปี พ.ศ. '.$C15.' และผลการพิจารณาคุณภาพอยู่ในระดับ '.$C16.' ตามเกณฑ์ที่ ก.พ.อ. กำหนด)'),0,0);
}

if($C17!= Null ) {
$pdf->setxy(57,201);
$pdf->MultiCell(115,$line_space-1,iconv("UTF-8", "TIS-620",$C17.' '.$C18.' อยู่ในฐานข้อมูล '.$C19 .' โดยมีบทบาทหน้าที่เป็น '.$btnradio10.' และถูกอ้างอิง (Citation) จำนวน '.$C20.' ครั้ง  Journal impact factor '.$C21),0,0);
}

if($btnradio78==1){
    $pdf->Image('image/check.png',34,251,5,6);
}elseif($btnradio78==2) {
    $pdf->Image('image/check.png',34,259,5,6);
    $pdf->setxy(48,257.5);
    $pdf->Cell(40,$line_space,iconv("UTF-8", "TIS-620",'(เมื่อปี พ.ศ. '.$C22.' และผลการพิจารณาคุณภาพอยู่ในระดับ '.$C23.' ตามเกณฑ์ที่ ก.พ.อ. กำหนด)'),0,0);
}




//page 4
$pdf->AddPage();
$pdf->AddFont('THSarabun','B','THSarabun Bold.php');//ธรรมดา
$pdf->AddFont('THSarabun','','THSarabun.php');//ธรรมดา

//ด้านบน
$pdf->Cell(55,$line_space,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->setfont('THSarabun','','14');

$pdf->setxy(95,5);
$pdf->Cell(200,$line_space,iconv("UTF-8", "TIS-620",'- 4 -'),0,1);

$pdf->setfont('THSarabun','','14');


$pdf->Cell(20);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'4.1.1.3   ผลงานวิจัย....................................................................................................................................................'),0,1);

$pdf->Cell(48);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'....................................................................................................................................................'),0,1);
$pdf->Cell(48);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'....................................................................................................................................................'),0,1);
$pdf->Cell(48);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'....................................................................................................................................................'),0,1);
$pdf->Cell(48);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'....................................................................................................................................................'),0,1);

$pdf->Cell(25);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'ผลงานวิจัยนี้เคยใช้สำหรับการพิจารณาขอกำหนดตำแหน่งผู้ช่วยศาสตราจารย์มาแล้วหรือไม่'),0,1);

$pdf->Cell(30);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'ไม่เคยใช้'),0,1);

$pdf->Cell(30);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'เคยใช้ '),0,1);

$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",''),0,1);

$pdf->Cell(20);
$pdf->Cell(200,$line_space2,iconv("UTF-8", "TIS-620",'4.1.2  ผลงานทางวิชาการในลักษณะอื่น '),0,1);

$pdf->Cell(30);
$pdf->Cell(200,$line_space2,iconv("UTF-8", "TIS-620",'4.1.2.1 ผลงานวิจัย................................................................................................................................'),0,1);

$pdf->Cell(54);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'................................................................................................................................'),0,1);

$pdf->Cell(54);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'................................................................................................................................'),0,1);

$pdf->Cell(54);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'................................................................................................................................'),0,1);

$pdf->Cell(54);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'................................................................................................................................'),0,1);

$pdf->Cell(25);
$pdf->Cell(200,$line_space2,iconv("UTF-8", "TIS-620",'ผลงานทางวิชาการในลักษณะอื่นนี้เคยใช้สำหรับการพิจารณาขอกำหนดตำแหน่งผู้ช่วยศาสตราจารย์มาแล้วหรือไม่'),0,1);

$pdf->Cell(30);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'ไม่เคยใช้'),0,1);

$pdf->Cell(30);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'เคยใช้ '),0,1);

$pdf->Cell(200,$line_space2,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(30);
$pdf->Cell(200,$line_space2,iconv("UTF-8", "TIS-620",'4.1.2.2 ผลงานวิจัย................................................................................................................................'),0,1);

$pdf->Cell(54);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'................................................................................................................................'),0,1);

$pdf->Cell(54);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'................................................................................................................................'),0,1);

$pdf->Cell(54);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'................................................................................................................................'),0,1);

$pdf->Cell(54);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'................................................................................................................................'),0,1);

$pdf->Cell(25);
$pdf->Cell(200,$line_space2,iconv("UTF-8", "TIS-620",'ผลงานทางวิชาการในลักษณะอื่นนี้เคยใช้สำหรับการพิจารณาขอกำหนดตำแหน่งผู้ช่วยศาสตราจารย์มาแล้วหรือไม่'),0,1);

$pdf->Cell(30);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'ไม่เคยใช้'),0,1);

$pdf->Cell(30);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'เคยใช้ '),0,1);

$pdf->Cell(200,$line_space2,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(30);
$pdf->Cell(200,$line_space2,iconv("UTF-8", "TIS-620",'4.1.2.3 ผลงานวิจัย................................................................................................................................'),0,1);

$pdf->Cell(54);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'................................................................................................................................'),0,1);

$pdf->Cell(54);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'................................................................................................................................'),0,1);

$pdf->Cell(54);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'................................................................................................................................'),0,1);

$pdf->Cell(54);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'................................................................................................................................'),0,1);

$pdf->SetXY(34,64);
$pdf->Cell(4,4,'',1,0);

$pdf->SetXY(34,72);
$pdf->Cell(4,4,'',1,0);

$pdf->SetXY(34,144);
$pdf->Cell(4,4,'',1,0);

$pdf->SetXY(34,152);
$pdf->Cell(4,4,'',1,0);

$pdf->SetXY(34,216);
$pdf->Cell(4,4,'',1,0);

$pdf->SetXY(34,224);
$pdf->Cell(4,4,'',1,0);

if($C24!= Null ) {
$pdf->setxy(58,13);
$pdf->MultiCell(115,$line_space-1,iconv("UTF-8", "TIS-620",$C24.' '.$C25.' อยู่ในฐานข้อมูล '.$C26 .' โดยมีบทบาทหน้าที่เป็น '.$btnradio11.' และถูกอ้างอิง (Citation) จำนวน '.$C27.' ครั้ง  Journal impact factor '.$C28),0,0);
}

if($btnradio12==1){
    $pdf->Image('image/check.png',34,62.5,5,6);
}elseif($btnradio12==2) {
    $pdf->Image('image/check.png',34,71,5,6);
    $pdf->setxy(48,69.5);
    $pdf->Cell(40,$line_space,iconv("UTF-8", "TIS-620",'(เมื่อปี พ.ศ. '.$C29.' และผลการพิจารณาคุณภาพอยู่ในระดับ '.$C30.' ตามเกณฑ์ที่ ก.พ.อ. กำหนด)'),0,0);
}

//4.1.2.1
$pdf->setxy(81,85.5);
$pdf->Cell(40,$line_space,iconv("UTF-8", "TIS-620",'('.$op412.')'),0,0);

if($D1!= Null ) {
$pdf->setxy(65,93);
$pdf->MultiCell(105,$line_space-1,iconv("UTF-8", "TIS-620",$D1.' '.$D2.' อยู่ในฐานข้อมูล '.$D3 .' โดยมีบทบาทหน้าที่เป็น '.$btnradio13.' และถูกอ้างอิง (Citation) จำนวน '.$D4.' ครั้ง  Journal impact factor '.$D5),0,0);
}

if($btnradio14==1){
    $pdf->Image('image/check.png',34,142.5,5,6);
}elseif($btnradio14==2) {
    $pdf->Image('image/check.png',34,151,5,6);
    $pdf->setxy(48,149.5);
    $pdf->Cell(40,$line_space,iconv("UTF-8", "TIS-620",'(เมื่อปี พ.ศ. '.$D6.' และผลการพิจารณาคุณภาพอยู่ในระดับ '.$D7.' ตามเกณฑ์ที่ ก.พ.อ. กำหนด)'),0,0);
}

//4.1.2.2
if($D8!= Null ) {
$pdf->setxy(65,165);
$pdf->MultiCell(105,$line_space-1,iconv("UTF-8", "TIS-620",$D8.' '.$D9.' อยู่ในฐานข้อมูล '.$D10 .' โดยมีบทบาทหน้าที่เป็น '.$btnradio15.' และถูกอ้างอิง (Citation) จำนวน '.$D11.' ครั้ง  Journal impact factor '.$D12),0,0);
}

if($btnradio16==1){
    $pdf->Image('image/check.png',34,215,5,6);
}elseif($btnradio16==2) {
    $pdf->Image('image/check.png',34,223,5,6);
    $pdf->setxy(48,221.5);
    $pdf->Cell(40,$line_space,iconv("UTF-8", "TIS-620",'(เมื่อปี พ.ศ. '.$D13.' และผลการพิจารณาคุณภาพอยู่ในระดับ '.$D14.' ตามเกณฑ์ที่ ก.พ.อ. กำหนด)'),0,0);
}


//4.1.2.3
if($D15!= Null ) {
$pdf->setxy(65,237);
$pdf->MultiCell(105,$line_space-1,iconv("UTF-8", "TIS-620",$D15.' '.$D17.' อยู่ในฐานข้อมูล '.$D18 .' โดยมีบทบาทหน้าที่เป็น '.$btnradio17.' และถูกอ้างอิง (Citation) จำนวน '.$D19.' ครั้ง  Journal impact factor '.$D20),0,0);
}



//page 5
$pdf->AddPage();
$pdf->AddFont('THSarabun','B','THSarabun Bold.php');//ธรรมดา
$pdf->AddFont('THSarabun','','THSarabun.php');//ธรรมดา

//ด้านบน
$pdf->Cell(55,$line_space,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->setfont('THSarabun','','14');

$pdf->setxy(95,5);
$pdf->Cell(200,$line_space,iconv("UTF-8", "TIS-620",'- 5 -'),0,1);


$pdf->setfont('THSarabun','','14');

$pdf->Cell(200,$line_space2,iconv("UTF-8", "TIS-620",''),0,1);

$pdf->Cell(25);
$pdf->Cell(200,$line_space2,iconv("UTF-8", "TIS-620",'ผลงานทางวิชาการในลักษณะอื่นนี้เคยใช้สำหรับการพิจารณาขอกำหนดตำแหน่งผู้ช่วยศาสตราจารย์มาแล้วหรือไม่'),0,1);

$pdf->Cell(30);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'ไม่เคยใช้'),0,1);

$pdf->Cell(30);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'เคยใช้'),0,1);
$pdf->Cell(200,$line_space2,iconv("UTF-8", "TIS-620",''),0,1);

$pdf->Cell(20);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'4.1.3  ตำรา หนังสือ หรือบทความทางวิชาการ)'),0,1);

$pdf->Cell(30);
$pdf->Cell(200,$line_space2,iconv("UTF-8", "TIS-620",'4.1.3.1 ผลงานวิจัย...........................................................................................................................................'),0,1);

$pdf->Cell(55);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'...........................................................................................................................................'),0,1);
$pdf->Cell(55);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'...........................................................................................................................................'),0,1);
$pdf->Cell(55);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'...........................................................................................................................................'),0,1);
$pdf->Cell(55);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'...........................................................................................................................................'),0,1);


$pdf->Cell(25);
$pdf->Cell(200,$line_space2,iconv("UTF-8", "TIS-620",'ผลงานนี้เคยใช้สำหรับการพิจารณาขอกำหนดตำแหน่งผู้ช่วยศาสตราจารย์มาแล้วหรือไม่'),0,1);

$pdf->Cell(30);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'ไม่เคยใช้'),0,1);

$pdf->Cell(30);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'เคยใช้'),0,1);


$pdf->Cell(200,$line_space2,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(30);
$pdf->Cell(200,$line_space2,iconv("UTF-8", "TIS-620",'4.1.3.2 ผลงานวิจัย...........................................................................................................................................'),0,1);

$pdf->Cell(55);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'...........................................................................................................................................'),0,1);
$pdf->Cell(55);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'...........................................................................................................................................'),0,1);
$pdf->Cell(55);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'...........................................................................................................................................'),0,1);
$pdf->Cell(55);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'...........................................................................................................................................'),0,1);

$pdf->Cell(25);
$pdf->Cell(200,$line_space2,iconv("UTF-8", "TIS-620",'ผลงานนี้เคยใช้สำหรับการพิจารณาขอกำหนดตำแหน่งผู้ช่วยศาสตราจารย์มาแล้วหรือไม่'),0,1);

$pdf->Cell(30);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'ไม่เคยใช้'),0,1);

$pdf->Cell(30);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'เคยใช้'),0,1);

$pdf->Cell(30);
$pdf->Cell(200,$line_space2,iconv("UTF-8", "TIS-620",'4.1.3.3 ผลงานวิจัย...........................................................................................................................................'),0,1);

$pdf->Cell(55);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'...........................................................................................................................................'),0,1);
$pdf->Cell(55);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'...........................................................................................................................................'),0,1);
$pdf->Cell(55);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'...........................................................................................................................................'),0,1);
$pdf->Cell(55);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'...........................................................................................................................................'),0,1);

$pdf->Cell(15);
$pdf->Cell(200,$line_space2,iconv("UTF-8", "TIS-620",'ผลงานนี้เคยใช้สำหรับการพิจารณาขอกำหนดตำแหน่งผู้ช่วยศาสตราจารย์มาแล้วหรือไม่'),0,1);

$pdf->Cell(30);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'ไม่เคยใช้'),0,1);

$pdf->Cell(30);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'เคยใช้'),0,1);


$pdf->SetXY(34,32);
$pdf->Cell(4,4,'',1,0);

$pdf->SetXY(34,40);
$pdf->Cell(4,4,'',1,0);

$pdf->SetXY(34,112);
$pdf->Cell(4,4,'',1,0);

$pdf->SetXY(34,120);
$pdf->Cell(4,4,'',1,0);

$pdf->SetXY(34,184);
$pdf->Cell(4,4,'',1,0);

$pdf->SetXY(34,192);
$pdf->Cell(4,4,'',1,0);

$pdf->SetXY(34,248);
$pdf->Cell(4,4,'',1,0);

$pdf->SetXY(34,256);
$pdf->Cell(4,4,'',1,0);



if($btnradio9==1){
    $pdf->Image('image/check.png',34,31,5,6);
}elseif($btnradio9==2) {
    $pdf->Image('image/check.png',34,39,5,6);
    $pdf->setxy(48,37.5);
    $pdf->Cell(40,$line_space,iconv("UTF-8", "TIS-620",'(เมื่อปี พ.ศ. '.$D21.' และผลการพิจารณาคุณภาพอยู่ในระดับ '.$D22.' ตามเกณฑ์ที่ ก.พ.อ. กำหนด)'),0,0);
}

//4.1.3.1
if($D30!= Null ) {
$pdf->setxy(65,61);
$pdf->MultiCell(105,$line_space-1,iconv("UTF-8", "TIS-620",$D30.' '.$D31.' อยู่ในฐานข้อมูล '.$D32 .' โดยมีบทบาทหน้าที่เป็น '.$btnradio81.' และถูกอ้างอิง (Citation) จำนวน '.$D33.' ครั้ง  Journal impact factor '.$D34),0,0);
}

if($btnradio22==1){
    $pdf->Image('image/check.png',34,111,5,6);
}elseif($btnradio22==2) {
    $pdf->Image('image/check.png',34,118,5,6);
    $pdf->setxy(48,116.5);
    $pdf->Cell(40,$line_space,iconv("UTF-8", "TIS-620",'(เมื่อปี พ.ศ. '.$D35.' และผลการพิจารณาคุณภาพอยู่ในระดับ '.$D36.' ตามเกณฑ์ที่ ก.พ.อ. กำหนด)'),0,0);
}

//4.1.3.2
if($D37!= Null ) {
$pdf->setxy(65,133);
$pdf->MultiCell(105,$line_space-1,iconv("UTF-8", "TIS-620",$D37.' '.$D38.' อยู่ในฐานข้อมูล '.$D39 .' โดยมีบทบาทหน้าที่เป็น '.$btnradio23.' และถูกอ้างอิง (Citation) จำนวน '.$D40.' ครั้ง  Journal impact factor '.$D41),0,0);
}

if($btnradio24==1){
    $pdf->Image('image/check.png',34,183,5,6);
}elseif($btnradio24==2) {
    $pdf->Image('image/check.png',34,118,5,6);
    $pdf->setxy(48,116.5);
    $pdf->Cell(40,$line_space,iconv("UTF-8", "TIS-620",'(เมื่อปี พ.ศ. '.$D42.' และผลการพิจารณาคุณภาพอยู่ในระดับ '.$D43.' ตามเกณฑ์ที่ ก.พ.อ. กำหนด)'),0,0);
}

//4.1.3.3
if($E1!= Null ) {
$pdf->setxy(65,197);
$pdf->MultiCell(105,$line_space-1,iconv("UTF-8", "TIS-620",$E1.' '.$E2.' อยู่ในฐานข้อมูล '.$E3 .' โดยมีบทบาทหน้าที่เป็น '.$btnradio25.' และถูกอ้างอิง (Citation) จำนวน '.$E4.' ครั้ง  Journal impact factor '.$E5),0,0);
}

if($btnradio26==1){
    $pdf->Image('image/check.png',34,247,5,6);
}elseif($btnradio26==2) {
    $pdf->Image('image/check.png',34,254,5,6);
    $pdf->setxy(48,252.5);
    $pdf->Cell(40,$line_space,iconv("UTF-8", "TIS-620",'(เมื่อปี พ.ศ. '.$E6.' และผลการพิจารณาคุณภาพอยู่ในระดับ '.$E7.' ตามเกณฑ์ที่ ก.พ.อ. กำหนด)'),0,0);
}


}
if($btnradio2 == 2 | $btnradio2 == 3) {
// 4.2
//page 6
$pdf->AddPage();
$pdf->AddFont('THSarabun','B','THSarabun Bold.php');//ธรรมดา
$pdf->AddFont('THSarabun','','THSarabun.php');//ธรรมดา

//ด้านบน
$pdf->Cell(55,$line_space1,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->setfont('THSarabun','','14');

$pdf->setxy(95,5);
$pdf->Cell(200,$line_space1,iconv("UTF-8", "TIS-620",'- 6 -'),0,1);

$pdf->setfont('THSarabun','','14');


$pdf->Cell(15);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'4.2  ผลงานทางวิชาการที่เสนอเพื่อประกอบการพิจารณาตำแหน่ง รองศาสตราจารย์'),0,1);

$pdf->Cell(20);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'4.2.1  ผลงานวิจัย'),0,1);

$pdf->Cell(30);
$pdf->Cell(200,$line_space2,iconv("UTF-8", "TIS-620",'4.2.1.1 ผลงานวิจัย...........................................................................................................................................'),0,1);

$pdf->Cell(55);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'...........................................................................................................................................'),0,1);
$pdf->Cell(55);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'...........................................................................................................................................'),0,1);
$pdf->Cell(55);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'...........................................................................................................................................'),0,1);
$pdf->Cell(55);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'...........................................................................................................................................'),0,1);


$pdf->Cell(25);
$pdf->Cell(200,$line_space2,iconv("UTF-8", "TIS-620",'ผลงานวิจัยนี้เคยใช้สำหรับการพิจารณาขอกำหนดตำแหน่งผู้ช่วยศาสตราจารย์ และ/หรือตำแหน่งรองศาสตราจารย์'),0,1);
$pdf->Cell(25);
$pdf->Cell(200,$line_space2,iconv("UTF-8", "TIS-620",'มาแล้วหรือไม่'),0,1);

$pdf->Cell(30);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'ไม่เคยใช้'),0,1);

$pdf->Cell(30);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'เคยใช้ '),0,1);

$pdf->Cell(200,$line_space2,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(30);
$pdf->Cell(200,$line_space2,iconv("UTF-8", "TIS-620",'4.2.1.2 ผลงานวิจัย...........................................................................................................................................'),0,1);

$pdf->Cell(55);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'...........................................................................................................................................'),0,1);
$pdf->Cell(55);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'...........................................................................................................................................'),0,1);
$pdf->Cell(55);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'...........................................................................................................................................'),0,1);
$pdf->Cell(55);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'...........................................................................................................................................'),0,1);


$pdf->Cell(25);
$pdf->Cell(200,$line_space2,iconv("UTF-8", "TIS-620",'ผลงานทางวิชาการในลักษณะอื่นนี้เคยใช้สำหรับการพิจารณาขอกำหนดตำแหน่งผู้ช่วยศาสตราจารย์มาแล้วหรือไม่'),0,1);

$pdf->Cell(30);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'ไม่เคยใช้'),0,1);

$pdf->Cell(30);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'เคยใช้'),0,1);

$pdf->Cell(200,$line_space2,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(30);
$pdf->Cell(200,$line_space2,iconv("UTF-8", "TIS-620",'4.2.1.3 ผลงานวิจัย...........................................................................................................................................'),0,1);

$pdf->Cell(55);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'...........................................................................................................................................'),0,1);
$pdf->Cell(55);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'...........................................................................................................................................'),0,1);
$pdf->Cell(55);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'...........................................................................................................................................'),0,1);
$pdf->Cell(55);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'...........................................................................................................................................'),0,1);

$pdf->Cell(25);
$pdf->Cell(200,$line_space2,iconv("UTF-8", "TIS-620",'ผลงานวิจัยนี้เคยใช้สำหรับการพิจารณาขอกำหนดตำแหน่งผู้ช่วยศาสตราจารย์ และ/หรือตำแหน่งรองศาสตราจารย์'),0,1);
$pdf->Cell(25);
$pdf->Cell(200,$line_space2,iconv("UTF-8", "TIS-620",'มาแล้วหรือไม่'),0,1);

$pdf->Cell(30);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'ไม่เคยใช้'),0,1);

$pdf->Cell(30);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'เคยใช้'),0,1);


$pdf->SetXY(34,85);
$pdf->Cell(4,4,'',1,0);

$pdf->SetXY(34,93);
$pdf->Cell(4,4,'',1,0);

$pdf->SetXY(34,157);
$pdf->Cell(4,4,'',1,0);

$pdf->SetXY(34,165);
$pdf->Cell(4,4,'',1,0);

$pdf->SetXY(34,237);
$pdf->Cell(4,4,'',1,0);

$pdf->SetXY(34,245);
$pdf->Cell(4,4,'',1,0);


//4.2.1.1
if($E15!= Null ) {
$pdf->setxy(65,26);
$pdf->MultiCell(105,$line_space-1,iconv("UTF-8", "TIS-620",$E15.' '.$E16.' อยู่ในฐานข้อมูล '.$E17 .' โดยมีบทบาทหน้าที่เป็น '.$btnradio29.' และถูกอ้างอิง (Citation) จำนวน '.$E18.' ครั้ง  Journal impact factor '.$E19),0,0);
}

if($btnradio30==1){
    $pdf->Image('image/check.png',34,84,5,6);
}elseif($btnradio30==2) {
    $pdf->Image('image/check.png',34,92,5,6);
    $pdf->setxy(48,90.5);
    $pdf->Cell(40,$line_space,iconv("UTF-8", "TIS-620",'(เมื่อปี พ.ศ. '.$E20.' และผลการพิจารณาคุณภาพอยู่ในระดับ '.$E21.' ตามเกณฑ์ที่ ก.พ.อ. กำหนด)'),0,0);
}

//4.2.1.2
if($E22!= Null ) {
$pdf->setxy(65,106);
$pdf->MultiCell(105,$line_space-1,iconv("UTF-8", "TIS-620",$E22.' '.$E23.' อยู่ในฐานข้อมูล '.$E24 .' โดยมีบทบาทหน้าที่เป็น '.$btnradio31.' และถูกอ้างอิง (Citation) จำนวน '.$E25.' ครั้ง  Journal impact factor '.$E26),0,0);
}

if($btnradio32==1){
    $pdf->Image('image/check.png',34,156,5,6);
}elseif($btnradio32==2) {
    $pdf->Image('image/check.png',34,162,5,6);
    $pdf->setxy(48,160.5);
    $pdf->Cell(40,$line_space,iconv("UTF-8", "TIS-620",'(เมื่อปี พ.ศ. '.$E27.' และผลการพิจารณาคุณภาพอยู่ในระดับ '.$E28.' ตามเกณฑ์ที่ ก.พ.อ. กำหนด)'),0,0);
}

//4.2.1.3
if($E29!= Null ) {
$pdf->setxy(65,178);
$pdf->MultiCell(105,$line_space-1,iconv("UTF-8", "TIS-620",$E29.' '.$E30.' อยู่ในฐานข้อมูล '.$E31 .' โดยมีบทบาทหน้าที่เป็น '.$btnradio33.' และถูกอ้างอิง (Citation) จำนวน '.$E32.' ครั้ง  Journal impact factor '.$E33),0,0);
}

if($btnradio34==1){
    $pdf->Image('image/check.png',34,236,5,6);
}elseif($btnradio34==2) {
    $pdf->Image('image/check.png',34,243,5,6);
    $pdf->setxy(48,241.5);
    $pdf->Cell(40,$line_space,iconv("UTF-8", "TIS-620",'(เมื่อปี พ.ศ. '.$E34.' และผลการพิจารณาคุณภาพอยู่ในระดับ '.$E35.' ตามเกณฑ์ที่ ก.พ.อ. กำหนด)'),0,0);
}






//page 7
$pdf->AddPage();
$pdf->AddFont('THSarabun','B','THSarabun Bold.php');//ธรรมดา
$pdf->AddFont('THSarabun','','THSarabun.php');//ธรรมดา

//ด้านบน
$pdf->Cell(55,$line_space1,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->setfont('THSarabun','','14');


$pdf->setxy(95,5);
$pdf->Cell(200,$line_space1,iconv("UTF-8", "TIS-620",'- 7 -'),0,1);

$pdf->setfont('THSarabun','','14');


$pdf->Cell(20);
$pdf->Cell(200,$line_space1,iconv("UTF-8", "TIS-620",'4.2.2  ผลงานทางวิชาการในลักษณะอื่น '),0,1);

$pdf->Cell(30);
$pdf->Cell(200,$line_space2,iconv("UTF-8", "TIS-620",'4.2.2.1 ผลงานวิจัย...........................................................................................................................................'),0,1);

$pdf->Cell(55);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'...........................................................................................................................................'),0,1);
$pdf->Cell(55);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'...........................................................................................................................................'),0,1);
$pdf->Cell(55);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'...........................................................................................................................................'),0,1);
$pdf->Cell(55);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'...........................................................................................................................................'),0,1);



$pdf->Cell(25);
$pdf->Cell(200,$line_space3,iconv("UTF-8", "TIS-620",'ผลงานนี้เคยใช้สำหรับการพิจารณาขอกำหนดตำแหน่งผู้ช่วยศาสตราจารย์ และ/หรือตำแหน่งรองศาสตราจารย์'),0,1);

$pdf->Cell(25);
$pdf->Cell(200,$line_space3,iconv("UTF-8", "TIS-620",'มาแล้วหรือไม่'),0,1);

$pdf->Cell(30);
$pdf->Cell(10,$line_space3,iconv("UTF-8", "TIS-620",'ไม่เคยใช้'),0,1);

$pdf->Cell(30);
$pdf->Cell(10,$line_space3,iconv("UTF-8", "TIS-620",'เคยใช้'),0,1);

$pdf->Cell(200,$line_space2,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(30);
$pdf->Cell(200,$line_space2,iconv("UTF-8", "TIS-620",'4.2.2.2 ผลงานวิจัย...........................................................................................................................................'),0,1);

$pdf->Cell(55);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'...........................................................................................................................................'),0,1);
$pdf->Cell(55);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'...........................................................................................................................................'),0,1);
$pdf->Cell(55);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'...........................................................................................................................................'),0,1);
$pdf->Cell(55);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'...........................................................................................................................................'),0,1);



$pdf->Cell(25);
$pdf->Cell(200,$line_space3,iconv("UTF-8", "TIS-620",'ผลงานนี้เคยใช้สำหรับการพิจารณาขอกำหนดตำแหน่งผู้ช่วยศาสตราจารย์ และ/หรือตำแหน่งรองศาสตราจารย์'),0,1);

$pdf->Cell(25);
$pdf->Cell(200,$line_space3,iconv("UTF-8", "TIS-620",'มาแล้วหรือไม่'),0,1);


$pdf->Cell(30);
$pdf->Cell(10,$line_space3,iconv("UTF-8", "TIS-620",'ไม่เคยใช้'),0,1);

$pdf->Cell(30);
$pdf->Cell(10,$line_space3,iconv("UTF-8", "TIS-620",'เคยใช้'),0,1);

$pdf->Cell(200,$line_space2,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(30);
$pdf->Cell(200,$line_space2,iconv("UTF-8", "TIS-620",'4.2.2.3 ผลงานวิจัย...........................................................................................................................................'),0,1);

$pdf->Cell(55);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'...........................................................................................................................................'),0,1);
$pdf->Cell(55);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'...........................................................................................................................................'),0,1);
$pdf->Cell(55);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'...........................................................................................................................................'),0,1);
$pdf->Cell(55);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'...........................................................................................................................................'),0,1);
$pdf->Cell(55);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'...........................................................................................................................................'),0,1);

$pdf->Cell(25);
$pdf->Cell(200,$line_space3,iconv("UTF-8", "TIS-620",'ผลงานนี้เคยใช้สำหรับการพิจารณาขอกำหนดตำแหน่งผู้ช่วยศาสตราจารย์ และ/หรือตำแหน่งรองศาสตราจารย์'),0,1);

$pdf->Cell(25);
$pdf->Cell(200,$line_space3,iconv("UTF-8", "TIS-620",'มาแล้วหรือไม่'),0,1);


$pdf->Cell(30);
$pdf->Cell(10,$line_space3,iconv("UTF-8", "TIS-620",'ไม่เคยใช้'),0,1);

$pdf->Cell(30);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'เคยใช้ '),0,1);


$pdf->SetXY(34,72);
$pdf->Cell(4,4,'',1,0);

$pdf->SetXY(34,80);
$pdf->Cell(4,4,'',1,0);

$pdf->SetXY(34,149);
$pdf->Cell(4,4,'',1,0);

$pdf->SetXY(34,156);
$pdf->Cell(4,4,'',1,0);

$pdf->SetXY(34,233);
$pdf->Cell(4,4,'',1,0);

$pdf->SetXY(34,240);
$pdf->Cell(4,4,'',1,0);


//4.2.2.1
$pdf->setxy(81,9.5);
$pdf->Cell(40,$line_space,iconv("UTF-8", "TIS-620",'('.$op422.')'),0,0);

if($F1!= Null ) {
$pdf->setxy(65,16);
$pdf->MultiCell(105,$line_space-1,iconv("UTF-8", "TIS-620",$F1.' '.$F2.' อยู่ในฐานข้อมูล '.$F3 .' โดยมีบทบาทหน้าที่เป็น '.$btnradio35.' และถูกอ้างอิง (Citation) จำนวน '.$F4.' ครั้ง  Journal impact factor '.$F5),0,0);
}

if($btnradio36==1){
    $pdf->Image('image/check.png',34,71,5,6);
}elseif($btnradio36==2) {
    $pdf->Image('image/check.png',34,79,5,6);
    $pdf->setxy(48,77.5);
    $pdf->Cell(40,$line_space,iconv("UTF-8", "TIS-620",'(เมื่อปี พ.ศ. '.$F6.' และผลการพิจารณาคุณภาพอยู่ในระดับ '.$F7.' ตามเกณฑ์ที่ ก.พ.อ. กำหนด)'),0,0);
}

//4.2.2.2
if($F8!= Null ) {
$pdf->setxy(65,92);
$pdf->MultiCell(105,$line_space-1,iconv("UTF-8", "TIS-620",$F8.' '.$F9.' อยู่ในฐานข้อมูล '.$F10 .' โดยมีบทบาทหน้าที่เป็น '.$btnradio37.' และถูกอ้างอิง (Citation) จำนวน '.$F11.' ครั้ง  Journal impact factor '.$F19),0,0);
}

if($btnradio38==1){
    $pdf->Image('image/check.png',34,148,5,6);
}elseif($btnradio38==2) {
    $pdf->Image('image/check.png',34,155,5,6);
    $pdf->setxy(48,153.5);
    $pdf->Cell(40,$line_space,iconv("UTF-8", "TIS-620",'(เมื่อปี พ.ศ. '.$F22.' และผลการพิจารณาคุณภาพอยู่ในระดับ '.$F23.' ตามเกณฑ์ที่ ก.พ.อ. กำหนด)'),0,0);
}

//4.2.2.3
if($F24!= Null ) {
$pdf->setxy(65,168);
$pdf->MultiCell(105,$line_space-1,iconv("UTF-8", "TIS-620",$F24.' '.$F25.' อยู่ในฐานข้อมูล '.$F26 .' โดยมีบทบาทหน้าที่เป็น '.$btnradio39.' และถูกอ้างอิง (Citation) จำนวน '.$F27.' ครั้ง  Journal impact factor '.$F28),0,0);
}

if($btnradio40==1){
    $pdf->Image('image/check.png',34,232,5,6);
}elseif($btnradio40==2) {
    $pdf->Image('image/check.png',34,239,5,6);
    $pdf->setxy(48,237.5);
    $pdf->Cell(40,$line_space,iconv("UTF-8", "TIS-620",'(เมื่อปี พ.ศ. '.$F29.' และผลการพิจารณาคุณภาพอยู่ในระดับ '.$F30.' ตามเกณฑ์ที่ ก.พ.อ. กำหนด)'),0,0);
}



//page 8
$pdf->AddPage();
$pdf->AddFont('THSarabun','B','THSarabun Bold.php');//ธรรมดา
$pdf->AddFont('THSarabun','','THSarabun.php');//ธรรมดา

//ด้านบน
$pdf->Cell(55,$line_space1,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->setfont('THSarabun','','14');

$pdf->setxy(95,5);
$pdf->Cell(200,$line_space1+2,iconv("UTF-8", "TIS-620",'- 8 -'),0,1);

$pdf->setfont('THSarabun','','14');

$pdf->Cell(20);
$pdf->Cell(10,$line_space3,iconv("UTF-8", "TIS-620",'4.2.3  ตำรา หรือ หนังสือ '),0,1);

$pdf->Cell(30);
$pdf->Cell(200,$line_space2,iconv("UTF-8", "TIS-620",'4.2.3.1 ผลงานวิจัย...........................................................................................................................................'),0,1);

$pdf->Cell(55);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'...........................................................................................................................................'),0,1);
$pdf->Cell(55);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'...........................................................................................................................................'),0,1);
$pdf->Cell(55);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'...........................................................................................................................................'),0,1);
$pdf->Cell(55);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'...........................................................................................................................................'),0,1);

$pdf->Cell(25);
$pdf->Cell(200,$line_space3,iconv("UTF-8", "TIS-620",'ผลงานนี้เคยใช้สำหรับการพิจารณาขอกำหนดตำแหน่งผู้ช่วยศาสตราจารย์ และ/หรือตำแหน่งรองศาสตราจารย์'),0,1);

$pdf->Cell(25);
$pdf->Cell(200,$line_space3,iconv("UTF-8", "TIS-620",'มาแล้วหรือไม่'),0,1);


$pdf->Cell(30);
$pdf->Cell(10,$line_space3,iconv("UTF-8", "TIS-620",'ไม่เคยใช้'),0,1);

$pdf->Cell(30);
$pdf->Cell(10,$line_space3,iconv("UTF-8", "TIS-620",'เคยใช้ '),0,1);

$pdf->Cell(30);
$pdf->Cell(200,$line_space2,iconv("UTF-8", "TIS-620",'4.2.3.2 ผลงานวิจัย...........................................................................................................................................'),0,1);

$pdf->Cell(55);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'...........................................................................................................................................'),0,1);
$pdf->Cell(55);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'...........................................................................................................................................'),0,1);
$pdf->Cell(55);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'...........................................................................................................................................'),0,1);
$pdf->Cell(55);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'...........................................................................................................................................'),0,1);

$pdf->Cell(25);
$pdf->Cell(200,$line_space3,iconv("UTF-8", "TIS-620",'ผลงานนี้เคยใช้สำหรับการพิจารณาขอกำหนดตำแหน่งผู้ช่วยศาสตราจารย์ และ/หรือตำแหน่งรองศาสตราจารย์'),0,1);

$pdf->Cell(25);
$pdf->Cell(200,$line_space3,iconv("UTF-8", "TIS-620",'มาแล้วหรือไม่'),0,1);

$pdf->Cell(30);
$pdf->Cell(10,$line_space3,iconv("UTF-8", "TIS-620",'ไม่เคยใช้'),0,1);

$pdf->Cell(30);
$pdf->Cell(10,$line_space3,iconv("UTF-8", "TIS-620",'เคยใช้ '),0,1);
$pdf->Cell(30);
$pdf->Cell(200,$line_space3,iconv("UTF-8", "TIS-620",'4.2.3.3 ผลงานวิจัย...........................................................................................................................................'),0,1);

$pdf->Cell(55);
$pdf->Cell(10,$line_space3,iconv("UTF-8", "TIS-620",'...........................................................................................................................................'),0,1);
$pdf->Cell(55);
$pdf->Cell(10,$line_space3,iconv("UTF-8", "TIS-620",'...........................................................................................................................................'),0,1);
$pdf->Cell(55);
$pdf->Cell(10,$line_space3,iconv("UTF-8", "TIS-620",'...........................................................................................................................................'),0,1);
$pdf->Cell(55);
$pdf->Cell(10,$line_space3,iconv("UTF-8", "TIS-620",'...........................................................................................................................................'),0,1);

$pdf->Cell(25);
$pdf->Cell(200,$line_space3,iconv("UTF-8", "TIS-620",'ผลงานนี้เคยใช้สำหรับการพิจารณาขอกำหนดตำแหน่งผู้ช่วยศาสตราจารย์ และ/หรือตำแหน่งรองศาสตราจารย์'),0,1);

$pdf->Cell(25);
$pdf->Cell(200,$line_space3,iconv("UTF-8", "TIS-620",'มาแล้วหรือไม่'),0,1);

$pdf->Cell(30);
$pdf->Cell(10,$line_space3,iconv("UTF-8", "TIS-620",'ไม่เคยใช้'),0,1);

$pdf->Cell(30);
$pdf->Cell(10,$line_space3,iconv("UTF-8", "TIS-620",'เคยใช้'),0,1);

$pdf->Cell(10,$line_space3,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(20);
$pdf->Cell(200,$line_space1,iconv("UTF-8", "TIS-620",'4.2.4  เอกสารหลักฐานสำหรับการเสนอขอกำหนดตำแหน่งทางวิชาการ ตามวิธีที่ 3'),0,1);


$pdf->Cell(30);
$pdf->Cell(200,$line_space3,iconv("UTF-8", "TIS-620",'4.2.4.1  งานวิจัย'),0,1);

$pdf->Cell(40);
$pdf->Cell(200,$line_space3,iconv("UTF-8", "TIS-620",'1)   งานวิจัย เรื่อง................................................................................................................................'),0,1);

$pdf->Cell(63);
$pdf->Cell(200,$line_space3,iconv("UTF-8", "TIS-620",'................................................................................................................................'),0,1);

$pdf->Cell(45);
$pdf->Cell(200,$line_space3,iconv("UTF-8", "TIS-620",'1.1)   การเผยแพร่ในวารสารทางวิชาการในฐานข้อมูล Scopus'),0,1);

$pdf->Cell(64);
$pdf->Cell(10,$line_space3,iconv("UTF-8", "TIS-620",'Quartile 1                         Quartile 2 '),0,1);

$pdf->Cell(45);
$pdf->Cell(200,$line_space3,iconv("UTF-8", "TIS-620",'1.2)  บทบาทหน้าที่'),0,1);

$pdf->Cell(64);
$pdf->Cell(10,$line_space3,iconv("UTF-8", "TIS-620",'ผู้ประพันธ์อันดับแรก (First author)'),0,1);

$pdf->Cell(64);
$pdf->Cell(10,$line_space3,iconv("UTF-8", "TIS-620",'ผู้ประพันธ์บรรณกิจ (Corresponding author)'),0,1);


$pdf->SetXY(34,76);
$pdf->Cell(4,4,'',1,0);

$pdf->SetXY(34,83);
$pdf->Cell(4,4,'',1,0);

$pdf->SetXY(34,143);
$pdf->Cell(4,4,'',1,0);

$pdf->SetXY(34,150);
$pdf->Cell(4,4,'',1,0);

$pdf->SetXY(34,206);
$pdf->Cell(4,4,'',1,0);

$pdf->SetXY(34,213);
$pdf->Cell(4,4,'',1,0);

$pdf->SetXY(68,262);
$pdf->Cell(4,4,'',1,0);

$pdf->SetXY(109,262);
$pdf->Cell(4,4,'',1,0);

$pdf->SetXY(68,276);
$pdf->Cell(4,4,'',1,0);

$pdf->SetXY(68,283);
$pdf->Cell(4,4,'',1,0);

//4.2.3.1
if($F31!= Null ) {
$pdf->setxy(65,19);
$pdf->MultiCell(105,$line_space-1,iconv("UTF-8", "TIS-620",$F31.' '.$F32.' อยู่ในฐานข้อมูล '.$F33 .' โดยมีบทบาทหน้าที่เป็น '.$btnradio41.' และถูกอ้างอิง (Citation) จำนวน '.$F34.' ครั้ง  Journal impact factor '.$F35),0,0);
}

if($btnradio42==1){
    $pdf->Image('image/check.png',34,75,5,6);
}elseif($btnradio42==2) {
    $pdf->Image('image/check.png',34,82,5,6);
    $pdf->setxy(48,80);
    $pdf->Cell(40,$line_space,iconv("UTF-8", "TIS-620",'(เมื่อปี พ.ศ. '.$F36.' และผลการพิจารณาคุณภาพอยู่ในระดับ '.$F37.' ตามเกณฑ์ที่ ก.พ.อ. กำหนด)'),0,0);
}

//4.2.3.2
if($F38!= Null ) {
$pdf->setxy(65,87);
$pdf->MultiCell(105,$line_space-1,iconv("UTF-8", "TIS-620",$F38.' '.$F39.' อยู่ในฐานข้อมูล '.$F40 .' โดยมีบทบาทหน้าที่เป็น '.$btnradio43.' และถูกอ้างอิง (Citation) จำนวน '.$F41.' ครั้ง  Journal impact factor '.$F42),0,0);
}

if($btnradio44==1){
    $pdf->Image('image/check.png',34,141,5,6);
}elseif($btnradio44==2) {
    $pdf->Image('image/check.png',34,148.5,5,6);
    $pdf->setxy(48,148);
    $pdf->Cell(40,$line_space,iconv("UTF-8", "TIS-620",'(เมื่อปี พ.ศ. '.$F36.' และผลการพิจารณาคุณภาพอยู่ในระดับ '.$F37.' ตามเกณฑ์ที่ ก.พ.อ. กำหนด)'),0,0);
}

//4.2.3.3
if($G1!= Null ) {
$pdf->setxy(65,155);
$pdf->MultiCell(105,$line_space1+1,iconv("UTF-8", "TIS-620",$G1.' '.$G2.' อยู่ในฐานข้อมูล '.$G3 .' โดยมีบทบาทหน้าที่เป็น '.$btnradio45.' และถูกอ้างอิง (Citation) จำนวน '.$G4.' ครั้ง  Journal impact factor '.$G5),0,0);
}

if($btnradio46==1){
    $pdf->Image('image/check.png',34,200,5,6);
}elseif($btnradio46==2) {
    $pdf->Image('image/check.png',34,212,5,6);
    $pdf->setxy(48,211);
    $pdf->Cell(40,$line_space,iconv("UTF-8", "TIS-620",'(เมื่อปี พ.ศ. '.$F36.' และผลการพิจารณาคุณภาพอยู่ในระดับ '.$F37.' ตามเกณฑ์ที่ ก.พ.อ. กำหนด)'),0,0);
}


//4.2.4.1/1
$pdf->setxy(74,238);
$pdf->MultiCell(100,$line_space1+1,iconv("UTF-8", "TIS-620",$G8),0,0);

if($btnradio47==1){
    $pdf->Image('image/check.png',68,261,5,6);
}elseif($btnradio47==2) {
    $pdf->Image('image/check.png',109,261,5,6);
}
if($btnradio48==1){
    $pdf->Image('image/check.png',68,275,5,6);
}elseif($btnradio48==2) {
    $pdf->Image('image/check.png',68,282,5,6);
}


//page 9
$pdf->AddPage();
$pdf->AddFont('THSarabun','B','THSarabun Bold.php');//ธรรมดา
$pdf->AddFont('THSarabun','','THSarabun.php');//ธรรมดา

//ด้านบน
$pdf->Cell(55,$line_space1,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->setfont('THSarabun','','14');

$pdf->setxy(95,5);
$pdf->Cell(200,$line_space1,iconv("UTF-8", "TIS-620",'- 9 -'),0,1);

$pdf->setfont('THSarabun','','14');


$pdf->Cell(40);
$pdf->Cell(200,$line_space3,iconv("UTF-8", "TIS-620",'2)   งานวิจัย เรื่อง................................................................................................................................'),0,1);

$pdf->Cell(64);
$pdf->Cell(200,$line_space3,iconv("UTF-8", "TIS-620",'................................................................................................................................'),0,1);

$pdf->Cell(45);
$pdf->Cell(200,$line_space3,iconv("UTF-8", "TIS-620",'2.1)   การเผยแพร่ในวารสารทางวิชาการในฐานข้อมูล Scopus'),0,1);

$pdf->Cell(64);
$pdf->Cell(10,$line_space3,iconv("UTF-8", "TIS-620",'Quartile 1                         Quartile 2 '),0,1);

$pdf->Cell(45);
$pdf->Cell(200,$line_space3,iconv("UTF-8", "TIS-620",'2.2)  บทบาทหน้าที่'),0,1);

$pdf->Cell(64);
$pdf->Cell(10,$line_space3,iconv("UTF-8", "TIS-620",'ผู้ประพันธ์อันดับแรก (First author)'),0,1);

$pdf->Cell(64);
$pdf->Cell(10,$line_space3,iconv("UTF-8", "TIS-620",'ผู้ประพันธ์บรรณกิจ (Corresponding author)'),0,1);

$pdf->Cell(200,$line_space3,iconv("UTF-8", "TIS-620",''),0,1);

$pdf->Cell(40);
$pdf->Cell(200,$line_space3,iconv("UTF-8", "TIS-620",'3)   งานวิจัย เรื่อง................................................................................................................................'),0,1);

$pdf->Cell(64);
$pdf->Cell(200,$line_space3,iconv("UTF-8", "TIS-620",'................................................................................................................................'),0,1);

$pdf->Cell(45);
$pdf->Cell(200,$line_space3,iconv("UTF-8", "TIS-620",'3.1)   การเผยแพร่ในวารสารทางวิชาการในฐานข้อมูล Scopus'),0,1);

$pdf->Cell(64);
$pdf->Cell(10,$line_space3,iconv("UTF-8", "TIS-620",'Quartile 1                         Quartile 2 '),0,1);

$pdf->Cell(45);
$pdf->Cell(200,$line_space3,iconv("UTF-8", "TIS-620",'3.2)  บทบาทหน้าที่'),0,1);

$pdf->Cell(64);
$pdf->Cell(10,$line_space3,iconv("UTF-8", "TIS-620",'ผู้ประพันธ์อันดับแรก (First author)'),0,1);

$pdf->Cell(64);
$pdf->Cell(10,$line_space3,iconv("UTF-8", "TIS-620",'ผู้ประพันธ์บรรณกิจ (Corresponding author)'),0,1);
$pdf->Cell(10,$line_space3,iconv("UTF-8", "TIS-620",''),0,1);

$pdf->Cell(30);
$pdf->Cell(200,$line_space3,iconv("UTF-8", "TIS-620",'4.2.4.2   งานวิจัยที่ได้รับการอ้างอิงจากฐานข้อมูล Scopus จำนวน...............................เรื่อง'),0,1);

$pdf->Cell(10);
$pdf->Cell(200,$line_space3,iconv("UTF-8", "TIS-620",'ได้รับการอ้างอิง..................................รายการ พร้อมทั้งส่งเอกสารหลักฐานที่แสดงให้เห็นว่าได้รับการอ้างอิงในฐานข้อมูล'),0,1);
$pdf->Cell(10);
$pdf->Cell(200,$line_space3,iconv("UTF-8", "TIS-620",'Scopus'),0,1);

$pdf->Cell(30);
$pdf->Cell(200,$line_space3,iconv("UTF-8", "TIS-620",'4.2.4.3   ผู้ขอ มีค่า Life-time h-index (Scopus) ...............................................'),0,1);

$pdf->Cell(30);
$pdf->Cell(200,$line_space3,iconv("UTF-8", "TIS-620",'4.2.4.4   โครงการวิจัยที่ผู้ขอเป็นหัวหน้าโครงการ (Principal investigator) ได้รับทุนจากแหล่งทุน'),0,1);

$pdf->Cell(10);
$pdf->Cell(200,$line_space3,iconv("UTF-8", "TIS-620",'ภายนอกสถาบัน (Life-time) พร้อมทั้งส่งเอกสารหลักฐาน เช่น หน้าสัญญา จดหมายรับรองจากสถาบันอุดมศึกษา '),0,1);

$pdf->Cell(10);
$pdf->Cell(200,$line_space3,iconv("UTF-8", "TIS-620",'จดหมายรับรองจากแหล่งทุน'),0,1);


$pdf->Cell(35);
$pdf->Cell(200,$line_space3,iconv("UTF-8", "TIS-620",'1)      โครงการวิจัย เรื่อง..........................................................................................................................'),0,1);

$pdf->Cell(68);
$pdf->Cell(200,$line_space3,iconv("UTF-8", "TIS-620",'..........................................................................................................................'),0,1);

$pdf->Cell(44);
$pdf->Cell(200,$line_space3,iconv("UTF-8", "TIS-620",'ได้รับทุนจาก...................................................................................................................................'),0,1);
$pdf->Cell(200,$line_space3,iconv("UTF-8", "TIS-620",''),0,1);


$pdf->Cell(35);
$pdf->Cell(200,$line_space3,iconv("UTF-8", "TIS-620",'2)      โครงการวิจัย เรื่อง..........................................................................................................................'),0,1);

$pdf->Cell(68);
$pdf->Cell(200,$line_space3,iconv("UTF-8", "TIS-620",'..........................................................................................................................'),0,1);

$pdf->Cell(44);
$pdf->Cell(200,$line_space3,iconv("UTF-8", "TIS-620",'ได้รับทุนจาก...................................................................................................................................'),0,1);
$pdf->Cell(200,$line_space3,iconv("UTF-8", "TIS-620",''),0,1);

$pdf->Cell(35);
$pdf->Cell(200,$line_space3,iconv("UTF-8", "TIS-620",'3)      โครงการวิจัย เรื่อง..........................................................................................................................'),0,1);

$pdf->Cell(68);
$pdf->Cell(200,$line_space3,iconv("UTF-8", "TIS-620",'..........................................................................................................................'),0,1);

$pdf->Cell(44);
$pdf->Cell(200,$line_space3,iconv("UTF-8", "TIS-620",'ได้รับทุนจาก...................................................................................................................................'),0,1);
$pdf->Cell(200,$line_space3,iconv("UTF-8", "TIS-620",''),0,1);


$pdf->SetXY(68,34);
$pdf->Cell(4,4,'',1,0);

$pdf->SetXY(109,34);
$pdf->Cell(4,4,'',1,0);

$pdf->SetXY(68,48);
$pdf->Cell(4,4,'',1,0);

$pdf->SetXY(68,55);
$pdf->Cell(4,4,'',1,0);

$pdf->SetXY(68,90);
$pdf->Cell(4,4,'',1,0);

$pdf->SetXY(109,90);
$pdf->Cell(4,4,'',1,0);

$pdf->SetXY(68,104);
$pdf->Cell(4,4,'',1,0);

$pdf->SetXY(68,111);
$pdf->Cell(4,4,'',1,0);

//4.2.4.1/2
$pdf->setxy(74,10);
$pdf->MultiCell(100,$line_space1+1,iconv("UTF-8", "TIS-620",$G9),0,0);

if($btnradio49==1){
    $pdf->Image('image/check.png',68,33,5,6);
}elseif($btnradio49==2) {
    $pdf->Image('image/check.png',109,33,5,6);
}
if($btnradio50==1){
    $pdf->Image('image/check.png',68,47,5,6);
}elseif($btnradio50==2) {
    $pdf->Image('image/check.png',68,54,5,6);
}

//4.2.4.1/3
$pdf->setxy(74,66);
$pdf->MultiCell(100,$line_space1+1,iconv("UTF-8", "TIS-620",$G10),0,0);

if($btnradio51==1){
    $pdf->Image('image/check.png',68,89,5,6);
}elseif($btnradio51==2) {
    $pdf->Image('image/check.png',109,89,5,6);
}
if($btnradio52==1){
    $pdf->Image('image/check.png',68,103,5,6);
}elseif($btnradio52==2) {
    $pdf->Image('image/check.png',68,110,5,6);
}

$pdf->setxy(135,122);
$pdf->MultiCell(100,$line_space1+1,iconv("UTF-8", "TIS-620",$G12),0,0);

$pdf->setxy(50,129);
$pdf->MultiCell(100,$line_space1+1,iconv("UTF-8", "TIS-620",$G13),0,0);

$pdf->setxy(120,143);
$pdf->MultiCell(100,$line_space1+1,iconv("UTF-8", "TIS-620",$G14),0,0);

$pdf->setxy(79,171);
$pdf->MultiCell(100,$line_space1+1,iconv("UTF-8", "TIS-620",$G15),0,0);

$pdf->setxy(75,185);
$pdf->MultiCell(100,$line_space1+1,iconv("UTF-8", "TIS-620",$G16),0,0);

$pdf->setxy(79,199);
$pdf->MultiCell(100,$line_space1+1,iconv("UTF-8", "TIS-620",$G17),0,0);

$pdf->setxy(75,213);
$pdf->MultiCell(100,$line_space1+1,iconv("UTF-8", "TIS-620",$G18),0,0);

$pdf->setxy(79,227);
$pdf->MultiCell(100,$line_space1+1,iconv("UTF-8", "TIS-620",$G19),0,0);

$pdf->setxy(75,241);
$pdf->MultiCell(100,$line_space1+1,iconv("UTF-8", "TIS-620",$G20),0,0);

}
if($btnradio2 == 3) {
// 4.3
//page 10
$pdf->AddPage();
$pdf->AddFont('THSarabun','B','THSarabun Bold.php');//ธรรมดา
$pdf->AddFont('THSarabun','','THSarabun.php');//ธรรมดา

//ด้านบน
$pdf->Cell(55,$line_space1,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->setfont('THSarabun','','14');

$pdf->setxy(95,5);
$pdf->Cell(200,$line_space1,iconv("UTF-8", "TIS-620",'- 10 -'),0,1);

$pdf->setfont('THSarabun','','14');


$pdf->Cell(15);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'4.3  ผลงานทางวิชาการที่เสนอเพื่อประกอบการพิจารณาตำแหน่ง ศาสตราจารย์'),0,1);

$pdf->Cell(20);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'4.3.1  ผลงานวิจัย'),0,1);

$pdf->Cell(30);
$pdf->Cell(200,$line_space,iconv("UTF-8", "TIS-620",'4.3.1.1..........................................................................................................................................................'),0,1);

$pdf->Cell(39);
$pdf->Cell(200,$line_space,iconv("UTF-8", "TIS-620",'..........................................................................................................................................................'),0,1);
$pdf->Cell(39);
$pdf->Cell(200,$line_space,iconv("UTF-8", "TIS-620",'..........................................................................................................................................................'),0,1);
$pdf->Cell(39);
$pdf->Cell(200,$line_space,iconv("UTF-8", "TIS-620",'..........................................................................................................................................................'),0,1);
$pdf->Cell(39);
$pdf->Cell(200,$line_space,iconv("UTF-8", "TIS-620",'..........................................................................................................................................................'),0,1);

$pdf->Cell(25);
$pdf->Cell(200,$line_space2,iconv("UTF-8", "TIS-620",'ผลงานวิจัยนี้เคยใช้สำหรับการพิจารณาขอกำหนดตำแหน่งผู้ช่วยศาสตราจารย์ และ/หรือ ตำแหน่งรองศาสตราจารย์'),0,1);
$pdf->Cell(25);
$pdf->Cell(200,$line_space2,iconv("UTF-8", "TIS-620",'และ/หรือตำแหน่งศาสตราจารย์มาแล้วหรือไม่'),0,1);

$pdf->Cell(30);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'ไม่เคยใช้'),0,1);

$pdf->Cell(30);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'เคยใช้'),0,1);

$pdf->Cell(200,$line_space1-2,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(30);
$pdf->Cell(200,$line_space2,iconv("UTF-8", "TIS-620",'4.3.1.2..........................................................................................................................................................'),0,1);

$pdf->Cell(39);
$pdf->Cell(200,$line_space,iconv("UTF-8", "TIS-620",'...........................................................................................................................................................'),0,1);
$pdf->Cell(39);
$pdf->Cell(200,$line_space,iconv("UTF-8", "TIS-620",'...........................................................................................................................................................'),0,1);
$pdf->Cell(39);
$pdf->Cell(200,$line_space,iconv("UTF-8", "TIS-620",'...........................................................................................................................................................'),0,1);
$pdf->Cell(39);
$pdf->Cell(200,$line_space,iconv("UTF-8", "TIS-620",'...........................................................................................................................................................'),0,1);

$pdf->Cell(25);
$pdf->Cell(200,$line_space2,iconv("UTF-8", "TIS-620",'ผลงานวิจัยนี้เคยใช้สำหรับการพิจารณาขอกำหนดตำแหน่งผู้ช่วยศาสตราจารย์ และ/หรือ ตำแหน่งรองศาสตราจารย์'),0,1);
$pdf->Cell(25);
$pdf->Cell(200,$line_space2,iconv("UTF-8", "TIS-620",'และ/หรือตำแหน่งศาสตราจารย์มาแล้วหรือไม่'),0,1);

$pdf->Cell(30);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'ไม่เคยใช้ '),0,1);

$pdf->Cell(30);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'เคยใช้ '),0,1);

$pdf->Cell(200,$line_space1-2,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(30);
$pdf->Cell(200,$line_space2,iconv("UTF-8", "TIS-620",'4.3.1.3..........................................................................................................................................................'),0,1);

$pdf->Cell(39);
$pdf->Cell(200,$line_space,iconv("UTF-8", "TIS-620",'..........................................................................................................................................................'),0,1);
$pdf->Cell(39);
$pdf->Cell(200,$line_space,iconv("UTF-8", "TIS-620",'..........................................................................................................................................................'),0,1);
$pdf->Cell(39);
$pdf->Cell(200,$line_space,iconv("UTF-8", "TIS-620",'..........................................................................................................................................................'),0,1);
$pdf->Cell(39);
$pdf->Cell(200,$line_space,iconv("UTF-8", "TIS-620",'..........................................................................................................................................................'),0,1);


$pdf->Cell(25);
$pdf->Cell(200,$line_space2,iconv("UTF-8", "TIS-620",'ผลงานวิจัยนี้เคยใช้สำหรับการพิจารณาขอกำหนดตำแหน่งผู้ช่วยศาสตราจารย์ และ/หรือ ตำแหน่งรองศาสตราจารย์ '),0,1);
$pdf->Cell(25);
$pdf->Cell(200,$line_space2,iconv("UTF-8", "TIS-620",'และ/หรือตำแหน่งศาสตราจารย์มาแล้วหรือไม่'),0,1);

$pdf->Cell(30);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'ไม่เคยใช้'),0,1);

$pdf->Cell(30);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'เคยใช้ '),0,1);


$pdf->SetXY(34,90);
$pdf->Cell(4,4,'',1,0);

$pdf->SetXY(34,98);
$pdf->Cell(4,4,'',1,0);

$pdf->SetXY(34,170);
$pdf->Cell(4,4,'',1,0);

$pdf->SetXY(34,178);
$pdf->Cell(4,4,'',1,0);

$pdf->SetXY(34,250);
$pdf->Cell(4,4,'',1,0);

$pdf->SetXY(34,258);
$pdf->Cell(4,4,'',1,0);

//4.3.1.1
if($H1!= Null ) {
$pdf->setxy(52,26);
$pdf->MultiCell(115,$line_space,iconv("UTF-8", "TIS-620",$H1.' '.$H2.' อยู่ในฐานข้อมูล '.$H3 .' โดยมีบทบาทหน้าที่เป็น '.$btnradio53.' และถูกอ้างอิง (Citation) จำนวน '.$H4.' ครั้ง  Journal impact factor '.$H5),0,0);
}

if($btnradio54==1){
    $pdf->Image('image/check.png',34,89,5,6);
}elseif($btnradio54==2) {
    $pdf->Image('image/check.png',34,97,5,6);
    $pdf->setxy(48,95.5);
    $pdf->Cell(40,$line_space,iconv("UTF-8", "TIS-620",'(เมื่อปี พ.ศ. '.$H6.' และผลการพิจารณาคุณภาพอยู่ในระดับ '.$H7.' ตามเกณฑ์ที่ ก.พ.อ. กำหนด)'),0,0);
}

//4.3.1.2
if($H8!= Null ) {
$pdf->setxy(52,107);
$pdf->MultiCell(115,$line_space-1,iconv("UTF-8", "TIS-620",$H8.' '.$H9.' อยู่ในฐานข้อมูล '.$H10 .' โดยมีบทบาทหน้าที่เป็น '.$btnradio56.' และถูกอ้างอิง (Citation) จำนวน '.$H11.' ครั้ง  Journal impact factor '.$H12),0,0);
}

if($btnradio57==1){
    $pdf->Image('image/check.png',34,168.5,5,6);
}elseif($btnradio57==2) {
    $pdf->Image('image/check.png',34,176.5,5,6);
    $pdf->setxy(48,175.5);
    $pdf->Cell(40,$line_space,iconv("UTF-8", "TIS-620",'(เมื่อปี พ.ศ. '.$H13.' และผลการพิจารณาคุณภาพอยู่ในระดับ '.$H14.' ตามเกณฑ์ที่ ก.พ.อ. กำหนด)'),0,0);
}

//4.3.1.3
if($H15!= Null ) {
$pdf->setxy(52,187);
$pdf->MultiCell(115,$line_space-1,iconv("UTF-8", "TIS-620",$H15.' '.$H16.' อยู่ในฐานข้อมูล '.$H29 .' โดยมีบทบาทหน้าที่เป็น '.$btnradio58.' และถูกอ้างอิง (Citation) จำนวน '.$H17.' ครั้ง  Journal impact factor '.$H18),0,0);
}

if($btnradio59==1){
    $pdf->Image('image/check.png',34,249,5,6);
}elseif($btnradio59==2) {
    $pdf->Image('image/check.png',34,257,5,6);
    $pdf->setxy(48,255.5);
    $pdf->Cell(40,$line_space,iconv("UTF-8", "TIS-620",'(เมื่อปี พ.ศ. '.$H19.' และผลการพิจารณาคุณภาพอยู่ในระดับ '.$H20.' ตามเกณฑ์ที่ ก.พ.อ. กำหนด)'),0,0);
}








//page 11
$pdf->AddPage();
$pdf->AddFont('THSarabun','B','THSarabun Bold.php');//ธรรมดา
$pdf->AddFont('THSarabun','','THSarabun.php');//ธรรมดา

//ด้านบน
$pdf->Cell(55,$line_space1,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->setfont('THSarabun','','14');

$pdf->setxy(95,5);
$pdf->Cell(200,$line_space1,iconv("UTF-8", "TIS-620",'- 11 -'),0,1);
$pdf->Cell(200,$line_space1,iconv("UTF-8", "TIS-620",''),0,1);

$pdf->Cell(20);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'4.3.2   ผลงานทางวิชาการในลักษณะอื่น'),0,1);

$pdf->Cell(30);
$pdf->Cell(200,$line_space,iconv("UTF-8", "TIS-620",'4.3.2.1..........................................................................................................................................................'),0,1);

$pdf->Cell(39);
$pdf->Cell(200,$line_space,iconv("UTF-8", "TIS-620",'..........................................................................................................................................................'),0,1);
$pdf->Cell(39);
$pdf->Cell(200,$line_space,iconv("UTF-8", "TIS-620",'..........................................................................................................................................................'),0,1);
$pdf->Cell(39);
$pdf->Cell(200,$line_space,iconv("UTF-8", "TIS-620",'..........................................................................................................................................................'),0,1);
$pdf->Cell(39);
$pdf->Cell(200,$line_space,iconv("UTF-8", "TIS-620",'..........................................................................................................................................................'),0,1);

$pdf->Cell(25);
$pdf->Cell(200,$line_space2,iconv("UTF-8", "TIS-620",'ผลงานทางวิชาการในลักษณะอื่นนี้เคยใช้สำหรับการพิจารณาขอกำหนดตำแหน่งผู้ช่วยศาสตราจารย์ และ/หรือ'),0,1);
$pdf->Cell(25);
$pdf->Cell(200,$line_space2,iconv("UTF-8", "TIS-620",'ตำแหน่งรองศาสตราจารย์ และ/หรือตำแหน่งศาสตราจารย์มาแล้วหรือไม่'),0,1);

$pdf->Cell(30);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'ไม่เคยใช้ '),0,1);

$pdf->Cell(30);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'เคยใช้ '),0,1);

$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(30);
$pdf->Cell(200,$line_space,iconv("UTF-8", "TIS-620",'4.3.2.2..........................................................................................................................................................'),0,1);

$pdf->Cell(39);
$pdf->Cell(200,$line_space,iconv("UTF-8", "TIS-620",'..........................................................................................................................................................'),0,1);
$pdf->Cell(39);
$pdf->Cell(200,$line_space,iconv("UTF-8", "TIS-620",'..........................................................................................................................................................'),0,1);
$pdf->Cell(39);
$pdf->Cell(200,$line_space,iconv("UTF-8", "TIS-620",'..........................................................................................................................................................'),0,1);
$pdf->Cell(39);
$pdf->Cell(200,$line_space,iconv("UTF-8", "TIS-620",'..........................................................................................................................................................'),0,1);

$pdf->Cell(25);
$pdf->Cell(200,$line_space2,iconv("UTF-8", "TIS-620",'ผลงานทางวิชาการในลักษณะอื่นนี้เคยใช้สำหรับการพิจารณาขอกำหนดตำแหน่ง ผู้ช่วยศาสตราจารย์ และ/หรือ'),0,1);
$pdf->Cell(25);
$pdf->Cell(200,$line_space2,iconv("UTF-8", "TIS-620",'ตำแหน่งรองศาสตราจารย์ และ/หรือตำแหน่งศาสตราจารย์มาแล้วหรือไม่'),0,1);

$pdf->Cell(30);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'ไม่เคยใช้'),0,1);

$pdf->Cell(30);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'เคยใช้ '),0,1);

$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(30);
$pdf->Cell(200,$line_space,iconv("UTF-8", "TIS-620",'4.3.2.3..........................................................................................................................................................'),0,1);

$pdf->Cell(42);
$pdf->Cell(200,$line_space,iconv("UTF-8", "TIS-620",'..........................................................................................................................................................'),0,1);
$pdf->Cell(42);
$pdf->Cell(200,$line_space,iconv("UTF-8", "TIS-620",'..........................................................................................................................................................'),0,1);
$pdf->Cell(42);
$pdf->Cell(200,$line_space,iconv("UTF-8", "TIS-620",'..........................................................................................................................................................'),0,1);
$pdf->Cell(42);
$pdf->Cell(200,$line_space,iconv("UTF-8", "TIS-620",'..........................................................................................................................................................'),0,1);

$pdf->Cell(25);
$pdf->Cell(200,$line_space2,iconv("UTF-8", "TIS-620",'ผลงานทางวิชาการในลักษณะอื่นนี้เคยใช้สำหรับการพิจารณาขอกำหนดตำแหน่งผู้ช่วยศาสตราจารย์ และ/หรือ'),0,1);
$pdf->Cell(25);
$pdf->Cell(200,$line_space2,iconv("UTF-8", "TIS-620",'ตำแหน่งรองศาสตราจารย์ และ/หรือตำแหน่งศาสตราจารย์มาแล้วหรือไม่'),0,1);

$pdf->Cell(30);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'ไม่เคยใช้'),0,1);

$pdf->Cell(30);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'เคยใช้ '),0,1);

$pdf->SetXY(34,88);
$pdf->Cell(4,4,'',1,0);

$pdf->SetXY(34,96);
$pdf->Cell(4,4,'',1,0);

$pdf->SetXY(34,173);
$pdf->Cell(4,4,'',1,0);

$pdf->SetXY(34,181);
$pdf->Cell(4,4,'',1,0);

$pdf->SetXY(34,258);
$pdf->Cell(4,4,'',1,0);

$pdf->SetXY(34,266);
$pdf->Cell(4,4,'',1,0);


//4.3.2.
$pdf->setxy(82,16.5);
$pdf->Cell(40,$line_space,iconv("UTF-8", "TIS-620",'('.$op432.')'),0,0);

if($I1!= Null ) {
$pdf->setxy(52,24);
$pdf->MultiCell(115,$line_space2+1,iconv("UTF-8", "TIS-620",$I1.' '.$I2.' อยู่ในฐานข้อมูล '.$I3 .' โดยมีบทบาทหน้าที่เป็น '.$btnradio60.' และถูกอ้างอิง (Citation) จำนวน '.$I4.' ครั้ง  Journal impact factor '.$I5),0,0);
}

if($btnradio61==1){
    $pdf->Image('image/check.png',34,86,5,6);
}elseif($btnradio61==2) {
    $pdf->Image('image/check.png',34,94,5,6);
    $pdf->setxy(48,93.5);
    $pdf->Cell(40,$line_space,iconv("UTF-8", "TIS-620",'(เมื่อปี พ.ศ. '.$I6.' และผลการพิจารณาคุณภาพอยู่ในระดับ '.$I7.' ตามเกณฑ์ที่ ก.พ.อ. กำหนด)'),0,0);
}

//4.3.2.2
if($I8!= Null ) {
$pdf->setxy(52,109);
$pdf->MultiCell(115,$line_space2+1,iconv("UTF-8", "TIS-620",$I8.' '.$I9.' อยู่ในฐานข้อมูล '.$I10 .' โดยมีบทบาทหน้าที่เป็น '.$btnradio62.' และถูกอ้างอิง (Citation) จำนวน '.$I11.' ครั้ง  Journal impact factor '.$I12),0,0);
}

if($btnradio63==1){
    $pdf->Image('image/check.png',34,171.5,5,6);
}elseif($btnradio63==2) {
    $pdf->Image('image/check.png',34,179.5,5,6);
    $pdf->setxy(48,178.5);
    $pdf->Cell(40,$line_space,iconv("UTF-8", "TIS-620",'(เมื่อปี พ.ศ. '.$I13.' และผลการพิจารณาคุณภาพอยู่ในระดับ '.$I14.' ตามเกณฑ์ที่ ก.พ.อ. กำหนด)'),0,0);
}

//4.3.2.3
if($I15!= Null ) {
$pdf->setxy(52,194);
$pdf->MultiCell(115,$line_space2+1,iconv("UTF-8", "TIS-620",$I15.' '.$I16.' อยู่ในฐานข้อมูล '.$I29 .' โดยมีบทบาทหน้าที่เป็น '.$btnradio64.' และถูกอ้างอิง (Citation) จำนวน '.$I17.' ครั้ง  Journal impact factor '.$I18),0,0);
}

if($btnradio65==1){
    $pdf->Image('image/check.png',34,256.5,5,6);
}elseif($btnradio65==2) {
    $pdf->Image('image/check.png',34,264.5,5,6);
    $pdf->setxy(48,263.5);
    $pdf->Cell(40,$line_space,iconv("UTF-8", "TIS-620",'(เมื่อปี พ.ศ. '.$I19.' และผลการพิจารณาคุณภาพอยู่ในระดับ '.$I20.' ตามเกณฑ์ที่ ก.พ.อ. กำหนด)'),0,0);
}




//page 12
$pdf->AddPage();
$pdf->AddFont('THSarabun','B','THSarabun Bold.php');//ธรรมดา
$pdf->AddFont('THSarabun','','THSarabun.php');//ธรรมดา

//ด้านบน
$pdf->Cell(55,$line_space1,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->setfont('THSarabun','','14');

$pdf->setxy(95,5);
$pdf->Cell(200,$line_space1,iconv("UTF-8", "TIS-620",'- 12 -'),0,1);
$pdf->Cell(200,$line_space1,iconv("UTF-8", "TIS-620",''),0,1);

$pdf->setfont('THSarabun','','14');

$pdf->Cell(15);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'4.3.3  ตำรา หรือ หนังสือ'),0,1);

$pdf->Cell(30);
$pdf->Cell(200,$line_space,iconv("UTF-8", "TIS-620",'4.3.3.1..........................................................................................................................................................'),0,1);

$pdf->Cell(39);
$pdf->Cell(200,$line_space,iconv("UTF-8", "TIS-620",'..........................................................................................................................................................'),0,1);
$pdf->Cell(39);
$pdf->Cell(200,$line_space,iconv("UTF-8", "TIS-620",'..........................................................................................................................................................'),0,1);
$pdf->Cell(39);
$pdf->Cell(200,$line_space,iconv("UTF-8", "TIS-620",'..........................................................................................................................................................'),0,1);
$pdf->Cell(39);
$pdf->Cell(200,$line_space,iconv("UTF-8", "TIS-620",'..........................................................................................................................................................'),0,1);



$pdf->Cell(25);
$pdf->Cell(200,$line_space2,iconv("UTF-8", "TIS-620",'ผลงานนี้เคยใช้สำหรับการพิจารณาขอกำหนดตำแหน่งผู้ช่วยศาสตราจารย์ และ/หรือตำแหน่งรองศาสตราจารย์ '),0,1);
$pdf->Cell(25);
$pdf->Cell(200,$line_space2,iconv("UTF-8", "TIS-620",'และ/หรือตำแหน่งศาสตราจารย์มาแล้วหรือไม่'),0,1);

$pdf->Cell(30);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'ไม่เคยใช้'),0,1);

$pdf->Cell(30);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'เคยใช้ '),0,1);

$pdf->Cell(30);
$pdf->Cell(200,$line_space2,iconv("UTF-8", "TIS-620",'4.3.3.2..........................................................................................................................................................'),0,1);

$pdf->Cell(39);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'..........................................................................................................................................................'),0,1);
$pdf->Cell(39);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'..........................................................................................................................................................'),0,1);
$pdf->Cell(39);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'..........................................................................................................................................................'),0,1);
$pdf->Cell(39);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'..........................................................................................................................................................'),0,1);

$pdf->Cell(25);
$pdf->Cell(200,$line_space2,iconv("UTF-8", "TIS-620",'ผลงานนี้เคยใช้สำหรับการพิจารณาขอกำหนดตำแหน่งผู้ช่วยศาสตราจารย์ และ/หรือตำแหน่งรองศาสตราจารย์'),0,1);
$pdf->Cell(25);
$pdf->Cell(200,$line_space2,iconv("UTF-8", "TIS-620",'และ/หรือตำแหน่งศาสตราจารย์มาแล้วหรือไม่'),0,1);

$pdf->Cell(30);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'ไม่เคยใช้'),0,1);

$pdf->Cell(30);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'เคยใช้ '),0,1);

$pdf->Cell(10,$line_space2-2,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(30);
$pdf->Cell(200,$line_space2,iconv("UTF-8", "TIS-620",'4.3.3.3..........................................................................................................................................................'),0,1);

$pdf->Cell(39);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'..........................................................................................................................................................'),0,1);
$pdf->Cell(39);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'..........................................................................................................................................................'),0,1);
$pdf->Cell(39);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'..........................................................................................................................................................'),0,1);
$pdf->Cell(39);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'..........................................................................................................................................................'),0,1);

$pdf->Cell(15);
$pdf->Cell(200,$line_space2,iconv("UTF-8", "TIS-620",'ผลงานนี้เคยใช้สำหรับการพิจารณาขอกำหนดตำแหน่งผู้ช่วยศาสตราจารย์ และ/หรือตำแหน่งรองศาสตราจารย์ '),0,1);
$pdf->Cell(15);
$pdf->Cell(200,$line_space2,iconv("UTF-8", "TIS-620",'และ/หรือตำแหน่งศาสตราจารย์มาแล้วหรือไม่'),0,1);

$pdf->Cell(30);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'ไม่เคยใช้'),0,1);

$pdf->Cell(30);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'เคยใช้'),0,1);

$pdf->SetXY(34,88);
$pdf->Cell(4,4,'',1,0);

$pdf->SetXY(34,96);
$pdf->Cell(4,4,'',1,0);

$pdf->SetXY(34,160);
$pdf->Cell(4,4,'',1,0);

$pdf->SetXY(34,168);
$pdf->Cell(4,4,'',1,0);

$pdf->SetXY(34,238);
$pdf->Cell(4,4,'',1,0);

$pdf->SetXY(34,246);
$pdf->Cell(4,4,'',1,0);

//4.3.1.1
if($I21!= Null ) {
    $pdf->setxy(52,24);
    $pdf->MultiCell(115,$line_space2+1,iconv("UTF-8", "TIS-620",$I21.' '.$I22.' อยู่ในฐานข้อมูล '.$I23 .' โดยมีบทบาทหน้าที่เป็น '.$btnradio66.' และถูกอ้างอิง (Citation) จำนวน '.$I24.' ครั้ง  Journal impact factor '.$I25),0,0);
    }
    
    if($btnradio67==1){
        $pdf->Image('image/check.png',34,86.5,5,6);
    }elseif($btnradio67==2) {
        $pdf->Image('image/check.png',34,94.5,5,6);
        $pdf->setxy(48,93.5);
        $pdf->Cell(40,$line_space,iconv("UTF-8", "TIS-620",'(เมื่อปี พ.ศ. '.$I26.' และผลการพิจารณาคุณภาพอยู่ในระดับ '.$I27.' ตามเกณฑ์ที่ ก.พ.อ. กำหนด)'),0,0);
    }

//4.3.1.2
if($I28!= Null ) {
$pdf->setxy(52,101);
$pdf->MultiCell(115,$line_space2,iconv("UTF-8", "TIS-620",$I28.' '.$I29.' อยู่ในฐานข้อมูล '.$I30 .' โดยมีบทบาทหน้าที่เป็น '.$btnradio68.' และถูกอ้างอิง (Citation) จำนวน '.$I31.' ครั้ง  Journal impact factor '.$I32),0,0);
}

if($btnradio69==1){
    $pdf->Image('image/check.png',34,159,5,6);
}elseif($btnradio69==2) {
    $pdf->Image('image/check.png',34,167,5,6);
    $pdf->setxy(48,166);
    $pdf->Cell(40,$line_space,iconv("UTF-8", "TIS-620",'(เมื่อปี พ.ศ. '.$I33.' และผลการพิจารณาคุณภาพอยู่ในระดับ '.$I34.' ตามเกณฑ์ที่ ก.พ.อ. กำหนด)'),0,0);
}


// //4.3.1.3
if($J1!= Null ) {
    $pdf->setxy(52,179);
    $pdf->MultiCell(115,$line_space2,iconv("UTF-8", "TIS-620",$J1.' '.$J2.' อยู่ในฐานข้อมูล '.$J3 .' โดยมีบทบาทหน้าที่เป็น '.$btnradio70.' และถูกอ้างอิง (Citation) จำนวน '.$J4.' ครั้ง  Journal impact factor '.$J5),0,0);
    }
    
    if($btnradio71==1){
        $pdf->Image('image/check.png',34,237,5,6);
    }elseif($btnradio71==2) {
        $pdf->Image('image/check.png',34,245,5,6);
        $pdf->setxy(48,243.5);
        $pdf->Cell(40,$line_space,iconv("UTF-8", "TIS-620",'(เมื่อปี พ.ศ. '.$J6.' และผลการพิจารณาคุณภาพอยู่ในระดับ '.$J7.' ตามเกณฑ์ที่ ก.พ.อ. กำหนด)'),0,0);
    }





//page 13
$pdf->AddPage();
$pdf->AddFont('THSarabun','B','THSarabun Bold.php');//ธรรมดา
$pdf->AddFont('THSarabun','','THSarabun.php');//ธรรมดา

//ด้านบน
$pdf->Cell(55,$line_space1,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->setfont('THSarabun','','14');

$pdf->setxy(95,5);
$pdf->Cell(200,$line_space1,iconv("UTF-8", "TIS-620",'- 13 -'),0,1);
$pdf->Cell(200,$line_space1,iconv("UTF-8", "TIS-620",''),0,1);

$pdf->setfont('THSarabun','','14');

$pdf->Cell(20);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'4.3.4   เอกสารหลักฐานสำหรับการเสนอขอกำหนดตำแหน่งทางวิชาการ ตามวิธีที่ 3'),0,1);

$pdf->Cell(30);
$pdf->Cell(200,$line_space3,iconv("UTF-8", "TIS-620",'4.3.4.1  งานวิจัย'),0,1);

$pdf->Cell(40);
$pdf->Cell(200,$line_space3,iconv("UTF-8", "TIS-620",'1)   งานวิจัย เรื่อง................................................................................................................................'),0,1);

$pdf->Cell(63);
$pdf->Cell(200,$line_space3,iconv("UTF-8", "TIS-620",'................................................................................................................................'),0,1);

$pdf->Cell(45);
$pdf->Cell(200,$line_space3,iconv("UTF-8", "TIS-620",'1.1)   การเผยแพร่ในวารสารทางวิชาการในฐานข้อมูล Scopus'),0,1);

$pdf->Cell(64);
$pdf->Cell(10,$line_space3,iconv("UTF-8", "TIS-620",'Quartile 1                         Quartile 2 '),0,1);

$pdf->Cell(45);
$pdf->Cell(200,$line_space3,iconv("UTF-8", "TIS-620",'1.2)  บทบาทหน้าที่'),0,1);

$pdf->Cell(64);
$pdf->Cell(10,$line_space3,iconv("UTF-8", "TIS-620",'ผู้ประพันธ์อันดับแรก (First author)'),0,1);

$pdf->Cell(64);
$pdf->Cell(10,$line_space3,iconv("UTF-8", "TIS-620",'ผู้ประพันธ์บรรณกิจ (Corresponding author)'),0,1);
$pdf->Cell(200,$line_space1,iconv("UTF-8", "TIS-620",''),0,1);

$pdf->Cell(40);
$pdf->Cell(200,$line_space3,iconv("UTF-8", "TIS-620",'2)   งานวิจัย เรื่อง................................................................................................................................'),0,1);

$pdf->Cell(63);
$pdf->Cell(200,$line_space3,iconv("UTF-8", "TIS-620",'................................................................................................................................'),0,1);

$pdf->Cell(45);
$pdf->Cell(200,$line_space3,iconv("UTF-8", "TIS-620",'2.1)   การเผยแพร่ในวารสารทางวิชาการในฐานข้อมูล Scopus'),0,1);

$pdf->Cell(64);
$pdf->Cell(10,$line_space3,iconv("UTF-8", "TIS-620",'Quartile 1                         Quartile 2 '),0,1);

$pdf->Cell(45);
$pdf->Cell(200,$line_space3,iconv("UTF-8", "TIS-620",'2.2)  บทบาทหน้าที่'),0,1);

$pdf->Cell(64);
$pdf->Cell(10,$line_space3,iconv("UTF-8", "TIS-620",'ผู้ประพันธ์อันดับแรก (First author)'),0,1);

$pdf->Cell(64);
$pdf->Cell(10,$line_space3,iconv("UTF-8", "TIS-620",'ผู้ประพันธ์บรรณกิจ (Corresponding author)'),0,1);
$pdf->Cell(200,$line_space1,iconv("UTF-8", "TIS-620",''),0,1);

$pdf->Cell(40);
$pdf->Cell(200,$line_space3,iconv("UTF-8", "TIS-620",'3)   งานวิจัย เรื่อง................................................................................................................................'),0,1);

$pdf->Cell(63);
$pdf->Cell(200,$line_space3,iconv("UTF-8", "TIS-620",'................................................................................................................................'),0,1);

$pdf->Cell(45);
$pdf->Cell(200,$line_space3,iconv("UTF-8", "TIS-620",'3.1)   การเผยแพร่ในวารสารทางวิชาการในฐานข้อมูล Scopus'),0,1);

$pdf->Cell(64);
$pdf->Cell(10,$line_space3,iconv("UTF-8", "TIS-620",'Quartile 1                         Quartile 2 '),0,1);

$pdf->Cell(45);
$pdf->Cell(200,$line_space3,iconv("UTF-8", "TIS-620",'3.2)  บทบาทหน้าที่'),0,1);

$pdf->Cell(64);
$pdf->Cell(10,$line_space3,iconv("UTF-8", "TIS-620",'ผู้ประพันธ์อันดับแรก (First author)'),0,1);

$pdf->Cell(64);
$pdf->Cell(10,$line_space3,iconv("UTF-8", "TIS-620",'ผู้ประพันธ์บรรณกิจ (Corresponding author)'),0,1);
$pdf->Cell(10,$line_space3,iconv("UTF-8", "TIS-620",''),0,1);

$pdf->Cell(30);
$pdf->Cell(200,$line_space3,iconv("UTF-8", "TIS-620",'4.3.4.2   งานวิจัยที่ได้รับการอ้างอิงจากฐานข้อมูล Scopus จำนวน...................เรื่อง'),0,1);

$pdf->Cell(10);
$pdf->Cell(200,$line_space3,iconv("UTF-8", "TIS-620",'ได้รับการอ้างอิง.........................รายการ พร้อมทั้งส่งเอกสารหลักฐานที่แสดงให้เห็นว่าได้รับการอ้างอิงในฐานข้อมูล'),0,1);

$pdf->Cell(10);
$pdf->Cell(200,$line_space3,iconv("UTF-8", "TIS-620",'Scopus'),0,1);

$pdf->Cell(30);
$pdf->Cell(200,$line_space3,iconv("UTF-8", "TIS-620",'4.3.4.3   ผู้ขอ มีค่า Life-time h-index (Scopus) ..............................'),0,1);

$pdf->Cell(30);
$pdf->Cell(200,$line_space3,iconv("UTF-8", "TIS-620",'4.3.4.4   โครงการวิจัยที่ผู้ขอเป็นหัวหน้าโครงการ (Principal investigator) ได้รับทุนจากแหล่งทุน'),0,1);

$pdf->Cell(10);
$pdf->Cell(200,$line_space3,iconv("UTF-8", "TIS-620",'ภายนอกสถาบัน (Life-time) พร้อมทั้งส่งเอกสารหลักฐาน เช่น หน้าสัญญา จดหมายรับรองจากสถาบันอุดมศึกษา '),0,1);

$pdf->Cell(10);
$pdf->Cell(200,$line_space3,iconv("UTF-8", "TIS-620",'จดหมายรับรองจากแหล่งทุน'),0,1);

$pdf->Cell(35);
$pdf->Cell(200,$line_space3,iconv("UTF-8", "TIS-620",'1)      โครงการวิจัย เรื่อง..........................................................................................................................'),0,1);

$pdf->Cell(68);
$pdf->Cell(200,$line_space3,iconv("UTF-8", "TIS-620",'..........................................................................................................................'),0,1);

$pdf->Cell(44);
$pdf->Cell(200,$line_space3,iconv("UTF-8", "TIS-620",'ได้รับทุนจาก...................................................................................................................................'),0,1);
$pdf->Cell(200,$line_space3,iconv("UTF-8", "TIS-620",''),0,1);



$pdf->SetXY(68,55);
$pdf->Cell(4,4,'',1,0);

$pdf->SetXY(109,55);
$pdf->Cell(4,4,'',1,0);

$pdf->SetXY(68,69);
$pdf->Cell(4,4,'',1,0);

$pdf->SetXY(68,76);
$pdf->Cell(4,4,'',1,0);

$pdf->SetXY(68,110);
$pdf->Cell(4,4,'',1,0);

$pdf->SetXY(109,110);
$pdf->Cell(4,4,'',1,0);

$pdf->SetXY(68,124);
$pdf->Cell(4,4,'',1,0);

$pdf->SetXY(68,131);
$pdf->Cell(4,4,'',1,0);

$pdf->SetXY(68,164);
$pdf->Cell(4,4,'',1,0);

$pdf->SetXY(109,164);
$pdf->Cell(4,4,'',1,0);

$pdf->SetXY(68,178);
$pdf->Cell(4,4,'',1,0);

$pdf->SetXY(68,185);
$pdf->Cell(4,4,'',1,0);

//4.3.4.1/1
$pdf->setxy(74,31);
$pdf->MultiCell(105,$line_space1+1,iconv("UTF-8", "TIS-620",$J8),0,0);

if($btnradio72==1){
    $pdf->Image('image/check.png',68,54,5,6);
}elseif($btnradio72==2) {
    $pdf->Image('image/check.png',109,54,5,6);
}
if($btnradio73==1){
    $pdf->Image('image/check.png',68,68,5,6);
}elseif($btnradio73==2) {
    $pdf->Image('image/check.png',68,75,5,6);
}

//4.3.4.1/2
$pdf->setxy(74,86);
$pdf->MultiCell(105,$line_space1+1,iconv("UTF-8", "TIS-620",$J9),0,0);

if($btnradio74==1){
    $pdf->Image('image/check.png',68,109,5,6);
}elseif($btnradio74==2) {
    $pdf->Image('image/check.png',109,109,5,6);
}
if($btnradio84==1){
    $pdf->Image('image/check.png',68,123,5,6);
}elseif($btnradio84==2) {
    $pdf->Image('image/check.png',68,130,5,6);
}

//4.3.4.1/3
$pdf->setxy(74,141);
$pdf->MultiCell(105,$line_space1+1,iconv("UTF-8", "TIS-620",$J10),0,0);

if($btnradio75==1){
    $pdf->Image('image/check.png',68,163,5,6);
}elseif($btnradio75==2) {
    $pdf->Image('image/check.png',109,163,5,6);
}
if($btnradio76==1){
    $pdf->Image('image/check.png',68,177,5,6);
}elseif($btnradio76==2) {
    $pdf->Image('image/check.png',68,184,5,6);
}


$pdf->setxy(130,197);
$pdf->MultiCell(100,$line_space1+1,iconv("UTF-8", "TIS-620",$J12),0,0);

$pdf->setxy(46,204);
$pdf->MultiCell(100,$line_space1+1,iconv("UTF-8", "TIS-620",$J13),0,0);

$pdf->setxy(112,218);
$pdf->MultiCell(100,$line_space1+1,iconv("UTF-8", "TIS-620",$J14),0,0);

$pdf->setxy(79,246);
$pdf->MultiCell(100,$line_space1+1,iconv("UTF-8", "TIS-620",$J15),0,0);

$pdf->setxy(75,260);
$pdf->MultiCell(100,$line_space1+1,iconv("UTF-8", "TIS-620",$J16),0,0);







//page 14
$pdf->AddPage();
$pdf->AddFont('THSarabun','B','THSarabun Bold.php');//ธรรมดา
$pdf->AddFont('THSarabun','','THSarabun.php');//ธรรมดา

//ด้านบน
$pdf->Cell(55,$line_space1,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->setfont('THSarabun','','14');

$pdf->setxy(95,5);
$pdf->Cell(200,$line_space1,iconv("UTF-8", "TIS-620",'- 14 -'),0,1);
$pdf->Cell(200,$line_space1,iconv("UTF-8", "TIS-620",''),0,1);

$pdf->setfont('THSarabun','','14');

$pdf->Cell(35);
$pdf->Cell(200,$line_space3,iconv("UTF-8", "TIS-620",'2)      โครงการวิจัย เรื่อง..........................................................................................................................'),0,1);

$pdf->Cell(68);
$pdf->Cell(200,$line_space3,iconv("UTF-8", "TIS-620",'..........................................................................................................................'),0,1);

$pdf->Cell(44);
$pdf->Cell(200,$line_space3,iconv("UTF-8", "TIS-620",'ได้รับทุนจาก...................................................................................................................................'),0,1);
$pdf->Cell(200,$line_space3,iconv("UTF-8", "TIS-620",''),0,1);

$pdf->Cell(35);
$pdf->Cell(200,$line_space3,iconv("UTF-8", "TIS-620",'3)      โครงการวิจัย เรื่อง..........................................................................................................................'),0,1);

$pdf->Cell(68);
$pdf->Cell(200,$line_space3,iconv("UTF-8", "TIS-620",'..........................................................................................................................'),0,1);

$pdf->Cell(44);
$pdf->Cell(200,$line_space3,iconv("UTF-8", "TIS-620",'ได้รับทุนจาก...................................................................................................................................'),0,1);
$pdf->Cell(200,$line_space3,iconv("UTF-8", "TIS-620",''),0,1);

$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",''),0,1);


$pdf->Cell(50);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'ขอรับรองว่าข้อความดังกล่าวข้างต้นเป็นความจริงทุกประการ'),0,1);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",''),0,1);

$pdf->Cell(50);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'ลงชื่อ..........................................................................เจ้าของประวัติ'),0,1);

$pdf->Cell(57);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'(...........................................................................)'),0,1);

$pdf->Cell(50);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'ตำแหน่ง.......................................................................'),0,1);

$pdf->Cell(50);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'วันที่..............เดือน...............................พ.ศ. ...............'),0,1);


$pdf->setxy(79,16);
$pdf->MultiCell(100,$line_space1+1,iconv("UTF-8", "TIS-620",$J17),0,0);

$pdf->setxy(75,30);
$pdf->MultiCell(100,$line_space1+1,iconv("UTF-8", "TIS-620",$J18),0,0);

$pdf->setxy(79,44);
$pdf->MultiCell(100,$line_space1+1,iconv("UTF-8", "TIS-620",$K1),0,0);

$pdf->setxy(75,58);
$pdf->MultiCell(100,$line_space1+1,iconv("UTF-8", "TIS-620",$K2),0,0);

$pdf->setxy(72,160.5);
$pdf->MultiCell(100,$line_space1+1,iconv("UTF-8", "TIS-620",$K3),0,0);

$pdf->setxy(75,168);
$pdf->MultiCell(100,$line_space1+1,iconv("UTF-8", "TIS-620",$K4),0,0);

if($date5!=null){
$pdf->setxy(69,176.5);
$pdf->MultiCell(100,$line_space1+1,iconv("UTF-8", "TIS-620",$day10),0,0);

$pdf->setxy(86,176.5);
$pdf->MultiCell(100,$line_space1+1,iconv("UTF-8", "TIS-620",$month10),0,0);

$pdf->setxy(116,176.5);
$pdf->MultiCell(100,$line_space1+1,iconv("UTF-8", "TIS-620",$year10),0,0);
}
}

//page 15
$pdf->AddPage();
$pdf->AddFont('THSarabun','B','THSarabun Bold.php');//ธรรมดา
$pdf->AddFont('THSarabun','','THSarabun.php');//ธรรมดา

//ด้านบน
$pdf->Cell(55,$line_space1,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->setfont('THSarabun','','14');

$pdf->setxy(95,5);
$pdf->Cell(200,$line_space1,iconv("UTF-8", "TIS-620",'- 15 -'),0,1);
$pdf->Cell(200,$line_space1,iconv("UTF-8", "TIS-620",''),0,1);

$pdf->setfont('THSarabun','B','14');
$pdf->Cell(10);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'ส่วนที่ 2    แบบประเมินคุณสมบัติโดยผู้บังคับบัญชา'),0,1);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",''),0,1);

$pdf->setfont('THSarabun','','14');
$pdf->Cell(25);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'แบบประเมินแต่งตั้งให้ดำรงตำแหน่ง...........................................................................................'),0,1);

$pdf->Cell(37);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'ในสาขาวิชา...............................................................................................'),0,1);

$pdf->Cell(55);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'โดยวิธี..............................................................'),0,1);

$pdf->Cell(25);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'ของ..............................................................................................................................................'),0,1);

$pdf->Cell(25);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'สังกัดภาควิชา..............................................................................................................................'),0,1);

$pdf->Cell(25);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'คณะ......................................................................................................... มหาวิทยาลัยนเรศวร'),0,1);


$pdf->Cell(60);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'.......................................................... '),0,1);

$pdf->Cell(25);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'ได้ตรวจสอบคุณสมบัติเฉพาะสำหรับตำแหน่ง............................................................แล้วเห็นว่า '),0,1);

$pdf->Cell(25);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'..................................................................................................................... เป็นผู้มีคุณสมบัติ '),0,1);

$pdf->Cell(25);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'ตามหลักเกณฑ์ที่ ก.พ.อ. กำหนด'),0,1);

$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",''),0,1);

$pdf->Cell(55);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'ลงชื่อ...............................................................'),0,1);

$pdf->Cell(55);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'       (.............................................................)'),0,1);

$pdf->Cell(55);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'ตำแหน่ง  หัวหน้าภาควิชา......หรือเทียบเท่า'),0,1);

$pdf->Cell(55);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'วันที่..........เดือน................................พ.ศ. ............'),0,1);

$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",''),0,1);

$pdf->setfont('THSarabun','BU','14');
$pdf->Cell(10);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'ความเห็นของผู้บังคับบัญชาระดับคณบดีหรือเทียบเท่า'),0,1);

$pdf->setfont('THSarabun','','14');
$pdf->Cell(20);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'ได้พิจารณาแล้วเห็นว่า ....................................................................................................................................'),0,1);

$pdf->Cell(10);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'เป็นผู้มีคุณสมบัติ '),0,1);

$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",''),0,1);

$pdf->Cell(55);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'ลงชื่อ...............................................................'),0,1);

$pdf->Cell(55);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'       (.............................................................)'),0,1);

$pdf->Cell(55);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'ตำแหน่ง  คณบดีคณะ..................................'),0,1);

$pdf->Cell(55);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'วันที่..........เดือน................................พ.ศ. ............'),0,1);

//page 13
$pdf->AddPage();
$pdf->AddFont('THSarabun','B','THSarabun Bold.php');//ธรรมดา
$pdf->AddFont('THSarabun','','THSarabun.php');//ธรรมดา

//ด้านบน
$pdf->Cell(55,$line_space1,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->setfont('THSarabun','','14');

$pdf->setxy(95,5);
$pdf->Cell(200,$line_space1,iconv("UTF-8", "TIS-620",'- 13 -'),0,1);
$pdf->Cell(200,$line_space1,iconv("UTF-8", "TIS-620",''),0,1);

$pdf->setfont('THSarabun','B','14');
$pdf->Cell(10);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'ส่วนที่ 3    แบบประเมินผลการสอน'),0,1);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",''),0,1);

$pdf->setfont('THSarabun','','14');
$pdf->Cell(25);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'คณะอนุกรรมการเพื่อประเมินผลการสอน ในการประชุมครั้งที่........./............... เมื่อวันที่........................ '),0,1);

$pdf->Cell(10);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'ซึ่งได้รับมอบอำนาจจากคณะกรรมการพิจารณาตำแหน่งทางวิชาการมหาวิทยาลัยนเรศวร ได้ประเมินผลการสอน '),0,1);

$pdf->Cell(10);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'รหัสวิชา.......................รายวิชา.......................................................ของ ................................................................ '),0,1);

$pdf->Cell(10);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'แล้วเห็นว่า บุคคลดังกล่าวเป็นผู้มีความ'),0,1);

$pdf->Cell(10);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'และวิธีการตามที่สภามหาวิทยาลัยนเรศวรกำหนด '),0,1);



$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",''),0,1);

$pdf->Cell(55);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'ลงชื่อ...............................................................'),0,1);

$pdf->Cell(55);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'       (.............................................................)'),0,1);

$pdf->Cell(45);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'ตำแหน่ง  ประธานคณะอนุกรรมการเพื่อประเมินผลการสอน'),0,1);

$pdf->Cell(55);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'วันที่..........เดือน................................พ.ศ. ............'),0,1);

$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",''),0,1);

$pdf->setfont('THSarabun','BU','14');
$pdf->Cell(10);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'ความเห็นของผู้บังคับบัญชาระดับคณบดีหรือเทียบเท่า'),0,1);

$pdf->setfont('THSarabun','','14');
$pdf->Cell(20);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'ได้พิจารณาแล้วเห็นว่า ....................................................................................................................................'),0,1);

$pdf->Cell(10);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'เป็นผู้มีคุณสมบัติ '),0,1);

$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",''),0,1);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",''),0,1);

$pdf->Cell(55);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'ลงชื่อ...............................................................'),0,1);

$pdf->Cell(55);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'       (.............................................................)'),0,1);

$pdf->Cell(55);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'ตำแหน่ง  คณบดีคณะ..................................'),0,1);

$pdf->Cell(55);
$pdf->Cell(10,$line_space2,iconv("UTF-8", "TIS-620",'วันที่..........เดือน................................พ.ศ. ............'),0,1);

$pdf->Output();
}else{ echo('ไม่มีข้อมูล');}

?>
