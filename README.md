# Pagination
This class written for building advanced and beautiful pagination output. You can easily build your structure with just 2 lines.

For Example:
```php
$pagination	= new \Sythdev\Pagination(100, 1, 20, 1, 3);
$output		= $pagination->build('somelink/page/','ul','li','ul-class','li-class', 'active');

echo $output;
```

Please check example.php file for more information.
