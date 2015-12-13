<?php /* Smarty version 3.1.27, created on 2015-12-13 20:38:25
         compiled from "G:\Develop\htdocs\html\command\templates\a\template.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:25624566d66c10fe146_31158817%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '894b2d4def40563e013da2c918d412684054f79b' => 
    array (
      0 => 'G:\\Develop\\htdocs\\html\\command\\templates\\a\\template.tpl',
      1 => 1450009649,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25624566d66c10fe146_31158817',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_566d66c18a2968_17303396',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_566d66c18a2968_17303396')) {
function content_566d66c18a2968_17303396 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '25624566d66c10fe146_31158817';
echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Page Header
        <small>Optional description</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">

      <!-- Your Page Content Here -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>