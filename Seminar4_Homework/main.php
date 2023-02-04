<?php
$name = "Васисуалий Лоханкин";
$profession = "System Analyst";
$city = "г. Нижние Васюки Ярославской губернии";
$email = "my_email@mailserver.ru";
$phone = "322-223-332-222-3322";
$skills = [
    ['name' => 'Разгрузка вагонов', 'percent' => 40],
    ['name' => 'Водительский стаж', 'percent' => 100],
    ['name' => 'Системный анализ', 'percent' => 30],
    ['name' => 'Системная архитектура', 'percent' => 50],
    ['name' => 'Моделирование бизнес-процессов по TOGAF', 'percent' => 80]
];
$languages = [
    ['name' => 'Русский', 'percent' => 100],
    ['name' => 'Английский', 'percent' => 50],
    ['name' => 'Немецкий', 'percent' => 30],
    ['name' => 'Командный','percent' => 80],
    ['name' => 'Ненормативная лексика', 'percent' => 100]
];
$workplaces = [
    ['post' => 'Служба в армии РФ', 'start_date' => 'Июнь 2008', 'end_date' => 'Июнь 2010', 'description' => 'Отдавал долг Родине.' ],
    ['post' => 'Портовый грузчик', 'start_date' => 'Июнь 2010', 'end_date' => 'Март 2012', 'description' => 'Чисто для души.' ],
    ['post' => 'Таксист', 'start_date' => 'Март 2012', 'end_date' => 'Декабрь 2014', 'description' => 'Так-то у меня свой бизнес.' ],    
    ['post' => 'Системный аналитик', 'start_date' => 'Декабрь 2014', 'end_date' => 'Октябрь 2016', 'description' => 'Пришла пора взяться за ум.' ],   
    ['post' => 'Системный архитектор', 'start_date' => 'Октябрь 2016', 'end_date' => 'По настоящее время', 'description' => 'Карьерный рост.' ]   
];
$studieplaces = [
    ['university' => 'gb.ru', 'start_date' => 'Всегда', 'end_date' => 'Всегда', 'description' => 'Вечный студент.' ],
    ['university' => 'Академия сельского хозяйства', 'start_date' => 'Сентябрь 2005', 'end_date' => 'Июнь 2008', 'description' => 'Учимся осваивать целину.' ],
    ['university' => 'Хогвардс', 'start_date' => 'Сентябрь 2003', 'end_date' => 'Сентябрь 2005', 'description' => 'Повезло так повезло.' ],    
    ['university' => 'Школа-интернат для одаренных детей № 666', 'start_date' => 'Декабрь 2000', 'end_date' => 'Сентябрь 2003', 'description' => 'Среднее образование.' ],   
    ['university' => 'Детский сад "Солнышко"', 'start_date' => 'Декабрь 1995', 'end_date' => 'Декабрь 2000', 'description' => 'Первые шаги' ]   
];


?>
<!DOCTYPE html>
<html>
<head>
  <title>Мое резюме</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    html,
    body,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
      font-family: 'Jost', sans-serif;
    }
  </style>
</head>
<body class="w3-light-grey">
  <!-- Page Container -->
  <div class="w3-content w3-margin-top" style="max-width:1400px;">
    <!-- The Grid -->
    <div class="w3-row-padding">
      <!-- Left Column -->
      <div class="w3-third">
        <div class="w3-white w3-text-grey w3-card-4">
          <div class="w3-display-container">
            <img src="https://sun9-79.userapi.com/impg/kBxQiC3BePH0JGyHfaosUVvUM8u2hjV6vyOciQ/Qmml20afQ7Q.jpg?size=1024x698&quality=95&sign=b0778bffb7d4e45cf1a34432247096ee&type=album"
              style="width:90%" alt="Avatar">
            <div class="w3-display-bottomleft w3-container w3-text-black">
              <h2><?php echo $name; ?></h2>
            </div>
          </div>
          <div class="w3-container">
            <p><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal"></i><?= $profession; ?></p>
            <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"></i><?= $city; ?></p>
            <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i><?= $email; ?></p>
            <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i><?= $phone; ?></p>
            <hr>
            <p class="w3-large"><b><i class="fa fa-asterisk fa-fw w3-margin-right w3-text-teal"></i>Навыки</b></p>
            <?php for ($i = 0; $i < count($skills); $i++): ?>
              <p><?= $skills[$i]['name'];?></p>
              <div class="w3-light-grey w3-round-xlarge w3-small">
                <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:<?= $skills[$i]['percent'];?>%"><?= $skills[$i]['percent'];?>%</div>
              </div>
            <?php endfor; ?>
            <br>
            <p class="w3-large w3-text-theme"><b><i class="fa fa-globe fa-fw w3-margin-right w3-text-teal"></i>Языки</b></p>
            <?php for ($i = 0; $i < count($languages); $i++): ?>
              <p><?= $languages[$i]['name'];?></p>            
              <div class="w3-light-grey w3-round-xlarge">
              <div class="w3-round-xlarge w3-teal" style="height:20px;width:<?= $languages[$i]['percent'];?>%"></div>
              </div>
            <?php endfor; ?>
            <br>
          </div>
        </div>
        <br>
        <!-- End Left Column -->
      </div>
      <!-- Right Column -->
      <div class="w3-twothird">
        <div class="w3-container w3-card w3-white w3-margin-bottom">
          <h2 class="w3-text-grey w3-padding-16"><i
              class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Трудовой путь</h2>
          <?php for ($i = count($workplaces) - 1; $i >= 0 ; $i--): ?>          
          <div class="w3-container">
            <h5 class="w3-opacity"><b><?= $workplaces[$i]['post'];?></b></h5>
            <?php
              $date_string = '<h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>' . $workplaces[$i]['start_date'] . ' - ';
              if($workplaces[$i]['end_date'] == 'По настоящее время') {
                $end_date_string = '<span class="w3-tag w3-teal w3-round">' . $workplaces[$i]['end_date'] . '</span></h6>';
              } 
              else {
                $end_date_string = $workplaces[$i]['end_date'] . '</h6>';                  
              };
             $date_string = $date_string . $end_date_string;
            ?>              
            <p><?= $date_string;?></p>              
            <p><?= $workplaces[$i]['description'];?></p>
            <hr>
          </div>
          <?php endfor;?>
      </div>

        <div class="w3-container w3-card w3-white">
          <h2 class="w3-text-grey w3-padding-16"><i
              class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Образование</h2>
          <?php for ($i = 0; $i < count($studieplaces) ; $i++): ?>                        
          <div class="w3-container">
            <h5 class="w3-opacity"><b><?= $studieplaces[$i]['university'];?></b></h5>
            <?php
              $date_string = '';
              if($studieplaces[$i]['end_date'] == 'Всегда' or $studieplaces[$i]['start_date'] == 'Всегда' ) {
                $date_string = '<h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Всегда!!!</h6>';
              } 
              else {
                $date_string = '<h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>' . $studieplaces[$i]['start_date'] . ' - ' . $studieplaces[$i]['end_date'] . '</h6>';
              };
            ?>              
            <p><?= $date_string;?></p>                          
            <p><?= $studieplaces[$i]['description'];?></p>
            <hr>
           </div>
          <?php endfor;?>
        </div>
        <!-- End Right Column -->
      </div>
      <!-- End Grid -->
    </div>
    <!-- End Page Container -->
  </div>
  <!-- Footer -->
  <footer class="w3-container w3-teal w3-center w3-margin-top">
    <p>Find me on social media.</p>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
    <!-- End footer -->
  </footer>
</body>
</html>