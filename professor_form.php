<?php require_once("inc/func.php"); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Academic Work Contribution</title>
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
      <span class="h3">Academic Work Contribution Form</span><br>
    </div>
    <div>
      <span class="h3">in accordance with the Rules and Procedures for Appointing to be</span><br>
    </div>
    <div>
      <span class="h3">an Assistant Professor Associate Professor, and Professor, 2022</span><br>
    </div>
  </div> 

  <form action="professor_pdf.php" method="post" id="fmadd" name="fmadd">
          

  <div class="row">
      <div class="col-md-7">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">A.	Title of academic work</span>
          <input type="text" class="form-control" name="Title" placeholder="" required>
        </div>						  
      </div>
      <div class="col-lg-5">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">B. Status of Applicant in above academic work</span>
          <select class="form-select mb-0.8" name="status" id="depart" required>
                    <option value="">Status of Applicant in above academic work</option>
                    <option value='1'>First author</option>
                    <option value='2'>Essentially intellectual contributor</option>
                    <option value='3'>Corresponding author</option>
                </select>
        </div>						  
      </div>				  
      </div>
      Status of Applicant in above academic work
<div class="d-flex">
  <div class="btn-group" role="group" style="height: 30px; width: 1200px;" aria-label="Basic radio toggle button group">
    <span class="input-group-text">Type 1 </span>
    <input type="radio" class="btn-check" name="btnradio1" id="btnradio1_1" value="1" autocomplete="off" >
    <label class="btn btn-outline-primary" for="btnradio1_1">Research article</label>
  </div>
</div><br>

Type 2 Others academic work
<div class="d-flex">
  <div class="btn-group" role="group" style="height: 30px; width: 1200px;" aria-label="Basic radio toggle button group">
    <input type="radio" class="btn-check" name="btnradio2" id="btnradio2_1" value="2" autocomplete="off">
    <label class="btn btn-outline-primary" for="btnradio2_1">Academic work for industry	</label>
    

    <input type="radio" class="btn-check" name="btnradio3" id="btnradio3_1" value="3" autocomplete="off">
    <label class="btn btn-outline-primary" for="btnradio3_1">Case study</label>
    

    <input type="radio" class="btn-check" name="btnradio4" id="btnradio4_1" value="4" autocomplete="off">
    <label class="btn btn-outline-primary" for="btnradio4_1">Academic work for teaching and learning development 	</label>
    
  </div>
</div>

<div class="d-flex">
  <div class="btn-group" role="group" style="height: 30px; width: 1200px;" aria-label="Basic radio toggle button group">
    <input type="radio" class="btn-check" name="btnradio5" id="btnradio5_1" value="5" autocomplete="off" >
    <label class="btn btn-outline-primary" for="btnradio5_1">Translation </label>
    
    <input type="radio" class="btn-check" name="btnradio6" id="btnradio6_1" value="6" autocomplete="off" >
    <label class="btn btn-outline-primary" for="btnradio6_1">Academic work for public policy development</label>
    
    <input type="radio" class="btn-check" name="btnradio7" id="btnradio7_1" value="7" autocomplete="off" >
    <label class="btn btn-outline-primary" for="btnradio7_1">Patent</label>
    
    <input type="radio" class="btn-check" name="btnradio8" id="btnradio8_1" value="8" autocomplete="off" >
    <label class="btn btn-outline-primary" for="btnradio8_1">Creative work in science and technology</label>
  </div>
</div>

<div class="d-flex">
  <div class="btn-group" role="group" style="height: 30px; width: 1200px;" aria-label="Basic radio toggle button group">
    
    <input type="radio" class="btn-check" name="btnradio9" id="btnradio9_1" value="9" autocomplete="off" >
    <label class="btn btn-outline-primary" for="btnradio9_1">Software</label>
    
    <input type="radio" class="btn-check" name="btnradio10" id="btnradio10_1" value="10" autocomplete="off" >
    <label class="btn btn-outline-primary" for="btnradio10_1">Dictionary, encyclopedia, nomenclature dictionary, or similar academic work</label>
    
    <input type="radio" class="btn-check" name="btnradio15" id="btnradio15_1" value="15" autocomplete="off" >
    <label class="btn btn-outline-primary" for="btnradio15_1">Academic work of creativity in aesthetics or arts</label>
  </div>
</div> 
<br>
Type 3
<div class="d-flex">
  <div class="btn-group" role="group" style="height: 30px; width: 1200px;" aria-label="Basic radio toggle button group">
    <input type="radio" class="btn-check" name="btnradio14" id="btnradio14_1" value="1" autocomplete="off" >
    <label class="btn btn-outline-primary" for="btnradio14_1">Community-based academic work</label>
  </div>
</div><br>
Type 4 
<div class="d-flex">
  <div class="btn-group" role="group" style="height: 30px; width: 1200px;" aria-label="Basic radio toggle button group">
    <input type="radio" class="btn-check" name="btnradio13" id="btnradio13_1" value="1" autocomplete="off" >
    <label class="btn btn-outline-primary" for="btnradio13_1">Textbook</label>
    
    <input type="radio" class="btn-check" name="btnradio13" id="btnradio13_2" value="2" autocomplete="off" >
    <label class="btn btn-outline-primary" for="btnradio13_2">Book</label>
    
    <input type="radio" class="btn-check" name="btnradio13" id="btnradio13_3" value="3" autocomplete="off" >
    <label class="btn btn-outline-primary" for="btnradio13_3">Academic Article</label>
    
  </div>
</div><br>
Part 1 Details of Responsibility<br>
The applicant for the academic position must ensure all details on this form are completely filled. (As a consequence of unacknowledged contribution to academic work, the roles and responsibilities specified by the applicant will affect the consideration of academic accomplishments.) <br>

<div class="table2">
  <table style="width: 100%">
    <tr>
        <th style="width: 200px;" >Detail of Contribution</th>
    <td  style="width: 400px;">Role and Responsibility</td> 
    </tr>
    <tr>
        <td>A. Initiation of ideas and Hypothesis. </td>
        <td  ><input type="text" name="A1" placeholder="" ></td> 
    </tr>
    <tr>
        <td>B. Research practice, Participation in designing, Experiment, Testing, Measuring instruments, Data collection, Methods, and Criteria.</td>
        <td  ><input type="text" name="A2" placeholder="" ></td> 
    </tr>
    <tr>
        <td>C. Data collection, Data analysis, and Data interpretation.</td>
        <td  ><input type="text" name="A3" placeholder="" ></td> 
    </tr>
    <tr>
        <td>D. Criticism of results and discussion, 
Evaluation of the original theories, body of knowledge, or conclusions.
</td>
        <td  ><input type="text" name="A4" placeholder="" ></td> 
    </tr>
    <tr>
        <td>E. Participation in Manuscript writing of
creative works, Innovations, Inventions, or related academic work.
</td>
        <td  ><input type="text" name="A5" placeholder="" ></td> 
    </tr>
    <tr>
        <td>F. Stimulation of specimens, Study cohort, Logistics, Research grants (please specify source, funding and year received) Tools, Laboratories, or equipment.</td>
        <td  ><input type="text" name="A6" placeholder="" ></td> 
    </tr>
    <tr>
        <td>G. Other </td>
        <td  ><input type="text" name="A7" placeholder="" ></td> 
    </tr>
</table>
</div> <br>
Part 2 Presentation details of the academic work, technology transfer, or knowledge transfer. The evidence must be attached for consideration.
<br>
<div class="row">
      <div class="col-md-12">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">A. Journal publication, please specify journal impact factor, number of citations 
and database. 
</span>
          <input type="text" class="form-control" name="journal" placeholder="" required>
        </div>						  
      </div>
    </div>
<div class="row">
      <div class="col-md-12">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">B. Patent, please specify type, registered year, and covering the country.</span>
          <input type="text" class="form-control" name="patent" placeholder="" required>
        </div>						  
      </div>
    </div>
<div class="row">
      <div class="col-md-12">
        <div class="input-group input-group-sm mb-3">
          <span class="input-group-text">C. Technical report or research report, please specify who utilizes the report.</span>
          <input type="text" class="form-control" name="technical" placeholder="" required>
        </div>						  
      </div>
    </div>
    Research publications that have been presented in a media form such as 
    <div class="row">
          <div class="col-md-12">
            <div class="input-group input-group-sm mb-3">
              <span class="input-group-text">posters or oral presentations  </span>
              <input type="text" class="form-control" name="Oral" placeholder="please specify sessions such as plenary, symposium, or oral sessions" required>
            </div>						  
          </div>
        </div>
    <div class="row">
          <div class="col-md-12">
            <div class="input-group input-group-sm mb-3">
              <span class="input-group-text">certificates of meetings, displays, or exhibitions </span>
              <input type="text" class="form-control" name="program" placeholder="name, venue of meeting, exhibition, and country" required>
            </div>						  
          </div>
        </div>
    <div class="row">
          <div class="col-md-12">
            <div class="input-group input-group-sm mb-3">
              <span class="input-group-text">in the case of a book </span>
              <input type="text" class="form-control" name="book" placeholder="please specify publisher name and year of publication" required>
            </div>						  
          </div>
        </div>
    <div class="row">
          <div class="col-md-12">
            <div class="input-group input-group-sm mb-3">
              <span class="input-group-text">E. A record of funded research projects related to this work.  </span>
              <input type="text" class="form-control" name="history" placeholder="" required>
            </div>						  
          </div>
        </div>
    <div class="row">
          <div class="col-md-12">
            <div class="input-group input-group-sm mb-3">
              <span class="input-group-text">F. If the research has been transferred technology, please specify the amount of the remuneration </span>
              <input type="text" class="form-control" name="Licesing" placeholder="Evidence of contract should accompany this document" required>
            </div>						  
          </div>
        </div>
    <div class="row">
          <div class="col-md-12">
            <div class="input-group input-group-sm mb-3">
              <span class="input-group-text">Signature Applicant</span>
              <input type="text" class="form-control" name="name" placeholder="" required>
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
