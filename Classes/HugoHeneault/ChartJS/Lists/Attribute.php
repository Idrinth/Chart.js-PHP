<?php

namespace HugoHeneault\ChartJS\Lists;

class Attribute extends BaseArrayAccess {

    /**
     *
     * @var \HugoHeneault\ChartJS\Models\Attribute[]
     */
    protected $list = array ();

    /**
     *
     * @return string
     */
    public function __toString () {
        $attributes = '';
        foreach ( $this->list as $attribute ) {
            $attributes .= ' ' . $attribute->__toString ();
        }
        return $attributes;
    }

    /**
     *
     * @param string $offset
     * @return \HugoHeneault\ChartJS\Models\Attribute
     */
    public function offsetGet ( $offset ) {
        return parent::offsetGet ( $offset );
    }

    /**
     *
     * @param \HugoHeneault\ChartJS\Models\Attribute $attribute
     */
    protected function addNew ( $attribute ) {
        $this->offsetSet ( $attribute->getName (), $attribute );
    }

    /**
     *
     * @return string
     */
    protected function getAllowedObjectType () {
        return '\HugoHeneault\ChartJS\Models\Attribute';
    }

}
