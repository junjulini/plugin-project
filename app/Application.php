<?php

/*
 * This file is part of the {APP-NAME}.
 *
 * (c) {APP-AUTHOR}
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace {APP-CLASS};

use ZimbruCode\AppKernel;

/**
 * Class : Application
 *
 * @author  {APP-AUTHOR}
 * @package {APP-NAME}
 * @since   {APP-NAME} {APP-VERSION}
 */
class Application extends AppKernel
{
    /**
     * Application setup
     * @return null
     * @since {APP-VERSION}
     */
    protected function setup()
    {
        $this->addAction('wp_enqueue_scripts', '__action_enqueue');

        register_activation_hook(self::service('app-locator')->getRootFilePath(),   [$this, '__hook_activation']);
        register_deactivation_hook(self::service('app-locator')->getRootFilePath(), [$this, '__hook_deactivation']);
    }

    /**
     * Action : Enqueue styles & scripts
     * @return none
     * @since {APP-VERSION}
     */
    public function __action_enqueue()
    {
        $this->asset('style.scss', 'script.js');
    }

    /**
     * Hook : After activation
     * @return none
     * @since {APP-VERSION}
     */
    public function __hook_activation()
    {
        # code...
    }

    /**
     * Hook : After deactivation
     * @return none
     * @since {APP-VERSION}
     */
    public function __hook_deactivation()
    {
        # code...
    }
}
