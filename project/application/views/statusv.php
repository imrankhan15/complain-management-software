
<html> 
<body BGCOLOR='#888888'>
<div style="position:relative;top:40px;left:360px">
 <a href="http://localhost/project/index.php/comp/index">Back</a> 
  
</div>
<p><h3>Your submitted complain's details:</h3></p><br><br>

<?php
$tmpl = array ( 'table_open'  => '<table border="1" cellpadding="2" cellspacing="1" class="mytable">' );

 $this->table->set_template($tmpl);
foreach($rows as $r)
{

$this->table->add_row($r->status, 'on', $r->date);
 //echo $r->status;
}
$this->table->function = 'htmlspecialchars';
 echo $this->table->generate();
?>


</body>

</html>