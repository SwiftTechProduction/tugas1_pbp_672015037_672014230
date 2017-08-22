<?php

class AnggotaController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Anggotadata');
        $this->load->helper('form', 'url');
        $this->load->library('pagination');
        //$config['base_url'] = base_url() . 'page?';   //url yang muncul ketika tombol pada paging diklik
//        $config[total_rows] = 200;
//        $config[per_page] = 5;
//        $this->pagination->initialize($config);
//        //echo $this->pagination->create_links();
    }

    public function index() {
        $page = $this->input->get('per_page');
        $batas = 5; //jlh data yang ditampilkan per halaman
        if (!$page):     //jika page bernilai kosong maka batas akhirna akan di set 0
            $offset = 0;
        else:
            $offset = $page; // jika tidak kosong maka nilai batas akhir nya akan diset nilai page terakhir
        endif;
        $config['page_query_string'] = TRUE; //mengaktifkan pengambilan method get pada url default
        $config['base_url'] = base_url() . 'AnggotaController?';   //url yang muncul ketika tombol pada paging diklik
        $config['total_rows'] = $this->Anggotadata->count_barang(); // jlh total barang
        $config['per_page'] = $batas; //batas sesuai dengan variabel batas
        $config['uri_segment'] = $page; //merupakan posisi pagination dalam url pada kesempatan ini saya menggunakan method get untuk menentukan posisi pada url yaitu per_page
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = '&laquo; First';
        $config['first_tag_open'] = '<li class="prev page">';
        $config['first_tag_close'] = '</li>';
        $config['last_link'] = 'Last &raquo;';
        $config['last_tag_open'] = '<li class="next page">';
        $config['last_tag_close'] = '</li>';
        $config['next_link'] = 'Next &rarr;';
        $config['next_tag_open'] = '<li class="next page">';
        $config['next_tag_close'] = '</li>';
        $config['prev_link'] = '&larr; Prev';
        $config['prev_tag_open'] = '<li class="prev page">';
        $config['prev_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="current"><a href="">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li class="page">';
        $config['num_tag_close'] = '</li>';
        $this->pagination->initialize($config);
        $data['paging'] = $this->pagination->create_links();
        $data['jlhpage'] = $page;
        $data['title'] = "CRUD CI";
        $data['Anggotadata'] = $this->Anggotadata->GetAllData($batas, $offset);
        $this->load->view('data_view', $data);
    }

    public function cari() {
        $keywordby = $_POST['keywordby'];
        $keyword = $_POST['keyword'];
        $page = $this->input->get('per_page');  //method get per_page

        $batas = 5; //jlh data yang ditampilkan per halaman
        if (!$page):     //jika page bernilai kosong maka batas akhirna akan di set 0
            $offset = 0;
        else:
            $offset = $page; // jika tidak kosong maka nilai batas akhir nya akan diset nilai page terakhir
        endif;

        $config['page_query_string'] = TRUE; //mengaktifkan pengambilan method get pada url default
        $config['base_url'] = base_url() . 'AnggotaController?';   //url yang muncul ketika tombol pada paging diklik
        $config['total_rows'] = $this->Anggotadata->count_barang_search($keyword); // jlh total barang
        $config['per_page'] = $batas; //batas sesuai dengan variabel batas

        $config['uri_segment'] = $page; //merupakan posisi pagination dalam url pada kesempatan ini saya menggunakan method get untuk menentukan posisi pada url yaitu per_page

        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = '&laquo; First';
        $config['first_tag_open'] = '<li class="prev page">';
        $config['first_tag_close'] = '</li>';

        $config['last_link'] = 'Last &raquo;';
        $config['last_tag_open'] = '<li class="next page">';
        $config['last_tag_close'] = '</li>';

        $config['next_link'] = 'Next &rarr;';
        $config['next_tag_open'] = '<li class="next page">';
        $config['next_tag_close'] = '</li>';

        $config['prev_link'] = '&larr; Prev';
        $config['prev_tag_open'] = '<li class="prev page">';
        $config['prev_tag_close'] = '</li>';

        $config['cur_tag_open'] = '<li class="current"><a href="">';
        $config['cur_tag_close'] = '</a></li>';

        $config['num_tag_open'] = '<li class="page">';
        $config['num_tag_close'] = '</li>';
        $this->pagination->initialize($config);
        $data['paging'] = $this->pagination->create_links();
        $data['jlhpage'] = $page;

        $data['title'] = 'CRUD CI'; //judul title
        $data['qbarang'] = $this->Anggotadata->get_allbarang($batas, $offset, $keywordby, $keyword); //query model semua barang

        $this->load->view('data_view', $data);
    }
function hitung() {
        $tanggallahir = $this->input->post('tanggallahir');
        $tgl = substr($tanggallahir, 0, 2);
        $bln = substr($tanggallahir, 3, 2);
        $thn = substr($tanggallahir, 6, 4);
        $tgl_lahir1 = $thn . '-' . $bln . '-' . $tgl;
        $selisih = date_diff(date_create(), date_create($tgl_lahir1));
        $umur = $selisih->format('%y tahun %m bulan %d hari');

        $this->session->set_flashdata('pesan', $umur);
        redirect('umur');
    }    
    function AnggotaSearch() {
        $keywordby = $_POST['keywordby'];
        $keyword = $_POST['keyword'];
        $data['title'] = "Data Anggota Pelayanan";
        $data['Anggotadata'] = $this->Anggotadata->search($keywordby, $keyword);

        $this->load->view('data_view_1', $data);
    }

    public function formTambah() {
        $data['title'] = "CRUD CI Insert";
        $this->load->view('formTambah', $data);
    }

    public function InsertData() {
        $data = array(
            "nama" => $this->input->post('nama'),
            "telp" => $this->input->post('telp'),
            "gender" => $this->input->post('gender'),
            "tempatlahir" => $this->input->post('tempatlahir'),
            "tanggallahir" => $this->input->post('tanggallahir'),
            "status" => $this->input->post('status'),
            "pekerjaan" => $this->input->post('pekerjaan'),
            "alamat" => $this->input->post('alamat'),
            "pelayanan" => $this->input->post('pelayanan'),
            "foto" => $this->input->post('foto')
        );
        $this->Anggotadata->insertData($data);
        $this->index();
    }

    function EditData($id) {
        $data['title'] = "CRUD CI Edit";
        $data['data_edit'] = $this->Anggotadata->get_data_by_id('tb_anggota', $id)->row();
        $this->load->view('edit_data', $data);
    }

    function UpdateData() {
        $data = array(
            "nama" => $this->input->post('nama'),
            "telp" => $this->input->post('telp'),
            "gender" => $this->input->post('gender'),
            "tempatlahir" => $this->input->post('tempatlahir'),
            "tanggallahir" => $this->input->post('tanggallahir'),
            "status" => $this->input->post('status'),
            "pekerjaan" => $this->input->post('pekerjaan'),
            "alamat" => $this->input->post('alamat'),
            "pelayanan" => $this->input->post('pelayanan'),
            "foto" => $this->input->post('foto')
        );
        $this->Anggotadata->update('tb_anggota', $this->input->post('id'), $data);
        $this->index();
    }

    function HapusData($id) {
        $this->Anggotadata->del_by_id('tb_anggota', $id);
        $this->index();
    }

}

?>