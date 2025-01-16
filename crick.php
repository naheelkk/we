<?php
$players = array(
    "Virat Kohli",
    "Rohit Sharma",
    "MS Dhoni",
    "Sachin Tendulkar",
    "KL Rahul",
);
?>
<html>
<head>
    <title>Indian Cricket Players</title>
    <style>
        table {
            width: 50%;
            margin: 20px auto;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
            text-align: center;
            border: 1px solid #ddd;
        }
        th {
            background-color: lavender;
        }
    </style>
</head>
<body>
<h2 style="text-align: center;">List of Indian Cricket Players</h2>

<table>
    <tr>
        <th>No.</th>
        <th>Player Name</th>
    </tr>

    <?php
    foreach ($players as $index => $player) {
        echo "<tr>";
        echo "<td>" . ($index + 1) . "</td>"; 
        echo "<td>" . $player . "</td>"; 
        echo "</tr>";
    }
    ?>
</table>
</body>
</html>

