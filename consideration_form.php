<?php require_once("inc/func.php"); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>แบบคำขอรับการพิจารณากำหนดตำแหน่งทางวิชาการทั่วไป</title>
  <?php require("inc/css_inc.php"); ?>
<body>
<?php require("inc/topbar.php"); ?>

<main class="container-lg mt-2">
  <div class="bg-light p-4 rounded">
  <div class="row text-center mb-3">
    <div>
      <span class="h3">แบบคำขอรับการพิจารณากำหนดตำแหน่งทางวิชาการทั่วไป</span><br>
      <span class="h3">ตามหลักเกณฑ์และวิธีการพิจารณาแต่งตั้งบุคคลให้ดำรงตำแหน่ง ผู้ช่วยศาสตราจารย์</span><br>
      <span class="h3">รองศาสตราจารย์ และศาสตราจารย์ พ.ศ.2564</span><br>
    </div>
  </div> 

  <form action="consideration_pdf.php" method="post" id="fmadd" name="fmadd">
   <br>        
  ส่วนที่ 1  	แบบประวัติส่วนตัวและผลงานทางวิชาการ	<br>
  แบบประวัติส่วนตัวและผลงานทางวิชาการ

<div class="d-flex">
<div class="btn-group" role="group" style="height: 30px; width: 1200px;" aria-label="Basic radio toggle button group">
<span class="input-group-text">A1</span>

  <input type="radio" class="btn-check" name="btnradio2" id="btnradio2_1" value="1" onchange="show1()" autocomplete="off" >
  <label class="btn btn-outline-primary" for="btnradio2_1">ผู้ช่วยศาสตราจารย์ </label>
  
  <input type="radio" class="btn-check" name="btnradio2" id="btnradio2_2" value="2" onchange="show2()" autocomplete="off" >
  <label class="btn btn-outline-primary" for="btnradio2_2">รองศาสตราจารย์ </label>
  
  <input type="radio" class="btn-check" name="btnradio2" id="btnradio2_3" value="3" onchange="show3()" autocomplete="off" >
  <label class="btn btn-outline-primary" for="btnradio2_3">ศาสตราจารย์</label>
  
</div>
</div><br>

<div class="d-flex">
<div class="btn-group" role="group" style="height: 30px; width: 1200px;" aria-label="Basic radio toggle button group">
<span class="input-group-text">โดยวิธี</span>

  <input type="radio" class="btn-check" name="btnradio3" id="btnradio3_1" value="1" autocomplete="off" >
  <label class="btn btn-outline-primary" for="btnradio3_1">ปกติ</label>
  
  <input type="radio" class="btn-check" name="btnradio3" id="btnradio3_2" value="2" autocomplete="off" >
  <label class="btn btn-outline-primary" for="btnradio3_2">พิเศษ</label>
  
  
</div>
</div><br>


  <div class="row">
      <div class="col-md-8">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">ในสาขาวิชา</span>
          <input type="text" class="form-control" name="A2" placeholder="" >
        </div>						  
      </div>
      <div class="col-md-4">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">รหัส 4 ตัว</span>
          <input type="text" class="form-control" name="A3" placeholder="" >
        </div>						  
      </div>
    </div>
    
    <div class="row">
        <div class="col-md-8">
          <div class="input-group input-group-sm mb-3">
            <span class="input-group-text">อนุสาขาวิชา</span>
            <input type="text" class="form-control" name="A4" placeholder="" >
          </div>						  
        </div>
        <div class="col-md-4">
          <div class="input-group input-group-sm mb-3">
            <span class="input-group-text">รหัส 6 ตัว</span>
            <input type="text" class="form-control" name="A5" placeholder="" >
          </div>						  
        </div>
      </div>

    <div class="row">
        <div class="col-md-12">
          <div class="input-group input-group-sm mb-3">
            <span class="input-group-text">ของ</span>
            <input type="text" class="form-control" name="A6" placeholder="คำนำหน้าชื่อให้ระบุ นาย/นาง/นางสาว หรือ ยศทางทหาร ตำรวจเท่านั้น" >
          </div>						  
        </div>
      </div>

    <div class="row">
        <div class="col-md-8">
          <div class="input-group input-group-sm mb-3">
            <span class="input-group-text">สังกัดภาควิชา</span>
            <input type="text" class="form-control" name="A7" placeholder="" >
          </div>						  
        </div>
        <div class="col-md-4">
          <div class="input-group input-group-sm mb-3">
            <span class="input-group-text">คณะ</span>
            <input type="text" class="form-control" name="A8" placeholder="" >
            <span class="input-group-text">มหาวิทยาลัยนเรศวร</span>
          </div>						  
        </div>
      </div><br><br>
      1.  ประวัติส่วนตัว
      <div class="row">
        <div class="col-md-8">
          <div class="input-group input-group-sm mb-3">
            <span class="input-group-text">1.1 เกิดวันที่</span>
            <input type="date" class="form-control" name="BD" placeholder="" >
          </div>						  
        </div>
        <div class="col-md-4">
          <div class="input-group input-group-sm mb-3">
            <span class="input-group-text">1.2 อายุ</span>
            <input type="number" class="form-control" name="A9" placeholder="" >
          </div>						  
        </div>
      </div>
      
      <div class="row">
        <div class="col-md-8">
          <div class="input-group input-group-sm mb-3">
            <span class="input-group-text">1.3 การศึกษาระดับอุดมศึกษา (โปรดระบุชื่อคุณวุฒิเต็มพร้อมสาขาวิชา โดยเรียงจากคุณวุฒิสูงสุดตามลำดับ
	 และกรณีสำเร็จการศึกษาจากต่างประเทศให้ระบุเป็นภาษาอังกฤษ)
</span>
          </div>						  
        </div>
      </div>
      <div class="row">
        <div class="col-md-5">
          <div class="input-group input-group-sm mb-3">
            <span class="input-group-text">1.3.1 คุณวุฒิ</span>
            <input type="text" class="form-control" name="A10" placeholder="เช่น วิทยาศาสตรดุษฎีบัณฑิต (ชีววิทยา)" >
          </div>						  
        </div>
        <div class="col-md-2">
          <div class="input-group input-group-sm mb-3">
            <span class="input-group-text">ปี พ.ศ. ที่จบ</span>
            <input type="text" class="form-control" name="A11" placeholder="" >
          </div>						  
        </div>
        <div class="col-md-5">
          <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">ชื่อสถานศึกษาและประเทศ</span>
            <input type="text" class="form-control" name="A12" placeholder="" >
          </div>						  
        </div>
      </div>
      <div class="row">
        <div class="col-md-5">
          <div class="input-group input-group-sm mb-3">
            <span class="input-group-text">1.3.2 คุณวุฒิ</span>
            <input type="text" class="form-control" name="A13" placeholder="เช่น วิทยาศาสตรดุษฎีบัณฑิต (ชีววิทยา)" >
          </div>						  
        </div>
        <div class="col-md-2">
          <div class="input-group input-group-sm mb-3">
            <span class="input-group-text">ปี พ.ศ. ที่จบ</span>
            <input type="text" class="form-control" name="A14" placeholder="" >
          </div>						  
        </div>
        <div class="col-md-5">
          <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">ชื่อสถานศึกษาและประเทศ</span>
            <input type="text" class="form-control" name="A15" placeholder="" >
          </div>						  
        </div>
      </div>
      <div class="row">
        <div class="col-md-5">
          <div class="input-group input-group-sm mb-3">
            <span class="input-group-text">1.3.3 คุณวุฒิ</span>
            <input type="text" class="form-control" name="A16" placeholder="เช่น วิทยาศาสตรดุษฎีบัณฑิต (ชีววิทยา)" >
          </div>						  
        </div>
        <div class="col-md-2">
          <div class="input-group input-group-sm mb-3">
            <span class="input-group-text">ปี พ.ศ. ที่จบ</span>
            <input type="text" class="form-control" name="A17" placeholder="" >
          </div>						  
        </div>
        <div class="col-md-5">
          <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">ชื่อสถานศึกษาและประเทศ</span>
            <input type="text" class="form-control" name="A18" placeholder="" >
          </div>						  
        </div>
      </div>
      <div class="row">
        <div class="col-md-5">
          <div class="input-group input-group-sm mb-3">
            <span class="input-group-text">1.3.4 คุณวุฒิ</span>
            <input type="text" class="form-control" name="A19" placeholder="เช่น วิทยาศาสตรดุษฎีบัณฑิต (ชีววิทยา)" >
          </div>						  
        </div>
        <div class="col-md-2">
          <div class="input-group input-group-sm mb-3">
            <span class="input-group-text">ปี พ.ศ. ที่จบ</span>
            <input type="text" class="form-control" name="A20" placeholder="" >
          </div>						  
        </div>
        <div class="col-md-5">
          <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">ชื่อสถานศึกษาและประเทศ</span>
            <input type="text" class="form-control" name="A21" placeholder="" >
          </div>						  
        </div>
      </div>
      <div class="row">
        <div class="col-md-5">
          <div class="input-group input-group-sm mb-3">
            <span class="input-group-text">1.3.5 คุณวุฒิ</span>
            <input type="text" class="form-control" name="A22" placeholder="เช่น วิทยาศาสตรดุษฎีบัณฑิต (ชีววิทยา)" >
          </div>						  
        </div>
        <div class="col-md-2">
          <div class="input-group input-group-sm mb-3">
            <span class="input-group-text">ปี พ.ศ. ที่จบ</span>
            <input type="text" class="form-control" name="A23" placeholder="" >
          </div>						  
        </div>
        <div class="col-md-5">
          <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">ชื่อสถานศึกษาและประเทศ</span>
            <input type="text" class="form-control" name="A24" placeholder="" >
          </div>						  
        </div>
      </div>

    <div class="row">
      <div class="col-md-12">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">วิทยานิพนธ์ระดับปริญญาเอก </span>
          <span class="input-group-text">เรื่อง</span>
          <input type="text" class="form-control" name="A25" placeholder="" >
        </div>						  
      </div>
    </div>
    
    <div class="row">
      <div class="col-md-12">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">วิทยานิพนธ์ระดับปริญญาโท </span>
          <span class="input-group-text">เรื่อง</span>
          <input type="text" class="form-control" name="A26" placeholder="" >
        </div>						  
      </div>
    </div>
    
    <div class="row">
      <div class="col-md-12">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">ผลงานตีพิมพ์ที่ใช้สำเร็จการศึกษาระดับปริญญาเอก</span>
          <input type="text" class="form-control" name="A27" placeholder="" >
        </div>						  
      </div>
    </div>
    
    <div class="row">
      <div class="col-md-12">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">ผลงานตีพิมพ์ที่ใช้สำเร็จการศึกษาระดับปริญญาโท</span>
          <input type="text" class="form-control" name="A28" placeholder="" >
        </div>						  
      </div>
    </div>

   <br> 
    2.1 ปัจจุบันดำรงตำแหน่ง
    <div class="d-flex">
<div class="btn-group" role="group" style="height: 30px; width: 1200px;" aria-label="Basic radio toggle button group">


  <input type="radio" class="btn-check" name="btnradio4" id="btnradio4_1" value="1" autocomplete="off" >
  <label class="btn btn-outline-primary" for="btnradio4_1">อาจารย์ </label>
  
  <input type="radio" class="btn-check" name="btnradio4" id="btnradio4_2" value="2" autocomplete="off" >
  <label class="btn btn-outline-primary" for="btnradio4_2">ผู้ช่วยศาสตราจารย์</label>
  
  <input type="radio" class="btn-check" name="btnradio4" id="btnradio4_3" value="3" autocomplete="off" >
  <label class="btn btn-outline-primary" for="btnradio4_3">รองศาสตราจารย์</label>
</div>
<div class="col-md-4">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">รับเงินเดิน</span>
          <input type="text" class="form-control" name="B1" placeholder="" >
          <span class="input-group-text">บาท</span>
        </div>						  
      </div>
</div><br>


2.2  ได้รับแต่งตั้งให้ดำรงตำแหน่ง อาจารย์  

<div class="col-md-5">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">เมื่อวันที่</span>
          <input type="date" class="form-control" name="date4" placeholder="" >
        </div>						  
      </div>
<br>

2.3  ได้รับแต่งตั้งให้ดำรงตำแหน่ง ผู้ช่วยศาสตราจารย์ 
<div class="d-flex">
<div class="btn-group" role="group" style="height: 30px; width: 1200px;" aria-label="Basic radio toggle button group">
<span class="input-group-text">โดยวิธี</span>

  <input type="radio" class="btn-check" name="btnradio500" id="btnradio500_1" value="1" autocomplete="off" >
  <label class="btn btn-outline-primary" for="btnradio500_1">ปกติ</label>
  
  <input type="radio" class="btn-check" name="btnradio500" id="btnradio500_2" value="2" autocomplete="off" >
  <label class="btn btn-outline-primary" for="btnradio500_2">พิเศษ</label>
  
  <span class="input-group-text">ในสาขาวิชา</span>
  <input type="text" class="form-control" name="B" placeholder="" >
</div>
</div>

<div class="row">
      <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">เมื่อวันที่</span>
          <input type="date" class="form-control" name="date3" placeholder="" >
        </div>						  
      </div>
    </div>
<br>

2.4  ได้รับแต่งตั้งให้ดำรงตำแหน่ง รองศาสตราจารย์ 
<div class="d-flex">
<div class="btn-group" role="group" style="height: 30px; width: 1200px;" aria-label="Basic radio toggle button group">
<span class="input-group-text">โดยวิธี</span>
  <input type="radio" class="btn-check" name="btnradio7" id="btnradio7_1" value="1" autocomplete="off" >
  <label class="btn btn-outline-primary" for="btnradio7_1">ปกติ</label>
  
  <input type="radio" class="btn-check" name="btnradio7" id="btnradio7_2" value="2" autocomplete="off" >
  <label class="btn btn-outline-primary" for="btnradio7_2">พิเศษ</label>
  
  <span class="input-group-text">ในสาขาวิชา</span>
  <input type="text" class="form-control" name="B2" placeholder="" >
</div>

</div><br>

<div class="row">
      <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">เมื่อวันที่</span>
          <input type="date" class="form-control" name="date2" placeholder="" >
        </div>						  
      </div>
      <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">อายุราชการ</span>
          <input type="text" class="form-control" name="B3" placeholder="ปี" >
          <input type="text" class="form-control" name="B4" placeholder="เดือน" >
        </div>						  
      </div>
    </div>

    2.5  ตำแหน่งอื่นๆ
    <div class="row">
          <div class="col-md-12">
            <div class="input-group input-group-sm mb-3">
              <input type="text" class="form-control" name="B8" placeholder="2.5.1" >
              <input type="text" class="form-control" name="B9" placeholder="2.5.2" >
              <input type="text" class="form-control" name="B10" placeholder="2.5.3" >
              <input type="text" class="form-control" name="B11" placeholder="2.5.4" >
              <input type="text" class="form-control" name="B12" placeholder="2.5.5" >
            </div>						  
          </div>
        </div>
        2.6  การได้รับเชิญเป็นวิทยากรในที่ประชุมวิชาการระดับนานาชาติ และการได้รับการยกย่องระดับนานาชาติอื่นๆ (โปรดระบุ 5 ปีย้อนหลัง)

        <div class="row">
          <div class="col-md-12">
            <div class="input-group input-group-sm mb-3">
              <input type="text" class="form-control" name="B13" placeholder="2.6.1" >
              <input type="text" class="form-control" name="B14" placeholder="2.6.2" >
              <input type="text" class="form-control" name="B15" placeholder="2.6.3" >
              <input type="text" class="form-control" name="B16" placeholder="2.6.4" >
              <input type="text" class="form-control" name="B17" placeholder="2.6.5" >
            </div>						  
          </div>
        </div>
        3.  ภาระงานย้อนหลัง 3 ปี (เป็นภาระงานที่ทำโดยความเห็นชอบจากเจ้าสังกัด) <br>
        3.1  งานสอน (โปรดระบุระดับว่าปริญญาตรี หรือบัณฑิตศึกษา)
        <div class="row">
          <div class="col-md-12">
            <div class="input-group input-group-sm mb-3">
              <input type="text" class="form-control" name="B18" placeholder="ระดับ" >
              <input type="text" class="form-control" name="B19" placeholder="รายวิชาที่สอน" >
              <input type="text" class="form-control" name="B20" placeholder="ช.ม./สัปดาห์" >
              <input type="text" class="form-control" name="B21" placeholder="เปิดสอนภาค/ปีการศึกษา" >
            </div>						  
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="input-group input-group-sm mb-3">
              <input type="text" class="form-control" name="B111" placeholder="ระดับ" >
              <input type="text" class="form-control" name="B112" placeholder="รายวิชาที่สอน" >
              <input type="text" class="form-control" name="B113" placeholder="ช.ม./สัปดาห์" >
              <input type="text" class="form-control" name="B114" placeholder="เปิดสอนภาค/ปีการศึกษา" >
            </div>						  
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="input-group input-group-sm mb-3">
              <input type="text" class="form-control" name="B115" placeholder="ระดับ" >
              <input type="text" class="form-control" name="B116" placeholder="รายวิชาที่สอน" >
              <input type="text" class="form-control" name="B117" placeholder="ช.ม./สัปดาห์" >
              <input type="text" class="form-control" name="B118" placeholder="เปิดสอนภาค/ปีการศึกษา" >
            </div>						  
          </div>
        </div>


        
        3.2  งานวิจัย 
        <div class="row">
          <div class="col-md-12">
            <div class="input-group input-group-sm mb-3">
              <input type="text" class="form-control" name="C1" placeholder="โปรดระบุเรื่องที่ได้รับทุนวิจัยในฐานะหัวหน้าโครงการ (Principal investigator) " >
              <input type="text" class="form-control" name="C2" placeholder="แหล่งทุน ในระหว่างปีที่ทำการวิจัย " >
              <input type="text" class="form-control" name="C3" placeholder="ระยะเวลาที่ใช้ในแต่ละโครงการ)" >
            </div>						  
          </div>
        </div>
        
        3.3  งานบริการทางวิชาการ
        <div class="row">
          <div class="col-md-12">
            <div class="input-group input-group-sm mb-3">
              <input type="text" class="form-control" name="C4" placeholder="โปรดระบุประเภทของกิจกรรม  " >
              <input type="text" class="form-control" name="C5" placeholder="โปรดระบุประเภทของกิจกรรม " >
            </div>						  
          </div>
        </div>
        
        3.4  งานบริหาร 
        <div class="row">
          <div class="col-md-12">
            <div class="input-group input-group-sm mb-3">
              <input type="text" class="form-control" name="C7" placeholder="โปรดระบุงานบริหารที่มีส่วนรับผิดชอบโดยตรง " >
              <input type="text" class="form-control" name="C8" placeholder="และปริมาณเวลาที่ใช้ต่อสัปดาห์" >
            </div>						  
          </div>
        </div>
        
        3.5  งานอื่นๆ ที่เกี่ยวข้อง 
        <div class="row">
          <div class="col-md-12">
            <div class="input-group input-group-sm mb-3">
              <input type="text" class="form-control" name="C10" placeholder="โปรดระบุประเภทของงาน " >
              <input type="text" class="form-control" name="C11" placeholder="ปริมาณเวลาที่ใช้ต่อสัปดาห์" >
            </div>						  
          </div>
        </div><br>


<!-- 4.1 -->
<div class="" id="show1" style="display:none;">
4.  ผลงานทางวิชาการ<br>
4.1  ผลงานทางวิชาการที่เสนอเพื่อประกอบการพิจารณาตำแหน่ง ผู้ช่วยศาสตราจารย์<br>
4.1.1	ผลงานวิจัย<br>
<div class="row">
          <div class="col-md-12">
            <div class="input-group input-group-sm mb-3">
            <span class="input-group-text">4.1.1.1</span>
              <input type="text" class="form-control" name="C12" placeholder="ชื่อผู้แต่ง(ปีที่พิมพ์)" >
              <input type="text" class="form-control" name="C13" placeholder="ชื่อบทความ ชื่อวารสาร ปีที่ ฉบับที่ เลขที่หน้า  " >
              <input type="text" class="form-control" name="C14" placeholder="อยู่ในฐานข้อมูลอะไร" >
            </div>						  
          </div>
        </div>

        
<div class="d-flex">
<div class="btn-group" role="group" style="height: 30px; width: 1200px;" aria-label="Basic radio toggle button group">
<span class="input-group-text">โดยมีบทบาทหน้าที่เป็น</span>
  <input type="radio" class="btn-check" name="btnradio8" id="btnradio8_1" value="First author" autocomplete="off" >
  <label class="btn btn-outline-primary" for="btnradio8_1">First author </label>
  
  <input type="radio" class="btn-check" name="btnradio8" id="btnradio8_2" value="Essentially intellectual contributor" autocomplete="off" >
  <label class="btn btn-outline-primary" for="btnradio8_2">Essentially intellectual contributor </label>
  
  <input type="radio" class="btn-check" name="btnradio8" id="btnradio8_3" value="Corresponding author" autocomplete="off" >
  <label class="btn btn-outline-primary" for="btnradio8_3">Corresponding author </label>

</div>
</div>

<div class="row">
          <div class="col-md-12">
            <div class="input-group input-group-sm mb-3">
            <span class="input-group-text">และถูกอ้างอิง(Citation) จำนวน</span>
            <input type="text" class="form-control" name="C6" placeholder="" >
            <span class="input-group-text">ครั้ง</span>
            <span class="input-group-text">Journal impact factor </span>
              <input type="text" class="form-control" name="C9" placeholder=" " >

            </div>						  
          </div>
        </div>

        <div class="d-flex">
<div class="btn-group" role="group" style="height: 30px; width: 1200px;" aria-label="Basic radio toggle button group">
<span class="input-group-text">ผลงานวิจัยนี้เคยใช้สำหรับการพิจารณาขอกำหนดตำแหน่งผู้ช่วยศาสตราจารย์
มาแล้วหรือไม่

</span>

  <input type="radio" class="btn-check" name="btnradio9" id="btnradio9_1" value="1" autocomplete="off" >
  <label class="btn btn-outline-primary" for="btnradio9_1">ไม่เคยใช้</label>
  
  <input type="radio" class="btn-check" name="btnradio9" id="btnradio9_2" value="2" autocomplete="off" >
  <label class="btn btn-outline-primary" for="btnradio9_2">เคยใช้</label>
</div>
</div><br>
หากเคยใช้ โปรดระบุ
<div class="row">
          <div class="col-md-12">
            <div class="input-group input-group-sm mb-3">
            <span class="input-group-text">เมื่อปี พ.ศ. </span>
            <input type="text" class="form-control" name="C15" placeholder="" >
            <span class="input-group-text">และผลการพิจารณาคุณภาพอยู่ในระดับ </span>
            <input type="text" class="form-control" name="C16" placeholder=" " >
            <span class="input-group-text">ตามเกณฑ์ที่ ก.พ.อ. กำหนด</span>

            </div>						  
          </div>
        </div><br>
<div class="row">
          <div class="col-md-12">
            <div class="input-group input-group-sm mb-3">
            <span class="input-group-text">4.1.1.2</span>
              <input type="text" class="form-control" name="C17" placeholder="ชื่อผู้แต่ง(ปีที่พิมพ์)" >
              <input type="text" class="form-control" name="C18" placeholder="ชื่อบทความ ชื่อวารสาร ปีที่ ฉบับที่ เลขที่หน้า  " >
              <input type="text" class="form-control" name="C19" placeholder="อยู่ในฐานข้อมูลอะไร" >
            </div>						  
          </div>
        </div>
        
<div class="d-flex">
<div class="btn-group" role="group" style="height: 30px; width: 1200px;" aria-label="Basic radio toggle button group">
<span class="input-group-text">โดยมีบทบาทหน้าที่เป็น</span>
  <input type="radio" class="btn-check" name="btnradio10" id="btnradio10_1" value="First author" autocomplete="off" >
  <label class="btn btn-outline-primary" for="btnradio10_1">First author </label>
  
  <input type="radio" class="btn-check" name="btnradio10" id="btnradio10_2" value="Essentially intellectual contributor" autocomplete="off" >
  <label class="btn btn-outline-primary" for="btnradio10_2">Essentially intellectual contributor </label>
  
  <input type="radio" class="btn-check" name="btnradio10" id="btnradio10_3" value="Corresponding author" autocomplete="off" >
  <label class="btn btn-outline-primary" for="btnradio10_3">Corresponding author </label>

</div>
</div>

<div class="row">
          <div class="col-md-12">
            <div class="input-group input-group-sm mb-3">
            <span class="input-group-text">และถูกอ้างอิง(Citation) จำนวน</span>
            <input type="text" class="form-control" name="C20" placeholder="" >
            <span class="input-group-text">ครั้ง</span>
            <span class="input-group-text">Journal impact factor </span>
              <input type="text" class="form-control" name="C21" placeholder=" " >

            </div>						  
          </div>
        </div>

        <div class="d-flex">
<div class="btn-group" role="group" style="height: 30px; width: 1200px;" aria-label="Basic radio toggle button group">
<span class="input-group-text">ผลงานวิจัยนี้เคยใช้สำหรับการพิจารณาขอกำหนดตำแหน่งผู้ช่วยศาสตราจารย์
มาแล้วหรือไม่

</span>

  <input type="radio" class="btn-check" name="btnradio78" id="btnradio78_1" value="1" autocomplete="off" >
  <label class="btn btn-outline-primary" for="btnradio78_1">ไม่เคยใช้</label>
  
  <input type="radio" class="btn-check" name="btnradio78" id="btnradio78_2" value="2" autocomplete="off" >
  <label class="btn btn-outline-primary" for="btnradio78_2">เคยใช้</label>
</div>
</div><br>
หากเคยใช้ โปรดระบุ
<div class="row">
          <div class="col-md-12">
            <div class="input-group input-group-sm mb-3">
            <span class="input-group-text">เมื่อปี พ.ศ. </span>
            <input type="text" class="form-control" name="C22" placeholder="" >
            <span class="input-group-text">และผลการพิจารณาคุณภาพอยู่ในระดับ </span>
            <input type="text" class="form-control" name="C23" placeholder=" " >
            <span class="input-group-text">ตามเกณฑ์ที่ ก.พ.อ. กำหนด</span>

            </div>						  
          </div>
        </div><br>
<div class="row">
          <div class="col-md-12">
            <div class="input-group input-group-sm mb-3">
            <span class="input-group-text">4.1.1.3</span>
              <input type="text" class="form-control" name="C24" placeholder="ชื่อผู้แต่ง(ปีที่พิมพ์)" >
              <input type="text" class="form-control" name="C25" placeholder="ชื่อบทความ ชื่อวารสาร ปีที่ ฉบับที่ เลขที่หน้า  " >
              <input type="text" class="form-control" name="C26" placeholder="อยู่ในฐานข้อมูลอะไร" >
            </div>						  
          </div>
        </div>
        
<div class="d-flex">
<div class="btn-group" role="group" style="height: 30px; width: 1200px;" aria-label="Basic radio toggle button group">
<span class="input-group-text">โดยมีบทบาทหน้าที่เป็น</span>
  <input type="radio" class="btn-check" name="btnradio11" id="btnradio11_1" value="First author" autocomplete="off" >
  <label class="btn btn-outline-primary" for="btnradio11_1">First author </label>
  
  <input type="radio" class="btn-check" name="btnradio11" id="btnradio11_2" value="Essentially intellectual contributor" autocomplete="off" >
  <label class="btn btn-outline-primary" for="btnradio11_2">Essentially intellectual contributor </label>
  
  <input type="radio" class="btn-check" name="btnradio11" id="btnradio11_3" value="Corresponding author" autocomplete="off" >
  <label class="btn btn-outline-primary" for="btnradio11_3">Corresponding author </label>

</div>
</div>

<div class="row">
          <div class="col-md-12">
            <div class="input-group input-group-sm mb-3">
            <span class="input-group-text">และถูกอ้างอิง(Citation) จำนวน</span>
            <input type="text" class="form-control" name="C27" placeholder="" >
            <span class="input-group-text">ครั้ง</span>
            <span class="input-group-text">Journal impact factor </span>
              <input type="text" class="form-control" name="C28" placeholder=" " >

            </div>						  
          </div>
        </div>

        <div class="d-flex">
<div class="btn-group" role="group" style="height: 30px; width: 1200px;" aria-label="Basic radio toggle button group">
<span class="input-group-text">ผลงานวิจัยนี้เคยใช้สำหรับการพิจารณาขอกำหนดตำแหน่งผู้ช่วยศาสตราจารย์
มาแล้วหรือไม่
</span>

  <input type="radio" class="btn-check" name="btnradio12" id="btnradio12_1" value="1" autocomplete="off" >
  <label class="btn btn-outline-primary" for="btnradio12_1">ไม่เคยใช้</label>
  
  <input type="radio" class="btn-check" name="btnradio12" id="btnradio12_2" value="2" autocomplete="off" >
  <label class="btn btn-outline-primary" for="btnradio12_2">เคยใช้</label>
</div>
</div><br>
หากเคยใช้ โปรดระบุ
<div class="row">
          <div class="col-md-12">
            <div class="input-group input-group-sm mb-3">
            <span class="input-group-text">เมื่อปี พ.ศ. </span>
            <input type="text" class="form-control" name="C29" placeholder="" >
            <span class="input-group-text">และผลการพิจารณาคุณภาพอยู่ในระดับ </span>
            <input type="text" class="form-control" name="C30" placeholder=" " >
            <span class="input-group-text">ตามเกณฑ์ที่ ก.พ.อ. กำหนด</span>

            </div>						  
          </div>
        </div><br>


        4.1.2	ผลงานทางวิชาการในลักษณะอื่น 
        <div class="row">
      <div class="col-lg-6">
        <div class="input-group input-group-sm mb-3">
          <select class="form-select mb-0.8" name="op412" id="op412" >
                    <option value="">ลักษณะของผลงาน</option>
                    <option value='ผลงานทางวิชาการเพื่ออุตสาหกรรม'>ผลงานทางวิชาการเพื่ออุตสาหกรรม</option>
                    <option value='ผลงานวิชาการเพื่อพัฒนาการเรียนการสอนและการเรียนรู้'>ผลงานวิชาการเพื่อพัฒนาการเรียนการสอนและการเรียนรู้</option>
                    <option value='ผลงานทางวิชาการเพื่อพัฒนานโยบายสาธารณะ'>ผลงานทางวิชาการเพื่อพัฒนานโยบายสาธารณะ</option>
                    <option value='กรณีศึกษา (case study)'>กรณีศึกษา (case study)</option>
                    <option value='งานแปล'>งานแปล</option>
                    <option value='พจนานุกรม สารานุกรม นามานุกรม  และงานวิชาการในลักษณะอื่นเดียวกัน'>พจนานุกรม สารานุกรม นามานุกรม  และงานวิชาการในลักษณะอื่นเดียวกัน</option>
                    <option value='ผลงานสร้างสรรค์ด้านวิทยาศาสตร์และเทคโนโลยี'>ผลงานสร้างสรรค์ด้านวิทยาศาสตร์และเทคโนโลยี</option>
                    <option value='ผลงานสร้างสรรค์ด้านสุนทรียะ ศิลปะ'>ผลงานสร้างสรรค์ด้านสุนทรียะ ศิลปะ</option>
                    <option value='สิทธิบัตร'>สิทธิบัตร</option>
                    <option value='ซอฟต์แวร์'>ซอฟต์แวร์</option>
                    <option value='ผลงานรับใช้ท้องถิ่นและสังคม'>ผลงานรับใช้ท้องถิ่นและสังคม</option>
                    <option value='ผลงานนวัตกรรม'>ผลงานนวัตกรรม</option>
                </select>
        </div>						  
      </div>				  
      </div> 
<div class="row">
          <div class="col-md-12">
            <div class="input-group input-group-sm mb-3">
            <span class="input-group-text">4.1.2.1</span>
              <input type="text" class="form-control" name="D1" placeholder="ชื่อผู้แต่ง(ปีที่พิมพ์)" >
              <input type="text" class="form-control" name="D2" placeholder="ชื่อบทความ ชื่อวารสาร ปีที่ ฉบับที่ เลขที่หน้า  " >
              <input type="text" class="form-control" name="D3" placeholder="อยู่ในฐานข้อมูลอะไร" >
            </div>						  
          </div>
        </div>
        
<div class="d-flex">
<div class="btn-group" role="group" style="height: 30px; width: 1200px;" aria-label="Basic radio toggle button group">
<span class="input-group-text">โดยมีบทบาทหน้าที่เป็น</span>
  <input type="radio" class="btn-check" name="btnradio13" id="btnradio13_1" value="First author" autocomplete="off" >
  <label class="btn btn-outline-primary" for="btnradio13_1">First author </label>
  
  <input type="radio" class="btn-check" name="btnradio13" id="btnradio13_2" value="Essentially intellectual contributor" autocomplete="off" >
  <label class="btn btn-outline-primary" for="btnradio13_2">Essentially intellectual contributor </label>
  
  <input type="radio" class="btn-check" name="btnradio13" id="btnradio13_3" value="Corresponding author" autocomplete="off" >
  <label class="btn btn-outline-primary" for="btnradio13_3">Corresponding author </label>

</div>
</div>

<div class="row">
          <div class="col-md-12">
            <div class="input-group input-group-sm mb-3">
            <span class="input-group-text">และถูกอ้างอิง(Citation) จำนวน</span>
            <input type="text" class="form-control" name="D4" placeholder="" >
            <span class="input-group-text">ครั้ง</span>
            <span class="input-group-text">Journal impact factor </span>
              <input type="text" class="form-control" name="D5" placeholder=" " >

            </div>						  
          </div>
        </div>

        <div class="d-flex">
<div class="btn-group" role="group" style="height: 30px; width: 1200px;" aria-label="Basic radio toggle button group">
<span class="input-group-text">ผลงานทางวิชาการในลักษณะอื่นนี้เคยใช้สำหรับการพิจารณาขอกำหนดตำแหน่งผู้ช่วยศาสตราจารย์มาแล้วหรือไม่


</span>

  <input type="radio" class="btn-check" name="btnradio14" id="btnradio14_1" value="1" autocomplete="off" >
  <label class="btn btn-outline-primary" for="btnradio14_1">ไม่เคยใช้</label>
  
  <input type="radio" class="btn-check" name="btnradio14" id="btnradio14_2" value="2" autocomplete="off" >
  <label class="btn btn-outline-primary" for="btnradio14_2">เคยใช้</label>
</div>
</div><br>
หากเคยใช้ โปรดระบุ
<div class="row">
          <div class="col-md-12">
            <div class="input-group input-group-sm mb-3">
            <span class="input-group-text">เมื่อปี พ.ศ. </span>
            <input type="text" class="form-control" name="D6" placeholder="" >
            <span class="input-group-text">และผลการพิจารณาคุณภาพอยู่ในระดับ </span>
            <input type="text" class="form-control" name="D7" placeholder=" " >
            <span class="input-group-text">ตามเกณฑ์ที่ ก.พ.อ. กำหนด</span>

            </div>						  
          </div>
        </div><br>
<div class="row">
          <div class="col-md-12">
            <div class="input-group input-group-sm mb-3">
            <span class="input-group-text">4.1.2.2</span>
              <input type="text" class="form-control" name="D8" placeholder="ชื่อผู้แต่ง(ปีที่พิมพ์)" >
              <input type="text" class="form-control" name="D9" placeholder="ชื่อบทความ ชื่อวารสาร ปีที่ ฉบับที่ เลขที่หน้า  " >
              <input type="text" class="form-control" name="D10" placeholder="อยู่ในฐานข้อมูลอะไร" >
            </div>						  
          </div>
        </div>
        
<div class="d-flex">
<div class="btn-group" role="group" style="height: 30px; width: 1200px;" aria-label="Basic radio toggle button group">
<span class="input-group-text">โดยมีบทบาทหน้าที่เป็น</span>
  <input type="radio" class="btn-check" name="btnradio15" id="btnradio15_1" value="First author" autocomplete="off" >
  <label class="btn btn-outline-primary" for="btnradio15_1">First author </label>
  
  <input type="radio" class="btn-check" name="btnradio15" id="btnradio15_2" value="Essentially intellectual contributor" autocomplete="off" >
  <label class="btn btn-outline-primary" for="btnradio15_2">Essentially intellectual contributor </label>
  
  <input type="radio" class="btn-check" name="btnradio15" id="btnradio15_3" value="Corresponding author" autocomplete="off" >
  <label class="btn btn-outline-primary" for="btnradio15_3">Corresponding author </label>

</div>
</div>

<div class="row">
          <div class="col-md-12">
            <div class="input-group input-group-sm mb-3">
            <span class="input-group-text">และถูกอ้างอิง(Citation) จำนวน</span>
            <input type="text" class="form-control" name="D11" placeholder="" >
            <span class="input-group-text">ครั้ง</span>
            <span class="input-group-text">Journal impact factor </span>
              <input type="text" class="form-control" name="D12" placeholder=" " >

            </div>						  
          </div>
        </div>

        <div class="d-flex">
<div class="btn-group" role="group" style="height: 30px; width: 1200px;" aria-label="Basic radio toggle button group">
<span class="input-group-text">ผลงานทางวิชาการในลักษณะอื่นนี้เคยใช้สำหรับการพิจารณาขอกำหนดตำแหน่งผู้ช่วยศาสตราจารย์มาแล้วหรือไม่

</span>

  <input type="radio" class="btn-check" name="btnradio16" id="btnradio16_1" value="1" autocomplete="off" >
  <label class="btn btn-outline-primary" for="btnradio16_1">ไม่เคยใช้</label>
  
  <input type="radio" class="btn-check" name="btnradio16" id="btnradio16_2" value="2" autocomplete="off" >
  <label class="btn btn-outline-primary" for="btnradio16_2">เคยใช้</label>
</div>
</div><br>
หากเคยใช้ โปรดระบุ
<div class="row">
          <div class="col-md-12">
            <div class="input-group input-group-sm mb-3">
            <span class="input-group-text">เมื่อปี พ.ศ. </span>
            <input type="text" class="form-control" name="D13" placeholder="" >
            <span class="input-group-text">และผลการพิจารณาคุณภาพอยู่ในระดับ </span>
            <input type="text" class="form-control" name="D14" placeholder=" " >
            <span class="input-group-text">ตามเกณฑ์ที่ ก.พ.อ. กำหนด</span>

            </div>						  
          </div>
        </div><br>

<div class="row">
          <div class="col-md-12">
            <div class="input-group input-group-sm mb-3">
            <span class="input-group-text">4.1.2.3</span>
              <input type="text" class="form-control" name="D15" placeholder="ชื่อผู้แต่ง(ปีที่พิมพ์)" >
              <input type="text" class="form-control" name="D17" placeholder="ชื่อบทความ ชื่อวารสาร ปีที่ ฉบับที่ เลขที่หน้า  " >
              <input type="text" class="form-control" name="D18" placeholder="อยู่ในฐานข้อมูลอะไร" >
            </div>						  
          </div>
        </div>
        
<div class="d-flex">
<div class="btn-group" role="group" style="height: 30px; width: 1200px;" aria-label="Basic radio toggle button group">
<span class="input-group-text">โดยมีบทบาทหน้าที่เป็น</span>
  <input type="radio" class="btn-check" name="btnradio17" id="btnradio17_1" value="First author" autocomplete="off" >
  <label class="btn btn-outline-primary" for="btnradio17_1">First author </label>
  
  <input type="radio" class="btn-check" name="btnradio17" id="btnradio17_2" value="Essentially intellectual contributor" autocomplete="off" >
  <label class="btn btn-outline-primary" for="btnradio17_2">Essentially intellectual contributor </label>
  
  <input type="radio" class="btn-check" name="btnradio17" id="btnradio17_3" value="Corresponding author" autocomplete="off" >
  <label class="btn btn-outline-primary" for="btnradio17_3">Corresponding author </label>

</div>
</div>

<div class="row">
          <div class="col-md-12">
            <div class="input-group input-group-sm mb-3">
            <span class="input-group-text">และถูกอ้างอิง(Citation) จำนวน</span>
            <input type="text" class="form-control" name="D19" placeholder="" >
            <span class="input-group-text">ครั้ง</span>
            <span class="input-group-text">Journal impact factor </span>
              <input type="text" class="form-control" name="D20" placeholder=" " >

            </div>						  
          </div>
        </div>

    
        <div class="d-flex">
<div class="btn-group" role="group" style="height: 30px; width: 1200px;" aria-label="Basic radio toggle button group">
<span class="input-group-text">ผลงานทางวิชาการในลักษณะอื่นนี้เคยใช้สำหรับการพิจารณาขอกำหนดตำแหน่งผู้ช่วยศาสตราจารย์มาแล้วหรือไม่

</span>

  <input type="radio" class="btn-check" name="btnradio19" id="btnradio19_1" value="1" autocomplete="off" >
  <label class="btn btn-outline-primary" for="btnradio19_1">ไม่เคยใช้</label>
  
  <input type="radio" class="btn-check" name="btnradio19" id="btnradio19_2" value="2" autocomplete="off" >
  <label class="btn btn-outline-primary" for="btnradio19_2">เคยใช้</label>
</div>
</div><br>
หากเคยใช้ โปรดระบุ
<div class="row">
          <div class="col-md-12">
            <div class="input-group input-group-sm mb-3">
            <span class="input-group-text">เมื่อปี พ.ศ. </span>
            <input type="text" class="form-control" name="D21" placeholder="" >
            <span class="input-group-text">และผลการพิจารณาคุณภาพอยู่ในระดับ </span>
            <input type="text" class="form-control" name="D22" placeholder=" " >
            <span class="input-group-text">ตามเกณฑ์ที่ ก.พ.อ. กำหนด</span>

            </div>						  
          </div>
        </div><br>

        4.1.3	ตำรา หนังสือ หรือบทความทางวิชาการ
        <div class="row">
          <div class="col-md-12">
            <div class="input-group input-group-sm mb-3">
            <span class="input-group-text">4.1.3.1</span>
              <input type="text" class="form-control" name="D30" placeholder="ชื่อผู้แต่ง(ปีที่พิมพ์)" >
              <input type="text" class="form-control" name="D31" placeholder="ชื่อบทความ ชื่อวารสาร ปีที่ ฉบับที่ เลขที่หน้า  " >
              <input type="text" class="form-control" name="D32" placeholder="อยู่ในฐานข้อมูลอะไร" >
            </div>						  
          </div>
        </div>
        
<div class="d-flex">
<div class="btn-group" role="group" style="height: 30px; width: 1200px;" aria-label="Basic radio toggle button group">
<span class="input-group-text">โดยมีบทบาทหน้าที่เป็น</span>
  <input type="radio" class="btn-check" name="btnradi81" id="btnradio81_1" value="First author" autocomplete="off" >
  <label class="btn btn-outline-primary" for="btnradio81_1">First author </label>
  
  <input type="radio" class="btn-check" name="btnradio81" id="btnradio81_2" value="Essentially intellectual contributor" autocomplete="off" >
  <label class="btn btn-outline-primary" for="btnradio81_2">Essentially intellectual contributor </label>
  
  <input type="radio" class="btn-check" name="btnradio81" id="btnradio81_3" value="Corresponding author" autocomplete="off" >
  <label class="btn btn-outline-primary" for="btnradio81_3">Corresponding author </label>

</div>
</div>

<div class="row">
          <div class="col-md-12">
            <div class="input-group input-group-sm mb-3">
            <span class="input-group-text">และถูกอ้างอิง(Citation) จำนวน</span>
            <input type="text" class="form-control" name="D33" placeholder="" >
            <span class="input-group-text">ครั้ง</span>
            <span class="input-group-text">Journal impact factor </span>
              <input type="text" class="form-control" name="D34" placeholder=" " >

            </div>						  
          </div>
        </div>

        
        <div class="d-flex">
<div class="btn-group" role="group" style="height: 30px; width: 1200px;" aria-label="Basic radio toggle button group">
<span class="input-group-text">ผลงานนี้เคยใช้สำหรับการพิจารณาขอกำหนดตำแหน่งผู้ช่วยศาสตราจารย์มาแล้วหรือไม่

</span>

  <input type="radio" class="btn-check" name="btnradio22" id="btnradio22_1" value="1" autocomplete="off" >
  <label class="btn btn-outline-primary" for="btnradio22_1">ไม่เคยใช้</label>
  
  <input type="radio" class="btn-check" name="btnradio22" id="btnradio22_2" value="2" autocomplete="off" >
  <label class="btn btn-outline-primary" for="btnradio22_2">เคยใช้</label>
</div>
</div><br>
หากเคยใช้ โปรดระบุ
<div class="row">
          <div class="col-md-12">
            <div class="input-group input-group-sm mb-3">
            <span class="input-group-text">เมื่อปี พ.ศ. </span>
            <input type="text" class="form-control" name="D35" placeholder="" >
            <span class="input-group-text">และผลการพิจารณาคุณภาพอยู่ในระดับ </span>
            <input type="text" class="form-control" name="D36" placeholder=" " >
            <span class="input-group-text">ตามเกณฑ์ที่ ก.พ.อ. กำหนด</span>

            </div>						  
          </div>
        </div><br>
        
        <div class="row">
          <div class="col-md-12">
            <div class="input-group input-group-sm mb-3">
            <span class="input-group-text">4.1.3.2</span>
              <input type="text" class="form-control" name="D37" placeholder="ชื่อผู้แต่ง(ปีที่พิมพ์)" >
              <input type="text" class="form-control" name="D38" placeholder="ชื่อบทความ ชื่อวารสาร ปีที่ ฉบับที่ เลขที่หน้า  " >
              <input type="text" class="form-control" name="D39" placeholder="อยู่ในฐานข้อมูลอะไร" >
            </div>						  
          </div>
        </div>
        
<div class="d-flex">
<div class="btn-group" role="group" style="height: 30px; width: 1200px;" aria-label="Basic radio toggle button group">
<span class="input-group-text">โดยมีบทบาทหน้าที่เป็น</span>
  <input type="radio" class="btn-check" name="btnradio23" id="btnradio23_1" value="First author" autocomplete="off" >
  <label class="btn btn-outline-primary" for="btnradio23_1">First author </label>
  
  <input type="radio" class="btn-check" name="btnradio23" id="btnradio23_2" value="Essentially intellectual contributor" autocomplete="off" >
  <label class="btn btn-outline-primary" for="btnradio23_2">Essentially intellectual contributor </label>
  
  <input type="radio" class="btn-check" name="btnradio23" id="btnradio23_3" value="Corresponding author" autocomplete="off" >
  <label class="btn btn-outline-primary" for="btnradio23_3">Corresponding author </label>

</div>
</div>

<div class="row">
          <div class="col-md-12">
            <div class="input-group input-group-sm mb-3">
            <span class="input-group-text">และถูกอ้างอิง(Citation) จำนวน</span>
            <input type="text" class="form-control" name="D40" placeholder="" >
            <span class="input-group-text">ครั้ง</span>
            <span class="input-group-text">Journal impact factor </span>
              <input type="text" class="form-control" name="D41" placeholder=" " >

            </div>						  
          </div>
        </div>

        
        <div class="d-flex">
<div class="btn-group" role="group" style="height: 30px; width: 1200px;" aria-label="Basic radio toggle button group">
<span class="input-group-text">ผลงานนี้เคยใช้สำหรับการพิจารณาขอกำหนดตำแหน่งผู้ช่วยศาสตราจารย์มาแล้วหรือไม่

</span>

  <input type="radio" class="btn-check" name="btnradio24" id="btnradio24_1" value="1" autocomplete="off" >
  <label class="btn btn-outline-primary" for="btnradio24_1">ไม่เคยใช้</label>
  
  <input type="radio" class="btn-check" name="btnradio24" id="btnradio24_2" value="2" autocomplete="off" >
  <label class="btn btn-outline-primary" for="btnradio24_2">เคยใช้</label>
</div>
</div><br>
หากเคยใช้ โปรดระบุ
<div class="row">
          <div class="col-md-12">
            <div class="input-group input-group-sm mb-3">
            <span class="input-group-text">เมื่อปี พ.ศ. </span>
            <input type="text" class="form-control" name="D42" placeholder="" >
            <span class="input-group-text">และผลการพิจารณาคุณภาพอยู่ในระดับ </span>
            <input type="text" class="form-control" name="D43" placeholder=" " >
            <span class="input-group-text">ตามเกณฑ์ที่ ก.พ.อ. กำหนด</span>

            </div>						  
          </div>
        </div><br>

        <div class="row">
        <div class="col-md-12">
            <div class="input-group input-group-sm mb-3">
            <span class="input-group-text">4.1.3.3</span>
              <input type="text" class="form-control" name="E1" placeholder="ชื่อผู้แต่ง(ปีที่พิมพ์)" >
              <input type="text" class="form-control" name="E2" placeholder="ชื่อบทความ ชื่อวารสาร ปีที่ ฉบับที่ เลขที่หน้า  " >
              <input type="text" class="form-control" name="E3" placeholder="อยู่ในฐานข้อมูลอะไร" >
            </div>						  
          </div>
        </div>
        
<div class="d-flex">
<div class="btn-group" role="group" style="height: 30px; width: 1200px;" aria-label="Basic radio toggle button group">
<span class="input-group-text">โดยมีบทบาทหน้าที่เป็น</span>
  <input type="radio" class="btn-check" name="btnradio25" id="btnradio25_1" value="First author" autocomplete="off" >
  <label class="btn btn-outline-primary" for="btnradio25_1">First author </label>
  
  <input type="radio" class="btn-check" name="btnradio25" id="btnradio25_2" value="Essentially intellectual contributor" autocomplete="off" >
  <label class="btn btn-outline-primary" for="btnradio25_2">Essentially intellectual contributor </label>
  
  <input type="radio" class="btn-check" name="btnradio25" id="btnradio25_3" value="Corresponding author" autocomplete="off" >
  <label class="btn btn-outline-primary" for="btnradio25_3">Corresponding author </label>

</div>
</div>

<div class="row">
          <div class="col-md-12">
            <div class="input-group input-group-sm mb-3">
            <span class="input-group-text">และถูกอ้างอิง(Citation) จำนวน</span>
            <input type="text" class="form-control" name="E4" placeholder="" >
            <span class="input-group-text">ครั้ง</span>
            <span class="input-group-text">Journal impact factor </span>
              <input type="text" class="form-control" name="E5" placeholder=" " >

            </div>						  
          </div>
        </div>

        
        <div class="d-flex">
<div class="btn-group" role="group" style="height: 30px; width: 1200px;" aria-label="Basic radio toggle button group">
<span class="input-group-text">ผลงานนี้เคยใช้สำหรับการพิจารณาขอกำหนดตำแหน่งผู้ช่วยศาสตราจารย์มาแล้วหรือไม่

</span>

  <input type="radio" class="btn-check" name="btnradio26" id="btnradio26_1" value="1" autocomplete="off" >
  <label class="btn btn-outline-primary" for="btnradio26_1">ไม่เคยใช้</label>
  
  <input type="radio" class="btn-check" name="btnradio26" id="btnradio26_2" value="2" autocomplete="off" >
  <label class="btn btn-outline-primary" for="btnradio26_2">เคยใช้</label>
</div>
</div><br>
หากเคยใช้ โปรดระบุ
<div class="row">
          <div class="col-md-12">
            <div class="input-group input-group-sm mb-3">
            <span class="input-group-text">เมื่อปี พ.ศ. </span>
            <input type="text" class="form-control" name="E6" placeholder="" >
            <span class="input-group-text">และผลการพิจารณาคุณภาพอยู่ในระดับ </span>
            <input type="text" class="form-control" name="E7" placeholder=" " >
            <span class="input-group-text">ตามเกณฑ์ที่ ก.พ.อ. กำหนด</span>

            </div>						  
          </div>
        </div><br>
        
      </div> 

      <!-- 4.2 -->
      <div class="" id="show2" style="display:none;">
        4.2 ผลงานทางวิชาการที่เสนอเพื่อประกอบการพิจารณาตำแหน่ง รองศาสตราจารย์<br>
        4.2.1 ผลงานวิจัย
        <div class="row">
          <div class="col-md-12">
            <div class="input-group input-group-sm mb-3">
            <span class="input-group-text">4.2.1.1</span>
              <input type="text" class="form-control" name="E15" placeholder="ชื่อผู้แต่ง(ปีที่พิมพ์)" >
              <input type="text" class="form-control" name="E16" placeholder="ชื่อบทความ ชื่อวารสาร ปีที่ ฉบับที่ เลขที่หน้า  " >
              <input type="text" class="form-control" name="E17" placeholder="อยู่ในฐานข้อมูลอะไร" >
            </div>						  
          </div>
        </div>
        
<div class="d-flex">
<div class="btn-group" role="group" style="height: 30px; width: 1200px;" aria-label="Basic radio toggle button group">
<span class="input-group-text">โดยมีบทบาทหน้าที่เป็น</span>
  <input type="radio" class="btn-check" name="btnradio29" id="btnradio29_1" value="First author" autocomplete="off" >
  <label class="btn btn-outline-primary" for="btnradio29_1">First author </label>
  
  <input type="radio" class="btn-check" name="btnradio29" id="btnradio29_2" value="Essentially intellectual contributor" autocomplete="off" >
  <label class="btn btn-outline-primary" for="btnradio29_2">Essentially intellectual contributor </label>
  
  <input type="radio" class="btn-check" name="btnradio29" id="btnradio29_3" value="Corresponding author" autocomplete="off" >
  <label class="btn btn-outline-primary" for="btnradio29_3">Corresponding author </label>

</div>
</div>

<div class="row">
          <div class="col-md-12">
            <div class="input-group input-group-sm mb-3">
            <span class="input-group-text">และถูกอ้างอิง(Citation) จำนวน</span>
            <input type="text" class="form-control" name="E18" placeholder="" >
            <span class="input-group-text">ครั้ง</span>
            <span class="input-group-text">Journal impact factor </span>
              <input type="text" class="form-control" name="E19" placeholder=" " >

            </div>						  
          </div>
        </div>

        
        <div class="d-flex">
<div class="btn-group" role="group" style="height: 30px; width: 1200px;" aria-label="Basic radio toggle button group">
<span class="input-group-text">ผลงานวิจัยนี้เคยใช้สำหรับการพิจารณาขอกำหนดตำแหน่งผู้ช่วยศาสตราจารย์ และ/หรือตำแหน่งรองศาสตราจารย์
มาแล้วหรือไม่


</span>

  <input type="radio" class="btn-check" name="btnradio30" id="btnradio30_1" value="1" autocomplete="off" >
  <label class="btn btn-outline-primary" for="btnradio30_1">ไม่เคยใช้</label>
  
  <input type="radio" class="btn-check" name="btnradio30" id="btnradio30_2" value="2" autocomplete="off" >
  <label class="btn btn-outline-primary" for="btnradio30_2">เคยใช้</label>
</div>
</div><br>
หากเคยใช้ โปรดระบุ
<div class="row">
          <div class="col-md-12">
            <div class="input-group input-group-sm mb-3">
            <span class="input-group-text">เมื่อปี พ.ศ. </span>
            <input type="text" class="form-control" name="E20" placeholder="" >
            <span class="input-group-text">และผลการพิจารณาคุณภาพอยู่ในระดับ </span>
            <input type="text" class="form-control" name="E21" placeholder=" " >
            <span class="input-group-text">ตามเกณฑ์ที่ ก.พ.อ. กำหนด</span>

            </div>						  
          </div>
        </div><br>
        
        <div class="row">
          <div class="col-md-12">
            <div class="input-group input-group-sm mb-3">
            <span class="input-group-text">4.2.1.2</span>
              <input type="text" class="form-control" name="E22" placeholder="ชื่อผู้แต่ง(ปีที่พิมพ์)" >
              <input type="text" class="form-control" name="E23" placeholder="ชื่อบทความ ชื่อวารสาร ปีที่ ฉบับที่ เลขที่หน้า  " >
              <input type="text" class="form-control" name="E24" placeholder="อยู่ในฐานข้อมูลอะไร" >
            </div>						  
          </div>
        </div>
        
<div class="d-flex">
<div class="btn-group" role="group" style="height: 30px; width: 1200px;" aria-label="Basic radio toggle button group">
<span class="input-group-text">โดยมีบทบาทหน้าที่เป็น</span>
  <input type="radio" class="btn-check" name="btnradio31" id="btnradio31_1" value="First author" autocomplete="off" >
  <label class="btn btn-outline-primary" for="btnradio31_1">First author </label>
  
  <input type="radio" class="btn-check" name="btnradio31" id="btnradio31_2" value="Essentially intellectual contributor" autocomplete="off" >
  <label class="btn btn-outline-primary" for="btnradio31_2">Essentially intellectual contributor </label>
  
  <input type="radio" class="btn-check" name="btnradio31" id="btnradio31_3" value="Corresponding author" autocomplete="off" >
  <label class="btn btn-outline-primary" for="btnradio31_3">Corresponding author </label>

</div>
</div>

<div class="row">
          <div class="col-md-12">
            <div class="input-group input-group-sm mb-3">
            <span class="input-group-text">และถูกอ้างอิง(Citation) จำนวน</span>
            <input type="text" class="form-control" name="E25" placeholder="" >
            <span class="input-group-text">ครั้ง</span>
            <span class="input-group-text">Journal impact factor </span>
              <input type="text" class="form-control" name="E26" placeholder=" " >

            </div>						  
          </div>
        </div>

        
        <div class="d-flex">
<div class="btn-group" role="group" style="height: 30px; width: 1200px;" aria-label="Basic radio toggle button group">
<span class="input-group-text">ผลงานวิจัยนี้เคยใช้สำหรับการพิจารณาขอกำหนดตำแหน่งผู้ช่วยศาสตราจารย์ และ/หรือตำแหน่งรองศาสตราจารย์
มาแล้วหรือไม่


</span>

  <input type="radio" class="btn-check" name="btnradio32" id="btnradio32_1" value="1" autocomplete="off" >
  <label class="btn btn-outline-primary" for="btnradio32_1">ไม่เคยใช้</label>
  
  <input type="radio" class="btn-check" name="btnradio32" id="btnradio32_2" value="2" autocomplete="off" >
  <label class="btn btn-outline-primary" for="btnradio32_2">เคยใช้</label>
</div>
</div><br>
หากเคยใช้ โปรดระบุ
<div class="row">
          <div class="col-md-12">
            <div class="input-group input-group-sm mb-3">
            <span class="input-group-text">เมื่อปี พ.ศ. </span>
            <input type="text" class="form-control" name="E27" placeholder="" >
            <span class="input-group-text">และผลการพิจารณาคุณภาพอยู่ในระดับ </span>
            <input type="text" class="form-control" name="E28" placeholder=" " >
            <span class="input-group-text">ตามเกณฑ์ที่ ก.พ.อ. กำหนด</span>

            </div>						  
          </div>
        </div><br>
        
        <div class="row">
          <div class="col-md-12">
            <div class="input-group input-group-sm mb-3">
            <span class="input-group-text">4.2.1.3</span>
              <input type="text" class="form-control" name="E29" placeholder="ชื่อผู้แต่ง(ปีที่พิมพ์)" >
              <input type="text" class="form-control" name="E30" placeholder="ชื่อบทความ ชื่อวารสาร ปีที่ ฉบับที่ เลขที่หน้า  " >
              <input type="text" class="form-control" name="E31" placeholder="อยู่ในฐานข้อมูลอะไร" >
            </div>						  
          </div>
        </div>
        
<div class="d-flex">
<div class="btn-group" role="group" style="height: 30px; width: 1200px;" aria-label="Basic radio toggle button group">
<span class="input-group-text">โดยมีบทบาทหน้าที่เป็น</span>
  <input type="radio" class="btn-check" name="btnradio33" id="btnradio33_1" value="First author" autocomplete="off" >
  <label class="btn btn-outline-primary" for="btnradio33_1">First author </label>
  
  <input type="radio" class="btn-check" name="btnradio33" id="btnradio33_2" value="Essentially intellectual contributor" autocomplete="off" >
  <label class="btn btn-outline-primary" for="btnradio33_2">Essentially intellectual contributor </label>
  
  <input type="radio" class="btn-check" name="btnradio33" id="btnradio33_3" value="Corresponding author" autocomplete="off" >
  <label class="btn btn-outline-primary" for="btnradio33_3">Corresponding author </label>

</div>
</div>

<div class="row">
          <div class="col-md-12">
            <div class="input-group input-group-sm mb-3">
            <span class="input-group-text">และถูกอ้างอิง(Citation) จำนวน</span>
            <input type="text" class="form-control" name="E32" placeholder="" >
            <span class="input-group-text">ครั้ง</span>
            <span class="input-group-text">Journal impact factor </span>
              <input type="text" class="form-control" name="E33" placeholder=" " >

            </div>						  
          </div>
        </div>

        
        <div class="d-flex">
<div class="btn-group" role="group" style="height: 30px; width: 1200px;" aria-label="Basic radio toggle button group">
<span class="input-group-text">ผลงานวิจัยนี้เคยใช้สำหรับการพิจารณาขอกำหนดตำแหน่งผู้ช่วยศาสตราจารย์ และ/หรือตำแหน่งรองศาสตราจารย์
มาแล้วหรือไม่


</span>

  <input type="radio" class="btn-check" name="btnradio34" id="btnradio34_1" value="1" autocomplete="off" >
  <label class="btn btn-outline-primary" for="btnradio34_1">ไม่เคยใช้</label>
  
  <input type="radio" class="btn-check" name="btnradio34" id="btnradio34_2" value="2" autocomplete="off" >
  <label class="btn btn-outline-primary" for="btnradio34_2">เคยใช้</label>
</div>
</div><br>
หากเคยใช้ โปรดระบุ
<div class="row">
          <div class="col-md-12">
            <div class="input-group input-group-sm mb-3">
            <span class="input-group-text">เมื่อปี พ.ศ. </span>
            <input type="text" class="form-control" name="E34" placeholder="" >
            <span class="input-group-text">และผลการพิจารณาคุณภาพอยู่ในระดับ </span>
            <input type="text" class="form-control" name="E35" placeholder=" " >
            <span class="input-group-text">ตามเกณฑ์ที่ ก.พ.อ. กำหนด</span>

            </div>						  
          </div>
        </div><br>


4.2.2	ผลงานทางวิชาการในลักษณะอื่น 
<div class="row">
      <div class="col-lg-6">
        <div class="input-group input-group-sm mb-3">
          <select class="form-select mb-0.8" name="op422" id="op422" >
                    <option value="">ลักษณะของผลงาน</option>
                    <option value='ผลงานทางวิชาการเพื่ออุตสาหกรรม'>ผลงานทางวิชาการเพื่ออุตสาหกรรม</option>
                    <option value='ผลงานวิชาการเพื่อพัฒนาการเรียนการสอนและการเรียนรู้'>ผลงานวิชาการเพื่อพัฒนาการเรียนการสอนและการเรียนรู้</option>
                    <option value='ผลงานทางวิชาการเพื่อพัฒนานโยบายสาธารณะ'>ผลงานทางวิชาการเพื่อพัฒนานโยบายสาธารณะ</option>
                    <option value='กรณีศึกษา (case study)'>กรณีศึกษา (case study)</option>
                    <option value='งานแปล'>งานแปล</option>
                    <option value='พจนานุกรม สารานุกรม นามานุกรม  และงานวิชาการในลักษณะอื่นเดียวกัน'>พจนานุกรม สารานุกรม นามานุกรม  และงานวิชาการในลักษณะอื่นเดียวกัน</option>
                    <option value='ผลงานสร้างสรรค์ด้านวิทยาศาสตร์และเทคโนโลยี'>ผลงานสร้างสรรค์ด้านวิทยาศาสตร์และเทคโนโลยี</option>
                    <option value='ผลงานสร้างสรรค์ด้านสุนทรียะ ศิลปะ'>ผลงานสร้างสรรค์ด้านสุนทรียะ ศิลปะ</option>
                    <option value='สิทธิบัตร'>สิทธิบัตร</option>
                    <option value='ซอฟต์แวร์'>ซอฟต์แวร์</option>
                    <option value='ผลงานรับใช้ท้องถิ่นและสังคม'>ผลงานรับใช้ท้องถิ่นและสังคม</option>
                    <option value='ผลงานนวัตกรรม'>ผลงานนวัตกรรม</option>
                </select>
        </div>						  
      </div>				  
      </div> 


<div class="row">
          <div class="col-md-12">
            <div class="input-group input-group-sm mb-3">
            <span class="input-group-text">4.2.2.1</span>
              <input type="text" class="form-control" name="F1" placeholder="ชื่อผู้แต่ง(ปีที่พิมพ์)" >
              <input type="text" class="form-control" name="F2" placeholder="ชื่อบทความ ชื่อวารสาร ปีที่ ฉบับที่ เลขที่หน้า  " >
              <input type="text" class="form-control" name="F3" placeholder="อยู่ในฐานข้อมูลอะไร" >
            </div>						  
          </div>
        </div>
        
<div class="d-flex">
<div class="btn-group" role="group" style="height: 30px; width: 1200px;" aria-label="Basic radio toggle button group">
<span class="input-group-text">โดยมีบทบาทหน้าที่เป็น</span>
  <input type="radio" class="btn-check" name="btnradio35" id="btnradio35_1" value="First author" autocomplete="off" >
  <label class="btn btn-outline-primary" for="btnradio35_1">First author </label>
  
  <input type="radio" class="btn-check" name="btnradio35" id="btnradio35_2" value="Essentially intellectual contributor" autocomplete="off" >
  <label class="btn btn-outline-primary" for="btnradio35_2">Essentially intellectual contributor </label>
  
  <input type="radio" class="btn-check" name="btnradio35" id="btnradio35_3" value="Corresponding author" autocomplete="off" >
  <label class="btn btn-outline-primary" for="btnradio35_3">Corresponding author </label>

</div>
</div>

<div class="row">
          <div class="col-md-12">
            <div class="input-group input-group-sm mb-3">
            <span class="input-group-text">และถูกอ้างอิง(Citation) จำนวน</span>
            <input type="text" class="form-control" name="F4" placeholder="" >
            <span class="input-group-text">ครั้ง</span>
            <span class="input-group-text">Journal impact factor </span>
              <input type="text" class="form-control" name="F5" placeholder=" " >

            </div>						  
          </div>
        </div>

        
        <div class="d-flex">
<div class="btn-group" role="group" style="height: 30px; width: 1200px;" aria-label="Basic radio toggle button group">
<span class="input-group-text">ผลงานทางวิชาการในลักษณะอื่นนี้เคยใช้สำหรับการพิจารณาขอกำหนดตำแหน่งผู้ช่วยศาสตราจารย์ และ/หรือตำแหน่งรองศาสตราจารย์มาแล้วหรือไม่


</span>

  <input type="radio" class="btn-check" name="btnradio36" id="btnradio36_1" value="1" autocomplete="off" >
  <label class="btn btn-outline-primary" for="btnradio36_1">ไม่เคยใช้</label>
  
  <input type="radio" class="btn-check" name="btnradio36" id="btnradio36_2" value="2" autocomplete="off" >
  <label class="btn btn-outline-primary" for="btnradio36_2">เคยใช้</label>
</div>
</div><br>
หากเคยใช้ โปรดระบุ
<div class="row">
          <div class="col-md-12">
            <div class="input-group input-group-sm mb-3">
            <span class="input-group-text">เมื่อปี พ.ศ. </span>
            <input type="text" class="form-control" name="F6" placeholder="" >
            <span class="input-group-text">และผลการพิจารณาคุณภาพอยู่ในระดับ </span>
            <input type="text" class="form-control" name="F7" placeholder=" " >
            <span class="input-group-text">ตามเกณฑ์ที่ ก.พ.อ. กำหนด</span>

            </div>						  
          </div>
        </div><br>
        
        <div class="row">
          <div class="col-md-12">
            <div class="input-group input-group-sm mb-3">
            <span class="input-group-text">4.2.2.2</span>
              <input type="text" class="form-control" name="F8" placeholder="ชื่อผู้แต่ง(ปีที่พิมพ์)" >
              <input type="text" class="form-control" name="F9" placeholder="ชื่อบทความ ชื่อวารสาร ปีที่ ฉบับที่ เลขที่หน้า  " >
              <input type="text" class="form-control" name="F10" placeholder="อยู่ในฐานข้อมูลอะไร" >
            </div>						  
          </div>
        </div>
        
<div class="d-flex">
<div class="btn-group" role="group" style="height: 30px; width: 1200px;" aria-label="Basic radio toggle button group">
<span class="input-group-text">โดยมีบทบาทหน้าที่เป็น</span>
  <input type="radio" class="btn-check" name="btnradio37" id="btnradio37_1" value="First author" autocomplete="off" >
  <label class="btn btn-outline-primary" for="btnradio37_1">First author </label>
  
  <input type="radio" class="btn-check" name="btnradio37" id="btnradio37_2" value="Essentially intellectual contributor" autocomplete="off" >
  <label class="btn btn-outline-primary" for="btnradio37_2">Essentially intellectual contributor </label>
  
  <input type="radio" class="btn-check" name="btnradio37" id="btnradio37_3" value="Corresponding author" autocomplete="off" >
  <label class="btn btn-outline-primary" for="btnradio37_3">Corresponding author </label>

</div>
</div>

<div class="row">
          <div class="col-md-12">
            <div class="input-group input-group-sm mb-3">
            <span class="input-group-text">และถูกอ้างอิง(Citation) จำนวน</span>
            <input type="text" class="form-control" name="F11" placeholder="" >
            <span class="input-group-text">ครั้ง</span>
            <span class="input-group-text">Journal impact factor </span>
              <input type="text" class="form-control" name="F19" placeholder=" " >

            </div>						  
          </div>
        </div>

        
        <div class="d-flex">
<div class="btn-group" role="group" style="height: 30px; width: 1200px;" aria-label="Basic radio toggle button group">
<span class="input-group-text">ผลงานวิจัยนี้เคยใช้สำหรับการพิจารณาขอกำหนดตำแหน่งผู้ช่วยศาสตราจารย์ และ/หรือตำแหน่งรองศาสตราจารย์มาแล้วหรือไม่


</span>

  <input type="radio" class="btn-check" name="btnradio38" id="btnradio38_1" value="1" autocomplete="off" >
  <label class="btn btn-outline-primary" for="btnradio38_1">ไม่เคยใช้</label>
  
  <input type="radio" class="btn-check" name="btnradio38" id="btnradio38_2" value="2" autocomplete="off" >
  <label class="btn btn-outline-primary" for="btnradio38_2">เคยใช้</label>
</div>
</div><br>
หากเคยใช้ โปรดระบุ
<div class="row">
          <div class="col-md-12">
            <div class="input-group input-group-sm mb-3">
            <span class="input-group-text">เมื่อปี พ.ศ. </span>
            <input type="text" class="form-control" name="F22" placeholder="" >
            <span class="input-group-text">และผลการพิจารณาคุณภาพอยู่ในระดับ </span>
            <input type="text" class="form-control" name="F23" placeholder=" " >
            <span class="input-group-text">ตามเกณฑ์ที่ ก.พ.อ. กำหนด</span>

            </div>						  
          </div>
        </div><br>
        
        <div class="row">
          <div class="col-md-12">
            <div class="input-group input-group-sm mb-3">
            <span class="input-group-text">4.2.2.3</span>
              <input type="text" class="form-control" name="F24" placeholder="ชื่อผู้แต่ง(ปีที่พิมพ์)" >
              <input type="text" class="form-control" name="F25" placeholder="ชื่อบทความ ชื่อวารสาร ปีที่ ฉบับที่ เลขที่หน้า  " >
              <input type="text" class="form-control" name="F26" placeholder="อยู่ในฐานข้อมูลอะไร" >
            </div>						  
          </div>
        </div>
        
<div class="d-flex">
<div class="btn-group" role="group" style="height: 30px; width: 1200px;" aria-label="Basic radio toggle button group">
<span class="input-group-text">โดยมีบทบาทหน้าที่เป็น</span>
  <input type="radio" class="btn-check" name="btnradio39" id="btnradio39_1" value="First author" autocomplete="off" >
  <label class="btn btn-outline-primary" for="btnradio39_1">First author </label>
  
  <input type="radio" class="btn-check" name="btnradio39" id="btnradio39_2" value="Essentially intellectual contributor" autocomplete="off" >
  <label class="btn btn-outline-primary" for="btnradio39_2">Essentially intellectual contributor </label>
  
  <input type="radio" class="btn-check" name="btnradio39" id="btnradio39_3" value="Corresponding author" autocomplete="off" >
  <label class="btn btn-outline-primary" for="btnradio39_3">Corresponding author </label>

</div>
</div>

<div class="row">
          <div class="col-md-12">
            <div class="input-group input-group-sm mb-3">
            <span class="input-group-text">และถูกอ้างอิง(Citation) จำนวน</span>
            <input type="text" class="form-control" name="F27" placeholder="" >
            <span class="input-group-text">ครั้ง</span>
            <span class="input-group-text">Journal impact factor </span>
              <input type="text" class="form-control" name="F28" placeholder=" " >

            </div>						  
          </div>
        </div>

        
        <div class="d-flex">
<div class="btn-group" role="group" style="height: 30px; width: 1200px;" aria-label="Basic radio toggle button group">
<span class="input-group-text">ผลงานวิจัยนี้เคยใช้สำหรับการพิจารณาขอกำหนดตำแหน่งผู้ช่วยศาสตราจารย์ และ/หรือตำแหน่งรองศาสตราจารย์
มาแล้วหรือไม่


</span>

  <input type="radio" class="btn-check" name="btnradio40" id="btnradio40_1" value="1" autocomplete="off" >
  <label class="btn btn-outline-primary" for="btnradio40_1">ไม่เคยใช้</label>
  
  <input type="radio" class="btn-check" name="btnradio40" id="btnradio40_2" value="2" autocomplete="off" >
  <label class="btn btn-outline-primary" for="btnradio40_2">เคยใช้</label>
</div>
</div><br>
หากเคยใช้ โปรดระบุ
<div class="row">
          <div class="col-md-12">
            <div class="input-group input-group-sm mb-3">
            <span class="input-group-text">เมื่อปี พ.ศ. </span>
            <input type="text" class="form-control" name="F29" placeholder="" >
            <span class="input-group-text">และผลการพิจารณาคุณภาพอยู่ในระดับ </span>
            <input type="text" class="form-control" name="F30" placeholder=" " >
            <span class="input-group-text">ตามเกณฑ์ที่ ก.พ.อ. กำหนด</span>

            </div>						  
          </div>
        </div><br>

        4.2.3	ตำรา หรือ หนังสือ 
        <div class="row">
          <div class="col-md-12">
            <div class="input-group input-group-sm mb-3">
            <span class="input-group-text">4.2.3.1</span>
              <input type="text" class="form-control" name="F31" placeholder="ชื่อผู้แต่ง(ปีที่พิมพ์)" >
              <input type="text" class="form-control" name="F32" placeholder="ชื่อบทความ ชื่อวารสาร ปีที่ ฉบับที่ เลขที่หน้า  " >
              <input type="text" class="form-control" name="F33" placeholder="อยู่ในฐานข้อมูลอะไร" >
            </div>						  
          </div>
        </div>
        
<div class="d-flex">
<div class="btn-group" role="group" style="height: 30px; width: 1200px;" aria-label="Basic radio toggle button group">
<span class="input-group-text">โดยมีบทบาทหน้าที่เป็น</span>
  <input type="radio" class="btn-check" name="btnradio41" id="btnradio41_1" value="First author" autocomplete="off" >
  <label class="btn btn-outline-primary" for="btnradio41_1">First author </label>
  
  <input type="radio" class="btn-check" name="btnradio41" id="btnradio41_2" value="Essentially intellectual contributor" autocomplete="off" >
  <label class="btn btn-outline-primary" for="btnradio41_2">Essentially intellectual contributor </label>
  
  <input type="radio" class="btn-check" name="btnradio41" id="btnradio3_3" value="Corresponding author" autocomplete="off" >
  <label class="btn btn-outline-primary" for="btnradio41_3">Corresponding author </label>

</div>
</div>

<div class="row">
          <div class="col-md-12">
            <div class="input-group input-group-sm mb-3">
            <span class="input-group-text">และถูกอ้างอิง(Citation) จำนวน</span>
            <input type="text" class="form-control" name="F34" placeholder="" >
            <span class="input-group-text">ครั้ง</span>
            <span class="input-group-text">Journal impact factor </span>
              <input type="text" class="form-control" name="F35" placeholder=" " >

            </div>						  
          </div>
        </div>

        
        <div class="d-flex">
<div class="btn-group" role="group" style="height: 30px; width: 1200px;" aria-label="Basic radio toggle button group">
<span class="input-group-text">ผลงานวิจัยนี้เคยใช้สำหรับการพิจารณาขอกำหนดตำแหน่งผู้ช่วยศาสตราจารย์ และ/หรือตำแหน่งรองศาสตราจารย์
มาแล้วหรือไม่


</span>

  <input type="radio" class="btn-check" name="btnradio42" id="btnradio42_1" value="1" autocomplete="off" >
  <label class="btn btn-outline-primary" for="btnradio42_1">ไม่เคยใช้</label>
  
  <input type="radio" class="btn-check" name="btnradio42" id="btnradio42_2" value="2" autocomplete="off" >
  <label class="btn btn-outline-primary" for="btnradio42_2">เคยใช้</label>
</div>
</div><br>
หากเคยใช้ โปรดระบุ
<div class="row">
          <div class="col-md-12">
            <div class="input-group input-group-sm mb-3">
            <span class="input-group-text">เมื่อปี พ.ศ. </span>
            <input type="text" class="form-control" name="F36" placeholder="" >
            <span class="input-group-text">และผลการพิจารณาคุณภาพอยู่ในระดับ </span>
            <input type="text" class="form-control" name="F37" placeholder=" " >
            <span class="input-group-text">ตามเกณฑ์ที่ ก.พ.อ. กำหนด</span>

            </div>						  
          </div>
        </div><br>
        
        <div class="row">
          <div class="col-md-12">
            <div class="input-group input-group-sm mb-3">
            <span class="input-group-text">4.2.3.2</span>
              <input type="text" class="form-control" name="F38" placeholder="ชื่อผู้แต่ง(ปีที่พิมพ์)" >
              <input type="text" class="form-control" name="F39" placeholder="ชื่อบทความ ชื่อวารสาร ปีที่ ฉบับที่ เลขที่หน้า  " >
              <input type="text" class="form-control" name="F40" placeholder="อยู่ในฐานข้อมูลอะไร" >
            </div>						  
          </div>
        </div>
        
<div class="d-flex">
<div class="btn-group" role="group" style="height: 30px; width: 1200px;" aria-label="Basic radio toggle button group">
<span class="input-group-text">โดยมีบทบาทหน้าที่เป็น</span>
  <input type="radio" class="btn-check" name="btnradio43" id="btnradio43_1" value="First author" autocomplete="off" >
  <label class="btn btn-outline-primary" for="btnradio43_1">First author </label>
  
  <input type="radio" class="btn-check" name="btnradio43" id="btnradio43_2" value="Essentially intellectual contributor" autocomplete="off" >
  <label class="btn btn-outline-primary" for="btnradio43_2">Essentially intellectual contributor </label>
  
  <input type="radio" class="btn-check" name="btnradio43" id="btnradio43_3" value="Corresponding author" autocomplete="off" >
  <label class="btn btn-outline-primary" for="btnradio43_3">Corresponding author </label>

</div>
</div>

<div class="row">
          <div class="col-md-12">
            <div class="input-group input-group-sm mb-3">
            <span class="input-group-text">และถูกอ้างอิง(Citation) จำนวน</span>
            <input type="text" class="form-control" name="F41" placeholder="" >
            <span class="input-group-text">ครั้ง</span>
            <span class="input-group-text">Journal impact factor </span>
              <input type="text" class="form-control" name="F42" placeholder=" " >

            </div>						  
          </div>
        </div>

        
        <div class="d-flex">
<div class="btn-group" role="group" style="height: 30px; width: 1200px;" aria-label="Basic radio toggle button group">
<span class="input-group-text">ผลงานวิจัยนี้เคยใช้สำหรับการพิจารณาขอกำหนดตำแหน่งผู้ช่วยศาสตราจารย์ และ/หรือตำแหน่งรองศาสตราจารย์
มาแล้วหรือไม่


</span>

  <input type="radio" class="btn-check" name="btnradio44" id="btnradio44_1" value="1" autocomplete="off" >
  <label class="btn btn-outline-primary" for="btnradio44_1">ไม่เคยใช้</label>
  
  <input type="radio" class="btn-check" name="btnradio44" id="btnradio44_2" value="2" autocomplete="off" >
  <label class="btn btn-outline-primary" for="btnradio44_2">เคยใช้</label>
</div>
</div><br>
หากเคยใช้ โปรดระบุ
<div class="row">
          <div class="col-md-12">
            <div class="input-group input-group-sm mb-3">
            <span class="input-group-text">เมื่อปี พ.ศ. </span>
            <input type="text" class="form-control" name="F43" placeholder="" >
            <span class="input-group-text">และผลการพิจารณาคุณภาพอยู่ในระดับ </span>
            <input type="text" class="form-control" name="F44" placeholder=" " >
            <span class="input-group-text">ตามเกณฑ์ที่ ก.พ.อ. กำหนด</span>

            </div>						  
          </div>
        </div><br>
        


        <div class="row">
          <div class="col-md-12">
            <div class="input-group input-group-sm mb-3">
            <span class="input-group-text">4.2.3.3</span>
              <input type="text" class="form-control" name="G1" placeholder="ชื่อผู้แต่ง(ปีที่พิมพ์)" >
              <input type="text" class="form-control" name="G2" placeholder="ชื่อบทความ ชื่อวารสาร ปีที่ ฉบับที่ เลขที่หน้า  " >
              <input type="text" class="form-control" name="G3" placeholder="อยู่ในฐานข้อมูลอะไร" >
            </div>						  
          </div>
        </div>
        
<div class="d-flex">
<div class="btn-group" role="group" style="height: 30px; width: 1200px;" aria-label="Basic radio toggle button group">
<span class="input-group-text">โดยมีบทบาทหน้าที่เป็น</span>
  <input type="radio" class="btn-check" name="btnradio45" id="btnradio45_1" value="First author" autocomplete="off" >
  <label class="btn btn-outline-primary" for="btnradio45_1">First author </label>
  
  <input type="radio" class="btn-check" name="btnradio45" id="btnradio45_2" value="Essentially intellectual contributor" autocomplete="off" >
  <label class="btn btn-outline-primary" for="btnradio45_2">Essentially intellectual contributor </label>
  
  <input type="radio" class="btn-check" name="btnradio45" id="btnradio45_3" value="Corresponding author" autocomplete="off" >
  <label class="btn btn-outline-primary" for="btnradio45_3">Corresponding author </label>

</div>
</div>

<div class="row">
          <div class="col-md-12">
            <div class="input-group input-group-sm mb-3">
            <span class="input-group-text">และถูกอ้างอิง(Citation) จำนวน</span>
            <input type="text" class="form-control" name="G4" placeholder="" >
            <span class="input-group-text">ครั้ง</span>
            <span class="input-group-text">Journal impact factor </span>
              <input type="text" class="form-control" name="G5" placeholder=" " >

            </div>						  
          </div>
        </div>

        
        <div class="d-flex">
<div class="btn-group" role="group" style="height: 30px; width: 1200px;" aria-label="Basic radio toggle button group">
<span class="input-group-text">ผลงานวิจัยนี้เคยใช้สำหรับการพิจารณาขอกำหนดตำแหน่งผู้ช่วยศาสตราจารย์ และ/หรือตำแหน่งรองศาสตราจารย์
มาแล้วหรือไม่


</span>

  <input type="radio" class="btn-check" name="btnradio46" id="btnradio46_1" value="1" autocomplete="off" >
  <label class="btn btn-outline-primary" for="btnradio46_1">ไม่เคยใช้</label>
  
  <input type="radio" class="btn-check" name="btnradio46" id="btnradio46_2" value="2" autocomplete="off" >
  <label class="btn btn-outline-primary" for="btnradio46_2">เคยใช้</label>
</div>
</div><br>
หากเคยใช้ โปรดระบุ
<div class="row">
          <div class="col-md-12">
            <div class="input-group input-group-sm mb-3">
            <span class="input-group-text">เมื่อปี พ.ศ. </span>
            <input type="text" class="form-control" name="G6" placeholder="" >
            <span class="input-group-text">และผลการพิจารณาคุณภาพอยู่ในระดับ </span>
            <input type="text" class="form-control" name="G7" placeholder=" " >
            <span class="input-group-text">ตามเกณฑ์ที่ ก.พ.อ. กำหนด</span>

            </div>						  
          </div>
        </div><br>

        4.2.4 เอกสารหลักฐานสำหรับการเสนอขอกำหนดตำแหน่งทางวิชาการ ตามวิธีที่ 3<br>
        4.2.4.1 งานวิจัย <br>

        <div class="row">
        <div class="col-md-12">
          <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">1) งานวิจัยเรื่อง</span>
          <input type="text" class="form-control" name="G8" placeholder="" >
        </div>						  
      </div>
    </div>
    
    <div class="d-flex">
      <div class="btn-group" role="group" style="height: 30px; width: 1200px;" aria-label="Basic radio toggle button group">
        
      <span class="input-group-text">การเผยแพร่ในวารสารทางวิชาการในฐานข้อมูล Scopus</span>

  <input type="radio" class="btn-check" name="btnradio47" id="btnradio47_1" value="1" autocomplete="off" >
  <label class="btn btn-outline-primary" for="btnradio47_1">Quartile 1 </label>
  
  <input type="radio" class="btn-check" name="btnradio47" id="btnradio47_2" value="2" autocomplete="off" >
  <label class="btn btn-outline-primary" for="btnradio47_2">Quartile 2</label>
  </div>
  </div>
  <br>

<div class="d-flex">
  <div class="btn-group" role="group" style="height: 30px; width: 1200px;" aria-label="Basic radio toggle button group">
    
  <span class="input-group-text">บทบาทหน้าที่</span>

<input type="radio" class="btn-check" name="btnradio48" id="btnradio48_1" value="1" autocomplete="off" >
<label class="btn btn-outline-primary" for="btnradio48_1">ผู้ประพันธ์อันดับแรก (First author) </label>

<input type="radio" class="btn-check" name="btnradio48" id="btnradio48_2" value="2" autocomplete="off" >
<label class="btn btn-outline-primary" for="btnradio48_2">ผู้ประพันธ์บรรณกิจ (Corresponding author)</label>
</div>
</div>
<br>

<div class="row">
<div class="col-md-12">
  <div class="input-group input-group-sm mb-3">
  <span class="input-group-text">2) งานวิจัยเรื่อง</span>
  <input type="text" class="form-control" name="G9" placeholder="" >
</div>						  
</div>
</div>

<div class="d-flex">
<div class="btn-group" role="group" style="height: 30px; width: 1200px;" aria-label="Basic radio toggle button group">

<span class="input-group-text">การเผยแพร่ในวารสารทางวิชาการในฐานข้อมูล Scopus</span>

<input type="radio" class="btn-check" name="btnradio49" id="btnradio49_1" value="1" autocomplete="off" >
<label class="btn btn-outline-primary" for="btnradio49_1">Quartile 1 </label>

<input type="radio" class="btn-check" name="btnradio49" id="btnradio49_2" value="2" autocomplete="off" >
<label class="btn btn-outline-primary" for="btnradio49_2">Quartile 2</label>
</div></div><br>

<div class="d-flex">
<div class="btn-group" role="group" style="height: 30px; width: 1200px;" aria-label="Basic radio toggle button group">

<span class="input-group-text">บทบาทหน้าที่</span>

<input type="radio" class="btn-check" name="btnradio50" id="btnradio50_1" value="1" autocomplete="off" >
<label class="btn btn-outline-primary" for="btnradio50_1">ผู้ประพันธ์อันดับแรก (First author) </label>

<input type="radio" class="btn-check" name="btnradio50" id="btnradio50_2" value="2" autocomplete="off" >
<label class="btn btn-outline-primary" for="btnradio50_2">ผู้ประพันธ์บรรณกิจ (Corresponding author)</label>
</div></div><br>

<div class="row">
<div class="col-md-12">
  <div class="input-group input-group-sm mb-3">
  <span class="input-group-text">3) งานวิจัยเรื่อง</span>
  <input type="text" class="form-control" name="G10" placeholder="" >
</div>						  
</div>
</div>

<div class="d-flex">
<div class="btn-group" role="group" style="height: 30px; width: 1200px;" aria-label="Basic radio toggle button group">

<span class="input-group-text">การเผยแพร่ในวารสารทางวิชาการในฐานข้อมูล Scopus</span>

<input type="radio" class="btn-check" name="btnradio51" id="btnradio51_1" value="1" autocomplete="off" >
<label class="btn btn-outline-primary" for="btnradio51_1">Quartile 1 </label>

<input type="radio" class="btn-check" name="btnradio51" id="btnradio51_2" value="2" autocomplete="off" >
<label class="btn btn-outline-primary" for="btnradio51_2">Quartile 2</label>
</div></div><br>

<div class="d-flex">
<div class="btn-group" role="group" style="height: 30px; width: 1200px;" aria-label="Basic radio toggle button group">

<span class="input-group-text">บทบาทหน้าที่</span>

<input type="radio" class="btn-check" name="btnradio52" id="btnradio52_1" value="1" autocomplete="off" >
<label class="btn btn-outline-primary" for="btnradio52_1">ผู้ประพันธ์อันดับแรก (First author) </label>

<input type="radio" class="btn-check" name="btnradio52" id="btnradio52_2" value="2" autocomplete="off" >
<label class="btn btn-outline-primary" for="btnradio52_2">ผู้ประพันธ์บรรณกิจ (Corresponding author)</label>
</div></div><br>

<div class="row">
<div class="col-md-12">
  <div class="input-group input-group-sm mb-3">
  <span class="input-group-text">4.2.4.2	งานวิจัยที่ได้รับการอ้างอิงจากฐานข้อมูล Scopus จำนวน</span>
  <input type="text" class="form-control" name="G12" placeholder="" >
  <span class="input-group-text">เรื่อง</span>
  <span class="input-group-text">ได้รับการอ้างอิง</span>
  <input type="text" class="form-control" name="G13" placeholder="" >
  <span class="input-group-text">รายการ</span>
</div>						  
</div>
</div>

<div class="row">
<div class="col-md-12">
  <div class="input-group input-group-sm mb-3">
  <span class="input-group-text">4.2.4.3	ผู้ขอ มีค่า Life-time h-index (Scopus) </span>
  <input type="text" class="form-control" name="G14" placeholder="" >
</div>						  
</div>
</div>

<div class="row">
<div class="col-md-12">
  <div class="input-group input-group-sm mb-3">
  <span class="input-group-text">1) โครงการวิจัย</span>
  <span class="input-group-text">เรื่อง</span>
  <input type="text" class="form-control" name="G15" placeholder="" >
  <span class="input-group-text">ได้รับทุนจาก</span>
  <input type="text" class="form-control" name="G16" placeholder="" >
</div>						  
</div>
</div>

<div class="row">
<div class="col-md-12">
  <div class="input-group input-group-sm mb-3">
  <span class="input-group-text">2) โครงการวิจัย</span>
  <span class="input-group-text">เรื่อง</span>
  <input type="text" class="form-control" name="G17" placeholder="" >
  <span class="input-group-text">ได้รับทุนจาก</span>
  <input type="text" class="form-control" name="G18" placeholder="" >
</div>						  
</div>
</div>

<div class="row">
<div class="col-md-12">
  <div class="input-group input-group-sm mb-3">
  <span class="input-group-text">3) โครงการวิจัย</span>
  <span class="input-group-text">เรื่อง</span>
  <input type="text" class="form-control" name="G19" placeholder="" >
  <span class="input-group-text">ได้รับทุนจาก</span>
  <input type="text" class="form-control" name="G20" placeholder="" >
</div>						  
</div>
</div>

<!-- 4.2 -->
</div>


<div class="" id="show3" style="display:none;">
<br>
4.3  ผลงานทางวิชาการที่เสนอเพื่อประกอบการพิจารณาตำแหน่ง ศาสตราจารย์ <br>
4.3.1	ผลงานวิจัย
<div class="row">
          <div class="col-md-12">
            <div class="input-group input-group-sm mb-3">
            <span class="input-group-text">4.3.1.1</span>
              <input type="text" class="form-control" name="H1" placeholder="ชื่อผู้แต่ง(ปีที่พิมพ์)" >
              <input type="text" class="form-control" name="H2" placeholder="ชื่อบทความ ชื่อวารสาร ปีที่ ฉบับที่ เลขที่หน้า  " >
              <input type="text" class="form-control" name="H3" placeholder="อยู่ในฐานข้อมูลอะไร" >
            </div>						  
          </div>
        </div>

        
<div class="d-flex">
<div class="btn-group" role="group" style="height: 30px; width: 1200px;" aria-label="Basic radio toggle button group">
<span class="input-group-text">โดยมีบทบาทหน้าที่เป็น</span>
  <input type="radio" class="btn-check" name="btnradio53" id="btnradio53_1" value="First author" autocomplete="off" >
  <label class="btn btn-outline-primary" for="btnradio53_1">First author </label>
  
  <input type="radio" class="btn-check" name="btnradio53" id="btnradio53_2" value="Essentially intellectual contributor" autocomplete="off" >
  <label class="btn btn-outline-primary" for="btnradio53_2">Essentially intellectual contributor </label>
  
  <input type="radio" class="btn-check" name="btnradio53" id="btnradio53_3" value="Corresponding author" autocomplete="off" >
  <label class="btn btn-outline-primary" for="btnradio53_3">Corresponding author </label>

</div>
</div>

<div class="row">
          <div class="col-md-12">
            <div class="input-group input-group-sm mb-3">
            <span class="input-group-text">และถูกอ้างอิง(Citation) จำนวน</span>
            <input type="text" class="form-control" name="H4" placeholder="" >
            <span class="input-group-text">ครั้ง</span>
            <span class="input-group-text">Journal impact factor </span>
              <input type="text" class="form-control" name="H5" placeholder=" " >

            </div>						  
          </div>
        </div>

        <div class="d-flex">
<div class="btn-group" role="group" style="height: 30px; width: 1250px;" aria-label="Basic radio toggle button group">
<span class="input-group-text">ผลงานวิจัยนี้เคยใช้สำหรับการพิจารณาขอกำหนดตำแหน่งผู้ช่วยศาสตราจารย์ และ/หรือ ตำแหน่งรองศาสตราจารย์ และหรือตำแหน่งศาสตราจารย์มาแล้วหรือไม่

</span>

  <input type="radio" class="btn-check" name="btnradio54" id="btnradio54_1" value="1" autocomplete="off" >
  <label class="btn btn-outline-primary" for="btnradio54_1">ไม่เคยใช้</label>
  
  <input type="radio" class="btn-check" name="btnradio54" id="btnradio54_2" value="2" autocomplete="off" >
  <label class="btn btn-outline-primary" for="btnradio54_2">เคยใช้</label>
</div>
</div><br>
หากเคยใช้ โปรดระบุ
<div class="row">
          <div class="col-md-12">
            <div class="input-group input-group-sm mb-3">
            <span class="input-group-text">เมื่อปี พ.ศ. </span>
            <input type="text" class="form-control" name="H6" placeholder="" >
            <span class="input-group-text">และผลการพิจารณาคุณภาพอยู่ในระดับ </span>
            <input type="text" class="form-control" name="H7" placeholder=" " >
            <span class="input-group-text">ตามเกณฑ์ที่ ก.พ.อ. กำหนด</span>

            </div>						  
          </div>
        </div><br>
<div class="row">
          <div class="col-md-12">
            <div class="input-group input-group-sm mb-3">
            <span class="input-group-text">4.3.1.2</span>
              <input type="text" class="form-control" name="H8" placeholder="ชื่อผู้แต่ง(ปีที่พิมพ์)" >
              <input type="text" class="form-control" name="H9" placeholder="ชื่อบทความ ชื่อวารสาร ปีที่ ฉบับที่ เลขที่หน้า  " >
              <input type="text" class="form-control" name="H10" placeholder="อยู่ในฐานข้อมูลอะไร" >
            </div>						  
          </div>
        </div>
        
<div class="d-flex">
<div class="btn-group" role="group" style="height: 30px; width: 1200px;" aria-label="Basic radio toggle button group">
<span class="input-group-text">โดยมีบทบาทหน้าที่เป็น</span>
  <input type="radio" class="btn-check" name="btnradio56" id="btnradio56_1" value="First author" autocomplete="off" >
  <label class="btn btn-outline-primary" for="btnradio56_1">First author </label>
  
  <input type="radio" class="btn-check" name="btnradio56" id="btnradio56_2" value="Essentially intellectual contributor" autocomplete="off" >
  <label class="btn btn-outline-primary" for="btnradio56_2">Essentially intellectual contributor </label>
  
  <input type="radio" class="btn-check" name="btnradio56" id="btnradio56_3" value="Corresponding author" autocomplete="off" >
  <label class="btn btn-outline-primary" for="btnradio56_3">Corresponding author </label>

</div>
</div>

<div class="row">
          <div class="col-md-12">
            <div class="input-group input-group-sm mb-3">
            <span class="input-group-text">และถูกอ้างอิง(Citation) จำนวน</span>
            <input type="text" class="form-control" name="H11" placeholder="" >
            <span class="input-group-text">ครั้ง</span>
            <span class="input-group-text">Journal impact factor </span>
              <input type="text" class="form-control" name="H12" placeholder=" " >

            </div>						  
          </div>
        </div>

        <div class="d-flex">
<div class="btn-group" role="group" style="height: 30px; width: 1250px;" aria-label="Basic radio toggle button group">
<span class="input-group-text">ผลงานวิจัยนี้เคยใช้สำหรับการพิจารณาขอกำหนดตำแหน่งผู้ช่วยศาสตราจารย์ และ/หรือ
ตำแหน่งรองศาสตราจารย์ และ/หรือตำแหน่งศาสตราจารย์มาแล้วหรือไม่


</span>

  <input type="radio" class="btn-check" name="btnradio57" id="btnradio57_1" value="1" autocomplete="off" >
  <label class="btn btn-outline-primary" for="btnradio57_1">ไม่เคยใช้</label>
  
  <input type="radio" class="btn-check" name="btnradio57" id="btnradio57_2" value="2" autocomplete="off" >
  <label class="btn btn-outline-primary" for="btnradio57_2">เคยใช้</label>
</div>
</div><br>
หากเคยใช้ โปรดระบุ
<div class="row">
          <div class="col-md-12">
            <div class="input-group input-group-sm mb-3">
            <span class="input-group-text">เมื่อปี พ.ศ. </span>
            <input type="text" class="form-control" name="H13" placeholder="" >
            <span class="input-group-text">และผลการพิจารณาคุณภาพอยู่ในระดับ </span>
            <input type="text" class="form-control" name="H14" placeholder=" " >
            <span class="input-group-text">ตามเกณฑ์ที่ ก.พ.อ. กำหนด</span>

            </div>						  
          </div>
        </div><br>
<div class="row">
          <div class="col-md-12">
            <div class="input-group input-group-sm mb-3">
            <span class="input-group-text">4.3.1.3</span>
              <input type="text" class="form-control" name="H15" placeholder="ชื่อผู้แต่ง(ปีที่พิมพ์)" >
              <input type="text" class="form-control" name="H16" placeholder="ชื่อบทความ ชื่อวารสาร ปีที่ ฉบับที่ เลขที่หน้า  " >
              <input type="text" class="form-control" name="H29" placeholder="อยู่ในฐานข้อมูลอะไร" >
            </div>						  
          </div>
        </div>
        
<div class="d-flex">
<div class="btn-group" role="group" style="height: 30px; width: 1250px;" aria-label="Basic radio toggle button group">
<span class="input-group-text">โดยมีบทบาทหน้าที่เป็น</span>
  <input type="radio" class="btn-check" name="btnradio58" id="btnradio58_1" value="First author" autocomplete="off" >
  <label class="btn btn-outline-primary" for="btnradio58_1">First author </label>
  
  <input type="radio" class="btn-check" name="btnradio58" id="btnradio58_2" value="Essentially intellectual contributor" autocomplete="off" >
  <label class="btn btn-outline-primary" for="btnradio58_2">Essentially intellectual contributor </label>
  
  <input type="radio" class="btn-check" name="btnradio3" id="btnradio58_3" value="Corresponding author" autocomplete="off" >
  <label class="btn btn-outline-primary" for="btnradio58_3">Corresponding author </label>

</div>
</div>

<div class="row">
          <div class="col-md-12">
            <div class="input-group input-group-sm mb-3">
            <span class="input-group-text">และถูกอ้างอิง(Citation) จำนวน</span>
            <input type="text" class="form-control" name="H17" placeholder="" >
            <span class="input-group-text">ครั้ง</span>
            <span class="input-group-text">Journal impact factor </span>
              <input type="text" class="form-control" name="H18" placeholder=" " >

            </div>						  
          </div>
        </div>

        <div class="d-flex">
<div class="btn-group" role="group" style="height: 30px; width: 1250px;" aria-label="Basic radio toggle button group">
<span class="input-group-text">ผลงานวิจัยนี้เคยใช้สำหรับการพิจารณาขอกำหนดตำแหน่งผู้ช่วยศาสตราจารย์ และ/หรือ
ตำแหน่งรองศาสตราจารย์ และ/หรือตำแหน่งศาสตราจารย์มาแล้วหรือไม่

</span>

  <input type="radio" class="btn-check" name="btnradio59" id="btnradio59_1" value="1" autocomplete="off" >
  <label class="btn btn-outline-primary" for="btnradio59_1">ไม่เคยใช้</label>
  
  <input type="radio" class="btn-check" name="btnradio59" id="btnradio59_2" value="2" autocomplete="off" >
  <label class="btn btn-outline-primary" for="btnradio59_2">เคยใช้</label>
</div>
</div><br>
หากเคยใช้ โปรดระบุ
<div class="row">
          <div class="col-md-12">
            <div class="input-group input-group-sm mb-3">
            <span class="input-group-text">เมื่อปี พ.ศ. </span>
            <input type="text" class="form-control" name="H19" placeholder="" >
            <span class="input-group-text">และผลการพิจารณาคุณภาพอยู่ในระดับ </span>
            <input type="text" class="form-control" name="H20" placeholder=" " >
            <span class="input-group-text">ตามเกณฑ์ที่ ก.พ.อ. กำหนด</span>

            </div>						  
          </div>
        </div><br>



4.3.2 ผลงานทางวิชาการในลักษณะอื่น 
<div class="row">
      <div class="col-lg-6">
        <div class="input-group input-group-sm mb-3">
          <select class="form-select mb-0.8" name="op432" id="op432" >
                    <option value="">ลักษณะของผลงาน</option>
                    <option value='ผลงานทางวิชาการเพื่ออุตสาหกรรม'>ผลงานทางวิชาการเพื่ออุตสาหกรรม</option>
                    <option value='ผลงานวิชาการเพื่อพัฒนาการเรียนการสอนและการเรียนรู้'>ผลงานวิชาการเพื่อพัฒนาการเรียนการสอนและการเรียนรู้</option>
                    <option value='ผลงานทางวิชาการเพื่อพัฒนานโยบายสาธารณะ'>ผลงานทางวิชาการเพื่อพัฒนานโยบายสาธารณะ</option>
                    <option value='กรณีศึกษา (case study)'>กรณีศึกษา (case study)</option>
                    <option value='งานแปล'>งานแปล</option>
                    <option value='พจนานุกรม สารานุกรม นามานุกรม  และงานวิชาการในลักษณะอื่นเดียวกัน'>พจนานุกรม สารานุกรม นามานุกรม  และงานวิชาการในลักษณะอื่นเดียวกัน</option>
                    <option value='ผลงานสร้างสรรค์ด้านวิทยาศาสตร์และเทคโนโลยี'>ผลงานสร้างสรรค์ด้านวิทยาศาสตร์และเทคโนโลยี</option>
                    <option value='ผลงานสร้างสรรค์ด้านสุนทรียะ ศิลปะ'>ผลงานสร้างสรรค์ด้านสุนทรียะ ศิลปะ</option>
                    <option value='สิทธิบัตร'>สิทธิบัตร</option>
                    <option value='ซอฟต์แวร์'>ซอฟต์แวร์</option>
                    <option value='ผลงานรับใช้ท้องถิ่นและสังคม'>ผลงานรับใช้ท้องถิ่นและสังคม</option>
                    <option value='ผลงานนวัตกรรม'>ผลงานนวัตกรรม</option>
                </select>
        </div>						  
      </div>				  
      </div> 

<div class="row">
          <div class="col-md-12">
            <div class="input-group input-group-sm mb-3">
            <span class="input-group-text">4.3.2.1</span>
              <input type="text" class="form-control" name="I1" placeholder="ชื่อผู้แต่ง(ปีที่พิมพ์)" >
              <input type="text" class="form-control" name="I2" placeholder="ชื่อบทความ ชื่อวารสาร ปีที่ ฉบับที่ เลขที่หน้า  " >
              <input type="text" class="form-control" name="I3" placeholder="อยู่ในฐานข้อมูลอะไร" >
            </div>						  
          </div>
        </div>

        
<div class="d-flex">
<div class="btn-group" role="group" style="height: 30px; width: 1200px;" aria-label="Basic radio toggle button group">
<span class="input-group-text">โดยมีบทบาทหน้าที่เป็น</span>
  <input type="radio" class="btn-check" name="btnradio60" id="btnradio60_1" value="First author" autocomplete="off" >
  <label class="btn btn-outline-primary" for="btnradio60_1">First author </label>
  
  <input type="radio" class="btn-check" name="btnradio60" id="btnradio60_2" value="Essentially intellectual contributor" autocomplete="off" >
  <label class="btn btn-outline-primary" for="btnradio60_2">Essentially intellectual contributor </label>
  
  <input type="radio" class="btn-check" name="btnradio60" id="btnradio60_3" value="Corresponding author" autocomplete="off" >
  <label class="btn btn-outline-primary" for="btnradio60_3">Corresponding author </label>

</div>
</div>

<div class="row">
          <div class="col-md-12">
            <div class="input-group input-group-sm mb-3">
            <span class="input-group-text">และถูกอ้างอิง(Citation) จำนวน</span>
            <input type="text" class="form-control" name="I4" placeholder="" >
            <span class="input-group-text">ครั้ง</span>
            <span class="input-group-text">Journal impact factor </span>
              <input type="text" class="form-control" name="I5" placeholder=" " >

            </div>						  
          </div>
        </div>

        <div class="d-flex">
<div class="btn-group" role="group" style="height: 30px; width: 1250px;" aria-label="Basic radio toggle button group">
<span class="input-group-text" style="font-size: 14px;">ผลงานทางวิชาการในลักษณะอื่นนี้เคยใช้สำหรับการพิจารณาขอกำหนดตำแหน่ง
ผู้ช่วยศาสตราจารย์ และ/หรือตำแหน่งรองศาสตราจารย์ และ/หรือตำแหน่งศาสตราจารย์มาแล้วหรือไม่
</span>

  <input type="radio" class="btn-check" name="btnradio61" id="btnradio61_1" value="1" autocomplete="off" >
  <label class="btn btn-outline-primary" for="btnradio61_1">ไม่เคยใช้</label>
  
  <input type="radio" class="btn-check" name="btnradio61" id="btnradio61_2" value="2" autocomplete="off" >
  <label class="btn btn-outline-primary" for="btnradio61_2">เคยใช้</label>
</div>
</div><br>
หากเคยใช้ โปรดระบุ
<div class="row">
          <div class="col-md-12">
            <div class="input-group input-group-sm mb-3">
            <span class="input-group-text">เมื่อปี พ.ศ. </span>
            <input type="text" class="form-control" name="I6" placeholder="" >
            <span class="input-group-text">และผลการพิจารณาคุณภาพอยู่ในระดับ </span>
            <input type="text" class="form-control" name="I7" placeholder=" " >
            <span class="input-group-text">ตามเกณฑ์ที่ ก.พ.อ. กำหนด</span>

            </div>						  
          </div>
        </div><br>
<div class="row">
          <div class="col-md-12">
            <div class="input-group input-group-sm mb-3">
            <span class="input-group-text">4.3.2.2</span>
              <input type="text" class="form-control" name="I8" placeholder="ชื่อผู้แต่ง(ปีที่พิมพ์)" >
              <input type="text" class="form-control" name="I9" placeholder="ชื่อบทความ ชื่อวารสาร ปีที่ ฉบับที่ เลขที่หน้า  " >
              <input type="text" class="form-control" name="I10" placeholder="อยู่ในฐานข้อมูลอะไร" >
            </div>						  
          </div>
        </div>
        
<div class="d-flex">
<div class="btn-group" role="group" style="height: 30px; width: 1200px;" aria-label="Basic radio toggle button group">
<span class="input-group-text">โดยมีบทบาทหน้าที่เป็น</span>
  <input type="radio" class="btn-check" name="btnradio62" id="btnradio62_1" value="First author" autocomplete="off" >
  <label class="btn btn-outline-primary" for="btnradio62_1">First author </label>
  
  <input type="radio" class="btn-check" name="btnradio62" id="btnradio62_2" value="Essentially intellectual contributor" autocomplete="off" >
  <label class="btn btn-outline-primary" for="btnradio62_2">Essentially intellectual contributor </label>
  
  <input type="radio" class="btn-check" name="btnradio62" id="btnradio62_3" value="Corresponding autho" autocomplete="off" >
  <label class="btn btn-outline-primary" for="btnradio62_3">Corresponding author </label>

</div>
</div>

<div class="row">
          <div class="col-md-12">
            <div class="input-group input-group-sm mb-3">
            <span class="input-group-text">และถูกอ้างอิง(Citation) จำนวน</span>
            <input type="text" class="form-control" name="I11" placeholder="" >
            <span class="input-group-text">ครั้ง</span>
            <span class="input-group-text">Journal impact factor </span>
              <input type="text" class="form-control" name="I12" placeholder=" " >

            </div>						  
          </div>
        </div>

        <div class="d-flex">
<div class="btn-group" role="group" style="height: 30px; width: 1200px;" aria-label="Basic radio toggle button group">
<span class="input-group-text" style="font-size: 14px;">ผลงานทางวิชาการในลักษณะอื่นนี้เคยใช้สำหรับการพิจารณาขอกำหนดตำแหน่ง
ผู้ช่วยศาสตราจารย์ และ/หรือตำแหน่งรองศาสตราจารย์ และ/หรือตำแหน่งศาสตราจารย์มาแล้วหรือไม่
</span>

  <input type="radio" class="btn-check" name="btnradio63" id="btnradio63_1" value="1" autocomplete="off" >
  <label class="btn btn-outline-primary" for="btnradio63_1">ไม่เคยใช้</label>
  
  <input type="radio" class="btn-check" name="btnradio63" id="btnradio63_2" value="2" autocomplete="off" >
  <label class="btn btn-outline-primary" for="btnradio63_2">เคยใช้</label>
</div>
</div><br>
หากเคยใช้ โปรดระบุ
<div class="row">
          <div class="col-md-12">
            <div class="input-group input-group-sm mb-3">
            <span class="input-group-text">เมื่อปี พ.ศ. </span>
            <input type="text" class="form-control" name="I13" placeholder="" >
            <span class="input-group-text">และผลการพิจารณาคุณภาพอยู่ในระดับ </span>
            <input type="text" class="form-control" name="I14" placeholder=" " >
            <span class="input-group-text">ตามเกณฑ์ที่ ก.พ.อ. กำหนด</span>

            </div>						  
          </div>
        </div><br>
<div class="row">
          <div class="col-md-12">
            <div class="input-group input-group-sm mb-3">
            <span class="input-group-text">4.3.2.3</span>
              <input type="text" class="form-control" name="I15" placeholder="ชื่อผู้แต่ง(ปีที่พิมพ์)" >
              <input type="text" class="form-control" name="I16" placeholder="ชื่อบทความ ชื่อวารสาร ปีที่ ฉบับที่ เลขที่หน้า  " >
              <input type="text" class="form-control" name="I29" placeholder="อยู่ในฐานข้อมูลอะไร" >
            </div>						  
          </div>
        </div>
        
<div class="d-flex">
<div class="btn-group" role="group" style="height: 30px; width: 1200px;" aria-label="Basic radio toggle button group">
<span class="input-group-text">โดยมีบทบาทหน้าที่เป็น</span>
  <input type="radio" class="btn-check" name="btnradio64" id="btnradio64_1" value="First author" autocomplete="off" >
  <label class="btn btn-outline-primary" for="btnradio64_1">First author </label>
  
  <input type="radio" class="btn-check" name="btnradio64" id="btnradio64_2" value="Essentially intellectual contributor" autocomplete="off" >
  <label class="btn btn-outline-primary" for="btnradio64_2">Essentially intellectual contributor </label>
  
  <input type="radio" class="btn-check" name="btnradio64" id="btnradio64_3" value="Corresponding author" autocomplete="off" >
  <label class="btn btn-outline-primary" for="btnradio64_3">Corresponding author </label>

</div>
</div>

<div class="row">
          <div class="col-md-12">
            <div class="input-group input-group-sm mb-3">
            <span class="input-group-text">และถูกอ้างอิง(Citation) จำนวน</span>
            <input type="text" class="form-control" name="I17" placeholder="" >
            <span class="input-group-text">ครั้ง</span>
            <span class="input-group-text">Journal impact factor </span>
              <input type="text" class="form-control" name="I18" placeholder=" " >

            </div>						  
          </div>
        </div>

        <div class="d-flex">
<div class="btn-group" role="group" style="height: 30px; width: 1200px;" aria-label="Basic radio toggle button group">
<span class="input-group-text" style="font-size: 14px;">ผลงานทางวิชาการในลักษณะอื่นนี้เคยใช้สำหรับการพิจารณาขอกำหนดตำแหน่ง
ผู้ช่วยศาสตราจารย์ และ/หรือตำแหน่งรองศาสตราจารย์ และ/หรือตำแหน่งศาสตราจารย์มาแล้วหรือไม่
</span>

  <input type="radio" class="btn-check" name="btnradio65" id="btnradio65_1" value="1" autocomplete="off" >
  <label class="btn btn-outline-primary" for="btnradio65_1">ไม่เคยใช้</label>
  
  <input type="radio" class="btn-check" name="btnradio65" id="btnradio65_2" value="2" autocomplete="off" >
  <label class="btn btn-outline-primary" for="btnradio65_2">เคยใช้</label>
</div>
</div><br>
หากเคยใช้ โปรดระบุ
<div class="row">
          <div class="col-md-12">
            <div class="input-group input-group-sm mb-3">
            <span class="input-group-text">เมื่อปี พ.ศ. </span>
            <input type="text" class="form-control" name="I19" placeholder="" >
            <span class="input-group-text">และผลการพิจารณาคุณภาพอยู่ในระดับ </span>
            <input type="text" class="form-control" name="I20" placeholder=" " >
            <span class="input-group-text">ตามเกณฑ์ที่ ก.พ.อ. กำหนด</span>

            </div>						  
          </div>
        </div><br>
        4.3.3 ตำราหรือหนัง
        <div class="row">
                  <div class="col-md-12">
                    <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text">4.3.3.1</span>
                      <input type="text" class="form-control" name="I21" placeholder="ชื่อผู้แต่ง(ปีที่พิมพ์)" >
                      <input type="text" class="form-control" name="I22" placeholder="ชื่อบทความ ชื่อวารสาร ปีที่ ฉบับที่ เลขที่หน้า  " >
                      <input type="text" class="form-control" name="I23" placeholder="อยู่ในฐานข้อมูลอะไร" >
                    </div>						  
                  </div>
                </div>
                
        <div class="d-flex">
        <div class="btn-group" role="group" style="height: 30px; width: 1200px;" aria-label="Basic radio toggle button group">
        <span class="input-group-text">โดยมีบทบาทหน้าที่เป็น</span>
          <input type="radio" class="btn-check" name="btnradio66" id="btnradio66_1" value="First author" autocomplete="off" >
          <label class="btn btn-outline-primary" for="btnradio66_1">First author </label>
          
          <input type="radio" class="btn-check" name="btnradio66" id="btnradio66_2" value="Essentially intellectual contributor" autocomplete="off" >
          <label class="btn btn-outline-primary" for="btnradio66_2">Essentially intellectual contributor </label>
          
          <input type="radio" class="btn-check" name="btnradio66" id="btnradio66_3" value="Corresponding autho" autocomplete="off" >
          <label class="btn btn-outline-primary" for="btnradio66_3">Corresponding author </label>
        
        </div>
        </div>
        
        <div class="row">
                  <div class="col-md-12">
                    <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text">และถูกอ้างอิง(Citation) จำนวน</span>
                    <input type="text" class="form-control" name="I24" placeholder="" >
                    <span class="input-group-text">ครั้ง</span>
                    <span class="input-group-text">Journal impact factor </span>
                      <input type="text" class="form-control" name="I25" placeholder=" " >
        
                    </div>						  
                  </div>
                </div>
        
                <div class="d-flex">
        <div class="btn-group" role="group" style="height: 30px; width: 1200px;" aria-label="Basic radio toggle button group">
        <span class="input-group-text">ผลงานนี้เคยใช้สำหรับการพิจารณาขอกำหนดตำแหน่งผู้ช่วยศาสตราจารย์ และ/หรือตำแหน่งรองศาสตราจารย์ และ/หรือตำแหน่งศาสตราจารย์มาแล้วหรือไม่
        
        
        </span>
        
          <input type="radio" class="btn-check" name="btnradio67" id="btnradio67_1" value="1" autocomplete="off" >
          <label class="btn btn-outline-primary" for="btnradio67_1">ไม่เคยใช้</label>
          
          <input type="radio" class="btn-check" name="btnradio67" id="btnradio67_2" value="2" autocomplete="off" >
          <label class="btn btn-outline-primary" for="btnradio67_2">เคยใช้</label>
        </div>
        </div><br>
        หากเคยใช้ โปรดระบุ
        <div class="row">
                  <div class="col-md-12">
                    <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text">เมื่อปี พ.ศ. </span>
                    <input type="text" class="form-control" name="I26" placeholder="" >
                    <span class="input-group-text">และผลการพิจารณาคุณภาพอยู่ในระดับ </span>
                    <input type="text" class="form-control" name="I27" placeholder=" " >
                    <span class="input-group-text">ตามเกณฑ์ที่ ก.พ.อ. กำหนด</span>
        
                    </div>						  
                  </div>
                </div><br>
                
                <div class="row">
                          <div class="col-md-12">
                            <div class="input-group input-group-sm mb-3">
                            <span class="input-group-text">4.3.3.2</span>
                              <input type="text" class="form-control" name="I28" placeholder="ชื่อผู้แต่ง(ปีที่พิมพ์)" >
                              <input type="text" class="form-control" name="I29" placeholder="ชื่อบทความ ชื่อวารสาร ปีที่ ฉบับที่ เลขที่หน้า  " >
                              <input type="text" class="form-control" name="I30" placeholder="อยู่ในฐานข้อมูลอะไร" >
                            </div>						  
                          </div>
                        </div>
                        
                <div class="d-flex">
                <div class="btn-group" role="group" style="height: 30px; width: 1200px;" aria-label="Basic radio toggle button group">
                <span class="input-group-text">โดยมีบทบาทหน้าที่เป็น</span>
                  <input type="radio" class="btn-check" name="btnradio68" id="btnradio68_1" value="First author" autocomplete="off" >
                  <label class="btn btn-outline-primary" for="btnradio68_1">First author </label>
                  
                  <input type="radio" class="btn-check" name="btnradio68" id="btnradio68_2" value="Essentially intellectual contributor" autocomplete="off" >
                  <label class="btn btn-outline-primary" for="btnradio68_2">Essentially intellectual contributor </label>
                  
                  <input type="radio" class="btn-check" name="btnradio68" id="btnradio68_3" value="Corresponding author" autocomplete="off" >
                  <label class="btn btn-outline-primary" for="btnradio68_3">Corresponding author </label>
                
                </div>
                </div>
                
                <div class="row">
                          <div class="col-md-12">
                            <div class="input-group input-group-sm mb-3">
                            <span class="input-group-text">และถูกอ้างอิง(Citation) จำนวน</span>
                            <input type="text" class="form-control" name="I31" placeholder="" >
                            <span class="input-group-text">ครั้ง</span>
                            <span class="input-group-text">Journal impact factor </span>
                              <input type="text" class="form-control" name="I32" placeholder=" " >
                
                            </div>						  
                          </div>
                        </div>
                
                        <div class="d-flex">
                <div class="btn-group" role="group" style="height: 30px; width: 1200px;" aria-label="Basic radio toggle button group">
                <span class="input-group-text">ผลงานนี้เคยใช้สำหรับการพิจารณาขอกำหนดตำแหน่งผู้ช่วยศาสตราจารย์ และ/หรือตำแหน่งรองศาสตราจารย์ และ/หรือตำแหน่งศาสตราจารย์มาแล้วหรือไม่
                
                
                </span>
                
                  <input type="radio" class="btn-check" name="btnradio69" id="btnradio69_1" value="1" autocomplete="off" >
                  <label class="btn btn-outline-primary" for="btnradio69_1">ไม่เคยใช้</label>
                  
                  <input type="radio" class="btn-check" name="btnradio69" id="btnradio69_2" value="2" autocomplete="off" >
                  <label class="btn btn-outline-primary" for="btnradio69_2">เคยใช้</label>
                </div>
                </div><br>
                หากเคยใช้ โปรดระบุ
                <div class="row">
                          <div class="col-md-12">
                            <div class="input-group input-group-sm mb-3">
                            <span class="input-group-text">เมื่อปี พ.ศ. </span>
                            <input type="text" class="form-control" name="I33" placeholder="" >
                            <span class="input-group-text">และผลการพิจารณาคุณภาพอยู่ในระดับ </span>
                            <input type="text" class="form-control" name="I34" placeholder=" " >
                            <span class="input-group-text">ตามเกณฑ์ที่ ก.พ.อ. กำหนด</span>
                            </div>						  
                          </div>
                        </div><br>
                        <div class="row">
                                  <div class="col-md-12">
                                    <div class="input-group input-group-sm mb-3">
                                    <span class="input-group-text">4.3.3.3</span>
                                      <input type="text" class="form-control" name="J1" placeholder="ชื่อผู้แต่ง(ปีที่พิมพ์)" >
                                      <input type="text" class="form-control" name="J2" placeholder="ชื่อบทความ ชื่อวารสาร ปีที่ ฉบับที่ เลขที่หน้า  " >
                                      <input type="text" class="form-control" name="J3" placeholder="อยู่ในฐานข้อมูลอะไร" >
                                    </div>						  
                                  </div>
                                </div>
                                
                        <div class="d-flex">
                        <div class="btn-group" role="group" style="height: 30px; width: 1200px;" aria-label="Basic radio toggle button group">
                        <span class="input-group-text">โดยมีบทบาทหน้าที่เป็น</span>
                          <input type="radio" class="btn-check" name="btnradio70" id="btnradio70_1" value="First author" autocomplete="off" >
                          <label class="btn btn-outline-primary" for="btnradio70_1">First author </label>
                          
                          <input type="radio" class="btn-check" name="btnradio70" id="btnradio70_2" value="Essentially intellectual contributor" autocomplete="off" >
                          <label class="btn btn-outline-primary" for="btnradio70_2">Essentially intellectual contributor </label>
                          
                          <input type="radio" class="btn-check" name="btnradio3" id="btnradio70_3" value="Corresponding author" autocomplete="off" >
                          <label class="btn btn-outline-primary" for="btnradio70_3">Corresponding author </label>
                        
                        </div>
                        </div>
                        
                        <div class="row">
                                  <div class="col-md-12">
                                    <div class="input-group input-group-sm mb-3">
                                    <span class="input-group-text">และถูกอ้างอิง(Citation) จำนวน</span>
                                    <input type="text" class="form-control" name="J4" placeholder="" >
                                    <span class="input-group-text">ครั้ง</span>
                                    <span class="input-group-text">Journal impact factor </span>
                                      <input type="text" class="form-control" name="J5" placeholder=" " >
                        
                                    </div>						  
                                  </div>
                                </div>
                        
                                <div class="d-flex">
                        <div class="btn-group" role="group" style="height: 30px; width: 1200px;" aria-label="Basic radio toggle button group">
                        <span class="input-group-text">ผลงานนี้เคยใช้สำหรับการพิจารณาขอกำหนดตำแหน่งผู้ช่วยศาสตราจารย์ และ/หรือตำแหน่งรองศาสตราจารย์ และ/หรือตำแหน่งศาสตราจารย์มาแล้วหรือไม่
                        
                        
                        </span>
                        
                          <input type="radio" class="btn-check" name="btnradio71" id="btnradio71_1" value="1" autocomplete="off" >
                          <label class="btn btn-outline-primary" for="btnradio71_1">ไม่เคยใช้</label>
                          
                          <input type="radio" class="btn-check" name="btnradio71" id="btnradio71_2" value="2" autocomplete="off" >
                          <label class="btn btn-outline-primary" for="btnradio71_2">เคยใช้</label>
                        </div>
                        </div><br>
                        หากเคยใช้ โปรดระบุ
                        <div class="row">
                                  <div class="col-md-12">
                                    <div class="input-group input-group-sm mb-3">
                                    <span class="input-group-text">เมื่อปี พ.ศ. </span>
                                    <input type="text" class="form-control" name="J6" placeholder="" >
                                    <span class="input-group-text">และผลการพิจารณาคุณภาพอยู่ในระดับ </span>
                                    <input type="text" class="form-control" name="J7" placeholder=" " >
                                    <span class="input-group-text">ตามเกณฑ์ที่ ก.พ.อ. กำหนด</span>
                        
                                    </div>						  
                                  </div>
                                </div><br>


                                4.3.4 เอกสารหลักฐานสำหรับการเสนอขอกำหนดตำแหน่งทางวิชาการ ตามวิธีที่ 3<br>
        4.3.4.1 งานวิจัย <br>

        <div class="row">
        <div class="col-md-12">
          <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">1) งานวิจัยเรื่อง</span>
          <input type="text" class="form-control" name="J8" placeholder="" >
        </div>						  
      </div>
    </div>
    
    <div class="d-flex">
      <div class="btn-group" role="group" style="height: 30px; width: 1200px;" aria-label="Basic radio toggle button group">
        
      <span class="input-group-text">การเผยแพร่ในวารสารทางวิชาการในฐานข้อมูล Scopus</span>

  <input type="radio" class="btn-check" name="btnradio72" id="btnradio72_1" value="1" autocomplete="off" >
  <label class="btn btn-outline-primary" for="btnradio72_1">Quartile 1 </label>
  
  <input type="radio" class="btn-check" name="btnradio72" id="btnradio72_2" value="2" autocomplete="off" >
  <label class="btn btn-outline-primary" for="btnradio72_2">Quartile 2</label>
</div></div><br>

<div class="d-flex">
  <div class="btn-group" role="group" style="height: 30px; width: 1200px;" aria-label="Basic radio toggle button group">
    
  <span class="input-group-text">บทบาทหน้าที่</span>

<input type="radio" class="btn-check" name="btnradio73" id="btnradio73_1" value="1" autocomplete="off" >
<label class="btn btn-outline-primary" for="btnradio73_1">ผู้ประพันธ์อันดับแรก (First author) </label>

<input type="radio" class="btn-check" name="btnradio73" id="btnradio73_2" value="2" autocomplete="off" >
<label class="btn btn-outline-primary" for="btnradio73_2">ผู้ประพันธ์บรรณกิจ (Corresponding author)</label>
</div></div><br>

<div class="row">
<div class="col-md-12">
  <div class="input-group input-group-sm mb-3">
  <span class="input-group-text">2) งานวิจัยเรื่อง</span>
  <input type="text" class="form-control" name="J9" placeholder="" >
</div>						  
</div>
</div>

<div class="d-flex">
<div class="btn-group" role="group" style="height: 30px; width: 1200px;" aria-label="Basic radio toggle button group">

<span class="input-group-text">การเผยแพร่ในวารสารทางวิชาการในฐานข้อมูล Scopus</span>

<input type="radio" class="btn-check" name="btnradio74" id="btnradio74_1" value="1" autocomplete="off" >
<label class="btn btn-outline-primary" for="btnradio74_1">Quartile 1 </label>

<input type="radio" class="btn-check" name="btnradio74" id="btnradio2_2" value="2" autocomplete="off" >
<label class="btn btn-outline-primary" for="btnradio74_2">Quartile 2</label>
</div></div><br>

<div class="d-flex">
<div class="btn-group" role="group" style="height: 30px; width: 1200px;" aria-label="Basic radio toggle button group">

<span class="input-group-text">บทบาทหน้าที่</span>

<input type="radio" class="btn-check" name="btnradio84" id="btnradio84_1" value="1" autocomplete="off" >
<label class="btn btn-outline-primary" for="btnradio84_1">ผู้ประพันธ์อันดับแรก (First author) </label>

<input type="radio" class="btn-check" name="btnradio84" id="btnradio84_2" value="2" autocomplete="off" >
<label class="btn btn-outline-primary" for="btnradio84_2">ผู้ประพันธ์บรรณกิจ (Corresponding author)</label>
</div></div><br>

<div class="row">
<div class="col-md-12">
  <div class="input-group input-group-sm mb-3">
  <span class="input-group-text">3) งานวิจัยเรื่อง</span>
  <input type="text" class="form-control" name="J10" placeholder="" >
</div>						  
</div>
</div>

<div class="d-flex">
<div class="btn-group" role="group" style="height: 30px; width: 1200px;" aria-label="Basic radio toggle button group">

<span class="input-group-text">การเผยแพร่ในวารสารทางวิชาการในฐานข้อมูล Scopus</span>

<input type="radio" class="btn-check" name="btnradio75" id="btnradio75_1" value="1" autocomplete="off" >
<label class="btn btn-outline-primary" for="btnradio75_1">Quartile 1 </label>

<input type="radio" class="btn-check" name="btnradio75" id="btnradio75_2" value="2" autocomplete="off" >
<label class="btn btn-outline-primary" for="btnradio75_2">Quartile 2</label>
</div></div><br>

<div class="d-flex">
<div class="btn-group" role="group" style="height: 30px; width: 1200px;" aria-label="Basic radio toggle button group">

<span class="input-group-text">บทบาทหน้าที่</span>

<input type="radio" class="btn-check" name="btnradio76" id="btnradio76_1" value="1" autocomplete="off" >
<label class="btn btn-outline-primary" for="btnradio76_1">ผู้ประพันธ์อันดับแรก (First author) </label>

<input type="radio" class="btn-check" name="btnradio76" id="btnradio76_2" value="2" autocomplete="off" >
<label class="btn btn-outline-primary" for="btnradio76_2">ผู้ประพันธ์บรรณกิจ (Corresponding author)</label>
</div></div><br>


<div class="row">
<div class="col-md-12">
  <div class="input-group input-group-sm mb-3">
  <span class="input-group-text">4.3.4.2	งานวิจัยที่ได้รับการอ้างอิงจากฐานข้อมูล Scopus จำนวน</span>
  <input type="text" class="form-control" name="J12" placeholder="" >
  <span class="input-group-text">เรื่อง</span>
  <span class="input-group-text">ได้รับการอ้างอิง</span>
  <input type="text" class="form-control" name="J13" placeholder="" >
  <span class="input-group-text">รายการ</span>
</div>						  
</div>
</div>

<div class="row">
<div class="col-md-12">
  <div class="input-group input-group-sm mb-3">
  <span class="input-group-text">4.3.4.3	ผู้ขอ มีค่า Life-time h-index (Scopus) </span>
  <input type="text" class="form-control" name="J14" placeholder="" >
</div>						  
</div>
</div>

<div class="row">
<div class="col-md-12">
  <div class="input-group input-group-sm mb-3">
  <span class="input-group-text">1) โครงการวิจัย</span>
  <span class="input-group-text">เรื่อง</span>
  <input type="text" class="form-control" name="J15" placeholder="" >
  <span class="input-group-text">ได้รับทุนจาก</span>
  <input type="text" class="form-control" name="J16" placeholder="" >
</div>						  
</div>
</div>

<div class="row">
<div class="col-md-12">
  <div class="input-group input-group-sm mb-3">
  <span class="input-group-text">2) โครงการวิจัย</span>
  <span class="input-group-text">เรื่อง</span>
  <input type="text" class="form-control" name="J17" placeholder="" >
  <span class="input-group-text">ได้รับทุนจาก</span>
  <input type="text" class="form-control" name="J18" placeholder="" >
</div>						  
</div>
</div>

<div class="row">
<div class="col-md-12">
  <div class="input-group input-group-sm mb-3">
  <span class="input-group-text">3) โครงการวิจัย</span>
  <span class="input-group-text">เรื่อง</span>
  <input type="text" class="form-control" name="K1" placeholder="" >
  <span class="input-group-text">ได้รับทุนจาก</span>
  <input type="text" class="form-control" name="K2" placeholder="" >
</div>						  
</div>
</div>

</div>


<script>
  function show1() {
    var show1 = document.getElementById("show1");
    var show2 = document.getElementById("show2");
    var show3 = document.getElementById("show3");

    show1.style.display = "block";
    show2.style.display = "none";
    show3.style.display = "none";
  }
  function show2() {
    var show1 = document.getElementById("show1");
    var show2 = document.getElementById("show2");
    var show3 = document.getElementById("show3");

    show1.style.display = "block";
    show2.style.display = "block";
    show3.style.display = "none";
  }
  function show3() {
    var show1 = document.getElementById("show1");
    var show2 = document.getElementById("show2");
    var show3 = document.getElementById("show3");

    show1.style.display = "block";
    show2.style.display = "block";
    show3.style.display = "block";
  }
</script>

<br>
ขอรับรองว่าข้อความดังกล่าวข้างต้นเป็นความจริงทุกประการ

<div class="row">
<div class="col-md-12">
  <div class="input-group input-group-sm mb-3">
  <span class="input-group-text">ลงชื่อ</span>
  <input type="text" class="form-control" name="K3" placeholder="" >
  <span class="input-group-text">เจ้าของประวัติ</span>

</div>						  
</div>
</div>

<div class="row">
<div class="col-md-12">
  <div class="input-group input-group-sm mb-3">
  <span class="input-group-text">ตำแหน่ง</span>
  <input type="text" class="form-control" name="K4" placeholder="" >
</div>						  
</div>
</div>

<div class="row">
<div class="col-md-12">
  <div class="input-group input-group-sm mb-3">
  <span class="input-group-text">วันที่</span>
  <input type="date" class="form-control" name="K5" placeholder="" >
</div>						  
</div>
</div>















  <hr class="mt-1">
  <div class="row">
    <div class="col-md-12">
        <input type="hidden" name="title_head" value="แบบคำขอรับการพิจารณากำหนดตำแหน่งทางวิชาการ (แบบ กพอ.๐๓) และผลงานทางวิชาการ"  />
        <input type="hidden" name="MM_insert" value="fmadd" />
    <input name="submit" type="submit" id="submit" value=" พิมพ์แบบฟอร์ม " class="btn btn-primary mt-2">
    </div>
  </div>	
    
  </form>
	  

  </div>
</main>
<?php require("inc/js_inc.php"); ?>	
</body>

</html>
