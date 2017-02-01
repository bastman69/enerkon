<?php

use Laravel\Lumen\Testing\DatabaseMigrations;
use Laravel\Lumen\Testing\DatabaseTransactions;
use Laravel\Lumen\Testing\Concerns;

class ExampleTest extends TestCase
{
    
    public function testRouting()
    {
      $this->get('/');
      $this->seeStatusCode(200);
      $this->get('/nothing');
      $this->seeStatusCode(404);
    }
}
