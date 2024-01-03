<style>
  .topnav {
    overflow: hidden;
    background-color: #243784;
    margin-left: 0;
    z-index: 2;
    position: fixed;
    width: 100%;
    height: 3em;
    box-shadow: 0px 1px 6px 0px #242024;
  }

  #options a i {
    color: white;
    font-size: 20px;
    padding-left: 1em;
  }

  #systemName {
    color: white;
  }

  #toggleNavBtn {
    font-size: 30px;
    float: left;
    display: block;
    text-align: center;
    text-decoration: none;
    color: white;
    cursor: pointer;
  }

  #toggleNavBtn:hover {
    color: white;
    display: 'menu';
    /* remeber this */
  }
</style>

<nav>
  <div class="row topnav px-2">
    <div id="options" class="col-lg-8 col-md-6 col-sm-2 d-flex justify-content-start ">
      <p onclick="toggleNav()" class="py-2" id="toggleNavBtn"><i class="bi bi-list"></i></p>
      <a class="py-1" onclick="history.back()"><i class="bi bi-arrow-left"></i></a>
      <a class="py-1" onclick="history.forward()"><i class="bi bi-arrow-right"></i></a>
    </div>
    <div class="col-lg-4 col-md-6 col-sm-10 py-2 d-flex justify-content-end">
      <span id="systemName">NSS College Rajakumari Office automation system</span>
    </div>
  </div>
</nav>

<script>
  function toggleNav() {
    var sidenav = document.getElementById("mySidenav");
    var main = document.getElementsByClassName("main")[0];

    if (sidenav.style.width === "250px") {
      sidenav.style.width = "60px";
      dashBordContainer.style.opacity = "1";
      hideIconNames();
    } else {
      sidenav.style.width = "250px";
      dashBordContainer.style.opacity = "0.5";
      showIconNames();
    }
  }

  function hideIconNames() {
    var iconNames = document.querySelectorAll(".sidenav a span");
    iconNames.forEach(function (name) {
      name.style.display = "none";
    });
  }

  function showIconNames() {
    var iconNames = document.querySelectorAll(".sidenav a span");
    iconNames.forEach(function (name) {
      name.style.display = "inline-block";
    });
  }



</script>