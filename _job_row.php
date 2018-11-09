<article class="job-row">
    <div class="loop-item-wrap">
        <div class="item-featured">
            <a href="#">
                <img src="images/company/rbc.png"
                     alt="RBC"/>
            </a>
        </div>
        <div class="loop-item-content">
            <h2 class="loop-item-title">
                <a href="#"><?=$job['TITLE']?></a>
            </h2>
            <p class="content-meta">
                <span class="job-company"><?=$job['COMPANY_NAME']?></span>
                <span class="job-type"><i class="far fa-bookmark"></i>&nbsp;<?= getJobType($job['TYPE']) ?></span>
                <span class="job-location"><i class="fas fa-map-marker-alt"></i>&nbsp;<em><?= $job['LOCATION'] ?></em></span>
                <span><time class="entry-date" datetime="2018-08-18T01:40:23+00:00"><i class="far fa-clock"></i>&nbsp;<?= date_format(date_create($job['CLOSING']), "Y-m-d") ?></time></span>
            </p>
        </div>
        <div class="show-view-more">
            <a class="btn btn-primary" href="./job-detail.php?id=<?=$job['ID']?>">View more </a>
        </div>
    </div>
</article>