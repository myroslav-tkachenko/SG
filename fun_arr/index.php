<?php
    require_once('functions.php');

    $city_population = ARRAY();
    $city_population[] = ['city' => 'New York',     'state' => 'NY', 'population' => 8175133];
    $city_population[] = ['city' => 'Los Angeles',  'state' => 'CA', 'population' => 3792621];
    $city_population[] = ['city' => 'Chicago',      'state' => 'IL', 'population' => 2695598];
    $city_population[] = ['city' => 'Houston',      'state' => 'TX', 'population' => 2100263];
    $city_population[] = ['city' => 'Philadelphia', 'state' => 'PA', 'population' => 1526006];
    $city_population[] = ['city' => 'Phoenix',      'state' => 'AZ', 'population' => 1445632];
    $city_population[] = ['city' => 'San Antonio',  'state' => 'TX', 'population' => 1327407];
    $city_population[] = ['city' => 'San Diego',    'state' => 'CA', 'population' => 1307402];
    $city_population[] = ['city' => 'Dallas',       'state' => 'TX', 'population' => 1197816];
    $city_population[] = ['city' => 'San Jose',     'state' => 'CA', 'population' => 945942];

    $count = sizeof($city_population);
    $total = 0;
    for($i = 0; $i < $count; $i++){
        echo 'City - ' . $city_population[$i]['city'] . '; State - ' . $city_population[$i]['state'] .
             '; Population = ' . $city_population[$i]['population'] . '<br>';
        $total += $city_population[$i]['population'];
    }

    echo '<span style="color: blue;">Total population in 10 cities is ' . $total . '</span><br>';

    /* Функция для нашей сортировки по городам */
    function sort_city ($v1, $v2) {
        /* Сравниваем значение по ключу city */
        if ($v1["city"] == $v2["city"]) return 0;
            return ($v1["city"] < $v2["city"])? -1: 1;
    }
    function sort_population ($v1, $v2) {
        /* Сравниваем значение по ключу city */
        if ($v1["population"] == $v2["population"]) return 0;
            return ($v1["population"] < $v2["population"])? -1: 1;
    }
    usort($city_population, "sort_city");
    echo '<pre>';
    echo '<h1>Sorted by city</h1>';
    print_r($city_population);
    echo '</pre>';

    usort($city_population, "sort_population");
    echo '<pre>';
    echo '<h1>Sorted by population</h1>';
    print_r($city_population);

    //Статистика по штатам и их насилению
    $state_statistic = ARRAY();
    for($i = 0; $i < $count; $i++){
        // echo $city_population[$i]['state'].'<br>';
        if($key = array_search($city_population[$i]['state'], $state_statistic)){
            $state_statistic[$city_population['state']] += $state_statistic[$city_population[$i]['population']];
        }else{
            $state_statistic[$city_population[$i]['state']] = $city_population[$i]['population'];
        }
    }
    $GLOBALS['img_path'] = 'images/';

    echo "<h1>Statistic of states population</h1>";
    print_r($state_statistic);
    echo '</pre>';

    echo '<h1 style="color: red;">FUNCTIONS</h1>';

    echo createTag('1.png', 200, 200);

    echo '<br> <h3>What does the following code print out?</h3>';
    echo ' Эта функция проверяет может ли человпек раслатится в ресторане наличкой.';