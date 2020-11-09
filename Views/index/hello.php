<!--Form for show students list -->
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<table border="1px" style="height: 200px; margin: auto;">
 <th>ІМЯ</th>
 <th>ВІК</th>
 <th>СТАТЬ</th>
 <th>ГРУПА</th>
 <th>ФАКУЛЬТЕТ</th>
 <th>РЕДАГУВАТИ</th>
 <th>ВИДАЛИТИ</th>
<?php
#array with records from database
foreach ($arg as $key => $value) {
	?>
	<tr>
	<td style="text-align: center;"> <?php echo $value['name'] ?></td>
	<td style="text-align: center;"> <?php echo $value['age'] ?></td>
	<td style="text-align: center;"> <?php echo $value['sex'] ?></td>
	<td style="text-align: center;"> <?php echo $value['grou'] ?></td>
	<td style="text-align: center;"> <?php echo $value['faculty'] ?></td>
	<td style="text-align: center;"> <a style="text-decoration: none; color: black; font-weight: bolder;" href="http://base/students/upgrade/<?php echo $value['id']?>">Press for edit</a></td>
	<td style="text-align: center;"> <a style="text-decoration: none; color: black; font-weight: bolder;"href="http://base/students/delbase/<?php echo $value['id']?>">Press for delete</a></td>
	</tr>
	<?php
}
?>
<!-- form for navigation buttons -->	
	<form method="POST">
	<tr><td colspan="7" style="text-align: center; background-color:#808080 "><input  style="font-size: 30px; background-color:#DCDCDC" type="submit" name="add" value="Add student"></td></tr>
	<tr><td colspan="7" style="text-align: center; background-color:#808080 "><input style="font-size: 30px; background-color:#DCDCDC" type="submit" name="main" value="To main"></td></tr>
	</form>
</table>
</body>
</html>


