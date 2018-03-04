<?php

// ansible-playbook /Users/praveen/Desktop/code/code/ansible/storage/scripts/Admin/hello-world-gist-c4ca4238a0b923820dcc509a6f75849b/hello_world.yml  --inventory-file=/Users/praveen/Desktop/code/code/ansible/storage/servers/eccbc87e4b5ce2fe28308fd9f2a7baf3.yml

require_once 'vendor/autoload.php';

$phpArray = unserialize('a:1:{i:0;a:5:{s:4:"name";s:12:"Hello World!";s:5:"hosts";s:9:"127.0.0.1";s:5:"tasks";a:1:{i:0;a:2:{s:4:"name";s:12:"Hello World!";s:5:"shell";s:28:"echo "Hi! Tower is working."";}}s:12:"gather_facts";s:3:"yes";s:10:"vars_files";a:1:{i:0;s:93:"/Users/praveen/Desktop/code/code/ansible/storage/servers/eccbc87e4b5ce2fe28308fd9f2a7baf3.yml";}}}');

dump(spyc_dump($phpArray));

