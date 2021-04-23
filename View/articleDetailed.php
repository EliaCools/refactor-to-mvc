<?php
require 'shared/header.php'
?>
<body>
<article>
    <h2><?= $article->getTitle() ?></h2>
    <p><?= $article->getContent() ?></p>

</article>
</body>
</html>
