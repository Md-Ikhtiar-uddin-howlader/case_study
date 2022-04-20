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

$chickenBurger->setValue("Chicken burger", "This is chicken burger with fried chicken", 13.50);
$chickenBurgerCheese->setValue("Chicken cheese burger","This is chicken burger with fried chicken and cheese", 14.50);
$bbqChickenBurger->setValue("BBQ Chicken cheese burger", "This is BBQ chicken burger with bbq chicken petty and cheese", 17.00);
$beefBurger->setValue("Beef burger", "This is beef burger with beef petty", 14.00);
$beefBurgerCheese->setValue("Beef Cheese burger", "This is beef burger with beef petty and cheese", 15.00);
$juicyBeefBurger->setValue("Juicy Beef Cheese burger", "This is beef burger with double juicy beef petty and cheese", 19.00);
$bun->setValue("Chocolate bun", "Small chocolate bun", 2.00);
$cheeseBun->setValue("Cheese bun", "Small cheese bun", 1.50);
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
      <select id="quantity1" onchange="getValue()">
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

     <td id="productTotal1"></td>

   </tr>
   <tr>
   <td><?php echo $chickenBurgerCheese->getName()?></td>
    <td><?php echo $chickenBurgerCheese->getDescription()?></td>
    <td><?php echo $chickenBurgerCheese->getPrice()?></td>
    <td>Add Quantity-->
      <select id="quantity2" onchange="getValue()">
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
     <td id="productTotal2"></td>
   </tr>

   <tr>
     <td><?php echo $bbqChickenBurger->getName()?></td>
     <td><?php echo $bbqChickenBurger->getDescription()?></td>
     <td><?php echo $bbqChickenBurger->getPrice()?></td>
     <td>Add Quantity-->
      <select id="quantity3" onchange="getValue()">
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
     <td id="productTotal3"></td>
   </tr>


   <tr>
   <td><?php echo $beefBurger->getName()?></td>
     <td><?php echo $beefBurger->getDescription()?></td>
     <td><?php echo $beefBurger->getPrice()?></td>
     <td>Add Quantity-->
      <select id="quantity4" onchange="getValue()">
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
     <td id="productTotal4"></td>
   </tr>


   <tr>
   <td><?php echo $beefBurgerCheese->getName()?></td>
     <td><?php echo $beefBurgerCheese->getDescription()?></td>
     <td><?php echo $beefBurgerCheese->getPrice()?></td>
     <td>Add Quantity-->
      <select id="quantity5" onchange="getValue()">
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
     <td id="productTotal5"></td>
   </tr>


   <tr>
   <td><?php echo $juicyBeefBurger->getName()?></td>
     <td><?php echo $juicyBeefBurger->getDescription()?></td>
     <td><?php echo $juicyBeefBurger->getPrice()?></td>
     <td>Add Quantity-->
      <select id="quantity6" onchange="getValue()">
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
     <td id="productTotal6"></td>
   </tr>
   <tr>
   <td><?php echo $bun->getName()?></td>
     <td><?php echo $bun->getDescription()?></td>
     <td><?php echo $bun->getPrice()?></td>
     <td>Add Quantity-->
      <select id="quantity7" onchange="getValue()">
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
     <td id="productTotal7"></td>
   </tr>

   <tr>
   <td><?php echo $cheeseBun->getName()?></td>
     <td><?php echo $cheeseBun->getDescription()?></td>
     <td><?php echo $cheeseBun->getPrice()?></td>
     <td>Add Quantity-->
      <select id="quantity8" onchange="getValue()">
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
     <td id="productTotal8"></td>
   </tr>

   <tr>
       <td></td>
       <td></td>
       <td></td>
     <td><b>TOTAL AMOUNT</b></td>
     <td id="totalAmount" onchange="getValue()"></td>
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

// 13.5 , 14.5 , 17.0, 14, 15,19, 2, 1.5

  function getValue()
  {
    let quantity1= document.getElementById("quantity1").value;
    let quantity2= document.getElementById("quantity2").value;
    let quantity3= document.getElementById("quantity3").value;
    let quantity4= document.getElementById("quantity4").value;
    let quantity5= document.getElementById("quantity5").value;
    let quantity6= document.getElementById("quantity6").value;
    let quantity7= document.getElementById("quantity7").value;
    let quantity8= document.getElementById("quantity8").value;
    let price1 = quantity1*13.5;
    let price2 = quantity2*14.5;
    let price3 = quantity3*17;
    let price4 = quantity4*14;
    let price5 = quantity5*15;
    let price6 = quantity6*19;
    let price7 = quantity7*2;
    let price8 = quantity8*1.5;

    let productTotal1 = document.getElementById("productTotal1").innerHTML = price1;
    let productTotal2 = document.getElementById("productTotal2").innerHTML = price2;
    let productTotal3 = document.getElementById("productTotal3").innerHTML = price3;
    let productTotal4 = document.getElementById("productTotal4").innerHTML = price4;
    let productTotal5 = document.getElementById("productTotal5").innerHTML = price5;
    let productTotal6 = document.getElementById("productTotal6").innerHTML = price6;
    let productTotal7 = document.getElementById("productTotal7").innerHTML = price7;
    let productTotal8 = document.getElementById("productTotal8").innerHTML = price8;
    let totalAmount = document.getElementById("totalAmount").innerHTML =
    (price1+price2+price3+price4+price5+price6+price7+price8);
  }
  /*
  function getTotal()
  {
    let productTotal1 = document.getElementById("productTotal1").innerHTML;
    let productTotal2 = document.getElementById("productTotal2").innerHTML;
    let productTotal3 = document.getElementById("productTotal3").innerHTML;
    let productTotal4 = document.getElementById("productTotal4").innerHTML;
    let productTotal5 = document.getElementById("productTotal5").innerHTML;
    let productTotal6 = document.getElementById("productTotal6").innerHTML;
    let productTotal7 = document.getElementById("productTotal7").innerHTML;
    let productTotal8 = document.getElementById("productTotal8").innerHTML;

    let totalAmount = document.getElementById("totalAmount").innerHTML = (productTotal1 + productTotal2 + productTotal3 + productTotal4 + 
    productTotal5 + productTotal6 + productTotal7 + productTotal8);
  }*/

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