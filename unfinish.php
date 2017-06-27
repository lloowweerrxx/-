$safeanswer = $_POST['safeanswer'];
$safequestion = $_POST['safequestion'];
$turequestion = intval(0);
$tureanswer = intval(0);
if(empty($safequestion)){
	die("安全问题不能为空！");
}
if(empty($safeanswer)){
	die("安全问题答案不能为空！");
}
if($tureanswer == $safeanswer && $turequestion == $safequestion){
	echo $flag;
}