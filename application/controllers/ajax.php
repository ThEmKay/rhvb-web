<?php

class Ajax extends CI_Controller
{
    public function item($iItemId)
    {
        $this->load->library('parser');
        
        if(intval($iItemId) > 0)
        {
            echo utf8_encode($this->parser->parse('item_tpl', array('item' => $iItemId), true));
        }
        else
        {
            echo "Fehler!";
        }
    }
}