<?php

namespace common\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class LayuiAsset extends AssetBundle
{
    public $sourcePath = '@common/assets/layui';
    public $css = [
        'layui.css'
    ];
    public $js = [
        'layui.all.js',
    ];
    public $depends = [
    ];
}
