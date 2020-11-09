<!-- form for upgrade students -->
<!DOCTYPE html>
<html>
<head>
	<title>Редагування бази</title>
</head>
<body>
<table border="1px" style="height: 200px; margin: auto;">
	<th>ID</th>
	<th>Імя студента</th>
	<th>Вік студента</th>
	<th>Стать студента</th>
	<th>Група студента</th>
	<th>Факультет</th>
	<tr>	
<form action="" method="POST">
	<td><input style="text-align: center; border: none"type="text" name="id" value="<?php echo $arg[0][0]?>" ></td>
	<td><input style="text-align: center; border: none"type="text" name="name" value="<?php echo $arg[0][1]?>" ></td>
	<td><input style="text-align: center; border: none"type="number" name="age" value="<?php echo $arg[0][2]?>" ></td>
	<td><input style="text-align: center; border: none"type="text" name="sex" value="<?php echo $arg[0][3]?>" ></td>
	<td><input style="text-align: center; border: none"type="number" name="group" value="<?php echo $arg[0][4]?>" ></td>
	<td><input style="border: none"type="text" name="faculty" value="<?php echo $arg[0][5]?>" ></td>
	</tr>
	<tr><td colspan="6" style="text-align: center; background-color:#808080 "><input style="font-size: 30px; background-color:#DCDCDC"type="submit"></td></tr>
	<tr><td colspan="6" style="text-align: center; background-color:#808080 "><input style="font-size: 30px; background-color:#DCDCDC"type="submit" name="base" value="До списку"></td></tr>
	<tr><td colspan="6" style="text-align: center; background-color:#808080 "><input style="font-size: 30px; background-color:#DCDCDC"type="submit" name="main"  value="На головну"></td></tr>
</form>
</table>
</form>
</body>
</html>

