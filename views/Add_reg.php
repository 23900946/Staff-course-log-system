<?php
if(isset($_POST['last_name']) && $_POST['last_name'] != "") {
$insert = $comms->addReg($_POST['first_name'], $_POST['last_name'], $_POST['filter'], $_POST['filter5'], $_POST['filter2'], $_POST['Date'], $_POST['year'], $_POST['filter3']);
}
?>
<link rel="stylesheet" href="styles.css"></link>
<h1>Add register</h1>
<div class="back-button">
<input type="button" class="button" name="Back" value="Back" class="Back" onclick="location.href='?page=Main';">
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
<label for="department">Department:</label>
<select name="filter" id="filter" name="department">
<?php
$Data = $comms->getData3();
foreach($Data as $name) {
?>
<option><?php echo $name['Department name']?></option>
<?php
}
?>
</select>
</div>
<div class="form-row">
<label for="filter5">Section:</label>
<select name="filter5" id="filter5">
<?php
$Data1 = $comms->getData1();
foreach($Data1 as $name1) {
?>
<option><?php echo $name1['Section name']?></option>
<?php
}
?>
</select>
</div>
<div class="form-row">
<label for="filter2">Session:</label>
<select name="filter2" id="filter2">
<?php
$Data2 = $comms->getData2();
foreach($Data2 as $name2) {
?>
<option><?php echo $name2['Name']?></option>
<?php
}
?>
</select>
</div>
<div class="form-row">
<label for="type5">Date:</label>
<input type="date" name="Date">
</div>
<div class="form-row">
<label for="type6">Year:</label>
<input type="text" name="year" id="type6">
</div>
<div class="form-row">
<label for="type7">Trainer:</label>
<select name="filter3" id="filter3">
<?php
$Data3 = $comms->getData4();
foreach($Data3 as $name3) {
?>
<option><?php echo $name3['First name'] . " - " . $name3['Surname'] . " - " . $name3['Organisation'] . " - " . $name3['Phone number'] . " - " . $name3['Email']?></option>
<?php
}
?>
</select>
</div>
<div class="align-center">
<input type="submit" value="Enter" class="button">
</div>
</form>
</div>
</div>
