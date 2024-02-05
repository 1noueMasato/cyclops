<?php
declare(strict_types=1);

namespace App\Test\TestCase\Controller\Component;

use App\Controller\Component\S3Component;
use Cake\Controller\ComponentRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\Component\S3Component Test Case
 */
class S3ComponentTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Controller\Component\S3Component
     */
    protected $S3;

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $registry = new ComponentRegistry();
        $this->S3 = new S3Component($registry);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->S3);

        parent::tearDown();
    }
}
