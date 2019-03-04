<?php

use SilverStripe\Forms\CheckboxSetField;

class ArticlePage extends Page {

    private static $many_many = [
        'Categories' => ArticleCategory::class,
    ];

    public function getCMSFields()
    {
        $fields = parent::getCMSFields();
        //...
        $fields->addFieldToTab('Root.Categories', CheckboxSetField::create(
            'Categories',
            'Selected categories',
            $this->Parent()->Categories()->map('ID','Title')
        ));
        return $fields;
    }

    public function CategoriesList()
    {
        if($this->Categories()->exists()) {
            return implode(', ', $this->Categories()->column('Title'));
        }

        return null;
    }

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
}