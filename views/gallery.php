<?php
    

    $sql = "SELECT * FROM gallery";
		 
        $result = $mysqli->query($sql);
        
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
            // printf(
            //     "Id: %s, Title: %s, Author: %s, Date: %d <br />", 
                // $row["id"], 
                // $row["src"], 
                // $row["thumbnail"],
                // $row["name"]);       
                ?>
                <img src="<?php echo $row["thumbnail"];?>">
                <?php
            }
        } else {
            printf('No record found.<br />');
        }
        mysqli_free_result($result);
    $mysqli->close();
?>