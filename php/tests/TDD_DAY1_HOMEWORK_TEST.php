<?php

require dirname(__DIR__) . '/class/TDD_DAY1_HOMEWORK.php';

class TDD_DAY1_HOMEWORK_TEST extends PHPUnit_Framework_TestCase{
	protected $TDD_DAY1_HOMEWORK_TEST;
	
	protected function setUp(){
		$data = [];
		// $data 的部分不建議這樣寫，因為 Cost, Revenue, SellPrice 的值，都只是剛好看起來是流水號，但實際上都是獨立的
		// 因為就需求或 domain 的意義來說，沒有任何需求或是domain意義來支撐他們得是個連續數字。
		for($i = 1;$i<=11;$i++){
			array_push($data,['Id'=>$i,'Cost'=>$i,'Revenue'=>$i+10,'SellPrice'=>$i+20]);
		}
		$this->TDD_DAY1_HOMEWORK_TEST = new TDD_DAY1_HOMEWORK();
		$this->TDD_DAY1_HOMEWORK_TEST->setData($data);
	}
	
	//寫得很好, getCustomData() 的 function name 如果更符合需求的意義就更好了。
	public function test_Column_Name_Cost_3_Group(){
		$expected = [6,15,24,21];
		$actual = $this->TDD_DAY1_HOMEWORK_TEST->getCustomData('Cost', 3);
		$this->assertEquals($expected,$actual);
	}
	
	//寫得很好, getCustomData() 的 function name 如果更符合需求的意義就更好了。
	public function test_Column_Name_Revenue_4_Group(){
		$expected = [50,66,60];
		$actual = $this->TDD_DAY1_HOMEWORK_TEST->getCustomData('Revenue', 4);
		$this->assertEquals($expected,$actual);
	}
}
