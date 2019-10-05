@if(session()->get('locale') == 'zh-TW')
    <?php echo $pro->content_tw ;?>
@elseif(session()->get('locale') == 'zh-CN')
    <?php echo $pro->content_cn ;?>
@elseif(session()->get('locale') == 'en')
    <?php echo $pro->content_en ;?>
@endif
