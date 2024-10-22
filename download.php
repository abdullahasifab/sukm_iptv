<?php require_once('sections/header.php'); ?>
<style>
    html, body {
    height: 100%; /* Ensure the html and body take up the full height */
    margin: 0; /* Remove default margin */
}

.container {
    display: flex;
    flex-direction: column;
    min-height: 87vh; /* Full height of the viewport */
}

.download-section {
    flex: 1; /* Allow this section to grow and take available space */
}

footer {
    margin-top: auto; /* Push footer to the bottom */
}

</style>
<!-- Download Section -->
<div class="container">
    <h1 class="download-title text-center mb-4 mt-5">Download Our App</h1> <!-- Centered title -->

    <div class="download-section flex-grow-1"> <!-- Add flex-grow class -->
        <div class="row justify-content-center mb-4">
            <div class="col-md-4"> <!-- Single column for Android card -->
                <div class="card android-card">
                    <div class="card-body">
                        <h2 class="">Download for Android</h2>
                        <p>Get the best experience on your Android device. Download our app now!</p>
                        <a href="https://play.google.com/store/apps/details?id=com.nathnetwork.xciptv&pcampaignid=web_share" class="btn btn-danger">Download on Google Play</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center mb-4">
            <div class="col-md-4"> <!-- Single column for iOS card -->
                <div class="card ios-card">
                    <div class="card-body">
                        <h2>Download for iOS</h2>
                        <p>Get the best experience on your iPhone or iPad. Download our app now!</p>
                        <a href="https://apps.apple.com/pk/app/iptv-smarter-player/id6450916775" class="btn btn-danger">Download on the App Store</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once(__DIR__ . '/sections/footer.php'); ?>
