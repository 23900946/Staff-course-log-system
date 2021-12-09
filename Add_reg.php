<link rel="stylesheet" href="styles.css"></link>
<h1>Add register</h1>
<form action="" method="post">
<label class="label" for="type" style="margin-right:150px;">First name:</label><input type="text" name="first_name" id="type" class="spacing">
<input type="button" name="Back" value="Back" class="Back" onclick="location.href='?page=Main';" style="margin-left:600px;">
<br>
<label class="label" for="type2" style="margin-right:150px;">Last name:</label><input type="text" name="last_name" id="type2" class="spacing">
<br>
<label class="label" style="margin-right:135px;">Department:</label>
<select name="filter" id="filter" style="margin-right:150px; margin-bottom:100px">
<?php
$Data = $comms->getData3();
foreach($Data as $name) {
?>
<option><?php echo $name['Department name']?></option>
<?php
}
?>
</select>
<br>
<label class="label" for="type3" style="margin-right:170px;">Section:</label><input type="text" name="section" id="type3" class="spacing">
<br>
<label class="label" for="type4" style="margin-right:170px;">Session:</label>
<select name="filter2" id="filter2" style="margin-bottom:100px">
  <?php
  $Data2 = $comms->getData2();
  foreach($Data2 as $name2) {
  ?>
  <option><?php echo $name2['Name']?></option>
  <?php
}
  ?>
</select>
<br>
<label class="label" for="type5" style="margin-right:190px;">Date:</label><input type="text" name="date" id="type5" class="spacing">
<br>
<label class="label" for="type6" style="margin-right:190px;">Year:</label><input type="text" name="year" id="type6" class="spacing">
<br>
<label class="label" for="type7" style="margin-right:190px;">Trainer:</label>
<select name="filter3" id="filter3" style="margin-right:150px; margin-bottom:100px">
  <?php
  $Data3 = $comms->getData4();
  foreach($Data3 as $name3) {
  ?>
  <option><?php echo $name3['Surname'] . " - " . $name3['Organisation']?></option>
  <?php
  }
  ?>
<br>
<input type="submit" value="Enter" class="Enter">
<br>
</form>
<?php
if($_SERVER["REQUEST_METHOD"] === "POST") {
$insert = $comms->addReg($_POST['first_name'], $_POST['last_name'], $_POST['filter'], $_POST['section'], $_POST['filter2'], $_POST['date'], $_POST['year'], $_POST['filter3']);
}
 ?>
