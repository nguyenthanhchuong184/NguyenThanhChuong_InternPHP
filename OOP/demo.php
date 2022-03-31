<?php
	class ConNguoi
	{
		//khai bao thuoc tinh dong
		public $name;
		public $mat;
		public $mui;
		//khai bao constant
		const SOCHAN = 2;

		//khai bao phuong thuc 
		public function an()
		{
			//noi
		}

		public function noi($caunoi)
		{
			//goi phuong thuc trong class
			return $this->getSoChan();
		}

		public function di()
		{

		}

		public function getName()
		{
			//goi thuoc tinh dong trong class
			return $this->name;
		}

		public function getSoChan()
		{
			//goi thuoc tinh constant trong class
			return self::sochan;
		}


	}
	//khoi tao class
	$connguoi = new ConNguoi();
	//goi thuoc tinh ngoai class va dong thoi gan gia tri cho thuoc tinh
	$connguoi->name = 'Nguyen A';
	//goi lai thuoc tinh de xem thay doi
	echo $connguoi->name;
	//goi phuong thuc
	echo $connguoi->noi('Nguyen A');

?>