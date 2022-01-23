<?php
/* Smarty version 3.1.44, created on 2022-01-23 00:51:05
  from 'C:\xampp\htdocs\loja\view\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.44',
  'unifunc' => 'content_61ec9869252ac6_86908288',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a8c005515960d875068f7392a992619dc8ee0053' => 
    array (
      0 => 'C:\\xampp\\htdocs\\loja\\view\\login.tpl',
      1 => 1642895371,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61ec9869252ac6_86908288 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>

<html>
    <head>
        <title><?php echo $_smarty_tpl->tpl_vars['TITULO_SITE']->value;?>
</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/contatos/contatos.css" rel="stylesheet" type="text/css"/>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/js/jquery-2.2.1.min.js" type="text/javascript"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/js/bootstrap.min.js" type="text/javascript"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/contatos/contatos.js" type="text/javascript"><?php echo '</script'; ?>
>
        <!-- meu aquivo pessoal de CSS-->
        <link href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/css/tema.css" rel="stylesheet" type="text/css"/>
     <!-- HTML5 shim e Respond.js para suporte no IE8 de elementos HTML5 e media queries -->
    <!-- ALERTA: Respond.js não funciona se você visualizar uma página file:// -->
    <!--[if lt IE 9]>
      <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"><?php echo '</script'; ?>
>
    <![endif]-->
    
    </head>
    <body>
        
        <!-- começa  o container geral -->
        <div class="container-fluid">
            
            <!-- começa a div topo -->
            <div class="row" id="topo">
                 
                
                <div class="container">
                <img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/images/logo.png" alt=""> 
                       
                </div>    
            
            </div><!-- fim da div topo -->
            
            <div class="container">
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
            </div>


                    
                
                     
                
                
            </div><!-- fim DIV conteudo-->
            
            <!-- começa div rodape -->
            <div class="row" id="rodape">
                <center><h4><?php echo $_smarty_tpl->tpl_vars['TITULO_SITE']->value;?>
</h4></center>
            
            </div><!-- fim div rodape-->
            
            
            
           </div> <!-- fim do container geral -->
        
        
        
        
    </body>
</html>
<?php }
}
