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
* @Table(name="Menu")
*/
class Menu
{
	/**
	* @Id @Column(type="bigint", nullable=false) @GeneratedValue(strategy="AUTO")
	*/
	private $id;

	/**
    * @Column(type="string", length=100, nullable=false)
    */
	private $nome;

	/**
    * @Column(type="boolean", length=1, nullable=false)
    */
	private $has_sub;

	/**
    * @Column(type="string", length=50, nullable=false)
    */
	private $url;
        
    	/**
    * @Column(type="integer", length=1, nullable=false)
    */
	private $ordem;

	/**
    * @OneToMany(targetEntity="Submenu", mappedBy="menu")
    * @var Submenus[]
    **/
	protected $subMenus;

	/**
    * @OneToMany(targetEntity="Funcionalidade", mappedBy="menu")
    * @var Funcionalidades[]
    **/
	protected $funcionalidades;

	public function __construct()
	{
		$this->subMenus = new ArrayCollection();
		$this->funcionalidades = new ArrayCollection();
	}

	public function addSubmenu($submenu)
    {
        $this->subMenus[] = $submenu;
    }

    public function addFuncionalidade($funcionalidade)
    {
        $this->funcionalidades[] = $funcionalidade;
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
     * Gets the value of nome.
     *
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Sets the value of nome.
     *
     * @param mixed $nome the nome
     *
     * @return self
     */
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Gets the value of has_sub.
     *
     * @return mixed
     */
    public function getHas_sub()
    {
        return $this->has_sub;
    }

    /**
     * Sets the value of have_sub.
     *
     * @param mixed $has_sub the has_sub
     *
     * @return self
     */
    public function setHas_sub($has_sub)
    {
        $this->has_sub = $has_sub;

        return $this;
    }

    /**
     * Gets the value of url.
     *
     * @return mixed
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Sets the value of url.
     *
     * @param mixed $url the url
     *
     * @return self
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Gets the value of subMenus.
     *
     * @return mixed
     */
    public function getSubMenus()
    {
        return $this->subMenus;
    }

    /**
     * Sets the value of subMenus.
     *
     * @param mixed $subMenus the subMenus
     *
     * @return self
     */
    public function setSubMenus($subMenus)
    {
        $this->subMenus = $subMenus;

        return $this;
    }

    /**
     * Gets the value of funcionalidades.
     *
     * @return mixed
     */
    public function getFuncionalidades()
    {
        return $this->funcionalidades;
    }

    /**
     * Sets the value of funcionalidades.
     *
     * @param mixed $funcionalidades the funcionalidades
     *
     * @return self
     */
    public function setFuncionalidades($funcionalidades)
    {
        $this->funcionalidades = $funcionalidades;

        return $this;
    }
    
     public function getOrdem() {
        return $this->ordem;
    }

    public function setOrdem($ordem) {
        $this->ordem = $ordem;
    }
}
