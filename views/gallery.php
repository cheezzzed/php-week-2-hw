
<?php


    $sql = "SELECT * FROM gallery";
        
        $result = $mysqli->query($sql); //send this query to the datatbase
        
        ?>
        <ul>
        <?php
        //loop through the results
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) { //keep looping rows
            // printf(
            //     "Id: %s, Title: %s, Author: %s, <br />", 
                // $row["id"], 
                // $row["src"], 
                // $row["thumbnail"],
                // $row["name"]);       
                ?>
                <li>
                    <a href="/?page=showroom&id=<?php echo $row["id"];?>">
                        <img src="<?php echo $row["thumbnail"];?>">
                    </a>
                    <p><?php echo $row["name"];?> </p>
                </li>
                <?php
            }
        } else {
            printf('No record found.<br />');
        }
        mysqli_free_result($result);
    $mysqli->close();
?>
</ul>
