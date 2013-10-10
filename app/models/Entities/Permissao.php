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
* @Table(name="Permissao")
*/
class Permissao
{
	/**
	* @Id @Column(type="bigint", nullable=false) @GeneratedValue(strategy="AUTO")
	*/
	private $id;

	/**
    * @ManyToOne(targetEntity="Funcionalidade", inversedBy="permissoes")
     **/
	protected $funcionalidade;

	/**
    * @ManyToOne(targetEntity="Usuario", inversedBy="permissoes")
     **/
	protected $usuario;

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
     * Gets the value of funcionalidade.
     *
     * @return mixed
     */
    public function getFuncionalidade()
    {
        return $this->funcionalidade;
    }

    /**
     * Sets the value of funcionalidade.
     *
     * @param mixed $funcionalidade the funcionalidade
     *
     * @return self
     */
    public function setFuncionalidade($funcionalidade)
    {
        $funcionalidade->addPermissao($this);
        $this->funcionalidade = $funcionalidade;

        return $this;
    }

    /**
     * Gets the value of usuario.
     *
     * @return mixed
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * Sets the value of usuario.
     *
     * @param mixed $usuario the usuario
     *
     * @return self
     */
    public function setUsuario($usuario)
    {
        $usuario->addPermissao($this);
        $this->usuario = $usuario;

        return $this;
    }
}