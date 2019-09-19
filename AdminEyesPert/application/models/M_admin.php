<?php
class M_admin extends CI_Model
{
	//Database Beranda
	public function jumlah_gejala()
	{
		$sql = $this->db->query("SELECT * FROM gejala");
		return $sql;
	}

	public function jumlah_penyakit()
	{
		$sql = $this->db->query("SELECT * FROM penyakit");
		return $sql;
	}

	public function jumlah_pengetahuan()
	{
		$sql = $this->db->query("SELECT * FROM pengetahuan");
		return $sql;
	}

	public function jumlah_tentang()
	{
		$sql = $this->db->query("SELECT * FROM tentang");
		return $sql;
	}



	//Database Gejala
	public function gejala()
	{
		$sql = $this->db->query("SELECT * FROM gejala");
		return $sql;
	}

	function simpan_gejala($data)
	{
		$this->db->insert('gejala', $data);
	}

	public function ubah_gejala($id)
	{
		$this->db->select('*');
		$this->db->from('gejala');
		$this->db->where("id_gejala", $id);
		$sql = $this->db->get();
		if ($sql->num_rows() > 0) {
			$row = $sql->row_array();
			return $row;
		}
	}

	function simpanubah_gejala($id, $data)
	{
		$this->db->where("id_gejala", $id);
		$this->db->update('gejala', $data);
	}

	function hapus_gejala($id)
	{
		$this->db->query("DELETE FROM gejala WHERE id_gejala = '$id'");
	}


	//Database Penyakit
	public function penyakit()
	{
		$sql = $this->db->query("SELECT * FROM penyakit");
		return $sql;
	}

	public function upload_penyakit()
	{
		$config['upload_path'] = './public/img/Gangguan Mata';
		$config['allowed_types'] = 'jpg|png|jpeg';
		$config['max_size']  = '2048';
		$config['remove_space'] = TRUE;

		$this->load->library('upload', $config); // Load konfigurasi uploadnya
		if ($this->upload->do_upload('gambar')) { // Lakukan upload dan Cek jika proses upload berhasil
			// Jika berhasil :
			$return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
			return $return;
		} else {
			// Jika gagal :
			$return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
			return $return;
		}
	}

	function simpan_penyakit($upload)
	{
		$id = $this->input->post('id_gangguan');
		$kode_gangguan = $this->input->post('kode_gangguan');
		$nama_gangguan = $this->input->post('nama_gangguan');
		$penanganan = $this->input->post('penanganan');
		$pengertian = $this->input->post('pengertian');
		$tips = $this->input->post('tips');
		$filename = $upload['file']['file_name'];
		$data = array(
			'id_gangguan' => $id,
			'kode_gangguan' => $kode_gangguan,
			'nama_gangguan' => $nama_gangguan,
			'penanganan' => $penanganan,
			'pengertian' => $pengertian,
			'tips' => $tips,
			'gambar' => $filename
		);

		$this->db->insert('penyakit', $data);
	}

	public function ubah_penyakit($id)
	{
		$this->db->select('*');
		$this->db->from('penyakit');
		$this->db->where("id_gangguan", $id);
		$sql = $this->db->get();
		if ($sql->num_rows() > 0) {
			$row = $sql->row_array();
			return $row;
		}
	}

	function simpanubah_penyakit($upload)
	{
		$id = $this->input->post('id_gangguan');
		$kode_gangguan = $this->input->post('kode_gangguan');
		$nama_gangguan = $this->input->post('nama_gangguan');
		$penanganan = $this->input->post('penanganan');
		$pengertian = $this->input->post('pengertian');
		$tips = $this->input->post('tips');
		$filename = $upload['file']['file_name'];
		$data = array(
			'id_gangguan' => $id,
			'kode_gangguan' => $kode_gangguan,
			'nama_gangguan' => $nama_gangguan,
			'penanganan' => $penanganan,
			'pengertian' => $pengertian,
			'tips' => $tips,
			'gambar' => $filename
		);

		$this->db->where("id_gangguan", $id);
		$this->db->update('penyakit', $data);
	}

	function hapus_penyakit($id)
	{
		$this->db->query("DELETE FROM penyakit WHERE id_gangguan = '$id'");
	}



	//Database Pengetahuan
	public function pengetahuan()
	{
		$sql = $this->db->query("SELECT * FROM pengetahuan");
		return $sql;
	}

	function simpan_pengetahuan($data)
	{
		$this->db->insert('pengetahuan', $data);
	}

	public function ubah_pengetahuan($id)
	{
		$this->db->select('*');
		$this->db->from('pengetahuan');
		$this->db->where("id", $id);
		$sql = $this->db->get();
		if ($sql->num_rows() > 0) {
			$row = $sql->row_array();
			return $row;
		}
	}

	function simpanubah_pengetahuan($id, $data)
	{
		$this->db->where("id", $id);
		$this->db->update('pengetahuan', $data);
	}

	function hapus_pengetahuan($id)
	{
		$this->db->query("DELETE FROM pengetahuan WHERE id = '$id'");
	}

	//Database Tentang
	public function tentang()
	{
		$sql = $this->db->query("SELECT * FROM tentang");
		return $sql;
	}

	function simpan_tentang($data)
	{
		$this->db->insert('tentang', $data);
	}

	public function ubah_tentang($id)
	{
		$this->db->select('*');
		$this->db->from('tentang');
		$this->db->where("id_tentang", $id);
		$sql = $this->db->get();
		if ($sql->num_rows() > 0) {
			$row = $sql->row_array();
			return $row;
		}
	}

	function simpanubah_tentang($id, $data)
	{
		$this->db->where("id_tentang", $id);
		$this->db->update('tentang', $data);
	}

	function hapus_tentang($id)
	{
		$this->db->query("DELETE FROM tentang WHERE id_tentang = '$id'");
	}
}
