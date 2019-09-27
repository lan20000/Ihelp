<?php
/**
 * 会员中心（等级）
 */
namespace app\home\controller;


class Member extends Base{
	/**
	 * 开通月会员
	 */
	public function addMonthVip(){
		$member = $this->checkLogin();
		
		$a= 888; 
		
		
		$params = array_trim(request()->post());
		
		//判断金额是否充足
		if($a>$member['credit2']){
			message('账户余额不足,请先充值','','error');
			
		}
		
	}
	
	/**
	 * 开通年会员
	 */
	public function addYearVip(){}
	
// 	public function setTop() {
// 		$member = $this->checkLogin();
	
// 		$id = intval(params('id'));
// 		$tasks = \app\home\model\MyTask::getInfoById($id);
// 		if (is_null($tasks)) {
// 			message('置顶失败:-1','','error');
// 		}
// 		if ($tasks['uid'] != $member['uid']) {
// 			message('置顶失败:-2','','error');
// 		}
	
// 		$setting = [];
// 		$config = Config::getInfo();
// 		if(check_array($config['setting'])){
// 			$setting = $config['setting'];
// 			if(!empty($setting['top_fee'])){
// 				$setting['top_fee'] = intval($setting['top_fee']);
// 			}
// 		}
	
// 		if(!isset($setting['top_fee'])){
// 			$setting['top_fee'] = 0;
// 		}
	
// 		if(!isset($setting['top_max_hour'])){
// 			$setting['top_max_hour'] = 1;
// 		}
	
// 		$params = array_trim(request()->post());
// 		$params['hour'] = intval($params['hour']);
// 		$top_fee = $params['hour'] * $setting['top_fee'];
	
// 		if ($params['hour'] > $setting['top_max_hour']) {
// 			message('置顶时间最多' . $setting['top_max_hour'] . '小时','','error');
// 		}
	
// 		//判断余额或者积分是足够
// 		if($top_fee > $member['credit2']){
// 			message('账户余额不足','','error');
// 		}
	
// 		Db::startTrans();
// 		$update = [
// 				'top_time' => TIMESTAMP,
// 				'top_hour' => $params['hour'],
// 				'top_fee' => $top_fee,
// 				'top_end_time' => TIMESTAMP + ($params['hour'] * 60 * 60)
// 		];
// 		$status0 = \app\home\model\Task::updateInfoById($id, $update);
// 		if(!$status0){
// 			Db::rollback();
// 			message('置顶失败:-3','','error');
// 		}
		 
// 		if($top_fee>0){
// 			$status1 = Member::updateCreditById($member['uid'], 0, -$top_fee);
// 			if(!$status1){
// 				Db::rollback();
// 				message('置顶失败:-4','','error');
// 			}
// 			$status3 = CreditRecord::addInfo([
// 					'uid' => $member['uid'],
// 					'type' => 'credit2',
// 					'num' => -$top_fee,
// 					'title' => '置顶任务',
// 					'remark' => "任务[" . $tasks['id'] . "]-" . $tasks['title'] . "置顶成功，扣除{$top_fee}余额。",
// 					'create_time' => TIMESTAMP
// 					]);
// 			if(!$status3){
// 				Db::rollback();
// 				message('置顶失败:-5','','error');
// 			}
// 		}
	
// 		Db::commit();
	
// 		message('置顶成功','reload','success');
// 	}
	
	
}