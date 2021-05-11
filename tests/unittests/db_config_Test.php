<?php


use PHPUnit\Framework\TestCase;
require "../../db.config.php";
class dbconfigTest extends TestCase
{

    public function testConnection()
    {
        $this->assertEquals(true);
    }

}
