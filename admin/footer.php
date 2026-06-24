<div class="clearfix"></div>

<footer>

    <p style="text-align: center;font-size: 12px !important;font-weight: 100;">
        <span>&copy; 2021 GIMS | Designed and Developed by <a href="http://brandshow.in/" target="_blank" style="color:#fff;">BrandShow</a></span>

    </p>

</footer>

<!-- start: JavaScript-->

<script src="js/jquery-1.9.1.min.js"></script>
<script src="js/jquery-migrate-1.0.0.min.js"></script>

<script src="js/jquery-ui-1.10.0.custom.min.js"></script>

<script src="js/jquery.ui.touch-punch.js"></script>

<script src="js/modernizr.js"></script>

<script src="js/bootstrap.min.js"></script>

<script src="js/jquery.cookie.js"></script>

<script src='js/fullcalendar.min.js'></script>

<script src='js/jquery.dataTables.min.js'></script>

<script src="js/excanvas.js"></script>
<script src="js/jquery.flot.js"></script>
<script src="js/jquery.flot.pie.js"></script>
<script src="js/jquery.flot.stack.js"></script>
<script src="js/jquery.flot.resize.min.js"></script>

<script src="js/jquery.chosen.min.js"></script>

<script src="js/jquery.uniform.min.js"></script>

<script src="js/jquery.cleditor.min.js"></script>

<script src="js/jquery.noty.js"></script>

<script src="js/jquery.elfinder.min.js"></script>

<script src="js/jquery.raty.min.js"></script>

<script src="js/jquery.iphone.toggle.js"></script>

<script src="js/jquery.uploadify-3.1.min.js"></script>

<script src="js/jquery.gritter.min.js"></script>

<script src="js/jquery.imagesloaded.js"></script>

<script src="js/jquery.masonry.min.js"></script>

<script src="js/jquery.knob.modified.js"></script>

<script src="js/jquery.sparkline.min.js"></script>

<script src="js/counter.js"></script>

<script src="js/retina.js"></script>

<script src="js/custom.js"></script>
<script type="text/javascript">
var Controls = {
    init: function () {
        var imgLink = document.getElementById('thumb');
        
        imgLink.addEventListener('mouseover', Controls.mouseOverListener, false );
        imgLink.addEventListener('mouseout', Controls.mouseOutListener, false );
        
    },
    
    mouseOverListener: function ( event ) {
        Controls.displayTooltip ( this );
    },
    
    mouseOutListener: function ( event ) {
        Controls.hideTooltip ( this );
    },
    
    displayTooltip: function ( imgLink ) {
        var tooltip = document.createElement ( "div" );
        var fullImg = document.createElement ( "img" );
        
        fullImg.src = imgLink.src;
        tooltip.appendChild ( fullImg );
        tooltip.className = "imgTooltip";
        
        tooltip.style.top =  "60px";
        
        imgLink._tooltip = tooltip;
        Controls._tooltip = tooltip;
        imgLink.parentNode.appendChild ( tooltip );
        
        imgLink.addEventListener ( "mousemove", Controls.followMouse, false);
    },
    
    hideTooltip : function ( imgLink ) {
        imgLink.parentNode.removeChild ( imgLink._tooltip );
        imgLink._tooltip = null;
        Controls._tooltip = null;
    },
    
    mouseX: function ( event ) {
        if ( !event ) event = window.event;
        if ( event.pageX ) return event.pageX;
        else if ( event.clientX ) 
            return event.clientX + (document.documentElement.scrollLeft ?
                                    document.documentElement.scrollLeft :                 
                                    document.body.scrollLeft); 
        else return 0;
    },
    
    mouseY: function ( event ) {
        if (!event) event = window.event; 
        if (event.pageY) return event.pageY; 
        else if (event.clientY) 
            return event.clientY + (document.documentElement.scrollTop ?     
                                    document.documentElement.scrollTop : 
                                    document.body.scrollTop); 
        else return 0;
    },
    
    followMouse: function ( event ) {
        var tooltip = Controls._tooltip.style;
        var offX = 15, offY = 15;
        
        tooltip.left = (parseInt(Controls.mouseX(event))+offX) + 'px';
        tooltip.top = (parseInt(Controls.mouseY(event))+offY) + 'px';
    }       
};

Controls.init();
    
</script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- end: JavaScript-->

</body>
</html>