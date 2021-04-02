var h = require('./bbb');
var list=[];
let b = h.bbb()
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
