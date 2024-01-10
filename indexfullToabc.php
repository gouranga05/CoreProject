<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="" name="myForm" id="myForm" method="post" onsubmit="">
		<table border="2" align="center">
			<tr>
				<td colspan="2" align="center">Registration Form
				</td>
			</tr>

			<tr>
				<td> First Name*</td>
				<td> <input type="text" name="firstname" id="firstname"><span id="spanfirst"
						style="color: rgb(236, 10, 10);"> </span> </td>
			</tr>

			<tr>
				<td> Last Name</td>
				<td> <input type="text" name="lastname" id="lastname"><span id="spanlast"
						style="color: rgb(236, 10, 10);"></span></td>
			</tr>

			<tr>
				<td> Email*</td>
				<td> <input type="text" name="email" id="email"><span id="spanemail"
						style="color: rgb(236, 10, 10);"></span> </td>
			</tr>

			<tr>
				<td> Password*</td>
				<td> <input type="password" name="password" id="password"><span id="spanpassword"
						style="color: rgb(236, 10, 10);"></span></td>
			</tr>

			<tr>
				<td>Phone*</td>
				<td> <input type="text" name="phone" id="phone"><span id="spanphone"
						style="color: rgb(236, 10, 10);"></span></td>
			</tr>

			<tr>
				<td> Date of Birth</td>
				<td> <input type="datetime-local" name="dates" id="dates"><span id="spandate"></span></td>
			</tr>

			<tr>
				<td>Address</td>
				<td> <textarea name="address" id="address"></textarea><span id="spanaddress"
						style="color: rgb(236, 10, 10);"></span> </td>
			</tr>

			<tr>
				<td>Gender </td>
				<td> <select name="gender">
						<option value=""> Select </option>
						<option value="male"> Male</option>
						<option value="female"> Female</option>
						<option value="none"> Prefer Not To Say</option>

					</select>
					<span id="spangender" style="color: rgb(236, 10, 10);"></span>
				</td>
			</tr>

			<tr>
				<td>Language </td>
				<td> <input type="checkbox" name="checkbox" value="Hindi">
					<label> Hindi </label> <br>
					<input type="checkbox" name="checkbox" value="Bengali">
					<label> Bengali </label><br>
					<input type="checkbox" name="checkbox" value="English">
			            		<label> English </label>
					<span id="spanlanguage" style="color: rgb(236, 10, 10);"></span>
				</td>
			</tr>

			<tr>
				<td>Country </td>
				<td>
					<input type="radio" name="country" value="India"> <label> India </label> <br>
					<input type="radio" name="country" value="England"> <label> England </label> <br>
					<input type="radio" name="country" value="USA"> <label> USA </label> <br> <span id="spancountry"
					style="color: rgb(236, 10, 10);"></span>
				</td>
			</tr>

			<tr>
				<td> Upload Image &nbsp </td>
				<td colspan="1"> <input type="file" id="photo" name="photo" value="photo">
					<span id="spanphoto" style="color: rgb(236, 10, 10);"></span>
				</td>
			</tr>
			<tr>
				<td colspan="2" align="center">
					<button><a href="index.html"> HomePage </a> </button>
					<button><input type="Submit" id="submit"></button>
					<input type="Reset">
				</td>

			</tr>

		</table>
	</form>

    <?php
        // echo "HIIII";
       
        // print "Hi";
        $a = $_REQUEST['firstname'];
        print $a;
        print $_REQUEST['lastname'];
        print $_REQUEST['email'] ;
        print $_REQUEST['password'];
        print $_REQUEST['phone'];

    ?>
</body>
</html>