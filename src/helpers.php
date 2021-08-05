<?php 

if ( !function_exists('connect_aws_sns') ) {
    function connect_aws_sns()
    {
        return App\Sns::connect();
    }
}
