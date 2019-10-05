    @if(session()->get('locale') == 'zh-TW')
        {{  $pro->title_tw  }}
    @elseif(session()->get('locale') == 'zh-CN')
        {{  $pro->title_cn  }}
    @elseif(session()->get('locale') == 'en')
        {{  $pro->title_en  }}
    @endif
