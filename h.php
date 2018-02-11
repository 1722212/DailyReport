<?php
/** HTMLでのエスケープ処理をする関数 **/
function h($var){
    
    if(is_array($var)){
        return array_map('h', $var);        
    }else{
        return htmlspecialchars($var, ENT_QUOTES, 'UTF-8');
    }
}

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

