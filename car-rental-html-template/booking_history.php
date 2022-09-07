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
  
<h3 style="color:red;">My Booking</h3>
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
    <th>Status</th>
  </tr>

  <?php
    foreach($result as $r)
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
      <td><?php echo $r->status; ?></td>
  </tr>

  <?php
    }
  ?>

</table>

</body>
</html>
