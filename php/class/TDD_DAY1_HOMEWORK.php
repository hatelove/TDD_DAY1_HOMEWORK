<?php
class TDD_DAY1_HOMEWORK{
	private $data = [];
	
	public function TDD_DAY1_HOMEWORK(){}
	
	public function setData($importData){
		$this->data = $importData;
	}
	
	public function getCustomData($columnName, $fetchNumber){
		$result = [];
		$count = 0;
		$dataLength = count($this->data);
		$resultLength = $dataLength/$fetchNumber;
		
		for($i=0;$i<=$resultLength; $i++){
			$result[$i] = 0;
		}
		
		for($i=1; $i<=$dataLength; $i++){
			$result[$count] += $this->data[$i-1][$columnName];
			if($i % $fetchNumber == 0){
				$count++;
			}
		}
		
		return $result;
	}
}