<?php

class bts_model extends CI_Model
{
  public function __construct(){

  parent::__construct();
  $this->load->database();

}
  public function login(){
    $username = $this->input->post('username');
    $password = $this->input->post('password');
    $posisi = $this->input->post('posisi');
    $data = array(
      'username'=>$username,
      'password'=>$password,
      'type'=>$posisi
    );
    return $this->db->get_where('guru',$data);
  }
  
  public function getSiswa(){
    return $this->db->get('siswa');
  }
  public function siswaEdit($id_siswa){
    return $this->db->get_where('siswa',array('id_siswa'=>$id_siswa));
  }
  public function siswaDelete($id_siswa){
    $this->db->where('id_siswa',$id_siswa);
    return $this->db->delete('siswa');
  }
  public function siswaUpdate(){
    $nama = $this->input->post('nama');
    $id_siswa = $this->input->post('id_siswa');
    $alamat = $this->input->post('alamat');
    $jenis_kelamin = $this->input->post('jenis_kelamin');
    $email_ortu = $this->input->post('email_ortu');
    $no_ortu = $this->input->post('no_ortu');
    $data = array(
  			'nama' => $nama,
  			'alamat' => $alamat,
        'jenis_kelamins'=>$jenis_kelamin,
        'email_ortu'=>$email_ortu,
        'no_ortu'=>$no_ortu
  			);
    $this->db->where('id_siswa',$id_siswa);
    return $this->db->update('siswa',$data);
  }
  public function siswaTambah(){
    $nama = $this->input->post('nama');
    $id_siswa = $this->input->post('id_siswa');
    $alamat = $this->input->post('alamat');
    $jenis_kelamin = $this->input->post('jenis_kelamins');
    $email_ortu = $this->input->post('email_ortu');
    $no_ortu = $this->input->post('no_ortu');
    $data = array(
  			'nama' => $nama,
  			'alamat' => $alamat,
        'id_siswa'=>$id_siswa,
        'jenis_kelamins'=>$jenis_kelamin,
        'email_ortu'=>$email_ortu,
        'no_ortu'=>$no_ortu
  			);
    return $this->db->insert('siswa',$data);
  }

  public function getPelanggaran(){
    $this->db->join('guru','guru.username=pelanggaran.username');
    return $this->db->get('pelanggaran');
  }
  public function pelanggaranTambah(){

    $id_siswa = $this->input->post('id_siswa');
    $jenis = $this->input->post('jenis');
    $surat = $this->input->post('surat');
    if ($jenis="Ringan") {
      $point = "25";
    }else if ($jenis="Berat") {
        $point = "35";
    }else {
        $point = "40";
    }
    
    $namapemberi = $this->input->post('namapemberi');
    $data = array(

        'id_siswa'=>$id_siswa,
        'jenis'=>$jenis,
        'surat'=>$surat,
        'poin'=>$point,
        'username'=>$namapemberi
  			);
    return $this->db->insert('pelanggaran',$data);
  }
  public function guruTambah(){

    $username = $this->input->post('username');
    $password = $this->input->post('password');
    $nama = $this->input->post('nama');
    $nip = $this->input->post('nip');
    $jenis_kelamin = $this->input->post('jk');
    $alamat = $this->input->post('alamat');
    $no_hp = $this->input->post('nohp');
    $type = $this->input->post('type');
    $data = array(

        'username'=>$username,
        'password'=>$password,
        'nama_guru'=>$nama,
        'nip'=>$nip,
        'jenis_kelamin'=>$jenis_kelamin,
        'alamat'=>$alamat,
        'telepon'=>$no_hp,
        'type'=>$type
  			);
    return $this->db->insert('guru',$data);
  }
}

 ?>
 <kdfndszn?mc
 j.co jfwo al,x 
 sndmuq
 slzej9
 zxoeheo;nc.n jsowir30hddkam pjsdow9q-;
 <?php 
 mxcipqh  qpdmzwx <MX_nsnowwuM
 ?>
