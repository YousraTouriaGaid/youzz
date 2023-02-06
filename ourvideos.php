<?php
    include("confige.php");
?>
<!DOCTYPE html>
<html lang="es" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Subir videos con PHP y MySQL</title>
    <style>
        /* Add your own CSS to customize the design */
        .video-card {
            max-width: 300px;
            margin: 0 auto;
            margin-top: 20px;
        }
        .video-card img {
            width: 100%;
        }
        .video-card h4 {
            margin-top: 10px;
        }
    </style>
    </head>
    <body class="d-flex flex-column h-100">
    
    <header>
  <!-- Fixed navbar -->
 
</header>

<!-- Begin page content -->
<hr>
<main role="main" class="flex-shrink-0">

<div class="container">
<div class="row">
    <center>
<h3 class="mt-5">Our video filming</h3>
</div>
  <hr>  
    <div class="row">
    <?php
			require 'conn.php';
 
			$query = mysqli_query($conn, "SELECT * FROM `video` ORDER BY `video_id` ASC") or die(mysqli_error());
			while($fetch = mysqli_fetch_array($query)){
		?>
		<div class="col-md-4">
            <div class="video-card">
                <img src="<?php echo $fetch['thumbnail']?>" alt="<?php echo $fetch['video_id']?>">
                <h4><?php echo $fetch['video_id']?></h4>
                <a href="<?php echo $fetch['location']?>" class="btn btn-primary">Watch Video</a>
            </div>
		</div>
		<?php
			}
		?>
          </center>
</div>
 </div>
 </main>
 <footer class="footer mt-auto py-3">
 
</footer>
    <!-- Aquí va el contenido de tu web -->
 
    <!-- JavaScript -->
    <script src="https://code.jquery
