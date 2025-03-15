# def reverse_number(num):
#     # Convert the integer to a string before reversing
#     reverse = str(num)[::-1]  # Reverse the string representation of the number
    
#     # Convert the reversed string back to an integer
#     return int(reverse)

# # Example usage:
# print(reverse_number(1223))   # Output: 3221
# print(reverse_number(987654321))  # Output: 123456789
# print(reverse_number(-123))  # Output: -321 (Handles negative numbers)

#
# AI: Certainly!
# You can create a function that takes in a number and returns its reverse.
# Here’s how you can do it:
#

def reverse_number(num):
  # Reverse the number
  reverse = str(num)[::-1]
  # Return the number
  return reverse

## Example usage:
print(reverse_number(1223)) # Output: 3221
print(reverse_number(987654321)) # Output: 123456789
