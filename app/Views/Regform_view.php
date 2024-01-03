
<?php
// include("student_view.php");

include("cdn.php");
?> 

<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="/css/bootstrap.css">
  <link rel="stylesheet" href="regfrom1.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  
  <style>

    
    .hidden {
      display: none;
    }

    #inputBoxesContainer .col-md-3 {
      margin-bottom: 10px;
    }



    body {
     
      /* Remove default margin */
    }

    html,
    body {
      display: grid;
    
     
      height: 100%;
      margin: 0;
      /* Remove default margin */
      padding: 0;
      /* Remove default padding */
    }

    .container {
      height: 100vh;
      margin-top: 3%; 
      /* margin-left: 9%; */
      padding-top: 20px; 
      border: 1px solid rgb(230, 229, 229);
      box-shadow: 1px 1px 5px rgb(230, 229, 229);
      position: relative;
      /* Add this line to make it relative */
    }


    .head {
      margin-left: 9%;
      width: 88%;
      height: 40px;

      margin-top: 2%;
      display: flex;

      align-items: center;
    }


    /* Page Indicator Styles */
    .page-indicator {
      display: flex;
      justify-content: center;
      /* margin-top: -30px; */
      width: 36vw;


    }

    .ste-col small{

      font-size: .8rem;
    }

    .step-row {
      width: 30vw;
      height: 40px;
      margin: 0 auto;
      display: flex;
      align-items: center;
      box-shadow: 0 -1px 5px -1px #000;
      position: relative;


    }

    .ste-col {
      width: 170px;
      text-align: center;
      font-weight: bold;
      color: #233142;
      position: relative;

    }

    #progress {
      position: absolute;
      height: 100%;
      width: 170px;

      background: linear-gradient(90deg, rgba(2, 0, 36, 1) 0%, rgba(9, 40, 121, 1) 0%, rgba(0, 212, 255, 1) 100%);
      transition: 1s;
    }

    #progress::after {
      content: '';
      height: 0;
      width: 0;
      border-top: 20px solid transparent;
      border-bottom: 20px solid transparent;
      position: absolute;
      right: -20px;
      top: 0;
      border-left: 20px solid rgba(0, 212, 255, 1);
    }



    #form2 {
      display: none;
    }

    #form3 {
      display: none;
    }





    .container .form {
      position: absolute;
      transition: 0.5s;
      width: 100%;
    }

    .validation-message {
      color: red;
      font-size: 12px;
      margin-top: 5px;
    }
  </style>
</head>

<body>
  <div class="head row">
    <div class="col-4">
      <h2 id="heading" class="">Student Registration</h2>
    </div>
    <div class="col-3">.</div>
    <div class="col-4">
      <!-- Page Indicator -->
      <div class="page-indicator col-3">

        <div class="step-row">
          <div id="progress"></div>
          <div class="ste-col"><small>Personal Info</small></div>
          <div class="ste-col"><small>Famly & Previous School </small></div>
          <div class="ste-col"><small>Documents</small></div>
        </div>
      </div>
    </div>
  </div>


  <div class="container">

    <form action="#" method="post">

      <!-- first input -->


      <div class="form first row g-3" id="form1">
        <div class="col-md-4">
          <label for="inputname" class="form-label">Student Name</label>
          <input type="text" class="form-control" id="inputname" name="sname" required>
          <div class="validation-message"></div>
        </div>
        <div class="col-md-4">
          <label for="inputadno" class="form-label">Admission Number</label>
          <input type="number" class="form-control" id="inputadno" name="adno">
          <!-- <?php if (isset($validation)): ?>
          <?php if ($validation->hasError('adno')): ?>
            <?= $validation->getError('adno'); ?>
          <?php endif; ?>
          <?php endif; ?> -->
        </div>
        <div class="col-md-4">
          <label for="inputreg" class="form-label">Register Number</label>
          <input type="number" class="form-control" id="inputreg" name="regno">
        </div>




        <div class="col-md-4 mt-5 pt-1 ps-5 ">
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="male">
            <label class="form-check-label" for="inlineRadio1">Male</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="female">
            <label class="form-check-label" for="inlineRadio2">Female</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="others">
            <label class="form-check-label" for="inlineRadio2">others</label>
          </div>

        </div>

        <div class="col-md-4">
          <label for="inputdate" class="form-label">Date of Birth</label>
          <input type="date" class="form-control" id="inputdate" name="dob" required>
          <div class="validation-message"></div>
        </div>

        <div class="col-md-4">
          <label for="inputreg" class="form-label">Year of Admission</label>
          <input type="number" class="form-control" id="inputreg" name="yearofad" required>
          <div class="validation-message"></div>
        </div>

        <div class="col-md-4">
          <label for="inputcourse" class="form-label">Program</label>
          <select id="inputcourse" class="form-select" name="program">
            <option selected>Choose..</option>
            <option value="BCA">BCA</option>
            <option value="BBA">BBA</option>
            <option value="BCOM 1">B.COM 1</option>
            <option value="BCOM 2">B.COM 2</option>
            <option value="BSC">BSC</option>
            <option value="MSC">MSC</option>

          </select>
        </div>

        <div class="col-8">
          <label for="inputAddress" class="form-label">Address</label>
          <input type="text" class="form-control" id="inputAddress" placeholder="House,PO" name="adress">
        </div>



        <div class="col-md-3">
          <label for="inputCity" class="form-label">Nationality</label>
          <input type="text" class="form-control" id="inputCity" name="nation">
        </div>
        <div class="col-md-3">
          <label for="inputCity" class="form-label">State</label>
          <input type="text" class="form-control" id="inputCity" name="state">
        </div>

        <div class="col-md-3">
          <label for="inputZip" class="form-label">District</label>
          <input type="text" class="form-control" id="inputZip" name="district">
        </div>
        <div class="col-md-3">
          <label for="inputCity" class="form-label">Pincode</label>
          <input type="number" class="form-control" id="inputCity" name="pincode">
        </div>

        <div class="col-md-4">
          <label for="inputCity" class="form-label">Aadhaar</label>
          <input type="number" class="form-control" id="inputCity" name="adhar">
        </div>

        <div class="col-md-3">
          <label for="inputZip" class="form-label">Cast</label>
          <input type="text" class="form-control" id="inputZip" name="cast">
        </div>
        <div class="col-md-3">
          <label for="inputCity" class="form-label">Religion</label>
          <input type="text" class="form-control" id="inputCity" name="reli">
        </div>
        <div class="col-md-2">
          <label for="inputCity" class="form-label">Anual Income</label>
          <input type="number" class="form-control" id="inputCity" name="anincome">
        </div>


        <div class="col-md-4">
          <label for="inputCity" class="form-label">Guardian</label>
          <input type="text" class="form-control" id="inputCity" name="guard">
        </div>

        <div class="col-md-4">
          <label for="inputZip" class="form-label">Guardian Relation</label>
          <input type="text" class="form-control" id="inputZip" name="guardrel">
        </div>
        <div class="col-md-4">
          <label for="inputCity" class="form-label">Guardian Contact</label>
          <input type="text" class="form-control" id="inputCity" name="guardcon" placeholder="phone number">
        </div>

        <div class="col-md-4">
          <label for="inputCity" class="form-label">Email</label>
          <input type="email" class="form-control" id="inputCity" name="email" required>
          <div class="validation-message"></div>

        </div>

        <div class="col-md-4">
          <label for="inputZip" class="form-label">Phone Number</label>
          <input type="number" class="form-control" id="inputZip" name="phone" required>
          <div class="validation-message"></div>
        </div>
        <div class="col-md-2">
          <label for="inputcourse" class="form-label">Blood Group</label>
          <select id="inputcourse" class="form-select" name="blood">
            <option selected valu="">Choose..</option>
            <option value="A+">A+</option>
            <option value="B+">B+</option>
            <option value="AB+">AB+</option>
            <option value="AB-">AB-</option>
            <option value="o+">o+</option>


          </select>
        </div>


        <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-4">

          <button class="nextbtn btn btn-primary me-md-2 pb-6" type="button" id="next1">NEXT</button>

        </div>

        <div class="col-12"></div>

      </div>

      <!-- second form -->





      <div class="form second row g-3 " id="form2">
        <div class="col-md-12">
          <label for="myCheckbox"> Have already parent data exists ?</label>
          <input type="checkbox" id="myCheckbox" onchange="toggleInput()">
        </div>

        <script>
          function toggleInput() {
            var input = document.getElementById("myInput");
            var input2 = document.getElementById("myInput2");
            var input3 = document.getElementById("myInput3");
            var input4 = document.getElementById("myInput4");
            var input5 = document.getElementById("myInput5");

            var label = document.getElementById("myLabel");
            var label2 = document.getElementById("myLabel2");
            var label3 = document.getElementById("myLabel3");
            var label4 = document.getElementById("myLabel4");
            var label5 = document.getElementById("myLabel5");

            var checkbox = document.getElementById("myCheckbox");

            input.required = !checkbox.checked;
            input2.required = !checkbox.checked;
            input3.required = !checkbox.checked;


            if (checkbox.checked) {
              input.style.display = "none";
              label.style.display = "none";

              input2.style.display = "none";
              label2.style.display = "none";

              input3.style.display = "none";
              label3.style.display = "none";

              input4.style.display = "none";
              label4.style.display = "none";

              input5.style.display = "none";
              label5.style.display = "none";

            } else {
              input.style.display = "block";
              label.style.display = "block";

              input2.style.display = "block";
              label2.style.display = "block";

              input3.style.display = "block";
              label3.style.display = "block";

              input4.style.display = "block";
              label4.style.display = "block";

              input5.style.display = "block";
              label5.style.display = "block";
            }
          }
        </script>

        <div class="col-md-4">
          <label for="inputname" class="form-label" id="myLabel">Student Father</label>
          <input type="text" class="form-control" id="myInput" name="sfather" required>
          <div class="validation-message"></div>
        </div>
        <div class="col-md-4">
          <label for="inputadno" class="form-label" id="myLabel2">Student Mother</label>
          <input type="text" class="form-control" id="myInput2" name="smother" required>
          <div class="validation-message"></div>
        </div>
        <div class="col-md-4">
          <label for="inputreg" class="form-label" id="myLabel3">Parent Adress</label>
          <input type="text" class="form-control" id="myInput3" name="padres" required>
          <div class="validation-message"></div>
        </div>
        <div class="col-md-3">
          <label for="inputadno" class="form-label" id="myLabel4">Father State</label>
          <input type="text" class="form-control" id="myInput4" name="fstate">
        </div>
        <div class="col-md-3">
          <label for="inputadno" class="form-label" id="myLabel5">Mother State</label>
          <input type="text" class="form-control" id="myInput5" name="mstate">
        </div>
        <div class="col-md-3">
          <label for="inputadno" class="form-label">Parent Contact</label>
          <input type="number" class="form-control" id="inputadno" name="pcontact">
        </div>
        <div class="col-md-3">
          <label for="inputadno" class="form-label">Distance From Residence to college</label>
          <input type="number" class="form-control" id="inputadno" name="clgtoresdis">
        </div>

        <div class="col-md-12 mt-4 pt-1 ">
          <h4>Acadamic Record</h4>
        </div>

        <div class="col-md-3">
          <label for="inputadno" class="form-label">HS Name</label>
          <input type="text" class="form-control" id="inputadno" name="hsnm">
        </div>

        <div class="col-md-3">
          <label for="inputadno" class="form-label">HS Exam</label>
          <input type="text" class="form-control" id="inputadno" name="hssyl" placeholder="sslc/other">
        </div>

        <div class="col-md-2">
          <label for="inputadno" class="form-label">HS Pass Out Year</label>
          <input type="number" class="form-control" id="inputadno" name="hsyr" required>
          <div class="validation-message"></div>
        </div>

        <div class="col-md-2">
          <label for="inputadno" class="form-label">HS Marks</label>
          <input type="number" class="form-control" id="inputadno" name="hsmrk">
        </div>

        <div class="col-md-2">
          <label for="inputadno" class="form-label">HS Percentage</label>
          <input type="text" class="form-control" id="inputadno" name="hsperce">
        </div>


        <div class="col-md-3">
          <label for="inputadno" class="form-label">HSS Name</label>
          <input type="text" class="form-control" id="inputadno" name="hssnm">
        </div>

        <div class="col-md-3">
          <label for="inputadno" class="form-label">HSS Exam</label>
          <input type="text" class="form-control" id="inputadno" name="hsssyl" placeholder="+2/VHSC">
        </div>

        <div class="col-md-2">
          <label for="inputadno" class="form-label">HSS Pass Out Year</label>
          <input type="number" class="form-control" id="inputadno" name="hssyr" required>
          <div class="validation-message"></div>
        </div>

        <div class="col-md-2">
          <label for="inputadno" class="form-label">HSS Marks</label>
          <input type="number" class="form-control" id="inputadno" name="hssmrk">
        </div>

        <div class="col-md-2">
          <label for="inputadno" class="form-label">HSS Percentage</label>
          <input type="text" class="form-control" id="inputadno" name="hssperce">
        </div>


        <div class="col-12">

          <h5>Co-caricular</h5>
        </div>


        <div class="col-md-3" id="input1">
          <label for="inputadno" class="form-label">Activity-1</label>
          <input type="text" class="form-control" id="inputadno" name="act1">
        </div>

        <div class="col-md-3" id="input2">
          <label for="inputadno" class="form-label">Activity-2</label>
          <input type="text" class="form-control" id="inputadno" name="act2">
        </div>

        <div class="col-md-3" id="input3">
          <label for="inputadno" class="form-label">Activity-3</label>
          <input type="text" class="form-control" id="inputadno" name="act3">
        </div>

        <div class="col-md-3" id="input4">
          <label for="inputadno" class="form-label">Activity-4</label>
          <input type="text" class="form-control" id="inputadno" name="act4">
        </div>


        <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-4">
          <button class="backbtn btn btn-primary me-md-2 pb-6" type="button" id="back1">preview</button>
          <button class="backbtn btn btn-primary me-md-2 pb-6" type="button" id="next2">next</button>

        </div>


        <div class="col-12"></div>



      </div>

      <!-- third form -->

      <div class="form third row g-3" id="form3">

        <div class="col-md-4">
          <label for="inputname" class="form-label">sslc</label>
          <input type="file" class="form-control" id="inputsslc" name="sslc">
        </div>
        <div class="col-md-4">
          <label for="inputadno" class="form-label">plus two</label>
          <input type="file" class="form-control" id="inputplustwo" name="plutwo">
        </div>
        <div class="col-md-4">
          <label for="inputreg" class="form-label">nss</label>
          <input type="file" class="form-control" id="inputnss" name="nss">
        </div>

        <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-4">
          <button class="backbtn btn btn-primary me-md-2 pb-6" type="button" id="back2">preview</button>
          <button class="backbtn btn btn-primary me-md-2 pb-6" type="submit">submit</button>

        </div>

      </div>

    </form>



  </div>





  <script>
    var form1 = document.getElementById("form1");
    var form2 = document.getElementById("form2");
    var form3 = document.getElementById("form3");

    var next1 = document.getElementById("next1");
    var next2 = document.getElementById("next2");
    var back1 = document.getElementById("back1");
    var back2 = document.getElementById("back2");

    var progress = document.getElementById("progress");


var adyear = null;
var hssyear = null;

    function validateForm(form) {
      var inputs = form.querySelectorAll("input[required]");
      var isValid = true;

      inputs.forEach(function (input) {
        var messageDiv = input.nextElementSibling; // Select the corresponding message div

        if (input.value.trim() === "") {
          isValid = false;
          messageDiv.textContent = "Please fill in this field.";

          setTimeout(function () {
            // Clear the message div after 4 seconds
            messageDiv.textContent = "";
          }, 4000);
        } else {

          if (input.name == "dob") {



            var dob = new Date(document.getElementById("inputdate").value); // Convert input value to Date object
            var today = new Date();
            var valmindate = new Date(
              today.getFullYear() - 18,
              today.getMonth(),
              today.getDate(),
              today.getHours(),
              today.getMinutes());
            if (dob > valmindate) {
              messageDiv.textContent = "Age must be 18 or older.";
              isValid = false;

              setTimeout(function () {
                // Clear the message div after 4 seconds
                messageDiv.textContent = "";
              }, 4000);
            } else {
              messageDiv.textContent = ""; // Clear the validation message if the condition is met
           
            }


            // messageDiv.textContent = "Please fill this dob";
          } else if (input.name == "phone") {

            var phoneNumber = input.value.trim();
            if (phoneNumber.length == 10) {
              
            } else {
              messageDiv.textContent = "phone number should be 10 digit";
              isValid = false;
              setTimeout(function () {
                // Clear the message div after 4 seconds
                messageDiv.textContent = "";
              }, 4000);
            }
          }else if (input.name == "yearofad"){
            var year = input.value.trim();
            adyear = year;
            var currentYear = new Date().getFullYear();
            var enteredYear = parseInt(year, 10);
            if (enteredYear > currentYear || year.length !== 4) {
              messageDiv.textContent = "invalied year";
              isValid = false;
              setTimeout(function () {
                // Clear the message div after 4 seconds
                messageDiv.textContent = "";
              }, 4000);
            }
          }
           else if (input.name == "email") {

            var email = input.value.trim();
            if (email.match(/^[A-Za-z\._\-0-9]*[@][A-Za-z]*[\.][a-z]{2,4}$/)) {
              
            } else {
              messageDiv.textContent = "invalied email";
              isValid = false;
              setTimeout(function () {
                // Clear the message div after 4 seconds
                messageDiv.textContent = "";
              }, 4000);
            }
          }else if (input.name == "hssyr"){
            hssyear = input.value.trim();
           if(hssyear > adyear){
            messageDiv.textContent = "invalied year";
              isValid = false;
              setTimeout(function () {
                // Clear the message div after 4 seconds
                messageDiv.textContent = "";
              }, 4000);
           }

          }else if (input.name == "hsyr"){
            hsyear = input.value.trim();
            hsyear++;
           if(hsyear >= hssyear){
            messageDiv.textContent = "invalied year";
              isValid = false;
              setTimeout(function () {
                // Clear the message div after 4 seconds
                messageDiv.textContent = "";
              }, 4000);
           }

          }
          else {
            messageDiv.textContent = "";
          }


        }
      });

      return isValid;
    }




    function showForm(form) {
      form.style.display = "flex";
    }

    function hideForm(form) {
      form.style.display = "none";
    }

    next1.onclick = function () {
      if (validateForm(form1)) {
        hideForm(form1);
        showForm(form2);
        progress.style.width = "340px";
      }
    };

    back1.onclick = function () {
      showForm(form1);
      hideForm(form2);
      progress.style.width = "170px";
    };

    next2.onclick = function () {
      if (validateForm(form2)) {
        hideForm(form2);
        showForm(form3);
        progress.style.width = "510px";
      }
    };

    back2.onclick = function () {
      showForm(form2);
      hideForm(form3);
      progress.style.width = "340px";
    };


  </script>



  <!-- Bootstrap and Popper.js scripts -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous"></script>
  <script src="/js/bootstrap.js"></script>
</body>

</html>






<!--link bootstrap  -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
  integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

<script src="/js/bootstrap.js"></script>
</body>

</html>