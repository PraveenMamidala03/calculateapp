<?php
defined('BASEPATH') OR exit('No direct script access allowed');
error_reporting(0);
class Height extends CI_Controller {
	public function index()
	{
		$this->load->view('index');
	}
	public function convert($lenth)
	{
		$check=array('cm','meter','feet','mm','inches','km','mile','yard','in','to');
		$url= $this->uri->segment(2);
		$url=explode("-",$url);
		if (!(in_array($url[0], $check)) || !(in_array($url[1], $check)) || !(in_array($url[2], $check)) ) {
			redirect('/');
		}
		$lenth=explode("-",$lenth);
		$data = array('lenth' => $lenth[0],'type'=>$url[2]);
		$this->load->view('cm-to-feet',$data);
	}
	public function redirect()
	{
		$type=$_POST['unitMenu'];
		$lenth=$_POST['lenth'];
		redirect("height/$lenth-to-$type/".$_POST['unit1']."-$lenth");
	}
	public function result($num)
	{
		$num=explode("-",$num);
		$url= $this->uri->segment(2);
		$url=explode("-",$url);
		$check=array('cm','meter','feet','mm','inches','km','mile','yard','to');
		if (!(in_array($url[0], $check)) || !(in_array($url[1], $check)) || !(in_array($url[2], $check)) ) {
			redirect('/');
		}
		$check1=array('cm','meter','feet','mm','inches','km','mile','yard');
		$url2= $this->uri->segment(3);
		$url2=explode("-",$url2);
		if (empty(is_numeric($url2[0])) || !(in_array($url2[1], $check1))  ) {
			redirect('/'); 
		}
		if ($url[0] == 'cm') {
			if ($url[2] == 'inches') {
				$value = $num[0]/2.54;
			}elseif ($url[2] == 'feet') {
				$value=$num[0] / 30.48;
			}elseif ($url[2] == 'meter') {
				$value=$num[0] / 100;
			}elseif ($url[2] == 'km') {
				$value=$num[0] / 100000;
			}elseif ($url[2] == 'mm') {
				$value=$num[0] * 10;
			}elseif ($url[2] == 'mile') {
				$value=$num[0] / 160934.4;
			}elseif ($url[2] == 'yard') {
				$value=$num[0] / 91.44;
			}
		}elseif ($url[0] == 'inches') {
			if ($url[2] == 'cm') {
				$value = $num[0] * 2.54;
			}elseif ($url[2] == 'feet') {
				$value=$num[0] / 12;
			}elseif ($url[2] == 'meter') {
				$value=$num[0] / 39.37;
			}elseif ($url[2] == 'km') {
				$value=$num[0] * 0.0000254;
			}elseif ($url[2] == 'mm') {
				$value=$num[0] *  25.4;
			}elseif ($url[2] == 'mile') {
				$value=$num[0] / 63360;
			}elseif ($url[2] == 'yard') {
				$value=$num[0] / 36;
			}
		}elseif ($url[0] == 'meter') {
			if ($url[2] == 'cm') {
				$value = $num[0] * 100;
			}elseif ($url[2] == 'inches') {
				$value = $num[0]*39.37;
			}elseif ($url[2] == 'feet') {
				$value=$num[0] * 3.28;
			}elseif ($url[2] == 'km') {
				$value=$num[0] / 1000 ;
			}elseif ($url[2] == 'mm') {
				$value=$num[0] *  1000;
			}elseif ($url[2] == 'mile') {
				$value=$num[0] / 1609;
			}elseif ($url[2] == 'yard') {
				$value=$num[0] / 1.09;
			}
		}elseif ($url[0] == 'km') {
			if ($url[2] == 'cm') {
				$value = $num[0] * 100000;
			}elseif ($url[2] == 'inches') {
				$value = $num[0] * 39370;
			}elseif ($url[2] == 'feet') {
				$value=$num[0] * 3281;
			}elseif ($url[2] == 'meter') {
				$value=$num[0] * 1000 ;
			}elseif ($url[2] == 'mm') {
				$value=$num[0] *  1000000;
			}elseif ($url[2] == 'mile') {
				$value=$num[0] / 1.609;
			}elseif ($url[2] == 'yard') {
				$value=$num[0] * 1094;
			}
		}elseif ($url[0] == 'feet') {
			if ($url[2] == 'cm') {
				$value = $num[0] * 30.48;
			}elseif ($url[2] == 'inches') {
				$value = $num[0] * 12;
			}elseif ($url[2] == 'km') {
				$value=$num[0] / 3281;
			}elseif ($url[2] == 'meter') {
				$value=$num[0] / 3.281 ;
			}elseif ($url[2] == 'mm') {
				$value=$num[0] *  304.8;
			}elseif ($url[2] == 'mile') {
				$value=$num[0] / 5280;
			}elseif ($url[2] == 'yard') {
				$value=$num[0] / 3;
			}
		}elseif ($url[0] == 'mm') {
			if ($url[2] == 'cm') {
				$value = $num[0] / 10;
			}elseif ($url[2] == 'inches') {
				$value = $num[0] / 25.4;
			}elseif ($url[2] == 'km') {
				$value=$num[0] / 1000000;
			}elseif ($url[2] == 'meter') {
				$value=$num[0] / 1000 ;
			}elseif ($url[2] == 'feet') {
				$value=$num[0] /  304.8;
			}elseif ($url[2] == 'mile') {
				$value=$num[0] / 1609344;
			}elseif ($url[2] == 'yard') {
				$value=$num[0] / 914.4;
			}
		}elseif ($url[0] == 'mile') {
			if ($url[2] == 'cm') {
				$value = $num[0] * 160900;
			}elseif ($url[2] == 'inches') {
				$value = $num[0] * 63360;
			}elseif ($url[2] == 'km') {
				$value=$num[0] *  1.609 ;
			}elseif ($url[2] == 'meter') {
				$value=$num[0] * 1609 ;
			}elseif ($url[2] == 'feet') {
				$value=$num[0] *  5280;
			}elseif ($url[2] == 'mm') {
				$value=$num[0] * 1609344;
			}elseif ($url[2] == 'yard') {
				$value=$num[0] * 1760;
			}
		}elseif ($url[0] == 'yard') {
			if ($url[2] == 'cm') {
				$value = $num[0] * 91.44;
			}elseif ($url[2] == 'inches') {
				$value = $num[0] * 36;
			}elseif ($url[2] == 'km') {
				$value=$num[0] /  1094 ;
			}elseif ($url[2] == 'meter') {
				$value=$num[0] / 1.094 ;
			}elseif ($url[2] == 'feet') {
				$value=$num[0] *  3;
			}elseif ($url[2] == 'mm') {
				$value=$num[0] * 914.4;
			}elseif ($url[2] == 'mile') {
				$value=$num[0] / 1760
				;
			}
		}
		
		$value=number_format((float)$value, 3, '.', '');
		$data = array('value' => $value, 'num' => $num[0],'type'=>$url[2] , 'lenth' => $url[0]);
		$this->load->view('result',$data);
	}
	public function my_404(){
		redirect('/');
	}
}
