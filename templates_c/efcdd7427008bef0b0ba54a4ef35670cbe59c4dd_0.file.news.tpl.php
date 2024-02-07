<?php
/* Smarty version 3.1.48, created on 2023-08-21 22:03:30
  from 'C:\wamp64\www\nehzat\news.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_64e3df32b79369_61158784',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'efcdd7427008bef0b0ba54a4ef35670cbe59c4dd' => 
    array (
      0 => 'C:\\wamp64\\www\\nehzat\\news.tpl',
      1 => 1692655143,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64e3df32b79369_61158784 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="ostan-items-container">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['allData']->value['contents'], 'content', false, NULL, 'cnts', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['content']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['content']->value) {
$_smarty_tpl->tpl_vars['content']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_cnts']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_cnts']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_cnts']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_cnts']->value['total'];
?>

        <div class="ostan-item d-flex">

            <div class="ostan-img">
                <img src="img/5553_936.jpg">
            </div>

            <div class="ostan-item-content">
                <p class="ostan-item-title">
                    <?php echo $_smarty_tpl->tpl_vars['content']->value['title'];?>
 </p>
                <a href="#" class="ostan-item-text">
                    <i class="fas fa-circle title-icon"></i>
                    <?php echo $_smarty_tpl->tpl_vars['content']->value['subtitle'];?>

                </a>
                <p class="ostan-item-title-end"></p>
            </div>

        </div>

        <?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_cnts']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_cnts']->value['last'] : null)) {?>
            <hr class="hr-ostan">
        <?php }?>

    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

</div><?php }
}
