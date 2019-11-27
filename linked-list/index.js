/**
 * Linked list
 * 
 * A class to build a linked list with functionality to perform basic 
 * operations.
 */
class LinkedList {

    /**
     * Constructor 
     */
    constructor() {
        this.head = null;
    }

    /** 
     * Set head.
     * 
     * @param {Object} node - An instance of the Node class.
     */
    setHead(node) {
        this.head = node;
    }

    /** 
     * Get head.
     * 
     * @returns {Object} The head node if set.
     */
    getHead() {
        return this.head;
    }

    /** 
     * Add node
     * 
     * @param {Object} node - An instance of the Node class.
     * @return {Object} 
     */
    addNode(node) {
        if (this.head === null) {
            this.setHead(node);
            return node;
        }
        if (this.head != null) {
            let current = this.getLastNode();
            current.next = node;
            return current;
        }
    }

    /** 
     * Remove a node
     * 
     * @param {Object} node - An instance of the Node class.
     * @return {boolean} A true value if the node is deleted.
     */
    removeNode(node) {
        let current = this.head;
        let previous = null;

        while (current) {
            if (current.value == node.value) {
                this.deleteNode(current, previous)
                return true;
            }
            if (current.next == null) {
                throw new Error("No node with the value: " + node.value + " exists.");
            }
                
            previous = current;
            current = current.next;
        }
    }

    /** 
     * Delete a node
     * 
     * This will delete a node and assign the deleted nodes next value to the 
     * previous node. Therefore you need to pass this 2 parameters.
     * 
     * @param {Object} current - The current node being deleted.
     * @param {Object} previous - The node previous to the current node.
     */
    deleteNode(current, previous = null) {
        if (current == this.head) {
            this.head = this.head.next;
        }
        if (previous != null) {
            previous.next = current.next;
        }
    }

    /** 
     * Get node by value
     * 
     * This will get a node object by it's value if it exists.
     * 
     * @param {integer} value.
     * @return {Object} The node.
     */
    getNodeByValue(value) {
    }

    /** 
     * Get last node
     * 
     * This will iterate over the list until it reaches a node with no 
     * populated next attribute. It will then return that node.
     * 
     * @return {Object} The last node in the list.
     */
    getLastNode() {
        let current = this.head;

        while(current.next != null) {
            current = current.next;
        }

        return current;
    }

    /** 
     * Get node count
     * 
     * @return {number} An integer count of the current number of nodes in the 
     * list.
     */
    getNodeCount() {
        let count = 0;
        let current = this.head;

        while (current) {
            count = count + 1;
            if (current.next == null) {
                break;
            } else {
                current = current.next;
            }
        }

        return count;
    }

    /** 
     * Get all values as array
     * 
     * @return {array} An array of values
     */
    getAllValuesAsArray() {
        let values = [];
        let current = this.head;

        while (current) {
            values.push(current.value);
            if (current.next == null) {
                break;
            } else {
                current = current.next;
            }
        }

        return values;
    }
}


/**
 * Node 
 * 
 * A single node that can be added to the LinkedList class.
 */
class Node {

    /**
     * Constructor
     * @param {integer} value 
     */
    constructor(value) {
      this.value = value;
      this.next = null;
    }
}

let nodeA = new Node(45);
let nodeB = new Node(95);
let nodeC = new Node(4);
let nodeD = new Node(9);
let nodeE = new Node(12);
let nodeF = new Node(76);
let nodeNotExist = new Node(99);

let linkedList = new LinkedList();
linkedList.setHead(nodeA);
linkedList.addNode(nodeB);
linkedList.addNode(nodeC);
linkedList.addNode(nodeD);
linkedList.addNode(nodeE);

console.log("All node values:")
console.log(linkedList.getAllValuesAsArray());
console.log("Node Count:");
console.log(linkedList.getNodeCount());
console.log("Removing node B:" + nodeB.value);
linkedList.removeNode(nodeB);
console.log(linkedList.getAllValuesAsArray());
console.log("Removing head node:" + nodeA.value);
linkedList.removeNode(nodeA);
console.log(linkedList.getAllValuesAsArray());
console.log("get the head node:")
console.log(linkedList.getHead());
console.log("Add new node F:" + nodeF.value);
linkedList.addNode(nodeF);
console.log(linkedList.getAllValuesAsArray());

