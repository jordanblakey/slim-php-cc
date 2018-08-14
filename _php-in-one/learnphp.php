

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
echo "<br><br>LOGICAL OPERATORS<br>";
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
?>