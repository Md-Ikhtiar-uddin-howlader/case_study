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

$chickenBurger->setValue("chicken burger", "This is chicken burger", 13.5);
echo $chickenBurger->getName() . " <br> ";
echo $chickenBurger->getDescription() . " <br> ";
echo $chickenBurger->getPrice() . " <br> ";


?>
</body>
</html>