{*
 * Infinity Studio Offcial Website.
 * Copyright (C) 2016 Infinity Studio.
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @author LasmGratel <lasm_gratel@hotmail.com>
 * @author Cannon_fotter <gfyguofanyi@gmail.com>
 *}
{include file="header.tpl"}
<main>
    <div class="container">
        {if $pn eq "FoodCraft"}
            <h2 class="text-center">FoodCraft</h2>
            <h4 class="text-center">食物工艺</h4>
            <p>FC</p>
        {elseif $pn eq "HMCL"}
            <h2 class="text-center">Hello Minecraft Launcher</h2>
            <p class="image-center">
                <img src="http://ww3.sinaimg.cn/large/005GStl5jw1er1ko9642mj30n60f278i.jpg" class="img-responsive"
                     alt="HMCL">
            </p>
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

                    <p><a href="http://pan.baidu.com/s/1dDBxTLn">百度云</a>&nbsp;|&nbsp;<a
                                href="//ci.infinity-studio.org/job/HMCL">最新构建</a></p>
                </blockquote>
                <blockquote class="a">
                    <h4>另</h4>
                    <ol>
                        <li>正版登录不会保存密码，记住登录状态实现方法和其他启动器均不一样！无须担心密码泄露！其他登录模式均不保存密码</li>
                        <li><a href="http://www.github.com/huanghongxun/HMCL/">Github地址</a></li>
                    </ol>
                </blockquote>
            </div>
        {elseif $pn eq "ExoticPower"}
            <div class="row">
                <div class="col-md-6 col-md-offset-3"><br>

                    <h1 class="text-center">Exotic Power</h1>

                    <h2 class="text-center">异域之能</h2>
                    </br>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-6 col-md-offset-3">
                    一个以Minecraft世界观设定为基础的科技Mod，主要内容包括异域能量、对应的机器如组装机、重构机、传送机等。<br/>
                    <a href="http://tieba.baidu.com/p/3995322593" data-rel="button" class="btn btn-info">转至贴吧介绍页面</a>
                </div>
            </div>
            <hr class="half-rule">
            <div class="row text-center">
                <div class="col-md-6 col-md-offset-3">
                    <b>一、什么是ExoticPower</b>
                    <br/>
                    ExoticPower是一个冒险、科技、魔法并存的多条科技线阵营Mod，不同阵营之间互相合作或者互相敌对，重在对异世界（下界、末地）的探索，以获得新能源为目标，包含长距定点能量传输元件、长距转移定位元件、无线传输器、大型空间现象发生元件等大型元件或机器，前期侧重于探险类。玩家在游戏中需选择一个阵营和其中的流派（科技线）发展，提升自己的能力（扩充科技线），达到imbac程度
                    <br/>
                    <b>二、Mod背景</b>
                    <br/>
                    格林尼治历683年，科学家们在对非自然现象的调查中发现了一种与现存的科学和魔法作用力都不同的作用力，称之为第六作用力，也就是所谓“异域之能”。<br/>
                    异域之能被证实来自于末地的虚空中，很有可能是来自于被乱流吞噬的熵重组而成的能量，商人们看见了其中的利益，于是争相开发之。异域之能在世界中的存在形式为固定的“空间裂隙”，也就是俗称的“能量节点”。<br/>
                    然而五年后的688年，情况却开始变化，节点开始变得不稳定而容易崩溃，而世界则发生了所谓“崩坏”，怪物开始横行于世……政府倒台……人们人心惶惶危在旦夕……<br/>
                    这个时候人们内部产生了分歧，进而形成了3个阵营，又因为流派不同被划分为了9个职业，各个阵营都以自己的方式行事，然而并没有人知道谁的道路是正确的……<br/>
                    或许，这场崩坏，是神指引人类迈上新高度的开始，又或者，是神已经抛弃了人类......
                    <br/>
                </div>
            </div>
        {elseif $pn eq "Singularity"}

        {/if}
        {elseif $pn eq "simon"}
        {include file="zuozhe.tpl"}
        {/if}
      {elseif $pn eq "simon2"}
      {include file="zuozhe.tpl"}
      {/if}
    </div>
</main>
{include file="footer.tpl"}
