<?php require_once("inc/func.php"); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>NU16</title>
  <?php require("inc/css_inc.php"); ?>
<body>
<?php require("inc/topbar.php"); ?>

<main class="container-lg mt-2">
  <div class="bg-light p-4 rounded">
  <div class="row text-center mb-3">
    <div>
      <img src="image/nu-logo.png" class="img-thumbnail" style="width:100px;"> <br>
      <span class="h3">ขอเปลี่ยนชื่อ ชื่อสกุล และยศ</span>
    </div>
  </div> 

  <form action="form_nu16_pdf.php" method="post" id="fmadd" name="fmadd"required>
    <div class="row">
      <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text"> ลงวันที่ </span>
          <input type="date" class="form-control" name="datenow"  required>
        </div>							  
      </div>
      </div>  

    <div class="row">
      <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text"> ข้าพเจ้า </span>
          <input type="text" class="form-control" name="name" placeholder="ชื่อ-สกุล" required>
        </div>						  
      </div>
      <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">รหัสนิสิต</span>
          <input type="text" class="form-control" name="ids" required>    
        </div>						  
      </div>
    </div>

    <div class="row">
    <div class="col-md-4">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">ชั้นปี</span>
          <input type="text" class="form-control" name="year" placeholder="1,2,3,4" required>
        </div>						  
      </div>
      <div class="col-md-4">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">คณะ</span>
          <input type="text" class="form-control" name="faculty" placeholder="" required>
        </div>						  
      </div>
      <div class="col-md-4">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">สาขาวิชา</span>
          <input type="text" class="form-control" name="Major" placeholder="" required>    
        </div>						  
      </div>
    </div>

    <div class="row">
    <div class="col-md-12">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">ที่อยู่ที่สามารถติดต่อได้สะดวก</span>
          <input type="text" class="form-control" name="address" placeholder="" required>
        </div>						  
      </div>
    </div>

    <div class="row">
      <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">ขอเปลี่ยนจากเดิม</span>
          <input type="text" class="form-control" name="name_old" placeholder="ชื่อ-สกุล" required>
        </div>						  
      </div>
      <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">เป็น</span>
          <input type="text" class="form-control" name="name_new" required>    
        </div>						  
      </div>
    </div>
    
    
    
    <div class="row">
      <div class="col-md-12">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">ชื่อ, สกุล, ยศ ที่ขอเปลี่ยนใหม่เป็นภาษาอังกฤษตัวพิมพ์ใหญ</span>
          <input type="text" class="form-control" name="name_newE" required>    
        </div>						  
      </div>
</div>

	  
	  
  
  <hr class="mt-1">
  <div class="row">
    <div class="col-md-12">
        <input type="hidden" name="title_head" value="NU16" />
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
