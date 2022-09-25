<?php class Marca extends Controlador
{
    function __construct()
    {
        parent::__construct();
    }
    public function renderizar($vista = "pages/marca")
    {
        $this->mostrarVista($vista);
    }
}
