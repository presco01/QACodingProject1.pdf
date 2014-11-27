QACodingProject1.pdf
====================
Here are listed the main steps that I did to write the test scripts:

OS: Windows 7 ; 
1. Install PHPUnit and prerequisites ; 
.NET Framework 4.5.1 ;
Microsoft Silverlight ; 
Mozilla Firefox 33.1.1 ; 
Microsoft Visual C++ 2010 x64 ; 
Microsoft Visual C++ 2010 Redistributable x64 ; 
Java SE Development Kit ; 
WampServer 2.5 ; 
JetBrains PhpStorm ; 
 PHPUnit via PEAR ; 
use : selenium-server-standalone-2.44.0.jar ; 

REQUIREMENTS
You are required to implement a Selenium script (preferably using PHPUnit) that:
1. Logs in with a test user 
2. Fills out all the requirements on the Contact us page and click submit the form. 
3. Verifies that you see a “Thanks you” overlay after submitting the form.

→ reference file: ShipwireContactUS.php    /     
→ stored functions: Elements.php

INSTRUCTIONS
1. Go to http://beta.shipwire.com/contact
    /   use: function testLoadPage()

2.  Click on the “LOG IN” link and fill in the following information for username: 
shiptest@mailinator.com / password: test1234 and click the “Sign in” button
  /   use : function testLogIn()

3.  Once logged in, click on the “Contact us” link located on the left navigation pane
4. On the Contact page, fill out all required information and click the “Get in touch” button
    /    use: function testFillContactUs()


