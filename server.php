<?php
	header('Content-Type:text/html;charset=utf-8');

	$data = $_POST['current'];

	if($data == 1){
		echo '{"lists":[
		{"link":"baidu.com","address":"https://ss0.bdstatic.com/5aV1bjqh_Q23odCf/static/superman/img/logo/bd_logo1_31bdc765.png","title":"测试1","time":"2015.07.08","prevPrice":"1998","currentPrice":"998"},
		{"link":"baidu.com","address":"https://ss0.bdstatic.com/5aV1bjqh_Q23odCf/static/superman/img/logo/bd_logo1_31bdc765.png","title":"测试1","time":"2015.07.08","prevPrice":"1998","currentPrice":"998"},
		{"link":"baidu.com","address":"https://ss0.bdstatic.com/5aV1bjqh_Q23odCf/static/superman/img/logo/bd_logo1_31bdc765.png","title":"测试1","time":"2015.07.08","prevPrice":"1998","currentPrice":"998"},
		{"link":"baidu.com","address":"https://ss0.bdstatic.com/5aV1bjqh_Q23odCf/static/superman/img/logo/bd_logo1_31bdc765.png","title":"测试1","time":"2015.07.08","prevPrice":"1998","currentPrice":"998"}
		],"pageNum":6}';
	}else if($data == 2){
		echo '{"lists":[
		{"link":"baidu.com","address":"https://ss0.bdstatic.com/5aV1bjqh_Q23odCf/static/superman/img/logo/bd_logo1_31bdc765.png","title":"测试2","time":"2015.07.08","prevPrice":"1998","currentPrice":"998"},
		{"link":"baidu.com","address":"https://ss0.bdstatic.com/5aV1bjqh_Q23odCf/static/superman/img/logo/bd_logo1_31bdc765.png","title":"测试2","time":"2015.07.08","prevPrice":"1998","currentPrice":"998"},
		{"link":"baidu.com","address":"https://ss0.bdstatic.com/5aV1bjqh_Q23odCf/static/superman/img/logo/bd_logo1_31bdc765.png","title":"测试2","time":"2015.07.08","prevPrice":"1998","currentPrice":"998"},
		{"link":"baidu.com","address":"https://ss0.bdstatic.com/5aV1bjqh_Q23odCf/static/superman/img/logo/bd_logo1_31bdc765.png","title":"测试2","time":"2015.07.08","prevPrice":"1998","currentPrice":"998"}
		],"pageNum":6}';
	}else if($data == 3){
		echo '{"lists":[
		{"link":"baidu.com","address":"https://ss0.bdstatic.com/5aV1bjqh_Q23odCf/static/superman/img/logo/bd_logo1_31bdc765.png","title":"测试3","time":"2015.07.08","prevPrice":"1998","currentPrice":"998"},
		{"link":"baidu.com","address":"https://ss0.bdstatic.com/5aV1bjqh_Q23odCf/static/superman/img/logo/bd_logo1_31bdc765.png","title":"测试3","time":"2015.07.08","prevPrice":"1998","currentPrice":"998"},
		{"link":"baidu.com","address":"https://ss0.bdstatic.com/5aV1bjqh_Q23odCf/static/superman/img/logo/bd_logo1_31bdc765.png","title":"测试3","time":"2015.07.08","prevPrice":"1998","currentPrice":"998"},
		{"link":"baidu.com","address":"https://ss0.bdstatic.com/5aV1bjqh_Q23odCf/static/superman/img/logo/bd_logo1_31bdc765.png","title":"测试3","time":"2015.07.08","prevPrice":"1998","currentPrice":"998"}
		],"pageNum":6}';
	}else if($data == 4){
		echo '{"lists":[
		{"link":"baidu.com","address":"https://ss0.bdstatic.com/5aV1bjqh_Q23odCf/static/superman/img/logo/bd_logo1_31bdc765.png","title":"测试4","time":"2015.07.08","prevPrice":"1998","currentPrice":"998"},
		{"link":"baidu.com","address":"https://ss0.bdstatic.com/5aV1bjqh_Q23odCf/static/superman/img/logo/bd_logo1_31bdc765.png","title":"测试4","time":"2015.07.08","prevPrice":"1998","currentPrice":"998"},
		{"link":"baidu.com","address":"https://ss0.bdstatic.com/5aV1bjqh_Q23odCf/static/superman/img/logo/bd_logo1_31bdc765.png","title":"测试4","time":"2015.07.08","prevPrice":"1998","currentPrice":"998"},
		{"link":"baidu.com","address":"https://ss0.bdstatic.com/5aV1bjqh_Q23odCf/static/superman/img/logo/bd_logo1_31bdc765.png","title":"测试4","time":"2015.07.08","prevPrice":"1998","currentPrice":"998"}
		],"pageNum":6}';
	}else if($data == 5){
		echo '{"lists":[
		{"link":"baidu.com","address":"https://ss0.bdstatic.com/5aV1bjqh_Q23odCf/static/superman/img/logo/bd_logo1_31bdc765.png","title":"测试5","time":"2015.07.08","prevPrice":"1998","currentPrice":"998"},
		{"link":"baidu.com","address":"https://ss0.bdstatic.com/5aV1bjqh_Q23odCf/static/superman/img/logo/bd_logo1_31bdc765.png","title":"测试5","time":"2015.07.08","prevPrice":"1998","currentPrice":"998"},
		{"link":"baidu.com","address":"https://ss0.bdstatic.com/5aV1bjqh_Q23odCf/static/superman/img/logo/bd_logo1_31bdc765.png","title":"测试5","time":"2015.07.08","prevPrice":"1998","currentPrice":"998"},
		{"link":"baidu.com","address":"https://ss0.bdstatic.com/5aV1bjqh_Q23odCf/static/superman/img/logo/bd_logo1_31bdc765.png","title":"测试5","time":"2015.07.08","prevPrice":"1998","currentPrice":"998"}
		],"pageNum":6}';
	}else if($data == 6){
		echo '{"lists":[
		{"link":"baidu.com","address":"https://ss0.bdstatic.com/5aV1bjqh_Q23odCf/static/superman/img/logo/bd_logo1_31bdc765.png","title":"测试6","time":"2015.07.08","prevPrice":"1998","currentPrice":"998"},
		{"link":"baidu.com","address":"https://ss0.bdstatic.com/5aV1bjqh_Q23odCf/static/superman/img/logo/bd_logo1_31bdc765.png","title":"测试6","time":"2015.07.08","prevPrice":"1998","currentPrice":"998"},
		{"link":"baidu.com","address":"https://ss0.bdstatic.com/5aV1bjqh_Q23odCf/static/superman/img/logo/bd_logo1_31bdc765.png","title":"测试6","time":"2015.07.08","prevPrice":"1998","currentPrice":"998"}
		],"pageNum":6}';
	}

	
?>