<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A Point of Sale System</title>
    <link rel="stylesheet" href="style.css">
</head>
<style>



</style>

<body>
    <!-- <h1 class="headline">**Welcome to IIUM Cafe**</h1> -->
    <marquee onmouseover="stop()"; onmouseout="start()" class="headline" ><h1>**Welcome to IIUM Cafe**</h1></marquee>
    <h3 class ="heading"><u>'Please Select Your Items'</u></h3> 
 
 <table class="content-table">
  <thead>
   <tr>
     <th>Item List</th>
     <th>Details</th>
     <th>Price</th>
     <th>Quantity</th>
     <th>Total</th>
   </tr>
</thead>
   <tbody>
   <tr>
     <td>A</td>
     <td>a</td>
     <td>10 RM</td>
     <td>a</td>
     <td>a</td>
   </tr>
   <tr>
     <td>B</td>
     <td>b</td>
     <td>b</td>
     <td>b</td>
     <td>b</td>
   </tr>
   <tr>
     <td>C</td>
     <td>c</td>
     <td>c</td>
     <td>c</td>
     <td>c</td>
   </tr>
   <tr>
     <td>D</td>
     <td>d</td>
     <td>d</td>
     <td>d</td>
     <td>d</td>
   </tr>
   <tr>
     <td>E</td>
     <td></td>
     <td></td>
     <td></td>
     <td></td>
   </tr>
   <tr>
     <td>F</td>
     <td></td>
     <td></td>
     <td></td>
     <td></td>
   </tr>
   <tr>
     <td>G</td>
     <td></td>
     <td></td>
     <td></td>
     <td></td>
   </tr>
   <tr>
     <td>H</td>
     <td></td>
     <td></td>
     <td></td>
     <td></td>
   </tr>
   <tr>
     <td>I</td>
     <td></td>
     <td></td>
     <td></td>
     <td></td>
   </tr>
   <tr>
     <td>J</td>
     <td></td>
     <td></td>
     <td></td>
     <td></td>
   </tr>
</tbody>
 </table><br><br>

 <center><button class="button">SUBMIT FOR INVOICE</button></center>
  
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