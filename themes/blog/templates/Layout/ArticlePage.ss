<%--<li><i class="fa fa-tags"></i>--%>
    <%--<% loop $Categories %>$Title<% if not $Last %>, <% end_if %><% end_loop %>--%>
<%--</li>--%>

<li><i class="fa fa-tags"></i> $CategoriesList</li>

<div class="comments">
    <ul>
        <% loop $Comments %>
            <li>
                <img src="images/comment-man.jpg" alt="" />
                <div class="comment">
                    <h3>$Name<small>$Created.Format('j F, Y')</small></h3>
                    <p>$Comment</p>
                </div>
            </li>
        <% end_loop %>
    </ul>
</div>

<% if $Brochure %>
    <div class="row">
        <% with $Brochure %>
            <div class="col-sm-12">
                <a href="$URL" class="btn btn-warning btn-block"><i class="fa fa-download"></i> Download brochure [$Extension] ($Size)</a>
            </div>
        <% end_with %>
    </div>
<% end_if %>