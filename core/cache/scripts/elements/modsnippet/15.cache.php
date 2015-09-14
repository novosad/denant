<?php  return 'if($modx->context->get(\'key\') != "mgr"){
    $tpl = isset( $tpl ) ? $tpl : \'tpl_res\'; // шаблон вывода
    switch ($_REQUEST[\'cultureKey\']) {
        case \'en\':
            /* switch the context */
            $placeholders = array(
                \'url1\' => \'7\',
                \'url2\' => \'8\' ,
                \'url3\' => \'10\'
            );
            break;
        default:
            /* Set the default context here */
            $placeholders = array(
                \'url1\' => \'1\',
                \'url2\' => \'2\' ,
                \'url3\' => \'4\'
            );
            break;
    }
    $output = $modx->getChunk($tpl, $placeholders);
    return $output;
}
return;
';