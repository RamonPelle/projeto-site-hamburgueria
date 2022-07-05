<?php 
require_once "dados.php";
require_once "Hamburguer.php";


        class HamburguerDAO{

                private PDO $dados;


                public function __construct(){
                        $this->dados = dados::getConexao();
                }

                public function inserirHamburguer(Hamburguer $nome){
                   $sql = "insert into hamburgueres (nome, ingredientes, calorias, valor) values ('{$nome->getNome()}', 
                        '{$nome->getIngredientes()}','{$nome->getCalorias()}','{$nome->getValor()}');";
                        
                        return $this->dados->exec($sql);
                        
                }

                public function buscarHamburguer(int $id):array{
                        $sql = "select * from hamburgueres where id='" . $id . "';";
                        $stm = $this->dados->query($sql);
            
                        return $stm->fetch(PDO::FETCH_ASSOC);
                }


                public function buscarHamburgueres():array{
                        $sql = "select * from hamburgueres";
                        $stm = $this->dados->query($sql);
                        
                        return $stm->fetchAll(PDO::FETCH_ASSOC);
                }

                
            
                public function removerHamburguer(int $id):bool{
                                $sql = "delete from hamburgueres where id='{$id}';";
            
                        return $this->dados->exec($sql);
                }

                        public function alterarHamburguer(Hamburguer $nome):bool{
                                $sql = "update hamburgueres set"." nome='{$nome->getNome()}', ".
                                " valor='{$nome->getIngredientes()}', "." calorias='{$nome->getCalorias()}',"
                                ." ingredientes='{$nome->getValor()}'"." where id='{$nome->getId()}';";

                                return $this->dados->exec($sql);
                        }
        }
?>