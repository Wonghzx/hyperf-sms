## 1、安装

```
composer require hzx/hyperf-sms
```

### 2、发布配置

```php
php bin/hyperf.php vendor:publish hzx/hyperf-sms
```

### 3.基本调用

```php
use Hzx\HyperfSms\Contract\SmsInterface;
use Hyperf\Utils\ApplicationContext;

$easySms = ApplicationContext::getContainer()->get(SmsInterface::class);
$result = $easySms->send(18888888888, [
        'content'  => '登录验证码{1}，请于5分钟内填写',
        'template' => '1111',
        'data' => [
        'code' => 1234
    ],
]);
```