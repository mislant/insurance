<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\src\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    /** {@inheritDoc } */
    public $basePath = '@webroot';
    /** {@inheritDoc } */
    public $baseUrl = '@web';
    /** {@inheritDoc } */
    public $css = [
        'css/site.css',
    ];
    /** {@inheritDoc } */
    public $js = [
    ];
    /** {@inheritDoc } */
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapAsset',
    ];
}
