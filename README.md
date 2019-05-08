Elastic Search Terminal Tool
========================
个人习惯了使用elasticSearch官方提供的php sdk查找数据，想独立查找数据的时候不太方便，所以只是简单引用了一下官方提供的sdk。
因为修改了官方sdk的一点东西，故把整个vendor也包含到版本中了。

使用方式
--
1. 在 `query.php` 文件中使用php sdk提供的查询方式，构造出查询数组,<br>
    文件最后：`return $ES->search($array);` . 其中search可以是count等其他官方提供的方法；
2. 修改需要连接的elasticSearch服务器的配置文件，配置文件在`config/elasticSearch.php`中；
3. 控制台或终端: 
    * `php es.php [<path>]`  可以直接连接es服务器，获取经过json格式化的数据。
    * `php curl.php [<path>]` 方便在本机没有权限的情况下， **生成curl形式的查询字符串** 。host的配置文件在`curl.php`文件中修改。 
    
####版本
* composer引用的ElasticSearch sdk版本：**v6.0.1**
* php 版本：**^7.0**