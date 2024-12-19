<?php return array(
    'root' => array(
        'name' => 'my/blog',
        'pretty_version' => 'dev-main',
        'version' => 'dev-main',
        'reference' => 'b41d94c68117d2c4646ffcfb6e7f2e77734cb82c',
        'type' => 'project',
        'install_path' => __DIR__ . '/../../',
        'aliases' => array(),
        'dev' => true,
    ),
    'versions' => array(
        'my/blog' => array(
            'pretty_version' => 'dev-main',
            'version' => 'dev-main',
            'reference' => 'b41d94c68117d2c4646ffcfb6e7f2e77734cb82c',
            'type' => 'project',
            'install_path' => __DIR__ . '/../../',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'pecee/simple-router' => array(
            'pretty_version' => 'dev-master',
            'version' => 'dev-master',
            'reference' => 'b98d40b84b6e862bf250b179c0229efb7344a7bb',
            'type' => 'library',
            'install_path' => __DIR__ . '/../pecee/simple-router',
            'aliases' => array(
                0 => '9999999-dev',
            ),
            'dev_requirement' => false,
        ),
    ),
);
