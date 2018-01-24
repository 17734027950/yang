<?php
require_once './../vendor/autoload.php'; // composer autoload.php

$h = new Sirius\Html\Builder;

// echo $h->registerTag('user-login-form', 'a');

echo $h->make('user-login-form', ['_form_values' => 'post']);


// start writting HTML
echo $h->make('paragraph', ['href' => 'http://www.bing.com'], 'Go to Bing!');

// or use the power of magic methods
echo $h->h1(['class' => 'main'], ['Main title', $h->em(null, '!!!')]);

// the library is smart enough to handle special requests
echo $h->someComponent(['class' => 'web-component'], 'content of the component');
// will render <some-component class="web-component">content of the component</some-component>
// 
// 

// $h->registerTag('my-component', '\\MyProject\\Html\\MyComponent');
// $h->registerTag('my-component', $someCallable);

// echo $h->myComponent(null, 'My component content');
// 

echo $h->make('blog-article', ['_entry' => 'entry']);

// which would be equivalent of 

echo $h->make(
    'article', 
    [
        ['heading', 'a'],
        ['section', 'b'],
        ['footer', 'Written by YangChi'],
        ['aside', [
            ['h3', 'Similar articles'],
            ['ul', [
                // ... you can guess what happens here 
            ]]
        ]]
    ],
    ['class' => 'post post-123 post-story'] 
);


echo $h->radio(["name" => "true_or_false", "value" => 'true'], 'false');
echo $h->label(null, '男');
echo $h->radio(["name" => "true_or_false", "value" => 'false'], 'false');
echo $h->label(null, '女');

$h->select(["name" => "country", "_options" => "a"], 'b');

$h->img(["src" => ""]);


echo $h->make(
    /* name of the tag */
    'article',

    /* properties of the tag */
    ['class' => 'post'],

    /* content of the tag (a string or a list of elements/strings) */
    [
        $h->make('hr/'),

        'Random text node',

        /* you can construct tags using the magic of __call() */
        $h->header([
            $h->h3('Post title')
        ]),
        $h->aside('Aside content'),
    ]
);

echo $h->input([
    'type' => 'email',
    'class' => 'required',
    'required' => 'required',
    'placeholder' => 'myemail@domain.com',
    'maxlength' => '12'
], 'myemail@domain.com');

echo $h->select([
    '_first_option' => 'Select from list',
    '_options' => ['Romania', 'USA', 'Zimbawe']
], 'Romania');

?>