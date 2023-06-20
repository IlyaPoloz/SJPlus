<style>
.ct-topbar {
  text-align: right;
  background: #eee;
}
.ct-topbar__list {
  margin-bottom: 0px;
}
.ct-language__dropdown{
	padding-top: 8px;
	max-height: 0;
	overflow: hidden;
	position: absolute;
	top: 110%;
	left: -3px;
	-webkit-transition: all 0.25s ease-in-out;
	transition: all 0.25s ease-in-out;
	width: 100px;
	text-align: center;
	padding-top: 0;
  z-index:200;
  
}
.ct-language__dropdown li{
	background: #222;
	padding: 5px;
}
.ct-language__dropdown li a{
	display: block;
}
.ct-language__dropdown li:first-child{
	padding-top: 10px;
	border-radius: 3px 3px 0 0;
}
.ct-language__dropdown li:last-child{
	padding-bottom: 10px;
	border-radius: 0 0 3px 3px;
}
.ct-language__dropdown li:hover{
	background: #444;
}
.ct-language__dropdown:before{
	content: '';
	position: absolute;
	top: 0;
	left: 0;
	right: 0;
	margin: auto;
	width: 8px;
	height: 0;
	border: 0 solid transparent;
	border-right-width: 8px;
	border-left-width: 8px;
	border-bottom: 8px solid #222;
}
.ct-language{
  position: relative;
  border-color: blue;
  border-style: solid;
  border-width: 0 1px 0 1px;
  color: #fff;
  padding: 10px;
  list-style-type: none;
}
.ct-language:hover .ct-language__dropdown{
	max-height: 200px;
	padding-top: 8px;
}
.list-unstyled {
    padding-left: 0;
    list-style: none;
}

.skiptranslate.goog-te-gadget{
    display: none;
}
</style>

<!-- Main navbar -->
<div class="navbar navbar-expand-md navbar-dark">
    <div class="mt-2 mr-5">
        <a href="{{ route('dashboard') }}" class="d-inline-block">
            <h4 class="text-bold text-white">{{ Qs::getSystemName() }}</h4>
        </a>
    </div>
<!-- 
    <div id="google_translate_element">
            <script type="text/javascript">
            function googleTranslateElementInit() {
            new google.translate.TranslateElement({includedLanguages: 'en,lv,'}, 'google_translate_element');
            }
            </script>

            <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    </div> -->

    <div id="google_translate_element">
        <li class="ct-language">Language <i class="fa fa-arrow-down"></i>
        <ul class="list-unstyled ct-language__dropdown">
        <li><a href="#googtrans(en|en)" class="lang-en lang-select" data-lang="en"><img src="https://flagicons.lipis.dev/flags/4x3/gb.svg" alt="UK" width="30" height="30"></a></li>
          <li><a href="#googtrans(en|lv)" class="lang-lv lang-select" data-lang="lv"><img src="https://flagicons.lipis.dev/flags/4x3/lv.svg" alt="LV" width="30" height="30"></a></li>
        </ul>
      </li>
      <script type="text/javascript">
    function googleTranslateElementInit() {
      new google.translate.TranslateElement({pageLanguage: 'lv', layout: google.translate.TranslateElement.FloatPosition.TOP_LEFT}, 'google_translate_element');
    }

    function triggerHtmlEvent(element, eventName) {
      var event;
      if (document.createEvent) {
        event = document.createEvent('HTMLEvents');
        event.initEvent(eventName, true, true);
        element.dispatchEvent(event);
      } else {
        event = document.createEventObject();
        event.eventType = eventName;
        element.fireEvent('on' + event.eventType, event);
      }
    }

    jQuery('.lang-select').click(function() {
      var theLang = jQuery(this).attr('data-lang');
      jQuery('.goog-te-combo').val(theLang);

      //alert(jQuery(this).attr('href'));
      window.location = jQuery(this).attr('href');
      location.reload();

    });
  </script>
            <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
        </div>


    <div class="d-md-none">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-mobile">
            <i class="icon-tree5"></i>
        </button>
    </div>

</div>
<!-- /main navbar -->
