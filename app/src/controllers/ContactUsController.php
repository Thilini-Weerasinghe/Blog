<?php


use SilverStripe\Forms\Form;
use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\TextField;
use SilverStripe\Forms\EmailField;
use SilverStripe\Forms\TextareaField;
use SilverStripe\Forms\FormAction;
use SilverStripe\Forms\RequiredFields;

Class ContactUsController extends PageController {

    public function CommentForm()
    {
        $form = Form::create(
            $this,
            __FUNCTION__,
            FieldList::create(
                TextField::create('Name','')
                    ->setAttribute('placeholder','Name*')
                    ->addExtraClass('form-control'),
                EmailField::create('Email','')
                    ->setAttribute('placeholder','Email*')
                    ->addExtraClass('form-control'),
                TextareaField::create('Comment','')
                    ->setAttribute('placeholder','Comment*')
                    ->addExtraClass('form-control')
            ),
            FieldList::create(
                FormAction::create('handleComment','Post Comment')
                    ->setUseButtonTag(true)
                    ->addExtraClass('btn btn-default-color btn-lg')
            ),
            RequiredFields::create('Name','Email','Comment')
        );

        $form->addExtraClass('form-style');

        return $form;
    }

    public function handleComment($data, $form)
    {
        $comment = ArticleComment::create();
        $comment->Name = $data['Name'];
        $comment->Email = $data['Email'];
        $comment->Comment = $data['Comment'];
        $comment->ArticlePageID = $this->ID;
        $comment->write();

        $form->sessionMessage('Thanks for your comment!','good');

        return $this->redirectBack();
    }

}
