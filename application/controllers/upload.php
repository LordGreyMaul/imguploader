<?php

class Upload extends CI_Controller {

    function Upload(){
        parent::__construct();
        // $this->load->helper('form');
    }

    function index(){
        $this->load->view('upload_form');
    }
    function doUpload() {
        $config['upload_path'] = 'uploads/';
        $config['allowed_types'] = 'gif|jpg|jpeg|png';
        $config['max_size'] = '1000';
        $config['max_width'] = '1920';
        $config['max_height'] = '1280';

        $this->load->library('upload', $config);

        if(!$this->upload->do_upload()) echo $this->upload->display_errors();
        else {
            $fInfo = $this->upload->data();
            $this->_createThumbnail($fInfo['file_name']);

            $data['uploadInfo']= $fInfo;
            $data['thumbnail_name'] = $fInfo['raw_name'] . '_thumb' . $fInfo['file_ext'];
            $this->load->view('upload_success', $data);
        }
    }
    function _createThumbnail($fileName) {
        $config['image_library'] = 'gd2';
        $config['source_image'] = 'uploads/' . $fileName;
        $config['create_thumb'] = TRUE;
        $config['maintain_ratio'] = TRUE;
        $config['width'] = 75;
        $config['height'] = 75;

        $this->load->library('image_lib' , $config);
        if(!$this->image_lib->resize()) echo $this->image_lib->display_errors();
    }
}
?>