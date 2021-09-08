<?php
// it need to be common response
class fmlm_response{
    private $myresponse = [];
    public $data = [];
    public $reponse_status = 100;
    public $server_msg = [];

    function build_response(){
       return $this->myresponse = [
            'status' => $this->reponse_status,
            'server_msg' => $this->server_msg,
            'data' => $this->data,
           'time' => time()
        ];
    }

    function print_response($jsondata = ''){
        header('Content-Type: application/json');
        if($jsondata =='')
        {
          $response =   $this->build_response();
            echo json_encode($response);
        }else{
            echo $jsondata;
        }
    }
}
