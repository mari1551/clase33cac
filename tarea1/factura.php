<?php
class Factura{
    private $num_factura;
    private $fec_emision;
    private $fec_vencimiento;
    private $num_cliente;
    private $monto_factura;
    private $tipo_servicio;

    public function setNumFactura($num){
        $this->num_factura=$num;
    }

    public function setFecEmision($fecE){
        $this->fec_emision=$fecE;
    }
    public function setFecVencimiento($fecV){
        $this->fec_vencimiento=$fecV;
    }

    public function setNumCliente($num){
        $this->num_cliente=$num;
    }

    public function setMonto($monto){
        $this->monto_factura=$monto;
    }
    public function setTipo($tipo){
        $this->tipo_servicio=$tipo;
    }


    public function getNumFactura(){
        return $this->num_factura;
    }

    public function getFecEmision(){
        return $this->fec_emision;
    }
    public function getFecVencimiento(){
        return $this->fec_vencimiento;
    }

    public function getNumCliente(){
        return $this->num_cliente;
    }

    public function getMonto(){
        return $this->monto_factura;
    }
    public function getTipo(){
        return $this->tipo_servicio;
    }

}
?>