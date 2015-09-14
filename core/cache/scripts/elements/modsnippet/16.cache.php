<?php  return 'if($modx->context->get(\'key\') != "mgr"){
    $tpl = isset( $tpl ) ? $tpl : \'tpl_res\'; // шаблон вывода
    switch ($_REQUEST[\'cultureKey\']) {
        case \'en\':
            /* switch the context */
            $placeholders = array(
                \'url1\' => \'10\',
                \'url2\' => \'6\'
            );
            break;
        default:
            /* Set the default context here */
            $placeholders = array(
                \'url1\' => \'4\',
                \'url2\' => \'5\'
            );
            break;
    }
    $output = $modx->getChunk($tpl, $placeholders);
    return $output;
}
return;
';