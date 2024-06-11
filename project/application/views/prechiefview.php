
<html> 
<head>
<title>
chief engineer
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

<form method="post" action="http://localhost/project/index.php/ce/index">
<div style="position:relative;top:15px;left:360px">
 <a href="http://localhost/project/index.php/comp/index">Make Complain</a> 
 <a href="http://localhost/project/index.php/login/index">Logout</a> 
</div>
<p>see the pending complains and select yes in Req Daers if technician needed.</p>
<table>
<tr>
<select name=supreqtype>

<?php
foreach($row1 as $r)
{echo '<option value='.$r->ref.'>'.$r->description;}
?>
</select>
<br>
<br>
<td>Request DAERS</td>
<td>
<select name=reqtype>
<option value=Yes selected>Yes
<option value=No>No
</select>
</td></tr>
</table>
<input type="submit" name=page4pro value="process" >
</form>



</body>

</html>
