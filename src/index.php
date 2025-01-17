 <?php
   require_once './component.php';
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
            if ($data['weather'][0]['main'] == "Clear"): ?>
          <img class="content-bg" src="./img/jasno.jpg" height="100%" alt="img">;

          <?php endif; ?>

          <?php
            if ($data['weather'][0]['main'] == "Snow"): ?>
          <img class="content-bg" src="./img/sneg.png" width="100%" alt="img">;

          <?php endif; ?>


          <?php
            if ($data['weather'][0]['main'] == 'Clouds'): ?>
          <img class="content-bg" src="./img/oblachost.jpg" width="100%" alt="img">;

          <?php endif; ?>
          <?php
            if ($data['weather'][0]['main'] == 'Drizzle'): ?>
          <img class="content-bg" src="./img/morosь.png" width="100%" alt="img">;

          <?php endif; ?>

          <?php
            if ($data['weather'][0]['main'] == "Thunderstorm"): ?>
          <img class="content-bg" src="./img/groza-n-dogdem.png" width="100%" alt="img">;

          <?php endif; ?>


          <?php
            if ($data['weather'][0]['main'] == "Rain"): ?>
          <img class="content-bg" src="./img/dogd.jpg" width="100%" alt="img">;

          <?php endif; ?>

          <?php
            if ($data['weather'][0]['main'] == 'Mist' || $data['weather'][0]['main'] == 'Smoke' || $data['weather'][0]['main'] == 'Haze' || $data['weather'][0]['main'] == 'Dust' || $data['weather'][0]['main'] == 'Fog' || $data['weather'][0]['main'] == 'Sand' || $data['weather'][0]['main'] == 'Dust' || $data['weather'][0]['main'] == 'Ash'): ?>
          <img class="content-bg" src="./img/tuman.jpg" width="100%" alt="img">;

          <?php endif; ?>

          <!-- content-absolute -->




          <div class="<?= $data['weather'][0]['main'] != null  ? "content_absolute" : "dislayNone" ?>">
             <div class="block-info">
                <div class="wrapp-block-left">
                   <div class="block-left">
                      <div class="block-icon">
                         <img src="https://openweathermap.org/img/wn/<?= $data['weather'][0]['icon'] ?>@2x.png"
                            alt="icon">
                      </div>
                      <h1 class="temp"><?= round($data['main']['temp']) ?><sup>&deg;c</sup> </h1>
                      <div class="block-description-weather">
                         <p><i>влажность</i>
                            <span class="humidity"><?= round($data['main']['humidity']) ?>%</span>
                         </p>
                         <p><i>ветер</i>
                            <span class="speed"><?= round($data['wind']['speed']) ?>м/с</span>
                         </p>
                      </div>
                   </div>
                   <p> <span class="pogoda"><?= $data['weather'][0]['description'] ?></span>
                   </p>
                </div>


                <div class="block-right">
                   <h2 class="title">Погода</h2>
                   <p class="description-city"><i>результаты для</i><span class="city"> <?= $data['name'] ?></span></p>
                   <p class="date-time"><?= currentData($arrwday, $today['wday'],  $today['hours'], $today['minutes']);
                                          ?></p>
                </div>



             </div>
          </div>
          <pre>
  <?= print_r($data) ?>
</pre>
       </div>


    </div>
    </div>
    <script src="main.js"></script>
 </body>

 </html>