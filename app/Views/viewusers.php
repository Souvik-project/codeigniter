<html>
<body>
<h1>view users</h1>
<table border="1">
<tr><th>ID</th><th>NAME</th><th>EMAIL</th><th>PHONE</th><th>ACTIONS</th></tr>

<?php

foreach($users as $user)
{
	
	
?>
<tr><td><?php echo $user['ID'];?></td><td><?php echo $user['NAME'];?></td><td><?php echo $user['EMAIL'];?></td><td><?php echo $user['PHONE'];?></td><td><a href='<?php echo base_url()."del/".$user['ID'];?>'>Delete</a> | <a href='<?php echo base_url()."update/".$user['ID'];?>'>Update</a></td></tr>
<?php
}
?>
</table>
</body>
</html>