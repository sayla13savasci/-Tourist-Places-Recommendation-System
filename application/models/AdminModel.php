<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class AdminModel extends CI_Model 
{
    public function __construct() 
    {
        parent::__construct();
        date_default_timezone_set('Asia/Dhaka');
    }

    // check admin login
    public function checkAdminLogin($email, $password) {
        $query = $this->db->query("SELECT * FROM admins WHERE email='$email' AND password='$password'")->row();

        if($query && $query->id)
            return $query;
        return false;
    }

    public function getAdminById($id){
        $query = $this->db->query("SELECT * FROM admins WHERE id='$id'")->row();
        return $query;
    }

    //==================================================== Tourist =====================================================//
    public function createTourist($image) {
        $this->load->helper('security');

        $fname = $this->input->post('fname');
        $lname = $this->input->post('lname');
        $nationality = $this->input->post('nationality');
        $birthday = $this->input->post('birthday');
        $birth_place = $this->input->post('birth_place');
        $passport_no = $this->input->post('passport_no');
        $visa_no = $this->input->post('visa_no');
        $passport_expire = $this->input->post('passport_expire');
        $visa_expire = $this->input->post('visa_expire');
        $purpose = $this->input->post('purpose');

        $sql = "INSERT INTO tourists (fname, lname, nationality, birthday, birth_place, passport_no, visa_no, passport_expire, visa_expire, purpose, image) VALUES ('$fname', '$lname', '$nationality', '$birthday', '$birth_place', '$passport_no', '$visa_no', '$passport_expire', '$visa_expire', '$purpose', '$image')";
        // insert into database
        $query = $this->db->query($sql);

        return TRUE;
    }

    public function getTourists(){
        $result = $this->db->query("SELECT * FROM tourists ORDER BY id DESC")->result();
        return $result;
    }

    public function getTourist($id){
        $result = $this->db->query("SELECT * FROM tourists WHERE id='$id'")->row();
        return $result;
    }

    public function updateTourist($id, $image) {
        $this->load->helper('security');

        $fname = $this->input->post('fname');
        $lname = $this->input->post('lname');
        $nationality = $this->input->post('nationality');
        $birthday = $this->input->post('birthday');
        $birth_place = $this->input->post('birth_place');
        $passport_no = $this->input->post('passport_no');
        $visa_no = $this->input->post('visa_no');
        $passport_expire = $this->input->post('passport_expire');
        $visa_expire = $this->input->post('visa_expire');
        $purpose = $this->input->post('purpose');

        $sql = "UPDATE tourists SET fname= '$fname', lname = '$lname', nationality = '$nationality', birthday = '$birthday', birth_place = '$birth_place', passport_no = '$passport_no', visa_no = '$visa_no', passport_expire = '$passport_expire', visa_expire = '$visa_expire', purpose = '$purpose', image = '$image' WHERE id='$id'";
        // insert into database
        $query = $this->db->query($sql);

        return TRUE;
    }

    public function deleteTourist($id){
        $this->db->query("DELETE FROM tourists WHERE id='$id'");
        return TRUE;
    }
    //========================================================= end Tourist ============================================//

    //================================================= Tourist Spot ===========================================//
    public function createTouristSpot($image) {
        $this->load->helper('security');

        $name = $this->db->escape_str($this->input->post('name'));
        $type = $this->db->escape_str($this->input->post('type'));
        $location = $this->db->escape_str($this->input->post('location'));
        $division = $this->db->escape_str($this->input->post('division'));
        $district = $this->db->escape_str($this->input->post('district'));
        $area = $this->db->escape_str($this->input->post('area'));
        $description = $this->db->escape_str($this->input->post('description'));

        $sql = "INSERT INTO tourist_spots (name, type, location, division, district, area, description, image) VALUES ('{$name}', '{$type}', '{$location}', '{$division}', '{$district}', '{$area}', '{$description}', '{$image}')";
        // insert into database
        $query = $this->db->query($sql);

        return TRUE;
    }

    public function getTouristSpots(){
        $result = $this->db->query("SELECT * FROM tourist_spots ORDER BY id DESC")->result();
        return $result;
    }

    public function getTouristSpot($id){
        $result = $this->db->query("SELECT * FROM tourist_spots WHERE id='$id'")->row();
        return $result;
    }

    public function updateTouristSpot($id, $image) {
        $this->load->helper('security');

        $name = $this->db->escape_str($this->input->post('name'));
        $type = $this->db->escape_str($this->input->post('type'));
        $location = $this->db->escape_str($this->input->post('location'));
        $division = $this->db->escape_str($this->input->post('division'));
        $district = $this->db->escape_str($this->input->post('district'));
        $area = $this->db->escape_str($this->input->post('area'));
        $description = $this->db->escape_str($this->input->post('description'));

        $sql = "UPDATE tourist_spots SET name= '{$name}', type = '{$type}', location = '{$location}', division = '{$division}', district = '{$district}', area = '{$area}', description = '{$description}', image = '$image' WHERE id='$id'";
        // insert into database
        $query = $this->db->query($sql);

        return TRUE;
    }

    public function deleteTouristSpot($id){
        $this->db->query("DELETE FROM tourist_spots WHERE id='$id'");
        return TRUE;
    }
    //=============================================== end Tousidt Spot =========================================//

    //================================================= Tourist Hotel ===========================================//
    public function createTouristHotel($image) {
        $this->load->helper('security');

        $name = $this->db->escape_str($this->input->post('name'));
        $type = $this->db->escape_str($this->input->post('type'));
        $location = $this->db->escape_str($this->input->post('location'));
        $division = $this->db->escape_str($this->input->post('division'));
        $district = $this->db->escape_str($this->input->post('district'));
        $area = $this->db->escape_str($this->input->post('area'));
        $description = $this->db->escape_str($this->input->post('description'));

        $sql = "INSERT INTO tourist_hotels (name, type, location, division, district, area, description, image) VALUES ('{$name}', '{$type}', '{$location}', '{$division}', '{$district}', '{$area}', '{$description}', '{$image}')";
        // insert into database
        $query = $this->db->query($sql);

        return TRUE;
    }

    public function getTouristHotels(){
        $result = $this->db->query("SELECT * FROM tourist_hotels ORDER BY id DESC")->result();
        return $result;
    }

    public function getTouristHotel($id){
        $result = $this->db->query("SELECT * FROM tourist_hotels WHERE id='$id'")->row();
        return $result;
    }

    public function updateTouristHotel($id, $image) {
        $this->load->helper('security');

        $name = $this->db->escape_str($this->input->post('name'));
        $type = $this->db->escape_str($this->input->post('type'));
        $location = $this->db->escape_str($this->input->post('location'));
        $division = $this->db->escape_str($this->input->post('division'));
        $district = $this->db->escape_str($this->input->post('district'));
        $area = $this->db->escape_str($this->input->post('area'));
        $description = $this->db->escape_str($this->input->post('description'));

        $sql = "UPDATE tourist_hotels SET name= '{$name}', type = '{$type}', location = '{$location}', division = '{$division}', district = '{$district}', area = '{$area}', description = '{$description}', image = '$image' WHERE id='$id'";
        // insert into database
        $query = $this->db->query($sql);

        return TRUE;
    }

    public function deleteTouristHotel($id){
        $this->db->query("DELETE FROM tourist_hotels WHERE id='$id'");
        return TRUE;
    }

    public function getTouristHotelRooms($id)
    {
        $query = $this->db->select('*')
                ->where('hotel_id = ', $id)
                ->get('tourist_hotel_rooms')
                ->result();

        return $query;
    }

    public function insertHotelRoom(Array $data)
    {
        $this->db->insert('tourist_hotel_rooms', $data);
    }

    public function getTouristHotelRoom($id)
    {
        $query = $this->db->select('*')
                ->where('id = ', $id)
                ->get('tourist_hotel_rooms')
                ->row();

        return $query;
    }

    public function updateHotelRoom($id, Array $data)
    {
        $this->db->where('id = ', $id)
                ->update('tourist_hotel_rooms', $data);
    }

    public function deleteHotelRoom($id)
    {
        $this->db->where('id = ', $id)->delete('tourist_hotel_rooms');
    }

    public function getTouristHotelBookingHistory()
    {
        $query = $this->db->select('*, tourist_hotels.name as hotel_name, tourist_hotels.image as hotel_image, tourists.fname as tourist_name')
                    ->join('tourist_hotels', 'tourist_hotels.id = tourist_hotel_books.tourist_hotel_id')
                    ->join('tourists', 'tourists.id = tourist_hotel_books.tourist_id')
                    ->get('tourist_hotel_books')
                    ->result();

        return $query;
    }
    //=============================================== end Tousidt Hotel =========================================//
}