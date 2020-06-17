
<!DOCTYPE html>
<html lang="en">
<head>
    
</head>
<body>
 
<?php
$Name = ["Toyota","BMW","Vinfast"];
$Price =[10,20,30];
$Madein =["Japan","Germany","VietNam"];
?>

<table>

    <thead>
        <th>Name</th>
        <th>Price</th>
        <th>Made in</th>    
    </thead>
    <tbody>
        <tr>
        <td><?php echo $Name[0]?></td>
        <td><?php echo $Price[0]?></td>
        <td><?php echo $Madein[0]?></td>
        </tr>
        <tr>
        <td><?php echo $Name[1]?></td>
        <td><?php echo $Price[1]?></td>
        <td><?php echo $Madein[1]?></td>
        </tr>
        <tr>
        <td><?php echo $Name[2]?></td>
        <td><?php echo $Price[2]?></td>
        <td><?php echo $Madein[2]?></td>
        </tr>
    </tbody>
</table>

</body>
</html>