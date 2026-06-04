# Sistema de Perfil Universitario - SIS-500

Aplicacion web desarrollada como proyecto final del curso de Programacion Avanzada
en la Universidad Privada San Francisco de Asis.

El sistema funciona como un portafolio academico personal, donde se muestran datos del estudiante,
materias cursadas, habilidades y un formulario de contacto con validacion.

## Tecnologias utilizadas

* PHP 8.x
* Laravel 11.x
* Blade
* CSS3
* MySQL con XAMPP
* Git
* GitHub

## Funcionalidades

* Pagina de inicio con datos del estudiante
* Pagina "Sobre mi" con habilidades
* Listado de materias con notas, promedio y estados
* Modelo `Materia` usando Eloquent
* Base de datos MySQL para almacenar materias
* Formulario de contacto con validacion de Laravel
* Plantilla base reutilizable con `layouts.app`
* Estilos personalizados con CSS
* Control de versiones con Git
* Repositorio remoto en GitHub

## Estructura principal del proyecto

```txt
mi-proyecto/
├── app/
│   ├── Http/Controllers/
│   │   ├── PaginaController.php
│   │   └── ProductoController.php
│   └── Models/
│       └── Materia.php
├── database/
│   ├── migrations/
│   └── seeders/
│       └── MateriaSeeder.php
├── public/
│   └── css/
│       └── style.css
├── resources/views/
│   ├── layouts/
│   │   └── app.blade.php
│   ├── inicio.blade.php
│   ├── sobre-mi.blade.php
│   ├── materias.blade.php
│   └── contacto.blade.php
└── routes/
    └── web.php
```

## Rutas principales

| Ruta        | Descripcion                             |
| ----------- | --------------------------------------- |
| `/`         | Pagina de inicio                        |
| `/sobre-mi` | Informacion personal y habilidades      |
| `/materias` | Listado de materias desde base de datos |
| `/contacto` | Formulario de contacto                  |

## Instalacion local

1. Clonar el repositorio:

```bash
git clone https://github.com/Drapsito/mi-proyectoPA.git
```

2. Entrar a la carpeta del proyecto:

```bash
cd mi-proyectoPA
```

3. Instalar dependencias de PHP:

```bash
composer install
```

4. Copiar el archivo de variables de entorno:

```bash
cp .env.example .env
```

En Windows tambien se puede usar:

```bash
copy .env.example .env
```

5. Generar la clave de la aplicacion:

```bash
php artisan key:generate
```

6. Configurar la base de datos en el archivo `.env`:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=mi_proyecto
DB_USERNAME=root
DB_PASSWORD=
```

7. Crear la base de datos `mi_proyecto` en phpMyAdmin.

8. Ejecutar las migraciones:

```bash
php artisan migrate
```

9. Ejecutar el seeder de materias:

```bash
php artisan db:seed --class=MateriaSeeder
```

10. Levantar el servidor local:

```bash
php artisan serve
```

11. Abrir en el navegador:

```txt
http://127.0.0.1:8000
```

## Uso de Git

El proyecto utiliza Git para controlar versiones.

Comandos principales usados:

```bash
git status
git add .
git commit -m "feat: proyecto Laravel inicial con estructura completa"
git switch -c feat/mejora-visual
git merge feat/mejora-visual
git log --oneline
git tree
```

## Estado del proyecto

El proyecto se encuentra en desarrollo academico y fue subido a GitHub como parte del laboratorio de Git y GitHub.

## Autor

**Julian Quis**
Estudiante de Ingenieria de Sistemas - USFA
GitHub: [@Drapsito](https://github.com/Drapsito)
