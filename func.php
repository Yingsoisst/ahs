<?php 

function ks2ps($_) {

$_=intval($_+543);

return $_;

}

function Day_show($Date1)
{
$Date1_s = date_parse($Date1);
$Date1_day = $Date1_s["day"];
$Date1_month = $Date1_s["month"];
$Date1_year = $Date1_s["year"]+543;
$Date1_hour = $Date1_s["hour"];
$Date1_minute = str_pad($Date1_s["minute"], 2, "0", STR_PAD_LEFT) ;
$Date1_second = $Date1_s["second"];

$month_now = "";

if($Date1_month==1){$month_now="มกราคม";}
if($Date1_month==2){$month_now="กุมภาพันธ์";}
if($Date1_month==3){$month_now="มีนาคม";}
if($Date1_month==4){$month_now="เมษายน";}
if($Date1_month==5){$month_now="พฤษภาคม";}
if($Date1_month==6){$month_now="มิถุนายน";}
if($Date1_month==7){$month_now="กรกฎาคม";}
if($Date1_month==8){$month_now="สิงหาคม";}
if($Date1_month==9){$month_now="กันยายน";}
if($Date1_month==10){$month_now="ตุลาคม";}
if($Date1_month==11){$month_now="พฤศจิกายน";}
if($Date1_month==12){$month_now="ธันวาคม";}

/*if($Date1_month==1){$month_now="ม.ค.";}
if($Date1_month==2){$month_now="ก.พ.";}
if($Date1_month==3){$month_now="มี.ค.";}
if($Date1_month==4){$month_now="เม.ย.";}
if($Date1_month==5){$month_now="พ.ค.";}
if($Date1_month==6){$month_now="มิ.ย.";}
if($Date1_month==7){$month_now="ก.ค.";}
if($Date1_month==8){$month_now="ส.ค.";}
if($Date1_month==9){$month_now="ก.ย.";}
if($Date1_month==10){$month_now="ต.ค.";}
if($Date1_month==11){$month_now="พ.ย.";}
if($Date1_month==12){$month_now="ธ.ค.";}
*/

$date1 = $Date1_day."  ".$month_now." ".$Date1_year;
return $date1;
}
function Day_show_list($Date1)
{
$Date1_s = date_parse($Date1);
$Date1_day = $Date1_s["day"];
$Date1_month = $Date1_s["month"];
$Date1_year = $Date1_s["year"]+543;
if($Date1_month==1){$month_now="มกราคม";}
if($Date1_month==2){$month_now="กุมภาพันธ์";}
if($Date1_month==3){$month_now="มีนาคม";}
if($Date1_month==4){$month_now="เมษายน";}
if($Date1_month==5){$month_now="พฤษภาคม";}
if($Date1_month==6){$month_now="มิถุนายน";}
if($Date1_month==7){$month_now="กรกฎาคม";}
if($Date1_month==8){$month_now="สิงหาคม";}
if($Date1_month==9){$month_now="กันยายน";}
if($Date1_month==10){$month_now="ตุลาคม";}
if($Date1_month==11){$month_now="พฤศจิกายน";}
if($Date1_month==12){$month_now="ธันวาคม";}

return [$Date1_day, $month_now, $Date1_year];
}

function Day_show11($Date1)
{
$Date1_s = date_parse($Date1);
$Date1_day = $Date1_s["day"];
$Date1_month = $Date1_s["month"];
$Date1_year = $Date1_s["year"]+543;
$Date1_hour = $Date1_s["hour"];
$Date1_minute = str_pad($Date1_s["minute"], 2, "0", STR_PAD_LEFT) ;
$Date1_second = $Date1_s["second"];

if($Date1_month==1){$month_now="มกราคม";}
if($Date1_month==2){$month_now="กุมภาพันธ์";}
if($Date1_month==3){$month_now="มีนาคม";}
if($Date1_month==4){$month_now="เมษายน";}
if($Date1_month==5){$month_now="พฤษภาคม";}
if($Date1_month==6){$month_now="มิถุนายน";}
if($Date1_month==7){$month_now="กรกฎาคม";}
if($Date1_month==8){$month_now="สิงหาคม";}
if($Date1_month==9){$month_now="กันยายน";}
if($Date1_month==10){$month_now="ตุลาคม";}
if($Date1_month==11){$month_now="พฤศจิกายน";}
if($Date1_month==12){$month_now="ธันวาคม";}

/*if($Date1_month==1){$month_now="ม.ค.";}
if($Date1_month==2){$month_now="ก.พ.";}
if($Date1_month==3){$month_now="มี.ค.";}
if($Date1_month==4){$month_now="เม.ย.";}
if($Date1_month==5){$month_now="พ.ค.";}
if($Date1_month==6){$month_now="มิ.ย.";}
if($Date1_month==7){$month_now="ก.ค.";}
if($Date1_month==8){$month_now="ส.ค.";}
if($Date1_month==9){$month_now="ก.ย.";}
if($Date1_month==10){$month_now="ต.ค.";}
if($Date1_month==11){$month_now="พ.ย.";}
if($Date1_month==12){$month_now="ธ.ค.";}
*/

$date1=$Date1_day."  ".$month_now."  ".$Date1_year;
return $date1;
}

function Day_show1($Date1)
{
$Date1_s = date_parse($Date1);
$Date1_day = $Date1_s["day"];
$Date1_month = $Date1_s["month"];
$Date1_year = $Date1_s["year"]+543;
$Date1_hour = $Date1_s["hour"];
$Date1_minute = str_pad($Date1_s["minute"], 2, "0", STR_PAD_LEFT) ;
$Date1_second = $Date1_s["second"];

if($Date1_month==1){$month_now="ม.ค.";}
if($Date1_month==2){$month_now="ก.พ.";}
if($Date1_month==3){$month_now="มี.ค.";}
if($Date1_month==4){$month_now="เม.ย.";}
if($Date1_month==5){$month_now="พ.ค.";}
if($Date1_month==6){$month_now="มิ.ย.";}
if($Date1_month==7){$month_now="ก.ค.";}
if($Date1_month==8){$month_now="ส.ค.";}
if($Date1_month==9){$month_now="ก.ย.";}
if($Date1_month==10){$month_now="ต.ค.";}
if($Date1_month==11){$month_now="พ.ย.";}
if($Date1_month==12){$month_now="ธ.ค.";}

$date1=$Date1_day." ".$month_now." ".$Date1_year;
return $date1;
}

function Daytime_show($Date1)
{
$Date1_s = date_parse($Date1);
$Date1_day = $Date1_s["day"];
$Date1_month = $Date1_s["month"];
$Date1_year = $Date1_s["year"]+543;
$Date1_hour = $Date1_s["hour"];
$Date1_minute = str_pad($Date1_s["minute"], 2, "0", STR_PAD_LEFT) ;
$Date1_second = $Date1_s["second"];

if($Date1_month==1){$month_now="มกราคม";}
if($Date1_month==2){$month_now="กุมภาพันธ์";}
if($Date1_month==3){$month_now="มีนาคม";}
if($Date1_month==4){$month_now="เมษายน";}
if($Date1_month==5){$month_now="พฤษภาคม";}
if($Date1_month==6){$month_now="มิถุนายน";}
if($Date1_month==7){$month_now="กรกฎาคม";}
if($Date1_month==8){$month_now="สิงหาคม";}
if($Date1_month==9){$month_now="กันยายน";}
if($Date1_month==10){$month_now="ตุลาคม";}
if($Date1_month==11){$month_now="พฤศจิกายน";}
if($Date1_month==12){$month_now="ธันวาคม";}

$date1=$Date1_day." ".$month_now." ".$Date1_year." เวลา ".$Date1_hour.".".$Date1_minute ;
return $date1;
}

function time_show($Date1)
{
$Date1_s = date_parse($Date1);
$Date1_hour = $Date1_s["hour"];
$Date1_minute = str_pad($Date1_s["minute"], 2, "0", STR_PAD_LEFT) ;
$Date1_second = $Date1_s["second"];


$date1= $Date1_hour.".".$Date1_minute ."  น.";
return $date1;
}

function redirect($url,$time=""){
    if(!$time){
        echo "<script language='javascript'>";
        echo "window.location='".$url."';";	
        echo "</script>";
    }else{
        echo '<script>window.setTimeout("window.location=';
        echo "'".$url."'";
        echo '", '.$time.'); </script>';
    }
}

function Convert($amount_number)
{
    $amount_number = number_format($amount_number, 2, ".","");
    $pt = strpos($amount_number , ".");
    $number = $fraction = "";
    if ($pt === false) 
        $number = $amount_number;
    else
    {
        $number = substr($amount_number, 0, $pt);
        $fraction = substr($amount_number, $pt + 1);
    }
    
    $ret = "";
    $baht = ReadNumber ($number);
    if ($baht != "")
        $ret .= $baht . "บาท";
    
    $satang = ReadNumber($fraction);
    if ($satang != "")
        $ret .=  $satang . "สตางค์";
    else 
        $ret .= "ถ้วน";
    return $ret;
}

function ReadNumber($number)
{
    $position_call = array("แสน", "หมื่น", "พัน", "ร้อย", "สิบ", "");
    $number_call = array("", "หนึ่ง", "สอง", "สาม", "สี่", "ห้า", "หก", "เจ็ด", "แปด", "เก้า");
    $number = $number + 0;
    $ret = "";
    if ($number == 0) return $ret;
    if ($number > 1000000)
    {
        $ret .= ReadNumber(intval($number / 1000000)) . "ล้าน";
        $number = intval(fmod($number, 1000000));
    }
    
    $divider = 100000;
    $pos = 0;
    while($number > 0)
    {
        $d = intval($number / $divider);
        $ret .= (($divider == 10) && ($d == 2)) ? "ยี่" : 
            ((($divider == 10) && ($d == 1)) ? "" :
            ((($divider == 1) && ($d == 1) && ($ret != "")) ? "เอ็ด" : $number_call[$d]));
        $ret .= ($d ? $position_call[$pos] : "");
        $number = $number % $divider;
        $divider = $divider / 10;
        $pos++;
    }
    return $ret;
}

class TitlePopup {
    public $text;
    public $title;
    public $title2;

    function __construct($text, $title, $title2 = null)
    {
        $this->text = $text;
        $this->title = $title;
        $this->title2 = $title2;
    }

    function __toString()
    {
        return "
        <a href='#' card-toggle='tooltip' data-placement='top' title='{$this->title}' class='card-link'>
            <span class='btn btn-outline-primary btn-sm'>
                {$this->text}
            </span>
        </a>
        ";
    }
}

function num_show($number){
    if( fmod($number, 1) == 0 ){
        $b = number_format($number);
    }else{
        $b = number_format($number, 1);
    }
    return $b;
}
function num_show_2($number){
    if( fmod($number, 1) == 0 ){
        $b = number_format($number);
    }else{
        $b = number_format($number, 2);
    }
    return $b;
}

?>