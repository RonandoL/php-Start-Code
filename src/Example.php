<?php
    class Example
    {
        private $name;

        function __construct($contact_name)
        {
            $this->name = $contact_name;
        }

    // SAVE, getAll(), deleteAll()
        function save()
        {
            $GLOBALS['DB']->exec("INSERT INTO tasks (description) VALUES ('{$this->getDescription()}');");
        }
        
        static function getAll()
        {
            return $_SESSION['list_of_contacts'];
        }
        
        static function deleteAll()
        {
            $_SESSION['list_of_contacts'] = array();
        }
    }
?>
