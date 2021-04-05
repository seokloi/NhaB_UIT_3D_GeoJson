<?php

use App\Models\Node;

if(!function_exists('get_body_test')){
    function get_body_test(){
        return \App\Models\Body::find('1AB1');

    }
}

if(!function_exists('get_face_test')){
    function get_face_test(){
        return \App\Models\Face::find('face');
    }
}

if(!function_exists('get_nodes')){
    function get_nodes(){
        return Node::all();
    }
}
