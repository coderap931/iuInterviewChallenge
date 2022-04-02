<!DOCTYPE html>
<html>

<head>
    <title>Results</title>
</head>

<body>
<?php
    //Assign database connection var
    $dbconn = mysqli_connect("localhost", "root", "", "iu_degrees");

    //Check connection to db
    if ($dbconn === false) {
        die("Error: Unable to establish databse connection. " . mysqli_connect_error());
    }

    //Get chosen school from HTML form
    $school_chosen = $_REQUEST['schools'];

    //Assign SQL query var to pull each degree and its link for the chosen school
    $query = "SELECT * FROM degrees WHERE school = '$school_chosen'";

    $results = mysqli_query($dbconn, $query);

    if($results){
        $output = "
        <table> 
            <thead>
                <tr>
                    <th>Degree Name</th>
                    <th>Link to Degree Info</th>
                </tr>
            </thead>
            <tbody>";

        foreach ($results as $arr) {
            $output .= "<tr>";
            $output .= "<td>" . $arr['title'] . "</td>";
            $output .= "<td> <a href='" . $arr['link'] . "'>" . $arr['link'] . "</a></td>";
            $output .= "</tr>";
        }
        $output .= "
            </tbody>
        </table>";

        echo $output;
    } else {
        echo "Error: " . mysqli_error($dbconn);
    }

    //Close db connection
    mysqli_close($dbconn);
?>
</body>
</html>