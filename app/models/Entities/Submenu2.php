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
* @Table(name="Submenu2")
*/
class Submenu2
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
    * @Column(type="string", length=50, nullable=false)
    */
	private $url;
        
        /**
    * @Column(type="integer", length=1, nullable=false)
    */
	private $ordem;

	/**
    * @ManyToOne(targetEntity="Submenu", inversedBy="subMenus2")
    **/
	private $parent;

	/**
    * @OneToMany(targetEntity="Funcionalidade", mappedBy="submenu2")
    * @var Funcionalidades[]
    **/
	protected $funcionalidades;

	public function __construct()
	{
		$this->funcionalidades = new ArrayCollection();
	}

	public function addFuncionalidade($funcionalidade)
    {
        $this->funcionalidades[] = $funcionalidade;
    }


	/**
	* Getters e Setters
	*/

	/**
     * Gets the 	* @Id
	* @Column(type="bigint", nullable=false)
	* @GeneratedValue(strategy="AUTO").
     *
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets the 	* @Id
	* @Column(type="bigint", nullable=false)
	* @GeneratedValue(strategy="AUTO").
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
     * Gets the value of parent.
     *
     * @return mixed
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Sets the value of parent.
     *
     * @param mixed $parent the parent
     *
     * @return self
     */
    public function setParent($parent)
    {
        $parent->addSubmenu($this);
        $this->parent = $parent;

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
