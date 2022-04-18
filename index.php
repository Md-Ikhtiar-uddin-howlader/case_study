<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A Point of Sale System</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- <h1 class="headline">Welcome to IIUM cafe</h1> -->
    <marquee onmouseover="stop()"; onmouseout="start()" class="headline" ><h1>Welcome to IIUM cafe</h1></marquee>
    <h3 class ="heading">Please select your desired food</h3>
    <h1>just test 11111</h1>
    <?php
class Product{
   public $name;
   public $description;
   public $price;

    function getName(){
        return $this->name;
    }
    function getDescription(){
        return $this->description;
    }
    function getPrice(){
        return $this->price;
    }

    function setValue($name, $description, $price){

        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
    
    }

}

$chickenBurger = new Product;
$chickenBurgerCheese = new Product;
$bbqChickenBurger = new Product;
$beefBurger = new Product;
$beefBurgerCheese = new Product;

$chickenBurger->setValue("Chicken burger", "This is chicken burger with fried chicken", 13.5);
$chickenBurgerCheese->setValue("Chicken burger with cheese","This is chicken burger with fried chicken and cheese", 14.5);
$bbqChickenBurger->setValue("BBQ Chicken burger with cheese", "This is BBQ chicken burger with bbq chicken petty and cheese", 17.0);
$beefBurger->setValue("Beef burger", "This is beef burger with beef petty", 14);
$beefBurgerCheese->setValue("Beef burger with Cheese", "This is beef burger with beef petty and cheese", 15);

?>
</body>
</html>