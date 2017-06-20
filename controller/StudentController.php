<?php

require(ROOT . "model/StudentModel.php");


function index()
{

	render("student/index", array(
		'students' => getAllStudents(),
		
	));
}


function create()
{
	render("student/create");
}

function createSave()
{
	if (!createStudent()) {
		header("Location:" . URL . "Error/message");
		exit();
	}

	header("Location:" . URL . "Student/index");
}


function edit($id)
{
	render("student/edit", array(
		'st' => getStudent($id),
	));
}


function editSave()
{
	if (editStudent() != true) {
		header("Location:" . URL . "Error/message");
		exit();
	}

	header("Location:" . URL . "student/index");
}


function delete($id)
{
	if (!deleteStudent($id)) {
		header("Location:" . URL . "Error/message");
		exit();
	}

	header("Location:" . URL . "student/index");
}





