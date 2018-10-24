<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Pendaftaran_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }
	
	function getAll(){
		$query = $this->db->get('pendaftaran');
		return $query->result();
	}
	
	public function cetakId($id){
		$this->db->where('id_daftar',$id);
		$hasil = $this->db->get('pendaftaran');
		return $hasil->row();
	}
	
	public function save(){
            $id_daftar        =   $this->input->post('id_daftar');
            $nama_lengkap     =   $this->input->post('nm_lengkap');
            $nama_panggilan   =   $this->input->post('nm_panggilan');
            $nik              =   $this->input->post('nik');
            $jns_kelamin      =   $this->input->post('jns_kelamin');
            $tempat           =   $this->input->post('tempat');
			if($this->input->post('tanggallahir')!=""){
				$tgl    = explode('/',$this->input->post('tanggallahir'));
				$tgl_lahir = $tgl[2]."-".$tgl[1]."-".$tgl[0];
			}
			else {
				$tgl_lahir = "";
			}
            $agama            =   $this->input->post('agamaanak');
            $alamat           =   $this->input->post('alamat');
            $kewarganegaraan  =   $this->input->post('kewaarganegaraan');
            $anak_ke          =   $this->input->post('anak_ke');
            $jumlah_saudara_kandung   =   $this->input->post('jumlah_saudara_kandung');
            $jumlah_saudara_angkat    =   $this->input->post('jumlah_saudara_angkat');
            $jumlah_saudara_tiri      =   $this->input->post('jumlah_saudara_tiri');
            $status_anak      =   $this->input->post('status_anak');
            $gol_darah        =   $this->input->post('gol_darah');
            $berat_badan      =   $this->input->post('berat_badan');
            $imunisasi_yg_diterima    =   $this->input->post('imunisasi_yg_diterima');
            $jarak_rumah_kesekolah    =   $this->input->post('jarak_rumah_kesekolah');
            $uk_baju                  =   $this->input->post('uk_baju');
            $nm_ayah                  =   $this->input->post('nm_ayah');
            $tempat_ayah              =   $this->input->post('tempat_ayah');
			if($this->input->post('tanggallahirayah')!=""){
				$tgllahirayah			  = explode('/',$this->input->post('tanggallahirayah'));
				$tgl_lahirayah = $tgllahirayah[2]."-".$tgllahirayah[1]."-".$tgllahirayah[0];
			}
			else {
				$tgl_lahirayah = "";
			}
            
            $agama_ayah               =   $this->input->post('agamaayah');
            $kewarganegaraan_ayah     =   $this->input->post('kewarganegaraan_ayah');
            $pendidikan_terakhir_ayah =   $this->input->post('pendidikan_terakhir');
            $pekerjaan_ayah           =   $this->input->post('pekerjaan_ayah');
            $no_ktp_ayah              =   $this->input->post('no_ktp_ayah');
            $penghasilan_perbulan_ayah=   $this->input->post('penghasilan_perbulan_ayah');
            $alamat_ayah              =   $this->input->post('alamat_ayah');
            $no_tlpn_ayah             =   $this->input->post('no_tlpn_ayah');
            $nm_ibu                   =   $this->input->post('nm_ibu');
            $tempat_ibu               =   $this->input->post('tempat_ibu');
			
			if($this->input->post('tanggallahirayah')!=""){
				$tgllahiribu = explode('/',$this->input->post('tanggallahiribu'));
				$tgl_lahiribu = $tgllahiribu[2]."-".$tgllahiribu[1]."-".$tgllahiribu[0];
			}
			else {
				$tgl_lahiribu = "";
			}
			
            
            $agama_ibu                =   $this->input->post('agamaibu');
            $kewarganegaraan_ibu      =   $this->input->post('kewarganegaraan_ibu');
            $pendidikan_terakhir_ibu  =   $this->input->post('pendidikan_terakhir_ibu');
            $pekerjaan_ibu            =   $this->input->post('pekerjaan_ibu');
            $no_ktp_ibu               =   $this->input->post('no_ktp_ibu');
            $penghasilan_perbulan_ibu =   $this->input->post('penghasilan_perbulan_ibu');
            $alamat_ibu               =   $this->input->post('alamat_ayah');
            $no_tlpn_ibu              =   $this->input->post('no_tlpn_ibu');
            $kodesekolah              =   $this->input->post('kodesekolah');
            
		$data = array("id_daftar"   =>  $id_daftar,
				  "nm_lengkap"=>$nama_lengkap,
				  "nm_panggilan"=>$nama_panggilan,  
					"nik_siswa"   =>  $nik,
					"jenis_kelamin"   =>$jns_kelamin,
					"tempat"=>$tempat,
					"tgl_lahir"=>$tgl_lahir,
					"agama"=>$agama,
					"alamat"=>$alamat,
					"kewarganegaraan"=>$kewarganegaraan,
					"anak_ke"=>$anak_ke,
					"jumlah_saudara_kandung"=>$jumlah_saudara_kandung,"jumlah_saudara_angkat"=>$jumlah_saudara_angkat,
					"jumlah_saudara_tiri"=>$jumlah_saudara_tiri, 
					"status_anak1"=>$status_anak,
					"gol_darah"=>$gol_darah,
					"berat_badan"=>$berat_badan,
					"imunisasi_yg_diterima"=>$imunisasi_yg_diterima,
					"jarak_rumah_kesekolah"=>$jarak_rumah_kesekolah,
					"uk_baju"=>$uk_baju,
					"nm_ayah"=>$nm_ayah,  
					"tempat_ayah"=>$tempat_ayah, 
					"tgl_lahir_ayah"=>$tgl_lahirayah, 
					"agama_ayah"=>$agama_ayah,      
					"kewarganegaraan"=>$kewarganegaraan_ayah,  
					"pendidikan_ayah"=>$pendidikan_terakhir_ayah,
					"pekerjaan_ayah"=>$pekerjaan_ayah,
					"no_ktp_ayah"=>$no_ktp_ayah,  
					"penghasilan_perbulan_ayah"=>$penghasilan_perbulan_ayah,
					"alamat_ayah"=>$alamat_ayah,
					"no_tlpn_ayah"=>$no_tlpn_ayah,
					"nm_ibu"=>$nm_ibu,
					"tempat_ibu"=>$tempat_ibu, 
					"tgl_lahir_ibu"=>$tgl_lahiribu,
					"agama_ibu"=>$agama_ibu, 
					"kewarganegaraan_ibu"=>$kewarganegaraan_ibu,
					"pendidikan_terakhir_ibu"=>$pendidikan_terakhir_ibu,
					"pekerjaan_ibu"=>$pekerjaan_ibu, 
					"no_ktp_ibu"=>$no_ktp_ibu, 
					"penghasilan_perbulan_ibu"=>$penghasilan_perbulan_ibu,
					"alamat_ibu"=>$alamat_ibu,  
					"no_tlpn_ibu"=>$no_tlpn_ibu,
					"sekolah_kodesekolah"=>$kodesekolah,
					"tgl_pendaftaran"=>date('Y-m-d'));
		
		$this->db->insert('pendaftaran', $data);
		$id = $this->db->insert_id();
		
		return $id;
	}
	
	function getId($id){
		$this->db->where('id_info',$id);
		$hasil = $this->db->get('pendaftaran');
		return $hasil->row();
	}
	
	function update(){
		$id_daftar        =   $this->input->post('id_daftar');
            $nama_lengkap     =   $this->input->post('nm_lengkap');
            $nama_panggilan   =   $this->input->post('nm_panggilan');
            $nik              =   $this->input->post('nik');
            $jns_kelamin      =   $this->input->post('jns_kelamin');
            $tempat           =   $this->input->post('tempat');
            $tgl_lahir        = explode('/',$this->input->post('tgl_lahir'));
            $tgl_lahir = $tgl[2]."-".$tgl[1]."-".$tgl[0];
            $agama            =   $this->input->post('agama');
            $alamat           =   $this->input->post('alamat');
            $kewarganegaraan  =   $this->input->post('kewaarganegaraan');
            $anak_ke          =   $this->input->post('anak_ke');
            $jumlah_saudara_kandung   =   $this->input->post('jumlah_saudara_kandung');
            $jumlah_saudara_angkat    =   $this->input->post('jumlah_saudara_angkat');
            $jumlah_saudara_tiri      =   $this->input->post('jumlah_saudara_tiri');
            $status_anak      =   $this->input->post('status_anak');
            $gol_darah        =   $this->input->post('gol_darah');
            $berat_badan      =   $this->input->post('berat_badan');
            $imunisasi_yg_diterima    =   $this->input->post('imunisasi_yg_diterima');
            $jarak_rumah_kesekolah    =   $this->input->post('jarak_rumah_kesekolah');
            $uk_baju                  =   $this->input->post('uk_baju');
            $nm_ayah                  =   $this->input->post('nm_ayah');
            $tempat_ayah              =   $this->input->post('tempat_ayah');
            $tgl_lahir_ayah           =   $this->input->post('tgl_lahir_ayah');
            $agama_ayah               =   $this->input->post('agama_ayah');
            $kewarganegaraan_ayah     =   $this->input->post('kewarganegaraan_ayah');
            $pendidikan_terakhir_ayah =   $this->input->post('pendidikan_terakhir_ayah');
            $pekerjaan_ayah           =   $this->input->post('pekerjaan_ayah');
            $no_ktp_ayah              =   $this->input->post('no_ktp_ayah');
            $penghasilan_perbulan_ayah=   $this->input->post('penghasilan_perbulan_ayah');
            $alamat_ayah              =   $this->input->post('alamat_ayah');
            $no_tlpn_ayah             =   $this->input->post('no_tlpn_ayah');
            $nm_ibu                   =   $this->input->post('nm_ibu');
            $tempat_ibu               =   $this->input->post('tempat_ibu');
            $tgl_lahir_ibu            =   $this->input->post('tgl_lahir_ibu');
            $agama_ibu                =   $this->input->post('agama_ibu');
            $kewarganegaraan_ibu      =   $this->input->post('kewarganegaraan_ibu');
            $pendidikan_terakhir_ibu  =   $this->input->post('pendidikan_terakhir_ibu');
            $pekerjaan_ibu            =   $this->input->post('pekerjaan_ibu');
            $no_ktp_ibu               =   $this->input->post('no_ktp_ibu');
            $penghasilan_perbulan_ibu =   $this->input->post('penghasilan_perbulan_ibu');
            $alamat_ibu               =   $this->input->post('alamat_ayah');
            $no_tlpn_ibu              =   $this->input->post('no_tlpn_ibu');
            
		$data = array("id_daftar"   =>  $id_daftar,
                              "nama_lengkap"=>$nama_lengkap,
                              "nm_panggilan"=>$nama_panggilan,  
                                "nik"   =>  $nik,
                                "jns_kelamin"   =>$jns_kelamin,
                                "tempat"=>$tempat,
                                "tgl_lahir"=>$tgl_lahir,
                                "agama"=>$agama,
                                "alamat"=>$alamat,
                                "kewarganegaraan"=>$kewarganegaraan,
                                "anak_ke"=>$anak_ke,
                                "jumlah_saudara_kandung"=>$jumlah_saudara_kandung,"jumlah_saudara_angkat"=>$jumlah_saudara_angkat,
                                "jumlah_saudara_tiri"=>$jumlah_saudara_tiri, 
                                "status_anak"=>$status_anak,
                                "gol_darah"=>$gol_darah,
                                "berat_badan"=>$berat_badan,
                                "imunisasi_yg_diterima"=>$imunisasi_yg_diterima,
                                "jarak_rumah_kesekolah"=>$jarak_rumah_kesekolah,
                                "uk_baju"=>$uk_baju,
                                "nm_ayah"=>$nm_ayah,  
                                "tempat_ayah"=>$tempat_ayah, 
                                "tgl_lahir_ayah"=>$tgl_lahir_ayah, 
                                "agana_ayah"=>$agama_ayah,      
                                "kewarganegaraan"=>$kewarganegaraan_ayah,  
                                "pendidikan_terakhir_ayah"=>$pendidikan_terakhir_ayah,
                                "pekerjaan_ayah"=>$pekerjaan_ayah,
                                "no_ktp_ayah"=>$no_ktp_ayah,  
                                "penghasilah_perulan_ayah"=>$penghasilan_perbulan_ayah,
                                "alamat_ayah"=>$alamat_ayah,
                                "no_tlpn_ayah"=>$no_tlpn_ayah,
                                "nm_ibu"=>$nm_ibu,
                                "tempat_ibu"=>$tempat_ibu, 
                                "tgl_lahir_ibu"=>$tgl_lahir_ibu,
                                "agama_ibu"=>$agama_ibu, 
                                "kewarganegaraan_ibu"=>$kewarganegaraan_ibu,
                                "pendidikan_terakhir_ibu"=>$pendidikan_terakhir_ibu,
                                "pekerjaan_ibu"=>$pekerjaan_ibu, 
                                "no_ktp_ibu"=>$no_ktp_ibu, 
                                "penghasilan_perbulan_ibu"=>$penghasilan_perbulan_ibu,
                                "alamat_ibu"=>$alamat_ibu,  
                                "no_tlpn_ibu"=>$no_tlpn_ibu);
		
			$this->db->where('id_daftar',$id_daftar);
			$this->db->update('pendaftaran',$data);
        }
 }

/* End of file */