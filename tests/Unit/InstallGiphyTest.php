<?php

namespace Ghanem\Giphy\Tests\Unit;

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\File;
use Ghanem\Giphy\Tests\TestCase;

class InstallGiphyTest extends TestCase
{
    /** @test */
    function the_install_command_copies_the_configuration()
    {
        // make sure we're starting from a clean state
        if (File::exists(config_path('giphy.php'))) {
            unlink(config_path('giphy.php'));
        }

        $this->assertFalse(File::exists(config_path('giphy.php')));

        Artisan::call('giphy:install');

        $this->assertTrue(File::exists(config_path('giphy.php')));
    }
}
