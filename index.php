<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School Picker</title>
</head>

<body>
    <div id='outer_wrapper'>
        <h1>Find Your Degree</h1>
        <form action="action.php" method="POST">
            <label for="schools">Choose a School:</label>
            <select name="schools" id="schools" oninput="showDegrees(this.value)">
                <option value="Jacobs School of Music">Jacobs School of Music</option>
                <option value="College of Arts and Sciences">College of Arts and Sciences</option>
                <option value="School of Public and Environmental Affairs">School of Public and Environmental Affairs</option>
                <option value="School of Education">School of Education</option>
                <option value="Kelley School of Business">Kelley School of Business</option>
                <option value="Maurer School of Law">Maurer School of Law</option>
                <option value="School of Public Health—Bloomington">School of Public Health—Bloomington</option>
                <option value="School of Medicine">School of Medicine</option>
                <option value="School of Optometry">School of Optometry</option>
                <option value="School of Informatics and Computing">School of Informatics and Computing</option>
                <option value="School of Social Work">School of Social Work</option>
                <option value="School of Journalism">School of Journalism</option>
                <option value="School of Nursing">School of Nursing</option>
            </select>
            <input type="submit" value="Submit">
        </form>
    </div>
</body>

</html>