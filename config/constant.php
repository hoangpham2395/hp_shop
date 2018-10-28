<?php
return [
	'APP_NAME' => getenv('APP_NAME', 'HP Shop'),
	'APP_NAME_SHORT' => 'HP',
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