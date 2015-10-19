var assert = require('assert');
var TDD_DAY1_HOMEWORK = require('../bin/TDD_DAY1_HOMEWORK.js');
var TDD_DAY1_HOMEWORK_TEST = new TDD_DAY1_HOMEWORK();


describe('TDD_DAY1_HOMEWORK_TEST',function(){
	before('set data',function(){
		var data = [];
		for(var i=1; i<=11; i++){
			data.push({Id:i,Cost:i,Revenue:i+10,SellPrice:i+20});
		}
		TDD_DAY1_HOMEWORK_TEST.setData(data);
	});
	
	it('3筆一組，取Cost總和',function(){
		var actual = TDD_DAY1_HOMEWORK_TEST.getCustomData('Cost', 3);
		var expected = [6, 15, 24, 21];
		assert.deepEqual(actual, expected);
	});
	
	it('4筆一組，取Revenue總和',function(){
		var actual = TDD_DAY1_HOMEWORK_TEST.getCustomData('Revenue', 4);
		var expected = [50, 66, 60];
		assert.deepEqual(actual, expected);
	});
})
