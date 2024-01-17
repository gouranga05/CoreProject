<?php
$servername = "10.10.10.12:3306";
$username = "root";
$password = "c0relynx";
$db= "indexdb";
// echo "HIIII";
// Create connection
// $conn = new mysqli($servername, $username, $password);
$conn = mysqli_connect($servername, $username, $password,$db);
// Check connection
if (!$conn) {
  echo ("Connection failed: ");
}
echo "Connected successfully";
// echo "statement";
// mysqli_query($conn, 'INSERT INTO user VALUES(7,"Danadan");');

if(isset($_REQUEST['mode']) && $_REQUEST['mode']=='delete'){
    echo $ids= $_REQUEST['id'];
    
    $query= "UPDATE reg set deleted=1 WHERE id=$ids;";
    mysqli_query($conn,$query);
}
//DELETE ALL
if(isset($_REQUEST['mode']) && $_REQUEST['mode']=='deleteall'){
    echo $ids= $_REQUEST['id'];
    
    $query= "UPDATE reg set deleted=1";
    mysqli_query($conn,$query);
}

//ADVANCED SEARCH
if(isset($_REQUEST['#usersearch']) && $_REQUEST['mode']=='searchall'){
	$vars=$_REQUEST['.usersearch'];
	$where="firstname LIKE $vars OR lastname LIKE $vars OR email LIKE $vars OR phone LIKE $vars";
	if($vars!=""){
	$query="SELECT * FROM reg WHERE deleted=0 AND $where";
	}
	mysqli_query($conn,$query);
}


?>

<html>

<head>
	<title>LISTING dB </title>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script> 
	<script>
		$(document).ready(function () {
			// alert("HIIIIIIIIIIIIIIIIIIIIIIIIIIIII")
			$('.view').click(function () {
				$("#popup").show();
				alert("Hi")
				return false;
			})
			$('#exitview').click(function () {
				$('#popup').hide();

			})
		});
	</script>
	<!-- searchbar feature -->
	<script>
		$(document).ready(function () {
			// alert("HIIIIIIIIIIIIIIIIIIIIIIIIIIIII")
			$('#searchbar').click(function () {
				// alert("Hi")
				// $("#searchview").show();
				
		

			})
			$('#exitsearch').click(function () {
				// $('#searchview').hide();

			})
		});
	</script>
</head>

<body>
		<p>Hi this is the listing page</p>
	 <script>
		
		function valid() {
			confirm("Press a button!\nEither OK or Cancel.")
		}
		// function checkboxes() {
		// 	alert('document.listing.intro.value' );
		// 	let checks = 'document.listing.select';
		// 	// if(document.listing.intro.value == 0) document.listing.intro.checked=true;
		// 	if (document.listing.intro.checked == true) {
		// 		document.listing.select[0].checked=true;
		// 		// document.listing.select[1].checked=true;
		// 		for (var i = 0; i < checks.length; i++) {
		// 			document.listing.select[i].checked = true;
		// 		}
		// 		return true;
		// 	}
		// 	if (document.listing.intro.checked == false) {
		// 		document.listing.select[0].checked=true;
				
		// 		// document.listing.select[1].checked=true;
		// 		for (var i = 0; i < checks.length; i++) {
		// 			document.listing.select[i].checked = false;
		// 		}
		// 		return true;
		// 	}
		// 	else{
		// 	let all=0;
		// 	for(var i=0;i<checks.length;i++){
		// 			if(document.listing.select[i].checked==true) all++;
		// 		}
		// 		if(all==checks.length) document.listing.intro.checked=true;
		// 	}

		// }
		// intro.addEventListener('change', checkboxes);
		function deselect() {
			alert("Hello");
			let checks = document.listing.select;
			for (var i = 0; i < checks.length; i++) {
				if (document.listing.select[i].checked == false) {
					document.listing.intro.checked = false;
				}
			}  
			checks.addEventListener('change', deselect);
		}
		function deleting() {
			let checks = document.listing.select;
			let count = 0;
			for (var i = 0; i < checks.length; i++) {
				if (checks[i].checked == true) {
					confirm("Are you sure to delete the item??")
					return;
				}
				else {
					count++;
				}
			}
			alert("Please select at least 1 identity to delete !!!!");
		}

        $(".deleted").click(function()){
            if(confirm("Are you sure you want to delete this?")){
                return true;
            }
            else{
                return false;
            }
        }
		//ADVANCED SEARCH
		$('input').keyup(function()){
			alert("WOrek");
			// var sea=$("#usersearch").val();
			// alert("sea");
			// var sea = $('.usersearch').val(); 
			// var url="listing.php";
			// $.ajax({

			// })
			$searchname=$('.usersearch').val();
			// echo $searchname;

			

		}

	</script> 

	<div id="searchview"
		style="display: none; position: absolute; left: 43%; top: 20%; transform: translate(-50%, -50%); z-index: 1; background-color: #fff; padding: 10px; " >

	<table border="0" >
		<tr >
			<td colspan="2"  align="center" >
				Enter what you want to search
			</td>
			<td align="right">
				<button id="exitsearch"> X </button>
			</td>
		</tr>
		<tr>
			<td> Name</td>
			<td><input type="text"></td>
		</tr>
		<tr>
			<td> Email</td>
			<td><input type="text"></td>
		</tr> 
		<tr>
			<td> Phone</td>
			<td><input type="text"></td>
		</tr>
		<tr>
			<td> Gender </td>
			<td><input type="text"></td>
		</tr>


		

	</table>
</div>


	<div id="popup"
		style="display: none; position: absolute; left: 50%; top: 50%; transform: translate(-50%, -50%); z-index: 1; background-color: #fff; padding: 10px;" > 
	<table  border="0" >
		<tr >
			<td colspan="1"  align="center" >
				Viewing Details
			</td>
			<td align="right">
				<button id="exitview"> X </button>
			</td>
		</tr>
		<tr>
			<td> Name</td>
			<td>Gouranga Kamilya </td>
		</tr>

		<tr>
			<td> Phone</td>
			<td>655416416341 </td>
		</tr>

		<tr>
			<td> Email</td>
			<td>abc@gmail.com </td>
		</tr>
		<tr>
			<td> Date Of Birth</td>
			<td>05/13/2025</td>
		</tr>
		<tr>
			<td> Address</td>
			<td>Kolkata</td>
		</tr>
		<tr>
			<td>Gender</td>
			<td>Male</td>
		</tr>

	</table>
</div>

	<form action="" name="listing">
		<table align="center" border="0" width="480">
			<tr>
				<td align="center">
					<input type="text" id="usersearch" class="usersearch">

					<a href="listing.php?id=<?php echo $rows['id']?>&mode=searchall" class="usersearch">SEARCH</a>
				</td>
				<td align="right">
					<button><a href="index.php"> +New </a></button>
				</td>
			</tr>
		</table>
		<table border="1" align="center">
			<tr align="center" border="2">

			</tr>
			<tr>
				<td onclick="checkboxes()"> <input type="checkbox" name="intro" value="0"> </td>
				<td><u><b> First Name </td>
				<td><u><b> Last Name </td>
				<td><u><b> Image </td>
				<td align="center"><u><b> Email </td>
				<td><u><b> Phone </td>
				<td align="center"><u><b> Action </td>
			</tr>
				
				<?php
				$sql = "SELECT * FROM reg where deleted=0";
				$result = mysqli_query($conn,$sql);
				//print_r($result);
				//echo "Hello";
            while ($rows = $result->fetch_assoc()) {
                ?>
			<tr>
				
			<!-- <td> <?php echo $rows['image']; ?></td> -->

			<td onclick="deselect()"> <input type="checkbox" name="select" value="2"> </td>
			
                    <td><?php echo $rows['firstname']; ?></td>
                    <td><?php echo $rows['lastname']; ?></td>
					<td><?php echo $rows['image']; ?></td>
                    <td><?php echo $rows['email']; ?></td>
                    <td><?php echo $rows['phone']; ?></td>
					<td><a href="index.php?id=<?php echo $rows['id']?>&mode=edit" class="edit">EDIT</a>
                    <a href="listing.php?id=<?php echo $rows['id']?>&mode=delete" class="deleted">DELETE</a>
					<button class="view">VIEW</button>
				</td>

				
			</tr>
			<?php
            }
            ?>
			<tr>
			<td colspan="7" align="center">
			<a href="listing.php?id=<?php echo $rows['id']?>&mode=deleteall" class="deleteall"> Delete All</a></td></tr>








               <!-- <td> RamShankar</td>
				<td> HatiKheda </td>
				<td> <img src="#"></td>
				<td> ramu@gmail.com </td>
				<td> 101 </td> -->
				

			<!-- <tr>
				<td onclick="deselect()"> <input type="checkbox" name="select" value="2"> </td>
				<td> Gouranga</td>
				<td> Kamilya </td>
				<td> <img src="#"></td>
				<td> gk@gmail.co.in </td>
				<td> 8975 </td>

				<td><button>EDIT</button>
					<button onclick="confirm('Are you sure to delete the data??');">DELETE</button>
					<button class="view">VIEW</button>
				</td>
		</tr>

			<tr>
				<td onclick="deselect()"> <input type="checkbox" name="select" value="2"> </td>
				<td> Core</td>
				<td> Lynx </td>
				<td> <img src="#"></td>
				<td> c0relynx@gmail.com </td>
				<td> 101 </td>
				<td><button>EDIT</button>
					<button onclick="confirm('Are you sure to delete the data??');" name="deletee">DELETE</button>
					<button class="view">VIEW</button>
				</td>
		</tr>
			<tr>

				<td colspan="6" align="center"><button input type="submit" align="center">Submit</button>
					<button input type="reset" align="center">Reset</button>
					<button onclick="deleting()" type="reset" align="center">Delete</button>
				</td>
			</tr> -->
			
		</table>
	</form>
</body>

</html>