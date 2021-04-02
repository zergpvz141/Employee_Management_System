exports.bbb = function () {
    var promise = new Promise(function (resolve, reject) {
    var mysql = require('mysql');
    var connection = mysql.createConnection({
        host: 'localhost',
        user: 'root',
        password: '19970629',
        database: 'cse562'
    });
    connection.connect();
    connection.query(
        "SELECT * FROM `department`",
        function selectCb(err, results) {
            if (results) {
                 var dataString=JSON.stringify(results);
                 var data=JSON.parse(dataString);
                //console.log(results);
                //resolve(results);
                resolve(JSON.parse(JSON.stringify(results)));
            }
            if (err) {
                console.log(err);
            }
            connection.end();
        }
    );
});
promise.then(function (value) {
    //console.log(value);
    return value;
    // success
}, function (value) {
    // failure
});
return promise;
};
var list=[];
let b = this.bbb()
.then(res =>{
	//.then是接收正确返回的信息
	console.log(res) // {...}
        list.push(res);
})
.catch(err =>{
	// .catch 返回报错信息
	console.log(err)
})
console.log(list);
