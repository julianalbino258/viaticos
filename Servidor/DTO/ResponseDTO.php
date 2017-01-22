<?php  
	
	class ResponseDTO
	{
		public $Result = 1; //Result: 0 = Error, 1 = Success
		public $ResultData = null;
		public $Message = null;
		public $StackTraceMessage = null;
		public $IsOk = true;
		public $HasError = false;

		public function SetMessageError($errorMessage)
		{
			$this->Result = 0;
			$this->IsOk = false;
			$this->HasError = true;
			$this->Message = $errorMessage;

			return $this;
		}

		public function SetStackTraceMessageError($errorMessage, $stackTraceMessage)
		{
			$this->StackTraceMessage = $stackTraceMessage;
			return $this->SetMessageError($errorMessage);
		}
	}
?>