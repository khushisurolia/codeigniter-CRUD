<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<div class="CONTAINER" style="width:700px; border:2px; margin-left:200px;" >
		
	<form method="post" <?php echo form_open_multipart('test/save');?>
		
		<table width="600"  border="1" cellspacing="5" cellpadding="5" style="font-size:30px;">
		<h1 style="color:green;">Registration Form</h1>
		<tr>
			<input type="hidden" name="id" ><br>
<td> name<input type="text" name="name"><br></td>
</tr>
<tr>
  <td>email<input type="text" name="email"  ><br></td>
</tr>
	<tr>
  <td>password<input type="password" name="password"></td>
</tr>
<!-- <tr>
  <td>image<input type="file" name="image"  ></td>
</tr> -->
<tr>
	<input type="hidden" name="token" value="save">
  <td><button style="color:brown; WIDTH:100PX; HEIGHT:30PX; background-color:lightblue; border-radius:30px;">Submit</button></td>
</tr>
</table>
</form>
</div>	
</body>
</html>
<html>
