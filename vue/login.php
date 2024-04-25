<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    <div class="row container-fluid g-0">   
            <div class="col-6">    
                <br><br><br><br>
                <div class="fs-5 fw-bold text-center">Hello,Friend</div>

                <form class="ms-4 ps-4" action="?action=login" method="post">
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Email address</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                      <div id="emailHelp" class="form-text">Votre email ne sera jamais divulguer.</div>
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Password</label>
                      <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                    </div>
                    <div class="mb-3 form-check">
                      <input type="checkbox" class="form-check-input" id="exampleCheck1">
                      <label class="form-check-label" for="exampleCheck1">Se souvenir</label>
                    </div>
                    <button type="submit" class="btn btn-success text-center">Se connecter</button>
                </form>
                <div class="fs-5  text-center">Pas encore de compte? <a href="./signup.html " class="text-center navbar-brand text-primary">Creez-en</a></div>
              <br><br><br>  
        </div>
       <div class="col-6 bg-success ">
        <p class="text-center fw-bold mt-5">Bienvenue chez Easy Wedding</p>
       </div>
    </div> 

    <footer>
     
      <div class="row bg-dark g-0 text-white">
         <br><br><br>
        <br><br><br>
        <div class="col-3 fs-5 fw-bold text-white text-center">
          Easy Wedding
        </div>
            <div class="col-5 ">
              <div class="fs-5 fw-bold">Contact</div>
              Numero:69439339393 <br> 
              Email: GermannPessidjo6@gmail.com

            </div>
          <div class="col-4">
            
            <div class="fs-5 fw-bold text-white">Follow us</div>
            <a href="https://github.com/Pessidjo-Germann" class="text-primary navbar-brand" target="_blank" rel="noopener noreferrer">Github</a><br>
            <a href="https:www.linkedin.com/in/germann-pessidjo" class="text-primary navbar-brand">Linkedin</a>
          </div>
        <br><br><br><br>
        <div class="col-xxl g-0 text-center text-white">
          Copyright by GroupXI@2024
        </div>
        <div class="col-xxl g-0 text-center text-white">
          Designed by ADS AGENCY@2024
        </div>
      </div>
  </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>