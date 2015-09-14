<?php  return 'if($modx->context->get(\'key\') != "mgr"){
    $tpl = isset( $tpl ) ? $tpl : \'tpl_res\'; // шаблон вывода
    switch ($_REQUEST[\'cultureKey\']) {
        case \'en\':
            /* switch the context */
            $placeholders = array(
                \'lang\' => \'12\'
            );
            break;
        default:
            /* Set the default context here */
            $placeholders = array(
                \'lang\' => \'11\'
            );
            break;
    }
    $output = $modx->getChunk($tpl, $placeholders);
    return $output;
}
return;
';