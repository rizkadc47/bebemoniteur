<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Konfirmasi extends CI_Controller
{
public function selesai_list()
    {
        $transaksi = $this->Transaksi_model->get_selesai();
        $data = array(
            'transaksi_data' => $transaksi,
        );

        $this->load->view('template/header');
        $this->load->view('transaksi/tb_transaksi_list_selesai', $data);
        $this->load->view('template/footer');
    } 
}