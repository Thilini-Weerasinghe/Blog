<?php

Class ContactUsController extends PageController {

    public function ContactForm()
    {
        $myForm = Form::create(
            $controller,
            'ContactForm',
            FieldList::create(
                TextField::create('YourName','Your name'),
                TextareaField::create('YourComments','Your comments')
            ),
            FieldList::create(
                FormAction::create('sendContactForm','Submit')
            ),
            RequiredFields::create('YourName','YourComments')
        );

        return $myForm;
    }
}
