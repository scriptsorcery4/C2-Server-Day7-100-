<?php 
    require_once './app/config/unauth.php';
    require_once './public/includes/layout.php';
    require_once './app/classes/Beacon.php';

    $beacons = new Beacon();

    $res = $beacons->fetchBeacons();
 ?>

        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Frequrncy</th>
                <th>Number of infected clients</th>
                <th>Created date</th>
                <th>Action</th>
            </tr>
            <?php foreach ($res as $row) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['freq'] . "</td>";
            echo "<td>" . $row['join_count'] . "</td>"; 
            echo "<td>" . $row['created_at'] . "</td>";
            echo "<td><a href='./beacon.php?id=" . $row['id'] . "'>" . "View Details" . "</a></td>"; 
            echo "</tr>";
            }?>
        </table>
           
<?php require_once './public/includes/footer.php'; ?>
