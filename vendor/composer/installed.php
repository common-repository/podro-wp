<?php return array(
    'root' => array(
        'name' => 'khorshid/wp_podro',
        'pretty_version' => 'dev-master',
        'version' => 'dev-master',
        'reference' => 'b270fc14fd6ea7d9f49dd15976f707eb819a07c0',
        'type' => 'wordpress-plugin',
        'install_path' => __DIR__ . '/../../',
        'aliases' => array(),
        'dev' => true,
    ),
    'versions' => array(
        'composer/installers' => array(
            'pretty_version' => 'v1.12.0',
            'version' => '1.12.0.0',
            'reference' => 'd20a64ed3c94748397ff5973488761b22f6d3f19',
            'type' => 'composer-plugin',
            'install_path' => __DIR__ . '/./installers',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'khorshid/wp-encrypt' => array(
            'pretty_version' => 'v1.0.1',
            'version' => '1.0.1.0',
            'reference' => '67cc7ded5f0319845a917ff7dcaa36349512cac8',
            'type' => 'library',
            'install_path' => __DIR__ . '/../khorshid/wp-encrypt',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'khorshid/wp_podro' => array(
            'pretty_version' => 'dev-master',
            'version' => 'dev-master',
            'reference' => 'b270fc14fd6ea7d9f49dd15976f707eb819a07c0',
            'type' => 'wordpress-plugin',
            'install_path' => __DIR__ . '/../../',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'roundcube/plugin-installer' => array(
            'dev_requirement' => false,
            'replaced' => array(
                0 => '*',
            ),
        ),
        'shama/baton' => array(
            'dev_requirement' => false,
            'replaced' => array(
                0 => '*',
            ),
        ),
    ),
);
