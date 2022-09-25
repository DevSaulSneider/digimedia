<?php

class Controlador
{
	
	function __construct()
	{
		//Instanciamos la clase vista
        $this->vista = new Vista();
	}

	//Funcion mostrarVista del Controlador
    public function mostrarVista($vista)
    {
		//Invocamos al metodo mostrarVista de la clase Vista
        $this->vista->mostrarVista($vista);
    }

}

?>