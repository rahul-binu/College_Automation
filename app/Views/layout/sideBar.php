<style>
  .sidenav {
    height: 100%;
    width: 60px;
    position: fixed;
    z-index: 1;
    top: 40px;
    left: 0;
    background-color: white;
    box-shadow: #243784 0px 2px 8px 0px;
    overflow-x: hidden;
    transition: 0s ease-in-out;
    padding-top: 15px;
    padding-left: 5px;
  }

  .sidenav a {
    padding: 8px 8px 8px 10px;
    text-decoration: none;
    font-size: 18px;
    display: block;
    transition: 0.3s;
    cursor: pointer;
    transition: 0.5s;
    color: white;
  }

  .sidenav a i {
    display: inline-block;
    margin-top: 10px;
    color: black;
  }

  .sidenav a span {
    display: none;
    margin-left: 10px;
    color: black;
  }

  .sidenav a.active span {
    display: inline-block;
  }
</style>

<div class="sidenav" id="mySidenav">
  <a href="<?= base_url() ?>oStaff" class="nav px-2 align-middle ">
    <i class="fs-4 bi-house"></i> <span>Home</span>
  </a>

  <a href="<?= base_url() ?>FeeManController/index" class="nav align-middle px-2">
  <i class="fs-4 bi-speedometer2 mx-1 py-2"></i> <span> Fee Dashbord
    </span></a>

  <a href="<?= base_url() ?>oStaff" class="nav px-2 align-middle ">
    <i class="fs-4 bi bi-search"></i> <span> View
      student</span></a>

  <a href="<?= base_url() ?>/oStaff/Stview" class="nav  align-middle px-2">
    <i class="fs-4 bi-person-plus "></i> <span>Create Account</span>
  </a>
  <a href="<?= base_url() ?>FeeManController/feeDetailsView" class="nav px-2 align-middle ">
    <i class="bi bi-cash-stack"></i> <span>View
      Fee</span></a>

  <a href="<?= base_url() ?>FeeManController/feeDetailsView" class="nav px-2 align-middle ">
    <i class="bi bi-bank"></i> <span>Student Fee Data
    </span></a>


  <a href="<?= base_url() ?>ostudent/tc" class="nav  align-middle px-2">
    <i class="bi bi-file-break"></i> <span>Certificates</span>
  </a>

  <a href="<?= base_url() ?>reports" class="nav  align-middle px-2">
    <i class="bi bi-card-text"></i><span>Reports</span>
  </a>

  <a href="<?= base_url() ?>usersController/login" class="nav  align-middle px-2">
    <i class="bi bi-person-check"></i> <span>Profile</span>
  </a>

  <a class="dropdown-item" href="<?= base_url()."login/logout"?>" onclick="return confirm('Are you sure you want to logout?')">

    <i class="fs-4 bi-box-arrow-left "></i> <span>Logout</span>
  </a>

</div>