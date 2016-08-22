<?php

namespace HugoHeneault\ChartJS\Models;

class Attribute {

    /**
     *
     * @var string
     */
    private $name;

    /**
     *
     * @var string
     */
    private $value;

    /**
     *
     * @param string $name
     * @param string $value
     */
    public function __construct ( $name, $value = 'use $name' ) {
        $this->name = $name;
        $this->value = str_replace ( '"', '&quot;', $value );
    }

    /**
     *
     * @return string
     */
    public function __toString () {
        if ( $this->value === 'use $name' ) {
            return $this->name;
        }
        return $this->name . '="' . $this->value . '"';
    }

    /**
     *
     * @return string
     */
    public function getName () {
        return $this->name;
    }

    /**
     *
     * @return string
     */
    public function getValue () {
        if ( $this->value === 'use $name' ) {
            return $this->name;
        }
        return $this->value;
    }

}
