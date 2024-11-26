<?php 
    class fruit{
        public $name;
        public $color;
        public $taste;
        public $lifespan;


        public function _construct ($name, $color, $taste, $lifespan){
            $this->name = $name;
            $this->name = $color;
            $this->name = $taste;
            $this->name = $lifespan;

            $this -> display();
        }

       
    

    public function display(){
       
        echo "Mango:" .$this -> name . $this->color . $this->taste . $this->lifespan. "<br>";
        echo "Pawpaw:" .$this -> name . $this->color . $this->taste . $this->lifespan. "<br>";
        echo "Watermelon:" .$this -> name . $this->color . $this->taste . $this->lifespan. "<br>";
        echo "Guava:" .$this -> name . $this->color . $this->taste . $this->lifespan. "<br>";
        echo "Orange:" .$this -> name . $this->color . $this->taste . $this->lifespan. "<br>";
        
    }
}
    $fruits = [
        new fruit ('Mango', 'yellow', 'Sweet', '10 years', '<br>'),
        new fruit ('Pawpaw', 'yellow', 'Sweet', '2 years', '<br>'),
        new fruit ('Watermelon', 'yellow', 'Sweet', '3 months', '<br>'),
        new fruit ('Guava', 'yellow', 'Sweet', '5 years', '<br>'),
        new fruit ('Orange', 'yellow', 'Sweet', '7 years', '<br>')
        ]
        
   
   

?>