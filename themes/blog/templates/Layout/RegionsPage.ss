<div class="region block">
<div class="grid-container">
    <div class="grid-x">
        <% loop $Regions %>
            <div class="cell small-12 medium-6 large-6"><!-- Set width to 4 columns for grid view mode only -->
                <div class="image">
                    $Photo.Fit(720,255)
                </div>
            </div>
        <div class="cell small-12 medium-6 large-6">
            <div class="info-blog">
                <h3>
                    <a href="#">$Title</a>
                </h3>
                <p>$Description</p>
                <a href="#">
                    <span class="btn btn-default"><i class="fas fa-file"></i> Read More</span>
                </a>
            </div>
        </div>
        <% end_loop %>
    </div>
</div>
</div>