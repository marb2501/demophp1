<?php
    class Curso {
        public $nombre;
        public $duracion;
        public $costo;
        public $moneda;
        public $profesor;
        public $disponible;

        public function imprimirInfo(){
          return "Quien imparte el curso es ".$this->profesor. " el curso ".$this->nombre. "<br />".$this->validaDisponible()."<br />";
        }

        public function validaDisponible(){
          if ($this->disponible==true){
            return "Disponible";
          }else{
            return "No disponible";
          }
        }

    }

$php = new Curso();
$php->nombre="POO en PHP";
$php->duracion="3 SESIONES";
$php->moneda="USD";
$php->profesor="Yesi Days";
$php->costo=10;
$php->disponible=true;
echo $php->imprimirInfo();


$php = new Curso();
$php->nombre="Javascript desde Cero";
$php->duracion="6 SESIONES";
$php->moneda="USD";
$php->profesor="Alvaro Felipe";
$php->costo=0;
$php->disponible=true;

echo $php->imprimirInfo();


 ?>
