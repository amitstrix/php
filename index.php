<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Data Json Call in PHP</h1>
    <?php 
$url='user.json';
$data=file_get_contents($url);
$character=json_decode($data,true)
?>
<table class="table-data">
    <thead>
        <tr>
            <th>Name</th>
            <th>Skill</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($character as $key =>$value):?>
        <tr></tr>
        <td>
            <?php echo $value['name']?>
            <?php echo $value['skill']?>
        </td>
        
        </tr>
         
         <?php endforeach ?>   
    </tbody>
</table>
</body>
</html>