<?php

/**
 * Binary Tree
 * 
 * A Binary tree class.
 */
class BinaryTree {

    /**
     * @var object
     */
    private $rootNode = null;

    /** 
     * Construct
     */
    public function __construct()
    {
    }

    /**
     * Set root node
     * 
     * @param object $node
     */
    public function setRootNode($node)
    {
        $this->rootNode = $node;
    }

    /** 
     * Get root node
     * 
     * @return mixed
     */
    public function getRootNode()
    {
        return $this->rootNode;
    }

    /** 
     * Is the root node empty
     */
    public function isRootNodeEmpty()
    {
        if ($this->rootNode == null) {
            return true;
        }

        return false;
    }

    /**
     * Traverse the tree in order
     * 
     * This is the in-order method of traversal for a binary tree traversal 
     * known as In-order (LNR).
     */
    public function traverseInOrder($node) 
    {
        if ($node == null) {
            return $node;
        }

        $this->traverseInOrder($node->getLeftChild());
        echo $node->getValue() . "<br>";
        $this->traverseInOrder($node->getRightChild());
    }

    /**
     * Traverse the tree pre order
     */
    public function traversePreOrder($node)
    {
        if ($node == null) {
            return $node;
        }

        echo $node->getValue() . "<br>";
        $this->traversePreOrder($node->getLeftChild());
        $this->traversePreOrder($node->getRightChild());
    }

    /**
     * Traverse the tree post order
     */
    public function traversePostOrder($node)
    {
        if ($node == null) {
            return $node;
        }

        $this->traversePostOrder($node->getLeftChild());
        $this->traversePostOrder($node->getRightChild());
        echo $node->getValue() . "<br>";
    }

    /**
     * Insert a node into the tree using the post order method
     * 
     * This will go from the first node of the tree and check if the new nodes
     * value is > or < the current node. If it is > it checks the nodes left
     * child if it is > it checks the nodes right child
     * 
     * If at any point the left or the right child are null then that means they
     * are empty and we should insert our new node.
     * 
     * Depending on the value of the node we want to insert it based on 
     * whether the nodes value is higher or lower than the current node's value.
     * 
     * So if we have a tree that is already filled with 10, 6, 12 we would have
     * a tree that looks like:
     * 
     *              10
     *          /       \
     *          6       12
     * 
     * So if we are inserting the following: 24, 8 the tree would change like: 
     * 
     *              10
     *          /       \
     *          6       12
     *                     \
     *                      24 
     * 
     *              10
     *          /       \
     *          6       12
     *           \        \
     *             8        24 
     * 
     * So this needs to look through each of the nodes starting from the top,
     * check to see if it is greater or less than the node and then look for 
     * and empty space or check again.
     * 
     * @param object $node The starting node to insert from.
     * @param object $newNode The node that we are inserting in the tree.
     */
    public function insertPreOrder($node, $newNode)
    {
        if ($node == null) {
            return false;
        }

        if ($newNode->getValue() < $node->getValue()) {
            if ($node->getLeftChild() == null) {
                $node->addNode($newNode);
                return true;
            }

            $this->insertPreOrder($node->getLeftChild(), $newNode);
        }
        if ($newNode->getValue() > $node->getValue()) {
            if ($node->getRightChild() == null) {
                $node->addNode($newNode);
                return true;
            }

            $this->insertPreOrder($node->getRightChild(), $newNode);
        }
    }
}