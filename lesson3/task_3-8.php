<?php

        $regions = [
            'Московская область' => ['Москва', 'Зеленоград', 'Клин'],
            'Нижегородская область' => ['Нижний Новгород', 'Дзержинск', 'Кстово'],
            'Ярославская область' => ['Ярославль', 'Рыбинск', 'Мышкин']
        ];

        foreach ($regions as $obl => $masTown) {
            echo $obl . ':<br>';
            echo implode(', ', $masTown) . '<br>';
        }

?>

<?php

        foreach ($regions as $obl => $masTown) {
            echo $obl . ':<br>';
            foreach ($masTown as $town) {
                                //$town = iconv("","UTF-8",$town);
                if (mb_substr($town, 0, 1) == 'К') {
                    echo $town . ' ';
                }
            }
            echo '<br>';
        }



?>