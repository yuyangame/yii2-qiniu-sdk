<?php
namespace yuyangame\Qiniu\Tests;

use Yii;

class UploadTokenTest extends \PHPUnit_Framework_TestCase {
	public function testGetToken() {
		$qiniu = Yii::createObject([
			'class' => 'yuyangame\Qiniu\Qiniu',
			'accessKey' => 'Access Key',
			'secretKey' => 'Secret Key',
			'domain' => '七牛域名',
			'bucket' => '空间名',
			'secure' => false,
		]);
		$bucket = '';
		$key = null;
		$expires = 86400;
		$policy = null;
		$ret = $qiniu->uploadToken($bucket, $key, $expires, $policy);
		var_dump($ret);
	}
}
