## Pour utiliser Wordpress avec Docker
### Téléchargement

Télécharge ce repository qui a les deux documents:

 * docker-compose.yml
 * _README.md_

Pour vérifier le téléchargement, tape:
```
$ cd dockerbuild-wordpress
$ ls
```

Tu dois voir le deux documents listé ci-dessus.

---
### Wordpress et Docker Compose

Tire l'image de WordPress.
```
docker pull wordpress
```

Installe ```docker-compose``` dans le directory.

```
$ sudo apt install docker-compose
```

Vérifie que ```docker-compose``` est dans sa version la plus récente.

```
$ sudo -i
```

```
#curl -L "https://github.com/docker/compose/releases/download/1.9.0/docker-compose-$(uname -s)-$(uname -m)" -o /usr/local/bin/docker-compose

#chmod +x /usr/local/bin/docker-compose

#exit
```

Télécharge le ```docker-compose``` document du projet:

 * _docker-compose.yml_

Si nécessaire, tu peux éditer ce document avec 'nano'.

```
$ nano docker-compose.yml
```

---
### Lancement

Cree et lance l'image de WordPress en utilisant ce code:

```
$ docker run --name wordpressdb -e password=password -e wordpress=wordpress -d mysql:latest
```

Finalment, lance le ```docker-compose``` fichier.

```
$ docker-compose up -d
```
---

