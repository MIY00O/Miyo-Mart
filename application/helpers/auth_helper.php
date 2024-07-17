<?php

function is_logged_in()
{
    $CI = &get_instance();

    if (!$CI->session->userdata('username')) :
        $CI->session->set_flashdata('danger', 'Jika ingin mengakses, maka login terlebih dahulu!');

        redirect('Home');
    endif;
}

function is_admin()
{
    $CI = &get_instance();

    if ($CI->session->userdata('level') !== 'AdminShop') :

        redirect('');
    endif;
}
