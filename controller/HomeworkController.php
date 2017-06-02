<?php

require(ROOT . "model/HomeworkModel.php");

function index(){
	$homeworks = getAllSubjects();

	// var_dump($homeworks);
	render("homework/index", array(
		'homeworks' => $homeworks,
		
	));
}



function create()
{
	render("homework/create");
}

function createSave()
{
	if (!createHomework()) {
		header("Location:" . URL . "error/message");
		exit();
	}

	header("Location:" . URL . "homework/index");
}


function edit($id)
{
	render("homework/edit", array(
		'homework' => getSubject($id)
	));
}

function editSave()
{
	if (!editHomework()) {
		header("Location:" . URL . "error/index");
		exit();
	}
	header("Location:" . URL . "homework/index");
}


function delete($id)
{
	if (!deleteHomework($id)) {
		header("Location:" . URL . "error/index");
		exit();
	}

	header("Location:" . URL . "homework/index");
}