<!DOCTYPE html>
<html lang="en">
<head>
  <title>Azure Web Apps Development</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <style>
  .fakeimg {
    height: 200px;
    background: #aaa;
  }
  .footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: #aaa;
   color: white;
   text-align: center;
}
  </style>
</head>
<body>

<div class="jumbotron text-center" style="margin-bottom:0">
  <h1>Hi. Welcome to my site</h1>
  <p>This page is being developed to testing the development of Web Application on Azure</p> 
</div>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
      <!-- <li class="nav-item">
        <a class="nav-link" href="#">Logout</a>
      </li>     -->
    </ul>
  </div>  
</nav>

<div class="container" style="margin-top:30px">
  <div class="row">
    <div class="col-sm-4">
      <h2>About Me</h2>
      <h5>Photo of me:</h5>
      <!-- <div img class="img-fluid" src="fathi.jpg" alt="fathi" width="460" height="345" ></div> -->
      <img class="rounded" src="fathi.jpg" alt="fathi" width="304" height="250"> 
      <p>Muhammad Fathi Ubaidi bin Jamaludin</p>
      <h3>Junior Technical Engineer</h3>
      <p>Enfrasys Consulting Sdn Bhd</p>
      <ul class="nav nav-pills flex-column">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Internship Task</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="ongoing.php">Ongoing Task</a>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#">Disabled</a>
        </li> -->
      </ul>
      <hr class="d-sm-none">
    </div>
    <div class="col-sm-8">
      <h2>Ongoing Task</h2>
      <h5>Azure Kubernates Services, Sep 26, 2019</h5>
      <img class="rounded" src="aks2.jpg" alt="aks2" width="680" height="345">
      <p>Azure Kubernetes Service</p>
      <p>Azure Kubernetes Service (AKS) is a managed container orchestration service, based on the open source Kubernetes system, which is available on the Microsoft Azure public cloud. An organization can use AKS to deploy, scale and manage Docker containers and container-based applications across a cluster of container hosts</p>
      <br>
      <!-- <h2>Getting Started with azure</h2>
      <h5>Title description, Sep 2, 2017</h5>
      <div class="fakeimg">Fake Image</div>
      <p>Some text..</p>
      <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p> -->
    </div>
  </div>
</div>

<div class="jumbotron text-center" style="margin-bottom:0">
  <h7>Enfrasys Consulting Sdn Bhd</h7>
  <br>
  <h8> DF2-15-03A (Unit 2), Level 15, Persoft Tower, 6B, Persiaran Tropicana, 47410 Petaling Jaya, Selangor</h8>
  <br>
  <h8> 03-8317 0109</h8>
  <br>
  <br>
  <small>&copy; Copyright 2019, Beast Inc</small>
</div>

<!-- <div class="jumbotron text" style="margin-bottom:0">
 -->
<!-- <div class="footer">
  <h7>Enfrasys Consulting Sdn Bhd</h7>
  <br>
  <h8> DF2-15-03A (Unit 2), Level 15, Persoft Tower, 6B, Persiaran Tropicana, 47410 Petaling Jaya, Selangor</h8>
  <br>
  <h8> 03-8317 0109</h8>
  <br>
  <br>
  <small>&copy; Copyright 2019, Beast Inc</small>
</div>

<footer id="sticky-footer" class="py-4 bg-dark text-white-50">
    <div class="container text-center">
      <small>Copyright &copy; Your Website</small>
    </div>
  </footer> -->

</body>
</html>
