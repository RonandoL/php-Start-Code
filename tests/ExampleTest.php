<?php

    /**
    * @backupGlobals disabled
    * @backupStaticAttributes disabled
    */
    
    require_once "src/Example.php";
    
    $server = 'mysql:host=localhost;dbname=to_do_test';
    $username = 'root';
    $password = 'root';
    $DB = new PDO($server, $username, $password);

    class ExampleTest extends PHPUnit_Framework_TestCase
    {

        function test_save()
        {
            //Arrange
            $description = "Wash the dog";
            $test_task = new Task($description);

            //Act
            $test_task->save();

            //Assert
            $result = Task::getAll();
            $this->assertEquals($test_task, $result[0]);
        }
        
        function test_getAll()
        {
            //Arrange
            ...
        
            //Act
            ...
        
            //Assert
            ...
        }
    }

    // Run in terminal in project folder
    // export PATH=$PATH:./vendor/bin
    // phpunit tests

?>
