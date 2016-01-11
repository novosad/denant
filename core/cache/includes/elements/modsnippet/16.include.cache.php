<?php
if($modx->context->get('key') != "mgr"){
    $tpl = isset( $tpl ) ? $tpl : 'tpl_res'; // шаблон вывода
    switch ($_REQUEST['cultureKey']) {
        case 'en':
            /* switch the context */
            $placeholders = array(
                'url1' => '10',
                'url2' => '6',
                'urlTravel' => 'en-contact.html#travel'
            );
            break;
        case 'fr':
            $placeholders = array(
                'url1' => '22',
                'url2' => '19',
                'urlTravel' => 'fr-contact.html#travel'
            );
            break;
        default:
            /* Set the default context here */
            $placeholders = array(
                'url1' => '4',
                'url2' => '5',
                'urlTravel' => 'contact.html#travel'
            );
            break;
    }
    $output = $modx->getChunk($tpl, $placeholders);
    return $output;
}
return;
