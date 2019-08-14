<?php
Class Laporanpdf extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->library('pdf');
    }
    
    function index(){
        $this->load->model('mstproduct_model');
        $pdf = new FPDF('l','mm','A4');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial','B',16);
        // mencetak string 
        $pdf->Cell(285,7,'DAFTAR ORDER INISABLON',0,1,'C');
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(275,7,'Jl Surya Kencana Gang Kemuning 2 Rt 1/6 NO 70 Kelurahan Pamulang Barat Kecamatan Pamulang, Tangerang Selatan  15417',0,1,'C');
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10,7,'',0,1);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(8,6,'No.',1,0);
        $pdf->Cell(25,6,'Tanggal',1,0);
        $pdf->Cell(40,6,'Pelanggan',1,0);
        $pdf->Cell(40,6,'Artikel',1,0);
        $pdf->Cell(15,6,'Manual',1,0);
        $pdf->Cell(15,6,'DTG',1,0);
        $pdf->Cell(15,6,'Sablon',1,0);
        $pdf->Cell(27,6,'Telepon',1,0);
        $pdf->Cell(45,6,'Email',1,0);
        $pdf->Cell(35,6,'Marketing',1,0);
        $pdf->Cell(15,6,'Status',1,1);
        $pdf->SetFont('Arial','',10);
        $mahasiswa = $this->mstproduct_model->get_all();
        $no = 0;
        foreach ($mahasiswa as $row){
            $pdf->Cell(8,6,++$no,1,0);
            $pdf->Cell(25,6,$row->date,1,0);
            $pdf->Cell(40,6,$row->customer,1,0);
            $pdf->Cell(40,6,$row->article,1,0);
            $pdf->Cell(15,6,$row->manual,1,0);
            $pdf->Cell(15,6,$row->dtg,1,0);
            $pdf->Cell(15,6,$row->onlysablon,1,0);
            $pdf->Cell(27,6,$row->phone,1,0);
            $pdf->Cell(45,6,$row->email,1,0);
            $pdf->Cell(35,6,$row->name,1,0);
            $pdf->Cell(15,6,$row->statusname,1,1); 
        }
        $pdf->Output();
    }
}