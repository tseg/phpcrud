<?php
///////////////////////////////////////////// out put ///////////////////////////////////////////
echo 'Hello';
echo 123;
echo '<h1>Hello</h1>';

// print - Similar to echo, but a bit slower
print 'Hello';

// print_r - Gives a bit more info. Can be used to print arrays
print_r('Hello');
print_r([1, 2, 3]);

// var_dump - Even more info like data type and length
var_dump('Hello');
var_dump([1, 2, 3]);


/////////////////////////////////////// variable //////////////////////////////////////////////
$name = 'Brad'; // String // Can be single or double quotes
$age = 40; // Integer
$hasKids = true; // Boolean
$cashOnHand = 10.5; //Float

var_dump($cashOnHand);

/* --- Adding variables to strings -- */

// Double quotes can be used to add variables to strings
echo "$name is $age years old";

// Better to do this
echo "${name} is ${age} years old";

// Concatenate Strings

echo '<h3>' . $name . ' is ' . $age . ' years old</h3>';

// Arithmetic Operators

echo 5 + 5;
echo 10 - 6;
echo 5 * 10;
echo 10 / 2;

/////////////////////////////////////// array //////////////////////////////////////////////////
// Simple array of numbers
$numbers = [1, 2, 3, 4, 5];

// Simple array of strings
$colors = ['red', 'blue', 'green'];

// Using the array function to create an array of numbers
$numbers = [1, 2, 3, 4, 5];

// Outputting values from an array
echo $numbers[0];
echo $numbers[3] + $numbers[4];

// We can use print_r or var_dump to see the contents of an array
var_dump($numbers);




///////////////////////////////////// Conditionals & Operators /////////////////////////////////////
/*
  < Less than
  > Greater than
  <= Less than or equal to
  >= Greater than or equal to
  == Equal to
  === Identical to
  != Not equal to
  !== Not identical to
*/


$age = 20;

if ($age >= 18) {
  echo 'You are old enough to vote!';
} else {
  echo 'Sorry, you are too young to vote.';
}

echo ($age >= 18) ? 'You are old enough to vote!' : 'Sorry, you are too young to vote.';


$favcolor = 'red';

switch ($favcolor) {
  case 'red':
    echo 'Your favorite color is red!';
    break;
  case 'blue':
    echo 'Your favorite color is blue!';
    break;
  case 'green':
    echo 'Your favorite color is green!';
    break;
  default:
    echo 'Your favorite color is not red, blue, nor green!';
}



//////////////////////////////////////// loop ///////////////////////////////////////////
// For Loop
for ($x = 0; $x <= 10; $x++) {
    echo "Number: $x <br>";
}

// While Loop
$x = 1;

while ($x <= 5) {
  echo "Number: $x <br>";
  $x++;
}

// do...while loop
do {
    echo "Number: $x <br>";
    $x++;
} while ($x <= 5);


// Loop through an array

$numbers = [1, 2, 3, 4, 5];

foreach ($numbers as $x) {
  echo "Number: $x <br>";
}

// Use the indexes within the loop

$posts = ['Post One', 'Post Two', 'Post Three'];

foreach ($posts as $index => $post) {
  echo "${index} - ${post} <br>";
}

// Use the keys within the loop for an associative array

$person = [
  'first_name' => 'Brad',
  'last_name' => 'Traversy',
  'email' => 'brad@gmail.com',
];

// Get Keys
foreach ($person as $key => $val) {
  echo "${key} - ${val} <br>";
}
  


//////////////////////////////////// function //////////////////////////////////////////////////////
function registerUser()
{
  echo 'User has been registered!';
}

// Running a function
registerUser();

// Adding params
function registerUser2($username)
{
  echo "User ${username} has been registered!";
}

// Pass in an argument
registerUser2('Brad');

// Returning values
function add($num1, $num2)
{
  return $num1 + $num2;
}

$sum = add(5, 5);
echo $sum;

// Adding default values
function subtract($num1 = 10, $num2 = 5)
{
  return $num1 - $num2;
}

echo subtract();



///////////////////////////////////// Cooki //////////////////////////////////////////////
// Set a cookie
setcookie('name', 'Test', time() + 86400 * 30); // 86400 = 1 day

// echo time();

// Get a cookie
if (isset($_COOKIE['name'])) {
  echo $_COOKIE['name'];
}

// Delete a cookie
setcookie('name', '', time() - 86400);


/////////////////////////////////////////////Session ///////////////////////////////////////

session_start(); // Set Session variable. Must be called before accessing any session data

// Set session variables
$_SESSION['username'] = 'John Doe';
$_SESSION['email'] = 'johndoe@mail.com';

// Check if the session variable is set
if (isset($_SESSION['username'])) {
  echo "Welcome " . $_SESSION['username'];
  echo "<br>Your email is: " . $_SESSION['email'];
} else {
  echo "No session found. Please log in.";
}


// Unset the specific session variable
unset($_SESSION['email']);

// Unset all of the session variables
session_unset();

// Destroy the session
session_destroy();
