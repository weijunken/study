<?php
	class Game {
		public $name = '';
		//构造函数
		public function __construct($name){
			$this->name = $name;
		}
		
		public function select($info){
			return 'game infos:'.$info;
		}
		
		public function isRight(){
			if($this->name == 'menghuanhuayuan')
				return true;
			throw new Exception('这是错误的');
		}
		public function state(){
			return 'hi';
		}
	}