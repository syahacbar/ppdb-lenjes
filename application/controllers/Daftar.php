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
        redirect('daftar/step1');
    } 

    function step1()
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
                $data['msg'] = "<strong>NISN Anda Sudah Digunakan Untuk Mendaftar Sebagai Calon Siswa Baru!</strong><br />Jika anda tidak merasa mendaftarkannya, Silahkan hubungi admin <a target='BLANK' href='https://api.whatsapp.com/send?phone=6281328220562&text=Halo%20Admin%20PPDB%20Kab.%20Sorong ...'>DISINI</a>
                <br/>Atau <a target='BLANK' href=".base_url('daftar/cetakform/').$data['pendaftar']['nisn'].">CETAK</a> Formulir Pendaftaran Anda";
            }
            else if(isset($data['casis']['nisn']))
            {
                $this->session->set_userdata('nisn', $nisn);
                redirect('daftar/step2');
            } 
            
            else 
            {
                $data['error'] = TRUE;
                $data['msg'] = "<strong>NISN Anda Tidak Ditemukan di Database Kami!</strong><br /> Silahkan hubungi admin <a target='BLANK' href='https://api.whatsapp.com/send?phone=6281328220562&text=Halo%20Admin%20PPDB%20Kab.%20Sorong ...'>DISINI</a> Untuk Memverifikasi NISN Anda.";
            }
        }
        $this->load->view('daftar/step1',$data);
    }
    
    function step2()
    {
        if ($this->session->userdata('nisn')) {
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
                redirect('daftar/step3');
            }
            else
            {
                $data['sql_provinsi'] = $this->db->query('SELECT * FROM wilayah_2020 WHERE CHAR_LENGTH(kode)=2 ORDER BY nama ASC')->result_array();
                $data['sql_pekerjaan'] = $this->db->query('SELECT * FROM tbl_pekerjaan ORDER BY pekerjaan ASC')->result_array();
                $data['sql_sekolahtujuan'] = $this->db->query('SELECT * FROM tbl_sekolahtujuan ORDER BY nama_smp ASC')->result_array();
                $data['sql_asalsekolah'] = $this->db->query('SELECT * FROM tbl_sekolahdasar ORDER BY namasekolah ASC')->result_array();
                $this->load->view('daftar/step2',$data);
            }
        }
        else
            show_error('The pendaftar you are trying to edit does not exist.');
        } else {
            redirect('daftar/step1');
        }
    }

    function step3()
    {
        $nisn =  $this->session->userdata('nisn');
        $data['pendaftar'] = $this->Daftar_model->get_pendaftar_temp($nisn);
        $smp = $this->Daftar_model->get_smp($data['pendaftar']['sekolahtujuan']);
        $x = $this->Daftar_model->get_pendaftar_by_smp($data['pendaftar']['sekolahtujuan'])->num_rows();
    
            if($x <= 0) 
            {
                $nopendaftaran = date('Y').'-'.$smp['kode_smp'].'-001';
            } 
            elseif($x <= 9)
            {
                $nopendaftaran = date('Y').'-'.$smp['kode_smp'].'-00'.$x;
            } 
            elseif($x < 99)
            {
                $nopendaftaran = date('Y').'-'.$smp['kode_smp'].'-0'.$x;
            }


        if(isset($_POST['btnKonfirmasi'])){           
            
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
                'nopendaftaran' => $nopendaftaran
            );

            $this->Daftar_model->save_pendaftar($params);  
            //$this->Daftar_model->delete_pendaftar_temp($data['pendaftar']['nisn']);     
            $this->session->set_userdata('nopendaftaran', $nopendaftaran); 
            redirect('daftar/formpdf');        
            header('Location: http://103.125.7.51/'); 
        }

        $data['nopendaftaran'] = $nopendaftaran;
        $data['pendaftar'] = $this->Daftar_model->get_pendaftar_temp($nisn);
        $data['provinsi'] = $this->db->query('SELECT nama FROM wilayah_2020 WHERE kode=LEFT("'.$data['pendaftar']['kodealamat'].'",2)')->row_array();
        $data['kabupaten'] = $this->db->query('SELECT nama FROM wilayah_2020 WHERE kode=LEFT("'.$data['pendaftar']['kodealamat'].'",5)')->row_array();
        $data['distrik'] = $this->db->query('SELECT nama FROM wilayah_2020 WHERE kode=LEFT("'.$data['pendaftar']['kodealamat'].'",8)')->row_array();
        $data['desa'] = $this->db->query('SELECT nama FROM wilayah_2020 WHERE kode=LEFT("'.$data['pendaftar']['kodealamat'].'",13)')->row_array();
        $this->load->view('daftar/step3',$data);
    }

    function cetakform($nisn)
    {
        $data = $this->db->query('SELECT * FROM tbl_pendaftar WHERE nisn="'.$nisn.'"')->row_array();
        $nopendaftaran =  $data['nopendaftaran'];
        $this->session->set_userdata('nopendaftaran',$nopendaftaran);
        redirect('daftar/formpdf');
    }

    function formpdf()
    {
        $nopendaftaran =  $this->session->userdata('nopendaftaran');
        
        $data = $this->db->query('SELECT * FROM tbl_pendaftar WHERE nopendaftaran="'.$nopendaftaran.'"')->row_array();
        $provinsi = $this->db->query('SELECT nama FROM wilayah_2020 WHERE kode=LEFT("'.$data['kodealamat'].'",2)')->row_array();
        $kabupaten = $this->db->query('SELECT nama FROM wilayah_2020 WHERE kode=LEFT("'.$data['kodealamat'].'",5)')->row_array();
        $distrik = $this->db->query('SELECT nama FROM wilayah_2020 WHERE kode=LEFT("'.$data['kodealamat'].'",8)')->row_array();
        $desa = $this->db->query('SELECT nama FROM wilayah_2020 WHERE kode=LEFT("'.$data['kodealamat'].'",13)')->row_array();
        
        $this->load->library('pdf');
        $html_content = '<html><head><title>'.$nopendaftaran.'</title></head><body><img src="'.base_url('resources/themes/regform1/images/headerform.jpg').'" width="100%"><div style="font-size:22px; font-weight:bold; text-align:center; text-decoration:underline">Formulir Penerimaan Peserta Didik Baru</div>
        <div style="font-size:16px; font-weight:bold; text-align:center;">No. Pendaftaran: '.$nopendaftaran.' </div>
        <br/><br/>
        <table align="center" width="90%">
        <tr>
        <td width="100">NISN</td><td width="10">:</td><td width="300">'.$data['nisn'].'</td><td rowspan=6><img width=150 height=200 src="'.base_url('resources/themes/regform1/images/siswa.jpg').'"</td>
        </tr>
        <tr>
        <td>NIK</td><td width="10">:</td><td>'.$data['nik'].'</td>
        </tr>
        <tr>
        <td>Nama </td><td width="10">:</td><td>'.$data['namapendaftar'].'</td>
        </tr>
        <tr>
        <td>Tempat Tgl. Lahir</td><td width="10">:</td><td>'.$data['tempatlahir'].', '.$data['tgllahir'].'</td>
        </tr>
        <tr>
        <td>Jenis Kelamin</td><td width="10">:</td><td>'.$data['jenkel'].'</td>
        </tr>
        <tr>
        <td>Agama</td><td width="10">:</td><td>'.$data['agama'].'</td>
        </tr>
        <tr style="vertical-align:top;">
        <td>Alamat</td><td width="10">:</td><td>'.$data['alamatlengkap'].'<br/>'.$desa['nama'].', '.$distrik['nama'].'<br/>'.$kabupaten['nama'].', '.$provinsi['nama'].'</td>
        </tr>
        <tr>
        <td>Nama Ayah</td><td width="10">:</td><td>'.$data['namaayah'].'&nbsp;&nbsp;&nbsp;&nbsp; Pekerjaan : '.$data['pekerjaanayah'].'</td>
        </tr>
        <tr>
        <td>Nama Ibu</td><td width="10">:</td><td>'.$data['namaibu'].'&nbsp;&nbsp;&nbsp;&nbsp; Pekerjaan : '.$data['pekerjaanibu'].'</td>
        </tr>
        <tr>
        <td>Nama Ayah</td><td width="10">:</td><td>'.$data['namaayah'].'&nbsp;&nbsp;&nbsp;&nbsp; Pekerjaan : '.$data['pekerjaanayah'].'</td>
        </tr>
        <tr>
        <td>Nomor HP</td><td width="10">:</td><td>'.$data['nomorhp'].'</td>
        </tr>
        <tr>
        <td>Asal Sekolah</td><td width="10">:</td><td>'.$data['asalsekolah'].'</td>
        </tr>
        <tr>
        <td>Pilihan Sekolah</td><td width="10">:</td><td>'.$data['sekolahtujuan'].'</td>
        </tr>
        <tr>
        <td>Tanggal Mendaftar</td><td width="10">:</td><td>'.$data['tgldaftar'].'</td>
        </tr>
        </table>
        </body></html>';
        
		$this->pdf->loadHtml($html_content);
		$this->pdf->render();
		$this->pdf->stream("Formulir Pendaftaran ".$nopendaftaran.".pdf", array("Attachment"=>0));
    }
    function getKabupaten()
    {
        $id_provinsi = ($this->input->post('id_provinsi')) ? $this->input->post('id_provinsi') : $this->input->post('provinsi');
        $getKabupaten = $this->db->query('SELECT * FROM wilayah_2020 WHERE CHAR_LENGTH(kode)=5 AND LEFT(kode,2)= "'.$id_provinsi.'" ORDER BY nama ASC')->result_array();
        echo '<option disabled="disabled" selected="">Pilih Kabupaten/Kota</option>';
        foreach ($getKabupaten as $kab) {
            echo '<option value="'.$kab['kode'].'">'.$kab['nama'].'</option>';
        }
    }

    function getDistrik()
    {
        $id_kabupaten = $this->input->post('id_kabupaten');
        $getDistrik = $this->db->query('SELECT * FROM wilayah_2020 WHERE CHAR_LENGTH(kode)=8 AND LEFT(kode,5)="'.$id_kabupaten.'" ORDER BY nama ASC')->result_array();
        echo '<option disabled="disabled" selected="">Pilih Kecamatan/Distrik</option>';
        foreach ($getDistrik as $dis) {
            echo '<option value="'.$dis['kode'].'">'.$dis['nama'].'</option>';
        }
    }

    function getDesa()
    {
        $id_distrik = $this->input->post('id_distrik');
        $getDesa = $this->db->query('SELECT * FROM wilayah_2020 WHERE CHAR_LENGTH(kode)=13 AND LEFT(kode,8) = "'.$id_distrik.'" ORDER BY nama ASC')->result_array();
        echo '<option disabled="disabled" selected="">Pilih Kelurahan/Desa</option>';
        foreach ($getDesa as $des) {
            echo '<option value="'.$des['kode'].'">'.$des['nama'].'</option>';
        }
    }
        
}