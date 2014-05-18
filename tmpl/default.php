<?php
defined('_JEXEC') or die;
?>
<div id="<? echo $mapDivId; ?>" style="width: <? echo $mapDivIdWidth; ?>; height: <? echo $mapDivIdHeight; ?>;"></div>
<script src="http://api-maps.yandex.ru/<? echo $apiVer; ?>/?load=package.full&lang=ru-RU" type="text/javascript"></script>
<script type="text/javascript">
ymaps.ready(init);

function init () {
    var myMap = new ymaps.Map("<? echo $mapDivId; ?>", {
            center: [<? echo $mapCenterLatitude; ?>, <? echo $mapCenterLongitude; ?>],
            zoom: <? echo $mapZoom; ?>,
			controls: []
        }),

        myPlacemark = new ymaps.Placemark([<? echo $mapPlaceLatitude; ?>, <? echo $mapPlaceLongitude; ?>], {
            // Свойства.
            /*balloonContent: '<? echo $balloonContent; ?>',
            hintContent: '<? echo $hintContent; ?>',*/
			        balloonContentBody: [
						'<? echo $balloonContent; ?>'
					].join('')
        }, {
            // Опции.
			iconLayout: 'default#image',
            // Своё изображение иконки метки.
            iconImageHref: '<? echo $iconFile; ?>',
            // Размеры метки.
            iconImageSize: [<? echo $iconWidth; ?>, <? echo $iconHeight; ?>],
            // Смещение левого верхнего угла иконки относительно
            // её "ножки" (точки привязки).
            iconImageOffset: [<? echo $iconOffsetX; ?>, <? echo $iconOffsetY; ?>]
        });

    // Добавляем все метки на карту.
    myMap.geoObjects
        .add(myPlacemark);
}
</script>