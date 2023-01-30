### 运行环境配置

> php.ini

```apacheconfig
upload_max_filesize = 1024M
post_max_size = 1024M
```

> nginx

```apacheconfig
client_max_body_size     1024M;
proxy_connect_timeout    9000s;
proxy_read_timeout       9000s;
proxy_send_timeout       9000s;
```


> 文件夹权限

```shell
sudo chmod -R 755 public/upload/
```

