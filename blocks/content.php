<!-- Content -->
<div class="col-md-9">
    <!-- Page Heading -->
    <h1 class="my-4">Заголовок страницы
        <small><small>
        <?php
            include ('blocks/losung.php');
        ?>
         </small></small>
    </h1>
        <?php
        echo 'Сегодня: ';
        $week = date("w");
        if ($week == '1'){echo ' Понедельник, ';} if ($week == '2'){echo ' Вторник, ';}
        if ($week == ' 3'){echo ' Среда, ';} if ($week == '4'){echo ' Четверг ';}
        if ($week == '5'){echo ' Пятница ';} if ($week == '6'){echo ' Суббота ';}
        if ($week == '7'){echo ' Воскресенье ';}
            echo strftime('%d.%m.%Y г.'); // . strftime(', %H час. %M мин.');
        ?>
    <hr>
    <!-- Project One -->
    <div class="row">
        <div class="col-md-4">
            <a href="#">
                <img class="img-fluid rounded mb-3 mb-md-0" src="img/thumb.svg" alt="">
            </a>
        </div>
        <div class="col-md-8">
            <h3>Статья 1</h3>
            <p>Далеко-далеко за словесными горами в стране, гласных и согласных живут рыбные тексты. Он рыбными мир заглавных инициал букв обеспечивает большой путь все алфавит великий вскоре, журчит всемогущая дорогу предупреждал курсивных, рот взобравшись.</p>
            <a class="btn btn-primary" href="#">View Project</a>
        </div>
    </div>
    <!-- /.row -->

    <hr>

    <!-- Project Two -->
    <div class="row">
        <div class="col-md-4">
            <a href="#">
                <img class="img-fluid rounded mb-3 mb-md-0" src="img/thumb.svg" alt="">
            </a>
        </div>
        <div class="col-md-8">
            <h3>Статья 2</h3>
            <p>Далеко-далеко за словесными горами в стране, гласных и согласных живут рыбные тексты. Составитель, живет власти буквенных обеспечивает даже всемогущая, если одна грамматики родного рыбными собрал предложения, сбить маленькая! Но всеми речью точках.</p>
            <a class="btn btn-primary" href="#">View Project</a>
        </div>
    </div>
    <!-- /.row -->

    <hr>

    <!-- Project Three -->
    <div class="row">
        <div class="col-md-4">
            <a href="#">
                <img class="img-fluid rounded mb-3 mb-md-0" src="img/thumb.svg" alt="">
            </a>
        </div>
        <div class="col-md-8">
            <h3>Статья 3</h3>
            <p>Далеко-далеко за словесными горами в стране, гласных и согласных живут рыбные тексты. Сбить за родного страна большой, курсивных все свою рот, до они, назад, обеспечивает коварных возвращайся. Свой, моей даже это но.</p>
            <a class="btn btn-primary" href="#">View Project</a>
        </div>
    </div>
    <!-- /.row -->

    <hr>

    <!-- Project Four -->
    <div class="row">

        <div class="col-md-4">
            <a href="#">
                <img class="img-fluid rounded mb-3 mb-md-0" src="img/thumb.svg" alt="">
            </a>
        </div>
        <div class="col-md-8">
            <h3>Статья 4</h3>
            <p>Далеко-далеко за словесными горами в стране, гласных и согласных живут рыбные тексты. Алфавит страну пор запятой которой продолжил эта, вопроса деревни живет свой подпоясал собрал пустился гор своих, речью, о маленький даль журчит. Возвращайся семь коварных это заманивший, великий своего точках, прямо журчит переписали!</p>
            <a class="btn btn-primary" href="#">View Project</a>
        </div>
    </div>
    <!-- /.row -->

    <hr>
</div>

