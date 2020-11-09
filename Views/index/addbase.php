<!-- form for add new students to base -->
<!DOCTYPE html>
<html>
<head>
	<title>Додати студента</title>
</head>
<body>
<table border="1px" style="height: 200px; margin: auto;">
		<th>Імя студента</th>
		<th>Вік студента</th>
		<th>Стать студента</th>
		<th>Група студента</th>
		<th>Факультет</th>
		<tr>
		<form action=""  method="POST" style="margin: auto;">
		<td><input style=" text-align: center; border: none" type="text" name="name" placeholder="Insert name"></td>
		<td><input style=" text-align: center; border: none" type="number" name="age" placeholder="Insert age"></td>
		<td><input style=" text-align: center; border: none" type="text" name="sex" placeholder="Insert sex(male of female)"></td>
		<td><input style=" text-align: center; border: none" type="number" name="group" placeholder="Insert group"></td>
		<td><input style=" text-align: center; border: none" type="text" name="faculty" placeholder="Insert faculty"></td>
		<tr><td colspan="5" style="text-align: center; background-color:#808080 "><input style="font-size: 30px; background-color:#DCDCDC" type="submit" name="ok" value="Send form"></td></tr>
		<tr><td colspan="5" style="text-align: center; background-color:#808080 "><input style="font-size: 30px; background-color:#DCDCDC" type="submit" name="base" value="To base"></td></tr>
		<tr><td colspan="5" style="text-align: center; background-color:#808080 "><input style="font-size: 30px; background-color:#DCDCDC" type="submit" name="main" value="To main"></td></tr>
</table>
</body>
</html>



