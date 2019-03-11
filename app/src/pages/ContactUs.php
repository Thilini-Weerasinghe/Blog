<?php

Class ContactUs extends Page {
    public function CommentForm()
    {
        //...
        FieldList::create(
            TextField::create('Name','')
                ->setAttribute('placeholder','Name*'),
            EmailField::create('Email','')
                ->setAttribute('placeholder','Email*'),
            TextareaField::create('Comment','')
                ->setAttribute('placeholder','Comment*')
        );
    }

    private static $has_many = [
        'Comments' => ArticleComment::class,
    ];

    private static $allowed_actions = [
        'CommentForm',
    ];
}