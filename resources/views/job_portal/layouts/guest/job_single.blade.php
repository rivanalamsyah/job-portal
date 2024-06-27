<!-- job single -->
<div class="single-job-items mb-50">
    <div class="job-items">
        <div class="company-img company-img-details">
            <img src="img/logo_company/logo_traveloka.jpeg" alt=""
                style="width: 85px; height: 85px; border-radius: 15px;">
        </div>
        <div class="job-tittle">
            <h4>{{ isset($_GET['title']) ? $_GET['title'] : 'Job Title Not Found' }}</h4>
            <h5>{{ isset($_GET['company']) ? $_GET['company'] : 'Company Name Not Found' }}</h5>
            <ul class="mb-10">
                <li><i class="fas fa-map-marker-alt"></i>Jakarta, Indonesia</li>
                <li><i class="fas fa-dollar-sign"></i>Rp 5.000.000 - Rp 10.000.000</li>
            </ul>
            <span class="job-label">Technology</span>
            <a href="/signin-student"><span class="company-details">Detail Company</span></a>
        </div>
    </div>
</div>
<!-- job single End -->
<style>
    .job-label {
        background-color: #fff;
        color: #0077ff;
        padding: 8px 8px;
        border-radius: 5px;
        font-size: 10px;
        border: 1px solid #0077ff;
    }

    .company-details {
        background-color: #0077ff;
        color: #fff;
        padding: 8px 8px;
        border-radius: 5px;
        font-size: 10px;
        border: 1px solid #0077ff;
    }
</style>
