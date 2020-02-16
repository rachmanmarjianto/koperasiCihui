<?php
class M_pos extends CI_Model{

    function __construct()
	{
		parent::__construct();
		$this->load->database();
    }

    function findProduct($barcode)
    {
        $sql = "SELECT `barcode`, `nama`, `harga_jual` FROM `barang` WHERE `barcode`='".$barcode."'";
        $res = $this->db->query($sql);
        if($res->num_rows())
        {
            return json_encode($res->result_array());
        }
        else
        {
            $sql = "SELECT `barcode`, `nama`, `harga_jual` FROM `barang` WHERE `nama` like '%".$barcode."%'";
            $res = $this->db->query($sql);

            if($res->num_rows())
            {
                return json_encode($res->result_array());
            }
            else
            {
                return -1;
            }
        }
    }


}
?>