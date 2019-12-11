/**
 * Stack
 * 
 * This will implement the LIFO strategy, which stands for Last In First Out.
 * 
 * Therefore push will add an item to the top/end of the stack and pop will 
 * remove an item off the top/end of the stack.
 */
function Stack() {

    /**
     * Data stored in the stack
     */
    this.data = [];

    /**
     * Push
     * 
     * Add an item to the top/end of the stack.
     * 
     * @param {Number}
     */
    this.push = function($data) {
        this.data.push($data)
    }

    /** 
     * Pop
     * 
     * Remove an item off the top/end of the stack.
     */
    this.pop = function() {
        this.data.pop()
    }
}

let stack = new Stack();

stack.push(4);
stack.push(6);
stack.push(8);
console.log(stack);

stack.pop();

console.log(stack);