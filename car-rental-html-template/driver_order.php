<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}

table.center {
  margin-left: auto; 
  margin-right: auto;
}
</style>
</head>
<body>
  
<form method="post">

                                      <!-- pending order  -->

<h3 style="color:red;">pending order</h3>

<table class="center">
 <tr>
    <!-- <th>Customer Name</th> -->
    <th>Mobile</th>
    <th>Pickup Location</th> 
    <th>Drop Location</th>
    <th>Pickup Date</th>
    <th>Pickup Time</th>
    <th>Adult</th>
    <th>Child</th>
    <th>Special Request</th>
    <th>Prices</th>
    <th>Action</th>
  </tr>

<?php
 foreach($result as $r)
 {
  $status = $r->status;
  if($status == "waiting")
  {
?>

  <tr>
      <td><?php echo $r->mobile; ?></td>
      <td><?php echo $r->pickup_location; ?></td>
      <td><?php echo $r->drop_location; ?></td>
      <td><?php echo $r->pickup_date; ?></td>
      <td><?php echo $r->pickup_time; ?></td>
      <td><?php echo $r->select_adult; ?></td>
      <td><?php echo $r->select_child; ?></td>
      <td><?php echo $r->special_request; ?></td>
      <td><?php echo $r->price; ?></td>
      <td>
        <?php $_SESSION['orderid'] = $r->mid; ?>
<?php
  if($_SESSION['orderid'])
  {
  $status = $r->status;
  if($status == "accept")
  {
    echo "Request Approval";
  }
  else if($status == "reject")
  {
    echo "Request Unapproval";
  }
  else
  {
?>
  <a href="accept?aid=<?php echo $r->mid; ?> &&sta=<?php echo $r->status; ?>" class="btn btn-warning">Accept</a>
  <a href="reject?rid=<?php echo $r->mid; ?>" class="btn btn-warning">Reject</a>
<?php
  }
?>
      </td>
  </tr>
  <?php
    }
  }
}
  ?>
</table>


                                    <!-- success order  -->

<h3 style="color:green;">Success order</h3>

<table class="center">
 <tr>
    <!-- <th>Customer Name</th> -->
    <th>Mobile</th>
    <th>Pickup Location</th> 
    <th>Drop Location</th>
    <th>Pickup Date</th>
    <th>Pickup Time</th>
    <th>Adult</th>
    <th>Child</th>
    <th>Special Request</th>
    <th>Prices</th>
    <th>Action</th>
  </tr>

<?php
 foreach($result as $r)
 {
  $status = $r->status;
  if($status == "accept")
  {
?>

  <tr>
      <td><?php echo $r->mobile; ?></td>
      <td><?php echo $r->pickup_location; ?></td>
      <td><?php echo $r->drop_location; ?></td>
      <td><?php echo $r->pickup_date; ?></td>
      <td><?php echo $r->pickup_time; ?></td>
      <td><?php echo $r->select_adult; ?></td>
      <td><?php echo $r->select_child; ?></td>
      <td><?php echo $r->special_request; ?></td>
      <td><?php echo $r->price; ?></td>
      <td><?php echo $r->status; ?></td>
  </tr>

<?php
  }
}
?>
</table>


                                        <!-- cancel order  -->

<h3 style="color:red;">Cancel order</h3>

<table class="center">
 <tr>
    <!-- <th>Customer Name</th> -->
    <th>Mobile</th>
    <th>Pickup Location</th> 
    <th>Drop Location</th>
    <th>Pickup Date</th>
    <th>Pickup Time</th>
    <th>Adult</th>
    <th>Child</th>
    <th>Special Request</th>
    <th>Prices</th>
    <th>Action</th>
  </tr>

<?php
 foreach($result as $r)
 {
  $status = $r->status;
  if($status == "reject")
  {
?>

  <tr>
      <td><?php echo $r->mobile; ?></td>
      <td><?php echo $r->pickup_location; ?></td>
      <td><?php echo $r->drop_location; ?></td>
      <td><?php echo $r->pickup_date; ?></td>
      <td><?php echo $r->pickup_time; ?></td>
      <td><?php echo $r->select_adult; ?></td>
      <td><?php echo $r->select_child; ?></td>
      <td><?php echo $r->special_request; ?></td>
      <td><?php echo $r->price; ?></td>
      <td><?php echo $r->status; ?></td>
  </tr>

<?php
  }
}
?>
</table>



</form>
</body>
</html>