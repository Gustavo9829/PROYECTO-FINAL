# PROYECTO-FINAL
Toma de Pedidos a Domicilio - Infraestructura
Este proyecto tiene como objetivo crear una infraestructura completa utilizando CloudFormation para gestionar todos los recursos en un solo lugar. La infraestructura soportará una aplicación de toma de pedidos a domicilio para un restaurante.

Requisitos
Antes de comenzar, asegúrate de tener instalados los siguientes componentes:

AWS CLI
AWS SAM CLI
Docker
Despliegue de la Infraestructura
Sigue los pasos a continuación para desplegar la infraestructura en AWS utilizando CloudFormation:

Clona este repositorio en tu máquina local:
bash
Copy code
git clone <URL_DEL_REPOSITORIO>
Accede al directorio del proyecto:
bash
Copy code
cd <NOMBRE_DEL_PROYECTO>
Configura tu perfil de AWS:
bash
Copy code
aws configure
Despliega la infraestructura utilizando AWS SAM:
bash
Copy code
sam deploy --guided
Durante el despliegue, se te solicitará ingresar información como el nombre del stack, la región de AWS, etc. Proporciona los valores correspondientes según tus necesidades.

Espera a que el despliegue se complete exitosamente. Una vez finalizado, se mostrará en la salida de la consola la URL del API Gateway.
Uso del API Gateway
El API Gateway proporciona dos servicios para interactuar con la aplicación:

POST: Crear un pedido
Endpoint: <URL_DEL_API_GATEWAY>/pedido

Utiliza este servicio para crear un nuevo pedido. Debes enviar una solicitud POST con el siguiente cuerpo en formato JSON:

json
Copy code
{
  "cliente": {
    "nombre": "<NOMBRE_COMPLETO>",
    "direccion": "<DIRECCION>",
    "telefono": "<TELEFONO>",
    "correo": "<CORREO_ELECTRONICO>"
  },
  "pedido": {
    "producto": "<PRODUCTO>",
    "cantidad": <CANTIDAD>,
    "valor_unidad": <VALOR_UNIDAD>,
    "valor_total": <VALOR_TOTAL>
  }
}
GET: Buscar un pedido por ID
Endpoint: <URL_DEL_API_GATEWAY>/pedido/{id}

Utiliza este servicio para buscar un pedido por su ID. Reemplaza {id} en la URL con el ID del pedido que deseas consultar.

Notificaciones
Después de realizar un pedido, el cliente recibirá una notificación por correo electrónico con los detalles del pedido. Asegúrate de tener correctamente configurado el servicio de correo electrónico en la infraestructura.
