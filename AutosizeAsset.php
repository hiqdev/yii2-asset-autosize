<?php
/**
 * @link      http://hiqdev.com/yii2-asset-autosize
 * @license   BSD 3-clause
 * @copyright Copyright (c) 2015 HiQDev
 */

namespace hiqdev\assets\autosize;

class AutosizeAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@bower/autosize';

    public $js = [
        'dist/autosize.min.js',
    ];

}
