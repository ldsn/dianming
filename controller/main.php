<?php
class main extends spController
{ //主界面循环出所有数据
	function index(){
		$this->jump(spUrl('main','in'));
	}
	function in(){
		$q=spClass('question');
		$this->question1=$q->findAll();
		$answer=spClass('answer');
		$data = date('Y-m-d H:i:s',time());
		 $newrow=array(
		 'time'=>$data,
		 );
		$result=$answer->create($newrow);
		$result1 = $answer->find('','aid desc'); // 查找
		$this->aid=$result1['aid'];
		$this->display('reply.html');
		}
		
		function insert(){
		$answer=spClass('answer');
		$question=spClass('question');
		$main1=spClass('main1');
		$quest=$question->findAll();
		$aid=$this->spArgs('aid');
        $a=$this->spArgs('the');
		foreach ($a as $key => $value ){
			$arow=array(
			'qid'=>$key,
			'aid'=>$aid,
			'content'=>$value,
			);
			$relt=$main1->create($arow);
			
		}
		$this->jump(spUrl('main', 'show').'&aid='.$aid);
	   
		
		
		}
        function show(){
		$main1=spClass('main1');
		$question=spClass('question');
		$aid=$this->spArgs('aid');
		$status=spClass('answer')->find(array('aid'=>$aid));
		$this->status=$status['status'];
		spClass('answer')->update(array('aid'=>$aid),array('status'=>1));
		$conditions=array(
		  'aid'=>$aid,
		);
		$result=$main1->findAll($conditions);
		$this->data=$result;
		$info=array();
		$i=0;
	  foreach($result as $value){
	               $condition1=array( 'qid'=>$value['qid']);
	              $question1=$question->find($condition1);
	  $data=array('title'=>$question1['title'],'content'=>$value['content']);
	  $info[$i]=$data;
		$i++;
		}
	
		$this->getout=$info;
		
		
		$nm=$main1->find(array('aid'=>$aid,'qid'=>1));
		$this->name=$nm['content'];
		$this->display('show.html');
		}
		function one(){
		echo '<script type="text/javascript" src="http://qzonestyle.gtimg.cn/qzone/openapi/qc_loader.js" charset="utf-8" data-callback="true"></script>';
		}
}