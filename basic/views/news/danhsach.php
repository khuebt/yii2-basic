<?php
 
$newsList = [
  ['title'=>'Cuốn theo chiều gió','date'=>'1999-02-22'],
     ['title'=>'Harry potter','date'=>'1929-22-11'],
     ['title'=>'Dragon cậu bé gà','date'=>'1834-01-22']
];

?>
<table>
    <tr>
        <td>Title</td>
        <td>Date</td>
    </tr>
    <?php foreach($newsList as $item){ ?>
    <tr>
        <td><?php echo $item['title'];?></td>
        <td><?php echo $item['date'];?></td>
    </tr>
    <?php } ?>
</table>