<?php
include("fetchbuyerdata.php");
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container">
 <div class="row">
   <div class="col-sm-8">
    <?php echo $deleteMsg??''; ?>
    <div class="table-responsive">
      <table class="table table-bordered">
       <thead><tr><th>S.N</th>
         <th>Name</th>
         <th>Contact</th>
         <th>Crop Name</th>
         <th>Crop Quantity</th>
         <th>Minimum buying price</th>
         <th>Address</th>
    </thead>
    <tbody>
  <?php
      if(is_array($fetchData))  {     
      $sn=1;
      foreach($fetchData as $data) {
    ?>
      <tr>
      <td><?php echo $sn; ?></td>
      <td><?php echo $data['name']??''; ?></td>
      <td><?php echo $data['phoneNor']??''; ?></td>
      <td><?php echo $data['cropname']??''; ?></td>
      <td><?php echo $data['cropquantity']??''; ?></td>
      <td><?php echo $data['mbp']??''; ?></td>
      <td><?php echo $data['address']??''; ?></td>
     </tr>
     <?php
      $sn++;}}else{ ?>
      <tr>
        <td colspan="8">
    <?php echo $fetchData; ?>
  </td>
    <tr>
    <?php
    }?>
    </tbody>
     </table>
   </div>
</div>
</div>
</div>
</body>
</html>
/*http://127.0.0.1/farmer-main/farmer-main/buyertable.php*/