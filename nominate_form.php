<?php require_once("inc/func.php"); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ขอเสนอรายชื่อผู้ทรงคุณวุฒิเพื่อประเมินการสอนและเอกสารประกอบการสอน/เอกสารคำสอน</title>
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
           width: 220px; 
           height: 40px;
        }
    </style>
<body>
<?php require("inc/topbar.php"); ?>

<main class="container-lg mt-2">
  <div class="bg-light p-4 rounded">
  <div class="row text-center mb-3">
    <div>
      <img src="image/logo.png" class="img-thumbnail" style="width:100px;"> <br>
      <span class="h3">ขอเสนอรายชื่อผู้ทรงคุณวุฒิเพื่อประเมินการสอนและเอกสารประกอบการสอน/เอกสารคำสอน</span><br>
      <span class="h3">บันทึกข้อความ</span>
    </div>
  </div> 

  <form action="nominate_pdf.php" method="post" id="fmadd" name="fmadd">
          

  <div class="row">
      <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">ส่วนราชการ</span>
          <input type="text" class="form-control" name="service" placeholder="" required>
        </div>						  
      </div>
      <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">โทร</span>
          <input type="text" class="form-control" name="num" placeholder="" required>
        </div>						  
      </div>
    </div>

    <div class="row">
     <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">ที่</span>
          <span class="input-group-text">อว.</span>
          <input type="text" class="form-control" name="to"  required>
        </div>						  
      </div>
     <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text"> วันที่ </span>
          <input type="date" class="form-control" name="date"  required>
        </div>						  
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">เรื่อง</span>
          <span class="input-group-text">ขอเสนอรายชื่อผู้ทรงคุณวุฒิเพื่อประเมินการสอนและเอกสารประกอบการสอน/เอกสารคำสอน</span>
          <span class="input-group-text">เรียน</span>
          <span class="input-group-text">คณบดีคณะสหเวชศาสตร์</span>
        </div>						  
      </div>
    </div>
    
    <div class="row">
      <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">ตามที่</span>
          <input type="text" class="form-control" name="name" placeholder="ชื่อ-นามสกุล" required>
          <span class="input-group-text">พนักงานมหาวิทยาลัย</span>
        </div>						  
      </div>
      <div class="col-md-4">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">ตำแหน่ง</span>
          <input type="text" class="form-control" name="position" required>    
        </div>						  
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">สังกัดภาควิชา</span>
          <input type="text" class="form-control" name="affiliation" placeholder="" required>
          <span class="input-group-text">ขอประเมินผลการสอนและเอกสารประกอบการสอน/เอกสารคำสอน 
        </div>						  
      </div>
    </div>

    <div class="row">
      <div class="col-md-8">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">ในรายวิชา</span>
          <input type="text" class="form-control" name="subject" placeholder="" required>
        </div>						  
      </div>
      <div class="col-md-4">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">รหัสวิชา</span>
          <input type="text" class="form-control" name="id" placeholder="" required>
        </div>						  
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">ซึ่งจะทำการสอนในวันที่เพื่อประกอบการขอกำหนดตำแหน่งทางวิชาการ</span>
          <span class="input-group-text">ระดับ</span>
          <input type="text" class="form-control" name="level" placeholder="" required>
        </div>						  
      </div>
    </div>
    
    <div class="d-flex">
      <div class="btn-group" role="group" style="height: 30px; width: 500px;" aria-label="Basic radio toggle button group">
        <span class="input-group-text">ในการนี้ </span>
        <input type="radio" class="btn-check" name="btnradio1" id="btnradio1_1" value="1" autocomplete="off" >
        <label class="btn btn-outline-primary" for="btnradio1_1">กระผม</label>
    <input type="radio" class="btn-check" name="btnradio1" id="btnradio1_2" value="2" autocomplete="off">
    <label class="btn btn-outline-primary" for="btnradio1_2">ดิฉัน</label>
  </div>
  
  <div class="col-md-6">
    <div class="input-group input-group-sm mb-3">
      <input type="text" class="form-control" name="name1" placeholder="ชื่อ-นามสกุล" required>
    </div>						  
  </div>
  <div class="col-md-4">
    <div class="input-group input-group-sm mb-3">
      <span class="input-group-text">หัวหน้าภาค</span>
      <input type="text" class="form-control" name="major" required>    
    </div>						  
  </div>
</div>
ขอเสนอรายชื่อผู้ทรงคุณวุฒิเพื่อประเมินการสอนและเอกสารประกอบการสอน/เอกสารคำสอน จำนวน ๓ ท่าน ดังมีรายนามต่อไปนี้
<div class="table2">
  <table style="width: 100%">
    <tr>
        <td>ลำดับที่</td>
    <td  >ชื่อ-นามสกุล</td>
    <td  >ปัจจุบันสังกัด</td>
    <td  >หมายเลขติดต่อ</td>
    <td  >หมายเหตุ</td>
    </tr>
    <tr>
        <td>1</td>
    <td  ><input type="text" name="A1" placeholder="" ></td>
    <td  ><input type="text" name="A2" placeholder="" ></td>
    <td  ><input type="text" name="A3" placeholder="" ></td>
    <td  ><input type="text" name="A4" placeholder="" ></td>
    </tr>
    <tr>
        <td>2</td>
    <td  ><input type="text" name="B1" placeholder="" ></td>
    <td  ><input type="text" name="B2" placeholder="" ></td>
    <td  ><input type="text" name="B3" placeholder="" ></td>
    <td  ><input type="text" name="B4" placeholder="" ></td>
    </tr>
    <tr>
        <td>3</td>
    <td  ><input type="text" name="C1" placeholder="" ></td>
    <td  ><input type="text" name="C2" placeholder="" ></td>
    <td  ><input type="text" name="C3" placeholder="" ></td>
    <td  ><input type="text" name="C4" placeholder="" ></td>
    </tr>
</table>
</div>




<hr class="mt-1">
  <div class="row">
    <div class="col-md-12">
        <input type="hidden" name="title_head" value="ขอเสนอรายชื่อผู้ทรงคุณวุฒิเพื่อประเมินการสอนและเอกสารประกอบการสอน/เอกสารคำสอน"  />
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
