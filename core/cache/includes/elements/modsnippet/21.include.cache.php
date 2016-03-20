<?php
if($modx->context->get('key') != "mgr"){
    $tpl = isset( $tpl ) ? $tpl : 'tpl_res'; // шаблон вывода
    switch ($_REQUEST['cultureKey']) {
        case 'en':
            /* switch the context */
            $placeholders = array(
                'url1' => '15',
                'url2' => '16'
            );
            break;
        case 'fr':
            /* switch the context */
            $placeholders = array(
                'url1' => '24',
                'url2' => '25'
            );
            break;    
        default:
            /* Set the default context here */
            $placeholders = array(
                'url1' => '13',
                'url2' => '14'
            );
            break;
    }
    $output = $modx->getChunk($tpl, $placeholders);
    return $output;
}
return;
