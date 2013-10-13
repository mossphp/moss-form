<?php
namespace moss\form\field;

use moss\form\AbstractFieldTest;

class AnchorTest extends AbstractFieldTest
{

    public function setUp()
    {
        $this->field = new Anchor('name', 'value', array('class' => 'foo'));
    }

    public function tearDown()
    {
    }

    /**
     * @dataProvider nameProvider
     */
    public function testName($actual, $expected)
    {
        $this->assertEquals($expected, $this->field->name($actual));
    }

    public function nameProvider()
    {
        return array(
            array('foo', 'foo'),
            array('Bar', 'Bar'),
            array('yada yada', 'yada yada'),
            array('do[ku]', 'do[ku]')
        );
    }

    public function testRenderLabel()
    {
        $this->assertNull($this->field->renderLabel());
    }

    public function testRenderField()
    {
        $this->assertEquals('<a href="value" id="name" class="foo button">name</a>', $this->field->renderField());
    }

    public function testRenderError()
    {
        $this->assertNull($this->field->renderError());
    }

    public function testRender()
    {
        $this->assertEquals('<a href="value" id="name" class="foo button">name</a>', $this->field->render());
    }

    public function testToString()
    {
        $this->assertEquals('<a href="value" id="name" class="foo button">name</a>', $this->field->__toString());
    }
}