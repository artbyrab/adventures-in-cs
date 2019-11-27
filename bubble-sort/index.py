# -*- coding: utf-8 -*-

class BubbleSort(object):
    """Bubble Sort 

    This is an example of a bubble sort implemented in Python.

    This will take a list of numbers and sort them by making multiple iterations
    over the list gradually moving smaller numbers to the left with each pass.

    """

    def __init__(self):
        """Init.

        Initialise the model and set any attributes and their default values.

        * List
            - The list containing the numbers to be sorted.
        TODO change this to list_iteration_count
        * list_iteration_count
            - A count of the number of passes we have had to make over the list
        TODO change this to list_items_shuffled_count
        * list_items_shuffled_count
            - A count of the number of list items moved over each list 
            iteration. When this is 0 we know that the sort has finished
        * completed 
            - Has the sort been completed? This will be set when the shuffle_
        """
        self.list = []
        self.list_iteration_count = 0
        self.list_items_shuffled_count = 0
        self.completed = False


    def sort(self):
        """Sort.

        Returns:
            Returns boolean True if successful.
        """

        self.display_starting_message()

        while self.completed == False:
            self.list_iteration_count += 1
            self.display_sort_list_message()
            self.sort_list()

            if self.list_items_shuffled_count == 0:
                self.completed = True
                
            self.list_items_shuffled_count = 0

        if self.completed == True:
            self.display_completed_message()
            return True
            
    def sort_list(self):
        """Sort List.

        This function will pass over the list and move any items one step to 
        the left if they are less than the next value.

        For example:
            - We have a list:
                - [5, 3, 2]
            - It will iterate over the list and compare the 5 > 3. Because the 
            3 is less it will swap them around to end up with:
                - [3, 5, 2]
            - It will then compare the 5 > 2. Because the 2 is less it will swap
            them around to end up with:
                - [3, 2, 5]
            
        With this function a number can only ever move one space to the left in
        one pass.
        """

        previous_item_index = False
        previous_item_value = None

        for item_index, item_value in enumerate(self.list):

            if previous_item_index != False and item_value < previous_item_value:
                self.display_list_item_shuffling_message(item_value, previous_item_value)
                self.list.insert(previous_item_index, self.list.pop(item_index))
                self.list_items_shuffled_count += 1    

            previous_item_index = item_index
            previous_item_value = item_value

    def reset_list_items_shuffled_count(self):
        """Reset list items shuffled count
        """

    def display_starting_message(self):
        """Display starting message."""
        print("Starting the bubble sort")
        print("-------------")


    def display_sort_list_message(self):
        """Display sort list message."""
        print("Doing a list sort: " + str(self.list))


    def display_completed_message(self):
        """Display completed message."""
        print("-------------")
        print("The array has been bubble sorted")
        print(" - It took " + str(self.list_iteration_count) + " pass overs")
        print(" - The sorted list: " + str(self.list))


    def display_list_item_shuffling_message(self, item_value, previous_item_value):
        """Display pass over message."""
        print(" - " + str(item_value) + " is less than " + str(previous_item_value) + " so shuffling them over")


bubble = BubbleSort()
bubble.list = [1,6,4,5,3,10,99,4]
bubble.sort()
