<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teks | Inicio</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<div id="header-content"> </div>
    <script src="//code.jquery.com/jquery.min.js"></script>
    <script>$.get("navbar.html", function (data) {
    $("#header-content").replaceWith(data);
    });
    </script>
<body>
  <div class="carrousel">
    <img src="assets/imagenes/back2.jpg" alt="">
      <div class="recuadrito"></div>
      <div class="button"><a href="./productos.php">Ver Productos</a></div>
  </div>

<script src="assets/js/resize.js"></script>
</body>
<footer class="footer-distributed">
			<div class="footer-left">
				<p class="footer-links">
					<a class="link-1" href="#">Inicio</a>
					<a href="#">Acerca de nosotros</a>
          <a href="https://www.instagram.com/teks.argentina/">Instagram</a>
				</p>
				<p>Teks &copy; 2020</p>
			</div>
</footer>
</html>