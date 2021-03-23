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

```text
sudo chmod -R 777 upload/
```
