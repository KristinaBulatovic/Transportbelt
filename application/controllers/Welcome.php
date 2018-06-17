<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *        http://example.com/index.php/welcome
     *    - or -
     *        http://example.com/index.php/welcome/index
     *    - or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index()
    {
        /*$this->load->database();
        $korisnici = [];
        foreach ($this->db->query('SELECT * FROM tina.TABELA')->result() as $row) {
            $korisnik['ime'] = $row->ime;

            $korisnik['prezime'] = $row->prezime;
            $korisnici[] = $korisnik;
        }*/

        $data['title'] = 'Transport Belt';
        #$data['korisnici'] = $korisnici;
        $this->load->view('template/header', $data);
        $this->load->view('template/container', $data);
        $this->load->view('welcome/index', $data);
        $this->load->view('template/footer', $data);
    }

    public function proizvod1()
    {
        $data['title'] = 'Transport Belt';
        $this->load->view('template/header', $data);
        $this->load->view('template/container', $data);
        $this->load->view('welcome/proizvod1', $data);
        $this->load->view('template/footer', $data);
    }


    public function proizvod2()
    {
        $data['title'] = 'Transport Belt';
        $this->load->view('template/header', $data);
        $this->load->view('template/container', $data);
        $this->load->view('welcome/proizvod2', $data);
        $this->load->view('template/footer', $data);
    }

    public function proizvod3()
    {
        $data['title'] = 'Transport Belt';
        $this->load->view('template/header', $data);
        $this->load->view('template/container', $data);
        $this->load->view('welcome/proizvod3', $data);
        $this->load->view('template/footer', $data);
    }

    public function proizvod4()
    {
        $data['title'] = 'Transport Belt';
        $this->load->view('template/header', $data);
        $this->load->view('template/container', $data);
        $this->load->view('welcome/proizvod4', $data);
        $this->load->view('template/footer', $data);
    }

    public function proizvod5()
    {
        $data['title'] = 'Transport Belt';
        $this->load->view('template/header', $data);
        $this->load->view('template/container', $data);
        $this->load->view('welcome/proizvod5', $data);
        $this->load->view('template/footer', $data);

    }
        public function proizvod6()
    {
        $data['title'] = 'Transport Belt';
        $this->load->view('template/header', $data);
        $this->load->view('template/container', $data);
        $this->load->view('welcome/proizvod6', $data);
        $this->load->view('template/footer', $data);
    }


}
