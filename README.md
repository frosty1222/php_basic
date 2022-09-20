1.php introduction
   + PHP is an acronym for "PHP: Hypertext Preprocessor"
   + PHP is a widely-used, open source scripting language
   + PHP scripts are executed on the server
   + PHP is free to download and use


-PHP is an amazing and popular language!
+It is powerful enough to be at the core of the biggest blogging system on the web (WordPress)!
+It is deep enough to run large social networks!
+It is also easy enough to be a beginner's first server side language!
-What is a PHP File?

   + PHP files can contain text, HTML, CSS, JavaScript, and   + PHP code
   + PHP code is executed on the server, and the result is returned to the browser as plain HTML
   + PHP files have extension ".php"
   + plain: thuần thúy
What Can PHP Do?

    + PHP can generate dynamic page content
    + PHP can create, open, read, write, delete, and close files on the server
    + PHP can collect form data
    + PHP can send and receive cookies
    + PHP can add, delete, modify data in your database
    + PHP can be used to control user-access
    + PHP can encrypt data
+dynamic page: trang động
-With PHP you are not limited to output HTML. You can output images, PDF files, and even Flash movies. You can also output any text, such as XHTML and XML.
Why PHP?

    + PHP runs on various platforms (Windows, Linux, Unix, Mac OS X, etc.)
    + PHP is compatible with almost all servers used today (Apache, IIS, etc.)
    + PHP supports a wide range of databases
    + PHP is free. Download it from the official PHP resource: www.php.net
    + PHP is easy to learn and runs efficiently on the server side
----------------------------***********************************---------------------------------------
2.PHP syntax
Basic PHP Syntax
A PHP script can be placed anywhere in the document.
A PHP script starts with <?php and ends with ?>:

<?php
// PHP code goes here
?> 

+The default file extension for PHP files is ".php".
+A PHP file normally contains HTML tags, and some PHP scripting code.
+Below, we have an example of a simple PHP file, with a PHP script that uses a built-in PHP function "echo" to output the text "Hello World!" on a web page:

<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>

<?php
echo "Hello World!";
?>

</body>
</html> 

+PHP Case Sensitivity: Phân biệt chữ hoa chữ thường

+In PHP, keywords (e.g. if, else, while, echo, etc.), classes, functions, and user-defined functions are not case-sensitive.

+In the example below, all three echo statements below are equal and legal:
Example:
<!DOCTYPE html>
<html>
<body>

<?php
ECHO "Hello World!<br>";
echo "Hello World!<br>";
EcHo "Hello World!<br>";
?>

</body>
</html> 

3.PHP Data Types

Variables can store data of different types, and different data types can do different things.

PHP supports the following data types:

    + String
    + Integer
    + Float (floating point numbers - also called double)
    + Boolean
    + Array
    + Object
    + NULL
    + Resource

3.1 PHP String

A string is a sequence of characters, like "Hello world!".

A string can be any text inside quotes. You can use single or double quotes:

Example:

<?php
$x = "Hello world!";
$y = 'Hello world!';

echo $x;
echo "<br>";
echo $y;
?> 

3.2 PHP Integer

An integer data type is a non-decimal number between -2,147,483,648 and 2,147,483,647.

Rules for integers:

    + An integer must have at least one digit
    + An integer must not have a decimal point
    + An integer can be either positive or negative
    + Integers can be specified in: decimal (base 10), hexadecimal (base 16), octal (base 8), or binary (base 2) notation

In the following example $x is an integer. The PHP var_dump() function returns the data type and value:
Example:
<?php
$x = 5985;
var_dump($x);
?> 

3.3 PHP Float

A float (floating point number) is a number with a decimal point or a number in exponential form.

In the following example $x is a float. The PHP var_dump() function returns the data type and value:
Example:
<?php
$x = 10.365;
var_dump($x);
?> 

3.4 PHP Boolean

A Boolean represents two possible states: TRUE or FALSE.
$x = true;
$y = false;

Booleans are often used in conditional testing.

3.5 PHP Array

An array stores multiple values in one single variable.

In the following example $cars is an array. The PHP var_dump() function returns the data type and value:
Example:
<?php
$cars = array("Volvo","BMW","Toyota");
var_dump($cars);
?>


3.6 PHP Object

Classes and objects are the two main aspects of object-oriented programming.

A class is a template for objects, and an object is an instance of a class.

When the individual objects are created, they inherit all the properties and behaviors from the class, but each object will have different values for the properties.

Let's assume we have a class named Car. A Car can have properties like model, color, etc. We can define variables like $model, $color, and so on, to hold the values of these properties.

When the individual objects (Volvo, BMW, Toyota, etc.) are created, they inherit all the properties and behaviors from the class, but each object will have different values for the properties.

If you create a __construct() function, PHP will automatically call this function when you create an object from a class.
Example:
<?php
class Car {
  public $color;
  public $model;
  public function __construct($color, $model) {
    $this->color = $color;
    $this->model = $model;
  }
  public function message() {
    return "My car is a " . $this->color . " " . $this->model . "!";
  }
}

$myCar = new Car("black", "Volvo");
echo $myCar -> message();
echo "<br>";
$myCar = new Car("red", "Toyota");
echo $myCar -> message();
?> 

3.7 PHP NULL Value

Null is a special data type which can have only one value: NULL.

A variable of data type NULL is a variable that has no value assigned to it.

Tip: If a variable is created without a value, it is automatically assigned a value of NULL.

Variables can also be emptied by setting the value to NULL:
Example:
<?php
$x = "Hello world!";
$x = null;
var_dump($x);
?> 

4.PHP CONSTANTS

+ A constant is an identifier (name) for a simple value. The value cannot be changed during the script.

+ A valid constant name starts with a letter or underscore (no $ sign before the constant name).

Note: Unlike variables, constants are automatically global across the entire script.

Create a PHP Constant

To create a constant, use the define() function.
Syntax
define(name, value, case-insensitive)

Parameters:

name: Specifies the name of the constant
value: Specifies the value of the constant
case-insensitive: Specifies whether the constant name should be case-insensitive. Default is false

Example:

Create a constant with a case-sensitive name:
<?php
define("GREETING", "Welcome to W3Schools.com!");
echo GREETING;
?> 


Example:

Create a constant with a case-insensitive name:
<?php
define("GREETING", "Welcome to W3Schools.com!", true);
echo greeting;
?> 

PHP Constant Arrays

In PHP7, you can create an Array constant using the define() function.
Example

Create an Array constant:
<?php
define("cars", [
  "Alfa Romeo",
  "BMW",
  "Toyota"
]);
echo cars[0];
?> 

+Constants are Global

Constants are automatically global and can be used across the entire script.
Example

This example uses a constant inside a function, even if it is defined outside the function:
<?php
define("GREETING", "Welcome to W3Schools.com!");

function myTest() {
  echo GREETING;
}
 
myTest();
?> 

5.PHP OPERATORS

Operators are used to perform operations on variables and values.

PHP divides the operators in the following groups:

    + Arithmetic operators:Toán tử số học
    + Assignment operators:Toán tử chuyển nhượng
    + Comparison operators:Toán tử so sánh
    + Increment/Decrement operators
    + Logical operators
    + String operators
    + Array operators
    + Conditional assignment operators

Operator 	Name 	        Example 	Result 	
+ 	        Addition 	    $x + $y 	Sum of $x and $y 	
- 	        Subtraction 	$x - $y 	Difference of $x and $y 	
* 	        Multiplication 	$x * $y 	Product of $x and $y 	
/ 	        Division 	    $x / $y 	Quotient of $x and $y 	
% 	        Modulus 	    $x % $y 	Remainder of $x divided by $y 	
** 	        Exponentiation 	$x ** $y 	Result of raising $x to the $y'th power

PHP Assignment Operators

The PHP assignment operators are used with numeric values to write a value to a variable.

The basic assignment operator in PHP is "=". It means that the left operand gets set to the value of the assignment expression on the right.

Assignment 	Same as... 	Description
x = y 	    x = y 	    The left operand gets set to the value of the expression on the right 	
x += y 	    x = x + y 	Addition 	
x -= y 	    x = x - y 	Subtraction 	
x *= y 	    x = x * y 	Multiplication 	
x /= y 	    x = x / y 	Division 	
x %= y 	    x = x % y 	Modulus

PHP Comparison Operators

The PHP comparison operators are used to compare two values (number or string):
Operator 	Name 	                    Example 	Result 	Show it
== 	        Equal 	                    $x == $y 	Returns true if $x is equal to $y 	
=== 	    Identical 	                $x === $y 	Returns true if $x is equal to $y, and they are of the same type 	
!= 	        Not equal 	                $x != $y 	Returns true if $x is not equal to $y 	
<> 	        Not equal 	                $x <> $y 	Returns true if $x is not equal to $y 	
!== 	    Not identical 	            $x !== $y 	Returns true if $x is not equal to $y, or they are not of the same type 	
> 	        Greater than 	            $x > $y 	Returns true if $x is greater than $y 	
< 	        Less than 	                $x < $y 	Returns true if $x is less than $y 	
>= 	        Greater than or equal to 	$x >= $y 	Returns true if $x is greater than or equal to $y 	
<= 	        Less than or equal to 	    $x <= $y 	Returns true if $x is less than or equal to $y 	
<=> 	    Spaceship 	                $x <=> $y 	Returns an integer less than, equal to, or greater than zero, depending on if $x is less than, equal to, or greater than $y. Introduced in PHP 7.

PHP Increment / Decrement Operators

The PHP increment operators are used to increment a variable's value.

The PHP decrement operators are used to decrement a variable's value.
Operator 	Name 	        Description
++$x 	    Pre-increment 	Increments $x by one, then returns $x 	
$x++ 	    Post-increment 	Returns $x, then increments $x by one 	
--$x 	    Pre-decrement 	Decrements $x by one, then returns $x 	
$x-- 	    Post-decrement 	Returns $x, then decrements $x by one 	

PHP Logical Operators

The PHP logical operators are used to combine conditional statements.
Operator 	Name 	 Example 	Result 	Show it
and 	    And 	 $x and $y 	True if both $x and $y are true 	
or 	        Or 	     $x or $y 	True if either $x or $y is true 	
xor 	    Xor 	 $x xor $y 	True if either $x or $y is true, but not both 	
&& 	        And 	 $x && $y 	True if both $x and $y are true 	
|| 	        Or 	     $x || $y 	True if either $x or $y is true 	
! 	        Not 	 !$x 	    True if $x is not true

PHP String Operators

PHP has two operators that are specially designed for strings.
Operator 	Name 	                   Example 	         Result 	
. 	        Concatenation 	           $txt1 . $txt2 	Concatenation of $txt1 and $txt2 	
.= 	        Concatenation assignment   $txt1 .= $txt2 	Appends $txt2 to $txt1 	
PHP Array Operators

The PHP array operators are used to compare arrays.

Operator 	   Name 	     Example 	Result 	Show it
+ 	           Union 	     $x + $y 	Union of $x and $y 	
== 	           Equality 	 $x == $y 	Returns true if $x and $y have the same key/value pairs 	
=== 	       Identity 	 $x === $y 	Returns true if $x and $y have the same key/value pairs in the same order and of the same types 	
!= 	           Inequality 	 $x != $y 	Returns true if $x is not equal to $y 	
<> 	           Inequality 	 $x <> $y 	Returns true if $x is not equal to $y 	
!== 	       Non-identity  $x !== $y 	Returns true if $x is not identical to $y


PHP Conditional Assignment Operators

The PHP conditional assignment operators are used to set a value depending on conditions:
Operator 	Name 	            Example 	                 Result
?: 	        Ternary 	        $x = expr1 ? expr2 : expr3 	 Returns the value of $x.The value of $x is expr2 if expr1 = TRUE.The value of $x is expr3 if expr1 = FALSE 	
?? 	        Null coalescing 	$x = expr1 ?? expr2 	     Returns the value of $x.
                                                             The value of $x is expr1 if expr1 exists, and is not NULL.
                                                             If expr1 does not exist, or is NULL, the value of $x is expr2.Introduced in PHP 7

6.Control Structures

PHP Conditional Statements

Very often when you write code, you want to perform different actions for different conditions. You can use conditional statements in your code to do this.

In PHP we have the following conditional statements:

    if statement - executes some code if one condition is true
    if...else statement - executes some code if a condition is true and another code if that condition is false
    if...elseif...else statement - executes different codes for more than two conditions
    switch statement - selects one of many blocks of code to be executed

6.1 PHP - The if Statement

The if statement executes some code if one condition is true.
Syntax
if (condition)) {
  code to be executed if condition is true;
}

Example:

Output "Have a good day!" if the current time (HOUR) is less than 20:
<?php
$t = date("H");

if ($t < "20") {
  echo "Have a good day!";
}
?> 

6.1 PHP - The if...else Statement

The if...else statement executes some code if a condition is true and another code if that condition is false.
Syntax
if (condition) {
  code to be executed if condition is true;
} else {
  code to be executed if condition is false;
} 

Example

Output "Have a good day!" if the current time is less than 20, and "Have a good night!" otherwise:
<?php
$t = date("H");

if ($t < "20") {
  echo "Have a good day!";
} else {
  echo "Have a good night!";
}
?> 


6.2 PHP - The if...elseif...else Statement

The if...elseif...else statement executes different codes for more than two conditions.
Syntax
if (condition) {
  code to be executed if this condition is true;
} elseif (condition) {
  code to be executed if first condition is false and this condition is true;
} else {
  code to be executed if all conditions are false;
}
Example

Output "Have a good morning!" if the current time is less than 10, and "Have a good day!" if the current time is less than 20. Otherwise it will output "Have a good night!":
<?php
$t = date("H");

if ($t < "10") {
  echo "Have a good morning!";
} elseif ($t < "20") {
  echo "Have a good day!";
} else {
  echo "Have a good night!";
}
?> 


6.3 The PHP switch Statement

Use the switch statement to select one of many blocks of code to be executed.
Syntax
switch (n) {
  case label1:
    code to be executed if n=label1;
    break;
  case label2:
    code to be executed if n=label2;
    break;
  case label3:
    code to be executed if n=label3;
    break;
    ...
  default:
    code to be executed if n is different from all labels;
}

This is how it works: First we have a single expression n (most often a variable), that is evaluated once. The value of the expression is then compared with the values for each case in the structure. If there is a match, the block of code associated with that case is executed. Use break to prevent the code from running into the next case automatically. The default statement is used if no match is found.
Example
<?php
$favcolor = "red";

switch ($favcolor) {
  case "red":
    echo "Your favorite color is red!";
    break;
  case "blue":
    echo "Your favorite color is blue!";
    break;
  case "green":
    echo "Your favorite color is green!";
    break;
  default:
    echo "Your favorite color is neither red, blue, nor green!";
}
?> 

6.4 PHP while Loop

The while loop - Loops through a block of code as long as the specified condition is true.
The PHP while Loop

The while loop executes a block of code as long as the specified condition is true.
Syntax
while (condition is true) {
  code to be executed;
}
Examples

The example below displays the numbers from 1 to 5:
Example
<?php
$x = 1;

while($x <= 5) {
  echo "The number is: $x <br>";
  $x++;
}
?> 

6.5 PHP do while Loop

The do...while loop - Loops through a block of code once, and then repeats the loop as long as the specified condition is true.
The PHP do...while Loop

The do...while loop will always execute the block of code once, it will then check the condition, and repeat the loop while the specified condition is true.
Syntax
do {
  code to be executed;
} while (condition is true);
Examples

The example below first sets a variable $x to 1 ($x = 1). Then, the do while loop will write some output, and then increment the variable $x with 1. Then the condition is checked (is $x less than, or equal to 5?), and the loop will continue to run as long as $x is less than, or equal to 5:
Example
<?php
$x = 1;

do {
  echo "The number is: $x <br>";
  $x++;
} while ($x <= 5);
?> 

6.6 The PHP for Loop

The for loop is used when you know in advance how many times the script should run.
Syntax
for (init counter; test counter; increment counter) {
  code to be executed for each iteration;
}

Parameters:

    init counter: Initialize the loop counter value
    test counter: Evaluated for each loop iteration. If it evaluates to TRUE, the loop continues. If it evaluates to FALSE, the loop ends.
    increment counter: Increases the loop counter value

Examples

The example below displays the numbers from 0 to 10:
Example
<?php
for ($x = 0; $x <= 10; $x++) {
  echo "The number is: $x <br>";
}
?> 

6.7 The PHP foreach Loop

The foreach loop works only on arrays, and is used to loop through each key/value pair in an array.
Syntax
foreach ($array as $value) {
  code to be executed;
}

For every loop iteration, the value of the current array element is assigned to $value and the array pointer is moved by one, until it reaches the last array element.
Examples

The following example will output the values of the given array ($colors):
Example
<?php
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $value) {
  echo "$value <br>";
}
?> 

6.7 PHP Break

You have already seen the break statement used in an earlier chapter of this tutorial. It was used to "jump out" of a switch statement.

The break statement can also be used to jump out of a loop.

This example jumps out of the loop when x is equal to 4:
Example
<?php
for ($x = 0; $x < 10; $x++) {
  if ($x == 4) {
    break;
  }
  echo "The number is: $x <br>";
}
?> 

7.String Functions

The PHP string functions are part of the PHP core. No installation is required to use these functions.

+ addcslashes() 	                Returns a string with backslashes in front of the specified characters
+ addslashes() 	                Returns a string with backslashes in front of predefined characters
+ bin2hex() 	                    Converts a string of ASCII characters to hexadecimal values
+ chop() 	                        Removes whitespace or other characters from the right end of a string
+ chr() 	                        Returns a character from a specified ASCII value
+ chunk_split() 	                Splits a string into a series of smaller parts
+ convert_cyr_string() 	        Converts a string from one Cyrillic character-set to another
+ convert_uudecode() 	            Decodes a uuencoded string
+ convert_uuencode() 	            Encodes a string using the uuencode algorithm
+ count_chars() 	                Returns information about characters used in a string
+ crc32() 	                    Calculates a 32-bit CRC for a string
+ crypt() 	                    One-way string hashing
+ echo() 	                        Outputs one or more strings
+ explode() 	                    Breaks a string into an array
+ fprintf() 	                    Writes a formatted string to a specified output stream
+ get_html_translation_table() 	Returns the translation table used by htmlspecialchars() and htmlentities()
+ hebrev() 	                    Converts Hebrew text to visual text
+ hebrevc() 	                    Converts Hebrew text to visual text and new lines (\n) into <br>
+ hex2bin() 	                    Converts a string of hexadecimal values to ASCII characters
+ html_entity_decode() 	        Converts HTML entities to characters
+ htmlentities()               	Converts characters to HTML entities
+ htmlspecialchars_decode() 	    Converts some predefined HTML entities to characters
+ htmlspecialchars() 	            Converts some predefined characters to HTML entities
+ implode() 	                    Returns a string from the elements of an array
+ join() 	                        Alias of implode()
+ lcfirst() 	                    Converts the first character of a string to lowercase
+ levenshtein()                  	Returns the Levenshtein distance between two strings
+ localeconv() 	                Returns locale numeric and monetary formatting information
+ ltrim() 	                    Removes whitespace or other characters from the left side of a string
+ md5() 	                        Calculates the MD5 hash of a string
+ md5_file() 	                    Calculates the MD5 hash of a file
+ metaphone() 	                Calculates the metaphone key of a string
+ money_format()              	Returns a string formatted as a currency string
+ nl_langinfo() 	                Returns specific local information
+ nl2br() 	                    Inserts HTML line breaks in front of each newline in a string
+ number_format() 	            Formats a number with grouped thousands
+ ord() 	                        Returns the ASCII value of the first character of a string
+ parse_str() 	                Parses a query string into variables
+ print() 	                    Outputs one or more strings
+ printf() 	                    Outputs a formatted string
+ quoted_printable_decode() 	    Converts a quoted-printable string to an 8-bit string
+ quoted_printable_encode() 	    Converts an 8-bit string to a quoted printable string
+ quotemeta() 	                Quotes meta characters
+ rtrim() 	                    Removes whitespace or other characters from the right side of a string
+ setlocale() 	                Sets locale information
+ sha1() 	                        Calculates the SHA-1 hash of a string
+ sha1_file() 	                Calculates the SHA-1 hash of a file
+ similar_text() 	                Calculates the similarity between two strings
+ soundex() 	                    Calculates the soundex key of a string
+ sprintf() 	                    Writes a formatted string to a variable
+ sscanf() 	                    Parses input from a string according to a format
+ str_getcsv() 	                Parses a CSV string into an array
+ str_ireplace()                 	Replaces some characters in a string (case-insensitive)
+ str_pad() 	                    Pads a string to a new length
+ str_repeat() 	                Repeats a string a specified number of times
+ str_replace() 	                Replaces some characters in a string (case-sensitive)
+ str_rot13() 	                Performs the ROT13 encoding on a string
+ str_shuffle() 	                Randomly shuffles all characters in a string
+ str_split() 	                Splits a string into an array
+ str_word_count() 	            Count the number of words in a string
+ strcasecmp() 	                Compares two strings (case-insensitive)
+ strchr() 	                    Finds the first occurrence of a string inside another string (alias of strstr())
+ strcmp() 	                    Compares two strings (case-sensitive)
+ strcoll() 	                    Compares two strings (locale based string comparison)
+ strcspn() 	                    Returns the number of characters found in a string before any part of some specified characters are found
+ strip_tags() 	                Strips HTML and PHP tags from a string
+ stripcslashes()                	Unquotes a string quoted with addcslashes()
+ stripslashes()                	Unquotes a string quoted with addslashes()
+ stripos() 	                    Returns the position of the first occurrence of a string inside another string (case-insensitive)
+ stristr() 	                    Finds the first occurrence of a string inside another string (case-insensitive)
+ strlen() 	                    Returns the length of a string
+ strnatcasecmp() 	            Compares two strings using a "natural order" algorithm(thuật toán) (case-insensitive)
+ strnatcmp() 	                Compares two strings using a "natural order" algorithm (case-sensitive)
+ strncasecmp() 	                String comparison of the first n characters (case-insensitive)
+ strncmp() 	                    String comparison of the first n characters (case-sensitive)
+ strpbrk() 	                    Searches a string for any of a set of characters
+ strpos() 	                    Returns the position of the first occurrence of a string inside another string (case-sensitive)
+ strrchr() 	                    Finds the last occurrence of a string inside another string
+ strrev() 	                    Reverses a string
+ strripos() 	                    Finds the position of the last occurrence of a string inside another string (case-insensitive)
+ strrpos() 	                    Finds the position of the last occurrence of a string inside another string (case-sensitive)
+ strspn() 	                    Returns the number of characters found in a string that contains only characters from a specified charlist
+ strstr() 	                    Finds the first occurrence of a string inside another string (case-sensitive)
+ strtok() 	                    Splits a string into smaller strings
+ strtolower() 	                Converts a string to lowercase letters
+ strtoupper() 	                Converts a string to uppercase letters
+ strtr() 	                    Translates certain characters in a string
+ substr() 	                    Returns a part of a string
+ substr_compare() 	            Compares two strings from a specified start position (binary safe and optionally case-sensitive)
+ substr_count() 	                Counts the number of times a substring occurs in a string
+ substr_replace() 	            Replaces a part of a string with another string
+ trim() 	                        Removes whitespace or other characters from both sides of a string
+ ucfirst() 	                    Converts the first character of a string to uppercase
+ ucwords() 	                    Converts the first character of each word in a string to uppercase
+ vfprintf()                  	Writes a formatted string to a specified output stream
+ vprintf() 	                    Outputs a formatted string
+ vsprintf() 	                    Writes a formatted string to a variable
+ wordwrap() 	                    Wraps a string to a given number of characters

8.PHP Array Introduction

The array functions allow you to access and manipulate arrays.

Simple and multi-dimensional(đa chiều) arrays are supported.

Function 	                 Description
+ array() 	                 Creates an array
+ array_change_key_case() 	 Changes all keys in an array to lowercase or uppercase
+ array_chunk() 	             Splits an array into chunks of arrays
+ array_column() 	             Returns the values from a single column in the input array
+ array_combine() 	         Creates an array by using the elements from one "keys" array and one "values" array
+ array_count_values() 	     Counts all the values of an array
+ array_diff() 	             Compare arrays, and returns the differences (compare values only)
+ array_diff_assoc() 	         Compare arrays, and returns the differences (compare keys and values)
+ array_diff_key() 	         Compare arrays, and returns the differences (compare keys only)
+ array_diff_uassoc() 	     Compare arrays, and returns the differences (compare keys and values, using a user-defined key comparison function)
+ array_diff_ukey()          	 Compare arrays, and returns the differences (compare keys only, using a user-defined key comparison function)
+ array_fill() 	             Fills an array with values
+ array_fill_keys() 	         Fills an array with values, specifying keys
+ array_filter() 	             Filters the values of an array using a callback function
+ array_flip() 	             Flips/Exchanges all keys with their associated values in an array
+ array_intersect() 	         Compare arrays, and returns the matches (compare values only)
+ array_intersect_assoc() 	 Compare arrays and returns the matches (compare keys and values)
+ array_intersect_key() 	     Compare arrays, and returns the matches (compare keys only)
+ array_intersect_uassoc() 	 Compare arrays, and returns the matches (compare keys and values, using a user-defined key comparison function)
+ array_intersect_ukey() 	     Compare arrays, and returns the matches (compare keys only, using a user-defined key comparison function)
+ array_key_exists() 	         Checks if the specified key exists in the array
+ array_keys() 	             Returns all the keys of an array
+ array_map() 	             Sends each value of an array to a user-made function, which returns new values
+ array_merge() 	             Merges one or more arrays into one array
+ array_merge_recursive() 	 Merges one or more arrays into one array recursively
+ array_multisort()          	 Sorts multiple or multi-dimensional arrays
+ array_pad() 	             Inserts a specified number of items, with a specified value, to an array
+ array_pop() 	             Deletes the last element of an array
+ array_product() 	         Calculates the product of the values in an array
+ array_push() 	             Inserts one or more elements to the end of an array
+ array_rand() 	             Returns one or more random keys from an array
+ array_reduce()               Returns an array as a string, using a user-defined function
+ array_replace() 	         Replaces the values of the first array with the values from following arrays
+ array_replace_recursive()    Replaces the values of the first array with the values from following arrays recursively
+ array_reverse() 	         Returns an array in the reverse order
+ array_search() 	             Searches an array for a given value and returns the key
+ array_shift() 	             Removes the first element from an array, and returns the value of the removed element
+ array_slice() 	             Returns selected parts of an array
+ array_splice() 	             Removes and replaces specified elements of an array
+ array_sum() 	             Returns the sum of the values in an array
+ array_udiff() 	             Compare arrays, and returns the differences (compare values only, using a user-defined key comparison function)
+ array_udiff_assoc() 	     Compare arrays, and returns the differences (compare keys and values, using a built-in function to compare the keys and a user-defined function to compare the values)
+ array_udiff_uassoc() 	     Compare arrays, and returns the differences (compare keys and values, using two user-defined key comparison functions)
+ array_uintersect() 	         Compare arrays, and returns the matches (compare values only, using a user-defined key comparison function)
+ array_uintersect_assoc() 	 Compare arrays, and returns the matches (compare keys and values, using a built-in function to compare the keys and a user-defined function to compare the values)
+ array_uintersect_uassoc() 	 Compare arrays, and returns the matches (compare keys and values, using two user-defined key comparison functions)
+ array_unique()         	     Removes duplicate values from an array
+ array_unshift() 	         Adds one or more elements to the beginning of an array
+ array_values() 	             Returns all the values of an array
+ array_walk() 	             Applies a user function to every member of an array
+ array_walk_recursive() 	     Applies a user function recursively to every member of an array
+ arsort() 	                 Sort an associative array in descending order, according to the value
+ asort() 	                 Sort an associative array in ascending order, according to the value
+ compact() 	                 Create array containing variables and their values
+ count() 	                 Returns the number of elements in an array
+ current() 	                 Returns the current element in an array
+ each() 	                     Deprecated from PHP 7.2. Returns the current key and value pair from an array
+ end() 	                     Sets the internal pointer of an array to its last element
+ extract() 	                 Imports variables into the current symbol table from an array
+ in_array() 	                 Checks if a specified value exists in an array
+ key() 	                     Fetches a key from an array
+ krsort() 	                 Sort an associative array in descending order, according to the key
+ ksort() 	                 Sort an associative array in ascending order, according to the key
+ list()         	             Assigns variables as if they were an array
+ natcasesort() 	             Sort an array using a case insensitive "natural order" algorithm
+ natsort() 	                 Sort an array using a "natural order" algorithm
+ next() 	                     Advance the internal array pointer of an array
+ pos() 	                     Alias of current()
+ prev()                	     Rewinds the internal array pointer
+ range() 	                 Creates an array containing a range of elements
+ reset() 	                 Sets the internal pointer of an array to its first element
+ rsort() 	                 Sort an indexed array in descending order
+ shuffle() 	                 Shuffles an array
+ sizeof() 	                 Alias of count()
+ sort() 	                     Sort an indexed array in ascending order
+ uasort() 	                 Sort an array by values using a user-defined comparison function
+ uksort() 	                 Sort an array by keys using a user-defined comparison function
+ usort() 	                 Sort an array using a user-defined comparison function

8.File handling 
File handling : is an important part of any web application. You often need to open and process a file for different tasks.

8.1 PHP readfile() Function

The readfile() function reads a file and writes it to the output buffer.

Assume we have a text file called "webdictionary.txt", stored on the server, that looks like this:
+ AJAX = Asynchronous JavaScript and XML
+ CSS = Cascading Style Sheets
+ HTML = Hyper Text Markup Language
+ PHP = PHP Hypertext Preprocessor
+ SQL = Structured Query Language
+ SVG = Scalable Vector Graphics
+ XML = EXtensible Markup Language

The PHP code to read the file and write it to the output buffer is as follows (the readfile() function returns the number of bytes read on success):
Example:

<?php
echo readfile("webdictionary.txt");
?> 

8.2 PHP Open File - fopen()

A better method to open files is with the fopen() function. This function gives you more options than the readfile() function.

We will use the text file, "webdictionary.txt", during the lessons:
The first parameter of fopen() contains the name of the file to be opened and the second parameter specifies in which mode the file should be opened. The following example also generates a message if the fopen() function is unable to open the specified file:

Example:
<?php
$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("webdictionary.txt"));
fclose($myfile);
?> 


The file may be opened in one of the following modes:


+ r 	Open a file for read only. File pointer starts at the beginning of the file
+ w 	Open a file for write only. Erases the contents of the file or creates a new file if it doesn't exist. File pointer starts at the beginning of the file
+ a 	Open a file for write only. The existing data in file is preserved. File pointer starts at the end of the file. Creates a new file if the file doesn't exist
+ x 	Creates a new file for write only. Returns FALSE and an error if file already exists
+ r+ 	Open a file for read/write. File pointer starts at the beginning of the file
+ w+ 	Open a file for read/write. Erases the contents of the file or creates a new file if it doesn't exist. File pointer starts at the beginning of the file
+ a+ 	Open a file for read/write. The existing data in file is preserved. File pointer starts at the end of the file. Creates a new file if the file doesn't exist
+ x+ 	Creates a new file for read/write. Returns FALSE and an error if file already exists

8.3 PHP Read File - fread()

The fread() function reads from an open file.

The first parameter of fread() contains the name of the file to read from and the second parameter specifies the maximum number of bytes to read.

The following PHP code reads the "webdictionary.txt" file to the end:


+ fread($myfile,filesize("webdictionary.txt"));

8.3 PHP Close File - fclose()

The fclose() function is used to close an open file.

It's a good programming practice to close all files after you have finished with them. You don't want an open file running around on your server taking up resources!

The fclose() requires the name of the file (or a variable that holds the filename) we want to close:
  <?php
  $myfile = fopen("webdictionary.txt", "r");
  // some code to be executed....
  fclose($myfile);
  ?>

8.4 PHP Read Single Line - fgets()

The fgets() function is used to read a single line from a file.

The example below outputs the first line of the "webdictionary.txt" file:
Example:
  <?php
  $myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
  echo fgets($myfile);
  fclose($myfile);
  ?>

Note: After a call to the fgets() function, the file pointer has moved to the next line.


8.5 PHP Check End-Of-File - feof()

The feof() function checks if the "end-of-file" (EOF) has been reached.

The feof() function is useful for looping through data of unknown length.

The example below reads the "webdictionary.txt" file line by line, until end-of-file is reached:
Example:

  <?php
  $myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
  // Output one line until end-of-file
  while(!feof($myfile)) {
    echo fgets($myfile) . "<br>";
  }
  fclose($myfile);
?>
8.6 PHP Read Single Character - fgetc()

The fgetc() function is used to read a single character from a file.

The example below reads the "webdictionary.txt" file character by character, until end-of-file is reached:
Example:

  <?php
  $myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
  // Output one character until end-of-file
  while(!feof($myfile)) {
    echo fgetc($myfile);
  }
  fclose($myfile);
  ?> 



8.7 PHP File Create/Write

In this chapter we will teach you how to create and write to a file on the server.
PHP Create File - fopen()

The fopen() function is also used to create a file. Maybe a little confusing, but in PHP, a file is created using the same function used to open files.

If you use fopen() on a file that does not exist, it will create it, given that the file is opened for writing (w) or appending (a).

The example below creates a new file called "testfile.txt". The file will be created in the same directory where the PHP code resides:
Example
  $myfile = fopen("testfile.txt", "w")

8.7.1 PHP File Permissions

If you are having errors when trying to get this code to run, check that you have granted your PHP file access to write information to the hard drive.
PHP Write to File - fwrite()

The fwrite() function is used to write to a file.

The first parameter of fwrite() contains the name of the file to write to and the second parameter is the string to be written.

The example below writes a couple of names into a new file called "newfile.txt":
Example
  <?php
  $myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
  $txt = "John Doe\n";
  fwrite($myfile, $txt);
  $txt = "Jane Doe\n";
  fwrite($myfile, $txt);
  fclose($myfile);
  ?>

Notice that we wrote to the file "newfile.txt" twice. Each time we wrote to the file we sent the string $txt that first contained "John Doe" and second contained "Jane Doe". After we finished writing, we closed the file using the fclose() function.

If we open the "newfile.txt" file it would look like this:
John Doe
Jane Doe
PHP Overwriting

Now that "newfile.txt" contains some data we can show what happens when we open an existing file for writing. All the existing data will be ERASED and we start with an empty file.

In the example below we open our existing file "newfile.txt", and write some new data into it:
Example
  <?php
  $myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
  $txt = "Mickey Mouse\n";
  fwrite($myfile, $txt);
  $txt = "Minnie Mouse\n";
  fwrite($myfile, $txt);
  fclose($myfile);
  ?>

If we now open the "newfile.txt" file, both John and Jane have vanished, and only the data we just wrote is present:
Mickey Mouse
Minnie Mouse
PHP Append Text

You can append data to a file by using the "a" mode. The "a" mode appends text to the end of the file, while the "w" mode overrides (and erases) the old content of the file.

In the example below we open our existing file "newfile.txt", and append some text to it:
Example:
  <?php
  $myfile = fopen("newfile.txt", "a") or die("Unable to open file!");
  $txt = "Donald Duck\n";
  fwrite($myfile, $txt);
  $txt = "Goofy Goof\n";
  fwrite($myfile, $txt);
  fclose($myfile);
  ?>

If we now open the "newfile.txt" file, we will see that Donald Duck and Goofy Goof is appended to the end of the file:
Mickey Mouse
Minnie Mouse
Donald Duck
Goofy Goof




8.7.2 PHP File Upload

With PHP, it is easy to upload files to the server.

However, with ease comes danger, so always be careful when allowing file uploads!
Configure The "php.ini" File

First, ensure that PHP is configured to allow file uploads.

In your "php.ini" file, search for the file_uploads directive, and set it to On:
file_uploads = On
Create The HTML Form

Next, create an HTML form that allow users to choose the image file they want to upload:
<!DOCTYPE html>
<html>
<body>

<form action="upload.php" method="post" enctype="multipart/form-data">
  Select image to upload:
  <input type="file" name="fileToUpload" id="fileToUpload">
  <input type="submit" value="Upload Image" name="submit">
</form>

</body>
</html>

Some rules to follow for the HTML form above:

    Make sure that the form uses method="post"
    The form also needs the following attribute: enctype="multipart/form-data". It specifies which content-type to use when submitting the form

Without the requirements above, the file upload will not work.

Other things to notice:

    The type="file" attribute of the <input> tag shows the input field as a file-select control, with a "Browse" button next to the input control

The form above sends data to a file called "upload.php", which we will create next.
Create The Upload File PHP Script

The "upload.php" file contains the code for uploading a file:
  <?php
  $target_dir = "uploads/";
  $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
  $uploadOk = 1;
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
  // Check if image file is a actual image or fake image
  if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
      echo "File is an image - " . $check["mime"] . ".";
      $uploadOk = 1;
    } else {
      echo "File is not an image.";
      $uploadOk = 0;
    }
  }
  ?>

PHP script explained:

    $target_dir = "uploads/" - specifies the directory where the file is going to be placed
    $target_file specifies the path of the file to be uploaded
    $uploadOk=1 is not used yet (will be used later)
    $imageFileType holds the file extension of the file (in lower case)
    Next, check if the image file is an actual image or a fake image

Note: You will need to create a new directory called "uploads" in the directory where "upload.php" file resides. The uploaded files will be saved there.
Check if File Already Exists

Now we can add some restrictions.

First, we will check if the file already exists in the "uploads" folder. If it does, an error message is displayed, and $uploadOk is set to 0:
// Check if file already exists
  if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
  }
Limit File Size

The file input field in our HTML form above is named "fileToUpload".

Now, we want to check the size of the file. If the file is larger than 500KB, an error message is displayed, and $uploadOk is set to 0:
// Check file size
  if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
  }
Limit File Type

The code below only allows users to upload JPG, JPEG, PNG, and GIF files. All other file types gives an error message before setting $uploadOk to 0:
// Allow certain file formats
  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
  && $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
  }
  Complete Upload File PHP Script

The complete "upload.php" file now looks like this:
  <?php
  $target_dir = "uploads/";
  $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
  $uploadOk = 1;
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
  if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
      echo "File is an image - " . $check["mime"] . ".";
      $uploadOk = 1;
    } else {
      echo "File is not an image.";
      $uploadOk = 0;
    }
  }

// Check if file already exists
  if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
  }

// Check file size
  if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
  }

// Allow certain file formats
  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
  && $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
  }

// Check if $uploadOk is set to 0 by an error
  if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
  // if everything is ok, try to upload file
  } else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
      echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
    } else {
      echo "Sorry, there was an error uploading your file.";
    }
  }
  ?>
