<?php if($_SERVER['sAMAccountName']) {
$usersFirstName = $_SERVER['givenName'];
$usersLastName = $_SERVER['sn'];
}?>
<h1>Main page</h1>
<section id="view">
  <table id="table">
    <tr>
      <th>First name</th>
      <th>Last name</th>
      <th>Department</th>
      <th>Section</th>
      <th>Session</th>
      <th>Date</th>
      <th>Year</th>
      <th>Trainer</th>
    </tr>
    <?php
    $Data = $comms->getSelectedData($usersFirstName, $usersLastName);

    foreach($Data as $course) {
          ?>
          <tr>
            <td><?php echo $course['First name']?></td>
            <td><?php echo $course['Surname']?></td>
            <td><?php echo $course['Department']?></td>
            <td><?php echo $course['Section']?></td>
            <td><?php echo $course['Session']?></td>
            <td><?php echo $course['Date']?></td>
            <td><?php echo $course['Year']?></td>
            <td><?php echo $course['Trainer']?></td>
          </tr>
        <?php }

         ?>
  </table>
</section>
