	<!-- Start of footer -->
	<div class="footer">
        <div class="span6">Copyright &copy; 2013 <a href="http://www.hythewindowcleaning.co.uk/">Hythe Window Cleaning</a></div>
        <div class="span6 pull-right">Website by <a href="http://www.mattrayner.co.uk/">Matthew Rayner</a></div>
      </div>

    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.3.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    
    <script>
        var $root = $('html, body');
        $('a').click(function() {
            var href = $.attr(this, 'href');
            $root.animate({
                scrollTop: $(href).offset().top
            }, 500, function () {
                window.location.hash = href;
            });
            return false;
        });
    </script>
	<!-- End of footer -->