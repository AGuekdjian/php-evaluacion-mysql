<?php

class Colores extends ModeloGenerico
{
    protected $id_color;
    protected $nombre_color;

    public function __construct($propiedades = null)
    {
        parent::__construct("Colores", Colores::class, $propiedades);
    }

    function getIdColor()
    {
        return $this->id_color;
    }

    function getColor()
    {
        return $this->nombre_color;
    }

    function setColor($nombre_color)
    {
        $this->nombre_color = $nombre_color;
    }
}
