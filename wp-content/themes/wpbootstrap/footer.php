                <!-- footer start (Add "light" class to #footer in order to enable light footer) -->
                <!-- ================ -->
                <footer id="footer">
<section id="footer-light-top">
<div class="row">
<div class="col-sm-12"></div>
</div>
</section>

                    <!-- .footer start -->
                    <!-- ================ -->
                    <div class="footer">
                        <div class="container">

                            <div class="row">
                                <div class="col-md-3">
                                    <div class="footer-content">
                                        <div class="logo-footer">
                                            <a href="#"><img id="logo-footer" class="img-responsive vcenter" src="http://joeylangley.com/rts/wp-content/themes/wpbootstrap/theme-images/footer-logo.png" alt=""></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="space-bottom hidden-lg hidden-xs"></div>
                                <div class="col-md-3">
                                    <div class="footer-content">
                                        <h2>Services</h2>

                                        <nav>
                                            <ul class="nav nav-pills nav-stacked">
                                                <li><a href="/Phoenix/Home/WhyReverTech">Product Returns Management</a></li>
                                                <li><a href="/Phoenix/Home/ServiceProcess">Repair & Exchange</a></li>
                                                <li><a href="/Phoenix/Home/About">Embedded Operations</a></li>
                                                <li><a href="/Phoenix/Home/About">Service Parts Management</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>

                            
                                <div class="space-bottom hidden-lg hidden-xs"></div>
                                <div class="col-md-3">
                                    <div class="footer-content">
                                        <h2>Industries Served</h2>
                                        <nav>
                                            <ul class="nav nav-pills nav-stacked">
                                                <li><a href="/Phoenix/Service_Repair/MicrosoftSurface">Retail</a></li>
                                                <li><a href="/Phoenix/Reports/OrderLookup">Technology</a></li>
                                                <li><a href="/Phoenix/Reports/OrderLookup">Healthcare</a></li>
                                                <li><a href="/Phoenix/Reports/OrderLookup">Education</a></li>
                                                <li><a href="/Phoenix/Reports/OrderLookup">Enterprise</a></li>
                                                <li><a href="/Phoenix/Reports/OrderLookup">Government</a></li>
                                                
                                            </ul>
                                        </nav>
                                    </div>
                                </div>

                                <div class="space-bottom hidden-lg hidden-xs"></div>
                                <div class="col-md-3">
                                    <div class="footer-content">
                                        <h2>About Us</h2>
                                        <nav>
                                            <ul class="nav nav-pills nav-stacked">
                                                <li><a href="/Phoenix/Home/Contact">Contact Us</a></li>
                                                <li><a href="/Phoenix/Account">Locations</a></li>
                                                <li><a href="/Phoenix/Home/Faq">Leadership Team</a></li>
                                                <li><a href="/Phoenix/Home/Faq">Our Customers</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            
 
                                

                            </div>
                            <div class="space-bottom hidden-lg hidden-xs"></div>
                        </div>
                    </div>
                    <section id="contact-light-bottom">
<div class="row">
<div class="col-sm-12"></div>
</div>
</section>
                    <!-- .footer end -->

<div class="container">
      	<div class="subfooter">
      	<div class="row">
       		<div class="col-sm-5"><p class="footer-text" align="center">&copy; <?php echo date("Y"); ?> Revertech Solutions.  All Rights Reserved.</p>
       		</div>
       		<div class="col-sm-2">
       			<div class="row">
       				<div class="col-sm-4">
       					<a href="#"><img id="social-icons" class="img-responsive" src="http://joeylangley.com/rts/wp-content/themes/wpbootstrap/theme-images/icons/facebook.png"></a>
       				</div>
       				<div class="col-sm-4">
       					<a href="#"><img id="social-icons" class="img-responsive" src="http://joeylangley.com/rts/wp-content/themes/wpbootstrap/theme-images/icons/linkedin.png"></a>
       				</div>
       				<div class="col-sm-4">
       					<a href="#"><img id="social-icons" class="img-responsive" src="http://joeylangley.com/rts/wp-content/themes/wpbootstrap/theme-images/icons/twitter.png"></a>
       				</div>
       			</div>
       		</div>
       		<div class="col-sm-5"><p class="footer-text" align="center">Site designed and developed by <a href="joeylangley.com">Joey Langley</a></p>
       		</div>
      	</div>
      </div>
      </footer>

    </div> <!-- /container -->
</div>

    <?php wp_footer(); ?>


<script>
/* __________________ RESPONSIVE EQUAL HEIGHTS  __________________*/
/*! jquery.matchHeight-min.js v0.5.1  |  http://brm.io/jquery-match-height/  |  License: MIT  */
(function(a){a.fn.matchHeight=function(b){if("remove"===b){var f=this;this.css("height","");a.each(a.fn.matchHeight._groups,function(g,h){h.elements=h.elements.not(f)});return this}if(1>=this.length){return this}b="undefined"!==typeof b?b:!0;a.fn.matchHeight._groups.push({elements:this,byRow:b});a.fn.matchHeight._apply(this,b);return this};a.fn.matchHeight._apply=function(b,g){var h=a(b),f=[h];g&&(h.css({display:"block","padding-top":"0","padding-bottom":"0","border-top":"0","border-bottom":"0",height:"100px"}),f=c(h),h.css({display:"","padding-top":"","padding-bottom":"","border-top":"","border-bottom":"",height:""}));a.each(f,function(i,l){var k=a(l),j=0;k.each(function(){var m=a(this);m.css({display:"block",height:""});m.outerHeight(!1)>j&&(j=m.outerHeight(!1));m.css({display:""})});k.each(function(){var m=a(this),n=0;"border-box"!==m.css("box-sizing")&&(n+=e(m.css("border-top-width"))+e(m.css("border-bottom-width")),n+=e(m.css("padding-top"))+e(m.css("padding-bottom")));m.css("height",j-n)})});return this};a.fn.matchHeight._applyDataApi=function(){var b={};a("[data-match-height], [data-mh]").each(function(){var f=a(this),g=f.attr("data-match-height");b[g]=g in b?b[g].add(f):f});a.each(b,function(){this.matchHeight(!0)})};a.fn.matchHeight._groups=[];var d=-1;a.fn.matchHeight._update=function(b){if(b&&"resize"===b.type){b=a(window).width();if(b===d){return}d=b}a.each(a.fn.matchHeight._groups,function(){a.fn.matchHeight._apply(this.elements,this.byRow)})};a(a.fn.matchHeight._applyDataApi);a(window).bind("load resize orientationchange",a.fn.matchHeight._update);var c=function(b){var f=null,g=[];a(b).each(function(){var i=a(this),k=i.offset().top-e(i.css("margin-top")),j=0<g.length?g[g.length-1]:null;null===j?g.push(i):1>=Math.floor(Math.abs(f-k))?g[g.length-1]=j.add(i):g.push(i);f=k});return g},e=function(b){return parseFloat(b)||0}})(jQuery);

jQuery(document).ready(function ($){
    $('.equal-height-panels .panel').matchHeight();

});
</script>

  </body>
</html>