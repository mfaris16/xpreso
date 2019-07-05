<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class M_admin extends CI_Model {

    public function data()
    {
        return $this->db->get('registration')->result_array();
    }
    public function getById($id)
    {
        return $this->db->get_where('registration', ["id" => $id])->row_array();
    }
    public function insert()
    {
        $nama = $this->input->post('cName');
        $email = $this->input->post('cEmail');
        $gender = $this->input->post('cGender');
        $tglLahir = $this->input->post('cDateBirth');
        $alamat = $this->input->post('cAdress');
        $noHp = $this->input->post('cPhone');
        $lomba = $this->input->post('cLomba');
        $lagu = $this->input->post('cLagu');
        $asal = $this->input->post('cAsal');
        $noHpSekolah = $this->input->post('cNoSekolah');
        $namaPembina = $this->input->post('cNamaPembina');
        $noHpPembina = $this->input->post('cNoPembina');
        $data = [
            'nama' => $nama,
            'email' => $email,
            'jenis_kelamin' => $gender,
            'tgl_lahir' => $tglLahir,
            'alamat' => $alamat,
            'nohp' => $noHp ,
            'mata_lomba' => $lomba,
            'lagu' => $lagu,
            'asal_sekolah' => $asal,
            'no_sekolah' => $noHpSekolah,
            'nama_pembina' => $namaPembina,
            'no_pembina' => $noHpPembina,
            'tgl_dibuat' => date('m-d-Y')
        ];
        $this->db->insert('registration',$data);
    }
    public function update()
    {
        $nama = $this->input->post('cName');
        $email = $this->input->post('cEmail');
        $gender = $this->input->post('cGender');
        $tglLahir = $this->input->post('cDateBirth');
        $alamat = $this->input->post('cAdress');
        $noHp = $this->input->post('cPhone');
        $lomba = $this->input->post('cLomba');
        $lagu = $this->input->post('cLagu');
        $asal = $this->input->post('cAsal');
        $noHpSekolah = $this->input->post('cNoSekolah');
        $namaPembina = $this->input->post('cNamaPembina');
        $noHpPembina = $this->input->post('cNoPembina');
        $data = [
            'nama' => $nama,
            'email' => $email,
            'jenis_kelamin' => $gender,
            'tgl_lahir' => $tglLahir,
            'alamat' => $alamat,
            'nohp' => $noHp ,
            'mata_lomba' => $lomba,
            'lagu' => $lagu,
            'asal_sekolah' => $asal,
            'no_sekolah' => $noHpSekolah,
            'nama_pembina' => $namaPembina,
            'no_pembina' => $noHpPembina,
            'tgl_dibuat' => date('m-d-Y')
        ];
        $this->db->where('id',$this->input->post('id'));
    	$this->db->update('registration',$data);
    }
    public function delete($id)
    {
        return $this->db->delete('registration', ["id" => $id]);
    } 

}

/* End of file M_admin.php */
