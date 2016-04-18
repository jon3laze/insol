::Set default dir
SET cd="E:\Development\Web\wamp\www\insol"
START cmd /k "cd /d %cd% & php artisan serve" 
START cmd /k "cd /d %cd% & gulp watch"
START cmd /k "cd /d %cd% & php artisan route:list"