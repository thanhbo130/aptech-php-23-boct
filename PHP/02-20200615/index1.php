
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        td,th{
            border: 1px solid blue;
            
        }
    </style>
</head>
<body>
 
<?php

$Product = [
     ["Toyota",10,"Japan"],
     ["BMW", 20, "Germany"],
     ["Vinfast",30,"VietNam"],
];
?>

<table>

    <thead>
        <th>Name</th>
        <th>Price</th>
        <th>Made in</th>    
    </thead>
    <tbody>   
        <?php for ($i=0;$i<count($Product);$i++){ ?>
            <tr>
                <?php  for($j=0;$j< count($Product[$i]); $j++) {?>
                <td> <?php echo "$".$Product[$i][$j]."$" ?> </td>

            <?php } ?>
            </tr>
        <?php } ?>
       
      
    </tbody>
</table>

</body>
</html>