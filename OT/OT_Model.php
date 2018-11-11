<?php

	class OTModel
	{
		public $time_in;
 		public $time_out;
 		public $comment;
 		public $date_from;
 		public $date_to;


 		function isOTValid()
 		{
 			if($time_out > "5:30:00")
 				return false;

 			return true;
 		}
	}

$ot = new OTModel;
call_user_method("isOTValid", $ot)

?>