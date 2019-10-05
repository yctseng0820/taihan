@if(session()->get('locale') == 'zh-TW')
    @php
        $str = strip_tags($pro->content_tw);
        echo mb_substr($str, 0, 95).'...';
    @endphp
@elseif(session()->get('locale') == 'zh-CN')
    @php
        $str = strip_tags($pro->content_cn);
        echo mb_substr($str, 0, 95).'...';
    @endphp
@elseif(session()->get('locale') == 'en')
    @php
        $str = strip_tags($pro->content_en);
        echo mb_substr($str, 0, 130).'...';
    @endphp
@endif
