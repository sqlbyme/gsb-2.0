<!-- GA code to track outbound clicks -->
<script type="text/javascript">
  function recordOutboundLink(link, category, action) {
    _gaq.push(['_trackEvent', category, action]);
    setTimeout('window.open("' + link.href + '")', 100);
  }
</script>

<!-- Include this script for Google Alalytics tracking for getsongbird.com -->
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-114360-7']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
