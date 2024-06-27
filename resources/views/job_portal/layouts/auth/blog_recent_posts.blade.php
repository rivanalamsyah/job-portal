<aside class="single_sidebar_widget popular_post_widget">
    <h3 class="widget_title" style="color: navy;">Recent Post</h3>
    <div class="media post_item" onclick="setRecentPostDetails('Top IT Trends to Watch in 2024', 'img/blog/foto1.jpg')">
        <img id="recent-post-image1" src="img/blog/foto1.jpg" alt="post" style="width: 90px; height: 60px;">
        <div class="media-body">
            <a href="/blog-details-student">
                <h3 id="recent-post-title1" style="color: navy;">Top IT Trends to Watch in 2024</h3>
            </a>
            <p>40 Minutes ago</p>
        </div>
    </div>
    <div class="media post_item" onclick="setRecentPostDetails('Starting a Career in IT: A Guide', 'img/blog/foto2.jpg')">
        <img id="recent-post-image2" src="img/blog/foto2.jpg" alt="post" style="width: 90px; height: 60px;">
        <div class="media-body">
            <a href="/blog-details-student">
                <h3 id="recent-post-title2" style="color: navy;">Starting a Career in IT: A Guide</h3>
            </a>
            <p>02 Hours ago</p>
        </div>
    </div>
    <div class="media post_item" onclick="setRecentPostDetails('Cybersecurity: Protecting Your Data', 'img/blog/foto3.jpg')">
        <img id="recent-post-image3" src="img/blog/foto3.jpg" alt="post" style="width: 90px; height: 60px;">
        <div class="media-body">
            <a href="/blog-details-student">
                <h3 id="recent-post-title3" style="color: navy;">Cybersecurity: Protecting Your Data</h3>
            </a>
            <p>03 Hours ago</p>
        </div>
    </div>
    <div class="media post_item" onclick="setRecentPostDetails('The Importance of Big Data Analytics', 'img/blog/foto4.jpg')">
        <img id="recent-post-image4" src="img/blog/foto4.jpg" alt="post" style="width: 90px; height: 60px;">
        <div class="media-body">
            <a href="/blog-details-student">
                <h3 id="recent-post-title4" style="color: navy;">The Importance of Big Data Analytics</h3>
            </a>
            <p>05 Hours ago</p>
        </div>
    </div>
</aside>

<script>
function setRecentPostDetails(title, imageUrl) {
    localStorage.setItem('blogTitle', title);
    localStorage.setItem('blogImageUrl', imageUrl);
}
</script>
