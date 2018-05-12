<?php

    abstract class Test{
        public $name;
        public $lastname;
        public static $address;
        
        public function demo_function(){
            echo "Hello world!" . "<br />";
        }
        
        abstract public function set_value($val); //abstrakt metodu cemo definisati u podklasi
        abstract public function get_value();
                
       }
       /*
       $obj = new Test;
       $obj->demo_function();
       ne moze se praviti objekat abstrakt klase */
       
       class Demo extends Test{
           public $num;
           
           public function set_value($val){
               $this->num = $val;
           }
           
           public function get_value(){
               echo "<br /> Value is: " . $this->num;
           }
       }
       
       $obj = new Demo;
       $obj->set_value(10);
       $obj->demo_function();
       $obj->get_value();
       
      
       
    