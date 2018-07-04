<header class="masthead" style="background-image: url('/public/images/blog/<?php echo $data['id']; ?>.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="page-heading">
                    <h1><?php echo htmlspecialchars($data['name'], ENT_QUOTES); ?></h1>
                    <span class="subheading"><?php echo htmlspecialchars($data['description'], ENT_QUOTES); ?></span>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto" style="min-height: calc(55.3vh);">
            <p><?php echo htmlspecialchars($data['text'], ENT_QUOTES); ?>
            <div id="disqus_thread"></div>
        </div>
    </div>
</div>
<script>

    /**
     *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
     *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/

    var disqus_config = function () {
        this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
        this.page.identifier = '213'; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
    };

    (function () { // DON'T EDIT BELOW THIS LINE
        var d = document, s = d.createElement('script');
        s.src = 'https://itcompany-1.disqus.com/embed.js';
        s.setAttribute('data-timestamp', +new Date());
        (d.head || d.body).appendChild(s);
    })();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by
        Disqus.</a></noscript>
