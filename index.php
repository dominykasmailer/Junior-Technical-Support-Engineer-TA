<?php

use MailerLite\Group;

include "Group.php";
include "Subscriber.php";
include "SubscriberField.php";

/**
 * Task 1
 *
 * 1. Allow only unique subscriber emails in a group
 * 2. Throw an exception if an email is already used
 * 3. Catch the exception and display an error message
 */

$uniqueEmailGroup = new Group('Unique subscribers');

// Code

/**
 * Task 2
 *
 * 1. Add 100 random subscribers to a group with random type
 * 2. Display the number of subscribers by each type in the group
 */

$hundredRandom = new Group('100 random subscribers');

// Code

/**
 * Task 3
 *
 * 1. Create a subscriber
 * 2. Add 3 custom fields to subscriber
 * 3. Display subscriber information
 * 4. Display subscriber's fields
 */
 
$subscriber = new \MailerLite\Subscriber('subscriber@mailerlite.com');

// Code
