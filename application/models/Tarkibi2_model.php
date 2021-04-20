<?php
    class Tarkibi2_model extends CI_MODEL{
        // public function pertemuan($id){
        //     return $data[$id];
        // }

        
        public function __construct()
        {
            parent::__construct();
            $this->load->model("Admin_model");
        }
        

        public function materi_pertemuan($id){
            $data[1] = [
                "<div><img src='".base_url()."assets/img/tarkibi_2/1.1.jpg' class='img-rounded img-fluid'><div class='text-right'><a href='".base_url()."assets/img/tarkibi_2/1.1.jpg' class='btn btn-sm btn-success' download><i class='fa fa-download'></i> Download</a></div></div>",
                "<div><img src='".base_url()."assets/img/tarkibi_2/1.2.jpg' class='img-rounded img-fluid'><div class='text-right'><a href='".base_url()."assets/img/tarkibi_2/1.2.jpg' class='btn btn-sm btn-success' download><i class='fa fa-download'></i> Download</a></div></div>",
                "<div><img src='".base_url()."assets/img/tarkibi_2/1.3.jpg' class='img-rounded img-fluid'><div class='text-right'><a href='".base_url()."assets/img/tarkibi_2/1.3.jpg' class='btn btn-sm btn-success' download><i class='fa fa-download'></i> Download</a></div></div>",
                "<div><img src='".base_url()."assets/img/tarkibi_2/1.4.jpg' class='img-rounded img-fluid'><div class='text-right'><a href='".base_url()."assets/img/tarkibi_2/1.4.jpg' class='btn btn-sm btn-success' download><i class='fa fa-download'></i> Download</a></div></div>",
                "<div><img src='".base_url()."assets/img/tarkibi_2/1.png' class='img-rounded img-fluid'><div class='text-right'><a href='".base_url()."assets/img/tarkibi_2/1.png' class='btn btn-sm btn-success' download><i class='fa fa-download'></i> Download</a></div></div>",
                "<div><img src='".base_url()."assets/img/tarkibi_2/1.1.png' class='img-rounded img-fluid'><div class='text-right'><a href='".base_url()."assets/img/tarkibi_2/1.1.png' class='btn btn-sm btn-success' download><i class='fa fa-download'></i> Download</a></div></div>",
                "<div><audio controls><source src='".base_url()."assets/sound/tarkibi_2/1.1.mp3' type='audio/mp3'></audio><div class='text-right'><a href='".base_url()."assets/sound/tarkibi_2/1.1.mp3' class='btn btn-sm btn-success' download><i class='fa fa-download'></i> Download</a></div></div>",
                "<div><audio controls><source src='".base_url()."assets/sound/tarkibi_2/1.2.mp3' type='audio/mp3'></audio><div class='text-right'><a href='".base_url()."assets/sound/tarkibi_2/1.2.mp3' class='btn btn-sm btn-success' download><i class='fa fa-download'></i> Download</a></div></div>",
                "<div><audio controls><source src='".base_url()."assets/sound/tarkibi_2/1.3.mp3' type='audio/mp3'></audio><div class='text-right'><a href='".base_url()."assets/sound/tarkibi_2/1.3.mp3' class='btn btn-sm btn-success' download><i class='fa fa-download'></i> Download</a></div></div>",
            ];

            $data[2] = [
                "<div><img src='".base_url()."assets/img/tarkibi_2/2.1.jpg' class='img-rounded img-fluid'><div class='text-right'><a href='".base_url()."assets/img/tarkibi_2/2.1.jpg' class='btn btn-sm btn-success' download><i class='fa fa-download'></i> Download</a></div></div>",
                "<div><img src='".base_url()."assets/img/tarkibi_2/2.2.jpg' class='img-rounded img-fluid'><div class='text-right'><a href='".base_url()."assets/img/tarkibi_2/2.2.jpg' class='btn btn-sm btn-success' download><i class='fa fa-download'></i> Download</a></div></div>",
                "<div><img src='".base_url()."assets/img/tarkibi_2/2.3.jpg' class='img-rounded img-fluid'><div class='text-right'><a href='".base_url()."assets/img/tarkibi_2/2.3.jpg' class='btn btn-sm btn-success' download><i class='fa fa-download'></i> Download</a></div></div>",
                "<div><img src='".base_url()."assets/img/tarkibi_2/2.4.jpeg' class='img-rounded img-fluid'><div class='text-right'><a href='".base_url()."assets/img/tarkibi_2/2.4.jpeg' class='btn btn-sm btn-success' download><i class='fa fa-download'></i> Download</a></div></div>",
                "<div><img src='".base_url()."assets/img/tarkibi_2/2.5.jpeg' class='img-rounded img-fluid'><div class='text-right'><a href='".base_url()."assets/img/tarkibi_2/2.5.jpeg' class='btn btn-sm btn-success' download><i class='fa fa-download'></i> Download</a></div></div>",
                "<div><audio controls><source src='".base_url()."assets/sound/tarkibi_2/2.1.mp3' type='audio/mp3'></audio><div class='text-right'><a href='".base_url()."assets/sound/tarkibi_2/2.1.mp3' class='btn btn-sm btn-success' download><i class='fa fa-download'></i> Download</a></div></div>",
                "<div><audio controls><source src='".base_url()."assets/sound/tarkibi_2/2.2.mp3' type='audio/mp3'></audio><div class='text-right'><a href='".base_url()."assets/sound/tarkibi_2/2.2.mp3' class='btn btn-sm btn-success' download><i class='fa fa-download'></i> Download</a></div></div>",
            ];

            $data[3] = [
                "<div><img src='".base_url()."assets/img/tarkibi_2/3.1.jpg' class='img-rounded img-fluid'><div class='text-right'><a href='".base_url()."assets/img/tarkibi_2/3.1.jpg' class='btn btn-sm btn-success' download><i class='fa fa-download'></i> Download</a></div></div>",
                "<div><img src='".base_url()."assets/img/tarkibi_2/3.2.jpg' class='img-rounded img-fluid'><div class='text-right'><a href='".base_url()."assets/img/tarkibi_2/3.2.jpg' class='btn btn-sm btn-success' download><i class='fa fa-download'></i> Download</a></div></div>",
                "<div><img src='".base_url()."assets/img/tarkibi_2/3.3.jpg' class='img-rounded img-fluid'><div class='text-right'><a href='".base_url()."assets/img/tarkibi_2/3.3.jpg' class='btn btn-sm btn-success' download><i class='fa fa-download'></i> Download</a></div></div>",
                "<div><img src='".base_url()."assets/img/tarkibi_2/3.4.jpg' class='img-rounded img-fluid'><div class='text-right'><a href='".base_url()."assets/img/tarkibi_2/3.4.jpg' class='btn btn-sm btn-success' download><i class='fa fa-download'></i> Download</a></div></div>",
                "<div><audio controls><source src='".base_url()."assets/sound/tarkibi_2/3.1.mp3' type='audio/mp3'></audio><div class='text-right'><a href='".base_url()."assets/sound/tarkibi_2/3.1.mp3' class='btn btn-sm btn-success' download><i class='fa fa-download'></i> Download</a></div></div>",
                "<div><audio controls><source src='".base_url()."assets/sound/tarkibi_2/3.2.mp3' type='audio/mp3'></audio><div class='text-right'><a href='".base_url()."assets/sound/tarkibi_2/3.2.mp3' class='btn btn-sm btn-success' download><i class='fa fa-download'></i> Download</a></div></div>",
            ];

            $data[4] = [
                "<div><img src='".base_url()."assets/img/tarkibi_2/4.1.jpg' class='img-rounded img-fluid'><div class='text-right'><a href='".base_url()."assets/img/tarkibi_2/4.1.jpg' class='btn btn-sm btn-success' download><i class='fa fa-download'></i> Download</a></div></div>",
                "<div><img src='".base_url()."assets/img/tarkibi_2/4.2.jpg' class='img-rounded img-fluid'><div class='text-right'><a href='".base_url()."assets/img/tarkibi_2/4.2.jpg' class='btn btn-sm btn-success' download><i class='fa fa-download'></i> Download</a></div></div>",
                "<div><img src='".base_url()."assets/img/tarkibi_2/4.3.jpg' class='img-rounded img-fluid'><div class='text-right'><a href='".base_url()."assets/img/tarkibi_2/4.3.jpg' class='btn btn-sm btn-success' download><i class='fa fa-download'></i> Download</a></div></div>",
                "<div><img src='".base_url()."assets/img/tarkibi_2/4.4.jpg' class='img-rounded img-fluid'><div class='text-right'><a href='".base_url()."assets/img/tarkibi_2/4.4.jpg' class='btn btn-sm btn-success' download><i class='fa fa-download'></i> Download</a></div></div>",
                "<div><img src='".base_url()."assets/img/tarkibi_2/4.5.jpg' class='img-rounded img-fluid'><div class='text-right'><a href='".base_url()."assets/img/tarkibi_2/4.5.jpg' class='btn btn-sm btn-success' download><i class='fa fa-download'></i> Download</a></div></div>",
                "<div><audio controls><source src='".base_url()."assets/sound/tarkibi_2/4.1.mp3' type='audio/mp3'></audio><div class='text-right'><a href='".base_url()."assets/sound/tarkibi_2/4.1.mp3' class='btn btn-sm btn-success' download><i class='fa fa-download'></i> Download</a></div></div>",
                "<div><audio controls><source src='".base_url()."assets/sound/tarkibi_2/4.2.mp3' type='audio/mp3'></audio><div class='text-right'><a href='".base_url()."assets/sound/tarkibi_2/4.2.mp3' class='btn btn-sm btn-success' download><i class='fa fa-download'></i> Download</a></div></div>",
            ];

            $data[5] = [
                "<div><img src='".base_url()."assets/img/tarkibi_2/5.1.jpg' class='img-rounded img-fluid'><div class='text-right'><a href='".base_url()."assets/img/tarkibi_2/5.1.jpg' class='btn btn-sm btn-success' download><i class='fa fa-download'></i> Download</a></div></div>",
                "<div><img src='".base_url()."assets/img/tarkibi_2/5.2.jpg' class='img-rounded img-fluid'><div class='text-right'><a href='".base_url()."assets/img/tarkibi_2/5.2.jpg' class='btn btn-sm btn-success' download><i class='fa fa-download'></i> Download</a></div></div>",
                "<div><img src='".base_url()."assets/img/tarkibi_2/5.3.jpg' class='img-rounded img-fluid'><div class='text-right'><a href='".base_url()."assets/img/tarkibi_2/5.3.jpg' class='btn btn-sm btn-success' download><i class='fa fa-download'></i> Download</a></div></div>",
                "<div><img src='".base_url()."assets/img/tarkibi_2/5.4.jpg' class='img-rounded img-fluid'><div class='text-right'><a href='".base_url()."assets/img/tarkibi_2/5.4.jpg' class='btn btn-sm btn-success' download><i class='fa fa-download'></i> Download</a></div></div>",
                "<div><img src='".base_url()."assets/img/tarkibi_2/5.5.jpg' class='img-rounded img-fluid'><div class='text-right'><a href='".base_url()."assets/img/tarkibi_2/5.5.jpg' class='btn btn-sm btn-success' download><i class='fa fa-download'></i> Download</a></div></div>",
                "<div><img src='".base_url()."assets/img/tarkibi_2/5.6.jpg' class='img-rounded img-fluid'><div class='text-right'><a href='".base_url()."assets/img/tarkibi_2/5.6.jpg' class='btn btn-sm btn-success' download><i class='fa fa-download'></i> Download</a></div></div>",
                "<div><audio controls><source src='".base_url()."assets/sound/tarkibi_2/5.1.mp3' type='audio/mp3'></audio><div class='text-right'><a href='".base_url()."assets/sound/tarkibi_2/5.1.mp3' class='btn btn-sm btn-success' download><i class='fa fa-download'></i> Download</a></div></div>",
                "<div><audio controls><source src='".base_url()."assets/sound/tarkibi_2/5.2.mp3' type='audio/mp3'></audio><div class='text-right'><a href='".base_url()."assets/sound/tarkibi_2/5.2.mp3' class='btn btn-sm btn-success' download><i class='fa fa-download'></i> Download</a></div></div>",
            ];

            $data[6] = [
                "<div><img src='".base_url()."assets/img/tarkibi_2/6.1.jpg' class='img-rounded img-fluid'><div class='text-right'><a href='".base_url()."assets/img/tarkibi_2/6.1.jpg' class='btn btn-sm btn-success' download><i class='fa fa-download'></i> Download</a></div></div>",
                "<div><img src='".base_url()."assets/img/tarkibi_2/6.2.jpg' class='img-rounded img-fluid'><div class='text-right'><a href='".base_url()."assets/img/tarkibi_2/6.2.jpg' class='btn btn-sm btn-success' download><i class='fa fa-download'></i> Download</a></div></div>",
                "<div><img src='".base_url()."assets/img/tarkibi_2/6.3.jpg' class='img-rounded img-fluid'><div class='text-right'><a href='".base_url()."assets/img/tarkibi_2/6.3.jpg' class='btn btn-sm btn-success' download><i class='fa fa-download'></i> Download</a></div></div>",
                "<div><img src='".base_url()."assets/img/tarkibi_2/6.4.jpg' class='img-rounded img-fluid'><div class='text-right'><a href='".base_url()."assets/img/tarkibi_2/6.4.jpg' class='btn btn-sm btn-success' download><i class='fa fa-download'></i> Download</a></div></div>",
                "<div><audio controls><source src='".base_url()."assets/sound/tarkibi_2/6.mp3' type='audio/mp3'></audio><div class='text-right'><a href='".base_url()."assets/sound/tarkibi_2/6.mp3' class='btn btn-sm btn-success' download><i class='fa fa-download'></i> Download</a></div></div>",
            ];

            $data[7] = [
                "<div><img src='".base_url()."assets/img/tarkibi_2/7.1.jpg' class='img-rounded img-fluid'><div class='text-right'><a href='".base_url()."assets/img/tarkibi_2/7.1.jpg' class='btn btn-sm btn-success' download><i class='fa fa-download'></i> Download</a></div></div>",
                "<div><img src='".base_url()."assets/img/tarkibi_2/7.2.jpg' class='img-rounded img-fluid'><div class='text-right'><a href='".base_url()."assets/img/tarkibi_2/7.2.jpg' class='btn btn-sm btn-success' download><i class='fa fa-download'></i> Download</a></div></div>",
                "<div><img src='".base_url()."assets/img/tarkibi_2/7.3.jpg' class='img-rounded img-fluid'><div class='text-right'><a href='".base_url()."assets/img/tarkibi_2/7.3.jpg' class='btn btn-sm btn-success' download><i class='fa fa-download'></i> Download</a></div></div>",
                "<div><audio controls><source src='".base_url()."assets/sound/tarkibi_2/7.mp3' type='audio/mp3'></audio><div class='text-right'><a href='".base_url()."assets/sound/tarkibi_2/7.mp3' class='btn btn-sm btn-success' download><i class='fa fa-download'></i> Download</a></div></div>",
            ];

            $data[8] = [
                "<div><img src='".base_url()."assets/img/tarkibi_2/8.1.jpg' class='img-rounded img-fluid'><div class='text-right'><a href='".base_url()."assets/img/tarkibi_2/8.1.jpg' class='btn btn-sm btn-success' download><i class='fa fa-download'></i> Download</a></div></div>",
                "<div><img src='".base_url()."assets/img/tarkibi_2/8.2.jpg' class='img-rounded img-fluid'><div class='text-right'><a href='".base_url()."assets/img/tarkibi_2/8.2.jpg' class='btn btn-sm btn-success' download><i class='fa fa-download'></i> Download</a></div></div>",
                "<div><img src='".base_url()."assets/img/tarkibi_2/8.3.jpg' class='img-rounded img-fluid'><div class='text-right'><a href='".base_url()."assets/img/tarkibi_2/8.3.jpg' class='btn btn-sm btn-success' download><i class='fa fa-download'></i> Download</a></div></div>",
                "<div><img src='".base_url()."assets/img/tarkibi_2/8.4.jpg' class='img-rounded img-fluid'><div class='text-right'><a href='".base_url()."assets/img/tarkibi_2/8.4.jpg' class='btn btn-sm btn-success' download><i class='fa fa-download'></i> Download</a></div></div>",
                "<div><img src='".base_url()."assets/img/tarkibi_2/8.5.jpg' class='img-rounded img-fluid'><div class='text-right'><a href='".base_url()."assets/img/tarkibi_2/8.5.jpg' class='btn btn-sm btn-success' download><i class='fa fa-download'></i> Download</a></div></div>",
                "<div><img src='".base_url()."assets/img/tarkibi_2/8.6.jpg' class='img-rounded img-fluid'><div class='text-right'><a href='".base_url()."assets/img/tarkibi_2/8.6.jpg' class='btn btn-sm btn-success' download><i class='fa fa-download'></i> Download</a></div></div>",
                "<div><img src='".base_url()."assets/img/tarkibi_2/8.7.jpg' class='img-rounded img-fluid'><div class='text-right'><a href='".base_url()."assets/img/tarkibi_2/8.7.jpg' class='btn btn-sm btn-success' download><i class='fa fa-download'></i> Download</a></div></div>",
                "<div><audio controls><source src='".base_url()."assets/sound/tarkibi_2/8.1.mp3' type='audio/mp3'></audio><div class='text-right'><a href='".base_url()."assets/sound/tarkibi_2/8.1.mp3' class='btn btn-sm btn-success' download><i class='fa fa-download'></i> Download</a></div></div>",
                "<div><audio controls><source src='".base_url()."assets/sound/tarkibi_2/8.2.mp3' type='audio/mp3'></audio><div class='text-right'><a href='".base_url()."assets/sound/tarkibi_2/8.2.mp3' class='btn btn-sm btn-success' download><i class='fa fa-download'></i> Download</a></div></div>",
                "<div><audio controls><source src='".base_url()."assets/sound/tarkibi_2/8.3.mp3' type='audio/mp3'></audio><div class='text-right'><a href='".base_url()."assets/sound/tarkibi_2/8.3.mp3' class='btn btn-sm btn-success' download><i class='fa fa-download'></i> Download</a></div></div>",
            ];
            
            $data[9] = [
                "<div><img src='".base_url()."assets/img/tarkibi_2/9.1.jpg' class='img-rounded img-fluid'><div class='text-right'><a href='".base_url()."assets/img/tarkibi_2/9.1.jpg' class='btn btn-sm btn-success' download><i class='fa fa-download'></i> Download</a></div></div>",
                "<div><img src='".base_url()."assets/img/tarkibi_2/9.2.jpg' class='img-rounded img-fluid'><div class='text-right'><a href='".base_url()."assets/img/tarkibi_2/9.2.jpg' class='btn btn-sm btn-success' download><i class='fa fa-download'></i> Download</a></div></div>",
                "<div><img src='".base_url()."assets/img/tarkibi_2/9.3.jpg' class='img-rounded img-fluid'><div class='text-right'><a href='".base_url()."assets/img/tarkibi_2/9.3.jpg' class='btn btn-sm btn-success' download><i class='fa fa-download'></i> Download</a></div></div>",
                "<div><img src='".base_url()."assets/img/tarkibi_2/9.4.jpg' class='img-rounded img-fluid'><div class='text-right'><a href='".base_url()."assets/img/tarkibi_2/9.4.jpg' class='btn btn-sm btn-success' download><i class='fa fa-download'></i> Download</a></div></div>",
                "<div><img src='".base_url()."assets/img/tarkibi_2/9.5.jpg' class='img-rounded img-fluid'><div class='text-right'><a href='".base_url()."assets/img/tarkibi_2/9.5.jpg' class='btn btn-sm btn-success' download><i class='fa fa-download'></i> Download</a></div></div>",
                "<div><img src='".base_url()."assets/img/tarkibi_2/9.6.jpg' class='img-rounded img-fluid'><div class='text-right'><a href='".base_url()."assets/img/tarkibi_2/9.6.jpg' class='btn btn-sm btn-success' download><i class='fa fa-download'></i> Download</a></div></div>",
                "<div><audio controls><source src='".base_url()."assets/sound/tarkibi_2/9.1.mp3' type='audio/mp3'></audio><div class='text-right'><a href='".base_url()."assets/sound/tarkibi_2/9.1.mp3' class='btn btn-sm btn-success' download><i class='fa fa-download'></i> Download</a></div></div>",
                "<div><audio controls><source src='".base_url()."assets/sound/tarkibi_2/9.2.mp3' type='audio/mp3'></audio><div class='text-right'><a href='".base_url()."assets/sound/tarkibi_2/9.2.mp3' class='btn btn-sm btn-success' download><i class='fa fa-download'></i> Download</a></div></div>",
                "<div><audio controls><source src='".base_url()."assets/sound/tarkibi_2/9.3.mp3' type='audio/mp3'></audio><div class='text-right'><a href='".base_url()."assets/sound/tarkibi_2/9.3.mp3' class='btn btn-sm btn-success' download><i class='fa fa-download'></i> Download</a></div></div>",
            ];
            
            $data[10] = [
                "<div><img src='".base_url()."assets/img/tarkibi_2/10.1.jpg' class='img-rounded img-fluid'><div class='text-right'><a href='".base_url()."assets/img/tarkibi_2/10.1.jpg' class='btn btn-sm btn-success' download><i class='fa fa-download'></i> Download</a></div></div>",
                "<div><img src='".base_url()."assets/img/tarkibi_2/10.2.jpg' class='img-rounded img-fluid'><div class='text-right'><a href='".base_url()."assets/img/tarkibi_2/10.2.jpg' class='btn btn-sm btn-success' download><i class='fa fa-download'></i> Download</a></div></div>",
                "<div><img src='".base_url()."assets/img/tarkibi_2/10.3.jpg' class='img-rounded img-fluid'><div class='text-right'><a href='".base_url()."assets/img/tarkibi_2/10.3.jpg' class='btn btn-sm btn-success' download><i class='fa fa-download'></i> Download</a></div></div>",
                "<div><img src='".base_url()."assets/img/tarkibi_2/10.4.jpg' class='img-rounded img-fluid'><div class='text-right'><a href='".base_url()."assets/img/tarkibi_2/10.4.jpg' class='btn btn-sm btn-success' download><i class='fa fa-download'></i> Download</a></div></div>",
                "<div><img src='".base_url()."assets/img/tarkibi_2/10.5.jpg' class='img-rounded img-fluid'><div class='text-right'><a href='".base_url()."assets/img/tarkibi_2/10.5.jpg' class='btn btn-sm btn-success' download><i class='fa fa-download'></i> Download</a></div></div>",
                "<div><audio controls><source src='".base_url()."assets/sound/tarkibi_2/10.mp3' type='audio/mp3'></audio><div class='text-right'><a href='".base_url()."assets/sound/tarkibi_2/10.mp3' class='btn btn-sm btn-success' download><i class='fa fa-download'></i> Download</a></div></div>",
            ];
            
            $data[11] = [
                "<div><img src='".base_url()."assets/img/tarkibi_2/11.1.jpg' class='img-rounded img-fluid'><div class='text-right'><a href='".base_url()."assets/img/tarkibi_2/11.1.jpg' class='btn btn-sm btn-success' download><i class='fa fa-download'></i> Download</a></div></div>",
                "<div><img src='".base_url()."assets/img/tarkibi_2/11.2.jpg' class='img-rounded img-fluid'><div class='text-right'><a href='".base_url()."assets/img/tarkibi_2/11.2.jpg' class='btn btn-sm btn-success' download><i class='fa fa-download'></i> Download</a></div></div>",
                "<div><img src='".base_url()."assets/img/tarkibi_2/11.3.jpg' class='img-rounded img-fluid'><div class='text-right'><a href='".base_url()."assets/img/tarkibi_2/11.3.jpg' class='btn btn-sm btn-success' download><i class='fa fa-download'></i> Download</a></div></div>",
                "<div><img src='".base_url()."assets/img/tarkibi_2/11.4.jpg' class='img-rounded img-fluid'><div class='text-right'><a href='".base_url()."assets/img/tarkibi_2/11.4.jpg' class='btn btn-sm btn-success' download><i class='fa fa-download'></i> Download</a></div></div>",
                "<div><img src='".base_url()."assets/img/tarkibi_2/11.5.jpg' class='img-rounded img-fluid'><div class='text-right'><a href='".base_url()."assets/img/tarkibi_2/11.5.jpg' class='btn btn-sm btn-success' download><i class='fa fa-download'></i> Download</a></div></div>",
                "<div><img src='".base_url()."assets/img/tarkibi_2/11.6.jpg' class='img-rounded img-fluid'><div class='text-right'><a href='".base_url()."assets/img/tarkibi_2/11.6.jpg' class='btn btn-sm btn-success' download><i class='fa fa-download'></i> Download</a></div></div>",
                "<div><audio controls><source src='".base_url()."assets/sound/tarkibi_2/11.1.mp3' type='audio/mp3'></audio><div class='text-right'><a href='".base_url()."assets/sound/tarkibi_2/11.1.mp3' class='btn btn-sm btn-success' download><i class='fa fa-download'></i> Download</a></div></div>",
                "<div><audio controls><source src='".base_url()."assets/sound/tarkibi_2/11.2.mp3' type='audio/mp3'></audio><div class='text-right'><a href='".base_url()."assets/sound/tarkibi_2/11.2.mp3' class='btn btn-sm btn-success' download><i class='fa fa-download'></i> Download</a></div></div>",
                "<div><audio controls><source src='".base_url()."assets/sound/tarkibi_2/11.3.mp3' type='audio/mp3'></audio><div class='text-right'><a href='".base_url()."assets/sound/tarkibi_2/11.3.mp3' class='btn btn-sm btn-success' download><i class='fa fa-download'></i> Download</a></div></div>",
            ];

            $data[12] = [
                "<div><img src='".base_url()."assets/img/tarkibi_2/12.1.jpg' class='img-rounded img-fluid'><div class='text-right'><a href='".base_url()."assets/img/tarkibi_2/12.1.jpg' class='btn btn-sm btn-success' download><i class='fa fa-download'></i> Download</a></div></div>",
                "<div><img src='".base_url()."assets/img/tarkibi_2/12.2.jpg' class='img-rounded img-fluid'><div class='text-right'><a href='".base_url()."assets/img/tarkibi_2/12.2.jpg' class='btn btn-sm btn-success' download><i class='fa fa-download'></i> Download</a></div></div>",
                "<div><img src='".base_url()."assets/img/tarkibi_2/12.3.jpg' class='img-rounded img-fluid'><div class='text-right'><a href='".base_url()."assets/img/tarkibi_2/12.3.jpg' class='btn btn-sm btn-success' download><i class='fa fa-download'></i> Download</a></div></div>",
                "<div><audio controls><source src='".base_url()."assets/sound/tarkibi_2/12.mp3' type='audio/mp3'></audio><div class='text-right'><a href='".base_url()."assets/sound/tarkibi_2/12.mp3' class='btn btn-sm btn-success' download><i class='fa fa-download'></i> Download</a></div></div>",
            ];
            
            $data[13] = [
                "<div><img src='".base_url()."assets/img/tarkibi_2/13.1.jpg' class='img-rounded img-fluid'><div class='text-right'><a href='".base_url()."assets/img/tarkibi_2/13.1.jpg' class='btn btn-sm btn-success' download><i class='fa fa-download'></i> Download</a></div></div>",
                "<div><img src='".base_url()."assets/img/tarkibi_2/13.2.jpg' class='img-rounded img-fluid'><div class='text-right'><a href='".base_url()."assets/img/tarkibi_2/13.2.jpg' class='btn btn-sm btn-success' download><i class='fa fa-download'></i> Download</a></div></div>",
                "<div><img src='".base_url()."assets/img/tarkibi_2/13.3.jpg' class='img-rounded img-fluid'><div class='text-right'><a href='".base_url()."assets/img/tarkibi_2/13.3.jpg' class='btn btn-sm btn-success' download><i class='fa fa-download'></i> Download</a></div></div>",
                "<div><img src='".base_url()."assets/img/tarkibi_2/13.4.jpg' class='img-rounded img-fluid'><div class='text-right'><a href='".base_url()."assets/img/tarkibi_2/13.4.jpg' class='btn btn-sm btn-success' download><i class='fa fa-download'></i> Download</a></div></div>",
                "<div><img src='".base_url()."assets/img/tarkibi_2/13.5.jpg' class='img-rounded img-fluid'><div class='text-right'><a href='".base_url()."assets/img/tarkibi_2/13.5.jpg' class='btn btn-sm btn-success' download><i class='fa fa-download'></i> Download</a></div></div>",
                "<div><audio controls><source src='".base_url()."assets/sound/tarkibi_2/13.1.mp3' type='audio/mp3'></audio><div class='text-right'><a href='".base_url()."assets/sound/tarkibi_2/13.1.mp3' class='btn btn-sm btn-success' download><i class='fa fa-download'></i> Download</a></div></div>",
                "<div><audio controls><source src='".base_url()."assets/sound/tarkibi_2/13.2.mp3' type='audio/mp3'></audio><div class='text-right'><a href='".base_url()."assets/sound/tarkibi_2/13.2.mp3' class='btn btn-sm btn-success' download><i class='fa fa-download'></i> Download</a></div></div>",
            ];
            
            $data[14] = [
                "<div><img src='".base_url()."assets/img/tarkibi_2/14.1.jpg' class='img-rounded img-fluid'><div class='text-right'><a href='".base_url()."assets/img/tarkibi_2/14.1.jpg' class='btn btn-sm btn-success' download><i class='fa fa-download'></i> Download</a></div></div>",
                "<div><img src='".base_url()."assets/img/tarkibi_2/14.2.jpg' class='img-rounded img-fluid'><div class='text-right'><a href='".base_url()."assets/img/tarkibi_2/14.2.jpg' class='btn btn-sm btn-success' download><i class='fa fa-download'></i> Download</a></div></div>",
                "<div><img src='".base_url()."assets/img/tarkibi_2/14.3.jpg' class='img-rounded img-fluid'><div class='text-right'><a href='".base_url()."assets/img/tarkibi_2/14.3.jpg' class='btn btn-sm btn-success' download><i class='fa fa-download'></i> Download</a></div></div>",
                "<div><img src='".base_url()."assets/img/tarkibi_2/14.4.jpg' class='img-rounded img-fluid'><div class='text-right'><a href='".base_url()."assets/img/tarkibi_2/14.4.jpg' class='btn btn-sm btn-success' download><i class='fa fa-download'></i> Download</a></div></div>",
                "<div><img src='".base_url()."assets/img/tarkibi_2/14.5.jpg' class='img-rounded img-fluid'><div class='text-right'><a href='".base_url()."assets/img/tarkibi_2/14.5.jpg' class='btn btn-sm btn-success' download><i class='fa fa-download'></i> Download</a></div></div>",
                "<div><audio controls><source src='".base_url()."assets/sound/tarkibi_2/14.1.mp3' type='audio/mp3'></audio><div class='text-right'><a href='".base_url()."assets/sound/tarkibi_2/14.1.mp3' class='btn btn-sm btn-success' download><i class='fa fa-download'></i> Download</a></div></div>",
                "<div><audio controls><source src='".base_url()."assets/sound/tarkibi_2/14.2.mp3' type='audio/mp3'></audio><div class='text-right'><a href='".base_url()."assets/sound/tarkibi_2/14.2.mp3' class='btn btn-sm btn-success' download><i class='fa fa-download'></i> Download</a></div></div>",
                "<div><audio controls><source src='".base_url()."assets/sound/tarkibi_2/14.3.mp3' type='audio/mp3'></audio><div class='text-right'><a href='".base_url()."assets/sound/tarkibi_2/14.3.mp3' class='btn btn-sm btn-success' download><i class='fa fa-download'></i> Download</a></div></div>",
            ];
            
            $data[15] = [
                "<div><img src='".base_url()."assets/img/tarkibi_2/15.1.jpg' class='img-rounded img-fluid'><div class='text-right'><a href='".base_url()."assets/img/tarkibi_2/15.1.jpg' class='btn btn-sm btn-success' download><i class='fa fa-download'></i> Download</a></div></div>",
                "<div><img src='".base_url()."assets/img/tarkibi_2/15.2.jpg' class='img-rounded img-fluid'><div class='text-right'><a href='".base_url()."assets/img/tarkibi_2/15.2.jpg' class='btn btn-sm btn-success' download><i class='fa fa-download'></i> Download</a></div></div>",
                "<div><img src='".base_url()."assets/img/tarkibi_2/15.3.jpg' class='img-rounded img-fluid'><div class='text-right'><a href='".base_url()."assets/img/tarkibi_2/15.3.jpg' class='btn btn-sm btn-success' download><i class='fa fa-download'></i> Download</a></div></div>",
                "<div><audio controls><source src='".base_url()."assets/sound/tarkibi_2/15.mp3' type='audio/mp3'></audio><div class='text-right'><a href='".base_url()."assets/sound/tarkibi_2/15.mp3' class='btn btn-sm btn-success' download><i class='fa fa-download'></i> Download</a></div></div>",
            ];
            
            $data[16] = [
                "<div><img src='".base_url()."assets/img/tarkibi_2/16.1.jpg' class='img-rounded img-fluid'><div class='text-right'><a href='".base_url()."assets/img/tarkibi_2/16.1.jpg' class='btn btn-sm btn-success' download><i class='fa fa-download'></i> Download</a></div></div>",
                "<div><img src='".base_url()."assets/img/tarkibi_2/16.2.jpg' class='img-rounded img-fluid'><div class='text-right'><a href='".base_url()."assets/img/tarkibi_2/16.2.jpg' class='btn btn-sm btn-success' download><i class='fa fa-download'></i> Download</a></div></div>",
                "<div><img src='".base_url()."assets/img/tarkibi_2/16.3.jpg' class='img-rounded img-fluid'><div class='text-right'><a href='".base_url()."assets/img/tarkibi_2/16.3.jpg' class='btn btn-sm btn-success' download><i class='fa fa-download'></i> Download</a></div></div>",
                "<div><audio controls><source src='".base_url()."assets/sound/tarkibi_2/16.1.mp3' type='audio/mp3'></audio><div class='text-right'><a href='".base_url()."assets/sound/tarkibi_2/16.1.mp3' class='btn btn-sm btn-success' download><i class='fa fa-download'></i> Download</a></div></div>",
                "<div><audio controls><source src='".base_url()."assets/sound/tarkibi_2/16.2.mp3' type='audio/mp3'></audio><div class='text-right'><a href='".base_url()."assets/sound/tarkibi_2/16.2.mp3' class='btn btn-sm btn-success' download><i class='fa fa-download'></i> Download</a></div></div>",
            ];
            
            $data[17] = [
                "<div><img src='".base_url()."assets/img/tarkibi_2/17.1.jpg' class='img-rounded img-fluid'><div class='text-right'><a href='".base_url()."assets/img/tarkibi_2/17.1.jpg' class='btn btn-sm btn-success' download><i class='fa fa-download'></i> Download</a></div></div>",
                "<div><img src='".base_url()."assets/img/tarkibi_2/17.2.jpg' class='img-rounded img-fluid'><div class='text-right'><a href='".base_url()."assets/img/tarkibi_2/17.2.jpg' class='btn btn-sm btn-success' download><i class='fa fa-download'></i> Download</a></div></div>",
                "<div><img src='".base_url()."assets/img/tarkibi_2/17.3.jpg' class='img-rounded img-fluid'><div class='text-right'><a href='".base_url()."assets/img/tarkibi_2/17.3.jpg' class='btn btn-sm btn-success' download><i class='fa fa-download'></i> Download</a></div></div>",
                "<div><img src='".base_url()."assets/img/tarkibi_2/17.4.jpg' class='img-rounded img-fluid'><div class='text-right'><a href='".base_url()."assets/img/tarkibi_2/17.4.jpg' class='btn btn-sm btn-success' download><i class='fa fa-download'></i> Download</a></div></div>",
                "<div><img src='".base_url()."assets/img/tarkibi_2/17.5.jpg' class='img-rounded img-fluid'><div class='text-right'><a href='".base_url()."assets/img/tarkibi_2/17.5.jpg' class='btn btn-sm btn-success' download><i class='fa fa-download'></i> Download</a></div></div>",
                "<div><audio controls><source src='".base_url()."assets/sound/tarkibi_2/17.1.mp3' type='audio/mp3'></audio><div class='text-right'><a href='".base_url()."assets/sound/tarkibi_2/17.1.mp3' class='btn btn-sm btn-success' download><i class='fa fa-download'></i> Download</a></div></div>",
                "<div><audio controls><source src='".base_url()."assets/sound/tarkibi_2/17.2.mp3' type='audio/mp3'></audio><div class='text-right'><a href='".base_url()."assets/sound/tarkibi_2/17.2.mp3' class='btn btn-sm btn-success' download><i class='fa fa-download'></i> Download</a></div></div>",
                "<div><audio controls><source src='".base_url()."assets/sound/tarkibi_2/17.3.mp3' type='audio/mp3'></audio><div class='text-right'><a href='".base_url()."assets/sound/tarkibi_2/17.3.mp3' class='btn btn-sm btn-success' download><i class='fa fa-download'></i> Download</a></div></div>",
            ];
            
            $data[18] = [
                "<div><img src='".base_url()."assets/img/tarkibi_2/18.1.jpg' class='img-rounded img-fluid'><div class='text-right'><a href='".base_url()."assets/img/tarkibi_2/18.1.jpg' class='btn btn-sm btn-success' download><i class='fa fa-download'></i> Download</a></div></div>",
                "<div><img src='".base_url()."assets/img/tarkibi_2/18.2.jpg' class='img-rounded img-fluid'><div class='text-right'><a href='".base_url()."assets/img/tarkibi_2/18.2.jpg' class='btn btn-sm btn-success' download><i class='fa fa-download'></i> Download</a></div></div>",
                "<div><img src='".base_url()."assets/img/tarkibi_2/18.3.jpg' class='img-rounded img-fluid'><div class='text-right'><a href='".base_url()."assets/img/tarkibi_2/18.3.jpg' class='btn btn-sm btn-success' download><i class='fa fa-download'></i> Download</a></div></div>",
                "<div><audio controls><source src='".base_url()."assets/sound/tarkibi_2/18.1.mp3' type='audio/mp3'></audio><div class='text-right'><a href='".base_url()."assets/sound/tarkibi_2/18.1.mp3' class='btn btn-sm btn-success' download><i class='fa fa-download'></i> Download</a></div></div>",
                "<div><audio controls><source src='".base_url()."assets/sound/tarkibi_2/18.2.mp3' type='audio/mp3'></audio><div class='text-right'><a href='".base_url()."assets/sound/tarkibi_2/18.2.mp3' class='btn btn-sm btn-success' download><i class='fa fa-download'></i> Download</a></div></div>",
            ];
            
            $data[19] = [
                "<div><img src='".base_url()."assets/img/tarkibi_2/19.1.jpg' class='img-rounded img-fluid'><div class='text-right'><a href='".base_url()."assets/img/tarkibi_2/19.1.jpg' class='btn btn-sm btn-success' download><i class='fa fa-download'></i> Download</a></div></div>",
                "<div><img src='".base_url()."assets/img/tarkibi_2/19.2.jpg' class='img-rounded img-fluid'><div class='text-right'><a href='".base_url()."assets/img/tarkibi_2/19.2.jpg' class='btn btn-sm btn-success' download><i class='fa fa-download'></i> Download</a></div></div>",
                "<div><img src='".base_url()."assets/img/tarkibi_2/19.3.jpg' class='img-rounded img-fluid'><div class='text-right'><a href='".base_url()."assets/img/tarkibi_2/19.3.jpg' class='btn btn-sm btn-success' download><i class='fa fa-download'></i> Download</a></div></div>",
                "<div><audio controls><source src='".base_url()."assets/sound/tarkibi_2/19.mp3' type='audio/mp3'></audio><div class='text-right'><a href='".base_url()."assets/sound/tarkibi_2/19.mp3' class='btn btn-sm btn-success' download><i class='fa fa-download'></i> Download</a></div></div>",
            ];
            
            $data[20] = [
                "<div><img src='".base_url()."assets/img/tarkibi_2/20.1.jpg' class='img-rounded img-fluid'><div class='text-right'><a href='".base_url()."assets/img/tarkibi_2/20.1.jpg' class='btn btn-sm btn-success' download><i class='fa fa-download'></i> Download</a></div></div>",
                "<div><img src='".base_url()."assets/img/tarkibi_2/20.2.jpg' class='img-rounded img-fluid'><div class='text-right'><a href='".base_url()."assets/img/tarkibi_2/20.2.jpg' class='btn btn-sm btn-success' download><i class='fa fa-download'></i> Download</a></div></div>",
                "<div><img src='".base_url()."assets/img/tarkibi_2/20.3.jpg' class='img-rounded img-fluid'><div class='text-right'><a href='".base_url()."assets/img/tarkibi_2/20.3.jpg' class='btn btn-sm btn-success' download><i class='fa fa-download'></i> Download</a></div></div>",
                "<div><img src='".base_url()."assets/img/tarkibi_2/20.4.jpg' class='img-rounded img-fluid'><div class='text-right'><a href='".base_url()."assets/img/tarkibi_2/20.4.jpg' class='btn btn-sm btn-success' download><i class='fa fa-download'></i> Download</a></div></div>",
                "<div><img src='".base_url()."assets/img/tarkibi_2/20.5.jpg' class='img-rounded img-fluid'><div class='text-right'><a href='".base_url()."assets/img/tarkibi_2/20.5.jpg' class='btn btn-sm btn-success' download><i class='fa fa-download'></i> Download</a></div></div>",
                "<div><audio controls><source src='".base_url()."assets/sound/tarkibi_2/20.1.mp3' type='audio/mp3'></audio><div class='text-right'><a href='".base_url()."assets/sound/tarkibi_2/20.1.mp3' class='btn btn-sm btn-success' download><i class='fa fa-download'></i> Download</a></div></div>",
                "<div><audio controls><source src='".base_url()."assets/sound/tarkibi_2/20.2.mp3' type='audio/mp3'></audio><div class='text-right'><a href='".base_url()."assets/sound/tarkibi_2/20.2.mp3' class='btn btn-sm btn-success' download><i class='fa fa-download'></i> Download</a></div></div>",
                "<div><audio controls><source src='".base_url()."assets/sound/tarkibi_2/20.3.mp3' type='audio/mp3'></audio><div class='text-right'><a href='".base_url()."assets/sound/tarkibi_2/20.3.mp3' class='btn btn-sm btn-success' download><i class='fa fa-download'></i> Download</a></div></div>",
            ];
            
            return $data[$id];
        }

        public function latihan($id){
            $data[1] = [];
            $data[2] = [
                "mufrodat" => $this->fiil_mudhori(),
                "latihan" => "latihan ketik",
                "petunjuk" => "Tentukan bentuk fiil mudhori sesuai dengan dhomir berikut.",
            ];
            $data[3] = [
                "mufrodat" => $this->latihan_pertemuan_3(),
                "latihan" => "latihan pg",
                "petunjuk" => "Tentukan apakah kata berikut ini termasuk mu'rob atau mabni!",
            ];
            $data[4] = [
                "mufrodat" => $this->latihan_pertemuan_4(),
                "latihan" => "latihan ketik",
                "petunjuk" => "Ketiklah bentuk kata berikut ketika dalam kedudukan irob yang ada di dalam kurung!",
            ];
            $data[5] = [
                "mufrodat" => $this->latihan_pertemuan_4(),
                "latihan" => "latihan ketik",
                "petunjuk" => "Ketiklah bentuk kata berikut ketika dalam kedudukan irob yang ada di dalam kurung!",
            ];

            return $data[$id];
        }

        public function halaman($id){
            $hal[1] = "2";
            $hal[2] = "3";
            $hal[3] = "4";
            $hal[4] = "2";
            $hal[5] = "3";
            $hal[6] = "4";
            $hal[7] = "2";
            $hal[8] = "2";
            $hal[9] = "3";
            $hal[10] = "2";
            $hal[11] = "3";
            $hal[12] = "2";
            $hal[13] = "4";
            $hal[14] = "3";
            $hal[15] = "2";
            $hal[16] = "2";
            $hal[17] = "2";
            $hal[18] = "4";
            $hal[19] = "4";
            $hal[20] = "4";
            $hal[21] = "4";
            $hal[22] = "2";
            $hal[23] = "2";
            $hal[24] = "2";

            return $hal[$id];
        }

        public function fiil_mudhori(){
            $data = [
                [
                    "latihan" => 1,
                    "soal" => "هُمَا (مذكر) + يَضْرِبُ",
                    "jawaban" => "يَضْرِبَانِ",
                    "kata" => "يَضْرِبُ",
                    "huruf" => array_unique(array_diff($this->huruf($this->huruf_fiil_mudhori("يَضْرِبُ")), ["_"])),
                ],
                $this->kata_fiil_mudhori("1", "هُمْ + يَضْرِبُ", "يَضْرِبُ", "يَضْرِبُوْنَ"),
                $this->kata_fiil_mudhori("1", "هُمَا (مؤنث) + يَضْرِبُ", "يَضْرِبُ", "تَضْرِبَانِ"),
                $this->kata_fiil_mudhori("1", "أَنْتُمَا + يَضْرِبُ", "يَضْرِبُ", "تَضْرِبَانِ"),
                $this->kata_fiil_mudhori("1", "أَنْتُمْ + يَضْرِبُ", "يَضْرِبُ", "تَضْرِبُوْنَ"),
                $this->kata_fiil_mudhori("1", "أَنْتِ + يَضْرِبُ", "يَضْرِبُ", "تَضْرِبِيْنَ"),
            ];

            return $data;
        }

        public function kata_fiil_mudhori($latihan, $soal, $kata, $jawaban){
            $data = [
                "latihan" => $latihan,
                "soal" => $soal,
                "jawaban" => $jawaban,
                "kata" => $this->kata_mudhori($kata),
                "huruf" => array_unique(array_diff($this->huruf($this->huruf_fiil_mudhori($kata)), ["_"])),
            ];

            return $data;
        }
        
        public function kata_mudhori($kata){
            $huwa = $kata;
            $huma_l = substr($kata, 0, -2) . "َانِ";
            $hum = substr($kata, 0, -2) . "ُوْنَ";
            $hiya = "تَ" . substr($kata, 4);
            $huma_p = "تَ" . substr($kata, 4, -2) . "َانِ";
            $hunna = substr($kata, 0, -2) . "ْنَ";
            $anta = "تَ" . substr($kata, 4);
            $antuma = "تَ" . substr($kata, 4, -2) . "َانِ";
            $antum = "تَ" . substr($kata, 4, -2) . "ُوْنَ";
            $anti = "تَ" . substr($kata, 4, -2) . "ِيْنَ";
            $antunna = "تَ" . substr($kata, 4, -2) . "ْنَ";
            $ana = "أَ" . substr($kata, 4);
            $nahnu = "نَ" . substr($kata, 4);

            // $data[] = $huwa;
            $data[] = $huma_l;
            $data[] = $hum;
            // $data[] = $hiya;
            $data[] = $huma_p;
            // $data[] = $hunna;
            // $data[] = $anta;
            $data[] = $antuma;
            $data[] = $antum;
            $data[] = $anti;
            // $data[] = $antunna;
            // $data[] = $ana;
            // $data[] = $nahnu;

            return $data;
        }

        public function huruf_fiil_mudhori($kata){
            $huwa = $kata;
            $huma_l = substr($kata, 0, -2) . "َانِ";
            $hum = substr($kata, 0, -2) . "ُوْنَ";
            $hiya = "تَ" . substr($kata, 4);
            $huma_p = "تَ" . substr($kata, 4, -2) . "َانِ";
            $hunna = substr($kata, 0, -2) . "ْنَ";
            $anta = "تَ" . substr($kata, 4);
            $antuma = "تَ" . substr($kata, 4, -2) . "َانِ";
            $antum = "تَ" . substr($kata, 4, -2) . "ُوْنَ";
            $anti = "تَ" . substr($kata, 4, -2) . "ِيْنَ";
            $antunna = "تَ" . substr($kata, 4, -2) . "ْنَ";
            $ana = "أَ" . substr($kata, 4);
            $nahnu = "نَ" . substr($kata, 4);

            // $data = $huwa . " " . $huma_l . " " . $hum . " " . $hiya . " " . $huma_p . " " . $hunna . " " . $anta . " " . $antuma . " " . $antum . " " . $anti . " " . $antunna . " " . $ana . " " . $nahnu;
            $data = $huma_l . " " . $hum . " " . $huma_p . " " . $antuma . " " . $antum . " " . $anti;

            return $data;
        }

        public function huruf($kata, $cek = ""){
            $i = 0;
            $huruf = [];
            while ($kata != ""){
                if(substr($kata, -1) == "-"){
                    $huruf[$i] = substr($kata, -1);
                    $kata = substr($kata, 0, -1);
                } else if(substr($kata, -1) == " "){
                    $huruf[$i] = " ";
                    $kata = substr($kata, 0, -1);
                } else if(substr($kata, -1) == "/"){
                    $huruf[$i] = substr($kata, -1);
                    $kata = substr($kata, 0, -1);
                } else if (substr($kata, -8) == "اَلْ") {
                    $huruf[$i] = substr($kata, -8);
                    $kata = substr($kata, 0, -8);
                } else if (substr($kata, -6) == "اَل" || substr($kata, -6) == "الْ" ){
                    $huruf[$i] = substr($kata, -6);
                    $kata = substr($kata, 0, -6);
                } else if (substr($kata, -4) == "ال" ){
                    $huruf[$i] = substr($kata, -4);
                    $kata = substr($kata, 0, -4);
                } else if (substr($kata, -2, 2) == "ّ" || substr($kata, -4, 2) == "ّ"){
                    $huruf[$i] = substr($kata, -6);
                    $kata = substr($kata, 0, -6);
                } else if(substr($kata, -2) == "ا" || substr($kata, -2) == "ى" || substr($kata, -2) == "ج" || substr($kata, -2) == "-" || substr($kata, -2) == "_" || substr($kata, -2) == "ل" || substr($kata, -2) == "آ" || substr($kata, -2) == "ي" || substr($kata, -2) == "و"){
                    $huruf[$i] = substr($kata, -2);
                    $kata = substr($kata, 0, -2);
                } else {
                    $huruf[$i] = substr($kata, -4);
                    $kata = substr($kata, 0, -4);
                }

                $i++;
            }

            if($cek != ""){
                $huruf[$i] = $cek;
            }
            
            return $huruf;
        }

        public function latihan_pertemuan_3(){
            $data = [
                [
                    "soal" => "قَلَمٌ",
                    "jawaban" => "معرب"
                ],
                [
                    "soal" => "سَبُّوْرَةٌ",
                    "jawaban" => "معرب"
                ],
                [
                    "soal" => "ضَرَبْتُمَا",
                    "jawaban" => "مبني"
                ],
                [
                    "soal" => "الَّذِيْنَ",
                    "jawaban" => "مبني"
                ],
                [
                    "soal" => "عَنْ",
                    "jawaban" => "مبني"
                ],
                [
                    "soal" => "مُجْرِمُوْنَ",
                    "jawaban" => "معرب"
                ],
                [
                    "soal" => "تِلْمِيْذَانِ",
                    "jawaban" => "معرب"
                ],
                [
                    "soal" => "يَقُوْمَانِ",
                    "jawaban" => "معرب"
                ],
                [
                    "soal" => "أَسْتَعِيْرُ",
                    "jawaban" => "معرب"
                ],
                [
                    "soal" => "ذَلِكَ",
                    "jawaban" => "مبني"
                ],
                [
                    "soal" => "أَنْتُمْ",
                    "jawaban" => "مبني"
                ],
                [
                    "soal" => "حَاسُوْبٌ",
                    "jawaban" => "معرب"
                ],
                [
                    "soal" => "أَمَامَ",
                    "jawaban" => "مبني و معرب"
                ],
                [
                    "soal" => "خَلْفَ",
                    "jawaban" => "مبني و معرب"
                ],
                [
                    "soal" => "عَلَى",
                    "jawaban" => "مبني"
                ],
                [
                    "soal" => "مُحَمَّدٌ",
                    "jawaban" => "معرب"
                ]
            ];
            
            return $data;
        }

        public function latihan_pertemuan_4(){
            $data = [
                [
                    "soal" => "صُوْرَةٍ (رَفَعْ) <span style='color: transparent;'>َ</span>",
                    "jawaban" => "صُوْرَةٌ",
                    "huruf" => array_unique($this->huruf("صُوْرَةٌصُوْرَةًصُوْرَةٍ")),
                ],
                [
                    "soal" => "صُوْرَةٌ (نَصَبْ) <span style='color: transparent;'>َ</span>",
                    "jawaban" => "صُوْرَةً",
                    "huruf" => array_unique($this->huruf("صُوْرَةٌصُوْرَةًصُوْرَةٍ")),
                ],
                [
                    "soal" => "صُوْرَةً (جَرْ) <span style='color: transparent;'>َ</span>",
                    "jawaban" => "صُوْرَةٍ",
                    "huruf" => array_unique($this->huruf("صُوْرَةٌصُوْرَةًصُوْرَةٍ")),
                ],
                [
                    "soal" => "مَدْرَسَتَيْنِ (رَفَعْ) <span style='color: transparent;'>َ</span>",
                    "jawaban" => "مَدْرَسَتَانِ",
                    "huruf" => array_unique($this->huruf("مَدْرَسَتَيْنِمَدْرَسَتَانِ")),
                ],
                [
                    "soal" => "مَدْرَسَتَانِ (نَصَبْ) <span style='color: transparent;'>َ</span>",
                    "jawaban" => "مَدْرَسَتَيْنِ",
                    "huruf" => array_unique($this->huruf("مَدْرَسَتَيْنِمَدْرَسَتَانِ")),
                ],
                [
                    "soal" => "مَدْرَسَتَانِ (جَرْ) <span style='color: transparent;'>َ</span>",
                    "jawaban" => "مَدْرَسَتَيْنِ",
                    "huruf" => array_unique($this->huruf("مَدْرَسَتَيْنِمَدْرَسَتَانِ")),
                ],
                [
                    "soal" => "كَافِرِيْنَ (رَفَعْ) <span style='color: transparent;'>َ</span>",
                    "jawaban" => "كَافِرُوْنَ",
                    "huruf" => array_unique($this->huruf("كَافِرِيْنَكَافِرُوْنَ")),
                ],
                [
                    "soal" => "كَافِرُوْنَ (نَصَبْ) <span style='color: transparent;'>َ</span>",
                    "jawaban" => "كَافِرِيْنَ",
                    "huruf" => array_unique($this->huruf("كَافِرِيْنَكَافِرُوْنَ")),
                ],
                [
                    "soal" => "كَافِرُوْنَ (جَرْ) <span style='color: transparent;'>َ</span>",
                    "jawaban" => "كَافِرِيْنَ",
                    "huruf" => array_unique($this->huruf("كَافِرِيْنَكَافِرُوْنَ")),
                ],
                [
                    "soal" => "مُؤْمِنَاتٍ (رَفَعْ) <span style='color: transparent;'>َ</span>",
                    "jawaban" => "مُؤْمِنَاتٌ",
                    "huruf" => array_unique($this->huruf("مُؤْمِنَاتٌمُؤْمِنَاتٍ")),
                ],
                [
                    "soal" => "مُؤْمِنَاتٌ (نَصَبْ) <span style='color: transparent;'>َ</span>",
                    "jawaban" => "مُؤْمِنَاتٍ",
                    "huruf" => array_unique($this->huruf("مُؤْمِنَاتٌمُؤْمِنَاتٍ")),
                ],
                [
                    "soal" => "مُؤْمِنَاتٌ (جَرْ) <span style='color: transparent;'>َ</span>",
                    "jawaban" => "مُؤْمِنَاتٍ",
                    "huruf" => array_unique($this->huruf("مُؤْمِنَاتٌمُؤْمِنَاتٍ")),
                ],
                [
                    "soal" => "أَبِيْهَا (رَفَعْ) <span style='color: transparent;'>َ</span>",
                    "jawaban" => "أَبُوْهَا",
                    "huruf" => array_unique($this->huruf("أَبُوْهَاأَبِيْهَاأَبَاهَا")),
                ],
                [
                    "soal" => "أَبُوْهَا (نَصَبْ) <span style='color: transparent;'>َ</span>",
                    "jawaban" => "أَبَاهَا",
                    "huruf" => array_unique($this->huruf("أَبُوْهَاأَبِيْهَاأَبَاهَا")),
                ],
                [
                    "soal" => "أَبَاهَا (جَرْ) <span style='color: transparent;'>َ</span>",
                    "jawaban" => "أَبِيْهَا",
                    "huruf" => array_unique($this->huruf("أَبُوْهَاأَبِيْهَاأَبَاهَا")),
                ],
                [
                    "soal" => "قَلَمَيْنِ (رَفَعْ) <span style='color: transparent;'>َ</span>",
                    "jawaban" => "قَلَمَانِ",
                    "huruf" => array_unique($this->huruf("قَلَمَيْنِقَلَمَانِ")),
                ],
                [
                    "soal" => "قَلَمَانِ (نَصَبْ) <span style='color: transparent;'>َ</span>",
                    "jawaban" => "قَلَمَيْنِ",
                    "huruf" => array_unique($this->huruf("قَلَمَيْنِقَلَمَانِ")),
                ],
                [
                    "soal" => "قَلَمَانِ (جَرْ) <span style='color: transparent;'>َ</span>",
                    "jawaban" => "قَلَمَيْنِ",
                    "huruf" => array_unique($this->huruf("قَلَمَيْنِقَلَمَانِ")),
                ],
                [
                    "soal" => "مُسْتَشْفًى (رَفَعْ) <span style='color: transparent;'>َ</span>",
                    "jawaban" => "مُسْتَشْفًى",
                    "huruf" => array_unique($this->huruf("مُسْتَشْفًىمُسْتَشْفِيَ")),
                ],
                [
                    "soal" => "مُسْتَشْفًى (نَصَبْ) <span style='color: transparent;'>َ</span>",
                    "jawaban" => "مُسْتَشْفِيَ",
                    "huruf" => array_unique($this->huruf("مُسْتَشْفًىمُسْتَشْفِيَ")),
                ],
                [
                    "soal" => "مُسْتَشْفِيَ (جَرْ) <span style='color: transparent;'>َ</span>",
                    "jawaban" => "مُسْتَشْفًى",
                    "huruf" => array_unique($this->huruf("مُسْتَشْفًىمُسْتَشْفِيَ")),
                ],
                [
                    "soal" => "مَكَاتِبَ (رَفَعْ) <span style='color: transparent;'>َ</span>",
                    "jawaban" => "مَكَاتِبُ",
                    "huruf" => array_unique($this->huruf("مَكَاتِبُمَكَاتِبَ")),
                ],
                [
                    "soal" => "مَكَاتِبُ (نَصَبْ) <span style='color: transparent;'>َ</span>",
                    "jawaban" => "مَكَاتِبَ",
                    "huruf" => array_unique($this->huruf("مَكَاتِبُمَكَاتِبَ")),
                ],
                [
                    "soal" => "مَكَاتِبُ (جَرْ) <span style='color: transparent;'>َ</span>",
                    "jawaban" => "مَكَاتِبَ",
                    "huruf" => array_unique($this->huruf("مَكَاتِبُمَكَاتِبَ")),
                ],
                [
                    "soal" => "مُدَرِّسِيْنَ (رَفَعْ) <span style='color: transparent;'>َ</span>",
                    "jawaban" => "مُدَرِّسُوْنَ",
                    "huruf" => array_unique($this->huruf("مُدَرِّسُوْنَمُدَرِّسِيْنَ")),
                ],
                [
                    "soal" => "مُدَرِّسُوْنَ (نَصَبْ) <span style='color: transparent;'>َ</span>",
                    "jawaban" => "مُدَرِّسِيْنَ",
                    "huruf" => array_unique($this->huruf("مُدَرِّسُوْنَمُدَرِّسِيْنَ")),
                ],
                [
                    "soal" => "مُدَرِّسُوْنَ (جَرْ) <span style='color: transparent;'>َ</span>",
                    "jawaban" => "مُدَرِّسِيْنَ",
                    "huruf" => array_unique($this->huruf("مُدَرِّسُوْنَمُدَرِّسِيْنَ")),
                ],
            ];

            return $data;
        }

        public function latihan_pertemuan_5(){
            $data[1] = [

            ];
        }

        public function add_latihan_isian(){
            $id_kelas = $this->input->post("id_kelas");
            $pertemuan = $this->input->post("pertemuan");
            $text = $this->input->post("text");
            $id_user = $this->session->userdata('id_user');

            $cek = $this->Admin_model->get_one("latihan_isian_peserta", ["id_kelas" => $id_kelas, "id_user" => $id_user, "pertemuan" => $pertemuan]);
            if(!$cek){
                $data = [
                    "id_kelas" => $id_kelas,
                    "pertemuan" => $pertemuan,
                    "jawaban" => $text,
                    "id_user" => $id_user,
                ];
                
                $this->Admin_model->add_data("latihan_isian_peserta", $data);
            } else {
                $data = [
                    "id_kelas" => $id_kelas,
                    "pertemuan" => $pertemuan,
                    "jawaban" => $text,
                    "id_user" => $id_user,
                ];
                
                $this->Admin_model->edit_data("latihan_isian_peserta", ["id_kelas" => $id_kelas, "id_user" => $id_user, "pertemuan" => $pertemuan], $data);
            }

            return 1;
        }
    }