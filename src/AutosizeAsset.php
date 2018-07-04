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

    /**
     * @param View $view
     * @param string $inputSelector
     * @return static
     */
    public static function activate($view, string $inputSelector = '.autosize'): AutosizeAsset
    {
        $bundle = self::register($view);
        $view->registerJs("(function() { setTimeout(function() { autosize($('{$inputSelector}')) }, 200); })();");

        return $bundle;
    }
}
