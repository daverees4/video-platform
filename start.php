<?php 

use Aws\S3\S3Client;

require 'vendor/autoload.php';

$config = require('config.php');

$s3 = S3Client::factory([
 'version' => 'latest',
  'region'  => 'eu-west-1',
  'credentials' => array(
    'key' => $awsapikey,
    'secret'  => $awsapisecret,
  )
]);

?>