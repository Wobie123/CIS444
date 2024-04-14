<!--
  Kenneth Ha CIS 444 HW6
  http://cis444.cs.csusm.edu/ha134/HW6/result.php
--> 

<?php
  // set up connection
  $servername = "localhost";
  $username = "ha134";
  $password = "ny1sp6mt";
  $database = "ha134";
  $conn = mysqli_connect($servername, $username, $password, $database);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title> HW6 </title>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="styles.css">
</head>

<body>
  <h1> Football Teams </h1>
  <table>
    <caption>2017 Statistics</caption>
    <tr>
      <th scope="col">teamID</th>
      <th scope="col">teamName</th>
      <th scope="col">startYear</th>
      <th scope="col">ownerName</th>
      <th scope="col">GMName</th>
      <th scope="col">coachName</th>
      <th scope="col">MVP</th>
      <th scope="col">arenaAddress</th>
      <th scope="col">city</th>
      <th scope="col">state</th>
      <th scope="col">zipCode</th>
      <th scope="col">phone</th>
      <th scope="col">divWins</th>
      <th scope="col">divLoses</th>
      <th scope="col">overallWins</th>
      <th scope="col">overallLoses</th>
    </tr>
    <?php
      // make query
      $team = $_POST['ID'];
      $result = mysqli_query($conn, "SELECT * FROM ha134.Teams WHERE teamID = '$team'"); 
      
      // display results
      while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        foreach ($row as $column)
          echo "<td>$column</td>";
        echo "</tr>";
      }

      // display number of rows returned
      $rowcount=mysqli_num_rows($result);
      echo "Returned Results: $rowcount";

      mysqli_close($conn);
    ?>
  </table>
</body>

</html>
