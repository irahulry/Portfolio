<?php
include("db.php");
function show(){
    global $con;
    $query = mysqli_query($con,"select * from hire");
    while($fetch = mysqli_fetch_array($query)){
        echo '
            <tr>
                <td>'.$fetch['plan'].'</td>
                <td>'.$fetch['name'].'</td>
                <td>'.$fetch['email'].'</td>
                <td>'.$fetch['project'].'</td>
                <td>'.$fetch['message'].'</td>
            </tr>
        ';
    }
}




?>
<html>
<head>
    
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
th,td{
    margin:10px;
    padding:10px;
    border:1px solid red;
}
table,body{
    overflow:scroll;
}
</style>
</head>
<body>
<table>
    <tr>
        <th>Plan</th>
        <th>Name</th>
        <th>Email</th>
        <th>Project</th>
        <th>message</th>
    </tr>
    <?php
        show();
    ?>
</table>

</body>

</html>