Ace Editor Widget For Yii2
=======================

About
-----
It is [Ace Editor](https://ace.c9.io/#nav=about) integration for Yii2 framework.

Demo
----
Ace Editor demo can be found [here](https://ace.c9.io/#ace_editor_demo=&nav=about)

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
composer require toir427/yii2-aceeditor "dev-master"
```

or add

```
"toir427/yii2-aceeditor": "*"
```

to the require section of your `composer.json` file.

Usage
-----------------------

Using model

```php
\toir427\aceeditor\AceEditor::widget([
	// You can either use it for model attribute
	'model' => $my_model,
	'attribute' => 'my_field',

	// or just for input field
	'name' => 'my_input_name',

    'mode'=>'html', // programing language mode. Default "html"
    'theme'=>'github', // editor theme. Default "github"
    'readOnly'=>'true' // Read-only mode on/off = true/false. Default "false"
]);
```

With active field

```php
$form->field($model, 'field')->widget(
        \toir427\aceeditor\AceEditor::className(),
        [
            'mode'=>'html', // programing language mode. Default "html"
            'theme'=>'github', // editor theme. Default "github"
            'readOnly'=>'true' // Read-only mode on/off = true/false. Default "false"
        ]
    )
```
Lists of all available modes and themes see [here](https://github.com/ajaxorg/ace)
