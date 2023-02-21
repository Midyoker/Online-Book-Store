<?php	
	if(!isset($_POST['save_change'])){
		echo "Something wrong!";
		exit;
	}

	$isbn = trim($_POST['isbn']);
	$title = trim($_POST['title']);
	$author = trim($_POST['author']);
	$descr = trim($_POST['descr']);
	$price = floatval(trim($_POST['price']));
	$publisher = trim($_POST['publisher']);

	if(isset($_FILES['image']) && $_FILES['image']['name'] != ""){
		$image = $_FILES['image']['name'];
		$directory_self = str_replace(basename($_SERVER['PHP_SELF']), '', $_SERVER['PHP_SELF']);
		$uploadDirectory = $_SERVER['DOCUMENT_ROOT'] . $directory_self . "bootstrap/img/";
		$uploadDirectory .= $image;
		move_uploaded_file($_FILES['image']['tmp_name'], $uploadDirectory);
	}

	require_once("./functions/database_functions.php");
	$conn = db_connect();
	$findPub = "SELECT * FROM publisher WHERE publisher_name = '$publisher'";
	$findResult = mysqli_query($conn, $findPub);
	if(!$findResult){
		$insertPub = "INSERT INTO publisher(publisher_name) VALUES ('$publisher')";
		$insertResult = mysqli_query($conn, $insertPub);
		if(!$insertResult){
			echo "Can't add new publisher " . mysqli_error($conn);
			exit;
		}
	}


	$query = "UPDATE books SET  
	book_title = '$title', 
	book_author = '$author', 
	book_descr = '$descr', 
	book_price = '$price'";
	if(isset($image)){
		$query .= ", book_image='$image' WHERE book_isbn = '$isbn'";
	} else {
		$query .= " WHERE book_isbn = '$isbn'";
	}
	$result = mysqli_query($conn, $query);
	if(!$result){
		echo "Can't update data " . mysqli_error($conn);
		exit;
	} else {
		header("Location: admin_edit.php?bookisbn=$isbn");
	}
?>