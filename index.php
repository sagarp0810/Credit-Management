<?php
    require_once('db_connect.php'); //connect to database

    $query = "select * from users";
    $result = mysqli_query($link,$query);

?>

<html>
	<head>
        <title>Credit Management</title>
    </head>

    <body>
        <table>
			<thead>
				<tr>
                    <th>S No.</th>
    				<th>Name</th>
    				<th>Email</th>
    				<th>Credits</th>
				</tr>
			</thead>

            <!--fetch and display data from MySQL-->
            <?php
                $i=1;

                while($row = mysqli_fetch_array($result)) {
                    echo "<tr>";
                    echo "<td>" . $i . "</td>";
                    echo "<td>" . $row["name"] . "</td>";
                    echo "<td>" . $row["email"] . "</td>";
                    echo "<td>" . $row["credit"] . "</td>";
                    echo "<td><a href=transfer.php?name=" . $row['name'] . ">Select</a><td>";
                    echo "</tr>";
                    ++$i;
                }
            ?>

        </table>
    </body>
</html>
