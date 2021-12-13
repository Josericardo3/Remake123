<?php

namespace Tests\Unit;
include("app/Http/Controllers/WelcomeController.php");

use App\Http\Controllers\WelcomeController;
use PHPUnit\Framework\TestCase;use PHPUnit\Util\Test;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        $this->visit('home')
            ->see('Styde is awesome');
    }
}





