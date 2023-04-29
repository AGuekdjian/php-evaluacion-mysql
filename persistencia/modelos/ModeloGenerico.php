<?php

class ModeloGenerico extends Crud
{
    private $className;
    private $excluir = ["className", "tabla", "conexion", "wheres", "sql", "excluir"];

    function __construct($tabla, $className, $propiedades = null)
    {
        parent::__construct($tabla);
        $this->className = $className;

        if (empty($propiedades)) {
            return;
        }

        foreach ($propiedades as $llave => $valor) {
            $this->{$llave} = $valor;
        }
    }

    protected function obtenerAtributos()
    {
        $variables = get_class_vars($this->className);
        $atributos = [];
        $max = count($variables);
        foreach ($variables as $llave => $valor) {
            if (!in_array($llave, $this->excluir)) {
                $atributos[] = $llave;
            }
        }
        return $atributos;
    }
}
