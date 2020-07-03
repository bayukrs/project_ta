<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class MY_Controller extends CI_Controller{     
		public function __construct(){     
			parent::__construct(); 
 
        	$this->authenticated(); // Panggil fungsi authenticated   
    	} 

    	public function authenticated(){ 
    	// Fungsi ini berguna untuk mengecek apakah user sudah login atau belum         
    	// Pertama kita cek dulu apakah controller saat ini yang sedang diakses user adalah controller Auth apa bukan         
    	// Karena fungsi cek login hanya kita berlakukan untuk controller selain controller Auth         
    		if($this->uri->segment(1) != 'login' && $this->uri->segment(1) != ''){             
    			// Cek apakah terdapat session dengan nama authenticated             
    			if( ! $this->session->userdata('authenticated')) 
    			// Jika tidak ada / artinya belum login                 
    			redirect('login'); // Redirect ke halaman login         
			}     
		}

		public function render_login($content, $data = NULL){         
			/*         
			* $data['contentnya']         
			* variabel diatas ^ nantinya akan dikirim ke file views/template/login/index.php         
			* */         
			$data['contentnya'] = $this->load->view($content, $data, TRUE); 
 
        	$this->load->view('login/template/index', $data);     
        } 

        public function render_freelancer($content, $data = NULL){         
            /*         
            * $data['contentnya']         
            * variabel diatas ^ nantinya akan dikirim ke file views/template/login/index.php         
            * */         
            $data['contentnya'] = $this->load->view($content, $data, TRUE); 
            $data['head'] = $this->load->view('dashboard/template/head', $data, TRUE); 
            $data['sidebar'] = $this->load->view('dashboard/template/sidebar', $data, TRUE); 
            $data['navbar'] = $this->load->view('dashboard/template/navbar', $data, TRUE); 
            $data['footer'] = $this->load->view('dashboard/template/footer', $data, TRUE); 
 
            $this->load->view('dashboard/template/index', $data);     
        } 

        public function render_admin($content, $data = NULL){         
            /*         
            * $data['contentnya']         
            * variabel diatas ^ nantinya akan dikirim ke file views/template/login/index.php         
            * */         
            $data['contentnya'] = $this->load->view($content, $data, TRUE); 
            $data['head'] = $this->load->view('admin/template/head', $data, TRUE); 
            $data['sidebar'] = $this->load->view('admin/template/sidebar', $data, TRUE); 
            $data['navbar'] = $this->load->view('admin/template/navbar', $data, TRUE); 
            $data['footer'] = $this->load->view('admin/template/footer', $data, TRUE); 
 
            $this->load->view('admin/template/index', $data);     
        } 

        public function render_shopping($content, $data = NULL){         
            /*         
            * $data['contentnya']         
            * variabel diatas ^ nantinya akan dikirim ke file views/template/login/index.php         
            * */         
            $data['contentnya'] = $this->load->view($content, $data, TRUE); 
 
            $this->load->view('member/themes/index', $data);     
        }
    }