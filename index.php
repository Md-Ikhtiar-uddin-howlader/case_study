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
$juicyBeefBurger = new Product;
$bun = new Product;
$cheeseBun = new Product;

$chickenBurger->setValue("Chicken burger", "This is chicken burger with fried chicken", 13.5);
$chickenBurgerCheese->setValue("Chicken cheese burger","This is chicken burger with fried chicken and cheese", 14.5);
$bbqChickenBurger->setValue("BBQ Chicken cheese burger", "This is BBQ chicken burger with bbq chicken petty and cheese", 17.0);
$beefBurger->setValue("Beef burger", "This is beef burger with beef petty", 14);
$beefBurgerCheese->setValue("Beef Cheese burger", "This is beef burger with beef petty and cheese", 15);
$juicyBeefBurger->setValue("Juicy Beef Cheese burger", "This is beef burger with double juicy beef petty and cheese", 19);
$bun->setValue("Chocolate bun", "Small chocolate bun", 2);
$cheeseBun->setValue("Cheese bun", "Small cheese bun", 1.5);
?>



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
     <td><?php echo $chickenBurger->getName()?></td>
     <td><?php echo $chickenBurger->getDescription()?></td>
     <td><?php echo $chickenBurger->getPrice()?></td>
    <td>Add Quantity-->
      <select>
    <option value="0">0</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
    <option value="7">8</option>
    <option value="8">8</option>
    <option value="9">9</option>
  </select>
  </td>

     <td></td>

   </tr>
   <tr>
   <td><?php echo $chickenBurgerCheese->getName()?></td>
    <td><?php echo $chickenBurgerCheese->getDescription()?></td>
    <td><?php echo $chickenBurgerCheese->getPrice()?></td>
    <td>Add Quantity-->
      <select>
    <option value="0">0</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
    <option value="7">8</option>
    <option value="8">8</option>
    <option value="9">9</option>
  </select>
  </td>
     <td></td>
   </tr>

   <tr>
     <td><?php echo $bbqChickenBurger->getName()?></td>
     <td><?php echo $bbqChickenBurger->getDescription()?></td>
     <td><?php echo $bbqChickenBurger->getPrice()?></td>
     <td>Add Quantity-->
      <select>
    <option value="0">0</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
    <option value="7">8</option>
    <option value="8">8</option>
    <option value="9">9</option>
  </select>
  </td>
     <td></td>
   </tr>


   <tr>
   <td><?php echo $beefBurger->getName()?></td>
     <td><?php echo $beefBurger->getDescription()?></td>
     <td><?php echo $beefBurger->getPrice()?></td>
     <td>Add Quantity-->
      <select>
    <option value="0">0</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
    <option value="7">8</option>
    <option value="8">8</option>
    <option value="9">9</option>
  </select>
  </td>
     <td></td>
   </tr>


   <tr>
   <td><?php echo $beefBurgerCheese->getName()?></td>
     <td><?php echo $beefBurgerCheese->getDescription()?></td>
     <td><?php echo $beefBurgerCheese->getPrice()?></td>
     <td>Add Quantity-->
      <select>
    <option value="0">0</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
    <option value="7">8</option>
    <option value="8">8</option>
    <option value="9">9</option>
  </select>
  </td>
     <td></td>
   </tr>


   <tr>
   <td><?php echo $juicyBeefBurger->getName()?></td>
     <td><?php echo $juicyBeefBurger->getDescription()?></td>
     <td><?php echo $juicyBeefBurger->getPrice()?></td>
     <td>Add Quantity-->
      <select>
    <option value="0">0</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
    <option value="7">8</option>
    <option value="8">8</option>
    <option value="9">9</option>
  </select>
  </td>
     <td></td>
   </tr>
   <tr>
   <td><?php echo $bun->getName()?></td>
     <td><?php echo $bun->getDescription()?></td>
     <td><?php echo $bun->getPrice()?></td>
     <td>Add Quantity-->
      <select>
    <option value="0">0</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
    <option value="7">8</option>
    <option value="8">8</option>
    <option value="9">9</option>
  </select>
  </td>
     <td></td>
   </tr>

   <tr>
   <td><?php echo $cheeseBun->getName()?></td>
     <td><?php echo $cheeseBun->getDescription()?></td>
     <td><?php echo $cheeseBun->getPrice()?></td>
     <td>Add Quantity-->
      <select>
    <option value="0">0</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
    <option value="7">8</option>
    <option value="8">8</option>
    <option value="9">9</option>
  </select>
  </td>
     <td></td>
   </tr>

   <tr>
       <td></td>
       <td></td>
       <td></td>
     <td><b>TOTAL AMOUNT</b></td>
     <td id="totalAmount"></td>
   </tr>
   
</tbody>
 </table><br><br>


<!-- Trigger/Open The Modal -->
<center><button class="button" id="myBtn">SUBMIT FOR INVOICE</button></center>

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>

    <table class="content-table">
    <thead>
      <tr>
        <th>Amount</th>
        <th>Ramadhan Discount (2%)</th>
        <th>GST (6%)</th>
        <th>Final Amount</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
    </tbody>
  </div>

</div>

<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>


</body>
</html>