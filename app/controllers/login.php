<?php


class Login extends CI_Controller{


    function __construct()
    {
        parent::__construct();
        $this->load->model('usuario_model');
    }

	public function logar()
	{

		$usuario_model = new Usuario_model();
		$usuario = $usuario_model->findByParam(array("username" => $_POST['st_username']));

		if($usuario == "e_conn")
		{
			$erro = $usuario;
		}
		else if($usuario == null || $usuario->getPasswd() != $_POST['st_passwd'])
		{
			$erro = "e_pass";
		}
		else
		{
			$erro = "pass";
		}

		echo $erro;
	}
}
?>