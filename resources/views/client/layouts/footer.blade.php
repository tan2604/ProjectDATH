
<footer>
    <div class="footer">
        <div class="container-fluid">
            <div class="border1">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">

                        <img class="logo1" src="{{asset('asset/images/logo1.jpg')}}" />
                    </div>

                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">


                        <ul class="lik">
                            <li> <a href="index.html">Home</a></li>
                            <li> <a href="about.html">About</a></li>
                            <li> <a href="product.html">Product</a></li>
                            <li> <a href="blog.html">Blog</a></li>
                            <li> <a href="contact.html">Contact us</a></li>
                        </ul>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
                        <ul class="sociel">
                            <li> <a href="#"><i class="fa fa-facebook-f"></i></a></li>
                            <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li> <a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li> <a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>



            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="new">
                        <h3>Newsletter</h3>
                        <form class="newtetter">
                            <input class="tetter" placeholder="Your email" type="text" name="Your email">
                            <button class="submit">Subscribe</button>
                        </form>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="newtt">
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point<br> of using Lorem I</p>
                    </div>
                </div>
            </div>

        </div>
        <div class="copyright">
            <p>Copyright 2019 All Right Reserved By <a href="https://html.design/">Free html Templates</a></p>
        </div>
    </div>

</footer>
<!-- end footer -->
</div>

</div>

<div class="overlay"></div>

<!-- Javascript files-->
<script src="{{asset('asset/js/jquery.min.js')}}"></script>
<script src="{{asset('asset/js/popper.min.js')}}"></script>
<script src="{{asset('asset/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('asset/js/jquery-3.0.0.min.js')}}"></script>
<script src="{{asset('asset/js/plugin.js')}}"></script>
<!-- sidebar -->
<script src="{{asset('asset/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<script src="{{asset('asset/js/custom.js')}}"></script>
<script src="{{asset('asset/https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js')}}"></script>
<script type="text/javascript">
$(document).ready(function() {
$("#sidebar").mCustomScrollbar({
    theme: "minimal"
});

$('#dismiss, .overlay').on('click', function() {
    $('#sidebar').removeClass('active');
    $('.overlay').removeClass('active');
});

$('#sidebarCollapse').on('click', function() {
    $('#sidebar').addClass('active');
    $('.overlay').addClass('active');
    $('.collapse.in').toggleClass('in');
    $('a[aria-expanded=true]').attr('aria-expanded', 'false');
});
});
</script>


<script>
$(document).ready(function() {
$(".fancybox").fancybox({
    openEffect: "none",
    closeEffect: "none"
});

$(".zoom").hover(function() {

    $(this).addClass('transition');
}, function() {

    $(this).removeClass('transition');
});
});
</script>
