<!doctype html>
<html>
  <head>

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
    table, th,td {
        border: 1px solid black;
    }


    </style>
  </head>
  <body>

  <?php 
  $products = [
      ["Iphone",2000],
      ["Samsung",500],
      ["Xperia",100]
    ];
  ?>
  <table class="table text-center" style = "width:100%">
 <thead class = "thead-dark" >
 <tr>
<th >ID</th>
<th>Name</th>
<th>Price</th>
<th>After Tax</th>
 </tr>
 </thead>
 <tbody>

 <?php
 $total = 0;
 $totaltax = 0;
  for ($i = 0; $i < count($products); $i++) { ?>
<tr>
<th><?php echo $i+1 ?></th>
<td><?php echo $products[$i][0]  ?></td>
<td><?php echo $products[$i][1]  ?></td>
<td><?php 
if ($products[$i][1] >= 2000 ) {
    echo $products[$i][1]*1.1; 
} else echo $products[$i][1]*1.05;
?></td>
</tr>   
 <?php $total = $total + $products[$i][1];
 } ?>
 <tr>
 <th>Total</th>
 <th></th>
 <th class="bg-success" style ="text-align: center;"><?php echo $total ?></th>
 <th></th>
 </tr>
 </tbody>
  </table>



  </body>
</html>