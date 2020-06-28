Report Generator
================
Report Generator

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist budipratama/yii2-repgen "*"
```

or add

```
"budipratama/yii2-repgen": "*"
```

to the require section of your `composer.json` file.



Basic Configuration
-------------------

Once the extension is installed, simply modify your application configuration as follows:

```php
return [
    'modules' => [
        'report-generator' => [
            'class' => '\budipratama\repgen\Module',
            ...
        ],
        ...
    ],
    
];


```
You can then access the following URL:

```
http://localhost/path/to/index.php?r=report-generator
