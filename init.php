<?php

use WonderWp\Component\Logging\DirectOutputLogger;
use WonderWp\Component\DependencyInjection\Container;

add_action('wonderwp.loader.load', 'wwp_register_logging_definitions_towards_container', 10, 2);

function wwp_register_logging_definitions_towards_container(Container $container)
{
    //Logs
    $container['wwp.log.log'] = function () {
        return new DirectOutputLogger();
    };
}
