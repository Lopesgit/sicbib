<?php

namespace Proxies\__CG__\Entities;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class Submenu2 extends \Entities\Submenu2 implements \Doctrine\ORM\Proxy\Proxy
{
    private $_entityPersister;
    private $_identifier;
    public $__isInitialized__ = false;
    public function __construct($entityPersister, $identifier)
    {
        $this->_entityPersister = $entityPersister;
        $this->_identifier = $identifier;
    }
    /** @private */
    public function __load()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;

            if (method_exists($this, "__wakeup")) {
                // call this after __isInitialized__to avoid infinite recursion
                // but before loading to emulate what ClassMetadata::newInstance()
                // provides.
                $this->__wakeup();
            }

            if ($this->_entityPersister->load($this->_identifier, $this) === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            unset($this->_entityPersister, $this->_identifier);
        }
    }

    /** @private */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    
    public function addFuncionalidade($funcionalidade)
    {
        $this->__load();
        return parent::addFuncionalidade($funcionalidade);
    }

    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return $this->_identifier["id"];
        }
        $this->__load();
        return parent::getId();
    }

    public function setId($id)
    {
        $this->__load();
        return parent::setId($id);
    }

    public function getNome()
    {
        $this->__load();
        return parent::getNome();
    }

    public function setNome($nome)
    {
        $this->__load();
        return parent::setNome($nome);
    }

    public function getUrl()
    {
        $this->__load();
        return parent::getUrl();
    }

    public function setUrl($url)
    {
        $this->__load();
        return parent::setUrl($url);
    }

    public function getParent()
    {
        $this->__load();
        return parent::getParent();
    }

    public function setParent($parent)
    {
        $this->__load();
        return parent::setParent($parent);
    }

    public function getFuncionalidades()
    {
        $this->__load();
        return parent::getFuncionalidades();
    }

    public function setFuncionalidades($funcionalidades)
    {
        $this->__load();
        return parent::setFuncionalidades($funcionalidades);
    }

    public function getOrdem()
    {
        $this->__load();
        return parent::getOrdem();
    }

    public function setOrdem($ordem)
    {
        $this->__load();
        return parent::setOrdem($ordem);
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'nome', 'url', 'ordem', 'parent', 'funcionalidades');
    }

    public function __clone()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;
            $class = $this->_entityPersister->getClassMetadata();
            $original = $this->_entityPersister->load($this->_identifier);
            if ($original === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            foreach ($class->reflFields as $field => $reflProperty) {
                $reflProperty->setValue($this, $reflProperty->getValue($original));
            }
            unset($this->_entityPersister, $this->_identifier);
        }
        
    }
}