<script src="<?php echo URL ?>js/jquery-1.12.4.min.js"></script>
<script src="<?php echo URL ?>js/html5lightbox/html5lightbox.min.js"></script>
<script src="<?php echo URL ?>js/bootstrap.min.js"></script>
<script src="<?php echo URL ?>js/owl.carousel.min.js"></script>
<script src="<?php echo URL ?>js/numscroller-1.0.min.js"></script>
<script src="<?php echo URL ?>js/jquery.countdown.min.js"></script>
<script src="<?php echo URL ?>js/jquery.enllax.min.js"></script>
<script src="<?php echo URL ?>js/isotope.min.js"></script>
<script src="<?php echo URL ?>js/magnific-popup.min.js"></script>
<script src="<?php echo URL ?>js/main.min.js"></script>
<script src="<?php echo URL ?>wdadmin/assets/plugins/sweetalert/sweetalert.min.js"></script>
<?php /* WhatsHelp */ ?>
<script type="text/javascript">
(function () {
var options = {
whatsapp: "<?php echo "55" . str_replace(array("(", ")", "-", " "), "", $voResultadoConfiguracoes->whatsapp) ?>", // Número do WhatsApp
call_to_action: "Entre em contato conosco.", // Chamada para ação
position: "left", // Posição do widget na página 'right' ou 'left'
};
var proto = document.location.protocol, host = "whatshelp.io", url = proto + "//static." + host;
var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
})();
</script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-109306259-2">
</script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-109306259-2');
</script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-FRT7XBZ25P"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-FRT7XBZ25P');
</script>