<?php

require_once 'vendor/autoloader.php';

use TestWork\Model\Farm;

echo '<h1>Коровы</h1><br>';

$cow_1 = Farm::addCow();
echo $cow_1->getRegisterNumber() . '<br>';
echo $cow_1->getMilk() . '<br><br>';

$cow_2 = Farm::addCow();
echo $cow_2->getRegisterNumber() . '<br>';
echo $cow_2->getMilk() . '<br><br>';

$cow_3 = Farm::addCow();
echo $cow_3->getRegisterNumber() . '<br>';
echo $cow_3->getMilk() . '<br><br>';

$cow_4 = Farm::addCow();
echo $cow_4->getRegisterNumber() . '<br>';
echo $cow_4->getMilk() . '<br><br>';

$cow_5 = Farm::addCow();
echo $cow_5->getRegisterNumber() . '<br>';
echo $cow_5->getMilk() . '<br><br>';

$cow_6 = Farm::addCow();
echo $cow_6->getRegisterNumber() . '<br>';
echo $cow_6->getMilk() . '<br><br>';

$cow_7 = Farm::addCow();
echo $cow_7->getRegisterNumber() . '<br>';
echo $cow_7->getMilk() . '<br><br>';

$cow_8 = Farm::addCow();
echo $cow_8->getRegisterNumber() . '<br>';
echo $cow_8->getMilk() . '<br><br>';

$cow_9 = Farm::addCow();
echo $cow_9->getRegisterNumber() . '<br>';
echo $cow_9->getMilk() . '<br><br>';

$cow_10 = Farm::addCow();
echo $cow_10->getRegisterNumber() . '<br>';
echo $cow_10->getMilk() . '<br><br>';


echo '<h3>Всего молока:</h3>' . Farm::collectMilk();

echo '<hr>';

/*-------------------------------------------------*/

echo '<h1>Куры</h1><br>';

$chicken_1 = Farm::addChicken();
echo $chicken_1->getRegisterNumber() . '<br>';
echo $chicken_1->getEggs() . '<br><br>';

$chicken_2 = Farm::addChicken();
echo $chicken_2->getRegisterNumber() . '<br>';
echo $chicken_2->getEggs() . '<br><br>';

$chicken_3 = Farm::addChicken();
echo $chicken_3->getRegisterNumber() . '<br>';
echo $chicken_3->getEggs() . '<br><br>';

$chicken_4 = Farm::addChicken();
echo $chicken_4->getRegisterNumber() . '<br>';
echo $chicken_4->getEggs() . '<br><br>';

$chicken_5 = Farm::addChicken();
echo $chicken_5->getRegisterNumber() . '<br>';
echo $chicken_5->getEggs() . '<br><br>';

$chicken_6 = Farm::addChicken();
echo $chicken_6->getRegisterNumber() . '<br>';
echo $chicken_6->getEggs() . '<br><br>';

$chicken_7 = Farm::addChicken();
echo $chicken_7->getRegisterNumber() . '<br>';
echo $chicken_7->getEggs() . '<br><br>';

$chicken_8 = Farm::addChicken();
echo $chicken_8->getRegisterNumber() . '<br>';
echo $chicken_8->getEggs() . '<br><br>';

$chicken_9 = Farm::addChicken();
echo $chicken_9->getRegisterNumber() . '<br>';
echo $chicken_9->getEggs() . '<br><br>';

$chicken_10 = Farm::addChicken();
echo $chicken_10->getRegisterNumber() . '<br>';
echo $chicken_10->getEggs() . '<br><br>';

$chicken_11 = Farm::addChicken();
echo $chicken_11->getRegisterNumber() . '<br>';
echo $chicken_11->getEggs() . '<br><br>';

$chicken_12 = Farm::addChicken();
echo $chicken_12->getRegisterNumber() . '<br>';
echo $chicken_12->getEggs() . '<br><br>';

$chicken_13 = Farm::addChicken();
echo $chicken_13->getRegisterNumber() . '<br>';
echo $chicken_13->getEggs() . '<br><br>';

$chicken_14 = Farm::addChicken();
echo $chicken_14->getRegisterNumber() . '<br>';
echo $chicken_14->getEggs() . '<br><br>';

$chicken_15 = Farm::addChicken();
echo $chicken_15->getRegisterNumber() . '<br>';
echo $chicken_15->getEggs() . '<br><br>';

$chicken_16 = Farm::addChicken();
echo $chicken_16->getRegisterNumber() . '<br>';
echo $chicken_16->getEggs() . '<br><br>';

$chicken_17 = Farm::addChicken();
echo $chicken_17->getRegisterNumber() . '<br>';
echo $chicken_17->getEggs() . '<br><br>';

$chicken_18 = Farm::addChicken();
echo $chicken_18->getRegisterNumber() . '<br>';
echo $chicken_18->getEggs() . '<br><br>';

$chicken_19 = Farm::addChicken();
echo $chicken_19->getRegisterNumber() . '<br>';
echo $chicken_19->getEggs() . '<br><br>';

$chicken_20 = Farm::addChicken();
echo $chicken_20->getRegisterNumber() . '<br>';
echo $chicken_20->getEggs() . '<br><br>';


echo '<h3>Всего яиц:</h3>' . Farm::collectEggs();

echo '<hr>';