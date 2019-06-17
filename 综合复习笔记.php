//01：获取给定父节点下的所有直系子节点
	var obj=$("div").children();
//02：获取给定父节点下的指定的所有后代节点
	var obj=$("div").find("span");
//03：获取给定节点的紧邻的下一个兄弟节点
	var obj=$("h2").next();
//04：获取给定节点下面的所有兄弟节点
	var obj=$("h2").nextAll();
//05：获取给定节点紧邻的上一个兄弟节点
	var obj=$("span").prev();
//06：获取给定节点紧邻的上所有兄弟节点
	var obj=$("span").prevAll();
//07：获取给定节点的所有同辈元素
	var obj=$("h2").siblings();
//08：获取给定节点的直系父节点
	var obj=$("#s_dd").parent()
//09：获取给定节点的所有祖先节点，也可以筛选
	var obj=$("#s_dd").parents("dl")
//10：获取给定节点下面的兄弟节点，直至遇到指定的某个节点为止
	var obj=$("dt").nextUntil("dd:eq(1)");
//11：获取给定节点上面的兄弟节点，直至遇到指定的某个节点为止
	var obj=$("dt").prevUntil("h2")
//12：获取给定节点的祖先节点，直至遇到指定的节点为止
	var obj=$("#s_dd").parentsUntil("bosy");
//2.1：向给定的元素节点内部的后面插入一个节点，作为其子节点
	$("在哪儿插").append("<h2>zlk</h2>");

//2.2：向给定元素节点的外部的后面插入的一个节点，作为其兄弟节点
	$("在哪儿插").after("插谁")
//2.3：向给定元素节点的外部的前面插入的一个节点，作为其兄弟节点
	$("在哪儿插").bofore("插谁")


//制作验证码需要开启PHP.ini中的gb2;
----------------------------------------------------------------
	//事件
//3.1：当DOM加载就绪时，该方法自动执行
	$(document).ready(function(){内容});
	$(function(){内容});
	$().ready(function(){内容});

//3.2：当元素失去焦点是触发事件
	$("#对象").bulr(function(){})

//3.3：鼠标滑过
	$("p").mouseenter(function(){
  		$("p").css("background-color","yellow");
	});
//3.4：鼠标离开
	 ：mouseout
	 ：mouseleave
	$("p").mouseleave(function(){
  		$("p").css("background-color","#E9E9E4");
	});
//3.5：鼠标移上
	 ：mouseover
//3.6：书包按下
	 ：mousedown
//3.7：当文本框或者文本域的值被选中时该事件会触发
	 ：select
//鼠标换成小手：cursor:pointers

//事件伪派：$(documet).on("事件","对象",操作)
			$(documet).on("click","button","function(){}")

//ajax
$.ajax({
	url:"ajax发送至服务器端的请求地址";
	async:"用户设置ajax以同步还是一部请求,"
	data:{参数名:"参数值",…} //ajax请求是传递的数据
	dataType:"预期服务器返回的数据类型"
	type:"请求方式，此处设置post或get"
	success:function (){}ajax请求成功后的返回值
})

//json：是一种数据交换格式的对象
	json_encode()将对象编程数组
	json_decode()将数组编程对象
//eval("("+数据+")") 原生数据转换方法；

//RBAC:基于角色的权限控制
		R:role 角色 (代表身份)
		B:based 基于 (身份上的权利)
		A:access 权限
		C:control 控制{
						责任分离
						数据抽象
						最小化原则
						}
//distinct


//{:str_repeat()}是在模板中的用法
//{:str_}

