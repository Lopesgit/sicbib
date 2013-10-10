<?php
/**
*	@package Sistema de Controle de Biblioteca
*	@author Renê Lopes
*	@version 2.0
*
*	Camada: Model
*	Diretório Pai: models
*
* 	Responsavel por gerenciar e persistir os dados do usuário
*/

namespace Entities;

/**
* @Entity
* @Table(name="Usuario")
*/
class Usuario
{
	/**
	* @Id
	* @Column(type="bigint", nullable=false)
	* @GeneratedValue(strategy="AUTO")
	*/
	private $id;

	/**
    * @Column(type="string", length=255, nullable=false)
    */
	private $user_nome;

	/**
    * @Column(type="date", nullable=false)
    */
	private $dtnasc;

	/**
    * @Column(type="string", length=32, unique=true, nullable=false)
    */
	private $username;

    /**
     * @Column(type="string", length=64, nullable=false)
     */
	private $passwd;


	/**
    * @Column(type="date", nullable=true)
    */
	private $ultimoacesso;

	/**
    * @OneToMany(targetEntity="Permissao", mappedBy="usuario")
    * @var permissoes[]
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
     * Gets the     * @Id
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
     * Sets the     * @Id
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
     * Gets the value of user_nome.
     *
     * @return mixed
     */
    public function getUser_nome()
    {
        return $this->user_nome;
    }

    /**
     * Sets the value of user_nome.
     *
     * @param mixed $user_nome the user_nome
     *
     * @return self
     */
    public function setUser_nome($user_nome)
    {
        $this->user_nome = $user_nome;

        return $this;
    }

    /**
     * Gets the value of dtnasc.
     *
     * @return mixed
     */
    public function getDtnasc()
    {
        return $this->dtnasc;
    }

    /**
     * Sets the value of dtnasc.
     *
     * @param mixed $dtnasc the dtnasc
     *
     * @return self
     */
    public function setDtnasc($dtnasc)
    {
        $this->dtnasc = $dtnasc;

        return $this;
    }

    /**
     * Gets the value of username.
     *
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Sets the value of username.
     *
     * @param mixed $username the username
     *
     * @return self
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Gets the value of passwd.
     *
     * @return mixed
     */
    public function getPasswd()
    {
        return $this->passwd;
    }

    /**
     * Sets the value of passwd.
     *
     * @param mixed $passwd the passwd
     *
     * @return self
     */
    public function setPasswd($passwd)
    {
        $this->passwd = $passwd;

        return $this;
    }

    /**
     * Gets the value of ultimoacesso.
     *
     * @return mixed
     */
    public function getUltimoacesso()
    {
        return $this->ultimoacesso;
    }

    /**
     * Sets the value of ultimoacesso.
     *
     * @param mixed $ultimoacesso the ultimoacesso
     *
     * @return self
     */
    public function setUltimoacesso($ultimoacesso)
    {
        $this->ultimoacesso = $ultimoacesso;

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
