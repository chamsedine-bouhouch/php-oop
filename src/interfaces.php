<?php
/* Interfaces, like abstract classes, include abstract methods and constants. 
However, unlike abstract classes, interfaces can have only public methods, 
and cannot have variables. */

abstract class User
{
    protected $name;
}
interface Author
{
    public function setModel($name);

    public function getModel();
}
interface Editor
{
}
class AuthorEditor extends User implements Author, Editor
{
    public function setModel($name)
    {
        $this->name = $name;
    }
    public function getModel()
    {
        return $this->name;
    }
}

/* Main Call */
$author_editor = new AuthorEditor();
$author_editor->setModel("Chamseddine Bouhouch");
echo $author_editor->getModel();
