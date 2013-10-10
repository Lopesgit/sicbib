<?php
/**
*	@package Sistema de Controle de Biblioteca
*	@author Renê Lopes
*	@version 2.0
*
*	Camada: Model
*	Diretório Pai: models
*
* 	Responsavel por gerenciar e persistir os dados do menu
*/

namespace Entities;

/**
* @Entity
* @Table(name="Funcionalidade")
*/
class Funcionalidade
{
	/**
	* @Id @Column(type="bigint", nullable=false) @GeneratedValue(strategy="AUTO")
	*/
	private $id;

	/**
    * @Column(type="string", length=100, nullable=false)
    */
	private $menu_nome;

	/**
    * @ManyToOne(targetEntity="Menu", inversedBy="funcionalidades")
     **/
	protected $menu;

	/**
    * @ManyToOne(targetEntity="Submenu", inversedBy="funcionalidades")
     **/
	protected $submenu;

	/**
    * @ManyToOne(targetEntity="Submenu2", inversedBy="funcionalidades")
     **/
	protected $submenu2;

	/**
    * @OneToMany(targetEntity="Permissao", mappedBy="funcionalidade")
    * @var Permissoes[]
    **/
	protected $permissoes;

	public function __construct()
	{
		$this->permissoes = new ArrayCollection();
	}

	public function addPermissao($permissao)
    {
        $this->permissoes[] = $permissao;
    }


	/**
	* Getters e Setters
	*/

    /**
     * Gets the 	* @Id @Column(type="bigint", nullable=false) @GeneratedValue(strategy="AUTO").
     *
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets the 	* @Id @Column(type="bigint", nullable=false) @GeneratedValue(strategy="AUTO").
     *
     * @param mixed $id the id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Gets the value of menu_nome.
     *
     * @return mixed
     */
    public function getMenu_nome()
    {
        return $this->menu_nome;
    }

    /**
     * Sets the value of menu_nome.
     *
     * @param mixed $menu_nome the menu_nome
     *
     * @return self
     */
    public function setMenu_nome($menu_nome)
    {
        $this->menu_nome = $menu_nome;

        return $this;
    }

    /**
     * Gets the value of menu.
     *
     * @return mixed
     */
    public function getMenu()
    {
        return $this->menu;
    }

    /**
     * Sets the value of menu.
     *
     * @param mixed $menu the menu
     *
     * @return self
     */
    public function setMenu($menu)
    {
        $menu->addFuncionalidade($this);
        $this->menu = $menu;

        return $this;
    }

    /**
     * Gets the value of submenu.
     *
     * @return mixed
     */
    public function getSubmenu()
    {
        return $this->submenu;
    }

    /**
     * Sets the value of submenu.
     *
     * @param mixed $submenu the submenu
     *
     * @return selftradutor
     */
    public function setSubmenu($submenu)
    {
        $submenu->addFuncionalidade($this);
        $this->submenu = $submenu;

        return $this;
    }

    /**
     * Gets the value of submenu2.
     *
     * @return mixed
     */
    public function getSubmenu2()
    {
        return $this->submenu2;
    }

    /**
     * Sets the value of submenu2.
     *
     * @param mixed $submenu2 the submenu2
     *
     * @return self
     */
    public function setSubmenu2($submenu2)
    {
        $submenu2->addFuncionalidade($this);
        $this->submenu2 = $submenu2;

        return $this;
    }


    /**
     * Gets the value of permissoes.
     *
     * @return mixed
     */
    public function getPermissoes()
    {
        return $this->permissoes;
    }


    /**
     * Sets the value of permissoes.
     *
     * @param mixed $permissoes the permissoes
     *
     * @return self
     */
    public function setPermissoes($permissoes)
    {
        $this->permissoes = $permissoes;

        return $this;
    }
}