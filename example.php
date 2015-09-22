<?php 

require 'src/Pagination.php';

/* 
 * First, create pagination object
 * 
 * $pagination = new \Sythdev\Pagination('TOTAL_ROWS', 'CURRENT_PAGE', 'PER_RECORDS_IN_A_PAGE', 'IS_ADVANCED', 'ADVANCED_LIMIT');
 */
$pagination	= new \Sythdev\Pagination(100, 1, 20, 1, 3);


/* 
 * Then build your HTML output
 *
 * $output  = $pagination->build('LINK','ELEMENT','ITEM','ELEMENT_CLASS','ITEM_CLASS', 'ACTIVE_ITEM_CLASS');
 */
$output		= $pagination->build('somelink/page/','ul','li','ul-class','li-class', 'active');
#### Or you can use DIV, A or other HTML tags and 2,3,4,5... class names for both of element and items ####
$output2	= $pagination->build('somelink/page/','div','a','pagination pagination-big','item star-icon', 'current');

/* Now you can use echo $output; where you need pagination on your page */ 

/* 
 * Other 2 methods for optional use
 *
 * First one is get "limit" for SQL Query
 * $get_limit will be like "0,20" or "10,30".
 * So you can use this like $data = $db->query("..... LIMIT $get_limit"); 
 */ 
$get_limit	 = $pagination->limit(); 

/*
 * Second one is "total" pages,
 * It gives you maximum number of pages.
 * Most probably you'll not use this :)
 */
$total_pages = $pagination->total();