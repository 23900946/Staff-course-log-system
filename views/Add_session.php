<?php
$message = "";
if(isset($_POST['session_name']) && $_POST['session_name'] != "") {
$insert = $comms->addSession($_POST['session_name']);

  if($insert) {

    header("location: " .$_SERVER['PHP_SELF']);
    $message = "";

  }

}

 if(isset($_POST['sessionID'])) {
 $delete = $comms->deleteSession($_POST['sessionID']);
 $message = "Session deleted";
}
  ?>
<link rel="stylesheet" href="styles.css"></link>
<h1>Add session</h1>
<div class="back-button">
<input type="button" class="button" name="Back" value="Back" onclick="location.href='?page=Main';">
</div>
<div class="column-wrapper">
  <div class="column">
  <form action="" method="post">
  <div class="form-row">
  <label for="type">Session name:</label>
  <input type="text" name="session_name" id="type">
  </div>
  <div class="align-center">
  <input type="submit" value="Enter" class="button">
  </div>
  </form>
  </div>
</div>
<p style="text-align:center; color: white; font-size: 30px;"><?php echo $message ?></p>
<section id="view">
  <table>
    <tr>
      <th>Session name</th>
      <th>Delete</th>
    </tr>
    <?php
    $Data = $comms->getData2();
    foreach($Data as $session) {
          ?>
          <tr>
            <td><?php echo $session['Name']?></td>
            <td style="justify-content:center; align-items: center; display: flex;"><form action="" method="post">
              <input type="hidden" name="sessionID" value="<?php echo $session["ID"]?>">
              <input type="submit" value="X" onclick="return confirm('Are you sure you want to delete?')" class="delete"></input></form></td>
          </tr>
    <?php
          }
  ?>
  </table>
</section>
