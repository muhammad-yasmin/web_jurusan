<?php 
	class QRGenerator
	{
		protected $ukuran;
		protected $data;
		protected $enkoding;
		protected $errorCorrectionLevel;
		protected $marginInRows;
		protected $debug;

		public function __construct($ukuran = '200', $enkoding = 'UTF-8', $errorCorrectionLevel = 'L', $marginInRows = 4, $debug = false)
		{
			$this->size = ($ukuran > 100 && $ukuran < 800 )? $ukuran : 300;
			$this->encoding = ($enkoding == 'Shift_JIS' || $enkoding == 'ISO-8859-1' || $enkoding == 'UTF-8')? $enkoding : 'UTF-8';
			$this->errorCorrectionLevel = ($errorCorrectionLevel == 'L' || $errorCorrectionLevel == 'M' || $errorCorrectionLevel == 'Q' || $errorCorrectionLevel == 'H') ?  $errorCorrectionLevel : 'L';
        	$this->marginInRows=($marginInRows > 0 && $marginInRows < 10) ? $marginInRows : 4; 
        	$this->debug = ($debug == true)? true : false;
		}

		function setData($data){
			$this->data = urlencode($data);
		}

		public function oyisam(){
			$SQRLink = "https://chart.googleapis.com/chart?cht=qr&chs=".$this->size."x".$this->size."&chl=" .$this->data.  
					"&choe=" . $this->encoding . 
					"&chld=" . $this->errorCorrectionLevel . "|" . $this->marginInRows;
			if ($this->debug) echo $SQRLink;
			return $SQRLink;
		}
	}