<?php
//expects an arrray of $person. Display the results in a table
// $person array
// item = 0, counter has to be less than the num of item in the user's array
?>
<head>
    <link rel="stylesheet"  href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/ahsw.css">

    <!-- Social Media icon font from font awesome -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha256-3edrmyuQ0w65f8gfBsqowzjJe2iM6n0nKciPUp8y+7E=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
    <script src="../../js/lightbox.js"></script>
</head>

 <table class="results">

    <tr class="results">

        <td class="results">
            Stock
        </td>

         <td class="results">
            Name
        </td>

        <td class="results">
            Category
        </td>

        <td class="results">
            Price
        </td>

        <td class="results">
            Description
        </td>

        <td class="results">
            Photo
        </td>

    </tr>

<?php

for ($x = 0; $x < count($products); $x++){
    echo "</tr class='results'>";
    //$persons[0](is the firest guy) ['FIRSTNAME'] = "Karry";
    echo "<td class='results'>" .$products[$x]['storkID'] . "</td>";
    echo "<td class='results'>" .$products[$x]['name'] . "</td>";
    echo "<td class='results'>" .$products[$x]['productsID'] . "</td>";
    echo "<td class='results'>" .$products[$x]['price'] . "</td>";
    echo "<td class='results'>" .$products[$x]['description'] . "</td>";

    echo "<td class='results'>" .$products[$x]['photo'] . "</td>";
    echo "</tr>";
}
?>

</table>