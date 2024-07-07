# Informe de Pruebas del Webservice
El objetivo de estas pruebas es verificar la funcionalidad del webservice en PHP que recibe datos mediante una solicitud POST en formato JSON, envía un correo electrónico al webmaster y devuelve una respuesta en formato JSON. Las pruebas se realizaron utilizando el plugin REST Client de VSCode.

## Detalles de Pruebas
### Prueba 1: Envío de Correo Exitoso
#### Descripción: 
Se envía una solicitud con todos los datos válidos para verificar que el correo se envía correctamente y se recibe una respuesta de éxito.
#### Solicitud:
http
Copiar código
POST http://tu-dominio.com/api/send-email
Content-Type: application/json

{
    "name": "John Doe",
    "email": "john@example.com",
    "message": "Hello, this is a test message!"
}
#### Respuesta Esperada:
json
Copiar código
{
    "status": "success",
    "message": "Correo enviado correctamente."
}
#### Respuesta Obtenida:
json
Copiar código
{
    "status": "success",
    "message": "Correo enviado correctamente."
}
#### Resultado: ✅ Aprobada
Prueba 2: Envío de Correo con Nombre Faltante
Descripción: Se envía una solicitud sin el nombre para verificar la validación de los datos.
Solicitud:
http
Copiar código
POST http://tu-dominio.com/api/send-email
Content-Type: application/json

{
    "name": "",
    "email": "john@example.com",
    "message": "Hello, this is a test message!"
}
Respuesta Esperada:
json
Copiar código
{
    "status": "error",
    "message": "Datos inválidos."
}
Respuesta Obtenida:
json
Copiar código
{
    "status": "error",
    "message": "Datos inválidos."
}
Resultado: ✅ Aprobada
Prueba 3: Envío de Correo con Email Inválido
Descripción: Se envía una solicitud con un email no válido para verificar la validación de los datos.
Solicitud:
http
Copiar código
POST http://tu-dominio.com/api/send-email
Content-Type: application/json

{
    "name": "John Doe",
    "email": "invalid-email",
    "message": "Hello, this is a test message!"
}
Respuesta Esperada:
json
Copiar código
{
    "status": "error",
    "message": "Datos inválidos."
}
Respuesta Obtenida:
json
Copiar código
{
    "status": "error",
    "message": "Datos inválidos."
}
Resultado: ✅ Aprobada
Prueba 4: Envío de Correo con Todos los Datos Faltantes
Descripción: Se envía una solicitud sin ningún dato para verificar la validación de los datos.
Solicitud:
http
Copiar código
POST http://tu-dominio.com/api/send-email
Content-Type: application/json

{
    "name": "",
    "email": "",
    "message": ""
}
Respuesta Esperada:
json
Copiar código
{
    "status": "error",
    "message": "Datos inválidos."
}
Respuesta Obtenida:
json
Copiar código
{
    "status": "error",
    "message": "Datos inválidos."
}
Resultado: ✅ Aprobada
### Conclusiones
Las pruebas realizadas confirman que el webservice maneja correctamente los datos de entrada, valida los campos necesarios y devuelve respuestas adecuadas tanto en casos de éxito como de error. Las pruebas han sido exitosas en todos los casos planteados.

Recomendaciones
Continuar monitoreando el comportamiento del webservice en un entorno de producción para detectar posibles errores no contemplados en estas pruebas.
Implementar pruebas adicionales para cubrir otros casos extremos y posibles vulnerabilidades de seguridad.
Apéndice: Ejecución de Pruebas
Las pruebas se realizaron utilizando el archivo test.http en VSCode con el plugin REST Client. Las respuestas obtenidas fueron verificadas manualmente para asegurar su exactitud.
