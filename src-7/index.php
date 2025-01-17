 <?php
   require_once './main.php';
   session_start();
   ?>

 <!DOCTYPE html>
 <html lang="en">

 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">



    <title>Прогноз погоды</title>
 </head>

 <body>
    <div class="wrapper">
       <header>
          <form action="main.php" method="post">
             <div class="wrapp-input">
                <input name="city" type="text" placeholder="Введите город">

             </div>
             <input type="submit" value="Получить данные о погоде"></input>
          </form>
       </header>

       <div class="content">

          <?php
            if ($_SESSION['city'] == ""): ?>
          <img src="./img/sun-blue.avif" width="100%" alt="img">;

          <?php endif; ?>

          <?php
            if ($data['weather'][0]['main'] == "Clear"): ?>
          <img src="./img/sun-blue.avif" width="100%" alt="img">;

          <?php endif; ?>

          <?php
            if ($data['weather'][0]['main'] == "Snow"): ?>
          <img src="./img/sneg.png" width="100%" alt="img">;

          <?php endif; ?>

          <?php
            if ($data['weather'][0]['main'] == 'Clouds'): ?>
          <img src="./img/oblaco.jpg" width="100%" alt="img">;

          <?php endif; ?>
          <?php
            if ($data['weather'][0]['main'] == "ливень"): ?>
          <img src="./img/liven.avif" width="100%" alt="img">;

          <?php endif; ?>

          <?php
            if ($data['weather'][0]['main'] == "Mist"): ?>
          <img src="./img/tuman.jpg" width="100%" alt="img">;

          <?php endif; ?>

          <?php
            if ($data['weather'][0]['main'] == "Rain"): ?>
          <img src="./img/dogd.jpg" width="100%" alt="img">;

          <?php endif; ?>


          <div class="content_absolute">
             <h1><?= $data['name'] ?></h1>

             <h1><?= $data['main']['temp'] ?></h1>
             <h1><?= $data['weather'][0]['description'] ?></h1>
             <pre>
         <?php print_r($data); ?>
         </pre>
          </div>


       </div>
    </div>
    <script src="main.js"></script>
 </body>

 </html>