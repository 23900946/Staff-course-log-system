<link rel="stylesheet" href="styles.css"></link>
<h1>Add session</h1>
<form action="" method="post">
<label class="label" for="type" style="margin-right:100px;">Session name:</label><input type="text" name="session_name" id="type" class="spacing">
<input type="button" name="Back" value="Back" onclick="location.href='?page=Main';" style="margin-left:600px;">
<br>
<input type="submit" value="Enter" class="Enter">
</form>
<section id="view">
  <table>
    <tr>
      <th>Session name</th>
    </tr>
    <?php
    $Data = $comms->getData2();
    foreach($Data as $session) {
          ?>
          <tr>
            <td><?php echo $session['Name']?></td>
          </tr>
    <?php
          }
  ?>
  </table>
</section>
<?php
if($_SERVER["REQUEST_METHOD"] === "POST") {
$insert = $comms->addSession($_POST['session_name']);
}
 ?>
