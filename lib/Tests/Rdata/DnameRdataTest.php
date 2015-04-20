<?php
/*
 * This file is part of Badcow DNS Library.
 *
 * (c) Samuel Williams <sam@badcow.co>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Badcow\DNS\Test\Rdata;

use Badcow\DNS\Rdata\DnameRdata;

class DnameRdataTest extends \PHPUnit_Framework_TestCase
{
    public function testSetTarget()
    {
        $target = 'foo.example.com.';
        $dname = new DnameRdata;
        $dname->setTarget($target);

        $this->assertEquals($target, $dname->getTarget());
    }

    /**
     * @expectedException \Badcow\DNS\Rdata\RdataException
     */
    public function testSetTargetException()
    {
        $target = 'foo.example.com';
        $dname = new DnameRdata;
        $dname->setTarget($target);
    }

    public function testOutput()
    {
        $target = 'foo.example.com.';
        $dname = new DnameRdata;
        $dname->setTarget($target);

        $this->assertEquals($target, $dname->output());
    }
}