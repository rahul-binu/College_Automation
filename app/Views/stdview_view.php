

<?php


include('Navbar.php');


$students_json = json_encode($std);
?>
 <script src="https://kit.fontawesome.com/828b754f04.js" crossorigin="anonymous"></script>
<style>


   
   button {
  background: none;
  border: none;
  padding: 0px 15px;
  border-radius: 10px;
}

button:hover {
  background: rgba(170, 170, 170, 0.062);
  transition: 0.5s;
}




table{
    border: 1px solid rgb(238, 235, 235);
    
     border-collapse: separate;
     border-spacing: 0px;
     min-width: max-content;
     border-radius: 10px;
     background: #fafafa;
   
}
th{
    position: sticky;
    top: 0px;
   
    background-color: #e6e8ea;
    color: rgb(33, 33, 35);
}
.table-wrapper{
    max-height: 540px;
    overflow-y: scroll;
    margin-top: 6px;
    border-radius: 10px;
   
}
td{
    font-family: 'open Sans' ,sans-serif;
    color: rgb(113, 111, 111);
}
th,td{
    border: thin solid rgb(246, 243, 243);
   padding: 10px;
}
tr:nth-child(odd){
    background-color: #eeeeee;
}
tr:hover td{
    color: rgb(81, 75, 75);
    background-color: #eeeeee;
}
.outer-wrapper{
    border: thin solid rgb(246, 243, 243);
    /* box-shadow: 1px 1px 5px rgb(105, 96, 96); */


   
    border-radius: 5px;
    max-width: fit-content;
     width: 99%;
     
}
#rows{
    padding:2em;
    padding-top:3em;
    align-items: center;
}




.sel{
    min-width: 40px;
   
    font-size: .9rem;
    background: transparent;
    border: none;
   
    }
    .sel2{
        min-width: 40px;
  
    font-size: .9rem;
    background: transparent;
    border: none;
  
    }
    .btn1{
         
          background-color: #FFFFFF;
          border: 0;
          border-radius: .5rem;
          box-sizing: border-box;
          color: #111827;
          font-family: "Inter var",ui-sans-serif,system-ui,-apple-system,system-ui,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";
          font-size: .875rem;
          font-weight: 500;
          height: 25px;
          text-align: center;
      
          box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06);
         
        }
        .btn1:hover{
            background-color:#385170;
            color: #FFFFFF;
        }
  
.row{
    overflow: hidden;
    margin-left: -4%;
}
#sort{
    display: flex;
     place-content: center;
}


#display{
   display: flex; 
   justify-content: space-around;
}

 
.sel3{
   
     
    width: 90px;
    font-size: .9rem;
    background: transparent;
    border: none;
    border-bottom: 1px solid #b0adad;

}


   #a{
     text-decoration: none;
   
   }
   #icon{
    color: #385170;
   }
   /* .col-1{
    width: 100px;
   }
   */
   .fas{
    color: rgb(81, 75, 75);
   }
   .fas:hover{
    color: rgb(81, 75, 75);
   text-shadow: 2px 2px 10px rgb(69, 75, 128);
   }
   .inputbox{
    height: 25px;
    width: 5vw;
    text-align: center;
   /* box-sizing: border-box;
   color: #385170;
    border: 1px solid rgb(138, 136, 136); */
    outline: none;
   }
   select{
    height: 23px;
    width: 4.5vw;
    margin-top: 9px;
   }
</style>

<!-- <link rel="stylesheet" href="std_view1.css"> -->

<div class="row " id="rows">
<div class="col-12">.</div>
<div class="col-1"></div>


<div class="col-11">
<div id="display" class="container-fluid ">
             <h3 id="heading" class="">Student Details</h3>
             <!-- Search form -->
<form action="" class="form " method="post">
<div class="dataTables_filter d-flex" id="dataTable_filter">
                   
                    <input type="text" id="search" oninput="filterTable()" class="form-control form-control-sm" placeholder="Enter ID">
                       
                        
                </div>

   
</form>
<?php
 
?>
           
              <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
              <form id="sort" action="" class="form px-2 ms-3" method="post">
             
               <input type="number" placeholder="Year" class="inputbox mt-2 me-2"  id="yearSearch" oninput="filterTable()">
                     
                 <select name="selectLevel" id="filterColumn" class="sel2" onchange="filterTable()">
                      <option value="">option</option>
                      <option value="gender">gender</option>
                      <option value="program">course</option>
                      <option value="admission_year">year</option>
                      <option value="cast">cast</option>
                      <option value="cari">caricular</option>
                 </select>
                 
                 <select name="selectSubject" id="filterValue" class="sel" onchange="filterTable()">
        <!-- Options will be populated dynamically using JavaScript -->
    </select>
    <button onclick="resetFilters()"><i class="fas fa-arrows-rotate"></i></button>
                
               
                           </div>
                        
                            <!-- Content area... -->
                              
                                 <div class="outer-wrapper p-1 ms-3">
                    <div class="table-wrapper">
                        <table id="studentTable">
                            <thead>
                          <th >Sl:</th> 
                            <th >Operations</th> 
                          
                          
                                <th>Admission Number</th>
                                <th>Student Name</th>
                                <th>Register Number</th>
                                <th>year of Admission</th>
                                <th>Program</th>
                                <th>DOB</th>
                                <th>Gender</th>
                                 <th>Nation</th>
                                <th>State</th>
                                <th>District</th>
                                <th>Adress</th>
                                <th>Pincode</th>
                                <th>Aadhaar</th>
                                <th>Cast</th>
                                <th>Religion</th>
                                <th>Income</th>
                                <th>Guardian</th>
                                <th>Guardian Relation</th>
                                <th>Guardian Contact</th>
                                <th>Phone</th>
                                <th>email</th>
                                <th>Blood</th>
                                
                            </thead>
                            <tbody>
                            
                        

<?php    $i=1; ?> 
    <?php foreach ($std as $row) : ?>


       
      
            <tr>
           <td> <?= $i; ?> </td>
           
            <td > <a href="<?= 'ostaff/update/'.$row['admission_no']?>"><i class="fas fa-pen-to-square ps-3"></i> </a> <a href="#"><i class="fas fa-trash ps-3"></i></a></td>
            
           
            <td class="d-flex justify-content-center"> <?= $row['admission_no']; ?></td>
            <td > <?= $row['student_name']; ?></td>
                <td > <?=  $row['register_no'];?></td>
                <td > <?=  $row['yearOfAdmission'];?></td>
                <td > <?=  $row['program'];?></td>
                <td > <?=  $row['dob'];?></td>
                <td > <?= $row['gender'];?></td>
               
                <td > <?= $row['nation'];?></td>
                <td > <?=  $row['state1'];?></td>
                <td > <?=  $row['district'];?></td>
                <td > <?=  $row['adress'];?></td>
                <td > <?=  $row['pincode'];?></td>
                <td > <?=  $row['adhaar'];?></td>
                <td > <?= $row['cast'];?></td>
                 <td > <?=  $row['religion'];?></td>
                 <td > <?=  $row['income'];?></td>
                <td > <?= $row['guardian'];?></td>
                <td > <?= $row['guardian_rel'];?></td>
                <td > <?=  $row['guardian_con'];?></td>
                <td > <?=  $row['phno'];?></td>
                <td > <?= $row['email1'];?></td>
                <td > <?=  $row['blood'];?></td>
               

                
       
              
            </tr>

            <?php    $i++; ?>
            <?php endforeach;?>
            <tr><td colspan='13'>    <h2 id="noRecords" style="display: none;">No records found.</h2></td></tr>
                          </tbody>
                        </table>
                      
                       
                    </div>
                </div>        
           </div>
           </div>
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
   <!-- ... Your HTML and CSS code ... -->
<!-- JavaScript code -->
<script>
    // Fetch PHP data converted to JavaScript array
    var students = <?= json_encode($std) ?>;

    // Function to filter the table by ID and Year
    function filterTable() {
        var yearSearchInput = document.getElementById('yearSearch').value;
        var filterColumn = document.getElementById('filterColumn').value;
        var filterValue = document.getElementById('filterValue').value.toLowerCase();
        var adnoSearchInput = document.getElementById('search').value.toLowerCase();
        document.getElementById('filterColumn').onchange = onFilterColumnChange;
        var filteredStudents = students.filter(function (student) {
            return (
                (yearSearchInput === '' || student.admission_year.toString() === yearSearchInput) &&
                ((filterColumn === '' && adnoSearchInput === '') || 
                 (filterColumn !== '' && student[filterColumn].toString().toLowerCase().includes(filterValue)) ||
                 (adnoSearchInput !== '' && student['admission_no'].toString().toLowerCase().includes(adnoSearchInput)))
            );
        });

        // Update the table with filtered data
        updateTable(filteredStudents);

        // Show/hide the "No records found" message
        var noRecordsMessage = document.getElementById('noRecords');
        noRecordsMessage.style.display = filteredStudents.length === 0 ? 'block' : 'none';

        // Populate filterValue dropdown based on unique values in the selected column
        populateFilterValueDropdown(filterColumn);
    }

    // Function to update the table
    function updateTable(data) {
        var tbody = document.querySelector('#studentTable tbody');
        tbody.innerHTML = '';

        $i=1;
        (data || students).forEach(function (student) {
          
           
           
        
            var row =  '<tr><td>' + $i + '</td><td>' +  '<a href="<?= 'ostaff/update/' ?>' + student.admission_no + '"><i class="fas fa-pen-to-square ps-3"></i> </a> <a href="#"><i class="fas fa-trash ps-3"></i></a> '+ '</td><td class="d-flex justify-content-center">' + student.admission_no + '</td><td>' + student.student_name + '</td><td>' + student.register_no + '</td><td>' + student.admission_year + '</td><td>' + student.program + '</td><td>' + student.dob + '</td><td>' + student.gender + '</td><td>' + student.nation + '</td><td>' + student.state1 + '</td><td>' + student.district + '</td><td>' + student.adress + '</td><td>' + student.pincode + '</td><td>' + student.adhaar + '</td><td>' + student.cast + '</td><td>' + student.religion + '</td><td>' + student.income + '</td><td>' + student.guardian + '</td><td>' + student.guardian_rel + '</td><td>' + student.guardian_con + '</td><td>' + student.phno + '</td><td>' + student.email1 + '</td><td>' + student.blood + '</td></tr>';
            $i++;
            tbody.innerHTML += row;
        });
    }

    // Function to populate filterValue dropdown based on unique values in the selected column
    function populateFilterValueDropdown(column) {
    var uniqueValues = Array.from(new Set(students.map(student => student[column])));
    var filterValueDropdown = document.getElementById('filterValue');
    filterValueDropdown.innerHTML = '<option value="">Value</option>';
    uniqueValues.forEach(function (value) {
        // Check if the value is not undefined before appending
        if (value !== undefined) {
            filterValueDropdown.innerHTML += '<option value="' + value + '">' + value + '</option>';
        }
    });
}

    // Reset function 
    function resetFilters() {
        // Reset search input values
        document.getElementById('yearSearch').value = '';
        document.getElementById('search').value = '';

        // Reset dropdown selections
        document.getElementById('filterColumn').value = '';
        document.getElementById('filterValue').innerHTML = '<option value="">Select Value</option>';

        // Reset table to display original, unfiltered data
        updateTable(students);

        // Hide the "No records found" message
        var noRecordsMessage = document.getElementById('noRecords');
        noRecordsMessage.style.display = 'none';
    }

    function onFilterColumnChange() {
    var selectedColumn = document.getElementById('filterColumn').value;
    populateFilterValueDropdown(selectedColumn);
    filterTable(); // Call filterTable to update the table based on the new filters
}


document.getElementById('filterColumn').onchange = onFilterColumnChange;

    // Initial population of the filterValue dropdown
    populateFilterValueDropdown(''); // Pass an empty string to get all unique values
</script>




<!-- ... Rest of your HTML code ... -->



           <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
