                                             
        <!-- Caixa de informação -->                  
        <!-- Agrupamento dos marcadores -->                           
        <script type="text/javascript">
        var heroSlider = $('.owl-carousel');
        heroSlider.owlCarousel({
            loop: true,
            margin: 0,
            nav: true,
            margin:10,
            rtl:true,
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: true,
            navText: ['<i class="fa fa-angle-left fa-2x fa-fw" aria-hidden="true"></i>', '<i class="fa fa-angle-right fa-2x fa-fw" aria-hidden="true"></i>'], //we will be using font awesome icon here

            responsive: {
                0: {
                    items: 3
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 3
                }
            }
        })
        heroSlider.on("changed.owl.carousel", function (event) {
            // selecting the current active item
            var item = event.item.index - 2;
            // first removing animation for all captions
            $('h3').removeClass('animated fadeInUp');
            $('.owl-item').not('.cloned').eq(item).find('h3').addClass('animated rubberBand');
        });
    </script>                                             
        <script>

$(document).ready(function(){

  new ScrollFlow();
    alert('a');
});
        </script>
        <?php wp_footer(); ?>
    </body>
</html>