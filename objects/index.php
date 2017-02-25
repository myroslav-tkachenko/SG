<?php
    require_once('Ingredient.php');
    require_once('Dish.php');

    $potato = new Ingredient();
    $potato->setName('GiperPotato');
    $potato->setCoast(15.00);
    var_dump($potato);

    $salo = new Ingredient();
    $salo->setName('Pidcherevina');
    $salo->setCoast(75.00);
    var_dump($salo);

    $vilagePotato = new Dish();
    $vilagePotato->setName('Картошка по селянски');
    $vilagePotato->addIngredient($potato);
    $vilagePotato->addIngredient($salo);
    var_dump($vilagePotato);

    $coastVP = $vilagePotato->totalCoast();
    echo 'Total coast' . $coastVP;
?>