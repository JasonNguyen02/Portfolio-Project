<?php 
// Define Character Class
 
class Character {
    //Properties (state)
    public $name;
    public $phraseOne;
    public $phraseTwo;
    public $level;

    function __construct($name, $phraseOne, $phraseTwo){
        $this->name = $name;
        $this->phraseOne = $phraseOne;
        $this->phraseTwo = $phraseTwo;
        $this->level = 0;
    }
    // Methods (Behaviour)
    function speak($phraseNum){
        if($phraseNum == 1){        
            echo $this->phraseOne;
        } else if($phraseNum == 2){
            echo $this->phraseTwo;
        }
    }
    
    function setLevel($newLevel){
        $this->level = $newLevel;
    }
}

$char1 = new Character('Po', 'Skadoosh', 'You have been blinded by awesomeness');
$char2 = new Character('Spiderman', 'My Spider-Sense is tingling', 'Your friendly neighbourhood spiderman');

$char1->speak(1);
$char1->speak(2);
?>


<?php
// Define Backpack Class
class Backpack {
    //Properties (State)
    function __construct($color, $size, $items, $open){
        $this->color = $color;
        $this->size = $size;
        $this->items = $items;
        $this->open = $open;
    }
        $i = array();
    // Methods (Behaviour)
    openBag(){
        $open = 'true';
        echo 'Your backpack is now open!';
    }
    closeBag(){
        $open = 'false';
        echo('Your backpack is now closed!');
    }
    putin($item){
        if($open == true){
            array_push($item);
            echo 'You just put in an item';
        }
    }
    takeout($item){
        if($open == true){
            for($x=0; $x<count($i); $x++){
                if($i[$x] == $item){
                    array.splice($x);
                    echo('You just took out an item');
                }
            }
        }
    }
}

$BP1 = new backpack('blue', 'small');
$BP2 = new backpack('red', 'medium');
$BP3 = new backpack('green', 'large');

$BP1.openBag();
$BP1.putin(lunch);
$BP1.putin(jacket);
$BP1.closeBag();
$BP1.openBag();
$BP1.takeout(jacket);
$BP1.closeBag();
?>
