<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <table class="table text-center table-striped">
        <thead>
        <th>id</th>
        <th>name</th>
        <th>email</th>
        <th>password</th>
        </thead>
        <tbody>
       
        <?php
         
         foreach($users as $user) { ?>
         {{dd($users)}};
         
         <tr class="text-center">
           <!-- <th scope="row">{{$user->id}}</th>
           <td>{{$user->name}}</td>
           <td>{{$user->email}}</td>
           <td>{{$user->password}}</td> --> 
           <th scope="row"> <?php  echo $user->id ?> </th>
           <td><?php echo $user->name ?></td>
           <td><?php echo $user->email ?></td>
           <td><?php echo $user->password ?></td>
         <?php }?>
        </tbody>    
    </table>
</body>
</html>