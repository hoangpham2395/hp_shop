<?php
return [
	'APP_NAME' => getenv('APP_NAME', 'HP Shop'),
    'APP_URL' => getenv('APP_URL', 'http://localhost.shop.vn'),
	'APP_NAME_SHORT' => 'HP',
    'SHOP_ADDRESS' => 'Số 1 Đại Cồ Việt - Hai Bà Trưng - Hà Nội',
    'LOGO_URL' => '',
    'HOTLINE' => '0123456789',
    'TECHNOLOGY' => '0987654321',
    'FB_URL' => 'https://www.facebook.com/hpshop',
    'YOUTUBE_URL' => 'https://www.youtube.com/channel/hpshop',
    'GROUP_URL' => 'https://www.facebook.com/groups/cskh.hpshop/',
    'PER_PAGE' => 10,
    'DEL_FLAG' => [
    	'ACTIVE' => 0,
    	'DELETED' => 1,
    	'FIELD' => 'del_flag',
    ],
    'SORT_FIELD' => 'id',
    'SORT_TYPE' => 'DESC',
    'FILE_INPUT_NAME' => 'file_input',
];
?>