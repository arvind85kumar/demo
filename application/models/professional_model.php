<?php

ini_set("error_reporting", 0);

class Professional_model extends CI_Model {

    public function get_promotions() {
        $query = $this->db->query("SELECT * FROM `promotional_offers` order by added_on desc limit 0,1");
        $row = $query->row();
        return $row;
    }

    function record_count() {
        $this->db->select('*');
        $this->db->from('division');
        $query = $this->db->get();
        return count($query->result_array());
    }
//List Professional Category
   public function list_professional() {
        $this->db->select('*');
        $this->db->from('industry');
        $query = $this->db->get();
        return $query->result_object();
    }

    function get_division() {

        $query = $this->db->query("SELECT store_name,storeid FROM division");

        return $query->result_array();
    }
    public function professioanl_find() {

        $query = $this->db->query("SELECT *FROM users");

        return $query->result_array();
    }

    public function professioanl_profile($userid) {

        $query = $this->db->query("SELECT *FROM users WHERE userid='".$userid."'");

        return $query->result_object();
    }

    public function get_department() {

        $query = $this->db->query("SELECT department FROM product ");

        return $query->result_array();
    }

    function get_category() {

        $query = $this->db->query("SELECT category FROM product ");

        return $query->result_array();
    }

    /*     * ******************* user controller functions start here *************** */

    function get_user($limit) {
        //$query=$this->db->query("SELECT  *FROM user INNER JOIN division ON user.storeid=division.storeid WHERE ");
        /* $this->db->select('user.first_name,user.last_name,user.emailid,user.phone,user.fax,user.userid,user.storeid,user.isactive,
          division.store_name,division.division_type,division.divisionid');
          $this->db->from('user,division,user_division');
          $this->db->where('(user.userid=user_division.userid)');
          $this->db->where('(user.storeid=division.storeid)');
          $this->db->WHERE ('(user.storeid !=123456)');
          $this->db->group_by('user_division.userid');
          //$this->db->limit($limit);

          $query = $this->db->get();
          echo  $this->db->last_query(); */
        $query = $this->db->query("SELECT *FROM user INNER join division ON user.storeid=division.storeid $limit");

        return $query->result_array();
    }

    function user_profile() {
        $this->db->select('user.first_name,user.last_name,user.email,user.phone,user.notify,user.fax,division.*');
        $this->db->from('user,division');
        $this->db->where('(user.userid=division.userid)');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function user_detail($userid) {
        //$query=$this->db->query("SELECT * FROM user INNER JOIN division ON  user.storeid=division.storeid WHERE user.userid='".$userid."'");
        $this->db->select('user.first_name,user.last_name,user.emailid,user.phone,user.fax,user.userid,user.storeid,user.isactive,user.notify,user.updated_on,division.store_name,division.division_type,user.ismanage_product,division.divisionid,user.password,division.regionid');
        $this->db->from('user,division,user_division');
        $this->db->where('(user.userid=user_division.userid)');
        $this->db->where('(user.storeid=division.storeid)');
        $this->db->where('(division.divisionid=user_division.divisionid)');
        $this->db->where('user.userid', $userid);
        //$this->db->where('user_division.isdefault', 1);		
        $query = $this->db->get();
        //echo $str = $this->db->last_query();
        return $query->result_array();
    }

    public function get_division_id($division_list2, $userid) {
        //padam koli done

        /* $this->db->select('divisionid');
          $this->db->from('user_division');
          $this->db->where('userid',$userid);
          $query1 = $this->db->get();
          $result1 = $query1->result_array();
          $div_res1 = "";
          foreach($result1 as $res){
          $div_res1 .= $res['divisionid'].",";
          }
          $divid = "";
          foreach($division_list2 as $divisionids){
          $divid .= $divisionids.",";
          }
          $divisionid = trim($divid,",");
          $division_name = str_replace(',',"','",$divisionid);

          $query2 = $this->db->query("Select divisionid from division where division_type = 'S' and store_name in('".$division_name."')");
          $division_id = "";
          $result2 = $query2->result_array();
          $div_res2 = "";
          foreach($result2 as $res1){
          $div_res2 .= $res1['divisionid'].",";
          }
          $division1 = trim($div_res1,",");
          $division1 = explode(",",$division1);
          $division2 = trim($div_res2,",");
          $division2 = explode(",",$division2);
          $new_div_id = array_diff($division2,$division1);


          foreach($new_div_id as $division_id){
          $data = array(
          'userid' => $userid,
          'divisionid' => $division_id,
          'isdefault'=>0
          );
          $this->db->insert('user_division',$data);
         */

        $query2 = $this->db->query("Select store_name,divisionid from division");
        $result2 = $query2->result_array();

        $alldivision = array();
        foreach ($result2 as $res1) {
            $alldivision[$res1['store_name']] = $res1['divisionid'];
        }


        $this->db->query("delete from user_division where userid = " . $userid);

        foreach ($division_list2 as $division_list2) {


            $data = array(
                'userid' => $userid,
                'divisionid' => $alldivision[$division_list2],
                'isdefault' => 0
            );

            $this->db->insert('user_division', $data);
        }
        /* 	$this->db->select('role.name,role.roleid');
          $this->db->from('role');
          $this->db->join('division_role','division_role.roleid=role.roleid');
          $this->db->where('divisionid',$division_id);
          $query2 = $this->db->get();
          foreach($query2->result_array() as $row1){
          $roleid = $row1['roleid'];
          $data1 = array(
          'userid' => $userid,
          'user_divisionid' => $division_id,
          'roleid' => $roleid,
          );
          $this->db->insert('user_division_role',$data1);
          }

         */
    }

    public function record_assign_division($userid) {
        $query = $this->db->query('select division.divisionid,division.store_name,user_division.userdivisionid,user_division.userid,user_division.divisionid,user_division.isdefault  from division inner join user_division on(division.divisionid=user_division.divisionid) where user_division.userid=' . $userid);
        //echo $str = $this->db->last_query();
        return $query->result_array();
    }

    public function assign_division_id($userid) {
        $this->db->select('user_division.divisionid,division_role.roleid,division.division,role.name');
        $this->db->from('user_division,division');
        $this->db->join('division_role', 'user_division.divisionid=division_role.divisionid', 'left');
        $this->db->join('role', 'division_role.roleid=role.roleid', 'left');
        $this->db->where('division.userid', $userid);
        $this->db->group_by('division_role.divisionid');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function user_region() {
        $this->db->select('division.*');
        $this->db->from('division');
        $this->db->where('division_type', 'M');
        $query = $this->db->get();
        //echo $str = $this->db->last_query();
        return $query->result_array();
    }

    public function user_region_selected($userid) {

        $this->db->select('user.userid, division.regionid');
        $this->db->from('user,division');
        $this->db->where('(user.storeid=division.storeid)');
        $this->db->where('user.userid', $userid);
        $query = $this->db->get();
        return $query->result_array();
    }

    function delete_division($id) {
        $this->db->where('divisionid', $id);
        $this->db->delete('division');
    }

}
