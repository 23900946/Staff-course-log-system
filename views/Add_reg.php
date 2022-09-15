<?php
if(isset($_POST['last_name']) && $_POST['last_name'] != "") {
$insert = $comms->addReg($_POST['first_name'], $_POST['last_name'], $_POST['filter'], $_POST['filter5'], $_POST['filter2'], $_POST['Date'], $_POST['year'], $_POST['filter3']);
}
?>
<link rel="stylesheet" href="styles.css"></link>
<h1>Add register</h1>
<div class="columns">
<label class="label2" for="type">First name:</label>
<br>
<label class="label2" for="type2">Last name:</label>
<br>
<label class="label2">Department:</label>
<br>
<label class="label2" for="type3">Section:</label>
<br>
<label class="label2" for="type4">Session:</label>
<br>
<label class="label2" for="type5">Date:</label>
<br>
<label class="label2" for="type6">Year:</label>
<br>
<label class="label2" for="type7">Trainer:</label>
</div>
<div class="columns">
<form action="" method="post">
<input type="text" name="first_name" id="type" class="spacing">
<br>
<input type="text" name="last_name" id="type2" class="spacing">
<br>
<select name="filter" class="select" id="filter" style="margin-bottom:100px">
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
<select name="filter5" class="select" id="filter5" style="margin-bottom:100px">
  <?php
  $Data1 = $comms->getData1();
  foreach($Data1 as $name1) {
  ?>
  <option><?php echo $name1['Section name']?></option>
  <?php
}
  ?>
</select>
<br>
<select name="filter2" class="select" id="filter2" style="margin-bottom:100px">
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
<input type="date" name="Date" class="spacing">
<br>
<input type="text" name="year" id="type6" class="spacing">
<br>
<select name="filter3" id="filter3" class="select" style="margin-bottom:100px">
  <?php
  $Data3 = $comms->getData4();
  foreach($Data3 as $name3) {
  ?>
  <option><?php echo $name3['First name'] . " - " . $name3['Surname'] . " - " . $name3['Organisation'] . " - " . $name3['Phone number'] . " - " . $name3['Email']?></option>
  <?php
  }
  ?>
</select>
<br>
<input type="submit" value="Enter" class="Enter" style="margin-left:400px;">
<br>
</form>
</div>
<div class="columns">
<input type="button" class="button" name="Back" value="Back" class="Back" style="margin-left:200px;" onclick="location.href='?page=Main';">
</div>
