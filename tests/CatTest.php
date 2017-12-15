<?php
	require dirname(__DIR__).'/src/Cat.php';
	class CatTest extends PHPUnit_Framework_TestCase{
		//测试开始
		public function testIsTrue(){
			$cat = new Cat();
			$this->assertTrue($cat->isTrue('kenli'));
		}
	}