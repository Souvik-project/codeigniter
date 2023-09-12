<html>
 <body>
  <h1>Update</h1>
  <form action="<?php echo base_url();?>doupdate" method="POST">
   Name:<input type="text" name="name" value="<?php echo $users['NAME'];?>"><br>
   Email:<input type="text" name="email" value="<?php echo $users['EMAIL'];?>"><br>
   Phone:<input type="text" name="phone" value="<?php echo $users['PHONE'];?>"><br>
   Password:<input type="password" name="password" value="<?php echo $users['PASSWORD'];?>"><br>
   <input type="hidden" name="id" value="<?php echo $users['ID'];?>">
   <input type="submit" value="Update">
  </form>
 </body>
</html> 
