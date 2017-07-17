<?php
class Login extends CI_Model {

        public function __construct()
        {
                parent::__construct();
                // Your own constructor code
        }
        public function authUser($user, $pass)
        {
                $this->load->model('blog');

                $data['query'] = $this->blog->get_last_ten_entries();

                $this->load->view('blog', $data);
        }        

}