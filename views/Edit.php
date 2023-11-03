<?php
if(isset($_POST['updated']) && $_POST['updated'] != "") {
$update = $comms->update1($_POST['updated'], $_POST['filter2']);
}
if(isset($_POST['updated2']) && $_POST['updated2'] != "") {
$update = $comms->update2($_POST['updated2'], $_POST['filter']);
}
if(isset($_POST['updated3']) && $_POST['updated3'] != "") {
$update = $comms->update3($_POST['updated3'], $_POST['filter5']);
}
?>
<h1>Edit data</h1>
<div class="back-button">
<input type="button" class="button" name="Back" value="Back" onclick="location.href='?page=Main';">
</div>
<h2>Edit session name</h2>
<div class="column-wrapper">
  <div class="column">
  <form action="" method="post">
  <div class="form-row">
  <label for="type">Session name:</label>
  <select name="filter2" id="filter2">
  <?php
  $Data2 = $comms->getData2();
  foreach($Data2 as $name2) {
  ?>
  <option value="<?php echo $name2['ID']?>"><?php echo $name2['Name']?></option>
  <?php
  }
  ?>
  </select>
  </div>
  <div class="form-row">
  <label for="type"></label>
  <input type="text" name="updated" id="type">
</div>
  <div class="align-center">
  <input type="submit" value="Update" class="button">
  </div>
  </form>
</div>
</div>
<br>
<h2>Edit department name</h2>
<div class="column-wrapper">
  <div class="column">
  <form action="" method="post">
  <div class="form-row">
  <label for="type">Department:</label>
  <select name="filter" id="filter">
    <option value=""></option>
  <?php
  $Data3 = $comms->getDepartments();
  foreach($Data3 as $name3) {
  ?>
  <option value="<?php echo $name3['ID']?>"><?php echo $name3['department']?></option>
  <?php
  }
  ?>
  </select>
  </div>
  <div class="form-row">
  <label for="type"></label>
  <input type="text" name="updated2" id="type">
</div>
  <div class="align-center">
  <input type="submit" value="Update" class="button">
  </div>
  </form>
</div>
</div>
<br>
<h2>Edit section name</h2>
<div class="column-wrapper">
  <div class="column">
  <form action="" method="post">
  <div class="form-row">
  <label for="type">Section:</label>
  <select name="filter5" id="filter5">
  <option value=""></option>
  <?php
  $Data1 = $comms->getSections();
  foreach($Data1 as $name1) {
  ?>
  <option><?php echo $name1['section']?></option>
  <?php
  }
  ?>
  </select>
  </div>
  <div class="form-row">
  <label for="type"></label>
  <input type="text" name="updated3" id="type">
</div>
  <div class="align-center">
  <input type="submit" value="Update" class="button">
  </div>
  </form>
</div>
</div>
