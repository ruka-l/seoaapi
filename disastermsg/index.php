<?php
include ("simple_html_dom.php"); 

// Create DOM from URL or file
$num = $_GET["num"];
$html = file_get_html('https://m.search.naver.com/search.naver?sm=mtp_hty.top&where=m&query=%EC%9E%AC%EB%82%9C%EB%AC%B8%EC%9E%90');
foreach($html->find('div[class=message_timeline _result]') as $e) {
    $out = $e->innertext;
    $out = str_replace('<span class="txt">태풍</span>','(태풍) ',$out);
    $out = str_replace('<span class="txt">홍수</span>','(홍수) ',$out);
    $out = str_replace('<span class="txt">교통통제</span>','(교통통제) ',$out);
    $out = str_replace('<span class="txt">화재</span>','(화재) ',$out);
    $out = str_replace('<span class="txt">지진</span>','(지진) ',$out);
    $out = str_replace('전국 강원 경기 경남 경북 광주 대구 대전 부산 서울 울산 인천 전남 전북 제주 충남 충북 세종 지역 전체 자연재난 사회재난 재난종류','',$out);
    $out = str_replace('펼쳐보기','/',$out);
    $out = str_replace('타임라인 닫기 행정안전부 국민재난안전포털 제공 관련 국민대피요령, 대피소정보, 안전디딤돌앱 /','',$out);
    echo strip_tags($out);
}
?>