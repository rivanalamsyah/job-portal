<article class="blog_item">
    <div class="blog_item_img">
        <img class="card-img rounded-0" src="img/blog/foto1.jpg" alt="blog1">
        <a href="#" class="blog_item_date">
            <h3>15</h3>
            <p>Jan</p>
        </a>
    </div>
    <div class="blog_details">
        <a class="d-inline-block" href="/blog-details-student"
            onclick="setBlogDetails('How IoT is Connecting the World', 'img/blog/foto1.jpg')">
            <h2>How IoT is Connecting the World</h2>
        </a>
        <p>That dominion stars lights dominion divide years for fourth have don't stars is that
            he earth it first without heaven in place seed it second morning saying.</p>
        <ul class="blog-info-link">
            <li><a href="#"><i class="fa fa-user"></i> Technology</a></li>
            <li><a href="#"><i class="fas fa-share"></i> Share</a></li>
        </ul>
    </div>
</article>

<article class="blog_item">
    <div class="blog_item_img">
        <img class="card-img rounded-0" src="img/blog/foto2.jpg" alt="blog2">
        <a href="#" class="blog_item_date">
            <h3>15</h3>
            <p>Jan</p>
        </a>
    </div>
    <div class="blog_details">
        <a class="d-inline-block" href="/blog-details-student"
            onclick="setBlogDetails('Must-Have Mobile Apps for Professionals', 'img/blog/foto2.jpg')">
            <h2>Must-Have Mobile Apps for Professionals</h2>
        </a>
        <p>That dominion stars lights dominion divide years for fourth have don't stars is that
            he earth it first without heaven in place seed it second morning saying.</p>
        <ul class="blog-info-link">
            <li><a href="#"><i class="fa fa-user"></i> Technology</a></li>
            <li><a href="#"><i class="fas fa-share"></i> Share</a></li>
        </ul>
    </div>
</article>

<article class="blog_item">
    <div class="blog_item_img">
        <img class="card-img rounded-0" src="img/blog/foto3.jpg" alt="blog3">
        <a href="#" class="blog_item_date">
            <h3>15</h3>
            <p>Jan</p>
        </a>
    </div>
    <div class="blog_details">
        <a class="d-inline-block" href="/blog-details-student"
            onclick="setBlogDetails('Blockchain: The Future of Secure Transactions', 'img/blog/foto3.jpg')">
            <h2>Blockchain: The Future of Secure Transactions</h2>
        </a>
        <p>That dominion stars lights dominion divide years for fourth have don't stars is that
            he earth it first without heaven in place seed it second morning saying.</p>
        <ul class="blog-info-link">
            <li><a href="#"><i class="fa fa-user"></i> Technology</a></li>
            <li><a href="#"><i class="fas fa-share"></i> Share</a></li>
        </ul>
    </div>
</article>

<script>
    function setBlogDetails(title, imageUrl) {
        localStorage.setItem('blogTitle', title);
        localStorage.setItem('blogImageUrl', imageUrl);
    }
</script>

<nav class="blog-pagination justify-content-center d-flex">
    <ul class="pagination">
        <li class="page-item">
            <a href="#" class="page-link" aria-label="Previous">
                <i class="ti-angle-left"></i>
            </a>
        </li>
        <li class="page-item">
            <a href="#" class="page-link">01</a>
        </li>
        <li class="page-item active">
            <a href="#" class="page-link">02</a>
        </li>
        <li class="page-item">
            <a href="#" class="page-link">03</a>
        </li>
        <li class="page-item active">
            <a href="#" class="page-link">04</a>
        </li>
        <li class="page-item">
            <a href="#" class="page-link">05</a>
        </li>
        <li class="page-item">
            <a href="#" class="page-link" aria-label="Next">
                <i class="ti-angle-right"></i>
            </a>
        </li>
    </ul>
</nav>
