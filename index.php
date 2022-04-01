<?php
    //Assign database connection var
    $dbconn = mysqli_connect("localhost", "root", "", "iu_degrees");

    //Assign rowcounter var
    $rowcounter = 0;

    // vvv USED TO INSERT DATA INTO MySQL DB VIA PHPMYADMIN vvv
    // //Assign xml file load var
    // $xml = simplexml_load_file("degree-list.xml")
    //     or die("Error: Cannot read file");

    // //Loop through each child(degree) in the xml file and insert them into the db with an sql query
    // foreach ($xml->children() as $row) {
    //     $id = $row->id;
    //     $link = $row->link;
    //     $title = $row->title;
    //     $school = $row->school;

    //     //Define sql query for current degree
    //     $sql = "INSERT INTO degrees(id, link, title, school) VALUES (' " . $id . "','" . $link . "','" . $title . "','" . $school . "')";

    //     //Define query result value
    //     $result = mysqli_query($dbconn, $sql);

    //     //If the query result returns something move to next row and run again, else give error message
    //     if(! empty($result)) {
    //         $rowcounter ++;
    //     } else {
    //         $error = mysqli_error($dbconn) . "\n";
    //     }
    // }

    // //If the rowcounter incrememted return message "[x] rows inserted", else give "no rows inserted" message
    // if ($rowcounter > 0) {
    //     $message = $rowcounter . " rows inserted";
    // } else {
    //     $message = "No rows inserted";
    // }
?>

<!-- INSERT CSS and HTML -->

<div class="rowcounter">
    <?php echo $message; ?>
</div>

<?php if (! empty($error)) {
    ?>
    <div class="error">
        <?php echo($error); ?>
    </div>
<?php } ?>