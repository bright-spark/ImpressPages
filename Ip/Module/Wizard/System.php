<?php
/**
 * @package ImpressPages
 *
 *
 */

namespace Ip\Module\Wizard;


class System{

    function init(){

        if (\Ip\ServiceLocator::getContent()->isManagementState()) {
            // loading required Javascript libraries
            ipAddJavascript(\Ip\Config::coreModuleUrl('Assets/assets/js/jquery-tools/jquery.tools.ui.tooltip.js'),2);
            ipAddJavascript(\Ip\Config::coreModuleUrl('Assets/assets/js/jquery-tools/jquery.tools.ui.overlay.js'),2);
            ipAddJavascript(\Ip\Config::coreModuleUrl('Assets/assets/js/jquery-tools/jquery.tools.toolbox.expose.js'),2);
            ipAddJavascript(\Ip\Config::coreModuleUrl('Wizard/public/jquery.simulate.js'),2);
            // loading module's elements
            ipAddCss(\Ip\Config::coreModuleUrl('Wizard/public/wizard.css'),2);
            ipAddJavascript(\Ip\Config::coreModuleUrl('Wizard/public/wizard.js'),2);
        }
    }
}
