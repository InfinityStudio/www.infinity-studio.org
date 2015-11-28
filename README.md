# Infinity Studio 官方网站

#### 本网站的建立，离不开以下项目的支持
+ [Nginx](http://nginx.org/)
+ [MySQL](http://www.mysql.com/)
+ [PHP](http://www.php.net/)
+ [Git](http://git-scm.com/)
+ [Smarty](http://www.smarty.net/)
+ [Bootstrap](http://getbootstrap.com/)
+ [LESS](http://lesscss.org/)

#### 网站开发人员
+ Lasm_Gratel <lasm_gratel@hotmail.com>
+ Cannon_fotter <gfyguofanyi@gmail.com>
+ Blealtan <bevan159632@gmail.com>

#### 开发人员必读
**项目编码规范**-[PHP-FIG](http://www.php-fig.org/)

**PHP文件命名空间**
+ 业务流程控制器(Controller)

    `Command\Controller` ---- `/command/controller/`

+ 业务模型(Model)

    `Command\Model` ---- `/command/model`

+ 中间类(Classes)

    `Command\Classes` ---- `/command/classes`

+ 中间接口(Interfaces)

    `Command\Interfaces` ---- `/command/interfaces`

+ 库(Lib)

    `Command\Lib` ---- `/command/lib`


**增加新的namespace**

1.在`init.php`中`$loader = new Command\Tools\LoadClass();`后添加如下代码

    `$loader->addNamespace('Command\NewNamespace', ROOT . '/command/DIR');`
2.在希望调用对应类的文件头部添加`use Command\NewNamespace;`即可直接new，无需手动require文件

> NOTICE：
> 在实际需要访问的页面头部，还需要引入`init.php`来使页面正常工作

#### 另见
[Infinity Studio](http://www.infinity-studio.org)