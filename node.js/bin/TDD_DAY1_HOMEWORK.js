module.exports = function () {
	var data = [];

	this.setData = function (importData) {
		data = importData;
	}

	this.getCustomData = function (columnName, fetchNumber) {
		var result = [];
		var count = 0;
		var dataLength = data.length;
		var resultLength = dataLength/fetchNumber;
		for(var i = 0; i<resultLength; i++){
			result[i] = 0;
		}
		for (var i = 1; i<dataLength; i++) {
			result[count] += data[i-1][columnName];
			if (i % fetchNumber == 0) {
				count++;			
			}
		}
		return result;
	}
}