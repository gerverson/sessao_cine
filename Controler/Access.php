<?php

class Access{
	
	public function Acess_user(){
	//	echo "oiuser";
		if((isset($_SESSION['logado']))){
			if(!($_SESSION['tipo'] == 2)){
				echo "<script>location.href='../Admin/Home.php';</script>";
			}
		} else{
			echo "<script>location.href='../Auth/Login.php';</script>";
		}
	}
	
	public function Acess_admin(){
			// echo "oiadmin";
			if((isset($_SESSION['logado']))){
				if(!($_SESSION['tipo'] == 1)){
					echo "<script>location.href='../User/Home.php';</script>";
			}
		} else{
			echo "<script>location.href='../Auth/Login.php';</script>";
		}
	}
	
	public function Acess_login(){
	//	echo "oilogin";
					if((isset($_SESSION['logado']))){
				echo "<script>location.href='../../';</script>";;
			}
		}
	}