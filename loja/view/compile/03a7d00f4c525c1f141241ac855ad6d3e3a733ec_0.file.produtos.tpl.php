<?php
/* Smarty version 3.1.44, created on 2022-01-22 01:42:57
  from '/opt/lampp/htdocs/loja/view/produtos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.44',
  'unifunc' => 'content_61eb53115e2b46_93848719',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '03a7d00f4c525c1f141241ac855ad6d3e3a733ec' => 
    array (
      0 => '/opt/lampp/htdocs/loja/view/produtos.tpl',
      1 => 1642811728,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61eb53115e2b46_93848719 (Smarty_Internal_Template $_smarty_tpl) {
?><h3>Lista de produtos</h3>
<hr>

 
    <section id="pagincao" class="row">
       <center>
          PAGINAS
       </center>
    </section>
  
       
    <!--  começa lista de produtos  ---->   
  <section id="produtos" class="row">  
 
		<ul style="list-style: none" >
		    
		    
		  
		                  <div class="row" id="pularliha">
		        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRO']->value, 'P');
$_smarty_tpl->tpl_vars['P']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
$_smarty_tpl->tpl_vars['P']->do_else = false;
?> 
		           
		        <li class="col-md-4">

		            <div class="thumbnail">

		                <a href="<?php echo $_smarty_tpl->tpl_vars['PRO_INFO']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_slug'];?>
">


		                    <img src="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_img'];?>
" width="200" height="200" alt="" > 

		                    <div class="caption">

		                        <h4 class="text-center"> <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
</h4> 

		                        <h3 class="text-center text-danger"><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_valor'];?>
</h3>

		                    </div>

		                </a>

		            </div>


		        </li>

		        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		        
		         </div>
		         
		    
		</ul>
    
    </section>
    
    
     <!--  paginação inferior   -->  
    <section id="pagincao" class="row">
    <center>
    PAGINAS
    </center>
    </section>
<?php }
}
