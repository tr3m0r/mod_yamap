<?php
defined('_JEXEC') or die('Restricted access');
  
class modYaMapHelper
{
    function getParams(&$params)
    {
        // Получаем значение параметров
		$apiVer = $params->get("apiVer");
		$mapDivId = $params->get("mapDivId");
		$mapDivIdWidth = $params->get("mapDivIdWidth");
		$mapDivIdHeight = $params->get("mapDivIdHeight");
		$mapZoom = $params->get("mapZoom");
		$mapCenterLatitude = $params->get("mapCenterLatitude");
		$mapCenterLongitude = $params->get("mapCenterLongitude");
		$mapPlaceLatitude = $params->get("mapPlaceLatitude");
		$mapPlaceLongitude = $params->get("mapPlaceLongitude");
		$hintContent = $params->get("hintContent");
		$balloonContent = $params->get("balloonContent");
		$iconFile = $params->get("iconFile");
		$iconWidth = $params->get("iconWidth");
		$iconHeight = $params->get("iconHeight");
		$iconOffsetX = $params->get("iconOffsetX");
		$iconOffsetY = $params->get("iconOffsetY");
    }
}
  
?>