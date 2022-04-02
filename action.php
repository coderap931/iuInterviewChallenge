<!DOCTYPE html>
<html>

<head>
    <!-- Import IU fonts as well as style.css -->
    <link href="https://fonts.iu.edu/style.css?family=BentonSans:regular,bold|BentonSansCond:regular|GeorgiaPro:regular" media="screen" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" ref="text/css" href="./style.css">
    <title>Results</title>
</head>

<body>
<?php
    //Assign database connection var
    $dbconn = mysqli_connect("localhost", "root", "", "iu_degrees");

    //Check connection to db, if unable to connect die and report error message
    if ($dbconn === false) {
        die("Error: Unable to establish databse connection. " . mysqli_connect_error());
    }

    //Get chosen school from HTML form
    $school_chosen = $_REQUEST['schools'];

    //Assign SQL query var to pull each degree and its link for the chosen school
    $query = "SELECT * FROM degrees WHERE school = '$school_chosen'";

    //Assign db response to var
    $results = mysqli_query($dbconn, $query);

    //if results is true generate and output table with degree names and links to more info, else report error message
    if($results){
        $output = "
        <div id='table_wrapper'>
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
            </table>
        </div>";

        echo $output;
    } else {
        echo "Error: " . mysqli_error($dbconn);
    }

    //Close db connection
    mysqli_close($dbconn);
?>
</body>
</html>