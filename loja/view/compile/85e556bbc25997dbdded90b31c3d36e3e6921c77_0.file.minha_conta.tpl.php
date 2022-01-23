<?php
/* Smarty version 3.1.44, created on 2022-01-22 23:36:05
  from 'C:\xampp\htdocs\loja\view\minha_conta.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.44',
  'unifunc' => 'content_61ec86d5458361_26265173',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '85e556bbc25997dbdded90b31c3d36e3e6921c77' => 
    array (
      0 => 'C:\\xampp\\htdocs\\loja\\view\\minha_conta.tpl',
      1 => 1642890718,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61ec86d5458361_26265173 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container">
    <div class="row">
        
        <form class="form-horizontal" id="frmcontatoazul" action="envio">
        <fieldset>
        
        <!-- Form Name -->
        <legend>Minha Conta</legend>
        

        
        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="txtinputemail">Email</label>  
          <div class="col-md-8">
          <input id="txtinputemail" name="txtinputemail" placeholder="Coloque um email válido" class="form-control input-md" required="required" type="email" />
          <span class="help-block">help</span>  
          </div>
        </div>

        
        <!-- Textarea -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="txtinputarea">Senha</label>
          <div class="col-md-8">                     
            <input id="txtinputemail" name="txtinputemail" placeholder="" class="form-control input-md" required="required" type="password"/>
            <span class="help-block">help</span>
            </div>
        </div>
        
        <!-- Button -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="btnenviar"></label>
          <div class="col-md-8">
            <button id="btnenviar" name="btnenviar" class="btn btn-primary btn-lg">Enviar</button>
          </div>
        </div>
        
        </fieldset>
        </form>
        
	</div>
</div><?php }
}
