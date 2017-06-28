<!DOCTYPE html>
<html>
<?php
if (strcmp($_GET['type'], 'list') == 0) {
    ?>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>FRO - Ajax Database World</title>
        <link rel="stylesheet" href="http://school.justinvanderkruit.nl/css/opdrachtenStijl.css">
    </head>
    <body>
    <?php
    $q = $_GET['q'];

    $con = mysqli_connect('rschwab.eu', 'opdr', 'Trein123', 'world');
    if (!$con) {
        die('Could not connect: ' . mysqli_error($con));
    }

    $sql = "SELECT * FROM Country WHERE Name LIKE '%" . $q . "%'";
    $result = mysqli_query($con, $sql);

    echo '<table>';
    echo '<tr>';
    echo '<th>Land</th>';
    echo '</tr>';

    while ($row = mysqli_fetch_array($result)) {
        echo '<tr>';
        echo '<td><span style="cursor: pointer;" onclick="showUser(this.value, \'detail\', \'' . $row["Code"] . '\')">' . $row["Name"] . '</span></td>';
        echo '</tr>';
    }

    echo '</table>';

    mysqli_close($con);
    ?>
    </body>
<?php } else if (strcmp($_GET['type'], 'detail') == 0) {
    $q = $_GET['q'];

    $con = mysqli_connect('rschwab.eu', 'opdr', 'Trein123', 'world');
    if (!$con) {
        die('Could not connect: ' . mysqli_error($con));
    }

    $sql = "SELECT * FROM Country WHERE Code LIKE '%" . $q . "%'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);

    ?>
    <body>
    <?php
    echo '<table id="' . $row['ID'] . "table" . '">
        <tr>
        <th>Name</th>
        <th>Continent</th>
        <th>Region</th>
        <th>SurfaceArea</th>
        <th>Independence Year</th>
        <th>Population</th>
        <th>Capital</th> 
        <th>Head of State</th>
        </tr>';

    echo "<tr>";
    echo "<td>" . $row['Name'] . "</td>";
    echo "<td>" . $row['Continent'] . "</td>";
    echo "<td>" . $row['Region'] . "</td>";
    echo "<td>" . $row['SurfaceArea'] . "</td>";
    echo "<td>" . $row['IndepYear'] . "</td>";
    echo "<td>" . $row['Population'] . "</td>";
    echo "<td>" . $row['Capital'] . "</td>";
    echo "<td>" . $row['HeadOfState'] . "</td>";
    echo "</tr>";
    echo "</table>";
    ?>
    </body>
    <?php
}
?>
</html>