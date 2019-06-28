# laravel-blog

Blog system development based on laravel  5.1.*

## Demo

演示地址：[洪加煌技术博客](http://www.fidding.me/)

### Usage

---

1. clone laravel-blog 到你的服务器环境

    ```shell
    cd www #你的服务器放网站的目录
    git clone https://github.com/fidding/laravel-blog.git
    ```

2. 切换到 laravel-blog 所在目录，使用composer 更新项目

    > 如果没有安装过composer请先安装：</br>[http://www.phpcomposer.com/](http://www.phpcomposer.com/)

    ```shell
    cd laravel-blog/
    // 忽略install, 已经连同vendor包一起上传了
    //composer install 
    ```

3. 修改 `.env.example` 为 `.env`

4. 生成项目key

   ```shell
   php artisan key:generate
   ```

5. 修改数据库配置`.env`,在数据库中创建一个`库`,把配置信息填写到配置文件中

6. 修改`storage/` 的目录权限,*nix下 执行：

    ```shell
    sudo chmod -R 777 storage/
    ```

7. 修改`public/uploads` 目录权限为可写,*nix下 执行：

    ```shell
    sudo chmod -R 777 public/uploads/

    ```

8. 安装数据库

    ```shell
    php artisan migrate #安装数据表结构
    ```

9. 填充数据

    ```shell
        composer dump-autoload
        php artisan db:seed
    ```

10. 开启重写模块:使用`apache`请开启`mod_rewrite`,使用`nginx`同学请参考这个配置示例：[https://gist.github.com/davzie/3938080](https://gist.github.com/davzie/3938080)

11. 把你的域名绑定到 `laravel-blog/public` 下

12. 那么现在访问`http://yourhost/backend` 应该会跳转到后台登录页，默认账户：`admin@admin.com`,`123456`

### 安装评论

**(已移除)**评论为国外第三方的DISQUS，使用方法如下

1. 先注册账户 [https://disqus.com/](https://disqus.com/) 得到你的站点 id
2. 修改配置文件 `config/disqus.php` 里面的 `disqus_shortname` 配置项为你刚得到的 id
3. 安装完成

**(当前使用)**评论为第三方评论系统'来必力'，使用方法如下

1. 先注册账户[https://livere.com/](https://livere.com/) 并获取站点uid
2. 修改配置文件`config/livere.php` 里面的`livere_uid` 配置项为你刚得到的id

### 借鉴

该博客在 [https://github.com/yccphp/laravel-5-blog](https://github.com/yccphp/laravel-5-blog) 基础下二次开发。

#### 感谢支持！
