<?php
/* Smarty version 4.1.0, created on 2023-03-21 18:27:04
  from 'app:..ModuloCertificadoindex.' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6419e8e87ceaf1_59754665',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a127be1a68a70e4bd6eca7a2118f9f50fdd736d6' => 
    array (
      0 => 'app:..ModuloCertificadoindex.',
      1 => 1679419617,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6419e8e87ceaf1_59754665 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="http://localhost/ojs-3.3.0-14/ojs-3.3.0-14/ModuloCertificado/styles/style_page.css?v=<?php echo '<?php'; ?>
 echo time(); <?php echo '?>'; ?>
" />
</head>

<body>
  <!-- CABECERA -->
  <header class="header_nav section">
    <h1>Evaluación de artículos</h1>
  </header>
  <main>
    <section class="container_consulta section">
      <div class="consulta_text">
        <h2 class="consulta_text_title">Sistema de consulta de artículos</h2>
      </div>
      <div class="consulta_content">
        <!-- FORMULARIO -->
        <form action="POST" class="consulta_form" id="frm">
          <div class="container_imputs">
            <input class="txt_id" type="search" placeholder="Buscar" name="campo" value="<?php echo $_smarty_tpl->tpl_vars['revistaTitle']->value;?>
" required />
            <div class="container_filter">
              <label> Filtros</label>
              <select class="select_filter" name="filtro">
                <option name="titulo" value="titulo" selected>Título</option>
                <option name="username" value="username">Nombre de usuario</option>
              </select>
            </div>
          </div>
          <input class="btn_form" type="submit" value="Consultar" />
        </form>
        <!-- APARTADO PARA GENERAR EL CERTIFICADO -->
        <div class="consulta_certificates">
          <div class="container_consulta_certificates">
            <table>
              <thead>
                <th>Id submission</th>
                <th>Título del artículo</th>
                <th>Estado</th>
                <th>Certificado</th>
              </thead>
              <tbody></tbody>
            </table>
            <p class="msg_info hidden">No se encontraron resultados</p>
          </div>
        </div>
      </div>
    </section>
    <!-- Template que se usa mediante jsvascript para it dibujando las filas en la tabla -->
    <template id="row_template">
      <tr class="row">
        <td class="id"></td>
        <td class="title"></td>
        <td class="status"><span></span></td>
        <td class="btn"><a class="btn_certificates" href="#" target="__blank" rel="noopener">Generar</a></td>
      </tr>
    </template>
  </main>
  <?php echo '<script'; ?>
 src="http://localhost/ojs-3.3.0-14/ojs-3.3.0-14/ModuloCertificado/js/certificado.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
}
