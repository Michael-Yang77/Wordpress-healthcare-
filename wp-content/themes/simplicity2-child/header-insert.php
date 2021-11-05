<?php
//ヘッダー部分にタグを挿入したいときは、このテンプレート挿入（ヘッダーに挿入する解析タグなど）
//子テーマのカスタマイズ部分を最小限に抑えたい場合に有効なテンプレートとなります。
//例：<script type="text/javascript">解析コード</script>
?>
<?php if (!is_user_logged_in()) :
//ログインユーザーをカウントしたくない場合は
//↓ここに挿入?>

<?php endif; ?>
<?php //ログインユーザーも含めてカウントする場合は以下に挿入 ?>
<link href="https://fonts.googleapis.com/earlyaccess/sawarabimincho.css" rel="stylesheet" />
<link href="https://fonts.googleapis.com/earlyaccess/notosansjapanese.css" rel="stylesheet" />

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-177265357-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-177265357-1');
</script>