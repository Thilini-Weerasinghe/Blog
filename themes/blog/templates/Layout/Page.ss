<div class="block hero">
                <div class="hero__slider js-slider">
                    <div class="hero-slide">
                        <div class="hero-slide-image lazy"
                             style="background-image: url('$resourceURL('themes/blog/static/images/hero2.png')');"
                             data-src="$resourceURL('themes/blog/static/images/hero2.png')">
                        </div>
                        <div class="text-center hero-slide-content">
                                    <h3 class='h1'> My First Site </h3>
                                    <p> This is a simple example for the silverstripe web apllication </p>
                                </div>
                        </div>

                    <div class="hero-slide">
                        <div class="hero-slide-image lazy"
                             style="background-image: url('$resourceURL('themes/blog/static/images/hero3.png')');"
                             data-src="$resourceURL('themes/blog/static/images/hero3.png')">
                        </div>
                        <div class="text-center hero-slide-content">
                            <h3 class='h1'> My First Site </h3>
                            <p> This is a simple example for the silverstripe web apllication </p>
                        </div>
                    </div>
                </div>

                <div class="hero__slider__arrows js-slider-arrow"></div>
</div>
<li><i class="fa fa-tags"></i> $CategoriesList</li>

<% with $Photo.ScaleWidth(750) %>
    <img class="my-custom-class" src="$URL" alt="" width="$Width" height="$Height" />
<% end_with %>