<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="./style.css" rel="stylesheet"> 
    <title>Document</title>

  
  </head>
  <body>
  

    <!-- navbar -->
    <nav class="navbar bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <img src="./logo.png" alt="Logo" width="60" height="50" class="d-inline-block align-text-top">
          
        </a>
      </div>
    </nav>
    <!-- carousel -->
    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
              
              <div class="carousel-item active c-item" style="background-image:url(./vig.jpg);">
               
              </div>
              <div class="carousel-item c-item" style="background-image:url(./setosa.jpg);">
                
              </div>
              <div class="carousel-item c-item" style="background-image:url(./vers.jpg);">
               
              </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
    </div>

          <div class="container" >

                <div class="row justify-content-end">
                        <!-- iris paragraph -->
                        <div class="col mt-3" >
                          <div class="row justify-content-center">
                              <div class="col-4" >
                                <h2 class="h2">Iris Species</h2>
                              </div>

                              <p class="lead">Iris plants are truly fascinating for several reasons. Their striking, colorful flowers,<br>
                                which bloom in a variety of hues—from deep blues and purples to bright yellows and whites—add vibrant beauty to gardens and landscapes. <br>
                                Beyond their aesthetic appeal, irises are also known for their intricate structures, with unique petal formations and distinct markings that attract pollinators. <br>
                                 Additionally, they have a rich cultural significance, often symbolizing faith, hope, and wisdom in various traditions. Easy to grow and resilient, <br>
                                  iris plants thrive in diverse climates, making them a favorite among gardeners.
                                 Their ability to bloom in spring brings a much-anticipated splash of color after the winter months, embodying the beauty and renewal of nature.</p>

                          </div>
                          
                        </div>  
                        <!-- form -->
                        <div class="col-5 mt-4" >
                            <!-- form -->
                            <div class="container-fluid text-center mt-5" >
                                <form action="./process.php" method="post">
                                    <div class="row justify-content-end">
                                          <div class="col mt-5 ">
                                              <div class="input-group mb-3">
                                                <span class="input-group-text" id="inputGroup-sizing-default">Sepal Length Cm</span>
                                                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="sl">
                                              </div>
                                          </div>
                                    
                                          <div class="col mt-5" >
                                              <div class="input-group mb-3">
                                                <span class="input-group-text" id="inputGroup-sizing-default">Sepal Width Cm</span>
                                                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="sw">
                                              </div>
                                          </div>
                                      </div>
                                      
                                      <div class="row">
                                          <div class="col mt-4" >
                                              <div class="input-group mb-3">
                                                <span class="input-group-text" id="inputGroup-sizing-default">Petal Length Cm</span>
                                                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="pl">
                                              </div>
                                          </div>
                                          
                                          <div class="col mt-4" >
                                              <div class="input-group mb-3">
                                                <span class="input-group-text" id="inputGroup-sizing-default">Petal Width Cm</span>
                                                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="pw">
                                              </div>
                                          </div>
                                      </div>
                                    
                                      <div class="row justify-content-end">
                                          <div class="col-2" >
                                            <button type="submit" class="btn btn-success"> submit </button>
                                          </div>
                                          
                                      </div>

                                  </form>
                            </div>
                        
                        </div>
                </div>
          </div>

  </body>
</html>

