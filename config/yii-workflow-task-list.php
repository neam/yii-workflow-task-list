<?php

$config['components']['workflowUi'] = array(
    'class' => 'vendor.neam.yii-workflow-ui.components.WorkflowUi',
);

$config['modules']['p3media'] = array_merge_recursive($config['modules']['p3media'], array(
    'params' => array(
        'presets' => array(
            'dashboard-item-task-thumbnail' => array(
                'name' => 'Dashboard Item Task Thumbnail',
                'commands' => array(
                    'resize' => array(210, 120, 7), // Image::AUTO
                    'quality' => '85',
                ),
                'type' => 'jpg',
            ),
        ),
    ),
));
