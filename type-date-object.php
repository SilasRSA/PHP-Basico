
<?php
    
    /*
        Classes: um modelo para obejtos
        Objeto: uma instacia de uma classe

        Quando obejetos sao criados eles
        eles herdam todas as propriedades e
        comportamentos da classe, mas cada
        objeto tera valor diferente para 
        suas propriedades.
    */

    /*
        Vamos criar nossa primeira classe Car
        ela tera as propriedades:
            - cor do veiculo
            - modelo 
            - ano de fabricacao
    */    

    class Car {
        private $color;
        private $model;
        private $anoFabricacao;
   
        public function Car ($color, $model, $anoFabricacao){
            $this->color = $color;
            $this->model = $model;
            $this->anoFabricacao = $anoFabricacao;
        }

        public function myCarMessage(){
            return "My Car is a " . $this->color . " " . $this->model . " " . $this->anoFabricacao. "!";
        }
    }

    $myCar = new Car("Black", "Toyota SW4", "2025");
    echo $myCar -> myCarMessage();
    
?>