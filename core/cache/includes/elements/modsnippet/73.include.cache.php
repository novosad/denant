<?php
if($modx->context->get('key') != "mgr"){
    $tpl = isset( $tpl ) ? $tpl : 'tpl_res'; // шаблон вывода
    switch ($_REQUEST['cultureKey']) {
        case 'en':
            /* switch the context */
            $placeholders = array(
                'url1' => 'en-contact.html#travel'
            );
            break;
        case 'fr':
            $placeholders = array(
                'url1' => 'fr-contact.html#travel'
            );
            break;
        default:
            /* Set the default context here */
            $placeholders = array(
                'url1' => 'contact.html#travel'
            );
            break;
    }
    $output = $modx->getChunk($tpl, $placeholders);
    return $output;
}
return;
