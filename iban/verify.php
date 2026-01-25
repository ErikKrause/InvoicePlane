<?php
    require_once(dirname(__FILE__) . '/php-iban/php-iban.php');

    $response_array['status'] = 'fail';

    switch ($_POST['Was']) {
        case 'IBAN':
            if (isset($_POST['IBAN'])) {
                if ($_POST['IBAN'] == '' || verify_iban($_POST['IBAN'])) {
                    $response_array['status'] = 'success';
                }
            }
            break;
    }

    header('Content-type: application/json');
    echo json_encode($response_array);