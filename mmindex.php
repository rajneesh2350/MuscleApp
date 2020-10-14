<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Burger - Minimal, fullscreen nav.</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="./mmstyle.css">

</head>
<body>
<!-- partial:index.partial.html -->
<!-- Navigation -->
<div class="b-nav" style="background-color: #76CCBB">
  <li><a class="b-link" href="https://github.com/mblode/burger" target="_blank">Search Muscle</a></li>
  <li><a class="b-link" href="https://github.com/mblode" target="_blank">Front-Back View</a></li>
  <li><a class="b-link" href="https://codepen.io/mblode/" target="_blank">CodePen</a></li>
  <li><a class="b-link" href="https://dribbble.com/mblode" target="_blank">Dribbble</a></li>
</div>

<!-- Burger-Icon -->
<div class="b-container">
  <div class="b-menu" style="background-color: #76CCBB">
    <div class="b-bun b-bun--top"></div>
    <div class="b-bun b-bun--mid"></div>
    <div class="b-bun b-bun--bottom"></div>
  </div>
       <?php
      include("picindex.php");
    ?>
  <!-- Burger-Brand -->
  <a href="#" class="b-brand"></a>
</div>
<!-- partial -->
  <script  src="./mmscript.js"></script>

</body>
</html>
