<?php
    
    include 'HtmlFormMaker.php';


    $form = new HtmlFormMaker();

    echo $form->form_open('POST');
    echo $form->form_label('Full Name');
    echo $form->form_input('text', 'name', 'Please Type your name');

    echo '<br/>';

    echo $form->form_label('Email');
    echo $form->form_input('email', 'email', 'Please Type your valid email');


    echo '<br/>';

    echo $form->form_label('Password');
    echo $form->form_input('password', 'password', 'Please write your password');



    echo '<br/>';

    echo $form->form_label('Address');
    echo $form->form_textarea('address', 'Please write your address');



    echo '<br/>';
    echo $form->form_button('submit', 'POST YOUR INFORMATION');


    echo $form->form_close();

