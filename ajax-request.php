<?php
// this will include the database
include_once "./database.php";
// this will add data to the database
if (isset($_POST['create'])) {
	$name = $_POST['guest_name'];
	$stmt = $connection->prepare("INSERT INTO attendance (name,status) VALUES('$name', 0) ");
	$stmt->execute();
}
// this will get data from the database
if (isset($_POST['get'])) {
	$stmt = $connection->prepare("SELECT * FROM attendance");
	$stmt->execute();
	$lists = $stmt->fetchAll();
	foreach ($lists as $list) :
		$id = $list["id"];
		$name =  $list["name"];
		$status = $list["status"];
		if ($status == 0) :
			echo  '
			<div class="guest guest-' . $id . '">
				<div class="guest-det">
					<i class="fa fa-trash" onclick="deleteBtn(' . $id . ')"></i>
					<p>' . $name . '</p>
					<i class="fa fa-times edit-' . $id . '"  onclick="absentBtn(' . $id . ')"></i>
					<i class="fa fa-check edit-' . $id . '"  onclick="presentBtn(' . $id . ')"></i>
				</div>
			</div>
		';
		elseif($status == 1) :
			echo  '
			<div class="guest guest-' . $id . '">
				<div class="guest-det">
					<i class="fa fa-trash" onclick="deleteBtn(' . $id . ')"></i>
					<p>' . $name . '</p>
					<p  style="color:green">Present</p>
				</div>
			</div>
		';
		elseif($status == 2):
			echo  '
			<div class="guest guest-' . $id . '">
				<div class="guest-det">
					<i class="fa fa-trash" onclick="deleteBtn(' . $id . ')"></i>
					<p>' . $name . '</p>
					<p  style="color:red">Absent</p>
				</div>
			</div>
		';
		endif;
	endforeach;
}
// this will delete data from the database 
if (isset($_POST['delete'])) {
	$id = $_POST['id'];
	$stmt = $connection->prepare("DELETE FROM attendance WHERE id = $id");
	$stmt->execute();
}
// this will edit data from the datebase
if (isset($_POST['present'])) {
	$id = $_POST['id'];
	$stmt = $connection->prepare("UPDATE attendance SET status = 1 WHERE id = $id");
	$stmt->execute();
}
// this will edit data from the datebase
if (isset($_POST['absent'])) {
	$id = $_POST['id'];
	$stmt = $connection->prepare("UPDATE attendance SET status = 2 WHERE id = $id");
	$stmt->execute();
}
