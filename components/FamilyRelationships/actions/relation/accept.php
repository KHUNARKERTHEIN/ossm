<?php
/**
 * Open Source Social Network
 *
 * @package   Marketplace
 * @author    Engr. Syed Arsalan Hussain Shah <arsalan@openteknik.com>
 * @copyright (C) OPENTEKNIK LLC
 * @license   OPENTEKNIK LLC, COMMERCIAL LICENSE
 * @link      https://www.openteknik.com/
 */
 
 $guid = input('guid');
 $privacy = input('privacy');
 $request = family_relation_get_guid($guid);
 $relation = new Relationship;
 //delete all previous status
 $list = $relation->getStatus();
 if($list){
	 foreach($list as $item){
	 		$item->deleteObject();
	 }
 }
 if($request && $request->member_guid == ossn_loggedin_user()->guid){
	   $request->data->privacy_to = $privacy;
	   $request->data->pending = false;
	   if($request->save()){
			ossn_trigger_callback('family', 'request:accept', array(
						'request' => $request,														
			));
			echo 1;
			exit;
	   }
 } 
 echo 0;
 exit;