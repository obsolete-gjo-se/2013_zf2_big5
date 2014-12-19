<?php
namespace Jbig3Base\Base\Model\Form\Element\Text;

use Zend\Form\Element\Text as ZendText;

class Text extends ZendText
{

    protected $filters = array();
    protected $validators = array();

    public function setFilters($filters)
    {
        $this->filters = $filters;
        return $this;
    }

    public function getFilters()
    {
        return $this->filters;
    }

    public function setValidators($validators)
    {
        $this->validators = $validators;
        return $this;
    }

    public function getValidators()
    {
        return $this->validators;
    }
}
