<?php
include ('smarty-3.1.48/libs/Smarty.class.php');

$smarty = new Smarty;

$data = array (
  'contents' =>
  array (
    0 =>
    array (
      'id' => '1294696',
      'rutitr' => '',
      'title' => 'تشریح دلایل تمایل کمتر پژوهشگران ایرانی به تالیف کتاب‌های علمی',
      'title2' => '',
      'stitle' => '',
      'subtitle' => 'برنده جایزه «بهترین کتاب علمی» کامستک درباره این‌که چرا پژوهشگران ایرانی بیشتر تمایل به چاپ مقاله دارند؟، ضمن بیان این‌که تالیف کتاب نیاز به چند سال ممارست دارد، گفت: در آیین‌نامه‌های ارتقا و آیین‌نامه‌های تبدیل وضعیت در وزارت علوم و وزارت بهداشت، کتاب آنچنان که باید و شاید مورد اقبال نیست.',
      'author' => '',
      'pdate' => '14010818140942',
      'lang' => 'FA',
      'cat_id' => '2',
      'service_id' => '5',
      'source' => '0',
      'cview' => '-',
      'cid' => '1294696',
      'nvimg' => 'http://172.17.0.4/files/fa/news/1401/5/3/572337_336.jpg',
      'promise_date' => NULL,
      'access_level' => NULL,
      'promise_date_type' => NULL,
      'imgsrc' => 'https://172.17.0.4/files/fa/news/1401/5/3/572337_336.jpg',
      'link_href' => '/fa/news/1294696/تشریح-دلایل-تمایل-کمتر-پژوهشگران-ایرانی-به-تالیف-کتاب‌های-علمی',
      'link_target' => '_blank',
      'service_name' => 'آموزش',
      'service_name_id' => 'education',
      'cat_name' => 'خبر',
    ),

    1 =>
    array (
      'id' => '1294791',
      'rutitr' => '',
      'title' => 'برگزاری آزمون پذیرش دانشجوی پزشکی از مقطع کارشناسی',
      'title2' => '',
      'stitle' => '',
      'subtitle' => 'پانزدهمین دوره آزمون پذیرش دانشجوی پزشکی از مقطع کارشناسی سال تحصیلی ۱۴۰۲–۱۴۰۱ پنجشنبه ۶ مرداد ۱۴۰۱ برگزار می شود.',
      'author' => '',
      'pdate' => '14010503120608',
      'lang' => 'FA',
      'cat_id' => '2',
      'service_id' => '5',
      'source' => '0',
      'cview' => '-',
      'cid' => '1294791',
      'nvimg' => '/files/fa/news/1401/5/3/572625_241.jpg',
      'promise_date' => NULL,
      'access_level' => NULL,
      'promise_date_type' => NULL,
      'imgsrc' => '/files/fa/news/1401/5/3/572625_241.jpg',
      'link_href' => '/fa/news/1294791/برگزاری-آزمون-پذیرش-دانشجوی-پزشکی-از-مقطع-کارشناسی',
      'link_target' => '_blank',
      'service_name' => 'آموزش',
      'service_name_id' => 'education',
      'cat_name' => 'خبر',
    ),
    2 =>
    array (
      'id' => '1294788',
      'rutitr' => 'معاون آموزشی وزارت بهداشت:',
      'title' => 'تغییر آیین نامه ارتقاء اعضای هیئت علمی در گرو بازنگری آیین نامه جذب است',
      'title2' => '',
      'stitle' => '',
      'subtitle' => 'معاون آموزشی وزارت بهداشت گفت: معیارهای پذیرش اعضای هیئت علمی باید مورد بازنگری قرار بگیرد و تغییر آیین نامه ارتقاء در گرو بازنگری آیین نامه جذب است.',
      'author' => '',
      'pdate' => '14010503120556',
      'lang' => 'FA',
      'cat_id' => '2',
      'service_id' => '5',
      'source' => '0',
      'cview' => '-',
      'cid' => '1294788',
      'nvimg' => '/files/fa/news/1401/5/3/572622_877.jpg',
      'promise_date' => NULL,
      'access_level' => NULL,
      'promise_date_type' => NULL,
      'imgsrc' => '/files/fa/news/1401/5/3/572622_877.jpg',
      'link_href' => '/fa/news/1294788/تغییر-آیین-نامه-ارتقاء-اعضای-هیئت-علمی-در-گرو-بازنگری-آیین-نامه-جذب-است',
      'link_target' => '_blank',
      'service_name' => 'آموزش',
      'service_name_id' => 'education',
      'cat_name' => 'خبر',
    ),
  ),

);


$smarty->assign('allData', $data);
$smarty->display('news.tpl');

