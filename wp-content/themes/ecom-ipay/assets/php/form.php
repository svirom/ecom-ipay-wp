<?php



function validate($value){

    $secret = '6LewI6AUAAAAADyew5DG-Kpv2736m1daCaeSXphC';
    $url = 'https://www.google.com/recaptcha/api/siteverify';

    $response = file_get_contents($url . '?' . http_build_query([
            'secret' => $secret,
            'response' => $value,
            'remoteip' => $_SERVER["REMOTE_ADDR"]
    ]));

    $response = json_decode($response,1);

    if(isset($response['success']) && !empty($response['success'])){
        return true;
    }


    return false;
}


if(isset($_POST['email']) && isset($_POST['name']) && isset($_POST['phone']) &&
    isset($_POST['g-recaptcha-response']) && validate($_POST['g-recaptcha-response'])){

    $email = '';
    if(preg_match('/^[a-zA-Z0-9!#$%&\'*+\\/=?^_`{|}~-]+(?:\.[a-zA-Z0-9!#$%&\'*+\\/=?^_`{|}~-]+)*@(?:[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?\.)+[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?$/',$_POST['email'])){
        $email = $_POST['email'];
    }

    $name = '';
    if(preg_match('/^[A-Za-zА-Яа-яЁёЇїЄєІі\s]{3,255}$/u',$_POST['name'])){
        $name = $_POST['name'];
    }

    $product = '';
    if(preg_match('/^[A-Za-zА-Яа-яЁёЇїЄєІі\s]{3,255}$/u',$_POST['product'])){
        $product = $_POST['product'];
    }

    $phone = preg_replace('/\D/','', $_POST['phone']);

    $site = '';
    if(!empty($_POST['site']) && preg_match('/^[a-z0-9\-\.]{4,}$/',$_POST['site'])){
        $site = $_POST['site'];
    }

    $config = require('/var/www/system/config/v4/db/db_queue.php');

    $options = array(
        \PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES '. $config['charset']
    );

    $dbh = new \PDO($config['dsn'], $config['username'], $config['password'], $options);

    $sth = $dbh->prepare("INSERT INTO email (`from`, `from_title`, `to`, `subject`, `layout`, `language`, `template`, `params`, `add_time`, `send_no_earlier`, `send_time`, `stream`, `status`, `pmt_id`, `mch_id`, `bill_id`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");

    $date = (new \DateTime())->format('Y-m-d H:i:s');

    $fields = json_encode([
        'message' => $name . ' залишив заявку на Ecom.ipay.ua щодо продукту: ' . $product,
        'phonenum' => $phone,
        'email' => $email,
        'pageUrl' => $site,
    ]);

    $result = $sth->execute([
        'info@ipay.ua',
        'ipay.ua',
        'sales@ipay.ua',
        'Заявка с ecom.ipay.ua',
        'html2',
        'uk-UA',
        'mail_104',
        $fields,
        $date,
        $date,
        '0000-00-00 00:00:00',
        1, 0, 0, 0, 0
    ]);

    $result = $sth->execute([
        'info@ipay.ua',
        'ipay.ua',
        'marketing@ipay.ua',
        'Заявка с ecom.ipay.ua',
        'html2',
        'uk-UA',
        'mail_104',
        $fields,
        $date,
        $date,
        '0000-00-00 00:00:00',
        1, 0, 0, 0, 0
    ]);

    if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) &&
        strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest') {
        echo $result;
        exit();

    } else {
        header('Location: /');
    }
}