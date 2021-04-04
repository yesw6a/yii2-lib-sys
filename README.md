# 基于 Yii2 的图书管理系统
由于最近在学习后端语言体系，所以打算用 yii2 做一个包含简单 CRUD 的练手项目。
如果有什么问题或者建议可以在 [issues](https://github.com/wuhuanda/yii2-lib-sys/issues) 中提出来哦~

## 如何运行项目

### 安装 Composer
如果还没有安装 Composer，你可以按 [getcomposer.org](https://getcomposer.org/download/) 中的方法安装。 在 Linux 和 Mac OS X 中可以运行如下命令：

```sh
curl -sS https://getcomposer.org/installer | php
mv composer.phar /usr/local/bin/composer
```

在 Windows 中，你需要下载并运行 [Composer-Setup.exe](https://getcomposer.org/Composer-Setup.exe)。

如果遇到任何问题或者想更深入地学习 [Composer](https://getcomposer.org/doc/)， 请参考 Composer 文档。 如果你已经安装有 Composer 请确保使用的是最新版本， 你可以用 composer self-update 命令更新 Composer 为最新版本。

### 安装 Vendor 依赖
```sh
composer install
```

### 启动项目
安装完依赖后，需要配置 Web 服务器或使用内置 Web Server。

```sh
php yii server --port=8888
```

在浏览器中输入配置好的URL（以上面 Web Server为例就是 http://localhost:8888）就能看到项目的页面啦。

## 配置数据库连接池
1. 打开 lib_sys/config/db.php 文件
2. 修改 dsn 中的字段
    - mysql：数据库类型
    - host：主机名
    - port: 数据库运行端口
    - dbname：数据库名称
3. 修改 `username` 及 `password` 为你的数据库登录名和密码

## 数据字段表
| 字段名 | 备注 |
|---|---|
| id | |
| name | 书名 |
| no | 图书编号 |
| price | 图书价格 |
| author | 作者 |  
| cover | 封面 |
| publisher | 出版社 |
| category | 分类 |
| create_at | 入库时间 |
| update_at | 更新时间 |