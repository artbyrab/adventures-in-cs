<?php

/**
 * Node
 * 
 * A leaf node belonging to a binary tree.
 */
class Node {

    /**
     * @var integer
     */
    private $value = null;

    /**
     * @var object
     */
    private $leftChild = null;

    /**
     * @var object
     */
    private $rightChild = null;

    /**
     * Construct
     * 
     * @param integer $value
     * @return object
     */
    public function __construct($value = null)
    {
        if ($value !== null) {
            $this->value = $value;
        }

        return $this;
    }

    /** 
     * Set value
     * 
     * @param integer 
     */
    public function setValue($value)
    {
        $this->value = $value;
    }

    /**
     * Get value
     * 
     * @return integer 
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Has a child node?
     * 
     * @return boolean
     */
    public function hasChild()
    {
        if ($this->leftChild !== null OR $this->rightChild !== null) {
            return true;
        }

        return false;
    }

    /**
     * Is empty
     * 
     * @return boolean
     */
    public function isEmpty()
    {
        if ($this->leftChild !== null OR $this->rightChild !== null) {
            return false;
        }
        return true;
    }

    /**
     * Is full?
     * 
     * Are both child nodes populated?
     * 
     * @return boolean
     */
    public function isFull()
    {
        if ($this->leftChild !== null AND $this->rightChild !== null) {
            return true;
        }

        return false;
    }

    /**
     * Add node
     * 
     * @param object $node;
     */
    public function addNode($node)
    {
        if ($this->leftChild == null) {
            $this->setLeftChild($node);
            return $this->leftChild;
        }

        if ($this->rightChild == null) {
            $this->setRightChild($node);
            return $this->rightChild;
        }

        return false;
    }

    /** 
     * Set left child node 
     *
     */
    public function setLeftChild($node)
    {
        $this->leftChild = $node;
    }

    /**
     * Get the left child node
     * 
     * @return mixed
     */
    public function getLeftChild()
    {
        return $this->leftChild;
    }

    /** 
     * Set right child node 
     *
     */
    public function setRightChild($node)
    {
        $this->rightChild = $node;
    }

    /**
     * Get the right child node
     * 
     * @return mixed
     */
    public function getRightChild()
    {
        return $this->rightChild;
    }
}