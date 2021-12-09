<h1>Main page</h1>
<section id = "nav_bar">
<button name="Course" value="Add course" onclick="location.href='?page=Add_reg';" style="margin-right:100px;">Add register</button>
<button name="Trainer" value="Add trainer" onclick="location.href='?page=Add_trainer';" style="margin-right:100px;">Add trainer</button>
<button name="Session" value="Add session" onclick="location.href='?page=Add_session';">Add session</button>
</section>
<section id="search">
<input type="text" id="myInput" onkeyup="searchByName()" placeholder="Search by name.." style="margin-right:100px;">
<input type="text" id="myInput2" onkeyup="searchByDept()" placeholder="Search by department.." style="margin-right:100px;">
<input type="text" id="myInput3" onkeyup="searchBySect()" placeholder="Search by section.." style="margin-right:100px;">
<input type="text" id="myInput4" onkeyup="searchBySess()" placeholder="Search by session.." style="margin-right:100px;">
<input type="text" id="myInput5" onkeyup="searchByDate()" placeholder="Search by date.." style="margin-right:100px;">
<input type="text" id="myInput6" onkeyup="searchByYear()" placeholder="Search by year.." style="margin-right:100px;">
<input type="text" id="myInput7" onkeyup="searchByTrainer()" placeholder="Search by trainer.." style="margin-right:100px;">
</section>
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
    $Data = $comms->getData();
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
    <?php
          }
  ?>
  </table>
</section>
<script>
function searchByName() {

  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("table");
  tr = table.getElementsByTagName("tr");

  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}

function searchByDept() {

  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput2");
  filter = input.value.toUpperCase();
  table = document.getElementById("table");
  tr = table.getElementsByTagName("tr");

  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[2];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}

function searchBySect() {

  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput3");
  filter = input.value.toUpperCase();
  table = document.getElementById("table");
  tr = table.getElementsByTagName("tr");

  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[3];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}

function searchBySess() {

  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput4");
  filter = input.value.toUpperCase();
  table = document.getElementById("table");
  tr = table.getElementsByTagName("tr");

  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[4];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}

function searchByDate() {

  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput5");
  filter = input.value.toUpperCase();
  table = document.getElementById("table");
  tr = table.getElementsByTagName("tr");

  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[5];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}

function searchByYear() {

  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput6");
  filter = input.value.toUpperCase();
  table = document.getElementById("table");
  tr = table.getElementsByTagName("tr");

  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[6];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}

function searchByTrainer() {

  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput7");
  filter = input.value.toUpperCase();
  table = document.getElementById("table");
  tr = table.getElementsByTagName("tr");

  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[7];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>
