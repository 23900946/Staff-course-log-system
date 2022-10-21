<?php
$message = "";
if(isset($_POST['email']) && $_POST['email'] != "") {
$insert = $comms->addTrainer($_POST['first_name'], $_POST['last_name'], $_POST['org'], $_POST['phone_number'], $_POST['email']);
$message = "";
}
if(isset($_POST['trainerID'])) {
$delete = $comms->deleteTrainer($_POST['trainerID']);
$message = "Trainer deleted";
}
?>
<h1>Add trainer</h1>
<div class="back-button">
<input type="button" class="button" name="Back" value="Back" onclick="location.href='?page=Main';">
</div>
<div class="column-wrapper">
<div class="column">
<form action="" method="post">
<div class="form-row">
<label for="type">First name:</label>
<input type="text" name="first_name" id="type">
</div>
<div class="form-row">
<label for="type2">Last name:</label>
<input type="text" name="last_name" id="type2">
</div>
<div class="form-row">
<label for="type3">Organisation:</label>
<input type="text" name="org" id="type3">
</div>
<div class="form-row">
<label for="type4">Phone number:</label>
<input type="text" name="phone_number" id="type4">
</div>
<div class="form-row">
<label for="type5">Email:</label>
<input type="text" name="email" id="type5">
</div>
<div class="align-center">
<input type="submit" value="Enter" class="button">
</div>
</form>
</div>
</div>
<div class="clear">
  <br>
  <p style="text-align:center; color: white; font-size: 30px;"><?php echo $message ?></p>
</div>
<section id="view">
  <table>
    <tr>
      <th>First name</th>
      <th>Surname</th>
      <th>Organisation</th>
      <th>Phone number</th>
      <th>Email</th>
      <th>Delete</th>
    </tr>
    <?php
    $Data = $comms->getData4();
    foreach($Data as $trainer) {
          ?>
          <tr>
            <td><?php echo $trainer['First name']?></td>
            <td><?php echo $trainer['Surname']?></td>
            <td><?php echo $trainer['Organisation']?></td>
            <td><?php echo $trainer['Phone number']?></td>
            <td><?php echo $trainer['Email']?></td>
            <td style="justify-content:center; align-items: center; display: flex;"><form action="" method="post">
              <input type="hidden" name="trainerID" value="<?php echo $trainer["ID"]?>">
              <input type="submit" value="X" onclick="return confirm('Are you sure you want to delete?')" class="delete"></input></form></td>
          </tr>
    <?php
          }
  ?>
  </table>
</section>
