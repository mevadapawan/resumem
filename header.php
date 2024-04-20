 <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
 <style>
@import url('https://fonts.googleapis.com/css2?family=Literata:ital,opsz,wght@0,7..72,200..900;1,7..72,200..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Sansita+Swashed:wght@300..900&family=Source+Serif+4:ital,opsz,wght@0,8..60,200..900;1,8..60,200..900&display=swap');
  .navbar{
    padding-left: 500px;
    background:#0f0f0f !important;
    color:white !important;
    position:fixed;
    width:100%;
    top:0;
    z-index:222 !important;
  }
  .navbar a{
    color:white;
    font-family: "Poppins", sans-serif;
    padding:20px 30px !important;
    font-size:1.2vw;
  }
  .navbar a:hover{
    color:blue !important;
  }
  .navbar-toggler{
    color:white !important;
  }
 
  @media (max-width:700px){
    .navbar{
      padding-left:0px;
    }
    .navbar a{
      font-size:1.3rem !important;
    }
  }
 </style>
  </head>
  <body>
      <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-center" aria-current="page" href="#home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-center" href="#about">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-center" href="#skills">Skills</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-center" href="#Projects">Projects</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-center" href="#contact">Contact</a>
        </li>
      </ul>
  </div>
  </div>
</nav>
  </body>
</html>
