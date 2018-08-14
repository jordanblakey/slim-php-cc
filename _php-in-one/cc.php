

<?php
// Single line comment
# Single line comment
/* Multi Line
Comment */

// PRINT = ECHO
// Print as html, with special character escaping
echo "<p>\"Form data processed.\"</p>";

// Date Functions
/* Echo the date
h: 12hr format
H: 24hr format
i: minutes
s: seconds
u: microseconds
a: lowercase am or pm
l: full text for the day
F: full text for the month
j: day of the month
S: suffix for the day st, nd, rd, etc
Y: 4 digit y
 */
date_default_timezone_set('UTC');
echo date('h:i:s:u a, l F jS Y e') . "<br><br>";

// VARIABLES (Start with $, case sensitive)
// Default value is null
$username = $_POST['username'];
$address = $_POST['address'];
$city = $_POST['city'];
echo "VARIABLES<br>";
echo $username . "</br>"; // . is the concatenation operator
echo $address . "</br>";
echo $city . "</br>";

echo "CONSTANTS<br>";
define('PI', 3.14);
echo "The value of PI is " . PI . "</br>";

// DATA TYPES
// Type inferencing
// Integer, Float, String, Bool, Array, Object

// TEMPLATE LITERALS
echo "<br>TEMPLATE LITERALS (note newlines not respected)<br>";
$str = <<<EOD
The customers name is
$username and they
live at $address
in $city.</br>
EOD;

echo $str;

// ARITHMETIC OPERATORS
echo "<br>ARITHMETIC OPERATORS<br>";
echo "5 + 2 =" . (5 + 2) . "<br>";
echo "5 - 2 =" . (5 - 2) . "<br>";
echo "5 * 2 =" . (5 * 2) . "<br>";
echo "5 / 2 =" . (5 / 2) . "<br>";
// Type casting
echo "5 / 2 =" . (integer) (5 / 2) . "<br>";
echo "5 / 2.234 =" . (double) (5 / 2.234) . "<br>";
echo "5 / 2.234 =" . (float) (5 / 2.234) . "<br>";
echo "5 / 2 =" . (string) (5 / 2) . "<br>";
echo "5 % 2 =" . (5 % 2) . "<br>";

$randNum = 5;
echo "$randNum += 10 = " . ($randNum += 10) . "<br>";
echo "$randNum -= 10 = " . ($randNum -= 10) . "<br>";
echo "$randNum *= 10 = " . ($randNum *= 10) . "<br>";
echo "$randNum /= 10 = " . ($randNum /= 10) . "<br>";
echo "$randNum %= 10 = " . ($randNum %= 10) . "<br>";
echo "\$randNum++ = " . $randNum++ . "<br>";
echo "++\$randNum = " . ++$randNum . "<br>";

$refToNum = &$randNum;
$randNum = 100;

echo '$refToNum = ' . $refToNum;

// LOGICAL OPERATORS
echo "<br><br>LOGICAL OPERATORS<br>";
echo "true == true: " . (true == true) . "<br>";
echo "true === true: " . (true === true) . "<br>";
echo "true != true: " . (true != true) . "<br>";
echo "true !== true: " . (true !== true) . "<br>";
echo "true < true: " . (true < true) . "<br>";
echo "true <= true: " . (true <= true) . "<br>";
echo "true > true: " . (true > true) . "<br>";
echo "true >= true: " . (true >= true) . "<br>";

// IF ELSE
echo "<br><br>IF/ELSE, SWITCH, WHILE, FOR<br>";
if (1 == 0) {
    echo '1 == 0<br>';
} else if (1 == 1) {
    echo '1 == 1<br>';
}

$randNum = 5;
$numOfOranges = 4;
$numOfBananas = 36;

if (($numOfOranges > 25) && ($numOfBananas > 30)) {
    echo '25% Discount<br>';
} else if (($numOfOranges > 30) || ($numOfBananas > 35)) {
    echo '15% Discount<br>';
} else if (!(($numOfOranges < 5)) || (!($numOfBananas > 5))) {
    echo '5% Discount<br>';
} else {
    echo 'No discount for you!<br>';
}

// SWITCH STATEMENTS
switch ($username) {
    case "Derek":
        echo "Hello Derek";
        break;
    case "Sally":
        echo "Hello Sally";
    default:
        echo "Hello Valued Customer";
        break;
}

// LOOPS
echo '<br>';
$num = 0;
while ($num < 20) {
    echo ++$num . ', ';
}

echo '<br>';
for ($num = 1; $num <= 20; $num++) {
    echo $num;
    if ($num != 20) {
        echo ', ';
    } else {
        break;
        // exit; // stop executing PHP
    }
}

// ARRAYS
$bestFriends = array('Joy', 'Willow', 'Ivy');
echo '<br>My Wife ' . $bestFriends[1];
$bestFriends[3] = 'Steve';
echo '<br>My Friend ' . $bestFriends[3];
echo '<br>';
foreach ($bestFriends as $friend) {
    echo $friend . ', ';
}

$customer = array('Name' => $username, 'Address' => $address, 'City' => $city);
foreach ($customer as $key => $value) {
    echo '<br>' . $key . ': ', $value;
}

// Append/Prepend to arry
$bestFriends = $bestFriends + $customer;
$bestFriends = $customer + $bestFriends;

// Array Comparison
echo $bestFriends === $bestFriends;

// Multidimensional arrays
$customers = array(
    array('Derek', '123 Main', '12345'),
    array('Sally', '123 Main', '12345'),
    array('John', '123 Main', '12345'),
);

echo '<br>Current PHP version: ' . phpversion() . '<br>';

$rows = count($customers);
for ($row = 0; $row < $rows; $row++) {
    $cols = count($customers[$row]);
    for ($col = 0; $col < $cols; $col++) {
        echo $customers[$row][$col] . ', ';
    }
    echo "<br>";
}
;

// COMMON ARRAY FUNCTIONS
sort($customers); // Sort alpha
rsort($customers); // Sort alpha
// sort($customers, SORT_NUMERIC); // Sort alpha
// sort($customers, SORT_STRING); // Sort alpha
ksort($customer); // Sort by keys
krsort($customer); // Reverse sort by keys
asort($customer); // Sort by values
arsort($customer); // Reverse sort by values

// STRING METHODS
$randString = "         Random String           ";
echo strlen("$randString") . "<br>";
echo strlen(ltrim($randString)) . '<br>';
echo strlen(rtrim($randString)) . '<br>';
echo strlen(trim($randString)) . '<br>';

// Print Formatted String
printf("The randString is %s <br>", $randString);
$decimalNum = 2.345;
printf("decimal num = %.2f <br>", $decimalNum);
// Printf conversion codes
// b: int to binary
// c: int to character
// d: int to decimal
// f: double to float
// o: int to octal
// s: string to string
// x: int to hex
echo strtoupper($randString) . '<br>';
echo strtolower($randString) . '<br>';
echo ucfirst($randString) . '<br>';

$arrayForString = explode(' ', $randString, 9999); // delim, string to explode, max array length
foreach ($arrayForString as $char) {
    echo $char . ',';
}
$arrayForString = implode(' ', $arrayForString); // delim, string to explode, max array length
echo '<br>' . $arrayForString;

$partOfString = substr("Random String", 0, 6);
echo '<br>' . $partOfString;

$man = "Man";
$manhole = "Manhole";
echo strcmp($man, $manhole); // return count(arg1) - count(arg2)
echo strcasecmp($man, $manhole); // return count(arg1) - count(arg2)
echo strstr($randString, "String"); // return everything after match
echo stristr($randString, "String"); // return everything after match -- case insensitive
echo strpos($randString, "String"); // find the index of the match

// FUNCTIONS
function addNumbers($num1, $num2)
{
    return $num1 + $num2;
}

echo "3 + 4 = " . addNumbers(3, 4);

?>