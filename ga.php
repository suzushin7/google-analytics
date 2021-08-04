<!--
Please input your information at corresponding positions.
【1】: Your IP Address
【2】: Your 測定ID (Sokutei ID)
-->

<?php 
$address = "【1】";
if($_SERVER["REMOTE_ADDR"] != $address) { ?>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=【2】"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', '【2】');
</script>
<?php } %>
