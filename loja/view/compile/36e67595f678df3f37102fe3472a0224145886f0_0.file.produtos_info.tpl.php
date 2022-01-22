<?php
/* Smarty version 3.1.44, created on 2022-01-21 23:59:32
  from '/opt/lampp/htdocs/loja/view/produtos_info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.44',
  'unifunc' => 'content_61eb3ad4f0f3c3_02677234',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '36e67595f678df3f37102fe3472a0224145886f0' => 
    array (
      0 => '/opt/lampp/htdocs/loja/view/produtos_info.tpl',
      1 => 1642805011,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61eb3ad4f0f3c3_02677234 (Smarty_Internal_Template $_smarty_tpl) {
?> <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRO']->value, 'P');
$_smarty_tpl->tpl_vars['P']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
$_smarty_tpl->tpl_vars['P']->do_else = false;
?>

      <h3 class="text-center"><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
 - Ref: <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_ref'];?>
</h3>
<hr>

<div class="row">
    
  
        <div class="col-md-6 ">

        <img class="thumbnail" src="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_img_g'];?>
" alt="" > 

    </div>

   
	    <div class="col-md-6 thumbnail">
        
          <img src="<?php echo $_smarty_tpl->tpl_vars['TEMA']->value;?>
/images/logo-pagseguro.png" alt="">
  <hr>
            
        
        <div class="col-md-6">
           <h3 class="text-center preco">R$ <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_valor'];?>
</h3>   
            
        </div>
      
        <div class="col-md-6">
            <form name="carrinho" method="post" action="">
                <input type="hidden" name="pro_id" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_id'];?>
">
                <input type="hidden" name="acao" value="add">
            <button  class="btn btn-success btn-lg">Comprar</button>
             </form> 
            
        </div>
           
         
      

     
        
    

    </div>




</div>
        <!-- -->
                 <div class="row">
            <hr>
              <h4 class="text-center">Mais imagens</h4>

              <ul style="list-style: none">
                 

                      <li class="col-md-3 ">
                          <img src="" alt="" class="thumbnail">


                      </li>

                 
              </ul>
              

        </div>
                  
        <div class="row">
            <hr>
            <h4 class="text-center">Descrição do produto</h4>

            <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_desc'];?>
 

        </div>  
            <br>
            <br>


  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
