<!-- //footer -->
<!-- jQuery 2.2.3 -->
<script src="{{asset('assets/admin/plugins/jQuery/jquery-2.2.3.min.js')}}"></script>
<!-- Bootstrap 3.3.6 -->
<script src="{{asset('assets/admin/bootstrap/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/front/js/jquery-ui.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/front/js/move-top.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/front/js/easing.js')}}"></script>

<script type='text/javascript'>//<![CDATA[
    $(window).load(function(){
        $( "#slider-range" ).slider({
            range: true,
            min: 0,
            max: 900,
            values: [ 50, 600 ],
            slide: function( event, ui ) {  $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
            }
        });
        $( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) + " - $" + $( "#slider-range" ).slider( "values", 1 ) );

    });//]]>
</script>
<!-- //range -->
<!-- start-smooth-scrolling -->
<script type="text/javascript">
    jQuery(document).ready(function($) {
        $(".scroll").click(function(event){
            event.preventDefault();
            $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
        });
    });
</script>
<!-- start-smooth-scrolling -->
<!-- here stars scrolling icon -->

<script type="text/javascript">
    $(document).ready(function() {
        /*
         var defaults = {
         containerID: 'toTop', // fading element id
         containerHoverID: 'toTopHover', // fading element hover id
         scrollSpeed: 1200,
         easingType: 'linear'
         };
         */

        $().UItoTop({ easingType: 'easeOutQuart' });

    });
</script>
<!-- //here ends scrolling icon -->