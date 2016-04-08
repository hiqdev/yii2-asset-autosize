<?php

/*
 * Yii2 asset for bower autosize
 *
 * @link      https://github.com/hiqdev/yii2-asset-autosize
 * @package   yii2-asset-autosize
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2015-2016, HiQDev (http://hiqdev.com/)
 */

namespace hiqdev\assets\autosize;

class AutosizeAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@bower/autosize';

    public $js = [
        'dist/autosize.min.js',
    ];
}
