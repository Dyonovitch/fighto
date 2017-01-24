
<?php
include('fighter.php');

  $fighter1 = new fighter("luis",0,3,20);
  $fighter2 = new fighter("Jose",0,2,20);
  echo "".$fighter1->get_name()." VS ".$fighter2->get_name()."";
  echo "<br>";
  while($fighter1->isAlive() || $fighter2->isAlive()){
    if($fighter1->isAlive() && $fighter2->isAlive()){
      echo "<br>";
      echo "".$fighter1->get_name()." YOUR TURN";
      $fighter2->punch($fighter1->get_force());
      echo "<br>";
      echo "-".$fighter1->get_force()."PV for " .$fighter2->get_name();
      echo "<br>";
      echo "".$fighter2->get_name()." : ".$fighter2->get_life()." PV";
      echo "<br>";
      echo "".$fighter2->get_name()." YOUR TURN";
      $fighter1->punch($fighter2->get_force());
      echo "<br>";
      echo "-".$fighter2->get_force()."PV for " .$fighter1->get_name();
      echo "<br>";
      echo "".$fighter1->get_name()." : ".$fighter1->get_life()." PV";
      echo "<br>";
    }
    else{
      if($fighter1->get_life()==0){
            echo "<br>";
          $fighter1->dead();
            echo "<br>";
          $fighter2->win();
          break;
      }
      elseif ($fighter2->get_life()==0) {
          echo "<br>";
          $fighter2->dead();
            echo "<br>";
          $fighter1->win();
          break;
      }
      else{
        echo "DOUBLE KO";
      }
    }
  }




  /*$fighter1->pexer();
  echo $fighter1->get_exp();
  echo $fighter2->get_name();
  $fighter2->punch();
  echo $fighter2->get_life();
  $fighter2->pexer();
  echo $fighter2->get_exp();*/





 ?>
