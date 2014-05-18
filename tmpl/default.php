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
            // ��������.
            /*balloonContent: '<? echo $balloonContent; ?>',
            hintContent: '<? echo $hintContent; ?>',*/
			        balloonContentBody: [
						'<? echo $balloonContent; ?>'
					].join('')
        }, {
            // �����.
			iconLayout: 'default#image',
            // ��� ����������� ������ �����.
            iconImageHref: '<? echo $iconFile; ?>',
            // ������� �����.
            iconImageSize: [<? echo $iconWidth; ?>, <? echo $iconHeight; ?>],
            // �������� ������ �������� ���� ������ ������������
            // � "�����" (����� ��������).
            iconImageOffset: [<? echo $iconOffsetX; ?>, <? echo $iconOffsetY; ?>]
        });

    // ��������� ��� ����� �� �����.
    myMap.geoObjects
        .add(myPlacemark);
}
</script>