<style>
       body{
        margin:0;
      /*  overflow-x: hidden;*/
       }
       #dashBordContainer {
         /*  max-width: auto 1200px*/;
           padding-top: 5em;
          /* margin: 0 auto;*/
           background-color: #fff;
           box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
           margin-left:60px;
           left:0;
           overflow-x:hidden;
       }

       #mainDashBordContainer{
       
       }
   </style>
 
</head>

<body>
   <div class="container-fluid1">
      <?php
      include('cdns.php');
      include('appBar.php');
      ?>
       <div class="container-fluid">
           <div class="row">
                   <?php
                   include('sideBar.php');
                   ?>
               <div class="col"id="dashBordContainer">
                 <div class="container-fluid "id="mainDashBordContainer">


                 <script>
      //            document.addEventListener("DOMContentLoaded", function () {
      //     // Get the current path
      //     var currentPath = window.location.pathname;

      //     // Find the div with id "pagePath" and update its content
      //     var pagePathDiv = document.getElementById("pagePath");
      //     if (pagePathDiv) {
      //         pagePathDiv.textContent =  currentPath;
      //     }
      // });
                 </script>