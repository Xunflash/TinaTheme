<footer class="footer flex">
    <section class="container">
        <?php if ($this->options->FooterHTML): ?>
            <?php $this->options->FooterHTML() ?>
        <?php endif; ?>
        <nav class="footer-links">
            <p><center>Copyright © 2021- <?php echo date("Y"); ?> Magneto<br>Theme <a href="https://fmcf.cc" target="_blank">TinaTheme</a> By Magneto</center></p>
        </nav>
    </section>
    <!--KaTeX-->
    <?php if ($this->options->MathRender == 'KaTeX'): ?>
    <link rel="stylesheet" href="<?= staticUrl('katex.min.css') ?>">
    <script src="<?= staticUrl('katex.min.js') ?>"></script>
    <script src="<?= staticUrl('auto-render.min.js') ?>"></script>
    <script>renderMathInElement(document.body,{delimiters:[{left:"$$",right:"$$",display:true},{left:"$",right:"$",display:false},{left:'\\(',right:'\\)',display:false},{left:'\\[',right:'\\]',display:true}]});</script>
    <?php endif; ?>
    <!--MathJax-->
    <?php if ($this->options->MathRender == 'MathJax'): ?>
    <script src="<?= staticUrl('tex-mml-chtml.min.js') ?>"></script>
    <!--MathJax FOR PJAX-->
    <script type="text/javascript">$(document).ready(function(){MathJax.Hub.Config({tex:{inlineMath:[['$','$'],['\\(','\\)']],}});MathJax.Hub.Queue(["Typeset",MathJax.Hub])});</script>
    <?php endif; ?>
    <?php if ($this->options->MathRender == 'Close'): ?>
    <?php endif; ?>
    <script src="<?php $this->options->themeUrl('/assets/js/features.js'); ?>" data-enable-footnotes="true"></script>
</footer>
<?php if ($this->options->WebPjax): ?>
  <script src="<?= staticUrl('jquery.pjax.min.js') ?>"></script>
  <link href="<?= staticUrl('nprogress.min.css') ?>" rel="stylesheet">
  <script src="<?= staticUrl('nprogress.min.js') ?>"></script>
  </div>
  <script>$(document).pjax('a[href^="<?php Helper::options()->siteUrl()?>"]:not(a[target="_blank"],a[no-pjax]), a[href^="?"], a[href^="/"]',{container:'#pjax-load',fragment:'#pjax-load',timeout:8000}).on('pjax:send',function(){NProgress.start()}).on('pjax:complete',function(){NProgress.done();hljs.initHighlightingOnLoad();MathJax.typeset()});$(document).on('pjax:success',function(){$.getScript('<?php $this->options->themeUrl('/assets/js/features.js'); ?>',function(){})});</script>
<?php endif; ?>
</body>
<?php if ($this->options->cursor): ?>
  <script src="<?php $this->options->themeUrl('/assets/js/cursor.js'); ?>" data-enable-footnotes="true"></script>
<?php endif; ?>
</html>
<?php /* 来自 MDr | HTML 压缩 */
if ($this->options->compressHtml) {
    $html_source = ob_get_contents();
    ob_clean();
    print compressHtml($html_source);
    ob_end_flush();
}
?>