<?php
	require dirname(__DIR__).'/src/Game.php';
	class GameTest extends PHPUnit_Framework_TestCase{
		//测试开始
		public function testGameConstruct(){
			$game = new Game('menghuanhuayuan');
			$this->assertAttributeEquals('menghuanhuayuan','name',$game);
		}
		public function testGameSelect(){
			$game = new Game('menghuanhuayuan');
			$this->assertEquals('game infos:chaobangde',$game->select('chaobangde'));
		}
		
		/**
     * @expectedException        Exception
     * @expectedExceptionMessage 这是错误的
     */
		public function testIsWrong(){
			$game = new Game('menghuanhuayuands');
			$game->isRight();
		}
	}