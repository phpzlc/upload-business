<?php
/**
 * PhpStorm.
 * User: Jay
 * Date: 2021/3/10
 */

namespace App\Document\Upload;


use PHPZlc\Document\Document;

class UploadDocument extends Document
{
    public function add()
    {
        $this->setGroup('上传文件');
        return parent::add();
    }

    public function setUrl($url)
    {
        return parent::setUrl('/upload' . $url);
    }

    public function uploadAction()
    {
        $this->add()
            ->setTitle('上传文件')
            ->setUrl('/')
            ->setMethod('post')
            ->addParam('uploadName', '文件流上传名称', 'string', true, 'file', '上传附件的名称')
            ->addParam('uploadType', '上传文件类型', 'integer', true, '1', '1:图片 2:视频 3:音频 4:文件 5:压缩包 6:表格 7:全部(所有类型的图片)')
            ->addParam('file', '上传的文件流', 'string', false, '', '这个参数的名称跟文件流上传名称相关,例：文件流上传为file,则上传的文件流名称参数名称为file')
            ->setReturn(<<<EOF
<pre>
{
    "code": 0,
    "msg": "上传成功",
    "msgInfo": [],
    "data": {
        "path": "upload/6092d4d963cfd.ico",
        "name": "6092d4d963cfd.ico",
        "extension": "ico",
        "mime": "image/x-icon",
        "size": 6518,
        "md5": "231567a8cc45c2cf966c4e8d99a5b7fd",
        "dimensions": {
            "width": 32,
            "height": 32
        },
        "original_name": "favicon.ico",
        "server_path": "http://localhost/web/phpzlc/demo-blog/public/upload/6092d4d963cfd.ico"
    }
}
</pre>
EOF)
            ->generate();
    }
}