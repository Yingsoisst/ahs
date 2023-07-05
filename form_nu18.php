<?php require_once("inc/func.php"); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>NU18</title>
  <?php require("inc/css_inc.php"); ?>
<body>
<?php require("inc/topbar.php"); ?>

<main class="container-lg mt-2">
  <div class="bg-light p-4 rounded">
  <div class="row text-center mb-3">
    <div>
      <img src="image/nu-logo.png" class="img-thumbnail" style="width:100px;"> <br>
      <span class="h3">คําร้องทั่วไป</span>
    </div>
  </div> 

  <form action="form_nu18_pdf.php" method="post" id="fmadd" name="fmadd">
  <div class="row mt-3">
      <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text"> ลงวันที่ </span>
          <input type="date" class="form-control" name="datenow"  required>
        </div>						  					  
      </div>
      <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">ภาคการศึกษา</span>
          <input type="number" class="form-control" oninput="maxLengthCheck(this)" min="0" maxlength="4" name="term" placeholder="ภาคเรียนที่" required>
        </div>						  
      </div>
    </div>

    
    <div class="row">
    <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">ปีการศึกษา</span>
          <input type="text" class="form-control" name="year" placeholder="ปีการศึกษา"required>    
        </div>						  
      </div>
      <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">รหัสประจำตัวนิสิต</span>
          <input type="number" class="form-control"  oninput="maxLengthCheck(this)" min="0" maxlength="1" name="id1" placeholder="x" maxlength="1" required>
          <input type="number" class="form-control"  oninput="maxLengthCheck(this)" min="0" maxlength="1" name="id2" placeholder="x"  maxlength="1" required>
          <input type="number" class="form-control"  oninput="maxLengthCheck(this)" min="0" maxlength="1" name="id3" placeholder="x"  maxlength="1" required>
          <input type="number" class="form-control"  oninput="maxLengthCheck(this)" min="0" maxlength="1" name="id4" placeholder="x"  maxlength="1" required>
          <input type="number" class="form-control"  oninput="maxLengthCheck(this)" min="0" maxlength="1" name="id5" placeholder="x"  maxlength="1" required>
          <input type="number" class="form-control"  oninput="maxLengthCheck(this)" min="0" maxlength="1" name="id6" placeholder="x"  maxlength="1" required>
          <input type="number" class="form-control"  oninput="maxLengthCheck(this)" min="0" maxlength="1" name="id7" placeholder="x"  maxlength="1" required>
          <input type="number" class="form-control"  oninput="maxLengthCheck(this)" min="0" maxlength="1" name="id8" placeholder="x"  maxlength="1" required>
        </div>						  
      </div>
    </div><br>
    
    <div class="row">
    <div class="col-md-2">
      <div class="input-group input-group-sm mb-3">
        <span class="input-group-text">เรียน อธิการบดี</span>
      </div>						  
    </div>
    <div class="col-md-10">
      <div class="input-group input-group-sm mb-3">
        <span class="input-group-text">เรื่อง</span>
        <input type="text" class="form-control" name="about" 
        placeholder="" required>    
      </div>						  
    </div>
  </div>				  
  <div class="col-md-6">
    <div class="input-group input-group-sm mb-3">
      <span class="input-group-text">ข้าพเจ้า</span>
      <input type="text" class="form-control" name="name" 
      placeholder="(นาย/นาง/นางสาว) ชื่อ-นามสกุล" required>    
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
          <input type="number" class="form-control"  oninput="maxLengthCheck(this)" min="0" maxlength="10" name="num" placeholder="เบอร์โทร" required>
        </div>						  
      </div>
      <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">E-mail</span>
          <input type="text" class="form-control" name="mail" required>    
        </div>						  
      </div>
    </div><br>
    <div class="row">
          <div class="col-md-12">
              <div class="input-group input-group-sm mb-3">
                <span class="input-group-text"> มีความประสงค์</span>
                <input type="text" class="form-control" name="report" required>   
              </div>						  
            </div>
        </div>






  <hr class="mt-1">
  <div class="row">
    <div class="col-md-12">
        <input type="hidden" name="title_head" value="NU18" />
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
