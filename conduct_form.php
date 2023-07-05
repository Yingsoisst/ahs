<?php require_once("inc/func.php"); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ใบคำร้องขอหนังสือรับรองความประพฤติ</title>
  <?php require("inc/css_inc.php"); ?>
<body>
<?php require("inc/topbar.php"); ?>

<main class="container-lg mt-2">
  <div class="bg-light p-4 rounded">
  <div class="row text-center mb-3">
    <div>
      <img src="image/ahs-logo.png" class="img-thumbnail" style="width:100px;"> <br>
      <span class="h3">ใบคำร้องขอหนังสือรับรองความประพฤติ</span>
    </div>
  </div> 

  <form action="conduct_pdf.php" method="post" id="fmadd" name="fmadd">
    <div class="row">
      <div class="col-md-6">
      <div class="input-group input-group-sm mb-3">
          <span class="input-group-text"> วันที่ </span>
          <input type="date" class="form-control" name="date"  required>
        </div>						  
      </div>
    </div>

    <div class="row">
    <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">เรื่อง</span>
          <span class="input-group-text">ขอหนังสือรับรองความประพฤติ</span> 
        </div>						  
      </div>
    </div>
	  
	            
    <div class="row">
    <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">ข้าพเจ้า</span>
          <input type="text" class="form-control" name="name" placeholder="(นาย/นาง/นางสาว) ชื่อ-สกุล" required>    
          <span class="input-group-text">นิสิตคณะสหเวชศาสตร์</span>
        </div>						  
      </div>
      <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">สาขาวิชา</span>
          <input type="text" class="form-control" name="major" placeholder="" required>
        </div>						  
      </div>
    </div>
    
    <div class="row">
    <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">ชั้นปีที่</span>
          <input type="text" class="form-control" name="year" required>    
        </div>						  
      </div>
    <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">รหัสประจำตัวนิสิต</span>
          <input type="number" class="form-control" name="id" required>    
        </div>						  
      </div>
      </div>
      <div class="row">
      <div class="col-md-12">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">มีความประสงค์ขอหนังสือรับรองความประพฤติเพื่อ </span>
          <input type="text" class="form-control" name="to" placeholder="" required>
        </div>						  
      </div>
    </div>

    <div class="row">
      <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">เบอร์โทรศัพท์</span>
          <input type="number" class="form-control"  oninput="maxLengthCheck(this)" min="0" maxlength="10" name="num" placeholder="" required>
        </div>						  
      </div>
    </div>

  
  <hr class="mt-1">
  <div class="row">
    <div class="col-md-12">
        <input type="hidden" name="title_head" value="ใบคำร้องขอหนังสือรับรองความประพฤติ" />
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
