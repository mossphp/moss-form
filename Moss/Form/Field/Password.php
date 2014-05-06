<?php
namespace Moss\Form\Field;

use Moss\Form\Field\Text;

/**
 * Password form field
 *
 * @package Moss Form
 * @author  Michal Wachowski <wachowski.michal@gmail.com>
 */
class Password extends Text
{

    /**
     * Renders field
     *
     * @return string
     */
    public function renderField()
    {
        return sprintf(
            '<input type="password" name="%s" value="%s" id="%s" %s/>',
            $this->name(),
            null,
            $this->identify(),
            $this
                ->attributes()
                ->toString(array('required' => $this->required() ? 'required' : null))
        );
    }
}