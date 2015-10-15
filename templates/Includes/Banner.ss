<% if BannerTitle && BannerImage %>
<% if BannerLayout == 1 %>
    <div>
        <h1>{$BannerTitle}</h1>
        {$BannerImage.ScaleHeight(300)}
    </div>
<% else_if BannerLayout == 2 %>
    <%-- different layout options --%>
<% end_if %>
