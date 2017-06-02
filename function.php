<?php

class show {

    public static function show_data() {


        global $con;



        if (isset($_POST['search'])) {

            $user_data = $_POST['user_query'];
            $sql = "SELECT * FROM `singup` WHERE `keyword` LIKE '%$user_data%' ";
            $res = mysqli_query($con, $sql);

            echo " <thead>";
            echo " <tr>";
            echo '<th>' . "Blood Group" . '</th>';
            echo "<th>Name</th>";
            echo "<th>Date of Birth</th>";
            echo "<th>Phone</th>";
            echo "<th>call Now</th>";
            echo "<th>Address</th>";

            echo " </tr>";
            echo "</thead>";
            while ($row = mysqli_fetch_assoc($res)) {


                echo "<tbody>";
                echo "<tr>";
                echo "<td>" . $row['bg'] . "</td>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['dob'] . "</td>";
                echo "<td>" . $row['phone'] . "</td>";
                 echo "<td>" .'<a href="tel:+880'.$row['phone'].'">
          <span class="glyphicon glyphicon-earphone"></span>
        </a>' . "</td>";
                echo "<td>" . $row['address'] . "</td>";

                echo "</tr>";
                echo "</tbody>";
                
               
            }
        }
    }

}

?>
