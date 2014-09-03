<?php

/////////////////////////////////////////////////////////////////////////////
// General information
/////////////////////////////////////////////////////////////////////////////

$app['basename'] = 'mdns';
$app['version'] = '1.6.5';
$app['release'] = '1';
$app['vendor'] = 'ClearFoundation';
$app['packager'] = 'ClearCenter';
$app['license'] = 'GPLv3';
$app['license_core'] = 'LGPLv3';
$app['description'] = lang('mdns_app_description');

/////////////////////////////////////////////////////////////////////////////
// App name and categories
/////////////////////////////////////////////////////////////////////////////

$app['name'] = lang('mdns_app_name');
$app['category'] = lang('base_category_network');
$app['subcategory'] = lang('base_subcategory_infrastructure');

/////////////////////////////////////////////////////////////////////////////
// Packaging
/////////////////////////////////////////////////////////////////////////////

// TODO: push software-updates and dashboard to comps
$app['requires'] = array(
    'app-network',
);

$app['core_requires'] = array(
    'avahi >= 0.6.25',
);

$app['core_file_manifest'] = array(
    'mdns.php'=> array('target' => '/var/clearos/base/daemon/mdns.php'),
);

