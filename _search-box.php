<?php
$isMain = basename($_SERVER['PHP_SELF']) == "index.php";

$keyword = isset($_GET['k']) ? $_GET['k'] : "";
$location = isset($_GET['loc']) ? $_GET['loc'] : "";

$supportedLocation = ["Toronto, ON", "Ottawa, ON", "Mississauga, ON", "Brampton, ON", "Hamilton, ON", "London, ON"
    , "Markham, ON", "Vaughan, ON", "Kitchener, ON", "Windsor, ON"];
?>

<div class="search-box">
    <?php if ($isMain) { ?>
        <div class="search-info text-center">
            <h3 class="mb-3">Your next job is here</h3>
        </div>
    <?php } ?>
    <form action="jobs.php">
        <div class="form-row search-form">
            <div class="col-md-5">
                <label class="sr-only" for="search-keyword">Keyword</label>
                <input type="text" class="form-control" name="k" id="search-keyword" placeholder="Keyword"
                       value="<?= $keyword ?>">
            </div>
            <div class="col-md-5">
                <label class="sr-only" for="search-location">Location</label>
                <select name="loc" id="search-location" class="form-control">
                    <option value="">All Location</option>
                    <?php
                    for ($i = 0; $i < count($supportedLocation); $i++) {
                        $selected = ($supportedLocation[$i] == $location) ? "selected" : "";
                        ?>
                        <option value="<?= $supportedLocation[$i] ?>" <?= $selected ?>><?= $supportedLocation[$i] ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="col-md-2">
                <button class="btn btn-primary" type="submit">Search</button>
            </div>
        </div>
    </form>
</div>