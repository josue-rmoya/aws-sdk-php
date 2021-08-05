<?php 

namespace App;

use Aws\S3\S3Client;

use Aws\Exception\AwsException;

class AwsServiceOperation
{
    
    var $s3Client;
    var $result;

     function createClient($profile,$region,$version)
    {
        $sharedConfig = compact($profile,$region,$version);
        $sdk = new Aws\Sdk($sharedConfig); 
        $this-> s3Client = $sdk->createS3();
    }

    public function put_service_op($bucket,$key,$body)
    {
        $array = compact($bucket,$key,$body);
        $this -> result = $this -> s3Client -> putObject($array);
    }

    public function download_service_op($bucket,$key)
    {
        $array = compact($bucket,$key);
        $this -> result = $s3Client->getObject($array); 
    }

    public function get_result_op()
    {
        return $this -> result['body'];
    }


}