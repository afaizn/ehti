<?php

require("connectphp.php");



$result = mysqli_query($con,"SELECT * FROM hasil_penilaian");
echo "<table border='1'>
<tr>
<th>ID</th>
<th>AC</th>
</tr>";

while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['ID'] . "</td>";
  echo "<td>" . $row['ACH'] . "</td>";
  echo "</tr>";
  }
echo "</table>";




?>