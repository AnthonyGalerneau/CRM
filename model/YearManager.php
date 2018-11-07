<?php

namespace AnthonyGalerneau\CRM\Model;

class YearManager {

	private $year;
	
	public function __construct(?int $year = null)
	{
		if ($year === null) {
			$year = intval(date('Y'));
		} 

		if ($year <1970){
			throw new \Exception("L'année est inférieur à 1970");
			
		}
		$this->year = $year;
	}

	public function toString(): string {
		return $this->year;
	}


}