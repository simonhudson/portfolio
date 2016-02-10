    </main>

    <footer class="footer--global center-content">
        <div class="grid__wrap">
            <div class="grid__span--10 center">
                <img alt="Simon Hudson" class="img-circle self-img" src="<?= $paths->imgs; ?>self.jpg" />
                <h2>Hi there, my name's Simon and I build websites.</h2>
                <p>I am an experienced web designer/front-end developer who specialises in writing lean, standards-compliant <abbr title="eXtensible Hypertext Markup Language">(X)HTML</abbr>, <abbr title="Cascading Style Sheets">CSS</abbr> and JavaScript to create accessible and usable websites. I have a strong understanding of <abbr title="Web Content Accessibility Guidelines">WCAG</abbr> and <abbr title="Web Accessibility Initiative">WAI</abbr> requirements, W3C standards, browser quirks and progressive enhancement/graceful degradation, as well as experience developing for assistive technologies.</p>
            <div class="btn-row">
                    <a class="btn-row__btn btn btn--tertiary center-content" href="<?= $siteRoot; ?>Simon_Hudson_CV.pdf" target="_blank">
                        <span class="fa fa-file-pdf-o fa-2x margin-r-sm"></span>
                        <span class="">Download my CV </span>
                        <span><small>(PDF, <?= formatBytes(filesize('Simon_Hudson_CV.pdf')); ?>)</small><span class="hidden"> (opens in a new window)</span></span>
                    </a>
                    <a class="btn-row__btn btn btn--tertiary center-content" href="https://github.com/simonhudson?tab=repositories" target="_blank">
                        <span class="fa fa-github fa-2x margin-r-sm"></span>
                        <span class="">View my Github profile<span class="hidden"> (opens in a new window)</span></span>
                    </a>
                </div>
            </div>
        </div>
    </footer>

</body>
</html>