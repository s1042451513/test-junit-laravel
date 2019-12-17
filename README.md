> wengdada-junit-laravel

方便与laravel框架中对于某一个类的方法调试；类似于单元测试

> 框架要求

laravel >= 5.1

> 安装

composer require "wengdada/junit-laravel"

> 配置
> Laravel应用

在 `config/app.php` 注册ServiceProvider 和 Facade (Laravel 5.5 无需手动注册)

'providers' => [
    Wengdada\\JunitLaravel\\JunitServiceProvide::class,
]

然后在浏览器中直接访问路由

Route::get('/', 'JunitController@index');
Route::post('/', 'JunitController@store')->name('junit.store);