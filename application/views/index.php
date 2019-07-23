<html>
<head>
    <title>CodeIgniter Eloquent</title>
</head>
<body>
    <h3>CI 3.x Eloquent Example</h3>
    <p>List of Names and their meanings.</p>
    <table border="1">
    	<thead>
    		<tr>
    			<th>First Name</th>
    			<th>Last Name</th>
    			<th>Description</th>
    		</tr>
    	</thead>
    	<tbody>
    		<?php foreach ($users as $obj) { ?>
    		<tr>
    			<td><?php echo $obj->first_name; ?></td>
    			<td><?php echo $obj->last_name; ?></td>
    			<td><?php echo $obj->name_description; ?></td>
    		</tr>
    		<?php } ?>
    	</tbody>
    </table>
</body>
</html>