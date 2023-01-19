<!DOCTYPE html>
<html>

<HEAD>

<title>&pi;zzeria</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="Styles/main.css">
    

  <!-- Loading Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>

 <!-- Connecting font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap" rel="stylesheet">

</HEAD>


<body background="Images/background.jpg" style="font-family: 'Bree Serif', serif;">


<?php
include 'navbar.php';
?>

</body>

<table style="color: whitesmoke; margin-top: 10%; margin-left: 15%;"  class="table table-bordered mt-5 mx-5">
    <tr>
        <th>Employee Name</th>
        <th>Work Experience (in years)</th>
        <th>Role in Kitchen</th>
    </tr>
    <tr>
        <td>John Smith</td>
        <td>5</td>
        <td>Head Pizza Chef - responsible for creating new pizza recipes and training kitchen staff</td>
    </tr>
    <tr>
        <td>Jane Doe</td>
        <td>3</td>
        <td>Prep Cook - responsible for preparing ingredients and assisting the head chef</td>
    </tr>
    <tr>
        <td>Mike Johnson</td>
        <td>7</td>
        <td>Line Cook - responsible for cooking and plating dishes during service</td>
    </tr>
    <tr>
        <td>Emily Davis</td>
        <td>4</td>
        <td>Pastry Chef - responsible for creating desserts and baked goods for the restaurant</td>
    </tr>
    <tr>
        <td>David Miller</td>
        <td>6</td>
        <td>Dishwasher - responsible for maintaining cleanliness and sanitation in the kitchen</td>
    </tr>
</table>
</html>