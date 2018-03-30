<?php
$rightMenu = [
    'Главная' => '#',
    'Статьи' => '#',
    'О нас' => '#',
    'Услуги' => '#',
    'Контакты' => '#',
    'Гостевая книга' => 'guest.php'
]
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Какой-то логотип</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
              <?php
              foreach($rightMenu as $name => $link) {
                  //echo '<li><a href="' . $link. '">' . $name . '</li>';
                  echo "<li><a href='{$link}'>{$name}</a></li><div class='col-md-auto'></div>";
                  //echo "\$rightMenu[$name] => $link.\n";
              }
              ?>
            <!--<li class="nav-item active">
              <a class="nav-link" href="#">
    Главная
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Статьи</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">О нас</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Услуги</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Контакты</a>
            </li>-->
          </ul>
        </div>
      </div>
    </nav>
