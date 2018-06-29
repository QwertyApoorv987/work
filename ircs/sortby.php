<html>
<head>
  <title>SortBy</title>
</head>
<body>
  <table>
    <tr>
      <th>CampCity</th>
      <th>CampDate</th>
      <th>ExpectedTurnOut</th>
      <th>ActualTurnOut</th>
      <th>SuccessRate</th>
    </tr>
<?php
    if(isset($_POST['sortingoption'])) {
        if($_POST['sortingoption'] == 'SuccessRate') {
            $conn = mysqli_connect("localhost","root","","redcross");
            $sql = "SELECT * FROM campinfo order by Success_Rate";
            $result = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_assoc($result))
            {
              echo '<tr><td>'.$row["Camp_Address"].'</td>
              <td>'.$row["Camp_Date"].'</td>
              <td>'.$row["Expected_Turnout"].'</td>
              <td>'.$row["Actual_Turnout"].'</td>
              <td>'.$row["Success_Rate"].'</td></tr>';
            } 
            mysqli_free_result($result);
        } elseif($_POST['sortingoption'] == 'CampDate') {
            $conn = mysqli_connect("localhost","root","","redcross");
            $sql = "SELECT * FROM campinfo order by Camp_Date";
            $result = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_assoc($result))
            {
              echo '<tr><td>'.$row["Camp_Address"].'</td>
              <td>'.$row["Camp_Date"].'</td>
              <td>'.$row["Expected_Turnout"].'</td>
              <td>'.$row["Actual_Turnout"].'</td>
              <td>'.$row["Success_Rate"].'</td></tr>';
            }
            mysqli_free_result($result);
        }
    }
?>
</table>
</body>
</html>