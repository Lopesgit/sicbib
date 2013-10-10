<?php

use Doctrine\Common\Collections\ArrayCollection;

class Menu_model extends CI_Model{

    private $em;

    private $menus;
    private $submenus;
    private $submenus2;
    private $usuario;


    public function __construct()
    {
        // Not required if you autoload the library
        //$this->load->library('doctrine');

        $this->em = $this->doctrine->em;
        $this->menus = new ArrayCollection();
        $this->submenus = new ArrayCollection();
        $this->submenus2 = new ArrayCollection();
    }

    public function listPermissoes(){

            $permrep = $this->em->getRepository('Entities\Permissao');
            $permissoes = $permrep->findBy(array('usuario' => $this->usuario));
            $this->em->flush();

            return $permissoes;
    }

    public function listFuncionalidades(){

            $funcionalidades = null;

            $permissoes = $this->listPermissoes();

            foreach ($permissoes as $permissao) {
                    $funcionalidades[] = $permissao->getFuncionalidade();
            }

            return $funcionalidades;
    }

    public function montaMenuPrincipal() {

            $funcionalidades = $this->listFuncionalidades();
            
            if($funcionalidades != null){
                foreach ($funcionalidades as $funcionalidade) {

                if($funcionalidade->getMenu() != null && 
                        !in_array($funcionalidade->getMenu(), $this->menus->toArray()))
                        $this->menus[] = $funcionalidade->getMenu();

                if($funcionalidade->getSubmenu() != null && 
                        !in_array($funcionalidade->getSubmenu(), $this->submenus->toArray()))
                        $this->submenus[] = $funcionalidade->getSubmenu();

                if($funcionalidade->getSubmenu2() != null && 
                        !in_array($funcionalidade->getSubmenu2(), $this->submenus2->toArray()))
                        $this->submenus2[] = $funcionalidade->getSubmenu2();

                }
            }
    }

    public function getUsuario() {
        return $this->usuario;
    }

    public function setUsuario($usuario) {
        $this->usuario = $usuario;
    }

    public function getMenus() {
        return $this->menus;
    }

    public function setMenus($menus) {
        $this->menus = $menus;
    }

    public function getSubmenus() {
        return $this->submenus;
    }

    public function setSubmenus($submenus) {
        $this->submenus = $submenus;
    }

    public function getSubmenus2() {
        return $this->submenus2;
    }

    public function setSubmenus2($submenus2) {
        $this->submenus2 = $submenus2;
    }

}