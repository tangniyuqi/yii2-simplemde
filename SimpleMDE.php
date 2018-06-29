<?php
/**
 * SimpleMDE
 *
 *@package vendor.tangniyuqi.simplemde
 *@author tangming <tangniyuqi@163.com>
 *@copyright DNA <http://www.Noooya.com/>
 *@version 1.0.0
 *@since 2018-06-29 Create
 *@todo N/A
 */
namespace tangniyuqi\simplemde;

use yii\helpers\Html;
use yii\helpers\Inflector;
use yii\helpers\Json;
use yii\web\JsExpression;
use yii\widgets\InputWidget;

class SimpleMDE extends InputWidget
{
    /**
     * Markdown options you want to override
     * See https://github.com/NextStepWebs/simplemde-markdown-editor
     * @var array
     */
    public $mdeOptions = [];
    /**
     * ID of Textarea where editor will be placed
     * @var string
     */
    protected $id;

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();

        if (empty($this->id)) {
            $this->id = $this->hasModel() ? Html::getInputId($this->model, $this->attribute) : $this->getId();
        }
        if (empty($this->mdeOptions['element'])) {
            $this->mdeOptions['element'] = new JsExpression('$("#' . $this->id . '")[0]');
        }
    }

    /**
     * @inheritdoc
     */
    public function run()
    {
        SimpleMDEAsset::register($this->view);
        $this->registerScripts();
        $this->options['id'] = $this->id;

        if ($this->hasModel()) {
            echo Html::activeTextArea($this->model, $this->attribute, $this->options);
        } else {
            echo Html::textArea($this->name, $this->value, $this->options);
        }
    }

    /**
     * Registers simplemde markdown assets
     */
    public function registerScripts()
    {
        $jsonOptions = Json::encode($this->mdeOptions);
        $varName = Inflector::classify('editor' . $this->id);
        $script = "var {$varName} = new EasyMDE(" . $jsonOptions . ");";
        $this->view->registerJs($script);
    }
}
