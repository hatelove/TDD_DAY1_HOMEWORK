<?php

require dirname(__DIR__) . '/class/TDD_DAY1_HOMEWORK.php';

class TDD_DAY1_HOMEWORK_TEST extends PHPUnit_Framework_TestCase{
	protected $TDD_DAY1_HOMEWORK_TEST;
	
	protected function setUp(){
		$data = [];
		for($i = 1;$i<=11;$i++){
			array_push($data,['Id'=>$i,'Cost'=>$i,'Revenue'=>$i+10,'SellPrice'=>$i+20]);
		}
		$this->TDD_DAY1_HOMEWORK_TEST = new TDD_DAY1_HOMEWORK();
		$this->TDD_DAY1_HOMEWORK_TEST->setData($data);
	}
	
	public function test_Column_Name_Cost_3_Group(){
		$expected = [6,15,24,21];
		$actual = $this->TDD_DAY1_HOMEWORK_TEST->getCustomData('Cost', 3);
		$this->assertEquals($expected,$actual);
	}
	
	public function test_Column_Name_Revenue_4_Group(){
		$expected = [50,66,60];
		$actual = $this->TDD_DAY1_HOMEWORK_TEST->getCustomData('Revenue', 4);
		$this->assertEquals($expected,$actual);
	}
}