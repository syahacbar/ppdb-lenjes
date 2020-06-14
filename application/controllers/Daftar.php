<?php

class Daftar extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Pendaftar_model');
        $this->load->model('Daftar_model');
    } 

    /*
     * Listing of pendaftars
     */
    function index()
    {
        redirect('daftar/ceknisn');
    } 
    function ceknisn()
    {
        $nisn =  $this->input->post('nisn');
        $data['casis'] = $this->Daftar_model->get_casis($nisn);
        $data['pendaftar'] = $this->Daftar_model->get_pendaftar($nisn);
        if($_POST) {
            if($nisn=='' || !isset($nisn))
            {
                $data['error'] = TRUE;
                $data['msg'] = "<strong>Anda Harus Memasukkan NISN</strong> untuk melanjutkan proses pendaftaran ini";
            }
            else if(isset($data['pendaftar']['nisn'])) 
            {
                $data['error'] = TRUE;
                $data['msg'] = "<strong>NISN Anda Sudah Digunakan Untuk Mendaftar Sebagai Calon Siswa Baru!</strong><br />Jika anda tidak merasa mendaftarkannya, Silahkan hubungi admin <a target='BLANK' href='https://api.whatsapp.com/send?phone=6281328220562&text=Halo%20Admin%20PPDB%20Kab.%20Sorong ...'>DISINI</a>";
            }
            else if(isset($data['casis']['nisn']))
            {
                $this->session->set_userdata('nisn', $nisn);
                redirect('daftar/isidata');
            } 
            
            else 
            {
                $data['error'] = TRUE;
                $data['msg'] = "<strong>NISN Anda Tidak Ditemukan di Database Kami!</strong><br /> Silahkan hubungi admin <a target='BLANK' href='https://api.whatsapp.com/send?phone=6281328220562&text=Halo%20Admin%20PPDB%20Kab.%20Sorong ...'>DISINI</a> Untuk Memverifikasi NISN Anda.";
            }
        }
        $this->load->view('daftar/ceknisn',$data);
    }
    function isidata()
    {
        //Periksa NISN di database
        $nisn =  $this->session->userdata('nisn');
        $data['casis'] = $this->Daftar_model->get_casis($nisn);
        if(isset($data['casis']['nisn']))
        {
            $this->load->library('form_validation');
            $this->form_validation->set_rules('nisn','NISN','required');
            $this->form_validation->set_rules('desa','Alamat Kab/Kota/Distrik/Desa','required');
            $this->form_validation->set_rules('namaayah','Nama Ayah','required');
            $this->form_validation->set_rules('alamatlengkap','Alamat Lengkap','required');
            $this->form_validation->set_rules('agama','Agama','required');
            $this->form_validation->set_rules('jenkel','Jenis Kelamin','required');
            $this->form_validation->set_rules('tgllahir','Tgllahir','required');
            $this->form_validation->set_rules('tempatlahir','Tempatlahir','required');
            $this->form_validation->set_rules('namapendaftar','Namapendaftar','required');
            $this->form_validation->set_rules('nik','NIK','required|max_length[16]|numeric');
            $this->form_validation->set_rules('asalsekolah','Asalsekolah','required');
            $this->form_validation->set_rules('pekerjaanibu','Pekerjaanibu','required');
            $this->form_validation->set_rules('pekerjaanayah','Pekerjaanayah','required');
            $this->form_validation->set_rules('namaibu','Namaibu','required');
		
			if($this->form_validation->run())     
            {   
                $params = array(					
                    'namaayah' => $this->input->post('namaayah'),
                    'namaibu' => $this->input->post('namaibu'),
                    'pekerjaanayah' => $this->input->post('pekerjaanayah'),
                    'pekerjaanibu' => $this->input->post('pekerjaanibu'),
                    'nomorhp' => $this->input->post('nomorhp'),
                    'asalsekolah' => $this->input->post('asalsekolah'),
                    'sekolahtujuan' => $this->input->post('sekolahtujuan'),
                    'tgldaftar' => $this->input->post('tgldaftar'),
                    'filefoto' => $this->input->post('filefoto'),
                    'nisn' => $this->input->post('nisn'),
                    'nik' => $this->input->post('nik'),
                    'namapendaftar' => $this->input->post('namapendaftar'),
                    'tempatlahir' => $this->input->post('tempatlahir'),
                    'tgllahir' => $this->input->post('tgllahir'),
                    'jenkel' => $this->input->post('jenkel'),
                    'agama' => $this->input->post('agama'),
                    'alamatlengkap' => $this->input->post('alamatlengkap'),
                    'kodealamat' => $this->input->post('desa'),
                );

                $this->Daftar_model->save_casis_temp($params);            
                redirect('daftar/konfirmasidata');
            }
            else
            {
                $data['sql_kabupaten'] = $this->db->query('SELECT * FROM wilayah_2020 WHERE CHAR_LENGTH(kode)=5 AND LEFT(kode,2)=92 ORDER BY nama ASC')->result_array();
                $data['sql_pekerjaan'] = $this->db->query('SELECT * FROM tbl_pekerjaan ORDER BY pekerjaan ASC')->result_array();
                $data['sql_sekolahtujuan'] = $this->db->query('SELECT * FROM tbl_sekolahtujuan ORDER BY nama_smp ASC')->result_array();
                $data['sql_asalsekolah'] = $this->db->query('SELECT * FROM tbl_sekolahdasar ORDER BY namasekolah ASC')->result_array();
                $this->load->view('daftar/isidata',$data);
            }
        }
        else
            show_error('The pendaftar you are trying to edit does not exist.');
    
        
    }

    function konfirmasidata()
    {
        $nisn =  $this->session->userdata('nisn');
        
        if(isset($_POST['btnKonfirmasi'])){
            $data['pendaftar'] = $this->Daftar_model->get_pendaftar_temp($nisn);
            $params = array(					
                'namaayah' => $data['pendaftar']['namaayah'],
                'namaibu' => $data['pendaftar']['namaibu'],
                'pekerjaanayah' => $data['pendaftar']['pekerjaanayah'],
                'pekerjaanibu' => $data['pendaftar']['pekerjaanibu'],
                'nomorhp' => $data['pendaftar']['nomorhp'],
                'asalsekolah' => $data['pendaftar']['asalsekolah'],
                'sekolahtujuan' => $data['pendaftar']['sekolahtujuan'],
                'tgldaftar' => $data['pendaftar']['tgldaftar'],
                'filefoto' => $data['pendaftar']['filefoto'],
                'nisn' => $data['pendaftar']['nisn'],
                'nik' => $data['pendaftar']['nik'],
                'namapendaftar' => $data['pendaftar']['namapendaftar'],
                'tempatlahir' => $data['pendaftar']['tempatlahir'],
                'tgllahir' => $data['pendaftar']['tgllahir'],
                'jenkel' => $data['pendaftar']['jenkel'],
                'agama' => $data['pendaftar']['agama'],
                'alamatlengkap' => $data['pendaftar']['alamatlengkap'],
                'kodealamat' => $data['pendaftar']['kodealamat'],
            );

            $this->Daftar_model->save_pendaftar($params);       
            redirect('daftar/ceknisn');
        }
        $data['pendaftar'] = $this->Daftar_model->get_pendaftar_temp($nisn);
        $data['kabupaten'] = $this->db->query('SELECT nama FROM wilayah_2020 WHERE kode=LEFT("'.$data['pendaftar']['kodealamat'].'",5)')->row_array();
        $data['distrik'] = $this->db->query('SELECT nama FROM wilayah_2020 WHERE kode=LEFT("'.$data['pendaftar']['kodealamat'].'",8)')->row_array();
        $data['desa'] = $this->db->query('SELECT nama FROM wilayah_2020 WHERE kode=LEFT("'.$data['pendaftar']['kodealamat'].'",13)')->row_array();
        $this->load->view('daftar/konfirmasidata',$data);
    }

/*
    function getKabupaten()
    {
        $id_provinsi = "91";
        $getKabupaten = $this->db->query('SELECT * FROM wilayah_kabupaten WHERE provinsi_id = '.$id_provinsi.' ORDER BY nama ASC')->result_array();
        echo '<option selected="">Pilih Kabupaten/Kota</option>';
        foreach ($getKabupaten as $kab) {
            echo '<option value="'.$kab['id'].'">'.$kab['nama'].'</option>';
        }
    }
*/
    function getDistrik()
    {
        $id_kabupaten = $this->input->post('id_kabupaten');
        $getDistrik = $this->db->query('SELECT * FROM wilayah_2020 WHERE CHAR_LENGTH(kode)=8 AND LEFT(kode,5)="'.$id_kabupaten.'" ORDER BY nama ASC')->result_array();
        echo '<option selected="">Pilih Kecamatan/Distrik</option>';
        foreach ($getDistrik as $dis) {
            echo '<option value="'.$dis['kode'].'">'.$dis['nama'].'</option>';
        }
    }

    function getDesa()
    {
        $id_distrik = $this->input->post('id_distrik');
        $getDesa = $this->db->query('SELECT * FROM wilayah_2020 WHERE CHAR_LENGTH(kode)=13 AND LEFT(kode,8) = "'.$id_distrik.'" ORDER BY nama ASC')->result_array();
        echo '<option selected="">Pilih Kelurahan/Desa</option>';
        foreach ($getDesa as $des) {
            echo '<option value="'.$des['kode'].'">'.$des['nama'].'</option>';
        }
    }
        
}