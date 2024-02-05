<?php
declare(strict_types=1);

namespace App\Controller\Component;

use Cake\Controller\Component;
use Cake\Controller\ComponentRegistry;
use Aws\S3\S3Client;  
use Aws\Exception\AwsException;

/**
 * S3 component
 */
class S3Component extends Component
{
    /**
     * Default configuration.
     *
     * @var array<string, mixed>
     */
    protected $_defaultConfig = [];
    protected $s3Client;

    // public function initialize()
    // {
    // $this->s3Client = new S3Client([
    //     'profile' => 'default',
    //     'region' => 'ap-northeast-1',
    //     'version' => '2006-03-01'
    // ]);

    // }
    /**
     * List your Amazon S3 buckets.
     *
     * This code expects that you have AWS credentials set up per:
     * https://docs.aws.amazon.com/sdk-for-php/v3/developer-guide/guide_credentials.html
     */
    function listingAllBuckets() : void
    {
        //Create a S3Client 
        $this->s3Client = new S3Client([
            'profile' => 'default',
            'region' => 'ap-northeast-1',
            'version' => '2006-03-01'
        ]);

        //Listing all S3 Bucket
        $buckets = $this->s3Client->listBuckets();
        foreach ($buckets['Buckets'] as $bucket) {
            echo $bucket['Name'] . "\n";
        }
    }

    function putObjectBuckets() : void
    {
        //Create a S3Client 
        $this->s3Client = new S3Client([
            'profile' => 'default',
            'region' => 'ap-northeast-1',
            'version' => '2006-03-01'
        ]);

        //Listing all S3 Bucket
        $result = $this->s3Client->putObject([
            'Bucket'     => 'myfirstbucketuser1',
            'Key'        => 'folder/cyclops_icon.png',
            'SourceFile' => 'img/cyclops_icon.png',
          ]);
    }


    

}
