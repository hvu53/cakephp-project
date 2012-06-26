<?php
class Survey extends AppModel {
	var $name = 'Survey';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Company' => array(
			'className' => 'Company',
			'foreignKey' => 'company_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	var $hasMany = array(
		'Answer' => array(
			'className' => 'Answer',
			'foreignKey' => 'survey_id',
			'dependent' => true,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

	function encodeQuestions(){
		//TODO: implement
	}
	
	// convert from string in sql DB to array
	function decodeQuestions($questions){
		$tmp = explode('❤',$questions);
		$ret = array();
		foreach($tmp as $q){
			 $ret[] = explode('♡',$q);
		}
		return $ret;
	}
	function decodeAnswers($questions,$answers){
		$ret = array();
		
		foreach($answers as $answer){
			$tmp = explode('❤',$answer['Answer']['data']);
			
			foreach($questions as $qid=>$question){
				switch($question['0']){
					case '1':
						break;
					case '2':$tmp[$qid] = explode('♡',$tmp[$qid]);
						break;
					default;
				}
			}
			
			$ret[] = $tmp;
		}
		return $ret;
	}
	
	function encodeAnswers($questions,$answers){
		$ret = '';
		foreach($questions as $qid=>$question){
			switch($question['0']){
				case '1':$ret .= $answers['q'.$qid].'❤';
					break;
				case '2':$ret .= implode('♡', $answers['q'.$qid]).'❤';
					break;
				default;
			}
		}
		return substr($ret, 0, strlen($ret)-1); //implode('❤', $answers);
	}
	
	function analyzeAnswers($surveyid){
		$this->bindModel(array('hasMany'=>array(
				'Answer' => array(
					'className' => 'Answer',
					'foreignKey' => 'survey_id',
				)
		)));
		$this->recursive = -1;
		$survey = $this->find('first',array(
			'conditions'=>array($this->alias.'.id'=>$surveyid),
			'contain'=>array()
		));
		$questions = $this->decodeQuestions($survey[$this->alias]['questions']);
		
		$this->Answer->recursive = -1;
		$answers = $this->decodeAnswers($questions,$this->Answer->find('all',array(
			'conditions'=>array('Answer.survey_id'=>$surveyid),
			'contain'=>array()
		)));
		
		$results = array();// build the result array based on the questions
		foreach($questions as $question){
			$tmp = array();
			switch($question[0]){
				case 1:
				case 2:
					for ($i = 0; $i < count($question); $i++) {
						$tmp[] = 0;
					}
					break;
				default:
			}
			$results[] = $tmp;
		}
		
		foreach($answers as $answer){
			foreach($results as $qid=>&$result){
				switch($questions[$qid][0]){
					case 1:$result[$answer[$qid]]++;break;
					case 2:
						foreach($answer[$qid] as $piece){
							$result[$piece]++;
						}
						break;
					default:
				}
			}
		}
		return array('Survey'=>$survey['Survey'],'Questions'=>$questions,'Results'=>$results);
	}
}
?>