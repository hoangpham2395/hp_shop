<?php
return [
    // Image
	'avatar_default' => '/images/avatar.png',
	'no_image' => '/images/placeholder.png',
	'url_tmp' => '/tmp_uploads',
	'url_media' => '/medias',

    // Admin
    'role_type' => [
        1 => 'Super admin',
        2 => 'Admin',
        3 => 'Manager',
        4 => 'Storekeeper', // Thủ kho
        5 => 'Shipper',
    ],
    //Product
    'origin' => [
        1 => 'Hàng chính hãng',
        2 => 'Hàng nhập khẩu',
        3 => 'Hàng 99%',
    ],
    'type_sim' => [
        1 => 'SIM Thường',
        2 => 'Micro SIM',
        3 => 'Nano SIM',
    ],
    'product_image_type' => [
        1 => 'Ảnh đại diện',
        2 => 'Ảnh bán chạy',
        3 => 'Ảnh slide',
    ],
];
?>