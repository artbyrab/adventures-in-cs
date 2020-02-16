
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'BinaryTree.php';
require 'Node.php';
require 'Traverse.php';
?>

<?php
$tree = new BinaryTree();
$node = new Node(10);
$tree->setRootNode($node);
$node->setLeftChild(
    new Node(6)
);
$node->getLeftChild()->setLeftChild(
    new Node(3)
);
$node->getLeftChild()->setRightChild(
    new Node(8)
);

$node->setRightChild(
    new Node(12)
);
?>

<h1>Binary Tree in PHP</h1>
<p>The binary tree we are working with looks like the below</p>
<pre>
            10
        /       \
        6       12
    /       \
    3       8
</pre>

<h3>Below is the binary tree model object</h3>
<pre>
<?php print_r($tree); ?>
</pre>

<h3>Traverse in order results of the tree</h3>
<pre>
<?php print_r($tree->traverseInOrder($tree->getRootNode())); ?>
</pre>

<h3>Traverse pre order results of the tree</h3>
<pre>
<?php print_r($tree->traversePreOrder($tree->getRootNode())); ?>
</pre>

<h3>Traverse post order results of the tree</h3>
<pre>
<?php print_r($tree->traversePostOrder($tree->getRootNode())); ?>
</pre>

<h3>Adding a node to the tree with a value of 9</h3>

<pre>
<code>
$newNode = new Node(9);
$tree->insertPreOrder($tree->getRootNode(), $newNode);
</code>
</pre>

<?php
$newNode = new Node(9);
$tree->insertPreOrder($tree->getRootNode(), $newNode);
?>

<h3>The new node with a value of 9 has been inserted correctly</h3>
<pre>
<?php print_r($tree); ?>
</pre>




