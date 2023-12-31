<?php
/**
 * Open Source Social Network
 *
 * @package   (Informatikon.com).ossn
 * @author    OSSN Core Team <info@opensource-socialnetwork.org>
 * @copyright (C) OPENTEKNIK  LLC, COMMERCIAL LICENSE
 * @license   OPENTEKNIK  LLC, COMMERCIAL LICENSE, COMMERCIAL LICENSE https://www.openteknik.com/license/commercial-license-v1
 * @link      http://www.opensource-socialnetwork.org/licence
 */
$guid   = input('guid');
$type   = input('type');
$object = ossn_get_event($guid);
if(in_array("event:{$type}", ossn_events_relationship_default()) && $object) {
		
		//pass the each relation id to loop, becasue there is bug in OSSN v4.1 which is fixed in v4.2 , 
		//the relation with array types without inverse throws error
		foreach(ossn_events_relationship_default() as $item) {
				$data = ossn_relation_exists_event(ossn_loggedin_user()->guid, $object->guid, $item);
				if($data) {
						$loop_decision[] = $data;
				}
		}
		$decision = $loop_decision;
		if($decision->{0}->type !== "event:{$type}") {
				foreach($decision as $item) {
						ossn_delete_relationship_by_id($item->relation_id);
				}
		}
		if($decision->{0}->type == "event:{$type}") {
				ossn_trigger_message(ossn_print("event:decision:event:saved"));
				redirect(REF);
		}
		if(ossn_add_relation(ossn_loggedin_user()->guid, $guid, "event:{$type}")) {
				
				if(class_exists("OssnNotifications")) {
						$notification = new OssnNotifications;
						$notification->add("event:relation:{$type}", ossn_loggedin_user()->guid, $object->guid, NULL, $object->owner_guid);
				}
				
				ossn_trigger_message(ossn_print("event:decision:event:saved"));
				redirect(REF);
		}
		
}