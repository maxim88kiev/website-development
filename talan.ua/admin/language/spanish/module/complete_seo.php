<?php
// English   Multilingual SEO      Author: e-slap
// Heading
$_['heading_title']		                   = '<img src="view/seo_package/img/icon.png" style="vertical-align:top;padding-right:4px"/>Complete SEO Package';
$_['module_title']		                   = 'Complete SEO <span>Package</span>';
  
// Tab seo editor
$_['tab_seo_editor']      				   = 'Editor SEO';
$_['tab_seo_editor_product']			   = 'Productos';
$_['tab_seo_editor_category']			   = 'Categorías';
$_['tab_seo_editor_information']		   = 'Información';
$_['tab_seo_editor_manufacturer']	       = 'Marcas';
$_['tab_seo_editor_image']	               = 'Imágenes';
$_['tab_seo_editor_common']			       = 'Páginas Comunes';
$_['tab_seo_editor_special']			   = 'Páginas Especiales';
$_['tab_seo_editor_redirect']			   = 'Redirección de Url';
$_['tab_seo_editor_404']			       = 'Gestión 404';
$_['text_editor_count']					   = 'Contar';
$_['text_editor_query']					   = 'Consulta (Query)';
$_['text_editor_query_redirect']           = 'Consulta (Query)';
$_['text_editor_query_common']		       = 'Consulta (valor despues de ruta=)';
$_['text_editor_query_special']		       = 'Consulta (ej: custom_id=1)';
$_['text_editor_image']					   = 'Imagen';
$_['text_editor_name']					   = 'Nombres';
$_['text_editor_title']					   = 'Título';
$_['text_editor_meta_title']			   = 'Títulos (Meta)';
$_['text_editor_meta_keyword']		       = 'Palabras (Meta)';
$_['text_editor_meta_description']	       = 'Descripción (Meta)';
$_['text_editor_url']					   = 'URL (SEO)';
$_['text_editor_url_redirect']	           = 'Redirección';
$_['text_editor_tag']					   = 'Etiquetas (Tags)';
$_['text_editor_h1']					   = 'Seo H1';
$_['text_editor_item_name']	               = 'Nombre de Producto';
$_['text_editor_image_name']	           = 'Nombre';
$_['text_editor_image_alt']	               = 'Alternativo (Alt)';
$_['text_editor_image_title']	           = 'Título';
$_['text_editor_related']			       = 'Relacionados';
$_['text_seo_new_alias_title']			   = 'Añadir (alias) Nueva URL';
$_['text_seo_new_alias_info']			   = 'Sobrescribir una url que utiliza el parámetro en la ruta<br />Ejemplo: index.php?route=<b>account/account</b><br /><br/>En el campo de consulta colocar <b>account/account</b> (no es necesario insertar (=) en la ruta)<br/>En el campo de la URL SEO poner la url que desea: <b>my-account</b>.';
$_['text_seo_new_spec_alias_info']	       = 'Sobrescribir las urls que pertenece a cualquier módulo personalizado, incluso si no está hecho para la gestión de urls amigables.<br /><br/>Ejemplo: index.php?<b>blog_news_id=123</b><br /><br/>En el campo de la consulta colocar <b>blog_news_id=123</b><br/>En el campo de la URL SEO poner la url que desea: <b>a-great-url-for-my-great-news</b>';
$_['text_seo_new_redirect']	               = 'Esto genera una redirección 301, para indicar a los motores de búsqueda que la url actual se ha movido permanentemente a una nueva url. Utilice esta función para corregir los errores que muestra google webmaster.<br/><br/>En la consulta coloquie la url completa <b>http://example.com/broken-url</b><br/>En el campo de redireccionamiento poner la nueva url <b>http://example.com/fixed-url</b><br/><br/>Redireccionamiento Dinámico<br/>Si quiere hacer que funcione incluso con más actualizaciones url llenar el campo redireccionar esa manera:<br/><b>product/product&product_id=42</b> (cuando 42 es el ID actual del product)';
$_['text_info_limits_tab']                 = 'Contenido (Meta)';
$_['text_info_limits_title']               = 'Limite de descripción y título (Meta)';
$_['text_info_robots'] = '<h4>Meta Robots</h4>
<p>La metaetiqueta "robots" permite utilizar un enfoque preciso y específico de una página para controlar la forma en que se debe indexar una página en concreto y cómo se debe mostrar a los usuarios en los resultados de búsqueda. La configuración definida aquí será añadido en todas las páginas de su tienda.<br />A continuación, puede editar un producto específico y cambiar el valor para los robots (en la pestaña de datos) sólo en este producto.</p>
<table class="table table-bordered">
  <tbody><tr><th>Directiva</th><th>Resultado</th></tr>
  <tr><td><code><span>all</span></code></td>
    <td>No hay restricciones de indexación ni de presentación de contenido. 
	  Nota: Esta directiva es el valor predeterminado 
      y no tiene ningún efecto si se muestra de forma explícita.</td></tr>
  <tr><td><code><span>noindex</span></code></td>
    <td>No se muestra ni esta página ni un enlace -en caché- en los resultados de búsqueda.</td></tr>
  <tr><td><code><span>nofollow</span></code></td>
    <td>No se siguen los enlaces de esta página.</td></tr>
  <tr><td><code><span>none</span></code></td>
    <td>Equivalente a <code><span>noindex,<wbr> nofollow</span></code></td></tr>
  <tr><td><code><span>noimageindex</span></code></td>
    <td>No se indexan las imágenes de esta página.</td></tr>
</tbody></table>
<h4>Configuración Automatica</h4>
<p>Una vez habilitado, podrá predefinir el valor por defecto para los robots, el módulo aplicará automáticamente el mejor parámetro sólo para algunas páginas especificas. Consulte la siguiente lista para saber qué parámetros se ajustan automáticamente en su página web:</p>
<table class="table table-bordered">
<tr><th style="width:220px">Tipo</th><th>Valor Meta Robots</th></tr>
<tr><td>Paginación de páginas</td><td><code>noindex, follow</code></td></tr>
<tr><td>Página de busqueda</td><td><code>none</code> (noindex, nofollow)</td></tr>
</table>
';
$_['text_info_limits']                     = '<h4>Límite de Contenido Meta en Títulos y Descripción</h4>
<p>El título y la descripción (Meta) son muy importantes, es lo que el usuario verá al hacer una busqueda en los motores de búsqueda.<br />El título como enlace principal y un pequeño texto de descripción del producto o página será lo que el motor de busqueda mostrará como resultado.</p>
<p><img src="view/seo_package/img/meta_title_desc.png" alt="" class="img-thumbnail"/></p>
<p>Google mostrará el título con 67 caracteres, pero ingresará hasta 200 caracteres en la indexación.Para saber si está correcto, será muy fácil visualizar el color del campo título y descripción, se está en naranja tendrá los 67 caracteres, si está en rojo tendrá más de 85 caracteres.<br/>Los límites para la descripción son de 155 caracteres y 200 para la indexación en el motor de busqueda.</p>
<p><span style="color:#fc7402">Color Naranja</span> significa que el texto seguramente será cortado pero la totalidad del texto será indexado.<br /><span style="color:#f23333">Color Rojo</span> significa que algunas de las palabras de su descripción no serán indexadas.</p>';

// Tab seo configuration
$_['tab_seo_options']      	               = 'Configuración (SEO)';
$_['text_seo_tab_general_1']	           = 'Principal (Opciones)';
$_['text_seo_tab_general_2']	           = 'Idiomas (prefix)';
$_['text_seo_tab_general_3']	           = 'Hreflang';
$_['text_seo_tab_general_4']	           = 'Opciones (Keyword)';
$_['text_seo_tab_general_5']	           = 'Modo Automático';
$_['text_seo_tab_general_6']	           = 'Paginación';
$_['text_seo_tab_general_7']			   = 'Cache';
$_['text_seo_tab_general_8']	           = 'Enlace Canónicas';
$_['text_seo_tab_general_9']	           = 'Multitienda';
$_['text_seo_tab_general_10']	           = 'Comentarios';
$_['text_seo_tab_general_11']	           = 'Requiere Cabeceras';
$_['text_seo_tab_general_12']	           = 'Sitemap';
$_['text_seo_tab_general_13']	           = 'Meta Robots';
$_['text_info_general']		               = 'Estos ajustes afectan el funcionamiento global de la SEOs, entran en vigor inmediatamente y se pueden cambiar en cualquier momento.';
$_['text_info_general_2']		           = 'El modo prefijo de lenguaje da permiso para añadir el código del idioma en el inicio de la url: website.com/en/<br/>Es muy útil para separar entre idiomas.';
$_['text_info_general_3']		           = 'Hreflang, esta etiqueta permite a los motores de búsqueda conocer la (URL) dirección de la página actual para otros idiomas.<br/>Una vez activado se incluirá en todas las páginas de tienda, y también en el Seo Package Sitemap (feed > seo package sitemap).<br/> Más información: <a href="https://support.google.com/webmasters/answer/189077?hl=en" target="new">aquí</a>.';
$_['text_info_general_6']		           = 'Sobrescribir los enlaces de paginación del SEO amigable.<br />Ejemplo: website.com/category?page=3 se convertirá en website.com/category/page-3';
$_['text_info_general_7']		           = 'La función cache acelerará la carga de su tienda, almacenando todos los enlaces (URL) en lugar de volver a hacer la llamada de cada url.';
$_['text_info_general_8']		           = 'El enlace canónico informa a los motores de búsqueda cual es la página principal, si encuentra una otra página con el mismo contenido, el buscador será redirigido a la página original, por medio de la etiqueta (rel=”canonical”), esto es importante con el fin de evitar sanciones de contenido duplicado.';
$_['text_info_general_9']		           = 'Activar esta opción si desea que los enlaces sean escritos con la url de tienda específica dependiendo del idioma.<br/>Por ejemplo, si usted tiene 2 tiendas definidas:<br/><br/><b>http://en.domain.com</b><br/><b>http://fr.domain.com</b><br/><br/>Por defecto opencart permite cambiar de idioma, pero permanece en el mismo dominio. Si habilita esta opción quien cambie de idioma, será redirigido a su otro dominio. También los enlaces con etiqueta (hreflang) se actualizarán correctamente con el almacén correspondiente.<br/><br/>Cualquier alteración efectuado en su tienda, deberá volver aquí y guardar la nueva configuración.';
$_['text_info_general_10']		           = 'Los comentarios en OpenCart por defecto cargan dinámicamente con ajax, y los motores de búsqueda no hacen el seguimiento del contenido de las opiniones que sería muy importante para su sitio web. Activar esta opción permite que los motores de busqueda capturen el bloque de comentários hecho por los usuarios.<br /><br />Usted tiene que insertar manualmente el código en su plantilla product/product.tpl : <b>&lt;?php echo $seo_reviews; ?&gt;</b><br /><br />A continuación, puede usar el estilo que desee, la clase de contenedor es <b>.seo_reviews</b>, la clase de itens es <b>.seo_review</b>';
$_['text_info_general_12']		           = 'El mapa de tienda (sitemap) tiene que ser configurado en la sección de Feed.<br />Por favor, haga clic en el botón de abajo para configurarlo.';
$_['text_seopackage_sitemap']		       = '<b>SEO Package Sitemap</b>';
$_['text_seo_pagination']		           = '<b>Activar (SEO) paginación</b>';
$_['text_seo_pagination_fix']              = '<b>Fijar Prev/Next</b><span class="help">Fix opencart 2 issue with prev/next in subcategories</span>';
$_['text_seo_canonical']		           = '<b>Canónica (URL)</b><span class="help">Habilitar la url canónica para todas las páginas.</span>';
$_['text_seo_absolute']		               = '<b>Ruta absoluta de categoria</b><span class="help">Permitir el uso de la misma palabra clave para la subcategorías (ej: /men/shoes /women/shoes)</span>';
$_['text_seo_reviews']		               = '<b>Comentarios SEO</b><span class="help">Insertar comentarios en el contenido de HTML.</span>';
$_['text_seo_extension']		           = '<b>Extensión</b><span class="help">Agregue la extensión al final de una palabra clave del producto (ej: .html)</span>';
$_['text_seo_flag']				           = '<b>Modo prefijo de idioma</b><span class="help">Añadir el código del idioma en el inicio de la url (/en, /fr, ...)</span>';
$_['text_seo_flag_short']				   = '<b>Prefijo corto</b><span class="help">Muestra en-gb (en lugar de ) en el caso de tener el formato completo definido.</span>';
$_['text_seo_flag_upper']	               = '<b>Prefijo en mayúsculas</b><span class="help">/EN /FR</span>';
$_['text_seo_flag_default']                = '<b>Lenguaje sin prefijo</b><span class="help">El lenguaje por defecto no utiliza el prefijo del idioma.</span>';
$_['text_seo_urlcache']		               = '<b>Cache de URL</b><span class="help">Acelerar la carga de la página mediante el uso del caché de url.</span>';
$_['text_seo_redirect_dynamic']		       = '<b>Redirección dinámica de enlace</b><span class="help">Enlace dinamico (route=product/product&product_id=32) será redirigido automáticamente si la url amigable existe. El redireccionamiento 301 detendrá la indexación del motor de búsqueda y tomará la url única como referencia.</span>';
$_['text_seo_redirect_canonical']		   = 'Redireccionar para canónica<span class="help">Esto es para las URLs amigables, compruebe que el enlace actual es el enlace canónico, de lo contario no será redirigido a la url canónica. Esto evita tener múltiples direcciones URL activas hacia el mismo artículo. La redirección es 301.</span>';
$_['text_seo_banner']		               = '<b>Enlaces de banners</b><span class="help">Generará dinámicamente el enlace SEO en el banner (usado en los módulos de banner, carousel, slideshow)</span>';
$_['text_seo_banner_help']	               = 'En la sección de banners no coloque el enlace SEO (/category/product_name) pero si coloque en su lugar el enlace por defecto de Opencart: <b>index.php?route=product/product&path=10_21&product_id=54</b>.<br />También puede quitar el index.php, Me gusta esto: <b>product/product&path=23&product_id=48</b>';
$_['text_seo_hreflang']			           = '<b>Activar hreflang (tag)</b>';
$_['text_seo_substore']			           = '<b>Habilitar reescritura multitienda</b>';
$_['text_info_transform']		           = 'Todos estos parámetros definen la forma en como la palabra clave se generará, cuando se guarda un artículo o mediante la actualización en masa.';
$_['text_seo_whitespace']		           = '<b>Espacio</b><span class="help">Reemplazar el espacio vacio con el caracter.</span>';
$_['text_seo_lowercase']		           = '<b>Minúsculas</b><span class="help">QWERTY => qwerty</span>';
$_['text_seo_duplicate']			       = '<b>Duplicadas</b><span class="help">Permitir las palabras clave duplicadas de un mismo producto.</span>';
$_['text_seo_ascii']				       = '<b>Modo ASCII</b><span class="help">Reemplazar los caracteres acentuados por su equivalente.<br/>"éàôï" => "eaoi"</span>';
$_['text_seo_autofill']				       = '<b>Llenado Automático</b>';
$_['text_seo_autofill_on']		           = 'on:';
$_['text_seo_autofill_desc']		       = '<b>Llenado automático</b><span class="help">Si se deja en blanco el campo de inserción o edición, un valor se creará automáticamente en función de la pauta en la ficha de actualización masiva.<br/><br/><b>Esto trabaja en:<br /><br/>- productos<br/>- categorías<br/>- información</span>';
$_['text_seo_autourl']			           = '<b>URL automática</b><span class="help"> Si se deja en blanco en la inserción o edición, la palabra clave (Seo Url) se generará de forma automática mediante el conjunto de parámetros en la pestaña "Actualización en Masa"<br/>Esto trabaja para productos, categorías y información.</span>';
$_['text_seo_autotitle']			       = '<b>Título y Descripción</b><span class="help">Si se deja en blanco en la inserción o editar títulos y descripciones de otros idiomas se copie el título idioma predeterminado y Descripción<br/>Esto trabaja para productos, categorías y información.</span>';
$_['text_headers_lastmod']                 = '<b>Última modificación</b><span class="help">Añadir la fecha de la última actualización del contenido en la cabecera de la página.</span>';
$_['text_all']						       = 'Todo';
$_['text_insert']						   = 'Insertar';
$_['text_edit']						       = 'Editar';

// Tab store seo
$_['tab_seo_store']      			       = 'Tienda (SEO)';
$_['text_info_store']				       = '<h4>SEO de Tienda</h4>
<p>En esta sección se puede personalizar el título, h1, palabras claves y la descripción meta y la descripción en la página de inicio para cada tienda y cada idioma!<br/>La información colocada aquí pasará por alto los valores introducidos en la configuración de OpenCart.</p>
<p>El título como valor puede no ser aplicado de forma automática en función del tema en uso, para insertarlos tiene que editar su plantilla common/home (y lo mismo en su plantilla prod/cat/info) y el siguiente código : <br/><code style="padding:0">&lt;h1&gt;&lt;?php echo $seo_h1; ?&gt;&lt;/h1&gt;<br/>&lt;h2&gt;&lt;?php echo $seo_h2; ?&gt;&lt;/h2&gt;<br/>&lt;h3&gt;&lt;?php echo $seo_h3; ?&gt;&lt;/h3&gt;</code></p>
<p>Considere que los elementos con <b>display:none</b> no serán considerados por los motores de búsqueda, por lo que es posible que desee insertar sólo algunos, en función de su plantilla (h1 - es el más importante).</p>';
$_['entry_robots']                         = '<b>Habilitar Robots</b>';
$_['entry_robots_default']                 = '<b>Valor predefinido</b>';
$_['entry_store_seo_title']                = '<b>Título (Meta)</b>)';
$_['entry_store_title']      		       = '<b>Título H1</b>';
$_['entry_store_h2']      	  	           = '<b>Titulo H2</b>';
$_['entry_store_h3']      	  	           = '<b>Titulo H3</b>';
$_['entry_store_desc']      		       = '<b>Descripción (Meta)</b>';
$_['entry_store_keywords']	               = '<b>Palabras clave (Meta)</b>';

// Tab rich snippets
$_['tab_seo_snippets']			           = 'Rich snippets';
$_['text_seo_tab_snippet_1']		       = 'Google Microdata';
$_['text_seo_tab_snippet_2']		       = 'Facebook';
$_['text_seo_tab_snippet_3']		       = 'Twitter Card';
$_['text_seo_tab_snippet_3']		       = 'Twitter Card';
$_['text_seo_tab_snippet_4']		       = 'Google Publisher';
$_['tab_microdata_1']		               = 'Producto';
$_['tab_microdata_2']		               = 'Organización';
$_['tab_microdata_3']		               = 'Tienda';
$_['tab_microdata_4']		               = 'Website';
$_['tab_microdata_5']		               = 'Localidad';
$_['tab_microdata_6']		               = 'Breadcrumbs';
$_['entry_snippet_same_as']		           = '<b>Igual que</b>';
$_['entry_enable_microdata']		       = '<b>Activar</b>';
$_['entry_microdata_search']		       = 'Buscador';
$_['entry_microdata_logo']		           = 'Logo';
$_['entry_microdata_address']	           = '<b>Dirección</b>';
$_['entry_snippet_contact']		           = '<b>Contactos</b>';
$_['entry_microdata_gps']		           = '<b>Coordenadas (GPS)</b>';
$_['entry_gps_lat']		                   = 'Latitud';
$_['entry_gps_long']		               = 'Longitud';
$_['entry_address_street']                 = 'Calle';
$_['entry_address_city']                   = 'Localidad';
$_['entry_address_region']                 = 'Provincia';
$_['entry_address_code']                   = 'Código Postal';
$_['entry_address_country']                = 'Pais';
$_['entry_email']		                   = 'E-mail';
$_['entry_phone']		                   = 'Telefono';
$_['entry_product_data']		           = '<b>Incluir información de producto</b>';
$_['entry_snippet_data']		           = '<b>Incluir información</b>';
$_['entry_model']		                   = 'Referencia de producto';
$_['entry_description']		               = 'Descripción (basada en la Meta descripción)';
$_['entry_reviews']		                   = 'Comentarios';
$_['entry_upc']		                       = 'UPC';
$_['entry_mpn']		                       = 'MPN';
$_['entry_ean']		                       = 'EAN';
$_['entry_isbn']		                   = 'ISBN';
$_['entry_rating']		                   = 'Clasificación';
$_['entry_manufacturer']		           = 'Fabricante';
$_['entry_brand']		                   = 'Marca';
$_['entry_enable_opengraph']		       = '<b>Activar</b>';
$_['entry_opengraph_id']		           = '<b>Página (id) de Facebook</b>';
$_['entry_enable_tcard']		           = '<b>Activar</b>';
$_['entry_twitter_nick']		           = '<b>Twitter nickname</b> (opcional)';
$_['entry_twitter_home_type']		       = '<b>Tipo de página</b>';
$_['entry_twitter_summary']		           = 'Resumen';
$_['entry_twitter_summary_large']          = 'Resumen con imagen';
$_['entry_enable_gpublisher']		       = '<b>Activar Google Publisher</b>';
$_['entry_gpublisher_url']		           = '<b>Google+ url</b>';


// Tab friendly urls
$_['tab_seo_friendly']				       = 'URLs Amigables';
$_['text_seo_export_urls']		           = 'Exportar URLs';
$_['text_seo_export_urls_tooltip']         = 'Exportar las URLs amigables y enviarlas al programador para integrarlas con el paquete oficial.';
$_['text_seo_reset_urls']  		           = 'Restaurar URLs genéricas';
$_['text_seo_reset_urls_tooltip']          = 'Si el idioma actual no tiene urls predefinidas, el módulo se cargará la versión Inglés.';
$_['text_info_friendly']		           = 'Aquí usted puede administrar las urls amigables, editarlas como más desee.<br/>También tiene la posibilidad de añadir nuevas urls, funcionan por ejemplo con cualquier módulo personalizado que haya instalado, sólo tiene que rellenar el primer campo con el valor en la ruta (?route=mymodule/action) y el segundo campo con la palabra clave que desea que aparezca en la url.';
$_['text_seo_friendly']			           = '<b>URLs amigables</b><span class="help">Activar esta opción para utilizar las urls amigables en las páginas comunes y páginas especiales (pestaña Editor SEO)</span>';
$_['text_seo_cat_slash']			       = '<b>Barra final en categoría</b><span class="help">Insertar la barra inclinada al final de las URLs de categorías.</span>';
$_['text_seo_remove_urls']                 = 'Remover todas las url';
$_['text_seo_remove_redirected']           = 'Remover redireccionamiento';
$_['text_seo_add_url']                     = 'Nueva URL';

// Tab full product path
$_['tab_seo_fpp']			               = 'Gestor de Enlaces';
// Text
$_['tab_fpp_product']                      = 'Producto';
$_['tab_fpp_category']                     = 'Categoria';
$_['tab_fpp_manufacturer']                 = 'Marcas';
$_['tab_fpp_search']                       = 'Buscador';
$_['text_fpp_cat_canonical']               = '<b>Categoria canonica</b>';
$_['text_fpp_cat_mode_0']                  = 'Enlace directo';
$_['text_fpp_cat_mode_1']                  = 'Ruta completa';
$_['text_fpp_cat_canonical_help']          = '¿Qué tipo de enlace desea dar a los motores de búsqueda?<br/><b>Enlace diecto</b>: /categoria (default)<br/><b>Ruta completa</b>: /cat1/cat2/categoria<br/><br/>Con el modo de enlace directo canónico se establece automáticamente como el enlace directo.';
$_['text_fpp_mode']                        = '<b>Modo productos</b>';
$_['text_fpp_mode_0']                      = 'Enlace directo';
$_['text_fpp_mode_1']                      = 'Enlace corto';
$_['text_fpp_mode_2']                      = 'Enlace largo';
$_['text_fpp_mode_3']                      = 'Enlace de marca';

$_['text_fpp_bc_mode']                     = '<b>Modo Breadcrumbs</b>';
$_['text_fpp_breadcrumbs_fix']             = '<b>Generar Breadcrumbs</b>';
$_['text_fpp_breadcrumbs_0']               = '<b>Predefinido</b>';
$_['text_fpp_breadcrumbs_1']               = '<b>Generar si está vacio</b>';
$_['text_fpp_breadcrumbs_2']               = '<b>Generar Siempre</b>';

$_['text_fpp_mode_help']                   = '<span class="help"><b>Enlace directo:</b> Obtener enlace directo con el producto, no incluir la categoria (ej: /nombre_de_producto)<br/>
																		  <b>Enlace corto:</b> Predefinir el enlace corto, puede ser alterado con categorías excluidas (ej: /categoría/nombre_de_producto)<br/>
																		  <b>Enlace largo:</b> Predefinir el enlace largo, puede ser alterado con categorías excluidas (ej: /categoría/subcategoría/nombre_de_producto)<br/>
																		  <b>Enlace de marca:</b> Predefinir la ruta del fabricante en lugar de categorías (ej: /marca/nombre_de_producto)</span>';
$_['text_fpp_breadcrumbs_help']            = '<span class="help"><b>Predefinido:</b> Función generica de Opencart, mostrará  el breadcrumbs que viene desde las categorías.<br/>
																		  <b>Generar si está vacio</b> Genera sólo el breadcrumbs cuando no está disponible, sólo el breadcrumb de la catagoría es preservada. (recomendado)<br/>
																		  <b>Generar siempre</b> Sobreescribe también el breadcrumbs de la categoría, sólo si el breadcrumbs es generado por medio del módulo.<br/></span>';
$_['text_fpp_bypasscat']                   = '<b>Ruta de producto</b><span class="help">Sobrescribe la ruta del producto en la categoría.</span>';
$_['text_fpp_bypasscat_help']              = '<span class="help">Si está desactivado, el enlace del producto desde la categoría sigue siendo el mismo con el fin de preservar el comportamiento normal del breadcrumbs.<br/>Si está activado, el enlace del producto a partir de las categorías se sobrescribe con la ruta generada por el módulo.<br>En cualquier caso el enlace canónico se actualiza, teniendo una valoración para que Google sólo vea la URL generada por el módulo para un producto determinado.</span>';
$_['text_fpp_directcat']                   = '<b>Enlace directo</b>';
$_['text_fpp_directcat_help']              = '<span class="help">Habilitar para tener la url directa desde una subcategoría sin mostrar la categoría principal, el breadcrumbs será preservado.</span>';
$_['text_fpp_homelink']                    = '<b>Sobreescribir enlace (Home)</b>';
$_['text_fpp_homelink_help']               = '<span class="help">Definir el enlace para mitienda.com, en lugar de mitienda.com/index.php?route=common/home</span>';
$_['text_fpp_depth']   		               = '<b>Niveles</b>';
$_['text_fpp_depth_help']                  = '<span class="help">Número de las categorías que desea mostrar.<br />Ejemplo, si usted tiene un producto en /cat/subcat/subcat/product y selecciona la opción (2), el enlace se convertirá en /cat/subcat/product<br/>Esta opción funciona en modo enlaces largos y cortos.</span>';
$_['text_fpp_unlimited']                   = 'Ilimitado';
$_['text_fpp_brand_parent']                = '<b>Fabricante</b>';
$_['text_fpp_brand_parent_help']           = '<span class="help">Incluir las marcas dentro de la url de fabricantes.<br/>Por exemplo, el fabricante Apple aparecerá de esta forma /marca/apple en vez de forma directa /apple.</span>';
$_['text_fpp_remove_search']               = '<b>Remover Parametro</b>';
$_['text_fpp_remove_search_help']          = '<span class="help">Elimina el parametro de búsqueda (?search=something) desde la url del producto en los resultados de búsqueda.</span>';
$_['entry_category']		               = '<b>Excluir categorías</b><span class="help">Elija las categorías que no se mostrarán, en el caso de tener varias rutas.</span>';

// Tab mass update
$_['tab_seo_update']                       = 'General';
$_['text_info_update']                     = 'Tenga cuidado al usar esta función, ya que sobrescribe todas sus palabras clave.<br/>Usted puede utilizar esta función de simulación para comprobar el resultado de la misma antes de realmente actualizar.<br/>Seleccione las banderas de idioma para actualizar solamente los idiomas.';
$_['text_cleanup']				           = '<b>Limpiar</b><span class="help">Retire las urls antiguas de la base de datos, hacer una limpieza si usted tiene problemas con algunas urls.</span>';
$_['text_cache']					       = '<b>Cache de URLs</b><span class="help">Generar o eliminar el cache de las urls.</span>';
$_['text_redirection']					   = '<b>Redirección Dinámica</b><span class="help">Guardar todas las urls reales para una posterior redirección. Usted podrá cambiar la palabra clave seo y Google mantendrá el seguimiento.</span>';
$_['text_cache_create_btn']                = 'Generar Cache';
$_['text_redirect_create_btn']             = 'Generar Redirección';
$_['text_cache_delete_btn']                = 'Limpiar Cache';
$_['text_cleanup_btn']		               = 'Limpiar';
$_['text_cleanup_duplicate_btn']		   = 'Remover las url (alias) duplicadas';
$_['text_cleanup_done']		               = 'La limpieza fue efectuada, %d entradas eliminadas.';
$_['text_seo_languages']                   = '<b>Seleccionar Idioma</b>';
$_['text_seo_simulate']                    = '<b>Simulación</b><span class="help">No se realizan cambios, mientras este botón está activado.</span>';
$_['text_seo_empty_only']                  = '<b>Actualizar valores vacíos</b><span class="help">Seleccione para sobrescribir todos los valores.</span>';
$_['text_seo_redirect']                    = 'Redireccionar';
$_['text_seo_redirect_mode']               = '<b>Redireccionar URL</b><span class="help">Insertar automáticamente una redirección para una url antigua.</span>';
$_['text_image_name_lang']                 = 'El nombres de la imagen se puede configurar en un solo idioma, por favor elija uno y haga clic en generar nuevamente.';
$_['text_enable']   	 		           = '<b>Activar modo</b><br />';
$_['text_deleted']   	 	               = 'Eliminado';

// Tab cron
$_['tab_seo_cron'] 			               = 'Cron';
$_['text_info_cron']			           = 'Usted puede hacer una actualización en masa utilizando cron jobs, copie el archivo <b>seo_package_cli.php</b> desde la carpeta "_extra files" (de preferencia en un directorio fuera de root) y configure la ruta de ese archivo para cron.<br/>El script utilizará los ajustes configurados en esta página.<br/>Un nuevo informe se crea en cada actualización --> /system/logs/';
$_['text_seo_cron_update']                 = '<b>Actualizar</b>';
$_['text_clear_logs']                      = 'Limpiar Registro';
$_['text_tab_cron_1']                      = 'Configuración';
$_['text_tab_cron_2']                      = 'Informe';
$_['text_cli_log_save']                    = 'Guardar Archivo de Registro';
$_['text_cli_log_too_big']                 = 'Su archivo de registro es demasiado grande (%s) para ver aquí - Se puede descargar o borrar con los siguientes botones';

// Tab about
$_['tab_seo_about']			               = 'Sobre';

$_['text_nothing_changed']    			   = 'Sin Artículos';
$_['text_seo_no_language']    			   = 'Ningún Idioma Seleccionado';
$_['text_seo_fullscreen']    			   = 'Pantalla Completa';
$_['text_seo_show_old']    				   = 'Mostrar valores antiguos';
$_['text_seo_change_count']    			   = 'Entradas Alteradas';
$_['text_seo_old_value']    			   = 'Valor Antiguo';
$_['text_seo_new_value']    			   = 'Nuevo Valor';
$_['text_seo_item']    					   = 'Item';
$_['text_simulation']    				   = 'Modo Simulación';
$_['text_write']    					   = 'Modo Escritura';
$_['text_empty_only']    				   = 'Sólo Valores Vacíos';
$_['text_all_values']    				   = 'Todos Los Valores';
$_['text_seo_update_info']    			   = '1. Activar o desactivar el modo simulación<br/>2. Seleccione si desea actualizar sólo los elementos vacíos o todos los elementos.<br/>3. Haga clic en el botón Generar para su elección.<br/>4. Los resultados se mostrarán aquí.';
$_['text_seo_simulation_mode']    		   = '<span>MODO SIMULACIÓN</span><br/>No hay cambios realizados en la base de datos.';
$_['text_seo_write_mode']		    	   = '<span>MODO ESCRITURA</span><br/>Las modificaciones se han guardado!';
$_['text_seo_product']					   = 'Producto';
$_['text_seo_category']					   = 'Categoría';
$_['text_seo_manufacturer']				   = 'Marca';
$_['text_seo_information']				   = 'Información';
$_['text_seo_cache']					   = 'Nombre';
$_['text_seo_cleanup']					   = 'Entrada (url)';
$_['text_seo_type_product']				   = 'Productos';
$_['text_seo_type_category']			   = 'Categorías';
$_['text_seo_type_manufacturer']		   = 'Marcas';
$_['text_seo_type_information']			   = 'Informaciones';
$_['text_seo_type_redirect']			   = 'Redirección dinámica';
$_['text_seo_mode_product']				   = 'Productos';
$_['text_seo_mode_category']		       = 'Categorías';
$_['text_seo_mode_manufacturer']		   = 'Marcas';
$_['text_seo_mode_information']			   = 'Informaciones';
$_['text_seo_mode_url_alias']			   = 'Url Alias';
$_['text_seo_mode_duplicate']			   = 'Remover Duplicadas';
$_['text_seo_type_redirection']			   = 'Redirección dinámica';
$_['text_seo_type_report']				   = 'Reporte';
$_['text_seo_type_cache']			       = 'Cache';
$_['text_seo_type_cleanup']				   = 'Limpiar';
$_['text_seo_generator_product']		   = '<b>Productos</b>';
$_['text_seo_generator_product_desc']	   = '<span class="help"><b>Patrones disponibles:</b><br/><b>[name]</b> : Nombre de producto<br/><b>[model]</b> : Modelo<br/><b>[category]</b> : Nombre de categoria<br/><b>[brand]</b> : Nombre de marca<br/><b>[desc]</b> : Resumen de descripción<br/><br/><b>Otros:</b> <b>[parent_category]</b> <b>[upc]</b> <b>[sku]</b> <b>[ean]</b> <b>[jan]</b> <b>[isbn]</b> <b>[mpn]</b> <b>[location]</b> <b>[lang]</b> <b>[lang_id]</b> <b>[prod_id]</b> <b>[cat_id]</b></span>';
$_['text_seo_generator_category']		   = '<b>Categorías</b>';
$_['text_seo_generator_category_desc']	   = '<span class="help"><b>Patrones disponibles:</b><br/><b>[name]</b> : Nombre de categoría<br/><b>[desc]</b> : Resumen de descripción<br/><br/><b>[parent]</b> : Nombre categoria principal<br/><br/><b>Otros:</b> <b>[lang]</b> <b>[lang_id]</b> <b>[cat_id]</b></span>';
$_['text_seo_generator_information']	   = '<b>Páginas de información</b>';
$_['text_seo_generator_information_desc']  = '<span class="help"><b>Patrones disponibles:</b><br/><b>[name]</b> : Título de información<br/><b>[desc]</b> : Resumen de descripción<br/><br/><b>Otros:</b> <b>[lang]</b> <b>[lang_id]</b></span>';
$_['text_seo_generator_manufacturer']	   = '<b>Marcas</b>';
$_['text_seo_generator_manufacturer_desc'] = '<span class="help"><b>Patrones disponibles:</b><br/><b>[name]</b> : Nombre de marca';
$_['text_seo_mode_url']					   = 'URLs (SEO)';
$_['text_seo_generator_redirect']	       = 'Generar Redirección Dinámica';
$_['text_seo_mode_title']				   = 'Título (Meta)';
$_['text_seo_mode_h1']				       = 'Título SEO (H1)';
$_['text_seo_mode_h2']				       = 'Título SEO (H2)';
$_['text_seo_mode_h3']				       = 'Título SEO (H3)';
$_['text_seo_mode_image_name']             = 'Nombre de imagen';
$_['text_seo_mode_image_alt']              = 'Nombre de imagen (alt)';
$_['text_seo_mode_image_title']            = 'Título de imagen';
$_['text_seo_mode_keyword'] 		       = 'Palabras claves (Meta)';
$_['text_seo_mode_description']		       = 'Descripción (Meta)';
$_['text_seo_mode_related']		           = 'Productos relacionados';
$_['text_seo_mode_tag']				       = 'Etiquetas (Tags)';
$_['text_seo_mode_create']			       = 'Generar';
$_['text_seo_mode_delete']			       = 'Eliminar';
$_['text_seo_report']			           = 'Reporte';
$_['text_seo_generator_url']			   = 'Generar URLs';
$_['text_seo_generator_title']			   = 'Generar Título (Meta)';
$_['text_seo_generator_keywords']          = 'Generar Palabras Claves (Meta)';
$_['text_seo_generator_desc']		       = 'Generar Descripción (Meta)';
$_['text_seo_generator_full_desc']		   = 'Generar Descripción';
$_['text_seo_generator_tag']			   = 'Generar Tags';
$_['text_seo_generator_h1']			       = 'Generar SEO H1';
$_['text_seo_generator_h2']			       = 'Generar SEO H2';
$_['text_seo_generator_h3']			       = 'Generar SEO H3';
$_['text_seo_generator_imgalt']            = 'Generar (Alt) de Imagen';
$_['text_seo_generator_imgtitle']	       = 'Generar Título de Imagen';
$_['text_seo_generator_imgname']	       = 'Generar Nombre de Imagen';
$_['text_seo_generator_related']		   = 'Generar Productos Relacionados';
$_['text_seo_generator_related_no']		   = '<b>Cantidad</b>';
$_['text_seo_generator_related_relevance'] = '<b>Relevancia (0-10)</b>';
$_['text_query']		                   = 'Consulta';
$_['text_keyword']		                   = 'Palabra Clave';
$_['text_status']		                   = 'Estado';
$_['text_empty']		                   = 'Vacío';
$_['text_duplicate']		               = 'Duplicada';
$_['text_report']		                   = '<b>Reporte</b>';
$_['text_url_alias_report_btn']		       = 'Url Reporte de Alias';

$_['text_seo_result']                      = '<b>Resultados</b>';

$_['text_module']                          = 'Módulos';
$_['text_success']                         = 'El módulo SEO fue actualizado con éxito!';

$_['text_man_ext']				           = 'Extensión de Marcas';

$_['text_seo_confirm']		               = '¿Esta seguro?';


// Full product path

// Help sections
$_['tab_info_request'] = 'Requiere Cabeceras';
$_['text_info_404'] = '
<h4>Gestión (404) - Página No Encontrada</h4>
<p>En esta sección se enumeran todas las URL de su tienda/página web que en realidad no existentes o que el sistema opencart no ha podido redireccionar al contenido.<br /><br />Por ejemplo, este es el resultado cuando no fue posible encontrar dicha página:</p>
<p><img class="img-thumbnail" src="view/seo_package/img/help/not_found.png" alt=""/></p>
<p>En ese caso, <b>Complete SEO Package</b> guardará automáticamente esa url en la tabla y será fácilmente posible ver cual url ya no está vigente y el número de veces que fue solicitada.</p>
<h4>Crear Redireccionamiento - URL Inexistente</h4>
<p>Haga clic en el botón <img src="view/seo_package/img/help/btn_plus.png"/>para añadir fácilmente una redirección para esa URL, una vez hecho el cambio la dirección aparecerá en la pestaña "Redirección de Url", y la url aparecerá en <span class="text-success">color verde</span> para indicar que esta url ya tienen una redirección.</p>
<h4>Remover URL</h4>
<p>Estas entradas son sólo para su información, no habrá ningún tipo de alteración por eliminar, sólo hay que hacer clic en uno de los siguientes botones:</p>
<ul class="list-unstyled">
<li style="margin-top:12px"><span class="gkd-badge"><i class="fa fa-minus" style="color:#ED5555"></i> Eliminar URL</span> Esto eliminará todos las url marcadas con <span class="text-success">VERDE</span>, significa que cualquier URL eliminada ya no será redireccionada.</li>
<li style="margin-top:12px"><span class="gkd-badge"><i class="fa fa-close" style="color:#ED5555"></i> Eliminar Todas (URL)</span> esto eliminará todas las direcciones URL de la tabla, marcada en verde o no. Su eliminación no eliminará la url principal.</li>
</ul>';
$_['text_info_redirections'] = '
<h4>Redirección de Url</h4>
<p>Aquí puede definir sus propias direcciones URL, esto significa que usa el protocolo de redirección 301. Significa que los motores de búsqueda tendrán la nueva URL como válida.</p>
<p>Si es necesario cambiar la dirección URL de una página para mostrar en los resultados del motor de búsqueda, le recomendamos que utilice la redirección del lado del <b>Redirección 301</b>. Esta es la mejor manera de garantizar que los usuarios y los motores de búsqueda se dirigen a la página correcta. El código de estado 301 significa que una página se ha movido permanentemente a una nueva ubicación.</p>
<p><b>La Redirección 301 es particularmente útil para cualquier URL que ya no se encuentra en su página web.</b></p>
<h4>Configurar Nueva Redirección</h4>
<p><span class="gkd-badge"><i class="fa fa-plus" style="color:#4CBD35"></i> Nueva URL</span> Haga clic en este botón y siga las instrucciones para configurar el redireccionamiento de la URL que ya no existe.</p>';
$_['text_info_request'] = '<h4>Solicitud de Cabeceras</h4>
<p>Las cabeceras requeridas son parte del protocolo HTTP, se envían en cada solicitud realizada al servidor.<br/>Aquí usted será capaz de cambiar algunos parámetros relacionados con la solicitud de encabezados. La optimización puede mejorar el rendimiento para el usuario final y también para el seguimiento de los motor de búsqueda (robots).</p>
<h5>Última Modificación</h5>
<p>Incluir la fecha de la última modificación del producto, mejora el rendimiento para el usuario (el navegador recupera la página de la memoria caché si no hay actualización) y el seguimiento de los robots. Será exibida la fecha de edición y/o alteración de cualquier producto. Es muy recomendable activar esta opción.</p><p><img class="img-thumbnail" src="view/seo_package/img/help/headers-last-modified.png" alt=""/></p>';
$_['help_fb_appid_tab'] = 'Facebook App ID';
$_['help_microdata'] = '
<h4>Microdatos de Google</h4>
<p>Los microdatos son utilizado por los motores de búsqueda para dar formato de una manera más precisa en el momento de la búsqueda y obtener más información.<br />Por ejemplo, un producto puede mostrar el precio y la valoración efectuada por el cliente en los resultados de esa búsqueda:</p>
<p><img class="img-thumbnail" src="view/seo_package/img/help/microdata-product.jpg" alt=""/></p>
<p><b>Complete SEO Package</b> está utilizando el último formato JSON-LD para incluir los microdatos en su página web. La información básica es (categoría, descripción, imagen, precio y cantidad disponible) y usted puede seleccionar más información adicional para mostrar.</p>
<h4>Beneficios de usar los microdatos</h4>
<p><ul>
  <li>Resultados con beneficios - Llama la atención del/los usuario/s en la búsqueda delante de sus competidores, añadiendo más información a primera vista.</li>
  <li>Aumento del CTR - Posible aumento del porcentaje de clics y la reducción de rebote por parte del usuario, ya que tiene más información para hacer clic y acceder a su tienda.</li>
  <li>Proporcionar resultados de calidad - Ofreciendo resultados más próximos al contenido de busqueda por parte del usuario.</li>
</ul></p>
<h4>Herramientas de Prueba</h4>
<p>Utilice la siguiente herramienta para comprobar la información de microdatos en su tienda: <a href="https://search.google.com/structured-data/testing-tool" target="_blank">Google structured data testing tool</a></p>
';
$_['help_fb_appid'] = '
<h4>Facebook App ID</h4>
<p>Debe colocar su ID de facebook para lograr una correcta aplicación de esta función. Encontrará su ID de usuario en su panel de programador: <a href="http://facebook.com/developers">http://facebook.com/developers</a>.</p>
<p><img class="img-thumbnail" src="view/seo_package/img/help/settings_app-id.gif" alt=""/></p>
';
$_['help_fb_setup_tab'] = 'Como Usar Facebook Opengraph';
$_['help_fb_setup']	= '
<h4>Instalar su aplicación Facebook Developer</h4>
<p>El primer paso para crear una aplicación en Facebook es instalar la aplicación en Facebook para desarrolladores.</p>
<p>O acceder a Facebook y luego visitar la siguiente URL <a href="http://facebook.com/developers">http://facebook.com/developers</a>.</p>
<p>Si esta es la primera vez que va a instalar una aplicación, verá la siguiente <b>Solicitud de Permiso</b> a continuación:</p>
<p><img class="img-thumbnail" src="view/seo_package/img/help/permission.jpg" alt="" /></p>
<p>Haga clic en el botón para <b>Permitir</b> y proceder al siguiente paso.</p>
<h4>Crear una aplicación Facebook para su tienda</h4>
<p>Ahora que ya tiene la aplicación instalada haga clic en el botón <b>Crear App</b>.</p>
<p><img class="img-thumbnail" src="view/seo_package/img/help/create-new-app.gif" alt=""/></p>
<p>Coloque un nombre a su aplicación "App Display Name" (el nombre que se muestra a los usuarios).</p>
<p>Para los propósitos de este tutorial, usted no necesita tener una "Namespace".</p>
<p>Seleccione la opción "I agree to Facebook Platform Policies" y haga clic en el botón <b>Continuar</b>.</p>
<p><img class="img-thumbnail" src="view/seo_package/img/help/dialog_new-app.gif" alt=""/></p>
<p>En la siguiente pantalla, introduzca la frase de seguridad y haga clic en <b>Enviar</b>.</p>
<p><img class="img-thumbnail" src="view/seo_package/img/help/new-app_captcha.gif" alt=""/></p>
<p>Hay una gran cantidad de opciones que se pueden seleccionar con su solicitud. En este ayuda vamos a centrarnos en los aspectos básicos necesarios para obtener su Facebook App ID en su tienda.</p>
<h4>Pestaña de Configuración</h4>
<p>Aquí es donde se hace la configuración básica para su aplicación</p>
<p><img class="img-thumbnail" src="view/seo_package/img/help/settings_app-id.gif" alt=""/></p>
<p>Su App ID ya está configurado. El App ID es el valor que va a utilizar para integrar en su tienda, Facebook’s APIs puede ser añadido en los diferentes Plugins (Like Button, Send Button, Comments Box, etc.).</p>
<p>No es necesario añadir un icono. Si su sitio web ya tiene un favicon, que se mostrará junto a la URL de su sitio en Facebook Insights.</p>
<p><b>Información Básica</b></p>
<p><ul>
<li><b>App Display Name:</b> Colocar el valor que ya ha sido proporcionado.</li>
<li><b>App Namespace:</b> Deje en blanco</li>
<li><b>Contact Email:</b> Donde Facebook envia los mensajes con respecto a su aplicación</li>
<li><b>App Domain:</b> Colocar sólo “mydomain.com” donde “mydomain.com” es la url de su dominio (TLD)</li>
<li><b>Category:</b> Seleccione una categoría de la lista desplegable (optional)</li>
</ul></p>
<p>Su sitio web es ahora un “objecto” en Facebook’s Open Graph, con un App ID de propiedad.</p>
';

// Error
$_['error_permission']                     = 'Atención: Usted no tiene permisos para alterar el módulo Seo.';
?>