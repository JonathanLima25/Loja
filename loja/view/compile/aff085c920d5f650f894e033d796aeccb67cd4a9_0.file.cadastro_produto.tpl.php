<?php
/* Smarty version 3.1.44, created on 2022-01-23 15:38:20
  from 'C:\xampp\htdocs\loja\view\cadastro_produto.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.44',
  'unifunc' => 'content_61ed685c078246_13354083',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aff085c920d5f650f894e033d796aeccb67cd4a9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\loja\\view\\cadastro_produto.tpl',
      1 => 1642948696,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61ed685c078246_13354083 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container">
    <div class="row">
        
        <form class="form-horizontal" id="frmcontatoazul"  method="post">
        <fieldset>
        
        <!-- Form Name -->
        <legend>Cadastro do Produto</legend>
        
        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="txtinputnome">Nome</label>  
          <div class="col-md-8">
          <input id="txtinputnome" name="txtinputnome" placeholder="Escreva o nome do produto" class="form-control input-md" required="required" type="text" />
          <span class="help-block">help</span>  
          </div>
        </div>

       <!-- Textarea -->
       <div class="form-group">
        <label class="col-md-4 control-label" for="txtinputarea">Descrição</label>
        <div class="col-md-8">                     
          <textarea class="form-control" id="txtinputarea" rows="6" name="txtinputdesc" placeholder="Descrição do Produto!"></textarea>
        </div>
      </div>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="txtinputarea">Quantidade</label>  
        <div class="col-md-8">
        <input name="txtinputquantidade" placeholder="Quantidade de Produtos no Estoque" class="form-control input-md" required="required" type="number" />
        <span class="help-block">help</span>  
        </div>
      </div>
        
        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="txtinputarea">Valor</label>  
          <div class="col-md-8">
          <input  name="txtinputvalor" placeholder="Escreva o valor unitário do produto" class="form-control input-md" required="required" type="number" />
          <span class="help-block">help</span>  
          </div>
        </div>

        
        
        
        
        
        
        <!-- Button -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="btnenviar"></label>
          <div class="col-md-8">

            <button id="btnenviar" name="btnenviar" type="submit" class="btn btn-primary btn-lg">Cadastrar</button>
          </div>
        </div>
        
        </fieldset>
        </form>
        
	</div>
</div><?php }
}
