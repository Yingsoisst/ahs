<?php require_once("inc/func.php"); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>แบบแสดงหลักฐานการมีส่วนร่วมในผลงานทางวิชาการทั่วไป</title>
  <?php require("inc/css_inc.php"); ?>
  <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            text-align: center;
          }

        .table2 table tr td  {
            width: 50px; 
            height: 40px;
          }

          .table2 table tr td input {
           width: 600px; 
           height: 50px;
        }
    </style>
<body>
<?php require("inc/topbar.php"); ?>

<main class="container-lg mt-2">
  <div class="bg-light p-4 rounded">
  <div class="row text-center mb-3">
    <div>
      <span class="h3">แบบแสดงหลักฐานการมีส่วนร่วมในผลงานทางวิชาการทั่วไป</span><br>
    </div>
  </div> 

  <form action="participation_pdf.php" method="post" id="fmadd" name="fmadd">
          

  <div class="row">
      <div class="col-md-7">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">ชื่อผลงาน</span>
          <input type="text" class="form-control" name="Title" placeholder="" required>
        </div>						  
      </div>
      <div class="col-lg-5">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">สถานะผู้ขอในผลงาน</span>
          <select class="form-select mb-0.8" name="status" id="depart" required>
                    <option value="">สถานะผู้ขอในผลงาน</option>
                    <option value='1'>ผู้ประพันธ์อันดับแรก (First author)</option>
                    <option value='2'>ผู้มีส่วนสำคัญทางปัญญา (Essentially intellectual contributor)</option>
                    <option value='3'>ผู้ประพันธ์บรรณกิจ (Corresponding author)</option>
                </select>
        </div>						  
      </div>				  
      </div>
  ประเภทของผลงาน
<div class="d-flex">
  <div class="btn-group" role="group" style="height: 30px; width: 1200px;" aria-label="Basic radio toggle button group">
    <span class="input-group-text">กลุ่มที่ 1</span>
    <input type="radio" class="btn-check" name="btnradio1" id="btnradio1_1" value="1" autocomplete="off" >
    <label class="btn btn-outline-primary" for="btnradio1_1">งานวิจัย</label>
  </div>
</div><br>

กลุ่มที่ 2 ผลงานทางวิชาการในลักษณะอื่น
<div class="d-flex">
  <div class="btn-group" role="group" style="height: 30px; width: 1200px;" aria-label="Basic radio toggle button group">
    <input type="radio" class="btn-check" name="btnradio2" id="btnradio2_1" value="2" autocomplete="off">
    <label class="btn btn-outline-primary" for="btnradio2_1">ผลงานวิชาการเพื่ออุตสาหกรรม</label>
    

    <input type="radio" class="btn-check" name="btnradio3" id="btnradio3_1" value="3" autocomplete="off">
    <label class="btn btn-outline-primary" for="btnradio3_1">ผลงานวิชาการเพื่อพัฒนาการเรียนการสอนและการเรียนรู้</label>
    

    <input type="radio" class="btn-check" name="btnradio4" id="btnradio4_1" value="4" autocomplete="off">
    <label class="btn btn-outline-primary" for="btnradio4_1">ผลงานวิชาการเพื่อพัฒนานโยบายสาธารณะ</label>
    
  </div>
</div>

<div class="d-flex">
  <div class="btn-group" role="group" style="height: 30px; width: 1200px;" aria-label="Basic radio toggle button group">
    <input type="radio" class="btn-check" name="btnradio5" id="btnradio5_1" value="5" autocomplete="off" >
    <label class="btn btn-outline-primary" for="btnradio5_1">ผลงานสร้างสรรค์ด้านวิทยาศาสตร์และเทคโนโลยี  </label>
    
    <input type="radio" class="btn-check" name="btnradio6" id="btnradio6_1" value="6" autocomplete="off" >
    <label class="btn btn-outline-primary" for="btnradio6_1">พจนานุกรม สารานุกรม นามานุกรม และงานวิชาการในลักษณะเดียวกัน </label>
    
    <input type="radio" class="btn-check" name="btnradio7" id="btnradio7_1" value="7" autocomplete="off" >
    <label class="btn btn-outline-primary" for="btnradio7_1">ผลงานสร้างสรรค์ด้านสุนทรียะ ศิลปะ</label>
    
  </div>
</div>

<div class="d-flex">
  <div class="btn-group" role="group" style="height: 30px; width: 1200px;" aria-label="Basic radio toggle button group">
    <input type="radio" class="btn-check" name="btnradio8" id="btnradio8_1" value="8" autocomplete="off" >
    <label class="btn btn-outline-primary" for="btnradio8_1">ผลงานรับใช้ท้องถิ่นและสังคม</label>
    
    <input type="radio" class="btn-check" name="btnradio9" id="btnradio9_1" value="9" autocomplete="off" >
    <label class="btn btn-outline-primary" for="btnradio9_1">กรณีศึกษา (Case Study) </label>
    
    <input type="radio" class="btn-check" name="btnradio10" id="btnradio10_1" value="10" autocomplete="off" >
    <label class="btn btn-outline-primary" for="btnradio10_1">งานแปล</label>
    
  </div>
</div> 

<div class="d-flex">
  <div class="btn-group" role="group" style="height: 30px; width: 1200px;" aria-label="Basic radio toggle button group">
    <input type="radio" class="btn-check" name="btnradio11" id="btnradio11_1" value="11" autocomplete="off" >
    <label class="btn btn-outline-primary" for="btnradio11_1">สิทธิบัตร</label>
    
    <input type="radio" class="btn-check" name="btnradio12" id="btnradio12_1" value="12" autocomplete="off" >
    <label class="btn btn-outline-primary" for="btnradio12_1">ซอฟแวร์ </label>
    
    <input type="radio" class="btn-check" name="btnradio13" id="btnradio13_1" value="13" autocomplete="off" >
    <label class="btn btn-outline-primary" for="btnradio13_1">ผลงานนวัตกรรม</label>
    
  </div>
</div><br>
กลุ่มที่ 3
<div class="d-flex">
  <div class="btn-group" role="group" style="height: 30px; width: 1200px;" aria-label="Basic radio toggle button group">
    <input type="radio" class="btn-check" name="btnradio14" id="btnradio14_1" value="1" autocomplete="off" >
    <label class="btn btn-outline-primary" for="btnradio14_1">ตำรา</label>
    
    <input type="radio" class="btn-check" name="btnradio14" id="btnradio14_2" value="2" autocomplete="off" >
    <label class="btn btn-outline-primary" for="btnradio14_2">หนังสือ </label>
    
    <input type="radio" class="btn-check" name="btnradio14" id="btnradio14_3" value="3" autocomplete="off" >
    <label class="btn btn-outline-primary" for="btnradio14_3">บทความทางวิชาการ</label>
    
  </div>
</div><br>
ส่วนที่ 1 รายละเอียดของการมีส่วนร่วม <br>
ผู้ขอกำหนดตำแหน่งต้องกรอกรายละเอียดให้ครบถ้วน (เนื่องจากไม่มีการแบ่งส่วนร่วมในผลงานทางวิชาการ ดังนั้นบทบาทหน้าที่ความรับผิดชอบตามที่ผู้ขอระบุจะมีผลต่อการพิจารณาผลงานทางวิชาการ) <br>

<div class="table2">
  <table style="width: 100%">
    <tr>
        <th style="width: 200px;" >รายละเอียดการมีส่วนร่วม</th>
    <td  style="width: 400px;">บทบาทและหน้าที่ความรับผิดชอบ</td> 
    </tr>
    <tr>
        <td>ก. ความคิดริเริ่ม (Idea) และสมมุติฐาน</td>
        <td  ><input type="text" name="A1" placeholder="" ></td> 
    </tr>
    <tr>
        <td>ข. การปฏิบัติการวิจัย การมีส่วนร่วมในการออกแบบ การทดลอง การทดสอบ เครื่องมือวัดวิธีการเก็บข้อมูล และ Criteria</td>
        <td  ><input type="text" name="A2" placeholder="" ></td> 
    </tr>
    <tr>
        <td>ค. การจัดเก็บข้อมูล การวิเคราะห์ข้อมูล การแปรผล</td>
        <td  ><input type="text" name="A3" placeholder="" ></td> 
    </tr>
    <tr>
        <td>ง. การวิพากษ์วิจารณ์ผล การแสดงการเปรียบเทียบกับข้อสรุปหรือองค์ความรู้หรือทฤษฎีเดิม</td>
        <td  ><input type="text" name="A4" placeholder="" ></td> 
    </tr>
    <tr>
        <td>จ. การมีส่วนร่วมในการเขียน manuscript ผลงานสร้างสรรค์ นวัตกรรม สิ่งประดิษฐ์ เป็นต้น</td>
        <td  ><input type="text" name="A5" placeholder="" ></td> 
    </tr>
    <tr>
        <td>ฉ. การให้การสนับสนุน specimens, study cohort, โลจิสติกส์ ทุนวิจัย (โปรดระบุแหล่งทุน เงินทุน และปีที่ได้รับ) เครื่องมือ ห้องปฏิบัติการ ครุภัณฑ์</td>
        <td  ><input type="text" name="A6" placeholder="" ></td> 
    </tr>
    <tr>
        <td>ช. อื่นๆ </td>
        <td  ><input type="text" name="A7" placeholder="" ></td> 
    </tr>
</table>
</div> <br>
ส่วนที่ 2 รายละเอียดของการนำผลงานไปแสดง การถ่ายทอดเทคโนโลยี หรือการถ่ายทอดองค์ความรู้ ต้องแนบเอกสารหลักฐานเพื่อประกอบการพิจารณา
<br>
<div class="row">
      <div class="col-md-12">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">ก. ตีพิมพ์ในวารสาร journal impact factor จำนวนครั้งของการอ้างอิง (ฐานข้อมูล)</span>
          <input type="text" class="form-control" name="journal" placeholder="" required>
        </div>						  
      </div>
    </div>
<div class="row">
      <div class="col-md-12">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">ข. สิทธิบัตร ประเภท ปีที่ได้รับการจด จดแบบ ครอบคลุมประเทศ </span>
          <input type="text" class="form-control" name="patent" placeholder="" required>
        </div>						  
      </div>
    </div>
<div class="row">
      <div class="col-md-12">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">ค. ถ้าเป็น technical report หรือ รายงานวิจัย ผู้ใช้งานคือใคร</span>
          <input type="text" class="form-control" name="technical" placeholder="" required>
        </div>						  
      </div>
    </div>
  การเผยแพร่งานวิจัยได้รับการนำเสนอ(กรุณาเลือกตอบแบบใดแบบหนึ่ง)
    <div class="row">
          <div class="col-md-12">
            <div class="input-group input-group-sm mb-3">
              <span class="input-group-text">แบบโปสเตอร์ หรือ Oral Presentation </span>
              <input type="text" class="form-control" name="Oral" placeholder="โปรดระบุ session เช่น Plenary, Symposium หรือ oral session" required>
            </div>						  
          </div>
        </div>
    <div class="row">
          <div class="col-md-12">
            <div class="input-group input-group-sm mb-3">
              <span class="input-group-text">สูจิบัตร ในการประชุมหรือการจัดแสดง หรือจัดนิทรรศการ </span>
              <input type="text" class="form-control" name="program" placeholder="ชื่อ สถานที่จัดประชุม หรือจัดแสดง หรือจัดนิทรรศการ และประเทศ" required>
            </div>						  
          </div>
        </div>
    <div class="row">
          <div class="col-md-12">
            <div class="input-group input-group-sm mb-3">
              <span class="input-group-text">ในกรณีที่ เป็นหนังสือ</span>
              <input type="text" class="form-control" name="book" placeholder="โปรดระบุ ชื่อสำนักพิมพ์ ปีที่ตีพิมพ์" required>
            </div>						  
          </div>
        </div>
    <div class="row">
          <div class="col-md-12">
            <div class="input-group input-group-sm mb-3">
              <span class="input-group-text">ประวัติการได้รับทุนวิจัยโครงการที่เกี่ยวข้องกับผลงานชิ้นนี้</span>
              <input type="text" class="form-control" name="history" placeholder="" required>
            </div>						  
          </div>
        </div>
    <div class="row">
          <div class="col-md-12">
            <div class="input-group input-group-sm mb-3">
              <span class="input-group-text">หากงานวิจัย ได้รับการถ่ายทอดเทคโนโลยี ผู้วิจัยได้รับค่าธรรมเนียมใบอนุญาต (Licesing Fees) รวมเท่าใด </span>
              <input type="text" class="form-control" name="Licesing" placeholder="โปรดแสดงหลักฐานสัญญา" required>
            </div>						  
          </div>
        </div>
    <div class="row">
          <div class="col-md-12">
            <div class="input-group input-group-sm mb-3">
              <span class="input-group-text">ผู้ขอกำหนดตำแหน่ง</span>
              <input type="text" class="form-control" name="name" placeholder="(นาย/นาง/นางสาว) ชื่อ-นามสกุล" required>
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
