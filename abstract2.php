<?php

    abstract class AbstractClass{
        abstract protected function get_value();
        abstract protected function prefix_value($val);
        
        public function printout(){
            echo $this->get_value() . "<br />";
        }
        
    }
    
    class Concrete extends AbstractClass{
        protected function get_value() {
            return "Concrete";
        }
        
        public function prefix_value($val) {
            return "{$val} Concrete";
        }
    }
    
    class Concrete2 extends AbstractClass{
        protected function get_value() {
            return "Concrete2";
        }
        
        public function prefix_value($val) {
            return "{$val} Concrete2";
        }
    }
    
    $class1 = new Concrete;
    $class1->printout();
    echo $class1->prefix_value("foo") . "<br />";
    
    $class2 = new Concrete2;
    $class2->printout();
    echo $class2->prefix_value("foo");
    