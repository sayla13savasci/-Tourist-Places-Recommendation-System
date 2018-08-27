<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class TouristModel extends CI_Model 
{
    public function __construct() 
    {
        parent::__construct();
        date_default_timezone_set('Asia/Dhaka');
    }

    // check admin login
    public function checkTouristLogin($passport_no, $password) {
        $query = $this->db->query("SELECT * FROM tourists WHERE passport_no='$passport_no' AND password='$password'")->row();

        if($query && $query->id)
            return $query;
        return false;
    }

    public function getTouristById($id){
        $query = $this->db->query("SELECT * FROM tourists WHERE id='$id'")->row();
        return $query;
    }

    //==================================================== Tourist =====================================================//

    public function getTourist($id){
        $result = $this->db->query("SELECT * FROM tourists WHERE id='$id'")->row();
        return $result;
    }

    public function createTourist($image) 
    {
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
        $password = $this->input->post('password');

        $sql = "INSERT INTO tourists (fname, lname, nationality, birthday, birth_place, passport_no, visa_no, passport_expire, visa_expire, purpose, password, image) VALUES ('$fname', '$lname', '$nationality', '$birthday', '$birth_place', '$passport_no', '$visa_no', '$passport_expire', '$visa_expire', '$purpose', '$password', '$image')";
        // insert into database
        $query = $this->db->query($sql);

        return TRUE;
    }

    public function updateTourist($id, $image) 
    {
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
        $password = '12345';
        if($this->input->post('password')){
            $password = $this->input->post('password');
        }

        $sql = "UPDATE tourists SET fname= '$fname', lname = '$lname', nationality = '$nationality', birthday = '$birthday', birth_place = '$birth_place', passport_no = '$passport_no', visa_no = '$visa_no', passport_expire = '$passport_expire', visa_expire = '$visa_expire', purpose = '$purpose', password = '$password', image = '$image' WHERE id='$id'";
        // insert into database
        $query = $this->db->query($sql);

        return TRUE;
    }
    //========================================================= end Tourist ============================================//

    //================================================= Tourist Spot ===========================================//
    public function getTouristSpots(){
        $result = $this->db->query("SELECT * FROM tourist_spots ORDER BY id DESC")->result();
        return $result;
    }

    public function getTouristSpotsBy($division){
        $result = $this->db->query("SELECT * FROM tourist_spots WHERE division='$division' ORDER BY id DESC")->result();
        return $result;
    }

    public function getTouristSpot($id){
        $result = $this->db->query("SELECT * FROM tourist_spots WHERE id='$id'")->row();
        return $result;
    }

    public function getDivisionSpots(){
        $result = $this->db->query("SELECT division, COUNT(id) AS total_spot FROM tourist_spots GROUP BY(division)")->result();
        return $result;
    }
    //=============================================== end Tourist Spot =========================================//

    //================================================= Tourist Hotel ===========================================//
    public function getTouristHotels(){
        $result = $this->db->query("SELECT * FROM tourist_hotels ORDER BY id DESC")->result();
        return $result;
    }

    public function getTouristHotelsBy($division){
        $result = $this->db->query("SELECT * FROM tourist_hotels WHERE division='$division' ORDER BY id DESC")->result();
        return $result;
    }

    public function getTouristHotel($id){
        $result = $this->db->query("SELECT * FROM tourist_hotels WHERE id='$id'")->row();
        return $result;
    }

    public function getDivisionHotels(){
        $result = $this->db->query("SELECT division, COUNT(id) AS total_hotel FROM tourist_hotels GROUP BY(division)")->result();
        return $result;
    }

    public function getTouristHotelRooms($hotel_id)
    {
        $query = $this->db->select('*')
                ->where('hotel_id = ', $hotel_id)
                ->where('availability = ', 1)
                ->get('tourist_hotel_rooms')
                ->result();

        return $query;
    }

    public function checkTouristBookHotelRoom($tourist_id, $tourist_hotel_id, $tourist_hotel_room_id)
    {
        $query = $this->db->select('*')
                    ->where('tourist_id', $tourist_id)
                    ->where('tourist_hotel_id', $tourist_hotel_id)
                    ->where('tourist_hotel_room_id', $tourist_hotel_room_id)
                    ->get('tourist_hotel_books')
                    ->row();

        return $query;
    }

    public function touristBookHotelRoom($data)
    {
        $this->db->insert('tourist_hotel_books', $data);
        $this->db->set('availability', 0)
                ->where('id = ', $data['tourist_hotel_room_id'])
                ->update('tourist_hotel_rooms');
    }

    public function getTouristHotelBookHistory($tourist_id)
    {
        $query = $this->db->select('*, tourist_hotels.name as hotel_name, tourist_hotels.image as hotel_image')
                    ->join('tourist_hotels', 'tourist_hotels.id = tourist_hotel_books.tourist_hotel_id')
                    ->where('tourist_id', $tourist_id)
                    ->get('tourist_hotel_books')
                    ->result();

        return $query;
    }

    public function cancelTouristHotelRoomBook($tourist_hotel_id, $tourist_hotel_room_id)
    {
        $this->db->where('tourist_hotel_id = ', $tourist_hotel_id)
                ->where('tourist_hotel_room_id = ', $tourist_hotel_room_id)
                ->delete('tourist_hotel_books');

        $this->db->set('availability', 1)
                ->where('id = ', $tourist_hotel_room_id)
                ->update('tourist_hotel_rooms');
    }
    
    //=============================================== end Tourist Hotel =========================================//
}
