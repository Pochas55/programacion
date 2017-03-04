# WordPress

![WordPress](http://bextlan.com/img/para-cursos/wordpress.jpg)


## Índice

1. [Enlaces importantes sobre WP](#enlaces-importantes-sobre-wordpress)
1. [Taxonomía WP](#taxonomía-wordpress)
1. [Cuenta en WordPress.com](#cuenta-en-wordpresscom)
1. [Instalación de WP](#instalación-de-wordpress)
1. [Importación / Exportación de WP](#importación--exportación-de-wordpress)
1. [Temas WP](#temas-wordpress)
1. [The Loop](#the-loop)
1. [Plantillas WP](#plantillas-wordpress)
1. [Hooks WP](#hooks-wordpress)
1. [Plugins WP](#plugins-wordpress)


## Enlaces importantes sobre WordPress

* [Slides](http://bextlan.com/slides/wordpress/)
* [WordPress.org](http://wordpress.org)
* [WordPress.com](http://wordpress.com)
* [WordPress.org en Español](http://es.wordpress.org)
* [WordPress.com en Español](http://es.wordpress.com)
* [WordPress.org en Español de México](https://es-mx.wordpress.org/)
* [Empezando con WordPress](https://codex.wordpress.org/es:Getting_Started_with_WordPress)
* [Codex WordPress](http://codex.wordpress.org/)
* [Glosario del Codex WordPress](https://codex.wordpress.org/Glossary)
* [Developers WordPress](https://developer.wordpress.org/)
* [Buenas prácticas de código PHP en WordPress](https://make.wordpress.org/core/handbook/coding-standards/php/)
* [Embeds (Objetos Incrustados)](https://codex.wordpress.org/Embeds)
* [Servicios de Actualización](https://codex.wordpress.org/Update_Services)
* [Roles y Capacidades en WordPress](https://codex.wordpress.org/Roles_and_Capabilities)
* [Gravatar](http://es.gravatar.com/)
* [Recuperar passwords de usuarios en WordPress](http://www.wpbeginner.com/beginners-guide/how-to-reset-a-wordpress-password-from-phpmyadmin/)
* [Herramienta para resetear passwords de usuarios en WordPress](http://pajhome.org.uk/crypt/md5/)
* [Curso de WordPress en Bextlán](https://www.youtube.com/playlist?list=PLvq-jIkSeTUZDOcKsQz79wnYlTvmAdLkj)

**[⬆ regresar al índice](#Índice)**


## Taxonomía WordPress

Es la forma en como WP estructura el contenido de nuestro sitio y lo hace a través de:

* Categorías **(Clasifican el contenido)**
* Etiquetas **(Palabras clave, para búsquedas internas)**
* Entradas **(Contenido dinámico)**
* Páginas **(Contenido estático)**

### Categorías

Son la tabla de contenidos del sitio web. Son utilizadas para agrupar los contenidos y mantener una clasificación. Deben ser la base de la organización ya que conservan un orden jerárquico, y podemos generar subcategorías

### Etiquetas

Se utilizan como microdatos que describen detalles específicos del contenido. Sirven como keywords para el SEO de nuestras publicaciones

### Entradas

Es el contenido final de nuestro sitio, pueden tener asociadas más de una categoría, si no le especificamos una, se guardaran como parte de la categoría que trae WP por defecto "Sin Categoría". Podemos agregarles tantas etiquetas como sean necesarias

### Páginas

Son contenidos que difícilmente van a cambiar, por ejemplo la sección de contacto o acerca, no se pueden asociar a categorías ni a etiquetas

**Nota:** Si te quedan dudas puedes ver el siguiente **[video](https://www.youtube.com/watch?v=HgUxFFJ8osA)**

**[⬆ regresar al índice](#Índice)**


## Cuenta en WordPress.com

![Creando cuenta en WordPress.com](http://bextlan.com/img/para-cursos/cuenta-wp-1.png)
![Creando cuenta en WordPress.com](http://bextlan.com/img/para-cursos/cuenta-wp-2.png)
![Creando cuenta en WordPress.com](http://bextlan.com/img/para-cursos/cuenta-wp-3.png)
![Creando cuenta en WordPress.com](http://bextlan.com/img/para-cursos/cuenta-wp-4.png)
![Creando cuenta en WordPress.com](http://bextlan.com/img/para-cursos/cuenta-wp-5.png)
![Creando cuenta en WordPress.com](http://bextlan.com/img/para-cursos/cuenta-wp-6.png)
![Creando cuenta en WordPress.com](http://bextlan.com/img/para-cursos/cuenta-wp-7.png)
![Creando cuenta en WordPress.com](http://bextlan.com/img/para-cursos/cuenta-wp-8.png)
![Creando cuenta en WordPress.com](http://bextlan.com/img/para-cursos/cuenta-wp-9.png)
![Creando cuenta en WordPress.com](http://bextlan.com/img/para-cursos/cuenta-wp-10.png)

**[⬆ regresar al índice](#Índice)**


## Instalación de WordPress

1. Descargar [WordPress](https://es-mx.wordpress.org/)
1. Descomprimir WordPress en la carpeta **xampp/htdocs/**
1. Es recomendable renombrar la carpeta wordpress por un nombre relacionado con el proyecto a desarrollar
1. Crear una  base de datos en MySQL para el nuevo proyecto en WordPress, lo puedes hacer desde [phpMyAdmin](http://localhost/phpmyadmin)
1. Buscar el archivo **wp-config-sample.php** y renombrarlo como **wp-config.php**
1. Abrir el archivo **wp-config.php** y editar los siguientes datos:
	```php
		define('DB_NAME', 'database_name_here');
		define('DB_USER', 'username_here');
		define('DB_PASSWORD', 'password_here');
		define('DB_HOST', 'localhost');
		define('DB_CHARSET', 'utf8');
		define('DB_COLLATE', '');

		define('AUTH_KEY',         'put your unique phrase here');
		define('SECURE_AUTH_KEY',  'put your unique phrase here');
		define('LOGGED_IN_KEY',    'put your unique phrase here');
		define('NONCE_KEY',        'put your unique phrase here');
		define('AUTH_SALT',        'put your unique phrase here');
		define('SECURE_AUTH_SALT', 'put your unique phrase here');
		define('LOGGED_IN_SALT',   'put your unique phrase here');
		define('NONCE_SALT',       'put your unique phrase here');

		$table_prefix  = 'wp_';
	```
1. Ejecutar la carpeta del sitio en el navegador **( http://localhost/carpeta-sitio-wp )**
1. Llenar la información de la instalación
	![Instalación de WordPress](http://bextlan.com/img/para-cursos/wp-instalacion1.png)
	![Instalación de WordPress](http://bextlan.com/img/para-cursos/wp-instalacion2.png)
	![Instalación de WordPress](http://bextlan.com/img/para-cursos/wp-instalacion3.png)
	![Instalación de WordPress](http://bextlan.com/img/para-cursos/wp-instalacion4.png)
	![Instalación de WordPress](http://bextlan.com/img/para-cursos/wp-instalacion5.png)
	![Instalación de WordPress](http://bextlan.com/img/para-cursos/wp-instalacion6.png)
1. Una vez instalado:
	* Para ver WP como usuario administrador:
		* **http://localhost/ruta-del-sitio/wp-login.php** o
		* **http://localhost/ruta-del-sitio/wp-admin**
		![Instalación de WordPress](http://bextlan.com/img/para-cursos/wp-instalacion7.png)
	* Para ver WP como usuario visitante:
		* **http://localhost/ruta-del-sitio**
		![Instalación de WordPress](http://bextlan.com/img/para-cursos/wp-instalacion8.png)

**Nota:** Si te quedan dudas puedes ver el siguiente **[video](https://www.youtube.com/watch?v=lE4wO3C4Eyg)**

**[⬆ regresar al índice](#Índice)**


## Importación / Exportación de WordPress

Esto sirve para ir del localhost al servidor en internet o viceversa

1. Respaldar todo el proyecto WordPress ( wp-admin, wp-includes, wp-content, archivos sueltos )
1. Cargar o Descargar el respaldo vía FTP, SSH, Git, etc
1. Exportar en formato **.sql** la BD desde el phpMyAdmin
	* Considera que a veces phpMyAdmin no nos agrega la instrucción `CREATE DATABASE` y `USE`
1. Abrir el archivo **.sql** y reemplazar todas las rutas locales a las del servidor en internet o viceversa, con ayuda del comando buscar y reemplazar de tu editor de código favorito
1. Modificar las rutas de las siguientes lineas del archivo **.htaccess**:
	* **RewriteBase**
	* **RewriteRule**
	```htaccess
		# BEGIN WordPress
		<IfModule mod_rewrite.c>
			RewriteEngine On
			RewriteBase /carpeta-sitio-wp/
			RewriteRule ^index\.php$ - [L]
			RewriteCond %{REQUEST_FILENAME} !-f
			RewriteCond %{REQUEST_FILENAME} !-d
			RewriteRule ./carpeta-sitio-wp/index.php [L]
		</IfModule>
		# END WordPress
	```
1. Modificar **DB_NAME**, **DB_USER**, **DB_PASSWORD** y **DB_HOST** en el archivo **wp-config.php**

	```php
		define('DB_NAME', 'database_name_here');
		define('DB_USER', 'username_here');
		define('DB_PASSWORD', 'password_here');
		define('DB_HOST', 'localhost');
	```

1. Importar la BD y cargar el contenido del sitio WP en el destino

**Nota:**

* Si te quedan dudas puedes ver el siguiente **[video](https://www.youtube.com/watch?v=4IRnuFqinlI)**
* También puedes usar el plugin **[Duplicator](https://wordpress.org/plugins/duplicator/)**

**[⬆ regresar al índice](#Índice)**


## Temas WordPress

Un Tema WordPress es una colección de archivos que trabajan juntos para producir un interfaz gráfica con un diseño unificado para el sitio. Estos archivos se llaman **archivos de plantilla**

Un tema modifica el modo en que el sitio es mostrado, sin modificar el código fuente de WordPress

Los temas pueden incluir archivos de plantilla personalizados, archivos de imagen, hojas de estilo, scripts (.php o .js), así como cualquier otro archivo necesario

#### Archivos Básicos de un Tema:

* Plantilla principal (**index.php**)
* Hoja de estilos principal del tema (**style.css**)
* Imagen representativa del tema en el administrador de WP (**screenshot.png**)

#### Estructura Básica de un Tema

![Estructura Básica de un Tema en WP](http://bextlan.com/img/para-cursos/estructura-tema.png)

#### Enlaces y Funciones Básicas de un Tema:

* [Listado de Temas WP](https://wordpress.org/themes/)
* [underscores.me (Buenas Prácticas en Temas)](http://underscores.me/)
* Tiendas de Temas:
	* [Theme Forest](http://themeforest.net/)
	* [Template Monster](https://www.templatemonster.com/)
	* [Woo Commerce](https://woocommerce.com/)
	* [WP ZOOM](http://www.wpzoom.com/)
	* [Elegant Themes](https://www.elegantthemes.com/)
* Funciones Básicas:
	* [Función bloginfo()](https://codex.wordpress.org/Function_Reference/bloginfo)
	* [Función get_header()](https://codex.wordpress.org/Function_Reference/get_header)
	* [Función get_footer()](https://codex.wordpress.org/Function_Reference/get_footer)
	* [Función get_sidebar()](https://codex.wordpress.org/Function_Reference/get_sidebar)
	* [Función get_template_part()](https://codex.wordpress.org/Function_Reference/get_template_part)

#### Funciones de inclusión obligatorias:

Si queremos que nuestro tema permita el correcto funcionamiento de plugins de terceros, debemos activar las siguientes funciones, de esta manera WordPress permite a los plugins imprimir información en el header o el footer

* [Función wp_head()](https://codex.wordpress.org/Plugin_API/Action_Reference/wp_head) debe colocarse antes de `</head>`
* [Función wp_footer()](https://codex.wordpress.org/Plugin_API/Action_Reference/wp_footer) debe colocarse antes de `</body>`

**[⬆ regresar al índice](#Índice)**


## The Loop

**The Loop** es el código PHP usado por WordPress para mostrar las publicaciones

```php
if( have_posts() ):
	while( have_posts() ):
		the_post();
		//post info
	endwhile;
else:
	//no posts
endif;
```

#### Enlaces y Funciones relacionados con The Loop

* [The Loop](https://codex.wordpress.org/The_Loop)
* [Función rewind_posts()](https://codex.wordpress.org/Function_Reference/rewind_posts)
* [Función query_posts()](https://codex.wordpress.org/Function_Reference/query_posts)
* [Búsquedas Personalizadas en WP](http://www.anieto2k.com/2008/01/13/query_posts-personalizando-nuestros-blogs/)
* [Parámetros para Búsquedas Personalizadas](https://codex.wordpress.org/Class_Reference/WP_Query#Parameters)
* [Función the_posts_pagination()](https://codex.wordpress.org/Function_Reference/the_posts_pagination)
* [Clase WP_Query](https://codex.wordpress.org/Class_Reference/WP_Query)

**[⬆ regresar al índice](#Índice)**


## Plantillas WordPress

Son los archivos que el tema va utilizando dependiendo del contenido solicitado, los cuales pueden ser:

* Templates básicos:
	* **index.php**	plantilla principal
	* **home.php**	plantilla del home
	* **archive.php** plantilla de categorías, etiquetas y autores
		* **category.php** plantilla de categorías
		* **tag.php** plantilla de etiquetas
		* **author.php** plantilla de autores
	* **singular.php** plantilla de entradas y páginas
		* **single.php** plantilla de entradas
		* **page.php** plantilla de páginas estáticas
	* **404.php** plantilla del error 404
	* **search.php** plantilla de búsquedas
	* **comments.php** plantilla de comentarios
* Templates personalizados:
	* Podemos tener plantillas personalizadas para: 
		* Categorías
		* Etiquetas
		* Autores
		* Páginas estáticas
	* Podemos crear templates personalizados por:
		* slug
		* id
		* nicename

![Estructura de carpetas de un Tema en WP](http://bextlan.com/img/para-cursos/plantillas-secciones-separadas.png)

#### Enlaces y Funciones relacionadas con Plantillas

* [Jerarquía de Plantillas](https://developer.wordpress.org/themes/basics/template-hierarchy/)
* [Etiquetas Condicionales](https://codex.wordpress.org/Conditional_Tags)

**[⬆ regresar al índice](#Índice)**


## Hooks WordPress

El archivo **functions.php**  es como una biblioteca personal de funciones, es una manera fácil de agregar o modificar el comportamiento por defecto de WordPress. Se comporta exactamente igual que un plugin, añadiendo características y funcionalidad a un tema, y se puede utilizar tanto para definir nuevas funciones PHP como para modificar las que ya incorpora WordPress, se dividen en:

* Filtros y
* Acciones

También se puede modificar el comportamiento de WordPress a través de:

* Widgets y
* Plugins

#### Enlaces y Funciones relacionados con Hooks

* [API de Hooks WP](http://codex.wordpress.org/Plugin_API/Hooks)
* [Lista de Filtros WP](http://codex.wordpress.org/Plugin_API/Filter_Reference)
* [Lista de Acciones WP](http://codex.wordpress.org/Plugin_API/Action_Reference)
* [Incluir archivos CSS y JS en WP](https://developer.wordpress.org/themes/basics/including-css-javascript/)
* [API de Plugins WP](http://codex.wordpress.org/Plugin_API)
* [API de Widgets WP](https://codex.wordpress.org/Widgets_API)
* [Lista de Plugins WP](https://wordpress.org/plugins/)

**[⬆ regresar al índice](#Índice)**


## Plugins WordPress

* BackUp & Seguridad
	* [Duplicator](https://wordpress.org/plugins/duplicator/)
	* [Simple Optimizer](https://wordpress.org/plugins/simple-optimizer/)
	* [Autoptimize](https://wordpress.org/plugins/autoptimize/)
	* [All In One WP Security & Firewall](https://wordpress.org/plugins/all-in-one-wp-security-and-firewall/)
	* [BackWPup - WordPress Backup Plugin](https://wordpress.org/plugins/backwpup/)
	* [WordPress Backup to Dropbox](https://wordpress.org/plugins/wordpress-backup-to-dropbox/)
* Formularios
	* [Contact Form 7](https://wordpress.org/plugins/contact-form-7/)
* Optimización de Imágenes
	* [EWWW Image Optimizer](https://wordpress.org/plugins/ewww-image-optimizer/)
	* [Manual Image Crop](https://wordpress.org/plugins/manual-image-crop/)
	* [Regenerate Thumbnails](https://wordpress.org/plugins/regenerate-thumbnails/)
* Galerías y Sliders
	* [HUGE-IT Gallery](https://wordpress.org/plugins/gallery-images/)
	* [WP Slick Slider and Image Carousel](https://wordpress.org/plugins/wp-slick-slider-and-image-carousel/)
	* [Slider WD](https://wordpress.org/plugins/slider-wd/)
	* [Post Slider](https://wordpress.org/plugins/post-slider-wd/)
	* [HUGE-IT Lightbox](https://wordpress.org/plugins/lightbox/)
	* [Lightbox Pop](https://wordpress.org/plugins/lightbox-pop/)
* Imágenes Responsive
	* [Responsify WP](https://es-mx.wordpress.org/plugins/responsify-wp/)
	* [RICG Responsive Images](https://wordpress.org/plugins/ricg-responsive-images/)
* Videos Responsive
	* [Advanced Responsive Video Embedder](https://wordpress.org/plugins/advanced-responsive-video-embedder/)
	* [Shortcake (Shortcode UI)](https://wordpress.org/plugins/shortcode-ui/)
* Paginación
	* [WP-PageNavi](https://wordpress.org/plugins/wp-pagenavi/)
	* [Infinite Scroll](http://www.infinite-scroll.com/)
	* [Infinite Scroll and Load More Ajax Pagination](https://wordpress.org/plugins/infinite-scroll-and-load-more-ajax-pagination/)
* Inserción de Código
	* [Insert PHP](https://wordpress.org/plugins/insert-php/)
	* [Ajax Custom CSS/JS](https://wordpress.org/plugins/ajax-awesome-css/)
	* [Easy Custom Css/Js](https://wordpress.org/plugins/easy-custom-cssjs/)
	* [Simple Custom CSS](https://wordpress.org/plugins/simple-custom-css/)
	* [Simple Custom CSS and JS](https://wordpress.org/plugins/custom-css-js/)
	* [Sublime Custom CSS Editor](https://wordpress.org/plugins/sublime-custom-css-editor/)
	* [Sublime Custom JS Editor](https://wordpress.org/plugins/sublime-custom-js-editor/)
* Soporte SASS y SCSS
	* [WP-SCSS](https://wordpress.org/plugins/wp-scss/)
	* [Tuxedo CSS Editor](https://wordpress.org/plugins/tuxedo-css-editor/)
	* [Sassify](https://wordpress.org/plugins/sassify/)
* Categorias y Publicaciones
	* [WP No Base Permalink](https://wordpress.org/plugins/wp-no-base-permalink/)
	* [WP Most Popular](https://wordpress.org/plugins/wp-most-popular/)
	* [Multiple Featured Images](https://wordpress.org/plugins/multiple-featured-images/)
* Campos Adicionales
	* [Meta Box](https://metabox.io/)
	* [Advanced Custom Fields](https://wordpress.org/plugins/advanced-custom-fields/)
* Social Media & Marketing
	* [Social Share Buttons - Social Pug](https://wordpress.org/plugins/social-pug/)
	* [Simple Share Buttons Adder](https://wordpress.org/plugins/simple-share-buttons-adder/)
	* [Digg Digg](https://wordpress.org/plugins/digg-digg/)	
	* [Social Count Plus](https://wordpress.org/plugins/social-count-plus/)
	* [Share Buttons by Add This](https://wordpress.org/plugins/addthis/)
	* [Social Counter for WordPress - AccessPress Social Counter](https://wordpress.org/plugins/accesspress-social-counter/)
* Adaptive Design
	* [Any Mobile Theme Switcher](https://wordpress.org/plugins/any-mobile-theme-switcher/)
	* [User Agent Themes Switcher](https://wordpress.org/plugins/useragent-themes-switcher/)
* Cookies
	* [Cookie Consent](https://wordpress.org/plugins/uk-cookie-consent/)
	* [Cookie Bar](https://wordpress.org/plugins/cookie-bar/)
* Administrador de Archivos
	* [File Manager](https://wordpress.org/plugins/wp-file-manager/)
	* [File Manager](https://wordpress.org/plugins/file-manager/)
* Google
	* [Google Analytics](https://wordpress.org/plugins/googleanalytics/)
	* [Google Analytics by MonsterInsights](https://wordpress.org/plugins/google-analytics-for-wordpress/)
	* [WP Google Fonts](https://wordpress.org/plugins/wp-google-fonts/)
	* [Google Map](https://wordpress.org/plugins/gmap-embed/)
	* [Google Map](https://wordpress.org/plugins/wd-google-maps/)
	* [YouTube Embed WordPress](https://wordpress.org/plugins/youtube-video-player/)
	* [YouTube](https://wordpress.org/plugins/youtube-embed-plus/)
	* [Translate WordPress with GTranslate](https://wordpress.org/plugins/gtranslate/)
* SEO
	* [Jetpack by WordPress.com](https://wordpress.org/plugins/jetpack/)
	* [Yoast SEO](https://wordpress.org/plugins/wordpress-seo/)
	* [itemprop WP for SERP/SEO Rich snippets](https://wordpress.org/plugins/itempropwp/)
* Cache
	* [WP Super Cache](https://wordpress.org/plugins/wp-super-cache/)
	* [W3 Total Cache](https://wordpress.org/plugins/w3-total-cache/)
* Usuarios
	* [User Roles and Capabilities](https://wordpress.org/plugins/user-roles-and-capabilities/)
	* [User Groups](https://wordpress.org/plugins/user-groups/)
	* [Paid Memberships Pro](https://wordpress.org/plugins/paid-memberships-pro/)
* Comentarios
	* [Comments Evolved for WordPress](https://wordpress.org/plugins/gplus-comments/)
	* [Akismet](https://wordpress.org/plugins/akismet/)
	* [Disqus Comment System](https://wordpress.org/plugins/disqus-comment-system/)
* Listas de Correo
	* [MailChimp for WP](https://wordpress.org/plugins/mailchimp-for-wp/)
	* [MailPoet Newsletters](https://wordpress.org/plugins/wysija-newsletters/)
* Foros y Comunidades
	* [BuddyPress](https://wordpress.org/plugins/buddypress/)
	* [bbPress](https://wordpress.org/plugins/bbpress/)
* Comercio Electrónico
	* [WooCommerce](https://wordpress.org/plugins/woocommerce/)
		* [Estadísticas del Uso de Plataformas Ecommerce](https://trends.builtwith.com/shop)
		* [Sitio Web](https://woocommerce.com/)
* Configurar la Página de Login
	* [Custom Login Page Customizer](https://wordpress.org/plugins/login-customizer/)
	* [WP Customize Login Page](https://wordpress.org/plugins/wp-customize-login-page/)
	* [Customize WordPress Login Page](https://wordpress.org/plugins/admin-custom-login/)
	* [Custom Login Page by SeedProd](https://wordpress.org/plugins/custom-login-page-wp/)
* Pages Builders
	* [Page Builder by SiteOrigin](https://wordpress.org/plugins/siteorigin-panels/)
	* [Elementor Page Builder](https://wordpress.org/plugins/elementor/)
		* [Sitio Web](https://elementor.com/)
		* [Tutoriales](http://www.arturogarcia.com/elementor-page-builder/)
* Otros
	* [Loco Translate](https://wordpress.org/plugins/loco-translate/)
	* [Max Mega Menu](https://wordpress.org/plugins/megamenu/)

**[⬆ regresar al índice](#Índice)**