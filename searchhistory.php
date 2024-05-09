<?php
include 'db_config.php';

if(isset($_POST['bgrp'])){
    $bgrp = $_POST['bgrp'];
    $q="SELECT `history`.donor_id , `dname`,`dage`, `daddress`, `dbgrp` FROM history JOIN donor_details ON history.donor_id=donor_details.id and Bgrp='$bgrp'";
    $result=mysqli_query($conn,$q);
    if(mysqli_num_rows($result) > 0){?>
        <table border="2" >
            <thead>
                <tr>
                    <th>Donor id</th>
                    <th>Donor Name</th>
                    <th>Age</th>
                    <th>Address</th>
                </tr>
            </thead>
            <tbody>
            <?php
            while($row= mysqli_fetch_assoc($result))
            {?>
                <tr>
                    <td><?php echo $row['donor_id']; ?></td>
                    <td><?php echo $row['dname']; ?></td>
                    <td><?php echo $row['dage']; ?></td>
                    <td><?php echo $row['daddress']; ?></td>
                </tr>
            <?php
            }
        }?>
        </tbody>
        </table>
    <?php
}
?>
