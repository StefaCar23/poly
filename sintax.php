<?php

    interface MyInterface{
        public function my_method();
        public function method_with_argument($args);
}

class MyClass implements MyInterface{
    public $myProperty;
    
    public function my_method() {
        echo "Hello World!";
    }
    
    public function method_with_argument($args) {
        echo $args;
    }
}

class MySecondClass implements MyInterface{
    public $mySecondProperty;
    
    public function my_method() {
        echo "Hello my second world";
    }
    
    public function method_with_argument($args) {
        echo "This is args " . $args;
    }
}

