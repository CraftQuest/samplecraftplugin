<?php
/**
 * Sample Craft Plugin plugin for Craft CMS 3.x
 *
 * A sample Craft plugin for CraftQuest.io
 *
 * @link      https://craftquest.io
 * @copyright Copyright (c) 2020 Ryan Irelan
 */

namespace craftquest\samplecraftplugin\services;

use craftquest\samplecraftplugin\SampleCraftPlugin;

use Craft;
use craft\base\Component;

/**
 * SampleCraftPluginService Service
 *
 * All of your plugin’s business logic should go in services, including saving data,
 * retrieving data, etc. They provide APIs that your controllers, template variables,
 * and other plugins can interact with.
 *
 * https://craftcms.com/docs/plugins/services
 *
 * @author    Ryan Irelan
 * @package   SampleCraftPlugin
 * @since     1.0.0
 */
class SampleCraftPluginService extends Component
{
    // Public Methods
    // =========================================================================

    /**
     * This function can literally be anything you want, and you can have as many service
     * functions as you want
     *
     * From any other plugin file, call it like this:
     *
     *     SampleCraftPlugin::$plugin->sampleCraftPluginService->exampleService()
     *
     * @return mixed
     */
    public function exampleService()
    {
        $result = 'something';

        return $result;
    }
}
