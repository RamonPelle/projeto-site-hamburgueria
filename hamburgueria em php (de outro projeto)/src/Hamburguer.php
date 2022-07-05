<?php 

    class Hamburguer{
        private int $id;
        private string $nome;
        private string $ingredientes;
        private int $calorias;
        private int $valor;       
        

        public function __construct(string $nome, string $ingredientes, int $calorias, int $valor){
            $this->id = 0;

            $this->nome = $nome; 
            $this->ingredientes = $ingredientes;
            $this->calorias = $calorias;
            $this->valor = $valor;
            
        }


        public function getId():int{
            return $this->id;
        }


        public function setId(int $id){
                $this->id = $id;
        }

        public function getNome():string{
                return $this->nome;
        }

        public function setNome(string $nome){
                $this->nome = $nome;
        }

        
        public function getvalor():int{
                return $this->valor;
        }

                public function setvalor(int $valor){
                $this->valor = $valor;
        }

        
        public function getcalorias():int{
                return $this->calorias;
        }
        public function setcalorias(int $calorias){
                $this->calorias = $calorias;
        }

    

        public function getIngredientes():string{
                return $this->ingredientes;
        }
        public function setIngredientes(string $ingredientes){
                $this->ingredientes = $ingredientes;
        }


        
}


?>