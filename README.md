yii2-simplemde
==============================
A simple, beautiful, and embeddable JavaScript Markdown editor. Delightful editing for beginners and experts alike. Features built-in autosaving and spell checking.（FontAwesome v5 compatibility）

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist tangniyuqi/yii2-simplemde "*"
```

or add

```
"tangniyuqi/yii2-simplemde": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by :

View:

```php
<?php $form = ActiveForm::begin(); ?>

<?= $form->field($model, 'content')->widget('tangniyuqi\simplemde\SimpleMDE', [
    'mdeOptions' => [
        //'autofocus' => true,
        // see https://github.com/NextStepWebs/simplemde-markdown-editor
    ]
])->label(false) ?>

<div class="form-group">
    <?= Html::submitButton('Create', ['class' => 'btn btn-primary']) ?>
</div>

<?php ActiveForm::end(); ?>
```
Further Information
-------------------
Please, check the [simplemde-markdown-editor](https://github.com/NextStepWebs/simplemde-markdown-editor/) documentation for further information about its configuration options.

Demo
-------------------
See [https://simplemde.com/](https://simplemde.com/)
