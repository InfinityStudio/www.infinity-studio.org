{include file="header.tpl"}
<main>
    <div class="container">
        {if $pn eq "FoodCraft"}
            <p>FC</p>

        {elseif $pn eq "HMCL"}
            <h2 class="text-center">Hello Minecraft Launcher</h2>
            <p class="text-center"><img src="http://ww3.sinaimg.cn/large/005GStl5jw1er1ko9642mj30n60f278i.jpg" class="img-responsive" alt="HMCL"></p>
            <div>
                <blockquote class="c">
                    <h4>功能特点</h4>
                    <ol>
                        <li>跨平台；</li>
                        <li>简单的操作；</li>
                        <li>离线模式、正版、skinme登录、twitch直播；</li>
                        <li>下载原版客户端；</li>
                        <li>支持所有的Forge，Optifine，LiteLoader的自动安装；</li>
                        <li>自动下载缺失的库（Forge库不保证下载成功）和minecraft.jar以减小整合包体积/不违反EULA；</li>
                        <li>下载资源文件；</li>
                        <li>修改游戏窗口大小(分辨率)，全屏；</li>
                        <li>生成一键启动，快速运行游戏；</li>
                        <li>支持更换启动器主题、背景。</li>
                    </ol>
                </blockquote>
                <blockquote class="b">
                    <h4>下载</h4>
                    <p><a href="http://pan.baidu.com/s/1dDBxTLn">百度云</a>&nbsp;|&nbsp;<a href="//ci.infinity-studio.org/job/HMCL">最新构建</a></p>
                </blockquote>
                <blockquote class="a">
                    <h4>另</h4>
                    <ol>
                        <li>正版登录不会保存密码，记住登录状态实现方法和其他启动器均不一样！无须担心密码泄露！其他登录模式均不保存密码</li>
                        <li><a href="http://www.github.com/huanghongxun/HMCL/">Github地址</a></li>
                    </ol>
                </blockquote>
            </div>
        {/if}
    </div>
</main>
{include file="footer.tpl"}