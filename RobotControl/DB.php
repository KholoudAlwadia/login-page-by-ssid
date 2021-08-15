<?php
include "connect.php";
if (isset($_POST['ViewDB'])) {
  ?>
</head>
<body>



<table border="2">
  <tr>
    <td>Forward</td>
    <td>Backward</td>
    <td>Left</td>
    <td>Right</td>
    <td>Stop</td>



  </tr>
<?php




    $st = mysqli_query($db, "UPDATE `robot-base` SET `Stop`='0' WHERE id='1'");


  $query ="SELECT * FROM `robot-base`";
  $records = mysqli_query($db,$query)or die( mysqli_error($db)); // fetch data from database

  while($data = mysqli_fetch_array($records))
  {
  ?>
    <tr>
      <td><?php echo $data['Forward']; ?></td>
      <td><?php echo $data['Backward']; ?></td>
      <td><?php echo $data['leftt']; ?></td>
      <td><?php echo $data['rightt']; ?></td>
      <td><?php echo $data['Stop']; ?></td>


    </tr>
  <?php
}}
  ?>
  </table>
  <?php mysqli_close($db); // Close connection ?>
  </body>
  </html>
