<?php

use PHPUnit_Extensions_Selenium2TestCase;
use PHPUnit_Extensions_SeleniumTestCase;

class Elements extends PHPUnit_Extensions_Selenium2TestCase {

    public function logIn()
    {
        // selenium will not keep the focus on the LOG-IN drop-down and it will close before sending the user and email
        $this->url('https://beta.shipwire.com/sign-in');
        $this->byCssSelector('#signin_username')->value('shiptest@mailinator.com');
        $this->byCssSelector('#signin_password')->value('test1234');
        $this->byClassName('cta-container')->click();

    }

    public function fillContactUs()
    {
        $this->byLinkText('Contact us')->click();
        $windows = $this->windowHandles();
        $this->window($windows[1]);
        $this->byCssSelector('#name')->value('Mirey Tester');
        $this->byCssSelector('#email')->value('shiptest@mailinator.com');
        $this->byCssSelector('#phone')->value('555-555-555');
        $this->byCssSelector('#company')->value('SV');
        $this->byCssSelector('#question')->value('Subject of the question?');
        $this->byCssSelector('button.cta-button.contact-button')->click();
        $x =1;
        while(!$this->byCssSelector('#contact-thank-you')->displayed() || $x < 5){
            sleep(1);
            $x++;
        }
        $this->assertEquals('Thank you for contacting us', $this->byCssSelector('#contact-thank-you h4')->text());
    }

}
