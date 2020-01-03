<?php

namespace Tests;

use Modelizer\Selenium\SeleniumTestCase;
use  Modelizer\Selenium\SeleniumServiceProvider;

class SeleniumExampleTest extends SeleniumTestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        // This is a sample code you can change as per your current scenario
        $this->visit('/')
             ->see('Laravel')
             ->hold(3);
    }

    /**
     * A basic submission test example.
     *
     * @return void
     */
    public function testLoginFormExample()
    {
        $loginInput = [
            'username' => 'dummy-name',
            'password' => 'dummy-password'
        ];

        // Login form test case scenario
        $this->visit('/login')
             ->submitForm('#login-form', $loginInput)
             ->see('Welcome');  // Expected Result
    }
}
