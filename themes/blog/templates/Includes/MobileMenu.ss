
<div class="mobile-menu off-canvas position-left" id="mobileMenu" data-transition="overlap" data-off-canvas>
    <ul class="mobile-menu__nav vertical menu accordion-menu" data-accordion-menu data-submenu-toggle="true">

        <% loop $Menu(1) %>
            <li>
                <a class="<% if $LinkingMode == $current %>active<% end_if %>" href="$Link">
                    $MenuTitle
                </a>
                <%--<% if $isSection %>--%>
                <% if $Children %>
                    <ul class="sub-menu secondary">
                        <% loop $Children %>
                            <li class="<% if $isCurrent %>current<% else_if $isSection %>section<% end_if %>">
                                <a href="$Link">$MenuTitle</a>
                            </li>
                        <% end_loop %>
                    </ul>
                <% end_if %>
                <%--<% end_if %>--%>
            </li>
        <% end_loop %>

    </ul>
</div>