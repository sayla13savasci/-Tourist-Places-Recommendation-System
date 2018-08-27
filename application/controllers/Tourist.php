<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Tourist extends CI_Controller 
{
	public $site_name = "Tourist";
    public $tourist = NULL;

    public function __construct()
    {
        parent::__construct();
        $this->load->model('TouristModel', 'touristModel');

        date_default_timezone_set('Asia/Dhaka');
    }

    //============================ Tourist ==============================//
    public function getSignup($error = NULL)
    {
        if($this->session->userdata('tourist_logged_in')){
            redirect('/');
        }
        $data['title'] = $this->site_name.' | Signup';
        $data['error'] = $error;
        $this->load->view('tourist/signup',$data);
    }
    public function createTourist(){
        // image upload if exists
        $filename = $_FILES['image']['name'];
        if(strlen($filename) > 4){
            $image_name = $this->_imageUpload();
        }else{
            $image_name = NULL;
        }

        $this->touristModel->createTourist($image_name);
        redirect('tourist/login');
    }

    private function _imageUpload(){

        $config['upload_path']          = './assets/img/';
        $config['allowed_types']        = '*';
          
        $filename = $_FILES['image']['name'];
		$extension = pathinfo($filename, PATHINFO_EXTENSION);

        $new_name = time().'.'.$extension;
		$config['file_name'] = $new_name;

        $this->load->library('upload', $config);
        
        if(!$this->upload->do_upload('image')) {
            $error = array('error' => $this->upload->display_errors());
            return NULL;
        } else {
        	return $new_name;
        }
    }

    public function editTourist(){
    	if(!$this->session->userdata('tourist_logged_in')){
            redirect('tourist/login');
        }
        $tourist_id = $this->session->userdata('tourist_logged_in')['id'];
        $this->tourist = $this->touristModel->getTouristById($tourist_id);

        $data['title'] = $this->site_name.' | Tourist';
        $data['active'] = 'tourist';
        $data['tourist'] = $this->tourist;
        $data['tourist'] = $this->touristModel->getTourist($tourist_id);
        $this->load->view('tourist/partials/head', $data);
        $this->load->view('tourist/partials/navbar', $data);
        $this->load->view('tourist/edit_tourist', $data);
        $this->load->view('tourist/partials/bottom', $data);
    }

    public function updateTourist(){
    	if(!$this->session->userdata('tourist_logged_in')){
            redirect('tourist/login');
        }
        $filename = $_FILES['image']['name'];
        $tourist = $this->touristModel->getTourist($this->input->post('id'));
        if(strlen($filename) > 4){
            if($tourist->image != $filename){
                unlink('./assets/img/'.$tourist->image);
                $image_name = $this->_imageUpload();
            }else
                $image_name = $tourist->image;
        }else
            $image_name = $tourist->image;
        $this->touristModel->updateTourist($this->input->post('id') ,$image_name);
        redirect('/');
    }

    //=========================== end Tourist ============================//
    
    //============================ Tourist Spot ===============================//
    public function touristSpot($error = NULL){
        if($this->session->userdata('tourist_logged_in')){
            $tourist_id = $this->session->userdata('tourist_logged_in')['id'];
            $this->tourist = $this->touristModel->getTouristById($tourist_id); 
        }

        $data['title'] = $this->site_name.' | Home';
        $data['active'] = 'home';
        $data['tourist'] = $this->tourist;
        $data['error'] = $error;
        $data['spots'] = $this->touristModel->getTouristSpots();
        $data['divisions'] = $this->touristModel->getDivisionSpots();
        $this->load->view('tourist/partials/head', $data);
        $this->load->view('tourist/partials/navbar', $data);
        $this->load->view('tourist/tourist_spot', $data);
        $this->load->view('tourist/partials/bottom', $data);
    }

    public function getTouristSpotBy($division = NULL){
        if($division == NULL){
            redirect('/');
        }

        $division = str_replace("_", " ", $division);

        if($this->session->userdata('tourist_logged_in')){
            $tourist_id = $this->session->userdata('tourist_logged_in')['id'];
            $this->tourist = $this->touristModel->getTouristById($tourist_id); 
        }

        $data['title'] = $this->site_name.' | Home';
        $data['active'] = 'home';
        $data['tourist'] = $this->tourist;
        $data['error'] = NULL;
        $data['spots'] = $this->touristModel->getTouristSpotsBy($division);
        $data['divisions'] = $this->touristModel->getDivisionSpots();
        $this->load->view('tourist/partials/head', $data);
        $this->load->view('tourist/partials/navbar', $data);
        $this->load->view('tourist/tourist_spot', $data);
        $this->load->view('tourist/partials/bottom', $data);
    }

    //========================== end Tourist Spot =============================//

    public function getlogin($error = NULL){
    	if($this->session->userdata('tourist_logged_in')){
            redirect('/');
        }
    	$data['title'] = $this->site_name.' | Login';
    	$data['error'] = $error;
		$this->load->view('tourist/login',$data);
    }

    public function postLogin(){
    	$passport_no = $this->input->post('passport_no');
		$password = $this->input->post('password');
        $result = $this->touristModel->checkTouristLogin($passport_no, $password);
		if($result) {
                $data = [
                    'id' => $result->id,
                    'name' => $result->fname." ".$result->lname,
                    'passport_no' => $result->passport_no
                ];
                $this->session->set_userdata('tourist_logged_in', $data);
            redirect('/');
		} else {
			$this->getlogin("Wrong passport no or password");
		}
    }

    public function logout(){
        $this->session->unset_userdata('tourist_logged_in');
        return redirect('/');
    }

    //========================== Tourist Hotel =============================//

    public function getTouristHotels($error = NULL)
    {
        if($this->session->userdata('tourist_logged_in')){
            $tourist_id = $this->session->userdata('tourist_logged_in')['id'];
            $this->tourist = $this->touristModel->getTouristById($tourist_id);
        }

        $data['title'] = $this->site_name.' | Hotel Booking';
        $data['active'] = 'hotel';
        $data['tourist'] = $this->tourist;
        $data['error'] = $error;
        $data['hotels'] = $this->touristModel->getTouristHotels();
        $data['divisions'] = $this->touristModel->getDivisionHotels();
        $this->load->view('tourist/partials/head', $data);
        $this->load->view('tourist/partials/navbar', $data);
        $this->load->view('tourist/hotel_book', $data);
        $this->load->view('tourist/partials/bottom', $data);
    }

    public function getTouristHotelBy($division = NULL){
        if($division == NULL){
            redirect('/');
        }

        $division = str_replace("_", " ", $division);

        if($this->session->userdata('tourist_logged_in')){
            $tourist_id = $this->session->userdata('tourist_logged_in')['id'];
            $this->tourist = $this->touristModel->getTouristById($tourist_id); 
        }

        $data['title'] = $this->site_name.' | Hotel Booking';
        $data['active'] = 'hotel';
        $data['tourist'] = $this->tourist;
        $data['error'] = NULL;
        $data['hotels'] = $this->touristModel->getTouristHotelsBy($division);
        $data['divisions'] = $this->touristModel->getDivisionHotels();
        $this->load->view('tourist/partials/head', $data);
        $this->load->view('tourist/partials/navbar', $data);
        $this->load->view('tourist/hotel_book', $data);
        $this->load->view('tourist/partials/bottom', $data);
    }

    public function touristBookHotel($tourist_hotel_id='')
    {
        if($this->session->userdata('tourist_logged_in'))
        {
            $tourist_id = $this->session->userdata('tourist_logged_in')['id'];
            $this->tourist = $this->touristModel->getTouristById($tourist_id);

            // return redirect('tourist/hotel/booking/history');

            $data['title'] = $this->site_name.' | Hotel Booking';
            $data['active'] = 'hotel';
            $data['tourist'] = $this->tourist;
            $data['error'] = NULL;
            $data['hotel_rooms'] = $this->touristModel->getTouristHotelRooms($tourist_hotel_id);
            $this->load->view('tourist/partials/head', $data);
            $this->load->view('tourist/partials/navbar', $data);
            $this->load->view('tourist/book_hotel', $data);
            $this->load->view('tourist/partials/bottom', $data);
        }
        else
        {
            return redirect('tourist/login');
        }

    }

    public function touristBookHotelRoom($tourist_hotel_room_id='')
    {
        $tourist_id = $this->session->userdata('tourist_logged_in')['id'];
        $tourist_hotel_id = $this->input->post('tourist_hotel_id');
        $check_tourist_hotel_book = $this->touristModel->checkTouristBookHotelRoom($tourist_id, $tourist_hotel_id, $tourist_hotel_room_id);

        if (empty($check_tourist_hotel_book)) 
        {
            $data =[
                'tourist_id'            => $tourist_id,
                'tourist_hotel_id'      => $tourist_hotel_id,
                'tourist_hotel_room_id' => $tourist_hotel_room_id,
                'room_no'               => $this->input->post('room_no'),
                'bed'                   => $this->input->post('bed'),
                'booking_days'          => $this->input->post('booking_days'),
                'rate'                  => $this->input->post('rate'),
                'total_price'           => $this->input->post('booking_days') * $this->input->post('rate'),
                'date'                  => date("Y-m-d").' '.date("h:s a")
            ];

            $this->touristModel->touristBookHotelRoom($data);
            $this->session->set_flashdata(['message' => 'You have booked the hotel successfully !', 'type' => 'success']);
        } 
        else 
        {
            $this->session->set_flashdata(['message' => 'You have already booked this hotel !', 'type' => 'danger']);
        }
        
        return redirect('tourist/hotel/booking/history');
    }

    public function getTouristHotelBookHistory($error = NULL)
    {
        if($this->session->userdata('tourist_logged_in'))
        {
            $tourist_id = $this->session->userdata('tourist_logged_in')['id'];
            $this->tourist = $this->touristModel->getTouristById($tourist_id);
        }

        $data['title'] = $this->site_name.' | Hotel Booking History';
        $data['active'] = 'tourist_booking_history';
        $data['tourist'] = $this->tourist;
        $data['error'] = $error;
        $data['histories'] = $this->touristModel->getTouristHotelBookHistory($tourist_id);
        $this->load->view('tourist/partials/head', $data);
        $this->load->view('tourist/partials/navbar', $data);
        $this->load->view('tourist/hotel_booking_history', $data);
        $this->load->view('tourist/partials/bottom', $data);
    }

    public function cancelTouristHotelRoomBook($tourist_hotel_id, $tourist_hotel_room_id)
    {
        $this->touristModel->cancelTouristHotelRoomBook($tourist_hotel_id, $tourist_hotel_room_id);

        $this->session->set_flashdata(['message' => 'Your booking has been canceled successfully !', 'type' => 'danger']);
        redirect('tourist/hotel');
    }

    //========================== end Tourist Hotel =============================//

}
