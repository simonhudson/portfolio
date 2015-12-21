    </main>

    <footer class="footer--global">
        <div class="grid__wrap">
            <div class="about-text grid__span--12">
                <img alt="" src="/assets/imgs//self-london.png" />
                <h2>Hi there, my name's Simon and I build websites.</h2>
                <p>I am an experienced web designer/front-end developer who specialises in writing lean, standards-compliant <abbr title="eXtensible Hypertext Markup Language">(X)HTML</abbr>, <abbr title="Cascading Style Sheets">CSS</abbr> and JavaScript to create accessible and usable websites. I have a strong understanding of <abbr title="Web Content Accessibility Guidelines">WCAG</abbr> and <abbr title="Web Accessibility Initiative">WAI</abbr> requirements, W3C standards, browser quirks and progressive enhancement/graceful degradation, as well as experience developing for assistive technologies.</p>                </div>
            <div class="links grid__span--6">
                <p>
                    <a class="btn btn--tertiary center-content" href="/Simon_Hudson_CV.pdf">
                        <span class="fa fa-file-pdf-o fa-2x margin-r-sm"></span>
                        <span class="">Download my CV</span>
                        <span>(PDF, <?= formatBytes(filesize('Simon_Hudson_CV.pdf')); ?>)</span>
                    </a>
                </p>
            </div>
        </div>
    </footer>

</body>
</html>