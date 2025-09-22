<?php

namespace controller;

use service\CasaService;


use template\UsuarioTemp;
use template\ITemplate;

class Casa{
    private ITemplate $template;
    public function __construct()
    {
        $this->template = new UsuarioTemp();
    }

    public function listarcasa(){
        $id= $_GET['id'];
        $service = new CasaService();
        $resultado = $service->listarCasa($id);
        

        $this->template->layout("\\public\\casa\\listarcasa.php", $resultado);
    }
    public function formulario()
    {
            

        $this->template->layout("\\public\\casa\\formcasa.php");
    }
    public function inserir()
    {
        
    $id = $_POST['id'];
    
    
    
    
    $bairro = $_POST["bairro"];
    $metros = $_POST["metros"];
    $comodos = $_POST["comodos"];
    $valor = $_POST["valor"];
   
    
    
    $service = new CasaService();
    $resultado = $service->inserir( $id, $bairro, $metros, $comodos, $valor);
    
    $this->template->layout("\\public\\casa\\listarcasa.php", $id);
    
    exit();
        
    }
}