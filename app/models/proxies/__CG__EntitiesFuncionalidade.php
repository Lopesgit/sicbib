<?php

namespace DoctrineProxies\__CG__\Entities;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Funcionalidade extends \Entities\Funcionalidade implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array();



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return array('__isInitialized__', 'id', 'menu_nome', 'menu', 'submenu', 'submenu2', 'permissoes');
        }

        return array('__isInitialized__', 'id', 'menu_nome', 'menu', 'submenu', 'submenu2', 'permissoes');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Funcionalidade $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function addPermissao($permissao)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addPermissao', array($permissao));

        return parent::addPermissao($permissao);
    }

    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', array());

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setId($id)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setId', array($id));

        return parent::setId($id);
    }

    /**
     * {@inheritDoc}
     */
    public function getMenu_nome()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMenu_nome', array());

        return parent::getMenu_nome();
    }

    /**
     * {@inheritDoc}
     */
    public function setMenu_nome($menu_nome)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMenu_nome', array($menu_nome));

        return parent::setMenu_nome($menu_nome);
    }

    /**
     * {@inheritDoc}
     */
    public function getMenu()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMenu', array());

        return parent::getMenu();
    }

    /**
     * {@inheritDoc}
     */
    public function setMenu($menu)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMenu', array($menu));

        return parent::setMenu($menu);
    }

    /**
     * {@inheritDoc}
     */
    public function getSubmenu()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSubmenu', array());

        return parent::getSubmenu();
    }

    /**
     * {@inheritDoc}
     */
    public function setSubmenu($submenu)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSubmenu', array($submenu));

        return parent::setSubmenu($submenu);
    }

    /**
     * {@inheritDoc}
     */
    public function getSubmenu2()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSubmenu2', array());

        return parent::getSubmenu2();
    }

    /**
     * {@inheritDoc}
     */
    public function setSubmenu2($submenu2)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSubmenu2', array($submenu2));

        return parent::setSubmenu2($submenu2);
    }

    /**
     * {@inheritDoc}
     */
    public function getPermissoes()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPermissoes', array());

        return parent::getPermissoes();
    }

    /**
     * {@inheritDoc}
     */
    public function setPermissoes($permissoes)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPermissoes', array($permissoes));

        return parent::setPermissoes($permissoes);
    }

}
