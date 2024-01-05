<?php
include('cdn.php');
include('Navbar.php');
?>
<style>
           ul li a{
            display: block;
            padding: 17px 0px;
            text-decoration: none;
            color: #0e94d4;
            margin-left: -33px;
            transition: .3s;
           }
           ul{
            margin-top: 30px;
           }
           
           ul li a .icon{
            font-size: 15px;
            color: rgb(50, 48, 48);
            vertical-align: middle;
        
           }
           
           ul li a .text{
            margin-left: 19px;
            color:  rgb(50, 48, 48);
            font-family: sans-serif;
            font-size: 15px;
            letter-spacing: 2px;
            
           
           }
           
          ul li a:hover{
            background: #a7abaf;
            color: #fff;
            text-decoration: none;
           }
</style>
<section class="vh-100" style="background-color: #eee;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-12 col-xl-4">

        <div class="card" style="border-radius: 15px;">
          <div class="card-body text-center">
            <div class="mt-3 mb-4">
              <img src="https://in.images.search.yahoo.com/images/view;_ylt=AwrKA4dU1ZdldZweBIy9HAx.;_ylu=c2VjA3NyBHNsawNpbWcEb2lkAzA5NzVkZmM3YjM2ZGU0M2MzMjcwZDY1Y2E2MTI4Y2VlBGdwb3MDNDIEaXQDYmluZw--?back=https%3A%2F%2Fin.images.search.yahoo.com%2Fsearch%2Fimages%3Fp%3Dprifile%2Bpic%26type%3DE210IN885G0%26fr%3Dmcafee%26fr2%3Dpiv-web%26tab%3Dorganic%26ri%3D42&w=1655&h=1655&imgurl=www.clker.com%2Fcliparts%2Ff%2Fa%2F0%2Fc%2F1434020125875430376profile.png&rurl=http%3A%2F%2Fwww.clker.com%2Fclipart-389517.html&size=89.0KB&p=prifile+pic&oid=0975dfc7b36de43c3270d65ca6128cee&fr2=piv-web&fr=mcafee&tt=Profile+%7C+Free+Images+at+Clker.com+-+vector+clip+art+online%2C+royalty+...&b=0&ni=21&no=42&ts=&tab=organic&sigr=VsUr_XDDU.7B&sigb=HBw0dWFLokZi&sigi=NrMUktb9quDH&sigt=4SrUYGmajMGB&.crumb=8n6Xdj.de7r&fr=mcafee&fr2=piv-web&type=E210IN885G0"
                class="rounded-circle img-fluid" style="width: 100px;" />
            </div>
            <h4 class="mb-2"><?= $userdata->username; ?></h4>
            <p class="text-muted mb-4"><?= $userdata->designation; ?></p>
         
           
            <ul>
            <li>
                <a href="<?= base_url()?>ostaff/staffeditprof">
              <span class="icon">   <i class="fas fa-pen"></i></span>
              <span class="text">edit profile</span>
                </a>
                </li>
          
            <li>
                <a href="<?= base_url()?>ostaff/meassages">
              <span class="icon">  <i class="fas fa-envelope"></i></span>
              <span class="text">messages</span>
                </a>
                </li>
                <li>
                <a href="<?= base_url()?>ostaff/notifications">
              <span class="icon"> <i class="fas fa-bell"></i></span>
              <span class="text">notifications</span>
                </a>
                </li>
                </ul>
            <div class="d-flex justify-content-between text-center mt-5 mb-2">
         
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>