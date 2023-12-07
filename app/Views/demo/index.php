<!DOCTYPE html>
<html lang="en">

	<head>
		<title>Listado de Productos</title>
        <link rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
      integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk"
      crossorigin="anonymous">
    </head>

	<body>
		<h3>Lista de Productos</h3>
		<table class="table table-bordered">
			<tr>
                <th>ID</th>
				<th>Price</th>
				<th>Description</th>
                <th>ID Category</th>
			</tr>
			<?php foreach ($products as $product) { ?>
				<tr>
                    <td><?= $product['id_product'] ?></td>
					<td><?= $product['price'] ?></td>
					<td><?= $product['product_name'] ?></td>
                    <td><?= $product['id_category'] ?></td>
				</tr>
			<?php } ?>
		</table>
	</body>
</html>