<?php
  include('secrets.php');
  
  return [
    's3'=> [
      'key' =>$awsapikey,
      'secret'=>$awsapisecret,
      'bucket' =>'davetest.transcoder.in'
    ]
  ];

?>