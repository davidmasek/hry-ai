<!doctype html>
<html lang="cz">
<head>
    <meta charset="utf-8">

    <title>Kontakt</title>
    <meta name="description" content="Kontakt">
    <meta name="author" content="David Mašek">
    <link rel="stylesheet" type="text/css" href="default.css">
</head>
<body>
    <?php include("menu_top.php") ?>
    <div id="main">

        <p><a href="mailto:david.masek6@sseznam.cz?Subject=I%20just%20saw%20your%20site">Send email.</a></p>
        <!-- DISQUS -->
        <div id="disqus_thread"></div>
        <script>
            var disqus_config = function () {
                this.page.url = "http://semicoded.com/discussion.php"; 
                this.page.identifier = "semicoded.com/discussion";
            };
            (function() {
                var d = document, s = d.createElement('script');
                
                s.src = '//semicoded.disqus.com/embed.js';
                
                s.setAttribute('data-timestamp', +new Date());
                (d.head || d.body).appendChild(s);
            })();
        </script>
        <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a></noscript>
        <!-- /DISQUS -->
    </div>
</body>
</html>