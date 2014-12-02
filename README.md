welcomePage Demo
===========

This is a welcome page demo for HandiHopd (which is under [HandiHealth CIC](handihealth.org)).

## Conponents

#### Stormpath
It is using [StormPath PHP SDK](https://github.com/stormpath/stormpath-sdk-php) to hold the accounts data. 

#### Google recaptcha
Recapthca is held by [Google](http://www.google.com/recaptcha/intro/). It is using Google 
recaptcha PHP plugin on server-side.

#### validator 
Register webpage is holding a form with some inputs, the validator is using [bootstrapvalidator](http://bootstrapvalidator.com/validators/).

#### Notification email 
Verification and password reset emails are supported by StromPath. [sendgrid](https://sendgrid.com/) is an extra service to send notification emails to specific accounts. 

#### View on openshift.com : 
	
	http://welcomev1-hopdev.rhcloud.com/  

