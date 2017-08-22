<?php 
/**
* 验证用户提交表单数据
*/
class checkForm{
	private $data = array();
	function __construct($data)
	{
		$this->data = $data;
	}
	public functtion check(&$arr){
		if(!(filter_input(INPUT_POST,'username',FILTER_CALLBACK,array('options' =>'checkForm::validate_str')))){
			$errors['username'] = "用户名不合法";
		}
		if(!(filter_input(INPUT_POST,'email',FILTER_VALIDATE_EMAIL))){
			$errors['email'] = '邮箱格式不正确';
		}
		if(!(filter_input(INPUT_POST,'url',FILTER_VALIDATE_URL))){
			$errors['url'] = '博客地址不合法';
		}
		if(!(filter_input(INPUT_POST,'content',FILTER_CALLBACK,array('options'=>'checkForm::validate_str')))){
			$errors['content'] = '内容不合法';
		}
		if(!empty($errors)){
			
		}

	}
	private static function validate_str($str){
		if(mb_strlen($str,'utf8')<1){
			return false;
		}
		$str = nl2br(htmlspecialchars($str,ENT_QUOTES));
		return $str;
	}
}