<div class="col-lg-8 posts-list">
    <div class="single-post">
        <div class="feature-img">
            <img id="blog-image" class="img-fluid" src="img/blog/foto4.jpg" alt="blog-details">
        </div>
        <div class="blog_details">
            <h2 id="blog-title">The Role of Artificial Intelligence in Transforming the Information Technology Industry
            </h2>
            <ul class="blog-info-link mt-3 mb-4">
                <li><a href="/blog-student"><i class="fa fa-user"></i> Technology</a></li>
                <li><a href="#"><i class="fas fa-share"></i> Share</a></li>
            </ul>
            <p class="excert">
                MCSE boot camps have its supporters and its detractors. Some people do not understand
                why you
                should have to spend money on boot camp when you can get the MCSE study materials
                yourself at a
                fraction of the camp price. However, who has the willpower
            </p>
            <p>
                MCSE boot camps have its supporters and its detractors. Some people do not understand
                why you
                should have to spend money on boot camp when you can get the MCSE study materials
                yourself at a
                fraction of the camp price. However, who has the willpower to actually sit through a
                self-imposed MCSE training. who has the willpower to actually
            </p>
            <div class="quote-wrapper">
                <div class="quotes">
                    MCSE boot camps have its supporters and its detractors. Some people do not
                    understand why you
                    should have to spend money on boot camp when you can get the MCSE study materials
                    yourself at
                    a fraction of the camp price. However, who has the willpower to actually sit through
                    a
                    self-imposed MCSE training.
                </div>
            </div>
            <p>
                MCSE boot camps have its supporters and its detractors. Some people do not understand
                why you
                should have to spend money on boot camp when you can get the MCSE study materials
                yourself at a
                fraction of the camp price. However, who has the willpower
            </p>
            <p>
                MCSE boot camps have its supporters and its detractors. Some people do not understand
                why you
                should have to spend money on boot camp when you can get the MCSE study materials
                yourself at a
                fraction of the camp price. However, who has the willpower to actually sit through a
                self-imposed MCSE training. who has the willpower to actually
            </p>
        </div>
    </div>
    <div class="navigation-top">
        <div class="navigation-area">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
                    <div class="thumb">
                        <a href="#"
                            onclick="setNavigationDetails('Must-Have Mobile Apps for Professionals', 'img/blog/foto3.jpg')">
                            <img id="prev-post-image" src="img/blog/foto3.jpg" alt="blog3"
                                style="width: 75px; height: 50px;">
                        </a>
                    </div>
                    <div class="arrow">
                        <a href="#">
                            <span class="lnr text-white ti-arrow-left"></span>
                        </a>
                    </div>
                    <div class="details">
                        <p>Prev Post</p>
                        <a href="#">
                            <h4 id="prev-post-title">Must-Have Mobile Apps for Professionals</h4>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
                    <div class="details">
                        <p>Next Post</p>
                        <a href="#"
                            onclick="setNavigationDetails('Cybersecurity: Protecting Your Data', 'img/blog/foto5.jpg')">
                            <h4 id="next-post-title">Cybersecurity: Protecting Your Data</h4>
                        </a>
                    </div>
                    <div class="arrow">
                        <a href="#">
                            <span class="lnr text-white ti-arrow-right"></span>
                        </a>
                    </div>
                    <div class="thumb">
                        <a href="#"
                            onclick="setNavigationDetails('Cybersecurity: Protecting Your Data', 'img/blog/foto5.jpg')">
                            <img id="next-post-image" src="img/blog/foto5.jpg" alt="blog5"
                                style="width: 75px; height: 50px;">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function setNavigationDetails(title, imageUrl) {
        localStorage.setItem('blogTitle', title);
        localStorage.setItem('blogImageUrl', imageUrl);
    }
</script>

<script>
    document.addEventListener('DOMContentLoaded', (event) => {
        const blogTitle = localStorage.getItem('blogTitle');
        const blogImageUrl = localStorage.getItem('blogImageUrl');
        if (blogTitle) {
            document.getElementById('blog-title').textContent = blogTitle;
        }
        if (blogImageUrl) {
            document.getElementById('blog-image').src = blogImageUrl;
        }
    });
</script>
