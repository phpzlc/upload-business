# 上传业务组件

## 安装

```shell
composer require phpzlc/upload-business 
```

## 配置

在项目根路由中`config/routes.yaml`引入

```yaml
upload:
  resource: "routing/upload/upload.yaml"
  prefix:   /upload
```

## README.md 补充

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
sudo chmod -R 777 public/upload/
```
