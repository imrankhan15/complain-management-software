<html> 
<head>
	<style type="text/css">
	body{
	}
  .error {
    color: red;
}
  </style>
	
</head>
<body BGCOLOR='#888888'>
<div style="border:1px solid black;padding:15px;margin:20px;min-height:100px;background-color:#9999CC">
<p>
<center style="color:#180000;font-size:30px">
COMPLAIN MANAGEMENT SYSTEM FOR ENGINEERING SECTION,BUET

</center>
</p>

</div>

<div style="position:relative;top:50px;left:380px">
<form method="post" action="http://localhost/project/index.php/logout">
 <input type="submit" name=page4pro value="logout" >
</form>

<form method="post" action="http://localhost/project/index.php/comp/view_status">
<?php echo form_error('mak'); ?>
<p>if you want know about your latest submitted complain click the following button  </p>
<table><tr><td>name:</td><td><input type="text" name=mak></td></tr>
<tr><td><input type="submit" name=status value="current status"></td><tr>
</table>
</form>


<form method="post" action="http://localhost/project/index.php/comp/validate">
<table>
Insert your complaininfo 
<tr><td>Complaintype:</td>
<td>
<select name=reqtype>
<option value="">Select...</option>
<option value=Construction selected>Construction
<option value=Plumbing>Plumbing
<option value=Electric>Electric
<option value=Pluster>Pluster
<option value=Glass>Glass
<option value=Swipper>Swipper
<option value=Wood>Wood
<option value=Iron>Iron

</select>
</td>
</tr>
<tr>
<td>Location:</td>

<td>
<select name=location>
<option value="">Select...</option>
<option value=ECE Building selected>ECE Building
<option value=ME Building>ME Building
<option value=CE Building>CE Building
<option value="OAB Building">OAB Building
<option value=Architecture Building>Architecture Building
<option value=URP Building>URP Building
<option value=Others>Others


</select></td></tr>
<br>
<tr><td>Description:</td>
<?php echo form_error('des'); ?>
<td><textarea rows=5 cols=30 name=des>

</textarea></td></tr>
<br>

<tr><td><p>Requisition made by:</p></td></tr><br>

<tr><td>name:</td>
<?php echo form_error('madeby'); ?>
<td><input type="text" name=madeby></td></tr>
<br>

<tr><td>Address:</td>
<?php echo form_error('addr'); ?>
<td><input type="text" name=addr></td></tr>
<br>
<tr><td>Phone:</td>
<?php echo form_error('phone'); ?>
<td><input type="text" name=phone></td></tr>

<br>

<br>


<tr><td><input type="submit" name=page1submit value="submit" ></td></tr>

</table>
</form>
</div>


</body>

</html>