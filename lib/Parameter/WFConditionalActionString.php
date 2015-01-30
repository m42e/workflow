<?php

namespace M42e\WorkflowIs\Parameter;
use \M42e\WorkflowIs;
use \CFPropertyList\CFPropertyList;
use \CFPropertyList\CFDictionary;

/**
 * WFConditionalActionString
 * @author Matthias Bilger
 */

class WFConditionalActionString extends WFParameter
{
	public function __construct($options){
		 parent::__construct($options);
		 $this->label = 'Check for';
	}

	public function getInfo(){
		if(!is_array($this->data->getValue())){
			return parent::getInfo();
		}
		return null;
	}
}
