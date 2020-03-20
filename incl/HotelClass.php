    <?php 
    
    class Hotel {

        public $name, $price, $wifi, $pool, $bar, $spa, $buffet, $smoking, $parking;

        public function __construct($n0, $n1, $n2, $n3, $n4, $n5, $n6, $n7, $n8) {
            $this->name = $n0;
            $this->price = $n1;
            $this->wifi = $n2;
            $this->pool = $n3;
            $this->bar = $n4;
            $this->spa = $n5;
            $this->buffet = $n6;
            $this->smoking = $n7;
            $this->parking = $n8;

        }

        public function display_data() {
            echo $this->name;
            echo $this->price;
            echo $this->pool;
        }
        
            
        }
    ?>
