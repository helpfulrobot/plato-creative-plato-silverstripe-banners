<% if BannerTitle && BannerImage %>
<div class="banner-wrapper">
    <div class="banner-content" data-interchange="
        [{$BannerImage.CroppedImage(600, 400).URL}, (small)],
        [{$BannerImage.CroppedImage(1000, 400).URL}, (medium)],
        [{$BannerImage.CroppedImage(1400, 400).URL}, (large)],
        ">
        <div class="row">
            <div class="large-12 large-centered column">
                <h1>{$BannerTitle}</h1>
            </div>
        </div>
    </div>
</div>
<% end_if %>
