<div id="window1" class="portfolio-window">
    <div class="portfolio-show">         

        <div class="cl-btn-2">

            <div class="pages">

                <div onclick="showPage('portfolio-1-1', 'portfolio-1-2', 'portfolio-1-3'); return false;" class="show-page">
                    <p>Page 1</p>
                </div>

                <div onclick="showPage('portfolio-1-2', 'portfolio-1-1', 'portfolio-1-3'); return false;" class="show-page">
                    <p>Page 2</p>
                </div>

                <div onclick="showPage('portfolio-1-3', 'portfolio-1-1', 'portfolio-1-2'); return false;" class="show-page">
                    <p>Page 3</p>
                </div>

            </div>
            
            <div onclick="look('window1', 'blur'); return false;" class="cl-btn-2-cross">
                <div class="leftright"></div>
                <div class="rightleft"></div>
                <span class="close-btn">закрыть</span>
            </div>
        </div>

        <div class="show-content">
            <img id="portfolio-1-1" class="portfolio-1-1" src="img\portfolio-1-1.png" alt="">
            <img id="portfolio-1-2" class="portfolio-1-2" src="img\portfolio-1-2.png" alt="">
            <img id="portfolio-1-3" class="portfolio-1-3" src="img\portfolio-1-3.png" alt="">
        </div>

    </div>
</div>