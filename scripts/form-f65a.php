<?php

require_once('FormProcessor.php');

$form = array(
    'subject' => 'New Form Submission',
    'email_message' => 'You have a new form submission',
    'success_redirect' => '',
    'sendIpAddress' => true,
    'email' => array(
    'from' => '',
    'to' => ''
    ),
    'fields' => array(
    'name' => array(
    'order' => 1,
    'type' => 'string',
    'label' => 'Имя',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Имя\' is required.'
    )
    ),
    'phone' => array(
    'order' => 2,
    'type' => 'tel',
    'label' => 'Телефон',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Телефон\' is required.'
    )
    ),
    'address' => array(
    'order' => 3,
    'type' => 'string',
    'label' => 'Город',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Город\' is required.'
    )
    ),
    'address-1' => array(
    'order' => 4,
    'type' => 'string',
    'label' => 'Улица',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Улица\' is required.'
    )
    ),
    'address-2' => array(
    'order' => 5,
    'type' => 'string',
    'label' => 'Дом',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Дом\' is required.'
    )
    ),
    'select' => array(
    'order' => 6,
    'type' => 'string',
    'label' => 'select',
    'required' => false,
    'errors' => array(
    'required' => 'Field \'select\' is required.'
    )
    ),
    )
    );

    $processor = new FormProcessor('');
    $processor->process($form);

    ?>