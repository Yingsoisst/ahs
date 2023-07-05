<?php require_once("inc/func.php"); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>รายงานผลการดำเนินงาน </title>
  <?php require("inc/css_inc.php"); ?>
<body>
<?php require("inc/topbar.php"); ?>

<main class="container-lg mt-2">
  <div class="bg-light p-4 rounded">
  <div class="row text-center mb-3">
    <div>
      <img src="image/ahs-logo.png" class="img-thumbnail" style="width:100px;"> <br>
      <span class="h3">รายงานผลการดำเนินงาน</span><br>
      <span class="h3">(รอบตามปีงบประมาณ)</span>
    </div>
  </div> 

  <form action="budget_pdf.php" method="post" id="fmadd" name="fmadd">
          
    <div class="row">
      <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">หน่วยวิจัยด้าน</span>
          <input type="text" class="form-control" name="research_unit" placeholder="" required>
        </div>						  
      </div>
    </div>

      1. ชื่อโครงการ
    <div class="row">
      <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">ภาษาไทย : </span>
          <span class="input-group-text">หน่วยวิจัยด้าน</span>
          <input type="text" class="form-control" name="Thai" placeholder="" required>
        </div>						  
      </div>
      <div class="col-md-6">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text"> ภาษาอังกฤษ :  </span>
          <input type="text" class="form-control" name="English" required>    
        </div>						  
      </div>
    </div> <br>

    2. ลักษณะโครงการ
    <div class="row">
      <div class="col-md-12">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">ลักษณะโครงการ</span>
          <input type="text" class="form-control" name="about" placeholder="" maxlength="500" required>
        </div>						  
      </div>
    </div><br>
    
    3.   หัวหน้าหน่วยวิจัย
    <div class="row">
      <div class="col-md-12">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">ชื่อ-นามสกุล</span>
          <input type="text" class="form-control" name="name1" placeholder="" maxlength="500" required>
          <span class="input-group-text">ตำแหน่ง</span>
          <input type="text" class="form-control" name="position1" placeholder="" maxlength="500" required>
          <span class="input-group-text">สังกัด</span>
          <input type="text" class="form-control" name="affiliation1" placeholder="" maxlength="500" required>
        </div>						  
      </div>
    </div><br>
    
    4.   สมาชิกหน่วยวิจัย
    <div class="row">
      <div class="col-md-12">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">ชื่อ-นามสกุล</span>
          <input type="text" class="form-control" name="name2" placeholder="" maxlength="500" required>
          <span class="input-group-text">ตำแหน่ง</span>
          <input type="text" class="form-control" name="position2" placeholder="" maxlength="500" required>
          <span class="input-group-text">สังกัด</span>
          <input type="text" class="form-control" name="affiliation2" placeholder="" maxlength="500" required>
        </div>						  
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">ชื่อ-นามสกุล</span>
          <input type="text" class="form-control" name="name3" placeholder="">
          <span class="input-group-text">ตำแหน่ง</span>
          <input type="text" class="form-control" name="position3" placeholder="">
          <span class="input-group-text">สังกัด</span>
          <input type="text" class="form-control" name="affiliation3" placeholder="">
        </div>						  
      </div>
    </div>
    
    <div class="row">
      <div class="col-md-12">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">ชื่อ-นามสกุล</span>
          <input type="text" class="form-control" name="name4" placeholder="">
          <span class="input-group-text">ตำแหน่ง</span>
          <input type="text" class="form-control" name="position4" placeholder="">
          <span class="input-group-text">สังกัด</span>
          <input type="text" class="form-control" name="affiliation4" placeholder="">
        </div>						  
      </div>
    </div>
    
    <div class="row">
      <div class="col-md-12">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">ชื่อ-นามสกุล</span>
          <input type="text" class="form-control" name="name5" placeholder="">
          <span class="input-group-text">ตำแหน่ง</span>
          <input type="text" class="form-control" name="position5" placeholder="">
          <span class="input-group-text">สังกัด</span>
          <input type="text" class="form-control" name="affiliation5" placeholder="">
        </div>						  
      </div>
    </div><br>
    
    5.   แผนการดำเนินงาน <br>
    5.1 ผลการดำเนินงานด้านการวิจัย
    <div class="row">
      <div class="col-md-12">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">ลำดับที่</span>
          <input type="number" class="form-control" name="No" placeholder=""  required>
          <span class="input-group-text">ผลงานตีพิมพ์</span>
          <input type="text" class="form-control" name="published" placeholder=""  required>
          <span class="input-group-text">รายละเอียดวารสาร</span>
          <input type="text" class="form-control" name="details" placeholder=""  required>
        </div>						  
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">ประเภทผลงานตีพิมพ์</span>
          <input type="text" class="form-control" name="Publication" placeholder=""  required>
          <span class="input-group-text">ฐานข้อมูล/Impact factor/Quartile</span>
          <input type="text" class="form-control" name="data" placeholder=""  required>
        </div>						  
      </div>
    </div>
    
    <div class="row">
      <div class="col-md-12">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">ลำดับที่</span>
          <input type="number" class="form-control" name="No1" placeholder="">
          <span class="input-group-text">เลขที่คำขอ</span>
          <input type="text" class="form-control" name="request" placeholder="">
          <span class="input-group-text">ประเภท</span>
          <input type="text" class="form-control" name="type" placeholder="">
        </div>						  
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">ชื่อสิงประดิษฐ์</span>
          <input type="text" class="form-control" name="invention" placeholder="">
          <span class="input-group-text">ฐานข้อมูล/Impact factor/Quartile</span>
          <input type="text" class="form-control" name="Quartile" placeholder="" >
          <span class="input-group-text">วันที่ได้รับจดทะเบียน</span>
          <input type="text" class="form-control" name="registration" placeholder="" >
        </div>						  
      </div>
    </div>
    
    5.2  ผลการดำเนินงานด้านการผลิตนิสิตระดับบัณฑิตศึกษา
    <div class="row">
      <div class="col-md-12">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">ลำดับที่</span>
          <input type="number" class="form-control" name="No2" placeholder=""  required>
          <span class="input-group-text">ชื่อ-นามสกุลนิสิต</span>
          <input type="text" class="form-control" name="name6" placeholder=""  required>
          <span class="input-group-text">ระดับการศึกษา/หลักสูตร/คณะ</span>
          <input type="text" class="form-control" name="course" placeholder=""  required>
          <span class="input-group-text">อาจารย์ที่ปรึกษา</span>
          <input type="text" class="form-control" name="advisor" placeholder=""  required>
        </div>						  
      </div>
    </div>
    
    
    5.3  ผลการดำเนินงานด้านแสวงหาแหล่งทุนสนับสนุนการวิจัยจากภายนอก
    <div class="row">
      <div class="col-md-12">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">ลำดับ</span>
          <input type="number" class="form-control" name="No3" placeholder=""  required>
          <span class="input-group-text">โครงการ</span>
          <input type="text" class="form-control" name="Project" placeholder=""  required>
          <span class="input-group-text">งบประมาณ</span>
          <input type="text" class="form-control" name="budget" placeholder=""  required>
        </div>						  
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">แหล่งทุน</span>
          <input type="text" class="form-control" name="funding" placeholder=""  required>
          <span class="input-group-text">ระยะเวลาโครงการ</span>
          <input type="text" class="form-control" name="period" placeholder=""  required>
          <span class="input-group-text">รวมงบประมาณที่ได้รับจากแหล่งทุนภายนอก</span>
          <input type="text" class="form-control" name="sum" placeholder=""  required>
        </div>						  
      </div>
    </div>
    
    <div class="row">
      5.4  ผลการดำเนินงานด้านความร่วมมือทางวิชาการกับองค์กรภายนอก
      <div class="col-md-12">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">ผลการดำเนินงานด้านความร่วมมือทางวิชาการกับองค์กรภายนอก</span>
          <input type="text" class="form-control" name="outside" placeholder=""  required>
        </div>						  
      </div>
    </div><br>
    
    <div class="row">
      6.  สรุปผลการดำเนินงานตามตัวชี้วัดเพื่อการประเมินผลสำเร็จของโครงการ <br>
      ระดับผลงาน A <br><br>
      1.มีผลงานตีพิมพ์เต็มรูปแบบระดับนานาชาติซึ่งอยู่ในฐาน ISI และ Scopus ในฐานะผู้วิจัยชื่อแรก หรือผู้รับผิดชอบบทความวิจัย  
          <div class="col-md-12">
            <div class="input-group input-group-sm mb-3">
              <span class="input-group-text">ปีงบประมาณ</span>
              <input type="text" class="form-control" name="this_year1" placeholder="เป้าหมายปีนี้"  required>
              <input type="text" class="form-control" name="Conclusion1" placeholder="ผลการดำเนินการ"  required>
              <input type="text" class="form-control" name="next_year1" placeholder="เป้าหมายปีถัดไป"  required>
            </div>						  
          </div>
        </div>
        <div class="row">
          2.มีผลงานในรูปแบบอื่น เช่น ผลงานวิจัยตีพิมพ์  อนุสิทธิบัตร สิทธิบัตร ในฐานะผู้วิจัยชื่อแรก หรือผู้รับผิดชอบบทความวิจัย หรือเจ้าของผลงานหลัก   
          <div class="col-md-12">
            <div class="input-group input-group-sm mb-3">
              <span class="input-group-text">ปีงบประมาณ</span>
              <input type="text" class="form-control" name="this_year2" placeholder="เป้าหมายปีนี้"  required>
              <input type="text" class="form-control" name="Conclusion2" placeholder="ผลการดำเนินการ"  required>
              <input type="text" class="form-control" name="next_year2" placeholder="เป้าหมายปีถัดไป"  required>
            </div>						  
          </div>
        </div>
        <div class="row">
          3.ได้รับทุนสนับสนุนการวิจัยทุกปี (ทุน คปก./ สกอ. เป็นต้น)   
          <div class="col-md-12">
            <div class="input-group input-group-sm mb-3">
              <span class="input-group-text">ปีงบประมาณ</span>
              <input type="text" class="form-control" name="this_year3" placeholder="เป้าหมายปีนี้"  required>
              <input type="text" class="form-control" name="Conclusion3" placeholder="ผลการดำเนินการ"  required>
              <input type="text" class="form-control" name="next_year3" placeholder="เป้าหมายปีถัดไป"  required>
            </div>						  
          </div>
        </div><br>
        
        <div class="row">
          ระดับผลงาน B <br><br>
          1. ตีพิมพ์ในวารสารระดับนานาชาติ (ไม่มีค่า Impact Factor) หรือ  
          <div class="col-md-12">
            <div class="input-group input-group-sm mb-3">
              <span class="input-group-text">ปีงบประมาณ</span>
              <input type="text" class="form-control" name="this_year4" placeholder="เป้าหมายปีนี้"  required>
              <input type="text" class="form-control" name="Conclusion4" placeholder="ผลการดำเนินการ"  required>
              <input type="text" class="form-control" name="next_year4" placeholder="เป้าหมายปีถัดไป"  required>
            </div>						  
          </div>
        </div>
        <div class="row">
          2. ตีพิมพ์ในวารสารระดับชาติ  หรือ
          <div class="col-md-12">
            <div class="input-group input-group-sm mb-3">
              <span class="input-group-text">ปีงบประมาณ</span>
              <input type="text" class="form-control" name="this_year5" placeholder="เป้าหมายปีนี้"  required>
              <input type="text" class="form-control" name="Conclusion5" placeholder="ผลการดำเนินการ"  required>
              <input type="text" class="form-control" name="next_year5" placeholder="เป้าหมายปีถัดไป"  required>
            </div>						  
          </div>
        </div>
        <div class="row">
          3. นำเสนอในการประชุมวิชาการ ที่มีการตีพิมพ์บทความบน Proceedings  หรือ 
          <div class="col-md-12">
            <div class="input-group input-group-sm mb-3">
              <span class="input-group-text">ปีงบประมาณ</span>
              <input type="text" class="form-control" name="this_year6" placeholder="เป้าหมายปีนี้"  required>
              <input type="text" class="form-control" name="Conclusion6" placeholder="ผลการดำเนินการ"  required>
              <input type="text" class="form-control" name="next_year6" placeholder="เป้าหมายปีถัดไป"  required>
            </div>						  
          </div>
        </div>
        <div class="row">
          4. ได้สิ่งประดิษฐ์ อุปกรณ์ เครื่องมือ หรืออื่นๆ เช่น ฐานข้อมูล Software    ที่สามารถนำไปใช้ประโยชน์ได้ต่อไป  หรือ 
          <div class="col-md-12">
            <div class="input-group input-group-sm mb-3">
              <span class="input-group-text">ปีงบประมาณ</span>
              <input type="text" class="form-control" name="this_year7" placeholder="เป้าหมายปีนี้"  required>
              <input type="text" class="form-control" name="Conclusion7" placeholder="ผลการดำเนินการ"  required>
              <input type="text" class="form-control" name="next_year7" placeholder="เป้าหมายปีถัดไป"  required>
            </div>						  
          </div>
        </div><br>
        7. ผลการดำเนินงานอื่นๆ
        <div class="row">
          <div class="col-md-12">
            <div class="input-group input-group-sm mb-3">
              <span class="input-group-text">ลักษณะโครงการ</span>
              <input type="text" class="form-control" name="project_nature" placeholder="" maxlength="500" required>
            </div>						  
          </div>
        </div>

        <div class="row mt-3">
      <div class="col-md-4">
      <div class="input-group input-group-sm mb-3">
          <span class="input-group-text"> ลงวันที่ </span>
          <input type="date" class="form-control" name="datenow1"  required>
        </div>						  
      </div>
</div>
  
  <hr class="mt-1">
  <div class="row">
    <div class="col-md-12">
        <input type="hidden" name="title_head" value="รายงานผลการดำเนินงาน" />
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
