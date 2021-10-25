<h2><?php echo $title ?></h2>
<ul>
    <?php foreach($studentlist as $student):?>
    <?php //echo "<li > ".$student['student'].": ".$student['lastname']."".$student['firstname'].", ".$student['email']."</li >";?>
    <?php echo "<li> ".$student['student'].": ".$student['lastname']." ".$student['firstname'].", ".$student['email']." - ".anchor('internships/delete/'.$student["student"],'[del]');?>
    </li>
    <?php endforeach ?>
</ul>