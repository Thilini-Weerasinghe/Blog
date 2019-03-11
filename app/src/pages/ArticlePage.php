<?php

use SilverStripe\Forms\CheckboxSetField;
use SilverStripe\Assets\Image;
use SilverStripe\Assets\File;
use SilverStripe\AssetAdmin\Forms\UploadField;

class ArticlePage extends Page {

//    private static $can_be_root = false;

    private static $db = [
        'Date' => 'Date',
        'Teaser' => 'Text',
        'Author' => 'Varchar',
        ];

    private static $many_many = [
        'Categories' => ArticleCategory::class,
    ];



    public function getCMSFields()
    {
        $fields = parent::getCMSFields();
        $fields->addFieldToTab('Root.Attachments', UploadField::create('Photo'));
        $fields->addFieldToTab('Root.Attachments', $brochure = UploadField::create(
            'Brochure',
            'Travel brochure, optional (PDF only)'
        ));

        $brochure->getValidator()->setAllowedExtensions(['pdf']);


        //$fields->addFieldToTab('Root.Main', DateField::create('Date','Date of article'), 'Content');
       // $fields->addFieldToTab('Root.Main', TextareaField::create('Teaser')
            //->setDescription('This is the summary that appears on the article list page.'),
//            'Content'
//        );
        //$fields->addFieldToTab('Root.Main', TextField::create('Author','Author of article'),'Content');

        $fields->addFieldToTab('Root.Categories', CheckboxSetField::create(
            'Categories',
            'Selected categories',
            $this->Parent()->Categories()->map('ID','Title')
        ));
        return $fields;
    }

    private static $has_one = [
        'Photo' => Image::class,
        'Brochure' => File::class
    ];


    public function CategoriesList()
    {
        if($this->Categories()->exists()) {
            return implode(', ', $this->Categories()->column('Title'));
        }

        return null;
    }

//    public function CommentForm()
//{
//
//    FieldList::create(
//        TextField::create('Name','')
//            ->setAttribute('placeholder','Name*'),
//        EmailField::create('Email','')
//            ->setAttribute('placeholder','Email*'),
//        TextareaField::create('Comment','')
//            ->setAttribute('placeholder','Comment*')
//    );
//}

    private static $has_many = [
        'Comments' => ArticleComment::class,
    ];

    private static $allowed_actions = [
        'CommentForm',
    ];

}