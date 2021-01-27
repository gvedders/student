<!DOCTYPE html>
<html>
    
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Student Database</title>
    </head>
    
    <body>
        
        <?php
            // Connect to database
            include("config.php");
            
            // Retrieve values from database
            $query = "SELECT * FROM student";
            $result = $db->query($query);
            
            // If error occurs - display error message
            if ($result == false) {
                $error_message = $db->error;
                echo "<p>An error occurred: $error_message</p>";
                exit();
            }
        ?>
        
        <table border="1">
            <thead>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>ID Number</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    // Populate values by row
                    $row_count = $result->num_rows;
                    
                    for ($i = 0; $i < $row_count; $i++) :
                        $student = $result->fetch_assoc();
                        
                        // Output values below
                ?>
                
                <tr>
                    <td><?php echo $student['firstName']; ?></td>
                    <td><?php echo $student['lastName']; ?></td>
                    <td><?php echo $student['idnumber']; ?></td>
                    <td><a href="mailto:<?php echo $student['email']; ?>">
                        <?php echo $student['email']; ?></a></td>
                </tr>
                <?php
                    // End the for loop
                    endfor;
                ?>
            </tbody>
        </table>
        <hr />
        <form action="insert.php" method="post">
            <table>
                <thead>
                    <tr>
                        <th colspan="2">Add Entry</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>First Name: </td>
                        <td><input type="text" name="firstName" /></td>
                    </tr>
                    <tr>
                        <td>Last Name: </td>
                        <td><input type="text" name="lastName" /></td>
                    </tr>
                    <tr>
                        <td>Email: </td>
                        <td><input type="text" name="email" /></td>
                    </tr>
                    <tr> 
                        <td colspan="2" align="right"><input type="submit" value="Add"></td>
                    </tr>
                </tbody>
            </table>
        </form>
    </body>
</html>
