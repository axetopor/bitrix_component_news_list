<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
    //echo $arResult;
    //echo"<b>Текстом:</b><hr/><br><pre>".$arResult."</pre>";
    //echo"<b>Массивом:</b><hr/><br><pre>";print_r ($arResult)."</pre>";
    
    echo "<b>Заголовок</b><br/>".$arResult['NAME'];
    echo "<br><b>Код изображения: </b>".$arResult['PREVIEW_PICTURE'];
    echo "<br><b>Текст анонса: </b><br/>".$arResult['PREVIEW_TEXT'];
    
    
?>