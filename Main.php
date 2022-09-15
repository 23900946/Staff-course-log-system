<?php
if($_SERVER['sAMAccountName']) {
$usersFirstName = $_SERVER['givenName'];
$usersLastName = $_SERVER['sn'];
  if(($usersFirstName != "Tommy" & $usersLastName != "Maher") & ($usersFirstName != "Viv" & $usersLastName != "Fernside") & ($usersFirstName != "Sally" & $usersLastName != "Gregson")) {

    header("Location: ?page=User_page");

  }

}
$message = "";
if(isset($_POST['courseDelete'])) {
$delete = $comms->deleteCourseLog($_POST['firstName'], $_POST['Surname'], $_POST['Department'], $_POST['Section'], $_POST['Session'], $_POST['Date'], $_POST['Year'], $_POST['Trainer']);
$message = "Log deleted";
}?>
<h1>Main page</h1>
<section id = "nav_bar">
<button class="button" value="Add session" onclick="location.href='?page=Add_session';" style="margin-right:100px;">Add session</button>
<button class="button" value="Add trainer" onclick="location.href='?page=Add_trainer';" style="margin-right:100px;">Add trainer</button>
<button class="button" value="Add reg" onclick="location.href='?page=Add_reg';">Add register</button>
</section>
<section id="search">
  <form action="" method="get">
  <input type="hidden" name="searchinfo">
  <input type="text" name="myInput" class="search" id="myInput" placeholder="Search by first name.." style="margin-right:100px;">
  <input type="text" name="myInput1" class="search" id="myInput1"  placeholder="Search by surname.." style="margin-right:100px;">
  <input type="text" name="myInput2" class="search" id="myInput2" placeholder="Search by department.." style="margin-right:100px;">
  <input type="text" name="myInput3" class="search" id="myInput3"  placeholder="Search by section.." style="margin-right:100px;">
  <input type="text" name="myInput4" class="search" id="myInput4" placeholder="Search by session.." style="margin-right:100px;">
  <input type="text" name="myInput5" class="search" id="myInput5" placeholder="Search by date.." style="margin-right:100px;">
  <input type="text" name="myInput6" class="search" id="myInput6" placeholder="Search by year.." style="margin-right:100px;">
  <input type="text" name="myInput7" class="search" id="myInput7" placeholder="Search by trainer.." style="margin-right:100px;">
  <input class="button" type="submit" value="Search">
  </form>
  <br><br>
  <form action="" method="get">
  <input type="hidden" name="searchall">
  <input class="button" type="submit" value="Show all records">
  </form>
  <br>
  <p style="text-align:center; color: white; font-size: 30px;"><?php echo $message ?></p>
</section>
<? if(isset($_GET['searchinfo']) || isset($_GET['searchall'])) { ?>
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
      <th>Delete</th>
    </tr>
    <?php
    if(strlen($_GET['myInput'])>0) { $searchParameter = $searchParameter . " and upper(`First name`) like '".strtoupper($_GET['myInput'])."'"; }
  if(strlen($_GET['myInput1'])>0) { $searchParameter = $searchParameter . " and upper(Surname) like '".strtoupper($_GET['myInput1'])."'"; }
  if(strlen($_GET['myInput2'])>0) { $searchParameter = $searchParameter . " and upper(Department) like '".strtoupper($_GET['myInput2'])."'"; }
  if(strlen($_GET['myInput3'])>0) { $searchParameter = $searchParameter . " and upper(Section) like '".strtoupper($_GET['myInput3'])."'"; }
  if(strlen($_GET['myInput4'])>0) { $searchParameter = $searchParameter . " and upper(Session) like '".strtoupper($_GET['myInput4'])."'"; }
  if(strlen($_GET['myInput5'])>0) { $searchParameter = $searchParameter . " and upper(Date) like '".strtoupper($_GET['myInput5'])."'"; }
  if(strlen($_GET['myInput6'])>0) { $searchParameter = $searchParameter . " and upper(Year) like '".strtoupper($_GET['myInput6'])."'"; }
  if(strlen($_GET['myInput7'])>0) { $searchParameter = $searchParameter . " and upper(Trainer) like '".strtoupper($_GET['myInput7'])."'"; }

 if(isset($searchParameter)) {
     $Data = $comms->getData($searchParameter);

 } elseif(isset($_GET['searchall'])) {
     $Data = $comms->getData();
 }

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
            <td style="justify-content:center; align-items: center; display: flex;"><form action="" method="post">
            <input type="hidden" name="firstName" value="<?php echo $course["First name"]?>">
            <input type="hidden" name="Surname" value="<?php echo $course["Surname"]?>">
            <input type="hidden" name="Department" value="<?php echo $course["Department"]?>">
            <input type="hidden" name="Section" value="<?php echo $course["Section"]?>">
            <input type="hidden" name="Session" value="<?php echo $course["Session"]?>">
            <input type="hidden" name="Date" value="<?php echo $course["Date"]?>">
            <input type="hidden" name="Year" value="<?php echo $course["Year"]?>">
            <input type="hidden" name="Trainer" value="<?php echo $course["Trainer"]?>">
            <input type="hidden" name="courseDelete" value="1">
            <input type="submit" value="X" class="delete"></input></form></td>
          </tr>
    <?php
          }
  ?>
  </table>
</section>
<form action="generatespreadsheet.php" method="POST">
<input type="hidden" name="myInput"  value="<?=$_GET['myInput'];?>" >
<input type="hidden" name="myInput1"  value="<?=$_GET['myInput1'];?>" >
<input type="hidden" name="myInput2" value="<?=$_GET['myInput2'];?>">
<input type="hidden" id="myInput3" name="myInput3" value="<?=$_GET['myInput3'];?>">
<input type="hidden" name="myInput4" value="<?=$_GET['myInput4'];?>">
<input type="hidden" name="myInput5" value="<?=$_GET['myInput5'];?>">
<input type="hidden" name="myInput6" value="<?=$_GET['myInput6'];?>">
<input type="hidden" name="myInput7" value="<?=$_GET['myInput7'];?>">
<input type="hidden" id="thedata" name="thedata" value="<?= htmlentities(serialize($Data)); ?>">
<input type="hidden" name="generatespreadsheet" value="1">
<input type="submit" class="button" value="Generate Spreadsheet" style="margin-left:1170px;">
</form>

<?
} ?>
