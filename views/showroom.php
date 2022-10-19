
<?php



    $sql = "SELECT * FROM gallery WHERE id = " . $_GET['id'];
        
        $result = $mysqli->query($sql); //send this query to the datatbase
        
        ?>
        <ul>
        <?php
        //loop through the results
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) { //keep looping rows
            //     "Id: %s, Title: %s, Author: %s, <br />", 
               echo $row["id"]; 
               echo $row["src"]; 
               echo $row["thumbnail"];
               echo $row["name"];       
                ?>
                <h2><?php echo $row['name']; ?></h2>
                <img src="<?php echo $row['src']; ?>">
                <?php
            }
        } else {
            printf('No record found.<br />');
        }
        mysqli_free_result($result);
    $mysqli->close();
?>
</ul>
