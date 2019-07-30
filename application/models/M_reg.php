<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_reg extends CI_Model {

    public function daftar()
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
            'mata_lomba_id' => $lomba,
            'lagu' => $lagu,
            'asal_sekolah' => $asal,
            'no_sekolah' => $noHpSekolah,
            'nama_pembina' => $namaPembina,
            'no_pembina' => $noHpPembina,
            'tgl_dibuat' => date('m-d-Y')
        ];
        $this->db->insert('registration',$data);
    }
    public function biaya()
    {
        return $this->db->get('biaya_lomba')->result_array();
	}
	
	public function lomba()
	{
		return $this->db->get('mata_lomba');
    }
    public function sub_lomba($id)
    {
        return $this->db->query("SELECT * FROM sub_lomba WHERE id_mata_lomba = '$id'")->result_array();
	}
}

/* End of file M_reg.php */
