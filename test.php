<!-- Google analytics -->
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-2112288-5', 'auto');
    ga('send', 'pageview');

</script>

<!-- TailTarget Tag Manager TT-10513-9/CT-132 -->
<script>
    (function(i) {
        var ts = document.createElement('script');
        ts.type = 'text/javascript';
        ts.async = true;
        ts.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'tags.t.tailtarget.com/t3m.js?i=' + i;
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(ts, s);
    })('TT-10513-9/CT-132');
</script>
<!-- End TailTarget Tag Manager —>
<!-- GOOGLE BANNER SCRIPTS -->

<script type="text/javascript">
    var terra_info_service = "PartBR_300210"
        , terra_info_channel = "br.noticias.economia"
        , terra_info_type = "WWW"
        , terra_info_id = "page"
        , terra_info_channeldetail = "carros_online"
        , terra_stats_idCrtfc = 300210
        , tgmKey = 'br.cobranded_carroonline.<?= isset($meta->type) ? $meta->type : "internas"; ?>'
</script>
<script type="text/javascript" charset="iso-8859-1" language="javascript" src="http://s1.trrsf.com.br/metrics/js/br/contentpar.js"></script>
<script>
    var _ttprofiles = window._ttprofiles || [];
    window.googletag.pubads().setTargeting("age",_ttprofiles.getAge);
    window.googletag.pubads().setTargeting("gender",_ttprofiles.getGender);
    window.googletag.pubads().setTargeting("cluster",_ttprofiles.getProfiles);
    window.googletag.pubads().setTargeting("subjects",_ttprofiles.getSubjects);
    window.googletag.pubads().setTargeting("team",_ttprofiles.getTeam);
</script>
<script type='text/javascript'>
    var googletag = googletag || {};
    googletag.cmd = googletag.cmd || [];
    (function() {
        var gads = document.createElement('script');
        gads.async = true;
        gads.type = 'text/javascript';
        var useSSL = 'https:' == document.location.protocol;
        gads.src = (useSSL ? 'https:' : 'http:') +
            '//www.googletagservices.com/tag/js/gpt.js';
        var node = document.getElementsByTagName('script')[0];
        node.parentNode.insertBefore(gads, node);
    })();
</script>


<!-- Integração tail target -->
<script type="text/javascript">
    var _ttprofiles = window._ttprofiles || []; window.googletag.pubads().setTargeting("age",_ttprofiles.getAge);
    window.googletag.pubads().setTargeting("gender",_ttprofiles.getGender);
    window.googletag.pubads().setTargeting("cluster",_ttprofiles.getProfiles);
    window.googletag.pubads().setTargeting("subjects",_ttprofiles.getSubjects);
    window.googletag.pubads().setTargeting("team",_ttprofiles.getTeam);
    googletag.enableServices();
</script>

<!-- Super banner -->
<script type='text/javascript'>
    googletag.cmd.push(function() {
        googletag.defineSlot('/1036642/Carroonline_728x90', [728, 90], 'div-gpt-ad-1441205530203-0').addService(googletag.pubads());
        //googletag.pubads().enableSingleRequest();
        googletag.enableServices();
    });
</script>

<!-- Lateral-->
<script type='text/javascript'>
    googletag.cmd.push(function() {
        googletag.defineSlot('/1036642/Carroonline_300x600', [300, 600], 'div-gpt-ad-1441205493445-0').addService(googletag.pubads());
        //googletag.pubads().enableSingleRequest();
        googletag.enableServices();
    });
</script>

<!-- Squarre 1-->
<script type='text/javascript'>
    googletag.cmd.push(function() {
        googletag.defineSlot('/1036642/Carroonline_300x250_Square1', [300, 250], 'div-gpt-ad-1441205402431-0').addService(googletag.pubads());
        //googletag.pubads().enableSingleRequest();
        googletag.enableServices();
    });
</script>

<!-- square2 -->
<script type='text/javascript'>
    googletag.cmd.push(function() {
        googletag.defineSlot('/1036642/Carroonline_300x250_square2', [300, 250], 'div-gpt-ad-1441205453238-0').addService(googletag.pubads());
        //googletag.pubads().enableSingleRequest();
        googletag.enableServices();
    });
</script>

<!--Rodape noticias-->
<script type='text/javascript'>
    googletag.cmd.push(function() {
        googletag.defineSlot('/1036642/Rodape_noticias', [620, 200], 'div-gpt-ad-1441205601762-0').addService(googletag.pubads());
        //googletag.pubads().enableSingleRequest();
        googletag.enableServices();
    });
</script>







<?php
//Inseri div ou h1 no logo da carro
$uri = "http://".$_SERVER[SERVER_NAME].$_SERVER[REQUEST_URI];

$barraQtd = count(explode("/", $uri));
//echo $barraQtd;
if($uri == base_url() ){

    $logo = "h1";

}else{

    $logo = "div class='logo-carro-div'";

}

?>

<!-- Crosspixel -->
<script type="text/javascript">
    try{(function(){ var cb = new Date().getTime(); var s = document.createElement("script"); s.defer = true; s.src = "//tag.crsspxl.com/s1.js?d=2143&cb="+cb; var s0 = document.getElementsByTagName('script')[0]; s0.parentNode.insertBefore(s, s0); })();}catch(e){}
</script>

<script>
    GA_googleAddAttr("age", _ttprofiles.getAge);
    GA_googleAddAttr("gender", _ttprofiles.getGender);
    GA_googleAddAttr("cluster", _ttprofiles.getProfiles);
    GA_googleAddAttr("subjects", _ttprofiles.getSubjects);
    GA_googleAddAttr("team", _ttprofiles.getTeam);
</script>


<header id="fixed-menu">
    <div class="group wrapper">
        <div id="fixed-logo" class="fl">
            <<?php echo $logo?> onclick="location.href='<?=base_url();?>'">
            <img src="<?= base_url('sitestatic/images/logo_carrowhite_reduzido.png') ?>" width="124" height="48" />
        </<?php echo $logo?>>
    </div>
    <nav id="fixed-nav">
        <ul>

            <li><a class="uppr" href="<?=base_url('ja-dirigimos?pag=1');?>">Já dirigimos</a></li>
            <li><a class="uppr" href="<?=base_url('noticias?pag=1');?>">Notícias</a></li>
            <li><a class="uppr" href="<?=base_url('premio?pag=1');?>">Best Cars</a></li>
            <li><a class="uppr" href="<?=base_url('videos');?>">Vídeos</a></li>

            <li class="y-link"><a class="uppr" href="http://www.motorpress.com.br/moto/" target="_blank">MOTOCICLISMO</a></li>
            <li class="y-link"><a class="uppr" href="http://www.motorpress.com.br/racing" target="_blank">RACING</a></li>

        </ul>
    </nav>

    </div>
</header>
<header id="main-header" class="group">
    <div class="wrapper group">
        <div class="fl logo-wrap">
            <<?php echo $logo?> onclick="location.href='<?=base_url();?>'" >
            <img src="<?= base_url('sitestatic/images/logo_carrowhite.png') ?>"  width="190" height="70" style="cursor: pointer" />
        </<?php echo $logo?>>
    </div>

    <nav id="main-nav" class="group">
        <ul>

            <li><a class="uppr" href="<?=base_url('ja-dirigimos?pag=1');?>">Já dirigimos</a></li>
            <li><a class="uppr" href="<?=base_url('noticias?pag=1');?>">Notícias</a></li>
            <li><a class="uppr" href="<?=base_url('premio?pag=1');?>">Best Cars</a></li>
            <li><a class="uppr" href="<?=base_url('videos');?>">Vídeos</a></li>

            <li class="gradient-item-menu"><a class="uppr" href="http://www.motorpress.com.br/moto/" target="_blank">MOTOCICLISMO</a></li>
            <li class="gradient-item-menu"><a class="uppr" href="http://www.motorpress.com.br/racing" target="_blank">RACING</a></li>

        </ul>
        <div class="logged-user fr">
            <?php if( get_logged_user_id() ) { ?>
                <i class="icon-user"></i> <span><?=get_logged_user()->name?></span> | <a href="<?=base_url('logout');?>">Sair</a>
            <?} else{ ?>
                &nbsp;
            <? } ?>
        </div>
    </nav>
    </div>
</header>

<?php if (!isset($data->harley)) { ?>
    <!-- /1036642/Carroonline_728x90 -->
    <center>
        <div id='div-gpt-ad-1441205530203-0' style='width:970px; margin:0 auto; text-align:center; margin-top:15px; margin-bottom:15px;'>
            <script type='text/javascript'>
                googletag.cmd.push(function() { googletag.display('div-gpt-ad-1441205530203-0'); });
            </script>
        </div>
    </center>

    <nav id="universos" class="group dot-border">
        <div class="wrapper group">
            <div class="view-more group" id="show-marcas"><span class="red-button">BUSQUE PELA MARCA <i class="icon-angle-down"></i></span>
                <div class="subspacer"></div>
                <div class="group">
                    <div id="all-brands" class="group">
                        <ul class="um-megamenu group">
                            <?foreach ($data->makers as $maker):?>
                                <? $makerUrl = base_url('marca/'.$maker->slug)?>
                                <li><a href="<?=$makerUrl?>"><?=get_image($maker->image, "makers-thumb")?></a></li>
                            <?endforeach;?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="text-search-top">
                <span>OU</span>
            </div>
            <div id="general-search">
                <input placeholder="Busque por palavra chave..." type="text" value="<?=(isset($data->searchString) ? rawurldecode($data->searchString) : '');?>" name="general-search"><button class="red-button"><i class="icon-search"></i></button>
            </div>
        </div>
    </nav>
<?php } ?>
<script>

    $(function(){


        var iframe = $("#div-gpt-ad-1441205530203-0 iframe ").contents();


        setInterval(function(){

            var width = iframe.find('#page1').attr('data-gwd-width');
            var height = iframe.find('#page1').attr('data-gwd-height');

            $("#div-gpt-ad-1441205530203-0 iframe").css('width', width)
            $("#div-gpt-ad-1441205530203-0 iframe").css('height', height)
        }, 2000)




    })

</script>