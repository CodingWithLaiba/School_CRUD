<?php
require_once "../app/model/Teacher.php";

class TeachersController
{

    private $teacher;

    public function __construct()
    {
        $this->teacher = new Teacher();
    }

    // READ
    public function index()
    {
        $teachers = $this->teacher->getAll();
        require "../app/view/Teachers/index.php";
    }

    // CREATE FORM
    public function create()
    {
        require "../app/view/Teachers/create.php";
    }

    // STORE
    public function store()
    {
        $this->teacher->create($_POST);
        header("Location: /practicproject/teachers");
        exit;
    }

    // EDIT FORM
    public function edit($id)
    {
        $teacher = $this->teacher->find($id);
        require "../app/view/Teachers/edit.php";
    }

    // UPDATE
    public function update($id)
    {
        $this->teacher->update($id, $_POST);
        header("Location: /practicproject/teachers");
        exit;
    }

    // DELETE
    public function delete($id)
    {
        $this->teacher->delete($id);
        header("Location: /practicproject/teachers");
        exit;
    }
}
