<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die(); 
$arComponentDescription = array(
"NAME" => GetMessage("Список новостей"),
"DESCRIPTION" => GetMessage("Компонент для вывода новостей"),
"PATH" => array(
"ID" => "axe_components",
"CHILD" => array(
"ID" => "newslist",
"NAME" => "Список новостей"
)
),
"ICON" => "/images/icon.gif",
);