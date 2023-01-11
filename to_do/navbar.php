<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="#">Navbar</a>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Connect</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled">Disabled</a>
      </li>
    </ul>
    <!-- <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form> -->
    <?php
         if(isset($_SESSION['login_user'])){
                             ?>    
    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
        <li class="nav-item">
        <a class="nav-link btn btn-outline-  text-capitalize" href="logout.php">logout</a>
      </li></ul>
      <?php
            }else{   ?>
            <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
        <li class="nav-item">
        <a class="nav-link btn btn-outline-  text-capitalize" href="login.php">login</a>
      </li>
      <li class="nav-item text-dark">or</li>
      <li class="nav-item">
        <a class="nav-link" href="registration.php">register</a>
      </li></ul>
      <?php
            }
            ?>
  </div>
</nav>