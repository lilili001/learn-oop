<?php
use Aststore\Person;
use Aststore\Company;
use Aststore\Staff;

$staff = new Staff();
$com = new  Company($staff);
$alice = new Person('alice');
$com->hire($alice);
var_dump($com);
