

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
   
   <div class="container" style="width:500px; height:300px; border:2px;">
	<table class="table" cell-padding="5">
  <thead>
    <tr>
      <th scope="col">Sno</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
			<th scope="col">Image</th>
			<th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
		<?php
		foreach ($result as $row) {
			// $id=1;
		?>
    <tr>
      <th scope="row"><?php echo $row->id; ?></th>
      <td><?php echo $row->name;?></td>
      <td><?php echo $row->email;?></td>
      <td><?php echo $row->password;?></td>
			<!-- <td><img src="http://localhost/CII3/ci3/uploads/<?php echo $row->image; ?>" alt="hi" style="width:100px;"></td> -->
			<td><button class="btn btn-info" ><a href="display?id=<?php echo $row->id; ?>" style="color:white;">Edit</a></button></td>
			<td><button class="btn btn-danger" ><a href="delete?id=<?php echo $row->id; ?>" style="color:white;">delete</a></button></td>
   
    </tr>
	<?php	} ?>
  </tbody>
</table>
</div>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
