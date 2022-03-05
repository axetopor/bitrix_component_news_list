<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();


//$PID = $_GET["PID"];
$PID = 96;


$res = CIBlockElement::GetByID($PID);
if($ar_res = $res->GetNext())

    $arResult = $ar_res;
    $arResult[] = [$ar_res['NAME'],$ar_res['PREVIEW_PICTURE'],$ar_res['PREVIEW_TEXT']];
//^ вывод новости на странице новости






$this->IncludeComponentTemplate();
?>