## Pour utiliser Wordpress avec Docker
---
### Docker Compose

Installe ```docker-compose``` sur ton directory.

```
$ sudo apt install docker-compose
```

Vérifie que ```docker-compose``` est dans sa version la plus récente.

```
$ sudo apt-get upgrade docker-engine
```

Télécharge le ```docker-compose``` document du projet:

 * _docker-compose.yml_

Si nécessaire, tu peux éditer ce document avec 'nano'.

```
$ nano docker-compose.yml
```

---
### Lancement

Cree et lance l'image du WordPress en utilisant ce code:

```
$ docker run --name wordpressdb -e password=password -e wordpress=wordpress -d mysql:latest
```

Finalment, lance le ```docker-compose``` fichier.

```
$ docker-compose up -d
```
---

