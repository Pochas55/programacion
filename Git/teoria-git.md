# Herramientas Frontend

![Herramientas Frontend](http://bextlan.com/img/para-cursos/herramientas-frontend.jpg)

## Índice

1. [Git](#git)
1. [GitHub](#github)
1. [MarkDown](#markdown)
1. [Más de Git & GitHub](#más-de-git--github)

## Git

![Git](http://bextlan.com/img/para-cursos/logo-git.png)

#### Software de Control de versiones

[Git](https://git-scm.com/) es un software de control de versiones distribuido y descentralizado que permite a un equipo de desarrolladores trabajar sobre el mismo código.

#### Control de versiones distribuido

Se denomina **"distribuido"** porque cada miembro del equipo dispone de una copia completa del código.

![Git es Distribuido](http://bextlan.com/img/para-cursos/git-distributed.png)

#### Control de versiones descentralizado

Los miembros del equipo pueden enviarse código, recibirlo y desarrollar funcionalidades de forma conjunta y separada del servidor central.
![Git es Descentralizado](http://bextlan.com/img/para-cursos/git-centr-decentr.png)

### Ventajas de usar Git

![Estadísticas Git](http://bextlan.com/img/para-cursos/git-estadisticas.png)

* Estándar actual
* Código colaborativo, versionado y distribuido
* Recuperación de archivos
* Mayor control
* Shorcuts y Plugins
* Mejora tu productividad

### Instalación

* [Git](https://git-scm.com/downloads)
* [Source Tree Interfaz Gráfica](https://www.sourcetreeapp.com/)

### Configurando Git por primera vez

```git
$ > git --version
$ > git config --global user.name "Jonathan MirCha"
$ > git config --global user.email jonmircha@gmail.com
$ > git config --global user.ui true
$ > git config --global core.editor nano
$ > git config --list
$ > git help [comando a buscar]
```

### Zonas y Flujo de trabajo básico en Git

#### 1. Directorio de trabajo

Modificas una serie de archivos en tu directorio de trabajo.

![Working Area](http://bextlan.com/img/para-cursos/workingarea.png)

#### 2. Área de preparación

Preparas los archivos, añadiéndolos a tu área de preparación.

![Staging Area](http://bextlan.com/img/para-cursos/stagingarea.png)

#### 3. Repositorio Git

Confirmas los cambios, lo que toma los archivos tal y como están en el área de preparación y almacena esa copia instantánea de manera permanente en tu directorio de Git.

![Repositorio](http://bextlan.com/img/para-cursos/repositorio.png)

### Inicializar Git en un directorio local

* **`git init`** crea un directorio oculto **`.git`** donde se almacena toda la información utilizada por git
* El comando UNIX **`touch`** nos crea un nuevo archivo
* En el archivo **`.gitignore`** incluimos todo lo que NO queramos incluir en nuestro repositorio. Lo podemos crear con [gitignore.io](https://www.gitignore.io/)
* **`git status`** nos muestra el listado de archivos nuevos (untracked), borrados o editados

```git
$ > mkdir carpeta
$ > cd carpeta
$ > touch README.md
$ > touch .gitignore
$ > git init
$ > git status
```

### Plataformas web que trabajan con Git

![Git no es GitHub](http://bextlan.com/img/para-cursos/git-github.png)

* [GitHub](https://github.com/)
* [GitLab](https://gitlab.com/)
* [BitBucket](https://bitbucket.org/)
* etc.

### Más Info

* [Git - La guía sencilla](http://rogerdudler.github.io/git-guide/index.es.html)
* [Libro Pro Git](https://git-scm.com/book/es/v2)

**[⬆ regresar al índice](#Índice)**


## GitHub

#### [Crea tu cuenta](https://github.com/)

![GitHub](http://bextlan.com/img/para-cursos/octocat.png)

### Flujo de trabajo básico con Git & GitHub

El flujo se distribuye en tres estados locales y uno remoto

* Estados Locales:
	* **Working Dir:** El directorio donde almacenamos los archivos
	* **Staging:** El estado en el que avisamos a Git de que hemos realizado cambios
	* **HEAD:** El puntero hacia el último bloque de código (commit)
* Estado Remoto:
	* **Remote Origin:** El directorio remoto donde almacenamos los archivos en GitHub

#### Working Dir

El primer nivel es nuestra carpeta de trabajo. Podemos añadir, quitar, editar archivos y Git sólo se encargará de controlar los archivos que han sido modificados.

![Working Dir](http://bextlan.com/img/para-cursos/git-level-wd.png)

Una vez creados, modificados, añadidos o borrados los archivos al **working dir** los pasamos al **staging** mediante:

```git
$ > git add [nombre de archivo(s) o directorio(s)]
$ > git add --all //todos los archivos
$ > git add -A //shortcut todos los archivos
$ > git add . //otro shortcut todos los archivos
```

#### Staging

En el segundo nivel nuestros archivos están preparados para ser empaquetados. Podemos seguir trabajando y repetir el proceso tantas veces como necesitemos.

![Staging](http://bextlan.com/img/para-cursos/git-level-staging.png)

Cuando hemos completado un conjunto de cambios, los "empaquetamos" mediante la instrucción **`commit`** y los colocamos en el **HEAD** mediante:

```git
$ > git commit -m 'mensaje descriptivo'
```

#### HEAD

Nuestro conjunto de cambios está listo para enviar al repositorio remoto. El **HEAD** es nuestra "bandeja de salida". Podemos seguir trabajando y crear más "commits".

![HEAD](http://bextlan.com/img/para-cursos/git-level-head.png)

#### Remote Origin

Ahora vincularemos nuestro repositorio local con uno remoto en Github.

Una vez creado el repositorio remoto en GitHub lo "vinculamos" a nuestro repositorio local mediante:

```git
$ > git remote add origin https://github.com/usuario/repositorio.git
```

Una vez indicando a Git que tenemos un repositorio remoto podemos enviar el conjunto de cambios contenidos en nuestro **HEAD**. Por defecto Git denomina **origin** a nuestro repositorio remoto y crea una rama llamada **master** mediante:

```git
$ > git push -u origin master //la primera vez que vinculamos el repositorio remoto con el local
$ > git push //para las subsecuentes actualizaciones
```

![Remote Origin](http://bextlan.com/img/para-cursos/git-level-origin-master.png)

#### Sincronizando versiones

Antes de enviar nuestros cambios tenemos que bajarnos la última versión del repositorio remoto, obtenemos los últimos cambios de **origin** y los combinamos con la rama **master**

Cuando obtenemos archivos del repositorio remoto a nuestra copia local Git obtiene todos los archivos nuevos que se hayan añadido y elimina los que se hayan quitado.

```git
$ > git pull -u origin master //la primera vez que descargamos el repositorio remoto al local
$ > git pull //para las subsecuentes actualizaciones
```

![Git Pull](http://bextlan.com/img/para-cursos/git-level-pull.png)

#### Revisando el Historial

**`git log`** nos permite conocer todo el historial de un proyecto, con la información de la fecha, el autor y id de cada cambio

```git
$ > git log
$ > git log --oneline
$ > git log > commits.txt
```

### Más Info

* [Guías Oficiales de GitHub](https://guides.github.com/)
* [Try GitHub](https://try.github.io)

**[⬆ regresar al índice](#Índice)**


## Markdown
	* [¿Qué es?](http://whatismarkdown.com/)
	* [Guía](http://joedicastro.com/pages/markdown.html)
	* [Cheatsheet](https://github.com/adam-p/markdown-here/wiki/Markdown-Cheatsheet)
	* [Tutorial interactivo](http://www.markdowntutorial.com/)
	* [Dillinger - md en vivo](http://dillinger.io/)
	* [Hashify  - md en vivo](http://hashify.me/)

**[⬆ regresar al índice](#Índice)**


## Más de Git & GitHub

### Ramas

Una rama nos permite aislar una nueva funcionalidad en nuestro código que después podremos añadir a la versión principal.

```git
$ > git branch [nombre-rama] //crear rama
$ > git branch -d [nombre-rama] //eliminar rama
$ > git branch -D [nombre-rama] //eliminar rama (forzado)
$ > git branch //listar ramas
```

### Moverse en el Historial

Podemos desplazarnos en el historial del proyecto hacia atrás o adelante en cambios o ramas , sin afectar el proyecto como tal.

```git
$ > git checkout [nombre-rama] //cambiar a una rama
$ > git checkout [id-commit] //cambiar a un cambio
```

### Resetear

Podemos eliminar el historial de cambios del proyecto hacia adelante con respecto de un punto de referencia.

```git
$ > git reset --soft //borra el HEAD
$ > git reset --mixed //borra el HEAD y el Staging
$ > git reset --hard //borra el HEAD, Staging y WorkingDir
```

### Fusiones

Une dos ramas. Para hacer una fusión necesitamos:

1. Situarnos en la rama que se quedará con el contenido fusionado.
1. Fusionar

Cuando se fusionan ramas se pueden dar 2 resultados diferentes:

* **Fast-Forward**: La fusión se hace automática, no hay conflictos por resolver
* **Manual Merge**: La fusión hay que hacerla manual, para resolver conflictos de duplicación de contenido

```git
$ > git checkout [rama-principal] //Nos cambiamos a la rama principal que quedará de la fusión
$ > git merge [rama-secundaria] //Ejecutamos el comando merge con la rama secundaria a fusionar
```

### Etiquetas

Con esta opción git nos permite versionar nuestro código, librería o proyecto

```git
$ > git tag [numero-versión] //crear una etiqueta
$ > git show [numero-versión] //mostrar información de una etiqueta
$ > git tag //listar etiquetas

$ > git add .
$ > git commit -m 'v1.0.0'

$ > git push origin [numero-versión] //compartir etiqueta en GitHub
```

### Clonar repositorios

```git
$ > git clone [url-repositorio]
```

### GitHub Pages

[**`gh-pages`**](https://pages.github.com/) es una rama especial para crear un sitio web a tu proyecto alojado directamente en tu repositorio de Github.

* URL del repositorio: **https://github.com/usuario/repositorio**
* URL del sitio: **https://usuario.github.io/repositorio**

```git
$ > git init
$ > git add .
$ > git commit -m 'Creando sitio web en GitHub Pages'

$ > git branch gh-pages
$ > git checkout gh-pages

$ > git remote add origin https://github.com/usuario/repositorio.git
$ > git push origin gh-pages

$ > git pull origin gh-pages
```

**[⬆ regresar al índice](#Índice)**