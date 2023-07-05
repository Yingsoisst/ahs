<?php require_once("inc/func.php"); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>แบบฟอร์มโครงการจัดตั้งหน่วยวิจัย</title> 
 <?php require("inc/css_inc.php"); ?>
<style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            text-align: center;
          }
          .table1 table tr td  {
            width: 50px; 
            height: 40px;
          }

          .table1 table tr td input {
           width: 50px; 
           height: 40px;
        }

        .table2 table tr td  {
            width: 50px; 
            height: 40px;
          }

          .table2 table tr td input {
           width: 100px; 
           height: 40px;
        }
    </style>


</head>
<body>
<?php require("inc/topbar.php"); ?>

<main class="container-lg mt-2">
  <div class="bg-light p-4 rounded">
  <div class="row text-center mb-3">
    <div>
      <img src="image/logo.png" class="img-thumbnail" style="width:100px;"> <br>
      <span class="h3">โครงการจัดตั้งหน่วยวิจัย</span>
    </div>
  </div> 

  <form action="form4_pdf.php" method="post" id="fmadd" name="fmadd">
          <!-- หน้า1 -->
          <div class="row">
            <div class="col-md-6">
              <div class="input-group input-group-sm mb-3">
                <span class="input-group-text">โครงการจัดตั้งหน่วยวิจัยด้าน</span>
                <input type="text" class="form-control" name="research_unit" placeholder="" >
              </div>						  
            </div>
          </div>
      <!-- หน้า 2 -->
            1. ชื่อโครงการ
          <div class="row">
            <div class="col-md-6">
              <div class="input-group input-group-sm mb-3">
                <span class="input-group-text">ภาษาไทย : </span>
                <span class="input-group-text">หน่วยวิจัยด้าน</span>
                <input type="text" class="form-control" name="Thai" placeholder="" >
              </div>						  
            </div>
            <div class="col-md-6">
              <div class="input-group input-group-sm mb-3">
                <span class="input-group-text"> ภาษาอังกฤษ :  </span>
                <input type="text" class="form-control" name="English" >    
              </div>						  
            </div>
          </div> <br>
      
          2. ลักษณะโครงการ :(ให้ชี้แจงลักษณะโครงการมาพอสังเขป)
          <div class="row">
            <div class="col-md-12">
              <div class="input-group input-group-sm mb-3">
                <span class="input-group-text">ลักษณะโครงการ</span>
                <input type="text" class="form-control" name="nature" placeholder=""  >
              </div>						  
            </div>
          </div><br>
          
          3.   หัวหน้าหน่วยวิจัย
          <div class="row">
            <div class="col-md-12">
              <div class="input-group input-group-sm mb-3">
                <span class="input-group-text">ชื่อ-นามสกุล</span>
                <input type="text" class="form-control" name="name1" placeholder="" >
                <span class="input-group-text">ตำแหน่งทางวิชาการ</span>
                <input type="text" class="form-control" name="position1" placeholder=""  >
                <span class="input-group-text">สังกัด</span>
                <input type="text" class="form-control" name="affiliation1" placeholder=""  >
              </div>						  
            </div>
          </div>
<!-- 
          <div class="row">
            <div class="col-md-8">
              <div class="input-group input-group-sm mb-3">
                <span class="input-group-text">สาขาที่มีความเชี่ยวชาญ</span>
                <input type="text" class="form-control" name="major" placeholder=""  >
              </div>						  
            </div>
          </div><br> -->
          <div class="row">
            <div class="col-md-6">
              <div class="input-group input-group-sm mb-3">
                <span class="input-group-text">สาขาที่มีความเชี่ยวชาญ</span>
                <input type="text" class="form-control" name="major" placeholder=""  >
              </div>						  
            </div>
            <div class="col-md-6">
              <div class="input-group input-group-sm mb-3">
                <span class="input-group-text">ผลงานวิจัยที่ผ่านมา</span>
                <input type="text" class="form-control" name="research_results1" placeholder="เขียนอ้างอิง แบบ Vancouver style โดยให้ใช้ตัวเข้มที่ชื่อของนักวิจัย"  >
              </div>						  
            </div>
          </div><br>

          ทุนสนับสนุนการวิจัย (ในฐานะหัวหน้าโครงการวิจัย)
          <div class="row">
            <div class="col-md-12">
              <div class="input-group input-group-sm mb-3">
                <span class="input-group-text">ลำดับ 1</span>
                <span class="input-group-text">ปีงบประมาณ</span>
                <input type="number" class="form-control" oninput="maxLengthCheck(this)" min="0" maxlength="4"  name="fiscal_year1" placeholder="" >
                <span class="input-group-text">โครงการ</span>
                <input type="text" class="form-control" name="project1" placeholder="" >
                <span class="input-group-text">แหล่งทุน</span>
                <input type="text" class="form-control" name="funding1" placeholder="" >
              </div>						  
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="input-group input-group-sm mb-3">
                <span class="input-group-text">ลำดับ 2</span>
                <span class="input-group-text">ปีงบประมาณ</span>
                <input type="number" class="form-control"  oninput="maxLengthCheck(this)" min="0" maxlength="4" name="fiscal_year2" placeholder="" >
                <span class="input-group-text">โครงการ</span>
                <input type="text" class="form-control" name="project2" placeholder="" >
                <span class="input-group-text">แหล่งทุน</span>
                <input type="text" class="form-control" name="funding2" placeholder="" >
              </div>						  
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="input-group input-group-sm mb-3">
                <span class="input-group-text">ลำดับ 3</span>
                <span class="input-group-text">ปีงบประมาณ</span>
                <input type="number" class="form-control" oninput="maxLengthCheck(this)" min="0" maxlength="4" name="fiscal_year3" placeholder="" >
                <span class="input-group-text">โครงการ</span>
                <input type="text" class="form-control" name="project3" placeholder="" >
                <span class="input-group-text">แหล่งทุน</span>
                <input type="text" class="form-control" name="funding3" placeholder="" >
              </div>						  
            </div>
          </div>

          ประสบการณ์การเป็นอาจารย์ที่ปรึกษาวิทยานิพนธ์หลักของนิสิตระดับบัณฑิตศึกษา <br>
          ระดับปริญญาโท
          <div class="row">
            <div class="col-md-12">
              <div class="input-group input-group-sm mb-3">
                <span class="input-group-text">ลำดับ 1</span>
                <span class="input-group-text">ปีการศึกษา</span>
                <input type="number" class="form-control" oninput="maxLengthCheck(this)" min="0" maxlength="4" name="year1" placeholder="" >
                <span class="input-group-text">ชื่อ-นามสกุลนิสิต</span>
                <input type="text" class="form-control" name="name2" placeholder="" >
                <span class="input-group-text">หลักสูตร/สาขาวิชา</span>
                <input type="text" class="form-control" name="course1" placeholder="" >
                <span class="input-group-text">สถานะภาพนิสิต</span>
                <input type="text" class="form-control" name="status1" placeholder="" >
              </div>						  
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="input-group input-group-sm mb-3">
                <span class="input-group-text">ลำดับ 2</span>
                <span class="input-group-text">ปีการศึกษา</span>
                <input type="number" class="form-control" oninput="maxLengthCheck(this)" min="0" maxlength="4" name="year2" placeholder="" >
                <span class="input-group-text">ชื่อ-นามสกุลนิสิต</span>
                <input type="text" class="form-control" name="name3" placeholder="" >
                <span class="input-group-text">หลักสูตร/สาขาวิชา</span>
                <input type="text" class="form-control" name="course2" placeholder="" >
                <span class="input-group-text">สถานะภาพนิสิต</span>
                <input type="text" class="form-control" name="status2" placeholder="" >
              </div>						  
            </div>
          </div>
<!-- หน้า3 -->
          ระดับปริญญาเอก
          <div class="row">
            <div class="col-md-12">
              <div class="input-group input-group-sm mb-3">
                <span class="input-group-text">ลำดับ 1</span>
                <span class="input-group-text">ปีการศึกษา</span>
                <input type="number" class="form-control" oninput="maxLengthCheck(this)" min="0" maxlength="4" name="year3" placeholder="" >
                <span class="input-group-text">ชื่อ-นามสกุลนิสิต</span>
                <input type="text" class="form-control" name="name4" placeholder="" >
                <span class="input-group-text">หลักสูตร/สาขาวิชา</span>
                <input type="text" class="form-control" name="course3" placeholder="" >
                <span class="input-group-text">สถานะภาพนิสิต</span>
                <input type="text" class="form-control" name="status3" placeholder="" >
              </div>						  
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="input-group input-group-sm mb-3">
                <span class="input-group-text">ลำดับ 2</span>
                <span class="input-group-text">ปีการศึกษา</span>
                <input type="number" class="form-control" oninput="maxLengthCheck(this)" min="0" maxlength="4" name="year4" placeholder="" >
                <span class="input-group-text">ชื่อ-นามสกุลนิสิต</span>
                <input type="text" class="form-control" name="name5" placeholder="" >
                <span class="input-group-text">หลักสูตร/สาขาวิชา</span>
                <input type="text" class="form-control" name="course4" placeholder="" >
                <span class="input-group-text">สถานะภาพนิสิต</span>
                <input type="text" class="form-control" name="status4" placeholder="" >
              </div>						  
            </div>
          </div><br>
          
          
          4.   นักวิจัยของหน่วยวิจัย 
          <div class="row">
            <div class="col-md-12">
              <div class="input-group input-group-sm mb-3">
                <span class="input-group-text">ชื่อ-นามสกุล</span>
                <input type="text" class="form-control" name="name6" placeholder=""  >
                <span class="input-group-text">ตำแหน่งทางวิชาการ</span>
                <input type="text" class="form-control" name="position2" placeholder=""  >
                <span class="input-group-text">สังกัด</span>
                <input type="text" class="form-control" name="affiliation2" placeholder=""  >
              </div>						  
            </div>
          </div>

          <div class="row">
            <div class="col-md-6">
              <div class="input-group input-group-sm mb-3">
                <span class="input-group-text">สาขาที่มีความเชี่ยวชาญ</span>
                <input type="text" class="form-control" name="major2" placeholder=""  >
              </div>						  
            </div>
            <div class="col-md-6">
              <div class="input-group input-group-sm mb-3">
                <span class="input-group-text">ผลงานวิจัยที่ผ่านมา</span>
                <input type="text" class="form-control" name="research_results2" placeholder="เขียนอ้างอิง แบบ Vancouver style โดยให้ใช้ตัวเข้มที่ชื่อของนักวิจัย"  >
              </div>						  
            </div>
          </div>
          
          
ประสบการณ์การเป็นอาจารย์ที่ปรึกษาวิทยานิพนธ์หลักหรือร่วมของนิสิตระดับบัณฑิตศึกษา ((ถ้ามี โดยระบุจำนวนนิสิต ปีการศึกษาและหลักสูตร เป็นต้น))<br><br>
ระดับปริญญาโท
          <div class="row">
            <div class="col-md-12">
              <div class="input-group input-group-sm mb-3">
                <span class="input-group-text">ลำดับ 1</span>
                <span class="input-group-text">ปีที่ปรึกษาปีการศึกษา</span>
                <input type="number" class="form-control" oninput="maxLengthCheck(this)" min="0" maxlength="4" name="year5" placeholder="" >
                <span class="input-group-text">ชื่อ-นามสกุล นักศึกษานิสิต</span>
                <input type="text" class="form-control" name="name7" placeholder="" >
              </div>						  
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="input-group input-group-sm mb-3">
                <span class="input-group-text">หลักสูตร/สาขาวิชา</span>
                <input type="text" class="form-control" name="course5" placeholder="" >
                <span class="input-group-text">สถานะภาพนิสิต</span>
                <input type="text" class="form-control" name="status5" placeholder="" >
              </div>						  
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="input-group input-group-sm mb-3">
                <span class="input-group-text">ลำดับ 2</span>
                <span class="input-group-text">ปีที่ปรึกษาปีการศึกษา</span>
                <input type="number" class="form-control" oninput="maxLengthCheck(this)" min="0" maxlength="4" name="year6" placeholder="" >
                <span class="input-group-text">ชื่อ-นามสกุล นักศึกษานิสิต</span>
                <input type="text" class="form-control" name="name8" placeholder="" >
              </div>						  
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="input-group input-group-sm mb-3">
                <span class="input-group-text">หลักสูตร/สาขาวิชา</span>
                <input type="text" class="form-control" name="course6" placeholder="" >
                <span class="input-group-text">สถานะภาพนิสิต</span>
                <input type="text" class="form-control" name="status6" placeholder="" >
              </div>						  
            </div>
          </div><br>

ระดับปริญญาเอก
<div class="row">
            <div class="col-md-12">
              <div class="input-group input-group-sm mb-3">
                <span class="input-group-text">ลำดับ 1</span>
                <span class="input-group-text">ปีที่ปรึกษา</span>
                <input type="number" class="form-control" oninput="maxLengthCheck(this)" min="0" maxlength="4" name="year7" placeholder="" >
                <span class="input-group-text">ชื่อ-นามสกุล นักศึกษา</span>
                <input type="text" class="form-control" name="name9" placeholder="" >
              </div>						  
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="input-group input-group-sm mb-3">
                <span class="input-group-text">สาขาวิชา</span>
                <input type="text" class="form-control" name="major3" placeholder="" >
                <span class="input-group-text">สถานะภาพนิสิต</span>
                <input type="text" class="form-control" name="status7" placeholder="" >
              </div>						  
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="input-group input-group-sm mb-3">
                <span class="input-group-text">ลำดับ 2</span>
                <span class="input-group-text">ปีที่ปรึกษา</span>
                <input type="number" class="form-control" oninput="maxLengthCheck(this)" min="0" maxlength="4" name="year8" placeholder="" >
                <span class="input-group-text">ชื่อ-นามสกุล นักศึกษา</span>
                <input type="text" class="form-control" name="name10" placeholder="" >
              </div>						  
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="input-group input-group-sm mb-3">
                <span class="input-group-text">สาขาวิชา</span>
                <input type="text" class="form-control" name="major4" placeholder="" >
                <span class="input-group-text">สถานะภาพนิสิต</span>
                <input type="text" class="form-control" name="status8" placeholder="" >
              </div>						  
            </div>
          </div><br>
          5.   นักวิจัยที่ปรึกษา  (ถ้ามี (หากเป็นนักวิจัยจากภายนอกคณะฯ ให้ยื่นแบบตอบรับการเป็นที่ปรึกษากลุ่มวิจัย พร้อมลงนาม))
          <div class="row">
            <div class="col-md-12">
              <div class="input-group input-group-sm mb-3">
                <span class="input-group-text">ชื่อ-นามสกุล</span>
                <input type="text" class="form-control" name="name11" placeholder=""  >
                <span class="input-group-text">ตำแหน่งทางวิชาการ</span>
                <input type="text" class="form-control" name="position3" placeholder=""  >
              </div>						  
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="input-group input-group-sm mb-3">
                <span class="input-group-text">สังกัด</span>
                <input type="text" class="form-control" name="affiliation3" placeholder=""  >
                <span class="input-group-text">สาขาวิชาที่มีความเชี่ยวชาญ</span>
                <input type="text" class="form-control" name="major5" placeholder=""  >
              </div>						  
            </div>
          </div>
          <br>
          6.   หลักการและเหตุผล   
          <div class="row">
            <div class="col-md-12">
              <div class="input-group input-group-sm mb-3">
                <span class="input-group-text">หลักการและเหตุผล</span>
                <input type="text" class="form-control" name="reasons" placeholder="">
              </div>						  
            </div>
          </div>
          <br>
          <!-- หน้า 4 -->
          7.   วัตถุประสงค์   
          <div class="row">
            <div class="col-md-12">
              <div class="input-group input-group-sm mb-3">
                <span class="input-group-text">วัตถุประสงค์ </span>
                <input type="text" class="form-control" name="objective" placeholder="">
              </div>						  
            </div>
          </div><br>
          8.พันธกิจ<br>     8.1 พันธกิจด้านการวิจัย<br>     
          <div class="row">
            <div class="col-md-12">
              <div class="input-group input-group-sm mb-3">
                <span class="input-group-text">  8.2 พันธกิจด้านการควบคุมวิทยานิพนธ์ระดับบัณฑิตศึกษา</span>
                <input type="text" class="form-control" name="Control" placeholder="(ให้ระบุหลักสูตรระดับบัณฑิตศึกษาที่เกี่ยวข้อง ที่สามารถรับนิสิตในแต่ละหลักสูตรทำวิทยานิพนธ์ภายใต้การดำเนินงานของหน่วยวิจัย)">
              </div>						  
            </div>
          </div><br>

          9.  แผนการจัดการหน่วยวิจัย <br>
        
          <div class="row">
            <div class="col-md-12">
              <div class="input-group input-group-sm mb-3">
                <span class="input-group-text">  9.1  โครงสร้างหน่วยวิจัย</span>
                <input type="text" class="form-control" name="describe" placeholder="บรรยาย + จัดทำแผนผังโครงสร้างของหน่วยวิจัย">
              </div>						  
            </div>
          </div><br>
          
          10.  เป้าหมาย(ให้กำหนดเป้าหมายในระยะ 5 ปี)
          <div class="row">
            <div class="col-md-12">
              <div class="input-group input-group-sm mb-3">
                <span class="input-group-text">ปีที่ 1</span>
                <span class="input-group-text">เป้าหมาย</span>
                <input type="text" class="form-control" name="target1" placeholder="" >
                <span class="input-group-text">ผลผลิต</span>
                <input type="text" class="form-control" name="product1" placeholder="" >
              </div>						  
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="input-group input-group-sm mb-3">
                <span class="input-group-text">ปีที่ 2-3</span>
                <span class="input-group-text">เป้าหมาย</span>
                <input type="text" class="form-control" name="target2" placeholder="" >
                <span class="input-group-text">ผลผลิต</span>
                <input type="text" class="form-control" name="product2" placeholder="" >
              </div>						  
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="input-group input-group-sm mb-3">
                <span class="input-group-text">ปีที่ 4-5</span>
                <span class="input-group-text">เป้าหมาย</span>
                <input type="text" class="form-control" name="target3" placeholder="" >
                <span class="input-group-text">ผลผลิต</span>
                <input type="text" class="form-control" name="product3" placeholder="" >
              </div>						  
            </div>
          </div>

          <!-- หน้า 5 -->
          11. แผนการดำเนินงาน (แผนระยะ 5 ปี โดยแยกเป็นแผนระยะสั้น 1 ปี และแผนระยะยาว 5 ปี)<br>
          แผนด้านการวิจัย / แผนด้านการควบคุมวิทยานิพนธ์ภายใต้การดำเนินงานของหน่วยวิจัย / แผนการสร้างเครือข่ายความร่วมมือทางวิชาการทั้งในและต่างประเทศ<br><br>
          11.1 แผนการดำเนินงานระยะสั้น
          <div class="row">
            <div class="col-md-6">
              <div class="input-group input-group-sm mb-3">
                <span class="input-group-text">  ระยะเริ่มต้น ปีงบประมาณ </span>
                <input type="number" class="form-control" oninput="maxLengthCheck(this)" min="0" maxlength="4" name="early_stage" placeholder="ปี พ.ศ.">
              </div>						  
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="input-group input-group-sm mb-3">
                <span class="input-group-text">ลำดับที่ 1</span>
                <span class="input-group-text">กิจกรรม </span>
                <input type="text" class="form-control" name="activity1" placeholder="">
              </div>						  
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="input-group input-group-sm mb-3">
                <span class="input-group-text">ลำดับที่ 2</span>
                <span class="input-group-text">กิจกรรม </span>
                <input type="text" class="form-control" name="activity2" placeholder="">
              </div>						  
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="input-group input-group-sm mb-3">
                <span class="input-group-text">ลำดับที่ 3</span>
                <span class="input-group-text">กิจกรรม </span>
                <input type="text" class="form-control" name="activity3" placeholder="">
              </div>						  
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="input-group input-group-sm mb-3">
                <span class="input-group-text">ลำดับที่ 4</span>
                <span class="input-group-text">กิจกรรม </span>
                <input type="text" class="form-control" name="activity4" placeholder="">
              </div>						  
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="input-group input-group-sm mb-3">
                <span class="input-group-text">ลำดับที่ 5</span>
                <span class="input-group-text">กิจกรรม </span>
                <input type="text" class="form-control" name="activity5" placeholder="">
              </div>						  
            </div>
          </div><br>

          11.2 แผนการดำเนินงานระยะยาว 
          <div class="row">
            <div class="col-md-12">
              <div class="input-group input-group-sm mb-3">
                <span class="input-group-text">ปีที่ 1</span>
                <span class="input-group-text">เป้าหมาย</span>
                <input type="text" class="form-control" name="target4" placeholder="">
                <span class="input-group-text">ผลผลิต</span>
                <input type="text" class="form-control" name="product4" placeholder="">
              </div>						  
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="input-group input-group-sm mb-3">
                <span class="input-group-text">ปีที่ 2-3</span>
                <span class="input-group-text">เป้าหมาย</span>
                <input type="text" class="form-control" name="target5" placeholder="">
                <span class="input-group-text">ผลผลิต</span>
                <input type="text" class="form-control" name="product5" placeholder="">
              </div>						  
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="input-group input-group-sm mb-3">
                <span class="input-group-text">ปีที่ 4-5</span>
                <span class="input-group-text">เป้าหมาย</span>
                <input type="text" class="form-control" name="target6" placeholder="">
                <span class="input-group-text">ผลผลิต</span>
                <input type="text" class="form-control" name="product6" placeholder="">
              </div>						  
            </div>
          </div><br>
          
          12.  ความร่วมมือ<br>
          <div class="row">
            <div class="col-md-12">
              <div class="input-group input-group-sm mb-3">
                <span class="input-group-text">12.1 หน่วยงานภายในมหาวิทยาลัยนเรศวร</span>
                <input type="text" class="form-control" name="inside1" placeholder="  ให้ชี้แจงหน่วยงานภายในที่เป็นหน่วยงานร่วมโครงการวิจัย">
              </div>						  
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="input-group input-group-sm mb-3">
                <span class="input-group-text">12.1 หน่วยงานภายในมหาวิทยาลัยนเรศวร</span>
                <input type="text" class="form-control" name="inside2" placeholder="  ให้ชี้แจงหน่วยงานภายในที่เป็นหน่วยงานร่วมโครงการวิจัย">
              </div>						  
            </div>
          </div><br>

          <div class="row">
            <div class="col-md-12">
              <div class="input-group input-group-sm mb-3">
                <span class="input-group-text">12.2 หน่วยงานภายนอกมหาวิทยาลัยนเรศวร ในประเทศ </span>
                <input type="text" class="form-control" name="outside1" placeholder=" ให้ชี้แจงหน่วยงานภายนอกที่เป็นหน่วยงานร่วมโครงการวิจัย">
              </div>						  
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="input-group input-group-sm mb-3">
                <span class="input-group-text">12.2 หน่วยงานภายนอกมหาวิทยาลัยนเรศวร ในประเทศ</span>
                <input type="text" class="form-control" name="outside2" placeholder="  ให้ชี้แจงหน่วยงานภายนอกที่เป็นหน่วยงานร่วมโครงการวิจัย">
              </div>						  
            </div>
          </div>
          <!-- หน้า 6 -->
          <br>13. ตัวชี้วัดเพื่อการประเมินผลสำเร็จของโครงการ* (แยกเป็น KPI รายปี ติดต่อกัน  5 ปี)<br>
          13.1 จำนวนผลงานวิจัย (ที่มีการระบุชื่อหน่วยวิจัย ในที่อยู่ของผู้วิจัย) 

<!-- ตาราง -->
<div class="table1">
<table style = "width: 100%; " >

<!-- หัวตาราง -->
  <tr style="font-size: 16px; height: 60px; ">
    <th rowspan="2" style="width: 100px;">ระดับผลงาน</th>
    <th rowspan="2" style="width: 550px;">ประเภทของผลงาน(จำนวน)</th>
    <th colspan="5" style="width: 250px;">ปีงบประมาณ</th>
  </tr>

  <!-- ช่องใส่ปีงบประมาณ -->
  <tr style="font-size: 13px; height: 40px">
    <td  ><input type="number" name="A1" oninput="maxLengthCheck(this)" min="0" maxlength="4" placeholder="พ.ศ." ></td> 
    <td  ><input type="number" name="A2" oninput="maxLengthCheck(this)" min="0" maxlength="4" placeholder="พ.ศ."></td>
    <td  ><input type="number" name="A3" oninput="maxLengthCheck(this)" min="0" maxlength="4" placeholder="พ.ศ."></td>
    <td  ><input type="number" name="A4" oninput="maxLengthCheck(this)" min="0" maxlength="4" placeholder="พ.ศ."></td>
    <td  ><input type="number" name="A5" oninput="maxLengthCheck(this)" min="0" maxlength="4" placeholder="พ.ศ."></td>
  </tr>

  <!-- เนื้อหา -->

  <tr style="font-size: 12px; height: 40px">
    
    <th rowspan="3">A</th>

    <!-- ชื่อเรื่อง -->
    <td style = "text-align: left; ">1.  มีผลงานตีพิมพ์รูปแบบระดับนานาชาติซึ่งอยู่ในฐาน ISI และ 
        Scopus ในฐานะผู้วิจัยชื่อแรก หรือผู้รับผิดชอบบทความวิจัย 
    </td>

    <!-- ใส่จำนวนเงิน -->
    <td  ><input type="number" name="A11" placeholder="จำนวน" ></td> 
    <td  ><input type="number" name="A12" placeholder="จำนวน" ></td>
    <td  ><input type="number" name="A13" placeholder="จำนวน" ></td>
    <td  ><input type="number" name="A14" placeholder="จำนวน" ></td>
    <td  ><input type="number" name="A15" placeholder="จำนวน" ></td>
  </tr>
  <tr style="font-size: 13px; height: 40px">
    <td style = "text-align: left">2.   มีผลงานในรูปแบบอื่น เช่น ผลงานวิจัยตีพิมพ์  อนุสิทธิบัตร สิทธิบัตร ในฐานะผู้วิจัยชื่อแรก หรือผู้รับผิดชอบบทความวิจัย หรือเจ้าของผลงานหลัก </td>
    <td  ><input type="number" name="A21" placeholder="จำนวน" ></td> 
    <td  ><input type="number" name="A22" placeholder="จำนวน" ></td>
    <td  ><input type="number" name="A23" placeholder="จำนวน" ></td>
    <td  ><input type="number" name="A24" placeholder="จำนวน" ></td>
    <td  ><input type="number" name="A25" placeholder="จำนวน" ></td>
  </tr>
  <tr style="font-size: 13px; height: 40px">
    <td style = "text-align: left">3.   ได้รับทุนสนับสนุนการวิจัยทุกปี (ทุน คปก./ สกอ. เป็นต้น)</td>
    <td  ><input type="number" name="A31" placeholder="จำนวน" ></td> 
    <td  ><input type="number" name="A32" placeholder="จำนวน" ></td>
    <td  ><input type="number" name="A33" placeholder="จำนวน" ></td>
    <td  ><input type="number" name="A34" placeholder="จำนวน" ></td>
    <td  ><input type="number" name="A35" placeholder="จำนวน" ></td>
  </tr>
  <tr style="font-size: 13px; height: 40px">
    <th rowspan="4">B</th>
    <td style = "text-align: left">1.   ตีพิมพ์ในวารสารระดับนานาชาติ (ไม่มีค่า Impact Factor)  หรือ</td>
    <td  ><input type="number" name="A41" placeholder="จำนวน" ></td> 
    <td  ><input type="number" name="A42" placeholder="จำนวน" ></td>
    <td  ><input type="number" name="A43" placeholder="จำนวน" ></td>
    <td  ><input type="number" name="A44" placeholder="จำนวน" ></td>
    <td  ><input type="number" name="A45" placeholder="จำนวน" ></td>
  </tr>
  <tr style="font-size: 13px; height: 40px">
    <td style = "text-align: left">2.   ตีพิมพ์ในวารสารระดับชาติ  หรือ</td>
    <td  ><input type="number" name="A51" placeholder="จำนวน" ></td> 
    <td  ><input type="number" name="A52" placeholder="จำนวน" ></td>
    <td  ><input type="number" name="A53" placeholder="จำนวน" ></td>
    <td  ><input type="number" name="A54" placeholder="จำนวน" ></td>
    <td  ><input type="number" name="A55" placeholder="จำนวน" ></td>
  </tr>
  <tr style="font-size: 13px; height: 40px">
    <td style = "text-align: left"> 3.   นำเสนอในการประชุมวิชาการ ที่มีการตีพิมพ์บทความบน Proceedings  หรือ</td>
    <td  ><input type="number" name="A61" placeholder="จำนวน" ></td> 
    <td  ><input type="number" name="A62" placeholder="จำนวน" ></td>
    <td  ><input type="number" name="A63" placeholder="จำนวน" ></td>
    <td  ><input type="number" name="A64" placeholder="จำนวน" ></td>
    <td  ><input type="number" name="A65" placeholder="จำนวน" ></td>
  </tr>
  <tr style="font-size: 13px; height: 40px">
    <td style = "text-align: left">4.   ได้สิ่งประดิษฐ์ อุปกรณ์ เครื่องมือ หรืออื่นๆ เช่น ฐานข้อมูล Software    ที่สามารถนำไปใช้ประโยชน์ได้ต่อไป  หรือ</td>
    <td  ><input type="number" name="A71" placeholder="จำนวน" ></td> 
    <td  ><input type="number" name="A72" placeholder="จำนวน" ></td>
    <td  ><input type="number" name="A73" placeholder="จำนวน" ></td>
    <td  ><input type="number" name="A74" placeholder="จำนวน" ></td>
    <td  ><input type="number" name="A75" placeholder="จำนวน" ></td>
  </tr>
</table>
</div>

  <br>13.2 จำนวนนิสิตระดับบัณฑิตศึกษาที่ทำวิทยานิพนธ์ภายใต้การดำเนินงานของหน่วยวิจัย
<div class="table2">
  <table style="width: 100%">
    <tr>
        <th style="width: 200px;" >ปีการศึกษา</th>
    <td  ><input type="number" name="B1" oninput="maxLengthCheck(this)" min="0" maxlength="4" placeholder="พ.ศ." ></td> 
    <td  ><input type="number" name="B2" oninput="maxLengthCheck(this)" min="0" maxlength="4" placeholder="พ.ศ."></td>
    <td  ><input type="number" name="B3" oninput="maxLengthCheck(this)" min="0" maxlength="4" placeholder="พ.ศ."></td>
    <td  ><input type="number" name="B4" oninput="maxLengthCheck(this)" min="0" maxlength="4" placeholder="พ.ศ."></td>
    <td  ><input type="number" name="B5" oninput="maxLengthCheck(this)" min="0" maxlength="4"  placeholder="พ.ศ."></td>
    </tr>
    <tr>
        <td>จำนวนนิสิตทำวิทยานิพนธ์ระดับปริญญาโท</td>
        <td  ><input type="number" name="B11" placeholder="จำนวนนิสิต" ></td> 
    <td  ><input type="number" name="B12" placeholder="จำนวนนิสิต" ></td>
    <td  ><input type="number" name="B13" placeholder="จำนวนนิสิต" ></td>
    <td  ><input type="number" name="B14" placeholder="จำนวนนิสิต" ></td>
    <td  ><input type="number" name="B15" placeholder="จำนวนนิสิต" ></td>
    </tr>
    <tr>
        <td>จำนวนนิสิตทำวิทยานิพนธ์ระดับปริญญาเอก</td>
        <td  ><input type="number" name="B21" placeholder="จำนวนนิสิต" ></td> 
    <td  ><input type="number" name="B22" placeholder="จำนวนนิสิต" ></td>
    <td  ><input type="number" name="B23" placeholder="จำนวนนิสิต" ></td>
    <td  ><input type="number" name="B24" placeholder="จำนวนนิสิต" ></td>
    <td  ><input type="number" name="B25" placeholder="จำนวนนิสิต" ></td>
    </tr>
</table>
</div>

  หมายเหตุ: นับจำนวนนิสิตทั้งหมดในแต่ละปีการศึกษา
  <br>
  <br>

  <!-- หน้า 7 -->
  14. งบประมาณ (+แผนการหางบประมาณจากแหล่งทุนภายนอก)<br>
  14.1 แหล่งงบประมาณ<br>
  1. งบประมาณสำหรับการบริหารจัดการ : 	งบประมาณสนับสนุนจากเงินรายได้ คณะสหเวชศาสตร์ มหาวิทยาลัยนเรศวร<br>
  2. งบประมาณสนับสนุนการวิจัย : <br>
  <div class="row">
            <div class="col-md-12">
              <div class="input-group input-group-sm mb-3">
                <span class="input-group-text">ทุนวิจัยที่ 1 จาก</span>
                <input type="text" class="form-control" name="capital1" placeholder="  ">
                <span class="input-group-text">ทุนวิจัยที่ 2 จาก</span>
                <input type="text" class="form-control" name="capital2" placeholder="  ">
              </div>						  
            </div>
          </div><br>
          14.2 แผนการหางบประมาณจากแหล่งทุนภายนอก
          <div class="row">
            <div class="col-md-12">
              <div class="input-group input-group-sm mb-3">
                <span class="input-group-text">รายการงบประมาณจากแหล่งทุนภายนอก</span>
                <input type="text" class="form-control" name="report" placeholder="ตัวอย่างเช่น ทุนวิจัยจากแหล่งทุนภายนอก เช่น ทุนวิจัยงบประมาณมุ่งเป้า ทุนวิจัย สวทช เป็นต้น ">
              </div>						  
            </div>
          </div>
          
          <div class="row">
            <div class="col-md-6">
              <div class="input-group input-group-sm mb-3">
                <span class="input-group-text">ลงชื่อ</span>
                <input type="text" class="form-control" name="name14" placeholder="  ">
                <span class="input-group-text">หัวหน้าหน่วยวิจับ</span>
              </div>						  
            </div>
          <div class="col-md-6">
            <div class="input-group input-group-sm mb-3">
              <span class="input-group-text"> ลงวันที่ </span>
              <input type="date" class="form-control" name="datenow1"  required>
            </div>						  
          </div>
        </div>


<!-- หน้า8 -->
        <main class="container-lg mt-2">
  <div class="bg-light p-4 rounded">
  <div class="row text-center mb-3">
    <div>
      <img src="image/ahs-logo.png" class="img-thumbnail" style="width:150px;"> <br>
      <span class="h3">แบบฟอร์มตอบรับเป็นนักวิจัยที่ปรึกษา</span>
    </div>
  </div> 
      <div class="row">
            <div class="col-md-10">
              <div class="input-group input-group-sm mb-3">
                <span class="input-group-text">เรียน   คณบดีคณะสหเวชศาสตร์</span>
                <span class="input-group-text">ข้าพเจ้า</span>
                <input type="text" class="form-control" name="name15" placeholder="(นาย/นาง/นางสาว) ชื่อ-นามสกุล">
              </div>						  
            </div>
        </div>
      <div class="row">
            <div class="col-md-6">
              <div class="input-group input-group-sm mb-3">
                <span class="input-group-text">ตำแหน่งทางวิชาการ</span>
                <input type="text" class="form-control" name="position4" placeholder="">
              </div>						  
            </div>
            <div class="col-md-6">
              <div class="input-group input-group-sm mb-3">
                <span class="input-group-text">คุณวุฒิสูงสุด</span>
                <input type="text" class="form-control" name="qualification1" placeholder="">
              </div>						  
            </div>
        </div>
      <div class="row">
            <div class="col-md-6">
              <div class="input-group input-group-sm mb-3">
                <span class="input-group-text">สาขาวิชา</span>
                <input type="text" class="form-control" name="major7" placeholder="">
              </div>						  
            </div>
            <div class="col-md-6">
              <div class="input-group input-group-sm mb-3">
                <span class="input-group-text">สำเร็จการศึกษาระดับสูงสุดจาก</span>
                <input type="text" class="form-control" name="graduate1" placeholder="">
              </div>						  
            </div>
        </div>
        
        <div class="row">
              <div class="col-md-12">
                <div class="input-group input-group-sm mb-3">
                  <span class="input-group-text">ที่อยู่ปัจจุบัน</span>
                  <input type="text" class="form-control" name="add1" placeholder="บ้านเลขที่">
                  <input type="text" class="form-control" name="add2" placeholder="ถนน">
                  <input type="text" class="form-control" name="add3" placeholder="ตรอก/ซอย">
                </div>						  
              </div>
        </div>
        <div class="row">
              <div class="col-md-12">
                <div class="input-group input-group-sm mb-3">
                  <input type="text" class="form-control" name="add4" placeholder="แขวง/ตำบล ">
                  <input type="text" class="form-control" name="add5" placeholder="อำเภอ">
                  <input type="text" class="form-control" name="add6" placeholder="จังหวัด">
                </div>						  
              </div>
        </div>
        <div class="row">
              <div class="col-md-12">
                <div class="input-group input-group-sm mb-3">
                  <input type="number" class="form-control"  oninput="maxLengthCheck(this)" min="0" maxlength="5" name="add7" placeholder="รหัสไปรษณีย์">
                  <input type="tel" class="form-control" oninput="maxLengthCheck(this)" min="0" maxlength="10" name="add8" placeholder="โทรศัพท์">
                  <input type="tel" class="form-control"  oninput="maxLengthCheck(this)" min="0" maxlength="10" name="add9" placeholder="โทรสาร">
                </div>						  
              </div>
        </div>
        <div class="row">
              <div class="col-md-12">
                <div class="input-group input-group-sm mb-3">
                  <input type="text" class="form-control" name="email" placeholder="E-mail">
                </div>						  
              </div>
        </div>

        <div class="row">
              <div class="col-md-12">
                <div class="input-group input-group-sm mb-3">
                <span class="input-group-text">สถานที่ทำงาน</span>
                  <input type="text" class="form-control" name="place" placeholder="ชื่อสถานที่ทำงาน">
                </div>						  
              </div>
        </div>
        <div class="row">
              <div class="col-md-12">
                <div class="input-group input-group-sm mb-3">
                  <input type="text" class="form-control" name="add12" placeholder="เลขที่">
                  <input type="text" class="form-control" name="add22" placeholder="ถนน">
                  <input type="text" class="form-control" name="add32" placeholder="ตรอก/ซอย">
                </div>						  
              </div>
        </div>
        <div class="row">
              <div class="col-md-12">
                <div class="input-group input-group-sm mb-3">
                  <input type="text" class="form-control" name="add42" placeholder="แขวง/ตำบล ">
                  <input type="text" class="form-control" name="add52" placeholder="อำเภอ">
                  <input type="text" class="form-control" name="add62" placeholder="จังหวัด">
                </div>						  
              </div>
        </div>
        <div class="row">
              <div class="col-md-12">
                <div class="input-group input-group-sm mb-3">
                  <input type="number" class="form-control"  oninput="maxLengthCheck(this)" min="0" maxlength="5" name="add72" placeholder="รหัสไปรษณีย์">
                  <input type="tel" class="form-control"  oninput="maxLengthCheck(this)" min="0" maxlength="10" name="add82" placeholder="โทรศัพท์">
                  <input type="tel" class="form-control"  oninput="maxLengthCheck(this)" min="0" maxlength="10" name="add92" placeholder="โทรสาร">
                </div>						  
              </div>
        </div>

        <!-- หน้า 9 -->
        <main class="container-lg mt-2">
  <div class="bg-light p-4 rounded">
  <div class="row text-center mb-3">
    <div>
      <img src="image/ahs-logo.png" class="img-thumbnail" style="width:150px;"> <br>
      <span class="h3">แบบฟอร์มตอบรับเป็นนักวิจัยร่วม</span>
    </div>
  </div> 
      <div class="row">
            <div class="col-md-10">
              <div class="input-group input-group-sm mb-3">
                <span class="input-group-text">เรียน   คณบดีคณะสหเวชศาสตร์</span>
                <span class="input-group-text">ข้าพเจ้า</span>
                <input type="text" class="form-control" name="name16" placeholder="(นาย/นาง/นางสาว) ชื่อ-นามสกุล">
              </div>						  
            </div>
        </div>
      <div class="row">
            <div class="col-md-6">
              <div class="input-group input-group-sm mb-3">
                <span class="input-group-text">ตำแหน่งทางวิชาการ</span>
                <input type="text" class="form-control" name="position6" placeholder="">
              </div>						  
            </div>
            <div class="col-md-6">
              <div class="input-group input-group-sm mb-3">
                <span class="input-group-text">คุณวุฒิสูงสุด</span>
                <input type="text" class="form-control" name="qualification2" placeholder="">
              </div>						  
            </div>
        </div>
      <div class="row">
            <div class="col-md-6">
              <div class="input-group input-group-sm mb-3">
                <span class="input-group-text">สาขาวิชา</span>
                <input type="text" class="form-control" name="major8" placeholder="">
              </div>						  
            </div>
            <div class="col-md-6">
              <div class="input-group input-group-sm mb-3">
                <span class="input-group-text">สำเร็จการศึกษาระดับสูงสุดจาก</span>
                <input type="text" class="form-control" name="graduate2" placeholder="">
              </div>						  
            </div>
        </div>
        
        <div class="row">
              <div class="col-md-12">
                <div class="input-group input-group-sm mb-3">
                  <span class="input-group-text">ที่อยู่ปัจจุบัน</span>
                  <input type="text" class="form-control" name="add13" placeholder="บ้านเลขที่">
                  <input type="text" class="form-control" name="add23" placeholder="ถนน">
                  <input type="text" class="form-control" name="add33" placeholder="ตรอก/ซอย">
                </div>						  
              </div>
        </div>
        <div class="row">
              <div class="col-md-12">
                <div class="input-group input-group-sm mb-3">
                  <input type="text" class="form-control" name="add43" placeholder="แขวง/ตำบล ">
                  <input type="text" class="form-control" name="add53" placeholder="อำเภอ">
                  <input type="text" class="form-control" name="add63" placeholder="จังหวัด">
                </div>						  
              </div>
        </div>
        <div class="row">
              <div class="col-md-12">
                <div class="input-group input-group-sm mb-3">
                  <input type="number" class="form-control"  oninput="maxLengthCheck(this)" min="0" maxlength="5" name="add73" placeholder="รหัสไปรษณีย์">
                  <input type="tel" class="form-control"  oninput="maxLengthCheck(this)" min="0" maxlength="10" name="add83" placeholder="โทรศัพท์">
                  <input type="tel" class="form-control"  oninput="maxLengthCheck(this)" min="0" maxlength="10" name="add93" placeholder="โทรสาร">
                </div>						  
              </div>
        </div>
        <div class="row">
              <div class="col-md-12">
                <div class="input-group input-group-sm mb-3">
                  <input type="text" class="form-control" name="email2" placeholder="E-mail">
                </div>						  
              </div>
        </div>

        <div class="row">
              <div class="col-md-12">
                <div class="input-group input-group-sm mb-3">
                <span class="input-group-text">สถานที่ทำงาน</span>
                  <input type="text" class="form-control" name="place2" placeholder="ชื่อสถานที่ทำงาน">
                </div>						  
              </div>
        </div>
        <div class="row">
              <div class="col-md-12">
                <div class="input-group input-group-sm mb-3">
                  <input type="text" class="form-control" name="add14" placeholder="เลขที่">
                  <input type="text" class="form-control" name="add24" placeholder="ถนน">
                  <input type="text" class="form-control" name="add34" placeholder="ตรอก/ซอย">
                </div>						  
              </div>
        </div>
        <div class="row">
              <div class="col-md-12">
                <div class="input-group input-group-sm mb-3">
                  <input type="text" class="form-control" name="add44" placeholder="แขวง/ตำบล ">
                  <input type="text" class="form-control" name="add54" placeholder="อำเภอ">
                  <input type="text" class="form-control" name="add64" placeholder="จังหวัด">
                </div>						  
              </div>
        </div>
        <div class="row">
              <div class="col-md-12">
                <div class="input-group input-group-sm mb-3">
                  <input type="number" class="form-control"  oninput="maxLengthCheck(this)" min="0" maxlength="5" name="add74" placeholder="รหัสไปรษณีย์">
                  <input type="tel" class="form-control"  oninput="maxLengthCheck(this)" min="0" maxlength="10" name="add84" placeholder="โทรศัพท์">
                  <input type="tel" class="form-control"  oninput="maxLengthCheck(this)" min="0" maxlength="10" name="add94" placeholder="โทรสาร">
                </div>						  
              </div>
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="input-group input-group-sm mb-3">
              <span class="input-group-text"> ลงวันที่ </span>
              <input type="date" class="form-control" name="datenow2"  required>
            </div>						  
          </div>
        </div>

          <hr class="mt-1">
          <div class="row">
            <div class="col-md-12">
              <input type="hidden" name="title_head" value="แบบฟอร์มโครงการจัดตั้งหน่วยวิจัย ปี2562" />
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
