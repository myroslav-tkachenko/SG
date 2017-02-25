<?php
    class Ingredient {
        private $name;
        private $coast;

        function __constructor(){

        }

        public function getName(){
            return $this->name;
        }

        public function setName($name){
            $this->name = $name;
        }

        public function getCoast(){
            return $this->coast;
        }

        public function setCoast($coast){
            if (is_float($coast)) {
                $this->coast = $coast;
            } else {
                echo 'Coast must be float.';
            }
        }
    }
?>