<?php

namespace HugoHeneault\ChartJS\Lists;

class Dataset extends BaseArrayAccess implements \JsonSerializable {
    /**
     *
     * @var \HugoHeneault\ChartJS\Models\Dataset[]
     */
    protected $list;
    /**
     *
     * @return string
     */
    public function getType() {
        $class = count($this->list) > 0?preg_replace('#^.*\\\\#','',get_class($this->list[0])):'Line';
        return strtolower($class{0}) . substr($class,1);
    }
    /**
     *
     * @return array
     */
    public function jsonSerialize() {
        $numDatasets = ceil((count($this->list) + 1) / 3);
        $step = max(0,floor(256 / $numDatasets - 1));
        $count = 0;
        for($red = 0; $red < $numDatasets; $red++) {
            for($green = 0; $green < $numDatasets; $green++) {
                for($blue = 0; $blue < $numDatasets; $blue++) {
                    if(isset($this->list[$count])) {
                        $this->list[$count]->setColor(new \HugoHeneault\ChartJS\Models\Color($red * $step,$green * $step,$blue * $step));
                    }
                    $count++;
                }
            }
        }
        return $this->list;
    }
    /**
     *
     * @param \HugoHeneault\ChartJS\Models\Dataset $dataset
     */
    protected function addNew($dataset) {
        $this->list[] = $dataset;
    }
    /**
     *
     * @param int $offset
     * @return \HugoHeneault\ChartJS\Models\Dataset
     */
    public function offsetGet($offset) {
        return parent::offsetGet($offset);
    }
    /**
     *
     * @return string
     */
    protected function getAllowedObjectType() {
        return '\HugoHeneault\ChartJS\Models\Dataset';
    }
}