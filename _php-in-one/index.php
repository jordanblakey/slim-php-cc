<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <form action="cc.php" method="post">
    <table>
      <tr>
        <td>Name</td>
        <td><input type="text" size="30" name="username"></td>
      </tr>
      <tr>
        <td>Address</td>
        <td><input type="text" size="30" name="address"></td>
      </tr>
      <tr>
        <td>City</td>
        <td><input type="text" size="30" name="city"></td>
      </tr>
      <tr>
        <input type="submit" value="Submit">
      </tr>
    </table>
  </form>

<?php
class Animal
{
    protected $name;
    protected $favorite_food;
    protected $sound;
    protected $id;

    public static $number_of_animals = 0;
    const PI = "3.14";

    public function getName()
    {
        return $this->name;
    }

    public function __construct()
    {
        $this->id = rand(100, 1000000);
        echo $this->id;
        Animal::$number_of_animals++;
    }

    public function __destruct()
    {
        echo $this->name . " is being destroyed.";
    }

    public function __get($name)
    {
        echo "Asked for " . $name . "<br />";
        return $this->name;

    }

    public function __set($name, $value)
    {
        switch ($name) {
            case "name":
                $this->name = $value;
                break;
            case "favorite_food":
                $this->favorite_food = $value;
                break;
            case "sound":
                $this->sound = $value;
                break;
            default:
                echo $name . "Not Found";
        }

        echo "Set " . $name . " to " . $value . "<br>";
    }
    public function run()
    {
        echo $this->name . " runs<br>";
    }
}

class Dog extends Animal
{
    public function run()
    {
        echo $this->name . " runs like crazy.<br>";
    }

}

$animal_one = new Animal();
$animal_one->name = "Spot";
$animal_one->favorite_food = "Meat";
$animal_one->sound = "Ruff";

echo $animal_one->name . " says " . $animal_one->sound .
" give me some " . $animal_one->favorite_food .
$animal_one->id . " total animals = " . Animal::$number_of_animals . "<br><br>";

?>
</body>
</html>