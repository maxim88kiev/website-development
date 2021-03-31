<?php
// Complete SEO Package Italiano, autore: Sirius Dev
// Rubrica
$_['heading_title'] = '<img src="view/seo_package/img/icon.png" style="vertical-align:top;padding-right:4px"/> Complete SEO Package';
$_['module_title'] = 'Complete SEO <span>Package</span> ';

// Configurazione della scheda seo
$_['tab_seo_options'] = 'Configurazione SEO';
$_['text_info_general'] = 'Queste impostazioni impatto il funzionamento globale della SEO, essi hanno effetto immediato e può essere modificati in qualsiasi momento.';
$_['text_seo_absolute'] = 'Percorso assoluto: <span class="help"> Consenti di usare la stessa parola chiave per sotto-categorie (es: / uomo/Scarpe/donne /)</span>';
$_['text_seo_extension'] = 'Estensione: <span class="help"> aggiungere l\'estensione della vostra scelta alla fine di una parola chiave del prodotto (es:. html)</span>';
$_['text_seo_flag'] = 'Modalità Bandiera: <span class="help"> aggiungere tag di lingua all\'inizio dell\'url (/ en, fr,...)<br/> si prega di utilizzare seo.htaccess quando attivato</span>';
$_['text_seo_flag_upper'] = 'Bandiera in maiuscolo: <span class="help"> /IT /FR</span>';
$_['text_seo_flag_default'] = 'Nessuna bandiera per impostazione predefinita: <span class="help">Lingua predefinita non utilizzare il flag</span>';
$_['text_seo_banner'] = 'Riscrivere il link Banner: <span class="help"> generare dinamicamente seo link sul banner (utilizzato in banner, carosello, moduli slideshow)</span>';
$_['text_seo_banner_help'] = 'Nella sezione banner, non inserire il link seo (/categoria/product_name) ma invece digitare il link di opencart predefinito: <b>index.php?route=product/product&path=10_21&product_id=54</b>.<br/>Si può anche striscia fuori l\'index.php, come questo: <b>product/product&path=23&product_id=48</b>';

// Scheda negozio seo
$_['tab_seo_store'] = 'Archivio SEO';
$_['text_info_store'] = 'In questa sezione è possibile personalizzare il seo title, h1, meta parole chiave e descrizione sulla home page per ogni lingua e ogni negozio! <br/>Niente entrato qui consentirà di bypassare i valori immessi nelle impostazioni di opencart.';
$_['entry_store_seo_title'] = 'Titolo SEO:';
$_['entry_store_title'] = 'Intestazione titolo H1:';
$_['entry_store_desc'] = 'Meta Description:';
$_['entry_store_keywords'] = 'Meta Keywords:';

// Nella scheda opzioni di parola chiave
$_['tab_seo_transform'] = 'Parola chiave opzioni';
$_['text_info_transform'] = 'Tutte queste impostazioni definiscono il modo in cui la parola chiave sarà generato quando un elemento di risparmio o utilizzando l\'aggiornamento massa.';
$_['text_seo_whitespace'] = 'Spazi: <span class="help">Sostituire i caratteri di spazio di...</span>';
$_['text_seo_lowercase'] = 'Minuscolo: <span class="help">QWERTY => qwerty</span>';
$_['text_seo_duplicate'] = 'Duplica: <span class="help">Consenti parola chiave duplicata per uno stesso prodotto</span> ';
$_['text_seo_ascii'] = 'Modalità ASCII: <span class="help">Sostituire accentuati caratteri dal loro equivalente ascii <br/>"éàôï" => "Elmira"</span>';
$_['text_seo_autofill'] = 'Auto riempimento';
$_['text_seo_autofill_on'] = 'su:';
$_['text_seo_autofill_desc'] = 'Riempimento automatico: <span class="help">Se lasciato vuoto il campo sull\'inserimento o modifica, un valore verrà creato automaticamente in base al modello nella tab. aggiornamento di massa <br/> <br/>Questo funziona per: <br/>-prodotti <br/>-categorie <br/>-informazioni</span>';
$_['text_seo_autourl'] = 'Auto URL: <span class="help">Se lasciato vuoto su inserimento o modifica, parola chiave di seo url verrà generato automaticamente utilizzando il parametro impostato nella scheda "Aggiornamento di massa" <br/> questo funziona per prodotti, categorie e informazioni</span>';
$_['text_seo_autotitle'] = 'Auto title e desc per altri langs: <span class="help">Se lasciato vuoto su inserimento o modifica, titoli e descrizioni di altre lingue copierà il titolo lingua predefinita e descrizione <br/> questo funziona per prodotti, categorie e informazioni</span>';
$_['text_insert'] = 'Inserisci';

// Scheda URL
$_['tab_seo_friendly'] = 'Friendly URLs';
$_['text_info_friendly'] = 'Qui potete gestire il friendly URL, modificarli come vuoi. <br/>Hai anche la possibilità di aggiungere il nuovo url, funziona ad esempio per ogni modulo personalizzato installato, basta compilare il primo campo con il valore in rotta (? itinerario = mymodule/azione) e il 2 ° campo con la parola chiave che si desidera venga visualizzato nell\'url.';
$_['text_seo_friendly'] = 'Friendly URLs:';

// Percorso completo prodotto scheda
$_['tab_seo_fpp'] = 'Percorso completo del prodotto';
$_['entry_category'] = 'Vietato categorie: <span class="help">Scegliere le categorie che mai verranno visualizzate in caso di percorsi multipli</span> ';
$_['text_fpp_largest'] = 'Percorso più grande: <span class="help">Visualizzare sempre il percorso più grande quando selezionato, o il più corto se non</span> ';
$_['text_fpp_bypasscat'] = 'Percorso di riscrittura Categoria: <span class="help">Link categoria rimane la stessa, al fine di preservare la mollica di pane normale, ma è possibile attivare questa opzione per fornire lo stesso link per i prodotti in categorie multiple. <br>In ogni caso il percorso canonico è conservato così google vedrà solo l\'url generato dal modulo per un dato prodotto.</span>';
$_['text_info_fpp'] = 'Percorso completo del prodotto consente di visualizzare l\'url completo (comprese le categorie) di un prodotto, da nessuna parte. <br/>Ad esempio, in moduli come ultime novità, primo piano, ecc, il link del prodotto è <b>yourstore.com/product</b>, con percorso completo prodotto abilitato ora avete un link come <b>yourstore.com/category/sub_category/product</b>';

// Scheda aggiornamento massa
$_['tab_seo_update'] = 'Aggiornamento massa';
$_['text_info_update'] = 'Attenzione quando si utilizza questa funzione, poiché esso sovrascriverà tutte le tue parole chiave. <br/>È possibile utilizzare la funzione simula per verificare il risultato prima di aggiornare davvero. <br/>Selezionare i flag di lingua per aggiornare solo queste lingue.';
$_['text_cleanup'] = 'Ripulire: <span class="help"> rimuovere il vecchio URL nel database, compongono un pulito se si riscontrano dei problemi con alcuni URL</span> ';
$_['text_cleanup_btn'] = 'Clean up';
$_['text_cleanup_done'] = 'Ripulire il fatto, %d voci eliminate';
$_['text_seo_languages'] = 'Selezionare lingue';
$_['text_seo_simulate'] = 'Simulazione';
$_['text_seo_reset_urls'] = 'Ripristina gli URL predefinito';
$_['text_seo_remove_urls'] = 'Rimuovi tutti gli URl';
$_['text_seo_add_url'] = 'Aggiungi nuovo campo';
$_['text_enable'] = 'Abilita';

// Scheda su
$_['tab_seo_about'] = 'About';

$_['text_seo_no_language'] = 'Nessuna lingua selezionata';
$_['text_seo_fullscreen'] = 'Fullscreen';
$_['text_seo_show_old'] = 'Visualizza il vecchio valore';
$_['text_seo_change_count'] = 'Linee cambiati';
$_['text_seo_old_value'] = 'Vecchio valore';
$_['text_seo_new_value'] = 'Nuovo valore';
$_['text_seo_simulation_mode'] = '<span>Modalità di simulazione</span> <br/> senza le modifiche apportate al database';
$_['text_seo_write_mode'] = '<span>Modalità di scrivere</span> <br/> modifiche sono state salvate ';
$_['text_seo_product'] = 'Prodotto';
$_['text_seo_category'] = 'Categoria';
$_['text_seo_manufacturer'] = 'Produttore';
$_['text_seo_information'] = 'Informazioni';
$_['text_seo_cleanup'] = 'Voce (url)';
$_['text_seo_type_product'] = 'Prodotti';
$_['text_seo_type_category'] = 'Categorie';
$_['text_seo_type_manufacturer'] = 'Produttori';
$_['text_seo_type_information'] = 'Informazioni';
$_['text_seo_type_cleanup'] = 'Clean up';
$_['text_seo_generator_product'] = 'Prodotti:';
$_['text_seo_generator_product_desc'] = '<span class="help">Modelli disponibili: <br/> <b>[nome]</b>: nome del prodotto <br/> <b>[modello]</b>: modello <br/> <b>[categoria]</b>: nome della categoria <br/> <b>[brand]</b>: marca <br/> <b>[desc]</b>: Estratto di descrizione <br/> <br/> altri: <b>[upc]</b> <b>[sku]</b> <b>[ean]</b> <b>[jan]</b> <b>[isbn]</b> <b>[mpn]</b> <b>[posizione]</b></span>';
$_['text_seo_generator_category'] = 'categorie:';
$_['text_seo_generator_category_desc'] = '<span class="help">Modelli disponibili: <br/> <b>[nome]</b>: nome della categoria <br/> <b>[desc]</b>: Estratto di descrizione</span>';
$_['text_seo_generator_information'] = 'Pagine di informazioni:';
$_['text_seo_generator_information_desc'] = '<span class="help">Modelli disponibili: <br/> <b>[nome]</b>: titolo informazioni <br/> <b>[desc]</b>: Estratto di descrizione</span>';
$_['text_seo_generator_manufacturer'] = 'Produttori:';
$_['text_seo_generator_manufacturer_desc'] = '<span class="help">Modelli disponibili: <br/> <b>[nome]</b>: nome del produttore ';
$_['text_seo_mode_url'] = 'SEO URLs';
$_['text_seo_mode_title'] = 'Custom SEO Title';
$_['text_seo_mode_keyword'] = 'Meta Keywords';
$_['text_seo_mode_description'] = 'Meta Description';
$_['text_seo_generator_url'] = 'Generare URLs';
$_['text_seo_generator_title'] = 'Generare Custom SEO Title';
$_['text_seo_generator_keywords'] = 'Generare Meta Keywords';
$_['text_seo_generator_desc'] = 'Generare Meta Description';

$_['text_seo_result'] = 'Risultato:';


$_['text_module'] = 'Moduli';
$_['text_success'] = 'Successo: hai modificato il modulo modulo SEO!';

$_['text_man_ext'] = 'Produttore esteso';

// Percorso completo del prodotto



// Errore
$_['error_permission'] = 'Attenzione: non hai il permesso di modificare questo modulo!';
?>