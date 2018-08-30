<?php

$data = json_decode( file_get_contents("http://localhost/prueba%20tecnica%20auctio/recursos/data/data.json"), true );



  #  for ($i=0; $i=count( $data ); $i++) { 
  #    echo $data[$i]["name"], "<br>";
  #}


?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Prueba tecnica</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="./recursos  /css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"  crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>



    
    <!-- Just an image -->
<nav class="navbar navbar-a">
  <br><br>
</nav>

<div class="container-fluid">

      <div class="row">

         <!-- Sidebar Widgets Column -->
        <div class="col-md-3 col-xs-12 filtro">
          <div class="shadow card card-header cursor">
              <h5 data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample"> <strong>Filtro</strong></h5>
            </div>
          <!-- Search Widget -->
          <div class="collapse" id="collapseExample">
            
            <div class="shadow card carta my-4">
              <div class="card-body">
                <h5 data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample"><span class="fa fa-search"></span> Nombre De Hotel</h5>
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Ingrese el nombre del hotel">
                  <span class="input-group-btn">
                    <button class="btn btn-secondary" type="button">Aceptar</button>
                  </span>
                </div>
                <hr>
              </div>
              <a class="card-header" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1"><span class="fa fa-star"></span> Estrellas</a>
              <div class="card-body">
                <div class="collapse multi-collapse" id="multiCollapseExample1">
                  
                  <ul class="list-unstyled">
                    <li><input type="checkbox"> Todas Las Estrellas</li>
                    <li><input type="checkbox"><span class="fa fa-star star"></span><span class="fa fa-star star"></span><span class="fa fa-star star"></span><span class="fa fa-star star"></span><span class="fa fa-star star"></span></li>
                    <li><input type="checkbox"><span class="fa fa-star star"></span><span class="fa fa-star star"></span><span class="fa fa-star star"></span><span class="fa fa-star star"></span></li>
                    <li><input type="checkbox"><span class="fa fa-star star"></span><span class="fa fa-star star"></span><span class="fa fa-star star"></span></li>
                    <li><input type="checkbox"><span class="fa fa-star star"></span><span class="fa fa-star star"></span></li>
                    <li><input type="checkbox"><span class="fa fa-star star"></span></li>
                  </ul>

                </div>
              </div>
            </div>
          </div>
        </div>



<?php

    #for ($i=0; $i=count( $data ); $i++) { 

        #echo $feed[$i]["name"];


        foreach ($data as &$data) {
?>

        <!-- Blog Entries Column -->
        <div class="container-fluid col-md-9 col-xs-12 container-card movil">

          <!-- Blog Post -->
          <div class="card flex-md-row mb-4 shadow-sm h-md-250">
            

            <!--========img=============-->
              <img class="card-img-right img-fluid" src="<?php $img = $data['image'];  echo "./recursos/assets/images/hotels/$img"?>" data-holder-rendered="true">

            <!--====estructura==========-->
            <div class="card-body d-flex flex-column align-items-start">
              <h3 class="mb-0">
                <?php echo $data["name"]; ?>
              </h3>
             <div class="container stars">
                <?php #echo  $data["stars"] 
                  $cantidad = $data["stars"] ;

                  if($cantidad ===  1){
                    echo "<span class='fa fa-star star'>";
                  }
                  if($cantidad ===  2){
                    echo "<span class='fa fa-star star'><span class='fa fa-star star'>";
                  }
                  if($cantidad ===  3){
                    echo "<span class='fa fa-star star'><span class='fa fa-star star'><span class='fa fa-star star'>";
                  }
                   if($cantidad ===  4){
                    echo "<span class='fa fa-star star'><span class='fa fa-star star'><span class='fa fa-star star'><span class='fa fa-star star'>";
                  }
                   if($cantidad ===  5){
                    echo "<span class='fa fa-star star'><span class='fa fa-star star'><span class='fa fa-star star'><span class='fa fa-star star'><span class='fa fa-star star'>";
                  }


                ?>  
             </div>
                <div class="icons container">
                    <img class="img-icons" src="<?php $svg = $data["amenities"][0];  echo "./recursos/assets/icons/amenities/$svg.svg"?>">
                    <img class="img-icons" src="<?php $svg = $data["amenities"][1];  echo "./recursos/assets/icons/amenities/$svg.svg"?>">
                    <img class="img-icons" src="<?php $svg = $data["amenities"][2];  echo "./recursos/assets/icons/amenities/$svg.svg"?>">
                    <img class="img-icons" src="<?php $svg = $data["amenities"][3];  echo "./recursos/assets/icons/amenities/$svg.svg"?>">
                    <img class="img-icons" src="<?php $svg = $data["amenities"][4];  echo "./recursos/assets/icons/amenities/$svg.svg"?>">
                </div>
            </div>

            <div class=" container-card puntos ">
              <p>Precio por noche por <br>havitacion</p>
              <h4>ARS <?php $price = $data["price"]; echo "<strong>$price</strong>"?></h4>
              <a href="#" class="btn btn-hotel">Ver Hotel</a>
            </div>

          </div>


          
        </div>
    </div>
  </div>
    <!-- /.container -->




<?php

    }


?>






<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
    crossorigin="anonymous"></script>


</body>
</html>