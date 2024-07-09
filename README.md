Letra del Proyecto UTU ISBO Tecnicatura 2024:

Especificación de Requisitos de Software (ERS)

1. Introducción	3
1. Introducción	3
1.0 Marco reglamentario	3
1.0 Marco reglamentario	3
1.1 Propósito	3
1.1 Propósito	3
1.2 Alcance	3
1.2 Alcance	3
1.3 Definiciones, Acrónimos y Abreviaturas	3
1.3 Definiciones, Acrónimos y Abreviaturas	3
1.4 Referencias	3
1.4 Referencias	3
1.5 Descripción General	3
1.5 Descripción General	3
2. Requisitos Generales	4
2. Requisitos Generales	4
2.1 Requisitos del Usuario	4
2.1 Requisitos del Usuario	4
2.2 Suposiciones y Dependencias	4
2.2 Suposiciones y Dependencias	4
3. Requisitos Funcionales	4
3. Requisitos Funcionales	4
3.1 Gestión de Usuarios	4
3.1 Gestión de Usuarios	4
3.1.1 Inicio de Sesión	4
3.1.1 Inicio de Sesión	4
3.1.2 Cerrar Sesión	4
3.1.2 Cerrar Sesión	4
3.2 Gestión de Trabajadores	4
3.2 Gestión de Trabajadores	4
3.2.1 Ver Trabajadores	4
3.2.1 Ver Trabajadores	4
3.2.2 Agregar Trabajador	4
3.2.2 Agregar Trabajador	4
3.3 Página de Contacto	5
3.3 Página de Contacto	5
4. Requisitos No Funcionales	5
4. Requisitos No Funcionales	5
4.1 Rendimiento	5
4.1 Rendimiento	5
4.2 Usabilidad	5
4.2 Usabilidad	5
4.3 Seguridad	5
4.3 Seguridad	5
4.4 Compatibilidad	5
4.4 Compatibilidad	5
4.5 Mantenibilidad	5
4.5 Mantenibilidad	5
5. Restricciones	5
5. Restricciones	5
6. Aceptación	5
6. Aceptación	5
7. ANEXOS	6
7. ANEXOS	6



1. Introducción
1.0 Marco reglamentario
El siguiente documento contiene información sobre el segundo parcial del CTT de Redes y Software para la asignatura Introducción a la programación PHP. El obligatorio puede ser realizado en equipos de hasta 3 personas. Donde se deberá de entregar en un archivo .zip a la plataforma campus virtual lo siguiente:
Código fuente de la aplicación (8 puntos)
Carta de presentación del equipo de trabajo (ver anexo) (1 punto)
Documento que detalla el uso de la aplicación con capturas de pantalla (2 puntos)
Video de no más de 2 min en el cual se explique como funciona la aplicación (puede ser subido a cualquier plataforma de alojamiento de videos) (1 punto)
FECHA DE ENTREGA Y DEFENSA: 8 DE JULIO
1.1 Propósito
El propósito de este documento es detallar los requisitos para el desarrollo de una aplicación web para la gestión de trabajadores en una empresa. Esta aplicación permitirá a los usuarios gestionar la información de los trabajadores, incluyendo el nombre, apellido, puesto de trabajo y fecha de cumpleaños.
1.2 Alcance
La aplicación será desarrollada como una aplicación web que gestionará los datos de los trabajadores utilizando arreglos globales, dado que no se implementará una base de datos ni programación orientada a objetos.
1.3 Definiciones, Acrónimos y Abreviaturas
Aplicación Web: Programa que los usuarios pueden utilizar a través de un navegador web.
ERS: Especificación de Requisitos de Software.
Array Global: Variable de tipo arreglo que es accesible desde cualquier parte del programa.
Array Asociativo: Tipo de arreglo que utiliza claves asociadas a valores, similar a un diccionario en otros lenguajes de programación.
1.4 Referencias
No aplicable.
1.5 Descripción General
Esta aplicación permitirá a los usuarios gestionar la lista de trabajadores de una empresa, ofreciendo funcionalidades básicas como iniciar sesión, visualizar la lista de trabajadores, agregar nuevos trabajadores, contactar para reportar errores y cerrar sesión.
2. Requisitos Generales
2.1 Requisitos del Usuario
El sistema debe permitir a los usuarios iniciar sesión utilizando un array global de usuarios.
El sistema debe mostrar una lista de trabajadores utilizando un array asociativo.
El sistema debe permitir agregar nuevos trabajadores a la lista.
El sistema debe proporcionar una página de contacto para reportar errores.
El sistema debe permitir a los usuarios cerrar sesión.
2.2 Suposiciones y Dependencias
Los usuarios tendrán acceso a un navegador web compatible.
El sistema se desarrollará sin el uso de bases de datos o programación orientada a objetos.
3. Requisitos Funcionales
3.1 Gestión de Usuarios
3.1.1 Inicio de Sesión
Descripción: El sistema debe permitir a los usuarios iniciar sesión.
Entrada: Nombre de usuario y contraseña.
Proceso: Validar las credenciales contra el array global de usuarios.
Salida: Acceso a la aplicación si las credenciales son válidas, mensaje de error si no lo son.
3.1.2 Cerrar Sesión
Descripción: El sistema debe permitir a los usuarios cerrar sesión.
Entrada: Ninguna.
Proceso: Terminar la sesión del usuario.
Salida: Redirección a la página de inicio de sesión.
3.2 Gestión de Trabajadores
3.2.1 Ver Trabajadores
Descripción: El sistema debe mostrar una lista de todos los trabajadores.
Entrada: Ninguna.
Proceso: Obtener los datos del array asociativo de trabajadores.
Salida: Mostrar la lista de trabajadores con sus datos.
3.2.2 Agregar Trabajador
Descripción: El sistema debe permitir agregar un nuevo trabajador.
Entrada: Nombre, apellido, puesto de trabajo y fecha de cumpleaños.
Proceso: Añadir los datos al array asociativo de trabajadores.
Salida: Confirmación de que el trabajador ha sido agregado.
3.3 Página de Contacto
Descripción: El sistema debe proporcionar una página de contacto para reportar errores.
Entrada: Información de contacto y descripción del error.
Proceso: Mostrar un formulario de contacto.
Salida: Confirmación de que el mensaje ha sido enviado.
4. Requisitos No Funcionales
4.1 Rendimiento
El sistema debe ser capaz de manejar hasta 100 usuarios y 1000 trabajadores sin degradación significativa del rendimiento (opcional).
4.2 Usabilidad
La interfaz de usuario debe ser intuitiva y fácil de usar.
4.3 Seguridad
Las credenciales de los usuarios deben ser manejadas de manera segura en lo posible.
El sistema debe garantizar que solo usuarios autenticados puedan acceder a la lista de trabajadores y a las funcionalidades de gestión.
4.4 Compatibilidad
La aplicación debe ser compatible con los navegadores web modernos más comunes (Chrome, Firefox, Safari, Edge).
4.5 Mantenibilidad
El código debe estar bien documentado para facilitar futuras mejoras y mantenimiento.
5. Restricciones
No se utilizarán bases de datos.
No se implementará programación orientada a objetos.
Se utilizarán únicamente arreglos globales para manejar los datos.
6. Aceptación
El proyecto se considerará completo y aceptado cuando la nota de la aplicación y la nota de la defensa sean superior a 7. 

7. ANEXOS
CARTA DE PRESENTACIÓN
