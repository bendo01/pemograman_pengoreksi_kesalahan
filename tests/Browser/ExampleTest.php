<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ExampleTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee('Laravel');
        });
    }
    
    public function testLoginToApplication()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/login');
            $browser->typeSlowly('email', 'sydnee.langworth@example.net')
                    ->typeSlowly('password', 'password');
            $browser->check('#remember_me');
            $browser->press('#login-button');
            $browser->assertSee('Selamat Datang');
            $browser->assertPathIs('/dashboard');
        });
    }
}
