<?php
/**
 * SimpleMDEAsset
 *
 *@package vendor.tangniyuqi.simplemde
 *@author tangming <tangniyuqi@163.com>
 *@copyright DNA <http://www.Noooya.com/>
 *@version 1.0.0
 *@since 2018-06-29 Create
 *@todo N/A
 */
namespace tangniyuqi\simplemde;

use yii\web\AssetBundle;

class SimpleMDEAsset extends AssetBundle
{
    /**
     * @inheritdoc
     */
    public $sourcePath = '@bower/easymde/dist';

    /**
     * @inheritdoc
     */
    public $js = [
        'easymde.min.js'
    ];

    /**
     * @inheritdoc
     */
    public $css = [
        'easymde.min.css'
    ];

    /**
     * @inheritdoc
     */
    public $depends = [
        'yii\web\JqueryAsset',
    ];
}
