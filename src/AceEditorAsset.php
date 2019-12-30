<?php

namespace toir427\aceeditor;

use yii\web\AssetBundle;

/**
 * Class AceEditorAsset
 * @package toir427\aceeditor
 * @author  Tuychiyev Toir <toir427@gmail.com>
 */
class AceEditorAsset extends AssetBundle
{
    /**
     * @inheritdoc
     */
    public $sourcePath = '@bower/ace-builds/src-min-noconflict';

    /**
     * @inheritdoc
     */
    public $js = [
        'ace.js'
    ];

} 