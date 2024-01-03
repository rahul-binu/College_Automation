

<?php


include('Navbar.php');



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
  margin-left: 5%;
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
   .btn{
    /* position: fixed;
    margin-top: -18%;
    margin-left: 80%; */
   }
   .anchor{
    display: flex;
    justify-content: center;
   }



   
</style>

<!-- <link rel="stylesheet" href="std_view1.css"> -->
<form action="<?= base_url('ostaff/approve'); ?>" method="post">

<div class="row " id="rows">
<div class="col-12">.</div>
<div class="col-1"></div>



                <div class="col-11">

                     <div id="display" class="container-fluid ">
                        
                     <div class="col-9">  <h3 id="heading" class="">Users List</h3></div>
                                
                  



                               
                     </div>
                        
                            <!-- Content area... -->

                  <div class="outer-wrapper ms-3 ps-5 ms-5">
                    <div class="table-wrapper">
                        <table id="studentTable">
                            <thead>
                          <th >Sl:</th> 
                            <th >Operations</th> 
                            <th >change status</th>
                            <th >..</th>
                          
                                <th>User name</th>
                                <th>email</th>
                                <th>Designation</th>
                                <th>Status</th>
                                <th>Account Created</th>
                                <th>Account Activated</th>
                              
                                
                            </thead>
                            <tbody>
                            
                        

<?php    $i=1; ?> 
<?php if(!empty($user)){ ?>
    <?php foreach ($user as $row) : ?>


       
      
            <tr>
           <td> <?= $i; ?> </td>
           
            <td ><a href="<?= 'UpdateUser/'.$row['email']?>"><i class="fas fa-pen-to-square ps-3"></i></a> <a href="<?= 'delUser/'.$row['email']?>"><i class="fas fa-trash ps-3"></i></a></td>
            <td ><a href="<?= 'delUser/'.$row['email']?>" class="anchor"><i class="fas fa-cash-register"></i></a></td>
            <td>.. </td>
           
            <td class="d-flex justify-content-center"> <?= $row['username']; ?></td>
            <td > <?= $row['email']; ?></td>
                <td > <?=  $row['designation'];?></td>
                <td > <?=  $row['status'];?></td>
                <td > <?=  $row['created_at'];?></td>
                <td > <?=  $row['activation'];?></td>
            
            </tr>

            <?php    $i++; ?>
            <?php endforeach;?>
            <?php } else { ?>
            <tr><td colspan='15'>    <h2 id="noRecords" >No Requests were Found.</h2></td></tr>
            <?php } ?>
                          </tbody>
                        </table>
                    </div>
                </div>
               
</div>


</div>
</form>
   