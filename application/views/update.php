<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
   <div class="CONTAINER" style="width:700px; margin-left:300px;">
		<?php
		foreach($result as $row){
		?>
	<form method="post" action="<?=base_url('Test/edit')?>" >
		<table width="600" cellspacing="5" cellpadding="5" style="font-size:20px; margin:-5px;">
		<h2 style="color:green;">Registration Form</h2>
		<tr>
			<input type="hidden" name="id" value="<?php echo $row->id; ?>"><br>
<td> name<input type="text" name="name" value="<?php echo $row->name; ?>" required><br></td>
</tr>
<tr>
  <td>email<input type="text" name="email" value="<?php echo $row->email;?>" required ><br></td>
</tr>
	<tr>
  <td>password<input type="password" name="password" value="<?php echo $row->password	;?>" required></td>
</tr>
<tr>
	<input type="hidden"  name="edit" value="update">
  <td><button class="btn btn-success" type="submit">Update</button></td>
</tr>
</table>
</form>
<?php } ?>
</div>	
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
