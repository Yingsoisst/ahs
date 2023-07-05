<?php require_once("inc/func.php"); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>NU14</title>
  <?php require("inc/css_inc.php"); ?>
<body>
<?php require("inc/topbar.php"); ?>
<main class="container-lg mt-2">
  <div class="bg-light p-4 rounded">
  <div class="row text-center mb-3">
    <div>
      <img src="image/nu-logo.png" class="img-thumbnail" style="width:100px;"> <br>
      <span class="h3">คำร้องขอเทียบโอนรายวิชา</span>
    </div>
  </div> 

  <form action="form_nu14_pdf.php" method="post" id="fmadd" name="fmadd">
  <div class="row mt-3">
      <div class="col-md-4">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text"> ลงวันที่ </span>
          <input type="date" class="form-control" name="datenow"  required>
        </div>						  
      </div>
      
      <!-- <div class="col-md-4">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text"> ลงวันที่พิมพ์ </span>
          <input type="date" class="form-control" name="datenow" placeholder="ระบุวันที่พิมพ์" required>
        </div>						  
      </div> -->


      <div class="col-md-4">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">ภาคการศึกษา</span>
          <input type="number" class="form-control" oninput="maxLengthCheck(this)" min="0" maxlength="1" name="term" placeholder="ภาคเรียนที่" required>
        </div>						  
      </div>
      <div class="col-md-4">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">ปีการศึกษา</span>
          <input type="number" class="form-control" oninput="maxLengthCheck(this)" min="0" maxlength="4" name="year" placeholder="ปีการศึกษา"required>    
        </div>						  
      </div>
    </div>

    
    <div class="row">
      <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">รหัสประจำตัวนิสิต</span>
          <input type="number" class="form-control" oninput="maxLengthCheck(this)" min="0" maxlength="1"  name="id1" placeholder="x"  maxlength="1" required>
          <input type="number" class="form-control" oninput="maxLengthCheck(this)" min="0" maxlength="1"  name="id2" placeholder="x"  maxlength="1" required>
          <input type="number" class="form-control" oninput="maxLengthCheck(this)" min="0" maxlength="1"  name="id3" placeholder="x"  maxlength="1" required>
          <input type="number" class="form-control" oninput="maxLengthCheck(this)" min="0" maxlength="1"  name="id4" placeholder="x"  maxlength="1" required>
          <input type="number" class="form-control" oninput="maxLengthCheck(this)" min="0" maxlength="1"  name="id5" placeholder="x"  maxlength="1" required>
          <input type="number" class="form-control" oninput="maxLengthCheck(this)" min="0" maxlength="1"  name="id6" placeholder="x"  maxlength="1" required>
          <input type="number" class="form-control" oninput="maxLengthCheck(this)" min="0" maxlength="1"  name="id7" placeholder="x"  maxlength="1" required>
          <input type="number" class="form-control" oninput="maxLengthCheck(this)" min="0" maxlength="1"  name="id8" placeholder="x"  maxlength="1" required>

        </div>						  
      </div>
      <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">ข้าพเจ้า</span>
          <input type="text" class="form-control" name="name" 
          placeholder="(นาย/นาง/นางสาว) ชื่อ-นามสกุล" required>    
        </div>						  
      </div>
    </div>


    <div class="row">
      <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">คณะ</span>
          <input type="text" class="form-control" name="faculty" placeholder="คณะปัจจุบัน" required>
        </div>						  
      </div>
      <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">สาขาวิชา</span>
          <input type="text" class="form-control" name="Major" placeholder="สาขาวิชาปัจจุบัน" required>    
        </div>						  
      </div>
    </div>
    
    <div class="row">
      <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">โทร</span>
          <input type="tel" class="form-control" oninput="maxLengthCheck(this)" min="0" maxlength="10"  name="num" placeholder="เบอร์โทร" required>
        </div>						  
      </div>
      <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">E-mail</span>
          <input type="text" class="form-control" name="mail" required>    
        </div>						  
      </div>
    </div>

    <div class="row">
      <div class="col-lg-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">เคยศึกษา</span>
          <select class="form-select mb-0.8" name="depart" id="depart" required>
                    <option value="">ระดับปริญญาที่เคยศึกษา</option>
                    <option value='ปริญญาตรี'>ปริญญาตรี</option>
                    <option value='ปริญญาโท'>ปริญญาโท</option>
                </select>
        </div>						  
      </div>
      <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">มหาวิทยาลัย/สถาบัน</span>
          <input type="text" class="form-control" name="university" placeholder="มหาวิทยาลัย/สถาบันที่เคยศึกษา" required>
        </div>						  
      </div>
    </div>

    <div class="row">
      <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">คณะ</span>
          <input type="text" class="form-control" name="faculty_old" placeholder="คณะที่เคยศึกษา" required>
        </div>						  
      </div>
      <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">สาขาวิชา</span>
          <input type="text" class="form-control" name="Major_old" placeholder=""required>    
        </div>						  
      </div>
    </div>
    <div class="row">
 <div class="col-lg-6">
    ลำดับที่ 1  
</div>
    <div class="row">
      <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">รหัสวิชา/ชื่อวิชาที่เคยศึกษามาแล้ว (ภาษาอังกฤษ)</span>
          <input type="text" class="form-control" name="id_old" placeholder="001103 Thai Language Skills (ตัวอย่าง) " required>
        </div>						  
      </div>
      <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">รหัสวิชา/ชื่อวิชาที่ขอเทียบโอน</span>
          <input type="text" class="form-control" name="id_new" placeholder="001103 Thai Language Skills (ตัวอย่าง) "required>    
        </div>						  
      </div>
      <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">จำนวนหน่วยกิจ</span>
          <input type="text" class="form-control" oninput="maxLengthCheck(this)" min="0" maxlength="1"  name="Credit1_old" placeholder="จำนวนหน่วยกิจก่อนเทียบโอน"required>    
          <input type="text" class="form-control" oninput="maxLengthCheck(this)" min="0" maxlength="1"  name="Credit2_old" required>   
          <input type="text" class="form-control" oninput="maxLengthCheck(this)" min="0" maxlength="1"  name="Credit3_old" required>

          <!-- <input type="text" class="form-control" name="Credit4_old" required>     -->
        </div>						  
      </div>
      <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">จำนวนหน่วยกิจ</span>
          <input type="text" class="form-control" oninput="maxLengthCheck(this)" min="0" maxlength="1"  name="Credit1" placeholder="จำนวนหน่วยกิจหลังเทียบโอน"required>    
          <input type="text" class="form-control" oninput="maxLengthCheck(this)" min="0" maxlength="1"  name="Credit2" required> 
          <input type="text" class="form-control" oninput="maxLengthCheck(this)" min="0" maxlength="1"  name="Credit3" required> 

          <!-- <input type="text" class="form-control" name="Credit4" required>     -->
        </div>						  
      </div>
      <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">เกรดที่ได้</span>
          <input type="text" class="form-control" name="grade_old" placeholder="A,B+,B,C+,C,D+,D,F ก่อนเทียบโอน"required>    
        </div>						  
      </div>
      <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">เกรดที่ได้</span>
          <input type="text" class="form-control" name="grade" placeholder="A,B+,B,C+,C,D+,D,F หลังเทียบโอน"required>    
        </div>						  
      </div>
    </div>
    
    <div class="row">
 <div class="col-lg-6">
    ลำดับที่ 2  
</div>
    <div class="row">
      <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">รหัสวิชา/ชื่อวิชาที่เคยศึกษามาแล้ว (ภาษาอังกฤษ)</span>
          <input type="text" class="form-control" name="2id_old" placeholder="001103 Thai Language Skills (ตัวอย่าง) " >
        </div>						  
      </div>
      <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">รหัสวิชา/ชื่อวิชาที่ขอเทียบโอน</span>
          <input type="text" class="form-control" name="2id_new" placeholder="001103 Thai Language Skills (ตัวอย่าง) ">    
        </div>						  
      </div>
      <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">จำนวนหน่วยกิจ</span>
          <input type="text" class="form-control" oninput="maxLengthCheck(this)" min="0" maxlength="1"  name="2Credit1_old" placeholder="จำนวนหน่วยกิจ">    
          <input type="text" class="form-control" oninput="maxLengthCheck(this)" min="0" maxlength="1"  name="2Credit2_old" >    
          <input type="text" class="form-control" oninput="maxLengthCheck(this)" min="0" maxlength="1"  name="2Credit3_old" >    
          <!-- <input type="text" class="form-control" name="2Credit4_old" >     -->
        </div>						  
      </div>
      <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">จำนวนหน่วยกิจ</span>
          <input type="text" class="form-control" oninput="maxLengthCheck(this)" min="0" maxlength="1"  name="2Credit1" placeholder="จำนวนหน่วยกิจ">    
          <input type="text" class="form-control" oninput="maxLengthCheck(this)" min="0" maxlength="1"  name="2Credit2" >    
          <input type="text" class="form-control" oninput="maxLengthCheck(this)" min="0" maxlength="1"  name="2Credit3" >    
          <!-- <input type="text" class="form-control" name="2Credit4" >     -->
        </div>						  
      </div>
      <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">เกรดที่ได้</span>
          <input type="text" class="form-control" name="2grade_old" placeholder="A,B+,B,C+,C,D+,D,F">    
        </div>						  
      </div>
      <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">เกรดที่ได้</span>
          <input type="text" class="form-control" name="2grade" placeholder="A,B+,B,C+,C,D+,D,F">    
        </div>						  
      </div>
    </div>

    <div class="row">
 <div class="col-lg-6">
    ลำดับที่ 3
</div>
    <div class="row">
      <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">รหัสวิชา/ชื่อวิชาที่เคยศึกษามาแล้ว (ภาษาอังกฤษ)</span>
          <input type="text" class="form-control" name="3id_old" placeholder="001103 Thai Language Skills (ตัวอย่าง) " >
        </div>						  
      </div>
      <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">รหัสวิชา/ชื่อวิชาที่ขอเทียบโอน</span>
          <input type="text" class="form-control" name="3id_new" placeholder="001103 Thai Language Skills (ตัวอย่าง) ">    
        </div>						  
      </div>
      <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">จำนวนหน่วยกิจ</span>
          <input type="text" class="form-control" oninput="maxLengthCheck(this)" min="0" maxlength="1"  name="3Credit1_old" placeholder="จำนวนหน่วยกิจ">    
          <input type="text" class="form-control" oninput="maxLengthCheck(this)" min="0" maxlength="1"  name="3Credit2_old" >    
          <input type="text" class="form-control" oninput="maxLengthCheck(this)" min="0" maxlength="1"  name="3Credit3_old" >    
          <!-- <input type="text" class="form-control" name="3Credit4_old" >     -->
        </div>						  
      </div>
      <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">จำนวนหน่วยกิจ</span>
          <input type="text" class="form-control" oninput="maxLengthCheck(this)" min="0" maxlength="1"  name="3Credit1" placeholder="จำนวนหน่วยกิจ">    
          <input type="text" class="form-control" oninput="maxLengthCheck(this)" min="0" maxlength="1"  name="3Credit2" >    
          <input type="text" class="form-control" oninput="maxLengthCheck(this)" min="0" maxlength="1"  name="3Credit3" >    
          <!-- <input type="text" class="form-control" name="3Credit4" >     -->
        </div>						  
      </div>
      <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">เกรดที่ได้</span>
          <input type="text" class="form-control" name="3grade_old" placeholder="A,B+,B,C+,C,D+,D,F">    
        </div>						  
      </div>
      <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">เกรดที่ได้</span>
          <input type="text" class="form-control" name="3grade" placeholder="A,B+,B,C+,C,D+,D,F">    
        </div>						  
      </div>
    </div>
    
    <div class="row">
 <div class="col-lg-6">
    ลำดับที่ 4
</div>
    <div class="row">
      <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">รหัสวิชา/ชื่อวิชาที่เคยศึกษามาแล้ว (ภาษาอังกฤษ)</span>
          <input type="text" class="form-control" name="4id_old" placeholder="001103 Thai Language Skills (ตัวอย่าง) " >
        </div>						  
      </div>
      <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">รหัสวิชา/ชื่อวิชาที่ขอเทียบโอน</span>
          <input type="text" class="form-control" name="4id_new" placeholder="001103 Thai Language Skills (ตัวอย่าง) ">    
        </div>						  
      </div>
      <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">จำนวนหน่วยกิจ</span>
          <input type="text" class="form-control" oninput="maxLengthCheck(this)" min="0" maxlength="1"  name="4Credit1_old" placeholder="จำนวนหน่วยกิจ">    
          <input type="text" class="form-control" oninput="maxLengthCheck(this)" min="0" maxlength="1"  name="4Credit2_old" >    
          <input type="text" class="form-control" oninput="maxLengthCheck(this)" min="0" maxlength="1"  name="4Credit3_old" >    
          <!-- <input type="text" class="form-control" name="4Credit4_old" >     -->
        </div>						  
      </div>
      <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">จำนวนหน่วยกิจ</span>
          <input type="text" class="form-control" oninput="maxLengthCheck(this)" min="0" maxlength="1"  name="4Credit1" placeholder="จำนวนหน่วยกิจ">    
          <input type="text" class="form-control" oninput="maxLengthCheck(this)" min="0" maxlength="1"  name="4Credit2" >    
          <input type="text" class="form-control" oninput="maxLengthCheck(this)" min="0" maxlength="1"  name="4Credit3" >    
          <!-- <input type="text" class="form-control" name="4Credit4" >     -->
        </div>						  
      </div>
            <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">เกรดที่ได้</span>
          <input type="text" class="form-control" name="4grade_old" placeholder="A,B+,B,C+,C,D+,D,F">    
        </div>						  
      </div>
      <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">เกรดที่ได้</span>
          <input type="text" class="form-control" name="4grade" placeholder="A,B+,B,C+,C,D+,D,F">    
        </div>						  
      </div>
    </div>
    
    <div class="row">
 <div class="col-lg-6">
    ลำดับที่ 5
</div>
    <div class="row">
      <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">รหัสวิชา/ชื่อวิชาที่เคยศึกษามาแล้ว (ภาษาอังกฤษ)</span>
          <input type="text" class="form-control" name="5id_old" placeholder="001103 Thai Language Skills (ตัวอย่าง) " >
        </div>						  
      </div>
      <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">รหัสวิชา/ชื่อวิชาที่ขอเทียบโอน</span>
          <input type="text" class="form-control" name="5id_new" placeholder="001103 Thai Language Skills (ตัวอย่าง) ">    
        </div>						  
      </div>
      <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">จำนวนหน่วยกิจ</span>
          <input type="text" class="form-control" oninput="maxLengthCheck(this)" min="0" maxlength="1"  name="5Credit1_old" placeholder="จำนวนหน่วยกิจ">    
          <input type="text" class="form-control" oninput="maxLengthCheck(this)" min="0" maxlength="1"  name="5Credit2_old" >    
          <input type="text" class="form-control" oninput="maxLengthCheck(this)" min="0" maxlength="1"  name="5Credit3_old" >    
          <!-- <input type="text" class="form-control" name="5Credit4_old" >     -->
        </div>						  
      </div>
      <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">จำนวนหน่วยกิจ</span>
          <input type="text" class="form-control" oninput="maxLengthCheck(this)" min="0" maxlength="1"  name="5Credit1" placeholder="จำนวนหน่วยกิจ">    
          <input type="text" class="form-control" oninput="maxLengthCheck(this)" min="0" maxlength="1"  name="5Credit2" >    
          <input type="text" class="form-control" oninput="maxLengthCheck(this)" min="0" maxlength="1"  name="5Credit3" >    
          <!-- <input type="text" class="form-control" name="5Credit4" >     -->
        </div>						  
      </div>
      <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">เกรดที่ได้</span>
          <input type="text" class="form-control" name="5grade_old" placeholder="A,B+,B,C+,C,D+,D,F">    
        </div>						  
      </div>
      <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">เกรดที่ได้</span>
          <input type="text" class="form-control" name="5grade" placeholder="A,B+,B,C+,C,D+,D,F">    
        </div>						  
      </div>
    </div>
    
    <div class="row">
 <div class="col-lg-6">
    ลำดับที่ 6  
</div>
    <div class="row">
      <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">รหัสวิชา/ชื่อวิชาที่เคยศึกษามาแล้ว (ภาษาอังกฤษ)</span>
          <input type="text" class="form-control" name="6id_old" placeholder="001103 Thai Language Skills (ตัวอย่าง) " >
        </div>						  
      </div>
      <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">รหัสวิชา/ชื่อวิชาที่ขอเทียบโอน</span>
          <input type="text" class="form-control" name="6id_new" placeholder="001103 Thai Language Skills (ตัวอย่าง) ">    
        </div>						  
      </div>
      <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">จำนวนหน่วยกิจ</span>
          <input type="text" class="form-control" oninput="maxLengthCheck(this)" min="0" maxlength="1"  name="6Credit1_old" placeholder="จำนวนหน่วยกิจ">    
          <input type="text" class="form-control" oninput="maxLengthCheck(this)" min="0" maxlength="1"  name="6Credit2_old" >    
          <input type="text" class="form-control" oninput="maxLengthCheck(this)" min="0" maxlength="1"  name="6Credit3_old" >    
          <!-- <input type="text" class="form-control" name="6Credit4_old" >     -->
        </div>						  
      </div>
      <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">จำนวนหน่วยกิจ</span>
          <input type="text" class="form-control" oninput="maxLengthCheck(this)" min="0" maxlength="1"  name="6Credit1" placeholder="จำนวนหน่วยกิจ">    
          <input type="text" class="form-control" oninput="maxLengthCheck(this)" min="0" maxlength="1"  name="6Credit2" >    
          <input type="text" class="form-control" oninput="maxLengthCheck(this)" min="0" maxlength="1"  name="6Credit3" >    
          <!-- <input type="text" class="form-control" name="6Credit4" >     -->
        </div>						  
      </div>
      <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">เกรดที่ได้</span>
          <input type="text" class="form-control" name="6grade_old" placeholder="A,B+,B,C+,C,D+,D,F">    
        </div>						  
      </div>
      <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">เกรดที่ได้</span>
          <input type="text" class="form-control" name="6grade" placeholder="A,B+,B,C+,C,D+,D,F">    
        </div>						  
      </div>
    </div>
    
    <div class="row">
 <div class="col-lg-6">
    ลำดับที่ 7 
</div>
    <div class="row">
      <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">รหัสวิชา/ชื่อวิชาที่เคยศึกษามาแล้ว (ภาษาอังกฤษ)</span>
          <input type="text" class="form-control" name="7id_old" placeholder="001103 Thai Language Skills (ตัวอย่าง) " >
        </div>						  
      </div>
      <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">รหัสวิชา/ชื่อวิชาที่ขอเทียบโอน</span>
          <input type="text" class="form-control" name="7id_new" placeholder="001103 Thai Language Skills (ตัวอย่าง) ">    
        </div>						  
      </div>
      <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">จำนวนหน่วยกิจ</span>
          <input type="text" class="form-control" oninput="maxLengthCheck(this)" min="0" maxlength="1"  name="7Credit1_old" placeholder="จำนวนหน่วยกิจ">    
          <input type="text" class="form-control" oninput="maxLengthCheck(this)" min="0" maxlength="1"  name="7Credit2_old" >    
          <input type="text" class="form-control" oninput="maxLengthCheck(this)" min="0" maxlength="1"  name="7Credit3_old" >    
          <!-- <input type="text" class="form-control" name="7Credit4_old" >     -->
        </div>						  
      </div>
      <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">จำนวนหน่วยกิจ</span>
          <input type="text" class="form-control" oninput="maxLengthCheck(this)" min="0" maxlength="1"  name="7Credit1" placeholder="จำนวนหน่วยกิจ">    
          <input type="text" class="form-control" oninput="maxLengthCheck(this)" min="0" maxlength="1"  name="7Credit2" >    
          <input type="text" class="form-control" oninput="maxLengthCheck(this)" min="0" maxlength="1"  name="7Credit3" >    
          <!-- <input type="text" class="form-control" name="7Credit4" >     -->
        </div>						  
      </div>
      <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">เกรดที่ได้</span>
          <input type="text" class="form-control" name="7grade_old" placeholder="A,B+,B,C+,C,D+,D,F">    
        </div>						  
      </div>
      <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">เกรดที่ได้</span>
          <input type="text" class="form-control" name="7grade" placeholder="A,B+,B,C+,C,D+,D,F">    
        </div>						  
      </div>
    </div>


  <hr class="mt-1">
  <div class="row">
    <div class="col-md-12">
        <input type="hidden" name="title_head" value="NU14" />
        <input type="hidden" name="MM_insert" value="fmadd" />
    <input name="submit" type="submit" id="submit" value=" พิมพ์แบบฟอร์ม " class="btn btn-primary mt-2">
    </div>
  </div>	
    
  </form>
	  

  </div>
</main>
<?php require("inc/js_inc.php"); ?>	
</body>
<script language="javascript">
  function maxLengthCheck(object)
  {
    if (object.value.length > object.maxLength)
      object.value = object.value.slice(0, object.maxLength)
  }
</script>
</html>
