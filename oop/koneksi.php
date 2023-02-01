<?php 
class database{
 
	var $host = "localhost";
	var $uname = "root";
	var $pass = "";
	var $db = "marketplace";
 
    function tampil_data(){
        $host = mysqli_connect($this->host, $this->uname, $this->pass);     
		mysqli_select_db($host, $this->db);
		$data = mysqli_query($host, "select * from user");
		while($d = mysqli_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;
	}
    function input($nama,$alamat,$usia){
        $host = mysqli_connect($this->host, $this->uname, $this->pass);     
		mysqli_select_db($host, $this->db);
		mysqli_query($host, "insert into user values('','$nama','$alamat','$usia')");
	}
    function hapus($id){
        $host = mysqli_connect($this->host, $this->uname, $this->pass);     
		mysqli_select_db($host, $this->db);
		mysqli_query($host, "delete from user where id='$id'");
	}
 
} 
 
?>