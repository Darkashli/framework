<?php

function getAllSubjects() 
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM homework";
	$query = $db->prepare($sql);
	$query->execute();

	$db = null;

	return $query->fetchAll();
}

function getSubject($id) 
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM homework WHERE id = :id";
	$query = $db->prepare($sql);
	$query->execute(array(
		":id" => $id));

	$db = null;

	return $query->fetch();
}



function editHomework() 
{
	$subject = isset($_POST['subject']) ? $_POST['subject'] : null;
	$contents = isset($_POST['contents']) ? $_POST['contents'] : null;
	$pages = isset($_POST['pages']) ? $_POST['pages'] : null;
	
	if (strlen($subject) == 0 || strlen($contents) == 0 || strlen($pages) == 0) {
		return false;
	}
	

	$db = openDatabaseConnection();

	$sql = "UPDATE homework SET id = :id, subject = :subject, contents = :contents, pages = :pages WHERE id = :id";
	$query = $db->prepare($sql);
	$query->execute(array(
		':id' => $id,
		':subject' => $subject,
		':contents' => $contents,
		':pages' => $pages));

	$db = null;
	
	return true;
}


function deleteHomework($id = null) 
{
	if (!$id) {
		return false;
	}
	
	$db = openDatabaseConnection();

	$sql = "DELETE FROM homework WHERE id=:id ";
	$query = $db->prepare($sql);
	$query->execute(array(
		':id' => $id));

	$db = null;
	
	return true;
}


function createHomework() 
{
	$subject = isset($_POST['subject']) ? $_POST['subject'] : null;
	$contents = isset($_POST['contents']) ? $_POST['contents'] : null;
	$pages = isset($_POST['pages']) ? $_POST['pages'] : null;
	
	if (strlen($subject) == 0 || strlen($contents) == 0 || strlen($pages) == 0) {
		return false;
	}
	
	$db = openDatabaseConnection();

	$sql = "INSERT INTO homework(subject, contents, pages) VALUES (:subject, :contents, :pages)";
	$query = $db->prepare($sql);
	$query->execute(array(
		':subject' => $subject,
		':contents' => $contents,
		':pages' => $pages));

	$db = null;
	
	return true;
}
