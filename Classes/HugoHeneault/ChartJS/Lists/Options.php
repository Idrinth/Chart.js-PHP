<?php

namespace HugoHeneault\ChartJS\Lists;

class Options extends BaseArrayAccess implements \JsonSerializable {
    /**
     *
     * @var \HugoHeneault\ChartJS\Models\Options[]
     */
    protected $list;
    /**
     *
     * @return array
     */
    public function jsonSerialize() {
        $list = array();
        foreach($this->list as $item) {
            $list = array_merge_recursive($list,$item->jsonSerialize());
        }
        return $list;
    }
    /**
     *
     * @param \HugoHeneault\ChartJS\Models\Options $options
     */
    protected function addNew($options) {
        $this->list[$options->getPosition()] = $options;
    }
    /**
     *
     * @param int $offset
     * @return \HugoHeneault\ChartJS\Models\Options
     */
    public function offsetGet($offset) {
        return parent::offsetGet($offset);
    }
    /**
     *
     * @return string
     */
    protected function getAllowedObjectType() {
        return '\HugoHeneault\ChartJS\Models\Options';
    }
    public function modify($offset,$method,$params = array()) {
        call_user_func_array(array($this->list[$offset],$method),$params);
    }
}