<?php

use Youp\Users\Person;
use Youp\Business;
use Youp\Staff;

$youp = new Person('Youp Koopmans');

$staff = new Staff([$youp]);

$business = new Business($staff);

$business->hire(new Person('Jane Doe'));

echo "<pre>";

var_dump($business->getStaffMembers());