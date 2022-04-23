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
<?php 
  //created by Ikhtiar(1834619) 
  // take data from local storage
  $data = file('data.txt');

  // using loop for store data in variable
  for($i = 0; $i <24; $i++){
      if($i==0){
        $chickenBurgerName = $data[$i];
      }
      elseif($i==1){
        $chickenBurgerDescription = $data[$i];
      }
      elseif($i==2){
        $chickenBurgerPrice = $data[$i];
      }
      elseif($i==3){
        $chickenBurgerCheeseName = $data[$i];
      }
      elseif($i==4){
        $chickenBurgerCheeseDescription = $data[$i];
      }
      elseif($i==5){
        $chickenBurgerCheesePrice = $data[$i];
      }
      elseif($i==6){
        $bbqChickenBurgerName = $data[$i];
      }
      elseif($i==7){
        $bbqChickenBurgerDescription = $data[$i];
      }
      elseif($i==8){
        $bbqChickenBurgerPrice = $data[$i];
      }
      elseif($i==9){
        $beefBurgerName = $data[$i];
      }
      elseif($i==10){
        $beefBurgerDescription = $data[$i];
      }
      elseif($i==11){
        $beefBurgerPrice = $data[$i];
      }
      elseif($i==12){
        $beefBurgerCheeseName = $data[$i];
      }
      elseif($i==13){
        $beefBurgerCheeseDescription = $data[$i];
      }
      elseif($i==14){
        $beefBurgerCheesePrice = $data[$i];
      }
      elseif($i==15){
        $juicyBeefBurgerName = $data[$i];
      }
      elseif($i==16){
        $juicyBeefBurgerDescription = $data[$i];
      }
      elseif($i==17){
        $juicyBeefBurgerPrice = $data[$i];
      }
      elseif($i==18){
        $bunName = $data[$i];
      }
      elseif($i==19){
        $bunDescription = $data[$i];
      }
      elseif($i==20){
        $bunPrice = $data[$i];
      }
      elseif($i==21){
        $cheeseBunName = $data[$i];
      }
      elseif($i==22){
        $cheeseBunDescription = $data[$i];
      }
      elseif($i==23){
        $cheeseBunPrice = $data[$i];
      }
  }
?>
<!-- markup GUI created by rasel ahmed(1836247) -->

    <marquee onmouseover="stop()"; onmouseout="start()" class="headline" ><h1>**Welcome to IIUM Cafe**</h1></marquee>
    <h3 class ="heading"><u>'Please Select Your Items'</u></h3>

    <!-- use date function(IKHTIAR) -->
<h4 style="text-align:right">Date: 
<?php
// Return date/time info of a timestamp; then format the output
    $date=getdate(date("U"));
    echo "$date[weekday], $date[month] $date[mday], $date[year]";
?>
</h4>
  <!-- table created by rasel ahmed -->
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
     <td><?php echo $chickenBurgerName?></td>  <!--input data in table using php function(Ikhtiar) -->
     <td><?php echo $chickenBurgerDescription?></td>
     <td><?php echo $chickenBurgerPrice?></td>
     <?php
echo "    <td>Add Quantity-->\n";
echo "     <select id=\"quantity1\" onchange=\"getValue()\">\n";
echo "   <option value=\"0\">0</option>\n";
echo "   <option value=\"1\">1</option>\n";
echo "   <option value=\"2\">2</option>\n";
echo "   <option value=\"3\">3</option>\n";
echo "   <option value=\"4\">4</option>\n";
echo "   <option value=\"5\">5</option>\n";
echo "   <option value=\"6\">6</option>\n";
echo "   <option value=\"7\">7</option>\n";
echo "   <option value=\"8\">8</option>\n";
echo "   <option value=\"9\">9</option>\n";
echo " </select>\n";
echo " </td>\n";
echo "     <td id=\"productTotal1\"></td>\n";
?>

   </tr>
   <tr>
   <td><?php echo $chickenBurgerCheeseName?></td>
    <td><?php echo $chickenBurgerCheeseDescription?></td>
    <td><?php echo $chickenBurgerCheesePrice?></td>
    <?php
echo "    <td>Add Quantity-->\n";
echo "     <select id=\"quantity2\" onchange=\"getValue()\">\n";
echo "   <option value=\"0\">0</option>\n";
echo "   <option value=\"1\">1</option>\n";
echo "   <option value=\"2\">2</option>\n";
echo "   <option value=\"3\">3</option>\n";
echo "   <option value=\"4\">4</option>\n";
echo "   <option value=\"5\">5</option>\n";
echo "   <option value=\"6\">6</option>\n";
echo "   <option value=\"7\">7</option>\n";
echo "   <option value=\"8\">8</option>\n";
echo "   <option value=\"9\">9</option>\n";
echo " </select>\n";
echo " </td>\n";
echo "     <td id=\"productTotal2\"></td>\n";
?>
   </tr>

   <tr>
     <td><?php echo $bbqChickenBurgerName?></td>
     <td><?php echo $bbqChickenBurgerDescription?></td>
     <td><?php echo $bbqChickenBurgerPrice?></td>
     <?php
echo "    <td>Add Quantity-->\n";
echo "     <select id=\"quantity3\" onchange=\"getValue()\">\n";
echo "   <option value=\"0\">0</option>\n";
echo "   <option value=\"1\">1</option>\n";
echo "   <option value=\"2\">2</option>\n";
echo "   <option value=\"3\">3</option>\n";
echo "   <option value=\"4\">4</option>\n";
echo "   <option value=\"5\">5</option>\n";
echo "   <option value=\"6\">6</option>\n";
echo "   <option value=\"7\">7</option>\n";
echo "   <option value=\"8\">8</option>\n";
echo "   <option value=\"9\">9</option>\n";
echo " </select>\n";
echo " </td>\n";
echo "     <td id=\"productTotal3\"></td>\n";
?>
   </tr>


   <tr>
   <td><?php echo $beefBurgerName?></td>
     <td><?php echo $beefBurgerDescription?></td>
     <td><?php echo $beefBurgerPrice?></td>
     <?php
echo "    <td>Add Quantity-->\n";
echo "     <select id=\"quantity4\" onchange=\"getValue()\">\n";
echo "   <option value=\"0\">0</option>\n";
echo "   <option value=\"1\">1</option>\n";
echo "   <option value=\"2\">2</option>\n";
echo "   <option value=\"3\">3</option>\n";
echo "   <option value=\"4\">4</option>\n";
echo "   <option value=\"5\">5</option>\n";
echo "   <option value=\"6\">6</option>\n";
echo "   <option value=\"7\">7</option>\n";
echo "   <option value=\"8\">8</option>\n";
echo "   <option value=\"9\">9</option>\n";
echo " </select>\n";
echo " </td>\n";
echo "     <td id=\"productTotal4\"></td>\n";
?>
   </tr>


   <tr>
   <td><?php echo $beefBurgerCheeseName?></td>
     <td><?php echo $beefBurgerCheeseDescription?></td>
     <td><?php echo $beefBurgerCheesePrice?></td>
     <?php
echo "    <td>Add Quantity-->\n";
echo "     <select id=\"quantity5\" onchange=\"getValue()\">\n";
echo "   <option value=\"0\">0</option>\n";
echo "   <option value=\"1\">1</option>\n";
echo "   <option value=\"2\">2</option>\n";
echo "   <option value=\"3\">3</option>\n";
echo "   <option value=\"4\">4</option>\n";
echo "   <option value=\"5\">5</option>\n";
echo "   <option value=\"6\">6</option>\n";
echo "   <option value=\"7\">7</option>\n";
echo "   <option value=\"8\">8</option>\n";
echo "   <option value=\"9\">9</option>\n";
echo " </select>\n";
echo " </td>\n";
echo "     <td id=\"productTotal5\"></td>\n";
?>
   </tr>


   <tr>
   <td><?php echo $juicyBeefBurgerName?></td>
     <td><?php echo $juicyBeefBurgerDescription?></td>
     <td><?php echo $juicyBeefBurgerPrice?></td>
     <?php
echo "    <td>Add Quantity-->\n";
echo "     <select id=\"quantity6\" onchange=\"getValue()\">\n";
echo "   <option value=\"0\">0</option>\n";
echo "   <option value=\"1\">1</option>\n";
echo "   <option value=\"2\">2</option>\n";
echo "   <option value=\"3\">3</option>\n";
echo "   <option value=\"4\">4</option>\n";
echo "   <option value=\"5\">5</option>\n";
echo "   <option value=\"6\">6</option>\n";
echo "   <option value=\"7\">7</option>\n";
echo "   <option value=\"8\">8</option>\n";
echo "   <option value=\"9\">9</option>\n";
echo " </select>\n";
echo " </td>\n";
echo "     <td id=\"productTotal6\"></td>\n";
?>
   </tr>
   <tr>
   <td><?php echo $bunName?></td>
     <td><?php echo $bunDescription?></td>
     <td><?php echo $bunPrice?></td>
     <?php
echo "    <td>Add Quantity-->\n";
echo "     <select id=\"quantity7\" onchange=\"getValue()\">\n";
echo "   <option value=\"0\">0</option>\n";
echo "   <option value=\"1\">1</option>\n";
echo "   <option value=\"2\">2</option>\n";
echo "   <option value=\"3\">3</option>\n";
echo "   <option value=\"4\">4</option>\n";
echo "   <option value=\"5\">5</option>\n";
echo "   <option value=\"6\">6</option>\n";
echo "   <option value=\"7\">7</option>\n";
echo "   <option value=\"8\">8</option>\n";
echo "   <option value=\"9\">9</option>\n";
echo " </select>\n";
echo " </td>\n";
echo "     <td id=\"productTotal7\"></td>\n";
?>
   </tr>

   <tr>
   <td><?php echo $cheeseBunName?></td>
     <td><?php echo $cheeseBunDescription?></td>
     <td><?php echo $cheeseBunPrice?></td>
     <?php
echo "    <td>Add Quantity-->\n";
echo "     <select id=\"quantity8\" onchange=\"getValue()\">\n";
echo "   <option value=\"0\">0</option>\n";
echo "   <option value=\"1\">1</option>\n";
echo "   <option value=\"2\">2</option>\n";
echo "   <option value=\"3\">3</option>\n";
echo "   <option value=\"4\">4</option>\n";
echo "   <option value=\"5\">5</option>\n";
echo "   <option value=\"6\">6</option>\n";
echo "   <option value=\"7\">7</option>\n";
echo "   <option value=\"8\">8</option>\n";
echo "   <option value=\"9\">9</option>\n";
echo " </select>\n";
echo " </td>\n";
echo "     <td id=\"productTotal8\"></td>\n";
?>
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

  <?php 
    // Return date/time info of a timestamp; then format the output
    $date=getdate(date("U"));
    echo "$date[weekday], $date[month] $date[mday], $date[year]";
    ?>

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
        <td id="Amount" onchange="getValue()"></td>
        <td id="rmdnAmount" onchange="getValue()"></td>
        <td id="gstAmount" onchange="getValue()"></td>
        <td id="finalAmount" onchange="getValue()"></td>
      </tr>
    </tbody>
  </div>

</div>

<script>

  function getValue()
  {
    // get user selected value from table
    // created by saif, ikhtiar
    let quantity1= document.getElementById("quantity1").value;
    let quantity2= document.getElementById("quantity2").value;
    let quantity3= document.getElementById("quantity3").value;
    let quantity4= document.getElementById("quantity4").value;
    let quantity5= document.getElementById("quantity5").value;
    let quantity6= document.getElementById("quantity6").value;
    let quantity7= document.getElementById("quantity7").value;
    let quantity8= document.getElementById("quantity8").value;
    // calculation product total
    let price1 = quantity1*13.5;
    let price2 = quantity2*14.5;
    let price3 = quantity3*17;
    let price4 = quantity4*14;
    let price5 = quantity5*15;
    let price6 = quantity6*19;
    let price7 = quantity7*2;
    let price8 = quantity8*1.5;
    // set product total in table
    let productTotal1 = document.getElementById("productTotal1").innerHTML = price1;
    let productTotal2 = document.getElementById("productTotal2").innerHTML = price2;
    let productTotal3 = document.getElementById("productTotal3").innerHTML = price3;
    let productTotal4 = document.getElementById("productTotal4").innerHTML = price4;
    let productTotal5 = document.getElementById("productTotal5").innerHTML = price5;
    let productTotal6 = document.getElementById("productTotal6").innerHTML = price6;
    let productTotal7 = document.getElementById("productTotal7").innerHTML = price7;
    let productTotal8 = document.getElementById("productTotal8").innerHTML = price8;
    
    // calculation total amount of all product
    let totalAmount = document.getElementById("totalAmount").innerHTML =
    Math.floor((price1+price2+price3+price4+price5+price6+price7+price8)*100) /100.0;

    let Amount = document.getElementById("Amount").innerHTML = totalAmount;

    // calculation discount
    let rmdnAmount = document.getElementById("rmdnAmount").innerHTML =
    Math.floor((Amount - (Amount*0.02))*100) / 100.0;
    // calculate tax
    let gstAmount = document.getElementById("gstAmount").innerHTML =
    Math.floor((rmdnAmount*1.06)*100) / 100.0;
    // show the final amount
    let finalAmount = document.getElementById("finalAmount").innerHTML = gstAmount;
  }

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