<hr class="half-rule">
<div class="container">
    <div class="text-center">
        {if $nav}
            {foreach from=$footer key=k item=v}
                <a href="{$v.nav_link}" title="{$v.nav_description}">{$v.nav_name}</a>
                &nbsp;|
            {/foreach}
        {/if}
        {nocache}
            <script src="https://s4.cnzz.com/z_stat.php?id=1256855039&web_id=1256855039" language="JavaScript"></script>
        {/nocache}
        <br>
        Copyright &copy; 2015 <a href="http://www.infinity-studio.org">Infinity Studio</a> &middot; All Rights
        Reserved &middot;
    </div>
</div>
<hr class="half-rule">
<!-- jQuery -->
<script src="//cdn.bootcss.com/jquery/2.1.4/jquery.min.js"></script>
<!-- Bootstrap js -->
<script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

</body>
</html>