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
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5XCCBBF');</script>
<!-- End Google Tag Manager -->
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5XCCBBF"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->