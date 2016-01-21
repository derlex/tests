<?php
$I = new AcceptanceTester($scenario);
$I->wantTo('log in as regular user');
$I->amOnPage('/login');
$I->fillField('Email','111');
$I->fillField('Password','111');
$I->click('Sign in');
$I->see('A valid email address is required.');
$I->fillField('Email','admin@unionimpact.com');
$I->fillField('Password','12wsx');
$I->click('Sign in');
$I->see('Incorrect email or password.');
$I->fillField('Email','admin@unionimpact.com');
$I->fillField('Password','1qaz2wsx');
$I->click('Sign in');
$I->see('Successfully logged in.');
$I->click('×');
$I->see('Members');
$I->see('Payments');
$I->see('Account');
$I->click('Account');
$I->see('Administrator');
$I->see('Profile');
$I->see('Logout');
?>
