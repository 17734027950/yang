
## 新增二维码

**案例**
use DavidNineRoc\Exception\InvalidException;
use DavidNineRoc\QrCodePlus;

$qrcodeplus = new QrCodePlus();
$qrcodeplus->setText('https://www.baidu.com');
$qrcodeplus->setSize(500);


try
{
    // 设置颜色， 四种或者九种或者十六种
    $param = [
        '#087',
        '#431',
        '#a2d',
        '#12d',
        '#098',
        '#182',
        '#039',
        '#20d',
        '#520',
    ];
    
    // If you want to generate, the picture is the background
    // $param = imagecreatefrompng('your.png');

    // build function`s parameter 2 sets transparency
    $qrcodeplus->build($param);

}
catch (InvalidException $e)
{
    var_dump($e->getMessage());

    exit();
}


## 新增 httpcurl类
*2018-01-02 14:02 --HttpCurl*

## 自定义类
*2018-01-02 10:30*

## yang
*class for php*
