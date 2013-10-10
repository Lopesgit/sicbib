<?php
/**
 *
 * Responsâ¡vel por gerenciar o fluxo de dados entre
 * a camada de modelo e a de visualizaÂâ¹o
 *
 * Camada - Controladores ou Controllers
 * Diretârio Pai - controllers
 * Arquivo - TelefoneController.php
 *
 * @author DigitalDev
 * @version 0.1.0
 *
 */
class Inicial extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
                header ('Content-type: text/html; charset=UTF-8');
		$this->load->model('usuario_model');
                $this->load->model('menu_model');
	}

	public function menu()
	{
		$usuario_model = new Usuario_model();
		$usuario = $usuario_model->findByParam(array("id" => $_POST['user_id']));

		$menu_model = new Menu_model();
                $menu_model->setUsuario($usuario);
                $menu_model->montaMenuPrincipal();

		$menus = $menu_model->getMenus();
                $submenus = $menu_model->getSubmenus();
                $submenus2 = $menu_model->getSubmenus2();
                
                $menus_atr = null;
                $submenus_atr = null;
                $submenus2_atr = null;
               
                foreach ($menus as $k => $menu){
                    $menus_atr[$k]['id'] = $menu->getId();
                    $menus_atr[$k]['nome'] = $menu->getNome();
                    $menus_atr[$k]['url'] = $menu->getUrl();
                    $menus_atr[$k]['has_sub'] = $menu->getHas_sub();
                }
                
                foreach ($submenus as $k => $submenu){
                    $submenus_atr[$k]['id'] = $submenu->getId();
                    $submenus_atr[$k]['nome'] = $submenu->getNome();
                    $submenus_atr[$k]['menu_id'] = $submenu->getMenu()->getId();
                    $submenus_atr[$k]['url'] = $submenu->getUrl();
                    $submenus_atr[$k]['has_sub'] = $submenu->getHas_sub();                                       
                }
                
                foreach ($submenus2 as $k => $submenu2){
                    $submenus2_atr[$k]['id'] = $submenu2->getId();
                    $submenus2_atr[$k]['nome'] = $submenu2->getNome();
                    $submenus2_atr[$k]['parent_id'] = $submenu2->getParent()->getId();
                    $submenus2_atr[$k]['url'] = $submenu2->getUrl();                                 
                }
                
                $content['menus'] = $menus_atr;
                $content['submenus'] = $submenus_atr;
                $content['submenus2'] = $submenus2_atr;
                echo json_encode($content);
	}

	public function view(){

		$usuario_model = new Usuario_model();
		$usuario = $usuario_model->findByParam(array("username" => $_POST['st_username']));

		$user = array('user_id' => $usuario->getId(),
			      'user_nome' => $usuario->getUser_nome());

		$data['user'] =  $user;

		$this->load->view('templates/header');
		$this->load->view('pages/menu_inicial', $data);
		$this->load->view('templates/footer');
	}
        
        public function loadFuncionality(){
            
            if(file_exists(getcwd().'/app/views/pages/'.$_POST['page'].'.php')){
               $this->load->view('pages/'.$_POST['page'].'.php'); 
            } else {
               $this->load->view('pages/not_found.php');
            }   
        
        }
   
}

