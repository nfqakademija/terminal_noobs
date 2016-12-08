<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('sign in');

$I->amOnPage('/login');
$I->fillField('username', 'simser');
$I->fillField('password', 'demo');
$I->click('Prisijungti');