<html> 
<head>
<title>
supervisor
</title>
</head>
<body BGCOLOR='#888888'>
<div style="border:1px solid black;padding:15px;margin:20px;min-height:100px;background-color:#9999CC">
<p>
<center style="color:#180000;font-size:30px">
COMPLAIN MANAGEMENT SYSTEM FOR ENGINEERING SECTION,BUET 

</center>
</p>

</div>
<br>
<br>

 <div style="position:relative;top:2px;left:360px">
 <form method="post" action="http://localhost/project/index.php/supervisorlogout">
 <input type="submit" name=page4pro value="logout" >
</form>
<form method="post" action="http://localhost/project/index.php/supervisor/validate">
<div style="position:relative;top:40px;left:360px">
 <a href="http://localhost/project/index.php/comp/index">Make Complain</a> 
  
</div>
You are currently assigned at:
<select name=supreqtype>
<option value="">Select...</option>
<?php
foreach($row1 as $r)
{echo '<option value='.$r->ref.'>'.$r->description;}
?>
</select>
<br>
<br>
<table>
<tr>
<td>Acceptance Date:</td>

<td>
<input type="text" name=page4date>
</td></tr>
<br>
<tr><td>Reference no:</td>
<td>
<input type="text" name=page4rno></td></tr>
<br>

</table>
<input type="submit" name=page4pro value="process" >
</form>



</body>

</html>
