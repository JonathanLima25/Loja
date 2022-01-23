<?php
/* Smarty version 3.1.44, created on 2022-01-22 23:02:34
  from 'C:\xampp\htdocs\loja\view\cadastro.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.44',
  'unifunc' => 'content_61ec7efa98ef55_89653923',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a1da27746e5f8c1c6b5f0a25407500fa28d92004' => 
    array (
      0 => 'C:\\xampp\\htdocs\\loja\\view\\cadastro.tpl',
      1 => 1642888343,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61ec7efa98ef55_89653923 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container">
    <div class="row">
        
        <form class="form-horizontal" id="frmcontatoazul" action="envio">
        <fieldset>
        
        <!-- Form Name -->
        <legend>Cadastro de Vendedor</legend>
        
        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="txtinputnome">Nome</label>  
          <div class="col-md-8">
          <input id="txtinputnome" name="txtinputnome" placeholder="Escreva seu nome completo" class="form-control input-md" required="required" type="text" />
          <span class="help-block">help</span>  
          </div>
        </div>
        
        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="txtinputemail">Email</label>  
          <div class="col-md-8">
          <input id="txtinputemail" name="txtinputemail" placeholder="Coloque um email válido" class="form-control input-md" required="required" type="email" />
          <span class="help-block">help</span>  
          </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="txtinputemail">Telefone</label>  
          <div class="col-md-8">
          <input id="txtinputemail" name="txtinputemail" placeholder="(12)99999-9999" class="form-control input-md" required="required" type="email" />
          <span class="help-block">help</span>  
          </div>
        </div>
        
        
        <!-- Text input-->
        
        
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
            <button id="btnenviar" name="btnenviar" class="btn btn-primary btn-lg">Cadastrar</button>
          </div>
        </div>
        
        </fieldset>
        </form>
        
	</div>
</div><?php }
}
