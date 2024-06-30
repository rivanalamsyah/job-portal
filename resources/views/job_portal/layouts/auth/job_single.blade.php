<div class="single-job-items mb-50">
    <div class="job-items">
        <div class="company-img company-img-details">
            <img src="img/logo_company/logo_traveloka.jpeg" alt=""
                style="width: 100px; height: 100px; border-radius: 15px;">
        </div>
        <div class="job-tittle" style="position: relative;">
            <h4 style="display: inline-block; margin-right: 10px;">
                {{ isset($_GET['title']) ? $_GET['title'] : 'Job Title Not Found' }}
            </h4>
            <span class="type-job" style="position: absolute; top: 0; right: 0;">Fulltime</span>
            <h5>{{ isset($_GET['company']) ? $_GET['company'] : 'Company Name Not Found' }}</h5>
            <span style="display: inline-block; margin-right: 10px;"><i class="fas fa-map-marker-alt"></i> Jakarta,
                Indonesia </span>
            <span style="display: inline-block; margin-right: 10px;"><i class="fas fa-dollar-sign"></i> Rp 5.000.000 -
                Rp 10.000.000 </span>
            <ul class="mb-20"></ul>
            <a href="/company-profile-details" style="text-decoration: none;">
                <span class="btn btn-primary">View Company Profile</span>
            </a>
            <span>
                <a href="#" style="text-decoration: none; margin-left: 10px;">
                    <i class="fas fa-share"></i> Share
                </a>
            </span>
        </div>
    </div>
</div>
