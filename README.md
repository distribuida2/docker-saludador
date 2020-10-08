# Docker Saludador

## Ya nos vimos antes

Exacto! Este *saludador* es el proyecto que ya vimos como *docker-segundo-ejemplo*, solo que ahora lo tomaremos como punto de partida

### Construyamos la imágen y corramos un contenedor

Corremos el comando de abajo para construir la imágen y el -t indica que tag le queremos poner.

`docker build -t saludador:0.1 .`

Una vez que la imágen ya está construida, instanciamos un container de esa imágen.

`docker run -p 80:80 --name saludador saludador:0.1`

#### Preguntas

- ¿Qué es ese -v?
- ¿Y el -p?

### Referencias

- [Dockerfile reference](https://docs.docker.com/engine/reference/builder/)

### Hecho con ❤️amor❤️ para

Programación Distribuida II / Universidad Nacional de Avellaneda
