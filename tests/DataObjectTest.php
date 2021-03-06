
<?php

class DataObjectTest extends PHPUnit\Framework\TestCase
{

  /**
   * @covers DataObject::__construct
   * @uses DataObject
   * @expectedException \Exception
   * @expectedExceptionMessage Invalid constructor parameter given to DataObject.
   */
  public function testConstructorNoArguments()
  {
    $obj = new DataObject(null, null);
    $this->assertNotNull($obj);
  }

}
