# Webservice en PHP para Enviar Correos

## Descripción
Este proyecto implementa un webservice en PHP que recibe datos a través de una solicitud POST, envía un correo electrónico al webmaster y devuelve una respuesta en formato JSON.

## Instalación
1. Subir los archivos a un servidor de alojamiento compartido.
2. Configurar el correo del webmaster en el archivo `sendemil.php`.

## Uso
### Endpoint
- **URL:** `/api/v1/send-email`
- **Método HTTP:** POST

### Parámetros
- `name` (string): Nombre del remitente
- `email` (string): Correo del remitente
- `message` (string): Mensaje a enviar

### Ejemplo de Solicitud
```bash
POST http://localhost/api-sendemail/v1/send-email.php
Content-Type: application/json

{
    "name": "John Doe",
    "email": "john@example.com",
    "message": "Hello, this is a test message!"
}
