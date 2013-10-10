<?php

class Usuario_model extends CI_Model{

	public $em;

	function __construct()
    {
        // Not required if you autoload the library
        //$this->load->library('doctrine');

        $this->em = $this->doctrine->em;
    }

	public function findByParam($user_info)
	{
		try
		{
			$rep = $this->em->getRepository('Entities\Usuario');
			$usuario = $rep->findOneBy($user_info);

			return $usuario;
		}
		catch(PDOException $e)
		{
			return "e_conn";
		}
	}

}