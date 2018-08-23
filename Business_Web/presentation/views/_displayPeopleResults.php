<?php
//expects an arrray of $person. Display the results in a table
// $person array
// item = 0, counter has to be less than the num of item in the user's array
?>
<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="Context Homeless Animal, Save, Grammar">
<meta name="description" content="Animal Save">
<meta name="author" content="Miss Wang">

<title>Animal Salvation and Adoption</title>

<!-- Edit ahsw to control formatting -->
<link rel="stylesheet"  href="../css/bootstrap.min.css">
<link rel="stylesheet" href="../css/ahsw.css">

<!-- Social Media icon font from font awesome -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

<!-- Link to JavaScript plugins, needed for things like the dropdown menu to work. Both files are required. -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha256-3edrmyuQ0w65f8gfBsqowzjJe2iM6n0nKciPUp8y+7E=" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
<script src="../../js/bootstrap.min.js"></script>
<script src="../../js/lightbox.js"></script>

</head>


 <table id="customers" class="display">
    <thead>

        <tr class="results">

            <th class="results">
                userID
            </th>

            <th class="results">
                First name
            </th>

            <th class="results">
                Last name
            </th>

            <th class="results">
                Default Address?
            </th>

            <th class="results">
                Street
            </th>

            <th class="results">
                City
            </th>

            <th class="results">
                State
            </th>

            <th class="results">
                Postal Code
            </th>


        </tr>
    </thead>

<tbody>
<?php

for ($x = 0; $x < count($persons); $x++){
    // example of the array
    echo "</tr class='results'>";
    //$persons[0](is the firest guy) ['FIRSTNAME'] = "Karry";
    echo "<td class='results'>" .$persons[$x]['userID'] . "</td>";
    echo "<td class='results'>" .$persons[$x]['FIRSTNAME'] . "</td>";
    echo "<td class='results'>" .$persons[$x]['LASTNAME'] . "</td>";
    echo "<td class='results'>" .$persons[$x]['ISDEFAULT'] . "</td>";

    echo "<td class='results'>" .$persons[$x]['street'] . "</td>";
    echo "<td class='results'>" .$persons[$x]['city'] . "</td>";
    echo "<td class='results'>" .$persons[$x]['state'] . "</td>";
    echo "<td class='results'>" .$persons[$x]['PostalCode'] . "</td>";
    echo "</tr>";

    echo "</tr>";
}
?>
</tbody>
</table>

<script>
$(document).ready( function () {
    $('#customers').DataTable();
}

);
</script>