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
<form action="" method="post">
<label class="label" for="type" style="margin-right:100px; margin-left:800px;">Session name:</label><input type="text" name="session_name" id="type" class="spacing">
<input type="button" class="button" name="Back" value="Back" onclick="location.href='?page=Main';" style="margin-left:300px;">
<br>
<input type="submit" value="Enter" class="Enter" style="margin-left:1220px;">
</form>
<br>
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
              <input type="submit" value="X" class="delete"></input></form></td>
          </tr>
    <?php
          }
  ?>
  </table>
</section>
