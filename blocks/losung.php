<?php
        $form = strftime('%H');
        if ($form >= 6 || $form < 12) $day = 'Доброе утро, ';
        if ($form >= 12 || $form < 15) $day = 'Добрый день, ';
        if ($form >= 15 || $form < 21) $day = 'Добрый вечер, ';
        if ($form >= 21 || $form < 6) $day = 'Доброй ночи, ';
        echo $day . 'уважаемый юзер!'
?>