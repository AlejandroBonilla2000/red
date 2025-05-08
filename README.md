# Sistema de Login con Formulario Dinámico

Este es un sistema de login básico con PHP y MySQL que permite a los usuarios ingresar y enviar un formulario con sus datos, los cuales se almacenan en la base de datos.

## Requisitos

- **PHP** (preferiblemente versión 7.4 o superior)
- **MySQL** o **MariaDB**
- **XAMPP** o cualquier servidor local compatible con PHP y MySQL

## Instalación

1. **Clona el repositorio** o descarga los archivos a tu servidor local.
2. **Configura la base de datos**: 
   - Asegúrate de tener una base de datos llamada `login_system` y las tablas necesarias, ya que estos ya están configurados en el proyecto.
3. **Credenciales de Login**: Para probar el login, utiliza las siguientes credenciales de usuario que ya están predefinidas en la base de datos:

   - **Email**: `prueba@example.com`
   - **Contraseña**: `password123`

   Estas credenciales ya están registradas en la base de datos, por lo que puedes iniciar sesión directamente con estos valores.

### **Nota de seguridad**:
Recuerda que en un entorno de producción, las contraseñas deben ser cifradas de manera segura. Para este ejemplo, puedes utilizar la función `password_hash()` de PHP para almacenar las contraseñas de forma segura.

## Uso

1. **Acceder al sistema de login**: 
   - Navega a `index.html` y usa las siguientes credenciales para probar el login:
   
     **Email**: `prueba@example.com`  
     **Contraseña**: `password123`

2. **Enviar formulario**: Una vez logueado, serás redirigido al formulario de envío de datos. Al enviar el formulario, los datos se guardarán en la base de datos.

3. **Recibir mensajes de éxito o error**: Después de enviar el formulario, recibirás una notificación de éxito o error según si el envío fue exitoso.

## Estructura de Archivos