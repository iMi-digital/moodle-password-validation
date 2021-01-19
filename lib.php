<?php

/**
 * @param MoodleQuickForm $mform
 * @param $CFG
 */
function local_password_validation_extend_signup_form($mform) {

    $passwordAgainField = $mform->createElement('password');
    $passwordAgainField->setName('password_validation');
    $passwordAgainField->setLabel('Password (again)');

    $mform->insertElementBefore(
        $passwordAgainField,
        'supplyinfo'
    );

    $mform->addRule(array('password_validation', 'password'), get_string('passwords_must_match', 'local_password_validation'), 'compare', 'eq', 'client');
    $mform->addRule('password_validation', null, 'required', null, 'client');

}
