<?php

namespace HugoHeneault\ChartJS\Lists;

class Dataset implements \JsonSerializable, \Iterator, \ArrayAccess {
    /**
     *
     * @var \HugoHeneault\ChartJS\Models\Dataset[]
     */
    protected $datasets;
    /**
     *
     * @var int
     */
    protected $current = 0;
    /**
     *
     * @return string
     */
    public function getType() {
        $class = count($this->datasets) > 0?preg_replace('#^.*\\\\#','',get_class($this->datasets[0])):'Line';
        return strtolower($class{0}) . substr($class,1);
    }
    /**
     *
     * @return array
     */
    public function jsonSerialize() {
        $numDatasets = ceil(count($this->datasets) / 3);
        $step = max(0,floor(256 / $numDatasets - 1));
        $count = 0;
        for($red = 0; $red < $numDatasets; $red++) {
            for($green = 0; $green < $numDatasets; $green++) {
                for($blue = 0; $blue < $numDatasets; $blue++) {
                    if(isset($this->datasets[$count])) {
                        $this->datasets[$count]->setColor(new \HugoHeneault\ChartJS\Models\Color($red * $step,$green * $step,$blue * $step));
                    }
                    $count++;
                }
            }
        }
        return $this->datasets;
    }
    /**
     *
     * @param \HugoHeneault\ChartJS\Models\Dataset $dataset
     */
    public function add(\HugoHeneault\ChartJS\Models\Dataset $dataset) {
        $this->datasets[] = $dataset;
    }
    /**
     *
     * @return \HugoHeneault\ChartJS\Models\Dataset
     */
    public function current() {
        return $this->datasets[$this->current];
    }
    /**
     *
     * @return int
     */
    public function key() {
        return $this->current;
    }
    /**
     * @return void
     */
    public function next() {
        $this->current+=1;
    }
    /**
     *
     * @param int $offset
     * @return boolean
     */
    public function offsetExists($offset) {
        return isset($this->datasets[$offset]);
    }
    /**
     *
     * @param int $offset
     * @return \HugoHeneault\ChartJS\Models\Dataset
     */
    public function offsetGet($offset) {
        return $this->datasets[$offset];
    }
    /**
     *
     * @param int $offset
     * @param \HugoHeneault\ChartJS\Models\Dataset $value
     */
    public function offsetSet($offset,$value) {
        if(!($value instanceof \HugoHeneault\ChartJS\Models\Dataset)) {
            throw new \InvalidArgumentException("Values must be of type \HugoHeneault\ChartJS\Models\Dataset, " . get_class($value) . " given.");
        }
        $this->datasets[$offset] = $value;
    }
    /**
     *
     * @param int $offset
     */
    public function offsetUnset($offset) {
        unset($this->datasets[$offset]);
    }
    /**
     * @return void
     */
    public function rewind() {
        $this->current = 0;
    }
    /**
     *
     * @return boolean
     */
    public function valid() {
        return $this->current < count($this->datasets) && $this->current >= 0;
    }
}