## Pour utiliser WordPress avec Docker
### Téléchargement

Télécharge ce repository qui a les deux documents:

 * _docker-compose.yml_
 * _README.md_

Pour vérifier le téléchargement, tape:
```
$ ls
```

Tu dois voir les deux documents listés ci-dessus.

---
### Docker Compose

Installe ```docker-compose``` dans le directory.

```
$ sudo apt install docker-compose
```

Vérifie que ```docker-compose``` est dans sa version la plus récente.

```
$ sudo curl -L "https://github.com/docker/compose/releases/download/1.9.0/docker-compose-$(uname -s)-$(uname -m)" -o /usr/local/bin/docker-compose

$ sudo chmod +x /usr/local/bin/docker-compose

```

---
### Lancement

Crée et lance l'image de WordPress en utilisant ce code:

```
$ docker run --name wordpressdb -e password=password -e wordpress=wordpress -d mysql:latest
```

Finalement, lance le fichier ```docker-compose.yml``` .

```
$ docker-compose up -d
```

Recherche "localhost:8080" sur un navigateur pour voir la page de connexion de WordPress.

(Tu peux changer le nombre du port dans le fichier ```docker-compose.yml``` .)

Maintenant, tu peux créer ton application WordPress 

---

