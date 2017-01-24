<?php

 class fighter{

   #carac : force, exp, name
   private $force;
   private $name;
   private $exp;
   private $life;

   #construc + getters/setters
		function __construct($name,$exp,$force,$life) {
			$this->name = $name;
      $this->exp = $exp;
      $this->force = $force;
      $this->life = $life;
		}

		function set_name($new_name) {
			$this->name = $new_name;
		}

		function get_name() {
			return $this->name;
		}

    function set_force($new_force) {
      $this->force = $new_force;
    }

    function get_force() {
      return $this->force;
    }

    function set_exp($new_exp) {
      $this->exp = $new_exp;
    }

    function get_exp() {
      return $this->exp;
    }

    function set_life($new_life) {
      $this->life = $new_life;
    }

    function get_life() {
      return $this->life;
    }


    #function punch, retire un certain nombre de pv selon la force de l'autre
    function punch($force){
      if($this->life>0 && $this->life>$force){
        $this->life = $this->life-$force;
      }
      else{
        $this->life = 0;
      }
    }

    function pexer(){
      $this->exp = $this->exp + 1;
    }

    function dead(){
      if($this->life==0){
        echo $this->name." You Loose!";
      }
    }

    function win(){
      if($this->life>0){
          echo $this->name." You Win!";
          $this->pexer();
      }
    }

    function isAlive(){
        if($this->life>0){
          return true;
        }
        else{
          return false;
        }

    }

};
?>
