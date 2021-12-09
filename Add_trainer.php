<h1>Add trainer</h1>
<form action="" method="post">
<label class="label" for="type" style="margin-right:150px;">First name:</label><input type="text" name="first_name" id="type" class="spacing">
<input type="button" name="Back" value="Back" onclick="location.href='?page=Main';" style="margin-left:600px;">
<br>
<label class="label" for="type2" style="margin-right:150px;">Last name:</label><input type="text" name="last_name" id="type2" class="spacing">
<br>
<label class="label" for="type3" style="margin-right:130px;">Organisation:</label><input type="text" name="org" id="type3" class="spacing">
<br>
<label class="label" for="type4" style="margin-right:120px;">Phone number:</label><input type="text" name="phone_number" id="type4" class="spacing">
<br>
<label class="label" for="type5" style="margin-right:170px;">Email:</label><input type="text" name="email" id="type5" class="spacing">
<input type="submit" value="Enter" class="Enter">
</form>
<section id="view">
  <table>
    <tr>
      <th>First name</th>
      <th>Surname</th>
      <th>Organisation</th>
      <th>Phone number</th>
      <th>Email</th>
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
          </tr>
    <?php
          }
  ?>
  </table>
</section>
  <?php
  if($_SERVER["REQUEST_METHOD"] === "POST") {
  $insert = $comms->addTrainer($_POST['first_name'], $_POST['last_name'], $_POST['org'], $_POST['phone_number'], $_POST['email']);

  }
?>
