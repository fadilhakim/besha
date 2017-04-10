<?php

class Model_sparepart extends CI_Model {

    public function __construct() {

        $this -> load -> database();

    }

    public function list_sparepart() {

        $this -> db -> select('*');

        $this -> db -> from('sparepart_tbl');

        $query = $this -> db -> get();

        return $query -> result();

    }

    public function list_kota() {

        $this -> db -> select('*');

        $this -> db -> from('inf_lokasi');
        $this -> db -> limit(31);
        $query = $this -> db -> get();
        return $query -> result();
    }

    public function list_sparepart_category() {

        $this -> db -> select('*');

        $this -> db -> from('sparepart_category');

        $query = $this -> db -> get();

        return $query -> result();

    }

    function list_manufacturer() {

        $this -> db -> select('*');

        $this -> db -> from('manufacturer_tbl');

        $query = $this -> db -> get();

        return $query -> result();

    }


    function list_detail_sparepart_category() {

        $this -> db -> select('*');

        $this -> db -> from('detail_sparepart_category_tbl');

        $query = $this -> db -> get();

        return $query -> result();

    }

    public function get_stock_status() {

        $stock = $this -> db -> get('product_stock_status');

        return $stock;

    }

    public function getsparepartfromID($id) {

        //$this->db->get_where('product_tbl',array('product_id' => $id));

        $this -> db -> select('*');

        $this -> db -> from('product_tbl');

        $this -> db -> where('product_id = '.$id.
            '');

        $query = $this -> db -> get();

        if ($query)

        {

            return $query -> result();

        } else

        {

            return false;

        }

    }

    public function getproductfromIdandCode($id, $code) {

        $this -> db -> select('*');

        $this -> db -> from('sparepart_tbl');

        $this -> db -> where('sparepart_id = '.$id.'');

        $this -> db -> like('sparepart_code', ''.$code.''); // Select where id matches the posted id

        $query = $this -> db -> get();

        return $query;

    }

    public function getproductfromIdandSlug($id, $slug) {

        $this -> db -> select('*');

        $this -> db -> from('sparepart_tbl');

        $this -> db -> where('sparepart_id = '.$id.
            '');

        $this -> db -> like('sparepart_slug', ''.$slug.
            ''); // Select where id matches the posted id

        $query = $this -> db -> get();
        return $query -> result();

    }

    public function getsparepartbyManufacturer($id) {

        $getmanu = $this -> db -> get_where('sparepart_tbl', array('manu_id' => $id));

        return $getmanu;

    }

    public function searchProduct($keyword) {

        $this -> db -> or_like('sparepart_slug', $keyword);

        $this -> db -> or_like('sparepart_code', $keyword);

        $query = $this -> db -> get('sparepart_tbl');

        return $query -> result();

    }

    public function count_product() {

        return $this -> db -> count_all("sparepart_tbl");

    }

    public function count_product_by_id($id) {

        $query = $this -> db -> where('manu_id', $id) -> get('sparepart_tbl');

        return $query -> num_rows();

    }

    public function count_product_category_id($slug, $manu_id) {

        $this -> db -> select('*');

        $this -> db -> from('sparepart_tbl');

        $this -> db -> where('sparepart_category', $slug);

        $this -> db -> where('manu_id', $manu_id);

        $query = $this -> db -> get();

        return $query -> result();

    }

    public function fetch_product($limit, $start = 0) {

        $qry = $this -> db -> get("sparepart_tbl", $limit, $start);

        return $qry -> result();

        if ($query -> num_rows() > 0) {

            foreach($query -> result() as $row) {

                $data[] = $row;

            }

            return $data;

        }

        return false;

    }

    public function fetch_product_by_id($id, $limit, $start = 0) {

        $this -> db -> select('*');

        $this -> db -> from('sparepart_tbl');

        if ($id) {

            $this -> db -> where('manu_id', $id);

        }

        $this -> db -> limit($limit, $start);

        $query = $this -> db -> get();

        return $query -> result();

    }

    public function fetch_product_by_slug($slug, $manu_id, $limit, $start = 0) {

        $this -> db -> select('*');

        $this -> db -> from('sparepart_tbl');

        if ($slug) {

            $this -> db -> where('manu_id', $manu_id);

            $this -> db -> where('sparepart_category', $slug);

        }

        $this -> db -> limit($limit, $start);

        $query = $this -> db -> get();

        return $query -> result();

    }

    function insertUser($data)

    {

        return $this -> db -> insert('user_tbl', $data);

    }

    //send verification email to user's email id

    function sendEmail($to_email) {

        $from_email = 'info@besha-analitika.co.id';
        $subject = 'Verify Your Email Address';

        $message = 'Dear User,<br /><br />Please click on the below activation link to verify your email address.<br /><br /> http://www.besha-analitika.co.id/verify/'.md5($to_email).
        '<br /><br /><br />Thank You<br />';

        //configure email settings

        $config['protocol'] = 'smtp';
        $config['mailtype'] = 'html';
        $config['priority'] = '1';
        $config['charset'] = 'iso-8859-1';
        $config['newline'] = "\r\n"; //use double quotes*/
        $config['wordwrap'] = TRUE;
        $config['smtp_host'] = 'ssl://besha-analitika.co.id';
        $config['smtp_port'] = 465;
        $config['smtp_user'] = 'info@besha-analitika.co.id';
        $config['smtp_pass'] = 'info-n23';

        $this -> email -> initialize($config);

        //send mail

        $this -> email -> from($from_email, 'Besha Analitika');
        $this -> email -> to($to_email);
        $this -> email -> subject($subject);
        $this -> email -> message($message);
        return $this -> email -> send();

    }

    //activate user account

    function verifyEmailID($key)

    {

        $data = array('act_status' => 1);

        $this -> db -> where('md5(email)', $key);

        return $this -> db -> update('user_tbl', $data);

    }

    function sendContact($email, $nama, $hp, $subject, $message)

    {

        $from_email = 'info@besha-analitika.co.id'; // ini nanti diganti 

        $subject = 'You Got Message From User Spareparts';

        $message = 'Hai Besha Analitika,<br /><br />You Got Message From User Spareparts.<br /><br /> Nama : '.$nama.
        ' <br /><br /> Email : '.$email.
        '<br /><br />

        Nomor Telepon / HP: '.$hp.' < br > < br > Subject: '.$subject.' < br > < br > '.$message.' < br / > < br / > Thank you < br / > ';

        //configure email settings
        $config['protocol'] = 'smtp';
        $config['mailtype'] = 'html';
        $config['priority'] = '1';
        $config['charset'] = 'iso-8859-1';
        $config['newline'] = "\r\n"; //use double quotes*/
        $config['wordwrap'] = TRUE;
        $config['smtp_host'] = 'ssl://besha-analitika.co.id';
        $config['smtp_port'] = 465;
        $config['smtp_user'] = 'info@besha-analitika.co.id';
        $config['smtp_pass'] = 'info-n23';

        $this -> email -> initialize($config);

        //send mail

        $this -> email -> from($from_email, 'User From Spareparts Website');

        $this -> email -> to('indocart99@gmail.com');

        $this -> email -> subject($subject);

        $this -> email -> message($message);

        return $this -> email -> send();

    }

    function get_sparepart_detail($sparepart_id)

    {

        $str = "SELECT * FROM sparepart_tbl WHERE sparepart_id = '$sparepart_id' ";

        $q = $this -> db -> query($str);

        $f = $q -> row_array();

        return $f;

    }

}