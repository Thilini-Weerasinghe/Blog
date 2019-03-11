$CommentForm
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