<?php
namespace yuyangame\Qiniu\Tests;

use Yii;

class BatchDownloadTest extends \PHPUnit_Framework_TestCase {
	public function testDownload() {
		$qiniu = Yii::createObject([
			'class' => 'yuyangame\Qiniu\Qiniu',
			'accessKey' => 'Access Key',
			'secretKey' => 'Secret Key',
			'domain' => '七牛域名',
			'bucket' => '空间名',
			'secure' => false,
		]);
		$input = [
			'http://domain/private-file1',
			'http://domain/private-file2',
		];
		$ret = $qiniu->batchDownload($input);
		var_dump($ret);
	}
}
