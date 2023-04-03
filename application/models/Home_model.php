<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends CI_Model {

	public function __construct() {
		parent::__construct();
	}
	function validate($email,$password){
		$this->db->where('user_email',$email);
		$this->db->where('user_password',$password);
		$result = $this->db->get('tbl_users',1);
		return $result;
	  }

      function register($username,$password,$user_email,$level)
      {
          $data_user = array(
              'user_name'=>$username,
              'user_password'=>password_hash($password,PASSWORD_DEFAULT),
              'user_email'=>$user_email,
              'user_level'=>$level
          );
          $this->db->insert('tbl_users',$data_user);
      }

	//save picture data to db
	function store_pic_data($data){
		$insert_data['pic_title'] = $data['pic_title'];
		$insert_data['pic_desc'] = $data['pic_desc'];
		$insert_data['pic_file'] = $data['pic_file'];
		$insert_data['pic_time'] = $data['pic_time'];
		$insert_data['pic_date'] = $data['pic_date'];

		$query = $this->db->insert('file', $insert_data);
	}

	function filemanager(){
		return $this->db->get('file')->result_array();
	}

    function delete($tabel, $id){		
        $this->load->helper('file');
        $del = APPPATH. '../application/views/xlsm/';
        delete_files($del); //Fungsi Delete All File

		$this->db->where_in('id', $id);
		$this->db->truncate($tabel); //Fungsi Delete Ke Database
        $this->db->truncate('step_1');
        $this->db->truncate('step_2');
        $this->db->truncate('step_3');
        $this->db->truncate('step_4');
        $this->db->truncate('step_5');
        $this->db->truncate('proyeksi_revenue');
        $this->db->truncate('kk_44');
        $this->db->truncate('comp_summary_of_unsatisfied_po');
        $this->db->truncate('comp_adj_per_kontrak');
        $this->db->truncate('comp_adj_per_gl');
        $this->db->truncate('alokasi_cacl_per_bp_number');
			if ($this->db->where($tabel))
			{
				$val = 'Delete data berhasil'; 
			}else
			{
				$val = 'Delete data gagal';
			}
		return $val;
	}

    function get_graf_monthly_revenue_Jan_multi(){
        if (isset($_POST['submit'])) {  
            if(isset($_POST['dbs'])OR($_POST['des'])OR($_POST['dgs'])OR($_POST['reg1'])OR($_POST['reg2'])OR($_POST['reg3'])OR($_POST['reg4'])OR($_POST['reg5'])OR($_POST['reg6'])OR($_POST['reg7'])OR($_POST['sda'])AND($_POST['new'])OR($_POST['carry'])OR($_POST['accrue'])){
            $dbs=$_POST['dbs'];
            $des=$_POST['des'];
            $dgs=$_POST['dgs'];
            $reg1=$_POST['reg1'];
            $reg2=$_POST['reg2'];
            $reg3=$_POST['reg3'];
            $reg4=$_POST['reg4'];
            $reg5=$_POST['reg5'];
            $reg6=$_POST['reg6'];
            $reg7=$_POST['reg7'];
            $sda=$_POST['sda'];
            $new=$_POST['new'];
            $carry=$_POST['carry'];
            $accrue=$_POST['accrue'];
        $this->db->select("SUM(Column5_60) as jan");
		$this->db->from('step_5');
		$this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
        $this->db->or_where('Column46',"".$dbs."");
        $this->db->where('Column47',"".$new."");
        $this->db->or_where('Column46',"".$des."");
        $this->db->where('Column47',"".$new."");
        $this->db->or_where('Column46',"".$dgs."");
        $this->db->where('Column47',"".$new."");
        $this->db->or_where('Column46',"".$reg1."");
        $this->db->where('Column47',"".$new."");
        $this->db->or_where('Column46',"".$reg2."");
        $this->db->where('Column47',"".$new."");
        $this->db->or_where('Column46',"".$reg3."");
        $this->db->where('Column47',"".$new."");
        $this->db->or_where('Column46',"".$reg4."");
        $this->db->where('Column47',"".$new."");
        $this->db->or_where('Column46',"".$reg5."");
        $this->db->where('Column47',"".$new."");
        $this->db->or_where('Column46',"".$reg6."");
        $this->db->where('Column47',"".$new."");
        $this->db->or_where('Column46',"".$reg7."");
        $this->db->where('Column47',"".$new."");
        $this->db->or_where('Column46',"".$sda."");
        $this->db->where('Column47',"".$new."");
        
        $this->db->or_where('Column46',"".$dbs."");
        $this->db->where('Column47',"".$carry."");
        $this->db->or_where('Column46',"".$des."");
        $this->db->where('Column47',"".$carry."");
        $this->db->or_where('Column46',"".$dgs."");
        $this->db->where('Column47',"".$carry."");
        $this->db->or_where('Column46',"".$reg1."");
        $this->db->where('Column47',"".$carry."");
        $this->db->or_where('Column46',"".$reg2."");
        $this->db->where('Column47',"".$carry."");
        $this->db->or_where('Column46',"".$reg3."");
        $this->db->where('Column47',"".$carry."");
        $this->db->or_where('Column46',"".$reg4."");
        $this->db->where('Column47',"".$carry."");
        $this->db->or_where('Column46',"".$reg5."");
        $this->db->where('Column47',"".$carry."");
        $this->db->or_where('Column46',"".$reg6."");
        $this->db->where('Column47',"".$carry."");
        $this->db->or_where('Column46',"".$reg7."");
        $this->db->where('Column47',"".$carry."");
        $this->db->or_where('Column46',"".$sda."");
        $this->db->where('Column46',"".$sda."");
        $this->db->where('Column47',"".$carry."");

        $this->db->or_where('Column46',"".$dbs."");
        $this->db->where('Column47',"".$accrue."");
        $this->db->or_where('Column46',"".$des."");
        $this->db->where('Column47',"".$accrue."");
        $this->db->or_where('Column46',"".$dgs."");
        $this->db->where('Column47',"".$accrue."");
        $this->db->or_where('Column46',"".$reg1."");
        $this->db->where('Column47',"".$accrue."");
        $this->db->or_where('Column46',"".$reg2."");
        $this->db->where('Column47',"".$accrue."");
        $this->db->or_where('Column46',"".$reg3."");
        $this->db->where('Column47',"".$accrue."");
        $this->db->or_where('Column46',"".$reg4."");
        $this->db->where('Column47',"".$accrue."");
        $this->db->or_where('Column46',"".$reg5."");
        $this->db->where('Column47',"".$accrue."");
        $this->db->or_where('Column46',"".$reg6."");
        $this->db->where('Column47',"".$accrue."");
        $this->db->or_where('Column46',"".$reg7."");
        $this->db->where('Column47',"".$accrue."");
        $this->db->or_where('Column46',"".$sda."");
        $this->db->where('Column46',"".$sda."");
        $this->db->where('Column47',"".$accrue."");
        return $this->db->where('Column47',"".$accrue."")
            ->get()
            ->result();
                        }
    }

    if(isset($_POST['kirim'])){
        $dbs=$_POST['dbs'];
        $des=$_POST['des'];
        $dgs=$_POST['dgs'];
        $reg1=$_POST['reg1'];
        $reg2=$_POST['reg2'];
        $reg3=$_POST['reg3'];
        $reg4=$_POST['reg4'];
        $reg5=$_POST['reg5'];
        $reg6=$_POST['reg6'];
        $reg7=$_POST['reg7'];
        $sda=$_POST['sda'];
        $new=$_POST['new'];
        $carry=$_POST['carry'];
        $accrue=$_POST['accrue'];
    $this->db->select("SUM(Column5_60) as jan");
    $this->db->from('step_5');
    $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
    $this->db->or_where('Column46',"".$dbs."");
    $this->db->or_where('Column46',"".$des."");
    $this->db->or_where('Column46',"".$dgs."");
    $this->db->or_where('Column46',"".$reg1."");
    $this->db->or_where('Column46',"".$reg2."");
    $this->db->or_where('Column46',"".$reg3."");
    $this->db->or_where('Column46',"".$reg4."");
    $this->db->or_where('Column46',"".$reg5."");
    $this->db->or_where('Column46',"".$reg6."");
    $this->db->or_where('Column46',"".$reg7."");
    $this->db->or_where('Column46',"".$sda."");
    $this->db->or_where('Column47',"".$new."");
    $this->db->or_where('Column47',"".$carry."");
    return $this->db->or_where('Column47',"".$accrue."")
    ->get()
    ->result();
                    }
                }	
    function get_graf_monthly_revenue_Feb_multi(){
        if (isset($_POST['submit'])) {  
            if(isset($_POST['dbs'])OR($_POST['des'])OR($_POST['dgs'])OR($_POST['reg1'])OR($_POST['reg2'])OR($_POST['reg3'])OR($_POST['reg4'])OR($_POST['reg5'])OR($_POST['reg6'])OR($_POST['reg7'])OR($_POST['sda'])AND($_POST['new'])OR($_POST['carry'])OR($_POST['accrue'])){
            $dbs=$_POST['dbs'];
            $des=$_POST['des'];
            $dgs=$_POST['dgs'];
            $reg1=$_POST['reg1'];
            $reg2=$_POST['reg2'];
            $reg3=$_POST['reg3'];
            $reg4=$_POST['reg4'];
            $reg5=$_POST['reg5'];
            $reg6=$_POST['reg6'];
            $reg7=$_POST['reg7'];
            $sda=$_POST['sda'];
            $new=$_POST['new'];
            $carry=$_POST['carry'];
            $accrue=$_POST['accrue'];
        $this->db->select("SUM(Column5_61) as feb");
		$this->db->from('step_5');
		$this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
        $this->db->or_where('Column46',"".$dbs."");
        $this->db->where('Column47',"".$new."");
        $this->db->or_where('Column46',"".$des."");
        $this->db->where('Column47',"".$new."");
        $this->db->or_where('Column46',"".$dgs."");
        $this->db->where('Column47',"".$new."");
        $this->db->or_where('Column46',"".$reg1."");
        $this->db->where('Column47',"".$new."");
        $this->db->or_where('Column46',"".$reg2."");
        $this->db->where('Column47',"".$new."");
        $this->db->or_where('Column46',"".$reg3."");
        $this->db->where('Column47',"".$new."");
        $this->db->or_where('Column46',"".$reg4."");
        $this->db->where('Column47',"".$new."");
        $this->db->or_where('Column46',"".$reg5."");
        $this->db->where('Column47',"".$new."");
        $this->db->or_where('Column46',"".$reg6."");
        $this->db->where('Column47',"".$new."");
        $this->db->or_where('Column46',"".$reg7."");
        $this->db->where('Column47',"".$new."");
        $this->db->or_where('Column46',"".$sda."");
        $this->db->where('Column47',"".$new."");
        
        $this->db->or_where('Column46',"".$dbs."");
        $this->db->where('Column47',"".$carry."");
        $this->db->or_where('Column46',"".$des."");
        $this->db->where('Column47',"".$carry."");
        $this->db->or_where('Column46',"".$dgs."");
        $this->db->where('Column47',"".$carry."");
        $this->db->or_where('Column46',"".$reg1."");
        $this->db->where('Column47',"".$carry."");
        $this->db->or_where('Column46',"".$reg2."");
        $this->db->where('Column47',"".$carry."");
        $this->db->or_where('Column46',"".$reg3."");
        $this->db->where('Column47',"".$carry."");
        $this->db->or_where('Column46',"".$reg4."");
        $this->db->where('Column47',"".$carry."");
        $this->db->or_where('Column46',"".$reg5."");
        $this->db->where('Column47',"".$carry."");
        $this->db->or_where('Column46',"".$reg6."");
        $this->db->where('Column47',"".$carry."");
        $this->db->or_where('Column46',"".$reg7."");
        $this->db->where('Column47',"".$carry."");
        $this->db->or_where('Column46',"".$sda."");
        $this->db->where('Column46',"".$sda."");
        $this->db->where('Column47',"".$carry."");

        $this->db->or_where('Column46',"".$dbs."");
        $this->db->where('Column47',"".$accrue."");
        $this->db->or_where('Column46',"".$des."");
        $this->db->where('Column47',"".$accrue."");
        $this->db->or_where('Column46',"".$dgs."");
        $this->db->where('Column47',"".$accrue."");
        $this->db->or_where('Column46',"".$reg1."");
        $this->db->where('Column47',"".$accrue."");
        $this->db->or_where('Column46',"".$reg2."");
        $this->db->where('Column47',"".$accrue."");
        $this->db->or_where('Column46',"".$reg3."");
        $this->db->where('Column47',"".$accrue."");
        $this->db->or_where('Column46',"".$reg4."");
        $this->db->where('Column47',"".$accrue."");
        $this->db->or_where('Column46',"".$reg5."");
        $this->db->where('Column47',"".$accrue."");
        $this->db->or_where('Column46',"".$reg6."");
        $this->db->where('Column47',"".$accrue."");
        $this->db->or_where('Column46',"".$reg7."");
        $this->db->where('Column47',"".$accrue."");
        $this->db->or_where('Column46',"".$sda."");
        $this->db->where('Column46',"".$sda."");
        $this->db->where('Column47',"".$accrue."");
        return $this->db->where('Column47',"".$accrue."")
            ->get()
            ->result();
                        }
    }

    if(isset($_POST['kirim'])){
        $dbs=$_POST['dbs'];
        $des=$_POST['des'];
        $dgs=$_POST['dgs'];
        $reg1=$_POST['reg1'];
        $reg2=$_POST['reg2'];
        $reg3=$_POST['reg3'];
        $reg4=$_POST['reg4'];
        $reg5=$_POST['reg5'];
        $reg6=$_POST['reg6'];
        $reg7=$_POST['reg7'];
        $sda=$_POST['sda'];
        $new=$_POST['new'];
        $carry=$_POST['carry'];
        $accrue=$_POST['accrue'];
    $this->db->select("SUM(Column5_61) as feb");
    $this->db->from('step_5');
    $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
    $this->db->or_where('Column46',"".$dbs."");
    $this->db->or_where('Column46',"".$des."");
    $this->db->or_where('Column46',"".$dgs."");
    $this->db->or_where('Column46',"".$reg1."");
    $this->db->or_where('Column46',"".$reg2."");
    $this->db->or_where('Column46',"".$reg3."");
    $this->db->or_where('Column46',"".$reg4."");
    $this->db->or_where('Column46',"".$reg5."");
    $this->db->or_where('Column46',"".$reg6."");
    $this->db->or_where('Column46',"".$reg7."");
    $this->db->or_where('Column46',"".$sda."");
    $this->db->or_where('Column46',"".$sda."");
    $this->db->or_where('Column47',"".$new."");
    $this->db->or_where('Column47',"".$carry."");
    return $this->db->or_where('Column47',"".$accrue."")
    ->get()
    ->result();
                    }
                }

	function get_graf_monthly_revenue_Mar_multi(){
          if (isset($_POST['submit'])) {  
            if(isset($_POST['dbs'])OR($_POST['des'])OR($_POST['dgs'])OR($_POST['reg1'])OR($_POST['reg2'])OR($_POST['reg3'])OR($_POST['reg4'])OR($_POST['reg5'])OR($_POST['reg6'])OR($_POST['reg7'])OR($_POST['sda'])AND($_POST['new'])OR($_POST['carry'])OR($_POST['accrue'])){
            $dbs=$_POST['dbs'];
            $des=$_POST['des'];
            $dgs=$_POST['dgs'];
            $reg1=$_POST['reg1'];
            $reg2=$_POST['reg2'];
            $reg3=$_POST['reg3'];
            $reg4=$_POST['reg4'];
            $reg5=$_POST['reg5'];
            $reg6=$_POST['reg6'];
            $reg7=$_POST['reg7'];
            $sda=$_POST['sda'];
            $new=$_POST['new'];
            $carry=$_POST['carry'];
            $accrue=$_POST['accrue'];
        $this->db->select("SUM(Column5_62) as mar");
		$this->db->from('step_5');
		$this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
        $this->db->or_where('Column46',"".$dbs."");
        $this->db->where('Column47',"".$new."");
        $this->db->or_where('Column46',"".$des."");
        $this->db->where('Column47',"".$new."");
        $this->db->or_where('Column46',"".$dgs."");
        $this->db->where('Column47',"".$new."");
        $this->db->or_where('Column46',"".$reg1."");
        $this->db->where('Column47',"".$new."");
        $this->db->or_where('Column46',"".$reg2."");
        $this->db->where('Column47',"".$new."");
        $this->db->or_where('Column46',"".$reg3."");
        $this->db->where('Column47',"".$new."");
        $this->db->or_where('Column46',"".$reg4."");
        $this->db->where('Column47',"".$new."");
        $this->db->or_where('Column46',"".$reg5."");
        $this->db->where('Column47',"".$new."");
        $this->db->or_where('Column46',"".$reg6."");
        $this->db->where('Column47',"".$new."");
        $this->db->or_where('Column46',"".$reg7."");
        $this->db->where('Column47',"".$new."");
        $this->db->or_where('Column46',"".$sda."");
        $this->db->where('Column47',"".$new."");
        
        $this->db->or_where('Column46',"".$dbs."");
        $this->db->where('Column47',"".$carry."");
        $this->db->or_where('Column46',"".$des."");
        $this->db->where('Column47',"".$carry."");
        $this->db->or_where('Column46',"".$dgs."");
        $this->db->where('Column47',"".$carry."");
        $this->db->or_where('Column46',"".$reg1."");
        $this->db->where('Column47',"".$carry."");
        $this->db->or_where('Column46',"".$reg2."");
        $this->db->where('Column47',"".$carry."");
        $this->db->or_where('Column46',"".$reg3."");
        $this->db->where('Column47',"".$carry."");
        $this->db->or_where('Column46',"".$reg4."");
        $this->db->where('Column47',"".$carry."");
        $this->db->or_where('Column46',"".$reg5."");
        $this->db->where('Column47',"".$carry."");
        $this->db->or_where('Column46',"".$reg6."");
        $this->db->where('Column47',"".$carry."");
        $this->db->or_where('Column46',"".$reg7."");
        $this->db->where('Column47',"".$carry."");
        $this->db->or_where('Column46',"".$sda."");
        $this->db->where('Column46',"".$sda."");
        $this->db->where('Column47',"".$carry."");

        $this->db->or_where('Column46',"".$dbs."");
        $this->db->where('Column47',"".$accrue."");
        $this->db->or_where('Column46',"".$des."");
        $this->db->where('Column47',"".$accrue."");
        $this->db->or_where('Column46',"".$dgs."");
        $this->db->where('Column47',"".$accrue."");
        $this->db->or_where('Column46',"".$reg1."");
        $this->db->where('Column47',"".$accrue."");
        $this->db->or_where('Column46',"".$reg2."");
        $this->db->where('Column47',"".$accrue."");
        $this->db->or_where('Column46',"".$reg3."");
        $this->db->where('Column47',"".$accrue."");
        $this->db->or_where('Column46',"".$reg4."");
        $this->db->where('Column47',"".$accrue."");
        $this->db->or_where('Column46',"".$reg5."");
        $this->db->where('Column47',"".$accrue."");
        $this->db->or_where('Column46',"".$reg6."");
        $this->db->where('Column47',"".$accrue."");
        $this->db->or_where('Column46',"".$reg7."");
        $this->db->where('Column47',"".$accrue."");
        $this->db->or_where('Column46',"".$sda."");
        $this->db->where('Column46',"".$sda."");
        $this->db->where('Column47',"".$accrue."");
        return $this->db->where('Column47',"".$accrue."")
            ->get()
            ->result();
                        }
    }

    if(isset($_POST['kirim'])){
        $dbs=$_POST['dbs'];
        $des=$_POST['des'];
        $dgs=$_POST['dgs'];
        $reg1=$_POST['reg1'];
        $reg2=$_POST['reg2'];
        $reg3=$_POST['reg3'];
        $reg4=$_POST['reg4'];
        $reg5=$_POST['reg5'];
        $reg6=$_POST['reg6'];
        $reg7=$_POST['reg7'];
        $sda=$_POST['sda'];
        $new=$_POST['new'];
        $carry=$_POST['carry'];
        $accrue=$_POST['accrue'];
	$this->db->select("SUM(Column5_62) as mar");
    $this->db->from('step_5');
    $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
    $this->db->or_where('Column46',"".$dbs."");
    $this->db->or_where('Column46',"".$des."");
    $this->db->or_where('Column46',"".$dgs."");
    $this->db->or_where('Column46',"".$reg1."");
    $this->db->or_where('Column46',"".$reg2."");
    $this->db->or_where('Column46',"".$reg3."");
    $this->db->or_where('Column46',"".$reg4."");
    $this->db->or_where('Column46',"".$reg5."");
    $this->db->or_where('Column46',"".$reg6."");
    $this->db->or_where('Column46',"".$reg7."");
    $this->db->or_where('Column46',"".$sda."");
    $this->db->or_where('Column46',"".$sda."");
    $this->db->or_where('Column47',"".$new."");
    $this->db->or_where('Column47',"".$carry."");
    return $this->db->or_where('Column47',"".$accrue."")
    ->get()
    ->result();
                    }

	}
	
	function get_graf_monthly_revenue_Apr_multi(){
        if (isset($_POST['submit'])) {  
            if(isset($_POST['dbs'])OR($_POST['des'])OR($_POST['dgs'])OR($_POST['reg1'])OR($_POST['reg2'])OR($_POST['reg3'])OR($_POST['reg4'])OR($_POST['reg5'])OR($_POST['reg6'])OR($_POST['reg7'])OR($_POST['sda'])AND($_POST['new'])OR($_POST['carry'])OR($_POST['accrue'])){
            $dbs=$_POST['dbs'];
            $des=$_POST['des'];
            $dgs=$_POST['dgs'];
            $reg1=$_POST['reg1'];
            $reg2=$_POST['reg2'];
            $reg3=$_POST['reg3'];
            $reg4=$_POST['reg4'];
            $reg5=$_POST['reg5'];
            $reg6=$_POST['reg6'];
            $reg7=$_POST['reg7'];
            $sda=$_POST['sda'];
            $new=$_POST['new'];
            $carry=$_POST['carry'];
            $accrue=$_POST['accrue'];
        $this->db->select("SUM(Column5_64) as apr");
		$this->db->from('step_5');
		$this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
        $this->db->or_where('Column46',"".$dbs."");
        $this->db->where('Column47',"".$new."");
        $this->db->or_where('Column46',"".$des."");
        $this->db->where('Column47',"".$new."");
        $this->db->or_where('Column46',"".$dgs."");
        $this->db->where('Column47',"".$new."");
        $this->db->or_where('Column46',"".$reg1."");
        $this->db->where('Column47',"".$new."");
        $this->db->or_where('Column46',"".$reg2."");
        $this->db->where('Column47',"".$new."");
        $this->db->or_where('Column46',"".$reg3."");
        $this->db->where('Column47',"".$new."");
        $this->db->or_where('Column46',"".$reg4."");
        $this->db->where('Column47',"".$new."");
        $this->db->or_where('Column46',"".$reg5."");
        $this->db->where('Column47',"".$new."");
        $this->db->or_where('Column46',"".$reg6."");
        $this->db->where('Column47',"".$new."");
        $this->db->or_where('Column46',"".$reg7."");
        $this->db->where('Column47',"".$new."");
        $this->db->or_where('Column46',"".$sda."");
        $this->db->where('Column47',"".$new."");
        
        $this->db->or_where('Column46',"".$dbs."");
        $this->db->where('Column47',"".$carry."");
        $this->db->or_where('Column46',"".$des."");
        $this->db->where('Column47',"".$carry."");
        $this->db->or_where('Column46',"".$dgs."");
        $this->db->where('Column47',"".$carry."");
        $this->db->or_where('Column46',"".$reg1."");
        $this->db->where('Column47',"".$carry."");
        $this->db->or_where('Column46',"".$reg2."");
        $this->db->where('Column47',"".$carry."");
        $this->db->or_where('Column46',"".$reg3."");
        $this->db->where('Column47',"".$carry."");
        $this->db->or_where('Column46',"".$reg4."");
        $this->db->where('Column47',"".$carry."");
        $this->db->or_where('Column46',"".$reg5."");
        $this->db->where('Column47',"".$carry."");
        $this->db->or_where('Column46',"".$reg6."");
        $this->db->where('Column47',"".$carry."");
        $this->db->or_where('Column46',"".$reg7."");
        $this->db->where('Column47',"".$carry."");
        $this->db->or_where('Column46',"".$sda."");
        $this->db->where('Column46',"".$sda."");
        $this->db->where('Column47',"".$carry."");

        $this->db->or_where('Column46',"".$dbs."");
        $this->db->where('Column47',"".$accrue."");
        $this->db->or_where('Column46',"".$des."");
        $this->db->where('Column47',"".$accrue."");
        $this->db->or_where('Column46',"".$dgs."");
        $this->db->where('Column47',"".$accrue."");
        $this->db->or_where('Column46',"".$reg1."");
        $this->db->where('Column47',"".$accrue."");
        $this->db->or_where('Column46',"".$reg2."");
        $this->db->where('Column47',"".$accrue."");
        $this->db->or_where('Column46',"".$reg3."");
        $this->db->where('Column47',"".$accrue."");
        $this->db->or_where('Column46',"".$reg4."");
        $this->db->where('Column47',"".$accrue."");
        $this->db->or_where('Column46',"".$reg5."");
        $this->db->where('Column47',"".$accrue."");
        $this->db->or_where('Column46',"".$reg6."");
        $this->db->where('Column47',"".$accrue."");
        $this->db->or_where('Column46',"".$reg7."");
        $this->db->where('Column47',"".$accrue."");
        $this->db->or_where('Column46',"".$sda."");
        $this->db->where('Column46',"".$sda."");
        $this->db->where('Column47',"".$accrue."");
        return $this->db->where('Column47',"".$accrue."")
            ->get()
            ->result();
                        }
    }

    if(isset($_POST['kirim'])){
        $dbs=$_POST['dbs'];
        $des=$_POST['des'];
        $dgs=$_POST['dgs'];
        $reg1=$_POST['reg1'];
        $reg2=$_POST['reg2'];
        $reg3=$_POST['reg3'];
        $reg4=$_POST['reg4'];
        $reg5=$_POST['reg5'];
        $reg6=$_POST['reg6'];
        $reg7=$_POST['reg7'];
        $sda=$_POST['sda'];
        $new=$_POST['new'];
        $carry=$_POST['carry'];
        $accrue=$_POST['accrue'];
	$this->db->select("SUM(Column5_64) as apr");
    $this->db->from('step_5');
    $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
    $this->db->or_where('Column46',"".$dbs."");
    $this->db->or_where('Column46',"".$des."");
    $this->db->or_where('Column46',"".$dgs."");
    $this->db->or_where('Column46',"".$reg1."");
    $this->db->or_where('Column46',"".$reg2."");
    $this->db->or_where('Column46',"".$reg3."");
    $this->db->or_where('Column46',"".$reg4."");
    $this->db->or_where('Column46',"".$reg5."");
    $this->db->or_where('Column46',"".$reg6."");
    $this->db->or_where('Column46',"".$reg7."");
    $this->db->or_where('Column46',"".$sda."");
    $this->db->or_where('Column46',"".$sda."");
    $this->db->or_where('Column47',"".$new."");
    $this->db->or_where('Column47',"".$carry."");
    return $this->db->or_where('Column47',"".$accrue."")
    ->get()
    ->result();
                    }
	}
	
	function get_graf_monthly_revenue_Mei_multi(){
        if (isset($_POST['submit'])) {  
            if(isset($_POST['dbs'])OR($_POST['des'])OR($_POST['dgs'])OR($_POST['reg1'])OR($_POST['reg2'])OR($_POST['reg3'])OR($_POST['reg4'])OR($_POST['reg5'])OR($_POST['reg6'])OR($_POST['reg7'])OR($_POST['sda'])AND($_POST['new'])OR($_POST['carry'])OR($_POST['accrue'])){
            $dbs=$_POST['dbs'];
            $des=$_POST['des'];
            $dgs=$_POST['dgs'];
            $reg1=$_POST['reg1'];
            $reg2=$_POST['reg2'];
            $reg3=$_POST['reg3'];
            $reg4=$_POST['reg4'];
            $reg5=$_POST['reg5'];
            $reg6=$_POST['reg6'];
            $reg7=$_POST['reg7'];
            $sda=$_POST['sda'];
            $new=$_POST['new'];
            $carry=$_POST['carry'];
            $accrue=$_POST['accrue'];
        $this->db->select("SUM(Column5_65) as mei");
		$this->db->from('step_5');
		$this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
        $this->db->or_where('Column46',"".$dbs."");
        $this->db->where('Column47',"".$new."");
        $this->db->or_where('Column46',"".$des."");
        $this->db->where('Column47',"".$new."");
        $this->db->or_where('Column46',"".$dgs."");
        $this->db->where('Column47',"".$new."");
        $this->db->or_where('Column46',"".$reg1."");
        $this->db->where('Column47',"".$new."");
        $this->db->or_where('Column46',"".$reg2."");
        $this->db->where('Column47',"".$new."");
        $this->db->or_where('Column46',"".$reg3."");
        $this->db->where('Column47',"".$new."");
        $this->db->or_where('Column46',"".$reg4."");
        $this->db->where('Column47',"".$new."");
        $this->db->or_where('Column46',"".$reg5."");
        $this->db->where('Column47',"".$new."");
        $this->db->or_where('Column46',"".$reg6."");
        $this->db->where('Column47',"".$new."");
        $this->db->or_where('Column46',"".$reg7."");
        $this->db->where('Column47',"".$new."");
        $this->db->or_where('Column46',"".$sda."");
        $this->db->where('Column47',"".$new."");
        
        $this->db->or_where('Column46',"".$dbs."");
        $this->db->where('Column47',"".$carry."");
        $this->db->or_where('Column46',"".$des."");
        $this->db->where('Column47',"".$carry."");
        $this->db->or_where('Column46',"".$dgs."");
        $this->db->where('Column47',"".$carry."");
        $this->db->or_where('Column46',"".$reg1."");
        $this->db->where('Column47',"".$carry."");
        $this->db->or_where('Column46',"".$reg2."");
        $this->db->where('Column47',"".$carry."");
        $this->db->or_where('Column46',"".$reg3."");
        $this->db->where('Column47',"".$carry."");
        $this->db->or_where('Column46',"".$reg4."");
        $this->db->where('Column47',"".$carry."");
        $this->db->or_where('Column46',"".$reg5."");
        $this->db->where('Column47',"".$carry."");
        $this->db->or_where('Column46',"".$reg6."");
        $this->db->where('Column47',"".$carry."");
        $this->db->or_where('Column46',"".$reg7."");
        $this->db->where('Column47',"".$carry."");
        $this->db->or_where('Column46',"".$sda."");
        $this->db->where('Column46',"".$sda."");
        $this->db->where('Column47',"".$carry."");

        $this->db->or_where('Column46',"".$dbs."");
        $this->db->where('Column47',"".$accrue."");
        $this->db->or_where('Column46',"".$des."");
        $this->db->where('Column47',"".$accrue."");
        $this->db->or_where('Column46',"".$dgs."");
        $this->db->where('Column47',"".$accrue."");
        $this->db->or_where('Column46',"".$reg1."");
        $this->db->where('Column47',"".$accrue."");
        $this->db->or_where('Column46',"".$reg2."");
        $this->db->where('Column47',"".$accrue."");
        $this->db->or_where('Column46',"".$reg3."");
        $this->db->where('Column47',"".$accrue."");
        $this->db->or_where('Column46',"".$reg4."");
        $this->db->where('Column47',"".$accrue."");
        $this->db->or_where('Column46',"".$reg5."");
        $this->db->where('Column47',"".$accrue."");
        $this->db->or_where('Column46',"".$reg6."");
        $this->db->where('Column47',"".$accrue."");
        $this->db->or_where('Column46',"".$reg7."");
        $this->db->where('Column47',"".$accrue."");
        $this->db->or_where('Column46',"".$sda."");
        $this->db->where('Column46',"".$sda."");
        $this->db->where('Column47',"".$accrue."");
        return $this->db->where('Column47',"".$accrue."")
            ->get()
            ->result();
                        }
    }

    if(isset($_POST['kirim'])){
        $dbs=$_POST['dbs'];
        $des=$_POST['des'];
        $dgs=$_POST['dgs'];
        $reg1=$_POST['reg1'];
        $reg2=$_POST['reg2'];
        $reg3=$_POST['reg3'];
        $reg4=$_POST['reg4'];
        $reg5=$_POST['reg5'];
        $reg6=$_POST['reg6'];
        $reg7=$_POST['reg7'];
        $sda=$_POST['sda'];
        $new=$_POST['new'];
        $carry=$_POST['carry'];
        $accrue=$_POST['accrue'];
	$this->db->select("SUM(Column5_65) as mei");
    $this->db->from('step_5');
    $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
    $this->db->or_where('Column46',"".$dbs."");
    $this->db->or_where('Column46',"".$des."");
    $this->db->or_where('Column46',"".$dgs."");
    $this->db->or_where('Column46',"".$reg1."");
    $this->db->or_where('Column46',"".$reg2."");
    $this->db->or_where('Column46',"".$reg3."");
    $this->db->or_where('Column46',"".$reg4."");
    $this->db->or_where('Column46',"".$reg5."");
    $this->db->or_where('Column46',"".$reg6."");
    $this->db->or_where('Column46',"".$reg7."");
    $this->db->or_where('Column46',"".$sda."");
    $this->db->or_where('Column46',"".$sda."");
    $this->db->or_where('Column47',"".$new."");
    $this->db->or_where('Column47',"".$carry."");
    return $this->db->or_where('Column47',"".$accrue."")
    ->get()
    ->result();
                    }
	}
	
	function get_graf_monthly_revenue_jun_multi(){
        if (isset($_POST['submit'])) {  
            if(isset($_POST['dbs'])OR($_POST['des'])OR($_POST['dgs'])OR($_POST['reg1'])OR($_POST['reg2'])OR($_POST['reg3'])OR($_POST['reg4'])OR($_POST['reg5'])OR($_POST['reg6'])OR($_POST['reg7'])OR($_POST['sda'])AND($_POST['new'])OR($_POST['carry'])OR($_POST['accrue'])){
            $dbs=$_POST['dbs'];
            $des=$_POST['des'];
            $dgs=$_POST['dgs'];
            $reg1=$_POST['reg1'];
            $reg2=$_POST['reg2'];
            $reg3=$_POST['reg3'];
            $reg4=$_POST['reg4'];
            $reg5=$_POST['reg5'];
            $reg6=$_POST['reg6'];
            $reg7=$_POST['reg7'];
            $sda=$_POST['sda'];
            $new=$_POST['new'];
            $carry=$_POST['carry'];
            $accrue=$_POST['accrue'];
		$this->db->select("SUM(Column5_66) as jun");
		$this->db->from('step_5');
		$this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
        $this->db->or_where('Column46',"".$dbs."");
        $this->db->where('Column47',"".$new."");
        $this->db->or_where('Column46',"".$des."");
        $this->db->where('Column47',"".$new."");
        $this->db->or_where('Column46',"".$dgs."");
        $this->db->where('Column47',"".$new."");
        $this->db->or_where('Column46',"".$reg1."");
        $this->db->where('Column47',"".$new."");
        $this->db->or_where('Column46',"".$reg2."");
        $this->db->where('Column47',"".$new."");
        $this->db->or_where('Column46',"".$reg3."");
        $this->db->where('Column47',"".$new."");
        $this->db->or_where('Column46',"".$reg4."");
        $this->db->where('Column47',"".$new."");
        $this->db->or_where('Column46',"".$reg5."");
        $this->db->where('Column47',"".$new."");
        $this->db->or_where('Column46',"".$reg6."");
        $this->db->where('Column47',"".$new."");
        $this->db->or_where('Column46',"".$reg7."");
        $this->db->where('Column47',"".$new."");
        $this->db->or_where('Column46',"".$sda."");
        $this->db->where('Column47',"".$new."");
        
        $this->db->or_where('Column46',"".$dbs."");
        $this->db->where('Column47',"".$carry."");
        $this->db->or_where('Column46',"".$des."");
        $this->db->where('Column47',"".$carry."");
        $this->db->or_where('Column46',"".$dgs."");
        $this->db->where('Column47',"".$carry."");
        $this->db->or_where('Column46',"".$reg1."");
        $this->db->where('Column47',"".$carry."");
        $this->db->or_where('Column46',"".$reg2."");
        $this->db->where('Column47',"".$carry."");
        $this->db->or_where('Column46',"".$reg3."");
        $this->db->where('Column47',"".$carry."");
        $this->db->or_where('Column46',"".$reg4."");
        $this->db->where('Column47',"".$carry."");
        $this->db->or_where('Column46',"".$reg5."");
        $this->db->where('Column47',"".$carry."");
        $this->db->or_where('Column46',"".$reg6."");
        $this->db->where('Column47',"".$carry."");
        $this->db->or_where('Column46',"".$reg7."");
        $this->db->where('Column47',"".$carry."");
        $this->db->or_where('Column46',"".$sda."");
        $this->db->where('Column46',"".$sda."");
        $this->db->where('Column47',"".$carry."");

        $this->db->or_where('Column46',"".$dbs."");
        $this->db->where('Column47',"".$accrue."");
        $this->db->or_where('Column46',"".$des."");
        $this->db->where('Column47',"".$accrue."");
        $this->db->or_where('Column46',"".$dgs."");
        $this->db->where('Column47',"".$accrue."");
        $this->db->or_where('Column46',"".$reg1."");
        $this->db->where('Column47',"".$accrue."");
        $this->db->or_where('Column46',"".$reg2."");
        $this->db->where('Column47',"".$accrue."");
        $this->db->or_where('Column46',"".$reg3."");
        $this->db->where('Column47',"".$accrue."");
        $this->db->or_where('Column46',"".$reg4."");
        $this->db->where('Column47',"".$accrue."");
        $this->db->or_where('Column46',"".$reg5."");
        $this->db->where('Column47',"".$accrue."");
        $this->db->or_where('Column46',"".$reg6."");
        $this->db->where('Column47',"".$accrue."");
        $this->db->or_where('Column46',"".$reg7."");
        $this->db->where('Column47',"".$accrue."");
        $this->db->or_where('Column46',"".$sda."");
        $this->db->where('Column46',"".$sda."");
        $this->db->where('Column47',"".$accrue."");
        return $this->db->where('Column47',"".$accrue."")
            ->get()
            ->result();
                        }
    }

    if(isset($_POST['kirim'])){
        $dbs=$_POST['dbs'];
        $des=$_POST['des'];
        $dgs=$_POST['dgs'];
        $reg1=$_POST['reg1'];
        $reg2=$_POST['reg2'];
        $reg3=$_POST['reg3'];
        $reg4=$_POST['reg4'];
        $reg5=$_POST['reg5'];
        $reg6=$_POST['reg6'];
        $reg7=$_POST['reg7'];
        $sda=$_POST['sda'];
        $new=$_POST['new'];
        $carry=$_POST['carry'];
        $accrue=$_POST['accrue'];
	$this->db->select("SUM(Column5_66) as jun");
    $this->db->from('step_5');
    $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
    $this->db->or_where('Column46',"".$dbs."");
    $this->db->or_where('Column46',"".$des."");
    $this->db->or_where('Column46',"".$dgs."");
    $this->db->or_where('Column46',"".$reg1."");
    $this->db->or_where('Column46',"".$reg2."");
    $this->db->or_where('Column46',"".$reg3."");
    $this->db->or_where('Column46',"".$reg4."");
    $this->db->or_where('Column46',"".$reg5."");
    $this->db->or_where('Column46',"".$reg6."");
    $this->db->or_where('Column46',"".$reg7."");
    $this->db->or_where('Column46',"".$sda."");
    $this->db->or_where('Column46',"".$sda."");
    $this->db->or_where('Column47',"".$new."");
    $this->db->or_where('Column47',"".$carry."");
    return $this->db->or_where('Column47',"".$accrue."")
    ->get()
    ->result();
                    }
	}
	
	function get_graf_monthly_revenue_Jul_multi(){
        if (isset($_POST['submit'])) {  
            if(isset($_POST['dbs'])OR($_POST['des'])OR($_POST['dgs'])OR($_POST['reg1'])OR($_POST['reg2'])OR($_POST['reg3'])OR($_POST['reg4'])OR($_POST['reg5'])OR($_POST['reg6'])OR($_POST['reg7'])OR($_POST['sda'])AND($_POST['new'])OR($_POST['carry'])OR($_POST['accrue'])){
            $dbs=$_POST['dbs'];
            $des=$_POST['des'];
            $dgs=$_POST['dgs'];
            $reg1=$_POST['reg1'];
            $reg2=$_POST['reg2'];
            $reg3=$_POST['reg3'];
            $reg4=$_POST['reg4'];
            $reg5=$_POST['reg5'];
            $reg6=$_POST['reg6'];
            $reg7=$_POST['reg7'];
            $sda=$_POST['sda'];
            $new=$_POST['new'];
            $carry=$_POST['carry'];
            $accrue=$_POST['accrue'];
        $this->db->select("SUM(Column5_68) as jul");
		$this->db->from('step_5');
		$this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
        $this->db->or_where('Column46',"".$dbs."");
        $this->db->where('Column47',"".$new."");
        $this->db->or_where('Column46',"".$des."");
        $this->db->where('Column47',"".$new."");
        $this->db->or_where('Column46',"".$dgs."");
        $this->db->where('Column47',"".$new."");
        $this->db->or_where('Column46',"".$reg1."");
        $this->db->where('Column47',"".$new."");
        $this->db->or_where('Column46',"".$reg2."");
        $this->db->where('Column47',"".$new."");
        $this->db->or_where('Column46',"".$reg3."");
        $this->db->where('Column47',"".$new."");
        $this->db->or_where('Column46',"".$reg4."");
        $this->db->where('Column47',"".$new."");
        $this->db->or_where('Column46',"".$reg5."");
        $this->db->where('Column47',"".$new."");
        $this->db->or_where('Column46',"".$reg6."");
        $this->db->where('Column47',"".$new."");
        $this->db->or_where('Column46',"".$reg7."");
        $this->db->where('Column47',"".$new."");
        $this->db->or_where('Column46',"".$sda."");
        $this->db->where('Column47',"".$new."");
        
        $this->db->or_where('Column46',"".$dbs."");
        $this->db->where('Column47',"".$carry."");
        $this->db->or_where('Column46',"".$des."");
        $this->db->where('Column47',"".$carry."");
        $this->db->or_where('Column46',"".$dgs."");
        $this->db->where('Column47',"".$carry."");
        $this->db->or_where('Column46',"".$reg1."");
        $this->db->where('Column47',"".$carry."");
        $this->db->or_where('Column46',"".$reg2."");
        $this->db->where('Column47',"".$carry."");
        $this->db->or_where('Column46',"".$reg3."");
        $this->db->where('Column47',"".$carry."");
        $this->db->or_where('Column46',"".$reg4."");
        $this->db->where('Column47',"".$carry."");
        $this->db->or_where('Column46',"".$reg5."");
        $this->db->where('Column47',"".$carry."");
        $this->db->or_where('Column46',"".$reg6."");
        $this->db->where('Column47',"".$carry."");
        $this->db->or_where('Column46',"".$reg7."");
        $this->db->where('Column47',"".$carry."");
        $this->db->or_where('Column46',"".$sda."");
        $this->db->where('Column46',"".$sda."");
        $this->db->where('Column47',"".$carry."");

        $this->db->or_where('Column46',"".$dbs."");
        $this->db->where('Column47',"".$accrue."");
        $this->db->or_where('Column46',"".$des."");
        $this->db->where('Column47',"".$accrue."");
        $this->db->or_where('Column46',"".$dgs."");
        $this->db->where('Column47',"".$accrue."");
        $this->db->or_where('Column46',"".$reg1."");
        $this->db->where('Column47',"".$accrue."");
        $this->db->or_where('Column46',"".$reg2."");
        $this->db->where('Column47',"".$accrue."");
        $this->db->or_where('Column46',"".$reg3."");
        $this->db->where('Column47',"".$accrue."");
        $this->db->or_where('Column46',"".$reg4."");
        $this->db->where('Column47',"".$accrue."");
        $this->db->or_where('Column46',"".$reg5."");
        $this->db->where('Column47',"".$accrue."");
        $this->db->or_where('Column46',"".$reg6."");
        $this->db->where('Column47',"".$accrue."");
        $this->db->or_where('Column46',"".$reg7."");
        $this->db->where('Column47',"".$accrue."");
        $this->db->or_where('Column46',"".$sda."");
        $this->db->where('Column46',"".$sda."");
        $this->db->where('Column47',"".$accrue."");
        return $this->db->where('Column47',"".$accrue."")
            ->get()
            ->result();
                        }
    }

    if(isset($_POST['kirim'])){
        $dbs=$_POST['dbs'];
        $des=$_POST['des'];
        $dgs=$_POST['dgs'];
        $reg1=$_POST['reg1'];
        $reg2=$_POST['reg2'];
        $reg3=$_POST['reg3'];
        $reg4=$_POST['reg4'];
        $reg5=$_POST['reg5'];
        $reg6=$_POST['reg6'];
        $reg7=$_POST['reg7'];
        $sda=$_POST['sda'];
        $new=$_POST['new'];
        $carry=$_POST['carry'];
        $accrue=$_POST['accrue'];
	$this->db->select("SUM(Column5_68) as jul");
    $this->db->from('step_5');
    $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
    $this->db->or_where('Column46',"".$dbs."");
    $this->db->or_where('Column46',"".$des."");
    $this->db->or_where('Column46',"".$dgs."");
    $this->db->or_where('Column46',"".$reg1."");
    $this->db->or_where('Column46',"".$reg2."");
    $this->db->or_where('Column46',"".$reg3."");
    $this->db->or_where('Column46',"".$reg4."");
    $this->db->or_where('Column46',"".$reg5."");
    $this->db->or_where('Column46',"".$reg6."");
    $this->db->or_where('Column46',"".$reg7."");
    $this->db->or_where('Column46',"".$sda."");
    $this->db->or_where('Column46',"".$sda."");
    $this->db->or_where('Column47',"".$new."");
    $this->db->or_where('Column47',"".$carry."");
    return $this->db->or_where('Column47',"".$accrue."")
    ->get()
    ->result();
                    }
	}
	
	function get_graf_monthly_revenue_Aug_multi(){
        if (isset($_POST['submit'])) {  
            if(isset($_POST['dbs'])OR($_POST['des'])OR($_POST['dgs'])OR($_POST['reg1'])OR($_POST['reg2'])OR($_POST['reg3'])OR($_POST['reg4'])OR($_POST['reg5'])OR($_POST['reg6'])OR($_POST['reg7'])OR($_POST['sda'])AND($_POST['new'])OR($_POST['carry'])OR($_POST['accrue'])){
            $dbs=$_POST['dbs'];
            $des=$_POST['des'];
            $dgs=$_POST['dgs'];
            $reg1=$_POST['reg1'];
            $reg2=$_POST['reg2'];
            $reg3=$_POST['reg3'];
            $reg4=$_POST['reg4'];
            $reg5=$_POST['reg5'];
            $reg6=$_POST['reg6'];
            $reg7=$_POST['reg7'];
            $sda=$_POST['sda'];
            $new=$_POST['new'];
            $carry=$_POST['carry'];
            $accrue=$_POST['accrue'];
        $this->db->select("SUM(Column5_69) as aug");
		$this->db->from('step_5');
		$this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
        $this->db->or_where('Column46',"".$dbs."");
        $this->db->where('Column47',"".$new."");
        $this->db->or_where('Column46',"".$des."");
        $this->db->where('Column47',"".$new."");
        $this->db->or_where('Column46',"".$dgs."");
        $this->db->where('Column47',"".$new."");
        $this->db->or_where('Column46',"".$reg1."");
        $this->db->where('Column47',"".$new."");
        $this->db->or_where('Column46',"".$reg2."");
        $this->db->where('Column47',"".$new."");
        $this->db->or_where('Column46',"".$reg3."");
        $this->db->where('Column47',"".$new."");
        $this->db->or_where('Column46',"".$reg4."");
        $this->db->where('Column47',"".$new."");
        $this->db->or_where('Column46',"".$reg5."");
        $this->db->where('Column47',"".$new."");
        $this->db->or_where('Column46',"".$reg6."");
        $this->db->where('Column47',"".$new."");
        $this->db->or_where('Column46',"".$reg7."");
        $this->db->where('Column47',"".$new."");
        $this->db->or_where('Column46',"".$sda."");
        $this->db->where('Column47',"".$new."");
        
        $this->db->or_where('Column46',"".$dbs."");
        $this->db->where('Column47',"".$carry."");
        $this->db->or_where('Column46',"".$des."");
        $this->db->where('Column47',"".$carry."");
        $this->db->or_where('Column46',"".$dgs."");
        $this->db->where('Column47',"".$carry."");
        $this->db->or_where('Column46',"".$reg1."");
        $this->db->where('Column47',"".$carry."");
        $this->db->or_where('Column46',"".$reg2."");
        $this->db->where('Column47',"".$carry."");
        $this->db->or_where('Column46',"".$reg3."");
        $this->db->where('Column47',"".$carry."");
        $this->db->or_where('Column46',"".$reg4."");
        $this->db->where('Column47',"".$carry."");
        $this->db->or_where('Column46',"".$reg5."");
        $this->db->where('Column47',"".$carry."");
        $this->db->or_where('Column46',"".$reg6."");
        $this->db->where('Column47',"".$carry."");
        $this->db->or_where('Column46',"".$reg7."");
        $this->db->where('Column47',"".$carry."");
        $this->db->or_where('Column46',"".$sda."");
        $this->db->where('Column46',"".$sda."");
        $this->db->where('Column47',"".$carry."");

        $this->db->or_where('Column46',"".$dbs."");
        $this->db->where('Column47',"".$accrue."");
        $this->db->or_where('Column46',"".$des."");
        $this->db->where('Column47',"".$accrue."");
        $this->db->or_where('Column46',"".$dgs."");
        $this->db->where('Column47',"".$accrue."");
        $this->db->or_where('Column46',"".$reg1."");
        $this->db->where('Column47',"".$accrue."");
        $this->db->or_where('Column46',"".$reg2."");
        $this->db->where('Column47',"".$accrue."");
        $this->db->or_where('Column46',"".$reg3."");
        $this->db->where('Column47',"".$accrue."");
        $this->db->or_where('Column46',"".$reg4."");
        $this->db->where('Column47',"".$accrue."");
        $this->db->or_where('Column46',"".$reg5."");
        $this->db->where('Column47',"".$accrue."");
        $this->db->or_where('Column46',"".$reg6."");
        $this->db->where('Column47',"".$accrue."");
        $this->db->or_where('Column46',"".$reg7."");
        $this->db->where('Column47',"".$accrue."");
        $this->db->or_where('Column46',"".$sda."");
        $this->db->where('Column46',"".$sda."");
        $this->db->where('Column47',"".$accrue."");
        return $this->db->where('Column47',"".$accrue."")
            ->get()
            ->result();
                        }
    }

    if(isset($_POST['kirim'])){
        $dbs=$_POST['dbs'];
        $des=$_POST['des'];
        $dgs=$_POST['dgs'];
        $reg1=$_POST['reg1'];
        $reg2=$_POST['reg2'];
        $reg3=$_POST['reg3'];
        $reg4=$_POST['reg4'];
        $reg5=$_POST['reg5'];
        $reg6=$_POST['reg6'];
        $reg7=$_POST['reg7'];
        $sda=$_POST['sda'];
        $new=$_POST['new'];
        $carry=$_POST['carry'];
        $accrue=$_POST['accrue'];
	$this->db->select("SUM(Column5_69) as aug");
    $this->db->from('step_5');
    $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
    $this->db->or_where('Column46',"".$dbs."");
    $this->db->or_where('Column46',"".$des."");
    $this->db->or_where('Column46',"".$dgs."");
    $this->db->or_where('Column46',"".$reg1."");
    $this->db->or_where('Column46',"".$reg2."");
    $this->db->or_where('Column46',"".$reg3."");
    $this->db->or_where('Column46',"".$reg4."");
    $this->db->or_where('Column46',"".$reg5."");
    $this->db->or_where('Column46',"".$reg6."");
    $this->db->or_where('Column46',"".$reg7."");
    $this->db->or_where('Column46',"".$sda."");
    $this->db->or_where('Column46',"".$sda."");
    $this->db->or_where('Column47',"".$new."");
    $this->db->or_where('Column47',"".$carry."");
    return $this->db->or_where('Column47',"".$accrue."")
    ->get()
    ->result();
                    }
	}
	
	
	function get_graf_monthly_revenue_Sept_multi(){
        if (isset($_POST['submit'])) {  
            if(isset($_POST['dbs'])OR($_POST['des'])OR($_POST['dgs'])OR($_POST['reg1'])OR($_POST['reg2'])OR($_POST['reg3'])OR($_POST['reg4'])OR($_POST['reg5'])OR($_POST['reg6'])OR($_POST['reg7'])OR($_POST['sda'])AND($_POST['new'])OR($_POST['carry'])OR($_POST['accrue'])){
            $dbs=$_POST['dbs'];
            $des=$_POST['des'];
            $dgs=$_POST['dgs'];
            $reg1=$_POST['reg1'];
            $reg2=$_POST['reg2'];
            $reg3=$_POST['reg3'];
            $reg4=$_POST['reg4'];
            $reg5=$_POST['reg5'];
            $reg6=$_POST['reg6'];
            $reg7=$_POST['reg7'];
            $sda=$_POST['sda'];
            $new=$_POST['new'];
            $carry=$_POST['carry'];
            $accrue=$_POST['accrue'];
        $this->db->select("SUM(Column5_70) as sept");
		$this->db->from('step_5');
		$this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
        $this->db->or_where('Column46',"".$dbs."");
        $this->db->where('Column47',"".$new."");
        $this->db->or_where('Column46',"".$des."");
        $this->db->where('Column47',"".$new."");
        $this->db->or_where('Column46',"".$dgs."");
        $this->db->where('Column47',"".$new."");
        $this->db->or_where('Column46',"".$reg1."");
        $this->db->where('Column47',"".$new."");
        $this->db->or_where('Column46',"".$reg2."");
        $this->db->where('Column47',"".$new."");
        $this->db->or_where('Column46',"".$reg3."");
        $this->db->where('Column47',"".$new."");
        $this->db->or_where('Column46',"".$reg4."");
        $this->db->where('Column47',"".$new."");
        $this->db->or_where('Column46',"".$reg5."");
        $this->db->where('Column47',"".$new."");
        $this->db->or_where('Column46',"".$reg6."");
        $this->db->where('Column47',"".$new."");
        $this->db->or_where('Column46',"".$reg7."");
        $this->db->where('Column47',"".$new."");
        $this->db->or_where('Column46',"".$sda."");
        $this->db->where('Column47',"".$new."");
        
        $this->db->or_where('Column46',"".$dbs."");
        $this->db->where('Column47',"".$carry."");
        $this->db->or_where('Column46',"".$des."");
        $this->db->where('Column47',"".$carry."");
        $this->db->or_where('Column46',"".$dgs."");
        $this->db->where('Column47',"".$carry."");
        $this->db->or_where('Column46',"".$reg1."");
        $this->db->where('Column47',"".$carry."");
        $this->db->or_where('Column46',"".$reg2."");
        $this->db->where('Column47',"".$carry."");
        $this->db->or_where('Column46',"".$reg3."");
        $this->db->where('Column47',"".$carry."");
        $this->db->or_where('Column46',"".$reg4."");
        $this->db->where('Column47',"".$carry."");
        $this->db->or_where('Column46',"".$reg5."");
        $this->db->where('Column47',"".$carry."");
        $this->db->or_where('Column46',"".$reg6."");
        $this->db->where('Column47',"".$carry."");
        $this->db->or_where('Column46',"".$reg7."");
        $this->db->where('Column47',"".$carry."");
        $this->db->or_where('Column46',"".$sda."");
        $this->db->where('Column46',"".$sda."");
        $this->db->where('Column47',"".$carry."");

        $this->db->or_where('Column46',"".$dbs."");
        $this->db->where('Column47',"".$accrue."");
        $this->db->or_where('Column46',"".$des."");
        $this->db->where('Column47',"".$accrue."");
        $this->db->or_where('Column46',"".$dgs."");
        $this->db->where('Column47',"".$accrue."");
        $this->db->or_where('Column46',"".$reg1."");
        $this->db->where('Column47',"".$accrue."");
        $this->db->or_where('Column46',"".$reg2."");
        $this->db->where('Column47',"".$accrue."");
        $this->db->or_where('Column46',"".$reg3."");
        $this->db->where('Column47',"".$accrue."");
        $this->db->or_where('Column46',"".$reg4."");
        $this->db->where('Column47',"".$accrue."");
        $this->db->or_where('Column46',"".$reg5."");
        $this->db->where('Column47',"".$accrue."");
        $this->db->or_where('Column46',"".$reg6."");
        $this->db->where('Column47',"".$accrue."");
        $this->db->or_where('Column46',"".$reg7."");
        $this->db->where('Column47',"".$accrue."");
        $this->db->or_where('Column46',"".$sda."");
        $this->db->where('Column46',"".$sda."");
        $this->db->where('Column47',"".$accrue."");
        return $this->db->where('Column47',"".$accrue."")
            ->get()
            ->result();
                        }
    }

    if(isset($_POST['kirim'])){
        $dbs=$_POST['dbs'];
        $des=$_POST['des'];
        $dgs=$_POST['dgs'];
        $reg1=$_POST['reg1'];
        $reg2=$_POST['reg2'];
        $reg3=$_POST['reg3'];
        $reg4=$_POST['reg4'];
        $reg5=$_POST['reg5'];
        $reg6=$_POST['reg6'];
        $reg7=$_POST['reg7'];
        $sda=$_POST['sda'];
        $new=$_POST['new'];
        $carry=$_POST['carry'];
        $accrue=$_POST['accrue'];
	$this->db->select("SUM(Column5_70) as sept");
    $this->db->from('step_5');
    $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
    $this->db->or_where('Column46',"".$dbs."");
    $this->db->or_where('Column46',"".$des."");
    $this->db->or_where('Column46',"".$dgs."");
    $this->db->or_where('Column46',"".$reg1."");
    $this->db->or_where('Column46',"".$reg2."");
    $this->db->or_where('Column46',"".$reg3."");
    $this->db->or_where('Column46',"".$reg4."");
    $this->db->or_where('Column46',"".$reg5."");
    $this->db->or_where('Column46',"".$reg6."");
    $this->db->or_where('Column46',"".$reg7."");
    $this->db->or_where('Column46',"".$sda."");
    $this->db->or_where('Column46',"".$sda."");
    $this->db->or_where('Column47',"".$new."");
    $this->db->or_where('Column47',"".$carry."");
    return $this->db->or_where('Column47',"".$accrue."")
    ->get()
    ->result();
                    }
	}
	
	
	function get_graf_monthly_revenue_Oct_multi(){
          if (isset($_POST['submit'])) {  
            if(isset($_POST['dbs'])OR($_POST['des'])OR($_POST['dgs'])OR($_POST['reg1'])OR($_POST['reg2'])OR($_POST['reg3'])OR($_POST['reg4'])OR($_POST['reg5'])OR($_POST['reg6'])OR($_POST['reg7'])OR($_POST['sda'])AND($_POST['new'])OR($_POST['carry'])OR($_POST['accrue'])){
            $dbs=$_POST['dbs'];
            $des=$_POST['des'];
            $dgs=$_POST['dgs'];
            $reg1=$_POST['reg1'];
            $reg2=$_POST['reg2'];
            $reg3=$_POST['reg3'];
            $reg4=$_POST['reg4'];
            $reg5=$_POST['reg5'];
            $reg6=$_POST['reg6'];
            $reg7=$_POST['reg7'];
            $sda=$_POST['sda'];
            $new=$_POST['new'];
            $carry=$_POST['carry'];
            $accrue=$_POST['accrue'];
        $this->db->select("SUM(Column5_72) as oct");
		$this->db->from('step_5');
		$this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
        $this->db->or_where('Column46',"".$dbs."");
        $this->db->where('Column47',"".$new."");
        $this->db->or_where('Column46',"".$des."");
        $this->db->where('Column47',"".$new."");
        $this->db->or_where('Column46',"".$dgs."");
        $this->db->where('Column47',"".$new."");
        $this->db->or_where('Column46',"".$reg1."");
        $this->db->where('Column47',"".$new."");
        $this->db->or_where('Column46',"".$reg2."");
        $this->db->where('Column47',"".$new."");
        $this->db->or_where('Column46',"".$reg3."");
        $this->db->where('Column47',"".$new."");
        $this->db->or_where('Column46',"".$reg4."");
        $this->db->where('Column47',"".$new."");
        $this->db->or_where('Column46',"".$reg5."");
        $this->db->where('Column47',"".$new."");
        $this->db->or_where('Column46',"".$reg6."");
        $this->db->where('Column47',"".$new."");
        $this->db->or_where('Column46',"".$reg7."");
        $this->db->where('Column47',"".$new."");
        $this->db->or_where('Column46',"".$sda."");
        $this->db->where('Column47',"".$new."");
        
        $this->db->or_where('Column46',"".$dbs."");
        $this->db->where('Column47',"".$carry."");
        $this->db->or_where('Column46',"".$des."");
        $this->db->where('Column47',"".$carry."");
        $this->db->or_where('Column46',"".$dgs."");
        $this->db->where('Column47',"".$carry."");
        $this->db->or_where('Column46',"".$reg1."");
        $this->db->where('Column47',"".$carry."");
        $this->db->or_where('Column46',"".$reg2."");
        $this->db->where('Column47',"".$carry."");
        $this->db->or_where('Column46',"".$reg3."");
        $this->db->where('Column47',"".$carry."");
        $this->db->or_where('Column46',"".$reg4."");
        $this->db->where('Column47',"".$carry."");
        $this->db->or_where('Column46',"".$reg5."");
        $this->db->where('Column47',"".$carry."");
        $this->db->or_where('Column46',"".$reg6."");
        $this->db->where('Column47',"".$carry."");
        $this->db->or_where('Column46',"".$reg7."");
        $this->db->where('Column47',"".$carry."");
        $this->db->or_where('Column46',"".$sda."");
        $this->db->where('Column46',"".$sda."");
        $this->db->where('Column47',"".$carry."");

        $this->db->or_where('Column46',"".$dbs."");
        $this->db->where('Column47',"".$accrue."");
        $this->db->or_where('Column46',"".$des."");
        $this->db->where('Column47',"".$accrue."");
        $this->db->or_where('Column46',"".$dgs."");
        $this->db->where('Column47',"".$accrue."");
        $this->db->or_where('Column46',"".$reg1."");
        $this->db->where('Column47',"".$accrue."");
        $this->db->or_where('Column46',"".$reg2."");
        $this->db->where('Column47',"".$accrue."");
        $this->db->or_where('Column46',"".$reg3."");
        $this->db->where('Column47',"".$accrue."");
        $this->db->or_where('Column46',"".$reg4."");
        $this->db->where('Column47',"".$accrue."");
        $this->db->or_where('Column46',"".$reg5."");
        $this->db->where('Column47',"".$accrue."");
        $this->db->or_where('Column46',"".$reg6."");
        $this->db->where('Column47',"".$accrue."");
        $this->db->or_where('Column46',"".$reg7."");
        $this->db->where('Column47',"".$accrue."");
        $this->db->or_where('Column46',"".$sda."");
        $this->db->where('Column46',"".$sda."");
        $this->db->where('Column47',"".$accrue."");
        return $this->db->where('Column47',"".$accrue."")
            ->get()
            ->result();
                        }
    }

    if(isset($_POST['kirim'])){
        $dbs=$_POST['dbs'];
        $des=$_POST['des'];
        $dgs=$_POST['dgs'];
        $reg1=$_POST['reg1'];
        $reg2=$_POST['reg2'];
        $reg3=$_POST['reg3'];
        $reg4=$_POST['reg4'];
        $reg5=$_POST['reg5'];
        $reg6=$_POST['reg6'];
        $reg7=$_POST['reg7'];
        $sda=$_POST['sda'];
        $new=$_POST['new'];
        $carry=$_POST['carry'];
        $accrue=$_POST['accrue'];
	$this->db->select("SUM(Column5_72) as oct");
    $this->db->from('step_5');
    $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
    $this->db->or_where('Column46',"".$dbs."");
    $this->db->or_where('Column46',"".$des."");
    $this->db->or_where('Column46',"".$dgs."");
    $this->db->or_where('Column46',"".$reg1."");
    $this->db->or_where('Column46',"".$reg2."");
    $this->db->or_where('Column46',"".$reg3."");
    $this->db->or_where('Column46',"".$reg4."");
    $this->db->or_where('Column46',"".$reg5."");
    $this->db->or_where('Column46',"".$reg6."");
    $this->db->or_where('Column46',"".$reg7."");
    $this->db->or_where('Column46',"".$sda."");
    $this->db->or_where('Column46',"".$sda."");
    $this->db->or_where('Column47',"".$new."");
    $this->db->or_where('Column47',"".$carry."");
    return $this->db->or_where('Column47',"".$accrue."")
    ->get()
    ->result();
                    }
	}
	
	
	function get_graf_monthly_revenue_Nov_multi(){
        if (isset($_POST['submit'])) {  
            if(isset($_POST['dbs'])OR($_POST['des'])OR($_POST['dgs'])OR($_POST['reg1'])OR($_POST['reg2'])OR($_POST['reg3'])OR($_POST['reg4'])OR($_POST['reg5'])OR($_POST['reg6'])OR($_POST['reg7'])OR($_POST['sda'])AND($_POST['new'])OR($_POST['carry'])OR($_POST['accrue'])){
            $dbs=$_POST['dbs'];
            $des=$_POST['des'];
            $dgs=$_POST['dgs'];
            $reg1=$_POST['reg1'];
            $reg2=$_POST['reg2'];
            $reg3=$_POST['reg3'];
            $reg4=$_POST['reg4'];
            $reg5=$_POST['reg5'];
            $reg6=$_POST['reg6'];
            $reg7=$_POST['reg7'];
            $sda=$_POST['sda'];
            $new=$_POST['new'];
            $carry=$_POST['carry'];
            $accrue=$_POST['accrue'];
        $this->db->select("SUM(Column5_73) as nov");
		$this->db->from('step_5');
		$this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
        $this->db->or_where('Column46',"".$dbs."");
        $this->db->where('Column47',"".$new."");
        $this->db->or_where('Column46',"".$des."");
        $this->db->where('Column47',"".$new."");
        $this->db->or_where('Column46',"".$dgs."");
        $this->db->where('Column47',"".$new."");
        $this->db->or_where('Column46',"".$reg1."");
        $this->db->where('Column47',"".$new."");
        $this->db->or_where('Column46',"".$reg2."");
        $this->db->where('Column47',"".$new."");
        $this->db->or_where('Column46',"".$reg3."");
        $this->db->where('Column47',"".$new."");
        $this->db->or_where('Column46',"".$reg4."");
        $this->db->where('Column47',"".$new."");
        $this->db->or_where('Column46',"".$reg5."");
        $this->db->where('Column47',"".$new."");
        $this->db->or_where('Column46',"".$reg6."");
        $this->db->where('Column47',"".$new."");
        $this->db->or_where('Column46',"".$reg7."");
        $this->db->where('Column47',"".$new."");
        $this->db->or_where('Column46',"".$sda."");
        $this->db->where('Column47',"".$new."");
        
        $this->db->or_where('Column46',"".$dbs."");
        $this->db->where('Column47',"".$carry."");
        $this->db->or_where('Column46',"".$des."");
        $this->db->where('Column47',"".$carry."");
        $this->db->or_where('Column46',"".$dgs."");
        $this->db->where('Column47',"".$carry."");
        $this->db->or_where('Column46',"".$reg1."");
        $this->db->where('Column47',"".$carry."");
        $this->db->or_where('Column46',"".$reg2."");
        $this->db->where('Column47',"".$carry."");
        $this->db->or_where('Column46',"".$reg3."");
        $this->db->where('Column47',"".$carry."");
        $this->db->or_where('Column46',"".$reg4."");
        $this->db->where('Column47',"".$carry."");
        $this->db->or_where('Column46',"".$reg5."");
        $this->db->where('Column47',"".$carry."");
        $this->db->or_where('Column46',"".$reg6."");
        $this->db->where('Column47',"".$carry."");
        $this->db->or_where('Column46',"".$reg7."");
        $this->db->where('Column47',"".$carry."");
        $this->db->or_where('Column46',"".$sda."");
        $this->db->where('Column46',"".$sda."");
        $this->db->where('Column47',"".$carry."");

        $this->db->or_where('Column46',"".$dbs."");
        $this->db->where('Column47',"".$accrue."");
        $this->db->or_where('Column46',"".$des."");
        $this->db->where('Column47',"".$accrue."");
        $this->db->or_where('Column46',"".$dgs."");
        $this->db->where('Column47',"".$accrue."");
        $this->db->or_where('Column46',"".$reg1."");
        $this->db->where('Column47',"".$accrue."");
        $this->db->or_where('Column46',"".$reg2."");
        $this->db->where('Column47',"".$accrue."");
        $this->db->or_where('Column46',"".$reg3."");
        $this->db->where('Column47',"".$accrue."");
        $this->db->or_where('Column46',"".$reg4."");
        $this->db->where('Column47',"".$accrue."");
        $this->db->or_where('Column46',"".$reg5."");
        $this->db->where('Column47',"".$accrue."");
        $this->db->or_where('Column46',"".$reg6."");
        $this->db->where('Column47',"".$accrue."");
        $this->db->or_where('Column46',"".$reg7."");
        $this->db->where('Column47',"".$accrue."");
        $this->db->or_where('Column46',"".$sda."");
        $this->db->where('Column46',"".$sda."");
        $this->db->where('Column47',"".$accrue."");
        return $this->db->where('Column47',"".$accrue."")
            ->get()
            ->result();
                        }
    }

    if(isset($_POST['kirim'])){
        $dbs=$_POST['dbs'];
        $des=$_POST['des'];
        $dgs=$_POST['dgs'];
        $reg1=$_POST['reg1'];
        $reg2=$_POST['reg2'];
        $reg3=$_POST['reg3'];
        $reg4=$_POST['reg4'];
        $reg5=$_POST['reg5'];
        $reg6=$_POST['reg6'];
        $reg7=$_POST['reg7'];
        $sda=$_POST['sda'];
        $new=$_POST['new'];
        $carry=$_POST['carry'];
        $accrue=$_POST['accrue'];
	$this->db->select("SUM(Column5_73) as nov");
    $this->db->from('step_5');
    $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
    $this->db->or_where('Column46',"".$dbs."");
    $this->db->or_where('Column46',"".$des."");
    $this->db->or_where('Column46',"".$dgs."");
    $this->db->or_where('Column46',"".$reg1."");
    $this->db->or_where('Column46',"".$reg2."");
    $this->db->or_where('Column46',"".$reg3."");
    $this->db->or_where('Column46',"".$reg4."");
    $this->db->or_where('Column46',"".$reg5."");
    $this->db->or_where('Column46',"".$reg6."");
    $this->db->or_where('Column46',"".$reg7."");
    $this->db->or_where('Column46',"".$sda."");
    $this->db->or_where('Column46',"".$sda."");
    $this->db->or_where('Column47',"".$new."");
    $this->db->or_where('Column47',"".$carry."");
    return $this->db->or_where('Column47',"".$accrue."")
    ->get()
    ->result();
                    }
	}
	
	function get_graf_monthly_revenue_Des_multi(){
          if (isset($_POST['submit'])) {  
            if(isset($_POST['dbs'])OR($_POST['des'])OR($_POST['dgs'])OR($_POST['reg1'])OR($_POST['reg2'])OR($_POST['reg3'])OR($_POST['reg4'])OR($_POST['reg5'])OR($_POST['reg6'])OR($_POST['reg7'])OR($_POST['sda'])AND($_POST['new'])OR($_POST['carry'])OR($_POST['accrue'])){
            $dbs=$_POST['dbs'];
            $des=$_POST['des'];
            $dgs=$_POST['dgs'];
            $reg1=$_POST['reg1'];
            $reg2=$_POST['reg2'];
            $reg3=$_POST['reg3'];
            $reg4=$_POST['reg4'];
            $reg5=$_POST['reg5'];
            $reg6=$_POST['reg6'];
            $reg7=$_POST['reg7'];
            $sda=$_POST['sda'];
            $new=$_POST['new'];
            $carry=$_POST['carry'];
            $accrue=$_POST['accrue'];
        $this->db->select("SUM(Column5_74) as des");
		$this->db->from('step_5');
		$this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
        $this->db->or_where('Column46',"".$dbs."");
        $this->db->where('Column47',"".$new."");
        $this->db->or_where('Column46',"".$des."");
        $this->db->where('Column47',"".$new."");
        $this->db->or_where('Column46',"".$dgs."");
        $this->db->where('Column47',"".$new."");
        $this->db->or_where('Column46',"".$reg1."");
        $this->db->where('Column47',"".$new."");
        $this->db->or_where('Column46',"".$reg2."");
        $this->db->where('Column47',"".$new."");
        $this->db->or_where('Column46',"".$reg3."");
        $this->db->where('Column47',"".$new."");
        $this->db->or_where('Column46',"".$reg4."");
        $this->db->where('Column47',"".$new."");
        $this->db->or_where('Column46',"".$reg5."");
        $this->db->where('Column47',"".$new."");
        $this->db->or_where('Column46',"".$reg6."");
        $this->db->where('Column47',"".$new."");
        $this->db->or_where('Column46',"".$reg7."");
        $this->db->where('Column47',"".$new."");
        $this->db->or_where('Column46',"".$sda."");
        $this->db->where('Column47',"".$new."");
        
        $this->db->or_where('Column46',"".$dbs."");
        $this->db->where('Column47',"".$carry."");
        $this->db->or_where('Column46',"".$des."");
        $this->db->where('Column47',"".$carry."");
        $this->db->or_where('Column46',"".$dgs."");
        $this->db->where('Column47',"".$carry."");
        $this->db->or_where('Column46',"".$reg1."");
        $this->db->where('Column47',"".$carry."");
        $this->db->or_where('Column46',"".$reg2."");
        $this->db->where('Column47',"".$carry."");
        $this->db->or_where('Column46',"".$reg3."");
        $this->db->where('Column47',"".$carry."");
        $this->db->or_where('Column46',"".$reg4."");
        $this->db->where('Column47',"".$carry."");
        $this->db->or_where('Column46',"".$reg5."");
        $this->db->where('Column47',"".$carry."");
        $this->db->or_where('Column46',"".$reg6."");
        $this->db->where('Column47',"".$carry."");
        $this->db->or_where('Column46',"".$reg7."");
        $this->db->where('Column47',"".$carry."");
        $this->db->or_where('Column46',"".$sda."");
        $this->db->where('Column46',"".$sda."");
        $this->db->where('Column47',"".$carry."");

        $this->db->or_where('Column46',"".$dbs."");
        $this->db->where('Column47',"".$accrue."");
        $this->db->or_where('Column46',"".$des."");
        $this->db->where('Column47',"".$accrue."");
        $this->db->or_where('Column46',"".$dgs."");
        $this->db->where('Column47',"".$accrue."");
        $this->db->or_where('Column46',"".$reg1."");
        $this->db->where('Column47',"".$accrue."");
        $this->db->or_where('Column46',"".$reg2."");
        $this->db->where('Column47',"".$accrue."");
        $this->db->or_where('Column46',"".$reg3."");
        $this->db->where('Column47',"".$accrue."");
        $this->db->or_where('Column46',"".$reg4."");
        $this->db->where('Column47',"".$accrue."");
        $this->db->or_where('Column46',"".$reg5."");
        $this->db->where('Column47',"".$accrue."");
        $this->db->or_where('Column46',"".$reg6."");
        $this->db->where('Column47',"".$accrue."");
        $this->db->or_where('Column46',"".$reg7."");
        $this->db->where('Column47',"".$accrue."");
        $this->db->or_where('Column46',"".$sda."");
        $this->db->where('Column46',"".$sda."");
        $this->db->where('Column47',"".$accrue."");
        return $this->db->where('Column47',"".$accrue."")
            ->get()
            ->result();
                        }
    }

    if(isset($_POST['kirim'])){
        $dbs=$_POST['dbs'];
        $des=$_POST['des'];
        $dgs=$_POST['dgs'];
        $reg1=$_POST['reg1'];
        $reg2=$_POST['reg2'];
        $reg3=$_POST['reg3'];
        $reg4=$_POST['reg4'];
        $reg5=$_POST['reg5'];
        $reg6=$_POST['reg6'];
        $reg7=$_POST['reg7'];
        $sda=$_POST['sda'];
        $new=$_POST['new'];
        $carry=$_POST['carry'];
        $accrue=$_POST['accrue'];
	$this->db->select("SUM(Column5_74) as des");
    $this->db->from('step_5');
    $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
    $this->db->or_where('Column46',"".$dbs."");
    $this->db->or_where('Column46',"".$des."");
    $this->db->or_where('Column46',"".$dgs."");
    $this->db->or_where('Column46',"".$reg1."");
    $this->db->or_where('Column46',"".$reg2."");
    $this->db->or_where('Column46',"".$reg3."");
    $this->db->or_where('Column46',"".$reg4."");
    $this->db->or_where('Column46',"".$reg5."");
    $this->db->or_where('Column46',"".$reg6."");
    $this->db->or_where('Column46',"".$reg7."");
    $this->db->or_where('Column46',"".$sda."");
    $this->db->or_where('Column46',"".$sda."");
    $this->db->or_where('Column47',"".$new."");
    $this->db->or_where('Column47',"".$carry."");
    return $this->db->or_where('Column47',"".$accrue."")
    ->get()
    ->result();
                    }
	}	



	function get_graf_monthly_revenue_Jan(){
        $this->db->select("SUM(Column5_60) as jan");
        return $this->db->from('step_5')
          ->get()
          ->result();
	}

	function get_graf_monthly_revenue_Feb(){
        $this->db->select("SUM(Column5_61) as feb");
        return $this->db->from('step_5')
          ->get()
          ->result();
	}

	function get_graf_monthly_revenue_Mar(){
        $this->db->select("SUM(Column5_62) as mar");
        return $this->db->from('step_5')
          ->get()
          ->result();
	}

	function get_graf_monthly_revenue_Apr(){
        $this->db->select("SUM(Column5_64) as apr");
        return $this->db->from('step_5')
          ->get()
          ->result();
	}

	function get_graf_monthly_revenue_Mei(){
        $this->db->select("SUM(Column5_65) as mei");
        return $this->db->from('step_5')
          ->get()
          ->result();
	}

	function get_graf_monthly_revenue_Jun(){
        $this->db->select("SUM(Column5_66) as jun");
        return $this->db->from('step_5')
          ->get()
          ->result();
	}

	function get_graf_monthly_revenue_Jul(){
        $this->db->select("SUM(Column5_68) as jul");
        return $this->db->from('step_5')
          ->get()
          ->result();
	}

	function get_graf_monthly_revenue_Aug(){
        $this->db->select("SUM(Column5_69) as aug");
        return $this->db->from('step_5')
          ->get()
          ->result();
	}

	function get_graf_monthly_revenue_Sept(){
        $this->db->select("SUM(Column5_70) as sept");
        return $this->db->from('step_5')
          ->get()
          ->result();
	}

	function get_graf_monthly_revenue_Oct(){
        $this->db->select("SUM(Column5_72) as oct");
        return $this->db->from('step_5')
          ->get()
          ->result();
	}

	function get_graf_monthly_revenue_Nov(){
        $this->db->select("SUM(Column5_73) as nov");
        return $this->db->from('step_5')
          ->get()
          ->result();
	}

	function get_graf_monthly_revenue_Des(){
        $this->db->select("SUM(Column5_74) as des");
        return $this->db->from('step_5')
          ->get()
          ->result();
	}

	

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	//-- Monthly Revenue BY DEPARTEMEN DBS -- NEW CONTRACT --
	function get_graf_monthly_revenue_Jan_DBS_new(){
		$this->db->select("SUM(Column5_60) as jan");
		$this->db->from('step_5');
		$this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
		$this->db->where('Column47','New Contract');
		return $this->db->where('Column46','DBS')
		->get()
		->result();
	}

	function get_graf_monthly_revenue_Feb_DBS_new(){
		$this->db->select("SUM(Column5_61) as feb");
		$this->db->from('step_5');
		$this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
		$this->db->where('Column47','New Contract');
		return $this->db->where('Column46','DBS')
		->get()
		->result();
	}

	function get_graf_monthly_revenue_Mar_DBS_new(){
		$this->db->select("SUM(Column5_62) as mar");
		$this->db->from('step_5');
		$this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
		$this->db->where('Column47','New Contract');
		return $this->db->where('Column46','DBS')
		->get()
		->result();
	}

	function get_graf_monthly_revenue_Apr_DBS_new(){
		$this->db->select("SUM(Column5_64) as apr");
		$this->db->from('step_5');
		$this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
		$this->db->where('Column47','New Contract');
		return $this->db->where('Column46','DBS')
		->get()
		->result();
	}

	function get_graf_monthly_revenue_Mei_DBS_new(){
		$this->db->select("SUM(Column5_65) as mei");
		$this->db->from('step_5');
		$this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
		$this->db->where('Column47','New Contract');
		return $this->db->where('Column46','DBS')
		->get()
		->result();
	}

	function get_graf_monthly_revenue_jun_DBS_new(){
		$this->db->select("SUM(Column5_66) as jun");
		$this->db->from('step_5');
		$this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
		$this->db->where('Column47','New Contract');
		return $this->db->where('Column46','DBS')
		->get()
		->result();
	}

	function get_graf_monthly_revenue_Jul_DBS_new(){
		$this->db->select("SUM(Column5_68) as jul");
		$this->db->from('step_5');
		$this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
		$this->db->where('Column47','New Contract');
		return $this->db->where('Column46','DBS')
		->get()
		->result();
	}

	function get_graf_monthly_revenue_Aug_DBS_new(){
		$this->db->select("SUM(Column5_69) as aug");
		$this->db->from('step_5');
		$this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
		$this->db->where('Column47','New Contract');
		return $this->db->where('Column46','DBS')
		->get()
		->result();
	}


	function get_graf_monthly_revenue_Sept_DBS_new(){
		$this->db->select("SUM(Column5_70) as sept");
		$this->db->from('step_5');
		$this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
		$this->db->where('Column47','New Contract');
		return $this->db->where('Column46','DBS')
		->get()
		->result();
	}


	function get_graf_monthly_revenue_Oct_DBS_new(){
		$this->db->select("SUM(Column5_72) as oct");
		$this->db->from('step_5');
		$this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
		$this->db->where('Column47','New Contract');
		return $this->db->where('Column46','DBS')
		->get()
		->result();
	}


	function get_graf_monthly_revenue_Nov_DBS_new(){
		$this->db->select("SUM(Column5_73) as nov");
		$this->db->from('step_5');
		$this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
		$this->db->where('Column47','New Contract');
		return $this->db->where('Column46','DBS')
		->get()
		->result();
	}

	function get_graf_monthly_revenue_Des_DBS_new(){
		$this->db->select("SUM(Column5_74) as des");
		$this->db->from('step_5');
		$this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
		$this->db->where('Column47','New Contract');
		return $this->db->where('Column46','DBS')
		->get()
		->result();
	}

    //-- Monthly Revenue BY DEPARTEMEN DES NEW CONTRACT--
    function get_graf_monthly_revenue_Jan_DES_new(){
        $this->db->select("SUM(Column5_60) as jan");
        $this->db->from('step_5');
        $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
        $this->db->where('Column47','New Contract');
        return $this->db->where('Column46','DES')
        ->get()
        ->result();
    }

    function get_graf_monthly_revenue_Feb_DES_new(){
        $this->db->select("SUM(Column5_61) as feb");
        $this->db->from('step_5');
        $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
        $this->db->where('Column47','New Contract');
        return $this->db->where('Column46','DES')
        ->get()
        ->result();
    }

    function get_graf_monthly_revenue_Mar_DES_new(){
        $this->db->select("SUM(Column5_62) as mar");
        $this->db->from('step_5');
        $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
        $this->db->where('Column47','New Contract');
        return $this->db->where('Column46','DES')
        ->get()
        ->result();
    }

    function get_graf_monthly_revenue_Apr_DES_new(){
        $this->db->select("SUM(Column5_64) as apr");
        $this->db->from('step_5');
        $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
        $this->db->where('Column47','New Contract');
        return $this->db->where('Column46','DES')
        ->get()
        ->result();
    }

    function get_graf_monthly_revenue_Mei_des_new(){
        $this->db->select("SUM(Column5_65) as mei");
        $this->db->from('step_5');
        $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
        $this->db->where('Column47','New Contract');
        return $this->db->where('Column46','DES')
        ->get()
        ->result();
    }

    function get_graf_monthly_revenue_jun_DES_new(){
        $this->db->select("SUM(Column5_66) as jun");
        $this->db->from('step_5');
        $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
        $this->db->where('Column47','New Contract');
        return $this->db->where('Column46','DES')
        ->get()
        ->result();
    }

    function get_graf_monthly_revenue_Jul_DES_new(){
        $this->db->select("SUM(Column5_68) as jul");
        $this->db->from('step_5');
        $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
        $this->db->where('Column47','New Contract');
        return $this->db->where('Column46','DES')
        ->get()
        ->result();
    }

    function get_graf_monthly_revenue_Aug_DES_new(){
        $this->db->select("SUM(Column5_69) as aug");
        $this->db->from('step_5');
        $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
        $this->db->where('Column47','New Contract');
        return $this->db->where('Column46','DES')
        ->get()
        ->result();
    }


    function get_graf_monthly_revenue_Sept_DES_new(){
        $this->db->select("SUM(Column5_70) as sept");
        $this->db->from('step_5');
        $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
        $this->db->where('Column47','New Contract');
        return $this->db->where('Column46','DES')
        ->get()
        ->result();
    }


    function get_graf_monthly_revenue_Oct_DES_new(){
        $this->db->select("SUM(Column5_72) as oct");
        $this->db->from('step_5');
        $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
        $this->db->where('Column47','New Contract');
        return $this->db->where('Column46','DES')
        ->get()
        ->result();
     }


    function get_graf_monthly_revenue_Nov_DES_new(){
        $this->db->select("SUM(Column5_73) as nov");
        $this->db->from('step_5');
        $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
        $this->db->where('Column47','New Contract');
        return $this->db->where('Column46','DES')
        ->get()
        ->result();
    }

    function get_graf_monthly_revenue_Des_DES_new(){
        $this->db->select("SUM(Column5_74) as des");
        $this->db->from('step_5');
        $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
        $this->db->where('Column47','New Contract');
        return $this->db->where('Column46','DES')
        ->get()
        ->result();
    }

               //-- Monthly Revenue BY DEPARTEMEN DGS NEW CONTRACT--
    function get_graf_monthly_revenue_Jan_DGS_new(){
        $this->db->select("SUM(Column5_60) as jan");
        $this->db->from('step_5');
        $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
        $this->db->where('Column47','New Contract');
        return $this->db->where('Column46','DGS')
        ->get()
        ->result();
    }

    function get_graf_monthly_revenue_Feb_DGS_new(){
        $this->db->select("SUM(Column5_61) as feb");
        $this->db->from('step_5');
        $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
        $this->db->where('Column47','New Contract');
        return $this->db->where('Column46','DGS')
        ->get()
        ->result();
    }

    function get_graf_monthly_revenue_Mar_DGS_new(){
        $this->db->select("SUM(Column5_62) as mar");
        $this->db->from('step_5');
        $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
        $this->db->where('Column47','New Contract');
        return $this->db->where('Column46','DGS')
        ->get()
        ->result();
    }

    function get_graf_monthly_revenue_Apr_DGS_new(){
        $this->db->select("SUM(Column5_64) as apr");
        $this->db->from('step_5');
        $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
        $this->db->where('Column47','New Contract');
        return $this->db->where('Column46','DGS')
        ->get()
        ->result();
    }

    function get_graf_monthly_revenue_Mei_DGS_new(){
        $this->db->select("SUM(Column5_65) as mei");
        $this->db->from('step_5');
        $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
        $this->db->where('Column47','New Contract');
        return $this->db->where('Column46','DGS')
        ->get()
        ->result();
    }

    function get_graf_monthly_revenue_jun_DGS_new(){
        $this->db->select("SUM(Column5_66) as jun");
        $this->db->from('step_5');
        $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
        $this->db->where('Column47','New Contract');
        return $this->db->where('Column46','DGS')
        ->get()
        ->result();
    }

    function get_graf_monthly_revenue_Jul_DGS_new(){
        $this->db->select("SUM(Column5_68) as jul");
        $this->db->from('step_5');
        $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
        $this->db->where('Column47','New Contract');
        return $this->db->where('Column46','DGS')
        ->get()
        ->result();
    }

    function get_graf_monthly_revenue_Aug_DGS_new(){
        $this->db->select("SUM(Column5_69) as aug");
        $this->db->from('step_5');
        $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
        $this->db->where('Column47','New Contract');
        return $this->db->where('Column46','DGS')
        ->get()
        ->result();
    }


    function get_graf_monthly_revenue_Sept_DGS_new(){
        $this->db->select("SUM(Column5_70) as sept");
        $this->db->from('step_5');
        $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
        $this->db->where('Column47','New Contract');
        return $this->db->where('Column46','DGS')
        ->get()
        ->result();
    }


    function get_graf_monthly_revenue_Oct_DGS_new(){
        $this->db->select("SUM(Column5_72) as oct");
        $this->db->from('step_5');
        $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
        $this->db->where('Column47','New Contract');
        return $this->db->where('Column46','DGS')
        ->get()
        ->result();
    }


    function get_graf_monthly_revenue_Nov_DGS_new(){
        $this->db->select("SUM(Column5_73) as nov");
        $this->db->from('step_5');
        $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
        $this->db->where('Column47','New Contract');
        return $this->db->where('Column46','DGS')
        ->get()
        ->result();
    }

    function get_graf_monthly_revenue_Des_DGS_new(){
        $this->db->select("SUM(Column5_74) as des");
        $this->db->from('step_5');
        $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
        $this->db->where('Column47','New Contract');
        return $this->db->where('Column46','DGS')
        ->get()
        ->result();
    }
        //-- Monthly Revenue BY DEPARTEMEN REG1 NEW CONTRACT--
        function get_graf_monthly_revenue_Jan_REG1_new(){
            $this->db->select("SUM(Column5_60) as jan");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','New Contract');
            return $this->db->where('Column46','REG 1')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Feb_REG1_new(){
            $this->db->select("SUM(Column5_61) as feb");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','New Contract');
            return $this->db->where('Column46','REG 1')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Mar_REG1_new(){
            $this->db->select("SUM(Column5_62) as mar");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','New Contract');
            return $this->db->where('Column46','REG 1')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Apr_REG1_new(){
            $this->db->select("SUM(Column5_64) as apr");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','New Contract');
            return $this->db->where('Column46','REG 1')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Mei_REG1_new(){
            $this->db->select("SUM(Column5_65) as mei");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','New Contract');
            return $this->db->where('Column46','REG 1')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_jun_REG1_new(){
            $this->db->select("SUM(Column5_66) as jun");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','New Contract');
            return $this->db->where('Column46','REG 1')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Jul_REG1_new(){
            $this->db->select("SUM(Column5_68) as jul");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','New Contract');
            return $this->db->where('Column46','REG 1')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Aug_REG1_new(){
            $this->db->select("SUM(Column5_69) as aug");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','New Contract');
            return $this->db->where('Column46','REG 1')
            ->get()
            ->result();
        }


        function get_graf_monthly_revenue_Sept_REG1_new(){
            $this->db->select("SUM(Column5_70) as sept");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','New Contract');
            return $this->db->where('Column46','REG 1')
            ->get()
            ->result();
        }


        function get_graf_monthly_revenue_Oct_REG1_new(){
            $this->db->select("SUM(Column5_72) as oct");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','New Contract');
            return $this->db->where('Column46','REG 1')
            ->get()
            ->result();
        }


        function get_graf_monthly_revenue_Nov_REG1_new(){
            $this->db->select("SUM(Column5_73) as nov");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','New Contract');
            return $this->db->where('Column46','REG 1')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Des_REG1_new(){
            $this->db->select("SUM(Column5_74) as des");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','New Contract');
            return $this->db->where('Column46','REG 1')
            ->get()
            ->result();
        }


                //-- Monthly Revenue BY DEPARTEMEN REG 2 NEW CONTRACT--
        function get_graf_monthly_revenue_Jan_REG2_new(){
            $this->db->select("SUM(Column5_60) as jan");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','New Contract');
            return $this->db->where('Column46','REG 2')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Feb_REG2_new(){
            $this->db->select("SUM(Column5_61) as feb");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','New Contract');
            return $this->db->where('Column46','REG 2')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Mar_REG2_new(){
            $this->db->select("SUM(Column5_62) as mar");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','New Contract');
            return $this->db->where('Column46','REG 2')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Apr_REG2_new(){
            $this->db->select("SUM(Column5_64) as apr");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','New Contract');
            return $this->db->where('Column46','REG 2')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Mei_REG2_new(){
            $this->db->select("SUM(Column5_65) as mei");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','New Contract');
            return $this->db->where('Column46','REG 2')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_jun_REG2_new(){
            $this->db->select("SUM(Column5_66) as jun");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','New Contract');
            return $this->db->where('Column46','REG 2')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Jul_REG2_new(){
            $this->db->select("SUM(Column5_68) as jul");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','New Contract');
            return $this->db->where('Column46','REG 2')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Aug_REG2_new(){
            $this->db->select("SUM(Column5_69) as aug");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','New Contract');
            return $this->db->where('Column46','REG 2')
            ->get()
            ->result();
        }


        function get_graf_monthly_revenue_Sept_REG2_new(){
            $this->db->select("SUM(Column5_70) as sept");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','New Contract');
            return $this->db->where('Column46','REG 2')
            ->get()
            ->result();
        }


        function get_graf_monthly_revenue_Oct_REG2_new(){
            $this->db->select("SUM(Column5_72) as oct");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','New Contract');
            return $this->db->where('Column46','REG 2')
            ->get()
            ->result();
        }


        function get_graf_monthly_revenue_Nov_REG2_new(){
            $this->db->select("SUM(Column5_73) as nov");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','New Contract');
            return $this->db->where('Column46','REG 1')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Des_REG2_new(){
            $this->db->select("SUM(Column5_74) as des");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','New Contract');
            return $this->db->where('Column46','REG 2')
            ->get()
            ->result();
        }


         //-- Monthly Revenue BY DEPARTEMEN REG 3 NEW CONTRACT--
         function get_graf_monthly_revenue_Jan_REG3_new(){
            $this->db->select("SUM(Column5_60) as jan");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','New Contract');
            return $this->db->where('Column46','REG 3')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Feb_REG3_new(){
            $this->db->select("SUM(Column5_61) as feb");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','New Contract');
            return $this->db->where('Column46','REG 3')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Mar_REG3_new(){
            $this->db->select("SUM(Column5_62) as mar");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','New Contract');
            return $this->db->where('Column46','REG 3')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Apr_REG3_new(){
            $this->db->select("SUM(Column5_64) as apr");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','New Contract');
            return $this->db->where('Column46','REG 3')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Mei_REG3_new(){
            $this->db->select("SUM(Column5_65) as mei");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','New Contract');
            return $this->db->where('Column46','REG 3')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_jun_REG3_new(){
            $this->db->select("SUM(Column5_66) as jun");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','New Contract');
            return $this->db->where('Column46','REG 3')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Jul_REG3_new(){
            $this->db->select("SUM(Column5_68) as jul");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','New Contract');
            return $this->db->where('Column46','REG 3')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Aug_REG3_new(){
            $this->db->select("SUM(Column5_69) as aug");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','New Contract');
            return $this->db->where('Column46','REG 3')
            ->get()
            ->result();
        }


        function get_graf_monthly_revenue_Sept_REG3_new(){
            $this->db->select("SUM(Column5_70) as sept");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','New Contract');
            return $this->db->where('Column46','REG 3')
            ->get()
            ->result();
        }


        function get_graf_monthly_revenue_Oct_REG3_new(){
            $this->db->select("SUM(Column5_72) as oct");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','New Contract');
            return $this->db->where('Column46','REG 3')
            ->get()
            ->result();
        }


        function get_graf_monthly_revenue_Nov_REG3_new(){
            $this->db->select("SUM(Column5_73) as nov");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','New Contract');
            return $this->db->where('Column46','REG 3')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Des_REG3_new(){
            $this->db->select("SUM(Column5_74) as des");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','New Contract');
            return $this->db->where('Column46','REG 3')
            ->get()
            ->result();
        }


         //-- Monthly Revenue BY DEPARTEMEN REG 4 NEW CONTRACT--
         function get_graf_monthly_revenue_Jan_REG4_new(){
            $this->db->select("SUM(Column5_60) as jan");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','New Contract');
            return $this->db->where('Column46','REG 4')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Feb_REG4_new(){
            $this->db->select("SUM(Column5_61) as feb");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','New Contract');
            return $this->db->where('Column46','REG 4')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Mar_REG4_new(){
            $this->db->select("SUM(Column5_62) as mar");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','New Contract');
            return $this->db->where('Column46','REG 4')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Apr_REG4_new(){
            $this->db->select("SUM(Column5_64) as apr");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','New Contract');
            return $this->db->where('Column46','REG 4')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Mei_REG4_new(){
            $this->db->select("SUM(Column5_65) as mei");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','New Contract');
            return $this->db->where('Column46','REG 4')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_jun_REG4_new(){
            $this->db->select("SUM(Column5_66) as jun");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','New Contract');
            return $this->db->where('Column46','REG 4')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Jul_REG4_new(){
            $this->db->select("SUM(Column5_68) as jul");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','New Contract');
            return $this->db->where('Column46','REG 4')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Aug_REG4_new(){
            $this->db->select("SUM(Column5_69) as aug");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','New Contract');
            return $this->db->where('Column46','REG 4')
            ->get()
            ->result();
        }


        function get_graf_monthly_revenue_Sept_REG4_new(){
            $this->db->select("SUM(Column5_70) as sept");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','New Contract');
            return $this->db->where('Column46','REG 4')
            ->get()
            ->result();
        }


        function get_graf_monthly_revenue_Oct_REG4_new(){
            $this->db->select("SUM(Column5_72) as oct");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','New Contract');
            return $this->db->where('Column46','REG 4')
            ->get()
            ->result();
        }


        function get_graf_monthly_revenue_Nov_REG4_new(){
            $this->db->select("SUM(Column5_73) as nov");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','New Contract');
            return $this->db->where('Column46','REG 4')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Des_REG4_new(){
            $this->db->select("SUM(Column5_74) as des");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','New Contract');
            return $this->db->where('Column46','REG 4')
            ->get()
            ->result();
        }

         //-- Monthly Revenue BY DEPARTEMEN REG 5 NEW CONTRACT--
         function get_graf_monthly_revenue_Jan_REG5_new(){
            $this->db->select("SUM(Column5_60) as jan");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','New Contract');
            return $this->db->where('Column46','REG 5')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Feb_REG5_new(){
            $this->db->select("SUM(Column5_61) as feb");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','New Contract');
            return $this->db->where('Column46','REG 5')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Mar_REG5_new(){
            $this->db->select("SUM(Column5_62) as mar");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','New Contract');
            return $this->db->where('Column46','REG 5')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Apr_REG5_new(){
            $this->db->select("SUM(Column5_64) as apr");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','New Contract');
            return $this->db->where('Column46','REG 5')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Mei_REG5_new(){
            $this->db->select("SUM(Column5_65) as mei");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','New Contract');
            return $this->db->where('Column46','REG 5')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_jun_REG5_new(){
            $this->db->select("SUM(Column5_66) as jun");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','New Contract');
            return $this->db->where('Column46','REG 5')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Jul_REG5_new(){
            $this->db->select("SUM(Column5_68) as jul");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','New Contract');
            return $this->db->where('Column46','REG 5')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Aug_REG5_new(){
            $this->db->select("SUM(Column5_69) as aug");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','New Contract');
            return $this->db->where('Column46','REG 5')
            ->get()
            ->result();
        }


        function get_graf_monthly_revenue_Sept_REG5_new(){
            $this->db->select("SUM(Column5_70) as sept");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','New Contract');
            return $this->db->where('Column46','REG 5')
            ->get()
            ->result();
        }


        function get_graf_monthly_revenue_Oct_REG5_new(){
            $this->db->select("SUM(Column5_72) as oct");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','New Contract');
            return $this->db->where('Column46','REG 5')
            ->get()
            ->result();
        }


        function get_graf_monthly_revenue_Nov_REG5_new(){
            $this->db->select("SUM(Column5_73) as nov");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','New Contract');
            return $this->db->where('Column46','REG 5')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Des_REG5_new(){
            $this->db->select("SUM(Column5_74) as des");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','New Contract');
            return $this->db->where('Column46','REG 5')
            ->get()
            ->result();
        }

         //-- Monthly Revenue BY DEPARTEMEN REG6 NEW CONTRACT--
         function get_graf_monthly_revenue_Jan_REG6_new(){
            $this->db->select("SUM(Column5_60) as jan");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','New Contract');
            return $this->db->where('Column46','REG 6')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Feb_REG6_new(){
            $this->db->select("SUM(Column5_61) as feb");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','New Contract');
            return $this->db->where('Column46','REG 6')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Mar_REG6_new(){
            $this->db->select("SUM(Column5_62) as mar");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','New Contract');
            return $this->db->where('Column46','REG 6')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Apr_REG6_new(){
            $this->db->select("SUM(Column5_64) as apr");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','New Contract');
            return $this->db->where('Column46','REG 6')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Mei_REG6_new(){
            $this->db->select("SUM(Column5_65) as mei");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','New Contract');
            return $this->db->where('Column46','REG 6')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_jun_REG6_new(){
            $this->db->select("SUM(Column5_66) as jun");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','New Contract');
            return $this->db->where('Column46','REG 6')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Jul_REG6_new(){
            $this->db->select("SUM(Column5_68) as jul");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','New Contract');
            return $this->db->where('Column46','REG 6')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Aug_REG6_new(){
            $this->db->select("SUM(Column5_69) as aug");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','New Contract');
            return $this->db->where('Column46','REG 6')
            ->get()
            ->result();
        }


        function get_graf_monthly_revenue_Sept_REG6_new(){
            $this->db->select("SUM(Column5_70) as sept");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','New Contract');
            return $this->db->where('Column46','REG 6')
            ->get()
            ->result();
        }


        function get_graf_monthly_revenue_Oct_REG6_new(){
            $this->db->select("SUM(Column5_72) as oct");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','New Contract');
            return $this->db->where('Column46','REG 6')
            ->get()
            ->result();
        }


        function get_graf_monthly_revenue_Nov_REG6_new(){
            $this->db->select("SUM(Column5_73) as nov");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','New Contract');
            return $this->db->where('Column46','REG 6')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Des_REG6_new(){
            $this->db->select("SUM(Column5_74) as des");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','New Contract');
            return $this->db->where('Column46','REG 6')
            ->get()
            ->result();
        }


         //-- Monthly Revenue BY DEPARTEMEN REG7 NEW CONTRACT--
         function get_graf_monthly_revenue_Jan_REG7_new(){
            $this->db->select("SUM(Column5_60) as jan");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','New Contract');
            return $this->db->where('Column46','REG 7')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Feb_REG7_new(){
            $this->db->select("SUM(Column5_61) as feb");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','New Contract');
            return $this->db->where('Column46','REG 7')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Mar_REG7_new(){
            $this->db->select("SUM(Column5_62) as mar");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','New Contract');
            return $this->db->where('Column46','REG 7')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Apr_REG7_new(){
            $this->db->select("SUM(Column5_64) as apr");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','New Contract');
            return $this->db->where('Column46','REG 7')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Mei_REG7_new(){
            $this->db->select("SUM(Column5_65) as mei");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','New Contract');
            return $this->db->where('Column46','REG 7')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_jun_REG7_new(){
            $this->db->select("SUM(Column5_66) as jun");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','New Contract');
            return $this->db->where('Column46','REG 7')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Jul_REG7_new(){
            $this->db->select("SUM(Column5_68) as jul");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','New Contract');
            return $this->db->where('Column46','REG 7')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Aug_REG7_new(){
            $this->db->select("SUM(Column5_69) as aug");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','New Contract');
            return $this->db->where('Column46','REG 7')
            ->get()
            ->result();
        }


        function get_graf_monthly_revenue_Sept_REG7_new(){
            $this->db->select("SUM(Column5_70) as sept");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','New Contract');
            return $this->db->where('Column46','REG 7')
            ->get()
            ->result();
        }


        function get_graf_monthly_revenue_Oct_REG7_new(){
            $this->db->select("SUM(Column5_72) as oct");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','New Contract');
            return $this->db->where('Column46','REG 7')
            ->get()
            ->result();
        }


        function get_graf_monthly_revenue_Nov_REG7_new(){
            $this->db->select("SUM(Column5_73) as nov");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','New Contract');
            return $this->db->where('Column46','REG 7')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Des_REG7_new(){
            $this->db->select("SUM(Column5_74) as des");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','New Contract');
            return $this->db->where('Column46','REG 7')
            ->get()
            ->result();
        }

         //-- Monthly Revenue BY DEPARTEMEN SDA NEW CONTRACT--
         function get_graf_monthly_revenue_Jan_SDA_new(){
            $this->db->select("SUM(Column5_60) as jan");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','New Contract');
            return $this->db->where('Column46','SDA')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Feb_SDA_new(){
            $this->db->select("SUM(Column5_61) as feb");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','New Contract');
            return $this->db->where('Column46','SDA')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Mar_SDA_new(){
            $this->db->select("SUM(Column5_62) as mar");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','New Contract');
            return $this->db->where('Column46','SDA')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Apr_SDA_new(){
            $this->db->select("SUM(Column5_64) as apr");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','New Contract');
            return $this->db->where('Column46','SDA')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Mei_SDA_new(){
            $this->db->select("SUM(Column5_65) as mei");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','New Contract');
            return $this->db->where('Column46','SDA')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_jun_SDA_new(){
            $this->db->select("SUM(Column5_66) as jun");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','New Contract');
            return $this->db->where('Column46','SDA')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Jul_SDA_new(){
            $this->db->select("SUM(Column5_68) as jul");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','New Contract');
            return $this->db->where('Column46','SDA')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Aug_SDA_new(){
            $this->db->select("SUM(Column5_69) as aug");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','New Contract');
            return $this->db->where('Column46','SDA')
            ->get()
            ->result();
        }


        function get_graf_monthly_revenue_Sept_SDA_new(){
            $this->db->select("SUM(Column5_70) as sept");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','New Contract');
            return $this->db->where('Column46','SDA')
            ->get()
            ->result();
        }


        function get_graf_monthly_revenue_Oct_SDA_new(){
            $this->db->select("SUM(Column5_72) as oct");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','New Contract');
            return $this->db->where('Column46','SDA')
            ->get()
            ->result();
        }


        function get_graf_monthly_revenue_Nov_SDA_new(){
            $this->db->select("SUM(Column5_73) as nov");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','New Contract');
            return $this->db->where('Column46','SDA')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Des_SDA_new(){
            $this->db->select("SUM(Column5_74) as des");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','New Contract');
            return $this->db->where('Column46','SDA')
            ->get()
            ->result();
        }

	//-- CARRY FORWARD -- //

		//-- Monthly Revenue BY DEPARTEMEN DBS CARRY FORWARD--
		function get_graf_monthly_revenue_Jan_DBS_carry(){
			$this->db->select("SUM(Column5_60) as jan");
			$this->db->from('step_5');
			$this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Carry Forward');
			return $this->db->where('Column46','DBS')
			  ->get()
			  ->result();
		}
	
		function get_graf_monthly_revenue_Feb_DBS_carry(){
			$this->db->select("SUM(Column5_61) as feb");
			$this->db->from('step_5');
			$this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Carry Forward');
			return $this->db->where('Column46','DBS')
			  ->get()
			  ->result();
		}
		
		function get_graf_monthly_revenue_Mar_DBS_carry(){
			$this->db->select("SUM(Column5_62) as mar");
			$this->db->from('step_5');
			$this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Carry Forward');
			return $this->db->where('Column46','DBS')
			  ->get()
			  ->result();
		}
		
		function get_graf_monthly_revenue_Apr_DBS_carry(){
			$this->db->select("SUM(Column5_64) as apr");
			$this->db->from('step_5');
			$this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Carry Forward');
			return $this->db->where('Column46','DBS')
			  ->get()
			  ->result();
		}
		
		function get_graf_monthly_revenue_Mei_DBS_carry(){
			$this->db->select("SUM(Column5_65) as mei");
			$this->db->from('step_5');
			$this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Carry Forward');
			return $this->db->where('Column46','DBS')
			  ->get()
			  ->result();
		}
		
		function get_graf_monthly_revenue_jun_DBS_carry(){
			$this->db->select("SUM(Column5_66) as jun");
			$this->db->from('step_5');
			$this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Carry Forward');
			return $this->db->where('Column46','DBS')
			  ->get()
			  ->result();
		}
		
		function get_graf_monthly_revenue_Jul_DBS_carry(){
			$this->db->select("SUM(Column5_68) as jul");
			$this->db->from('step_5');
			$this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Carry Forward');
			return $this->db->where('Column46','DBS')
			  ->get()
			  ->result();
		}
		
		function get_graf_monthly_revenue_Aug_DBS_carry(){
			$this->db->select("SUM(Column5_69) as aug");
			$this->db->from('step_5');
			$this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Carry Forward');
			return $this->db->where('Column46','DBS')
			  ->get()
			  ->result();
		}
		
		
		function get_graf_monthly_revenue_Sept_DBS_carry(){
			$this->db->select("SUM(Column5_70) as sept");
			$this->db->from('step_5');
			$this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Carry Forward');
			return $this->db->where('Column46','DBS')
			  ->get()
			  ->result();
		}
		
		
		function get_graf_monthly_revenue_Oct_DBS_carry(){
			$this->db->select("SUM(Column5_72) as oct");
			$this->db->from('step_5');
			$this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Carry Forward');
			return $this->db->where('Column46','DBS')
			  ->get()
			  ->result();
		}
		
		
		function get_graf_monthly_revenue_Nov_DBS_carry(){
			$this->db->select("SUM(Column5_73) as nov");
			$this->db->from('step_5');
			$this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Carry Forward');
			return $this->db->where('Column46','DBS')
			  ->get()
			  ->result();
		}
		
		function get_graf_monthly_revenue_Des_DBS_carry(){
			$this->db->select("SUM(Column5_74) as des");
			$this->db->from('step_5');
			$this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Carry Forward');
			return $this->db->where('Column46','DBS')
			  ->get()
			  ->result();
		}


                //-- Monthly Revenue BY DEPARTEMEN DES Carry Forward--
        function get_graf_monthly_revenue_Jan_DES_carry(){
            $this->db->select("SUM(Column5_60) as jan");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Carry Forward');
            return $this->db->where('Column46','DES')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Feb_DES_carry(){
            $this->db->select("SUM(Column5_61) as feb");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Carry Forward');
            return $this->db->where('Column46','DES')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Mar_DES_carry(){
            $this->db->select("SUM(Column5_62) as mar");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Carry Forward');
            return $this->db->where('Column46','DES')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Apr_DES_carry(){
            $this->db->select("SUM(Column5_64) as apr");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Carry Forward');
            return $this->db->where('Column46','DES')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Mei_des_carry(){
            $this->db->select("SUM(Column5_65) as mei");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Carry Forward');
            return $this->db->where('Column46','DES')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_jun_DES_carry(){
            $this->db->select("SUM(Column5_66) as jun");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Carry Forward');
            return $this->db->where('Column46','DES')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Jul_DES_carry(){
            $this->db->select("SUM(Column5_68) as jul");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Carry Forward');
            return $this->db->where('Column46','DES')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Aug_DES_carry(){
            $this->db->select("SUM(Column5_69) as aug");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Carry Forward');
            return $this->db->where('Column46','DES')
            ->get()
            ->result();
        }


        function get_graf_monthly_revenue_Sept_DES_carry(){
            $this->db->select("SUM(Column5_70) as sept");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Carry Forward');
            return $this->db->where('Column46','DES')
            ->get()
            ->result();
        }


        function get_graf_monthly_revenue_Oct_DES_carry(){
            $this->db->select("SUM(Column5_72) as oct");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Carry Forward');
            return $this->db->where('Column46','DES')
            ->get()
            ->result();
        }


        function get_graf_monthly_revenue_Nov_DES_carry(){
            $this->db->select("SUM(Column5_73) as nov");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Carry Forward');
            return $this->db->where('Column46','DES')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Des_DES_carry(){
            $this->db->select("SUM(Column5_74) as des");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Carry Forward');
            return $this->db->where('Column46','DES')
            ->get()
            ->result();
        }


                //-- Monthly Revenue BY DEPARTEMEN DGS Carry Forward--
        function get_graf_monthly_revenue_Jan_DGS_carry(){
            $this->db->select("SUM(Column5_60) as jan");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Carry Forward');
            return $this->db->where('Column46','DGS')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Feb_DGS_carry(){
            $this->db->select("SUM(Column5_61) as feb");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Carry Forward');
            return $this->db->where('Column46','DGS')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Mar_DGS_carry(){
            $this->db->select("SUM(Column5_62) as mar");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Carry Forward');
            return $this->db->where('Column46','DGS')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Apr_DGS_carry(){
            $this->db->select("SUM(Column5_64) as apr");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Carry Forward');
            return $this->db->where('Column46','DGS')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Mei_DGS_carry(){
            $this->db->select("SUM(Column5_65) as mei");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Carry Forward');
            return $this->db->where('Column46','DGS')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_jun_DGS_carry(){
            $this->db->select("SUM(Column5_66) as jun");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Carry Forward');
            return $this->db->where('Column46','DGS')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Jul_DGS_carry(){
            $this->db->select("SUM(Column5_68) as jul");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Carry Forward');
            return $this->db->where('Column46','DGS')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Aug_DGS_carry(){
            $this->db->select("SUM(Column5_69) as aug");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Carry Forward');
            return $this->db->where('Column46','DGS')
            ->get()
            ->result();
        }


        function get_graf_monthly_revenue_Sept_DGS_carry(){
            $this->db->select("SUM(Column5_70) as sept");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Carry Forward');
            return $this->db->where('Column46','DGS')
            ->get()
            ->result();
        }


        function get_graf_monthly_revenue_Oct_DGS_carry(){
            $this->db->select("SUM(Column5_72) as oct");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Carry Forward');
            return $this->db->where('Column46','DGS')
            ->get()
            ->result();
        }


        function get_graf_monthly_revenue_Nov_DGS_carry(){
            $this->db->select("SUM(Column5_73) as nov");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Carry Forward');
            return $this->db->where('Column46','DGS')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Des_DGS_carry(){
            $this->db->select("SUM(Column5_74) as des");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Carry Forward');
            return $this->db->where('Column46','DGS')
            ->get()
            ->result();
        }
        //-- Monthly Revenue BY DEPARTEMEN REG1 Carry Forward--
        function get_graf_monthly_revenue_Jan_REG1_carry(){
            $this->db->select("SUM(Column5_60) as jan");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Carry Forward');
            return $this->db->where('Column46','REG 1')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Feb_REG1_carry(){
            $this->db->select("SUM(Column5_61) as feb");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Carry Forward');
            return $this->db->where('Column46','REG 1')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Mar_REG1_carry(){
            $this->db->select("SUM(Column5_62) as mar");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Carry Forward');
            return $this->db->where('Column46','REG 1')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Apr_REG1_carry(){
            $this->db->select("SUM(Column5_64) as apr");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Carry Forward');
            return $this->db->where('Column46','REG 1')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Mei_REG1_carry(){
            $this->db->select("SUM(Column5_65) as mei");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Carry Forward');
            return $this->db->where('Column46','REG 1')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_jun_REG1_carry(){
            $this->db->select("SUM(Column5_66) as jun");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Carry Forward');
            return $this->db->where('Column46','REG 1')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Jul_REG1_carry(){
            $this->db->select("SUM(Column5_68) as jul");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Carry Forward');
            return $this->db->where('Column46','REG 1')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Aug_REG1_carry(){
            $this->db->select("SUM(Column5_69) as aug");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Carry Forward');
            return $this->db->where('Column46','REG 1')
            ->get()
            ->result();
        }


        function get_graf_monthly_revenue_Sept_REG1_carry(){
            $this->db->select("SUM(Column5_70) as sept");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Carry Forward');
            return $this->db->where('Column46','REG 1')
            ->get()
            ->result();
        }


        function get_graf_monthly_revenue_Oct_REG1_carry(){
            $this->db->select("SUM(Column5_72) as oct");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Carry Forward');
            return $this->db->where('Column46','REG 1')
            ->get()
            ->result();
        }


        function get_graf_monthly_revenue_Nov_REG1_carry(){
            $this->db->select("SUM(Column5_73) as nov");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Carry Forward');
            return $this->db->where('Column46','REG 1')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Des_REG1_carry(){
            $this->db->select("SUM(Column5_74) as des");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Carry Forward');
            return $this->db->where('Column46','REG 1')
            ->get()
            ->result();
        }


                //-- Monthly Revenue BY DEPARTEMEN REG 2 Carry Forward--
        function get_graf_monthly_revenue_Jan_REG2_carry(){
            $this->db->select("SUM(Column5_60) as jan");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Carry Forward');
            return $this->db->where('Column46','REG 2')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Feb_REG2_carry(){
            $this->db->select("SUM(Column5_61) as feb");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Carry Forward');
            return $this->db->where('Column46','REG 2')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Mar_REG2_carry(){
            $this->db->select("SUM(Column5_62) as mar");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Carry Forward');
            return $this->db->where('Column46','REG 2')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Apr_REG2_carry(){
            $this->db->select("SUM(Column5_64) as apr");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Carry Forward');
            return $this->db->where('Column46','REG 2')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Mei_REG2_carry(){
            $this->db->select("SUM(Column5_65) as mei");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Carry Forward');
            return $this->db->where('Column46','REG 2')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_jun_REG2_carry(){
            $this->db->select("SUM(Column5_66) as jun");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Carry Forward');
            return $this->db->where('Column46','REG 2')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Jul_REG2_carry(){
            $this->db->select("SUM(Column5_68) as jul");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Carry Forward');
            return $this->db->where('Column46','REG 2')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Aug_REG2_carry(){
            $this->db->select("SUM(Column5_69) as aug");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Carry Forward');
            return $this->db->where('Column46','REG 2')
            ->get()
            ->result();
        }


        function get_graf_monthly_revenue_Sept_REG2_carry(){
            $this->db->select("SUM(Column5_70) as sept");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Carry Forward');
            return $this->db->where('Column46','REG 2')
            ->get()
            ->result();
        }


        function get_graf_monthly_revenue_Oct_REG2_carry(){
            $this->db->select("SUM(Column5_72) as oct");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Carry Forward');
            return $this->db->where('Column46','REG 2')
            ->get()
            ->result();
        }


        function get_graf_monthly_revenue_Nov_REG2_carry(){
            $this->db->select("SUM(Column5_73) as nov");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Carry Forward');
            return $this->db->where('Column46','REG 1')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Des_REG2_carry(){
            $this->db->select("SUM(Column5_74) as des");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Carry Forward');
            return $this->db->where('Column46','REG 2')
            ->get()
            ->result();
        }


         //-- Monthly Revenue BY DEPARTEMEN REG 3 Carry Forward--
         function get_graf_monthly_revenue_Jan_REG3_carry(){
            $this->db->select("SUM(Column5_60) as jan");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Carry Forward');
            return $this->db->where('Column46','REG 3')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Feb_REG3_carry(){
            $this->db->select("SUM(Column5_61) as feb");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Carry Forward');
            return $this->db->where('Column46','REG 3')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Mar_REG3_carry(){
            $this->db->select("SUM(Column5_62) as mar");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Carry Forward');
            return $this->db->where('Column46','REG 3')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Apr_REG3_carry(){
            $this->db->select("SUM(Column5_64) as apr");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Carry Forward');
            return $this->db->where('Column46','REG 3')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Mei_REG3_carry(){
            $this->db->select("SUM(Column5_65) as mei");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Carry Forward');
            return $this->db->where('Column46','REG 3')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_jun_REG3_carry(){
            $this->db->select("SUM(Column5_66) as jun");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Carry Forward');
            return $this->db->where('Column46','REG 3')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Jul_REG3_carry(){
            $this->db->select("SUM(Column5_68) as jul");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Carry Forward');
            return $this->db->where('Column46','REG 3')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Aug_REG3_carry(){
            $this->db->select("SUM(Column5_69) as aug");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Carry Forward');
            return $this->db->where('Column46','REG 3')
            ->get()
            ->result();
        }


        function get_graf_monthly_revenue_Sept_REG3_carry(){
            $this->db->select("SUM(Column5_70) as sept");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Carry Forward');
            return $this->db->where('Column46','REG 3')
            ->get()
            ->result();
        }


        function get_graf_monthly_revenue_Oct_REG3_carry(){
            $this->db->select("SUM(Column5_72) as oct");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Carry Forward');
            return $this->db->where('Column46','REG 3')
            ->get()
            ->result();
        }


        function get_graf_monthly_revenue_Nov_REG3_carry(){
            $this->db->select("SUM(Column5_73) as nov");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Carry Forward');
            return $this->db->where('Column46','REG 3')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Des_REG3_carry(){
            $this->db->select("SUM(Column5_74) as des");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Carry Forward');
            return $this->db->where('Column46','REG 3')
            ->get()
            ->result();
        }


         //-- Monthly Revenue BY DEPARTEMEN REG 4 Carry Forward--
         function get_graf_monthly_revenue_Jan_REG4_carry(){
            $this->db->select("SUM(Column5_60) as jan");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Carry Forward');
            return $this->db->where('Column46','REG 4')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Feb_REG4_carry(){
            $this->db->select("SUM(Column5_61) as feb");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Carry Forward');
            return $this->db->where('Column46','REG 4')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Mar_REG4_carry(){
            $this->db->select("SUM(Column5_62) as mar");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Carry Forward');
            return $this->db->where('Column46','REG 4')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Apr_REG4_carry(){
            $this->db->select("SUM(Column5_64) as apr");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Carry Forward');
            return $this->db->where('Column46','REG 4')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Mei_REG4_carry(){
            $this->db->select("SUM(Column5_65) as mei");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Carry Forward');
            return $this->db->where('Column46','REG 4')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_jun_REG4_carry(){
            $this->db->select("SUM(Column5_66) as jun");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Carry Forward');
            return $this->db->where('Column46','REG 4')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Jul_REG4_carry(){
            $this->db->select("SUM(Column5_68) as jul");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Carry Forward');
            return $this->db->where('Column46','REG 4')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Aug_REG4_carry(){
            $this->db->select("SUM(Column5_69) as aug");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Carry Forward');
            return $this->db->where('Column46','REG 4')
            ->get()
            ->result();
        }


        function get_graf_monthly_revenue_Sept_REG4_carry(){
            $this->db->select("SUM(Column5_70) as sept");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Carry Forward');
            return $this->db->where('Column46','REG 4')
            ->get()
            ->result();
        }


        function get_graf_monthly_revenue_Oct_REG4_carry(){
            $this->db->select("SUM(Column5_72) as oct");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Carry Forward');
            return $this->db->where('Column46','REG 4')
            ->get()
            ->result();
        }


        function get_graf_monthly_revenue_Nov_REG4_carry(){
            $this->db->select("SUM(Column5_73) as nov");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Carry Forward');
            return $this->db->where('Column46','REG 4')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Des_REG4_carry(){
            $this->db->select("SUM(Column5_74) as des");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Carry Forward');
            return $this->db->where('Column46','REG 4')
            ->get()
            ->result();
        }

         //-- Monthly Revenue BY DEPARTEMEN REG 5 Carry Forward--
         function get_graf_monthly_revenue_Jan_REG5_carry(){
            $this->db->select("SUM(Column5_60) as jan");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Carry Forward');
            return $this->db->where('Column46','REG 5')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Feb_REG5_carry(){
            $this->db->select("SUM(Column5_61) as feb");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Carry Forward');
            return $this->db->where('Column46','REG 5')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Mar_REG5_carry(){
            $this->db->select("SUM(Column5_62) as mar");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Carry Forward');
            return $this->db->where('Column46','REG 5')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Apr_REG5_carry(){
            $this->db->select("SUM(Column5_64) as apr");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Carry Forward');
            return $this->db->where('Column46','REG 5')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Mei_REG5_carry(){
            $this->db->select("SUM(Column5_65) as mei");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Carry Forward');
            return $this->db->where('Column46','REG 5')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_jun_REG5_carry(){
            $this->db->select("SUM(Column5_66) as jun");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Carry Forward');
            return $this->db->where('Column46','REG 5')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Jul_REG5_carry(){
            $this->db->select("SUM(Column5_68) as jul");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Carry Forward');
            return $this->db->where('Column46','REG 5')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Aug_REG5_carry(){
            $this->db->select("SUM(Column5_69) as aug");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Carry Forward');
            return $this->db->where('Column46','REG 5')
            ->get()
            ->result();
        }


        function get_graf_monthly_revenue_Sept_REG5_carry(){
            $this->db->select("SUM(Column5_70) as sept");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Carry Forward');
            return $this->db->where('Column46','REG 5')
            ->get()
            ->result();
        }


        function get_graf_monthly_revenue_Oct_REG5_carry(){
            $this->db->select("SUM(Column5_72) as oct");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Carry Forward');
            return $this->db->where('Column46','REG 5')
            ->get()
            ->result();
        }


        function get_graf_monthly_revenue_Nov_REG5_carry(){
            $this->db->select("SUM(Column5_73) as nov");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Carry Forward');
            return $this->db->where('Column46','REG 5')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Des_REG5_carry(){
            $this->db->select("SUM(Column5_74) as des");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Carry Forward');
            return $this->db->where('Column46','REG 5')
            ->get()
            ->result();
        }

         //-- Monthly Revenue BY DEPARTEMEN REG6 Carry Forward--
         function get_graf_monthly_revenue_Jan_REG6_carry(){
            $this->db->select("SUM(Column5_60) as jan");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Carry Forward');
            return $this->db->where('Column46','REG 6')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Feb_REG6_carry(){
            $this->db->select("SUM(Column5_61) as feb");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Carry Forward');
            return $this->db->where('Column46','REG 6')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Mar_REG6_carry(){
            $this->db->select("SUM(Column5_62) as mar");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Carry Forward');
            return $this->db->where('Column46','REG 6')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Apr_REG6_carry(){
            $this->db->select("SUM(Column5_64) as apr");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Carry Forward');
            return $this->db->where('Column46','REG 6')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Mei_REG6_carry(){
            $this->db->select("SUM(Column5_65) as mei");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Carry Forward');
            return $this->db->where('Column46','REG 6')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_jun_REG6_carry(){
            $this->db->select("SUM(Column5_66) as jun");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Carry Forward');
            return $this->db->where('Column46','REG 6')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Jul_REG6_carry(){
            $this->db->select("SUM(Column5_68) as jul");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Carry Forward');
            return $this->db->where('Column46','REG 6')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Aug_REG6_carry(){
            $this->db->select("SUM(Column5_69) as aug");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Carry Forward');
            return $this->db->where('Column46','REG 6')
            ->get()
            ->result();
        }


        function get_graf_monthly_revenue_Sept_REG6_carry(){
            $this->db->select("SUM(Column5_70) as sept");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Carry Forward');
            return $this->db->where('Column46','REG 6')
            ->get()
            ->result();
        }


        function get_graf_monthly_revenue_Oct_REG6_carry(){
            $this->db->select("SUM(Column5_72) as oct");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Carry Forward');
            return $this->db->where('Column46','REG 6')
            ->get()
            ->result();
        }


        function get_graf_monthly_revenue_Nov_REG6_carry(){
            $this->db->select("SUM(Column5_73) as nov");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Carry Forward');
            return $this->db->where('Column46','REG 6')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Des_REG6_carry(){
            $this->db->select("SUM(Column5_74) as des");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Carry Forward');
            return $this->db->where('Column46','REG 6')
            ->get()
            ->result();
        }


         //-- Monthly Revenue BY DEPARTEMEN REG7 Carry Forward--
         function get_graf_monthly_revenue_Jan_REG7_carry(){
            $this->db->select("SUM(Column5_60) as jan");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Carry Forward');
            return $this->db->where('Column46','REG 7')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Feb_REG7_carry(){
            $this->db->select("SUM(Column5_61) as feb");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Carry Forward');
            return $this->db->where('Column46','REG 7')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Mar_REG7_carry(){
            $this->db->select("SUM(Column5_62) as mar");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Carry Forward');
            return $this->db->where('Column46','REG 7')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Apr_REG7_carry(){
            $this->db->select("SUM(Column5_64) as apr");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Carry Forward');
            return $this->db->where('Column46','REG 7')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Mei_REG7_carry(){
            $this->db->select("SUM(Column5_65) as mei");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Carry Forward');
            return $this->db->where('Column46','REG 7')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_jun_REG7_carry(){
            $this->db->select("SUM(Column5_66) as jun");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Carry Forward');
            return $this->db->where('Column46','REG 7')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Jul_REG7_carry(){
            $this->db->select("SUM(Column5_68) as jul");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Carry Forward');
            return $this->db->where('Column46','REG 7')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Aug_REG7_carry(){
            $this->db->select("SUM(Column5_69) as aug");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Carry Forward');
            return $this->db->where('Column46','REG 7')
            ->get()
            ->result();
        }


        function get_graf_monthly_revenue_Sept_REG7_carry(){
            $this->db->select("SUM(Column5_70) as sept");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Carry Forward');
            return $this->db->where('Column46','REG 7')
            ->get()
            ->result();
        }


        function get_graf_monthly_revenue_Oct_REG7_carry(){
            $this->db->select("SUM(Column5_72) as oct");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Carry Forward');
            return $this->db->where('Column46','REG 7')
            ->get()
            ->result();
        }


        function get_graf_monthly_revenue_Nov_REG7_carry(){
            $this->db->select("SUM(Column5_73) as nov");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Carry Forward');
            return $this->db->where('Column46','REG 7')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Des_REG7_carry(){
            $this->db->select("SUM(Column5_74) as des");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Carry Forward');
            return $this->db->where('Column46','REG 7')
            ->get()
            ->result();
        }

         //-- Monthly Revenue BY DEPARTEMEN SDA Carry Forward--
         function get_graf_monthly_revenue_Jan_SDA_carry(){
            $this->db->select("SUM(Column5_60) as jan");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Carry Forward');
            return $this->db->where('Column46','SDA')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Feb_SDA_carry(){
            $this->db->select("SUM(Column5_61) as feb");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Carry Forward');
            return $this->db->where('Column46','SDA')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Mar_SDA_carry(){
            $this->db->select("SUM(Column5_62) as mar");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Carry Forward');
            return $this->db->where('Column46','SDA')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Apr_SDA_carry(){
            $this->db->select("SUM(Column5_64) as apr");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Carry Forward');
            return $this->db->where('Column46','SDA')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Mei_SDA_carry(){
            $this->db->select("SUM(Column5_65) as mei");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Carry Forward');
            return $this->db->where('Column46','SDA')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_jun_SDA_carry(){
            $this->db->select("SUM(Column5_66) as jun");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Carry Forward');
            return $this->db->where('Column46','SDA')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Jul_SDA_carry(){
            $this->db->select("SUM(Column5_68) as jul");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Carry Forward');
            return $this->db->where('Column46','SDA')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Aug_SDA_carry(){
            $this->db->select("SUM(Column5_69) as aug");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Carry Forward');
            return $this->db->where('Column46','SDA')
            ->get()
            ->result();
        }


        function get_graf_monthly_revenue_Sept_SDA_carry(){
            $this->db->select("SUM(Column5_70) as sept");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Carry Forward');
            return $this->db->where('Column46','SDA')
            ->get()
            ->result();
        }


        function get_graf_monthly_revenue_Oct_SDA_carry(){
            $this->db->select("SUM(Column5_72) as oct");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Carry Forward');
            return $this->db->where('Column46','SDA')
            ->get()
            ->result();
        }


        function get_graf_monthly_revenue_Nov_SDA_carry(){
            $this->db->select("SUM(Column5_73) as nov");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Carry Forward');
            return $this->db->where('Column46','SDA')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Des_SDA_carry(){
            $this->db->select("SUM(Column5_74) as des");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Carry Forward');
            return $this->db->where('Column46','SDA')
            ->get()
            ->result();
        }

//-- Monthly Revenue BY DEPARTEMEN DBS Accrue--
		function get_graf_monthly_revenue_Jan_DBS_accrue(){
			$this->db->select("SUM(Column5_60) as jan");
			$this->db->from('step_5');
			$this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Accrue');
			return $this->db->where('Column46','DBS')
			  ->get()
			  ->result();
		}
	
		function get_graf_monthly_revenue_Feb_DBS_accrue(){
			$this->db->select("SUM(Column5_61) as feb");
			$this->db->from('step_5');
			$this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Accrue');
			return $this->db->where('Column46','DBS')
			  ->get()
			  ->result();
		}
		
		function get_graf_monthly_revenue_Mar_DBS_accrue(){
			$this->db->select("SUM(Column5_62) as mar");
			$this->db->from('step_5');
			$this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Accrue');
			return $this->db->where('Column46','DBS')
			  ->get()
			  ->result();
		}
		
		function get_graf_monthly_revenue_Apr_DBS_accrue(){
			$this->db->select("SUM(Column5_64) as apr");
			$this->db->from('step_5');
			$this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Accrue');
			return $this->db->where('Column46','DBS')
			  ->get()
			  ->result();
		}
		
		function get_graf_monthly_revenue_Mei_DBS_accrue(){
			$this->db->select("SUM(Column5_65) as mei");
			$this->db->from('step_5');
			$this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Accrue');
			return $this->db->where('Column46','DBS')
			  ->get()
			  ->result();
		}
		
		function get_graf_monthly_revenue_jun_DBS_accrue(){
			$this->db->select("SUM(Column5_66) as jun");
			$this->db->from('step_5');
			$this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Accrue');
			return $this->db->where('Column46','DBS')
			  ->get()
			  ->result();
		}
		
		function get_graf_monthly_revenue_Jul_DBS_accrue(){
			$this->db->select("SUM(Column5_68) as jul");
			$this->db->from('step_5');
			$this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Accrue');
			return $this->db->where('Column46','DBS')
			  ->get()
			  ->result();
		}
		
		function get_graf_monthly_revenue_Aug_DBS_accrue(){
			$this->db->select("SUM(Column5_69) as aug");
			$this->db->from('step_5');
			$this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Accrue');
			return $this->db->where('Column46','DBS')
			  ->get()
			  ->result();
		}
		
		
		function get_graf_monthly_revenue_Sept_DBS_accrue(){
			$this->db->select("SUM(Column5_70) as sept");
			$this->db->from('step_5');
			$this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Accrue');
			return $this->db->where('Column46','DBS')
			  ->get()
			  ->result();
		}
		
		
		function get_graf_monthly_revenue_Oct_DBS_accrue(){
			$this->db->select("SUM(Column5_72) as oct");
			$this->db->from('step_5');
			$this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Accrue');
			return $this->db->where('Column46','DBS')
			  ->get()
			  ->result();
		}
		
		
		function get_graf_monthly_revenue_Nov_DBS_accrue(){
			$this->db->select("SUM(Column5_73) as nov");
			$this->db->from('step_5');
			$this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Accrue');
			return $this->db->where('Column46','DBS')
			  ->get()
			  ->result();
		}
		
		function get_graf_monthly_revenue_Des_DBS_accrue(){
			$this->db->select("SUM(Column5_74) as des");
			$this->db->from('step_5');
			$this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Accrue');
			return $this->db->where('Column46','DBS')
			  ->get()
			  ->result();
		}


                //-- Monthly Revenue BY DEPARTEMEN DES Accrue--
        function get_graf_monthly_revenue_Jan_DES_accrue(){
            $this->db->select("SUM(Column5_60) as jan");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Accrue');
            return $this->db->where('Column46','DES')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Feb_DES_accrue(){
            $this->db->select("SUM(Column5_61) as feb");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Accrue');
            return $this->db->where('Column46','DES')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Mar_DES_accrue(){
            $this->db->select("SUM(Column5_62) as mar");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Accrue');
            return $this->db->where('Column46','DES')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Apr_DES_accrue(){
            $this->db->select("SUM(Column5_64) as apr");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Accrue');
            return $this->db->where('Column46','DES')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Mei_des_accrue(){
            $this->db->select("SUM(Column5_65) as mei");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Accrue');
            return $this->db->where('Column46','DES')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_jun_DES_accrue(){
            $this->db->select("SUM(Column5_66) as jun");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Accrue');
            return $this->db->where('Column46','DES')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Jul_DES_accrue(){
            $this->db->select("SUM(Column5_68) as jul");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Accrue');
            return $this->db->where('Column46','DES')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Aug_DES_accrue(){
            $this->db->select("SUM(Column5_69) as aug");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Accrue');
            return $this->db->where('Column46','DES')
            ->get()
            ->result();
        }


        function get_graf_monthly_revenue_Sept_DES_accrue(){
            $this->db->select("SUM(Column5_70) as sept");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Accrue');
            return $this->db->where('Column46','DES')
            ->get()
            ->result();
        }


        function get_graf_monthly_revenue_Oct_DES_accrue(){
            $this->db->select("SUM(Column5_72) as oct");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Accrue');
            return $this->db->where('Column46','DES')
            ->get()
            ->result();
        }


        function get_graf_monthly_revenue_Nov_DES_accrue(){
            $this->db->select("SUM(Column5_73) as nov");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Accrue');
            return $this->db->where('Column46','DES')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Des_DES_accrue(){
            $this->db->select("SUM(Column5_74) as des");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Accrue');
            return $this->db->where('Column46','DES')
            ->get()
            ->result();
        }


                //-- Monthly Revenue BY DEPARTEMEN DGS Accrue--
        function get_graf_monthly_revenue_Jan_DGS_accrue(){
            $this->db->select("SUM(Column5_60) as jan");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Accrue');
            return $this->db->where('Column46','DGS')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Feb_DGS_accrue(){
            $this->db->select("SUM(Column5_61) as feb");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Accrue');
            return $this->db->where('Column46','DGS')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Mar_DGS_accrue(){
            $this->db->select("SUM(Column5_62) as mar");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Accrue');
            return $this->db->where('Column46','DGS')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Apr_DGS_accrue(){
            $this->db->select("SUM(Column5_64) as apr");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Accrue');
            return $this->db->where('Column46','DGS')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Mei_DGS_accrue(){
            $this->db->select("SUM(Column5_65) as mei");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Accrue');
            return $this->db->where('Column46','DGS')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_jun_DGS_accrue(){
            $this->db->select("SUM(Column5_66) as jun");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Accrue');
            return $this->db->where('Column46','DGS')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Jul_DGS_accrue(){
            $this->db->select("SUM(Column5_68) as jul");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Accrue');
            return $this->db->where('Column46','DGS')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Aug_DGS_accrue(){
            $this->db->select("SUM(Column5_69) as aug");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Accrue');
            return $this->db->where('Column46','DGS')
            ->get()
            ->result();
        }


        function get_graf_monthly_revenue_Sept_DGS_accrue(){
            $this->db->select("SUM(Column5_70) as sept");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Accrue');
            return $this->db->where('Column46','DGS')
            ->get()
            ->result();
        }


        function get_graf_monthly_revenue_Oct_DGS_accrue(){
            $this->db->select("SUM(Column5_72) as oct");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Accrue');
            return $this->db->where('Column46','DGS')
            ->get()
            ->result();
        }


        function get_graf_monthly_revenue_Nov_DGS_accrue(){
            $this->db->select("SUM(Column5_73) as nov");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Accrue');
            return $this->db->where('Column46','DGS')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Des_DGS_accrue(){
            $this->db->select("SUM(Column5_74) as des");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Accrue');
            return $this->db->where('Column46','DGS')
            ->get()
            ->result();
        }
        //-- Monthly Revenue BY DEPARTEMEN REG1 Accrue--
        function get_graf_monthly_revenue_Jan_REG1_accrue(){
            $this->db->select("SUM(Column5_60) as jan");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Accrue');
            return $this->db->where('Column46','REG 1')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Feb_REG1_accrue(){
            $this->db->select("SUM(Column5_61) as feb");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Accrue');
            return $this->db->where('Column46','REG 1')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Mar_REG1_accrue(){
            $this->db->select("SUM(Column5_62) as mar");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Accrue');
            return $this->db->where('Column46','REG 1')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Apr_REG1_accrue(){
            $this->db->select("SUM(Column5_64) as apr");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Accrue');
            return $this->db->where('Column46','REG 1')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Mei_REG1_accrue(){
            $this->db->select("SUM(Column5_65) as mei");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Accrue');
            return $this->db->where('Column46','REG 1')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_jun_REG1_accrue(){
            $this->db->select("SUM(Column5_66) as jun");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Accrue');
            return $this->db->where('Column46','REG 1')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Jul_REG1_accrue(){
            $this->db->select("SUM(Column5_68) as jul");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Accrue');
            return $this->db->where('Column46','REG 1')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Aug_REG1_accrue(){
            $this->db->select("SUM(Column5_69) as aug");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Accrue');
            return $this->db->where('Column46','REG 1')
            ->get()
            ->result();
        }


        function get_graf_monthly_revenue_Sept_REG1_accrue(){
            $this->db->select("SUM(Column5_70) as sept");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Accrue');
            return $this->db->where('Column46','REG 1')
            ->get()
            ->result();
        }


        function get_graf_monthly_revenue_Oct_REG1_accrue(){
            $this->db->select("SUM(Column5_72) as oct");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Accrue');
            return $this->db->where('Column46','REG 1')
            ->get()
            ->result();
        }


        function get_graf_monthly_revenue_Nov_REG1_accrue(){
            $this->db->select("SUM(Column5_73) as nov");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Accrue');
            return $this->db->where('Column46','REG 1')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Des_REG1_accrue(){
            $this->db->select("SUM(Column5_74) as des");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Accrue');
            return $this->db->where('Column46','REG 1')
            ->get()
            ->result();
        }


                //-- Monthly Revenue BY DEPARTEMEN REG 2 Accrue--
        function get_graf_monthly_revenue_Jan_REG2_accrue(){
            $this->db->select("SUM(Column5_60) as jan");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Accrue');
            return $this->db->where('Column46','REG 2')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Feb_REG2_accrue(){
            $this->db->select("SUM(Column5_61) as feb");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Accrue');
            return $this->db->where('Column46','REG 2')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Mar_REG2_accrue(){
            $this->db->select("SUM(Column5_62) as mar");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Accrue');
            return $this->db->where('Column46','REG 2')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Apr_REG2_accrue(){
            $this->db->select("SUM(Column5_64) as apr");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Accrue');
            return $this->db->where('Column46','REG 2')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Mei_REG2_accrue(){
            $this->db->select("SUM(Column5_65) as mei");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Accrue');
            return $this->db->where('Column46','REG 2')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_jun_REG2_accrue(){
            $this->db->select("SUM(Column5_66) as jun");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Accrue');
            return $this->db->where('Column46','REG 2')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Jul_REG2_accrue(){
            $this->db->select("SUM(Column5_68) as jul");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Accrue');
            return $this->db->where('Column46','REG 2')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Aug_REG2_accrue(){
            $this->db->select("SUM(Column5_69) as aug");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Accrue');
            return $this->db->where('Column46','REG 2')
            ->get()
            ->result();
        }


        function get_graf_monthly_revenue_Sept_REG2_accrue(){
            $this->db->select("SUM(Column5_70) as sept");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Accrue');
            return $this->db->where('Column46','REG 2')
            ->get()
            ->result();
        }


        function get_graf_monthly_revenue_Oct_REG2_accrue(){
            $this->db->select("SUM(Column5_72) as oct");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Accrue');
            return $this->db->where('Column46','REG 2')
            ->get()
            ->result();
        }


        function get_graf_monthly_revenue_Nov_REG2_accrue(){
            $this->db->select("SUM(Column5_73) as nov");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Accrue');
            return $this->db->where('Column46','REG 1')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Des_REG2_accrue(){
            $this->db->select("SUM(Column5_74) as des");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Accrue');
            return $this->db->where('Column46','REG 2')
            ->get()
            ->result();
        }


         //-- Monthly Revenue BY DEPARTEMEN REG 3 Accrue--
         function get_graf_monthly_revenue_Jan_REG3_accrue(){
            $this->db->select("SUM(Column5_60) as jan");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Accrue');
            return $this->db->where('Column46','REG 3')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Feb_REG3_accrue(){
            $this->db->select("SUM(Column5_61) as feb");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Accrue');
            return $this->db->where('Column46','REG 3')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Mar_REG3_accrue(){
            $this->db->select("SUM(Column5_62) as mar");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Accrue');
            return $this->db->where('Column46','REG 3')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Apr_REG3_accrue(){
            $this->db->select("SUM(Column5_64) as apr");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Accrue');
            return $this->db->where('Column46','REG 3')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Mei_REG3_accrue(){
            $this->db->select("SUM(Column5_65) as mei");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Accrue');
            return $this->db->where('Column46','REG 3')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_jun_REG3_accrue(){
            $this->db->select("SUM(Column5_66) as jun");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Accrue');
            return $this->db->where('Column46','REG 3')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Jul_REG3_accrue(){
            $this->db->select("SUM(Column5_68) as jul");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Accrue');
            return $this->db->where('Column46','REG 3')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Aug_REG3_accrue(){
            $this->db->select("SUM(Column5_69) as aug");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Accrue');
            return $this->db->where('Column46','REG 3')
            ->get()
            ->result();
        }


        function get_graf_monthly_revenue_Sept_REG3_accrue(){
            $this->db->select("SUM(Column5_70) as sept");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Accrue');
            return $this->db->where('Column46','REG 3')
            ->get()
            ->result();
        }


        function get_graf_monthly_revenue_Oct_REG3_accrue(){
            $this->db->select("SUM(Column5_72) as oct");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Accrue');
            return $this->db->where('Column46','REG 3')
            ->get()
            ->result();
        }


        function get_graf_monthly_revenue_Nov_REG3_accrue(){
            $this->db->select("SUM(Column5_73) as nov");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Accrue');
            return $this->db->where('Column46','REG 3')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Des_REG3_accrue(){
            $this->db->select("SUM(Column5_74) as des");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Accrue');
            return $this->db->where('Column46','REG 3')
            ->get()
            ->result();
        }


         //-- Monthly Revenue BY DEPARTEMEN REG 4 Accrue--
         function get_graf_monthly_revenue_Jan_REG4_accrue(){
            $this->db->select("SUM(Column5_60) as jan");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Accrue');
            return $this->db->where('Column46','REG 4')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Feb_REG4_accrue(){
            $this->db->select("SUM(Column5_61) as feb");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Accrue');
            return $this->db->where('Column46','REG 4')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Mar_REG4_accrue(){
            $this->db->select("SUM(Column5_62) as mar");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Accrue');
            return $this->db->where('Column46','REG 4')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Apr_REG4_accrue(){
            $this->db->select("SUM(Column5_64) as apr");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Accrue');
            return $this->db->where('Column46','REG 4')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Mei_REG4_accrue(){
            $this->db->select("SUM(Column5_65) as mei");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Accrue');
            return $this->db->where('Column46','REG 4')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_jun_REG4_accrue(){
            $this->db->select("SUM(Column5_66) as jun");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Accrue');
            return $this->db->where('Column46','REG 4')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Jul_REG4_accrue(){
            $this->db->select("SUM(Column5_68) as jul");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Accrue');
            return $this->db->where('Column46','REG 4')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Aug_REG4_accrue(){
            $this->db->select("SUM(Column5_69) as aug");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Accrue');
            return $this->db->where('Column46','REG 4')
            ->get()
            ->result();
        }


        function get_graf_monthly_revenue_Sept_REG4_accrue(){
            $this->db->select("SUM(Column5_70) as sept");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Accrue');
            return $this->db->where('Column46','REG 4')
            ->get()
            ->result();
        }


        function get_graf_monthly_revenue_Oct_REG4_accrue(){
            $this->db->select("SUM(Column5_72) as oct");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Accrue');
            return $this->db->where('Column46','REG 4')
            ->get()
            ->result();
        }


        function get_graf_monthly_revenue_Nov_REG4_accrue(){
            $this->db->select("SUM(Column5_73) as nov");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Accrue');
            return $this->db->where('Column46','REG 4')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Des_REG4_accrue(){
            $this->db->select("SUM(Column5_74) as des");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Accrue');
            return $this->db->where('Column46','REG 4')
            ->get()
            ->result();
        }

         //-- Monthly Revenue BY DEPARTEMEN REG 5 Accrue--
         function get_graf_monthly_revenue_Jan_REG5_accrue(){
            $this->db->select("SUM(Column5_60) as jan");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Accrue');
            return $this->db->where('Column46','REG 5')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Feb_REG5_accrue(){
            $this->db->select("SUM(Column5_61) as feb");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Accrue');
            return $this->db->where('Column46','REG 5')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Mar_REG5_accrue(){
            $this->db->select("SUM(Column5_62) as mar");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Accrue');
            return $this->db->where('Column46','REG 5')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Apr_REG5_accrue(){
            $this->db->select("SUM(Column5_64) as apr");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Accrue');
            return $this->db->where('Column46','REG 5')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Mei_REG5_accrue(){
            $this->db->select("SUM(Column5_65) as mei");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Accrue');
            return $this->db->where('Column46','REG 5')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_jun_REG5_accrue(){
            $this->db->select("SUM(Column5_66) as jun");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Accrue');
            return $this->db->where('Column46','REG 5')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Jul_REG5_accrue(){
            $this->db->select("SUM(Column5_68) as jul");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Accrue');
            return $this->db->where('Column46','REG 5')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Aug_REG5_accrue(){
            $this->db->select("SUM(Column5_69) as aug");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Accrue');
            return $this->db->where('Column46','REG 5')
            ->get()
            ->result();
        }


        function get_graf_monthly_revenue_Sept_REG5_accrue(){
            $this->db->select("SUM(Column5_70) as sept");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Accrue');
            return $this->db->where('Column46','REG 5')
            ->get()
            ->result();
        }


        function get_graf_monthly_revenue_Oct_REG5_accrue(){
            $this->db->select("SUM(Column5_72) as oct");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Accrue');
            return $this->db->where('Column46','REG 5')
            ->get()
            ->result();
        }


        function get_graf_monthly_revenue_Nov_REG5_accrue(){
            $this->db->select("SUM(Column5_73) as nov");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Accrue');
            return $this->db->where('Column46','REG 5')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Des_REG5_accrue(){
            $this->db->select("SUM(Column5_74) as des");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Accrue');
            return $this->db->where('Column46','REG 5')
            ->get()
            ->result();
        }

         //-- Monthly Revenue BY DEPARTEMEN REG6 Accrue--
         function get_graf_monthly_revenue_Jan_REG6_accrue(){
            $this->db->select("SUM(Column5_60) as jan");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Accrue');
            return $this->db->where('Column46','REG 6')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Feb_REG6_accrue(){
            $this->db->select("SUM(Column5_61) as feb");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Accrue');
            return $this->db->where('Column46','REG 6')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Mar_REG6_accrue(){
            $this->db->select("SUM(Column5_62) as mar");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Accrue');
            return $this->db->where('Column46','REG 6')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Apr_REG6_accrue(){
            $this->db->select("SUM(Column5_64) as apr");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Accrue');
            return $this->db->where('Column46','REG 6')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Mei_REG6_accrue(){
            $this->db->select("SUM(Column5_65) as mei");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Accrue');
            return $this->db->where('Column46','REG 6')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_jun_REG6_accrue(){
            $this->db->select("SUM(Column5_66) as jun");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Accrue');
            return $this->db->where('Column46','REG 6')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Jul_REG6_accrue(){
            $this->db->select("SUM(Column5_68) as jul");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Accrue');
            return $this->db->where('Column46','REG 6')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Aug_REG6_accrue(){
            $this->db->select("SUM(Column5_69) as aug");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Accrue');
            return $this->db->where('Column46','REG 6')
            ->get()
            ->result();
        }


        function get_graf_monthly_revenue_Sept_REG6_accrue(){
            $this->db->select("SUM(Column5_70) as sept");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Accrue');
            return $this->db->where('Column46','REG 6')
            ->get()
            ->result();
        }


        function get_graf_monthly_revenue_Oct_REG6_accrue(){
            $this->db->select("SUM(Column5_72) as oct");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Accrue');
            return $this->db->where('Column46','REG 6')
            ->get()
            ->result();
        }


        function get_graf_monthly_revenue_Nov_REG6_accrue(){
            $this->db->select("SUM(Column5_73) as nov");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Accrue');
            return $this->db->where('Column46','REG 6')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Des_REG6_accrue(){
            $this->db->select("SUM(Column5_74) as des");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Accrue');
            return $this->db->where('Column46','REG 6')
            ->get()
            ->result();
        }


         //-- Monthly Revenue BY DEPARTEMEN REG7 Accrue--
         function get_graf_monthly_revenue_Jan_REG7_accrue(){
            $this->db->select("SUM(Column5_60) as jan");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Accrue');
            return $this->db->where('Column46','REG 7')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Feb_REG7_accrue(){
            $this->db->select("SUM(Column5_61) as feb");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Accrue');
            return $this->db->where('Column46','REG 7')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Mar_REG7_accrue(){
            $this->db->select("SUM(Column5_62) as mar");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Accrue');
            return $this->db->where('Column46','REG 7')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Apr_REG7_accrue(){
            $this->db->select("SUM(Column5_64) as apr");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Accrue');
            return $this->db->where('Column46','REG 7')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Mei_REG7_accrue(){
            $this->db->select("SUM(Column5_65) as mei");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Accrue');
            return $this->db->where('Column46','REG 7')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_jun_REG7_accrue(){
            $this->db->select("SUM(Column5_66) as jun");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Accrue');
            return $this->db->where('Column46','REG 7')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Jul_REG7_accrue(){
            $this->db->select("SUM(Column5_68) as jul");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Accrue');
            return $this->db->where('Column46','REG 7')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Aug_REG7_accrue(){
            $this->db->select("SUM(Column5_69) as aug");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Accrue');
            return $this->db->where('Column46','REG 7')
            ->get()
            ->result();
        }


        function get_graf_monthly_revenue_Sept_REG7_accrue(){
            $this->db->select("SUM(Column5_70) as sept");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Accrue');
            return $this->db->where('Column46','REG 7')
            ->get()
            ->result();
        }


        function get_graf_monthly_revenue_Oct_REG7_accrue(){
            $this->db->select("SUM(Column5_72) as oct");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Accrue');
            return $this->db->where('Column46','REG 7')
            ->get()
            ->result();
        }


        function get_graf_monthly_revenue_Nov_REG7_accrue(){
            $this->db->select("SUM(Column5_73) as nov");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Accrue');
            return $this->db->where('Column46','REG 7')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Des_REG7_accrue(){
            $this->db->select("SUM(Column5_74) as des");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Accrue');
            return $this->db->where('Column46','REG 7')
            ->get()
            ->result();
        }

         //-- Monthly Revenue BY DEPARTEMEN SDA Accrue--
         function get_graf_monthly_revenue_Jan_SDA_accrue(){
            $this->db->select("SUM(Column5_60) as jan");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Accrue');
            return $this->db->where('Column46','SDA')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Feb_SDA_accrue(){
            $this->db->select("SUM(Column5_61) as feb");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Accrue');
            return $this->db->where('Column46','SDA')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Mar_SDA_accrue(){
            $this->db->select("SUM(Column5_62) as mar");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Accrue');
            return $this->db->where('Column46','SDA')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Apr_SDA_accrue(){
            $this->db->select("SUM(Column5_64) as apr");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Accrue');
            return $this->db->where('Column46','SDA')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Mei_SDA_accrue(){
            $this->db->select("SUM(Column5_65) as mei");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Accrue');
            return $this->db->where('Column46','SDA')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_jun_SDA_accrue(){
            $this->db->select("SUM(Column5_66) as jun");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Accrue');
            return $this->db->where('Column46','SDA')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Jul_SDA_accrue(){
            $this->db->select("SUM(Column5_68) as jul");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Accrue');
            return $this->db->where('Column46','SDA')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Aug_SDA_accrue(){
            $this->db->select("SUM(Column5_69) as aug");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Accrue');
            return $this->db->where('Column46','SDA')
            ->get()
            ->result();
        }


        function get_graf_monthly_revenue_Sept_SDA_accrue(){
            $this->db->select("SUM(Column5_70) as sept");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Accrue');
            return $this->db->where('Column46','SDA')
            ->get()
            ->result();
        }


        function get_graf_monthly_revenue_Oct_SDA_accrue(){
            $this->db->select("SUM(Column5_72) as oct");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Accrue');
            return $this->db->where('Column46','SDA')
            ->get()
            ->result();
        }


        function get_graf_monthly_revenue_Nov_SDA_accrue(){
            $this->db->select("SUM(Column5_73) as nov");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Accrue');
            return $this->db->where('Column46','SDA')
            ->get()
            ->result();
        }

        function get_graf_monthly_revenue_Des_SDA_accrue(){
            $this->db->select("SUM(Column5_74) as des");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->where('Column47','Accrue');
            return $this->db->where('Column46','SDA')
            ->get()
            ->result();
        }
		


	//FUNGSI GET DATA POP KONTRAK MULTI
	function get_data_pop_multi(){
        if (isset($_POST['submit'])) {  
            if(isset($_POST['dbs'])OR($_POST['des'])OR($_POST['dgs'])OR($_POST['reg1'])OR($_POST['reg2'])OR($_POST['reg3'])OR($_POST['reg4'])OR($_POST['reg5'])OR($_POST['reg6'])OR($_POST['reg7'])OR($_POST['sda'])AND($_POST['new'])OR($_POST['carry'])OR($_POST['accrue'])){
                $dbs=$_POST['dbs'];
                $des=$_POST['des'];
                $dgs=$_POST['dgs'];
                $reg1=$_POST['reg1'];
                $reg2=$_POST['reg2'];
                $reg3=$_POST['reg3'];
                $reg4=$_POST['reg4'];
                $reg5=$_POST['reg5'];
                $reg6=$_POST['reg6'];
                $reg7=$_POST['reg7'];
                $sda=$_POST['sda'];
                $new=$_POST['new'];
                $carry=$_POST['carry'];
                $accrue=$_POST['accrue'];
            $this->db->select("COUNT(DISTINCT Column6_3) as multi");
            $this->db->from('comp_adj_per_kontrak');
            $this->db->join('step_1', 'comp_adj_per_kontrak.Column6_3 = step_1.Column7');
            $this->db->or_where('Column46',"".$dbs."");
            $this->db->where('Column47',"".$new."");
            $this->db->or_where('Column46',"".$des."");
            $this->db->where('Column47',"".$new."");
            $this->db->or_where('Column46',"".$dgs."");
            $this->db->where('Column47',"".$new."");
            $this->db->or_where('Column46',"".$reg1."");
            $this->db->where('Column47',"".$new."");
            $this->db->or_where('Column46',"".$reg2."");
            $this->db->where('Column47',"".$new."");
            $this->db->or_where('Column46',"".$reg3."");
            $this->db->where('Column47',"".$new."");
            $this->db->or_where('Column46',"".$reg4."");
            $this->db->where('Column47',"".$new."");
            $this->db->or_where('Column46',"".$reg5."");
            $this->db->where('Column47',"".$new."");
            $this->db->or_where('Column46',"".$reg6."");
            $this->db->where('Column47',"".$new."");
            $this->db->or_where('Column46',"".$reg7."");
            $this->db->where('Column47',"".$new."");
            $this->db->or_where('Column46',"".$sda."");
            $this->db->where('Column47',"".$new."");
            
            $this->db->or_where('Column46',"".$dbs."");
            $this->db->where('Column47',"".$carry."");
            $this->db->or_where('Column46',"".$des."");
            $this->db->where('Column47',"".$carry."");
            $this->db->or_where('Column46',"".$dgs."");
            $this->db->where('Column47',"".$carry."");
            $this->db->or_where('Column46',"".$reg1."");
            $this->db->where('Column47',"".$carry."");
            $this->db->or_where('Column46',"".$reg2."");
            $this->db->where('Column47',"".$carry."");
            $this->db->or_where('Column46',"".$reg3."");
            $this->db->where('Column47',"".$carry."");
            $this->db->or_where('Column46',"".$reg4."");
            $this->db->where('Column47',"".$carry."");
            $this->db->or_where('Column46',"".$reg5."");
            $this->db->where('Column47',"".$carry."");
            $this->db->or_where('Column46',"".$reg6."");
            $this->db->where('Column47',"".$carry."");
            $this->db->or_where('Column46',"".$reg7."");
            $this->db->where('Column47',"".$carry."");
            $this->db->or_where('Column46',"".$sda."");
            $this->db->where('Column46',"".$sda."");
            $this->db->where('Column47',"".$carry."");

            $this->db->or_where('Column46',"".$dbs."");
            $this->db->where('Column47',"".$accrue."");
            $this->db->or_where('Column46',"".$des."");
            $this->db->where('Column47',"".$accrue."");
            $this->db->or_where('Column46',"".$dgs."");
            $this->db->where('Column47',"".$accrue."");
            $this->db->or_where('Column46',"".$reg1."");
            $this->db->where('Column47',"".$accrue."");
            $this->db->or_where('Column46',"".$reg2."");
            $this->db->where('Column47',"".$accrue."");
            $this->db->or_where('Column46',"".$reg3."");
            $this->db->where('Column47',"".$accrue."");
            $this->db->or_where('Column46',"".$reg4."");
            $this->db->where('Column47',"".$accrue."");
            $this->db->or_where('Column46',"".$reg5."");
            $this->db->where('Column47',"".$accrue."");
            $this->db->or_where('Column46',"".$reg6."");
            $this->db->where('Column47',"".$accrue."");
            $this->db->or_where('Column46',"".$reg7."");
            $this->db->where('Column47',"".$accrue."");
            $this->db->or_where('Column46',"".$sda."");
            $this->db->where('Column46',"".$sda."");
            $this->db->where('Column47',"".$accrue."");
            return $this->db->where('Column47',"".$accrue."")
              ->get()
              ->result();
                             }
	}
    
    if(isset($_POST['kirim'])){
        $dbs=$_POST['dbs'];
        $des=$_POST['des'];
        $dgs=$_POST['dgs'];
        $reg1=$_POST['reg1'];
        $reg2=$_POST['reg2'];
        $reg3=$_POST['reg3'];
        $reg4=$_POST['reg4'];
        $reg5=$_POST['reg5'];
        $reg6=$_POST['reg6'];
        $reg7=$_POST['reg7'];
        $sda=$_POST['sda'];
        $new=$_POST['new'];
        $carry=$_POST['carry'];
        $accrue=$_POST['accrue'];
    $this->db->select("COUNT(DISTINCT Column6_3) as multi");
    $this->db->from('comp_adj_per_kontrak');
    $this->db->join('step_1', 'comp_adj_per_kontrak.Column6_3 = step_1.Column7');
    $this->db->or_where('Column46',"".$dbs."");
    $this->db->or_where('Column46',"".$des."");
    $this->db->or_where('Column46',"".$dgs."");
    $this->db->or_where('Column46',"".$reg1."");
    $this->db->or_where('Column46',"".$reg2."");
    $this->db->or_where('Column46',"".$reg3."");
    $this->db->or_where('Column46',"".$reg4."");
    $this->db->or_where('Column46',"".$reg5."");
    $this->db->or_where('Column46',"".$reg6."");
    $this->db->or_where('Column46',"".$reg7."");
    $this->db->or_where('Column46',"".$sda."");
    $this->db->or_where('Column46',"".$sda."");
    $this->db->or_where('Column47',"".$new."");
    $this->db->or_where('Column47',"".$carry."");
    return $this->db->or_where('Column47',"".$accrue."")
      ->get()
      ->result();
                     }
}

	//FUNGSI GET DATA TOTAL VALUE MULTI
	function get_data_total_value_multi(){
        if (isset($_POST['submit'])) {  
            if(isset($_POST['dbs'])OR($_POST['des'])OR($_POST['dgs'])OR($_POST['reg1'])OR($_POST['reg2'])OR($_POST['reg3'])OR($_POST['reg4'])OR($_POST['reg5'])OR($_POST['reg6'])OR($_POST['reg7'])OR($_POST['sda'])AND($_POST['new'])OR($_POST['carry'])OR($_POST['accrue'])){
                $dbs=$_POST['dbs'];
                $des=$_POST['des'];
                $dgs=$_POST['dgs'];
                $reg1=$_POST['reg1'];
                $reg2=$_POST['reg2'];
                $reg3=$_POST['reg3'];
                $reg4=$_POST['reg4'];
                $reg5=$_POST['reg5'];
                $reg6=$_POST['reg6'];
                $reg7=$_POST['reg7'];
                $sda=$_POST['sda'];
                $new=$_POST['new'];
                $carry=$_POST['carry'];
                $accrue=$_POST['accrue'];
            $this->db->select("SUM(DISTINCT Column13) as multi");
            $this->db->from('step_1');
            $this->db->or_where('Column46',"".$dbs."");
            $this->db->where('Column47',"".$new."");
            $this->db->or_where('Column46',"".$des."");
            $this->db->where('Column47',"".$new."");
            $this->db->or_where('Column46',"".$dgs."");
            $this->db->where('Column47',"".$new."");
            $this->db->or_where('Column46',"".$reg1."");
            $this->db->where('Column47',"".$new."");
            $this->db->or_where('Column46',"".$reg2."");
            $this->db->where('Column47',"".$new."");
            $this->db->or_where('Column46',"".$reg3."");
            $this->db->where('Column47',"".$new."");
            $this->db->or_where('Column46',"".$reg4."");
            $this->db->where('Column47',"".$new."");
            $this->db->or_where('Column46',"".$reg5."");
            $this->db->where('Column47',"".$new."");
            $this->db->or_where('Column46',"".$reg6."");
            $this->db->where('Column47',"".$new."");
            $this->db->or_where('Column46',"".$reg7."");
            $this->db->where('Column47',"".$new."");
            $this->db->or_where('Column46',"".$sda."");
            $this->db->where('Column47',"".$new."");
            
            $this->db->or_where('Column46',"".$dbs."");
            $this->db->where('Column47',"".$carry."");
            $this->db->or_where('Column46',"".$des."");
            $this->db->where('Column47',"".$carry."");
            $this->db->or_where('Column46',"".$dgs."");
            $this->db->where('Column47',"".$carry."");
            $this->db->or_where('Column46',"".$reg1."");
            $this->db->where('Column47',"".$carry."");
            $this->db->or_where('Column46',"".$reg2."");
            $this->db->where('Column47',"".$carry."");
            $this->db->or_where('Column46',"".$reg3."");
            $this->db->where('Column47',"".$carry."");
            $this->db->or_where('Column46',"".$reg4."");
            $this->db->where('Column47',"".$carry."");
            $this->db->or_where('Column46',"".$reg5."");
            $this->db->where('Column47',"".$carry."");
            $this->db->or_where('Column46',"".$reg6."");
            $this->db->where('Column47',"".$carry."");
            $this->db->or_where('Column46',"".$reg7."");
            $this->db->where('Column47',"".$carry."");
            $this->db->or_where('Column46',"".$sda."");
            $this->db->where('Column46',"".$sda."");
            $this->db->where('Column47',"".$carry."");

            $this->db->or_where('Column46',"".$dbs."");
            $this->db->where('Column47',"".$accrue."");
            $this->db->or_where('Column46',"".$des."");
            $this->db->where('Column47',"".$accrue."");
            $this->db->or_where('Column46',"".$dgs."");
            $this->db->where('Column47',"".$accrue."");
            $this->db->or_where('Column46',"".$reg1."");
            $this->db->where('Column47',"".$accrue."");
            $this->db->or_where('Column46',"".$reg2."");
            $this->db->where('Column47',"".$accrue."");
            $this->db->or_where('Column46',"".$reg3."");
            $this->db->where('Column47',"".$accrue."");
            $this->db->or_where('Column46',"".$reg4."");
            $this->db->where('Column47',"".$accrue."");
            $this->db->or_where('Column46',"".$reg5."");
            $this->db->where('Column47',"".$accrue."");
            $this->db->or_where('Column46',"".$reg6."");
            $this->db->where('Column47',"".$accrue."");
            $this->db->or_where('Column46',"".$reg7."");
            $this->db->where('Column47',"".$accrue."");
            $this->db->or_where('Column46',"".$sda."");
            $this->db->where('Column46',"".$sda."");
            $this->db->where('Column47',"".$accrue."");
            return $this->db->where('Column47',"".$accrue."")
              ->get()
              ->result();
                             }
	}
    
        if(isset($_POST['kirim'])){
            $dbs=$_POST['dbs'];
            $des=$_POST['des'];
            $dgs=$_POST['dgs'];
            $reg1=$_POST['reg1'];
            $reg2=$_POST['reg2'];
            $reg3=$_POST['reg3'];
            $reg4=$_POST['reg4'];
            $reg5=$_POST['reg5'];
            $reg6=$_POST['reg6'];
            $reg7=$_POST['reg7'];
            $sda=$_POST['sda'];
            $new=$_POST['new'];
            $carry=$_POST['carry'];
            $accrue=$_POST['accrue'];
        $this->db->select("SUM(DISTINCT Column13) as multi");
        $this->db->from('step_1');
        $this->db->or_where('Column46',"".$dbs."");
        $this->db->or_where('Column46',"".$des."");
        $this->db->or_where('Column46',"".$dgs."");
        $this->db->or_where('Column46',"".$reg1."");
        $this->db->or_where('Column46',"".$reg2."");
        $this->db->or_where('Column46',"".$reg3."");
        $this->db->or_where('Column46',"".$reg4."");
        $this->db->or_where('Column46',"".$reg5."");
        $this->db->or_where('Column46',"".$reg6."");
        $this->db->or_where('Column46',"".$reg7."");
        $this->db->or_where('Column46',"".$sda."");
        $this->db->or_where('Column46',"".$sda."");
        $this->db->or_where('Column47',"".$new."");
        $this->db->or_where('Column47',"".$carry."");
        return $this->db->or_where('Column47',"".$accrue."")
        ->get()
        ->result();
                        }
        
	}

	//FUNGSI GET DATA TOTAL BILLING MULTI
	function get_data_total_billing_multi(){
          if (isset($_POST['submit'])) {  
            if(isset($_POST['dbs'])OR($_POST['des'])OR($_POST['dgs'])OR($_POST['reg1'])OR($_POST['reg2'])OR($_POST['reg3'])OR($_POST['reg4'])OR($_POST['reg5'])OR($_POST['reg6'])OR($_POST['reg7'])OR($_POST['sda'])AND($_POST['new'])OR($_POST['carry'])OR($_POST['accrue'])){
                $dbs=$_POST['dbs'];
                $des=$_POST['des'];
                $dgs=$_POST['dgs'];
                $reg1=$_POST['reg1'];
                $reg2=$_POST['reg2'];
                $reg3=$_POST['reg3'];
                $reg4=$_POST['reg4'];
                $reg5=$_POST['reg5'];
                $reg6=$_POST['reg6'];
                $reg7=$_POST['reg7'];
                $sda=$_POST['sda'];
                $new=$_POST['new'];
                $carry=$_POST['carry'];
                $accrue=$_POST['accrue'];
            $this->db->select("SUM(Column6) as multi");
            $this->db->from('step_1');
            $this->db->or_where('Column46',"".$dbs."");
            $this->db->where('Column47',"".$new."");
            $this->db->or_where('Column46',"".$des."");
            $this->db->where('Column47',"".$new."");
            $this->db->or_where('Column46',"".$dgs."");
            $this->db->where('Column47',"".$new."");
            $this->db->or_where('Column46',"".$reg1."");
            $this->db->where('Column47',"".$new."");
            $this->db->or_where('Column46',"".$reg2."");
            $this->db->where('Column47',"".$new."");
            $this->db->or_where('Column46',"".$reg3."");
            $this->db->where('Column47',"".$new."");
            $this->db->or_where('Column46',"".$reg4."");
            $this->db->where('Column47',"".$new."");
            $this->db->or_where('Column46',"".$reg5."");
            $this->db->where('Column47',"".$new."");
            $this->db->or_where('Column46',"".$reg6."");
            $this->db->where('Column47',"".$new."");
            $this->db->or_where('Column46',"".$reg7."");
            $this->db->where('Column47',"".$new."");
            $this->db->or_where('Column46',"".$sda."");
            $this->db->where('Column47',"".$new."");
            
            $this->db->or_where('Column46',"".$dbs."");
            $this->db->where('Column47',"".$carry."");
            $this->db->or_where('Column46',"".$des."");
            $this->db->where('Column47',"".$carry."");
            $this->db->or_where('Column46',"".$dgs."");
            $this->db->where('Column47',"".$carry."");
            $this->db->or_where('Column46',"".$reg1."");
            $this->db->where('Column47',"".$carry."");
            $this->db->or_where('Column46',"".$reg2."");
            $this->db->where('Column47',"".$carry."");
            $this->db->or_where('Column46',"".$reg3."");
            $this->db->where('Column47',"".$carry."");
            $this->db->or_where('Column46',"".$reg4."");
            $this->db->where('Column47',"".$carry."");
            $this->db->or_where('Column46',"".$reg5."");
            $this->db->where('Column47',"".$carry."");
            $this->db->or_where('Column46',"".$reg6."");
            $this->db->where('Column47',"".$carry."");
            $this->db->or_where('Column46',"".$reg7."");
            $this->db->where('Column47',"".$carry."");
            $this->db->or_where('Column46',"".$sda."");
            $this->db->where('Column46',"".$sda."");
            $this->db->where('Column47',"".$carry."");

            $this->db->or_where('Column46',"".$dbs."");
            $this->db->where('Column47',"".$accrue."");
            $this->db->or_where('Column46',"".$des."");
            $this->db->where('Column47',"".$accrue."");
            $this->db->or_where('Column46',"".$dgs."");
            $this->db->where('Column47',"".$accrue."");
            $this->db->or_where('Column46',"".$reg1."");
            $this->db->where('Column47',"".$accrue."");
            $this->db->or_where('Column46',"".$reg2."");
            $this->db->where('Column47',"".$accrue."");
            $this->db->or_where('Column46',"".$reg3."");
            $this->db->where('Column47',"".$accrue."");
            $this->db->or_where('Column46',"".$reg4."");
            $this->db->where('Column47',"".$accrue."");
            $this->db->or_where('Column46',"".$reg5."");
            $this->db->where('Column47',"".$accrue."");
            $this->db->or_where('Column46',"".$reg6."");
            $this->db->where('Column47',"".$accrue."");
            $this->db->or_where('Column46',"".$reg7."");
            $this->db->where('Column47',"".$accrue."");
            $this->db->or_where('Column46',"".$sda."");
            $this->db->where('Column46',"".$sda."");
            $this->db->where('Column47',"".$accrue."");
            return $this->db->where('Column47',"".$accrue."")
              ->get()
              ->result();
                             }
	}
    
        if(isset($_POST['kirim'])){
            $dbs=$_POST['dbs'];
            $des=$_POST['des'];
            $dgs=$_POST['dgs'];
            $reg1=$_POST['reg1'];
            $reg2=$_POST['reg2'];
            $reg3=$_POST['reg3'];
            $reg4=$_POST['reg4'];
            $reg5=$_POST['reg5'];
            $reg6=$_POST['reg6'];
            $reg7=$_POST['reg7'];
            $sda=$_POST['sda'];
            $new=$_POST['new'];
            $carry=$_POST['carry'];
            $accrue=$_POST['accrue'];
        $this->db->select("SUM(Column6) as multi");
        $this->db->from('step_1');
        $this->db->or_where('Column46',"".$dbs."");
        $this->db->or_where('Column46',"".$des."");
        $this->db->or_where('Column46',"".$dgs."");
        $this->db->or_where('Column46',"".$reg1."");
        $this->db->or_where('Column46',"".$reg2."");
        $this->db->or_where('Column46',"".$reg3."");
        $this->db->or_where('Column46',"".$reg4."");
        $this->db->or_where('Column46',"".$reg5."");
        $this->db->or_where('Column46',"".$reg6."");
        $this->db->or_where('Column46',"".$reg7."");
        $this->db->or_where('Column46',"".$sda."");
        $this->db->or_where('Column46',"".$sda."");
        $this->db->or_where('Column47',"".$new."");
        $this->db->or_where('Column47',"".$carry."");
        return $this->db->or_where('Column47',"".$accrue."")
        ->get()
        ->result();
                        }
	}

	//FUNGSI GET DATA TOTAL REVENUE MULTI
	function get_data_total_revenue_multi(){
          if (isset($_POST['submit'])) {  
            if(isset($_POST['dbs'])OR($_POST['des'])OR($_POST['dgs'])OR($_POST['reg1'])OR($_POST['reg2'])OR($_POST['reg3'])OR($_POST['reg4'])OR($_POST['reg5'])OR($_POST['reg6'])OR($_POST['reg7'])OR($_POST['sda'])AND($_POST['new'])OR($_POST['carry'])OR($_POST['accrue'])){
                $dbs=$_POST['dbs'];
                $des=$_POST['des'];
                $dgs=$_POST['dgs'];
                $reg1=$_POST['reg1'];
                $reg2=$_POST['reg2'];
                $reg3=$_POST['reg3'];
                $reg4=$_POST['reg4'];
                $reg5=$_POST['reg5'];
                $reg6=$_POST['reg6'];
                $reg7=$_POST['reg7'];
                $sda=$_POST['sda'];
                $new=$_POST['new'];
                $carry=$_POST['carry'];
                $accrue=$_POST['accrue'];
            $this->db->select("SUM(Column5_94) as multi");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
            $this->db->or_where('Column46',"".$dbs."");
            $this->db->where('Column47',"".$new."");
            $this->db->or_where('Column46',"".$des."");
            $this->db->where('Column47',"".$new."");
            $this->db->or_where('Column46',"".$dgs."");
            $this->db->where('Column47',"".$new."");
            $this->db->or_where('Column46',"".$reg1."");
            $this->db->where('Column47',"".$new."");
            $this->db->or_where('Column46',"".$reg2."");
            $this->db->where('Column47',"".$new."");
            $this->db->or_where('Column46',"".$reg3."");
            $this->db->where('Column47',"".$new."");
            $this->db->or_where('Column46',"".$reg4."");
            $this->db->where('Column47',"".$new."");
            $this->db->or_where('Column46',"".$reg5."");
            $this->db->where('Column47',"".$new."");
            $this->db->or_where('Column46',"".$reg6."");
            $this->db->where('Column47',"".$new."");
            $this->db->or_where('Column46',"".$reg7."");
            $this->db->where('Column47',"".$new."");
            $this->db->or_where('Column46',"".$sda."");
            $this->db->where('Column47',"".$new."");
            
            $this->db->or_where('Column46',"".$dbs."");
            $this->db->where('Column47',"".$carry."");
            $this->db->or_where('Column46',"".$des."");
            $this->db->where('Column47',"".$carry."");
            $this->db->or_where('Column46',"".$dgs."");
            $this->db->where('Column47',"".$carry."");
            $this->db->or_where('Column46',"".$reg1."");
            $this->db->where('Column47',"".$carry."");
            $this->db->or_where('Column46',"".$reg2."");
            $this->db->where('Column47',"".$carry."");
            $this->db->or_where('Column46',"".$reg3."");
            $this->db->where('Column47',"".$carry."");
            $this->db->or_where('Column46',"".$reg4."");
            $this->db->where('Column47',"".$carry."");
            $this->db->or_where('Column46',"".$reg5."");
            $this->db->where('Column47',"".$carry."");
            $this->db->or_where('Column46',"".$reg6."");
            $this->db->where('Column47',"".$carry."");
            $this->db->or_where('Column46',"".$reg7."");
            $this->db->where('Column47',"".$carry."");
            $this->db->or_where('Column46',"".$sda."");
            $this->db->where('Column46',"".$sda."");
            $this->db->where('Column47',"".$carry."");

            $this->db->or_where('Column46',"".$dbs."");
            $this->db->where('Column47',"".$accrue."");
            $this->db->or_where('Column46',"".$des."");
            $this->db->where('Column47',"".$accrue."");
            $this->db->or_where('Column46',"".$dgs."");
            $this->db->where('Column47',"".$accrue."");
            $this->db->or_where('Column46',"".$reg1."");
            $this->db->where('Column47',"".$accrue."");
            $this->db->or_where('Column46',"".$reg2."");
            $this->db->where('Column47',"".$accrue."");
            $this->db->or_where('Column46',"".$reg3."");
            $this->db->where('Column47',"".$accrue."");
            $this->db->or_where('Column46',"".$reg4."");
            $this->db->where('Column47',"".$accrue."");
            $this->db->or_where('Column46',"".$reg5."");
            $this->db->where('Column47',"".$accrue."");
            $this->db->or_where('Column46',"".$reg6."");
            $this->db->where('Column47',"".$accrue."");
            $this->db->or_where('Column46',"".$reg7."");
            $this->db->where('Column47',"".$accrue."");
            $this->db->or_where('Column46',"".$sda."");
            $this->db->where('Column46',"".$sda."");
            $this->db->where('Column47',"".$accrue."");
            return $this->db->where('Column47',"".$accrue."")
              ->get()
              ->result();
                             }
	}
    
        if(isset($_POST['kirim'])){
            $dbs=$_POST['dbs'];
            $des=$_POST['des'];
            $dgs=$_POST['dgs'];
            $reg1=$_POST['reg1'];
            $reg2=$_POST['reg2'];
            $reg3=$_POST['reg3'];
            $reg4=$_POST['reg4'];
            $reg5=$_POST['reg5'];
            $reg6=$_POST['reg6'];
            $reg7=$_POST['reg7'];
            $sda=$_POST['sda'];
            $new=$_POST['new'];
            $carry=$_POST['carry'];
            $accrue=$_POST['accrue'];
        $this->db->select("SUM(Column5_94) as multi");
        $this->db->from('step_5');
        $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
        $this->db->or_where('Column46',"".$dbs."");
        $this->db->or_where('Column46',"".$des."");
        $this->db->or_where('Column46',"".$dgs."");
        $this->db->or_where('Column46',"".$reg1."");
        $this->db->or_where('Column46',"".$reg2."");
        $this->db->or_where('Column46',"".$reg3."");
        $this->db->or_where('Column46',"".$reg4."");
        $this->db->or_where('Column46',"".$reg5."");
        $this->db->or_where('Column46',"".$reg6."");
        $this->db->or_where('Column46',"".$reg7."");
        $this->db->or_where('Column46',"".$sda."");
        $this->db->or_where('Column46',"".$sda."");
        $this->db->or_where('Column47',"".$new."");
        $this->db->or_where('Column47',"".$carry."");
        return $this->db->or_where('Column47',"".$accrue."")
        ->get()
        ->result();
                        }

	}

	//FUNGSI GET DATA TOTAL COST MULTI
	function get_data_total_cost_multi(){
          if (isset($_POST['submit'])) {  
            if(isset($_POST['dbs'])OR($_POST['des'])OR($_POST['dgs'])OR($_POST['reg1'])OR($_POST['reg2'])OR($_POST['reg3'])OR($_POST['reg4'])OR($_POST['reg5'])OR($_POST['reg6'])OR($_POST['reg7'])OR($_POST['sda'])AND($_POST['new'])OR($_POST['carry'])OR($_POST['accrue'])){
                $dbs=$_POST['dbs'];
                $des=$_POST['des'];
                $dgs=$_POST['dgs'];
                $reg1=$_POST['reg1'];
                $reg2=$_POST['reg2'];
                $reg3=$_POST['reg3'];
                $reg4=$_POST['reg4'];
                $reg5=$_POST['reg5'];
                $reg6=$_POST['reg6'];
                $reg7=$_POST['reg7'];
                $sda=$_POST['sda'];
                $new=$_POST['new'];
                $carry=$_POST['carry'];
                $accrue=$_POST['accrue'];
            $this->db->select("SUM(Column4_27) as multi");
            $this->db->from('step_4');
            $this->db->join('step_1', 'step_4.Column4_3 = step_1.Column7');
            $this->db->or_where('Column46',"".$dbs."");
            $this->db->where('Column47',"".$new."");
            $this->db->or_where('Column46',"".$des."");
            $this->db->where('Column47',"".$new."");
            $this->db->or_where('Column46',"".$dgs."");
            $this->db->where('Column47',"".$new."");
            $this->db->or_where('Column46',"".$reg1."");
            $this->db->where('Column47',"".$new."");
            $this->db->or_where('Column46',"".$reg2."");
            $this->db->where('Column47',"".$new."");
            $this->db->or_where('Column46',"".$reg3."");
            $this->db->where('Column47',"".$new."");
            $this->db->or_where('Column46',"".$reg4."");
            $this->db->where('Column47',"".$new."");
            $this->db->or_where('Column46',"".$reg5."");
            $this->db->where('Column47',"".$new."");
            $this->db->or_where('Column46',"".$reg6."");
            $this->db->where('Column47',"".$new."");
            $this->db->or_where('Column46',"".$reg7."");
            $this->db->where('Column47',"".$new."");
            $this->db->or_where('Column46',"".$sda."");
            $this->db->where('Column47',"".$new."");
            
            $this->db->or_where('Column46',"".$dbs."");
            $this->db->where('Column47',"".$carry."");
            $this->db->or_where('Column46',"".$des."");
            $this->db->where('Column47',"".$carry."");
            $this->db->or_where('Column46',"".$dgs."");
            $this->db->where('Column47',"".$carry."");
            $this->db->or_where('Column46',"".$reg1."");
            $this->db->where('Column47',"".$carry."");
            $this->db->or_where('Column46',"".$reg2."");
            $this->db->where('Column47',"".$carry."");
            $this->db->or_where('Column46',"".$reg3."");
            $this->db->where('Column47',"".$carry."");
            $this->db->or_where('Column46',"".$reg4."");
            $this->db->where('Column47',"".$carry."");
            $this->db->or_where('Column46',"".$reg5."");
            $this->db->where('Column47',"".$carry."");
            $this->db->or_where('Column46',"".$reg6."");
            $this->db->where('Column47',"".$carry."");
            $this->db->or_where('Column46',"".$reg7."");
            $this->db->where('Column47',"".$carry."");
            $this->db->or_where('Column46',"".$sda."");
            $this->db->where('Column46',"".$sda."");
            $this->db->where('Column47',"".$carry."");

            $this->db->or_where('Column46',"".$dbs."");
            $this->db->where('Column47',"".$accrue."");
            $this->db->or_where('Column46',"".$des."");
            $this->db->where('Column47',"".$accrue."");
            $this->db->or_where('Column46',"".$dgs."");
            $this->db->where('Column47',"".$accrue."");
            $this->db->or_where('Column46',"".$reg1."");
            $this->db->where('Column47',"".$accrue."");
            $this->db->or_where('Column46',"".$reg2."");
            $this->db->where('Column47',"".$accrue."");
            $this->db->or_where('Column46',"".$reg3."");
            $this->db->where('Column47',"".$accrue."");
            $this->db->or_where('Column46',"".$reg4."");
            $this->db->where('Column47',"".$accrue."");
            $this->db->or_where('Column46',"".$reg5."");
            $this->db->where('Column47',"".$accrue."");
            $this->db->or_where('Column46',"".$reg6."");
            $this->db->where('Column47',"".$accrue."");
            $this->db->or_where('Column46',"".$reg7."");
            $this->db->where('Column47',"".$accrue."");
            $this->db->or_where('Column46',"".$sda."");
            $this->db->where('Column46',"".$sda."");
            $this->db->where('Column47',"".$accrue."");
            return $this->db->where('Column47',"".$accrue."")
              ->get()
              ->result();
                             }
	}
    
        if(isset($_POST['kirim'])){
            $dbs=$_POST['dbs'];
            $des=$_POST['des'];
            $dgs=$_POST['dgs'];
            $reg1=$_POST['reg1'];
            $reg2=$_POST['reg2'];
            $reg3=$_POST['reg3'];
            $reg4=$_POST['reg4'];
            $reg5=$_POST['reg5'];
            $reg6=$_POST['reg6'];
            $reg7=$_POST['reg7'];
            $sda=$_POST['sda'];
            $new=$_POST['new'];
            $carry=$_POST['carry'];
            $accrue=$_POST['accrue'];
        $this->db->select("SUM(Column4_27) as multi");
        $this->db->from('step_4');
        $this->db->join('step_1', 'step_4.Column4_3 = step_1.Column7');
        $this->db->or_where('Column46',"".$dbs."");
        $this->db->or_where('Column46',"".$des."");
        $this->db->or_where('Column46',"".$dgs."");
        $this->db->or_where('Column46',"".$reg1."");
        $this->db->or_where('Column46',"".$reg2."");
        $this->db->or_where('Column46',"".$reg3."");
        $this->db->or_where('Column46',"".$reg4."");
        $this->db->or_where('Column46',"".$reg5."");
        $this->db->or_where('Column46',"".$reg6."");
        $this->db->or_where('Column46',"".$reg7."");
        $this->db->or_where('Column46',"".$sda."");
        $this->db->or_where('Column46',"".$sda."");
        $this->db->or_where('Column47',"".$new."");
        $this->db->or_where('Column47',"".$carry."");
        return $this->db->or_where('Column47',"".$accrue."")
        ->get()
        ->result();
                        }
	}

	//FUNGSI GET DATA TOTAL ADJUSMENT CACL MULTI
	function get_data_total_adjustment_cacl_multi(){
        if (isset($_POST['submit'])) {  
          if(isset($_POST['dbs'])OR($_POST['des'])OR($_POST['dgs'])OR($_POST['reg1'])OR($_POST['reg2'])OR($_POST['reg3'])OR($_POST['reg4'])OR($_POST['reg5'])OR($_POST['reg6'])OR($_POST['reg7'])OR($_POST['sda'])AND($_POST['new'])OR($_POST['carry'])OR($_POST['accrue'])){
            $dbs=$_POST['dbs'];
            $des=$_POST['des'];
            $dgs=$_POST['dgs'];
            $reg1=$_POST['reg1'];
            $reg2=$_POST['reg2'];
            $reg3=$_POST['reg3'];
            $reg4=$_POST['reg4'];
            $reg5=$_POST['reg5'];
            $reg6=$_POST['reg6'];
            $reg7=$_POST['reg7'];
            $sda=$_POST['sda'];
            $new=$_POST['new'];
            $carry=$_POST['carry'];
            $accrue=$_POST['accrue'];
        $this->db->select("SUM(Column8_13) as tambah");
        $this->db->from('kk_44');
        $this->db->join('step_1', 'kk_44.Column8_3 = step_1.Column7');
        $this->db->or_where('Column46',"".$dbs."");
        $this->db->where('Column47',"".$new."");
        $this->db->or_where('Column46',"".$des."");
        $this->db->where('Column47',"".$new."");
        $this->db->or_where('Column46',"".$dgs."");
        $this->db->where('Column47',"".$new."");
        $this->db->or_where('Column46',"".$reg1."");
        $this->db->where('Column47',"".$new."");
        $this->db->or_where('Column46',"".$reg2."");
        $this->db->where('Column47',"".$new."");
        $this->db->or_where('Column46',"".$reg3."");
        $this->db->where('Column47',"".$new."");
        $this->db->or_where('Column46',"".$reg4."");
        $this->db->where('Column47',"".$new."");
        $this->db->or_where('Column46',"".$reg5."");
        $this->db->where('Column47',"".$new."");
        $this->db->or_where('Column46',"".$reg6."");
        $this->db->where('Column47',"".$new."");
        $this->db->or_where('Column46',"".$reg7."");
        $this->db->where('Column47',"".$new."");
        $this->db->or_where('Column46',"".$sda."");
        $this->db->where('Column47',"".$new."");
        
        $this->db->or_where('Column46',"".$dbs."");
        $this->db->where('Column47',"".$carry."");
        $this->db->or_where('Column46',"".$des."");
        $this->db->where('Column47',"".$carry."");
        $this->db->or_where('Column46',"".$dgs."");
        $this->db->where('Column47',"".$carry."");
        $this->db->or_where('Column46',"".$reg1."");
        $this->db->where('Column47',"".$carry."");
        $this->db->or_where('Column46',"".$reg2."");
        $this->db->where('Column47',"".$carry."");
        $this->db->or_where('Column46',"".$reg3."");
        $this->db->where('Column47',"".$carry."");
        $this->db->or_where('Column46',"".$reg4."");
        $this->db->where('Column47',"".$carry."");
        $this->db->or_where('Column46',"".$reg5."");
        $this->db->where('Column47',"".$carry."");
        $this->db->or_where('Column46',"".$reg6."");
        $this->db->where('Column47',"".$carry."");
        $this->db->or_where('Column46',"".$reg7."");
        $this->db->where('Column47',"".$carry."");
        $this->db->or_where('Column46',"".$sda."");
        $this->db->where('Column46',"".$sda."");
        $this->db->where('Column47',"".$carry."");

        $this->db->or_where('Column46',"".$dbs."");
        $this->db->where('Column47',"".$accrue."");
        $this->db->or_where('Column46',"".$des."");
        $this->db->where('Column47',"".$accrue."");
        $this->db->or_where('Column46',"".$dgs."");
        $this->db->where('Column47',"".$accrue."");
        $this->db->or_where('Column46',"".$reg1."");
        $this->db->where('Column47',"".$accrue."");
        $this->db->or_where('Column46',"".$reg2."");
        $this->db->where('Column47',"".$accrue."");
        $this->db->or_where('Column46',"".$reg3."");
        $this->db->where('Column47',"".$accrue."");
        $this->db->or_where('Column46',"".$reg4."");
        $this->db->where('Column47',"".$accrue."");
        $this->db->or_where('Column46',"".$reg5."");
        $this->db->where('Column47',"".$accrue."");
        $this->db->or_where('Column46',"".$reg6."");
        $this->db->where('Column47',"".$accrue."");
        $this->db->or_where('Column46',"".$reg7."");
        $this->db->where('Column47',"".$accrue."");
        $this->db->or_where('Column46',"".$sda."");
        $this->db->where('Column46',"".$sda."");
        $this->db->where('Column47',"".$accrue."");
        return $this->db->where('Column47',"".$accrue."")
          ->get()
          ->result();
                         }
}

    if(isset($_POST['kirim'])){
        $dbs=$_POST['dbs'];
        $des=$_POST['des'];
        $dgs=$_POST['dgs'];
        $reg1=$_POST['reg1'];
        $reg2=$_POST['reg2'];
        $reg3=$_POST['reg3'];
        $reg4=$_POST['reg4'];
        $reg5=$_POST['reg5'];
        $reg6=$_POST['reg6'];
        $reg7=$_POST['reg7'];
        $sda=$_POST['sda'];
        $new=$_POST['new'];
        $carry=$_POST['carry'];
        $accrue=$_POST['accrue'];
    $this->db->select("SUM(Column8_13) as tambah");
    $this->db->from('kk_44');
	$this->db->join('step_1', 'kk_44.Column8_3 = step_1.Column7');
    $this->db->or_where('Column46',"".$dbs."");
    $this->db->or_where('Column46',"".$des."");
    $this->db->or_where('Column46',"".$dgs."");
    $this->db->or_where('Column46',"".$reg1."");
    $this->db->or_where('Column46',"".$reg2."");
    $this->db->or_where('Column46',"".$reg3."");
    $this->db->or_where('Column46',"".$reg4."");
    $this->db->or_where('Column46',"".$reg5."");
    $this->db->or_where('Column46',"".$reg6."");
    $this->db->or_where('Column46',"".$reg7."");
    $this->db->or_where('Column46',"".$sda."");
    $this->db->or_where('Column46',"".$sda."");
    $this->db->or_where('Column47',"".$new."");
    $this->db->or_where('Column47',"".$carry."");
    return $this->db->or_where('Column47',"".$accrue."")
    ->get()
    ->result();
                    }

	}
	
	function get_data_total_ending_balance_multi(){
          if (isset($_POST['submit'])) {  
            if(isset($_POST['dbs'])OR($_POST['des'])OR($_POST['dgs'])OR($_POST['reg1'])OR($_POST['reg2'])OR($_POST['reg3'])OR($_POST['reg4'])OR($_POST['reg5'])OR($_POST['reg6'])OR($_POST['reg7'])OR($_POST['sda'])AND($_POST['new'])OR($_POST['carry'])OR($_POST['accrue'])){
              $dbs=$_POST['dbs'];
              $des=$_POST['des'];
              $dgs=$_POST['dgs'];
              $reg1=$_POST['reg1'];
              $reg2=$_POST['reg2'];
              $reg3=$_POST['reg3'];
              $reg4=$_POST['reg4'];
              $reg5=$_POST['reg5'];
              $reg6=$_POST['reg6'];
              $reg7=$_POST['reg7'];
              $sda=$_POST['sda'];
              $new=$_POST['new'];
              $carry=$_POST['carry'];
              $accrue=$_POST['accrue'];
          $this->db->select("SUM(Column8_14) as tambah");
          $this->db->from('kk_44');
          $this->db->join('step_1', 'kk_44.Column8_3 = step_1.Column7');
          $this->db->or_where('Column46',"".$dbs."");
          $this->db->where('Column47',"".$new."");
          $this->db->or_where('Column46',"".$des."");
          $this->db->where('Column47',"".$new."");
          $this->db->or_where('Column46',"".$dgs."");
          $this->db->where('Column47',"".$new."");
          $this->db->or_where('Column46',"".$reg1."");
          $this->db->where('Column47',"".$new."");
          $this->db->or_where('Column46',"".$reg2."");
          $this->db->where('Column47',"".$new."");
          $this->db->or_where('Column46',"".$reg3."");
          $this->db->where('Column47',"".$new."");
          $this->db->or_where('Column46',"".$reg4."");
          $this->db->where('Column47',"".$new."");
          $this->db->or_where('Column46',"".$reg5."");
          $this->db->where('Column47',"".$new."");
          $this->db->or_where('Column46',"".$reg6."");
          $this->db->where('Column47',"".$new."");
          $this->db->or_where('Column46',"".$reg7."");
          $this->db->where('Column47',"".$new."");
          $this->db->or_where('Column46',"".$sda."");
          $this->db->where('Column47',"".$new."");
          
          $this->db->or_where('Column46',"".$dbs."");
          $this->db->where('Column47',"".$carry."");
          $this->db->or_where('Column46',"".$des."");
          $this->db->where('Column47',"".$carry."");
          $this->db->or_where('Column46',"".$dgs."");
          $this->db->where('Column47',"".$carry."");
          $this->db->or_where('Column46',"".$reg1."");
          $this->db->where('Column47',"".$carry."");
          $this->db->or_where('Column46',"".$reg2."");
          $this->db->where('Column47',"".$carry."");
          $this->db->or_where('Column46',"".$reg3."");
          $this->db->where('Column47',"".$carry."");
          $this->db->or_where('Column46',"".$reg4."");
          $this->db->where('Column47',"".$carry."");
          $this->db->or_where('Column46',"".$reg5."");
          $this->db->where('Column47',"".$carry."");
          $this->db->or_where('Column46',"".$reg6."");
          $this->db->where('Column47',"".$carry."");
          $this->db->or_where('Column46',"".$reg7."");
          $this->db->where('Column47',"".$carry."");
          $this->db->or_where('Column46',"".$sda."");
          $this->db->where('Column46',"".$sda."");
          $this->db->where('Column47',"".$carry."");
  
          $this->db->or_where('Column46',"".$dbs."");
          $this->db->where('Column47',"".$accrue."");
          $this->db->or_where('Column46',"".$des."");
          $this->db->where('Column47',"".$accrue."");
          $this->db->or_where('Column46',"".$dgs."");
          $this->db->where('Column47',"".$accrue."");
          $this->db->or_where('Column46',"".$reg1."");
          $this->db->where('Column47',"".$accrue."");
          $this->db->or_where('Column46',"".$reg2."");
          $this->db->where('Column47',"".$accrue."");
          $this->db->or_where('Column46',"".$reg3."");
          $this->db->where('Column47',"".$accrue."");
          $this->db->or_where('Column46',"".$reg4."");
          $this->db->where('Column47',"".$accrue."");
          $this->db->or_where('Column46',"".$reg5."");
          $this->db->where('Column47',"".$accrue."");
          $this->db->or_where('Column46',"".$reg6."");
          $this->db->where('Column47',"".$accrue."");
          $this->db->or_where('Column46',"".$reg7."");
          $this->db->where('Column47',"".$accrue."");
          $this->db->or_where('Column46',"".$sda."");
          $this->db->where('Column46',"".$sda."");
          $this->db->where('Column47',"".$accrue."");
          return $this->db->where('Column47',"".$accrue."")
            ->get()
            ->result();
                           }
  }
  
      if(isset($_POST['kirim'])){
          $dbs=$_POST['dbs'];
          $des=$_POST['des'];
          $dgs=$_POST['dgs'];
          $reg1=$_POST['reg1'];
          $reg2=$_POST['reg2'];
          $reg3=$_POST['reg3'];
          $reg4=$_POST['reg4'];
          $reg5=$_POST['reg5'];
          $reg6=$_POST['reg6'];
          $reg7=$_POST['reg7'];
          $sda=$_POST['sda'];
          $new=$_POST['new'];
          $carry=$_POST['carry'];
          $accrue=$_POST['accrue'];
      $this->db->select("SUM(Column8_14) as tambah");
      $this->db->from('kk_44');
      $this->db->join('step_1', 'kk_44.Column8_3 = step_1.Column7');
      $this->db->or_where('Column46',"".$dbs."");
      $this->db->or_where('Column46',"".$des."");
      $this->db->or_where('Column46',"".$dgs."");
      $this->db->or_where('Column46',"".$reg1."");
      $this->db->or_where('Column46',"".$reg2."");
      $this->db->or_where('Column46',"".$reg3."");
      $this->db->or_where('Column46',"".$reg4."");
      $this->db->or_where('Column46',"".$reg5."");
      $this->db->or_where('Column46',"".$reg6."");
      $this->db->or_where('Column46',"".$reg7."");
      $this->db->or_where('Column46',"".$sda."");
      $this->db->or_where('Column46',"".$sda."");
      $this->db->or_where('Column47',"".$new."");
      $this->db->or_where('Column47',"".$carry."");
      return $this->db->or_where('Column47',"".$accrue."")
      ->get()
      ->result();
                      }
	}


	function get_data_top_ca_multi(){
          if (isset($_POST['submit'])) {  
            if(isset($_POST['dbs'])OR($_POST['des'])OR($_POST['dgs'])OR($_POST['reg1'])OR($_POST['reg2'])OR($_POST['reg3'])OR($_POST['reg4'])OR($_POST['reg5'])OR($_POST['reg6'])OR($_POST['reg7'])OR($_POST['sda'])AND($_POST['new'])OR($_POST['carry'])OR($_POST['accrue'])){
              $dbs=$_POST['dbs'];
              $des=$_POST['des'];
              $dgs=$_POST['dgs'];
              $reg1=$_POST['reg1'];
              $reg2=$_POST['reg2'];
              $reg3=$_POST['reg3'];
              $reg4=$_POST['reg4'];
              $reg5=$_POST['reg5'];
              $reg6=$_POST['reg6'];
              $reg7=$_POST['reg7'];
              $sda=$_POST['sda'];
              $new=$_POST['new'];
              $carry=$_POST['carry'];
              $accrue=$_POST['accrue'];
          $this->db->select("step_1.Column7 AS Contract_Number, step_1.Column9 AS Customer_Name, step_1.Column46 AS Departement, SUM(kk_44.Column8_13) AS Total_ADJ_CACL");
          $this->db->from('step_1');
          $this->db->join('comp_adj_per_kontrak', 'step_1.Column7 = comp_adj_per_kontrak.Column6_3');
          $this->db->join('kk_44', 'kk_44.Column8_3 = comp_adj_per_kontrak.Column6_3');
          $this->db->group_by('Customer_Name');
          $this->db->order_by('Total_ADJ_CACL', 'DESC');
          $this->db->or_where('Column46',"".$dbs."");
          $this->db->where('Column47',"".$new."");
          $this->db->or_where('Column46',"".$des."");
          $this->db->where('Column47',"".$new."");
          $this->db->or_where('Column46',"".$dgs."");
          $this->db->where('Column47',"".$new."");
          $this->db->or_where('Column46',"".$reg1."");
          $this->db->where('Column47',"".$new."");
          $this->db->or_where('Column46',"".$reg2."");
          $this->db->where('Column47',"".$new."");
          $this->db->or_where('Column46',"".$reg3."");
          $this->db->where('Column47',"".$new."");
          $this->db->or_where('Column46',"".$reg4."");
          $this->db->where('Column47',"".$new."");
          $this->db->or_where('Column46',"".$reg5."");
          $this->db->where('Column47',"".$new."");
          $this->db->or_where('Column46',"".$reg6."");
          $this->db->where('Column47',"".$new."");
          $this->db->or_where('Column46',"".$reg7."");
          $this->db->where('Column47',"".$new."");
          $this->db->or_where('Column46',"".$sda."");
          $this->db->where('Column47',"".$new."");
          
          $this->db->or_where('Column46',"".$dbs."");
          $this->db->where('Column47',"".$carry."");
          $this->db->or_where('Column46',"".$des."");
          $this->db->where('Column47',"".$carry."");
          $this->db->or_where('Column46',"".$dgs."");
          $this->db->where('Column47',"".$carry."");
          $this->db->or_where('Column46',"".$reg1."");
          $this->db->where('Column47',"".$carry."");
          $this->db->or_where('Column46',"".$reg2."");
          $this->db->where('Column47',"".$carry."");
          $this->db->or_where('Column46',"".$reg3."");
          $this->db->where('Column47',"".$carry."");
          $this->db->or_where('Column46',"".$reg4."");
          $this->db->where('Column47',"".$carry."");
          $this->db->or_where('Column46',"".$reg5."");
          $this->db->where('Column47',"".$carry."");
          $this->db->or_where('Column46',"".$reg6."");
          $this->db->where('Column47',"".$carry."");
          $this->db->or_where('Column46',"".$reg7."");
          $this->db->where('Column47',"".$carry."");
          $this->db->or_where('Column46',"".$sda."");
          $this->db->where('Column46',"".$sda."");
          $this->db->where('Column47',"".$carry."");
  
          $this->db->or_where('Column46',"".$dbs."");
          $this->db->where('Column47',"".$accrue."");
          $this->db->or_where('Column46',"".$des."");
          $this->db->where('Column47',"".$accrue."");
          $this->db->or_where('Column46',"".$dgs."");
          $this->db->where('Column47',"".$accrue."");
          $this->db->or_where('Column46',"".$reg1."");
          $this->db->where('Column47',"".$accrue."");
          $this->db->or_where('Column46',"".$reg2."");
          $this->db->where('Column47',"".$accrue."");
          $this->db->or_where('Column46',"".$reg3."");
          $this->db->where('Column47',"".$accrue."");
          $this->db->or_where('Column46',"".$reg4."");
          $this->db->where('Column47',"".$accrue."");
          $this->db->or_where('Column46',"".$reg5."");
          $this->db->where('Column47',"".$accrue."");
          $this->db->or_where('Column46',"".$reg6."");
          $this->db->where('Column47',"".$accrue."");
          $this->db->or_where('Column46',"".$reg7."");
          $this->db->where('Column47',"".$accrue."");
          $this->db->or_where('Column46',"".$sda."");
          $this->db->where('Column46',"".$sda."");
          $this->db->where('Column47',"".$accrue."");
          $this->db->where('Column47',"".$accrue."");
          return $this->db->limit('5')
            ->get()
            ->result();
                           }
  }
  
      if(isset($_POST['kirim'])){
          $dbs=$_POST['dbs'];
          $des=$_POST['des'];
          $dgs=$_POST['dgs'];
          $reg1=$_POST['reg1'];
          $reg2=$_POST['reg2'];
          $reg3=$_POST['reg3'];
          $reg4=$_POST['reg4'];
          $reg5=$_POST['reg5'];
          $reg6=$_POST['reg6'];
          $reg7=$_POST['reg7'];
          $sda=$_POST['sda'];
          $new=$_POST['new'];
          $carry=$_POST['carry'];
          $accrue=$_POST['accrue'];
      $this->db->select("step_1.Column7 AS Contract_Number, step_1.Column9 AS Customer_Name, step_1.Column46 AS Departement, SUM(kk_44.Column8_13) AS Total_ADJ_CACL");
      $this->db->from('step_1');
      $this->db->join('comp_adj_per_kontrak', 'step_1.Column7 = comp_adj_per_kontrak.Column6_3');
      $this->db->join('kk_44', 'kk_44.Column8_3 = comp_adj_per_kontrak.Column6_3');
      $this->db->group_by('Customer_Name');
      $this->db->order_by('Total_ADJ_CACL', 'DESC');
      $this->db->or_where('Column46',"".$dbs."");
      $this->db->or_where('Column46',"".$des."");
      $this->db->or_where('Column46',"".$dgs."");
      $this->db->or_where('Column46',"".$reg1."");
      $this->db->or_where('Column46',"".$reg2."");
      $this->db->or_where('Column46',"".$reg3."");
      $this->db->or_where('Column46',"".$reg4."");
      $this->db->or_where('Column46',"".$reg5."");
      $this->db->or_where('Column46',"".$reg6."");
      $this->db->or_where('Column46',"".$reg7."");
      $this->db->or_where('Column46',"".$sda."");
      $this->db->or_where('Column46',"".$sda."");
      $this->db->or_where('Column47',"".$new."");
      $this->db->or_where('Column47',"".$carry."");
      $this->db->or_where('Column47',"".$accrue."");
      return $this->db->limit('5')
      ->get()
      ->result();
                      }


	}

	function get_data_top_cl_multi(){
          if (isset($_POST['submit'])) {  
            if(isset($_POST['dbs'])OR($_POST['des'])OR($_POST['dgs'])OR($_POST['reg1'])OR($_POST['reg2'])OR($_POST['reg3'])OR($_POST['reg4'])OR($_POST['reg5'])OR($_POST['reg6'])OR($_POST['reg7'])OR($_POST['sda'])AND($_POST['new'])OR($_POST['carry'])OR($_POST['accrue'])){
              $dbs=$_POST['dbs'];
              $des=$_POST['des'];
              $dgs=$_POST['dgs'];
              $reg1=$_POST['reg1'];
              $reg2=$_POST['reg2'];
              $reg3=$_POST['reg3'];
              $reg4=$_POST['reg4'];
              $reg5=$_POST['reg5'];
              $reg6=$_POST['reg6'];
              $reg7=$_POST['reg7'];
              $sda=$_POST['sda'];
              $new=$_POST['new'];
              $carry=$_POST['carry'];
              $accrue=$_POST['accrue'];
          $this->db->select("step_1.Column7 AS Contract_Number, step_1.Column9 AS Customer_Name, step_1.Column46 AS Departement, SUM(kk_44.Column8_13) AS Total_ADJ_CACL");
          $this->db->from('step_1');
          $this->db->join('comp_adj_per_kontrak', 'step_1.Column7 = comp_adj_per_kontrak.Column6_3');
          $this->db->join('kk_44', 'kk_44.Column8_3 = comp_adj_per_kontrak.Column6_3');
          $this->db->group_by('Customer_Name');
          $this->db->order_by('Total_ADJ_CACL', 'ASC');
          $this->db->or_where('Column46',"".$dbs."");
          $this->db->where('Column47',"".$new."");
          $this->db->or_where('Column46',"".$des."");
          $this->db->where('Column47',"".$new."");
          $this->db->or_where('Column46',"".$dgs."");
          $this->db->where('Column47',"".$new."");
          $this->db->or_where('Column46',"".$reg1."");
          $this->db->where('Column47',"".$new."");
          $this->db->or_where('Column46',"".$reg2."");
          $this->db->where('Column47',"".$new."");
          $this->db->or_where('Column46',"".$reg3."");
          $this->db->where('Column47',"".$new."");
          $this->db->or_where('Column46',"".$reg4."");
          $this->db->where('Column47',"".$new."");
          $this->db->or_where('Column46',"".$reg5."");
          $this->db->where('Column47',"".$new."");
          $this->db->or_where('Column46',"".$reg6."");
          $this->db->where('Column47',"".$new."");
          $this->db->or_where('Column46',"".$reg7."");
          $this->db->where('Column47',"".$new."");
          $this->db->or_where('Column46',"".$sda."");
          $this->db->where('Column47',"".$new."");
          
          $this->db->or_where('Column46',"".$dbs."");
          $this->db->where('Column47',"".$carry."");
          $this->db->or_where('Column46',"".$des."");
          $this->db->where('Column47',"".$carry."");
          $this->db->or_where('Column46',"".$dgs."");
          $this->db->where('Column47',"".$carry."");
          $this->db->or_where('Column46',"".$reg1."");
          $this->db->where('Column47',"".$carry."");
          $this->db->or_where('Column46',"".$reg2."");
          $this->db->where('Column47',"".$carry."");
          $this->db->or_where('Column46',"".$reg3."");
          $this->db->where('Column47',"".$carry."");
          $this->db->or_where('Column46',"".$reg4."");
          $this->db->where('Column47',"".$carry."");
          $this->db->or_where('Column46',"".$reg5."");
          $this->db->where('Column47',"".$carry."");
          $this->db->or_where('Column46',"".$reg6."");
          $this->db->where('Column47',"".$carry."");
          $this->db->or_where('Column46',"".$reg7."");
          $this->db->where('Column47',"".$carry."");
          $this->db->or_where('Column46',"".$sda."");
          $this->db->where('Column46',"".$sda."");
          $this->db->where('Column47',"".$carry."");
  
          $this->db->or_where('Column46',"".$dbs."");
          $this->db->where('Column47',"".$accrue."");
          $this->db->or_where('Column46',"".$des."");
          $this->db->where('Column47',"".$accrue."");
          $this->db->or_where('Column46',"".$dgs."");
          $this->db->where('Column47',"".$accrue."");
          $this->db->or_where('Column46',"".$reg1."");
          $this->db->where('Column47',"".$accrue."");
          $this->db->or_where('Column46',"".$reg2."");
          $this->db->where('Column47',"".$accrue."");
          $this->db->or_where('Column46',"".$reg3."");
          $this->db->where('Column47',"".$accrue."");
          $this->db->or_where('Column46',"".$reg4."");
          $this->db->where('Column47',"".$accrue."");
          $this->db->or_where('Column46',"".$reg5."");
          $this->db->where('Column47',"".$accrue."");
          $this->db->or_where('Column46',"".$reg6."");
          $this->db->where('Column47',"".$accrue."");
          $this->db->or_where('Column46',"".$reg7."");
          $this->db->where('Column47',"".$accrue."");
          $this->db->or_where('Column46',"".$sda."");
          $this->db->where('Column46',"".$sda."");
          $this->db->where('Column47',"".$accrue."");
          $this->db->where('Column47',"".$accrue."");
          return $this->db->limit('5')
            ->get()
            ->result();
                           }
  }
  
      if(isset($_POST['kirim'])){
          $dbs=$_POST['dbs'];
          $des=$_POST['des'];
          $dgs=$_POST['dgs'];
          $reg1=$_POST['reg1'];
          $reg2=$_POST['reg2'];
          $reg3=$_POST['reg3'];
          $reg4=$_POST['reg4'];
          $reg5=$_POST['reg5'];
          $reg6=$_POST['reg6'];
          $reg7=$_POST['reg7'];
          $sda=$_POST['sda'];
          $new=$_POST['new'];
          $carry=$_POST['carry'];
          $accrue=$_POST['accrue'];
      $this->db->select("step_1.Column7 AS Contract_Number, step_1.Column9 AS Customer_Name, step_1.Column46 AS Departement, SUM(kk_44.Column8_13) AS Total_ADJ_CACL");
      $this->db->from('step_1');
      $this->db->join('comp_adj_per_kontrak', 'step_1.Column7 = comp_adj_per_kontrak.Column6_3');
      $this->db->join('kk_44', 'kk_44.Column8_3 = comp_adj_per_kontrak.Column6_3');
      $this->db->group_by('Customer_Name');
      $this->db->order_by('Total_ADJ_CACL', 'ASC');
      $this->db->or_where('Column46',"".$dbs."");
      $this->db->or_where('Column46',"".$des."");
      $this->db->or_where('Column46',"".$dgs."");
      $this->db->or_where('Column46',"".$reg1."");
      $this->db->or_where('Column46',"".$reg2."");
      $this->db->or_where('Column46',"".$reg3."");
      $this->db->or_where('Column46',"".$reg4."");
      $this->db->or_where('Column46',"".$reg5."");
      $this->db->or_where('Column46',"".$reg6."");
      $this->db->or_where('Column46',"".$reg7."");
      $this->db->or_where('Column46',"".$sda."");
      $this->db->or_where('Column46',"".$sda."");
      $this->db->or_where('Column47',"".$new."");
      $this->db->or_where('Column47',"".$carry."");
      $this->db->or_where('Column47',"".$accrue."");
      return $this->db->limit('5')
      ->get()
      ->result();
                      }
    }

	function get_graf_adj_cacl_multi(){
          if (isset($_POST['submit'])) {  
            if(isset($_POST['dbs'])OR($_POST['des'])OR($_POST['dgs'])OR($_POST['reg1'])OR($_POST['reg2'])OR($_POST['reg3'])OR($_POST['reg4'])OR($_POST['reg5'])OR($_POST['reg6'])OR($_POST['reg7'])OR($_POST['sda'])AND($_POST['new'])OR($_POST['carry'])OR($_POST['accrue'])){
                $dbs=$_POST['dbs'];
                $des=$_POST['des'];
                $dgs=$_POST['dgs'];
                $reg1=$_POST['reg1'];
                $reg2=$_POST['reg2'];
                $reg3=$_POST['reg3'];
                $reg4=$_POST['reg4'];
                $reg5=$_POST['reg5'];
                $reg6=$_POST['reg6'];
                $reg7=$_POST['reg7'];
                $sda=$_POST['sda'];
                $new=$_POST['new'];
                $carry=$_POST['carry'];
                $accrue=$_POST['accrue'];
            $this->db->select("DISTINCT(Column46) as depart, SUM(Column8_13) as multi");
            $this->db->from('kk_44');
            $this->db->join('step_1', 'kk_44.Column8_3 = step_1.Column7');
            $this->db->group_by("Column46");
            $this->db->or_where('Column46',"".$dbs."");
            $this->db->where('Column47',"".$new."");
            $this->db->or_where('Column46',"".$des."");
            $this->db->where('Column47',"".$new."");
            $this->db->or_where('Column46',"".$dgs."");
            $this->db->where('Column47',"".$new."");
            $this->db->or_where('Column46',"".$reg1."");
            $this->db->where('Column47',"".$new."");
            $this->db->or_where('Column46',"".$reg2."");
            $this->db->where('Column47',"".$new."");
            $this->db->or_where('Column46',"".$reg3."");
            $this->db->where('Column47',"".$new."");
            $this->db->or_where('Column46',"".$reg4."");
            $this->db->where('Column47',"".$new."");
            $this->db->or_where('Column46',"".$reg5."");
            $this->db->where('Column47',"".$new."");
            $this->db->or_where('Column46',"".$reg6."");
            $this->db->where('Column47',"".$new."");
            $this->db->or_where('Column46',"".$reg7."");
            $this->db->where('Column47',"".$new."");
            $this->db->or_where('Column46',"".$sda."");
            $this->db->where('Column47',"".$new."");
            
            $this->db->or_where('Column46',"".$dbs."");
            $this->db->where('Column47',"".$carry."");
            $this->db->or_where('Column46',"".$des."");
            $this->db->where('Column47',"".$carry."");
            $this->db->or_where('Column46',"".$dgs."");
            $this->db->where('Column47',"".$carry."");
            $this->db->or_where('Column46',"".$reg1."");
            $this->db->where('Column47',"".$carry."");
            $this->db->or_where('Column46',"".$reg2."");
            $this->db->where('Column47',"".$carry."");
            $this->db->or_where('Column46',"".$reg3."");
            $this->db->where('Column47',"".$carry."");
            $this->db->or_where('Column46',"".$reg4."");
            $this->db->where('Column47',"".$carry."");
            $this->db->or_where('Column46',"".$reg5."");
            $this->db->where('Column47',"".$carry."");
            $this->db->or_where('Column46',"".$reg6."");
            $this->db->where('Column47',"".$carry."");
            $this->db->or_where('Column46',"".$reg7."");
            $this->db->where('Column47',"".$carry."");
            $this->db->or_where('Column46',"".$sda."");
            $this->db->where('Column46',"".$sda."");
            $this->db->where('Column47',"".$carry."");

            $this->db->or_where('Column46',"".$dbs."");
            $this->db->where('Column47',"".$accrue."");
            $this->db->or_where('Column46',"".$des."");
            $this->db->where('Column47',"".$accrue."");
            $this->db->or_where('Column46',"".$dgs."");
            $this->db->where('Column47',"".$accrue."");
            $this->db->or_where('Column46',"".$reg1."");
            $this->db->where('Column47',"".$accrue."");
            $this->db->or_where('Column46',"".$reg2."");
            $this->db->where('Column47',"".$accrue."");
            $this->db->or_where('Column46',"".$reg3."");
            $this->db->where('Column47',"".$accrue."");
            $this->db->or_where('Column46',"".$reg4."");
            $this->db->where('Column47',"".$accrue."");
            $this->db->or_where('Column46',"".$reg5."");
            $this->db->where('Column47',"".$accrue."");
            $this->db->or_where('Column46',"".$reg6."");
            $this->db->where('Column47',"".$accrue."");
            $this->db->or_where('Column46',"".$reg7."");
            $this->db->where('Column47',"".$accrue."");
            $this->db->or_where('Column46',"".$sda."");
            $this->db->where('Column46',"".$sda."");
            $this->db->where('Column47',"".$accrue."");
            return $this->db->where('Column47',"".$accrue."")
              ->get()
              ->result();
                             }
        }
    
        if (isset($_POST['kirim'])) {  
            if(isset($_POST['dbs'])OR($_POST['des'])OR($_POST['dgs'])OR($_POST['reg1'])OR($_POST['reg2'])OR($_POST['reg3'])OR($_POST['reg4'])OR($_POST['reg5'])OR($_POST['reg6'])OR($_POST['reg7'])OR($_POST['sda'])OR($_POST['new'])OR($_POST['carry'])OR($_POST['accrue'])){
                $dbs=$_POST['dbs'];
                $des=$_POST['des'];
                $dgs=$_POST['dgs'];
                $reg1=$_POST['reg1'];
                $reg2=$_POST['reg2'];
                $reg3=$_POST['reg3'];
                $reg4=$_POST['reg4'];
                $reg5=$_POST['reg5'];
                $reg6=$_POST['reg6'];
                $reg7=$_POST['reg7'];
                $sda=$_POST['sda'];
                $new=$_POST['new'];
                $carry=$_POST['carry'];
                $accrue=$_POST['accrue'];
        $this->db->select("DISTINCT(Column46) as depart, SUM(Column8_13) as multi");
        $this->db->from('kk_44');
        $this->db->join('step_1', 'kk_44.Column8_3 = step_1.Column7');
        $this->db->group_by("Column46");
        $this->db->or_where('Column46',"".$dbs."");
        $this->db->or_where('Column46',"".$des."");
        $this->db->or_where('Column46',"".$dgs."");
        $this->db->or_where('Column46',"".$reg1."");
        $this->db->or_where('Column46',"".$reg2."");
        $this->db->or_where('Column46',"".$reg3."");
        $this->db->or_where('Column46',"".$reg4."");
        $this->db->or_where('Column46',"".$reg5."");
        $this->db->or_where('Column46',"".$reg6."");
        $this->db->or_where('Column46',"".$reg7."");
        $this->db->or_where('Column46',"".$sda."");
        $this->db->or_where('Column46',"".$sda."");
        $this->db->or_where('Column47',"".$new."");
        $this->db->or_where('Column47',"".$carry."");
        return $this->db->or_where('Column47',"".$accrue."")
          ->get()
          ->result();
            }
        }
}

	

function get_data_kontrak_multi(){
          if (isset($_POST['submit'])) {  
            if(isset($_POST['dbs'])OR($_POST['des'])OR($_POST['dgs'])OR($_POST['reg1'])OR($_POST['reg2'])OR($_POST['reg3'])OR($_POST['reg4'])OR($_POST['reg5'])OR($_POST['reg6'])OR($_POST['reg7'])OR($_POST['sda'])AND($_POST['new'])OR($_POST['carry'])OR($_POST['accrue'])){
                $dbs=$_POST['dbs'];
                $des=$_POST['des'];
                $dgs=$_POST['dgs'];
                $reg1=$_POST['reg1'];
                $reg2=$_POST['reg2'];
                $reg3=$_POST['reg3'];
                $reg4=$_POST['reg4'];
                $reg5=$_POST['reg5'];
                $reg6=$_POST['reg6'];
                $reg7=$_POST['reg7'];
                $sda=$_POST['sda'];
                $new=$_POST['new'];
                $carry=$_POST['carry'];
                $accrue=$_POST['accrue'];
            $this->db->select("COUNT(DISTINCT Column7) as kontrak_dept");
            $this->db->from('step_1');
            $this->db->group_by("Column46");
            $this->db->order_by("Column46 ASC");
            $this->db->or_where('Column46',"".$dbs."");
            $this->db->where('Column47',"".$new."");
            $this->db->or_where('Column46',"".$des."");
            $this->db->where('Column47',"".$new."");
            $this->db->or_where('Column46',"".$dgs."");
            $this->db->where('Column47',"".$new."");
            $this->db->or_where('Column46',"".$reg1."");
            $this->db->where('Column47',"".$new."");
            $this->db->or_where('Column46',"".$reg2."");
            $this->db->where('Column47',"".$new."");
            $this->db->or_where('Column46',"".$reg3."");
            $this->db->where('Column47',"".$new."");
            $this->db->or_where('Column46',"".$reg4."");
            $this->db->where('Column47',"".$new."");
            $this->db->or_where('Column46',"".$reg5."");
            $this->db->where('Column47',"".$new."");
            $this->db->or_where('Column46',"".$reg6."");
            $this->db->where('Column47',"".$new."");
            $this->db->or_where('Column46',"".$reg7."");
            $this->db->where('Column47',"".$new."");
            $this->db->or_where('Column46',"".$sda."");
            $this->db->where('Column47',"".$new."");
            
            $this->db->or_where('Column46',"".$dbs."");
            $this->db->where('Column47',"".$carry."");
            $this->db->or_where('Column46',"".$des."");
            $this->db->where('Column47',"".$carry."");
            $this->db->or_where('Column46',"".$dgs."");
            $this->db->where('Column47',"".$carry."");
            $this->db->or_where('Column46',"".$reg1."");
            $this->db->where('Column47',"".$carry."");
            $this->db->or_where('Column46',"".$reg2."");
            $this->db->where('Column47',"".$carry."");
            $this->db->or_where('Column46',"".$reg3."");
            $this->db->where('Column47',"".$carry."");
            $this->db->or_where('Column46',"".$reg4."");
            $this->db->where('Column47',"".$carry."");
            $this->db->or_where('Column46',"".$reg5."");
            $this->db->where('Column47',"".$carry."");
            $this->db->or_where('Column46',"".$reg6."");
            $this->db->where('Column47',"".$carry."");
            $this->db->or_where('Column46',"".$reg7."");
            $this->db->where('Column47',"".$carry."");
            $this->db->or_where('Column46',"".$sda."");
            $this->db->where('Column46',"".$sda."");
            $this->db->where('Column47',"".$carry."");

            $this->db->or_where('Column46',"".$dbs."");
            $this->db->where('Column47',"".$accrue."");
            $this->db->or_where('Column46',"".$des."");
            $this->db->where('Column47',"".$accrue."");
            $this->db->or_where('Column46',"".$dgs."");
            $this->db->where('Column47',"".$accrue."");
            $this->db->or_where('Column46',"".$reg1."");
            $this->db->where('Column47',"".$accrue."");
            $this->db->or_where('Column46',"".$reg2."");
            $this->db->where('Column47',"".$accrue."");
            $this->db->or_where('Column46',"".$reg3."");
            $this->db->where('Column47',"".$accrue."");
            $this->db->or_where('Column46',"".$reg4."");
            $this->db->where('Column47',"".$accrue."");
            $this->db->or_where('Column46',"".$reg5."");
            $this->db->where('Column47',"".$accrue."");
            $this->db->or_where('Column46',"".$reg6."");
            $this->db->where('Column47',"".$accrue."");
            $this->db->or_where('Column46',"".$reg7."");
            $this->db->where('Column47',"".$accrue."");
            $this->db->or_where('Column46',"".$sda."");
            $this->db->where('Column46',"".$sda."");
            $this->db->where('Column47',"".$accrue."");
            return $this->db->where('Column47',"".$accrue."")
              ->get()
              ->result();
                             }
        }
    
        if (isset($_POST['kirim'])) {  
            if(isset($_POST['dbs'])OR($_POST['des'])OR($_POST['dgs'])OR($_POST['reg1'])OR($_POST['reg2'])OR($_POST['reg3'])OR($_POST['reg4'])OR($_POST['reg5'])OR($_POST['reg6'])OR($_POST['reg7'])OR($_POST['sda'])OR($_POST['new'])OR($_POST['carry'])OR($_POST['accrue'])){
                $dbs=$_POST['dbs'];
                $des=$_POST['des'];
                $dgs=$_POST['dgs'];
                $reg1=$_POST['reg1'];
                $reg2=$_POST['reg2'];
                $reg3=$_POST['reg3'];
                $reg4=$_POST['reg4'];
                $reg5=$_POST['reg5'];
                $reg6=$_POST['reg6'];
                $reg7=$_POST['reg7'];
                $sda=$_POST['sda'];
                $new=$_POST['new'];
                $carry=$_POST['carry'];
                $accrue=$_POST['accrue'];
        $this->db->select("COUNT(DISTINCT Column7) as kontrak_dept");
        $this->db->from('step_1');
        $this->db->group_by("Column46");
        $this->db->order_by("Column46 ASC");
        $this->db->or_where('Column46',"".$dbs."");
        $this->db->or_where('Column46',"".$des."");
        $this->db->or_where('Column46',"".$dgs."");
        $this->db->or_where('Column46',"".$reg1."");
        $this->db->or_where('Column46',"".$reg2."");
        $this->db->or_where('Column46',"".$reg3."");
        $this->db->or_where('Column46',"".$reg4."");
        $this->db->or_where('Column46',"".$reg5."");
        $this->db->or_where('Column46',"".$reg6."");
        $this->db->or_where('Column46',"".$reg7."");
        $this->db->or_where('Column46',"".$sda."");
        $this->db->or_where('Column46',"".$sda."");
        $this->db->or_where('Column47',"".$new."");
        $this->db->or_where('Column47',"".$carry."");
        return $this->db->or_where('Column47',"".$accrue."")
          ->get()
          ->result();
            }
        }
}


	
    function get_graf_revenue_multi(){
        if (isset($_POST['submit'])) {  
            if(isset($_POST['dbs'])OR($_POST['des'])OR($_POST['dgs'])OR($_POST['reg1'])OR($_POST['reg2'])OR($_POST['reg3'])OR($_POST['reg4'])OR($_POST['reg5'])OR($_POST['reg6'])OR($_POST['reg7'])OR($_POST['sda'])AND($_POST['new'])OR($_POST['carry'])OR($_POST['accrue'])){
                $dbs=$_POST['dbs'];
                $des=$_POST['des'];
                $dgs=$_POST['dgs'];
                $reg1=$_POST['reg1'];
                $reg2=$_POST['reg2'];
                $reg3=$_POST['reg3'];
                $reg4=$_POST['reg4'];
                $reg5=$_POST['reg5'];
                $reg6=$_POST['reg6'];
                $reg7=$_POST['reg7'];
                $sda=$_POST['sda'];
                $new=$_POST['new'];
                $carry=$_POST['carry'];
                $accrue=$_POST['accrue'];
            $this->db->select("DISTINCT(Column46) as depart, SUM(Column5_94) as multi");
            $this->db->from('step_5');
            $this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
		    $this->db->group_by("Column46");
            $this->db->or_where('Column46',"".$dbs."");
            $this->db->where('Column47',"".$new."");
            $this->db->or_where('Column46',"".$des."");
            $this->db->where('Column47',"".$new."");
            $this->db->or_where('Column46',"".$dgs."");
            $this->db->where('Column47',"".$new."");
            $this->db->or_where('Column46',"".$reg1."");
            $this->db->where('Column47',"".$new."");
            $this->db->or_where('Column46',"".$reg2."");
            $this->db->where('Column47',"".$new."");
            $this->db->or_where('Column46',"".$reg3."");
            $this->db->where('Column47',"".$new."");
            $this->db->or_where('Column46',"".$reg4."");
            $this->db->where('Column47',"".$new."");
            $this->db->or_where('Column46',"".$reg5."");
            $this->db->where('Column47',"".$new."");
            $this->db->or_where('Column46',"".$reg6."");
            $this->db->where('Column47',"".$new."");
            $this->db->or_where('Column46',"".$reg7."");
            $this->db->where('Column47',"".$new."");
            $this->db->or_where('Column46',"".$sda."");
            $this->db->where('Column47',"".$new."");
            
            $this->db->or_where('Column46',"".$dbs."");
            $this->db->where('Column47',"".$carry."");
            $this->db->or_where('Column46',"".$des."");
            $this->db->where('Column47',"".$carry."");
            $this->db->or_where('Column46',"".$dgs."");
            $this->db->where('Column47',"".$carry."");
            $this->db->or_where('Column46',"".$reg1."");
            $this->db->where('Column47',"".$carry."");
            $this->db->or_where('Column46',"".$reg2."");
            $this->db->where('Column47',"".$carry."");
            $this->db->or_where('Column46',"".$reg3."");
            $this->db->where('Column47',"".$carry."");
            $this->db->or_where('Column46',"".$reg4."");
            $this->db->where('Column47',"".$carry."");
            $this->db->or_where('Column46',"".$reg5."");
            $this->db->where('Column47',"".$carry."");
            $this->db->or_where('Column46',"".$reg6."");
            $this->db->where('Column47',"".$carry."");
            $this->db->or_where('Column46',"".$reg7."");
            $this->db->where('Column47',"".$carry."");
            $this->db->or_where('Column46',"".$sda."");
            $this->db->where('Column46',"".$sda."");
            $this->db->where('Column47',"".$carry."");

            $this->db->or_where('Column46',"".$dbs."");
            $this->db->where('Column47',"".$accrue."");
            $this->db->or_where('Column46',"".$des."");
            $this->db->where('Column47',"".$accrue."");
            $this->db->or_where('Column46',"".$dgs."");
            $this->db->where('Column47',"".$accrue."");
            $this->db->or_where('Column46',"".$reg1."");
            $this->db->where('Column47',"".$accrue."");
            $this->db->or_where('Column46',"".$reg2."");
            $this->db->where('Column47',"".$accrue."");
            $this->db->or_where('Column46',"".$reg3."");
            $this->db->where('Column47',"".$accrue."");
            $this->db->or_where('Column46',"".$reg4."");
            $this->db->where('Column47',"".$accrue."");
            $this->db->or_where('Column46',"".$reg5."");
            $this->db->where('Column47',"".$accrue."");
            $this->db->or_where('Column46',"".$reg6."");
            $this->db->where('Column47',"".$accrue."");
            $this->db->or_where('Column46',"".$reg7."");
            $this->db->where('Column47',"".$accrue."");
            $this->db->or_where('Column46',"".$sda."");
            $this->db->where('Column46',"".$sda."");
            $this->db->where('Column47',"".$accrue."");
            return $this->db->where('Column47',"".$accrue."")
              ->get()
              ->result();
                             }
    }
    
        if (isset($_POST['kirim'])) {  
            if(isset($_POST['dbs'])OR($_POST['des'])OR($_POST['dgs'])OR($_POST['reg1'])OR($_POST['reg2'])OR($_POST['reg3'])OR($_POST['reg4'])OR($_POST['reg5'])OR($_POST['reg6'])OR($_POST['reg7'])OR($_POST['sda'])OR($_POST['new'])OR($_POST['carry'])OR($_POST['accrue'])){
                $dbs=$_POST['dbs'];
                $des=$_POST['des'];
                $dgs=$_POST['dgs'];
                $reg1=$_POST['reg1'];
                $reg2=$_POST['reg2'];
                $reg3=$_POST['reg3'];
                $reg4=$_POST['reg4'];
                $reg5=$_POST['reg5'];
                $reg6=$_POST['reg6'];
                $reg7=$_POST['reg7'];
                $sda=$_POST['sda'];
                $new=$_POST['new'];
                $carry=$_POST['carry'];
                $accrue=$_POST['accrue'];

        $this->db->select("DISTINCT(Column46) as depart, SUM(Column5_94) as multi");
        $this->db->from('step_1');
		$this->db->join('step_5', 'step_1.Column7 = step_5.Column5_3');
        $this->db->group_by("Column46");
        $this->db->or_where('Column46',"".$dbs."");
        $this->db->or_where('Column46',"".$des."");
        $this->db->or_where('Column46',"".$dgs."");
        $this->db->or_where('Column46',"".$reg1."");
        $this->db->or_where('Column46',"".$reg2."");
        $this->db->or_where('Column46',"".$reg3."");
        $this->db->or_where('Column46',"".$reg4."");
        $this->db->or_where('Column46',"".$reg5."");
        $this->db->or_where('Column46',"".$reg6."");
        $this->db->or_where('Column46',"".$reg7."");
        $this->db->or_where('Column46',"".$sda."");
        $this->db->or_where('Column47',"".$new."");
        $this->db->or_where('Column47',"".$carry."");
        return $this->db->or_where('Column47',"".$accrue."")
          ->get()
          ->result();
            }
        }

        
	}

	//-- MULAI GRAFF BILL BY DEPARTEMEN --
	function get_graf_bill_dbs(){
        $this->db->select("SUM(Column6) as dbs");
        $this->db->from('step_1');
		return $this->db->where('Column46', 'DBS')
          ->get()
          ->result();
	}

	function get_graf_bill_des(){
        $this->db->select("SUM(Column6) as des");
        $this->db->from('step_1');
		return $this->db->where('Column46', 'DES')
          ->get()
          ->result();
	}

	function get_graf_bill_dgs(){
        $this->db->select("SUM(Column6) as dgs");
        $this->db->from('step_1');
		return $this->db->where('Column46', 'DGS')
          ->get()
          ->result();
	}
	//-- AKHIR GRAFF BILL BY DEPARTEMEN --

	//-- MULAI REVENUE GRAFF BY DEPARTEMEN --
	function get_graf_revenue_dbs(){
        $this->db->select("SUM(Column5_94) as dbs");
        $this->db->from('step_5');
		$this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
		return $this->db->where('Column46','DBS')
          ->get()
          ->result();
	}

	function get_graf_revenue_des(){
        $this->db->select("SUM(Column5_94) as des");
        $this->db->from('step_5');
		$this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
		return $this->db->where('Column46','DES')
          ->get()
          ->result();
	}

	function get_graf_revenue_dgs(){
        $this->db->select("SUM(Column5_94) as dgs");
        $this->db->from('step_5');
		$this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
		return $this->db->where('Column46','DGS')
          ->get()
          ->result();
	}

	function get_graf_revenue_reg1(){
        $this->db->select("SUM(Column5_94) as reg1");
        $this->db->from('step_5');
		$this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
		return $this->db->where('Column46','REG 1')
          ->get()
          ->result();
	}

	function get_graf_revenue_reg2(){
        $this->db->select("SUM(Column5_94) as reg2");
        $this->db->from('step_5');
		$this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
		return $this->db->where('Column46','REG 2')
          ->get()
          ->result();
	}

	function get_graf_revenue_reg3(){
        $this->db->select("SUM(Column5_94) as reg3");
        $this->db->from('step_5');
		$this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
		return $this->db->where('Column46','REG 3')
          ->get()
          ->result();
	}

	function get_graf_revenue_reg4(){
        $this->db->select("SUM(Column5_94) as reg4");
        $this->db->from('step_5');
		$this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
		return $this->db->where('Column46','REG 4')
          ->get()
          ->result();
	}

	function get_graf_revenue_reg5(){
        $this->db->select("SUM(Column5_94) as reg5");
        $this->db->from('step_5');
		$this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
		return $this->db->where('Column46','REG 5')
          ->get()
          ->result();
	}

	function get_graf_revenue_reg6(){
        $this->db->select("SUM(Column5_94) as reg6");
        $this->db->from('step_5');
		$this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
		return $this->db->where('Column46','REG 6')
          ->get()
          ->result();
	}

	function get_graf_revenue_reg7(){
        $this->db->select("SUM(Column5_94) as reg7");
        $this->db->from('step_5');
		$this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
		return $this->db->where('Column46','REG 7')
          ->get()
          ->result();
	}

	function get_graf_revenue_sda(){
        $this->db->select("SUM(Column5_94) as sda");
        $this->db->from('step_5');
		$this->db->join('step_1', 'step_5.Column5_3 = step_1.Column7');
		return $this->db->where('Column46','SDA')
          ->get()
          ->result();
	}


	function get_graf_cost_dbs(){
        $this->db->select("SUM(Column4_27) as dbs");
        $this->db->from('step_4');
		$this->db->join('step_1', 'step_4.Column4_3 = step_1.Column7');
		return $this->db->where('Column46','DBS')
          ->get()
          ->result();
	}

	function get_graf_cost_des(){
        $this->db->select("SUM(Column4_27) as des");
        $this->db->from('step_4');
		$this->db->join('step_1', 'step_4.Column4_3 = step_1.Column7');
		return $this->db->where('Column46','DES')
          ->get()
          ->result();
	}

	function get_graf_cost_dgs(){
        $this->db->select("SUM(Column4_27) as dgs");
        $this->db->from('step_4');
		$this->db->join('step_1', 'step_4.Column4_3 = step_1.Column7');
		return $this->db->where('Column46','DGS')
          ->get()
          ->result();
	}
	//-- MULAI GRAF BAR ADJUSTMENT CACL --
	function get_graf_adj_cacl_dbs(){
        $this->db->select("SUM(Column8_13) as dbs");
        $this->db->from('kk_44');
		$this->db->join('step_1', 'kk_44.Column8_3 = step_1.Column7');
		return $this->db->where('Column46','DBS')
          ->get()
          ->result();
	}

	function get_graf_adj_cacl_des(){
        $this->db->select("SUM(Column8_13) as des");
        $this->db->from('kk_44');
		$this->db->join('step_1', 'kk_44.Column8_3 = step_1.Column7');
		return $this->db->where('Column46','DES')
          ->get()
          ->result();
	}

	function get_graf_adj_cacl_dgs(){
        $this->db->select("SUM(Column8_13) as dgs");
        $this->db->from('kk_44');
		$this->db->join('step_1', 'kk_44.Column8_3 = step_1.Column7');
		return $this->db->where('Column46','DGS')
          ->get()
          ->result();
	}

	function get_graf_adj_cacl_reg1(){
        $this->db->select("SUM(Column8_13) as reg1");
        $this->db->from('kk_44');
		$this->db->join('step_1', 'kk_44.Column8_3 = step_1.Column7');
		return $this->db->where('Column46','REG 1')
          ->get()
          ->result();
	}

	function get_graf_adj_cacl_reg2(){
        $this->db->select("SUM(Column8_13) as reg2");
        $this->db->from('kk_44');
		$this->db->join('step_1', 'kk_44.Column8_3 = step_1.Column7');
		return $this->db->where('Column46','REG 2')
          ->get()
          ->result();
	}

	function get_graf_adj_cacl_reg3(){
        $this->db->select("SUM(Column8_13) as reg3");
        $this->db->from('kk_44');
		$this->db->join('step_1', 'kk_44.Column8_3 = step_1.Column7');
		return $this->db->where('Column46','REG 3')
          ->get()
          ->result();
	}

	function get_graf_adj_cacl_reg4(){
        $this->db->select("SUM(Column8_13) as reg4");
        $this->db->from('kk_44');
		$this->db->join('step_1', 'kk_44.Column8_3 = step_1.Column7');
		return $this->db->where('Column46','REG 4')
          ->get()
          ->result();
	}

	function get_graf_adj_cacl_reg5(){
        $this->db->select("SUM(Column8_13) as reg5");
        $this->db->from('kk_44');
		$this->db->join('step_1', 'kk_44.Column8_3 = step_1.Column7');
		return $this->db->where('Column46','REG 5')
          ->get()
          ->result();
	}

	function get_graf_adj_cacl_reg6(){
        $this->db->select("SUM(Column8_13) as reg6");
        $this->db->from('kk_44');
		$this->db->join('step_1', 'kk_44.Column8_3 = step_1.Column7');
		return $this->db->where('Column46','REG 6')
          ->get()
          ->result();
	}

	function get_graf_adj_cacl_reg7(){
        $this->db->select("SUM(Column8_13) as reg7");
        $this->db->from('kk_44');
		$this->db->join('step_1', 'kk_44.Column8_3 = step_1.Column7');
		return $this->db->where('Column46','REG 7')
          ->get()
          ->result();
	}

	function get_graf_adj_cacl_sda(){
        $this->db->select("SUM(Column8_13) as sda");
        $this->db->from('kk_44');
		$this->db->join('step_1', 'kk_44.Column8_3 = step_1.Column7');
		return $this->db->where('Column46','SDA')
          ->get()
          ->result();
	}

	function get_graf_pop_dbs(){
        $this->db->select("COUNT(Column6_3) as dbs");
        $this->db->from('comp_adj_per_kontrak');
		$this->db->join('step_1', 'comp_adj_per_kontrak.Column6_3 = step_1.Column7');
		return $this->db->where('Column46','DBS')
          ->get()
          ->result();
	}

	function get_graf_pop_des(){
        $this->db->select("COUNT(Column6_3) as des");
        $this->db->from('comp_adj_per_kontrak');
		$this->db->join('step_1', 'comp_adj_per_kontrak.Column6_3 = step_1.Column7');
		return $this->db->where('Column46','DES')
          ->get()
          ->result();
	}

	function get_graf_pop_dgs(){
        $this->db->select("COUNT(Column6_3) as dgs");
        $this->db->from('comp_adj_per_kontrak');
		$this->db->join('step_1', 'comp_adj_per_kontrak.Column6_3 = step_1.Column7');
		return $this->db->where('Column46','DGS')
          ->get()
          ->result();
	}

	function get_graf_move_cacl(){
        $this->db->select("Column8_13 AS status, SUM(Column8_13) AS jumlah");
        $this->db->from('kk_44');
		$this->db->group_by('status');
		return $this->db->order_by('jumlah', 'DESC')
          ->get()
          ->result();
	}

	function get_graf_end_balance_current(){
        $this->db->select("count(DISTINCT Column8_3) as kontrak, SUM(Column8_17) as current");
        return $this->db->from('kk_44')
          ->get()
          ->result();
	}

	function get_graf_end_balance_non_current(){
        $this->db->select("count(DISTINCT Column8_3) as kontrak, SUM(Column8_18) as non_current");
        return $this->db->from('kk_44')
          ->get()
          ->result();
	}

	function get_data_kontrak(){
		$this->db->select("count(DISTINCT Column6_3) as kontrak");
		$this->db->from('comp_adj_per_kontrak');
		return $this->db->join('step_1', 'comp_adj_per_kontrak.Column6_3 = step_1.Column7')
          ->get()
          ->result();
	}

	function get_data_total_value(){
        $this->db->select("SUM(DISTINCT Column13) as alldept");
        return $this->db->from('step_1')
          ->get()
          ->result();
	}

	function get_data_total_billing(){
        $this->db->select("SUM(Column6) as tambah");
        return $this->db->from('step_1')
          ->get()
          ->result();
	}

	function get_data_total_revenue(){
        $this->db->select("SUM(Column5_94) as tambah");
        return $this->db->from('step_5')
          ->get()
          ->result();
	}

	function get_data_total_cost(){
        $this->db->select("SUM(Column4_27) as tambah");
        return $this->db->from('step_4')
          ->get()
          ->result();
	}

	function get_data_total_adjustment_cacl(){
        $this->db->select("SUM(Column8_13) as tambah");
        return $this->db->from('kk_44')
          ->get()
          ->result();
	}
	
	function get_data_total_ending_balance(){
        $this->db->select("SUM(Column8_14) as tambah");
        return $this->db->from('kk_44')
          ->get()
          ->result();
	}

	function get_data_top_ca(){
        $this->db->select("step_1.Column7 AS Contract_Number, step_1.Column9 AS Customer_Name, step_1.Column46 AS Departement, SUM(kk_44.Column8_13) AS Total_ADJ_CACL");
        $this->db->from('step_1');
		$this->db->join('comp_adj_per_kontrak', 'step_1.Column7 = comp_adj_per_kontrak.Column6_3');
		$this->db->join('kk_44', 'kk_44.Column8_3 = comp_adj_per_kontrak.Column6_3');
		$this->db->group_by('Customer_Name');
		$this->db->order_by('Total_ADJ_CACL', 'DESC');
		return $this->db->limit('5')
          ->get()
          ->result();
	}

	function get_data_top_cl(){
        $this->db->select("step_1.Column7 AS Contract_Number, step_1.Column9 AS Customer_Name, step_1.Column46 AS Departement, SUM(kk_44.Column8_13) AS Total_ADJ_CACL");
        $this->db->from('step_1');
		$this->db->join('comp_adj_per_kontrak', 'step_1.Column7 = comp_adj_per_kontrak.Column6_3');
		$this->db->join('kk_44', 'kk_44.Column8_3 = comp_adj_per_kontrak.Column6_3');
		$this->db->group_by('Customer_Name');
		$this->db->order_by('Total_ADJ_CACL', 'ASC');
		return $this->db->limit('5')
          ->get()
          ->result();
	}

	function get_data_kontrak_dept(){
		$this->db->select("COUNT(DISTINCT Column7) as kontrak_dept");
		$this->db->from('step_1');
		$this->db->group_by("Column46");
		return $this->db->order_by("Column46 ASC")
          ->get()
          ->result();
	}

	public function get_step1()
	{
		return $this->db->get('step_1')->result_array();
	}

	public function get_step2()
	{
		return $this->db->get('step_2')->result_array();
	}
	
	public function get_step3()
	{
		return $this->db->get('step_3')->result_array();
	}

	public function get_step4()
	{
		return $this->db->get('step_4')->result_array();
	}

	public function get_step5()
	{
		return $this->db->get('step_5')->result_array();
	}

	public function get_step6()
	{
		return $this->db->get('comp_adj_per_kontrak')->result_array();
	}

	public function get_step7()
	{
		return $this->db->get('comp_adj_per_gl')->result_array();
	}

	public function get_step8()
	{
		return $this->db->get('kk_44')->result_array();
	}

	public function get_step9()
	{
		return $this->db->get('comp_summary_of_unsatisfied_po')->result_array();
	}

	public function get_step10()
	{
		return $this->db->get('proyeksi_revenue')->result_array();
	}

	public function get_step11()
	{
		return $this->db->get('alokasi_cacl_per_bp_number')->result_array();
	}

	public function insert_batch($data){
		$this->db->insert_batch('step_1',$data);
		if($this->db->affected_rows()>0)
		{
			return 1;
		}
		else{
			return 0;
		}
	}

	public function insert_batch2($data){
		$this->db->insert_batch('step_2',$data);
		if($this->db->affected_rows()>0)
		{
			return 1;
		}
		else{
			return 0;
		}
	}

	public function insert_batch3($data){
		$this->db->insert_batch('step_3',$data);
		if($this->db->affected_rows()>0)
		{
			return 1;
		}
		else{
			return 0;
		}
	}

	public function insert_batch4($data){
		$this->db->insert_batch('step_4',$data);
		if($this->db->affected_rows()>0)
		{
			return 1;
		}
		else{
			return 0;
		}
	}

	public function review_list()
	{
		$this->db->select('*');
		$this->db->from('step_1');
        $this->db->where('Column49','Complete');
		$query=$this->db->get();
		return $query->result();
	}

	public function review_list2()
	{
		$this->db->select('*');
		$this->db->from('step_2');
        $this->db->where('Column2_31','Complete');
		$query=$this->db->get();
		return $query->result();
	}	
	public function review_list3()
	{
		$this->db->select('*');
		$this->db->from('step_3');
        $this->db->where('Column3_38','Complete');
		$query=$this->db->get();
		return $query->result();
	}
	public function review_list4()
	{
		$this->db->select('*');
		$this->db->from('step_4');
        $this->db->where('Column4_49','Complete');
		$query=$this->db->get();
		return $query->result();
	}
	public function review_list5()
	{
		$this->db->select('*');
		$this->db->from('step_5');
        $this->db->where('Column5_105','Complete');
		$query=$this->db->get();
		return $query->result();
	}
	public function review_list6()
	{
		$this->db->select('*');
		$this->db->from('comp_adj_per_kontrak');
        $this->db->where('Column6_23','Complete');
		$query=$this->db->get();
		return $query->result();
	}

	public function review_list7()
	{
		$this->db->select('*');
		$this->db->from('comp_adj_per_gl');
        $this->db->where('Column7_22','Complete');
		$query=$this->db->get();
		return $query->result();
	}

	public function review_list8()
	{
		$this->db->select('*');
		$this->db->from('kk_44');
        $this->db->where('Column8_19','Complete');
		$query=$this->db->get();
		return $query->result();
	}

	public function review_list9()
	{
		$this->db->select('*');
		$this->db->from('comp_summary_of_unsatisfied_po');
        $this->db->where('Column9_17','Complete');
		$query=$this->db->get();
		return $query->result();
	}

	public function review_list10()
	{
		$this->db->select('*');
		$this->db->from('proyeksi_revenue');
        $this->db->where('Column10_11','Complete');
		$query=$this->db->get();
		return $query->result();
	}

	public function review_list11()
	{
		$this->db->select('*');
		$this->db->from('alokasi_cacl_per_bp_number');
        $this->db->where('Column11_26','Complete');
		$query=$this->db->get();
		return $query->result();
	}
}