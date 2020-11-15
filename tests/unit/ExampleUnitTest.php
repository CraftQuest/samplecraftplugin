<?php
/**
 * Sample Craft Plugin plugin for Craft CMS 3.x
 *
 * A sample Craft plugin for CraftQuest.io
 *
 * @link      https://craftquest.io
 * @copyright Copyright (c) 2020 Ryan Irelan
 */

namespace craftquest\samplecraftplugintests\unit;

use Codeception\Test\Unit;
use UnitTester;
use Craft;
use craftquest\samplecraftplugin\SampleCraftPlugin;

/**
 * ExampleUnitTest
 *
 *
 * @author    Ryan Irelan
 * @package   SampleCraftPlugin
 * @since     1.0.0
 */
class ExampleUnitTest extends Unit
{
    // Properties
    // =========================================================================

    /**
     * @var UnitTester
     */
    protected $tester;

    // Public methods
    // =========================================================================

    // Tests
    // =========================================================================

    /**
     *
     */
    public function testPluginInstance()
    {
        $this->assertInstanceOf(
            SampleCraftPlugin::class,
            SampleCraftPlugin::$plugin
        );
    }

    /**
     *
     */
    public function testCraftEdition()
    {
        Craft::$app->setEdition(Craft::Pro);

        $this->assertSame(
            Craft::Pro,
            Craft::$app->getEdition()
        );
    }
}
