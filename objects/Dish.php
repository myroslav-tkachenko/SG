<?php
    class Dish {
        private $name;
        private $allIngredients = array();

        function __cpnstructor(){

        }

        public function getName(){
            return $this->name;
        }

        public function setName($name){
            $this->name = $name;
        }

        public function addIngredient($ingredient){
            if ($ingredient instanceof Ingredient) {
                array_push($this->allIngredients, $ingredient);
            } else {
                echo 'Ingredient must be instance of Class Ingredient';
            }
        }

        public function getIngredients(){
            return $this->allIngredients;
        }

        public function totalCoast(){
            $totalCoast = 0;
            foreach ($this->allIngredients as $ingredient) {
                $totalCoast += $ingredient->getCoast();
            }
            return $totalCoast;
        }
    }
?>