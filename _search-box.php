<?php
$isMain = basename($_SERVER['PHP_SELF']) == "index.php";
?>

<div class="search-box">
    <?php if ($isMain) { ?>
        <div class="search-info text-center">
            <h3 class="mb-3">Your next job is here</h3>
        </div>
    <?php } ?>
    <form>
        <div class="form-row search-form">
            <div class="col-md-5">
                <label class="sr-only" for="search-keyword">Keyword</label>
                <input type="text" class="form-control" name="keyword" id="search-keyword" placeholder="Keyword"
                       value="" required>
            </div>
            <div class="col-md-5">
                <label class="sr-only" for="search-location">Location</label>
                <select name="location" id="search-location" class="form-control">
                    <option value="">All Location</option>
                    <option value="">Toronto, ON</option>
                    <option value="">Ottawa, ON</option>
                    <option value="">Mississauga, ON</option>
                    <option value="">Brampton, ON</option>
                    <option value="">Hamilton, ON</option>
                    <option value="">London, ON</option>
                    <option value="">Markham, ON</option>
                    <option value="">Vaughan, ON</option>
                    <option value="">Kitchener, ON</option>
                    <option value="">Windsor, ON</option>
                </select>
            </div>
            <div class="col-md-2">
                <button class="btn btn-primary" type="submit">Search</button>
            </div>
        </div>
    </form>
</div>