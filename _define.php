<?php
/**
 * @brief onConstruction, a plugin for Dotclear 2
 *
 * @package Dotclear
 * @subpackage Plugins
 *
 * @author Nan'Art, inspired from Construction plugin, Osku and contributors
 *
 * @copyright Nan'Art
 * @copyright GPL-2.0 https://www.gnu.org/licenses/gpl-2.0.html
 */
/* onConstruction/_define.php */

if (!defined('DC_RC_PATH')) {return;}

$this->registerModule(
    "onConstruction",                            			// Name
    "Put temporary your blog in construction mode",  		// Description
    "Nan'Art, from Construction: Osku and contributors",    // Author
    '0.1',                                      			// Version
    [
        // 'requires'    => [['core', '2.15']],
        'permissions' => 'usage,contentadmin',  // Permissions
        'type'        => 'plugin',              // Type
        'settings'    => [                      // Settings
            'priority' => 2000,					// Settings
        ]
    ]
);